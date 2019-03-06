<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
  </head>
  <body>
        @yield('content')
        <ul>
            <li><a href="/about">About us</a></li>
            <li><a href="/">Home</a></li>
            <li><a href="/learn">Learn more</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/info">Informacije</a></li>
            <li><a href="{{ route('kreiraj') }}">izradi nalog</a></li>
        </ul>


  </body>
</html>
