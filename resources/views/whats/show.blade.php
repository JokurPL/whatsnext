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
                <tr>
                    <td>{{ $school->name  }}</td>
                    <td>{{ $school->description }}</td>
                    <td>{{ $school->street }}</td>
                <tr>
        </table>
        <button class="btn btn-default"><a href="{{ URL::previous() }}">Powrót</a></button>
    </div>
@endsection