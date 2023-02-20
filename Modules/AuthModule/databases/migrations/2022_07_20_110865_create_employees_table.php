<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('employees', function (Blueprint $table) {
            $table->id()->unsigned(true);
            $table->bigInteger('position_id')->unsigned(true);
            $table->bigInteger('duty_type_id')->unsigned()->nullable();
            $table->string('hire_date');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('maiden_name')->nullable();
            $table->string('email');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('home_email')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('alt_phone')->nullable();
            $table->string('cell_phone');
            $table->string('business_email');
            $table->string('business_phone');
            $table->string('branch_address');
            $table->string('ethnic_group')->nullable();
            $table->string('work_in_city')->default('no')->nullable();
            $table->string('work_permitt')->default('yes')->nullable();
            $table->decimal("gross_salary", 21, 2)->default('0.00');
            $table->string('phone');
            $table->bigInteger('city_id')->nullable();
            $table->string('alternative_phone')->nullable();
            $table->string('zipcode')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->decimal('basic_salary', 21, 2)->default('0.00')->nullable();
            $table->decimal('net_salary', 21, 2)->default('0.00')->nullable();
            $table->string('place_of_residence')->nullable();
            $table->string('tin_number');
            $table->bigInteger('employee_type_id')->unsigned();
            $table->integer('attendance_time_id');
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->integer('bank_ban_number')->nullable();
            $table->decimal('transport_allowance', 21, 2)->default('0.00')->nullable();
            $table->bigInteger('department_id')->unsigned()->nullable();
            $table->bigInteger('sub_department_id')->unsigned()->nullable();
            $table->bigInteger('rate_type')->unsigned()->nullable();
            $table->integer('rate');
            $table->integer('medical')->nullable();
            $table->integer('transportation')->nullable();
            $table->integer('monthly_working_hours')->nullable();
            $table->integer('family')->nullable();
            $table->integer('others_in_benefits')->nullable();
            $table->bigInteger('pay_frequency_id')->unsigned()->nullable();
            $table->string('edu_award')->nullable();
            $table->string('edu_awarding_institution')->nullable();
            $table->string('edu_awarding_date')->nullable();
            $table->string('edu_class_of_award')->nullable();
            $table->bigInteger('first_supervisor_id')->unsigned()->nullable();
            $table->bigInteger('second_supervisor_id')->unsigned()->nullable();
            $table->integer('reporting_to')->nullable();
            $table->string('emergency_person_name');
            $table->string('emergency_relationship');
            $table->string('emergency_phone');
            $table->string('emergency_another_phone');
            $table->string('emergency_home_phone');
            $table->string('emergency_address');
            $table->string('emergency_work_phone');
            $table->string('user_email')->nullable();
            $table->string('password')->nullable();
            $table->string('photo_url')->nullable();
            $table->tinyInteger('status')->nullable();



            // ============================================SET FROEIGN KEY CONSTRAINTS===================================

            $table->foreign('duty_type_id')->references('id')->on('duty_types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('position_id')->references('id')->on('positions')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('sub_department_id')->references('id')->on('departments')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

                 $table->foreign('department_id')->references('id')->on('departments')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('rate_type')->references('id')->on('rate_types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('pay_frequency_id')->references('id')->on('pay_frequencies')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

                $table->foreign('first_supervisor_id')->references('id')->on('supervisors')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

                $table->foreign('second_supervisor_id')->references('id')->on('supervisors')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('employees');
    }
}
