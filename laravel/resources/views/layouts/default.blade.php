<!DOCTYPE html>
<html lang="ja">
  <head>
    <mata charset="utf8">
      <title>@yield('title')</title>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="/css/styles.css">
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>
     <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="/js/main.js"></script>
  </body>
</html>