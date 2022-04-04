<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
@extends('layouts.layout')
@section('content')
<div class="topPage">
 <nav class="nav">
 <ul>
 <li class="personIcon">
 <a href="/users/show/{{Auth::id()}}"><i class="fas fa-user fa-2x">
</i></a></li>
 <li class="appIcon"><a href="{{route('home')}}"><img
src="/storage/images/techpit-match-icon.png"></a></li>
 </ul>
 </nav>
 <div id="tinderslide">
 <ul>
 @foreach($users as $user)
 <li data-user_id="{{ $user->id }}">
 <div class="userName">{{ $user->name }}</div>
 <img src="/storage/images/{{$user->img_name}}">
 <!-- {{var_dump($user->img_name)}} -->
 <div class="like"></div>
 <div class="dislike"></div>
 </li>
 @endforeach
 </ul>
 <div class="noUser">近くにお相⼿がいません。</div>
 </div>
 <div class="actions" id="actionBtnArea">
 <a href="#" class="dislike"><i class="fas fa-times fa-2x"></i></a>
 <a href="#" class="like"><i class="fas fa-heart fa-2x"></i></a>
 </div>
</div>
@endsection