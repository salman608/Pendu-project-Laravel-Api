  <!-- ===================== Navbar ================= -->
  <section class="navmanu_main">
    <div class="container">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light  ">
            <!------Logo  -->

            <button class="navbar-toggler text" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- ----Menu Items --- -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{-- <a class="navbar-brand" href="{{url('/')}}"> <img
                        src="{{asset('frontend')}}/assets/images/Logo/pendu.svg" class="navbar-logo" alt="logo">
                  </a> --}}

                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}#how_works">How it works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Blogs</a>
                    </li>
                    @if (!Auth::check())
                      <li class="nav-item dropper">
                          <a class="nav-link" href="{{route('dropper.register')}}">Become a dropper</a>
                      </li>
                    @else
                      <li class="nav-item refer">
                          <a class="nav-link" href="{{ url('review') }}">Refer & earn</a>
                      </li>
                    @endif
                </ul>
            </div>

            {{-- <div class="nav_icon_img">
              <a class="navbar-brand" href="{{url('/')}}"> <img
                  src="{{asset('frontend')}}/assets/images/Logo/pendu.svg" class="navbar-logo" alt="logo">
              </a>
            </div> --}}
            <!-- ------ Notificaitons and login ----- -->
            <div class="">


                @if(Auth::check())
                <ul class="nav  ml-auto">

                    <li class="notification">
                        <a href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge notification_number">0</span>
                        </a>
                    </li>

                    <li class='signup_login pl-2'>
                        <a>{{Auth::User()->name}} </a>
                        <span><img class='user_pic' id='user_icon'
                                src="https://ui-avatars.com/api/?name={{Auth::User()->name}}" alt=""></span>
                        <i class="fas fa-caret-down img_caret"></i>
                    </li>
                    @else
                    <div class="login_reg_nav">
                        <ul class="nav  ml-auto">
                            <li><a href="{{route('login')}}">Login/</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('login') }}"><div class="user_icon_login">
                      <img src="{{ asset('frontend/assets/images/Icons/user green.svg') }}" alt="">
                    </div></a>
                    @endif

                </ul>

                <div class="user_profile_info pb-1">
                    <ul>

                    @if(Auth::check())
                    @if(Auth::user()->role_id==3)
                      <a href="{{route('driver.quote.user-quote')}}">User Quote</a>
                    @endif
                    <li><a href="{{route('profile.index')}}?profile=1"><span>My profile</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 129.25 148.64" style='width: 18px; height: 21px;'>
                                    <g id="profile_green" data-name="profile green"
                                        transform="translate(-10.38 -0.68)">
                                        <path id="Path_1" data-name="Path 1"
                                            d="M75,65.31a32.315,32.315,0,1,1,32.31-32.32A32.309,32.309,0,0,1,75,65.31ZM75,13.6A19.39,19.39,0,1,0,94.39,32.99,19.388,19.388,0,0,0,75,13.6Z"
                                            fill="#5bdb98" />
                                        <path id="Path_2" data-name="Path 2"
                                            d="M133.16,149.32H16.84a6.457,6.457,0,0,1-6.46-6.46V123.47a51.7,51.7,0,0,1,51.7-51.7H87.93a51.7,51.7,0,0,1,51.7,51.7v19.39A6.466,6.466,0,0,1,133.16,149.32ZM23.3,136.4H126.7V123.47A38.777,38.777,0,0,0,87.92,84.69H62.07a38.777,38.777,0,0,0-38.78,38.78V136.4Z"
                                            fill="#5bdb98" />
                                    </g>
                                </svg>
                      </a></li>

                        <li><a href="{{route('profile.index')}}"><span>Offers</span>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 339.6 159.9"
                                    style=' width: 35px; height: 17px;'>
                                    <g id="Layer_2_5_" transform="translate(69.8 -20.05)">
                                        <g id="Group_1" data-name="Group 1">
                                            <path id="Path_1" data-name="Path 1"
                                                d="M245.9,50.55a7.494,7.494,0,0,0-6.1-3.2H193.3V27.55a7.555,7.555,0,0,0-7.5-7.5H17.3a7.555,7.555,0,0,0-7.5,7.5v121.2a7.555,7.555,0,0,0,7.5,7.5H38.5a32.519,32.519,0,0,0,62.6,0h83.1a32.519,32.519,0,0,0,62.6,0h15.5a7.555,7.555,0,0,0,7.5-7.5V87.05a7.14,7.14,0,0,0-1.4-4.3Zm9,38.7H221.3V62.45H236ZM24.8,35.15H178.3v106.2H101.8a32.571,32.571,0,0,0-64,0h-13V35.15Zm45,129.8a17.6,17.6,0,1,1,17.6-17.6A17.626,17.626,0,0,1,69.8,164.95Zm145.8,0a17.6,17.6,0,1,1,17.6-17.6A17.626,17.626,0,0,1,215.6,164.95Zm32-23.6a32.511,32.511,0,0,0-54.3-17.6V62.45h12.9v34.3a7.555,7.555,0,0,0,7.5,7.5H255v37.1Z"
                                                fill="#5bdb98" />
                                            <path id="Path_2" data-name="Path 2"
                                                d="M-62.3,35.15H-8.8a7.555,7.555,0,0,0,7.5-7.5,7.555,7.555,0,0,0-7.5-7.5H-62.3a7.555,7.555,0,0,0-7.5,7.5A7.555,7.555,0,0,0-62.3,35.15Z"
                                                fill="#5bdb98" />
                                            <path id="Path_3" data-name="Path 3"
                                                d="M-8.8,47.45H-50a7.555,7.555,0,0,0-7.5,7.5,7.555,7.555,0,0,0,7.5,7.5H-8.8a7.555,7.555,0,0,0,7.5-7.5A7.49,7.49,0,0,0-8.8,47.45Z"
                                                fill="#5bdb98" />
                                            <path id="Path_4" data-name="Path 4"
                                                d="M-8.8,74.75h-26a7.555,7.555,0,0,0-7.5,7.5,7.555,7.555,0,0,0,7.5,7.5h26a7.555,7.555,0,0,0,7.5-7.5A7.49,7.49,0,0,0-8.8,74.75Z"
                                                fill="#5bdb98" />
                                            <path id="Path_5" data-name="Path 5"
                                                d="M-8.8,102.05h-9a7.555,7.555,0,0,0-7.5,7.5,7.555,7.555,0,0,0,7.5,7.5h9a7.555,7.555,0,0,0,7.5-7.5A7.49,7.49,0,0,0-8.8,102.05Z"
                                                fill="#5bdb98" />
                                        </g>
                                    </g>
                                </svg>

                            </a></li>

                        <li><a href="{{route('profile.index')}}?task=1"><span>Tasks</span>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 167.06 168.47"
                                    style=' width: 23px; height: 23px;'>
                                    <g id="tasks" transform="translate(-16.47 -15.77)">
                                        <path id="Path_1" data-name="Path 1"
                                            d="M183.53,159.51V66.69c0-13.63-12.08-24.72-26.93-24.72h-7.38V40.49c0-13.63-12.08-24.72-26.93-24.72H43.4c-14.85,0-26.93,11.09-26.93,24.72v92.83c0,13.63,12.08,24.72,26.93,24.72h7.38v1.48c0,13.63,12.08,24.72,26.93,24.72h78.88C171.46,184.23,183.53,173.15,183.53,159.51Zm-36.87,16.63H77.71c-10.01,0-18.12-7.44-18.12-16.63V66.69c0-9.18,8.11-16.63,18.12-16.63H156.6c10.01,0,18.12,7.44,18.12,16.63v92.83c0,9.18-8.11,16.63-18.12,16.63h-9.94Z"
                                            fill="#5bdb98" />
                                        <path id="Path_2" data-name="Path 2"
                                            d="M74.69,82.27h70.1a3.5,3.5,0,0,0,0-7H74.69a3.5,3.5,0,0,0,0,7Z"
                                            fill="#5bdb98" />
                                        <path id="Path_3" data-name="Path 3"
                                            d="M85.77,102.58a3.5,3.5,0,0,0,3.51,3.5h65.69a3.505,3.505,0,1,0,0-7.01H89.28A3.508,3.508,0,0,0,85.77,102.58Z"
                                            fill="#5bdb98" />
                                        <path id="Path_4" data-name="Path 4"
                                            d="M139.76,126.39a3.5,3.5,0,0,0-3.5-3.5H74.69a3.505,3.505,0,0,0,0,7.01h61.57A3.506,3.506,0,0,0,139.76,126.39Z"
                                            fill="#5bdb98" />
                                        <path id="Path_5" data-name="Path 5"
                                            d="M158.48,150.2a3.5,3.5,0,0,0-3.51-3.5H97.27a3.5,3.5,0,0,0,0,7h57.69A3.5,3.5,0,0,0,158.48,150.2Z"
                                            fill="#5bdb98" />
                                    </g>
                                </svg>
                            </a></li>

                        <li><a href="{{route('profile.index')}}?message=1"><span>Messages</span>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 191.86 134.18"
                                    style='    width: 23px; height: 16px;'>
                                    <g id="Layer_6" transform="translate(-4.07 -32.91)">
                                        <g id="Group_1" data-name="Group 1">
                                            <path id="Path_1" data-name="Path 1"
                                                d="M178.87,167.09H21.13c-9.4,0-17.06-8.37-17.06-18.66V51.57c0-10.28,7.66-18.66,17.06-18.66H178.87c9.4,0,17.06,8.37,17.06,18.66v96.86C195.93,158.72,188.28,167.09,178.87,167.09ZM21.13,49.47c-1.95,0-3.15,1.36-3.15,2.1v96.86c0,.74,1.2,2.1,3.15,2.1H178.87c1.95,0,3.15-1.36,3.15-2.1V51.57c0-.74-1.2-2.1-3.15-2.1Z"
                                                fill="#5bdb98" />
                                        </g>
                                        <path id="Path_2" data-name="Path 2"
                                            d="M185.44,46.08,99.93,95.96,16.08,46.1,6.72,58.55l93.01,55.3L194.69,58.6Z"
                                            fill="#5bdb98" />
                                    </g>
                                </svg>

                            </a></li>




                        <li><a href="{{ route('logout')}}"><span>Log out</span>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175.923 175.93"
                                    style='    width: 23px; height: 23px;'>
                                    <g id="logout" transform="translate(-12.037 -12.04)">
                                        <path id="Path_461"
                                            d="M12.25,89.22a5.5,5.5,0,0,1,5.29-5.71H87.17a5.5,5.5,0,0,1,0,11H17.54A5.5,5.5,0,0,1,12.25,89.22Z"
                                            fill="#5bdb98" />
                                        <path id="Path_462"
                                            d="M41.14,120.38,13.65,92.89h0a5.5,5.5,0,0,1,0-7.78L41.13,57.63a5.5,5.5,0,0,1,7.78,7.78L25.31,89l23.61,23.61a5.5,5.5,0,1,1-7.78,7.77Z"
                                            fill="#5bdb98" />
                                        <path id="Path_463"
                                            d="M114.66,173.31V41.37a14.8,14.8,0,0,1,9.98-13.95l44.13-14.7a15.167,15.167,0,0,1,4.53-.68A14.681,14.681,0,0,1,187.96,26.7V158.64a14.8,14.8,0,0,1-9.98,13.95l-44.12,14.7a14.872,14.872,0,0,1-4.54.68A14.681,14.681,0,0,1,114.66,173.31ZM173.3,23.02a4.018,4.018,0,0,0-1.19.16L128.19,37.84a3.8,3.8,0,0,0-2.54,3.53V173.31a3.675,3.675,0,0,0,3.66,3.66,4.041,4.041,0,0,0,1.2-.16l43.91-14.63a3.8,3.8,0,0,0,2.54-3.53V26.7a3.675,3.675,0,0,0-3.66-3.66v-.02Z"
                                            fill="#5bdb98" />
                                        <path id="Path_464"
                                            d="M76.18,70.68a5.5,5.5,0,0,1-5.51-5.49V32.21A20.178,20.178,0,0,1,90.83,12.05H173.3a5.5,5.5,0,0,1,0,11H90.84a9.159,9.159,0,0,0-9.16,9.16V65.2a5.5,5.5,0,0,1-5.5,5.48Z"
                                            fill="#5bdb98" />
                                        <path id="Path_465"
                                            d="M70.67,145.82V112.83a5.5,5.5,0,1,1,11,0v32.99a9.159,9.159,0,0,0,9.16,9.16h29.32a5.5,5.5,0,1,1,0,11H90.84A20.18,20.18,0,0,1,70.67,145.82Z"
                                            fill="#5bdb98" />
                                    </g>
                                </svg>


                            </a></li>
                        @else
                        <li><a href="{{route('login')}}"><span>Login</span>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175.923 175.93"
                                    style='    width: 23px; height: 23px;'>
                                    <g id="logout" transform="translate(-12.037 -12.04)">
                                        <path id="Path_461"
                                            d="M12.25,89.22a5.5,5.5,0,0,1,5.29-5.71H87.17a5.5,5.5,0,0,1,0,11H17.54A5.5,5.5,0,0,1,12.25,89.22Z"
                                            fill="#5bdb98" />
                                        <path id="Path_462"
                                            d="M41.14,120.38,13.65,92.89h0a5.5,5.5,0,0,1,0-7.78L41.13,57.63a5.5,5.5,0,0,1,7.78,7.78L25.31,89l23.61,23.61a5.5,5.5,0,1,1-7.78,7.77Z"
                                            fill="#5bdb98" />
                                        <path id="Path_463"
                                            d="M114.66,173.31V41.37a14.8,14.8,0,0,1,9.98-13.95l44.13-14.7a15.167,15.167,0,0,1,4.53-.68A14.681,14.681,0,0,1,187.96,26.7V158.64a14.8,14.8,0,0,1-9.98,13.95l-44.12,14.7a14.872,14.872,0,0,1-4.54.68A14.681,14.681,0,0,1,114.66,173.31ZM173.3,23.02a4.018,4.018,0,0,0-1.19.16L128.19,37.84a3.8,3.8,0,0,0-2.54,3.53V173.31a3.675,3.675,0,0,0,3.66,3.66,4.041,4.041,0,0,0,1.2-.16l43.91-14.63a3.8,3.8,0,0,0,2.54-3.53V26.7a3.675,3.675,0,0,0-3.66-3.66v-.02Z"
                                            fill="#5bdb98" />
                                        <path id="Path_464"
                                            d="M76.18,70.68a5.5,5.5,0,0,1-5.51-5.49V32.21A20.178,20.178,0,0,1,90.83,12.05H173.3a5.5,5.5,0,0,1,0,11H90.84a9.159,9.159,0,0,0-9.16,9.16V65.2a5.5,5.5,0,0,1-5.5,5.48Z"
                                            fill="#5bdb98" />
                                        <path id="Path_465"
                                            d="M70.67,145.82V112.83a5.5,5.5,0,1,1,11,0v32.99a9.159,9.159,0,0,0,9.16,9.16h29.32a5.5,5.5,0,1,1,0,11H90.84A20.18,20.18,0,0,1,70.67,145.82Z"
                                            fill="#5bdb98" />
                                    </g>
                                </svg>


                            </a></li>
                        <li><a href="{{route('register')}}"><span>Register</span>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175.923 175.93"
                                    style='    width: 23px; height: 23px;'>
                                    <g id="logout" transform="translate(-12.037 -12.04)">
                                        <path id="Path_461"
                                            d="M12.25,89.22a5.5,5.5,0,0,1,5.29-5.71H87.17a5.5,5.5,0,0,1,0,11H17.54A5.5,5.5,0,0,1,12.25,89.22Z"
                                            fill="#5bdb98" />
                                        <path id="Path_462"
                                            d="M41.14,120.38,13.65,92.89h0a5.5,5.5,0,0,1,0-7.78L41.13,57.63a5.5,5.5,0,0,1,7.78,7.78L25.31,89l23.61,23.61a5.5,5.5,0,1,1-7.78,7.77Z"
                                            fill="#5bdb98" />
                                        <path id="Path_463"
                                            d="M114.66,173.31V41.37a14.8,14.8,0,0,1,9.98-13.95l44.13-14.7a15.167,15.167,0,0,1,4.53-.68A14.681,14.681,0,0,1,187.96,26.7V158.64a14.8,14.8,0,0,1-9.98,13.95l-44.12,14.7a14.872,14.872,0,0,1-4.54.68A14.681,14.681,0,0,1,114.66,173.31ZM173.3,23.02a4.018,4.018,0,0,0-1.19.16L128.19,37.84a3.8,3.8,0,0,0-2.54,3.53V173.31a3.675,3.675,0,0,0,3.66,3.66,4.041,4.041,0,0,0,1.2-.16l43.91-14.63a3.8,3.8,0,0,0,2.54-3.53V26.7a3.675,3.675,0,0,0-3.66-3.66v-.02Z"
                                            fill="#5bdb98" />
                                        <path id="Path_464"
                                            d="M76.18,70.68a5.5,5.5,0,0,1-5.51-5.49V32.21A20.178,20.178,0,0,1,90.83,12.05H173.3a5.5,5.5,0,0,1,0,11H90.84a9.159,9.159,0,0,0-9.16,9.16V65.2a5.5,5.5,0,0,1-5.5,5.48Z"
                                            fill="#5bdb98" />
                                        <path id="Path_465"
                                            d="M70.67,145.82V112.83a5.5,5.5,0,1,1,11,0v32.99a9.159,9.159,0,0,0,9.16,9.16h29.32a5.5,5.5,0,1,1,0,11H90.84A20.18,20.18,0,0,1,70.67,145.82Z"
                                            fill="#5bdb98" />
                                    </g>
                                </svg>


                            </a></li>
                        @endif


                    </ul>

                </div>

            </div>

        </nav>
    </div>

</section>
