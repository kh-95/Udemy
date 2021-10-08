<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use Hash;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('dashbord.users.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbord.users.add');
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
            'name'=>'required|max:191',
            'email'=>'required|email|max:191|unique:users,email',
            'phone'=>'required|max:191|unique:users,phone',
            'password'=>'required|min:6|confirmed',
            'role'=>'required|in:admin,user',
            'is_active'=>'boolean',
            'image'=>'sometimes|file|max:2048',
        ]);
        $inputs = $request->except(['password','image']);

        if($request->hasFile('image'))
        {           
            $inputs['image']= uploader($request,'image');
        }
        $inputs['password'] = Hash::make($request->password);
        User::create($inputs);
        return redirect(route('admin.users.index'))
        ->with('success','User Added Succesfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::FindOrFail($id);
        $comments  = $user->comments;
        return view('dashbord.users.show',compact('user','comments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashbord.users.edit')
        ->with('user',$user);

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
            'name'=>'required|max:191',
            'email'=>'required|email|max:191',
            'phone'=>'required|max:191|',
            'role'=>'required|in:admin,user',
            'password'=>'required|min:6|confirmed',
            'is_active'=>'required|boolean',
            'image'=>'sometimes|file|max:2048',
        ]);

        $inputs = $request->except(['password','image']);
        if($request->hasFile('image'))
        {           
            $inputs['image']= uploader($request,'image');
        }


        if($request->password !="" && $request->password !== null){

            $request->validate(['password'=>'confirmed |min:6']);
        }

        
        $user = User::find($id);
        $user->update($inputs);
        
        return redirect(route('admin.users.index'))
        ->with('success','User updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if(!$user) return back()->with('error','User Not Found');
        if(auth()->user()->id == $user->id) return back()->with('error','You Cannont Delet You MemberShip');
        $user->delete();
        return redirect(route('admin.users.index'))
        ->with('success','User Deleted Succesfully');
    }

    
}
