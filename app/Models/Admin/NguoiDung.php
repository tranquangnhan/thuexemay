<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    use HasFactory;
    protected $table = 'nguoidung';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'email',
        'password',
        'role',
        'remember_token'
    ];

    public static function findNguoiDung($id){
       return NguoiDung::where('id','=',$id)->first();
    }
}
