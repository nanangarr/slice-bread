<!DOCTYPE html>
<html :class="" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="../../js/init-alpine.js"></script>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    <div > 
        <div class=" p-16 bg-[#FBF6EA] place-items-center">
            <div class=" p-8 ">
                <h1 class="text-6xl font-bold text-center"><span class="text-[#FF9F0D]">S</span>lice <span class="text-[#FF9F0D]">B</span>akery</h1>
            </div>
            <div >
                <div class="border rounded-lg bg-white p-8 space-y-3"> 
                    <h3 class="text-3xl font-bold"> Buat Kata Sandi Baru</h3>
                    <div class="relative">
                        <img src="{{ asset('../../images/email.png') }}" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"/>
                        <input type="Email" class="shadow rounded-lg border border-x-darkgrey py-3 pl-12 pr-3 w-full " placeholder="Email"/>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('../../images/Lock.png') }}" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"/>
                        <input type="Password" class="shadow border rounded-lg border-x-darkgrey py-3 pl-12 pr-3 w-full " placeholder="Password Baru"/>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('../../images/Lock.png') }}" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"/>
                        <input type="Password" class="shadow border rounded-lg border-x-darkgrey py-3 pl-12 pr-3 w-full " placeholder="Ulangi Password"/>
                    </div>
                    <a href="/login">
                        <button class="w-full bg-[#FF9F0D] transision rounded-lg font-semibold py-3 mb-10">
                            Buat Baru
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>