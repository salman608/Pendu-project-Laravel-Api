@extends('User.Asset')
@section('user_content')
<style>
    input[type="text"] {
    background: #f1f1f1;
    border:none;
    outline: none;
}
select {
    background-color: #f1f1f1!important;
    -webkit-appearance: none;
    -moz-appearance: none;
}


select.select-box {
    background-image:
        linear-gradient(45deg, transparent 50%, #8f8f8f 50%),
        linear-gradient(135deg, #8f8f8f 50%, transparent 50%);
    background-position:
        calc(100% - 20px) calc(1em + 2px),
        calc(100% - 15px) calc(1em + 2px),
        100% 0;
    background-size:
        5px 5px,
        5px 5px,
        2.5em 2.5em;
    background-repeat: no-repeat;
}
.cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}

.cc-selector-2 input{
    position:absolute;
    z-index:999;
}

.car{
    background-image:url({{ asset('frontend/assets/images/Icons/car.svg') }});
}
.ute{
    background-image:url({{ asset('frontend/assets/images/Icons/ute.svg') }});
}
.van{
    background-image:url({{ asset('frontend/assets/images/Icons/van.svg') }});
}
.truck{
    background-image:url({{ asset('frontend/assets/images/Icons/truck.svg') }});
}

.cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:100px;height:70px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}

