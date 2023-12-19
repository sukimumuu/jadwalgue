<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Profil JadwalGue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
</head>
<body class="bg-sky-400"> 
    <h3 class="text-center mt-4 text-lg text-white font-semibold font-sans"><i class="fa-solid fa-circle-dot"></i> Buat profil</h3>
    <form action="{{ route('store-profil') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-3/5 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex">
            <div class="w-1/4 bg-white rounded-lg">
                <div class="w-64 h-64 mx-auto flex items-center justify-center">
                    <i class="fa-solid fa-user text-9xl me-6 text-gray-300"></i>
                    <input type="file" name="avatar" id="" class=" bg-red-300 w-64 h-64 opacity-0 absolute cursor-pointer" >
                </div>
            </div>
            <div class="w-3/4 flex flex-col p-4 gap-4">
                <input class="h-10 p-2 " type="text" name="name" id="" placeholder="Nama kamu">
                <input  class="h-10 p-2 " type="password" name="password" id="" placeholder="Kata sandi">
                <button class="ms-auto w-32 h-8 bg-teal-500 text-white font-semibold font-sans" type="submit">Simpan</button>
            </div>
        </div>
    </form>
</body>
</html>