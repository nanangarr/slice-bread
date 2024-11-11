<!DOCTYPE html>
<html :class="" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @include('sweetalert::alert')
    <div > 
        <div class="grid grid-cols-2 bg-[#FBF6EA] p-16  place-items-center">
            <div class=" p-16 ">
                <h1 class="text-6xl font-bold text-center"><span class="text-[#FF9F0D]">S</span>lice <span class="text-[#FF9F0D]">B</span>akery</h1>
            </div>
            <div >
                <form class="border bg-white p-8 space-y-3 needs-validation" novalidate action="/register" method="POST"> 
                    @csrf
                    <h3 class="text-3xl font-bold"> Halaman Pendaftaran</h3>
                    <div class="relative">
                        <img src="{{ asset('../../images/User.png') }}" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"/>
                        <input type="name" name="name" id="name" class="shadow border border-x-darkgrey py-3 pl-12 pr-3 w-full " placeholder="Username" required=""/>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('../../images/email.png') }}" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"/>
                        <input type="email" name="email" id="email" class="shadow border border-x-darkgrey py-3 pl-12 pr-3 w-full " placeholder="Email" required=""/>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('../../images/Lock.png') }}" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"/>
                        <input type="password" name="password" id="password" class="shadow border border-x-darkgrey py-3 pl-12 pr-3 w-full " placeholder="Password" required=""/>
                    </div>
                    <div>
                        <a> 
                            <button type="submit" class="w-full bg-[#FF9F0D] transision font-semibold py-3 mb-2">Daftar
                            </button>
                        </a>
                    </div>
                </div>
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