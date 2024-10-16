<div>
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape"><img src="{{ asset('assets/images/shapes/page-header-shape.png') }}" alt="hiredots"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">Jobs</h2>
            <ul class="hiredots-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>Jobs</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <div class="jobs">
        <div class="container">
            {{-- <form class="contact-form-validated" action="inc/sendemail.php" novalidate="novalidate"> --}}
                <div class="jobs__form wow fadeInUp animated" data-wow-duration="1500ms">
                    <div class="jobs__group row gutter-y-20">
                        <div class="col-md-6">
                            <div class="job__control Jobs__control--full">
                                <input type="text" class="form-control" placeholder="Search Job Title" wire:model="search">
                                {{-- <input type="text" name="name" placeholder="All Jobs"> --}}
                            </div><!-- /.Jobs__control Jobs__control--full -->
                        </div>
                        <div class="col-md-6">
                            <div class="jobs__control Jobs__control--full">
                                <input type="text" class="form-control" placeholder="Location" wire:model="location">
                                {{-- <input type="text" name="name" placeholder="Any Location"> --}}
                            </div><!-- /.Jobs__control Jobs__control--full -->
                        </div>
                        <div class="col-md-6">
                            <div class="jobs__control Jobs__control--full">
                                <select class="form-control" wire:model="categoryId">
                                    <option value="">All Categories</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div><!-- /.Jobs__control Jobs__control--full -->
                        </div>

                        <div class="col-md-3 mt-3">
                            <div class="jobs__control Jobs__control--full">
                                <input type="number" class="form-control" placeholder="Min Salary" wire:model="minSalary">
                            </div><!-- /.Jobs__control Jobs__control--full -->
                        </div>

                        <div class="col-md-3 mt-3">
                            <div class="jobs__control Jobs__control--full">
                                <input type="number" class="form-control" placeholder="Max Salary" wire:model="maxSalary">
                            </div><!-- /.Jobs__control Jobs__control--full -->
                        </div>
                    </div><!-- /.Jobs__group -->
                </div>

                {{-- <div class="jobs__form__checkbox" wire:model="categoryId">

                    <div class="item">
                        <input type="checkbox" id="full">
                        <label for="full" class="check"></label>
                        <label for="full"> Full Time </label>
                    </div>
                    <div class="item">
                        <input type="checkbox" id="part">
                        <label for="part" class="check"></label>
                        <label for="part"> Part Time </label>
                    </div>
                    <div class="item">
                        <input type="checkbox" id="temporary">
                        <label for="temporary" class="check"></label>
                        <label for="temporary"> Temporary </label>
                    </div>
                </div> --}}
            {{-- </form> --}}
            <div class="jobs-list">
                <!-- job card  -->
                @foreach($jobs as $job)
                <div class="jobs-list__card">
                    <div class="jobs-list__left">
                        <div class="jobs-list__logo">
                            <img src="{{ asset('uploads/jobs') }}/{{ $job->image }}" alt="{{ $job->title }}">
                        </div>

                    </div>
                    <div class="jobs-list__content text-end">
                        <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted {{ $job->created_at->diffForHumans() }} </span>
                        <h3 class="jobs-list__title"><a href="{{ route('job.detail', $job->id) }}">{{ $job->title }}</a></h3>
                        <span class="jobs-list__location">{{ $job->location }}</span><br>
                        <span class="jobs-list__location"><b>{{ $job->duration }}</b> {{ $job->hours }}</span>
                    </div>
                    <div class="jobs-list__right">
                        <span class="jobs-list__price"><b>{{ $job->salary }} UGx</b> Per Month</span>
                        <a href="{{ route('job.detail', $job->id) }}" class="hiredots-btn">Apply Now</a>
                    </div>
                </div>
                @endforeach
            </div>
                <!-- Pagination Links -->
            <div class="pagination-wrapper mt-4">
                {{ $jobs->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
