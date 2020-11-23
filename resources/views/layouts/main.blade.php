<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>

  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/" class="text-dark">Test Avangard</a></h5>
  <nav class="my-2 my-md-0 mr-md-3">
  <a class="p-2 text-dark" href="/weather">Temperature in Bryansk</a>
    <a class="p-2 text-dark" href="/orders">Orders list</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>


<div class="container">
@include('includes.messages')
    @yield('main-content')
  </div>

  

</body>