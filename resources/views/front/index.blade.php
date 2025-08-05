@extends('front.layouts.main')

@section('header')
    @include('front.layouts.includes.header')
@endsection

@section('content')
    <!-- =============================END OF NAVBAR========================= -->
    
    <!-- =============================END OF HEADER========================= -->
    <section class="categories">
        <div class="container categories__container">
            <div class="categories__left">
                <h1>Yo'nalishlar</h1>
                <p>
                Bizda turli sohalarni qamrab olgan zamonaviy yo'nalishlar mavjud. Har bir yo'nalish sizga zarur bilim va ko'nikmalarni berib, kasbiy o'sishingizga zamin yaratadi.
                </p>
                <a href="#" class="btn">Batafsil</a>
            </div>

            <div class="categories__right">
            @foreach($categories as $category)
                <article class="category">
                    <span class="category__icon"><i class="fa-solid fa-code"></i></span>
                    <h5>{{ $category->box_title}}</h5>
                    <p>{{ $category->box_description}}</p>
                </article>
            @endforeach
            </div>
        </div>
    </section>
            <!-- =============================END OF CATEGORIES========================= -->
            
    <section class="courses">
        <h2>Kurslar</h2>
        <div class="container courses__container">
                    @foreach($courses as $course)
            <article class="course">
                <div class="course__Image">
                    <img src="assets/images/kurs.jpg">
                </div>
                <div class="course__info">
                    <h4>{{ $course->title}}</h4>
                <p>{{ $course->description}}</p>
                <a href="course.html" class="btn btn-primary">Batafsil</a>
                </div>
            </article>
            @endforeach

        </div>
    </section>

            <!-- ============================= END OF COURSES ========================= -->
    <section class="faqs">
        <h2>Savollar</h2>
        <div class="container faqs__container">
                    @foreach($questions as $question)
                <article class="faq">
                    <div class="faq__icon"><i class="uil uil-plus"></i></div>
                    <div class="question__answer">
                        <h4>{{ $question->title }}</h4>
                        <p> {{ $question->description }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

            <!-- =============================END OF FAQs========================= -->

    <section class="container testimonials__container mySwiper">
        <h2>Bizning Jamoa</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <!-- <img src="assets/images/avatar1.jpg"> -->
                </div>
                <div class="testimonial__info">
                    <h5>Shokhzod Ne'matov</h5>
                    <small>Web Developer & Teacher</small>
                </div>
                    <!-- <div class="testimonial__body">
                        <p>
                            3 Yillik tajribaga ega dasturchiman
                        </p>
                    </div> -->
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <!-- <img src="assets/images/avatar2.jpg"> -->
                </div>
                <div class="testimonial__info">
                    <h5>Amin Muxtorov</h5>
                    <small>Student</small>
                </div>
                    <!-- <div class="testimonial__body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolorem vel aperiam, sunt rerum sit rem cumque aut! Nobis velit rerum fugit, at nemo vel placeat facilis illo debitis et.
                        </p>
                    </div> -->
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <!-- <img src="assets/images/doston.png"> -->
                </div>
                <div class="testimonial__info">
                        <h5>Doston Shamsiyev</h5>
                        <small>Student</small>
                    </div>
                        <!-- <div class="testimonial__body">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolorem vel aperiam, sunt rerum sit rem cumque aut! Nobis velit rerum fugit, at nemo vel placeat facilis illo debitis et.
                            </p>
                        </div> -->
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <!-- <img src="assets/images/suxrob.jpg"> -->
                </div>
                <div class="testimonial__info">
                        <h5>Suxrob Shodmonov</h5>
                        <small>Student</small>
                    </div>
                        <!-- <div class="testimonial__body">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolorem vel aperiam, sunt rerum sit rem cumque aut! Nobis velit rerum fugit, at nemo vel placeat facilis illo debitis et.
                            </p>
                        </div> -->
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <!-- <img src="assets/images/avatar5.jpg"> -->
                </div>
                <div class="testimonial__info">
                        <h5>Bek Arslonov</h5>
                        <small>Student</small>
                    </div>
                        <!-- <div class="testimonial__body">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolorem vel aperiam, sunt rerum sit rem cumque aut! Nobis velit rerum fugit, at nemo vel placeat facilis illo debitis et.
                            </p>
                        </div>  -->
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>
                <!-- =============================END OF TESTIMONIALS========================= -->

@endsection