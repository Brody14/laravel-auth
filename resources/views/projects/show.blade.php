@extends('layouts.app')

@section('content')
   
    <div class="container py-5">
        <div class="row align-items-center">

            <div class="col">
                <h3 class="project_title mb-4">Title: {{$project->title}}</h3>
                <p class="m-0"><strong>Description:</strong></p>
                @if (!$project->description)
                    <p>Not available</p>
                @endif
                <p>{{$project->description}}</p>
                <ul class="p-0">
                    <li> <strong> Customer: </strong> {{ $project->customer}} </li>
                    <li> <a href="{{ $project->url}}"> Url </a> </li>
                </ul>
            </div>
        </div>
    </div>

@endsection