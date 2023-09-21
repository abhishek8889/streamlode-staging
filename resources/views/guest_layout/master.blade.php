<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="{{  url('public/streamlode-front-assets/css/stylesheet.css') }}">

  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="https://media.twiliocdn.com/sdk/js/video/v1/twilio-video.min.js"></script>
  <!-- vite(['resources/css/app.css' , 'resources/js/guestapp.js']) -->
  <link rel="stylesheet" href="{{ url('public/build/assets/app-c59fe4ba.css') }}" />
  <script type="module" src="{{ url('public/build/assets/guestapp-a4043322.js') }}"></script>


  <!-- <link rel="stylesheet" href="https://192.64.115.190/resources/css/app.css" />
 <script type="module" src="https://192.64.115.190/resources/js/guestapp.js"></script> -->


  <title>StreamLode</title>
</head>
<style>
  .drop-menu {
    position: absolute;
    top: calc(100% + 20px);
    background: #0a478d;
    width: 300px;
    z-index: 999;
    visibility: hidden;
    opacity: 0;
    transition: all .2s linear;
    /* pointer-events: none; */
  }
  .drop-menu li a:hover{
    text-decoration:revert;
  }

  .dropdown .cus-drop{
    transition: all .2s linear;
  }
 
  .drop-menu .drop-items {
    color: #fff;
    padding: 10px;
    display: block;
  }
  .drop-menu ul{
    padding: 0px;
    list-style: none;
  }
  .nav-item.dropdown {
    position: relative;
  }
  .nav-item.dropdown .nav-link {
    display: inline-block;
}
@media only screen and (min-width: 992px) {
  .dropdown:hover .drop-menu{
    visibility: visible;
    opacity: 1;
  }
  .dropdown:hover .cus-drop i{
    transform: rotateX(180deg);
  }
 
 
}
@media only screen and (max-width: 991px) {
  .drop-menu {
    position: static;
    width: 100%;
    visibility: visible;
    opacity: 1;
    display: none;
    background: transparent;
    transition: none;
}
.dropdown .cus-drop {
    position: absolute;
    right: 20px;
    top: 0;
}

.cus-drop i {
  color: #fff;
}
.cus-drop.rotate i{
    transform: rotateX(180deg);
  }
}
</style>

