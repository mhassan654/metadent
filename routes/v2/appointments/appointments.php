<?php

use App\Http\Controllers\Api\v2\AppointmentsController;
use Illuminate\Support\Facades\Route;

// Route::group(['prefix' => 'appointments', 'middleware' => ['jwt.verify']], function () {
Route::group(['prefix' => 'appointments'], function () {

  // All the appointment route
  // Route::group(['middleware' => ['permission:View Appointments']], function () {

  Route::post('all', [AppointmentsController::class, 'index']);

  Route::post('appointments-today', [AppointmentsController::class, 'current_day_appointments']);

  // Specific appointment record route
  Route::post('appointment', [AppointmentsController::class, 'show']);

  // doctor appointments
  Route::post('doctor_appointments', [AppointmentsController::class, 'single_doctor_appointments']);


  // Create new appointment record route
  Route::post('create', [AppointmentsController::class, 'create_appointment']);

  // Edit appointment details route
  Route::post('update', [AppointmentsController::class, 'update_with_recurrence']);

  Route::post('rescheduling', [AppointmentsController::class, 'rescheduling']);

  // Edit appointment status route
  Route::post('update/status', [AppointmentsController::class, 'updateStatus']);

  // Edit appointment status route
  Route::post('extend', [AppointmentsController::class, 'extend_appointment']);

  // All the appointment route
  Route::post('status/all', [AppointmentsController::class, 'getStatus']);

  Route::post('confirm', [AppointmentsController::class, 'confirm_appointment']);

  Route::post('cancel', [AppointmentsController::class, 'cancel_appointment']);

  Route::post('close', [AppointmentsController::class, 'close_appointment']);

  Route::post('waitingroom', [AppointmentsController::class, 'waiting_room']);

  Route::post('doctor/waitingroom', [AppointmentsController::class, 'waiting_room_doctor']);

  Route::post('servingroom', [AppointmentsController::class, 'serving_room']);

  Route::post('closed', [AppointmentsController::class, 'closed_appointments']);

  Route::post('delete', [AppointmentsController::class, 'destroy']);

  Route::post('doctor/serve-patient', [AppointmentsController::class, 'serving_time']);

  Route::post('completed-appointments-today', [AppointmentsController::class, 'completed_appointments_today']);


  Route::post('update-with-recurrency', [AppointmentsController::class, 'update_with_recurrence']);

  Route::post('patient-appointments', [AppointmentsController::class, 'patient_appointments']);

  Route::post('cancel-recurring-appointments', [AppointmentsController::class, 'cancel_recurring_appointments']);

  Route::post('archive-recurring-appointments', [AppointmentsController::class, 'archive_recurring_appointments']);

  Route::post('restore-appointments', [AppointmentsController::class, 'restore_appointments']);

  //waiting patient list
  Route::post('waiting-patient-list', [AppointmentsController::class, 'waiting_patient_list']);

  //latest serving appointment
  Route::post('latest-serving-front-office-appointment', [AppointmentsController::class, 'front_office_department_appointment']);

  Route::post('appointments-counter', [AppointmentsController::class, 'appointments_counter']);

  Route::post('update-overdue-waiting-to missed', [AppointmentsController::class, 'update_waiting_appointments_to_missed']);

  Route::post('paginated-appointments', [AppointmentsController::class, 'paginated_appointments']);

  Route::post('dashboard-upcoming-appointments', [AppointmentsController::class, 'dashboard_upcoming_appointments']);

  Route::post('number-today-appointments', [AppointmentsController::class, 'number_current_day_appointments']);

  Route::get('download-pdf', [AppointmentsController::class, 'download_pdf']);

  Route::get('download-excel', [AppointmentsController::class, 'download_excel']);

  Route::get('download-csv', [AppointmentsController::class, 'download_csv']);

  Route::post('upcoming-appointments', [AppointmentsController::class, 'upcoming_appointments']);

  Route::post('past-appointments', [AppointmentsController::class, 'past_appointments']);
  Route::get('recall-appointments', [AppointmentsController::class, 'recallAppointments']);


  Route::get('download-patient-appointments-pdf', [AppointmentsController::class, 'download_patient_appointments_pdf']);

  Route::get('download-patient-appointments-csv', [AppointmentsController::class, 'download_patient_appointments_csv']);

  Route::get('download-patient-appointments-excel', [AppointmentsController::class, 'download_patient_appointments_excel']);

});
