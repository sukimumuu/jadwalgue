<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JadwalGue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
</head>
<body class="bg-sky-400 h-full"> 
    <p class="mt-4 font-semibold ml-6 text-2xl text-white font-sans">JadwalGue</p>
    <div class="flex w-full justify-center items-center gap-4 absolute top-1/4">
        <div>
            <a href="{{ route('index-create-profil') }}">
                <button class="hover:scale-110 bg-sky-300 h-48 w-48 rounded-full shadow-md items-center justify-center flex">
                <i class="fa-solid fa-user-plus text-5xl text-white"></i>
                </button>
            </a>
            <p class="text-center mt-4 font-semibold text-lg text-white font-sans">Buat profil kamu</p>
        </div>
        @php
            $counter = 0;
        @endphp
        @foreach ($data as $item)
            @if($counter < 5) 
                <div>
                    <a href="/login/{{ $item->id }}">
                        <button class="hover:scale-110 bg-sky-300 h-48 w-48 rounded-full shadow-md items-center justify-center flex">
                        <i class="fa-solid fa-user text-5xl text-white"></i>
                        </button>
                    </a>
                    <p class="text-center mt-4 font-semibold text-lg text-white font-sans">{{ $item->name }}</p>
                </div>
                    @php
                        $counter++;
                    @endphp
            @endif
        @endforeach
    </div>
</body>
</html>