<div class="header">
    <div class="header-left">
       <a href="index.html" class="logo">
       <img src="{{asset("assets/admin/img/logo-white.png") }}" alt="Logo">
       </a>
       <a href="index.html" class="logo logo-small">
       <img src="{{asset("assets/admin/img/logo-small.png") }}" alt="Logo" width="30" height="30">
       </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fas fa-bars"></i>
    </a>
    <div class="top-nav-search">
       <form>
          <input type="text" class="form-control" placeholder="Search here">
          <button class="btn" type="submit"><i class="feather-search"></i>
          </button>
       </form>
    </div>
    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i>
    </a>
    <ul class="nav user-menu">
       <li class="nav-item dropdown has-arrow flag-nav mr-2">
          <a class="nav-link dropdown-toggle align-items-center" data-toggle="dropdown" href="#" role="button">
          <img src="{{asset("assets/admin/img/flags/us-1.png") }}" alt="" width="24" height="16" class="lang-flag mr-1"> English
          </a>
          <div class="dropdown-menu dropdown-menu-right">
             <a href="javascript:void(0);" class="dropdown-item">
             <img src="{{asset("assets/admin/img/flags/us.png") }}" alt="" height="16"> English
             </a>
             <a href="javascript:void(0);" class="dropdown-item">
             <img src="{{asset("assets/admin/img/flags/fr.png") }}" alt="" height="16"> French
             </a>
             <a href="javascript:void(0);" class="dropdown-item">
             <img src="{{asset("assets/admin/img/flags/es.png") }}" alt="" height="16"> Spanish
             </a>
             <a href="javascript:void(0);" class="dropdown-item">
             <img src="{{asset("assets/admin/img/flags/de.png") }}" alt="" height="16"> German
             </a>
          </div>
       </li>
       <li class="nav-item dropdown">
          <a href="#" id="btnFullscreen" class=" ">
          <i class="feather-maximize"></i>
          </a>
       </li>
       <li class="nav-item dropdown noti-dropdown">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
          <i class="feather-bell"></i> <span class="badge badge-pill">3</span>
          </a>
          <div class="dropdown-menu notifications">
             <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
             </div>
             <div class="noti-content">
                <ul class="notification-list">
                   <li class="notification-message">
                      <a href="#">
                         <div class="media">
                            <span class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" alt="User Image" src="{{asset("assets/admin/img/user/user.jpg") }}">
                            </span>
                            <div class="media-body">
                               <p class="noti-details"><span class="noti-title">Jonathan Doe</span> Schedule <span class="noti-title">his appointment</span></p>
                               <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                            </div>
                         </div>
                      </a>
                   </li>
                   <li class="notification-message">
                      <a href="#">
                         <div class="media">
                            <span class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" alt="User Image" src="{{asset("assets/admin/img/user/user1.jpg") }}">
                            </span>
                            <div class="media-body">
                               <p class="noti-details"><span class="noti-title">Julie Pennington</span> has booked her appointment to <span class="noti-title">Ruby Perrin</span></p>
                               <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                            </div>
                         </div>
                      </a>
                   </li>
                   <li class="notification-message">
                      <a href="#">
                         <div class="media">
                            <span class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" alt="User Image" src="{{asset("assets/admin/img/user/user2.jpg") }}">
                            </span>
                            <div class="media-body">
                               <p class="noti-details"><span class="noti-title">Tyrone Roberts</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
                               <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                            </div>
                         </div>
                      </a>
                   </li>
                   <li class="notification-message">
                      <a href="#">
                         <div class="media">
                            <span class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" alt="User Image" src="{{asset("assets/admin/img/user/user4.jpg") }}">
                            </span>
                            <div class="media-body">
                               <p class="noti-details"><span class="noti-title">Patricia Manzi</span> send a message <span class="noti-title"> to his Mentee</span></p>
                               <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                            </div>
                         </div>
                      </a>
                   </li>
                </ul>
             </div>
             <div class="topnav-dropdown-footer">
                <a href="#">View all Notifications</a>
             </div>
          </div>
       </li>
       <li class="nav-item dropdown has-arrow main-drop ml-3">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
          <span class="user-img"><img src="{{asset("assets/admin/img/profiles/avatar-06.jpg") }}" alt=""> Admin
          <span class="status online"></span></span>
          </a>
          <div class="dropdown-menu">
             <a class="dropdown-item" href="profile.html"><i class="feather-user"></i> My Profile</a>
             <a class="dropdown-item" href="login.html"><i class="feather-power"></i> Logout</a>
          </div>
       </li>
    </ul>
</div>
