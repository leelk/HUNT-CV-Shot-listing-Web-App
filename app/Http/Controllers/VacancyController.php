<?php

namespace App\Http\Controllers;

use App\Vacancies;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class VacancyController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


//    public function send()
//    {
//
//        $toEmail = auth::user()->email;
//
//
//
//
//        Mail::send(['text'=>'mail'],['name','Leel'],function ($message){
//            $message->to()->subject('Hunt Registration');
//            $message->from('leelkarunarathne@gmail.com','Hunt');
//        });
//        //return redirect()->route('create.vacancy');
//    }



    public function index()
    {

//        dd(Auth::user()->getAuthIdentifier());

//


        //dd(\auth()->user()->id);
//        dd(Auth::user()->id);
//        dd(Auth::user()->email);
//        dd(Auth::user()->c_phone);
//        return view('job.jobindex');
$id = auth()->user()->id;
        $vacancies = Admin::find($id)->Vacancies;


            return view('job.jobindex',compact('vacancies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.createJob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('image')){


          $image= $request->image->store('public');
        }


        $vacancy = new Vacancies();
        $vacancy->title = $request['title'];
        $vacancy->position = $request['position'];
        $vacancy->description =$request['description'];
        $vacancy->q1 = $request['q1'];
        $vacancy->q2 = $request['q2'];
        $vacancy->q3 =$request['q3'];
        $vacancy->q4 = $request['q4'];
        $vacancy->salary = $request['salary'];
        $vacancy->closedate = $request['closedate'];
        $vacancy->image = $image;
        $vacancy->admin_id = auth()->user()->id;
        $vacancy->save();

//$this->send();
      return redirect()->route('create.vacancy');



//           return $request->all();

//        return $request->all();
//        $request->user()->posts()->save($post);




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
