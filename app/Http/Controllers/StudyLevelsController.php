<?php

namespace App\Http\Controllers;

use App\StudyLevel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudyLevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $studyLevels = StudyLevel::all();
        return view('admin._studyLevels.index', compact('studyLevels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin._studyLevels.create');
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
            'title'         => 'required|unique:study_levels|max:100'
        ]);

        StudyLevel::create($request->all());

        flash()->success('Честитамо!', 'Успешно сте креирали ниво студија!');

        return redirect()->route('study-levels.index');
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
     * Show all StudyLevels in PUBLIC
     *
     * @return \Illuminate\View\View
     */
    public function all()
    {
        $studyLevels = StudyLevel::all();
        return view('study_levels.index', compact('studyLevels'));
    }

    /**
     * Show StudyLevel by $slug
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function showOne($slug)
    {
        $studyLevel = StudyLevel::findBySlugOrFail($slug);

        return view('study_levels.show-one', compact('studyLevel'));
    }
}
