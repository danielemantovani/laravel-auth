@extends('layouts.admin')

@section('content')
    <h1 class="mb-5 mt-2">Inserisci un nuovo progetto</h1>
    <form action="{{route('admin.project.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" rows="3" name="content"></textarea>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Salva</button>
        </div>
    </form>
@endsection
