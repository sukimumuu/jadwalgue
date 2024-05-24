<!DOCTYPE html>
<html lang="en">
@include('components..partials.head')
<body class="nunito">
    <div class="z-0 relative w-screen h-screen blur">
        <div class="flex">
            <div class="w-1/5 h-screen bg-emerald-400">
                <div class="w-4/5 mx-auto h-22 text-center py-3 border-b-2 border-b-white">
                    <h3 class="text-3xl nunito-500 text-white mb-5">Jadwal Gue</h3>
                    <span class="nunito-500 text-white text-xl">Halo, User</span>
                </div>
                <ul class="w-full mt-3">
                    <li class="w-11/12 rounded-tr-xl rounded-br-xl h-10 items-center flex px-3 gap-3 text-white nunito-400 text-lg hover:bg-orange-400 cursor-pointer bg-orange-400"><a href=""><i class="fa-solid fa-clipboard-list w-6"></i> Hari Ini</a></li>
                    <li class="w-11/12 rounded-tr-xl rounded-br-xl h-10 items-center flex px-3 gap-3 text-white nunito-400 text-lg hover:bg-orange-400 cursor-pointer "><a href=""><i class="fa-solid fa-rectangle-list w-6"></i> Prioritas</a></li>
                </ul>
            </div>  
            <div class="w-4/5">
                @include('components.partials.navbar')
            </div>
        </div>
    </div>
        <div id="profileSetup" class="z-10 hidden w-7/12 absolute top-1/2 left-1/2 -translate-x-2/4 -translate-y-1/2  text-center rounded py-8 bg-emerald-400 text-white shadow-xl">
            <span class="absolute top-2 right-4 underline underline-offset-4 cursor-pointer" onclick="skipStep()">Lewati</span>
            <p class="text-lg mb-5 nunito-600 cursor-default">Lengkapi Profil Kamu</p>
            <div class="w-4/6 mx-auto">
                <form action="{{ route('store-complete-profil', ['id'=>Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <label for="avatar" class="nunito-500 cursor-default">Foto Profil</label>
                        <div class="w-44 h-44 mx-auto flex items-center justify-center rounded-full bg-slate-200">
                        <i class="fa-solid fa-user text-8xl text-white"></i>
                        <input type="file" name="avatar" id="avatar" class=" w-44 h-44 opacity-0 absolute cursor-pointer rounded-full" >
                    </div>
                    <div class="w-56 mx-auto relative mb-8">
                        <input class="bg-transparent outline-none mt-5 border-b-2 border-b-white me-2 placeholder-white px-3 nunito-400" type="text" id="uname" name="name" placeholder="Buat username kamu">
                        <label for="uname" class="absolute right-1 top-5 cursor-pointer"><i class="fa-solid fa-pencil text-white"></i></label>
                    </div>
                    <button class="bg-orange-400 text-white hover:bg-orange-500 py-2 px-4 rounded nunito-300">
                        Simpan Profil
                    </button>
                </form>
            </div>
        </div>
   <script>
        window.addEventListener('load', function() {
            const profileSetupDiv = document.getElementById('profileSetup');
            profileSetupDiv.classList.remove('hidden');
            profileSetupDiv.classList.add('zoom-out');
        });

        function skipStep(){
            const profileSetupDiv = document.getElementById('profileSetup');
            profileSetupDiv.classList.add("slide-out");
            var checkPosition = setInterval(function() {
                var leftPosition = parseInt(window.getComputedStyle(profileSetupDiv).left, 10);
                if (leftPosition <= -0.5 * window.innerWidth) { // 50% of the window width
                    profileSetupDiv.classList.add('hidden');
                    clearInterval(checkPosition);
                    window.location.href = '/jadwalgue/beranda';
                }
            }, 50);

        }
   </script>
</body>
</html>