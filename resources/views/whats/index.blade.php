@extends('layouts.app')

@section('content')
    <div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <td>Nazwa szkoły</td>
            <td>Opis</td>
            <td>Ulica</td>
        </tr>
        </thead>
        @foreach($schools as $school)
            <tr>
                <td><a href="{{route('whats.show', $school)}}">{{ $school->name  }}</a></td>
                <td>{{ $school->description }}</td>
                <td>{{ $school->street }}</td>
            <tr>
        @endforeach

    </table>
    </div>
@endsection