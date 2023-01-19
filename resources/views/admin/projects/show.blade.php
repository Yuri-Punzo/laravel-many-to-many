@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="d-flex gap-4">
        <img style="height: 300px;" src="#" alt="#">
        <div class="details">
            <h1>{{$project->title}}</h1>
            <p>{{$project->description}}</p>
            <span>{{$project->type ? $project->type->name : 'Null'}}</span>
        </div>
    </div>
</div>


@endsection