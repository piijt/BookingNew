@extends('layouts.app')

@section('content')
<main class="show">
<center>
  <h1>Rekvirenter</h1>
      <table>
        <tr>
          <td><b>Navn</b></td>
          <td><b>initialer</b></td>
          <td><b>Type</b></td>
          <td><b>Oplysninger</b></td>
          <td><b>Edit</b></td>
        </tr>
          @foreach($rekvirenter as $rekvirent)
            <tr>
              <td>{{ $rekvirent->name }}</td>
              <td>{{ $rekvirent->initialer }}</td>
              <td>{{ $rekvirent->type }}</td>
              <td><a href="/rekvirent/{{ $rekvirent->id }}">Oplysninger</td>
              <td><a href="/rekvirent/{{ $rekvirent->id }}/edit">Rediger</a></td>
            </tr>
          @endforeach
      </table>
    </center>
</main>
@endsection