/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
p{margin-bottom:.3em;}
/* * { font-family:monospace; } */
.cc-selector-2 input{ margin: 5px 0 0 12px; }
.cc-selector-2 label{ margin-left: 7px; }
span.cc{ color:#6d84b4 }


.mover-from-address {
    margin-left: 23px;
    margin-top: -32px;
}

/* //price style */
#pprice{
    border:1px solid #2cee8a;
    border-radius: 4px;
    /* margin-left: 60px; */
    width: 150px;
    display: inline-block;
}
#pname{
    border:1px solid #2cee8a;
    border-radius: 4px;
    display: inline-block;
}
</style>
<section class="">
    <div style="height: 120px; background: #5bdb98"></div>
    <div class="container" style="margin-top: -60px;">
        <span class="font-weight-bold" id="titleId">Mover</span>
        <div class="row" style="background: #fff; box-shadow: 0px 3px 6px rgba(0, 0, 0, 13);height: 80px;border-radius: 10px;">
            <div class="d-flex justify-content-center" style="width: 80%;align-items: center;margin: auto;
            ">
                <div class="step-line">
                    <div class="bg-done-first-step">
                        <small class="step-line-text">Task Details</small>
                        <img class="task-img" src="{{ asset('frontend/assets/images/Icons/task white.svg') }}" alt="">
                    </div>
                    {{-- <div>
                        <small class="step-line-text">Timeframe</small>
                        <img class="task-img" src="{{ asset('frontend/assets/images/Icons/time.svg') }}" alt="">
                    </div> --}}
                    <div>
                        <small class="step-line-text" style="margin-left: -40px;">Review & Submit</small>
                        <img class="task-img" src="{{ asset('frontend/assets/images/Icons/tik.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="border-radius: 10px; bacground: #fff;box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.6); padding: 25px 40px 25px 40px;margin-top: 30px;margin-bottom: 30px;">
        <form enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="category_id" value="3">

            <div id="task-details">
                <div class="form-row">
                    <div class="float-left"><label for="exampleInputEmail1" class="label-title mr-5">Vahicle Type-</label></div>
                    <div class="cc-selector">
                        <div class="row">
                            <div class="col">
                                <input id="car" type="radio" name="vahicle_type" value="car" checked />
                                <label class="drinkcard-cc car" for="car"></label>
                            </div>
                            <div class="col">
                                <input id="ute" type="radio" name="vahicle_type" value="ute" />
                                <label class="drinkcard-cc ute" for="ute"></label>
                            </div>
                            <div class="col">
                                <input id="van" type="radio" name="vahicle_type" value="van" />
                                <label class="drinkcard-cc van" for="van"></label>
                            </div>

                            <div class="col">
                                <input id="truck" type="radio" name="vahicle_type" value="truck" />
                                <label class="drinkcard-cc truck" for="truck"></label>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="taskTitle" class="label-title">Task title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter your title here" style="outline: none" name="title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="label-title">Products</label>&ensp;
                    <small style="color: #ffdaa5">(Please Provide clear name & details if you have it. You''ll receive  photos of the items once shopper begin the shopping.)</small>
                    <div class="products-box">
                        <table class="table table-borderless border-top-0">
                            <tbody>
                                <tr class="top border-bottom border-light">
                                    <td><div class="circle"></div></td>
                                    <td><input class="form-control" type="text" name="pro_name[]" id="pname" placeholder="Enter Product Name..."></td>
                                    <td><span class="plus-minus-sign cursor-pointer minus" id="minus"> - </span> <span id="totalProduct" style="color: #56cd93;font-weight: bold;">1</span> <span class="plus-minus-sign cursor-pointer plus" id="plus"> + </span></td>
                                    <td class="text-right"> <input type="text" id="pprice" name="pro_price[]" class="form-control" placeholder="Price.."></td>
                                    <td colspan="4" class="text-right"><button type="button" class="btn btn-success plus-button" id="add_btn">+</button></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-lg-6 col-md-6">
                        <label for="shop_address" class="label-title">Pickup address</label>
                        <div class="input-group">
                            <input id="shop_address" class="form-control input-group-lg" type="text" name="shop_address"
                               title="Enter your pickup address"
                               placeholder="Enter your pickup address"/>
                            <div class="input-group-append cursor-pointer">
                                <span class="input-group-text border-0 pickupModal"  data-toggle="modal" data-target="#googleMapPicupModal" id="pickupSpanId">
                                    <img src="{{ asset('frontend/assets/images/Icons/location.svg') }}" alt="" width="20" height="auto">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <label for="delivery_address" class="label-title">Delivery address</label>
                        <div class="input-group">
                            <input id="delivery_address" class="form-control input-group-lg" type="text" name="delivery_address"
                               title="Enter your delivery address"
                               placeholder="Enter your delivery address"/>
                            <div class="input-group-append cursor-pointer">
                                <span class="input-group-text border-0 deliveryModal"  data-toggle="modal" data-target="#googleMapDeliveryModal" id="deliverySpanId">
                                    <img src="{{ asset('frontend/assets/images/Icons/location green.svg') }}" alt="" width="20" height="auto">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="form-group nb-mover" style="border-color: #60e99c!important;border-style: dashed; height: 40px!important;">
                      <label for="task_image" style="width: 100%">
                        <div class="row">
                            <div class="col-md-6 col-6 col-sm-6 col-lg-6" style="padding-top: 8px;">
                                <small>Add photos to the task (Optional)</small>
                            </div>
                            <div class="col-md-6 col-6 col-sm-6 col-lg-6 d-flex justify-content-end">
                                <svg style="height: 30px;width: 30px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34.025" height="38.645" viewBox="0 0 34.025 38.645">
                                    <defs>
                                      <clipPath id="clip-path">
                                        <rect width="34.025" height="38.645" fill="none"/>
                                      </clipPath>
                                      <clipPath id="clip-path-2">
                                        <rect id="Rectangle_2496" data-name="Rectangle 2496" width="26.417" height="26.417" fill="#90a0b2"/>
                                      </clipPath>
                                    </defs>
                                    <g id="Repeat_Grid_7" data-name="Repeat Grid 7" clip-path="url(#clip-path)">
                                      <g id="Group_2968" data-name="Group 2968" transform="translate(-315.975 -654.826)">
                                        <g id="Group_1429" data-name="Group 1429" transform="translate(315.975 667.054)">
                                          <g id="Group_1428" data-name="Group 1428" clip-path="url(#clip-path-2)">
                                            <path id="Path_5969" data-name="Path 5969" d="M20.253,22.894H.881A.881.881,0,0,1,0,22.013V.88A.881.881,0,0,1,.881,0H20.253a.881.881,0,0,1,.881.881V22.013a.881.881,0,0,1-.881.881M1.761,21.133H19.372V1.76H1.761Z" transform="translate(0 0.001)" fill="#90a0b2"/>
                                            <path id="Path_5970" data-name="Path 5970" d="M62.342,50.954H42.969a.881.881,0,0,1,0-1.761H61.461V29.82h-.88a.881.881,0,0,1,0-1.761h1.761a.881.881,0,0,1,.881.881V50.073a.881.881,0,0,1-.881.881" transform="translate(-36.806 -24.537)" fill="#90a0b2"/>
                                            <path id="Path_5971" data-name="Path 5971" d="M.937,96.51a.876.876,0,0,1-.616-1.5L3.887,91.35a2.351,2.351,0,0,1,3.064-.255l3.161,2.289a.6.6,0,0,0,.775-.07l3.258-3.276a2.422,2.422,0,0,1,3.364,0L20.926,93.5a.881.881,0,0,1-1.25,1.233l-3.417-3.461a.608.608,0,0,0-.859-.021l-.022.021-3.267,3.3a2.36,2.36,0,0,1-3.064.264L5.886,92.548a.589.589,0,0,0-.775.062L1.563,96.246a.88.88,0,0,1-.625.264" transform="translate(-0.057 -78.142)" fill="#90a0b2"/>
                                            <path id="Path_5972" data-name="Path 5972" d="M65.6,34.122A3.522,3.522,0,1,1,69.125,30.6,3.522,3.522,0,0,1,65.6,34.122m0-5.283A1.761,1.761,0,1,0,67.364,30.6,1.761,1.761,0,0,0,65.6,28.838" transform="translate(-54.288 -23.678)" fill="#90a0b2"/>
                                          </g>
                                        </g>
                                        <text id="_" data-name="+" transform="translate(343 675.826)" fill="#60e99c" font-size="22" font-family="Montserrat-Medium, Montserrat" font-weight="500"><tspan x="-6.402" y="0">+</tspan></text>
                                      </g>
                                    </g>
                                  </svg>
                            </div>
                        </div>
                          <input type="file" name="task_image" id="task_image" class="d-none">
                      </label>
                  </div>
            </div>

            <div id="timeFrameDiv" style="">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="label-title mt-3">Deliver Time</label>
                    <div class="row">
                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time" id="asap" value="ASAP" checked>
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/ASAP Black.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="asap">ASAP</label>
                                </div>
                            </label>
                        </div>

                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time" value="4 HRS" id="hrs4">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/4hours.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="hrs4">4Hrs</label>
                                </div>
                            </label>
                        </div>

                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time" value="6 HRS" id="hrs6">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/6hours.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="hrs6">6Hrs</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time" value="Same Day" id="sameDay">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/same day.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="sameDay">Same<br>day</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time" value="Next Day" id="nextDay">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/next day.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="nextDay">Next<br>day</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-0">
                            <label>
                                <input type="radio" name="delivery_time" value="Set Later" id="setLater">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/set latter.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="setLater">Set<br>later</label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="taskDetails" style="display: none;">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="label-title mr-5" >Vahicle Type-</label>
                    <svg id="Group_2933" data-name="Group 2933" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64.418" height="39.833" viewBox="0 0 64.418 39.833">
                        <defs>
                          <clipPath id="clip-path">
                            <rect id="Rectangle_2484" data-name="Rectangle 2484" width="64.418" height="39.833" fill="none"/>
                          </clipPath>
                        </defs>
                        <g id="Group_1403" data-name="Group 1403" clip-path="url(#clip-path)">
                          <path id="Path_5901" data-name="Path 5901" d="M64.418,193.123c0,1.169-14.42,2.117-32.209,2.117S0,194.292,0,193.123s14.42-2.117,32.209-2.117,32.209.948,32.209,2.117" transform="translate(0 -155.406)" fill="#e6e7e8"/>
                          <path id="Path_5902" data-name="Path 5902" d="M37.109,139.577H31.823A1.331,1.331,0,0,0,30.5,140.9v9.624a1.331,1.331,0,0,0,1.327,1.327h5.285a1.331,1.331,0,0,0,1.327-1.327V140.9a1.331,1.331,0,0,0-1.327-1.327" transform="translate(-24.812 -113.563)"/>
                          <path id="Path_5903" data-name="Path 5903" d="M279.145,139.577h-5.285a1.331,1.331,0,0,0-1.327,1.327v9.624a1.331,1.331,0,0,0,1.327,1.327h5.285a1.331,1.331,0,0,0,1.327-1.327V140.9a1.331,1.331,0,0,0-1.327-1.327" transform="translate(-221.737 -113.563)"/>
                          <path id="Path_5904" data-name="Path 5904" d="M77.605,28.16V21.515c0-5.293-3.9-8.4-6.23-9.782l.8-.854a2.231,2.231,0,0,0,1.726.557c1.849,0,3.348-.94,3.348-2.1s-1.5-2.1-3.348-2.1c-1.677,0-2.1.775-2.165,1.784a4.134,4.134,0,0,1-1.261,2.216c-.255-.129-.462-.226-.6-.287A32.68,32.68,0,0,0,62.648.525a182.089,182.089,0,0,0-27.225,0C31.961,2.79,29.671,8.26,28.706,10.976c-.136.061-.319.147-.54.259a4.134,4.134,0,0,1-1.261-2.216c-.064-1.009-.488-1.784-2.165-1.784-1.849,0-3.348.94-3.348,2.1s1.5,2.1,3.348,2.1a2.23,2.23,0,0,0,1.726-.557l.8.854c-2.335,1.386-6.23,4.49-6.23,9.782V28.16s-.387,4.456,6.2,4.456H71.406c6.587,0,6.2-4.456,6.2-4.456" transform="translate(-17.111 0)" fill="#56cd93"/>
                          <path id="Path_5905" data-name="Path 5905" d="M73.695,17.654c1.037-2.523,2.8-6.028,5.142-7.735,1.43-.107,7.016-.492,13.856-.492,4.453,0,8.591.161,12.309.477a32.027,32.027,0,0,1,5.641,7.75Z" transform="translate(-59.96 -7.67)"/>
                          <path id="Path_5906" data-name="Path 5906" d="M128.452,9.629l8.028,8.028h8.727l-8.226-8.226c-3.24,0-6.187.094-8.529.2" transform="translate(-104.511 -7.673)" fill="#24323a"/>
                          <path id="Path_5907" data-name="Path 5907" d="M45.35,95.72a3.058,3.058,0,1,1-3.058-3.058A3.058,3.058,0,0,1,45.35,95.72" transform="translate(-31.921 -75.392)" fill="#eef0f3"/>
                          <path id="Path_5908" data-name="Path 5908" d="M279.694,95.72a3.058,3.058,0,1,1-3.058-3.058,3.058,3.058,0,0,1,3.058,3.058" transform="translate(-222.588 -75.392)" fill="#eef0f3"/>
                          <path id="Path_5909" data-name="Path 5909" d="M99.877,104.451H127.05s.538,5.2-4.932,5.2H104.9s-5.022-.179-5.022-5.2" transform="translate(-81.262 -84.983)"/>
                          <path id="Path_5910" data-name="Path 5910" d="M77.605,116.857v-6.645c0-.344-.022-.676-.053-1a14.7,14.7,0,0,1-12,6.41h-32.3a14.751,14.751,0,0,1-12.14-6.6,10.316,10.316,0,0,0-.073,1.2v6.645s-.387,4.456,6.2,4.456H71.406c6.587,0,6.2-4.456,6.2-4.456" transform="translate(-17.111 -88.698)" fill="#4cb08a"/>
                        </g>
                      </svg>
                </div>

                <div class="task-details-timeframe" style="padding-left: 30px;padding-top: 8px;">
                    <div>
                        <img src="{{ asset('frontend/assets/images/Icons/location green.svg') }}" alt="" height="39" width="30">
                        <span style="margin-left: 20px;color: #8f8f8f" class="shopAddress" id="shopAddress">3/A Jadobpur, Abdul Goli, MD Pur, Dhaka, Abdul Goli, MD Pur, Dhaka</span>
                    </div>
                    <div class="vertical-dotted-line" style="margin-left: 14px;margin-top: -5px;"></div>
                    <div style="margin-left: 22px;margin-top: -5px;">
                        <div class="row">
                            <div class="circle-div"></div>
                            <div style="margin-left: 30px;margin-top: -5px;color: #8f8f8f" class="deliveryAddress" id="deliveryAddress">2103 N Main St, Highlands, TX, 77562</div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="label-title">Deliver Time</label>
                    <div class="row">
                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time_review" id="asap" value="ASAP" checked>
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/ASAP Black.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="asap">ASAP</label>
                                </div>
                            </label>
                        </div>

                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time_review" value="4 HRS" id="hrs4">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/4hours.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="hrs4">4Hrs</label>
                                </div>
                            </label>
                        </div>

                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time_review" value="6 HRS" id="hrs6">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/6hours.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="hrs6">6Hrs</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time_review" value="Same Day" id="sameDay">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/same day.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="sameDay">Same<br>day</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time_review" value="Next Day" id="nextDay">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/next day.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="nextDay">Next<br>day</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-0">
                            <label>
                                <input type="radio" name="delivery_time_review" value="Set Later" id="setLater">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/set latter.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="setLater">Set<br>later</label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
          </form>
    </div>
    <div class="text-center" id="nextButton">
        <a class="button-outline mr-2">Close</a>
        <a class="button text-white" data-toggle="modal" data-target="#googleMapModal">Next</a>
    </div>
    <div class="text-center" id="reviewButtons" style="display: none">
        <a class="button-outline backButtonCls" id="backButtonId">Back</a>
        <a class="button text-white reviewButtonCls" id="reviewButtonId">Review</a>
    </div>
    <div class="text-center" id="postButtonId" style="display: none">
        <a class="button text-white" id="postSubmitButtonId">Post Delivery Request</a>
    </div>
    <br><br>
