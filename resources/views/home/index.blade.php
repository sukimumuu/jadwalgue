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
<body class="bg-gray-100">
    @if($message = Session::get('success'))
      <div class="flex items-center absolute bg-green-600 w-60 h-12 rounded-lg right-1 me-2 top-2" role="alert" id="flash-message">
        <p class="text-white font-sans font-semibold text-base text-left p-2"><i class="fa-regular fa-circle-dot"></i> {{ $message }}</p>
    </div>
      @endif
      <div class="w-full bg-sky-400 h-12">
          <ul class="w-full flex justify-between p-2">
            <p class="font-semibold ml-6 text-xl text-white font-sans">JadwalGue</p>
            <li class="mt-px flex gap-4">
              <a href=""><i class="fa-solid fa-user text-xl cursor-pointer text-white"></i></a>
              <a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket text-xl cursor-pointer text-white"></i></a>
            </li>
          </ul>
      </div>
    <div class="w-8/12 h-screen bg-white mx-auto">
        <h3>Halo {{ Auth::user()->name }}</h3>
    </div>
</body>
<script>
    
    var flashMessage = document.getElementById('flash-message');
    if (flashMessage) {
        setTimeout(function() {
            flashMessage.style.display = 'none';
        }, 3000);
    }
</script>
</html>