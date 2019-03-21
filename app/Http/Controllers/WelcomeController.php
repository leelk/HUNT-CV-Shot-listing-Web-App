<?php

namespace App\Http\Controllers;

use App\Vacancies;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $vacancies = Vacancies::all();


        return view('welcome',compact('vacancies'));
    }




}
