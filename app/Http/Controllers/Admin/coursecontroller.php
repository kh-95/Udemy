<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;



use Illuminate\Http\Request;
use App\Course;

class coursecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();

        return view ('dashbord.courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbord.courses.add');
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
            'price'=>'required',
            'image'=>'sometimes|file|max:2048',
            'short_description'=>'required|max:191|unique:courses,short_description',
            'description'=>'required|unique:courses,description',
            'category_id'=>'required',
            'is_active'=>'boolean',
            
        ]);
        $inputs = $request->except(['image']);

        if($request->hasFile('image'))
        {           
            $inputs['image']= uploader($request,'image');
        }
       
        Course::create($inputs);
        return redirect(route('admin.courses.index'))
        ->with('success','Course Added Succesfully');
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
        $course = Course::findOrFail($id);
        return view('dashbord.courses.edit')
        ->with('course',$course);
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
        'price'=>'required',
        
        'short_description'=>'required|max:191',
        'description'=>'required',
        'category_id'=>'required',
        'is_active'=>'boolean',
        ]);


        $data=$request->all();
        $course=Course::find($id);
        $course->update($data);
        return redirect(route('admin.courses.index'))
        ->with('success','Course updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        if(!$course) return back()->with('error','Course Not Found');
       
        $message->delete();
        return redirect(route('admin.courses.index'))
        ->with('success','Message Deleted Succesfully');
    }
}
