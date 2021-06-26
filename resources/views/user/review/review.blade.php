@extends('user.asset')
@section('user_content')
<style>
    .step-line {
        width: 100%;
        display: flex;
        justify-content: space-between;
        border-top: 2px solid #8f8f8f;
        padding-top: 15px;
        margin-top: 15px;
    }

    .step-line div {
        background-color: #ffffff;
        font-weight: bold;
        border: 2px solid #8f8f8f;
        margin-top: -30px;
        width: 25px;
        height: 25px;
        line-height: 45px;
        text-align: center;
        border-radius: 50%;
    }
    .label-title {
        font-weight: 600;
    }
    /* input[type=text] {
        background: #f1f1f1;
        border:none;
        outline: none;
    } */
    *:focus {
        outline: none;
    }
    .products-box {
        background: #f1f1f1;
        width: 100%;
        /* height: 50px; */
        border-radius: 10px;
    }

    .circle {
        background-color: #ffffff;
        font-weight: bold;
        border: 5px solid #4cb08a;
        width: 20px;
        height: 20px;
        line-height: 45px;
        text-align: center;
        border-radius: 50%;
    }
    .button {
        background-color: #4CAF50;
        border: none;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        padding: 14px 70px;
        cursor: pointer;
        border-radius: 10px;
        font-weight: bold;
    }
    .button-outline {
        border: 2px solid #4CAF50;
        background-color: white;
        text-align: center;
        text-decoration: none;
        padding: 14px 70px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 10px;
        font-weight: bold;
    }
    img.close-popup-image,
    .generate-link-close-modal,
    .sendModal-close-modal {
        right: -8px;
        top: -7px;
        width:20px;
        cursor: pointer;
    }
    /* HIDE RADIO */
    [type=radio] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

        /* IMAGE STYLES */
    [type=radio] + div {
        cursor: pointer;
    border-radius: 2px;
    background: transparent;
    border: 1px solid #90a0b2;
    width: 80px !important;
    height: 60px;
    margin-top: 10px;
    }

        /* CHECKED STYLES */
    [type=radio]:checked + div {
        border: 0px;
        padding: 0px;
        background: #ffebcf;
        border-radius: 2px;
    }
    [type=radio]:checked + div > label{
        color: #fff;
        cursor: pointer;
    }
    .radio-btn-text {
        cursor: pointer;
        font-size: 18px;
        font-weight: 800;
        color: #5bdb98;
    }

    /* invite button */
    .link_input{
        margin-left: 173px !important;
        width: 560px !important;
    }
    .section_tooltipss{
        width: 100%;
    }

   .tooltip22 {
       padding-left: 20px;
    }

    .trips-success-show{
        /* display: none; */
    }
    #order-tips-form{
        display: inherit;
        margin: auto;
    }
    .not-btn, .not-btn:hover{
        background:#ffebcf;
        color: rgb(255, 180, 74);
        border: none;
        padding: 10px 55px;
        border-radius: 4px;
    }
    .cnf-btn, .cnf-btn:hover{
        background: rgb(231, 248, 239);
        color: #4CAF50;
        border: none;
        padding: 10px 55px;
        border-radius: 4px;
    }

    /* @media (max-width: 575.98 px){
        .trips-success-hide .not-btn{
            padding: 10px 10px !important;
            color: red;
        }
        #submit-order-tips{
            padding: 10px 10px !important;
        }
    } */
