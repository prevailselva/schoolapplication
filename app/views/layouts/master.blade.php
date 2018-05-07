<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Apps Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo url();?>/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo url();?>/node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo url();?>/node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo url();?>/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo url();?>/node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?php echo url();?>/node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo url();?>/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="img/favicon.ico" />
  @yield("style")
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item dropdown d-none d-lg-flex">
            <a class="nav-link dropdown-toggle nav-btn" id="actionDropdown" href="#" data-toggle="dropdown">
              <span class="btn">+ Create new</span>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-left" aria-labelledby="actionDropdown">
              <a class="dropdown-item" href="#">
                <i class="icon-user text-primary"></i>
                User Account
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="icon-user-following text-warning"></i>
                Admin User
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="icon-docs text-success"></i>
                Sales report
              </a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-lg-flex">
            <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
              <i class="flag-icon flag-icon-in"></i>
              India
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-fr"></i>
                French
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-es"></i>
                Espanol
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-lt"></i>
                Latin
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-ae"></i>
                Arabic
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="icon-envelope mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo url();?>/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo url();?>/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo url();?>/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <ul class="nav nav-tabs" id="setting-panel" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
            </li>
          </ul>
          <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
              <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                  </div>
                </form>
              </div>
              <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Team review meeting at 3.00 PM
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Prepare for presentation
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Resolve all the low priority tickets due today
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked>
                        Schedule meeting for next week
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked>
                        Project review
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                </ul>
              </div>
              <div class="events py-4 border-bottom px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                  <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                <p class="text-gray mb-0">build a js based app</p>
              </div>
              <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                  <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
              </div>
            </div>
            <!-- To do section tab ends -->
            <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
              <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
              </div>
              <ul class="chat-list">
                <li class="list active">
                  <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Thomas Douglas</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <div class="wrapper d-flex">
                      <p>Catherine</p>
                    </div>
                    <p>Away</p>
                  </div>
                  <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                  <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Daniel Russell</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <p>James Richardson</p>
                    <p>Away</p>
                  </div>
                  <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Madeline Kennedy</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Sarah Graves</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">47 min</small>
                </li>
              </ul>
            </div>
            <!-- chat tab ends -->
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="profile-image">
                  <img src="<?php echo url();?>/images/faces/face10.jpg" alt="image"/>
                  <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                </div>
                <div class="profile-name">
                  <p class="name">
                    {{Session::get('name')}}
                  </p>
                  <p class="designation">
                    Super Admin
                  </p>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard">
                <i class="icon-rocket menu-icon"></i>
                <span class="menu-title">Dashboard</span>                
              </a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-check menu-icon"></i>
                <span class="menu-title">Class</span>                
              </a>
              <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">                  
                  <li> <a class="nav-link" href="/class/create"><i class="icon-plus menu-icon"></i> Add New</a></li>
                  <li> <a class="nav-link" href="/class/list"><i class="icon-list menu-icon"></i>Class List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                <i class="icon-layers menu-icon"></i>
                <span class="menu-title">Section</span>  
              </a>
              <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                  <li> <a class="nav-link" href="/section/create"><i class="icon-plus menu-icon"></i> Add New</a></li>
                  <li> <a class="nav-link" href="/section/list"><i class="icon-list menu-icon"></i>Section List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#subject-layouts" aria-expanded="false" aria-controls="subject-layouts">
                <i class="icon-speech menu-icon"></i>
                <span class="menu-title">Subject</span>  
              </a>
              <div class="collapse" id="subject-layouts">
                <ul class="nav flex-column sub-menu">
                  <li> <a class="nav-link" href="/subject/create"><i class="icon-plus menu-icon"></i> Add New</a></li>
                  <li> <a class="nav-link" href="/subject/list"><i class="icon-list menu-icon"></i>Subject List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#student-layouts" aria-expanded="false" aria-controls="student-layouts">
                <i class="icon-user menu-icon"></i>
                <span class="menu-title">Student</span>  
              </a>
              <div class="collapse" id="student-layouts">
                <ul class="nav flex-column sub-menu">
                  <li> <a class="nav-link" href="/student/create"><i class="icon-plus menu-icon"></i> Add New</a></li>
                  <li> <a class="nav-link" href="/student/list"><i class="icon-list menu-icon"></i>Student List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#attendance-layouts" aria-expanded="false" aria-controls="attendance-layouts">
                <i class="icon-bell menu-icon"></i>
                <span class="menu-title">Attendance</span>  
              </a>
              <div class="collapse" id="attendance-layouts">
                <ul class="nav flex-column sub-menu">
                  <li><a class="nav-link" href="/attendance/create-file"><i class="icon-rocket menu-icon"></i>Add from file</a></li>
                  <li> <a class="nav-link" href="/student/create"><i class="icon-plus menu-icon"></i> Add New</a></li>
                  <li> <a class="nav-link" href="/student/list"><i class="icon-list menu-icon"></i>Attendance List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#marks-layouts" aria-expanded="false" aria-controls="marks-layouts">
                <i class="icon-docs menu-icon"></i>
                <span class="menu-title">Marks</span>  
              </a>
              <div class="collapse" id="marks-layouts">
                <ul class="nav flex-column sub-menu">                  
                  <li> <a class="nav-link" href="/mark/create"><i class="icon-plus menu-icon"></i> Add New</a></li>
                  <li> <a class="nav-link" href="/mark/list"><i class="icon-list menu-icon"></i>Marks List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#results-layouts" aria-expanded="false" aria-controls="results-layouts">
                <i class="icon-list menu-icon"></i>
                <span class="menu-title">Results</span>  
              </a>
              <div class="collapse" id="results-layouts">
                <ul class="nav flex-column sub-menu">                  
                  <li> <a class="nav-link" href="/result/generate"><i class="icon-plus menu-icon"></i>Generate</a></li>
                  <li> <a class="nav-link" href="/result/search"><i class="icon-list menu-icon"></i>Search</a></li>
                  <li> <a class="nav-link" href="/results"><i class="icon-list menu-icon"></i>Search Public</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#promotion-layouts" aria-expanded="false" aria-controls="promotion-layouts">
                <i class="icon-list menu-icon"></i>
                <span class="menu-title">Promotion</span>  
              </a>
              <div class="collapse" id="promotion-layouts">
                <ul class="nav flex-column sub-menu">                  
                                    
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#accounting-layouts" aria-expanded="false" aria-controls="accounting-layouts">
                <i class="icon-wallet menu-icon"></i>
                <span class="menu-title">Accounts</span>  
              </a>
              <div class="collapse" id="accounting-layouts">
                <ul class="nav flex-column sub-menu">                  
                  <li><a class="nav-link" href="/accounting/sectors"><i class="icon-plus menu-icon"></i>Sectors</a></li>
                  <li><a class="nav-link" href="/accounting/income"><i class="icon-plus menu-icon"></i>Add Income</a></li>
                  <li><a class="nav-link" href="/accounting/incomelist"><i class="icon-plus menu-icon"></i>View Income</a></li>
                  <li><a class="nav-link" href="/accounting/expence"><i class="icon-plus menu-icon"></i>Add Expense</a></li>
                  <li><a class="nav-link" href="/accounting/expencelist"><i class="icon-plus menu-icon"></i>View Expense</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#sms-layouts" aria-expanded="false" aria-controls="sms-layouts">
                <i class="icon-support menu-icon"></i>
                <span class="menu-title">SMS</span>  
              </a>
              <div class="collapse" id="sms-layouts">
                <ul class="nav flex-column sub-menu">                  
                   <li><a class="nav-link" href="/sms"><i class="icon-plus menu-icon"></i>SMS Formats</a></li>
                   <li><a class="nav-link" href="/sms-bulk"><i class="icon-plus menu-icon"></i>Send Bulk SMS</a></li>
                   <li><a class="nav-link" href="/smslog"><i class="icon-plus menu-icon"></i>SMS Log</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#reports-layouts" aria-expanded="false" aria-controls="reports-layouts">
                <i class="icon-list menu-icon"></i>
                <span class="menu-title">Reports</span>  
              </a>
              <div class="collapse" id="reports-layouts">
                <ul class="nav flex-column sub-menu">                                    
                  <li><a class="nav-link" href="/gradesheet"><i class="icon-plus menu-icon"></i>Marksheets</a></li>
                  <li><a class="nav-link" href="/attendance/report"><i class="icon-plus menu-icon"></i>Attendance</a></li>
                  <li><a class="nav-link" href="/attendance/monthly-report"><i class="icon-plus menu-icon"></i>Monthly Attendance</a></li>
                  <li><a class="nav-link" href="/tabulation"><i class="icon-plus menu-icon"></i>Tabulation Sheet</a></li>
                  <li><a class="nav-link" href="/accounting/report"><i class="icon-plus menu-icon"></i>Account By Type</a></li>
                  <li><a class="nav-link" href="/accounting/reportsum"><i class="icon-plus menu-icon"></i>Account Balance</a></li>
                  <li><a class="nav-link" href="/barcode"><i class="icon-plus menu-icon"></i>Barcode Generate</a></li>
                </ul>
              </div>
            </li>
            @if (Session::get('userRole')=="Admin")
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#settings-layouts" aria-expanded="false" aria-controls="settings-layouts">
                <i class="icon-list menu-icon"></i>
                <span class="menu-title">Settings</span>  
              </a>
              <div class="collapse" id="settings-layouts">
                <ul class="nav flex-column sub-menu">                                    
                  <li><a class="nav-link" href="/gpa"><i class="icon-plus menu-icon"></i>GPA Rules</a></li>
                  <li><a class="nav-link" href="/users"><i class="icon-plus menu-icon"></i>Users</a></li>
                  <li><a class="nav-link" href="/holidays"><i class="icon-plus menu-icon"></i>Holidays</a></li>
                  <li><a class="nav-link" href="/class-off"><i class="icon-plus menu-icon"></i>Class Off Days</a></li>
                  <li><a class="nav-link" href="/institute"><i class="icon-plus menu-icon"></i>Institute</a></li>
                </ul>
              </div>
            </li>
            @endif
          </ul>
        </nav>
        <div class="content-wrapper">
            <div class="row">
                <div id="content" class="col-lg-10 col-sm-10">
                    <!-- content starts -->
                    @if (isset($successmsg))
                        <div class="alert alert-success">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <strong>{{ $success }}.</strong>
                        </div>
                    @endif
                    @if (isset($errormsg))
                        <div class="alert alert-danger">
                            <button data-dismiss="alert" class="close" type="button">×</button>
                            <strong>{{ $error }}.</strong>
                        </div>
                    @endif
                    
                    @yield('content')
                </div>
            </div>
            
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">&copy;&nbsp;{{date('Y')}}<a href="#">&nbsp;{{Session::get('inName')}}</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Developed by: <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->  
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo url();?>/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo url();?>/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo url();?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo url();?>/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
 
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  
  <!-- endinject -->
  <!-- Custom js for this page-->
    <script src="<?php echo url();?>/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  
  @yield('script')
</body>
</html>
