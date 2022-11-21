@extends('layouts.app')
@section('content')
    <section class="d-flex flex-column p-5">
        <h1 class="text-center p-5">Administration</h1>  
        <a href="{{ route('create') }}" class="btn btn-success ">Create New Image</a>  
        <div class="d-flex flex-wrap p-3 justify-content-center flex-column align-items-center">
            <table>
                <thead>
                    <th class="border border-primary p-1">ID</th>
                    <th class="border border-primary p-1">Name</th>
                    <th class="border border-primary p-1">Src</th>
                    <th class="border border-primary p-1">Description</th>
                </thead>
                @foreach ($images as $image )
                  <tr>
                      <td class="border border-primary p-1">{{ $image->id }}</td>
                      <td class="border border-primary p-1">{{ $image->name }}</td>
                      <td class="border border-primary p-1">{{ $image->src }}</td>
                    <td class="border border-primary p-1">{{ $image->description }}</td>
            </tr>
            @endforeach
            </table>
            
        </div>
    </section>
@endsection