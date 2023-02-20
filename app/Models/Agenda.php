<?php

namespace App\Models;

use App\Modules\Metadent\AuthModule\src\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agenda extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $softDelete = true;

    public function doctors(){
        return $this->belongsToMany(Employee::class, 'doctors_agendas');
    }
    /**
     * Get the appointmentType associated with the Agenda
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function appointmentType()
    {
        return $this->belongsTo(AppointmentType::class);
    }

}
