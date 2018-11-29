@extends('fronts.front')
@section('content')
<h1 style="text-align:center">All Users </h1>
<hr/>
<div class="col-xs-12">
   <div class="table-responsive">
      <table class="table table-bordered table-hover table-responsive">
         <thead>
            <th>Id</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Profile</th>
         </thead>
         <tbody>
            @if (isset($users)&& is_object($users))
            @foreach($users as $user )
            <tr>
               <td>{{$user->id}}</td>
               <td>{{$user->name}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->created_at}}</td>
               <td>{{$user->updated_at}}</td>
               <td>
                  <form action="{{ route('profile',['id'=>$user->id]) }}" method="post">
                     {{@csrf_field() }}
                     <button type="submit" value="delete" class="btn btn-success">                          
                     <i class="fa fa-user" ></i>
                     </button>
                  </form>
                  @endforeach
                  @endif
               </td>
            </tr>
         </tbody>
      </table>
   </div>
   <div class="my_paginate">
      <div class="pagination">
         @if (isset($users) && is_object($users))
         {{ $users->links()}}
         @endif
      </div>
   </div>
</div>
@endsection