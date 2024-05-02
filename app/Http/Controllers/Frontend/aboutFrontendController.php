<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutFrontendController extends Controller
{
    public function about(){
        return "About page of frontend";
    }
}