</style>
<section class="">
    <div style="height: 120px; background: #5bdb98"></div>
    <div class="container" style="margin-top: -60px;">
        <span class="font-weight-bold" id="titleId">Review sent</span>
        <div class="row" style="background: #fff; box-shadow: 0px 3px 6px rgba(0, 0, 0, 13);border-radius: 10px;margin-bottom: 30px;padding-bottom: 20px;">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center mt-5">
                <svg id="Group_1384" data-name="Group 1384" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="250.555" height="234.467" viewBox="0 0 250.555 234.467">
                    <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_2475" data-name="Rectangle 2475" width="250.555" height="234.467" fill="none"/>
                    </clipPath>
                    <clipPath id="clip-path-2">
                        <rect id="Rectangle_2467" data-name="Rectangle 2467" width="250.556" height="234.467" fill="none"/>
                    </clipPath>
                    <clipPath id="clip-path-3">
                        <rect id="Rectangle_2465" data-name="Rectangle 2465" width="226.173" height="158.475" fill="none"/>
                    </clipPath>
                    <clipPath id="clip-path-4">
                        <path id="Path_5874" data-name="Path 5874" d="M275.021,424.128a112.632,112.632,0,0,1-9.483,45.38H58.315a113.1,113.1,0,1,1,216.706-45.38" transform="translate(-48.848 -311.033)" fill="none"/>
                    </clipPath>
                    <linearGradient id="linear-gradient" x1="-0.052" y1="1.004" x2="-0.051" y2="1.004" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#5bdb98"/>
                        <stop offset="1" stop-color="#60e99c"/>
                    </linearGradient>
                    <clipPath id="clip-path-6">
                        <rect id="Rectangle_2471" data-name="Rectangle 2471" width="93.191" height="93.192" fill="none"/>
                    </clipPath>
                    <clipPath id="clip-path-7">
                        <path id="Path_5895" data-name="Path 5895" d="M728.123,46.6A46.6,46.6,0,1,1,681.527,0a46.6,46.6,0,0,1,46.6,46.6" transform="translate(-634.931)" fill="none"/>
                    </clipPath>
                    <linearGradient id="linear-gradient-2" x1="-1.65" y1="2.516" x2="-1.648" y2="2.516" xlink:href="#linear-gradient"/>
                    </defs>
                    <g id="Group_1383" data-name="Group 1383" clip-path="url(#clip-path)">
                    <g id="Group_1375" data-name="Group 1375">
                        <g id="Group_1374" data-name="Group 1374" clip-path="url(#clip-path-2)">
                        <g id="Group_1373" data-name="Group 1373" transform="translate(11.833 75.344)" opacity="0.12">
                            <g id="Group_1372" data-name="Group 1372">
                            <g id="Group_1371" data-name="Group 1371" clip-path="url(#clip-path-3)">
                                <g id="Group_1370" data-name="Group 1370" transform="translate(0 0)">
                                <g id="Group_1369" data-name="Group 1369" clip-path="url(#clip-path-4)">
                                    <rect id="Rectangle_2464" data-name="Rectangle 2464" width="226.173" height="158.475" transform="translate(0 0)" fill="url(#linear-gradient)"/>
                                </g>
                                </g>
                            </g>
                            </g>
                        </g>
                        <path id="Path_5875" data-name="Path 5875" d="M500.366,430.237s20.679-27.681,28.064-21.773-21.786,34.711-21.786,34.711Z" transform="translate(-379.159 -308.893)" fill="#ffc7b6"/>
                        <path id="Path_5876" data-name="Path 5876" d="M500.366,512.941s20.679-27.681,28.064-21.773-21.786,34.711-21.786,34.711Z" transform="translate(-379.159 -371.562)" fill="#ffc7b6"/>
                        <path id="Path_5877" data-name="Path 5877" d="M500.366,595.643s20.679-27.681,28.064-21.773-21.786,34.711-21.786,34.711Z" transform="translate(-379.159 -434.231)" fill="#ffc7b6"/>
                        <path id="Path_5878" data-name="Path 5878" d="M571.2,416.329v19.615c1.319-1.549,2.648-3.166,3.919-4.8V413.64a29.553,29.553,0,0,0-3.919,2.689" transform="translate(-432.832 -313.441)" fill="#202640"/>
                        <path id="Path_5879" data-name="Path 5879" d="M571.2,499.031v19.615c1.319-1.549,2.648-3.166,3.919-4.8V496.342a29.586,29.586,0,0,0-3.919,2.689" transform="translate(-432.832 -376.11)" fill="#202640"/>
                        <path id="Path_5880" data-name="Path 5880" d="M571.2,581.734v19.615c1.319-1.549,2.648-3.166,3.919-4.8V579.045a29.585,29.585,0,0,0-3.919,2.689" transform="translate(-432.832 -438.779)" fill="#202640"/>
                        <rect id="Rectangle_2466" data-name="Rectangle 2466" width="55.399" height="52.79" transform="translate(61.384 181.028)" fill="#ffc7b6"/>
                        <path id="Path_5881" data-name="Path 5881" d="M483.942,747.319a15.6,15.6,0,0,1-1.814,5.891,19.647,19.647,0,0,1-6.944,7.083,33.972,33.972,0,0,1-8.05,3.679,33.362,33.362,0,0,1-4.785,1.227V747.319Z" transform="translate(-350.351 -566.291)" fill="#ffc7b6"/>
                        <path id="Path_5882" data-name="Path 5882" d="M366.111,753.309v4.439a19.648,19.648,0,0,1-6.944,7.083l-8.05-.691-4.785-.414-37.088-3.23,1.5-7.186Z" transform="translate(-234.334 -570.83)" fill="#202640"/>
                        <path id="Path_5883" data-name="Path 5883" d="M350.7,414.517H307.5a12.924,12.924,0,0,1-12.924-12.924V309.646A12.924,12.924,0,0,1,307.5,296.721h43.2a12.924,12.924,0,0,1,12.924,12.924v91.948A12.924,12.924,0,0,1,350.7,414.517" transform="translate(-223.215 -224.844)" fill="#60e99c"/>
                        <path id="Path_5884" data-name="Path 5884" d="M334.515,432.9a4.292,4.292,0,0,1-4.286-4.287V336.663a4.292,4.292,0,0,1,4.286-4.287h43.2a4.292,4.292,0,0,1,4.287,4.287v91.948a4.292,4.292,0,0,1-4.287,4.287Z" transform="translate(-250.235 -251.862)" fill="#fff"/>
                        <path id="Path_5885" data-name="Path 5885" d="M226.332,582.518s25.849-31.757-1.847-45.42c0,0,15.879-15.879,9.97-22.526-5.539-6.231-38.016,7.335-35.664,32.18a28.371,28.371,0,0,0,2.995,9.843c8.369,16.9,24.545,25.923,24.545,25.923" transform="translate(-150.545 -388.783)" fill="#ffc7b6"/>
                        <path id="Path_5886" data-name="Path 5886" d="M385.608,543.94h-25.6a7.755,7.755,0,0,1,0-15.509h25.6a7.755,7.755,0,1,1,0,15.509" transform="translate(-266.927 -400.426)" fill="#60e99c"/>
                        </g>
                    </g>
                    <text id="pay" transform="translate(93.007 133.443)" fill="#133479" font-size="9" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">pay</tspan></text>
                    <g id="Group_1382" data-name="Group 1382">
                        <g id="Group_1381" data-name="Group 1381" clip-path="url(#clip-path-2)">
                        <path id="Path_5887" data-name="Path 5887" d="M697.17,800.109H639.992l-4.854-22.992,4.75-20.85,44.913-8.948Z" transform="translate(-481.284 -566.291)" fill="#ffc7b6"/>
                        <path id="Path_5888" data-name="Path 5888" d="M795.309,670.795l-3.127,17.24L783.13,654.4l-2.159-8.05a9.317,9.317,0,0,1,2.332.138h.017c11.228,2.09,11.988,24.3,11.988,24.3" transform="translate(-591.791 -489.766)" fill="#ffc7b6"/>
                        <path id="Path_5889" data-name="Path 5889" d="M791.111,673.472,783.13,654.4l-2.159-8.05a9.318,9.318,0,0,1,2.332.138h.017c2.367,1.883,5.079,5.372,6.616,11.816a40.316,40.316,0,0,1,1.175,15.167" transform="translate(-591.791 -489.766)" fill="#202640"/>
                        <path id="Path_5890" data-name="Path 5890" d="M703.4,653.045c-.173,8.965-11.177,11.159-11.177,11.159l-14.32-15.91-14.1-34.721a33.362,33.362,0,0,1,23.234,1.088c12.23,5.3,16.549,29.436,16.359,38.384" transform="translate(-503.007 -463.742)" fill="#ffc7b6"/>
                        <path id="Path_5891" data-name="Path 5891" d="M718.194,643.6,703.027,612a30.617,30.617,0,0,1,5.856.4,56.634,56.634,0,0,1,9.311,31.2" transform="translate(-532.728 -463.743)" fill="#202640"/>
                        <path id="Path_5892" data-name="Path 5892" d="M644.94,639.272c-.173,10.158-11.177,12.645-11.177,12.645l-14.32-18.052-14.113-39.42a18.378,18.378,0,0,1,2.591-.829,29.927,29.927,0,0,1,20.66,2.073c12.23,6.029,16.531,33.409,16.359,43.583" transform="translate(-458.697 -449.089)" fill="#ffc7b6"/>
                        <path id="Path_5893" data-name="Path 5893" d="M637.1,628.2l-21.075-34.479a29.375,29.375,0,0,1,6.2-.933c2.695,1.918,5.714,3.75,8.98,7.824,4.62,9.887,5.894,27.588,5.894,27.588" transform="translate(-466.803 -449.191)" fill="#202640"/>
                        <path id="Path_5894" data-name="Path 5894" d="M543.413,620.29l-12.705.945s-22.218,3.2-28.824-20.655c-4.531-18.465.825-26.724,3.975-26.972,8.082-.637,8.586,13.309,11.035,19.152a3.291,3.291,0,0,0,6.279-1.817l-3.205-19.41s-26.35-19.3-22.2-28.01,38.384,14.731,40.666,18.258S545.072,579,545.072,579l6.847,34.234Z" transform="translate(-376.854 -410.4)" fill="#ffc7b6"/>
                        <rect id="Rectangle_2468" data-name="Rectangle 2468" width="16.193" height="1.296" transform="translate(204.714 123.636)" fill="#60e99c"/>
                        <rect id="Rectangle_2469" data-name="Rectangle 2469" width="16.193" height="1.296" transform="translate(20.623 173.707)" fill="#60e99c"/>
                        <g id="Group_1380" data-name="Group 1380" transform="translate(153.804)" opacity="0.12">
                            <g id="Group_1379" data-name="Group 1379">
                            <g id="Group_1378" data-name="Group 1378" clip-path="url(#clip-path-6)">
                                <g id="Group_1377" data-name="Group 1377">
                                <g id="Group_1376" data-name="Group 1376" clip-path="url(#clip-path-7)">
                                    <rect id="Rectangle_2470" data-name="Rectangle 2470" width="93.192" height="93.192" transform="translate(0 0)" fill="url(#linear-gradient-2)"/>
                                </g>
                                </g>
                            </g>
                            </g>
                        </g>
                        <path id="Path_5896" data-name="Path 5896" d="M796.477,164.228H724.423a1.718,1.718,0,0,1-1.718-1.718V119.449a1.718,1.718,0,0,1,1.718-1.718h72.053a1.718,1.718,0,0,1,1.718,1.718V162.51a1.718,1.718,0,0,1-1.718,1.718" transform="translate(-547.639 -89.212)" fill="#88b7e6"/>
                        <rect id="Rectangle_2472" data-name="Rectangle 2472" width="75.49" height="8.594" transform="translate(175.066 38.173)" fill="#133479"/>
                        <path id="Path_5897" data-name="Path 5897" d="M777.335,230.569H745.946a.413.413,0,0,1-.413-.414V223.3a.413.413,0,0,1,.413-.413h31.388a.413.413,0,0,1,.413.413v6.855a.413.413,0,0,1-.413.414" transform="translate(-564.938 -168.896)" fill="#133479"/>
                        <path id="Path_5898" data-name="Path 5898" d="M925.574,233.633h-8.341a.414.414,0,0,1-.414-.413V223.3a.414.414,0,0,1,.414-.413h8.341a.413.413,0,0,1,.414.413v9.919a.413.413,0,0,1-.414.413" transform="translate(-694.732 -168.896)" fill="#133479"/>
                        <path id="Path_5899" data-name="Path 5899" d="M984.958,233.633h-8.342a.414.414,0,0,1-.414-.413V223.3a.414.414,0,0,1,.414-.413h8.342a.414.414,0,0,1,.414.413v9.919a.414.414,0,0,1-.414.413" transform="translate(-739.73 -168.896)" fill="#133479"/>
                        <rect id="Rectangle_2473" data-name="Rectangle 2473" width="249.839" height="1.295" transform="translate(0 233.172)" fill="#60e99c"/>
                        </g>
                    </g>
                    </g>
                </svg>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 text-center" style="font-family: Montserrat;
            font-weight: 600;
            font-size: 15px;
            color: #000;">
                <p>Review sent successfully!</p>
            </div>

            @if (!session()->has('success'))

            <div class="trips-success-hide col-md-12 col-sm-12 col-lg-12 text-center border-top pt-2"
                style="font-family: Montserrat;
                font-weight: 600;
                font-size: 20px;
                color: #60e99c;
                ">
                <p>Want to give a tip!</p>
            </div>
            <div class=" trips-success-hide  col-md-12 col-sm-12 col-lg-12">
                <div class="row text-center tips">
                    <form  id="order-tips-form" action="{{route('user.order-tips', $orderId)}}" method="POST">
                        @csrf
                    <div class="pr-2">
                        <label>
                            <input type="radio" name="tips_amount" id="" value="5" checked>
                            <div>
                                <label class="radio-btn-text" style="margin-top: 16px;" for="asap">$5</label>
                            </div>
                        </label>
                    </div>
                    <div class="pr-2">
                        <label>
                            <input type="radio" name="tips_amount" id="" value="10" checked>
                            <div>
                                <label class="radio-btn-text" style="margin-top: 16px;" for="asap">$10</label>
                            </div>
                        </label>
                    </div>
                    <div class="pr-2">
                        <label>
                            <input type="radio" name="tips_amount" id="" value="15" checked>
                            <div>
                                <label class="radio-btn-text" style="margin-top: 16px;" for="asap">$15</label>
                            </div>
                        </label>
                    </div>
                    <div class="pr-2">
                        <label>
                            <input type="radio" name="tips_amount" id="" value="20" checked>
                            <div>
                                <label class="radio-btn-text" style="margin-top: 16px;" for="asap">$20</label>
                            </div>
                        </label>
                    </div>
                </form>
            </div>

            </div>

            <div  class=" trips-success-hide col-md-12 col-sm-12 col-lg-12 text-center mt-4">

                <a href="{{ route('user.dashboard')}}" class="btn not-btn">Not Now</a>
                <a href="" class="btn cnf-btn" id="submit-order-tips">Confirm </a>
            </div>

            @else
            <div  class=" trips-success-show col-md-12 col-sm-12 col-lg-12 text-center mt-4">
                <h1 style="color: #60e99c">Congratulations.</h1>
            </div>

            @endif









            <div class="col-md-12 col-sm-12 col-lg-12 text-center mt-5" style="font-family: Montserrat;
            font-size: 11px;
            color: #90a0b2;
            ">
                <p>Invite a friend, you both get $15</p>
                <p>Invite a friend, you both get $Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 mt-1">
                <div class="row w-100 d-flex justify-content-center">
                    <input id="additionalNote" class="form-control w-50" type="text" name="email"
                        title="Enter email address"
                        placeholder="Enter email address"/>
                    <button class="button ml-4 pl-5 pr-5" style="background: #60e99c;color:#fff;height:37px;border-radius: 5px; padding: 0;">Send invite</button>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 mt-5 border-top text-center">
                <p style="font-family: Montserrat;
                font-weight: normal;
                font-size: 14px;
                color: #1b3149;">More ways to invite</p>
            </div>

            <div class="col-md-12 col-sm-12 col-lg-12 mt-1">
                <div class="row w-100 d-flex justify-content-center">
                    {{-- <div class="section_tooltipss">
                        <input type="text" class=" link_input  w-50 form-control" value="https://fontawesome.com/icons?d=gallery&q=apple" id="myInput1" style="width:100%!important ">
                        <div class="tooltip22">
                        <button type="button" class="btn invite_button2"  onclick="myFunctions()" onmouseout="outFunca()">
                          <span class="tooltiptext1" id="myTooltip1">Copy to clipboard</span>
                          Copy text
                          </button>
                        </div>
                      </div> --}}

                      <div class="section_tooltipss" >
                        <input type="text" class="link_input w-50 form-control" value="https://fontawesome.com/icons?d=gallery&q=apple" id="myInput1" style="width:50%!important;display: initial; ">
                        <div class="tooltip22">
                        <button type="button" class="btn invite_button2"  onclick="myFunctions()" onmouseout="outFunca()" style="width: 179px;">
                          <span class="tooltiptext1" id="myTooltip1">Copy to clipboard</span>
                          Copy Referral
                          </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-lg-12 mt-5 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="183.663" height="30.17" viewBox="0 0 183.663 30.17">
                    <g id="Group_3091" data-name="Group 3091" transform="translate(-1101 -850.33)">
                      <g id="Group_3066" data-name="Group 3066" transform="translate(1252 1002.33)">
                        <g id="FB" transform="translate(-41.254 -152)">
                          <path id="Path_7470" data-name="Path 7470" d="M32.17-149.989v26.147a2.017,2.017,0,0,1-2.011,2.011h-7.04V-134.9h3.017v-4.023H23.119v-5.028a1.009,1.009,0,0,1,1.006-1.006h3.017v-4.023H23.069a3.981,3.981,0,0,0-3.972,3.972v6.084H16.079v4.023H19.1v13.074H4.011A2.017,2.017,0,0,1,2-123.841v-26.147A2.017,2.017,0,0,1,4.011-152H30.159A2.017,2.017,0,0,1,32.17-149.989Z" transform="translate(-2 152)" fill="#4267b2"/>
                        </g>
                        <g id="Group_3060" data-name="Group 3060" transform="translate(-85 -152)">
                          <path id="Dark_Blue" data-name="Dark Blue" d="M-58.6-121.83H-81.229A3.773,3.773,0,0,1-85-125.6v-22.627A3.773,3.773,0,0,1-81.229-152H-58.6a3.773,3.773,0,0,1,3.771,3.771V-125.6A3.773,3.773,0,0,1-58.6-121.83Z" transform="translate(85 152)" fill="#1da1f2"/>
                          <path id="Logo_FIXED" data-name="Logo — FIXED" d="M-67.814-121.914a10.933,10.933,0,0,0,11-11c0-.166,0-.332-.008-.5a7.879,7.879,0,0,0,1.931-2.006,7.839,7.839,0,0,1-2.225.611,3.891,3.891,0,0,0,1.7-2.142,7.693,7.693,0,0,1-2.459.935,3.86,3.86,0,0,0-2.821-1.222,3.872,3.872,0,0,0-3.869,3.869,4.275,4.275,0,0,0,.1.882,10.983,10.983,0,0,1-7.972-4.043,3.868,3.868,0,0,0-.52,1.946,3.878,3.878,0,0,0,1.72,3.221,3.912,3.912,0,0,1-1.75-.483v.053a3.876,3.876,0,0,0,3.1,3.794,3.772,3.772,0,0,1-1.018.136,3.8,3.8,0,0,1-.724-.068,3.868,3.868,0,0,0,3.613,2.685,7.757,7.757,0,0,1-4.8,1.659,7.445,7.445,0,0,1-.92-.053,11,11,0,0,0,5.921,1.727" transform="translate(79.399 144.662)" fill="#fff"/>
                        </g>
                        <g id="Group_3065" data-name="Group 3065" transform="translate(2.493 -152)">
                          <path id="Path_7471" data-name="Path 7471" d="M119.17-125.6a3.782,3.782,0,0,1-3.771,3.771H92.771A3.782,3.782,0,0,1,89-125.6v-22.627A3.782,3.782,0,0,1,92.771-152H115.4a3.782,3.782,0,0,1,3.771,3.771Z" transform="translate(-89 152)" fill="#9100eb"/>
                          <g id="Group_3064" data-name="Group 3064" transform="translate(3.771 3.771)">
                            <g id="Group_3061" data-name="Group 3061">
                              <path id="Path_7472" data-name="Path 7472" d="M113-121.873H102.628A6.135,6.135,0,0,1,96.5-128v-10.371a6.135,6.135,0,0,1,6.128-6.129H113a6.135,6.135,0,0,1,6.129,6.129V-128A6.135,6.135,0,0,1,113-121.873Zm-10.371-20.742a4.247,4.247,0,0,0-4.242,4.243V-128a4.247,4.247,0,0,0,4.242,4.242H113A4.247,4.247,0,0,0,117.242-128v-10.371A4.248,4.248,0,0,0,113-142.614Z" transform="translate(-96.5 144.5)" fill="#fff"/>
                            </g>
                            <g id="Group_3062" data-name="Group 3062" transform="translate(5.657 5.657)">
                              <path id="Path_7473" data-name="Path 7473" d="M113.407-121.936a5.663,5.663,0,0,1-5.657-5.657,5.663,5.663,0,0,1,5.657-5.657,5.663,5.663,0,0,1,5.657,5.657A5.663,5.663,0,0,1,113.407-121.936Zm0-9.428a3.776,3.776,0,0,0-3.771,3.771,3.776,3.776,0,0,0,3.771,3.771,3.776,3.776,0,0,0,3.771-3.771A3.776,3.776,0,0,0,113.407-131.364Z" transform="translate(-107.75 133.25)" fill="#fff"/>
                            </g>
                            <g id="Group_3063" data-name="Group 3063" transform="translate(16.028 4.007)">
                              <circle id="Ellipse_224" data-name="Ellipse 224" cx="1.296" cy="1.296" r="1.296" fill="#fff"/>
                            </g>
                          </g>
                        </g>
                      </g>
                      <text id="Share-" transform="translate(1101 871)" fill="#1b3149" font-size="16" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Share-</tspan></text>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</section>



