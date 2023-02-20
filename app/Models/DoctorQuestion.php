<?php

namespace App\Models;

use App\Modules\Metadent\AuthModule\src\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorQuestion extends Model
{
    use HasFactory;

    protected $table = 'doctor_questions';

    protected $fillable = [
        'questions',
        'risks',
    ];

    public function doctor()
    {
        return $this->hasOne(Employee::class, 'id', 'doctor_id');
    }
}