</section>

{{-- data-toggle="modal" data-target="#postMoverModal" --}}

@include("User.component.googleMap_pickup_modal")
@include("User.component.googleMap_delivery_modal")
@include("User.component.post_mover")

<script>

$(document).ready(function(){
    $('#add_btn').on('click',function(){
        var html='';
        html+='<tr>';
        html+='<td><div class="circle"></div></td>';
        html+=' <td><input class="form-control" type="text" name="pro_name[]" id="pname" placeholder="Enter Product Name..."></td>';
        html+='<td><span class="plus-minus-sign cursor-pointer minus" id="minus"> - </span> <span id="totalProduct" style="color: #56cd93;font-weight: bold;">1</span> <span class="plus-minus-sign cursor-pointer plus" id="plus"> + </span></td>';
        html+='<td  class="text-right"> <input type="text" id="pprice" name="pro_price[]" class="form-control" placeholder="Price.."></td>';
        html+='<td class="text-right"><button type="button" class="cross-button" id="remove">+</button></td>';
        html+='</tr>';
        $('tbody').append(html);
    });
});
//Remove product
    $(document).on('click','#remove',function(){
        $(this).closest('tr').remove();
    });

    $('#nextButton').click(function(){
        if ($('#title').val() == '') {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Title is required.",
            })
        }
        else if ($('#shop_address').val() == '') {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Shop address is required.",
            })
        }
        else if ($('#delivery_address').val() == '') {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Delivery address is required.",
            })
        }
        else {
            $('#nextButton').hide();
            $('#task-details').hide();
            $('#postButtonId').show();
            // $('#titleId').text('Review');
            $('#timeFrameDiv').hide();
            $('#taskDetails').show();

            // myMap()

        var deliverTime = $('input:radio[name="delivery_time"]:checked').val();
        $("input:radio[name=delivery_time_review][value='" + deliverTime + "']").prop('checked', true);
        $('#ItemCost').val($('#item_cost').val());
        $('#shopAddress').text($('#shop_address').val());
        $('#deliveryAddress').text($('#delivery_address').val());

        }
    });

