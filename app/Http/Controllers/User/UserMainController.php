<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\category;
use App\Course;
use App\userscourses;
use Illuminate\Http\Request;

class UserMainController extends Controller
{
    public function index (){

$courses=Course::all();
$categories=category::all();


        return view('site.content',compact('courses','categories'));
    }
    
}
