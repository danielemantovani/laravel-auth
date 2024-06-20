@extends('layouts.admin')

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="{{ route('admin.project.create') }}"><i class="fa-solid fa-plus"></i></a>
        </div>
        <h2>I miei progetti</h2>
        <table class="table">
            <thead>
                <tr class="text-white">
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Contenuto</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->content }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-info" href="{{ route('admin.project.show', ['project'=>$project->slug]) }}"><i class="fa-solid fa-circle-info text-white"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </div>
@endsection
