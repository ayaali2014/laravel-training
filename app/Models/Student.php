<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey  = 'stud_id';

    protected $fillable = ['stud_id', 'stud_name', 'email', 'stud_address'];

    public $timestamps = false;



}
