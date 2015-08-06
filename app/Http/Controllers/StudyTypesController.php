<?php

namespace App\Http\Controllers;

use App\StudyLevel;
use App\StudyType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudyTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $studyTypes = StudyType::all();

        return view('admin._studyTypes.index', compact('studyTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $studyLevels = StudyLevel::all();

        return view('admin._studyTypes.create', compact('studyLevels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'required|unique:study_types|max:100',
            'desc'          => 'required',
            'active'        => 'required|boolean|max:1'
        ]);

        StudyType::create($request->all());

        flash()->success('Честитамо!', 'Успешно сте креирали нову врсту студија!');

        return redirect()->route('study-types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Show all StudyTypes in PUBLIC
     *
     * @return \Illuminate\View\View
     */
    public function all()
    {
        $studyTypes = StudyType::all();
        return view('study_levels.index', compact('studyTypes'));
    }
}
