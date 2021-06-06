@extends('User.Asset')
<style>
    input[type="text"] {
        background: #f1f1f1;
        border:none;
        outline: none;
    }
    .qty{
    text-align: center !important;
   }
  .plus-button{
    font-weight: bold;
    width: 70px;
   }
</style>

@section('user_content')
<section class="">
    <div style="height: 120px; background: #5bdb98"></div>
    <div class="container" style="margin-top: -60px;">
        <span class="font-weight-bold" id="titleId">Collect And Drop</span>
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
        <form id="collectDeliveryForm">
        @csrf
        <input type="hidden" name="category_id" value="2">
        <input type="hidden" name="vahicle_type" value="car">

            <div id="task-details">
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
                <div class="form-group">
                    <label for="procat_id" class="label-title">Categories</label>
                    <select multiple class="selectpicker w-100" id="procat_id" name="product_cats[]">
                        @foreach ($product_cats as $p_cat)
                            <option value="{{ $p_cat->id  }}">{{$p_cat->title}}</option>
                        @endforeach
                    </select><!-- End -->
                  </div>
                  <div class="form-group">
                    <label for="taskTitle" class="label-title">Task title</label>
                    <input type="text" class="form-control" id="taskTitle" name="title" placeholder="Enter your title here" style="outline: none">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1" class="label-title">Products</label>&ensp;
                    <small style="color: #56cd93">(Please Provide clear name & details if you have it. You''ll receive  photos of the items once shopper begin the shopping.)</small>
                    <div class="products-box">
                        <table class="table table-borderless border-top-0">
                            <tbody>
                                <tr class="top border-bottom border-light" id="tableRow_1">
                                    <td><div class="circle"></div></td>
                                    <td><input class="form-control" type="text" name="pro_name[]" id="pname" placeholder="Enter Product Name..."></td>
                                    <td class="qty">
                                           <span class="minus" style="background: #8f8f8f">-</span>
                                           <input type="number" class="count" name="qty[]" value="1">
                                           <span class="plus" style="background: #8f8f8f">+</span>
                                      </td>
                                    <td class="text-right"> <input type="text" id="pprice" name="pro_price[]" class="form-control" placeholder="Unit Price.."></td>
                                    <td class="text-right"><button type="button" class="cross-button" id="remove"></button>
                                </tr>
                            </tbody>
                            <tfoot >
                                  <tr >
                                      <td colspan="5" class="text-center">
                                          <button type="button" class="btn btn-success plus-button" id="add_btn">+</button>
                                      </td>
                                  </tr>
                            </tfoot>
                            <thead>
                            </thead>
                        </table>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="additional_note" class="label-title">Additional notes</label>

                    <textarea id="additional_note" class="form-control input-group-lg bg-input-orange" name="additional_note" title="Enter your total cost of the items" placeholder="Enter your total cost of the items" required ></textarea>
                </div>

                    <div class="form-group">
                        <label for="productCost" class="label-title">Product cost</label>
                        <input id="productCost" class="form-control input-group-lg" type="text" name="product_cost" style="padding-left: 35px;"
                            title="Enter your total cost of the items"
                            placeholder="Enter your total cost of the items"/>
                        <svg class="dollar-sign" xmlns="http://www.w3.org/2000/svg" width="18" height="33" viewBox="0 0 18 33">
                            <text id="_" data-name="$" transform="translate(9 26)" fill="#5bdb98" font-size="27" font-family="Montserrat-Medium, Montserrat" font-weight="500"><tspan x="-8.384" y="0">$</tspan></text>
                        </svg>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="shop_address" class="label-title">Enter shops/Pickup address</label>
                            <div class="input-group">
                                <input id="shop_address" class="form-control input-group-lg" type="text" name="shop_address"
                                   title="Enter your pickup address"
                                   placeholder="Enter your pickup address"/>
                                <div class="input-group-append cursor-pointer">
                                    <span class="input-group-text border-0 pickupModal" data-toggle="modal" data-target="#googleMapPicupModal" id="pickupSpanId">
                                        <img src="{{ asset('frontend/assets/images/Icons/location.svg') }}" alt="" width="20" height="auto">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="delivery_address" class="label-title">Enter delivery address</label>
                            <div class="input-group">
                                <input id="delivery_address" class="form-control input-group-lg" type="text" name="delivery_address"
                                   title="Enter your delivery address"
                                   placeholder="Enter your delivery address"/>
                                <div class="input-group-append cursor-pointer">
                                    <span class="input-group-text border-0 deliveryModal" data-toggle="modal" data-target="#googleMapDeliveryModal" id="deliverySpanId">
                                        <img src="{{ asset('frontend/assets/images/Icons/location green.svg') }}" alt="" width="20" height="auto">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

            <div id="timeFrameDiv" style="">

                <div class="form-group">
                    <label for="exampleInputEmail1" class="label-title">Delivery Time</label>
                    <div class="row">
                        @foreach ($delivery_times as $d_time)
                        <div class="pr-2" >
                            <label >
                                <input type="radio" name="delivery_time"  value="{{$d_time->id}}" >
                                <div style="width: 180px;">
                                    <img src="{{ asset('frontend/assets/images/Icons/ASAP Black.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text delivery_time_checker" style="margin-top: 16px;margin-right: 6px;" for="asap" >{{$d_time->title}}</label>
                                </div>
                            </label>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="form-group text-center nb-mover">
                    <small>No Purchases - Dropper would not be able to make any purchase. Restricted/Illegal Item - Please don’t hand over any  restricted item.</small>
                </div>
            </div>

            <div id="taskDetails" style="display: none;">
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
                    <label for="exampleInputEmail1" class="label-title mt-3">Delivery Time</label>
                    <div class="row">
                        @foreach ($delivery_times as $d_time )
                        <div class="pr-2">
                            <label>
                                <input type="radio" value="{{$d_time->id}}" name="delivery_time_review" id="asap" disabled>
                                <div style="width: 180px;">
                                    <img src="{{ asset('frontend/assets/images/Icons/ASAP Black.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="asap">{{$d_time->title}}</label>
                                </div>
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
          </form>
    </div>
    <div class="text-center" id="nextButton">
        <a class="button-outline mr-2">Close</a>
        <a class="button text-white">Next</a>
    </div>
    <div class="text-center" id="reviewButtons" style="display: none">
        <a class="button-outline backButtonCls" id="backButtonId">Back</a>
        <a class="button text-white reviewButtonCls" id="reviewButtonId">Review</a>
    </div>
    <div class="text-center" id="postButtonId" style="display: none">
        <a class="button text-white" id="postSubmitButtonId">Post Delivery Request</a>
    </div><br><br>
