<!DOCTYPE html>
<html>

<head>
    <title>
        Modul 5
    </title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body>
<!-- START NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light bg-light main-nav">
    <div class="container">
        <ul class="nav navbar-nav mx-auto">
            <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ url('/product') }}">Produk</a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ url('/order') }}">Order</a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ route('order.create') }}">History</a></li>
        </ul>
    </div>
</nav>
<!-- END NAVBAR -->

<!-- START CONTENT -->
<section class="container mt-4">
@yield('content')
</section>
<!-- END CONTENT -->
</body>
</html>
