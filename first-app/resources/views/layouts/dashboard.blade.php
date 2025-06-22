<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body>
    @include('layouts.nav')
    <div class="py-4 text-center text-black copyright">
      <div class="container">
        <small>Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank" href="#">Code with Mich 😀 ✅</a>
          </small>
      </div>
    </div>
</body>

</html>
