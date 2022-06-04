<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Vendor</title>
</head>
<body>
    <form action="/home" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="description">Description</label>
        <textarea name="description" id="textArea" name="description"></textarea>
        <label for="price" >Price</label>
        <input type="number" name="price" step="0.01">
        <button>Add Book</button>
    </form>
</body>
</html>