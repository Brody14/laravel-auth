@extends('layouts.app')

@section('content')
    
    <div class="container py-5 text-center">
        <h1>All Projects</h1>
        <div class="py-2">
          <a href="{{ route('projects.create')}}"><i class="project_add fa-regular fa-square-plus"></i></a>
        </div>
    </div>

    <div class="container py-2">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Url</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($projects as $project)
                  <tr>
                    <td class="project_title">
                        <a href="{{ route('projects.show',$project) }}">{{ $project->title }}</a>
                    </td>
                    <td>{{ $project->description }}</td>
                    <td> <a href="{{ $project->url }}">Visit</a></td>
                    <td>
                      <div class="text-center d-flex gap-2 align-items-center">
                        <a href="{{ route('projects.edit',$project) }}"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{route('projects.destroy', $project)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="border-0 bg-transparent">
                            <i class="fa-regular fa-trash-can"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
    </div>

@endsection