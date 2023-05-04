@extends('admin.home')
@section('active3')
 btn-info
@endsection
@section('main')
@if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
    </div>
  @endif
  
<div>
<table class="table" bgcolor="#999" style="height:100px; width:80%; margin:50px auto; text-align:center;" >
  <thead >
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">Post Title</th>
      <th scope="col">Comment</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($comment as $comment)
    <tr>
      <td>{{$comment->user->name}}</td>
      <td>{{$comment->posts->title}}</td>
      <td>{{$comment->comment}}</td>
      <td>
        <a href="{{url('deletecomment',$comment->id)}}" class="btn btn-sm btn-danger">Delete</a>  
      </td>
    </tr>
    @endforeach


   
    
  </tbody>
</table>
</div>
@endsection