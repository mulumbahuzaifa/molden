<div>
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape"><img src="{{ asset('assets/images/shapes/page-header-shape.png') }}" alt="hiredots"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">Contact</h2>
            <ul class="hiredots-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Contact</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="contact-one pt-100 pb-100">
        <div class="container">
            <div class="contact-one__inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-one__content">
                            <div class="sec-title text-@@textAlign">

                                <h6 class="sec-title__tagline">Contact us</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Feel Free to Get in Touch <br> Molden internationa Ltd</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="contact-one__text">
                                Our dedicated team of experts is here to always respond to you r needs any time from anywhere.
                            </p><!-- /.contact-one__text -->
                            <ul class="list-unstyled contact-one__info">
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-phone-call-1"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Have Question?</p>
                                        <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title">Free <a href="tel:+256414673718">+256 414-673-718</a> | <a href="+256787752329">+256 787-752-329</a> | <a href="+256741738821">+256 741-738-821</a></h4><!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-message"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Write Email </p>
                                        <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title"><a href="mailto:moldeninternationalconsultants@gmail.com">moldeninternationalconsultants@gmail.com</a></h4>
                                        <!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-placeholder"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Visit Anytime</p> <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title"><a href="#">Nakibinge road Lubaga, Kampala-Uganda</a></h4><!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        {{-- <div class="contact-one__left"> --}}
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            <form class="contact-one__form contact-form-validated form-one background-base wow fadeInUp" data-wow-duration="1500ms" wire:submit.prevent="sendMessage">
                                @csrf
                                <div class="form-one__group">
                                    <div class="form-one__control form-one__control--full">
                                        <input type="text" name="name" placeholder="Your name" wire:model="name">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- /.form-one__control form-one__control--full -->
                                    <div class="form-one__control  form-one__control--full">
                                        <input type="email" name="email" placeholder="Email address"  wire:model="email">
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- /.form-one__control form-one__control--full -->
                                    <div class="form-one__control form-one__control--full">
                                        <input type="text" name="phone" placeholder="Phone number" wire:model="phone">
                                        @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- /.form-one__control form-one__control--full -->

                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Write  a message"  wire:model="comment"></textarea><!-- /# -->
                                        @error('comment')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="hiredots-btn hiredots-btn--white"><span>send a message</span></button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                        {{-- </div> --}}

                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.contact-one__inner -->
        </div><!-- /.container -->
    </section><!-- /.contact-one -->


</div>
