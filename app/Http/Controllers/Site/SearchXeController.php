<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\Xe;
use Illuminate\Http\Request;

class SearchXeController extends Controller
{
    function index(){
        $data = Xe::all();
        return view("Site.pages.search",compact('data'));
    }
}