<body>
  <header class="site_header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{  asset('streamlode-front-assets/images/logo.png') }}"
            alt="logo"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('membership') }}">Membership</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ url('about-support') }}">About</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="{{ url('search-host') }}">Search For Hosts</a>
            </li>
            <li class="nav-item dropdown ">
              <a class="nav-link d-inline" href="{{ url('about-support') }}">Support</a>
              <span class="cus-drop"><i class="fa-solid fa-angle-down"></i></span>
              <div class="drop-menu">
                <ul>
                  <li>
                    <a href="{{ url('quick-guide/download/A Guide to Searching for Hosts on StreamLode') }}" class="drop-items">Searching for host</a>
                  </li>
                  <li>
                    <a href="{{ url('quick-guide/download/A Guide to Setting Up Meeting Charges on StreamLode doc') }}" class="drop-items">Setting Up Meeting Charges</a>
                  </li>
                  <li>
                    <a href="{{ url('quick-guide/download/A Guide to Viewing Appointments as a Guest or Host') }}" class="drop-items">Viewing Appointments</a>
                  </li>
                  <li>
                    <a href="{{ url('quick-guide/download/Setting Discounts as a Host on StreamLode A Quick Guide') }}" class="drop-items">Setting Discounts as a Host</a>
                  </li>
                  <li>
                    <a href="{{ url('quick-guide/download/Setting Up General Settings on StreamLode A Guide for New Users') }}" class="drop-items">Setting Up General Settings</a>
                  </li>
                  <li>
                    <a href="{{ url('quick-guide/download/Setting Up StreamLode as a Host A Quick Guide') }}" class="drop-items">Setting Up StreamLode as a Host</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('legal') }}">Legal</a>
              <!-- <span class="cus-drop"><i class="fa-solid fa-angle-down"></i></span>
              <div class="drop-menu">
                <ul>
                  <li>
                    <a href="{{ url('legal?terms-of-services=true') }}" class="drop-items">Terms of services</a>
                  </li>
                  <li>
                    <a href="{{ url('legal?privacy-policy=true') }}" class="drop-items">Privacy policy</a>
                  </li>
                 
                </ul>
              </div> -->
            </li>
            <input type="hidden" id="base-url" value="{{ url('') }}">
          </ul>

        </div>
        <div class="form-inline my-2 my-lg-0 login button-col">
          <a href="{{ url('/login') }}" class="cta cta-yellow"> <i class="fa-regular fa-user"></i> Login </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bar bar-1"></span>
            <span class="bar bar-2"></span>
            <span class="bar bar-3"></span>
          </button>
        </div>
      </nav>
    </div>
  </header>
  <!-- ##################################################################   -->
  <!-- body content -->
  @yield('content')
  <!--  ################################################################## -->

  <footer class="site_footer">
    <div class="lets-talk">
      <div class="container-fluid">
        <div class="row lets-talk-row align-items-center">
          <div class="col-md-8 text-col">
            <!-- <h4>Have a question in mind?
          Let's meet together!</h4> -->
          </div>
          <div class="col-md-4 button-col">
            <a href="{{ url('membership') }}#membership-tiers" class="round-cta">
              <span class="cta__text"> Want to be a host? Click here!</span>
              <svg viewBox="-1 -1 202 102" preserveAspectRatio="none">
                <ellipse class="ellipse" cx="100" cy="50" rx="100" ry="50" stroke-width="1" stroke="currentColor"
                  fill="none"></ellipse>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-menu-section">
      <div class="container-fluid">
        <div class="footer-inner-wrapper">
          <div class="row menu-row">
            <div class="col-md-5 brand-col">
              <a class="navbar-brand" href="/"><img src="{{ asset('streamlode-front-assets/images/logo.png') }}"
                  alt="logo"></a>
            </div>
            <div class="col-md-7 menu-col">
              <ul>
                <li><a href="{{ url('/membership') }}" class="footer-link">Membership</a></li>
                <!-- <li><a href="{{ url('about-support') }}" class="footer-link">About</a></li> -->
                <li><a href="{{ url('search-host') }}" class="footer-link">Search For Hosts</a></li>
                <li><a href="{{ url('about-support') }}" class="footer-link">Support</a></li>
                <li><a href="{{ url('legal') }}" class="footer-link">Legal</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
    $admin_data =  App\Models\Sitemeta::first();
  ?>
    <div class="social-address-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 address-col">
            <div class="address-box">
              <p><a href="mailto:{{ $admin_data['help_email'] ?? 'support@streamlode.com'}}">{{
                  $admin_data['help_email'] ?? 'support@streamlode.com'}}</a></p>
              <p>United states</p>
            </div>
          </div>
          <div class="col-md-7 social-col">

            <h4>Follow Us:</h4>
            <ul class="social-list">
              @if(isset($admin_data->facebook_link)) <li><a href="//{{ $admin_data->facebook_link ?? '' }}"
                  target="_blank"> Facebook</a></li>@endif
              @if(isset($admin_data->instagram_link))<li><a href="//{{ $admin_data->instagram_link ?? '' }}"
                  target="_blank"> Instagram</a></li>@endif
              @if(isset($admin_data->linkedin_link)) <li><a href="//{{ $admin_data->linkedin_link ?? '' }}"
                  target="_blank"> LinkedIn</a></li>@endif
              @if(isset($admin_data->twitter_link)) <li><a href="//{{ $admin_data->twitter_link ?? '' }}"
                  target="_blank"> Twitter</a></li>@endif
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-footer">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-5 text-col">
            <p class="mb-0">© 2023 StreamLode | All Rights Reserved | <a href="{{ url('privacy-policy') }}">Privacy
                Policy.</a> | <a href="{{ url('term-and-conditions') }}"> Term and conditions</a></p>
          </div>
          <div class="col-md-7 image-col">
            <img src="{{ url('public/streamlode-front-assets/images/footer-pattern.png') }}" alt="logo"></a>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
  <script src="{{ url('public/streamlode-front-assets/js/custom.js') }}"></script>
<script>
  $(document).ready(function(){
    $(".cus-drop").click(function(){
      $(this).parents(".dropdown").find(".drop-menu").slideToggle()
      $(this).toggleClass("rotate")
    })
  })
</script>
</body>

</html>