@extends('User.Asset')
<style>
    table {
        background: transparent;
        border: 1px solid #90a0b2;
        border-radius: 5px;
    }
    td {
        background: transparent;
        border-bottom: 1px solid #e8e8e8;
    }

    .payment-checkbox {
        width: 200px;
        height: 90px;
        margin-right: 10px;

        border-radius: 5px;
        background: #fff;
        border: 1px solid #90a0b2;
    }
    .checkout-products {
        width: 100%;
        align-items: center;
        margin: auto;
        padding: 50px;
    }

    [type=checkbox] {
        width: 20px;
        height: 20px;
        margin-right: 7px;
    }

    [type=checkbox] + img {
        cursor: pointer;
    }

    .payment-select-checkbox {
        background: #e7f9ef!important;
        border: 1px solid #5bdb98!important;
    }

    [type=checkbox]:checked + div {
        border-radius: 5px;
        background: #e7f9ef;
        border: 1px solid #5bdb98;
    }

    .container-box {
        background: #fff;
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
        border-radius: 10px;
    }

    .payment-summary {
        height: 380;
        border-radius: 3px;
        background: #fff;
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
        margin-top: 80;
    }

    .promo-code-field {
        background: transparent;
        border: 1px solid #60e99c!important;
    }

    .promo-code-field:focus {
        outline: none!important;
        border-color: #60e99c;
    }
    .payment-procced-nb {
        font-family: Montserrat;
        font-weight: normal;
        font-size: 14px;
        text-align: center;
        color: #ffb44a;
    }
    .deliver-info-text {
        margin-left: 25px;
        color: #8f8f8f;
        margin-top: -32px;
    }
    .deliver-info-dest {
        margin-top: -4px;
        margin-left: 3px;
        color: #8f8f8f;
    }

    #checboxPendu-coming {
        position: relative;
    }

    #checboxPendu-coming:after {
        content: "Coming Soon";
        display: inline-block;
        position: absolute;
        text-align: center;
        margin: auto;
        width: inherit;
        margin-top: -58px;
        background: #60e99c;
        padding: 0px 8px;
        border-radius: 5px;
        top: 44%;
        left: 20%;
        color: #fff;
        font-weight: 700;
    }

    #coupon-apply-btn{
        cursor:pointer;
        border: 1px solid #60e99c;
        background: #60e99c !important;
        color: #fff;
        font-weight: 700;
    }

    #promo-code-show-tr{
        display: none;
    }

    /* #promo-code-tr{
        display: none;
    } */



    .hello-salman-modal {
        width: 50%;
        margin: auto;
        border: 1px solid green;
        border-radius: 9px;
        position: absolute;
        z-index: 9999999999999;
        top: 50%; right: 50%;
        transform: translate(50%,-50%);

    }

    .hello-salman-modal-block{
        position: fixed;
        background-color: transparent;
        /* opacity: 0.9; */
        width: 100vw;
        height: 100vh;
        z-index: 999999999999999999999999999;
        /* display: none; */
    }

