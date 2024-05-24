<!DOCTYPE html>
<html lang="en">
@include('components.partials.head')
<body>
    <main>
        <div class="flex">
            @include('components.partials.sidebar')
            <div class="w-4/5">
                @include('components.partials.navbar')
                @yield('content')
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
        function btnLogout(){
            Swal.fire({
                title: "Apakah kamu yakin?",
                text: "Kamu akan melakukan sesi logout !",
                icon: "warning",
                showCancelButton: true,
                cancelButtonText: "Batal",
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Logout !"
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                    title: "Berhasil !",
                    text: "Kamu berhasil logout",
                    icon: "success"
                    }).then(() => {
                        window.location.href = "/logout";
                    });
                }
            });
        }
    </script>
    
</body>
</html>