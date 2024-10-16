<div>
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt=""></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">Job Details</h2>
            <ul class="hiredots-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Job Details</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section>
    <div class="project-details">
        <div class="container">
            <div class="col-md-12">
                {{-- <div class="col-md-6"> --}}
                    <div class="project-details__img">
                        <img src="{{ asset('uploads/jobs') }}/{{ $job->image }}" alt="{{ $job->title }}">
                        <div class="project-details__meta">
                            <div class="project-details__meta__item">
                                <span class="project-details__tagline">Destination</span>
                                <h3 class="project-details__title">{{ $job->location }}</h3>
                            </div>
                            <div class="project-details__meta__item">
                                <span class="project-details__tagline">Salary</span>
                                <h3 class="project-details__title"><b>{{ $job->salary }} UGx</b> Per Month</h3>
                            </div>
                            <div class="project-details__meta__item">
                                <span class="project-details__tagline">Duration</span>
                                <h3 class="project-details__title"><b>{{ $job->duration }}</b></h3>
                            </div>
                            <div class="project-details__meta__item">
                                <span class="project-details__tagline">Hours</span>
                                <h3 class="project-details__title"><b>{{ $job->hours }} Hours A day</b></h3>
                            </div>
                            <div class="project-details__meta__item">
                                <span class="project-details__tagline">Category</span>
                                <h3 class="project-details__title">{{ $job->category->name }}</h3>
                            </div>
                            <div class="project-details__meta__item">
                                <span class="project-details__tagline">Posted</span>
                                <h3 class="project-details__title">{{ $job->created_at->diffForHumans() }}</h3>
                            </div>
                            {{-- <div class="project-details__meta__item">
                                <span class="project-details__tagline">Value</span>
                                <h3 class="project-details__title">company.com</h3>
                            </div> --}}
                            {{-- <div class="project-details__social">
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
                                    <span class="sr-only">Pinterest</span>
                                </a>
                                <a href="https://instagram.com">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            </div><!-- /.footer-widget__social --> --}}
                        </div>
                    </div>
                    <div class="project-details__wrapper">
                        <h3 class="project-details__headline"> {{ $job->title }} </h3>
                        <p class="project-details__info">{{ $job->description }}</p>
                        <div class="project-details__feature">
                            {{-- <img src="assets/images/backgrounds/molden1.png" alt=""> --}}
                            <ul class="list-unstyled project-details__feature__list">
                                <li>
                                    <i class="fas fa-check-circle"></i> Medical Insurance
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i> Accomodation
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i> Return Ticket
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i> Meal Allowance
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i> Transport Allowance
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i> Visa Assistance
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i> Over Time Payment
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i> Training and Development
                                </li>
                            </ul>
                        </div>
                    </div>
                {{-- </div> --}}
                <div class="col-md-6">
                    <div class="project-details__apply">
                        <h3>Apply for {{ $job->title }}</h3>

                        @livewire('job-application-form', ['jobId' => $job->id])

                    </div>
                </div>
            </div>
            {{-- <div class="project-details__pagination">
                <span class="previous"><a href="#"><i class="icon-left-arrow"></i>Previous</a></span>
                <span class="next"><a href="#">Next <i class="icon-right-arrow"></i></a></span>
            </div> --}}
        </div>
    </div>
    <section class="project-one project-one--page">
        <div class="container">
            <div class="sec-title text-center">
                <h6 class="sec-title__tagline">Our Recent Jobs</h6>
                <h3 class="sec-title__title">Related Jobs in {{ $job->category->name }}</h3>
            </div><!-- /.sec-title -->
            <div class="hiredots-one__carousel hiredots-owl__carousel hiredots-owl__carousel--with-shadow hiredots-owl__carousel--basic-nav owl-carousel owl-theme owl-loaded owl-drag"
                data-owl-options="{
                &quot;items&quot;: 1,
                &quot;margin&quot;: 0,
                &quot;loop&quot;: false,
                &quot;smartSpeed&quot;: 700,
                &quot;nav&quot;: false,
                &quot;navText&quot;: [&quot;<span class=\&quot;fa fa-angle-left\&quot;></span>&quot;,&quot;<span class=\&quot;fa fa-angle-right\&quot;></span>&quot;],
                &quot;dots&quot;: false,
                &quot;autoplay&quot;: false,
                &quot;responsive&quot;: {
                    &quot;0&quot;: {
                        &quot;items&quot;: 1
                    },
                    &quot;576&quot;: {
                        &quot;items&quot;: 2,
                        &quot;margin&quot;: 30
                    },
                    &quot;992&quot;: {
                        &quot;items&quot;: 3,
                        &quot;margin&quot;: 30
                    }
                }
                }">






                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(0px, 0px, 0px); transition: all; width: 2160px;">
                        @foreach($relatedJobs as $relatedJob)
                            <div class="owl-item active" style="width: 330px; margin-right: 30px;">
                                <div class="item">
                                    <div class="project-one__card wow fadeInUp animated" data-wow-duration="1500ms"
                                        data-wow-delay="1ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 1ms; animation-name: fadeInUp;">
                                        <div class="project-one__img">
                                            <img src="{{ asset('uploads/jobs') }}/{{ $relatedJob->image }}" alt="{{ $relatedJob->title }}">
                                        </div>
                                        <div class="project-one__content">
                                            <span class="project-one__tagline">{{ $relatedJob->category->name }}</span>
                                            <h3 class="project-one__title"><a href="{{ route('job.detail', $relatedJob->id) }}">{{ $relatedJob->title }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="owl-item active" style="width: 330px; margin-right: 30px;">
                            <div class="item">
                                <div class="project-one__card wow fadeInUp animated" data-wow-duration="1500ms"
                                    data-wow-delay="1ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 1ms; animation-name: fadeInUp;">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/project-1-2.jpg" alt="Staffing Solution">
                                    </div>
                                    <div class="project-one__content">
                                        <span class="project-one__tagline">Resources</span>
                                        <h3 class="project-one__title"><a href="project-details.html">Staffing
                                                Solution</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 330px; margin-right: 30px;">
                            <div class="item">
                                <div class="project-one__card wow fadeInUp animated" data-wow-duration="1500ms"
                                    data-wow-delay="1ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 1ms; animation-name: fadeInUp;">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/project-1-3.jpg" alt="Staffing Solution">
                                    </div>
                                    <div class="project-one__content">
                                        <span class="project-one__tagline">Resources</span>
                                        <h3 class="project-one__title"><a href="project-details.html">Staffing
                                                Solution</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 330px; margin-right: 30px;">
                            <div class="item">
                                <div class="project-one__card wow fadeInUp animated" data-wow-duration="1500ms"
                                    data-wow-delay="1ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 1ms; animation-name: fadeInUp;">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/project-1-4.jpg" alt="Staffing Solution">
                                    </div>
                                    <div class="project-one__content">
                                        <span class="project-one__tagline">Resources</span>
                                        <h3 class="project-one__title"><a href="project-details.html">Staffing
                                                Solution</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 330px; margin-right: 30px;">
                            <div class="item">
                                <div class="project-one__card wow fadeInUp animated" data-wow-duration="1500ms"
                                    data-wow-delay="1ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 1ms; animation-name: fadeInUp;">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/project-1-5.jpg" alt="Staffing Solution">
                                    </div>
                                    <div class="project-one__content">
                                        <span class="project-one__tagline">Resources</span>
                                        <h3 class="project-one__title"><a href="project-details.html">Staffing
                                                Solution</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 330px; margin-right: 30px;">
                            <div class="item">
                                <div class="project-one__card wow fadeInUp animated" data-wow-duration="1500ms"
                                    data-wow-delay="1ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 1ms; animation-name: fadeInUp;">
                                    <div class="project-one__img">
                                        <img src="assets/images/project/project-1-6.jpg" alt="Staffing Solution">
                                    </div>
                                    <div class="project-one__content">
                                        <span class="project-one__tagline">Resources</span>
                                        <h3 class="project-one__title"><a href="project-details.html">Staffing
                                                Solution</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"
                        aria-label="carousel button"><span class="fa fa-angle-left"></span></button><button
                        type="button" role="presentation" class="owl-next" aria-label="carousel button"><span
                            class="fa fa-angle-right"></span></button></div>
                <div class="owl-dots disabled"></div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
</div>
