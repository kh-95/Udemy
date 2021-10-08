<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view ('dashbord.posts.index',compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbord.posts.add');
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
            'description'=>'required',
            'category_id'=>'required',
            'image'=>'sometimes|file|max:2048',
        ]);
        $inputs = $request->except(['image']);

        if($request->hasFile('image'))
        {           
            $inputs['image']= uploader($request,'image');
        }
       
        Post::create($inputs);
        return redirect(route('admin.posts.index'))
        ->with('success','Post Added Succesfully');





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
        $post = Post::findOrFail($id);
        return view('dashbord.posts.edit')
        ->with('post',$post);
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
            'description'=>'required',
            'category_id'=>'required',
            'image'=>'sometimes|max:2048',
         
            ]);
            $inputs = $request->except(['image']);

            if($request->hasFile('image'))
            {           
                $inputs['image']= uploader($request,'image');
            }
           

         
            $post=Post::find($id);
            $post->update($inputs);
            return redirect(route('admin.posts.index'))
            ->with('success','Post updated Succesfully');
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
