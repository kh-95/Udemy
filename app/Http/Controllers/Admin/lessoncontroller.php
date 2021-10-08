<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Lesson;

class lessoncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons=Lesson::all();

        return view ('dashbord.lessons.index',compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbord.lessons.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|max:191',
            'description'=>'required|max:191',
            'url'=>'required',
            'duration'=>'required',
            'course_id'=>'required',   
        ]);

        $data=$request->all();
        Lesson::create($data);
        return redirect(route('admin.lessons.index'))
        ->with('success','Lesson updated Succesfully');

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
        $lesson = Lesson::findOrFail($id);
        return view('dashbord.lessons.edit')
        ->with('lesson',$lesson);
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
    
        $this->validate($request,[
            'title'=>'required|max:191',
            'description'=>'required|max:191',
            'url'=>'required',
            'duration'=>'required',
            'course_id'=>'required',
            
            ]);
    
    
            $data=$request->all();
            $lesson=Lesson::find($id);
            $lesson->update($data);
            return redirect(route('admin.lessons.index'))
            ->with('success','Lesson updated Succesfully');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        if(!$lesson) return back()->with('error','Lesson Not Found');
       
        $lesson->delete();
        return redirect(route('admin.lessons.index'))
        ->with('success','Lesson Deleted Succesfully');
    }
}
