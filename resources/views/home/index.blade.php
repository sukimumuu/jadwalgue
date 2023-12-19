<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda JadwalGue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
</head>
<body class="bg-sky-400">
    @if($message = Session::get('success'))
      <div class="flex items-center absolute bg-green-600 w-60 h-12 rounded-lg right-1 me-2 top-2" role="alert">
        <p class="text-white font-sans font-semibold text-base text-left p-2"><i class="fa-regular fa-circle-dot"></i> {{ $message }}</p>
    </div>
      @endif
    <p>TES</p>
    <a href="{{ route('logout') }}">Keluar</a>
</body>
</html>