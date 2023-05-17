<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://kit.fontawesome.com/942a14da0c.js" crossorigin="anonymous"></script>
    <title>KelasQue</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/style/global.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                bg: '#F6F5F1',
                dua: '#dcd7c9',
                tiga: '#966844',
                empat: '#c2c8c6',
                lima: '#3f4e51',
                enam: '#2c3638',
                text: '#12294a',
                lain: '#81172c',
                ini: '#f7f6f8',
              },
              fontFamily: {
                lato: ['Lato'],
              },
              screens: {
                'xs': {'max': '639px'}
              },
            },
          },
        };
    </script>
</head>
<body>
    <div class="pembungkus">
        <div class="wrapper font-lato">
            <header class="top-0 fixed w-full shadow-sm">
                <nav class="flex justify-between items-center bg-white py-3 px-7">
                    <div class="logo flex gap-3 justify-center items-center">
                        <a class="text-text h-12 w-12 rounded-full bg-ini flex justify-center items-center" href="#" id="btn"><i class="" data-feather="align-left"></i></a>
                        <h3 class="font-black text-xl text-text">Kelas<span class="text-lain">Que</span></h3>
                    </div>
                    <ul class="gap-3 text-text xs:hidden flex justify-center items-center">
                        <li><a href="">Home</a></li>
                        <li><a href="">Tutor</a></li>
                        <li><a href="">About</a></li>
                        <a class="bg-text px-5 py-1 text-white rounded-lg hover:bg-transparent hover:text-text hover:border-solid hover:border-text hover:border-2 transition" href="">Login</a>
                    </ul>
                </nav>
            </header>
            <div class="container mx-auto">
                <div class="content-1 px-8 lg:flex lg:flex-row mb-10">
                    <div class="gambar w-1/2 xs:w-full lg:hidden">
                        <img src="{{ asset('assets/images/pe.png') }}" alt="">
                    </div>
                    <div class="deskripsi text-text text-sm mb-6">
                        <div class="judul mb-4 lg:mt-40">
                            <h3 class="text-2xl font-black text-text max-w-xs lg:text-4xl lg:max-w-lg">KelasQue - Kumpulan Sukses di Tangan Kita: Angkatan 2022/2025</h3>
                        </div>
                        <p class="max-w-xl">KelasQue adalah website yang menghubungkan angkatan tahun 2022/2025 dari SMKN 1 Bangsri. Anggota dapat berinteraksi, berkolaborasi, dan membangun jaringan profesional dengan forum diskusi, grup chat, dan direktori anggota. KelasQue juga menyediakan konten inspiratif untuk pengembangan diri, karir, dan kepemimpinan. Dengan KelasQue, anggota angkatan 2021/2022 dapat meraih sukses bersama-sama.</p>
                        <div class="btn mt-8">
                            <a class="px-6 py-3 bg-text rounded-md text-white text-sm font-bold hover:bg-transparent hover:text-text hover:px-8 hover:border-solid hover:border-text hover:border-2 transition" href="">Get Started</a>
                        </div>
                    </div>
                    <div class="gambar xs:hidden w-1/2 xs:w-full">
                        <img src="{{ asset('assets/images/pe.png') }}" alt="">
                    </div>
                </div>
                <div class="content-2 px-6">
                    <div class="isi lg:grid lg:grid-cols-2">
                        <div class="gambar mb-5">
                            <img class="rounded-lg" src="{{ asset('assets/images/02.png') }}" alt="">
                        </div>
                        <div class="text lg:px-14 xs:px-2">
                            <div class="judul text-text font-black text-4xl mb-5">
                                <h3>Untuk apa platform ini:</h3>
                            </div>
                            <div class="deskripsi">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem suscipit voluptatem incidunt. Enim facilis minus, fuga hic aliquam facere maxime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-03">
                <div class="isi w-full h-52 bg-text">

                </div>
            </div>
        </div>
    </div>
    <script>
        feather.replace()
    </script>
</body>
</html>