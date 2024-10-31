<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'course',
        'year_level',
    ];

    public static function rules($id = null)
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email' . ($id ? ",$id" : ''),
            'course' => 'required|string|max:255',
            'year_level' => 'required|integer',
        ];
    }
}
