<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Jadwal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
</head>
<body class="bg-sky-400"> 
    <h3 class="text-center mt-4 text-lg text-white font-semibold font-sans"><i class="fa-solid fa-circle-dot"></i> Buat Jadwal</h3>
    <form action="{{ route('task-create') }}" method="POST">
        @csrf
        <div class="w-3/5 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex">
            <div class="w-full flex flex-col p-4 gap-4">
                <input class="h-10 p-2 " type="date" name="date" id="">
                <input class="h-10 p-2 " type="time" name="time" id=""  placeholder="HH:MM">
                <textarea name="task" id="" cols="30" rows="10"></textarea>
                <button class="ms-auto w-32 h-8 bg-teal-500 text-white font-semibold font-sans" type="submit">Simpan</button>
            </div>
        </div>
    </form>
</body>
</html>