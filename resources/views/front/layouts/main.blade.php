<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartishka Coding</title>

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/logo.css') }}">


    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- GOOGLE FONTS (MONSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- SWIPER JS -->
    <link rel="stylesheet" href=" https://unpkg.com/swiper @7/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <style>
        body{ background-image: url("./images/bg-texture.png"); }
    </style>



    @yield('css')

</head>
<body>
    <div class="management">
        <div class="container-fluid">
    
            @include('front.layouts.includes.nav')
            
            @yield('header')
            @yield('content')
            @include('front.layouts.includes.footer')
            
            

            <!-- <script src=" https://unpkg.com/swiper @7/swiper-bundle.min.js"></script> -->

            <!-- <script src="./main.js"></script> -->
            <script src="{{ asset('js/main.js')  }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    freeMode: true,
                    pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                // when window width is >= 600px
                breakpoints: {
                    600: {
                        slidesPerView: 2
                    }
                } 
            });
            </script>
        
        </div>
    </div>
@yield('js')

</body>
</html>