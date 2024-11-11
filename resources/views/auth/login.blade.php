<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen overflow-hidden bg-[#FBF6EA]">
    @include('sweetalert::alert')
    <div class="flex items-center justify-center h-full">
        <div class="grid grid-cols-2 p-16 max-w-6xl w-full items-center">
            <div class="p-16 ">
                <h1 class="text-6xl font-bold text-center">
                    <span class="text-[#FF9F0D]">S</span>lice <span class="text-[#FF9F0D]">B</span>akery
                </h1>
            </div>
            <div>
                <form class="border bg-white p-8 space-y-3 needs-validation" novalidate action="/login" method="POST">
                    <h3 class="text-3xl font-bold">Halaman Login</h3>
                    <div class="relative">
                        <img src="{{ asset('../../images/email.png') }}"
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5" />
                        <input type="email" name="email" id="email" class="shadow border border-x-darkgrey py-3 pl-12 pr-3 w-full"
                            placeholder="Email" />
                    </div>
                    <div class="relative">
                        <img src="{{ asset('../../images/Lock.png') }}"
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5" />
                        <input type="password" name="password" id="password" class="shadow border border-x-darkgrey py-3 pl-12 pr-3 w-full"
                            placeholder="Password" />
                    </div>
                    <div class="flex space-x-3">
                        <input type="checkbox" class="appearance-none checked:bg-[#FF9F0D]" />
                        <h5 class="text-sm">Ingatkan Saya?</h5>
                    </div>
                    <div>
                        <a>
                            <button type="submit"
                                class="w-full bg-[#FF9F0D] transition font-semibold py-3 mb-2">Login</button>
                        </a>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="flex self-beetwen">
                            <div class="flex">
                                <h5 class="text-sm text-x-mediumgrey mr-1">belum Punya akun?</h5>
                                <a href="/register"
                                    class="transition-colors duration-300 text-sm text-[#FF9F0D]">Daftar</a>
                            </div>
                        </div>
                        <div class="flex items-end self-end">
                            <a href="/reset"
                                class="transition-colors duration-300 text-sm text-x-mediumgrey justify-end items-end self end">Lupa
                                Kata Sandi</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>


</html>
