@extends('fronts.front')
@section('content')
@if (isset($user)&& is_object($user))
@foreach($user as $user )
<div class="col-xs-12 profile ">
<div class="card" style="float:left;">
   <img src="{{ asset('images/'.$user->poster) }}" alt="John" style="width:100%">
   <h1>{{ $user->name }}</h1>
   <p class="title">CEO & Founder</p>
   <p>{{ $user->email }}y</p>
   <div style="margin: 24px 0;">
      <a href="#"><i class="fa fa-dribbble"></i></a> 
      <a href="#"><i class="fa fa-twitter"></i></a>  
      <a href="#"><i class="fa fa-linkedin"></i></a>  
      <a href="#"><i class="fa fa-facebook"></i></a> 
   </div>
   <p><button>Contact</button></p>
</div>
<p style="font-size:600%;display:block;-webkit-transform: rotate(-90deg);text-align:center;
   position: absolute;left:120px;top:200px;font-family:cursive;
   ">User Projects</p>
<div class="row " style="text-align:center;display:relative;text-center" >
   <div class="col-md-2 col-md-offset-5" ></div>
   <h1 style="font-family:cursive">Here are the most liked projects</h1>
   @foreach($projects as $project)
   <form action="{{ route('tasks',['project_id'=>$project->id]) }}" method="post">
      @csrf
      <button type="submit" value="task" class="btn btn-info project">{{  $project->title}} 
      <i style="float:right"  class="fa fa-thumbs-up">{{ ' '.$project->like_count  }}</i>
      </button>
   </form>
   @endforeach
</div>
@endforeach
@endif
@endsection