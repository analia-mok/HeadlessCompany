<!DOCTYPE html>
<html lang="en"lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans%7CWork+Sans:600,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/app.css">
  <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
  @include('partials.nav')
  <main class="container" id="app">
    @yield('body')
  </main>
  @include('partials.footer')
  <script src="/js/app.js" defer></script>
</body>
</html>