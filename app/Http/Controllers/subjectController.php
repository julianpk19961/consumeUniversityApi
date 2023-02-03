<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class subjectController extends Controller
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
        $response = Http::get($url . '/Asignaturas');
        $subjects = $response->json();
        return view('subjects.subjects', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('subjects.subjectsCreate');
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
            'area' => 'required',
            'academic_credits' => 'required'

        ]);

        $elective = strtoupper($request->elective);

        if (in_array(strtoupper($elective), ['SI', 'NO']) != true) {
            return false;
        }

        $request['elective'] = $elective == 'SI' ? 1 : 0;

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::post(
            $url . '/Asignaturas',
            [
                'name' => $request->name,
                'area' => $request->area,
                'academic_credits' => $request->academic_credits,
                'description' => $request->description,
                'elective' => $request->elective,
            ]
        );

        return redirect()->route('subjectIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($subject)
    {
        //
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        $response = Http::get($url . '/Asignaturas/' . $subject);
        $subject = $response->json();
        return view('subjects.subjectsView', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($subject)
    {
        //
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        $response = Http::get($url . '/Asignaturas/' . $subject);
        $subject = $response->json();
        return view('subjects.subjectsEdit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $subject)
    {
        //
        $elective = strtoupper($request->elective);

        if (in_array(strtoupper($elective), ['SI', 'NO']) != true) {
            return false;
        }

        $request['elective'] = $elective == 'SI' ? 1 : 0;

        $validated = $request->validate([
            'name' => 'required',
            'area' => 'required',
            'academic_credits' => 'required'
        ]);

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::put($url . '/Asignaturas/' . $subject, [
            'name' => $request->name,
            'area' => $request->area,
            'academic_credits' => $request->academic_credits,
            'description' => $request->description,
            'elective' => $request->elective,
        ]);
        return redirect()->route('subjectIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($subject)
    {
        //
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        $response = Http::delete($url . '/Asignaturas/' . $subject);
        $subject = $response->json();
        return redirect()->route('subjectIndex');
    }
}
