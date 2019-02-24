
@extends('layouts.app')

@section('content')
<main class="show">
<center><h1>Opret en ny reservation</h1></center>

  <form method="POST" action="/reservation" class="form">
  {{ csrf_field() }}
    <ul>
      <li>
        <label for="name">Lokale</label>
          <input type="text" maxlength="100" class="input" {{ $errors->has('lokale') ? 'is-danger' : '' }} name="lokale" value="{{ old('lokale') }}">
        <span>Hvilket lokale vil du reservere?</span>
      </li>

      <li>
        <label for="datotid">Dato-tid</label>
          <input type = "datetime-local" maxlength="100" name= "datotid" id="datotid"  {{ $errors->has('datotid') ? 'is-danger' : '' }} {{ old('datotid') }}>
        <span>Hvornår vil du gerne reservere lokalet?</span>
      </li>

      <li>
        <label for="rekvirent">Rekvirent</label>
          <textarea name="rekvirent" maxlength="100" class="textarea"  {{ $errors->has('rekvirent') ? 'is-danger' : '' }}  >{{ old('rekvirent') }}</textarea>
        <span>Angiv initialer på personen som reservere lokalet</span>
      </li>

      <li>
        <input type="submit" value="Reserver Lokalet.." >
      </li>
    </ul>
  </form>

  @if ($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</main>
@endsection
