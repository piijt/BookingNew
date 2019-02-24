@extends('layouts.app')
@section('content')
  <main class="main">
    <div class="main-header">
      <div class="main-header_heading">
        Velkommen {{ Auth::user()->name }}
      </div>
    </div>
    <div class="main-overview">
      <div class="overviewcard">
          <div class="icon">Index</div>
          <div class="text">Card</div>
      </div>
      <div class="overviewcard">
          <div class="icon">Index</div>
          <div class="text">Card</div>
      </div>
      <div class="overviewcard">
          <div class="icon">Index</div>
          <div class="text">Card</div>
      </div>
      <div class="overviewcard">
          <div class="icon">Index</div>
          <div class="text">Card</div>
      </div>
    </div>
    <div class="main-cards">
      <div class="card">
        <h1 class="title">Reservationer</h1>
          
      </div>
      <div class="card">
        <p>Right Card Top</p>
      </div>
      <div class="card">
          Right Card Bottom
      </div>
    </div>
  </main>
@endsection
