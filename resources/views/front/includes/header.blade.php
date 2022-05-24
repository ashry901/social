<nav class="navbar navbar-expand navbar-dark bg-dark osahan-nav-top p-0">
    <div class="container">
        <a class="navbar-brand mr-2" href="{{ route('main') }}">
{{--            <img src="{{asset('ashry/front/img/logo.svg')}}" alt="...">--}}
            <img src="{{asset('ashry/front/img/logo/logompn.png')}}" alt="...">
{{--            <img src="{{asset('ashry/front/img/logo/logompn.png')}}"--}}
{{--                 alt="..." style="width: 100%" height="25%">--}}
        </a>
        <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control shadow-none border-0"
                       placeholder="Search people, jobs & more..." aria-label="Search"
                       aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn" type="button">
                        <i class="feather-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto d-flex align-items-center">

            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown"
                   role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="feather-search mr-2"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 shadow-none"
                                   placeholder="Search people, jobs and more..."
                                   aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" type="button">
                                    <i class="feather-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('jobs') }}">
                    <i class="feather-briefcase mr-2"></i>
                    <span class="d-none d-lg-inline">Jobs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('connection') }}">
                    <i class="feather-users mr-2"></i>
                    <span class="d-none d-lg-inline">
                        Connection
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown mr-2">
                <a class="nav-link dropdown-toggle pr-0" href="#"
                   role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="feather-file-text mr-2"></i>
                    <span class="d-none d-lg-inline">Pages</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right shadow-sm">
                    <a class="dropdown-item" href="{{ route('jobs') }}">
                        <i class="feather-briefcase mr-1"></i> Jobs
                    </a>

                    <a class="dropdown-item" href="{{ route('profile') }}">
                        <i class="feather-user mr-1"></i> Profile
                    </a>

                    <a class="dropdown-item" href="{{ route('connection') }}">
                        <i class="feather-users mr-1"></i> Connection
                    </a>

                    <a class="dropdown-item" href="{{ route('company-profile') }}">
                        <i class="feather-user-plus mr-1"></i> Company Profile
                    </a>

                    <a class="dropdown-item" href="{{ route('job-profile') }}">
                        <i class="feather-globe mr-1"></i> Job Profile
                    </a>

                    <a class="dropdown-item" href="{{ route('messages') }}">
                        <i class="feather-message-circle mr-1"></i> Messages
                    </a>
                    <a class="dropdown-item" href="{{ route('notifications') }}">
                        <i class="feather-bell mr-1"></i> Notifications
                    </a>

                    <a class="dropdown-item" href="{{ route('not-found') }}">
                        <i class="feather-alert-triangle mr-1"></i> 404 Not Found
                    </a>

                    <a class="dropdown-item" href="{{ route('faq') }}">
                        <i class="feather-help-circle mr-1"></i> FAQ
                    </a>

                    <a class="dropdown-item" href="{{ route('terms') }}">
                        <i class="feather-book mr-1"></i> Terms
                    </a>

                    <a class="dropdown-item" href="{{ route('privacy') }}">
                        <i class="feather-list mr-1"></i> Privacy
                    </a>

                    <a class="dropdown-item" href="{{ route('blog') }}">
                        <i class="feather-book mr-1"></i> Blog
                    </a>

                    <a class="dropdown-item" href="{{ route('blog-single') }}">
                        <i class="feather-book-open mr-1"></i> Blog Single
                    </a>

                    <a class="dropdown-item" href="{{ route('contact') }}">
                        <i class="feather-mail mr-1"></i> Contact
                    </a>

                    <a class="dropdown-item" href="{{ route('pricing') }}">
                        <i class="feather-credit-card mr-1"></i> Pricing
                    </a>

                    <a class="dropdown-item" href="{{ route('maintence') }}">
                        <i class="feather-clock mr-1"></i> Maintence
                    </a>

                    <a class="dropdown-item" href="{{ route('coming-soon') }}">
                        <i class="feather-cloud mr-1"></i> Coming Soon
                    </a>

                    <a class="dropdown-item" href="{{ route('sign-in') }}">
                        <i class="feather-log-in mr-1"></i> Sign In
                    </a>

                    <a class="dropdown-item" href="{{ route('sign-up') }}">
                        <i class="feather-lock mr-1"></i> Sign Up
                    </a>

                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1 osahan-list-dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="feather-message-square"></i>

                    <span class="badge badge-danger badge-counter">8</span>
                </a>

                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow-sm">
                    <h6 class="dropdown-header">
                        Message Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center"
                       href="{{ route('messages') }}">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="{{asset('ashry/front/img/p1.png')}}"
                                 alt="">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold overflow-hidden">
                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center"
                       href="{{ route('messages') }}">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle"
                                 src="{{asset('ashry/front/img/p2.png')}}" alt="">
                            <div class="status-indicator"></div>
                        </div>
                        <div class="overflow-hidden">
                            <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                            <div class="small text-gray-500">Jae Chun · 1d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center"
                       href="{{ route('messages') }}">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle"
                                 src="{{asset('ashry/front/img/p3.png')}}" alt="">
                            <div class="status-indicator bg-warning"></div>
                        </div>
                        <div class="overflow-hidden">
                            <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center"
                       href="{{ route('messages') }}">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle"
                                 src="{{asset('ashry/front/img/p4.png')}}" alt="">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="overflow-hidden">
                            <div class="text-truncate">Am I a good boy? The reason I
                                ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500"
                       href="{{ route('messages') }}">
                        Read More Messages
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1 osahan-list-dropdown">
                <a class="nav-link dropdown-toggle"
                   href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="feather-bell"></i>

                    <span class="badge badge-info badge-counter">6</span>
                </a>

                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow-sm">
                    <h6 class="dropdown-header">
                        Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center"
                       href="{{ route('notifications') }}">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="feather-download-cloud text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 12, 2019</div>
                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center"
                       href="{{ route('notifications') }}">
                        <div class="mr-3">
                            <div class="icon-circle bg-success">
                                <i class="feather-edit text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 7, 2019</div>
                            $290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center"
                       href="{{ route('notifications') }}">
                        <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="feather-folder text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending
                            for your account.
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500"
                       href="{{ route('notifications') }}">Show All Alerts</a>
                </div>
            </li>

            <li class="nav-item dropdown no-arrow ml-1 osahan-profile-dropdown">
                <a class="nav-link dropdown-toggle pr-0" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="img-profile rounded-circle"
                         src="{{asset('ashry/front/img/p13.png')}}">
                </a>

                <div class="dropdown-menu dropdown-menu-right shadow-sm">
                    <div class="p-3 d-flex align-items-center">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle"
                                 src="{{asset('ashry/front/img/user.png')}}" alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                            <div class="text-truncate">Gurdeep Osahan</div>
                            <div class="small text-gray-500">UI/UX Designer</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('profile') }}">
                        <i class="feather-edit mr-1"></i> My Account
                    </a>

                    <a class="dropdown-item" href="{{ route('edit-profile') }}">
                        <i class="feather-user mr-1"></i> Edit Profile
                    </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('sign-in') }}">
                        <i class="feather-log-out mr-1"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
