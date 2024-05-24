<div class="w-1/5 h-screen bg-emerald-400">
    <div class="w-4/5 mx-auto h-22 text-center py-3 border-b-2 border-b-white">
        <h3 class="text-3xl nunito-500 text-white mb-5">Jadwal Gue</h3>
        <span class="nunito-500 text-white text-xl">Halo, {{ Auth::user()->name }}</span>
    </div>
    <ul class="w-full mt-3">
        <li class="w-11/12 rounded-tr-xl rounded-br-xl h-10 items-center flex px-3 gap-3 text-white nunito-400 text-lg hover:bg-orange-400 cursor-pointer bg-orange-400"><a href=""><i class="fa-solid fa-clipboard-list w-6"></i> Hari Ini</a></li>
        <li class="w-11/12 rounded-tr-xl rounded-br-xl h-10 items-center flex px-3 gap-3 text-white nunito-400 text-lg hover:bg-orange-400 cursor-pointer "><a href=""><i class="fa-solid fa-rectangle-list w-6"></i> Prioritas</a></li>
    </ul>
</div>  