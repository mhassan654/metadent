<?php


use App\Http\Controllers\Api\v2\InvoicesController;
use Illuminate\Support\Facades\Route;

// Patients routes section
//Route::prefix("invoices",)->group(function(){
Route::group(['prefix' =>'invoices', 'middleware' => ['jwt.verify']],function(){
    // All the invoice route
    Route::post('all', [InvoicesController::class, 'index']);

    Route::post('latest', [InvoicesController::class, 'latest_invoices']);

    Route::post('paginated', [InvoicesController::class, 'paginated_invoices']);

    // Specific invoice record route
    Route::post('invoice', [InvoicesController::class, 'show']);

     // Specific invoice record route
     Route::post('delete', [InvoicesController::class, 'delete']);

    // Specific patient record route
    Route::post('patient', [InvoicesController::class, 'patient_invoices']);

    // Create new patient record route
    Route::post('create', [InvoicesController::class, 'store']);

    // Edit patient details route
    Route::post('edit', [InvoicesController::class, 'update']);

    // Fetch paid invoices route
    Route::post('paid', [InvoicesController::class, 'allPaidInvoices']);

        // Fetch unpaid invoices route
    Route::post('unpaid', [InvoicesController::class, 'unPaidInvoices']);

    // send invoice to patients
    Route::post('send-reminder',[InvoicesController::class, 'sendInvoice']);

    // send single invoice to patients
    Route::post('send-single-invoice',[InvoicesController::class, 'sendSingleInvoice']);

    Route::post('number',[InvoicesController::class, 'invoiceNumber']);

    Route::post('overdue-invoices',[InvoicesController::class,'overdue_invoices']);

    Route::post('recent-invoices',[InvoicesController::class,'recent_invoices']);

    Route::post('patient-invoice-number',[InvoicesController::class,'patient_paid_unpaid_invoices']);

    Route::post('daily-invoices', [InvoicesController::class, 'daily_invoices']);

    Route::get('download-pdf',[InvoicesController::class,'download_pdf']);

    Route::get('download-excel',[InvoicesController::class,'download_excel']);

    Route::get('download-csv',[InvoicesController::class,'download_csv']);

    Route::get('download-invoice/{id}',[InvoicesController::class,'download_invoice_details_pdf']);

});
