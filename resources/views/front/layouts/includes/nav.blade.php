<nav>
    <div class="container nav__container">
        <a href="{{route('main')}}"><img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo" class="logo"></a>
        <ul class="nav__menu">
            <li><a href="{{route('main')}}">Asosiy</a></li>
            <li><a href="{{route('about')}}">Biz haqimizda</a></li>
            <li><a href="{{route('courses')}}">Kurslar</a></li>
            <li><a href="{{route('contact')}}">Biz bilan bog'laning</a></li>
        </ul>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
    </div>
</nav>