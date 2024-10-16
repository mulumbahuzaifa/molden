<div>
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape"><img src="{{ asset('assets/images/shapes/page-header-shape.png') }}" alt="hiredots"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">Services</h2>
            <ul class="hiredots-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Services</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="service-one service-one--page">
        <div class="container">
            <div class="row gutter-y-30">
                @foreach ($services as $service)
                <div class="col-md-6 col-lg-4">
                    <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="service-one-card__image">
                            <img src="{{ asset('uploads/services/' . $service->image) }}" alt="{{ $service->name }}">
                        </div><!-- /.service-one-card__image -->
                        <div class="service-one-card__content">
                            <div class="service-one-card__icon">
                                <i class="icon-consulting"></i>
                                <a href="#" class="service-one-card__cat">Category</a>
                            </div><!-- /.service-one-card__price -->
                            <h3 class="service-one-card__title">
                                <a href="{{ route('service.detail', ['serviceId' => $service->id]) }}">{{ $service->name }}</a>
                            </h3><!-- /.service-one-card__title -->

                            <p class="service-one-card__text">{{ Str::limit($service->desc, 150) }}</p>
                            <!-- /.service-one-card__text -->
                        </div><!-- /.service-one-card__content -->
                        <a href="{{ route('service.detail', ['serviceId' => $service->id]) }}" class="service-one-card__link">
                            Read More
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.service-one-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-page -->
</div>
