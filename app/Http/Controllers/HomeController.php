<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Comment;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=User::all();
        $data2=Post::all();
        $usertype=Auth::user()->user_type;
        if($usertype=='1'){
            return view('admin.home', compact('data'));
        }
        else{
            return view('blog',compact('data'),compact('data2'));
        }
    }
    /*public function details(){
        $data2=Post::all();
    return view('details',compact('data2'));

    }*/
    public function BlogSite(){
        $data2=Post::all();
        return view('blog',compact('data2'));
    }
    public function showDetails($id ){
        $data2=Post::find($id);
        $data1=Comment::all();
        $data=User::all();

        return view('details',compact('data2'),compact('data1'),compact('data'));
    }
    //////////comment
    public function yourcomment($id,request $request){
        $data=New Comment();
        $data->user_id=Auth::user()->id;
        $data->post_id=$id;
        $data->comment=$request->comment;
        $data->save();
        return redirect()->back();     
    }
}
