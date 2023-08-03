<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primaryKey = 'employee_id';

    // public function lawyer()
    // {
    //     return $this->hasOne(Lawyer::class);
    // }

    // Use the "deleting" event to handle the deletion process
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::deleting(function ($employee) {
    //         // If the employee is a lawyer, delete the corresponding lawyer record
    //         if ($employee->role == 'lawyer') {
    //             $employee->lawyer()->delete();
    //         }
    //     });
    // }
}
