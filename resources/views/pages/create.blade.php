@extends('layouts.app')
@section('content')
    <section>
        <h1 class="text-center p-5">Create</h1>    
        <div class="p-5">
            <form action="/administration/store" method="POST" class="d-flex flex-column gap-3" enctype="multipart/form-data">
                @csrf
                <label for="">Name :</label>
                <input type="text" size="80%" name="name" id="">
                <label for="">Image :</label>
                <input type="file" size="80%" name="src"  id="">
                <label for="">Description</label>
                <input type="text" size="80%" name="description" id="">
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </section>
@endsection