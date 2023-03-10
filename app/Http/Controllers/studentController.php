<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class studentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        $response = Http::get($url . '/Estudiantes');
        $students = $response->json();
        return view('students.students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.studentsCreate');
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
        $validated = $request->validate([
            'name' => 'required',
            'dni' => 'required',
            'last_name' => 'required',
            'inscription_date' => 'required',
        ]);

        $inscription_date = Carbon::parse($request->inscription_date);
        $now = Carbon::now();
        $diffInMonths = $inscription_date->diffInMonths($now);
        $semester = round($diffInMonths / 6);

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::post($url . '/Estudiantes', [
            'dni' => $request->dni,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'inscription_date' => $request->inscription_date,
            'email' => $request->email,
            'semester' => $semester,
            'address' => $request->address,
            'phone' => $request->phone
        ]);

        // return $response->json();
        return redirect()->route('studentIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($student)
    {
        //
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        $response = Http::get($url . '/Estudiantes/' . $student);
        $student = $response->json();
        return view('students.studentsView', compact('student'));
        // $response 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($student)
    {
        //
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        $response = Http::get($url . '/Estudiantes/' . $student);
        $student = $response->json();
        return view('students.studentEdit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $student)
    {
        //
        // dd($request);
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $inscription_date = Carbon::parse($request->inscription_date);
        $now = Carbon::now();
        $diffInMonths = $inscription_date->diffInMonths($now);
        $semester = round($diffInMonths / 6);

        $response = Http::put($url . '/Estudiantes/' . $student, [
            'dni' => $request->dni,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'inscription_date' => $request->inscription_date,
            'email' => $request->email,
            'semester' => $semester,
            'address' => $request->address,
            'phone' => $request->phone
        ]);

        $student = $response->json();
        return redirect()->route('studentIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($student)
    {
        //
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        $response = Http::delete($url . '/Estudiantes/' . $student);

        return redirect()->route('studentIndex');
    }
}
