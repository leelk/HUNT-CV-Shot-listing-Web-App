<?php

namespace App\Http\Controllers;

use App\Vacancies;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
//        $vacancies = Vacancies::all();


        $vacancies = Vacancies::orderBy('id', 'desc')->take(6)->get();



        return view('welcome',compact('vacancies'));
    }




}
