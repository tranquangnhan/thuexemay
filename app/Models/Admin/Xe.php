<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xe extends Model
{
    use HasFactory;
    protected $table = 'xe';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'tenxe',
        'img',
        'dongia',
        'mota',
        'danhmuc',
        'remember_token'
    ];
}
