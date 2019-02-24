@extends('layout')

@section('content')

    <h1 class="name">{{ $person->name }}</h1>
    <div class="content">{{ $person->initialer }}</div>
    <div class="content">{{ $person->email }}</div>
    <div class="content">{{ $person->telefon }}</div>


    <p>
        <a href="/person/">Back</a>
    </p>

    <p>
        <button>Udskriv</button>
    </p>
@endsection
