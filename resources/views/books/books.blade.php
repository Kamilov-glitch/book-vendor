@extends('layouts.app')
@section('content')

<div class="container">
    @foreach (App\Models\Book::all() as $book)
        <div class="card">
            <div class="card-header">
                {{ $book->name }}
            </div>
            <div class="card-body">
                {{ $book->description }}
            </div>
        </div>
        
    @endforeach
</div>

@endsection