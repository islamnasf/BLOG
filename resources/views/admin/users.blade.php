@extends('admin.home')
@section('active1')
 btn-info
@endsection
@section('main')

<div>
<table class="table" bgcolor="#999" style="height:100px; width:80%; margin:50px auto; text-align:center;" >
  <thead >
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    @foreach($data as $info)
    <tr>
      <td>{{$info->name}}</td>
      <td>{{$info->email}}</td>
      <td>
      
@if($info->user_type==0)
        <a href="{{url('deleteuser',$info->id)}}" class="btn btn-sm btn-danger">Delete</a>  
        @else
        <div bgcolor="#" class="  alert-info"> Not Allwed
</div>
        @endif
    </td>
    </tr>

    @endforeach

   
    
  </tbody>
</table>
</div>
@endsection