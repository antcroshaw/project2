<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about() {

        return view('about');
    }

    public function services() {

    $services = Service::all();


        return view('services',compact ('services'));
    }
}
