<div>
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape"><img src="{{ asset('assets/images/shapes/page-header-shape.png') }}" alt="hiredots"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">{{ $service->name }}</h2>
            <ul class="hiredots-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Services Details</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="service-details">
        <div class="container">
            <div class="row gutter-y-30">

                <div class="col-md-12 col-lg-8">
                    <div class="service-details__content">
                        <div class="service-details__thumbnail">
                            <img src="{{ asset('uploads/services/' . $service->image) }}" alt="{{ $service->name }}">
                        </div><!-- /.service-details__thumbnail -->
                        <h3 class="service-details__title">{{ $service->name }}</h3><!-- /.service-details__title -->
                        <p class="service-details__text">{{ $service->desc }}</p>
                        <!-- /.service-details__text -->
                        <h3 class="service-details__lighlight">Helping Clients to Solve Recruitments Problems</h3>
                        <!-- /.service-details__title -->
                        <p class="service-details__text">As the leading recruitment agency in Uganda, we use the experience and expertise of our team to offer effective solutions to meet our clients' human resource needs. We are committed to providing high-quality service and ensuring we
                            fulfill the specific requirements of our valued clients in recruitment, manpower supply, and training</p><!-- /.service-details__text -->

                        <h3 class="service-details__title">Why Choose?</h3><!-- /.service-details__title -->
                        <div class="list-unstyled service-details__process">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="service-details__process__top item-1">
                                        <h4 class="service-details__process__title">Support for <br>
                                            Workers and Employers</h4><!-- /.service-details__process__title -->
                                        <span class="service-details__process__icon"><i class="icon-individual"></i></span>
                                    </div><!-- /.service-details__process__top -->
                                </div>
                                <div class="col-md-4">
                                    <div class="service-details__process__top item-2">
                                        <h4 class="service-details__process__title">Timely and  <br>
                                            Efficient Services,Always</h4><!-- /.service-details__process__title -->
                                        <span class="service-details__process__icon"><i class="icon-time-check"></i></span>
                                    </div><!-- /.service-details__process__top -->
                                </div>
                                <div class="col-md-4">
                                    <div class="service-details__process__top item-3">
                                        <h4 class="service-details__process__title">Compliance and  <br>
                                            Reliable Transparency</h4><!-- /.service-details__process__title -->
                                        <span class="service-details__process__icon"><i class="icon-report-card"></i></span>
                                    </div><!-- /.service-details__process__top -->
                                </div>
                            </div>
                        </div><!-- /.list-unstyled service-details__process -->
                        <div class="row gutter-y-30 align-items-center">
                            <div class="col-md-6">
                                <div class="service-details__image__circle">
                                    <img src="{{ asset('assets/images/resources/about-1-2.jpg') }}" alt="">
                                </div><!-- /.service-details__image__circle -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <h4 class="service-details_list-title">Our Benefits</h4><!-- /.service-details__sub-title -->
                                <p class="service-details_list-text">By partnering with Molden International, workers gain a range of valuable benefits</p>
                                <ul class="list-unstyled service-details__list">
                                    <li><i class="fas fa-check-circle"></i> Medical Insurance </li>
                                    <li><i class="fas fa-check-circle"></i> Accomodation</li>
                                    <li><i class="fas fa-check-circle"></i>Return Ticket</li>
                                    <li><i class="fas fa-check-circle"></i>Visa Assistance</li>

                                </ul><!-- /.list-unstyled service-details__post -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.service-details__content -->
                </div><!-- /.col-md-12 col-lg-8 -->
                <div class="col-md-12 col-lg-4">
                    <div class="service-sidebar">
                        <div class="service-sidebar__single">
                            <ul class="list-unstyled service-sidebar__nav">
                                @foreach ($services as $service)
                                    <li><a href="{{ route('service.detail', ['serviceId' => $service->id]) }}">{{ $service->name }}</a></li>
                                @endforeach
                            </ul><!-- /.list-unstyled service-sidebar__nav -->
                        </div><!-- /.service-sidebar__single -->
                        <div class="service-sidebar__single ">
                            <div class="service-sidebar__contact background-base" style="background-image: url(assets/images/resources/service-sidebar-d-1.png);">
                                <h3 class="service-sidebar__contact__title">Recruitment
                                    Solutions for all
                                    Businesses</h3><!-- /.service-sidebar__contact__title -->
                                <a class="hiredots-btn" href="{{ route('contact') }}"> Contact</a>
                            </div><!-- /.service-sidebar__contact -->
                        </div>
                        <div class="service-sidebar__single ">
                            <div class="service-sidebar__download background-primary">
                                <div class="service-sidebar__download__icon">
                                    <i class="icon-pdf-file"></i>
                                </div><!-- /.service-sidebar__contact__icon -->
                                <div class="serice-sidebar__download">
                                    <h3 class="service-sidebar__download__title"><a href="#">Project Agreement Form</a></h3><!-- /.service-sidebar__contact__title -->
                                    <p class="service-sidebar__download__number">3.9KB</p><!-- /.service-sidebar__contact__number -->
                                </div>
                            </div><!-- /.service-sidebar__contact -->
                        </div>
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-12 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-details -->
</div>