</style>
@section('user_content')
<section class="">
    <div style="height: 120px; background: #5bdb98"></div>
    <div class="container" style="margin-top: -60px;">


        <span class="font-weight-bold" id="titleId">Checkout</span>


        <div class="row">
            <div class="col-md-8 col-sm-12 container-box float-left">
                <div class="d-flex justify-content-center checkout-products align-items-center">
                    <div class="w-100">
                    @if (session()->has('error'))
                            <div class="alert alert-danger mt-4" style="font-size: 22px;" role="alert">{{ session()->get('error') }}</div>
                    @endif
                                        <div class="form-group w-100">
                            <label for="exampleInputPassword1" class="label-title">Products</label>&ensp;
                            <div class="">
                                <table class="table">
                                    <tbody>

                                    @foreach($data->task->products as $product)
                                        <tr>
                                            <td>{{$product->name}}({{$product->qty}}X)</td>
                                            <td class="text-right">${{$product->price}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group w-100">
                            <label for="exampleInputEmail1" class="label-title">Deliver Info</label>
                            <div class="task-details-timeframe" style="padding-left: 30px;padding-top: 8px;">
                                <div>
                                    <div>
                                        <img src="{{ asset('frontend/assets/images/Icons/location green.svg') }}" alt="" height="39" width="30">
                                    </div>
                                    <div class="col-md-11 col-sm-11 deliver-info-text">{{$data->task->from}}</div>
                                </div>
                                <div class="vertical-dotted-line" style="margin-left: 14px;margin-top: -5px;"></div>
                                <div style="margin-left: 22px;margin-top: 10px;">
                                    <div class="row">
                                        <div class="circle-div"></div>
                                        <div class="col-md-11 col-sm-11 deliver-info-dest">{{$data->task->to}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group w-100">
                            <label for="exampleInputEmail1" class="label-title">Payment method</label>
                            <div class="row pl-3 paymentCls">

                                    {{-- <label for="checboxVisa" class="d-flex justify-content-between align-items-center">
                                        <input type="checkbox"  name="test" value="small" style="position: absolute; margin-left: 25px;" id="checboxVisa">
                                        <div class="payment-checkbox" style="padding-left: 50px">
                                            <img src="{{ asset('frontend/assets/images/Icons/stripe.svg') }}" alt="" width="100" height="auto" style="margin-top: 10px">
                                        </div>
                                    </label> --}}

                                    <label for="checboxStrip" class="d-flex justify-content-between align-items-center">
                                        <input type="checkbox" checked name="test" value="small" style="position: absolute; margin-left: 25px;" id="checboxStrip">
                                        <div class="payment-checkbox" style="padding-left: 50px">
                                            <img src="{{ asset('frontend/assets/images/Icons/stripe.svg') }}" alt="" width="100" height="auto" style="margin-top: 10px">
                                        </div>
                                    </label>

                                    <label for="checboxPendu" id="checboxPendu-coming" class="d-flex justify-content-between align-items-center">
                                        <input type="checkbox" name="test" value="small" style="position: absolute; margin-left: 25px;" id="checboxPendu" title="Comming Soon" disabled>
                                        <div class="payment-checkbox" style="padding-left: 50px" title="Comming Soon">
                                            <img src="{{ asset('frontend/assets/images/Icons/pandupay.png') }}" alt=""   style="margin-top: 30px;padding-left: 8px;height: 34px;">
                                            <p style="padding-left: 31px;margin-top: -30px;font-weight: 500;">PenduPay</p>
                                        </div>
                                    </label>
                                    {{-- <label for="checboxMasterCard" class="d-flex justify-content-between align-items-center">
                                        <input type="checkbox" name="test" value="small" style="position: absolute; margin-left: 25px;" id="checboxMasterCard">
                                        <div class="payment-checkbox" style="padding-left: 50px">
                                            <img src="{{ asset('frontend/assets/images/Icons/mastercard.svg') }}" alt="" width="100" height="auto">
                                        </div>
                                    </label> --}}
                                </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="pr-5"></div>
            <div class="col-md-3 col-sm-12 payment-summary float-right pt-3 pb-3">
                <div>
                    <table class="table table-borderless border-0">
                        <tr>
                            <td class="text-left">Subtotal</td>
                            <td class="text-right">${{$data->task->total_cost}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Delivery fee offer</td>
                            <td class="text-right">${{$data->amount}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Service fee({{$service_fee}}%)</td>
                            <!-- <td class="text-right">${{ number_format((($data->task->total_cost/100) * $service_fee), 2) }}</td> -->
                       
                            <td class="text-right">${{ $service_fee_amount }}</td>
                        </tr>
                    

                        <tr id="promo-code-amount-tr">
                            <td class="text-left">Promo code</td>
                            <td id="promo-code-amount" class="text-right">$0</td>
                        </tr>
                        <tr id="promo-code-show-tr">
                            <td class="text-left" colspan="2">
                                <span id="promo-code-show" style="
                                        color: #fff;
                                        background: #60e99c;
                                        padding: 2px 7px;
                                        border-radius: 15px;
                                        font-size: 13px;
                                        font-weight: 600;
                                        margin-top: -20px;
                                        display: inline-block;
                                        text-align: center;"
                                        >Hello Salman</span>
                            </td>
                        </tr>

                    </table>
                </div>

                <div class="input-group " id="coupon-apply-container">
                    <input type="text" id="coupon-apply-input" class="form-control bg-white border-right-0 promo-code-field" id="taskTitle" placeholder="Enter promo code">
                    <div class="input-group-append">
                        <span id="coupon-apply-btn" class="input-group-text bg-transparent border-left-0" style="border: 1px solid #60e99c;">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="9.749" height="15.114" viewBox="0 0 9.749 15.114">
                            <path id="Path_7539" data-name="Path 7539" d="M7077.18,886l8.1,6.8-8.1,7.178" transform="translate(-7076.682 -885.426)" fill="none" stroke="#90a0b2" stroke-width="1.5"/>
                            </svg> -->
                            Apply
                        </span>
                        
                    </div>
                    <span id="coupon-apply-msg"></span>
                </div>
                <div>
                    <button type="button" id="picupModalBtn" class="button text-white" style="margin-top: 15px;width: 100%;" style="padding-bottom: 15px" data-toggle="modal" data-target="#paymentMethodTransaction">Proceed</button>
              
                        <h5 class="text-center mt-4 pb-4" id="grand-total">${{$grand_total}}</h5>       
                    
                </div>
                <div class="payment-procced-nb mt-3">
                    Your funds will be securely held in "Pendu Pay" until the task is done.
                </div>
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
            <form action="{{ route('user.payment-process', ['offerId'=> $data->id, 'taskId'=>  $data->task_id]) }}" method="post" id="payment-form">

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



@if (session()->has('success'))
{{-- payment confirm modal --}}
<div class="confirm-modal-block">
        <div class="hello-salman-modal">
        <div class="modal-content">

            <div style="background: #60e99c;height: 8px;">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                    <a data-toggle="modal" data-target="#taskProcessModal" style="cursor: pointer;">
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






@include('User.component.task_process')

@include("User.payment.payment_release")
<script>
    //  $('#taskProcessModal').click(function() {
        // $('#paymentConfirmModalId').modal('hide');
    // })
</script>
<script>
    // $('.payment-checkbox"]').click(function(e) {
    //     $(".payment-checkbox input[type='checkbox']").find(':checked').addClass('payment-select-checkbox');
    //     console.log($(".payment-checkbox").find(':checked'))
    // })
    $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
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

        $('#paymentMethodTransaction').modal('hide');
        $('#paymentConfirmModalId').modal('show');
    }
    
</script>




<script>

$(document).ready(function(){


    $('#coupon-apply-btn').on('click',function(){

        let coupon = $('#coupon-apply-input').val();

        let url = '{{ route("user.apply-coupon", ":coupon") }}';
        url = url.replace(':coupon', coupon);
        if(coupon != ''){

        
            $.ajax({
                url: url,
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    if($.isEmptyObject(data) != null){

                        if(data.status){
                            // alert('Coupon is applied. WIll work after done admin panel')
                            $('#coupon-apply-msg').text('Promo code is applied.');
                            $('#coupon-apply-msg').css("color", "green");

                            $('#promo-code-show-tr').css("display", "inline-block");

                            $('#promo-code-show').text(data.data.promo_code);
                            $('#promo-code-amount').text("(-) $"+ data.data.promo_amount);
                            $('#grand-total').text("$"+ data.data.grandTotalPromo);


                            setTimeout(function(){
                                $('#coupon-apply-msg').empty();
                                // $('#coupon-apply-input').val('');
                                $('#coupon-apply-container').css('display','none');
                            }, 2000)
                        }else{

                            $('#coupon-apply-msg').empty();
                            $('#coupon-apply-msg').text(data.msg);
                            $('#coupon-apply-msg').css("color", "red");

                            setTimeout(function(){
                                $('#coupon-apply-msg').empty();
                                // $('#coupon-apply-input').val('');

                            }, 2000)
                        }
                        
                    }
                }
            });
        } else {
            $('#coupon-apply-msg').text('Please apply a coupon.');
            $('#coupon-apply-msg').css("color", "red");
            setTimeout(function(){
                $('#coupon-apply-msg').empty();
            }, 3000)
        }
        // $('#offer_show_modal').modal('toggle');
        // let offerLi = driverOfferItem();
        // $('.offer_show_modal_ul').append(offerLi);
    });
});


</script>




@endsection
