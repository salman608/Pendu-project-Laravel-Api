@extends('User.Asset')
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

    /* .car{
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
    } */

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
    .car-selected, .drinkcard-cc:hover{
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
    <div class="container">

        @if (session()->has('error'))
            <div class="alert alert-danger mt-4" style="font-size: 22px;" role="alert">{{ session()->get('error') }}</div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success mt-4" style="font-size: 22px;" role="alert">{{ session()->get('success') }}</div>
        @endif

    </div>
    <div class="container" style="border-radius: 10px; bacground: #fff;box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.6); padding: 25px 40px 25px 40px;margin-top: 30px;margin-bottom: 30px;">
        <form method="POST" id="collect-n-drop-form" action="{{route('collect_n_drop.store')}}">
        @csrf
        <input type="hidden" name="category_id" value="2">
        <input type="hidden" name="vahicle_type" value="car">

            <div id="task-details">








            <div class="form-group">
                <div class="form-row" style="margin-top: -18px;">
                    <div class="float-left"><label for="exampleInputEmail1" class="label-title mr-5" style="margin-top: 20px;">Vahicle Type-</label></div>
                    <div class="cc-selector">
                        <div class="row">
                        @foreach ($vehicles as $vehicle)
                        <label class="drinkcard-cc" for="checboxStrip">
                           <div class="col form-check">
                                <input id="checboxStrip@php echo $vehicle->id @endphp" type="checkbox" name="vahicle_id" value="{{$vehicle->id}}"/>
                               <img src="{{ asset('frontend/assets/images/Icons/truck.svg') }}" alt="">
                            </div>
                        </label>

                        @endforeach

                        </div>
                    </div>
                </div>
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

                    <textarea id="additional_note" class="form-control input-group-lg bg-input-orange" name="additional_note"  placeholder="Enter additional notes" required ></textarea>
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
        <button class="button text-white" id="postSubmitButtonId">Post Delivery Request</button>
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


    
    // Car selection
    $(document).on('click','.drinkcard-cc',function(){

        $('.drinkcard-cc').removeClass("car-selected");

        $(this).toggleClass("car-selected");
        let inputCar = $(this).find("input");        
        inputCar.prop( "checked", true );
    });


</script>
<script>
    // Submission Button
    $('#postSubmitButtonId').click(function() {
        event.preventDefault();

        // Form
        var form = document.getElementById('collect-n-drop-form');

        var p_names  = $("input[name='pro_name[]']")
            .map(function(){return $(this).val();}).get();

        var p_prices  = $("input[name='pro_price[]']")
            .map(function(){return $(this).val();}).get();

        // "products"      : [
        //         {"name": "Pepsi 2L", "price": 150, "qty": 4},
        //         {"name": "Cake 2p", "price": 350, "qty": 2}
        // ]

        var products = p_names.map(function(name, index){
            let product = {name: name, price: p_prices[index], qty: 1};
            return product;
        });

        // hiddenProductsInput
        var hiddenProductsInput = document.createElement('input');
        hiddenProductsInput.setAttribute('type', 'hidden');
        hiddenProductsInput.setAttribute('name', 'products');
        hiddenProductsInput.setAttribute('value', JSON.stringify(products));
        form.appendChild(hiddenProductsInput);


        // hiddenShopAddressInput
        var hiddenShopAddressInput = document.createElement('input');
        hiddenShopAddressInput.setAttribute('type', 'hidden');
        hiddenShopAddressInput.setAttribute('name', 'shop_address');
        hiddenShopAddressInput.setAttribute('value', JSON.stringify(shop_address));
        form.appendChild(hiddenShopAddressInput);

        // hiddenDeliveryAddressInput
        var hiddenDeliveryAddressInput = document.createElement('input');
        hiddenDeliveryAddressInput.setAttribute('type', 'hidden');
        hiddenDeliveryAddressInput.setAttribute('name', 'delivery_address');
        hiddenDeliveryAddressInput.setAttribute('value', JSON.stringify(delivery_address));
        form.appendChild(hiddenDeliveryAddressInput);

        // Submit the form
        form.submit();

    });


</script>
@endsection