</section>

{{-- data-toggle="modal" data-target="#deliveryProcessModal" --}}

@include("User.component.googleMap_pickup_modal")
@include("User.component.googleMap_delivery_modal")
@include("User.component.post_delivery")

<script>

//======product and price ======
$(document).ready(function(){


// Add another Product field
$('#add_btn').on('click',function(){
    let html='';
    html+='<tr>';
    html+='<td><div class="circle"></div></td>';
    html+=' <td><input class="form-control" type="text" name="pro_name[]" id="pname" placeholder="Enter Product Name..."></td>';
    html+='<td class="qty"> <span class="minus" style="background: #8f8f8f">-</span>  <input type="number" class="count" name="qty" value="1">  <span class="plus" style="background: #8f8f8f">+</span></td>';
    html+='<td  class="text-right"> <input type="text" id="pprice" name="pro_price[]" class="form-control" placeholder="Unit Price.."></td>';
    html+='<td class="text-right"><button type="button" class="cross-button" id="remove"></button></td>';
    html+='</tr>';
    $('tbody').append(html);
});

// remove product field
$(document).on('click','#remove',function(){
    $(this).closest('tr').remove();
});

// Select Delivery Time based on 2nd Lable
$('.delivery_time_checker').click(function(){

    let label = $('.delivery_time_checker').parents("label");
    label.children().prop("checked", true);
});

});

