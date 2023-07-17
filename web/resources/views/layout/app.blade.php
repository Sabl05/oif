<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<style>
    .category {
        font-weight: bold;
        cursor: pointer;
    }
    .subcategory {
        margin-left: 20px;
        display: none;
    }
</style>
@include('elements.links')
<body>
@include('layout.header')

@yield('content')

@include('layout.footer')
@include('elements.scripts')
</body>
</html>
