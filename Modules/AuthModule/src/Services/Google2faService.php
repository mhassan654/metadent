<?php

namespace Metadent\AuthModule\Services;

use App\Mail\Verify2faCode;
use App\Services\Images\QrCodeService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use PragmaRX\Google2FAQRCode\Google2FA;

class Google2faService
{

    private static function generate2faSecretAndQRCode(string $email): array
    {
        $google2fa = app('pragmarx.google2fa');
        $registration_data["google2fa_secret"] = $google2fa->generateSecretKey();

        $twoFa = new Google2FA();
        $qr_code_url = $twoFa->getQRCodeUrl(
            config('app.name'),
            $email,
            $registration_data['google2fa_secret']
        );

        $data = QrCodeService::storeImage($qr_code_url);

        return [
            'filepath' => $data['filepath'],
            // 'QR_Image' => $qr_code_url,
            'secret' => $registration_data['google2fa_secret']
        ];
    }

    public static function checkUserEnabled2FA(Model $user)
    {
        if (!$user->google2fa_secret) {
            // send user an email to verify 2FA
            self::generate2faSecret($user);
            throw new \Exception('Check your email to enable 2fa login app to continue');
        }
        return true;
    }

    public static function generate2faSecret(Model $user): void
    {
        $data = self::generate2faSecretAndQRCode($user->email);
        $user->update([
            'google2fa_secret' => $data['secret']
        ]);

        $qr_code = $data["filepath"];

        // $qr_code = 'https://bbcb-102-222-234-152.in.ngrok.io/uploads/images/email/75b6effd3cc2195322a98543c580c9fd0a9f9141.png';

        // $qr_code = "https://media.istockphoto.com/id/1385983273/vector/qr-code-with-skull-and-crossbones-qr-code-scam-concept-flat-style-illustration.jpg?s=612x612&w=0&k=20&c=w_whc-_twqGOpPFxubcAnulgIuw_Wt79sFndLBNQhEw=";

        $details = [
            'title' => 'Two-step verification setup',
            'code' => $data['secret'],
            'firstName' => $user->first_name,
            'lastName' => $user->last_name,
            'qr_code' => $qr_code
        ];

        Mail::to($user->email)->send(new Verify2faCode($details));
        if(!Mail::failures()){
            unlink($qr_code);
        }
    }
}
