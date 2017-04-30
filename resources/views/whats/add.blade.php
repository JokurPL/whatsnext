@extends('layouts.app')
@section('content')

    <div class="container">
        <form action="{{route('whats.save')}}" method="post" class="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Nazwa szkoły" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="description" placeholder="Krótki opis" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="street" placeholder="Ulica" required="required">
            </div>
            <div class="form-group">
                <label for="sel1">Kategoria: </label>
                    <select class="form-control" id="sel1">
                        <option>1</option>
                    </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Dodaj szkołę</button>
            </div>
        </form>
    </div>

@endsection