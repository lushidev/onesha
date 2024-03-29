@php
  use App\Models\Reduction;
@endphp


  <div class="header">
			
    <!-- Logo -->
     <div class="header-left active">
      <a href="index.html" class="logo">
        <img src="{{asset('assets/img/logo.png')}}"  alt="">
      </a>
      <a href="index.html" class="logo-small">
        <img src="{{asset('assets/img/logo-small.png')}}"  alt="">
      </a>
      <a id="toggle_btn" href="javascript:void(0);">
      </a>
    </div>
    <!-- /Logo -->
    
    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
      <span class="bar-icon">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </a>
    
    <!-- Header Menu -->
    <ul class="nav user-menu">
    
      <!-- Search -->
      <li class="nav-item">
        <div class="top-nav-search">
          
          <a href="javascript:void(0);" class="responsive-search">
            <i class="fa fa-search"></i>
        </a>
          <form action="#">
            <div class="searchinputs">
              <input type="text" placeholder="Search Here ...">
              <div class="search-addon">
                <span><img src="{{asset('assets/img/icons/closes.svg')}}" alt="img"></span>
              </div>
            </div>
            <a class="btn"  id="searchdiv"><img src="{{asset('assets/img/icons/search.svg')}}" alt="img"></a>
          </form>
        </div>
      </li>
      <!-- /Search -->
    
      <!-- Flag -->

      <!-- /Flag -->
    
      <!-- Notifications -->
      <li class="nav-item dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
          <img src="{{asset('assets/img/icons/notification-bing.svg')}}"   alt="img"> <span class="badge rounded-pill"></span>
        </a>
        <div class="dropdown-menu notifications">
          <div class="topnav-dropdown-header">
            <span class="notification-title">Notifications</span>
            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
          </div>
          <div class="noti-content">
            <ul class="notification-list">
             
              <li class="notification-message">
                <a href="activities.html">
                  <div class="media d-flex">
                    <div class="media-body flex-grow-1">
                      <p class="noti-details"><span class="noti-title"></span></p>
                      <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                    </div>
                  </div>
                </a>
              </li>
            

            </ul>
          </div>
          <div class="topnav-dropdown-footer">
            <a href="" class="text-success">voir toutes les notifications</a>
          </div>
        </div>
      </li>
      <!-- /Notifications -->
      
      <li class="nav-item dropdown has-arrow main-drop">
        <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
          <span class="user-img"><img src="{{asset('assets/img/profiles/avator1.jpg')}}" alt="">
          <span class="status online"></span></span>
        </a>
        <div class="dropdown-menu menu-drop-user">
          <div class="profilename">
            <div class="profileset">
                <span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
                    <span class="status online"></span></span>
                <div class="profilesets">
                    <h6></h6>
                    <h5>Admin</h5>
                </div>
            </div>
            <hr class="m-0">
           
            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <span class="dropdown-item logout"> <input type="submit" value="se deconnecter"
                        class="text-white bg-danger nav-link"></span>


            </form>
        </div>
        </div>
      </li>
    </ul>
    <!-- /Header Menu -->
    
    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
      <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="profile.html">My Profile</a>
        <a class="dropdown-item" href="generalsettings.html">Settings</a>
        <a class="dropdown-item" href="signin.html">Logout</a>
      </div>
    </div>
    <!-- /Mobile Menu -->
        </div>
  