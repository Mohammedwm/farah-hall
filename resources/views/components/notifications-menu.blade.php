<div class="dropdown">
    <!--begin::Toggle-->
    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
            <span class="svg-icon svg-icon-xl svg-icon-primary">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path
                            d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                            fill="#000000" opacity="0.3" />
                        <path
                            d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                            fill="#000000" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
            <span class="pulse-ring"></span>
        </div>
    </div>
    <!--end::Toggle-->
    <!--begin::Dropdown-->
    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
        <form>
            <!--begin::Header-->
            <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top"
                style="background-image: url({{ asset('assets/media/misc/bg-1.jpg') }})">
                <!--begin::Title-->
                <h4 class="d-flex flex-center rounded-top">
                    <span class="text-white">User Notifications</span>
                    <span
                        class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">{{ $notifications->count() }}
                        new</span>
                </h4>
                <!--end::Title-->
                <!--begin::Tabs-->
                <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab"
                            href="#topbar_notifications_notifications">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
                    </li>
                </ul>
                <!--end::Tabs-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                    <!--begin::Scroll-->
                    <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40 symbol-light-primary mr-5">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                    fill="#000000" />
                                                <rect fill="#000000" opacity="0.3"
                                                    transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                                    x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                            </div>
                            <!--end::Symbol-->
                            @foreach ($notifications as $notification)
                                <a href="{{ $notification->data['url'] }}" class="navi-item">
                                    <div class="navi-link">
                                        <div class="navi-icon mr-2">
                                            <i class="flaticon2-paper-plane text-danger"></i>
                                        </div>
                                        <div class="navi-text">
                                            <div class="font-weight-bold">{{ $notification->data['title'] }}</div>
                                            <div class="text-muted">{{ $notification->created_at->diffForHumans() }}</div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Action-->
                    <div class="d-flex flex-center pt-7">
                        <a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Tabpane-->
                <!--begin::Tabpane-->
                <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                    <!--begin::Nav-->
                    <div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300"
                        data-mobile-height="200">
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-line-chart text-success"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">New report has been received</div>
                                    <div class="text-muted">23 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-paper-plane text-danger"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">Finance report has been generated</div>
                                    <div class="text-muted">25 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-user flaticon2-line- text-success"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">New order has been received</div>
                                    <div class="text-muted">2 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-pin text-primary"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">New customer is registered</div>
                                    <div class="text-muted">3 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-sms text-danger"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">Application has been approved</div>
                                    <div class="text-muted">3 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-pie-chart-3 text-warning"></i>
                                </div>
                                <div class="navinavinavi-text">
                                    <div class="font-weight-bold">New file has been uploaded</div>
                                    <div class="text-muted">5 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon-pie-chart-1 text-info"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">New user feedback received</div>
                                    <div class="text-muted">8 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-settings text-success"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">System reboot has been successfully completed</div>
                                    <div class="text-muted">12 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon-safe-shield-protection text-primary"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">New order has been placed</div>
                                    <div class="text-muted">15 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-notification text-primary"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">Company meeting canceled</div>
                                    <div class="text-muted">19 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-fax text-success"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">New report has been received</div>
                                    <div class="text-muted">23 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon-download-1 text-danger"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">Finance report has been generated</div>
                                    <div class="text-muted">25 hrs ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon-security text-warning"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">New customer comment recieved</div>
                                    <div class="text-muted">2 days ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <i class="flaticon2-analytics-1 text-success"></i>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">New customer is registered</div>
                                    <div class="text-muted">3 days ago</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Tabpane-->
                <!--begin::Tabpane-->
                <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                    <!--begin::Nav-->
                    <div class="d-flex flex-center text-center text-muted min-h-200px">All caught up!
                        <br />No new notifications.
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Tabpane-->
            </div>
            <!--end::Content-->
        </form>
    </div>
    <!--end::Dropdown-->
</div>
