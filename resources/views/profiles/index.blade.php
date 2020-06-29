@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
          <img src="data:image/jpeg;base64,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" class="rounded-circle">

      </div>
      <div class="col-9 pt-5">
          <div class="d-flex justify-content-between align-items-baseline">
              <h1>{{$user->username}}</h1>
              <a href="#"> Add New Post</a>
        </div>
          <div class="d-flex">
              <div class="pr-5"> <strong> 154</strong> posts </div>
              <div class="pr-5"><strong> 45k</strong> followers </div>
              <div class="pr-5"><strong> 345</strong> following </div>
          </div>
          <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
          <div>{{ $user->profile->description}}</div>
          <div><a href="#">{{ $user->profile->url}}</a></div>
                </div>
  </div>
  <div class="row pt-4">
      <div class="col-4">
          <img src="https://images.unsplash.com/photo-1593291683687-5389cd94b450?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="w-100 h-50">
      </div>
      <div class="col-4">
          <img src="https://images.unsplash.com/photo-1587613981449-f3962dbba9b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="w-100 h-50">
      </div>
      <div class="col-4">
          <img src="https://images.unsplash.com/photo-1588610845017-9bead933bdda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="w-100 h-50">
      </div>
  </div>
</div>
@endsection
