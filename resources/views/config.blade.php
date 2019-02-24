@extends('layout')

@section('content')
<main class="config show">
  <div class="card">
    <div>
      <h3>Drag the tables around (blue squares in the grid)</h3>
      <h4>Du Konfigurere nu lokale: UVx.x.x.x's </h4>
      <h4></h4>
      <canvas id="canvas" width=350 height=300  style="border: 1px solid #394263;"></canvas>
      <br>
      <div><button id="save">Finish Configuration</button></div>
      <div>Edit Configuration <input type="file" id="load"></div>
    </div>
  </div>
</main>
<script src="{{ URL::to('js/config.js')}}" charset="utf-8"></script>
<script src="{{ URL::to('js/canvas_to_data.js')}}" charset="utf-8"></script>
@endsection
