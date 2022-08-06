<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="/css/state.css" type="text/css">
    <link rel="stylesheet" href="/css/layout.css" type="text/css">
    <link rel="stylesheet" href="/css/theme.css" type="text/css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Rowling</title>
</head>
<body>
<div class="header flex flex-row justify-content-space-between">
    <a href="/"><div class="logo">J.K. Rowling</div></a>

    <nav class=" flex flex-row justify-content-space-around align-items-center">
        <a href="/home" class="{{Request::is('/home')?'current':''}} text-link">Home</a>
        <a href="/books/index" class="{{Request::is('books/index')?'current-page':''}} text-link">Books</a>
       <a href='/blogs/index' class="{{Request::is('/blogs/index')?'current-':''}} text-link">Blogs</a>
       <a href="/logout" class="{{Request::is('/logout')?'current':''}} text-link">Logout</a>
    </nav>


</div>
    @yield('content')

    <div class="footer flex flex-row justify-content-space-between">
        <nav class=" flex flex-row justify-content-space-around align-center">
            <a href="/" class="{{Request::is('/')?'current':''}} text-link">Home</a>
            <a href="/books/index" class="{{Request::is('books/index')?'current-page':''}} text-link">Books</a>
            <a href='/blogs/index' class="{{Request::is('/blogs/index')?'current-':''}} text-link">Blogs</a>
        </nav>
            <a href="/"><div class="logo">J.K. Rowling</div></a>
        </div>
    <div class="copyright"> © All Rights Reserved by Author | 2022</div>
</body>
</html>
