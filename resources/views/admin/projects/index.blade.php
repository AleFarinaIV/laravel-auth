@extends('layouts.app')

@section('content')

    @foreach ($projects as $project)
        <ul>
            <li>
                <h3>{{ $project['name'] }}</h3>
            </li>
        </ul>
    @endforeach
    
@endsection
