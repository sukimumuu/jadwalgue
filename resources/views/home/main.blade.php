<!DOCTYPE html>
<html lang="en">
@include('components.partials.head')
<body class="nunito">
    <main class="w-full">
        <div class="w-96 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
            <img class="block mx-auto" src="{{ asset('assets/logo/jadwalgue-logo.png') }}" alt="" srcset="" width="180" class="mb-5">
            <span class="nunito-500 text-xl cursor-pointer">Jadwal Gue</span>
            <div class="flex gap-3 justify-center mt-5">
                <button class="w-40 bg-orange-500 text-white rounded py-1" type="button" onclick="showUpFormLogin()">Masuk</button>
                <button class="w-40 bg-sky-500 text-white rounded py-1" type="button" onclick="showUpFormRegis()">Daftar</button>
            </div>
        </div>
        <div class="w-2/5 h-screen bg-emerald-400 right-0 flex items-center fixed hidden" id="formRegis">
            <div class="w-full">
                <p class="text-center text-3xl py-2 text-white nunito-500 mb-3">Jadwal Gue</p>
                <form class="flex flex-col gap-3 w-4/5 mx-auto" action="{{ route('store-profil') }}" method="POST">
                    @csrf
                    <input class="h-8 rounded px-2 outline-none" placeholder="Masukan email kamu" type="text" name="email" id="email">
                    <input class="h-8 rounded px-2 outline-none" placeholder="Masukan password kamu" type="password" name="password" id="password">
                    <div class="flex justify-between">
                        <div class="border border-2 border-white p-1 rounded">
                            <a href="#" onclick="soonGuest()" class="text-white" >Lanjutkan sebagai Guest <i class="fa-regular fa-user ms-2"></i></a>
                        </div>
                        <button class="w-40 bg-sky-500 text-white rounded py-1" type="submit">Daftar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="w-2/5 h-screen bg-emerald-400 left-0 flex items-center fixed hidden" id="formLogin">
            <div class="w-full">
                <p class="text-center text-3xl py-2 text-white nunito-500 mb-3">Jadwal Gue</p>
                <form class="flex flex-col gap-3 w-4/5 mx-auto" action="{{ route('checking') }}" method="POST">
                    @csrf
                    <input class="h-8 rounded px-2 outline-none" placeholder="Masukan email kamu" type="text" name="email" id="email">
                    <input class="h-8 rounded px-2 outline-none" placeholder="Masukan password kamu" type="password" name="password" id="password">
                    <button class="w-40 bg-orange-500 text-white rounded py-1" type="submit">Masuk</button>
                </form>
            </div>
        </div>
    </main>

    <script>
        function showUpFormLogin(){
           const formLogin = document.getElementById("formLogin")
           const formRegis = document.getElementById("formRegis")
           formLogin.classList.remove("hidden")
           formLogin.classList.add("slide-right")
           formLogin.classList.remove("slide-right-out")
           formRegis.classList.add("slide-left-out")
        }
        function showUpFormRegis(){
            const formRegis = document.getElementById("formRegis")
            const formLogin = document.getElementById("formLogin")
            formRegis.classList.remove("hidden")
            formRegis.classList.add("slide-left")
            formRegis.classList.remove("slide-left-out")
            formLogin.classList.add("slide-right-out")
        }
    </script>
    <script>
        function soonGuest(){
            Swal.fire({
                title: 'Fitur akan datang',
                text: 'Tunggu update berikutnya :)',
                icon: 'info',
                confirmButtonText: 'Okay !'
            })
        }
    </script>
</body>
</html>