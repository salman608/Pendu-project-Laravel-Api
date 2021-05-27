@extends('User.Asset')
@section('user_content')

    <style>
        .reg_image{
            top: -8px;
            position: absolute;
            left: 45px;
        }
        .reg_image_input{
            border: none!important;
        }
    </style>


  <!-- ============ Breadcrumb ============ -->
  <section class="breadcrumb_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bread_area">
                    <nav aria-label="breadcrumb bread_item">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= 01 Profile tab ============ -->
<div class="container profile_tab_main_area">

    <div class="row">


        <div class="col-md-4 col-lg-4 col-xl-4 ">
           <div class="profile_tab_area">

            <div class="nav flex-column nav-pills profile_tab_item" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link @if(isset($_GET['profile'])) active @endif" id="v-pills-profile-info-tab" data-toggle="pill" href="#v-pills-profile-info" role="tab" aria-controls="v-pills-profile-info" aria-selected="true"> <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 129.25 148.64">
                    <g id="profile_green" data-name="profile green" transform="translate(-10.38 -0.68)">
                      <path id="Path_23" data-name="Path 23" d="M75,65.31a32.315,32.315,0,1,1,32.31-32.32A32.309,32.309,0,0,1,75,65.31ZM75,13.6A19.39,19.39,0,1,0,94.39,32.99,19.388,19.388,0,0,0,75,13.6Z" fill="#5bdb98"/>
                      <path id="Path_24" data-name="Path 24" d="M133.16,149.32H16.84a6.457,6.457,0,0,1-6.46-6.46V123.47a51.7,51.7,0,0,1,51.7-51.7H87.93a51.7,51.7,0,0,1,51.7,51.7v19.39A6.466,6.466,0,0,1,133.16,149.32ZM23.3,136.4H126.7V123.47A38.777,38.777,0,0,0,87.92,84.69H62.07a38.777,38.777,0,0,0-38.78,38.78V136.4Z" fill="#5bdb98"/>
                    </g>
                  </svg>
                </span> Profile info</a>

                <a class="nav-link " id="v-pills-task-tab" data-toggle="pill" href="#v-pills-task" role="tab" aria-controls="v-pills-task" aria-selected="true"> <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 150 151.25">
                    <g id="task_green" data-name="task green" transform="translate(0 0.62)">
                      <path id="Path_18" data-name="Path 18" d="M150,128.43V45.09c0-12.23-10.84-22.19-24.18-22.19H119.2V21.57C119.2,9.33,108.36-.62,95.02-.62H24.18C10.85-.63,0,9.33,0,21.57v83.35c0,12.23,10.85,22.19,24.18,22.19H30.8v1.33c0,12.24,10.85,22.19,24.18,22.19h70.83C139.16,150.63,150,140.67,150,128.43Zm-33.11,14.93H54.98c-8.99,0-16.27-6.68-16.27-14.93V45.09c0-8.24,7.28-14.93,16.27-14.93h70.83c8.99,0,16.27,6.68,16.27,14.93v83.35c0,8.24-7.28,14.93-16.27,14.93h-8.92Z" fill="#5bdb98"/>
                      <path id="Path_19" data-name="Path 19" d="M52.28,59.08h62.94a3.15,3.15,0,1,0,0-6.3H52.28a3.15,3.15,0,0,0,0,6.3Z" fill="#5bdb98"/>
                      <path id="Path_20" data-name="Path 20" d="M62.22,77.31a3.15,3.15,0,0,0,3.15,3.15h58.98a3.15,3.15,0,0,0,0-6.3H65.37A3.156,3.156,0,0,0,62.22,77.31Z" fill="#5bdb98"/>
                      <path id="Path_21" data-name="Path 21" d="M110.7,98.69a3.15,3.15,0,0,0-3.15-3.15H52.28a3.15,3.15,0,1,0,0,6.3h55.28A3.147,3.147,0,0,0,110.7,98.69Z" fill="#5bdb98"/>
                      <path id="Path_22" data-name="Path 22" d="M127.5,120.07a3.15,3.15,0,0,0-3.15-3.15H72.55a3.15,3.15,0,0,0,0,6.3h51.8A3.15,3.15,0,0,0,127.5,120.07Z" fill="#5bdb98"/>
                    </g>
                  </svg>

                </span> My tasks</a>
                <a class="nav-link @if(isset($_GET['message'])) active @endif" id="v-pills-inbox-tab" data-toggle="pill" href="#v-pills-inbox" role="tab" aria-controls="v-pills-inbox" aria-selected="true"> <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 191.86 134.18">
                    <g id="Layer_6" transform="translate(-4.07 -32.91)">
                      <g id="Group_2" data-name="Group 2">
                        <path id="Path_16" data-name="Path 16" d="M178.87,167.09H21.13c-9.4,0-17.06-8.37-17.06-18.66V51.57c0-10.28,7.66-18.66,17.06-18.66H178.87c9.4,0,17.06,8.37,17.06,18.66v96.86C195.93,158.72,188.28,167.09,178.87,167.09ZM21.13,49.47c-1.95,0-3.15,1.36-3.15,2.1v96.86c0,.74,1.2,2.1,3.15,2.1H178.87c1.95,0,3.15-1.36,3.15-2.1V51.57c0-.74-1.2-2.1-3.15-2.1Z" fill="#5bdb98"/>
                      </g>
                      <path id="Path_17" data-name="Path 17" d="M185.44,46.08,99.93,95.96,16.08,46.1,6.72,58.55l93.01,55.3L194.69,58.6Z" fill="#5bdb98"/>
                    </g>
                  </svg>

                </span> Inbox</a>
                <a class="nav-link " id="v-pills-history-tab" data-toggle="pill" href="#v-pills-history" role="tab" aria-controls="v-pills-history" aria-selected="true"> <span><i class="fas fa-history"></i> </span> History</a>

                <a class="nav-link " id="v-pills-deliveries-tab" data-toggle="pill" href="#v-pills-deliveries" role="tab" aria-controls="v-pills-deliveries" aria-selected="true"> <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 150 167.37">
                    <path id="Deliveries" d="M62.07,145.61H26.15a13.1,13.1,0,0,1-13.08-13.08V33.81A13.1,13.1,0,0,1,26.15,20.73H46.71V24a19.61,19.61,0,0,0,39.22,0V20.73h20.59A13.1,13.1,0,0,1,119.6,33.81V86.88a6.54,6.54,0,1,0,13.08,0V33.81A26.179,26.179,0,0,0,106.53,7.66H85.93V-2.15a6.542,6.542,0,0,0-6.54-6.54H53.25a6.542,6.542,0,0,0-6.54,6.54V7.66H26.15A26.179,26.179,0,0,0,0,33.81v98.72a26.179,26.179,0,0,0,26.15,26.15H62.07a6.535,6.535,0,1,0,0-13.07ZM59.78,4.39H72.86V24a6.54,6.54,0,0,1-13.08,0Zm50.67,75.19A39.55,39.55,0,1,0,150,119.13,39.592,39.592,0,0,0,110.45,79.58Zm0,66.03a26.48,26.48,0,1,1,26.48-26.48A26.511,26.511,0,0,1,110.45,145.61Zm16.01-26.48a6.542,6.542,0,0,1-6.54,6.54h-9.48a6.542,6.542,0,0,1-6.54-6.54v-13.4a6.54,6.54,0,0,1,13.08,0v6.86h2.94A6.536,6.536,0,0,1,126.46,119.13Z" transform="translate(0 8.69)" fill="#5bdb98"/>
                  </svg>

                </span> Deliveries</a>
                <a class="nav-link " id="v-pills-pendu-pay-tab" data-toggle="pill" href="#v-pills-pendu-pay" role="tab" aria-controls="v-pills-pendu-pay" aria-selected="true"> <span>

                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 75.123 145.475">
                    <path id="pendu_pay" data-name="pendu pay" d="M102.45,6.36,82.42,51.79a1.809,1.809,0,0,0,1.66,2.54h.02l21.88-.17L56.03,132.52,74.6,75.32a1.947,1.947,0,0,0-1.85-2.55H42.9L68.36,6.36h34.09M67,2.26a2.11,2.11,0,0,0-1.97,1.36L39.07,71.3l-1.55,4.04a1.121,1.121,0,0,0,1.05,1.52H69.78L52.13,131.24l-4.37,13.48a2.291,2.291,0,0,0,4.11,1.94l7.62-11.95,49.95-78.36,2.95-4.62a1.118,1.118,0,0,0-.95-1.72l-5.48.04-17.1.14a.8.8,0,0,1-.74-1.12L107.45,5.22a2.107,2.107,0,0,0-1.93-2.96H67Z" transform="translate(-37.445 -2.26)" fill="#5bdb98"/>
                  </svg>

                </span> Pendu Pay</a>
                <a class="nav-link " id="v-pills-Payment-tab" data-toggle="pill" href="#v-pills-Payment" role="tab" aria-controls="v-pills-Payment" aria-selected="true"> <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 183.69 134.7">
                    <g id="Layer_x0020_1_1_" transform="translate(59.84 -64.65)">
                      <path id="Path_1" data-name="Path 1" d="M96.03,64.65H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.12,6.12,0,0,0,6.12,6.12H96.03A15.59,15.59,0,0,1,111.6,92.47v.58H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.116,6.116,0,0,0,6.12,6.13H111.6v66.26a15.586,15.586,0,0,1-15.57,15.56H-32.03A15.586,15.586,0,0,1-47.6,171.56V91.87a6.131,6.131,0,0,0-6.13-6.13,6.126,6.126,0,0,0-6.11,6.13v79.68a27.841,27.841,0,0,0,27.82,27.8H96.03a27.841,27.841,0,0,0,27.82-27.8V92.47A27.845,27.845,0,0,0,96.03,64.65ZM15.82,167.16a6.17,6.17,0,0,0,3.43-1.05l53.74-36.5a6.116,6.116,0,1,0-6.87-10.12l-49.3,33.47L-.98,132.99a6.094,6.094,0,0,0-8.64-.49,6.112,6.112,0,0,0-.49,8.64l21.36,23.97A6.074,6.074,0,0,0,15.82,167.16Z" fill="#5bdb98"/>
                    </g>
                  </svg>

                </span> Payment</a>
                <a class="nav-link " id="v-pills-Notification-tab" data-toggle="pill" href="#v-pills-Notification" role="tab" aria-controls="v-pills-Notification" aria-selected="true"> <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 140.469 157.99">
                    <g id="Layer_30" transform="translate(12.43)">
                      <path id="Path_25" data-name="Path 25" d="M122.14,134.59H-6.6a5.851,5.851,0,0,1-5.83-5.87,5.846,5.846,0,0,1,.63-2.62A106.2,106.2,0,0,0-.74,79.29V58.52a58.515,58.515,0,1,1,117.03,0V79.18a106.2,106.2,0,0,0,11.06,46.81,5.858,5.858,0,0,1-2.41,7.92A6.091,6.091,0,0,1,122.14,134.59ZM2.47,122.88h110.6a117.735,117.735,0,0,1-8.48-43.71V58.52a46.815,46.815,0,0,0-93.63,0V79.18A117.933,117.933,0,0,1,2.47,122.88Z" fill="#5bdb98"/>
                      <path id="Path_26" data-name="Path 26" d="M57.77,157.99a29.26,29.26,0,0,1-29.26-29.26,5.85,5.85,0,0,1,11.7,0,17.571,17.571,0,0,0,5.15,12.41,18.019,18.019,0,0,0,24.81,0,5.876,5.876,0,0,1,8.31,8.31A29.247,29.247,0,0,1,57.77,157.99Z" fill="#5bdb98"/>
                    </g>
                  </svg>

                </span> Notification</a>
                <a class="nav-link " id="v-pills-refar-earn-tab" data-toggle="pill" href="#v-pills-refar-earn" role="tab" aria-controls="v-pills-refar-earn" aria-selected="true"> <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 153.32 144.34">
                    <g id="refer_a_friend" data-name="refer a friend" transform="translate(1.66 -2.83)">
                      <g id="Group_3" data-name="Group 3">
                        <path id="Path_27" data-name="Path 27" d="M58.24,61.43a29.3,29.3,0,1,1,29.3-29.3,29.3,29.3,0,0,1-29.3,29.3Zm0-48.98A19.68,19.68,0,1,0,77.92,32.13h0A19.679,19.679,0,0,0,58.24,12.45Z" fill="#5bdb98"/>
                        <path id="Path_28" data-name="Path 28" d="M91.92,147.17H24.56A26.266,26.266,0,0,1-1.66,120.95,50.806,50.806,0,0,1,49.05,70.19H67.43a50.8,50.8,0,0,1,50.71,50.76A26.26,26.26,0,0,1,91.92,147.17ZM49.05,79.81A41.143,41.143,0,0,0,7.96,120.95a16.649,16.649,0,0,0,16.6,16.6H91.92a16.649,16.649,0,0,0,16.6-16.6A41.143,41.143,0,0,0,67.43,79.81H49.05Z" fill="#5bdb98"/>
                      </g>
                      <g id="Group_4" data-name="Group 4">
                        <path id="Path_29" data-name="Path 29" d="M128.94,25.06V48.69h22.72v6.03H128.94V78.55h-6.43V54.72H99.78V48.69H122.5V25.06Z" fill="#b3b3b3"/>
                      </g>
                    </g>
                  </svg>

                </span> Refer & earn</a>

                <a class="nav-link " id="v-pills-Supssort-tab" data-toggle="pill" href="#v-pills-Susspport" role="tab" aria-controls="v-pills-Susspport" aria-selected="true"> <span>
                  <img class='profile_img_tab' src="{{asset('frontend')}}/assets/images/Icons/Icons.png" alt="">

                </span> Settings</a>


                <a class="nav-link " id="v-pills-Support-tab" data-toggle="pill" href="#v-pills-Support" role="tab" aria-controls="v-pills-Support" aria-selected="true"> <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 155.55 151.24">
                    <g id="_1_1_" transform="translate(2.77 0.62)">
                      <path id="Path_4" data-name="Path 4" d="M120.81,150.62a5.774,5.774,0,0,1-4.33-1.96L97.89,127.42A91.587,91.587,0,0,1,75,130.3c-20.58,0-39.97-6.68-54.6-18.81C5.45,99.1-2.77,82.53-2.77,64.84S5.46,30.58,20.4,18.19C35.03,6.06,54.43-.62,75-.62s39.96,6.68,54.6,18.81c14.95,12.39,23.18,28.96,23.18,46.65,0,18.89-9.52,36.61-26.22,49.04v30.99A5.751,5.751,0,0,1,120.81,150.62ZM99.83,115.16a5.774,5.774,0,0,1,4.33,1.96l10.9,12.45V110.92a5.754,5.754,0,0,1,2.5-4.75c15.07-10.31,23.71-25.37,23.71-41.33,0-29.75-29.73-53.96-66.27-53.96S8.73,35.09,8.73,64.84,38.46,118.8,75,118.8a79.262,79.262,0,0,0,23.15-3.4A5.985,5.985,0,0,1,99.83,115.16Z" fill="#5bdb98"/>
                      <path id="Path_5" data-name="Path 5" d="M99.07,48.38H50.93a5.75,5.75,0,0,1,0-11.5H99.06a5.75,5.75,0,0,1,.01,11.5Z" fill="#5bdb98"/>
                      <path id="Path_6" data-name="Path 6" d="M99.07,70.08H50.93a5.75,5.75,0,0,1,0-11.5H99.06a5.75,5.75,0,0,1,.01,11.5Z" fill="#5bdb98"/>
                      <path id="Path_7" data-name="Path 7" d="M99.07,91.78H50.93a5.75,5.75,0,0,1,0-11.5H99.06a5.75,5.75,0,0,1,.01,11.5Z" fill="#5bdb98"/>
                    </g>
                  </svg>

                </span> Support</a>
                <a class="nav-link " id="v-pills-faq-tab" data-toggle="pill" href="#v-pills-faq" role="tab" aria-controls="v-pills-faq" aria-selected="true"> <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 149.961 145.01">
                    <g id="FAQ" transform="translate(0 -2.49)">
                      <path id="Path_30" data-name="Path 30" d="M92.58,37.65a4.389,4.389,0,0,0,4.39-4.39,4.39,4.39,0,1,1,6.58,3.81,13.245,13.245,0,0,0-6.59,11.42,4.39,4.39,0,0,0,8.78,0,4.422,4.422,0,0,1,2.2-3.81A13.182,13.182,0,1,0,88.17,33.26,4.413,4.413,0,0,0,92.58,37.65Z" fill="#5bdb98"/>
                      <circle id="Ellipse_1" data-name="Ellipse 1" cx="4.39" cy="4.39" r="4.39" transform="translate(96.98 59.62)" fill="#5bdb98"/>
                      <path id="Path_31" data-name="Path 31" d="M145.61,2.49H57.42a4.389,4.389,0,0,0-4.39,4.39V59.61H4.39A4.411,4.411,0,0,0,0,64.01v79.1a4.39,4.39,0,0,0,8.78,0,4.4,4.4,0,0,1,4.39-4.39H92.56a4.389,4.389,0,0,0,4.39-4.39V85.99h39.84a4.4,4.4,0,0,1,4.39,4.39,4.39,4.39,0,0,0,8.78,0V6.88A4.336,4.336,0,0,0,145.61,2.49ZM88.18,129.93h-75a13.268,13.268,0,0,0-4.39.75V68.41H53.03V77.2H21.97a4.39,4.39,0,0,0,0,8.78H88.18Zm53.03-51.98a13.016,13.016,0,0,0-4.39-.75h-75V11.28h79.39Z" fill="#5bdb98"/>
                      <path id="Path_32" data-name="Path 32" d="M75,112.35H21.97a4.39,4.39,0,1,0,0,8.78H75a4.39,4.39,0,1,0,0-8.78Z" fill="#5bdb98"/>
                      <path id="Path_33" data-name="Path 33" d="M17.58,99.17a4.389,4.389,0,0,0,4.39,4.39H75a4.39,4.39,0,1,0,0-8.78H21.97A4.389,4.389,0,0,0,17.58,99.17Z" fill="#5bdb98"/>
                    </g>
                  </svg>

                </span> FAQ</a>
                <a class="nav-link " id="v-pills-Term-tab" data-toggle="pill" href="#v-pills-Term" role="tab" aria-controls="v-pills-Term" aria-selected="true"> <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 138 149.5">
                    <g id="Layer_2_10_" transform="translate(-6 -0.25)">
                      <path id="Path_8" data-name="Path 8" d="M138.25,149.75H34.75A5.744,5.744,0,0,1,29,144V75a5.75,5.75,0,0,1,11.5,0v63.25h92V17.5a5.744,5.744,0,0,0-5.75-5.75H23.25a5.75,5.75,0,0,1,0-11.5h103.5A17.246,17.246,0,0,1,144,17.5V144A5.744,5.744,0,0,1,138.25,149.75Z" fill="#5bdb98"/>
                      <path id="Path_9" data-name="Path 9" d="M34.75,80.75h-23A5.744,5.744,0,0,1,6,75V17.5a17.25,17.25,0,0,1,34.5,0V75A5.744,5.744,0,0,1,34.75,80.75ZM17.5,69.25H29V17.5a5.75,5.75,0,0,0-11.5,0Z" fill="#5bdb98"/>
                      <path id="Path_10" data-name="Path 10" d="M92.25,92.25H57.75a5.75,5.75,0,0,1,0-11.5h34.5a5.75,5.75,0,0,1,0,11.5Z" fill="#5bdb98"/>
                      <path id="Path_11" data-name="Path 11" d="M115.25,115.25H57.75a5.75,5.75,0,0,1,0-11.5h57.5a5.75,5.75,0,0,1,0,11.5Z" fill="#5bdb98"/>
                      <path id="Path_12" data-name="Path 12" d="M103.75,69.25h-46a5.75,5.75,0,0,1,0-11.5h46a5.75,5.75,0,0,1,0,11.5Z" fill="#5bdb98"/>
                      <path id="Path_13" data-name="Path 13" d="M115.25,29H57.75A5.744,5.744,0,0,1,52,23.25V6A5.744,5.744,0,0,1,57.75.25h57.5A5.744,5.744,0,0,1,121,6V23.25A5.744,5.744,0,0,1,115.25,29ZM63.5,17.5h46V11.75h-46Z" fill="#5bdb98"/>
                    </g>
                  </svg>

                </span> Term and conditions</a>


            </div>
          </div>
            </div>

            <div class="col-md-8 col-lg-8 col-xl-8    order_details_row">


              <div class="tab-content  " id="v-pills-tabContent">
    <!-- ------------- mytask tab ------------- -->
                <div class="tab-pane fade
                " id="v-pills-task" role="tabpanel" aria-labelledby="v-pills-task-tab">
                  <div class="profile_tab_title">
                    <h2>My task</h2>
                  </div>

                    <div class="row short_order">
                        <div class="select_label">
                            <label for=" ">Sort orders</label>
                        </div>

                        <div class="select_iteam">
                            <select  name="">
                                <option value="All">All</option>
                                <option value="Order 01">Order 01</option>
                                <option value="Order 02">Order 02</option>
                                <option value="Order 03">Order 03</option>
                            </select>
                        </div>
                    </div>


                    <div class="order_number">


                            <div class="order_cat_date_area mt-3">
                                <div class="order_cat_date">
                                    <p></p>
                                    <h6>15 Nov 2020</h6>
                                </div>
                            </div>

                            <div class="order_details_area">
                                <div class="order_details">
                                    <div class="order_id_coast">
                                        <h5>Order ID- <span class='id_num' ></span> </h5>
                                        <p>Item cost- <span class='coast'></span> </p>
                                        <h6>Proccessing</h6>
                                    </div>
                                </div>
                                <div class="view_order float-right">
                                    <button type="button" class="btn " data-toggle="modal" data-target=".profile-example-modal-lg">View offers</button>
                                </div>
                                <div class="order_track">
                                    <p>Buy some groceries for me-</p>
                                    <h5>Toothpaste(1X), Apples(1KG), Chips(1Pack).</h5>
                                </div>
                            </div>


                        <div class="order_details_area mt-2">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="accept_offer_image">
                                        <img src="{{asset('frontend')}}/assets/images/member/men_pic10_copy.jpg" alt="">
                                        <h5>Kal M.</h5>
                                        <h6><i class="fas fa-star"></i> <span>4.5</span> </h6>
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="order_details">
                                        <div class="order_id_coast">
                                            <h5>Order ID- <span class='id_num' >251226566</span> </h5>
                                            <p>Delivery charge- <span class='coast'>$26</span> </p>
                                            <h6 class='accepted' >Accepted</h6>
                                        </div>

                                    </div>
                                    <div class="view_order float-right">
                                        <button type="button" class="btn track_status" data-toggle="modal" data-target="#taskProcessModal">Track status</button>
                                    </div>
                                    <div class="order_track">
                                        <p>Buy some groceries for me-</p>
                                        <h5>Toothpaste(1X), Apples(1KG), Chips(1Pack).</h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- ------------- inbox tab ------------- -->
              <div class="tab-pane fade @if(isset($_GET['message'])) show active @endif" id="v-pills-inbox" role="tabpanel" aria-labelledby="v-pills-inbox-tab">
                <div class="profile_tab_title">
                  <h2>Inbox</h2>
                </div>
            <div class="inbox_list_area">
              <ul>

                <li class='mt-2'>
                  <p class='inbox_list_time'><i class="fas fa-check"></i> <span>16:12:18</span> </p>
                <div class="inbox_msg_list">
                  <div class="img_name_msg_area">

                    <div class="msg_user_img active_user_icon">
                      <img src="{{asset('frontend')}}/assets/images/member/men_pic11.jpg" alt="">

                      <div class="msg_user_text">
                        <h3>Lorem Ipsum</h3>
                        <p>When will you start?</p>
                      </div>

                    </div>
                    <div class="number_of_msg">
                      <p>2</p>
                    </div>


                  </div>
                </div>

                </li>

                <li class='mt-2'>
                  <p class='inbox_list_time'><i class="fas fa-check"></i> <span>1month ago</span> </p>
                <div class="inbox_msg_list">
                  <div class="img_name_msg_area">

                    <div class="msg_user_img">
                      <img src="{{asset('frontend')}}/assets/images/member/girl_pic5.jpg" alt="">

                      <div class="msg_user_text">
                        <h3>Lorem Ipsum</h3>
                        <p>When will you start?</p>
                      </div>

                    </div>
                    <div class="number_of_msg">
                      <p>5</p>
                    </div>


                  </div>
                </div>

                </li>

                <li class='mt-2'>
                  <p class='inbox_list_time'><i class="fas fa-check"></i> <span>16:12:18</span> </p>
                <div class="inbox_msg_list">
                  <div class="img_name_msg_area">

                    <div class="msg_user_img active_user_icon">
                      <img src="{{asset('frontend')}}/assets/images/member/girl_pic6.jpg" alt="">

                      <div class="msg_user_text">
                        <h3>Lorem Ipsum</h3>
                        <p>When will you start?</p>
                      </div>

                    </div>
                    <div class="number_of_msg">
                      <p>10</p>
                    </div>


                  </div>
                </div>

                </li>

                <li class='mt-2'>
                  <p class='inbox_list_time'><i class="fas fa-check"></i> <span>16:12:18</span> </p>
                <div class="inbox_msg_list">
                  <div class="img_name_msg_area">

                    <div class="msg_user_img">
                      <img src="{{asset('frontend')}}/assets/images/member/men_pic8.jpg" alt="">

                      <div class="msg_user_text">
                        <h3>Lorem Ipsum</h3>
                        <p>When will you start?</p>
                      </div>

                    </div>
                    <div class="number_of_msg">
                      <p>2</p>
                    </div>


                  </div>
                </div>

                </li>

                <li class='mt-2'>
                  <p class='inbox_list_time'><i class="fas fa-check"></i> <span>16:12:18</span> </p>
                <div class="inbox_msg_list">
                  <div class="img_name_msg_area">

                    <div class="msg_user_img">
                      <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">

                      <div class="msg_user_text">
                        <h3>Lorem Ipsum</h3>
                        <p>When will you start?</p>
                      </div>

                    </div>
                    <div class="number_of_msg">
                      <p>2</p>
                    </div>


                  </div>
                </div>

                </li>

              </ul>
            </div>

  <!-- ------------- message tab ------------- -->
            <div class=" inbox_user_msg">
              <div class="myself_client_msg_area">



            <div class="myself_msg_area">
              <div class="myself_name_pic_area">
                <span class='myself_name' >Name</span>
                <span class='myself_time' >10.24</span>

                <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">

              </div>
             <div class='myself_msg'>
              <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
             </div>
            </div>

            <div class="client_msg_area">

              <div class="client_name_pic_area">


                <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">
                <span class='client_name' >Name</span>
                <span class='client_time' >10.24</span>
              </div>
             <div class='client_msg'>
              <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>

            </div>
            </div>

            <div class="myself_msg_area">
              <div class="myself_name_pic_area">
                <span class='myself_name' >Name</span>
                <span class='myself_time' >10.24</span>

                <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">

              </div>
             <div class='myself_msg'>
              <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
             </div>
            </div>
            <div class="client_msg_area">

              <div class="client_name_pic_area">


                <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">
                <span class='client_name' >Name</span>
                <span class='client_time' >10.24</span>
              </div>
             <div class='client_msg'>
              <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>

            </div>
            </div>

            <div class="unread_msg_area">
              <h3>UNREAD</h3>
                    <div class="unread_name_pic_area mt-2">


              <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">
              <span class='unread_name' >Name</span>
              <span class='unread_time' >10.24</span>
            </div>
            <div class="unread_msg">
              <p class='mt-2' >Many desktop publishing packages and web page editors now use Lorem Ipsum</p>

              <p>Many desktop publishing packages and web page editors now use Lorem Ipsum</p>

            </div>

          </div>

        </div>
            <div class="msg_typing_area mt-4">

           <form>


                    <div class="input-group typing_input_group_area">
                      <input type="text" class="form-control form-control-lg msg_input_typing" id="inlineFormInputGroupUsername" placeholder="Start typing here...…..">

                      <div class="input-group-prepend">
                        <div class="input-group-text typing_input_group">
                          <label for="file-input" class='file_choose_area'>
                            <svg xmlns="http://www.w3.org/2000/svg" class='file_upload_icon' viewBox="0 0 94.383 151">
                              <path id="Path_7401" d="M75.52,151a47.244,47.244,0,0,1-47.19-47.19V37.75a6.293,6.293,0,1,1,12.58-.41v66.47a34.6,34.6,0,1,0,69.2,0V34.6a22.023,22.023,0,0,0-44.04-.76V97.51a9.44,9.44,0,0,0,18.88,0h0V37.75a6.293,6.293,0,1,1,12.58-.41V97.52a22.02,22.02,0,1,1-44.04.09V34.6a34.61,34.61,0,0,1,69.22,0v69.21A47.231,47.231,0,0,1,75.52,151Z" transform="translate(-28.327)" fill="#5bdb98"/>
                            </svg>
                            <input id="file-input" class='custom-file-input' type="file"/>

                          </label>
                          <div class="msg_send_btn">
                            <button type="submit" class="btn ">Send</button>
                            <svg xmlns="http://www.w3.org/2000/svg" class='send_svg' viewBox="0 0 150 95.66">
                              <path id="Path_124" d="M87.6,99.29v22.73l62.9-47.18L87.6,27.67V49.93A83.28,83.28,0,0,0,62.27,54.7,94.515,94.515,0,0,0,8.41,106.52L.5,123.33l16.41-8.71A151.7,151.7,0,0,1,87.6,99.29ZM93.04,62.4l6.92.84V52.38l29.93,22.44L99.97,97.27V87.76l-5.61-.53c-.51-.05-4.27-.38-10.28-.38a170.617,170.617,0,0,0-55.45,9.14,72.219,72.219,0,0,1,64.4-33.6h.01Z" transform="translate(-0.5 -27.67)" fill="#d0dbe5"/>
                            </svg>

                          </div>
                        </div>
                      </div>

                    </div>


              </form>



            </div>



              </div>

          </div>
            <!-- ------------- Histroy tab (inbox tab) ------------- -->
              <div class="tab-pane fade " id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
                <div class="profile_tab_title">
                  <h2>History</h2>
                </div>



            <div class="inbox_list_area history_section">

              <ul>


                <p class='mt-1 history_date_time_section'><span class='history_time' >16:40</span>
                  <span class='history_date'>15 Nov 2020</span></p>
                <li >
                  <div class="history_item_area">

                    <div class="history_item_name">
                      <p>Collect & deliver</p>
                    </div>

                    <div class="history_details_inner_area">

                      <div class="history_name">
                        <p>Buy some groceries for me-</p>
                        <h4>Toothpaste(1X), Apples(1KG), Chips(1Pack).</h4>
                      </div>

                      <div class="history_rating_area">

                        <div class="history_ratting">
                        <i class="fas fa-star"></i>
                          <span>5.00</span>
                        </div>
                        <div class="history_client_img">
                         <img src="{{asset('frontend')}}/assets/images/member/men_pic8.jpg" alt="">
                         <img src="{{asset('frontend')}}/assets/images/member/girl_pic5.jpg" alt="">
                         <img src="{{asset('frontend')}}/assets/images/member/men_pic10_copy.jpg" alt="">

                        </div>
                      </div>
                    </div>
                  </div>
                </li>

              </ul>

            </div>

          </div>

      <!-- ------------- deliveries tab (Histroy tab) ------------- -->
      <div class="tab-pane fade " id="v-pills-deliveries" role="tabpanel" aria-labelledby="v-pills-deliveries-tab">
        <div class="profile_tab_title">
          <h2>Deliveries</h2>
        </div>
        <div class="inbox_list_area history_section deliveries_section">
              <ul>


               <li class='mt-2' >
                 <div class="deliveries_item_area">
                  <div class="history_item_name">
                    <p>Movers</p>
                  </div>
                  <div class="deliveries_itam">
                    <div class="deliveries_client_name_area">
                      <img src="{{asset('frontend')}}/assets/images/member/girl_pic5.jpg" alt="">

                      <div class="deliveries_item_content">
                        <p>Move some furniture-</p>
                      <h5>Chair, table, beds almirahs</h5>
                      </div>

                    </div>

                    <div class="history_ratting">
                      <i class="fas fa-star"></i>
                        <span>5.00</span>
                      </div>

                  </div>


                 </div>



                </li>

              </ul>
            </div>

     </div>


      <!-- ------------- profile tab info  ------------- -->
      <div class="tab-pane fade @if(isset($_GET['profile'])) show active @endif" id="v-pills-profile-info" role="tabpanel" aria-labelledby="v-pills-profile-info-tab">

        <div class="profile_tab_title">
          <h2>Profile info</h2>
        </div>

        <div class="profile_info_section">
             <!-- ------------- (Register Form but modify)  ------------- -->
          <div class="modal-content login_page_modal_content profile_form_area">

            <div class="modal-body ">
              <div class="reg_form profile_info_form">
                  <form action="{{ url('profile/update/'.Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg pro_reg_name_input" value="{{Auth::user()->name}}" name="name">
                    <label class='reg_name' id="pro_reg_name" for="" style="top: -43px !important">Name</label>
                  </div>

                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg reg_mail_input"  value="{{Auth::user()->email}}"  name="email">
                    <label class='reg_mail' for="  " style="top: -43px !important">Email</label>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg reg_sub_input"  value="{{Auth::user()->suburb}}" name="suburb">
                    <label class='reg_sub profile_sub' for="  "style="top: 153px !important;left: 49px">Suburb</label>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg reg_phn_input" value="{{Auth::user()->phone}}" name="phone">
                    <label class='reg_phn profile_phn' for="  "style="top: 211px !important;left: 49px">Phone</label>
                  </div>

                  <div class="form-group">
                    <div class="col-8">
                        <input type="file" class="form-control form-control-lg " name="profile_image" style="width:100% !important;">
                  </div>
                        <label class='reg_image' for="" style="top: 268px !important;left: 49px">Image</label>
                    </div>
                    {{-- <div class="col-4 mt-4">
                        <img style="height: 50px;width: 50px;border-radius: 25px;" src="{{Auth::user()->profile_image}}" alt="">
                    </div> --}}

                  </div>

                  <div class="reg_btn profile_info_btn">
                    <button type="submit" class="btn ">Save</button>
                  </div>


                </form>
              </div>


            </div>

          </div>


          </div>





     </div>

      <!-- -------------pendu pay tab ------------- -->
      <div class="tab-pane fade " id="v-pills-pendu-pay" role="tabpanel" aria-labelledby="v-pills-pendu-pay-tab">

        <div class="profile_tab_title">
          <h2>PenduPay</h2>
        </div>

        <div class="pendu_pay_area">
          <p>Your balance</p>
          <h4>AUD <span>15</span> </h4>
        </div>


     </div>


      <!-- -------------Payment tab ------------- -->
      <div class="tab-pane fade " id="v-pills-Payment" role="tabpanel" aria-labelledby="v-pills-Payment-tab">
        <div class="profile_tab_title">
          <h2>Payment</h2>
        </div>
        <div class="payment_section">



          <div class="payment_card_area">
            <ul>
              <li>
                <div class="payment_card">

                  <img src="{{asset('frontend')}}/assets/images/Banner/Card.png" alt="" width="50px" height="auto">
                  {{-- <p>2652 66262 642 ***</p>
                  <h4>John Doe</h4> --}}

                  <span class="close test_cls">&times;</span>
                </div>



              </li>

              <li>
                <div class="payment_card">



                  <img src="{{asset('frontend')}}/assets/images/Banner/Card.png" alt="" width="50px" height="auto">
                  {{-- <p>2652 66262 642 ***</p>
                  <h4>John Doe</h4> --}}
                  <span class="close test_cls ">&times;</span>

                </div>


              </li>


            </ul>
          </div>

        </div>



     </div>


      <!-- -------------Notification tab ------------- -->
      <div class="tab-pane fade " id="v-pills-Notification" role="tabpanel" aria-labelledby="v-pills-Notification-tab">
        <div class="profile_tab_title">
          <h2>Notification</h2>
        </div>
       <div class="notification_section">
         <ul>

          <p class='notifi_date' >10 Oct, 2020</p>
           <li class='mt-2'>

             <div class="notification_item_area mt-3">
               <div class="notification_inner_iteam_area">
                 <div class="notifi_icon">

                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 183.69 134.7">
                    <g id="Layer_x0020_1_1_" transform="translate(59.84 -64.65)">
                      <path id="Path_1" data-name="Path 1" d="M96.03,64.65H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.12,6.12,0,0,0,6.12,6.12H96.03A15.59,15.59,0,0,1,111.6,92.47v.58H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.116,6.116,0,0,0,6.12,6.13H111.6v66.26a15.586,15.586,0,0,1-15.57,15.56H-32.03A15.586,15.586,0,0,1-47.6,171.56V91.87a6.131,6.131,0,0,0-6.13-6.13,6.126,6.126,0,0,0-6.11,6.13v79.68a27.841,27.841,0,0,0,27.82,27.8H96.03a27.841,27.841,0,0,0,27.82-27.8V92.47A27.845,27.845,0,0,0,96.03,64.65ZM15.82,167.16a6.17,6.17,0,0,0,3.43-1.05l53.74-36.5a6.116,6.116,0,1,0-6.87-10.12l-49.3,33.47L-.98,132.99a6.094,6.094,0,0,0-8.64-.49,6.112,6.112,0,0,0-.49,8.64l21.36,23.97A6.074,6.074,0,0,0,15.82,167.16Z" fill="#5bdb98"/>
                    </g>
                  </svg>

                 </div>
                 <div class="notifi_content">
                   <h4>Payment method added</h4>
                   <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>

                 </div>
               </div>
             </div>
             <div class="notification_item_area mt-3">
               <div class="notification_inner_iteam_area">
                 <div class="notifi_icon">

                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 183.69 134.7">
                    <g id="Layer_x0020_1_1_" transform="translate(59.84 -64.65)">
                      <path id="Path_1" data-name="Path 1" d="M96.03,64.65H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.12,6.12,0,0,0,6.12,6.12H96.03A15.59,15.59,0,0,1,111.6,92.47v.58H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.116,6.116,0,0,0,6.12,6.13H111.6v66.26a15.586,15.586,0,0,1-15.57,15.56H-32.03A15.586,15.586,0,0,1-47.6,171.56V91.87a6.131,6.131,0,0,0-6.13-6.13,6.126,6.126,0,0,0-6.11,6.13v79.68a27.841,27.841,0,0,0,27.82,27.8H96.03a27.841,27.841,0,0,0,27.82-27.8V92.47A27.845,27.845,0,0,0,96.03,64.65ZM15.82,167.16a6.17,6.17,0,0,0,3.43-1.05l53.74-36.5a6.116,6.116,0,1,0-6.87-10.12l-49.3,33.47L-.98,132.99a6.094,6.094,0,0,0-8.64-.49,6.112,6.112,0,0,0-.49,8.64l21.36,23.97A6.074,6.074,0,0,0,15.82,167.16Z" fill="#5bdb98"/>
                    </g>
                  </svg>

                 </div>
                 <div class="notifi_content">
                   <h4>Payment method added</h4>
                   <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>

                 </div>
               </div>
             </div>


           </li>

          <p class='notifi_date' >10 Oct, 2020</p>
           <li class='mt-2'>

             <div class="notification_item_area mt-3">
               <div class="notification_inner_iteam_area">
                 <div class="notifi_icon">

                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 153.32 144.34">
                    <g id="refer_a_friend" data-name="refer a friend" transform="translate(1.66 -2.83)">
                      <g id="Group_3" data-name="Group 3">
                        <path id="Path_27" data-name="Path 27" d="M58.24,61.43a29.3,29.3,0,1,1,29.3-29.3,29.3,29.3,0,0,1-29.3,29.3Zm0-48.98A19.68,19.68,0,1,0,77.92,32.13h0A19.679,19.679,0,0,0,58.24,12.45Z" fill="#5bdb98"/>
                        <path id="Path_28" data-name="Path 28" d="M91.92,147.17H24.56A26.266,26.266,0,0,1-1.66,120.95,50.806,50.806,0,0,1,49.05,70.19H67.43a50.8,50.8,0,0,1,50.71,50.76A26.26,26.26,0,0,1,91.92,147.17ZM49.05,79.81A41.143,41.143,0,0,0,7.96,120.95a16.649,16.649,0,0,0,16.6,16.6H91.92a16.649,16.649,0,0,0,16.6-16.6A41.143,41.143,0,0,0,67.43,79.81H49.05Z" fill="#5bdb98"/>
                      </g>
                      <g id="Group_4" data-name="Group 4">
                        <path id="Path_29" data-name="Path 29" d="M128.94,25.06V48.69h22.72v6.03H128.94V78.55h-6.43V54.72H99.78V48.69H122.5V25.06Z" fill="#b3b3b3"/>
                      </g>
                    </g>
                  </svg>

                 </div>
                 <div class="notifi_content">
                   <h4>Referral completed</h4>
                   <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>

                 </div>
               </div>
             </div>
             <div class="notification_item_area mt-3">
               <div class="notification_inner_iteam_area">
                 <div class="notifi_icon">

                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 183.69 134.7">
                    <g id="Layer_x0020_1_1_" transform="translate(59.84 -64.65)">
                      <path id="Path_1" data-name="Path 1" d="M96.03,64.65H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.12,6.12,0,0,0,6.12,6.12H96.03A15.59,15.59,0,0,1,111.6,92.47v.58H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.116,6.116,0,0,0,6.12,6.13H111.6v66.26a15.586,15.586,0,0,1-15.57,15.56H-32.03A15.586,15.586,0,0,1-47.6,171.56V91.87a6.131,6.131,0,0,0-6.13-6.13,6.126,6.126,0,0,0-6.11,6.13v79.68a27.841,27.841,0,0,0,27.82,27.8H96.03a27.841,27.841,0,0,0,27.82-27.8V92.47A27.845,27.845,0,0,0,96.03,64.65ZM15.82,167.16a6.17,6.17,0,0,0,3.43-1.05l53.74-36.5a6.116,6.116,0,1,0-6.87-10.12l-49.3,33.47L-.98,132.99a6.094,6.094,0,0,0-8.64-.49,6.112,6.112,0,0,0-.49,8.64l21.36,23.97A6.074,6.074,0,0,0,15.82,167.16Z" fill="#5bdb98"/>
                    </g>
                  </svg>

                 </div>
                 <div class="notifi_content">
                   <h4>Payment method added</h4>
                   <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>

                 </div>
               </div>
             </div>


           </li>



         </ul>
       </div>

     </div>


    <!-- -------------Refer & earn tab ------------- -->
    <div class="tab-pane fade " id="v-pills-refar-earn" role="tabpanel" aria-labelledby="v-pills-refar-earn-tab">
      <div class="profile_tab_title">
        <h2>Refer & earn</h2>
      </div>
      <div class="refer_earn_section text-center">
         <!-- -------------Footer invite section ------------- -->
        <div class="invite_content refer_earn_content">
          <img src="{{asset('frontend')}}/assets/images/Icons/Layer refer.png" alt="">
          <h1> Invite a friend , you both get $15 </h1>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
          {{-- <ul class="list-group mt-3">

            <li class="list-group-item">Referrer: {{ Auth::user()->referrer->name ?? 'Not Specified' }}</li>
            <li class="list-group-item">Refferal count: {{ count(Auth::user()->referrals)  ?? '0' }}</li>
        </ul> --}}

         </div>

         <div class="invite_mail">
           <form method="POST" action="{{ route('profile.invitation') }}">
            @csrf
             <div class="form-group form-inline ">
               <input type="email" class="form-control  mail_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address" name="email">

               <button type="submit" class="btn invite_button">Send invite</button>
             </div>
            </form>

             <p class='more_way more_way_refer' >More way to invite</p>

             <div class="section_tooltipss">
               <input type="text" class=" link_input" value=" {{ Auth::user()->referral_link }}" id="myInput1">

               <div class="tooltip22">
               <button type="button" class="btn invite_button2"  onclick="myFunctions()" onmouseout="outFunca()">
                 <span class="tooltiptext1" id="myTooltip1">Copy to clipboard</span>
                 Copy text
                 </button>
               </div>
             </div>

             <div class="share_invite refer_earn_share">
               <span>Share:-</span>
              <a href="#" class='twiter'> <i class="fab fa-twitter-square"></i></a>
              <a href="#" class='fb' > <i class="fab fa-facebook-square"></i></a>
              <a href="#" class='ins'> <i class="fab fa-instagram-square"></i></a>
             </div>


         </div>

      </div>



   </div>

    <!-- ------------- support tab ------------- -->
    <div class="tab-pane fade " id="v-pills-Support" role="tabpanel" aria-labelledby="v-pills-Support-tab">
      <div class="profile_tab_title">
        <h2>Support</h2>
      </div>

      <div class="support_section">
        <div class="support_table_area">
          <table class="table table-bordered text-center table-hover">
            <thead class='support_table_head'>
              <tr>
                <th>ID</th>
                <th>Topic</th>
                <th>Type</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>924589654</td>
                <td>Order issue</td>
                <td>Urgent</td>
                <td>
                  <svg xmlns="http://www.w3.org/2000/svg" class='table_row_delete_icon' viewBox="0 0 141.113 160.703">
                    <g id="delete" transform="translate(-4.899 3.822)">
                      <g id="Group_990" transform="translate(1.741 7.462)">
                        <path id="Path_2450" d="M106.02,149.42H40.93A23.757,23.757,0,0,1,17.22,125.7V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7a15.688,15.688,0,0,0,15.67,15.67h65.09a15.688,15.688,0,0,0,15.67-15.67V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7A24,24,0,0,1,106.02,149.42Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_991">
                        <path id="Path_2451" d="M129.06,15.85H98.52a23.641,23.641,0,0,0-46.61.01H21.38A16.3,16.3,0,0,0,4.9,31.96v.37A15.96,15.96,0,0,0,20.74,48.41c.21,0,.43,0,.64-.01H129.46A16.282,16.282,0,0,0,130,15.84c-.32-.01-.63-.01-.94.01ZM75.22,4.2A15.113,15.113,0,0,1,90.09,15.85H59.95A15.916,15.916,0,0,1,75.22,4.2Zm53.84,36.16H21.38a8.444,8.444,0,0,1,0-16.88H129.46a8.493,8.493,0,0,1,8.44,8.44A8.844,8.844,0,0,1,129.06,40.36Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_992" transform="translate(4.726 8.159)">
                        <path id="Path_2452" d="M42.38,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,42.38,129.01Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_993" transform="translate(11.691 8.159)">
                        <path id="Path_2453" d="M91.67,129.01a3.8,3.8,0,0,1-4.04-3.54,4.17,4.17,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,91.67,129.01Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_994" transform="translate(8.208 8.159)">
                        <path id="Path_2454" d="M67.02,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81v67.1A4.288,4.288,0,0,1,67.02,129.01Z" fill="#ff7e5d"/>
                      </g>
                    </g>
                  </svg>

                </td>
              </tr>
              <tr>
                <td>454589654</td>
                <td>Order issue</td>
                <td>Urgent</td>
                <td>
                  <svg xmlns="http://www.w3.org/2000/svg" class='table_row_delete_icon' viewBox="0 0 141.113 160.703">
                    <g id="delete" transform="translate(-4.899 3.822)">
                      <g id="Group_990" transform="translate(1.741 7.462)">
                        <path id="Path_2450" d="M106.02,149.42H40.93A23.757,23.757,0,0,1,17.22,125.7V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7a15.688,15.688,0,0,0,15.67,15.67h65.09a15.688,15.688,0,0,0,15.67-15.67V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7A24,24,0,0,1,106.02,149.42Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_991">
                        <path id="Path_2451" d="M129.06,15.85H98.52a23.641,23.641,0,0,0-46.61.01H21.38A16.3,16.3,0,0,0,4.9,31.96v.37A15.96,15.96,0,0,0,20.74,48.41c.21,0,.43,0,.64-.01H129.46A16.282,16.282,0,0,0,130,15.84c-.32-.01-.63-.01-.94.01ZM75.22,4.2A15.113,15.113,0,0,1,90.09,15.85H59.95A15.916,15.916,0,0,1,75.22,4.2Zm53.84,36.16H21.38a8.444,8.444,0,0,1,0-16.88H129.46a8.493,8.493,0,0,1,8.44,8.44A8.844,8.844,0,0,1,129.06,40.36Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_992" transform="translate(4.726 8.159)">
                        <path id="Path_2452" d="M42.38,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,42.38,129.01Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_993" transform="translate(11.691 8.159)">
                        <path id="Path_2453" d="M91.67,129.01a3.8,3.8,0,0,1-4.04-3.54,4.17,4.17,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,91.67,129.01Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_994" transform="translate(8.208 8.159)">
                        <path id="Path_2454" d="M67.02,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81v67.1A4.288,4.288,0,0,1,67.02,129.01Z" fill="#ff7e5d"/>
                      </g>
                    </g>
                  </svg>

                </td>
              </tr>
              <tr>
                <td>7876589654</td>
                <td>Order issue</td>
                <td>Urgent</td>
                <td>
                  <svg xmlns="http://www.w3.org/2000/svg" class='table_row_delete_icon' viewBox="0 0 141.113 160.703">
                    <g id="delete" transform="translate(-4.899 3.822)">
                      <g id="Group_990" transform="translate(1.741 7.462)">
                        <path id="Path_2450" d="M106.02,149.42H40.93A23.757,23.757,0,0,1,17.22,125.7V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7a15.688,15.688,0,0,0,15.67,15.67h65.09a15.688,15.688,0,0,0,15.67-15.67V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7A24,24,0,0,1,106.02,149.42Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_991">
                        <path id="Path_2451" d="M129.06,15.85H98.52a23.641,23.641,0,0,0-46.61.01H21.38A16.3,16.3,0,0,0,4.9,31.96v.37A15.96,15.96,0,0,0,20.74,48.41c.21,0,.43,0,.64-.01H129.46A16.282,16.282,0,0,0,130,15.84c-.32-.01-.63-.01-.94.01ZM75.22,4.2A15.113,15.113,0,0,1,90.09,15.85H59.95A15.916,15.916,0,0,1,75.22,4.2Zm53.84,36.16H21.38a8.444,8.444,0,0,1,0-16.88H129.46a8.493,8.493,0,0,1,8.44,8.44A8.844,8.844,0,0,1,129.06,40.36Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_992" transform="translate(4.726 8.159)">
                        <path id="Path_2452" d="M42.38,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,42.38,129.01Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_993" transform="translate(11.691 8.159)">
                        <path id="Path_2453" d="M91.67,129.01a3.8,3.8,0,0,1-4.04-3.54,4.17,4.17,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,91.67,129.01Z" fill="#ff7e5d"/>
                      </g>
                      <g id="Group_994" transform="translate(8.208 8.159)">
                        <path id="Path_2454" d="M67.02,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81v67.1A4.288,4.288,0,0,1,67.02,129.01Z" fill="#ff7e5d"/>
                      </g>
                    </g>
                  </svg>

                </td>
              </tr>

            </tbody>
          </table>

          <div class="support_btn">
            <button type="button" class="btn " data-toggle="modal" data-target="#tricket_exampleModalCenter">Create a support ticket</button>
          </div>


        </div>

         <!-- /* ------------- support chat section (chat ) ------------- */ -->
        <div class="support_chat_section">
          <div class="row">
            <div class="col-lg-4 ">

              <div class="support_details_area">

                <div class="support_details_item">
                  <p>Ticket submitted by</p>
                  <div class="support_client_name">
                    <h3>John Doe</h3>
                  </div>
                  <p>Topic</p>
                  <div class="support_client_name">
                    <h3>Payment Issue</h3>
                  </div>
                </div>

                <div class="support_details_item mt-3">
                  <p>Supporting by</p>
                  <div class="support_client_name">
                    <h3>XYZ</h3>
                    <p class='pendu_support_name' >CTO, Pendu</p>
                  </div>

                </div>

              </div>


            </div>

            <div class="col-lg-8 ">
              <!-- ------------- copy of message tab ------------- -->
            <div class=" inbox_user_msg support_msg_area">
              <div class="myself_client_msg_area support_client_myselft_msg_area">



            <div class="myself_msg_area">
              <div class="myself_name_pic_area ">
                <span class='myself_name' >Name</span>
                <span class='myself_time' >10.24</span>

                <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">

              </div>
             <div class='myself_msg support_myself_msg'>
              <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
             </div>
            </div>

            <div class="client_msg_area">

              <div class="client_name_pic_area">


                <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">
                <span class='client_name' >Name</span>
                <span class='client_time' >10.24</span>
              </div>
             <div class='client_msg support_client_msg'>
              <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>

            </div>
            </div>

            <div class="myself_msg_area ">
              <div class="myself_name_pic_area">
                <span class='myself_name' >Name</span>
                <span class='myself_time' >10.24</span>

                <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">

              </div>
             <div class='myself_msg support_myself_msg'>
              <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
             </div>
            </div>

            <div class="client_msg_area ">

              <div class="client_name_pic_area">


                <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">
                <span class='client_name' >Name</span>
                <span class='client_time' >10.24</span>
              </div>
             <div class='client_msg support_client_msg'>
              <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>

            </div>
            </div>

            <div class="myself_msg_area ">
              <div class="myself_name_pic_area">
                <span class='myself_name' >Name</span>
                <span class='myself_time' >10.24</span>

                <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">

              </div>
             <div class='myself_msg support_myself_msg'>
              <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
             </div>
            </div>

            <div class="client_msg_area ">

              <div class="client_name_pic_area">


                <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">
                <span class='client_name' >Name</span>
                <span class='client_time' >10.24</span>
              </div>
             <div class='client_msg support_client_msg'>
              <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>

            </div>
            </div>
            <div class="unread_msg_area ">
              <h3>UNREAD</h3>
                    <div class="unread_name_pic_area mt-2">


              <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt="">
              <span class='unread_name' >Name</span>
              <span class='unread_time' >10.24</span>
            </div>
            <div class="unread_msg support_unread_msg">
              <p class='mt-2' >Many desktop publishing packages and web page editors now use Lorem Ipsum</p>

              <p>Many desktop publishing packages and web page editors now use Lorem Ipsum</p>

            </div>

          </div>

        </div>
            <div class="msg_typing_area mt-4">

           <form>


                    <div class="input-group typing_input_group_area">
                      <input type="text" class="form-control form-control-lg msg_input_typing" id="inlineFormInputGroupUsername" placeholder="Start typing here...…..">

                      <div class="input-group-prepend">
                        <div class="input-group-text typing_input_group">

                          <div class="msg_send_btn support_msg_send_btn">
                            <button type="submit" class="btn ">Send</button>
                            <svg xmlns="http://www.w3.org/2000/svg" class='send_svg' viewBox="0 0 150 95.66">
                              <path id="Path_124" d="M87.6,99.29v22.73l62.9-47.18L87.6,27.67V49.93A83.28,83.28,0,0,0,62.27,54.7,94.515,94.515,0,0,0,8.41,106.52L.5,123.33l16.41-8.71A151.7,151.7,0,0,1,87.6,99.29ZM93.04,62.4l6.92.84V52.38l29.93,22.44L99.97,97.27V87.76l-5.61-.53c-.51-.05-4.27-.38-10.28-.38a170.617,170.617,0,0,0-55.45,9.14,72.219,72.219,0,0,1,64.4-33.6h.01Z" transform="translate(-0.5 -27.67)" fill="#d0dbe5"/>
                            </svg>

                          </div>
                        </div>
                      </div>



                    </div>
                    <div class="support_msg_emoji_section mt-1">
                      <div class="support_msg_icon mt-2">


                  <span class='text-size_icon'><i class="fas fa-text-height"></i></span>
                  <span class='emoji_icon'><i class="far fa-grin-alt"></i></span>

                        <span class='support_attach_icon'>
                  <label for="file-input" >
                    <i class="fas fa-paperclip"></i>
                    <input id="file-input" class='custom-file-input' type="file"/>

                  </label>
                </span>

                </div>
                </div>

              </form>



            </div>



              </div>
            </div>
          </div>
        </div>



      </div>
      <!-- /* ------------- support modal tab ------------- */ -->
  <!-- Modal -->
  <div class="modal fade" id="tricket_exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-body tricket_modal_body">
          <div class="tricket_modal_section">
            <div class="tricket_top_content">
              <h5>Submit new ticket</h5>
              <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
            </div>

            <div class="tricket_form_area">

              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Topic</label>
                  <input type="text" class="form-control" id=" " >
                </div>
                <div class="form-group">
                  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
                  <select class="custom-select my-1 mr-sm-2 tricket_selectbox" id="inlineFormCustomSelectPref">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Describe your issue</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                </div>

              </form>


            </div>

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn trick_close_btn" data-dismiss="modal">Close</button>
          <button type="button" class="btn trick_save_btn">Submit ticket</button>
        </div>
      </div>
    </div>
  </div>



   </div>


    <!-- ------------- faq tab ------------- -->
    <div class="tab-pane fade " id="v-pills-faq" role="tabpanel" aria-labelledby="v-pills-faq-tab">
      <div class="profile_tab_title">
        <h2>FAQ</h2>
      </div>

      <div class="faq_main_section">

        <h5 class='faq_title' > <span>
          <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 150.009 142.99">
            <g id="iconfinder_Cart_2742767" transform="translate(-6.5 -10.11)">
              <path id="Path_2424" d="M120.18,118.06a17.52,17.52,0,1,0,17.52,17.52h0A17.724,17.724,0,0,0,120.18,118.06Z" fill="#60e99c"/>
              <path id="Path_2425" d="M151,34.53c-.34,0-.84-.17-1.35-.17H43.55L41.87,23.08A15.074,15.074,0,0,0,26.88,10.11H13.24a6.74,6.74,0,0,0,0,13.48H26.88a1.8,1.8,0,0,1,1.68,1.52L38.98,96.18a18.461,18.461,0,0,0,18.19,15.64h70.09a18.721,18.721,0,0,0,18.19-14.8L156.4,42.28a6.653,6.653,0,0,0-5.36-7.74A.076.076,0,0,0,151,34.53Z" fill="#60e99c"/>
              <path id="Path_2426" d="M59.92,118.06a17.616,17.616,0,0,0-16.84,18.19,17.267,17.267,0,0,0,17.15,16.7h.34a17.448,17.448,0,0,0-.65-34.89Z" fill="#60e99c"/>
            </g>
          </svg>

        </span> <span>Order</span> </h5>
        <ul class='faq_list' >
          <li class='mt-2' ><span>Q1:</span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr?
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna .</p>
          </li>
          <li class='mt-2' ><span>Q2:</span> agna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum? </li>
          <li class='mt-2' ><span>Q3:</span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr? </li>

        </ul>
        <h5 class='faq_title mt-4' > <span>
          <svg id="delivery" xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 151 151">
            <path id="Path_2433" d="M0,0H151V151H0Z" fill="none"/>
            <path id="Path_2434" d="M125.84,50.34H106.96V25.17H18.88A12.577,12.577,0,0,0,6.3,37.75h0v69.21H18.88a18.875,18.875,0,1,0,37.75,0H94.38a18.88,18.88,0,0,0,37.76,0h12.58V75.5ZM37.75,116.4a9.43,9.43,0,1,1,.02,0Zm84.94-56.63L135.05,75.5H106.96V59.77Zm-9.44,56.63a9.43,9.43,0,1,1,.02,0Z" fill="#60e99c"/>
          </svg>


        </span> <span>Delivery</span> </h5>
        <ul class='faq_list' >
          <li class='mt-2' ><span>Q1:</span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr?
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna .</p>
          </li>
          <li class='mt-2' ><span>Q2:</span> agna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum? </li>
          <li class='mt-2' ><span>Q3:</span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr? </li>

        </ul>



      </div>

   <!-- ---------- pagination section ------------ -->
   <div class="pagination_section mt-3">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end" style="margin:20px 0">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>

        <li class="page-item">
          <a class="page-link left_icon_pagi" href="#" aria-label="Previous" >
            <i class="fas fa-chevron-left"></i>

          </a>
        </li>

        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link left_icon_pagi" href="#" aria-label="Previous" >
            <i class="fas fa-chevron-right"></i>

          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>


   </div>
    <!-- ------------- Term and conditions tab (faq) ------------- -->
    <div class="tab-pane fade " id="v-pills-Term" role="tabpanel" aria-labelledby="v-pills-Term-tab">
      <div class="profile_tab_title">
        <h2>Term and conditions</h2>
      </div>
    <div class="term_condition_section">
      <div class="term_condi_itea">
       <ul>
         <li>Lorem ipsum dolor

         </li>
         <p>Lorem ipsum untyam e vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebasd gur sit.</p>
         <li>Lorem ipsum dolor

         </li>
         <p>Lorem ipsum untyam e vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebasd gur sit.</p>
         <li>Lorem ipsum dolor

         </li>
         <p>Lorem ipsum untyam e vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebasd gur sit.</p>

       </ul>
      </div>
    </div>

   <!-- ---------- pagination section ------------ -->
   <div class="pagination_section mt-3">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end" style="margin:20px 0">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>

        <li class="page-item">
          <a class="page-link left_icon_pagi" href="#" aria-label="Previous" >
            <i class="fas fa-chevron-left"></i>

          </a>
        </li>

        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link left_icon_pagi" href="#" aria-label="Previous" >
            <i class="fas fa-chevron-right"></i>

          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>

   </div>



          </div><!-- ---- end  tab ------ -->


            </div> <!-- ---- end row of tab ------ -->





    </div>


  </div>

  </div>



  <!-- ================= Profile Modal tab ============ -->
  <div class="modal fade profile-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  ">
      <div class="modal-content offer_modal_contetn">
          <div class="modal-header offer_modal_title">
              <h5 class="modal-title" id="exampleModalLongTitle">Offers from drivers</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <section class=" offer_main_area" >
                  <ul>

                      <li class='offer_inter_item mt-1' >
                        <div class="container">


                        <div class="row">

                      <div class="col-md-2 ">


                          <div class="offer_image">
                              <img src="{{asset('frontend')}}/assets/images/member/men_pic10_copy.jpg" alt="">
                              <h5>Kal M.</h5>
                              <h6><i class="fas fa-star"></i> <span>4.5</span> </h6>
                          </div>
                        </div>
                        <div class="col-md-6 offer_middle_row">


                          <div class="circle_offer">
                            <div class="chart" data-percent="73" data-scale-color="#ffb400">73%
                              <h6>Average accuracy</h6>
                            </div>
                          </div>
                          <div class="circle_offer">
                            <div class="chart" data-percent="73" data-scale-color="#ffb400">73%
                              <h6>Success rate</h6>
                            </div>
                          </div>

                          <div class="Vehicle_offer">
                            <img src="{{asset('frontend')}}/assets/images/Illustrations/car.png" alt="">
                            <h6>Vehicle type</h6>

                          </div>


                        </div>
                        <div class="col-md-3 ">



                          <div class="accept_offer_cost">
                            <div class="circle_curve">
                              <h1></h1>
                                <h4>$200</h4>

                            </div>
                            <a href="{{ url('payment') }}" type="button" class="btn">Accept Offer</a>
                            {{-- <button type="button" class="btn ">Accept Offer</button> --}}

                          </div>

                        </div>

                        </div>
                      </div>

                     <span class="close1 offer_close">&times;</span>

                      </li>

                      <li class='offer_inter_item mt-1' >
                        <div class="container">


                        <div class="row">

                      <div class="col-md-2 ">


                          <div class="offer_image">
                              <img src="{{asset('frontend')}}/assets/images/member/men_pic10_copy.jpg" alt="">
                              <h5>Kal M.</h5>
                              <h6><i class="fas fa-star"></i> <span>4.5</span> </h6>
                          </div>
                        </div>
                        <div class="col-md-6 offer_middle_row">


                          <div class="circle_offer">
                            <div class="chart" data-percent="73" data-scale-color="#ffb400">73%
                              <h6>Average accuracy</h6>
                            </div>
                          </div>
                          <div class="circle_offer">
                            <div class="chart" data-percent="73" data-scale-color="#ffb400">73%
                              <h6>Success rate</h6>
                            </div>
                          </div>

                          <div class="Vehicle_offer">
                            <img src="{{asset('frontend')}}/assets/images/Illustrations/car.png" alt="">
                            <h6>Vehicle type</h6>

                          </div>


                        </div>
                        <div class="col-md-3 ">



                          <div class="accept_offer_cost">
                            <div class="circle_curve">
                              <h1></h1>
                                <h4>$200</h4>

                            </div>
                            <button type="button" class="btn ">Accept Offer</button>

                          </div>

                        </div>

                        </div>
                      </div>

                     <span class="close1 offer_close">&times;</span>

                      </li>


                    </ul>

              </section>



            </div>


      </div>
    </div>
  </div>



@include("User.component.task_process")
@include("User.payment.payment_release")


@endsection
