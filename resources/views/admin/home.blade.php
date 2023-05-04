@extends('layouts.app')
@section('content')
<title>Admin Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<div class="card">
  <div class="card-header">
    Hello Admin  
  </div>
  <a href="{{route('BlogSite')}}" class="btn btn-info" style="padding:20px 38px; font-size:40px; margin:50px auto; width:55%;">
                   >  Use This To Go Blog-Site  
    </a>
  <div class="card-body" align="center">
    <h5 class="card-title">Use the links to control the website</h5>
    <p class="card-text">Through these links, you can delete and edit posts, along with deleting the annoying comment</p>
    <a href="{{url('userControl')}}" class="btn btn-primary @yield('active1') " style="padding:10px 38px; font-size:20px; margin:5px;"> Users</a>
    <a href="{{url('postControl')}}" class="btn btn-primary @yield('active2')"style="padding:10px 32px; font-size:20px; margin:5px;"> Posts</a>
    <a href="{{url('commentControl')}}" class="btn btn-primary @yield('active3')"style="padding:10px 16px;font-size:20px; margin:5px;"> Comments</a>
  </div>
</div>
@yield('main')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection
