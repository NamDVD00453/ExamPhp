<?php

namespace App\Http\Controllers;

use App\Apartment;

class ApartmentController extends Controller
{
    //
    public function index()
    {
        return view("home")->with("list", Apartment::all());
    }
}
