<footer class="main-footer background-black">
    <div class="main-footer__bg" style="background-image: url(assets/images/backgrounds/footer-bg.jpg);"></div>
    <!-- /.main-footer__bg -->
    <div class="main-footer__subscribe">
        <div class="container">
            <div class="main-footer__subscribe__wrapper">
                <div class="main-footer__subscribe__left">
                    <span class="main-footer__subscribe__icon"><i class="icon-message"></i></span>
                    <h3 class="main-footer__subscribe__title">Contact Us Now</h3>
                </div>
                <div class="main-footer__subscribe__right">
                    <form action="#" data-url="MAILCHIMP_FORM_URL" class="main-footer__newsletter mc-form">
                        <input type="text" name="EMAIL" placeholder="Email address">
                        <button type="submit" class="fas fa-paper-plane">
                            <span class="sr-only">Send</span><!-- /.sr-only -->
                        </button>
                    </form><!-- /.footer-widget__newsletter mc-form -->
                    <div class="mc-form__response"></div><!-- /.mc-form__response -->
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-5">
                    <div class="footer-widget footer-widget--about">
                        <a href="index.html" class="footer-widget__logo">
                            <img src="{{ asset('assets/images/logo-light.png') }}" width="125" alt="Hiredots HTML Template">
                        </a>
                        <p class="footer-widget__text">We specialize in skilled and semi-skilled labor in fields of Security Guards, House Helps, Cleaners, Construction workers, drivers, paramedics, Home nurses, teachers, sales personnel etc. Our major areas of deployment are UAE, Saudi Arabia, Jordan, Oman, Kuwait, Canada, UK and Qatar.</p>

                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-2">
                    <div class="footer-widget footer-widget--links">
                        <h2 class="footer-widget__title">Links</h2><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('jobs') }}">Jobs</a></li>
                            <li><a href="{{ route('team') }}">About Molden</a></li>
                            <li><a href="{{ route('blogs') }}">News & Media</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('faqs') }}">Faqs</a></li>
                            <li><a href="{{ route('team') }}">Team</a></li>
                        </ul><!-- /.list-unstyled footer-widget__links -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
                {{-- <div class="col-md-6 col-xl-2">
                    <div class="footer-widget footer-widget--contact">
                        <h2 class="footer-widget__title">Links</h2><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="{{ route('about') }}">Apply Now</a></li>
                            <li><a href="{{ route('contact') }}">Contract to Hire</a></li>
                            <li><a href="{{ route('team') }}">Direct Hire</a></li>
                            <li><a href="history.html">Executive Search</a></li>
                            <li><a href="{{ route('about') }}">Our Solutions</a></li>
                        </ul><!-- /.list-unstyled footer-widget__links -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 --> --}}
                <div class="col-md-6 col-xl-3">
                    <div class="footer-widget footer-widget--time">
                        <h2 class="footer-widget__title">Find Us At</h2><!-- /.footer-widget__title -->
                        <p class="footer-widget__text"> Nakibibinge Road, Namungona, Lubaga Division <br> Kampala, UG</p>
                        <!-- /.footer-widget__text -->
                        <ul class="list-unstyled footer-widget__info">
                            <li><i class="fas fa-envelope"></i> <a href="mailto:moldeninternationalconsultants@gmail.com">moldeninternationalconsultants@gmail.com</a></li>
                            <li><i class="fas fa-phone-square"></i> <a href="tel:+256414673718">+256-414-673-718</a></li>
                            <li><i class="fas fa-phone-square"></i> <a href="tel:+256787752329">+256-787-752-329</a></li>
                            <li><i class="fas fa-phone-square"></i> <a href="tel:+256741738821">+256-741-738-821</a></li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__top -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <div class="footer-widget__social">
                    <a href="https://twitter.com">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                    <a href="https://facebook.com">
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="https://pinterest.com">
                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                        <span class="sr-only">TikTok</span>
                    </a>
                    <a href="https://instagram.com">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        <span class="sr-only">Instagram</span>
                    </a>
                </div><!-- /.footer-widget__social -->
                <p class="main-footer__copyright">
                    &copy; Copyright <span class="dynamic-year"></span> by luwa Technologies, Inc. <span class="dynamic-year accordion">2023</span>

                </p>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
</footer><!-- /.main-footer -->