{{-- payment method transaction modal --}}
<div class="modal fade" id="paymentMethodTransaction" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div style="background: #60e99c;height: 8px;">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <input type="button" aria-hidden="true" class="modal-cross-btn" value="x">
                    </button>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <h5 class="payment-done">Stripe</h5>
            </div>

            <div class="" style="padding: 25px;">
            <form action="{{route('user.order-tips', $orderId)}}" method="post" id="payment-form">

                <div class="row form-group">
                        <div class="col-md-12">
                            <!-- Display errors returned by createToken -->
                            <label>Card Number</label>
                            <div id="paymentResponse" class="text-danger font-italic"></div>
                            <div id="card_number" class="field form-control"></div>
                        </div>
                    </div>
                    <div class="row form-group d-flex justify-content-center">
                        <div class="col-md-3">
                            <label>Expiry Date</label>
                            <div id="card_expiry" class="field form-control"></div>
                        </div>
                        <div class="col-md-3">
                            <label>CVC Code</label>
                            <div id="card_cvc" class="field form-control"></div>
                        </div>
                    </div>

                    <div class="row form-group d-flex justify-content-center">
                        <div class="col-md-6">
                            <input type="submit" style="width: 200px;" value="Pay via Stripe" class="btn btn-primary pay-via-stripe-btn">
                        </div>
                    </div>


                <!-- Used to display Element errors. -->
                <div id="card-errors" style="color: red;" role="alert"></div>
                @csrf
                </form>


            </div>
            <br><br>
        </div>
    </div>
