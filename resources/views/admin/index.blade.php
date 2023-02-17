@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <a class="btn btn-primary my-4" href="{{route('projects.create')}}">Create</a>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($projects as $project)
        <div class="col">
            <div class="card">
                <img src="" class="card-img-top">
                <div class="card-body pt-5">
                    <h5 class="card-title"> {{$project->name}}</h5>
                    <h5 class="card-title"> {{ $project->type ? $project->type->name : ' ' }}</h5>
                    <p class="card-text">{{Str::limit($project->description , 30)}}</p>
                    <div class="d-flex gap-3 pt-4">
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-success">Show</a>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-info">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                            @csrf()
                            @method('delete')
                            <button class="btn btn-danger">X</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div>
        <a class="btn btn-primary my-4" href="{{route('dashboard')}}">Dashboard</a>
    </div>
    <div>
        {{ $projects->links() }}
    </div>
</div>
@endsection