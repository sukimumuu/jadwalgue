<!DOCTYPE html>
<html lang="en">
@include('components.partials.head')
<body class="nunito">
    <main class="w-full">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
            <img src="{{ asset('assets/logo/jadwalgue-logo.png') }}" alt="" srcset="" width="180" class="mb-5">
            <span class="nunito-500 text-xl cursor-pointer" onclick="showUpFormLogin()">Jadwal Gue</span>
        </div>
        <div class="w-2/5 h-screen bg-emerald-400 right-0 flex items-center fixed hidden" id="formLogin">
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
    </main>
    <script>
        function showUpFormLogin(){
           const formLogin = document.getElementById("formLogin")
           formLogin.classList.remove("hidden")
           formLogin.classList.add("slide-in")
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