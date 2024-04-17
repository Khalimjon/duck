@extends('home.home');

@section('content')
    <h1>this is users: </h1>

        @foreach ($users as $user )
            <ul>
                <li>{{ $user }}</li>
            </ul>
        @endforeach
@endsection
