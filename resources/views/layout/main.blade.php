<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Najwa 194 | {{ucfirst($title)}}</title>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Icon from fontAwesome -->
    <script src="https://kit.fontawesome.com/2d3ac6989d.js" crossorigin="anonymous"></script>

  </head>
  <body style="display: flex; flex-direction: column; min-height:100vh;">
    @include('partial.navbar')
    <div class="container">
      @yield('container')

    </div>
    <footer class="d-flex align-items-center" style="background-color: #f8f9fa; height: 5rem; margin-top: auto;">
      <div class="container" style="font-size: .8rem;">
        Copyright 2022
      </div>
    </footer>
    <!-- Option 1: JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
      function resetFunction() { document.querySelector('#bidForm').reset() }
    </script>

  </body>

</html>