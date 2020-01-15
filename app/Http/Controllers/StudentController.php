<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        if ($request->ajax()) {
            $model = Student::query();
            return datatables()->of($model)
                ->addColumn('action', function($model) {
                    return view('layout._action', [
                        'model'         => $model,
                        'url_edit'      => route('student.edit', $model->nisn),
                        'url_destroy'   => route('student.destroy', $model->nisn),
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('student.student');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Student();
        return view('student.form', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nisn' => 'required|digit:4|unique:students',
            'name' => 'required|string|max:255',
            'birth_date' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'address' => 'required|string|max:255'
        ]);
        $model = Student::create($request->all());
        return $model;
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
