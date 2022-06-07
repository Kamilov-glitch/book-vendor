@extends('layouts.app')
@section('content')

    <div class="container">
        <form action="/books" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
            <label for="description">Description</label>
            <textarea name="description" id="textArea" name="description" class="form-control"></textarea>
            <label for="price" >Price</label>
            <input type="number" name="price" step="0.01" class="form-control">
            <button type="submit">Add Book</button>
        </form>
    </div>
    
@endsection