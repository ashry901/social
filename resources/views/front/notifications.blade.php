@extends('layouts.site')
@section('title', 'portfolio')

@section('style')

@stop

@section('content')

<div class="py-4">
    <div class="container">
        <div class="row">

            <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                <div class="box shadow-sm border rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Recent</h6>
                    </div>
                    <div class="box-body p-0">
                        <div class="p-3 d-flex align-items-center bg-light border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p6.png')}}" alt="">
                            </div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: WEDNESDAY</div>
                                <div class="small">Income tax sops on the cards, The bias in VC funding, and other top news for you</div>
                            </div>
                            <span class="ml-auto mb-auto">
                            <div class="btn-group">
                            <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather-more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><i class="feather-trash"></i> Delete</button>
                            <button class="dropdown-item" type="button"><i class="feather-x-circle"></i> Turn Off</button>
                            </div>
                            </div>
                            <br>
                            <div class="text-right text-muted pt-1">3d</div>
                            </span>
                        </div>
                        <div class="p-3 d-flex align-items-center osahan-post-header">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/l2.png')}}" alt="">
                            </div>
                            <div class="font-weight-bold mr-3">
                                <div class="mb-2">We found a job at askbootstrap Ltd that you may be interested in Vivamus imperdiet venenatis est...
                                </div>
                                <button type="button" class="btn btn-outline-primary">View Jobs</button>
                            </div>
                            <span class="ml-auto mb-auto">
                            <div class="btn-group">
                            <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather-more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><i class="feather-trash"></i> Delete</button>
                            <button class="dropdown-item" type="button"><i class="feather-x-circle"></i> Turn Off</button>
                            </div>
                            </div>
                            <br>
                            <div class="text-right text-muted pt-1">4d</div>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="box shadow-sm border rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Earlier</h6>
                    </div>
                    <div class="box-body p-0">
                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3 d-flex align-items-center bg-danger justify-content-center rounded-circle text-white">DRM</div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: MONDAY</div>
                                <div class="small">Nunc purus metus, aliquam vitae venenatis sit amet,
                                    porta non est. </div>
                            </div>
                            <span class="ml-auto mb-auto">
                            <div class="btn-group">
                            <button type="button" class="btn btn-light btn-sm rounded"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather-more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><i class="feather-trash"></i> Delete</button>
                            <button class="dropdown-item" type="button"><i class="feather-x-circle"></i> Turn Off</button>
                            </div>
                            </div>
                            <br>
                            <div class="text-right text-muted pt-1">3d</div>
                            </span>
                        </div>
                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p9.png')}}" alt=""></div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                <div class="small">Pellentesque semper ex diam, at tristique ipsum varius sed. Pellentesque non metus ullamcorper</div>
                            </div>
                            <span class="ml-auto mb-auto">
                            <div class="btn-group">
                            <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather-more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><i class="feather-trash"></i> Delete</button>
                            <button class="dropdown-item" type="button"><i class="feather-x-circle"></i> Turn Off</button>
                            </div>
                            </div>
                            <br>
                            <div class="text-right text-muted pt-1">3d</div>
                            </span>
                        </div>
                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p11.png')}}" alt="">
                            </div>
                            <div class="font-weight-bold mr-3">
                                <div class="mb-2"><span class="font-weight-normal">Congratulate Gurdeep Singh Osahan (iamgurdeeposahan)</span> for 5 years at Askbootsrap Pvt.
                                </div>
                                <button type="button" class="btn btn-outline-primary">Say congrats</button>
                            </div>
                            <span class="ml-auto mb-auto">
                            <div class="btn-group">
                            <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather-more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><i class="feather-trash"></i> Delete</button>
                            <button class="dropdown-item" type="button"><i class="feather-x-circle"></i> Turn Off</button>
                            </div>
                            </div>
                            <br>
                            <div class="text-right text-muted pt-1">4d</div>
                            </span>
                        </div>
                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p6.png')}}" alt="">
                            </div>
                            <div class="font-weight-bold mr-3">
                                <div>
                                    <span class="font-weight-normal">Congratulate Mnadeep singh (iamgurdeeposahan)</span> for 4 years at Askbootsrap Pvt.
                                    <div class="small text-success"><i class="feather-check-circle"></i> You sent Mandeep a message</div>
                                </div>
                            </div>
                            <span class="ml-auto mb-auto">
                            <div class="btn-group">
                            <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather-more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><i class="feather-trash"></i> Delete</button>
                            <button class="dropdown-item" type="button"><i class="feather-x-circle"></i> Turn Off</button>
                            </div>
                            </div>
                            <br>
                            <div class="text-right text-muted pt-1">4d</div>
                            </span>
                        </div>
                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3 d-flex align-items-center bg-success justify-content-center rounded-circle text-white">M</div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: MONDAY</div>
                                <div class="small">Nunc purus metus, aliquam vitae venenatis sit amet,
                                    porta non est.
                                </div>
                            </div>
                            <span class="ml-auto mb-auto">
                            <div class="btn-group">
                            <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather-more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><i class="feather-trash"></i> Delete</button>
                            <button class="dropdown-item" type="button"><i class="feather-x-circle"></i> Turn Off</button>
                            </div>
                            </div>
                            <br>
                            <div class="text-right text-muted pt-1">3d</div>
                            </span>
                        </div>
                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p1.png')}}" alt=""></div>
                            <div class="font-weight-bold mr-3">
                                <div class="text-truncate">DAILY RUNDOWN: SATURDAY</div>
                                <div class="small">Pellentesque semper ex diam, at tristique ipsum varius sed. Pellentesque non metus ullamcorper</div>
                            </div>
                            <span class="ml-auto mb-auto">
                            <div class="btn-group">
                            <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather-more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><i class="feather-trash"></i> Delete</button>
                            <button class="dropdown-item" type="button"><i class="feather-x-circle"></i> Turn Off</button>
                            </div>
                            </div>
                            <br>
                            <div class="text-right text-muted pt-1">3d</div>
                            </span>
                        </div>
                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p2.png')}}" alt="">
                            </div>
                            <div class="font-weight-bold mr-3">
                                <div class="mb-2"><span class="font-weight-normal">Congratulate Gurdeep Singh Osahan (iamgurdeeposahan)</span> for 5 years at Askbootsrap Pvt.
                                </div>
                                <button type="button" class="btn btn-outline-primary">Say congrats</button>
                            </div>
                            <span class="ml-auto mb-auto">
                            <div class="btn-group">
                            <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather-more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><i class="feather-trash"></i> Delete</button>
                            <button class="dropdown-item" type="button"><i class="feather-x-circle"></i> Turn Off</button>
                            </div>
                            </div>
                            <br>
                            <div class="text-right text-muted pt-1">4d</div>
                            </span>
                        </div>
                        <div class="p-3 d-flex align-items-center osahan-post-header">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p3.png')}}" alt="">
                            </div>
                            <div class="font-weight-bold mr-3">
                                <div>
                                    <span class="font-weight-normal">Congratulate Mnadeep singh (iamgurdeeposahan)</span> for 4 years at Askbootsrap Pvt.
                                    <div class="small text-success"><i class="feather-check-circle"></i> You sent Mandeep a message</div>
                                </div>
                            </div>
                            <span class="ml-auto mb-auto">
                            <div class="btn-group">
                            <button type="button" class="btn btn-light btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather-more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><i class="feather-trash"></i> Delete</button>
                            <button class="dropdown-item" type="button"><i class="feather-x-circle"></i> Turn Off</button>
                            </div>
                            </div>
                            <br>
                            <div class="text-right text-muted pt-1">4d</div>
                            </span>
                        </div>
                    </div>
                </div>
            </main>
            <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
                <div class="box shadow-sm mb-3 rounded bg-white ads-box text-center">
                    <img src="{{asset('ashry/front/img/job1.png')}}" class="img-fluid" alt="Responsive image">
                    <div class="p-3 border-bottom">
                        <h6 class="font-weight-bold text-dark">Notifications</h6>
                        <p class="mb-0 text-muted">You’re all caught up! Check back later for new notifications
                        </p>
                    </div>
                    <div class="p-3">
                        <button type="button" class="btn btn-outline-primary pl-4 pr-4"> View settings </button>
                    </div>
                </div>
                <div class="box mb-3 shadow-sm border rounded bg-white profile-box text-center">
                    <div class="p-5">
                        <img src="{{asset('ashry/front/img/clogo2.png')}}" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="p-3 border-top border-bottom">
                        <h5 class="font-weight-bold text-dark mb-1 mt-0">Envato</h5>
                        <p class="mb-0 text-muted">Melbourne, AU
                        </p>
                    </div>
                    <div class="p-3">
                        <div class="d-flex align-items-top mb-2">
                            <p class="mb-0 text-muted">Posted</p>
                            <p class="font-weight-bold text-dark mb-0 mt-0 ml-auto">1 day ago</p>
                        </div>
                        <div class="d-flex align-items-top">
                            <p class="mb-0 text-muted">Applicant Rank</p>
                            <p class="font-weight-bold text-dark mb-0 mt-0 ml-auto">25</p>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">
                <button type="button" class="btn btn-lg btn-block btn-danger mb-3"> <i class="feather-bell"></i> Set alert for jobs </button>
                <div class="box shadow-sm border rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Similar Jobs
                        </h6>
                    </div>
                    <div class="box-body p-3">
                        <a href="{{ route('job-profile') }}">
                            <div class="shadow-sm border rounded bg-white job-item mb-3">
                                <div class="d-flex align-items-center p-3 job-item-header">
                                    <div class="overflow-hidden mr-2">
                                        <h6 class="font-weight-bold text-dark mb-0 text-truncate">Product Director</h6>
                                        <div class="text-truncate text-primary">Spotify Inc.</div>
                                        <div class="small text-gray-500"><i class="feather-map-pin"></i> India, Punjab</div>
                                    </div>
                                    <img class="img-fluid ml-auto" src="{{asset('ashry/front/img/l3.png')}}" alt="">
                                </div>
                                <div class="d-flex align-items-center p-3 border-top border-bottom job-item-body">
                                    <div class="overlap-rounded-circle">
                                        <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('ashry/front/img/p9.png')}}" alt="" data-original-title="Sophia Lee">
                                        <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('ashry/front/img/p10.png')}}" alt="" data-original-title="John Doe">
                                        <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('ashry/front/img/p11.png')}}" alt="" data-original-title="Julia Cox">
                                        <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('ashry/front/img/p12.png')}}" alt="" data-original-title="Robert Cook">
                                    </div>
                                    <span class="font-weight-bold text-muted">18 connections</span>
                                </div>
                                <div class="p-3 job-item-footer">
                                    <small class="text-gray-500"><i class="feather-clock"></i> Posted 3 Days ago</small>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('job-profile') }}">
                            <div class="shadow-sm border rounded bg-white job-item">
                                <div class="d-flex align-items-center p-3 job-item-header">
                                    <div class="overflow-hidden mr-2">
                                        <h6 class="font-weight-bold text-dark mb-0 text-truncate">.NET Developer</h6>
                                        <div class="text-truncate text-primary">Invision</div>
                                        <div class="small text-gray-500"><i class="feather-map-pin"></i> London, UK
                                        </div>
                                    </div>
                                    <img class="img-fluid ml-auto" src="{{asset('ashry/front/img/l4.png')}}" alt="">
                                </div>
                                <div class="d-flex align-items-center p-3 border-top border-bottom job-item-body">
                                    <div class="overlap-rounded-circle">
                                        <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('ashry/front/img/p13.png')}}" alt="" data-original-title="Sophia Lee">
                                        <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('ashry/front/img/p1.png')}}" alt="" data-original-title="John Doe">
                                        <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('ashry/front/img/p3.png')}}" alt="" data-original-title="Robert Cook">
                                    </div>
                                    <span class="font-weight-bold text-muted">18 connections</span>
                                </div>
                                <div class="p-3 job-item-footer">
                                    <small class="text-gray-500"><i class="feather-clock"></i> Posted 3 Days ago</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="box shadow-sm border rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Who viewed your profile</h6>
                    </div>
                    <div class="box-body p-3">
                        <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p4.png')}}" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold mr-2">
                                <div class="text-truncate">Sophia Lee</div>
                                <div class="small text-gray-500">@Harvard
                                </div>
                            </div>
                            <span class="ml-auto">
                                <button type="button" class="btn btn-outline-primary btn-sm">Connent</button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p9.png')}}" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold mr-2">
                                <div class="text-truncate">John Doe</div>
                                <div class="small text-gray-500">Traveler
                                </div>
                            </div>
                            <span class="ml-auto">
                                <button type="button" class="btn btn-outline-primary btn-sm">Connent</button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p10.png')}}" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold mr-2">
                                <div class="text-truncate">Julia Cox</div>
                                <div class="small text-gray-500">Art Designer
                                </div>
                            </div>
                            <span class="ml-auto"><button type="button" class="btn btn-outline-primary btn-sm">Connent</button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p11.png')}}" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold mr-2">
                                <div class="text-truncate">Robert Cook</div>
                                <div class="small text-gray-500">@Photography
                                </div>
                            </div>
                            <span class="ml-auto"><button type="button" class="btn btn-outline-primary btn-sm">Connent</button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center osahan-post-header people-list">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('ashry/front/img/p12.png')}}" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold mr-2">
                                <div class="text-truncate">Richard Bell</div>
                                <div class="small text-gray-500">@Envato
                                </div>
                            </div>
                            <span class="ml-auto"><button type="button" class="btn btn-outline-primary btn-sm">Connent</button>
                            </span>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

@stop

@section('script')

@stop
