@extends('layouts.layout')
@section('content')
    @foreach (App\Models\Book::all() as $book)
        {{ $book }}
    @endforeach
@endsection