</div>


<script>
    $('#Rectangle_4508, #submit-order-tips').click(function(){

        // alert('Hello');
        event.preventDefault();
        
        let form = document.getElementById('order-tips-form');
        // form.submit();
        $('#paymentMethodTransaction').modal('show');

    });
</script>

<script src="https://js.stripe.com/v3/"></script>
<script>

    var stripe = Stripe('{{ env("STRIPE_KEY") }}');
    var elements = stripe.elements();


    var style = {
        base: {
            fontWeight: 400,
            fontFamily: '"DM Sans", Roboto, Open Sans, Segoe UI, sans-serif',
            fontSize: '16px',
            lineHeight: '1.4',
            color: '#1b1642',
            padding: '.75rem 1.25rem',
            '::placeholder': {
                color: '#ccc',
            },
        },
        invalid: {
            color: '#dc3545',
        }
    };

    var cardElement = elements.create('cardNumber', {
        style: style
    });
    cardElement.mount('#card_number');



    var exp = elements.create('cardExpiry', {
        'style': style
    });
    exp.mount('#card_expiry');

    var cvc = elements.create('cardCvc', {
        'style': style
    });
    cvc.mount('#card_cvc');




    // Create a token or display an error when the form is submitted.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(cardElement ).then(function(result) {
            if (result.error) {
                // Inform the customer that there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });


    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();

        $('.trips-success-hide').css('display','none');
        $('.trips-success-show').css('display','block');

        // $('#paymentMethodTransaction').modal('hide');
        // $('#paymentConfirmModalId').modal('show');
    }




</script>



@endsection
