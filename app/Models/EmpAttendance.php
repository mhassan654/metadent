<?php

namespace App\Models;

use App\Modules\Metadent\AuthModule\src\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpAttendance extends Model
{
    use HasFactory;

    protected $fillable=['employee_id','state','time'];

    /**
     * Get the employee that owns the EmpAttendance
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
