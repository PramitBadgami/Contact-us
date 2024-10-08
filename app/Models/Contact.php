<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $table = 'contact';

    public $fillable = ['name', 'email', 'phone', 'subject', 'message'];
    public $timestamps = true;

}
