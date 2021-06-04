<!-- start sidebar menu -->
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="row">
                            <div class="sidebar-userpic">
                                <img src="{{ asset ('assets/dashboard/pic1.jpg') }}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name">Minh Thong</div>
                            <div class="profile-usertitle-job">Admin</div>
                        </div>
                        <div class="sidebar-userpic-btn">
                            <a class="tooltips" href="user_profile.html" data-placement="top" data-original-title="Profile">
                                <i class="material-icons">person_outline</i>
                            </a>
                            <a class="tooltips" href="email_inbox.html" data-placement="top" data-original-title="Mail">
                                <i class="material-icons">mail_outline</i>
                            </a>
                            <a class="tooltips" href="chat.html" data-placement="top" data-original-title="Chat">
                                <i class="material-icons">chat</i>
                            </a>
                            <a class="tooltips" href="login.html" data-placement="top" data-original-title="Logout">
                                <i class="material-icons">input</i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="menu-heading">
                    <span>-- Main</span>
                </li>
                <li class="nav-item start active">
                    <a href="{{route ('account_manager.get_list')}}" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Quản lý tài khoản</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item active">
                            <a href="{{route ('account_manager.get_list')}}" class="nav-link">
                                {{ csrf_field() }}
                                <span class="title">Quản lý tài khoản</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Quan ly tour -->
                <a href="{{route('dashboard.posts')}}" class="nav-link nav-toggle">
                   
                    <li class="nav-item">
                        <i class="material-icons">business_center</i>
                        <span class="title">Quản Lý Tour</span>
                        <span class="arrow"></span>

                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="{{route('dashboard.posts')}}" class="nav-link">
                                    <span class="title">Danh sách tour</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('dashboard.programtour')}}" class="nav-link">
                                    <span class="title">Chương trình tour</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('dashboard.detailtour')}}" class="nav-link">
                                    <span class="title">Chi tiết tour</span>
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="{{route('dashboard.notetour')}}" class="nav-link">
                                    <span class="title">Lưu ý</span>
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="{{route('dashboard.reviewstour')}}" class="nav-link">
                                    <span class="title">ý kiến khách hàng</span>
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="{{route('dashboard.contacttour')}}" class="nav-link">
                                    <span class="title">Liên hệ</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </a>
                <!-- Quan ly hoi dap-->
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">business_center</i>
                        <span class="title">Quản Lý Hỏi Đáp</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="new_booking.html" class="nav-link">
                                <span class="title">New Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="view_booking.html" class="nav-link">
                                <span class="title">View Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="edit_booking.html" class="nav-link">
                                <span class="title">Edit Booking</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Quan ly trang-->
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">business_center</i>
                        <span class="title">Quản Lý Trang</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="new_booking.html" class="nav-link">
                                <span class="title">New Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="view_booking.html" class="nav-link">
                                <span class="title">View Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="edit_booking.html" class="nav-link">
                                <span class="title">Edit Booking</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Quan Ly Lien He-->
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">business_center</i>
                        <span class="title">Quản Lý Liên Hệ</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="new_booking.html" class="nav-link">
                                <span class="title">New Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="view_booking.html" class="nav-link">
                                <span class="title">View Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="edit_booking.html" class="nav-link">
                                <span class="title">Edit Booking</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--quan ly di diem-->
                 <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">business_center</i>
                        <span class="title">Quản Lý địa điểm</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="new_booking.html" class="nav-link">
                                <span class="title">New Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="view_booking.html" class="nav-link">
                                <span class="title">View Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="edit_booking.html" class="nav-link">
                                <span class="title">Edit Booking</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Quan ly hoi dap-->
                 <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">business_center</i>
                        <span class="title">Quản Lý hỏi đáp</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route ('dashboaard.q&a')}}" class="nav-link">
                                <span class="title">New Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="view_booking.html" class="nav-link">
                                <span class="title">View Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="edit_booking.html" class="nav-link">
                                <span class="title">Edit Booking</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!---->
            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu -->
