<div>
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape"><img src="{{ asset('assets/images/shapes/page-header-shape.png') }}" alt="hiredots"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">News</h2>
            <ul class="hiredots-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Blogs</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="blog-one blog-one--page">
        <div class="container">
            <div class="row gutter-y-30">
                @foreach($blogs as $blog)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='{{ $loop->index * 100 }}ms'>
                            <div class="blog-card__image">
                                <img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="{{ $blog->title }}">
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__date">
                                    <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</span>
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('M') }}
                                </div><!-- /.blog-card__date -->
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="#"><i class="fas fa-tags"></i>Bussiness</a></li>
                                    <li><a href="{{ route('blog.detail', $blog->id) }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title">
                                    <a href="{{ route('blog.detail', $blog->id) }}">{{ $blog->title }}</a>
                                </h3><!-- /.blog-card__title -->
                                <p class="blog-card__info">{{ Str::limit($blog->description, 150) }}</p>
                                <a href="{{ route('blog.detail', $blog->id) }}" class="blog-card__link">
                                    Read more
                                    <i class="icon-right-arrow"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                @endforeach
                {{-- <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                        <div class="blog-card__image">
                            <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="Guide to HR Adviser and Clients Lessening">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date"><span>30</span>
                                Aug</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog.html"><i class="fas fa-tags"></i>Employee Development</a></li>
                                <li><a href="{{ route('blog.detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="{{ route('blog.detail') }}">Empowering Employees in the Digital Age</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__info">In the era of digital transformation, Molden recognizes the importance of empowering employees with the right skills.p>
                            <a href="{{ route('blog.detail') }}" class="blog-card__link">
                                Read more
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="blog-card__image">
                            <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="Top Skin care tips for oily skins">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date"><span>30</span>
                                Aug</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog.html"><i class="fas fa-tags"></i>Sustainability</a></li>
                                <li><a href="{{ route('blog.detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="{{ route('blog.detail') }}">Sustainability Initiatives at Molden Headquarters</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__info">Molden is dedicated to making a positive impact on the environment.</p>
                            <a href="{{ route('blog.detail') }}" class="blog-card__link">
                                Read more
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                        <div class="blog-card__image">
                            <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="outstanding island for winter sun">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date"><span>30</span>
                                Aug</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog.html"><i class="fas fa-tags"></i>Remote Work</a></li>
                                <li><a href="{{ route('blog.detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="{{ route('blog.detail') }}">Navigating Remote Work Challenges with Molden</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__info">Remote work has become the new normal, and Molden is at the forefront of supporting its employees in this transition.</p>
                            <a href="{{ route('blog.detail') }}" class="blog-card__link">
                                Read more
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                        <div class="blog-card__image">
                            <img src="{{ asset('assets/images/blog/blog-1-4.jpg') }}" alt="My supervisor didn't like the latest">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date"><span>30</span>
                                Aug</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog.html"><i class="fas fa-tags"></i>Business</a></li>
                                <li><a href="{{ route('blog.detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="{{ route('blog.detail') }}">My supervisor didn't like the latest</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                            <a href="{{ route('blog.detail') }}" class="blog-card__link">
                                Read more
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                        <div class="blog-card__image">
                            <img src="{{ asset('assets/images/blog/blog-1-5.jpg') }}" alt="We need to build it so that it scales">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date"><span>30</span>
                                Aug</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog.html"><i class="fas fa-tags"></i>Business</a></li>
                                <li><a href="{{ route('blog.detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="{{ route('blog.detail') }}">We need to build it so that it scales</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                            <a href="{{ route('blog.detail') }}" class="blog-card__link">
                                Read more
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                        <div class="blog-card__image">
                            <img src="{{ asset('assets/images/blog/blog-1-6.jpg') }}" alt="Big picture organic growth, or fast">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date"><span>30</span>
                                Aug</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog.html"><i class="fas fa-tags"></i>Business</a></li>
                                <li><a href="{{ route('blog.detail') }}"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="{{ route('blog.detail') }}">Big picture organic growth, or fast</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                            <a href="{{ route('blog.detail') }}" class="blog-card__link">
                                Read more
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-6 col-lg-4 --> --}}
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-one--page -->
</div>
