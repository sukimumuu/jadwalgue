<!DOCTYPE html>
<html lang="en">
@include('components..partials.head')
<body class="nunito">
    <div class="z-0 relative w-screen h-screen blur">
        <div class="flex">
            @include('components.partials.sidebar')
            <div class="w-4/5">
                @include('components.partials.navbar')
            </div>
        </div>
    </div>
        <div id="profileSetup" class="z-10 hidden w-7/12 absolute top-1/2 left-1/2 -translate-x-2/4 -translate-y-1/2  text-center rounded py-8 bg-emerald-400 text-white shadow-xl">
            <span class="absolute top-2 right-4 underline underline-offset-4 cursor-pointer" onclick="skipStep()">Lewati</span>
            <p class="text-lg mb-5 nunito-600 cursor-default">Lengkapi Profil Kamu</p>
            <div class="w-4/6 mx-auto">
                <form action="" method="post" enctype="multipart/form-data">
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