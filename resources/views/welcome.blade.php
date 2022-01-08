@extends('layout.master')
@section('title','index')
@section('content')
<form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="Title_book" class="form-label">Title</label>
      <input type="text" class="form-control" name="Title_book">
    </div>
    <div class="mb-3">
        <label for="Author_book" class="form-label">Author</label>
        <input type="text" class="form-control" name="Author_book">
      </div>
      <div class="mb-3">
        <label for="Publisher_book" class="form-label">Publisher</label>
        <input type="text" class="form-control" name="Publisher_book">
      </div>
      <div class="mb-3">
        <label for="Year_book" class="form-label">Year</label>
        <input type="text" class="form-control" name="Year_book">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
