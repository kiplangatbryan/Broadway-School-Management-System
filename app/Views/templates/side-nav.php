
<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar  sidebar-dark accordion bg-gradient-<?=$skin_color ?> p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span><?=$system_name ?></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link <?php if($path === 'admin/dashboard') echo 'active' ?>" href="/admin/dashboard"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                    <li class="accordion-item bg-transparent">
                        <div class="accordion-header">
                            <div class="nav-link" style="display: flex; align-items: center;flex-direction: row;margin-left: 1em;padding: .2em 0;font-size: 14px">
                                 <i class="fa fa-users"></i>&nbsp;&nbsp;<span>
                                <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#studentOne" aria-controls="collapseOne">
                                    Students ME
                                </a>
                            </div>
                            <div id="studentOne" class="accordion-collapse collapse" style="font-size: 14px" data-bs-parent="#parentLink">
                                <div class="accordion-body bg-danger py-0">
                                   <a class="nav-link <?php if($path === 'admin/students') echo 'active' ?>" href="/admin/students"><i class="fas fa-users"></i>&nbsp;&nbsp;All students</a>
                                   <a class="nav-link <?php if($path === 'create/student') echo 'active' ?>" href="/create/student"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add student</a>
                                   <a class="nav-link <?php if($path === 'admin/student_promotion') echo 'active' ?>" href="/admin/student_promotion"><i class="fas fa-user-md"></i>&nbsp;&nbsp;Student promotion</a>
                                
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item bg-transparent">
                        <div class="accordion-header">
                            <div class="nav-link" style="display: flex; align-items: center;flex-direction: row;margin-left: 1em;padding: .2em 0;font-size: 14px">
                                 <i class="fas fa-user-tie"></i>&nbsp;&nbsp;<span>
                                <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#teacherOne" aria-controls="collapseOne">
                                    Teachers ME
                                </a>
                            </div>
                            <div id="teacherOne" class="accordion-collapse collapse" style="font-size: 14px" data-bs-parent="#parentLink">
                                <div class="accordion-body bg-danger py-0">
                                   <a class="nav-link <?php if($path === 'admin/teachers') echo 'active' ?>" href="/admin/teachers"><i class="fas fa-users"></i>&nbsp;&nbsp;All Teachers</a>
                                   <a class="nav-link <?php if($path === 'create/teacehr') echo 'active' ?>" href="/create/teacher"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Teacher</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link <?php if($path === 'admin/subjects') echo 'active' ?>" href="/admin/subjects"><i class="fa fa-copy"></i><span>&nbsp;Subjects</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if($path === 'admin/schedule') echo 'active' ?>" href="/admin/schedule"><i class="fa fa-copy"></i><span>&nbsp;Schedule(TT)</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if($path === 'admin/notices') echo 'active' ?>" href="/admin/notices"><i class="fas fa-file-alt"></i><span>&nbsp;Notices</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if($path === 'admin/messages') echo 'active' ?>" href="/admin/messages"><i class="fas fa-envelope"></i><span>&nbsp;Messages</span></a></li>

                    <li class="nav-item"><a class="nav-link <?php if($path === 'admin/events') echo 'active' ?>" href="/admin/events"><i class="fa fa-calendar"></i><span>&nbsp;Events</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if($path === 'admin/fee_structure') echo 'active' ?>" href="/admin/fee_structure"><i class="fas fa-dollar-sign"></i><span>&nbsp; &nbsp;Fee Structure</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if($path === 'admin/profile') echo 'active' ?>" href="/admin/profile"><i class="fas fa-wheelchair"></i><span>&nbsp; Account</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php if($path === 'admin/settings') echo 'active' ?>" href="/admin/settings"><i class="fas fa-cog"></i><span>&nbsp; Settings</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/login/deauth"><i class="fa fa-sign-out"></i><span>&nbsp;Log out</span></a></li>

                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-primary badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">Messages center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="<?php echo base_url(); ?>/assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="<?php echo base_url(); ?>/assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="<?php echo base_url(); ?>/assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="<?php echo base_url(); ?>/assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo session()->get('user_data')['name']; ?></span><img class="border rounded-circle img-profile" src="<?php echo base_url(); ?>/assets/img/admin.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>