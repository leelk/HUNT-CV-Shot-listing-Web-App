<?php

namespace App\Http\Controllers;

use App\Vacancies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserVacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Vacancies $id)
    {

    $Vid= $id->id;

        $data = DB::table('vacancies')
            ->join('admins','vacancies.admin_id','=','admins.id')
            ->select('admins.c_name','admins.email','admins.c_phone','admins.c_city','vacancies.title','vacancies.position','vacancies.image','vacancies.description','vacancies.q1')
            ->where('vacancies.id','=',$Vid)
            ->get();


//        dd($data);

        return view('job.clickJob',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
