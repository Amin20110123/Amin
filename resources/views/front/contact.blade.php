@extends('front.layouts.main')

@section('content')
<section class="contact">
    <div class="container contact__container">
        <aside class="contact__aside">
            <div class="aside__image">
                <img src="assets/images/contact.svg">
            </div>
            <h2>Biz bilan bog'laning</h2>
            <p>
                Biz bilan quyidagi telefonraqam yoki elektron manzil orqali bog'lanishingiz mumkin.
            </p>
            <ul class="contact__details">
                <li>
                    <i class="uil uil-phone-times"></i>
                    <h5>+998 50 012-81-58</h5>
                </li>
                <li>
                    <i class="uil uil-envelope"></i>
                    <h5>kartishkacoding@gmail.com</h5>
                </li>
                <li>
                    <i class="uil uil-location-point"></i>
                    <h5>O'zbekiston, Buxorov</h5>
                </li>
            </ul>
            <ul class="contact__socials">
                <li> <a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a></li>
                <li> <a href="https://instagram.com"><i class="uil uil-instagram"></i></a></li>
                <li> <a href="https://twitter.com"><i class="uil uil-twitter"></i></a></li>
                <li> <a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a></li>
            </ul>
        </aside>




        <form action="https://formspree.io/f/xeqnevgj" method="POST" class="contact__form">
            <div class="form__name">
                <input type="text" name="Ismingiz" placeholder="Ismingiz" required>
                <input type="text" name="Familiyangiz" placeholder="Familiyangiz" required>
            </div>
            <input type="email" name="Elektron Pochta" placeholder="Elektron Pochtangiz" required>
            <textarea name="Message" rows="7" placeholder="Xabar" required></textarea>
            <button type="submit" class="btn btn-primary">Yuborish</button>
        </form>
    </div>
</section>


@endsection