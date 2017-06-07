<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Sklep "Staboru"')</title>
    <meta name="description" content="Sklep">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Store CSRF token for AJAX calls -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    @yield('extra-css')

    <!-- Favicon and Apple Icons -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <style>

        body {
            background-image: url('img/subtle_white_mini_waves.png');
        }


        .navbar-brand {
            text-transform: uppercase;
        }

        .site-content {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .spacer {
            margin-bottom: 100px;
        }

        .cart-image {
            width: 100px;
        }

        footer {
            background-color: #f5f5f5;
            padding: 20px 0;
        }

        .table>tbody>tr>td {
            vertical-align: middle;
        }

        .side-by-side {
            display: inline-block;
        }
    </style>
</head>
<body>

    <header>

        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('/') }}">Staboru</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="{{ set_active('shop') }}"><a href="{{ url('/') }}">Główna</a></li>
                <li><a href="#">Oferta</a></li>
                <li><a href="#">O nas</a></li>
                <li><a href="#">Regulamin</a></li>
                <li><a href="#">Kontakt</a></li>

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="{{ set_active('wishlist') }}"><a href="{{ url('/wishlist') }}">Lista życzeń ({{ Cart::instance('wishlist')->count(false) }})</a></li>
                <li class="{{ set_active('cart') }}"><a href="{{ url('/cart') }}">Koszyk ({{ Cart::instance('default')->count(false) }})</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

    </header>

    @yield('content')

    <footer>
      <div class="container">
        <p class="text-muted">By Krzeszowiec</p>
      </div>
    </footer>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@yield('extra-js')

</body>
</html>