// quantity count
$(document).ready(function(){
    $('.count').prop('disabled', true);
       $(document).on('click','.plus',function(){
        //    console.log($(this).siblings('input').val());
       var countInput = $(this).siblings('input');
        $(countInput).val(parseInt(countInput.val()) + 1 );
    });
    $(document).on('click','.minus',function(){
        // console.log($(this).siblings('input').val());
        var countMinus = $(this).siblings('input');
        $(countMinus).val(parseInt(countMinus.val()) - 1 );
            if ($(countMinus).val() == 0) {
                $(countMinus).val(1);
            }
        });
 });

    $('#nextButton').click(function(){
        if ($('#title').val() == '') {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Title is required.",
            })
        }
        else if ($('#product_cost').val() == '') {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Product cost is required.",
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
{{-- <script src="https://maps.googleapis.com/maps/api/js"></script> --}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDe9wIv3EiEy0aH3YTSRRZP8eRNbitATDo&libraries=places"></script>
<script>
        // Maps

        let options = {
        // types: ['(cities)',],
        componentRestrictions: { country: "bd" },
    }
    centeredLatLng = { lat: 23.810332, lng: 90.4125181 }

    let shop_address_marker;
    var shop_address = { address: '', lat: '', lng: '' };
    var shop_address_modal = { address: '', lat: '', lng: '' };
    let shop_address_input = document.getElementById("shop_address");
    let auto_shop_address = new google.maps.places.Autocomplete(shop_address_input, options);
    let shop_address2_input = document.getElementById("shop_address2");

    let delivery_address_marker;
    var delivery_address = { address: '', lat: '', lng: '' };
    var delivery_address_modal = { address: '', lat: '', lng: '' };
    let delivery_address_input = document.getElementById("delivery_address");
    let auto_delivery_address = new google.maps.places.Autocomplete(delivery_address_input, options);
    let delivery_address2_input = document.getElementById("delivery_address2");

    auto_shop_address.addListener("place_changed", () => {
        shop_address.address = shop_address_input.value;

        let place = auto_shop_address.getPlace();
        shop_address.lat = place.geometry.location.lat();
        shop_address.lng = place.geometry.location.lng();
    });

    auto_delivery_address.addListener("place_changed", () => {
        delivery_address.address = delivery_address_input.value;

        let place = auto_delivery_address.getPlace();
        delivery_address.lat = place.geometry.location.lat();
        delivery_address.lng = place.geometry.location.lng();
    });

$(".pickupModal").click(function() {

// New map
let map = new google.maps.Map(document.getElementById("googleMap"), {
    zoom: 7,
    center: centeredLatLng,
    disableDefaultUI: true,
    // mapTypeId: google.maps.MapTypeId.ROADMAP,
});

let auto_shop_address2 = new google.maps.places.Autocomplete(shop_address2_input, options);
// console.log(auto_shop_address2.val());

auto_shop_address2.addListener("place_changed", () => {
    let place = auto_shop_address2.getPlace();
    let latitude = place.geometry.location.lat();
    let longitude = place.geometry.location.lng();

    shop_address_modal.address = shop_address2_input.value;
    shop_address_modal.lat = latitude;
    shop_address_modal.lng = longitude;

    // ShowLocationOnTheMap(
    //     map,
    //     place.geometry.location.lat(),
    //     place.geometry.location.lng()
    // );

    // Remove old marker
    if(typeof shop_address_marker !== 'undefined' && shop_address_marker !== null) {
        shop_address_marker.setMap(null);
    }

    // Add Marker
    shop_address_marker = new google.maps.Marker({
        position: new google.maps.LatLng(latitude, longitude),
        map: map,
    });

    if (place.geometry.viewport) {
       map.fitBounds(place.geometry.viewport);
    }
});
});
$("#picupModalBtn").click(function() {

if(
    shop_address2_input.value == '' ||
    typeof shop_address_modal == 'undefined' ||
    shop_address_modal.address == '' ||
    shop_address_modal.lng == '' ||
    shop_address_modal.lat == ''
) {
    swal({
        icon: 'error',
        title: 'Oops...',
        text: "Shop/Pickup address is invalid. Try again.",
    });

    return;
}
    shop_address = shop_address_modal;
    shop_address_input.value = shop_address.address;
    $("#googleMapPicupModal").modal('hide');
});

$(".deliveryModal").click(function() {
        // New map
        let map = new google.maps.Map(document.getElementById("googleMapDelivery"), {
            zoom: 7,
            center: centeredLatLng,
            disableDefaultUI: true,
            // mapTypeId: google.maps.MapTypeId.ROADMAP,
        });

        let auto_delivery_address2 = new google.maps.places.Autocomplete(delivery_address2_input, options);

        auto_delivery_address2.addListener("place_changed", () => {
            let place = auto_delivery_address2.getPlace();
            let latitude = place.geometry.location.lat();
            let longitude = place.geometry.location.lng();

            delivery_address_modal.address = delivery_address2_input.value;
            delivery_address_modal.lat = latitude;
            delivery_address_modal.lng = longitude;

            // ShowLocationOnTheMap(
            //     map,
            //     place.geometry.location.lat(),
            //     place.geometry.location.lng()
            // );

            // Remove old marker
            if(typeof delivery_address_marker !== 'undefined' && delivery_address_marker !== null) {
                delivery_address_marker.setMap(null);
            }

            // Add Marker
            delivery_address_marker = new google.maps.Marker({
                position: new google.maps.LatLng(latitude, longitude),
                map: map,
            });

            if (place.geometry.viewport) {
               map.fitBounds(place.geometry.viewport);
            }
        });
    });


    $("#deliveryModalBtn").click(function() {

        if(
            delivery_address2_input.value == '' ||
            typeof delivery_address_modal == 'undefined' ||
            delivery_address_modal.address == '' ||
            delivery_address_modal.lng == '' ||
            delivery_address_modal.lat == ''
        ) {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Delivery address is invalid. Try again.",
            });

            return;
        }
        delivery_address = delivery_address_modal;
        delivery_address_input.value = delivery_address.address;

        $("#googleMapDeliveryModal").modal('hide');
    });

</script>
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
                data: $('form').serialize(),
            })
            .done(function (response) {

                if (response.alertType == 'error') {
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.message,
                    });

                } else {

                    $('#deliveryProcessModal').modal('show');
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
