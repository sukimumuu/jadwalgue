<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda JadwalGue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
        <h3 class="text-lg font- p-2">Halo {{ Auth::user()->name }}</h3>
        <p class="text-base p-2">Strukturkan harimu dengan mudah. Aplikasi To-Do List kami membantu Anda membuat jadwal yang terorganisir, memberikan Anda kendali penuh atas waktu Anda.</p>
        <a href="{{ route('task') }}"><button class="block mx-auto w-11/12 h-8 text-white font-semibold rounded bg-green-600 text-center font-sans">Tugas baru +</button></a>
        <div class="mt-4 p-2">
          @foreach ($data as $toArray)
          <div class="border-b-2 border-black">
            <p class="text-xl">{{ $toArray['formatted_date'] }}</p>
          </div>
          <table class="w-full mt-2 text-lg">
            <tr>
              <td class="w-1/5">{{ $toArray['formatted_time'] }}</td>
              <td class="w-3/5">{{ $toArray['task'] }}</td>

              <td class="w-1/5" id="taskDescription_{{ $loop->index }}">
               @if ($toArray['completed'])
                    <span class="text-green-500">Task Complete</span>
                @else
                    <form method="post" action="{{ route('complete-task', ['id' => $toArray['id']]) }}">
                        @csrf
                        @method('patch')
                        <button type="submit" class="text-teal-800">
                            <i class="fa-solid fa-square-check text-teal-800 text-2xl"></i>
                        </button>
                    </form>
                    <a href="{{ route('destroy', ['id' =>$toArray['id']]) }}"><i class="fa-solid fa-square-xmark text-red-800 text-2xl"></i></a>
                @endif
              </td>
            </tr>
          </table>
          @endforeach
        </div>
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