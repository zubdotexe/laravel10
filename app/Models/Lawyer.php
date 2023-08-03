<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;
    protected $table = 'lawyers';
    protected $primaryKey = 'id';

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
