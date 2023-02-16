@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="text-center my-5">
        <h1 class="text-dark">INFO PROGETTO #{{ $project->id }}</h1>
    </div>
    <div class="card my-5">
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Tipo</th>
                <th>Descrizione</th>
                <th>Immagine</th>
                <th>GitHub</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->type ? $project->type->name : '' }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        <img src="{{ asset('/storage/' . $project['cover_img']) }}">
                    </td>
                    <td>{{ $project->github_link }}</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    <div>
        @if (session('status') === 'success')
            <div class="alert alert-success">
            {{ session('message') }}
            </div>
        @endif
        <div class="card">
            {{-- Se cover_img esiste, mostra un tag img, altrimenti nulla --}}
            @if ($project->cover_img)
            <img src="{{ asset('storage/' . $project->cover_img) }}" alt="">
            @endif
            <div class="card-body">
                <div class="card-title"><strong>Titolo:</strong> {{ $project->name }}</div>
                <div class="card-title"><strong>Tipo:</strong> {{ $project->type ? $project->type->name : '' }}</div>
                <p class="card-text"><strong>Descrizione:</strong> {{ $project->description }}</p>
                <div><strong>GitHub:</strong> {{ $project->github_link }} </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="{{route("dashboard")}}"><button class="btn btn-secondary fw-semibold">Back to Home</button></a>
        </div>
    </div>
</div>
@endsection