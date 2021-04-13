@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('/articles')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title" ></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea type="text" class="form-control" required="required" name="content"></textarea></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="file" class="form-control" required="required" name="image"></br>
        </div>
        <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
    </form>
</div>
@endsection