</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2oTSGJA5OrDmMtcxaS7aP8HjZITxaYx0&callback=myMap"></script> --}}
<script>

    $('#postSubmitButtonId').click(function() {
        $('form').submit();
    })

    $('form').submit(function (event) {
        event.preventDefault();
        $('#postSubmitButtonId').attr('disabled', 'disabled');

        $.ajax({
                url: "{{ route('task.add') }}",
                type: 'POST',
                dataType: 'json',
                contentType: false,
                processData: false,
                data: new FormData(this),
            })
            .done(function (response) {

                if (response.alertType == 'error') {
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.message,
                    });

                } else {

                    $('#postMoverModal').modal('show');
                    $('form').trigger("reset");

                    setTimeout(function () {
                        window.location = './'
                    }, 3000);
                }

                $('#postSubmitButtonId').prop('disabled', false);

            })
            .fail(function (error) {

                if (error.responseJSON) {
                    let errorText = ''
                    for (const [key, value] of Object.entries(error.responseJSON.errors)) {
                        errorText += value + '. ';
                    }

                    swal({
                        icon: 'info',
                        title: 'Oops...',
                        text: errorText,
                    });
                }

                $('#postSubmitButtonId').prop('disabled', false);
            })
            .always(function () {
                console.log("complete");
            });
    });

</script>
@endsection
