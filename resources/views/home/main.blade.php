<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwal Gue</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo/jadwalgue-logo.ico') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jadwalgue.css') }}">
    <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
</head>
<body>
    <main class="w-full">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
            <img src="{{ asset('assets/logo/jadwalgue-logo.png') }}" alt="" srcset="" width="180" class="mb-5">
            <span class="nunito-500 text-xl cursor-pointer" onclick="showUpFormLogin()">Jadwal Gue</span>
        </div>
        <div class="w-2/5 h-screen bg-emerald-400 right-0 flex items-center fixed hidden" id="formLogin">
            <div class="w-full">
                <p class="text-center text-3xl py-2 text-white nunito-500 mb-3">Jadwal Gue</p>
                <form class="flex flex-col gap-3 w-4/5 mx-auto" action="">
                    <input class="h-8 rounded px-2 outline-none" placeholder="Masukan email kamu" type="text" name="" id="">
                    <input class="h-8 rounded px-2 outline-none" placeholder="Masukan email kamu" type="password" name="" id="">
                    <div class="flex justify-between">
                        <div class="border border-2 border-white p-1 rounded">
                            <a href="" class="text-white">Lanjutkan sebagai Guest <i class="fa-regular fa-user ms-2"></i></a>
                        </div>
                        <button class="w-40 bg-sky-500 text-white rounded py-1">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script>
        function showUpFormLogin(){
           const formLogin = document.getElementById("formLogin")
           formLogin.classList.remove("hidden")
           formLogin.classList.add("slide-in")
        }
    </script>
</body>
</html>