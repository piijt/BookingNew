<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<h1>Opret en ny person</h1>

<form method="POST" action="/person">
    {{ csrf_field() }}

    <div class="field">
        <label class="label" for="">Navn</label>

        <div class="control">
            <input type="text" class="input" {{ $errors->has('name') ? 'is-danger' : '' }} name="name" value="{{ old('name') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="">Initialer</label>

        <div class="control">
            <textarea name="initialer"  class="textarea"  {{ $errors->has('initialer') ? 'is-danger' : '' }}  >{{ old('initialer') }}</textarea>
        </div>
    </div>

    <div class="field">
        <label class="label" for="">Email</label>

        <div class="control">
            <input type="text" class="input" {{ $errors->has('email') ? 'is-danger' : '' }} name="email" value="{{ old
            ('email') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="">Telefon</label>

        <div class="control">
            <input type="text" class="input" {{ $errors->has('telefon') ? 'is-danger' : '' }} name="telefon" value="{{ old
            ('telefon') }}">
        </div>
    </div>

    <div>
        <button type="submit">Opret person</button>
    </div>

    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif
</form>
</body>
</html>

