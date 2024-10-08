<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

        // The attributes that are mass assignable.
        protected $fillable = ['form_name', 'form_data', 'status', 'remarks'];

        // Cast the form_data attribute to an array.
        protected $casts = [
            'form_data' => 'array',
        ];
}