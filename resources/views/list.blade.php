@extends('layout.master')
@section('title','index')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Publisher</th>
        <th scope="col">Year</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
          <tr>
            <th scope="row">{{$book->id}}</th>
            <td>{{$book->Title}}</td>
            <td>{{$book->Author}}</td>
            <td>{{$book->Publisher}}</td>
            <td>{{$book->Year}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
