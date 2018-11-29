@extends('fronts.front')
@section('content')
@foreach($tasks as $task)
<div class="row col-xs-4" style="marign-right:2%;">
   <div class="muck-up ">
      <div class="overlay"></div>
      <div class="top">
         <div class="nav">
            <span class="ion-android-menu"></span>
            <span class="ion-ios-more-outline"></span>
         </div>
         <div class="user-profile">
            <img src="{{ asset('images/'.$task->poster )}}">
            <div class="user-details">
               <h4>{{ $task->title }}</h4>
               <p>Web/Front-end Designer</p>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="filter-btn">
         <a id="one" href="#"><i class="ion-ios-checkmark-outline"></i></a>
         <a id="two" href="#"><i class="ion-ios-alarm-outline"></i></a>
         <a id="three" href="#"><i class="ion-ios-heart-outline"></i></a>
         <a id="all" href="#"><i class="ion-ios-star-outline"></i></a>
         <form action="{{ route('main_page') }}" method="get">
            <span class="toggle-btn ion-android-funnel" ><button style="background:transparent;border:none;" type="submit"><i class="fa fa-arrow-left"></i></button></span>
         </form>
      </div>
      <div class="clearfix"></div>
      <div class="bottom">
         <div class="title">
            <h3>{{ $task->title }}</h3>
            <small>{{ $task->created_at }}</small>
         </div>
         <ul class="tasks">
            <li class="one red">
               <span class="task-title">Make New Icon</span>
               <span class="task-time">5pm</span>
               <span class="task-cat">Web App</span>
            </li>
            <li class="one red">
               <span class="task-title">Catch up with Brian</span>
               <span class="task-time">3pm</span>
               <span class="task-cat">Mobile Project</span>
            </li>
            <li class="two green">
               <span class="task-title">Design Explorations</span>
               <span class="task-time">2pm</span>
               <span class="task-cat">Company Web site</span>
            </li>
            </li>
            <li class="tow green hang">
               <span class="task-title">Team Meeting</span>
               <span class="task-time">2pm</span>
               <span class="task-cat">Hangouts</span>
               <img src="https://raw.githubusercontent.com/arjunamgain/FilterMenu/master/images/2.jpg">
               <img src="https://raw.githubusercontent.com/arjunamgain/FilterMenu/master/images/3.jpg">
               <img src="https://raw.githubusercontent.com/arjunamgain/FilterMenu/master/images/profile.jpg">
            </li>
            <li class="three yellow">
               <span class="task-title">New Projects</span>
               <span class="task-time">2pm</span>
               <span class="task-cat">Starting</span>
            </li>
            <li class="three yellow">
               <span class="task-title">Lunch with Mary</span>
               <span class="task-time">2pm</span>
               <span class="task-cat">Grill House</span>
            </li>
            <li class="three yellow">
               <span class="task-title">Team Meeting</span>
               <span class="task-time">2pm</span>
               <span class="task-cat">Hangouts</span>
            </li>
         </ul>
      </div>
   </div>
</div>
@endforeach
<hr style="font-size:600%;display:block;-webkit-transform: rotate(-90deg);text-align:center;
position: absolute;left:150px;top:200px;>
@endsection