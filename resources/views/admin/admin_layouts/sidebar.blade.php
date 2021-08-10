
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="menu-title"> <span>Main</span></li>
                     <li class="@yield('sidebar_dashboard_btn_active')">
                        <a href="{{url('/admin/dashboard')}}"><i class="feather-home"></i><span>Dashboard</span></a>
                     </li>
                     <li class="@yield('sidebar_mentor_btn_active')">
                        <a href="{{url('/admin/mentor')}}"><i class="feather-user"></i><span>Mentor</span></a>
                     </li class="@yield('sidebar_btn_active')">
                     <li class="@yield('sidebar_mentee_btn_active')">
                        <a href="{{url('/admin/mentee')}}"><i class="feather-users"></i><span>Mentee</span></a>
                     </li>
                     <li class="@yield('sidebar_btn_active')">
                        <a href="booking-list.html"><i class="feather-list"></i><span>Booking List</span></a>
                     </li>
                     <li class="@yield('sidebar_btn_active')">
                        <a href="categories.html"><i class="feather-disc"></i><span>Categories</span></a>
                     </li>
                     <li>
                        <a href="transactions-list.html"><i class="feather-dollar-sign"></i><span>Transactions</span></a>
                     </li>
                     <li>
                        <a href="settings.html"><i class="feather-settings"></i><span>Settings</span></a>
                     </li>
                     <li class="submenu">
                        <a href=""><i class="feather-book"></i><span> Reports</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="invoice-report.html">Invoice Reports</a></li>
                        </ul>
                     </li>
                     <li class="menu-title">
                        <span>Pages</span>
                     </li>
                     <li>
                        <a href="profile.html"><i class="feather-user-plus"></i><span>My Profile</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-book-open"></i><span>Blog</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="blog.html"> Blog </a></li>
                           <li><a href="blog-details.html"> Blog Details </a></li>
                           <li><a href="add-blog.html"> Add Blog </a></li>
                           <li><a href="edit-blog.html"> Edit Blog </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-lock"></i><span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="login.html"> Login </a></li>
                           <li><a href="register.html"> Register </a></li>
                           <li><a href="forgot-password.html"> Forgot Password </a></li>
                           <li><a href="lock-screen.html"> Lock Screen </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-alert-octagon"></i><span> Error Pages </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="error-404.html">404 Error </a></li>
                           <li><a href="error-500.html">500 Error </a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="blank-page.html"><i class="feather-file"></i><span>Blank Page</span></a>
                     </li>
                     <li class="menu-title">
                        <span>UI Interface</span>
                     </li>
                     <li>
                        <a href="components.html"><i class="feather-layers"></i><span>Components</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-sidebar"></i><span> Forms </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                           <li><a href="form-input-groups.html">Input Groups </a></li>
                           <li><a href="form-horizontal.html">Horizontal Form </a></li>
                           <li><a href="form-vertical.html"> Vertical Form </a></li>
                           <li><a href="form-mask.html"> Form Mask </a></li>
                           <li><a href="form-validation.html"> Form Validation </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-layout"></i><span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="tables-basic.html">Basic Tables </a></li>
                           <li><a href="data-tables.html">Data Table </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="javascript:void(0);"><i class="feather-align-left"></i><span>Multi Level</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li class="submenu">
                              <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                              <ul style="display: none;">
                                 <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                 <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                       <li><a href="javascript:void(0);">Level 3</a></li>
                                       <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="javascript:void(0);"> <span>Level 1</span></a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
