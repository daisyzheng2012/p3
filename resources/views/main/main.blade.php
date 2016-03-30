@extends('main.master')

@section('title')
    P3
@stop

@section('header')
    <h1 class="text-center">P3</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="jumbotron">
      <div class="caption">
        <img src="images/random_user_icon.png" alt="random_user_icon" height="256" width="256" align="middle">
        <h3>Random User Generator</h3>
        <p>The Random User Generator create up to 100 random user information, user can have option include birth date, location, and profile, which profile I set here is user email address, phone number and employment company. </p>
        <p><a href="/randomuser" class="btn btn-primary btn-block" role="button">GO</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="jumbotron">
      <div class="caption">
        <img src="images/lorem_lpsum_icon.png" alt="lorem_lpsum_icon" height="256" width="256" align="middle">
        <h3>Lorem Ipsum Generator</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p><a href="/lorem" class="btn btn-primary btn-block" role="button">GO</a></p>
      </div>
    </div>
  </div>
</div>
@stop
