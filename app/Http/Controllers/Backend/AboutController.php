<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AboutController extends Controller
{
    public function index(){
        return "This is About page";
    }
}
