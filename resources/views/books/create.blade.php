<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Vendor</title>
</head>
<body>
    <form action="/books" method="POST">
        <label for="name">Name</label>
        <input type="text">
        <label for="description">Description</label>
        <textarea name="description" id="textArea"></textarea>
        <button>Add Book</button>
    </form>
</body>
</html>