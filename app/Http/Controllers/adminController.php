<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; //ده مسار الauth
use Illuminate\Support\Facades\Validator; //ده مسار الvalidation
use App\Http\Requests\uploadPostRequest;
use App\Http\Requests\updatePostRequest;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;



class adminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    public function postControl(){
        $data=Post::Select("*")->orderby("id","ASC")->get(); //get() //paginate(2)
        return view('admin.posts',compact('data'));
    }
    public function commentControl(){
        $comment=Comment::all();
        return view('admin.comments',compact('comment'));
    }
    public function userControl(){
        $data=User::all();
        return view('admin.users',compact('data'));
    }
    //deleteuser
    public function deleteuser($id){
        $data=User::find($id);
      $data->delete();
      return redirect()->back();
    }

    //post action
    //uploadpost
    public function uploadpost(uploadPostRequest $request){
        $data=new Post();

        /*$validator=Validator::make($request->all(),[
            'title'=>'required|alpha|unique:posts,title',
        ],
        [
            'title.required'=>'the title is required.',
            'title.unique'=>'The title is reserved.',
            'title.alpha'=>'the title may only contain letters.'
        ]);*/


        ///////image code (vip)/////
       /* $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
           $request->image->move('postimage',$imagename);
        $data->image=$imagename;*/
        if($request->has('image')){
            $image=$request->image;
            $extension=strtolower($image->extension());
            $imagename=time().rand(1,1000).".".$extension;
            $image->move('postimage',$imagename);
            $data->image=$imagename;
        }
        //////////////////////////////
        $data->title=$request->title;
        $data->author=$request->author;
        $data->content=$request->content;
        $data->user_id=Auth::user()->id;
        $data->save();
        return redirect()->back()->with(['success'=>'added success']);
     } 
     public function deletepost($id){
        $data=post::find($id);
        $data->delete();
        return redirect()->back();
     }
     public function updatepost($id){
        $data=Post::find($id);
        
        return view('admin/updatepost',compact('data'));
     }
     public function updatepostdata(updatePostRequest $request ,$id ){
        $data=Post::find($id);
        ///////image code (vip)/////
       /* $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
           $request->image->move('postimage',$imagename);
        $data->image=$imagename;*/
        if($request->has('image')){
            $image=$request->image;
            $extension=strtolower($image->extension());
            $imagename=time().rand(1,1000).".".$extension;
            $image->move('postimage',$imagename);
            $data->image=$imagename;
        }
        //////////////////////////////
        $data->title=$request->title;
        $data->author=$request->author;
        $data->content=$request->content;
        $data->user_id=Auth::user()->id;
        $data->save();
        return redirect()->route('postsmenu')->with(['success'=>'updated success']);
    }
    public function postsmenu(){
        $data=Post::all(); //get() //paginate(2)
     //$data=Post::all();
      return view('admin.posts',compact('data')); 
     }
    ////deletecomment
    public function deletecomment($id){
        $comment=Comment::find($id);
        $comment->delete();
        return redirect()->back()->with(['success'=>'deleted success']);;

        
    }
    
    
}
