@extends('user.asset')
@section('user_content')

<style>

.add-comma-except span:after {
    content: ", ";
}
.add-comma-except span:last-child:after {
    content: "";
}




#pay-confirm-model-block{
        position: fixed;
        background-color: transparent;
        /* opacity: 0.9; */
        width: 100vw;
        height: 100vh;
        z-index: 999999999999999999999999999;
        /* display: none; */
    }


    #pay-confirm-model{
        width: 50%;
        margin: auto;
        border: 1px solid green;
        border-radius: 9px;
        position: absolute;
        z-index: 9999;
        top: 15%; right: 50%;
        transform: translate(50%,-50%);
    }

    .order_id_coast h6 {
      color: var(--white-color);
      font-family: var(--montserrat-font);
      font-size: 0.8rem;
      background: var(--glodBG-color-ffb44a);
      padding: 5px 11px;
      border-radius: 20px;
  }

    .service-category-show {
      font-weight: bold;
      color: #60e99c !important;
    }

  li.no-offer-found {
    list-style: none;
      text-align: center;
      font-size: 21px;
  }


  .track-row{
      margin-top: -217px;
      margin-left: 37px;
      }
    .step-line {
      width: 417px;
      display: flex;
      justify-content: space-between;
      border-top:2px dashed #60e99c;
      padding-top: 15px;
      margin-top: 15px;
      margin: auto;
  }
  .step-line-text {
      margin-top: 10px;
      margin-left: -38px;
      position: absolute;
      font-size: 9px;
  }
  hr {
      margin-top: 10px;
      margin-bottom: 2rem;
      border: 0;
      border-top: 2px solid rgba(0,0,0,.1);
      width: 90%;
  }
  .chat-btn{
      margin-left: 116px;
      width: 108px;
      border-radius: 23px;
      font-size: 10px;
      background: #60e99c;
      border: 1px solid #60e99c;
  }
  .chat-btn:hover{
      background: #41ab70;
      border: 1px solid #41ab70;

  }
  .home-btn{
      width: 108px;
      background: #60e99c;
      border: 1px solid #60e99c;
      margin-left: 110px;
      border-radius: 5px;
  }

  .home-btn:hover{

      background: #41ab70;
      border: 1px solid #41ab70;

  }
  .release-btn{
      background: #ffce8a;
      border: 1px solid #ffce8a;
      border-radius: 5px;
  }
  .release-btn:hover{
      background: #e4a957;
      border: 1px solid #e4a957;

  }





  @media (max-width: 575.98px){

    /* Check Progress Modal */
    .step-line {
      width: 305px !important;
    }

    .home-btn {
      margin-left: 0px;
    }

    .redirect.mt-4.mb-4 {
      display: flex;
      justify-content: space-evenly;
    }

    .chat.mt-3 {
      margin-top: 21px !important;
      margin-left: -24px;
    }

    /*  Driver Offer Modal */

    .col-md-2.offer-cont-item1 {
      width: 33%;
    }
    .col-md-6.offer_middle_row.offer-cont-item2 {
        width: 66%;
        margin-top: 57px;

    }

    .circle_curve h1 {
      top: -34vh;
      width: 24% !important;
      height: 50px;
    }



    .circle_curve h4 {
      top: -158px;
      font-size: 22px;
    }

    .offer_image {
      top: 44%;
      transform: translateY(-48%);
      left: -6%;
    }

    .offer_image img {
      height: 80px;
      width: 80px;
    }

    .offer_image h6 span {
        font-size: 18px;
        font-weight: 700;
    }

    .accept_offer_cost a {
      margin-top: -51px;
    }

    .offer_main_area ul {
      position: relative;
      left: 44%;
      transform: translateX(-50%) !important;
    }
    #pay-confirm-model{
        width: 100% !important;
    }

    .track-row {
    margin-top: -160px;
    margin-left: 37px;
    }
    #show-order-id{
        margin-left: 135px !important;
        margin-top: -29px !important;
    }

    /* review page */
    .rate {
     margin-top: 40px !important;
     margin-left: 210px !important;
    }
    .accurancy-lebel{
        margin-left: 26px !important;
    }
    .range {
    margin-left: 147px !important;
   }

   /* //chart */
   .chart canvas {
    position: absolute;
    top: 0;
    left: 0;
    height: 60px;
    width: 60px;
}


  }

  @media only screen and (min-width: 540px){
    .rate {
        margin-top: -11px !important;
        margin-left: 263px !important;
     }
    .range {
      margin-left: 164px !important;
     }
     .accurancy-lebel {
      margin-left: 60px !important;
    }

   .chart canvas {
    position: absolute;
    top: 0;
    left: 0;
    height: 60px !important;
    width: 60px !important;
   }

   }

  @media screen and (max-width: 375px){
    .rate {
        margin-top: 58px !important;
        margin-left: 199px !important;
    }

    .range {
    margin-left: 140px !important;
   }
   .accurancy-lebel {
    margin-left: 19px !important;
    }

    .circle_curve h1 {
    top: -34vh;
    width: 24% !important;
    height: 80px;
    border-radius: 23px;
  }
  .chart canvas {
    position: absolute;
    top: 0;
    left: 0;
    height: 60px !important;
    width: 60px !important;
   }
  }

  @media screen and (max-width: 360px){
    .rate {
        margin-top: 64px !important;
    margin-left: 188px !important;
    }
    .range {
    margin-left: 140px !important;
   }
   .accurancy-lebel {
    margin-left: 19px !important;
   }

   .circle_curve h1 {
    top: -40vh;
    width: 24% !important;
    height: 58px;
    border-radius: 18px;
  }
  .chart canvas {
    position: absolute;
    top: 0;
    left: 9px;
    height: 60px !important;
    width: 60px !important;
  }
  }

  @media (max-width: 575.98px){

    .col-sm-6.track-ord-title {
        width: 34%;
    }
    .col-sm-6.track-ord-id {
        width: 29%;
        margin-left: -79px;
    }

    .offer-show-modal-sr{
      padding: 0px !important;
    }
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
                          <li class="breadcrumb-item active" aria-current="page">Tasks</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="position: relative;">




@if (session()->has('payment-success'))
{{-- payment confirm modal --}}
<div id="pay-confirm-model-block">
    <div id="pay-confirm-model">
        <div class="modal-content">

            <div style="background: #60e99c;height: 8px;">
                <div class="modal-header">

                    <button type="button" id="pay-confirm-model-close" class="close" aria-label="Close">
                        <input type="button" aria-hidden="true" class="modal-cross-btn" value="x">
                    </button>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="259.255" height="314.048" viewBox="0 0 259.255 314.048">
                    <defs>
                      <clipPath id="clip-path">
                        <rect id="Rectangle_2494" data-name="Rectangle 2494" width="259.255" height="314.048" fill="none"/>
                      </clipPath>
                      <clipPath id="clip-path-3">
                        <rect id="Rectangle_2488" data-name="Rectangle 2488" width="251.336" height="311.596" fill="none"/>
                      </clipPath>
                      <clipPath id="clip-path-4">
                        <path id="Path_5915" data-name="Path 5915" d="M115.051,284.577s-10.483-25.347-49.437-34.446S8.225,200.086,24.267,164.989,70.856,123.393,85.8,64.9,169.646-5.294,219.691,14.854s57.194,63.044,44.846,94.891-39,56.544-26.647,94.24,14.948,89.691-22.748,105.289-79.292,9.1-100.09-24.7" transform="translate(-18.479 -5.721)" fill="none"/>
                      </clipPath>
                      <linearGradient id="linear-gradient" x1="0.009" y1="0.977" x2="0.01" y2="0.977" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#5bdb98"/>
                        <stop offset="1" stop-color="#60e99c"/>
                      </linearGradient>
                    </defs>
                    <g id="Group_1418" data-name="Group 1418" clip-path="url(#clip-path)">
                      <g id="Group_1417" data-name="Group 1417">
                        <g id="Group_1416" data-name="Group 1416" clip-path="url(#clip-path)">
                          <g id="Group_1415" data-name="Group 1415" transform="translate(7.919 2.452)" opacity="0.12">
                            <g id="Group_1414" data-name="Group 1414">
                              <g id="Group_1413" data-name="Group 1413" clip-path="url(#clip-path-3)">
                                <g id="Group_1412" data-name="Group 1412" transform="translate(0 0)">
                                  <g id="Group_1411" data-name="Group 1411" clip-path="url(#clip-path-4)">
                                    <rect id="Rectangle_2487" data-name="Rectangle 2487" width="268.661" height="330.167" transform="translate(-10.254 -11.015)" fill="url(#linear-gradient)"/>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </g>
                          <path id="Path_5916" data-name="Path 5916" d="M3.937,286.421,0,340.241s51.921,25.394,85.965,11.408l-.415-46.243S44.034,326.43,3.937,286.421" transform="translate(0 -163.674)" fill="#60e99c"/>
                          <path id="Path_5917" data-name="Path 5917" d="M88.3,382.963c-6.051,4.717-15.088,3.241-20.184-3.3S63.794,364,69.845,359.288s15.088-3.241,20.184,3.3,4.323,15.662-1.728,20.379" transform="translate(-37 -203.736)" fill="#4cb08a"/>
                          <path id="Path_5918" data-name="Path 5918" d="M29.867,359.8q-.677-.393-1.22-.769a4.138,4.138,0,0,1-.9-.825,2.606,2.606,0,0,1-.495-1,2.9,2.9,0,0,1,.007-1.28,2.771,2.771,0,0,1,1.074-1.752,3.707,3.707,0,0,1,2.192-.65l.268-1.338c.1,0,.263,0,.479.01a4.218,4.218,0,0,1,.653.08,1.97,1.97,0,0,1,.963.424,1.059,1.059,0,0,1,.173,1.023l-.043.215a4.044,4.044,0,0,1,1.537.858,1.255,1.255,0,0,1,.4,1.214,1.347,1.347,0,0,1-.346.7,2.118,2.118,0,0,1-.584.424,3.793,3.793,0,0,0-.893-.6,5.008,5.008,0,0,0-1.3-.441,2.257,2.257,0,0,0-1.131-.013.616.616,0,0,0-.451.45.487.487,0,0,0,.133.447,2.251,2.251,0,0,0,.586.42l.819.455a6.486,6.486,0,0,1,2.133,1.743,2.758,2.758,0,0,1,.414,2.257,2.8,2.8,0,0,1-1.092,1.766,3.8,3.8,0,0,1-2.3.647l-.265,1.321c-.1,0-.263,0-.479-.01a4.082,4.082,0,0,1-.655-.08,1.949,1.949,0,0,1-.963-.425,1.055,1.055,0,0,1-.172-1.022l.033-.165a6.09,6.09,0,0,1-1.039-.432,3.36,3.36,0,0,1-.765-.549,1.829,1.829,0,0,1-.445-.656,1.337,1.337,0,0,1-.055-.751,1.257,1.257,0,0,1,.445-.761,2.183,2.183,0,0,1,.715-.4,4.593,4.593,0,0,0,1.005.855,4.039,4.039,0,0,0,1.409.558,2,2,0,0,0,1.19-.02.727.727,0,0,0,.446-.512.577.577,0,0,0-.163-.556,3.535,3.535,0,0,0-.675-.488Z" transform="translate(-14.922 -201.253)" fill="#4cb08a"/>
                          <path id="Path_5919" data-name="Path 5919" d="M156.983,383.351q-.723-.3-1.311-.6a4.138,4.138,0,0,1-1-.7,2.607,2.607,0,0,1-.621-.928,2.906,2.906,0,0,1-.16-1.27,2.769,2.769,0,0,1,.836-1.877,3.709,3.709,0,0,1,2.088-.932l.091-1.361c.1-.016.261-.034.477-.053a4.276,4.276,0,0,1,.658-.005,1.972,1.972,0,0,1,1.01.294,1.059,1.059,0,0,1,.305.992l-.015.219a4.043,4.043,0,0,1,1.636.649,1.258,1.258,0,0,1,.556,1.152,1.35,1.35,0,0,1-.252.735,2.139,2.139,0,0,1-.523.5,3.781,3.781,0,0,0-.964-.479,5.024,5.024,0,0,0-1.349-.268,2.261,2.261,0,0,0-1.124.135.615.615,0,0,0-.388.506.488.488,0,0,0,.191.426,2.273,2.273,0,0,0,.636.34l.871.344a6.489,6.489,0,0,1,2.342,1.449,2.755,2.755,0,0,1,.706,2.184,2.8,2.8,0,0,1-.852,1.893,3.793,3.793,0,0,1-2.191.942l-.09,1.344c-.1.015-.261.033-.476.052a4.112,4.112,0,0,1-.659.007,1.954,1.954,0,0,1-1.01-.3,1.055,1.055,0,0,1-.3-.99l.011-.168a6.1,6.1,0,0,1-1.086-.293,3.363,3.363,0,0,1-.831-.445,1.832,1.832,0,0,1-.527-.591,1.338,1.338,0,0,1-.153-.738,1.265,1.265,0,0,1,.342-.813,2.2,2.2,0,0,1,.657-.487,4.6,4.6,0,0,0,1.109.716,4.021,4.021,0,0,0,1.47.369,2,2,0,0,0,1.177-.175.728.728,0,0,0,.375-.566.576.576,0,0,0-.234-.529,3.5,3.5,0,0,0-.733-.4Z" transform="translate(-87.721 -214.642)" fill="#4cb08a"/>
                          <path id="Path_5920" data-name="Path 5920" d="M10.387,299.191,6.98,345.767s46.347,22.295,79.37,12.028l-.365-40.619S46.608,333.211,10.387,299.191Z" transform="translate(-3.989 -170.971)" fill="none" stroke="#5e5ed7" stroke-miterlimit="10" stroke-width="1"/>
                          <path id="Path_5921" data-name="Path 5921" d="M89.772,384.1c-5.15,4.015-12.841,2.759-17.178-2.806s-3.679-13.329,1.471-17.344,12.84-2.758,17.178,2.806S94.922,380.085,89.772,384.1Z" transform="translate(-39.845 -206.635)" fill="none" stroke="#4545b7" stroke-miterlimit="10" stroke-width="1"/>
                          <path id="Path_5922" data-name="Path 5922" d="M32.414,145.506l54.969,49.706s71.343-34.794,84.939-83.477l-50.437-38.6s-12.28,62.717-89.471,72.366" transform="translate(-18.523 -41.796)" fill="#60e99c"/>
                          <path id="Path_5923" data-name="Path 5923" d="M213.506,208.132c0,10.537-9.229,19.078-20.613,19.078s-20.613-8.541-20.613-19.078,9.229-19.078,20.613-19.078,20.613,8.542,20.613,19.078" transform="translate(-98.448 -108.034)" fill="#4cb08a"/>
                          <path id="Path_5924" data-name="Path 5924" d="M134.62,272.27q-1,.4-1.863.672a5.7,5.7,0,0,1-1.653.278,3.584,3.584,0,0,1-1.5-.31,3.984,3.984,0,0,1-1.38-1.088,3.8,3.8,0,0,1-.991-2.642,5.087,5.087,0,0,1,1.146-2.924l-1.222-1.42c.085-.113.223-.284.415-.511a5.888,5.888,0,0,1,.639-.639,2.705,2.705,0,0,1,1.272-.685q.591-.094,1.254.677l.2.228a5.559,5.559,0,0,1,2.227-.941,1.725,1.725,0,0,1,1.654.591,1.846,1.846,0,0,1,.461.962,2.927,2.927,0,0,1-.033.99,5.188,5.188,0,0,0-1.4.461,6.82,6.82,0,0,0-1.578,1.038,3.089,3.089,0,0,0-.969,1.214.845.845,0,0,0,.107.869.671.671,0,0,0,.6.234,3.134,3.134,0,0,0,.949-.281l1.185-.5a8.9,8.9,0,0,1,3.688-.839,3.788,3.788,0,0,1,2.8,1.457,3.84,3.84,0,0,1,.989,2.673,5.211,5.211,0,0,1-1.236,3.033l1.207,1.4c-.085.113-.224.284-.416.51a5.685,5.685,0,0,1-.639.642,2.689,2.689,0,0,1-1.273.683c-.392.064-.81-.162-1.252-.676l-.151-.176a8.364,8.364,0,0,1-1.345.76,4.609,4.609,0,0,1-1.242.366,2.505,2.505,0,0,1-1.086-.072,1.827,1.827,0,0,1-.86-.574,1.734,1.734,0,0,1-.448-1.124,3.009,3.009,0,0,1,.173-1.11,6.313,6.313,0,0,0,1.775-.367,5.531,5.531,0,0,0,1.794-1.055,2.744,2.744,0,0,0,.983-1.305,1,1,0,0,0-.178-.915.792.792,0,0,0-.74-.292,4.813,4.813,0,0,0-1.1.319Z" transform="translate(-72.662 -150.257)" fill="#4cb08a"/>
                          <path id="Path_5925" data-name="Path 5925" d="M266.115,155.3q-.937.528-1.76.91a5.689,5.689,0,0,1-1.6.492,3.594,3.594,0,0,1-1.53-.111,3.99,3.99,0,0,1-1.51-.9,3.8,3.8,0,0,1-1.327-2.49,5.091,5.091,0,0,1,.754-3.048l-1.4-1.248q.1-.185.345-.561a5.938,5.938,0,0,1,.55-.717,2.71,2.71,0,0,1,1.172-.845,1.452,1.452,0,0,1,1.332.507l.225.2a5.552,5.552,0,0,1,2.085-1.223,1.724,1.724,0,0,1,1.717.37,1.851,1.851,0,0,1,.583.893,2.91,2.91,0,0,1,.1.986,5.2,5.2,0,0,0-1.332.64,6.815,6.815,0,0,0-1.429,1.235,3.1,3.1,0,0,0-.8,1.33.845.845,0,0,0,.219.848.671.671,0,0,0,.623.154,3.124,3.124,0,0,0,.9-.4l1.109-.653a8.9,8.9,0,0,1,3.547-1.314,3.788,3.788,0,0,1,2.961,1.08,3.834,3.834,0,0,1,1.33,2.521,5.209,5.209,0,0,1-.829,3.169l1.38,1.233c-.069.123-.184.311-.346.559a5.654,5.654,0,0,1-.549.72,2.69,2.69,0,0,1-1.173.844,1.449,1.449,0,0,1-1.33-.507l-.173-.154a8.352,8.352,0,0,1-1.235.93,4.619,4.619,0,0,1-1.183.525,2.5,2.5,0,0,1-1.086.07,1.832,1.832,0,0,1-.928-.456,1.733,1.733,0,0,1-.591-1.056,3,3,0,0,1,.027-1.124,6.3,6.3,0,0,0,1.712-.6,5.539,5.539,0,0,0,1.641-1.28,2.744,2.744,0,0,0,.8-1.422,1,1,0,0,0-.3-.884.792.792,0,0,0-.771-.193,4.8,4.8,0,0,0-1.047.46Z" transform="translate(-147.286 -83.536)" fill="#4cb08a"/>
                          <path id="Path_5926" data-name="Path 5926" d="M51.094,157.628l47.57,43.016s63.28-31.374,80.043-75.811l-44.3-33.9S118.524,147.12,51.094,157.628Z" transform="translate(-29.197 -51.962)" fill="none" stroke="#5e5ed7" stroke-miterlimit="10" stroke-width="1"/>
                          <ellipse id="Ellipse_167" data-name="Ellipse 167" cx="17.543" cy="16.237" rx="17.543" ry="16.237" transform="translate(76.901 83.861)" fill="none" stroke="#4545b7" stroke-miterlimit="10" stroke-width="1"/>
                          <path id="Path_5927" data-name="Path 5927" d="M366.714,221.766c-1.655-6.385-4.494-6.622-4.494-6.622s25.07-32.875,24.6-39.734-5.676-7.332-10.88-2.838a5.253,5.253,0,0,0-6.149-2.929C365.295,170.68,343.524,187,343.524,187s-45.4,24.833-74.962,36.186c-29.515,11.334-32.207,13.234-32.216,13.241-1.385,5.31-2.314,9.464-2.314,9.464s10.394,29.327,10.045,46.829-11.7,85.617-12.647,87.509a61.651,61.651,0,0,0,16.556-4.73s11.352-47.3,20.812-52.032,54.4-24.6,72.372-40.207,22.7-18.448,15.61-34.53c0,0,12.772-18.448,9.933-26.962" transform="translate(-132.25 -96.843)" fill="#fcc1b1"/>
                          <path id="Path_5928" data-name="Path 5928" d="M260.961,320.659s57.865,15.1,73,1.66,26.558-36.054,25.07-56.007-2.405-35.488-2.405-35.488Z" transform="translate(-149.125 -131.903)" fill="#e5a393"/>
                          <path id="Path_5929" data-name="Path 5929" d="M275.576,219.422l-71.625-21.028a10,10,0,0,1-6.776-12.408L241.653,34.493a10,10,0,0,1,12.408-6.776l71.625,21.028a10,10,0,0,1,6.776,12.408L287.985,212.646a10,10,0,0,1-12.408,6.776" transform="translate(-112.442 -15.606)" fill="#3b436a"/>
                          <path id="Path_5930" data-name="Path 5930" d="M433.852,78.234l-2.9-.852a9.917,9.917,0,0,1,6.721,12.309L393.149,241.337a9.917,9.917,0,0,1-12.309,6.721l2.9.852a9.917,9.917,0,0,0,12.309-6.722L440.574,90.543a9.917,9.917,0,0,0-6.722-12.309" transform="translate(-217.629 -44.22)" fill="#141930"/>
                          <path id="Path_5931" data-name="Path 5931" d="M279.25,220.815l-66.521-19.53a9.211,9.211,0,0,1-6.243-11.433L249.612,42.962a9.211,9.211,0,0,1,11.433-6.242l66.521,19.53a9.211,9.211,0,0,1,6.242,11.433l-43.126,146.89a9.211,9.211,0,0,1-11.432,6.243" transform="translate(-117.781 -20.769)" fill="#fff"/>
                          <path id="Path_5932" data-name="Path 5932" d="M323.6,236.07l-64.3-18.877a6.138,6.138,0,0,1-4.16-7.619l10.339-35.214A6.137,6.137,0,0,1,273.1,170.2l64.3,18.877a6.138,6.138,0,0,1,4.16,7.619l-10.339,35.214a6.138,6.138,0,0,1-7.618,4.161" transform="translate(-145.658 -97.117)" fill="#88d1fe"/>
                          <path id="Path_5933" data-name="Path 5933" d="M312.724,320.608l-64.515-18.941a6.024,6.024,0,1,1,3.394-11.559l64.515,18.941a6.024,6.024,0,0,1-3.394,11.56" transform="translate(-139.364 -165.64)" fill="#e6e6e6"/>
                          <path id="Path_5934" data-name="Path 5934" d="M359.009,162.955l-64.515-18.941a6.024,6.024,0,0,1,3.394-11.56L362.4,151.4a6.024,6.024,0,0,1-3.394,11.56" transform="translate(-165.814 -75.55)" fill="#e6e6e6"/>
                          <path id="Path_5935" data-name="Path 5935" d="M404.02,127.125l-40.7-11.949a6.024,6.024,0,0,1,3.394-11.559l40.7,11.949a6.024,6.024,0,1,1-3.394,11.559" transform="translate(-205.144 -59.071)" fill="#e6e6e6"/>
                          <path id="Path_5936" data-name="Path 5936" d="M301.774,357.9l-64.515-18.941a6.024,6.024,0,1,1,3.394-11.559l64.515,18.941a6.024,6.024,0,0,1-3.394,11.56" transform="translate(-133.107 -186.952)" fill="#e6e6e6"/>
                          <path id="Path_5937" data-name="Path 5937" d="M324.163,94.255a9.363,9.363,0,1,1-6.347-11.622,9.364,9.364,0,0,1,6.347,11.622" transform="translate(-174.756 -47.003)" fill="#e6e6e6"/>
                          <path id="Path_5938" data-name="Path 5938" d="M81.164,387.306s14.19-56.289,17.975-69.061S129.411,262.9,134.615,250.6s11.352-27.435,17.5-26.489,7.1,17.028,3.311,26.016-7.8,26.962-7.8,26.962,10.394,29.327,10.045,46.829-11.7,85.617-12.647,87.509-23.178,1.892-35.95,0-33.527-2-27.908-24.124" transform="translate(-45.841 -128.045)" fill="#fcc1b1"/>
                          <path id="Path_5939" data-name="Path 5939" d="M324.162,255.344l-53.542-15.72a1.544,1.544,0,0,1-1.047-1.917l.44-1.5a1.545,1.545,0,0,1,1.917-1.047l53.542,15.72a1.544,1.544,0,0,1,1.047,1.917l-.44,1.5a1.545,1.545,0,0,1-1.917,1.047" transform="translate(-154.01 -134.346)" fill="#fff"/>
                          <path id="Path_5940" data-name="Path 5940" d="M280.454,257.759l-13.955-4.1a1.544,1.544,0,0,1-1.047-1.917l.44-1.5a1.545,1.545,0,0,1,1.917-1.047l13.956,4.1a1.544,1.544,0,0,1,1.047,1.917l-.44,1.5a1.545,1.545,0,0,1-1.917,1.047" transform="translate(-151.655 -142.368)" fill="#fff"/>
                          <path id="Path_5941" data-name="Path 5941" d="M299.387,194.007l-13.955-4.1a1.544,1.544,0,0,1-1.047-1.917l1.53-5.213a1.546,1.546,0,0,1,1.917-1.047l13.956,4.1a1.545,1.545,0,0,1,1.047,1.918l-1.53,5.212a1.544,1.544,0,0,1-1.917,1.047" transform="translate(-162.474 -103.814)" fill="#fff"/>
                          <path id="Path_5942" data-name="Path 5942" d="M326.64,271.319l-13.955-4.1a1.544,1.544,0,0,1-1.047-1.917l.44-1.5a1.545,1.545,0,0,1,1.917-1.047l13.956,4.1A1.545,1.545,0,0,1,329,268.775l-.44,1.5a1.545,1.545,0,0,1-1.917,1.047" transform="translate(-178.048 -150.117)" fill="#fff"/>
                          <path id="Path_5943" data-name="Path 5943" d="M428.117,263.851s-28.1-5.913-39.261-5.44-11.589,4.257-9.46,7.8,18.921,9.7,32.4,10.879l-2.6,9.933s-7.569,1.656-18.921,5.2-18.921,6.149-15.61,13.718S407.3,305,407.3,305s3.784-.709,5.912,1.656,5.2,9.7,5.2,9.7,11.589-4.021,9.7-17.738c0,0,12.771-23.414,0-34.767" transform="translate(-213.653 -147.652)" fill="#fcc1b1"/>
                          <path id="Path_5944" data-name="Path 5944" d="M458.886,302.045s8.28,2.9,10.7,5.912a22.124,22.124,0,0,1,3.429,5.912,24.288,24.288,0,0,0-16.73-1.891Z" transform="translate(-260.741 -172.602)" fill="#e5a393"/>
                          <path id="Path_5945" data-name="Path 5945" d="M521.644,176.709,486.41,214.8l.08,1.2,1.22.235Z" transform="translate(-277.957 -100.98)" fill="#e5a393"/>
                          <path id="Path_5946" data-name="Path 5946" d="M245.077,535.142s-22.659,16.585-49.976,18.714c0,0,22.387,10.475,32.124,30.6,0,0,9.646-37.522,17.851-49.317" transform="translate(-111.49 -305.804)" fill="#e5a393"/>
                          <path id="Path_5947" data-name="Path 5947" d="M153.559,42.575c.843,3.3-7.081,8.17-17.7,10.882s-19.907,2.236-20.749-1.062,7.081-8.17,17.7-10.882,19.907-2.237,20.749,1.062" transform="translate(-65.745 -22.717)" fill="#60e99c"/>
                          <path id="Path_5948" data-name="Path 5948" d="M135.942,57.219c-10.617,2.711-19.907,2.237-20.749-1.062l1.23,4.816c.842,3.3,10.132,3.773,20.749,1.061s18.541-7.584,17.7-10.882l-1.23-4.816c.843,3.3-7.082,8.17-17.7,10.882" transform="translate(-65.827 -26.479)" fill="#4cb08a"/>
                          <path id="Path_5949" data-name="Path 5949" d="M155.383,46.851c.606,2.372-5.092,5.875-12.727,7.825s-14.315,1.608-14.92-.763,5.092-5.875,12.727-7.825,14.314-1.609,14.92.763" transform="translate(-72.969 -25.614)" fill="#a3efc2"/>
                          <path id="Path_5950" data-name="Path 5950" d="M140.744,47.188c7.033-1.8,13.244-1.643,14.654.246a1.5,1.5,0,0,0-.015-.582c-.606-2.372-7.286-2.713-14.92-.763s-13.333,5.453-12.727,7.824a1.491,1.491,0,0,0,.266.518c.332-2.334,5.708-5.446,12.741-7.243" transform="translate(-72.969 -25.614)" fill="#4cb08a"/>
                          <path id="Path_5951" data-name="Path 5951" d="M490.142,12.078c-.78,3.313-10.06,3.962-20.726,1.45s-18.68-7.235-17.9-10.548,10.06-3.963,20.726-1.45,18.68,7.235,17.9,10.548" transform="translate(-257.987 0)" fill="#60e99c"/>
                          <path id="Path_5952" data-name="Path 5952" d="M467.9,17.5c-10.666-2.512-18.68-7.235-17.9-10.548l-1.14,4.838c-.78,3.313,7.234,8.036,17.9,10.548s19.945,1.863,20.726-1.45l1.14-4.838c-.78,3.314-10.06,3.962-20.726,1.45" transform="translate(-256.468 -3.974)" fill="#4cb08a"/>
                          <path id="Path_5953" data-name="Path 5953" d="M491.971,13.621c-.561,2.382-7.234,2.849-14.9,1.043s-13.432-5.2-12.871-7.585,7.234-2.849,14.9-1.042,13.433,5.2,12.871,7.585" transform="translate(-265.242 -2.82)" fill="#a3efc2"/>
                          <path id="Path_5954" data-name="Path 5954" d="M478.85,7.141c7.066,1.665,12.5,4.676,12.875,7a1.484,1.484,0,0,0,.257-.523c.561-2.382-5.2-5.778-12.871-7.585s-14.342-1.34-14.9,1.042a1.5,1.5,0,0,0,0,.582c1.374-1.915,7.581-2.184,14.647-.52" transform="translate(-265.252 -2.82)" fill="#4cb08a"/>
                          <path id="Path_5955" data-name="Path 5955" d="M490.082,534.155c-.78,3.313-10.06,3.962-20.726,1.45s-18.68-7.235-17.9-10.548,10.059-3.963,20.726-1.45,18.68,7.235,17.9,10.548" transform="translate(-257.952 -298.338)" fill="#60e99c"/>
                          <path id="Path_5956" data-name="Path 5956" d="M467.836,539.579c-10.666-2.512-18.68-7.235-17.9-10.548l-1.139,4.838c-.781,3.313,7.234,8.036,17.9,10.548s19.945,1.863,20.726-1.45l1.14-4.838c-.78,3.314-10.059,3.962-20.726,1.45" transform="translate(-256.433 -302.312)" fill="#4cb08a"/>
                          <path id="Path_5957" data-name="Path 5957" d="M491.91,535.7c-.561,2.382-7.234,2.849-14.9,1.043s-13.433-5.2-12.871-7.585,7.233-2.849,14.9-1.043,13.433,5.2,12.871,7.585" transform="translate(-265.207 -301.159)" fill="#a3efc2"/>
                          <path id="Path_5958" data-name="Path 5958" d="M478.789,529.218c7.066,1.664,12.5,4.675,12.875,7a1.493,1.493,0,0,0,.257-.522c.561-2.382-5.2-5.778-12.871-7.585s-14.342-1.34-14.9,1.043a1.5,1.5,0,0,0,0,.582c1.375-1.915,7.582-2.185,14.647-.52" transform="translate(-265.216 -301.159)" fill="#4cb08a"/>
                          <path id="Path_5959" data-name="Path 5959" d="M347.21,549.549a2.785,2.785,0,0,1-.319-.087,2.85,2.85,0,0,1-1.8-3.607c.288-.855,7.184-20.9,21.321-18.371.148.026.3.055.441.086,13.8,2.927,12.085,24.5,12,25.423a2.849,2.849,0,0,1-5.677-.492c.015-.177,1.252-17.721-7.771-19.408-9.2-1.648-14.861,14.411-14.914,14.573a2.848,2.848,0,0,1-3.289,1.883" transform="translate(-197.118 -301.302)" fill="#4cb08a"/>
                          <path id="Path_5960" data-name="Path 5960" d="M319.11,568.089,311.263,605.1l47.1,9.988,7.847-37.009ZM340.944,602.6l-10.514-2.229,4.361-6.484a6.963,6.963,0,1,1,4.952,1.088Z" transform="translate(-177.87 -324.632)" fill="#60e99c"/>
                          <rect id="Rectangle_2489" data-name="Rectangle 2489" width="37.832" height="4.789" transform="translate(180.496 290.454) rotate(-78.029)" fill="#4cb08a"/>
                          <path id="Path_5961" data-name="Path 5961" d="M366.5,620.055l-10.514-2.229,4.361-6.484a6.963,6.963,0,1,1,4.952,1.088Z" transform="translate(-203.428 -342.085)" fill="#04005a"/>
                          <path id="Path_5962" data-name="Path 5962" d="M359.507,604.582a6.946,6.946,0,0,1,7.181-5.49,6.941,6.941,0,0,0-6.339,12.25l-4.361,6.484,2.082.442,4.361-6.484a6.943,6.943,0,0,1-2.924-7.2" transform="translate(-203.428 -342.085)" fill="#010038"/>
                          <path id="Path_5963" data-name="Path 5963" d="M14.015,523.636a12.268,12.268,0,1,0,16.33,5.861,12.268,12.268,0,0,0-16.33-5.861m8.935,18.941a8.675,8.675,0,1,1,4.145-11.547,8.675,8.675,0,0,1-4.145,11.547" transform="translate(-3.988 -298.558)" fill="#60e99c"/>
                          <rect id="Rectangle_2490" data-name="Rectangle 2490" width="45.976" height="4.137" transform="translate(23.827 229.846) rotate(-25.255)" fill="#60e99c"/>
                          <rect id="Rectangle_2491" data-name="Rectangle 2491" width="7.298" height="10.199" transform="translate(60.573 217.086) rotate(-25.256)" fill="#60e99c"/>
                          <rect id="Rectangle_2492" data-name="Rectangle 2492" width="7.299" height="5.579" transform="translate(54.1 220.139) rotate(-25.256)" fill="#60e99c"/>
                        </g>
                      </g>
                    </g>
                  </svg>
            </div>
            <div class="d-flex justify-content-center">
                <h5 class="payment-done">Payment Done!</h5>
            </div>
            <div class="payment-ul">
                <ul class="text-left">
                    <li>Your payment is securely held in pendu pay.</li>
                    <li>Your dropper has been notified.</li>
                    <li>Private chat directly with the dropper is now available.</li>
                </ul>
            </div>
            <div class="d-flex justify-content-center" style="font-family: Montserrat;
            font-weight: normal;
            font-size: 12px;
            text-align: center;
            color: #1b3149;
            ">
                <p>(please keep the communications within the pendu platform to avoid any disputes)</p>
            </div>
            <div class="d-flex justify-content-center">

                {{-- <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="106" height="45" viewBox="0 0 106 45">
                    <rect id="Rectangle_4295" data-name="Rectangle 4295" width="106" height="45" rx="5" fill="#60e99c"/>
                  </svg>

                </svg>
                </a>
                <a href="#" data-toggle="modal" data-target="#taskProcessModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="218" height="45" viewBox="0 0 218 45">
                    <rect id="Rectangle_4296" data-name="Rectangle 4296" width="218" height="45" rx="5" fill="#ffce8a"/>
                  </svg>
                </a> --}}
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="336" height="45" viewBox="0 0 336 45">
                  <defs>
                    <clipPath id="clip-path">
                      <rect id="Rectangle_2430" data-name="Rectangle 2430" width="27.987" height="27.829" fill="#fff"/>
                    </clipPath>
                    <clipPath id="clip-path-2">
                      <rect id="Rectangle_2431" data-name="Rectangle 2431" width="27.652" height="27.652" fill="#fff"/>
                    </clipPath>
                  </defs>

                  <g id="Group_2847" data-name="Group 2847" transform="translate(-17200 -2112)">

                    <rect id="Rectangle_4295" data-name="Rectangle 4295" width="106" height="45" rx="5" transform="translate(17200 2112)" fill="#60e99c"/>
                    <rect id="Rectangle_4296" data-name="Rectangle 4296" width="218" height="45" rx="5" transform="translate(17318 2112)" fill="#ffce8a"/>
                     <a href="">
                    <text id="Chat"  transform="translate(17274 2140)" fill="#fff" font-size="16" font-family="SegoeUI, Segoe UI"><tspan x="-16.262" y="0">Chat</tspan></text>
                    </a>
                    <g id="Group_2844" data-name="Group 2844" transform="translate(17212 2120.115)">
                      <g id="Group_1329" data-name="Group 1329" clip-path="url(#clip-path)">
                        <path id="Path_5796" data-name="Path 5796" d="M62.605,19.879a.9.9,0,0,1-.6-.229L57.778,15.9H56.057a7.728,7.728,0,0,1-7.483-7.951A7.728,7.728,0,0,1,56.057,0H61.67a7.731,7.731,0,0,1,7.462,7.974,7.882,7.882,0,0,1-5.591,7.67v3.24a1,1,0,0,1-.543.9.888.888,0,0,1-.393.089M56.057,1.989a5.8,5.8,0,0,0-5.612,5.963,5.8,5.8,0,0,0,5.612,5.963h2.058a.9.9,0,0,1,.6.229l2.956,2.614V14.83a.977.977,0,0,1,.8-.994,5.932,5.932,0,0,0,4.631-6.849,5.733,5.733,0,0,0-5.435-5Z" transform="translate(-41.145 -0.001)" fill="#fff"/>
                        <rect id="Rectangle_2427" data-name="Rectangle 2427" width="1.871" height="1.988" transform="translate(16.784 6.957)" fill="#fff"/>
                        <rect id="Rectangle_2428" data-name="Rectangle 2428" width="1.871" height="1.988" transform="translate(12.107 6.957)" fill="#fff"/>
                        <rect id="Rectangle_2429" data-name="Rectangle 2429" width="1.871" height="1.988" transform="translate(21.461 6.957)" fill="#fff"/>
                        <path id="Path_5797" data-name="Path 5797" d="M6.494,75.3A.887.887,0,0,1,6.1,75.21a1,1,0,0,1-.543-.9v-3.24a8.012,8.012,0,0,1-5.3-9.73,7.844,7.844,0,0,1,4.107-5.178.909.909,0,0,1,1.264.416,1.026,1.026,0,0,1-.391,1.343.934.934,0,0,1-.105.05A6.12,6.12,0,0,0,2.334,65.86,5.666,5.666,0,0,0,6.625,69.3a.977.977,0,0,1,.8.994v1.928L10.385,69.6a.908.908,0,0,1,.6-.268h2.058a5.4,5.4,0,0,0,4.013-1.809.9.9,0,0,1,1.328-.02,1.043,1.043,0,0,1,.019,1.411,7.274,7.274,0,0,1-5.36,2.405H11.321L7.093,75.071a.9.9,0,0,1-.6.229" transform="translate(0 -47.471)" fill="#fff"/>
                      </g>
                    </g>
                    <a  id="check-progress-btn" style="cursor: pointer;">
                    <g id="Group_2845" data-name="Group 2845" transform="translate(17334 2120.115)">
                      <g id="Group_1331" data-name="Group 1331" clip-path="url(#clip-path-2)">
                        <path id="Path_5798" data-name="Path 5798" d="M25.923,12.1H24.05a10.4,10.4,0,0,0-8.5-8.5V1.728a1.728,1.728,0,0,0-3.456,0V3.6a10.4,10.4,0,0,0-8.5,8.5H1.728a1.728,1.728,0,1,0,0,3.456H3.6a10.4,10.4,0,0,0,8.5,8.5v1.873a1.728,1.728,0,1,0,3.456,0V24.05a10.4,10.4,0,0,0,8.5-8.5h1.873a1.728,1.728,0,1,0,0-3.456m-12.1,8.641a6.913,6.913,0,1,1,6.913-6.913,6.921,6.921,0,0,1-6.913,6.913" fill="#fff"/>
                      </g>
                    </g>
                    <text id="Check_progress"  data-name="Check progress" transform="translate(17441 2140)" fill="#fff" font-size="16" font-family="SegoeUI, Segoe UI"><tspan x="-54.164" y="0">Check progress</tspan></text>
                  </a>
                  </g>

                </svg>

            </div>
            <br><br>
        </div>
    </div>
</div>
@endif




</section>


<div class="container profile_tab_main_area " >


   <div class="row">
      @include('user.partial._Sidebar')
      <div class="col-md-8 col-lg-8 col-xl-8    order_details_row">
        <div>             <!-- ------------- profile tab info  ------------- -->

    <!-- ------------- mytask tab ------------- -->
         <div class="profile_tab_title">
            <h2>My task</h2>
         </div>
<!--
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
            </div> -->
      @if (session()->has('error'))
          <div class="alert alert-danger mt-4" style="font-size: 22px;" role="alert">{{ session()->get('error') }}</div>
      @endif


@forelse($tasks as $task)
            <div class="order_number">


                <div class="order_cat_date_area mt-3">
                  <div class="order_cat_date">
                      <p>{{$task->serviceCategory->title}}</p>
                      <h6>{{ $task->created_at->format('j M Y')}}</h6>
                  </div>
                </div>

             @if($task->request_status == "Processing")
                <div class="order_details_area mt-2">
                  <div class="order_details">
                      <div class="order_id_coast">
                            <!-- <h5>Order ID- <span class='id_num' ></span> </h5> -->
                            <h5>Task ID- <span class='id_num' >{{$task->task_id}}</span> </h5>

                            @if($task->total_cost)
                            <p>Item cost- <span class='coast'>${{$task->total_cost}}</span> </p>
                            @endif
                            {{-- <p class="service-category-show">{{$task->serviceCategory->title}}</p> --}}
                            <h6>{{$task->request_status}}</h6>
                            <!-- <h6>Proccessing</h6> -->
                      </div>
                  </div>
                  <div class="view_order float-right">
                      <button type="button " class="btn view-offer-btn" data-id="{{$task->id}}">View offers</button>
                  </div>
                  <div class="order_track">
                      <p>{{$task->title}}-</p>
                      <h5 class="add-comma-except">
                          @foreach($task->products as $product)
                              <span>{{$product->name}}({{$product->qty}}X)</span>
                          @endforeach
                      </h5>
                      <!-- <h5>Toothpaste(1X), Apples(1KG), Chips(1Pack).</h5> -->
                  </div>
                </div>
                @else
               <div class="order_details_area mt-2">
                     <div class="row">
                        <div class="col-md-2">
                           <div class="accept_offer_image">
                                 <img src="{{$task->acceptedOffer->dropper->profile_image}}" alt="">
                                 <h5>{{$task->acceptedOffer->dropper->last_name}}</h5>
                                 <h6><i class="fas fa-star"></i> <span>{{$task->acceptedOffer->dropper->rating}}</span> </h6>
                           </div>
                        </div>

                        <div class="col-md-10">
                           <div class="order_details">
                                 <div class="order_id_coast">
                                    <h5>Order ID- <span class='id_num' >{{$task->order->order_id}}</span> </h5>

                                    <p>Delivery charge- <span class='coast'>${{$task->acceptedOffer->amount}}</span> </p>
                                    {{-- <span class="service-category-show" style="
                                      position: absolute;
                                      top: 30%;
                                      right: 32%;
                                    ">{{$task->serviceCategory->title}}</span> --}}
                                        <h6 class='accepted' >{{$task->request_status}}</h6>
                                 </div>






                           </div>

                           <div class="view_order float-right">
                                 <button type="button" data-id="{{$task->order->order_id}}" class="btn track_status track-status-btn">Track status</button>
                           </div>
                           <div class="order_track">
                              <p>{{$task->title}}-</p>
                              <h5 class="add-comma-except">
                                  @foreach($task->products as $product)
                                      <span>{{$product->name}}({{$product->qty}}X)</span>
                                  @endforeach
                              </h5>
                              <!-- <h5>Toothpaste(1X), Apples(1KG), Chips(1Pack).</h5> -->
                          </div>
                        </div>
                     </div>
               </div>
              @endif


            </div>
@empty
<h2>You don't have placed any tasks. </h2>
@endforelse



        </div>
      </div>
   </div>
</div>
<!-- ---- end  tab ------ -->










<!-- ================= Offers from drivers tab ============ -->
<div id="offer_show_modal" class="modal fade profile-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg  ">
      <div class="modal-content offer_modal_contetn">
         <div class="modal-header offer_modal_title">
            <h5 class="modal-title" id="exampleModalLongTitle">Offers from drivers</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body offer-show-modal-sr">
            <section class=" offer_main_area" >
               <ul class="offer_show_modal_ul">

               </ul>
            </section>
         </div>
      </div>
   </div>
</div>


{{-- User.component.task_process --}}
<div class="modal fade" id="taskProcessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="auto" viewBox="0 0 744 643">
            <defs>
              <clipPath id="clip-path">
                <rect width="744" height="310" fill="none"/>
              </clipPath>
              <clipPath id="clip-path-2">
                <path id="Path_5803" data-name="Path 5803" d="M77.264,413.314a3.966,3.966,0,0,0,.045.557c-.132-.01-.263-.017-.4-.017a4.274,4.274,0,0,0-4.5,4c0,.109.011.213.019.319H72.41c-2.055,0-3.837.739-3.967,3.049a3.021,3.021,0,0,0,2.171,3.03c1.048.423,3.329.3,9.332.3,7.354,0,13.982.017,13.982.017a3.268,3.268,0,0,0,2.662-3c.273-2.553-2.085-4.557-4.843-4.49,0-.067.008-.138.008-.206a4.266,4.266,0,0,0-4.5-3.983,4.946,4.946,0,0,0-1.01.1,4.519,4.519,0,0,0-8.983.313" transform="translate(-68.438 -409.114)" fill="none"/>
              </clipPath>
              <radialGradient id="radial-gradient" cx="0.496" cy="0.497" r="0.73" gradientTransform="matrix(0.547, 0, 0, -1, -0.325, 18.725)" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#56cd93"/>
                <stop offset="1" stop-color="#60e99c"/>
              </radialGradient>
              <clipPath id="clip-path-3">
                <rect id="Rectangle_2448" data-name="Rectangle 2448" width="238.302" height="268.073" fill="none"/>
              </clipPath>
              <clipPath id="clip-path-4">
                <path id="Path_5805" data-name="Path 5805" d="M149,80.787a4.817,4.817,0,0,0,.052.655c-.155-.012-.309-.019-.469-.019-2.927,0-5.3,2.111-5.3,4.712,0,.128.011.251.022.376h-.022c-2.421,0-4.519.87-4.671,3.589a3.554,3.554,0,0,0,2.556,3.567c1.235.5,3.92.356,10.988.356,8.66,0,16.464.02,16.464.02a3.85,3.85,0,0,0,3.135-3.528c.32-3.006-2.455-5.365-5.7-5.287,0-.078.01-.162.01-.241,0-2.588-2.373-4.691-5.3-4.691a5.824,5.824,0,0,0-1.19.122A5.321,5.321,0,0,0,149,80.787" transform="translate(-138.609 -75.842)" fill="none"/>
              </clipPath>
              <radialGradient id="radial-gradient-2" cx="0.496" cy="0.497" r="0.73" gradientTransform="matrix(0.547, 0, 0, -1, -0.56, 26.783)" xlink:href="#radial-gradient"/>
              <clipPath id="clip-path-6">
                <path id="Path_5807" data-name="Path 5807" d="M712.113,93.052a4.065,4.065,0,0,0,.045.551c-.13-.01-.261-.016-.394-.016a4.235,4.235,0,0,0-4.461,3.965c0,.109.011.211.02.316h-.02c-2.037,0-3.8.732-3.93,3.021a2.994,2.994,0,0,0,2.15,3c1.039.42,3.3.3,9.248.3,7.287,0,13.854.016,13.854.016a3.238,3.238,0,0,0,2.639-2.969c.27-2.53-2.066-4.516-4.8-4.449,0-.067.008-.137.008-.2a4.228,4.228,0,0,0-4.457-3.947,4.932,4.932,0,0,0-1,.1,4.478,4.478,0,0,0-8.9.31" transform="translate(-703.368 -88.89)" fill="none"/>
              </clipPath>
              <radialGradient id="radial-gradient-3" cx="0.496" cy="0.497" r="0.73" gradientTransform="matrix(0.547, 0, 0, -1, -3.38, 31.318)" xlink:href="#radial-gradient"/>
              <clipPath id="clip-path-8">
                <path id="Path_5809" data-name="Path 5809" d="M665.306,517.783a4.846,4.846,0,0,0,.055.673c-.159-.013-.318-.02-.481-.02-3.009,0-5.446,2.167-5.446,4.841,0,.132.012.258.023.386h-.023c-2.487,0-4.642.895-4.8,3.689a3.653,3.653,0,0,0,2.626,3.665c1.269.513,4.028.366,11.291.366,8.9,0,16.916.02,16.916.02a3.954,3.954,0,0,0,3.221-3.625c.329-3.089-2.522-5.513-5.861-5.432,0-.082.01-.167.01-.248,0-2.659-2.437-4.82-5.442-4.82a6.038,6.038,0,0,0-1.222.125,5.468,5.468,0,0,0-10.868.379" transform="translate(-654.629 -512.702)" fill="none"/>
              </clipPath>
              <radialGradient id="radial-gradient-4" cx="0.496" cy="0.497" r="0.73" gradientTransform="matrix(0.547, 0, 0, -1, -2.577, 12.186)" xlink:href="#radial-gradient"/>
              <filter id="Ellipse_165" x="619.5" y="391.5" width="38" height="38" filterUnits="userSpaceOnUse">
                <feOffset dy="3" input="SourceAlpha"/>
                <feGaussianBlur stdDeviation="2.5" result="blur"/>
                <feFlood flood-opacity="0.102"/>
                <feComposite operator="in" in2="blur"/>
                <feComposite in="SourceGraphic"/>
              </filter>
              <filter id="Ellipse_165-2" x="80.5" y="391.5" width="38" height="38" filterUnits="userSpaceOnUse">
                <feOffset dy="3" input="SourceAlpha"/>
                <feGaussianBlur stdDeviation="2.5" result="blur-2"/>
                <feFlood flood-opacity="0.102"/>
                <feComposite operator="in" in2="blur-2"/>
                <feComposite in="SourceGraphic"/>
              </filter>
              <filter id="Ellipse_165-3" x="260.5" y="391.5" width="38" height="38" filterUnits="userSpaceOnUse">
                <feOffset dy="3" input="SourceAlpha"/>
                <feGaussianBlur stdDeviation="2.5" result="blur-3"/>
                <feFlood flood-opacity="0.102"/>
                <feComposite operator="in" in2="blur-3"/>
                <feComposite in="SourceGraphic"/>
              </filter>
              <filter id="Ellipse_165-4" x="439.5" y="391.5" width="38" height="38" filterUnits="userSpaceOnUse">
                <feOffset dy="3" input="SourceAlpha"/>
                <feGaussianBlur stdDeviation="2.5" result="blur-4"/>
                <feFlood flood-opacity="0.102"/>
                <feComposite operator="in" in2="blur-4"/>
                <feComposite in="SourceGraphic"/>
              </filter>
              <clipPath id="clip-path-10">
                <rect id="Rectangle_2458" data-name="Rectangle 2458" width="16.584" height="16.126" fill="#fff"/>
              </clipPath>
              <clipPath id="clip-path-11">
                <rect id="Rectangle_2462" data-name="Rectangle 2462" width="24.991" height="25" fill="#fff"/>
              </clipPath>
            </defs>
            <g id="Group_2860" data-name="Group 2860" transform="translate(-17916 -1679)">
              <g id="Repeat_Grid_12" data-name="Repeat Grid 12" transform="translate(17916 1679)" clip-path="url(#clip-path)">
                <g transform="translate(-17916 -1679)">
                  <rect id="Rectangle_4272" data-name="Rectangle 4272" width="744" height="643" rx="10" transform="translate(17916 1679)" fill="#fff"/>
                </g>
              </g>
              <path id="Rectangle_4275" data-name="Rectangle 4275" d="M10,0H734a10,10,0,0,1,10,10v4a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V10A10,10,0,0,1,10,0Z" transform="translate(17916 1679)" fill="#60e99c"/>
              <a href="javascript:void(0)" data-dismiss="modal">
                <g id="Group_2814" data-name="Group 2814" transform="translate(17174.494 1389)">
                  <circle id="Ellipse_159" data-name="Ellipse 159" cx="19.5" cy="19.5" r="19.5" transform="translate(1424.505 317)" fill="#f1f1f1"/>
                  <text id="X" transform="translate(1444.505 344)" fill="#f97a7a" font-size="20" font-family="SegoeUI, Segoe UI"><tspan x="-5.898" y="0">X</tspan></text>
                </g>
              </a>
              <g id="Group_2849" data-name="Group 2849" transform="translate(18159 1714.5)">
                <g id="Group_1347" data-name="Group 1347" transform="translate(20.471 122.37)">
                  <g id="Group_1346" data-name="Group 1346" clip-path="url(#clip-path-2)">
                    <rect id="Rectangle_2447" data-name="Rectangle 2447" width="28.47" height="15.562" transform="translate(-0.045)" fill="url(#radial-gradient)"/>
                  </g>
                </g>
                <g id="Group_1349" data-name="Group 1349">
                  <g id="Group_1348" data-name="Group 1348" clip-path="url(#clip-path-3)">
                    <path id="Path_5804" data-name="Path 5804" d="M33.145,415.435c.006-.1.017-.194.017-.288,0-3.133-2.865-5.67-6.4-5.67a7.248,7.248,0,0,0-1.439.148,6.231,6.231,0,0,0-6.375-5.528,6.2,6.2,0,0,0-6.4,5.971,5.722,5.722,0,0,0,.065.795c-.189-.017-.375-.027-.565-.027-3.535,0-6.4,2.55-6.4,5.7,0,.153.016.3.028.451H5.648c-2.921,0-5.461,1.053-5.642,4.339-.067,1.253.391,3.216,3.088,4.307,1.492.6,4.735.43,13.271.43,10.462,0,19.89.022,19.89.022a4.642,4.642,0,0,0,3.786-4.257c.388-3.635-2.967-6.484-6.9-6.387" transform="translate(0 -283.228)" fill="#e5e5e5"/>
                  </g>
                </g>
                <g id="Group_1351" data-name="Group 1351" transform="translate(41.459 22.685)">
                  <g id="Group_1350" data-name="Group 1350" clip-path="url(#clip-path-4)">
                    <rect id="Rectangle_2449" data-name="Rectangle 2449" width="33.523" height="18.324" transform="translate(-0.054 0)" fill="url(#radial-gradient-2)"/>
                  </g>
                </g>
                <g id="Group_1353" data-name="Group 1353">
                  <g id="Group_1352" data-name="Group 1352" clip-path="url(#clip-path-3)">
                    <path id="Path_5806" data-name="Path 5806" d="M97.051,83.283c.009-.114.021-.228.021-.34,0-3.689-3.373-6.676-7.53-6.676a8.54,8.54,0,0,0-1.7.173,7.569,7.569,0,0,0-15.044.523,6.729,6.729,0,0,0,.076.936c-.223-.019-.442-.032-.666-.032-4.162,0-7.538,3-7.538,6.706,0,.181.018.354.034.531h-.034c-3.441,0-6.431,1.239-6.644,5.109-.079,1.476.46,3.787,3.636,5.072,1.758.71,5.575.5,15.626.5,12.318,0,23.421.025,23.421.025a5.465,5.465,0,0,0,4.457-5.012c.458-4.281-3.493-7.635-8.12-7.521" transform="translate(-40.668 -49.015)" fill="#e5e5e5"/>
                  </g>
                </g>
                <g id="Group_1355" data-name="Group 1355" transform="translate(210.384 26.588)">
                  <g id="Group_1354" data-name="Group 1354" clip-path="url(#clip-path-6)">
                    <rect id="Rectangle_2451" data-name="Rectangle 2451" width="28.211" height="15.421" transform="translate(-0.045 0)" fill="url(#radial-gradient-3)"/>
                  </g>
                </g>
                <g id="Group_1357" data-name="Group 1357">
                  <g id="Group_1356" data-name="Group 1356" clip-path="url(#clip-path-3)">
                    <path id="Path_5808" data-name="Path 5808" d="M668.4,95.154c.007-.1.017-.192.017-.285,0-3.1-2.84-5.618-6.337-5.618a7.138,7.138,0,0,0-1.426.147,6.37,6.37,0,0,0-12.661.44,5.708,5.708,0,0,0,.065.787c-.188-.016-.373-.027-.56-.027-3.5,0-6.345,2.527-6.345,5.644,0,.152.015.3.029.447h-.029c-2.894,0-5.411,1.043-5.59,4.3-.066,1.242.388,3.187,3.059,4.268,1.479.6,4.692.425,13.15.425,10.366,0,19.709.021,19.709.021a4.6,4.6,0,0,0,3.751-4.218c.385-3.6-2.94-6.425-6.832-6.329" transform="translate(-445.452 -58.818)" fill="#e5e5e5"/>
                  </g>
                </g>
                <g id="Group_1359" data-name="Group 1359" transform="translate(195.806 153.354)">
                  <g id="Group_1358" data-name="Group 1358" clip-path="url(#clip-path-8)">
                    <rect id="Rectangle_2453" data-name="Rectangle 2453" width="34.445" height="18.828" transform="translate(-0.055)" fill="url(#radial-gradient-4)"/>
                  </g>
                </g>
                <g id="Group_1361" data-name="Group 1361">
                  <g id="Group_1360" data-name="Group 1360" clip-path="url(#clip-path-3)">
                    <path id="Path_5810" data-name="Path 5810" d="M611.926,520.348c.008-.117.021-.234.021-.349,0-3.79-3.467-6.86-7.738-6.86a8.705,8.705,0,0,0-1.742.18,7.777,7.777,0,0,0-15.458.537,6.934,6.934,0,0,0,.078.962c-.229-.021-.454-.033-.684-.033-4.276,0-7.747,3.086-7.747,6.891,0,.185.02.364.036.545h-.036c-3.534,0-6.606,1.274-6.826,5.25-.081,1.517.473,3.891,3.735,5.211,1.806.73,5.73.519,16.057.519,12.657,0,24.065.026,24.065.026a5.617,5.617,0,0,0,4.581-5.151c.469-4.4-3.59-7.845-8.343-7.728" transform="translate(-400.786 -355.093)" fill="#e5e5e5"/>
                    <path id="Path_5811" data-name="Path 5811" d="M455.123,720.822,405.554,733.19l5.765-60.156,49.286-9.426Z" transform="translate(-284.249 -465.116)" fill="#a86725"/>
                    <path id="Path_5812" data-name="Path 5812" d="M186.092,711.379l65.643,15.191,5.765-60.156-65.923-12.251Z" transform="translate(-130.43 -458.497)" fill="#d79641"/>
                    <path id="Path_5813" data-name="Path 5813" d="M204.429,636.767l67.809-7.423,47.4,10.248-49.286,9.426Z" transform="translate(-143.282 -441.101)" fill="#e7b160"/>
                    <path id="Path_5814" data-name="Path 5814" d="M348.328,802.32c-.572-.978-1.154-1.952-1.731-2.927l-1.741-2.924-3.5-5.829-1.766-2.906-1.773-2.9-1.785-2.9-1.787-2.893-3.59-5.773-.591-.934-1.455,1.148.5.77,3.694,5.711,1.858,2.847,1.861,2.844,1.869,2.842,1.878,2.834,3.78,5.655,1.9,2.815c.636.938,1.271,1.88,1.918,2.814l1.924,2.8c.648.93,1.292,1.864,1.95,2.79-.559-.988-1.128-1.97-1.7-2.95Z" transform="translate(-230.317 -541.324)" fill="#b56b2b"/>
                    <path id="Path_5815" data-name="Path 5815" d="M212.965,762.023l-2.268,2.02-2.265,2.025-4.511,4.064-2.253,2.039c-.753.678-1.5,1.367-2.241,2.049l-2.24,2.05c-.748.685-1.5,1.367-2.236,2.059l-2.23,2.066c-.743.689-1.481,1.38-2.22,2.075l-2.209,2.083c-.733.7-1.472,1.394-2.2,2.1.8-.627,1.587-1.263,2.376-1.9l2.363-1.91q1.181-.955,2.355-1.919L195.541,779c.778-.642,1.558-1.291,2.337-1.936l2.335-1.943c.779-.647,1.56-1.293,2.334-1.946l2.327-1.95,4.636-3.923,2.314-1.969,2.306-1.975.435-.371c-.345-.487-.693-.974-1.035-1.46Z" transform="translate(-130.43 -533.747)" fill="#b56b2b"/>
                    <path id="Path_5816" data-name="Path 5816" d="M243.633,689.033l2.248-1.776,2.243-1.783,4.471-3.577,2.229-1.8c.747-.6,1.483-1.2,2.225-1.807l2.218-1.81c.74-.606,1.482-1.205,2.219-1.818l2.2-1.826c.739-.608,1.475-1.216,2.2-1.833l2.2-1.843c.726-.622,1.46-1.236,2.18-1.862-.788.543-1.564,1.1-2.348,1.644l-2.337,1.661q-1.164.832-2.325,1.674l-2.322,1.677c-.778.558-1.543,1.127-2.313,1.69l-2.312,1.7c-.772.565-1.543,1.128-2.3,1.7l-2.3,1.705-4.589,3.433-2.285,1.724-2.285,1.729-.473.36-1.49,1.13-.319.241-2.273,1.74-2.271,1.743-1.489,1.146-1.277-1.777-1.854-2.57q-1.127-1.566-2.262-3.122c-.361-.492-.717-.984-1.073-1.473-.129-.18-.262-.358-.391-.536L223.63,679.4l-1.886-2.549-1.89-2.544-1.9-2.541-1.906-2.534-3.829-5.053-1.935-2.515c-.644-.837-1.283-1.68-1.933-2.511l-1.956-2.5c-.657-.829-1.309-1.66-1.971-2.485.569.89,1.153,1.774,1.729,2.662l1.748,2.644c.582.883,1.173,1.758,1.765,2.637l1.764,2.632L215,669.982l1.8,2.61,1.8,2.606,1.814,2.6,1.82,2.6,3.65,5.181c.168.231.332.463.5.694.342.486.69.973,1.035,1.46q1.069,1.508,2.146,3.01l1.848,2.577,1.853,2.572.575.8.772-.6,2.264-1.756,2.259-1.765,2.25-1.764.188-.148,1.455-1.148Z" transform="translate(-143.282 -458.497)" fill="#b56b2b"/>
                    <path id="Path_5817" data-name="Path 5817" d="M276.025,642.038l60.038,11.626,12.728-2.436-56.074-11.02Z" transform="translate(-193.463 -448.716)" fill="#ecc180"/>
                    <path id="Path_5818" data-name="Path 5818" d="M487.618,677.052l-12.728,2.436-.792,8.261,12.749-2.658Z" transform="translate(-332.29 -474.539)" fill="#b98551"/>
                    <path id="Path_5819" data-name="Path 5819" d="M480.68,843.306,467.9,846.193l-.8,8.351,12.8-3.2Z" transform="translate(-327.391 -591.065)" fill="#b98551"/>
                    <path id="Path_5820" data-name="Path 5820" d="M373.463,617.625s.038-.158.112-.454.161-.732.271-1.286.221-1.234.328-2.011.181-1.66.224-2.619a21.779,21.779,0,0,0-.086-3.078c-.008-.135-.027-.271-.044-.408s-.032-.273-.052-.412c-.044-.274-.088-.55-.148-.827a13.08,13.08,0,0,0-.439-1.666l-.036-.1-.017-.051-.008-.028c.018.048,0,.008,0,.013l-.008-.013-.088-.212-.088-.212-.089-.168-.092-.168-.112-.172-.115-.17-.131-.161a4.28,4.28,0,0,0-1.284-1.049,4.164,4.164,0,0,0-3.284-.278l-.425.166c-.114.065-.228.121-.35.183-.114.078-.238.15-.355.229s-.223.173-.327.269a4.111,4.111,0,0,0-1,1.345,4.3,4.3,0,0,0-.4,1.609l-.009.2.014.207.011.205.032.2.027.2.054.2.046.2.008.012s0,.018,0,0l.012.026.017.054.036.108c.049.142.1.293.149.426s.1.262.15.4.112.263.167.393.121.26.181.39a15.083,15.083,0,0,0,.792,1.461,21.908,21.908,0,0,0,1.78,2.514c.608.743,1.2,1.4,1.75,1.961s1.046,1.035,1.465,1.413.758.673.991.868l.364.294m0,0s-.147-.079-.405-.24-.639-.4-1.1-.735-1.017-.75-1.627-1.266a24.389,24.389,0,0,1-1.955-1.837,20.244,20.244,0,0,1-2.016-2.483,14.412,14.412,0,0,1-.916-1.508c-.151-.263-.275-.541-.409-.822-.065-.146-.128-.292-.191-.439s-.107-.283-.167-.426l-.038-.107-.019-.054-.014-.027-.01-.041-.075-.245-.072-.246-.049-.253-.044-.256-.02-.258-.024-.261c0-.085.007-.175.007-.261a5.241,5.241,0,0,1,1.714-3.8c.135-.123.284-.231.425-.346s.3-.2.454-.3c.172-.09.342-.176.515-.262l.481-.188a5.27,5.27,0,0,1,5.817,1.767c.051.068.105.136.158.206l.138.221.138.221.12.244.117.241.082.219.078.215.02.053.01.029.013.055.035.115a12.836,12.836,0,0,1,.4,1.811,14.913,14.913,0,0,1,.172,1.756,20.311,20.311,0,0,1-.121,3.2,23.742,23.742,0,0,1-.468,2.644c-.169.777-.369,1.444-.538,1.988s-.331.963-.438,1.249-.176.434-.176.434" transform="translate(-255.341 -421.019)" fill="#b56b2b"/>
                    <path id="Path_5821" data-name="Path 5821" d="M395.01,621.333s-.044-.156-.112-.456-.166-.733-.256-1.3-.192-1.251-.258-2.047a24.371,24.371,0,0,1-.083-2.683,20.142,20.142,0,0,1,.329-3.181,14.521,14.521,0,0,1,.419-1.713,12.855,12.855,0,0,1,.655-1.738l.047-.107.026-.055.014-.028.026-.047.107-.2.111-.2.151-.225.153-.225c.056-.066.113-.132.17-.2l.166-.2c.062-.063.126-.123.189-.186a5.285,5.285,0,0,1,3.9-1.471,5.3,5.3,0,0,1,2.1.546l.449.255c.157.109.319.219.472.333.135.12.279.237.409.361s.255.263.372.4a5.287,5.287,0,0,1,1.161,4.007c-.011.089-.021.173-.033.259l-.061.255-.057.253-.084.244-.08.246-.106.233-.106.231-.02.04-.015.024-.026.051-.058.1c-.076.134-.14.262-.224.4s-.165.271-.247.407c-.174.261-.338.515-.522.757a14.98,14.98,0,0,1-1.12,1.36,20.087,20.087,0,0,1-2.349,2.176,24.807,24.807,0,0,1-2.2,1.542c-.674.426-1.285.758-1.792,1.021s-.911.448-1.19.573-.436.181-.436.181m0,0s.144-.082.4-.242.633-.4,1.1-.714,1.027-.719,1.651-1.193,1.3-1.047,2.01-1.693a22.981,22.981,0,0,0,2.119-2.237c.174-.209.337-.43.506-.649s.334-.451.484-.69c.078-.116.157-.234.229-.358s.153-.243.224-.368.14-.245.207-.367.138-.266.208-.4l.05-.1.022-.052.016-.026c-.009.017,0,0,0,0l.006-.013.078-.187.077-.189.059-.195.057-.195.043-.2.041-.2.021-.208a4.222,4.222,0,0,0-.165-1.648,4.317,4.317,0,0,0-.8-1.472c-.091-.109-.2-.207-.29-.312s-.217-.186-.32-.278c-.107-.077-.214-.152-.321-.23l-.4-.225a4.164,4.164,0,0,0-3.286-.19,4.242,4.242,0,0,0-1.418.859l-.153.14-.138.154-.137.153-.11.154-.118.153-.116.2-.12.2-.005.013c0-.008-.015.029.005-.011l-.008.022-.025.05-.047.1a13.189,13.189,0,0,0-.677,1.586c-.1.267-.178.536-.26.8-.042.132-.073.267-.107.4s-.08.266-.108.4a22.867,22.867,0,0,0-.517,3.034c-.092.957-.14,1.841-.148,2.624s.008,1.473.037,2.037.06,1.01.088,1.313.047.465.047.465" transform="translate(-276.356 -424.086)" fill="#b56b2b"/>
                    <path id="Path_5822" data-name="Path 5822" d="M246.818,253.838a118.169,118.169,0,0,0-3.949,18.388,118.169,118.169,0,0,1,3.949-18.388" transform="translate(-170.225 -177.913)" fill="#fff"/>
                    <path id="Path_5823" data-name="Path 5823" d="M151.822,88.584a89.959,89.959,0,0,0-26.253,55.175l30.254,2.9a127.86,127.86,0,0,1,10.2-39.42,56.74,56.74,0,0,1-14.2-18.654" transform="translate(-88.01 -62.088)" fill="#56cd93"/>
                    <path id="Path_5824" data-name="Path 5824" d="M607.239,70.982A53.651,53.651,0,0,1,599.8,85.1c7.847,16.731,11.553,38.051,9.42,60.813l30.254,2.9a90.412,90.412,0,0,0-32.231-77.834" transform="translate(-420.391 -49.751)" fill="#56cd93"/>
                    <path id="Path_5825" data-name="Path 5825" d="M502.2,139.488a353.093,353.093,0,0,1-1.667,35.772l39.111,3.749c2.133-22.762-1.573-44.081-9.42-60.813A64,64,0,0,1,502.2,139.488" transform="translate(-350.817 -82.843)" fill="#f5f5f5"/>
                    <path id="Path_5826" data-name="Path 5826" d="M236.921,150.957a127.73,127.73,0,0,0-10.2,39.418l39.109,3.747c.932-9.709,2.195-19.023,3.71-27.718a68.245,68.245,0,0,1-32.623-15.447" transform="translate(-158.91 -105.804)" fill="#f5f5f5"/>
                    <path id="Path_5827" data-name="Path 5827" d="M236.914,150.949a127.86,127.86,0,0,0-10.2,39.42h0a127.732,127.732,0,0,1,10.2-39.418Z" transform="translate(-158.902 -105.799)" fill="#fff"/>
                    <path id="Path_5828" data-name="Path 5828" d="M375.54,194.542a74.91,74.91,0,0,1-14.355-1.21c-1.515,8.7-2.777,18.009-3.71,27.718l42.789,4.1a352.96,352.96,0,0,0,1.667-35.772,73.3,73.3,0,0,1-26.391,5.164" transform="translate(-250.551 -132.733)" fill="#56cd93"/>
                    <path id="Path_5829" data-name="Path 5829" d="M227.539,45.15C240.3,16.51,262.765-1.845,286.464.425A91.188,91.188,0,0,0,213.339,26.5a56.744,56.744,0,0,0,14.2,18.654" transform="translate(-149.527 0)" fill="#60e99c"/>
                    <path id="Path_5830" data-name="Path 5830" d="M457.819,1.419c18.081,1.735,33.175,15.116,42.467,34.929a53.643,53.643,0,0,0,7.443-14.122,91.148,91.148,0,0,0-49.91-20.807" transform="translate(-320.881 -0.995)" fill="#60e99c"/>
                    <path id="Path_5831" data-name="Path 5831" d="M457.819,1.419h0c8.806.846,14.228,23.943,14.443,56.221a64.007,64.007,0,0,0,28.024-21.291C490.994,16.535,475.9,3.154,457.819,1.419" transform="translate(-320.881 -0.995)" fill="#fff"/>
                    <path id="Path_5832" data-name="Path 5832" d="M319.739.976c-23.7-2.269-46.163,16.085-58.927,44.728a68.242,68.242,0,0,0,32.623,15.447c6.244-35.792,16.8-61.084,26.3-60.175" transform="translate(-182.801 -0.552)" fill="#fff"/>
                    <path id="Path_5833" data-name="Path 5833" d="M457.816,1.419h0Z" transform="translate(-320.878 -0.995)" fill="#4014c5"/>
                    <path id="Path_5834" data-name="Path 5834" d="M319.739.976h0c-23.7-2.27-46.162,16.085-58.925,44.726v0c12.764-28.643,35.226-47,58.927-44.728" transform="translate(-182.801 -0.551)" fill="#4014c5"/>
                    <path id="Path_5835" data-name="Path 5835" d="M396.182,1.363h0c-9.5-.91-20.061,24.383-26.3,60.175a74.914,74.914,0,0,0,14.355,1.21,73.32,73.32,0,0,0,26.392-5.164c-.215-32.277-5.636-55.375-14.442-56.221" transform="translate(-259.244 -0.939)" fill="#60e99c"/>
                    <path id="Path_5836" data-name="Path 5836" d="M136.921,258.275c-6.807.937-10.838,2.362-11.236,4.248,3-.108,6.323-.164,9.942-.171q.595-2.065,1.295-4.077" transform="translate(-88.091 -181.022)" fill="#bfbfbf"/>
                    <path id="Path_5837" data-name="Path 5837" d="M708.372,315.307c-.636-1.789-4.225-3.758-10.127-5.767q.276,1.916.463,3.857c3.747,4.861,6.7,1.277,9.664,1.91" transform="translate(-489.393 -216.954)" fill="#bfbfbf"/>
                    <path id="Path_5838" data-name="Path 5838" d="M186.331,259.915q.748-3.1,1.649-6.089a208.785,208.785,0,0,0-27.764,1.327q-.7,2.012-1.3,4.078c8.046,5.088,17.769,8.367,27.41.685" transform="translate(-111.386 -177.901)" fill="#32965d"/>
                    <path id="Path_5839" data-name="Path 5839" d="M635.427,297.992q-.186-1.939-.463-3.857a208.849,208.849,0,0,0-27.006-6.574q.308,3,.451,6.089c9.633,6.663,17.885,8.074,27.018,4.342" transform="translate(-426.112 -201.549)" fill="#32965d"/>
                    <path id="Path_5840" data-name="Path 5840" d="M528.323,281.538q-.144-3.08-.451-6.089c-9.967-1.875-21.474-3.64-33.961-5.169q-.066,3.413-.216,6.947c11.346,9.068,20.122,12.741,34.628,4.311" transform="translate(-346.026 -189.437)" fill="#bfbfbf"/>
                    <path id="Path_5841" data-name="Path 5841" d="M286.534,255.213c-12.55-.87-24.186-1.323-34.325-1.376q-.9,2.99-1.649,6.09c7,9.574,21.695,10.061,34.855,2.207q.529-3.525,1.119-6.921" transform="translate(-175.615 -177.912)" fill="#bfbfbf"/>
                    <path id="Path_5842" data-name="Path 5842" d="M387.286,273.11c5.733.548,9.507,1.963,17.671-4.184q.145-3.53.216-6.946c-5.954-.728-12.129-1.4-18.458-2.011s-12.526-1.118-18.508-1.531q-.59,3.394-1.119,6.921c6.37,6.427,13.019,7.064,20.2,7.752" transform="translate(-257.288 -181.137)" fill="#32965d"/>
                    <path id="Path_5843" data-name="Path 5843" d="M153.772,278.091c6.128,2.263,15.312,4.6,26.65,6.8a120.494,120.494,0,0,1,2.3-12.3c-10.289-.467-19.544-.7-27.41-.685q-.886,3.044-1.54,6.186" transform="translate(-107.777 -190.576)" fill="#3aa06a"/>
                    <path id="Path_5844" data-name="Path 5844" d="M609.322,307.918a122.062,122.062,0,0,1-.062,12.713c11.543-.006,21-.554,27.444-1.612-.023-2.273-.152-4.527-.364-6.758-7.872-1.451-16.973-2.918-27.018-4.342" transform="translate(-427.024 -215.817)" fill="#3aa06a"/>
                    <path id="Path_5845" data-name="Path 5845" d="M491.273,293.5c-.216,5.085-.559,10.337-1.034,15.707,13.107.89,25.2,1.324,35.6,1.317a121.894,121.894,0,0,0,.062-12.713c-10.614-1.505-22.274-2.964-34.628-4.311" transform="translate(-343.604 -205.714)" fill="#e5e5e5"/>
                    <path id="Path_5846" data-name="Path 5846" d="M278.064,291.96c.548-5.342,1.205-10.544,1.96-15.557-12.473-.988-24.22-1.725-34.855-2.207a120.572,120.572,0,0,0-2.3,12.3c10.207,1.981,22.158,3.852,35.2,5.466" transform="translate(-170.225 -192.181)" fill="#e5e5e5"/>
                    <path id="Path_5847" data-name="Path 5847" d="M383.5,283.416c-7.172-.688-14.2-1.3-21.006-1.841-.754,5.013-1.412,10.215-1.96,15.557,6.237.772,12.72,1.486,19.376,2.123s13.153,1.17,19.419,1.594c.475-5.37.818-10.621,1.034-15.707q-8.243-.9-16.863-1.726" transform="translate(-252.695 -197.353)" fill="#3aa06a"/>
                    <path id="Path_5848" data-name="Path 5848" d="M396.32,402.75l-.7-.455L467.1,292.878l.872.187Z" transform="translate(-277.288 -205.275)" fill="#c48955"/>
                    <path id="Path_5849" data-name="Path 5849" d="M396.467,429.672l-.583-.6,99.256-97.893.8.458Z" transform="translate(-277.471 -232.124)" fill="#b56b2b"/>
                    <path id="Path_5850" data-name="Path 5850" d="M396.318,387.644l-.8-.223L428,271.486l.831.108Z" transform="translate(-277.212 -190.282)" fill="#b56b2b"/>
                    <path id="Path_5851" data-name="Path 5851" d="M280.089,375.378,230.806,253.936l.942-.014L280.86,375.064Z" transform="translate(-161.77 -177.971)" fill="#c48955"/>
                    <path id="Path_5852" data-name="Path 5852" d="M208.407,392.966,128.471,278.9l1.444.6L209.09,392.488Z" transform="translate(-90.044 -195.477)" fill="#b56b2b"/>
                    <path id="Path_5853" data-name="Path 5853" d="M372.009,378.005,362,257.844l.855.057,9.986,120.034Z" transform="translate(-253.723 -180.721)" fill="#b56b2b"/>
                    <path id="Path_5854" data-name="Path 5854" d="M295.267,709.792l-.82-.188,5.509-58.69,51.4-9.986,2,.432-51.531,9.9Z" transform="translate(-206.375 -449.22)" fill="#b56b2b"/>
                    <path id="Path_5855" data-name="Path 5855" d="M133.988,278.093q.655-3.141,1.54-6.186c-3.619.007-6.944.063-9.942.171a1.164,1.164,0,0,0-.035.17c-.171,1.787,2.872,3.787,8.436,5.845" transform="translate(-87.993 -190.577)" fill="#e5e5e5"/>
                    <path id="Path_5856" data-name="Path 5856" d="M700.158,329.192c5.865-.963,9.225-2.348,9.4-4.136a1.627,1.627,0,0,0-.1-.712q-4.448-.949-9.664-1.91c.213,2.231.341,4.485.364,6.758" transform="translate(-490.479 -225.991)" fill="#e5e5e5"/>
                    <path id="Path_5857" data-name="Path 5857" d="M307.945,642.244l-2.293.251,59.657,10.972,1.112-.212Z" transform="translate(-214.229 -450.143)" fill="#b56b2b"/>
                    <path id="Path_5858" data-name="Path 5858" d="M492.388,679.27l-5.425,58.669.865-.21,5.673-58.67Z" transform="translate(-341.307 -475.946)" fill="#96571b"/>
                    <path id="Path_5859" data-name="Path 5859" d="M294.615,759.433a7.6,7.6,0,1,1-6.846-8.288,7.6,7.6,0,0,1,6.846,8.288" transform="translate(-195.859 -526.445)" fill="#f2f2f2"/>
                    <path id="Path_5860" data-name="Path 5860" d="M285.173,765.637a8.073,8.073,0,1,1,8.809-7.266,8.081,8.081,0,0,1-8.809,7.266m1.483-15.478a7.477,7.477,0,1,0,6.733,8.157,7.484,7.484,0,0,0-6.733-8.157" transform="translate(-194.757 -525.337)" fill="#cf3f0a"/>
                    <path id="Path_5861" data-name="Path 5861" d="M317.54,766.206a8.178,8.178,0,0,1-3.965-1.36,8.4,8.4,0,0,0-7.608-.729,8.995,8.995,0,0,1-8.119-.778,7.59,7.59,0,0,0-3.719-1.28.3.3,0,1,1,.056-.593,8.187,8.187,0,0,1,3.969,1.361,8.409,8.409,0,0,0,7.607.73,9.007,9.007,0,0,1,8.124.777,7.592,7.592,0,0,0,3.716,1.28.3.3,0,1,1-.06.592" transform="translate(-205.963 -533.703)" fill="#cf3f0a"/>
                    <path id="Path_5862" data-name="Path 5862" d="M315.281,775.907a8.217,8.217,0,0,1-3.969-1.362,8.4,8.4,0,0,0-7.61-.728,9,9,0,0,1-8.121-.78,7.612,7.612,0,0,0-3.715-1.279.3.3,0,0,1-.269-.325.3.3,0,0,1,.326-.267,8.2,8.2,0,0,1,3.965,1.361,8.406,8.406,0,0,0,7.611.73,9,9,0,0,1,8.121.777,7.571,7.571,0,0,0,3.717,1.281.3.3,0,1,1-.056.592" transform="translate(-204.377 -540.502)" fill="#cf3f0a"/>
                    <path id="Path_5863" data-name="Path 5863" d="M313.012,785.61a8.2,8.2,0,0,1-3.967-1.359,8.395,8.395,0,0,0-7.608-.73,9.023,9.023,0,0,1-8.127-.78,7.563,7.563,0,0,0-3.712-1.278.3.3,0,1,1,.057-.592,8.18,8.18,0,0,1,3.967,1.36,8.383,8.383,0,0,0,7.605.731,9,9,0,0,1,8.122.777,7.617,7.617,0,0,0,3.717,1.281.3.3,0,0,1,.27.326.294.294,0,0,1-.325.264" transform="translate(-202.786 -547.304)" fill="#cf3f0a"/>
                  </g>
                </g>
              </g>
          </svg>
       {{-- <div class="d-flex justify-content-center" style="margin-top: -102px;">
          <div class="row track-row">
              <div class=" col-sm-6 col-md-6 d-flex justify-content-center">
                  <small>Track order</small>
              </div>
              <div class=" col-sm-6 col-md-6 d-flex justify-content-center">
                  <small>ID#25425233254</small>
              </div>
              <hr>
          </div>
      </div> --}}
      <div class="container-fluid">
          <div class="row track-row">
              <div class="col-sm-6 track-ord-title"><small>Track order</small></div>
              <div class="col-sm-6 track-ord-id"><small id="show-order-id"></small></div>

          </div>
          <hr>

          <div class="step-line mt-6">

              <div class="bg-done-first-step track-status-div">
                  <small class="step-line-text">Task is assigned</small>
                  <img class="task-img" src="{{ asset('frontend/assets/images/Icons/task white.svg') }}" alt="">
              </div>
              <div class="track-status-div">
                  <small class="step-line-text">Task is in the progress</small>
                  <img class="task-img" src="{{ asset('frontend/assets/images/Icons/time.svg') }}" alt="">
              </div>
              <div class="track-status-div">
                  <small class="step-line-text" style="margin-left: -40px;">Order collected</small>
                  <img class="task-img" src="{{ asset('frontend/assets/images/Icons/tik.png') }}" alt="">
              </div>
              <div class="track-status-div">
                  <small class="step-line-text" style="margin-left: -40px;">Order is delivered</small>
                  <img class="task-img" src="{{ asset('frontend/assets/images/Icons/tik.png') }}" alt="">
              </div>
          </div>
          <div class="chat mt-3">
              <div class="text" style="margin-left:131px;"><small style="font-size: 8px; color:gray;">(you can ask for product <br> image in the chat box)</small></div>

              <a href="" class="btn btn-sm btn-success chat-btn mt-2">            Chat   <i class="fa fa-comments"></i></a>
          </div>
           <div class="redirect mt-4 mb-4">
               <a href="" class="btn  btn-success home-btn"><i class="fa fa-home"></i>    Home</a>
               <a href="" data-toggle="modal" data-target="#paymentReleaseModalId" id="releasePaymentId" class="btn  btn-success release-btn"><i class="fa fa-book"></i>    Release Payment </a>
           </div>


      </div>


          {{-- <div style="padding-left: 8px; padding-right: 8px;">
              <div class="step-line">
                  <div class="bg-done-first-step">
                      <small class="step-line-text">Task is assigned</small>
                      <img class="task-img" src="{{ asset('frontend/assets/images/Icons/task white.svg') }}" alt="">
                  </div>
                  <div>
                      <small class="step-line-text">Task is in the progress</small>
                      <img class="task-img" src="{{ asset('frontend/assets/images/Icons/time.svg') }}" alt="">
                  </div>
                  <div>
                      <small class="step-line-text" style="margin-left: -40px;">Order collected</small>
                      <img class="task-img" src="{{ asset('frontend/assets/images/Icons/tik.png') }}" alt="">
                  </div>
                  <div>
                      <small class="step-line-text" style="margin-left: -40px;">Order is delivered</small>
                      <img class="task-img" src="{{ asset('frontend/assets/images/Icons/tik.png') }}" alt="">
                  </div>
              </div>
          </div> --}}

     </div>
  </div>
</div>

<!-- --------- invite section --------------- -->
@include("user.partial._Invite")

@include("user.payment.payment_release")


<script>

$(document).ready(function(){

  function driverOfferItem(offerData){


      let url = '{{ route("user.payment", ["offerId" => ":offerId", "taskId" => ":taskId"]) }}';
      url = url.replace(':offerId', offerData['id']);
      url = url.replace(':taskId', offerData['task_id']);



      let offerItem = '<li class="offer_inter_item mt-1">';
      offerItem += '<div class="container">';
      offerItem += '<div class="row offer-cont">';

      offerItem += '<div class="col-md-2 offer-cont-item1"><div class="offer_image"><img src="'+ offerData['dropper']['profile_image'] +'" alt=""><h5>'+ offerData['dropper']['last_name'] +'</h5><h6><i class="fas fa-star"></i> <span>'+ offerData['dropper']['rating']  +'</span> </h6></div></div>';



      offerItem += '<div class="col-md-6 offer_middle_row offer-cont-item2"><div class="circle_offer"><div class="chart" data-percent="'+ offerData['dropper']['average_accuracy'] +'" data-scale-color="#ffb400">'+ offerData['dropper']['average_accuracy'] +'%<h6>Average2 accuracy2</h6></div></div><div class="circle_offer"><div class="chart" data-percent="'+ offerData['dropper']['success_rate'] +'" data-scale-color="#ffb400">'+ offerData['dropper']['success_rate'] +'%<h6>Success2 rate22</h6></div></div><div class="Vehicle_offer"><img src="'+ offerData['dropper']['vehicle']['icon'] +'" alt=""><h6>Vehicle type</h6></div></div>';

      //offerItem += '<div class="col-md-6 offer_middle_row offer-cont-item2"><div class="circle_offer"><div class="chart" data-percent="'+ offerData['dropper']['average_accuracy'] +'" data-scale-color="#ffb400">'+ offerData['dropper']['average_accuracy'] +'%<h6>Average accuracy</h6></div></div><div class="circle_offer"><div class="chart" data-percent="'+ offerData['dropper']['success_rate'] +'" data-scale-color="#ffb400">'+ offerData['dropper']['success_rate'] +'%<h6>Success rate</h6></div></div><div class="Vehicle_offer"><img src="'+ offerData['dropper']['vehicle']['icon'] +'" alt=""><h6>Vehicle type</h6></div></div>';

      offerItem += '<div class="col-md-3 offer-cont-item3"><div class="accept_offer_cost"><div class="circle_curve"><h1></h1><h4>$'+ offerData['amount'] +'</h4></div><a href="'+ url +'" type="button" class="btn">Accept Offer</a></div></div>';
      // offerItem += '';
      offerItem += '</div>';
      offerItem += '</div>';
      // offerItem += '<span class="close1 offer_close">&times;</span>';
      offerItem += '</li>';

      return offerItem;
  };





  //Pay confirm model
  $('#pay-confirm-model-close').on('click',function(e){
      $('#pay-confirm-model-block').css('display', 'none');
  });

  // $('#pay-confirm-model-block').on('click',function(e){
  //     e.stopPropagation();
  //     alert('Outside...');
  // });

  $('#check-progress-btn').on('click',function(e){
    $('#pay-confirm-model-block').css('display', 'none');

    $('#taskProcessModal').modal('show');
  });


  // Show offers From Drivers Modal
  $('.view-offer-btn').on('click',function(){

    let taskId = $(this).attr("data-id");

    let url = '{{ route("user.task_offer_json", ":id") }}';
      url = url.replace(':id', taskId);

    $.ajax({
						url: url,
						data: {id:taskId},
						type: "GET",
						dataType: "JSON",
						success: function(data){
							if($.isEmptyObject(data) != null){

                // empty the container
                $('.offer_show_modal_ul').empty();

                if(data.offers.length <=0){

                  let offerLi = '<li class="no-offer-found">No offer placed yet. Please check again later.</li>';
                  $('.offer_show_modal_ul').append(offerLi);

                }else{
                  data.offers.forEach(offer => {
                    let offerLi = driverOfferItem(offer);
                    $('.offer_show_modal_ul').append(offerLi);




                    //
                    _chart();

                  });
                }



                $('#offer_show_modal').modal('toggle');
							}
						}
		});
    // $('#offer_show_modal').modal('toggle');


    // $('#offer_show_modal').modal('toggle');
    // let offerLi = driverOfferItem();
    // $('.offer_show_modal_ul').append(offerLi);


  });

  // Show Track Status
  $('.track-status-btn').on('click',function(){

    // class="track-status-div"



    window.orderId = $(this).attr("data-id");

    $('#show-order-id').text("ID#"+orderId);

    let url = '{{ route("user.task_order_json", ":id") }}';
    url = url.replace(':id', orderId);

    $.ajax({
        url: url,
        data: {id:orderId},
        type: "GET",
        dataType: "JSON",
        success: function(data){
          if($.isEmptyObject(data) != null){

            $('.track-status-div').each(function(index, item) {

              if(index !== 0){
                $(item).removeClass('bg-done-first-step');
              }
            });

            $('.track-status-div').each(function(index, item) {

              if(index <= data.order_status){
                $(item).addClass('bg-done-first-step');
              }
            });

            $('#taskProcessModal').modal('toggle');
          }
        }
		});

    // Toggole
    // $('#taskProcessModal').modal('toggle');



  });

});


/* chart */
// function _chart (){
// 	$('.b-skills').appear(function() {
// 		setTimeout(function() {
// 			$('.chart').easyPieChart({
// 				easing: 'easeOutElastic',
// 				delay: 3000,
// 				barColor: '#369670',
// 				trackColor: '#fff',
// 				scaleColor: false,
// 				lineWidth: 21,
// 				trackWidth: 21,
// 				size: 250,
// 				lineCap: 'round',
// 				onStep: function(from, to, percent) {
// 					this.el.children[0].innerHTML = Math.round(percent);
// 				}
// 			});
// 		}, 150);
// 	});
// };

// $(document).ready(function() {
// 	_chart();
// });

</script>



@endsection
