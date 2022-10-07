<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThueXe extends Model
{
    use HasFactory;
    protected $table = 'thuexe';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'fullname',
        'phonenumber',
        'diadiem',
        'ngaythue',
        'ngaytra',
        'iduser',
        'idxe',
        'remember_token'
    ];
}
