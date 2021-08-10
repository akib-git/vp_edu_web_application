@extends('admin.admin_layouts.master')
{{-- @section('sidebar_dashboard_btn_active','active') --}}
@section('admin_content')
<div class="content">
    <div class="container">
        <div class="call-wrapper">
            <div class="call-main-row">
                <div class="call-main-wrapper">
                    <div class="call-view">
                        <div class="call-window">
                            <div class="fixed-header">
                                <div class="navbar">
                                    <div class="user-details">
                                        <div class="float-left user-img">
                                            <a class="avatar avatar-sm mr-2" href="profile.html" title="Jonathan Doe">
                                                <img src="assets/img/user/user.jpg" alt="User Image"
                                                    class="rounded-circle">
                                                <span class="status online"></span>
                                            </a>
                                        </div>
                                        <div class="user-info float-left">
                                            <a href="profile.html"><span>Jonathan Doe</span></a>
                                            <span class="last-seen">Online</span>
                                        </div>
                                    </div>
                                    <ul class="nav float-right custom-menu">
                                        <li class="nav-item dropdown dropdown-action">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-cog"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item">Settings</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="call-contents">
                                <div class="call-content-wrap">
                                    <div class="user-video">
                                        <img src="assets/img/video-call.jpg" alt="User Image">
                                    </div>
                                    <div class="my-video">
                                        <ul>
                                            <li>
                                                <img src="assets/img/user/user.jpg" class="img-fluid" alt="User Image">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="call-footer">
                                <div class="call-icons">
                                    <span class="call-duration">00:59</span>
                                    <ul class="call-items">
                                        <li class="call-item">
                                            <a href="#" title="" data-placement="top" data-toggle="tooltip"
                                                data-original-title="Enable Video">
                                                <i class="fas fa-video camera"></i>
                                            </a>
                                        </li>
                                        <li class="call-item">
                                            <a href="#" title="" data-placement="top" data-toggle="tooltip"
                                                data-original-title="Mute Audio">
                                                <i class="fa fa-microphone microphone"></i>
                                            </a>
                                        </li>
                                        <li class="call-item">
                                            <a href="#" title="" data-placement="top" data-toggle="tooltip"
                                                data-original-title="Add User">
                                                <i class="fa fa-user-plus"></i>
                                            </a>
                                        </li>
                                        <li class="call-item">
                                            <a href="#" title="" data-placement="top" data-toggle="tooltip"
                                                data-original-title="Full Screen">
                                                <i class="fas fa-arrows-alt-v full-screen"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="end-call">
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">call_end</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

