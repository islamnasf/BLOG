@extends('admin.home')
@section('active2')
 btn-info
@endsection
@section('main')
<base href="/public" >
<!-- update post-->
<div class="form-group" style=" margin:0px auto;  ">
<h class="btn btn-primary btn-lg btn-block "> Update Post</h>
</div>


<div style=" width:70%; margin:20px auto;" id="AddNewPost">
<form  action="{{url('updatepostdata',$data->id)}}" method="Post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>Title</label>
    <input   type="text" class="form-control" name="title" id="title" value="{{$data->title}}" required>
    @error('title')
  <span class="text-danger">{{$message}}</span>
  @enderror    
</div>
  <div class="form-group">
    <label>Author</label>
    <input type="text" class="form-control" name="author" id="author" value="{{$data->author}}" required>
  </div>
  <div class="form-group">
    <label > Image</label>
    <img height="200" width="200" src="postimage/{{$data->image}}">
  </div>
  <div class="form-group">
    <label >New Image</label>
    <input type="file" class="form-control" id="image" name="image" >
  </div>
 
  <div class="form-group">
    <label>Content</label>
    <textarea type="textarea" class="form-control" name="content" id="content" value="{{$data->content}}" rows="5" required>{{$data->content}}</textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-success">Update</button>
  </div>
</form> 
</div>
<!--  end add post-->
@endsection
