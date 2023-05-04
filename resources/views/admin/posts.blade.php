@extends('admin.home')
@section('active2')
 btn-info
@endsection
@section('main')
<!--add & update success-->

@if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
    </div>
  @endif
  <!--error-->
  @error('title')
  <span class="text-danger">{{$message}}</span>
  @enderror  
  @error('cotent')
  <span class="text-danger">{{$message}}</span>
  @enderror  

<!--add new post-->
<div class="form-group" style="width:25%;">
<a href="#AddNewPost" class="btn btn-outline-info btn-lg btn-block" style="margin:50px;">Add New Post</a>
</div>


<!--show post-->
<div style="width:80%; margin:0 auto;">
<table class="table" style="height:150px;" >
  <thead >
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
      <th scope="col">Action(1)</th>
      <th scope="col">Action(2)</th>


    </tr>
  </thead>
  <tbody>
@foreach($data as $data)
    <tr>
      <td>{{$data->title}}</td>
      <td>{{$data->author}}</td>
      <td>{{$data->content}}</td>
      <td><img src="postimage/{{$data->image}}" style="width:60%; margin:0; height:70px"></td>
      <td>
        <a href="{{url('deletepost', $data->id)}}" class="btn btn-sm btn-danger">Delete</a>  
    </td>
    <td>
        <a href="{{url('updatepost', $data->id)}}" class="btn btn-sm btn-info">Update</a>  
    </td>
    </tr>
    
  @endforeach
  </tbody>

</table>

</div>

<!--end show post-->
<br>
<br>
<!-- add post-->
<div class="form-group" style=" margin:0px auto;  ">
<h class="btn btn-primary btn-lg btn-block "> Add New Posts</h>
</div>


<div style=" width:70%; margin:20px auto;" id="AddNewPost">
<form  action="{{url('/uploadpost')}}" method="Post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>Title</label>
    <input   type="text" class="form-control" name="title" id="title" placeholder="title" required>
    @error('title')
  <span class="text-danger">{{$message}}</span>
  @enderror  
</div>
 
  <div class="form-group">
    <label>Author</label>
    <input type="text" class="form-control" name="author" id="author" placeholder="author" required>
  </div>
  <div class="form-group">
    <label >Image</label>
    <input type="file" class="form-control" id="image" name="image" required>
  </div>
  <div class="form-group">
    <label>Content</label>
    <textarea type="textarea" class="form-control" name="content" id="content" placeholder="content" rows="5" required></textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-success">Save</button>
  </div>
</form> 
</div>
<!--  end add post-->
@endsection