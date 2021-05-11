@extends('User.Asset')

<style>

.pac-container { z-index: 100000; }
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
@section('user_content')
<section class="">
    <div style="height: 120px; background: #5bdb98"></div>
    <div class="container" style="margin-top: -60px;">
        <span class="font-weight-bold" id="titleId">Movers</span>
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

    <div class="container" style="border-radius: 10px; background: #fff;box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.6); padding: 25px 40px 25px 40px;margin-top: 30px;margin-bottom: 30px;">
        <form>
            @csrf
            <div id="task-details">
                  <div class="form-group">
                    <label for="procat_id" class="label-title">Categories</label>
                    <select multiple class="selectpicker w-100" id="procat_id" name="product_cats[]">
                        @foreach ($product_cats as $p_cat)
                            <option value="{{ $p_cat->id  }}">{{$p_cat->title}}</option>
                        @endforeach
                    </select><!-- End -->
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1" class="label-title">Task title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter your title here" style="outline: none" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1" class="label-title">Products</label>&ensp;
                    <small style="color: #ffdaa5">(Please Provide clear name & details if you have it. You''ll receive  photos of the items once shopper begin the shopping.)</small>
                    <div class="products-box">
                      <table class="table table-borderless border-top-0">
                          <tbody>
                              <tr class="top border-bottom border-light" id="tableRow_1">
                                  <td><div class="circle"></div></td>
                                  <td><input class="form-control" type="text" name="pro_name[]" id="pname" placeholder="Enter Product Name..."></td>
                                  <td><span class="plus-minus-sign cursor-pointer minus" id="minus"> - </span> <span id="totalProduct" style="color: #56cd93;font-weight: bold;">1</span> <span class="plus-minus-sign cursor-pointer plus" id="plus"> + </span></td>
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
                        <input id="additional_note" class="form-control input-group-lg bg-input-orange" type="text" name="additional_note"
                            title="Enter your total cost of the items"
                            placeholder="Enter your total cost of the items" required/>
                    </div>

                    <div class="form-group">
                        <label for="product_cost" class="label-title">Product cost</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text border-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="25" viewBox="0 0 16 36">
                                            <text id="_" data-name="$" transform="translate(8 29)" fill="#5bdb98" font-size="27" font-family="SegoeUI, Segoe UI"><tspan x="-7.277" y="0">$</tspan></text>
                                        </svg>
                                    </span>
                                </div>
                                <input id="product_cost" class="form-control input-group-lg" type="number" name="product_cost"
                            title="Enter your total cost of the items"
                            placeholder="Enter your total cost of the items" required/>
                            </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="shop_address" class="label-title">Enter shops/Pickup address</label>
                            <div class="input-group">
                                <input class="form-control input-group-lg" type="text" name="shop_address" id="shop_address"
                                   title="Enter your pickup address"
                                   placeholder="Enter your pickup address" required/>
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
                                   placeholder="Enter your delivery address" required/>
                                <div class="input-group-append cursor-pointer">
                                    <span class="input-group-text border-0 deliveryModal" data-toggle="modal" data-target="#googleMapDeliveryModal" id="deliverySpanId">
                                        <img src="{{ asset('frontend/assets/images/Icons/location green.svg') }}" alt="" width="20" height="auto">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                  {{-- <div class="form-group text-center nb-mover">
                      <small>You'll be asked to securely hold the funds in the app after you have accepted an offer & you'll only be paying for the items you requested.</small>
                  </div> --}}
            </div>

            <div id="timeFrameDiv" >
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


                        {{-- <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time" id="hrs4" value="4 HRS">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/4hours.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="hrs4">4Hrs</label>
                                </div>
                            </label>
                        </div>

                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time" id="hrs6" value="6 HRS">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/6hours.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="hrs6">6Hrs</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time" id="sameDay" value="Same Day">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/same day.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="sameDay">Same<br>day</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-2">
                            <label>
                                <input type="radio" name="delivery_time" id="nextDay" value="Next Day">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/next day.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="nextDay">Next<br>day</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-0">
                            <label>
                                <input type="radio" name="delivery_time" id="setLater" value="Set Later">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/set latter.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="setLater">Set<br>later</label>
                                </div>
                            </label>
                        </div> --}}
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="exampleInputPassword1" class="label-title">Item Cost</label>
                    <input type="number" class="form-control" name="item_cost" id="item_cost" placeholder="$256" style="outline: none"> -->
                </div>
                <div class="form-group text-center nb-mover">
                    <small>You'll be asked to securely hold the funds in the app after you have accepted an offer & you'll only be paying for the items you requested.</small>
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
                                <input type="radio" value="{{$d_time->id}}" name="delivery_time_review" id="asap">
                                <div style="width: 180px;">
                                    <img src="{{ asset('frontend/assets/images/Icons/ASAP Black.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="asap">{{$d_time->title}}</label>
                                </div>
                            </label>
                        </div>
                        @endforeach


                        {{-- <div class="pr-2">
                            <label>
                                <input type="radio" value="4 HRS" name="delivery_time_review" id="hrs4">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/4hours.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="hrs4">4Hrs</label>
                                </div>
                            </label>
                        </div>

                        <div class="pr-2">
                            <label>
                                <input type="radio" value="6 HRS" name="delivery_time_review" id="hrs6">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/6hours.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="hrs6">6Hrs</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-2">
                            <label>
                                <input type="radio" value="Same Day" name="delivery_time_review" id="sameDay">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/same day.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="sameDay">Same<br>day</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-2">
                            <label>
                                <input type="radio" value="Next Day" name="delivery_time_review" id="nextDay">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/next day.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="nextDay">Next<br>day</label>
                                </div>
                            </label>
                        </div>
                        <div class="pr-0">
                            <label>
                                <input type="radio" value="Set Later" name="delivery_time_review" id="setLater">
                                <div>
                                    <img src="{{ asset('frontend/assets/images/Icons/set latter.svg') }}" height="30" width="80" style="margin-bottom: 22px;">
                                    <label class="radio-btn-text" for="setLater">Set<br>later</label>
                                </div>
                            </label>
                        </div> --}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="label-title">Item Cost</label>
                    <input type="number" class="form-control" name="itemCost" id="ItemCost" value="" style="outline: none">
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


                              


@include("User.component.googleMap_pickup_modal") 
@include("User.component.googleMap_delivery_modal")
@include("User.component.post_delivery")

<script>

    $(document).ready(function(){

        // Add another Product field
        $('#add_btn').on('click',function(){
            let html='';
            html+='<tr>';
            html+='<td><div class="circle"></div></td>';
            html+=' <td><input class="form-control" type="text" name="pro_name[]" id="pname" placeholder="Enter Product Name..."></td>';
            html+='<td><span class="plus-minus-sign cursor-pointer minus" id="minus"> - </span> <span id="totalProduct" style="color: #56cd93;font-weight: bold;">1</span> <span class="plus-minus-sign cursor-pointer plus" id="plus"> + </span></td>';
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

    // Next Step
    $('#nextButton').click(function(){


        // if ($('#procat_id').val() == '') {
        //     swal({
        //         icon: 'error',
        //         title: 'Oops...',
        //         text: "Category is required.",
        //     })
        // }
        // else
            
        // Chekc is empty
        if ($('#title').val() == '') {

            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Title is required.",
            })
        }
        else if ($('#additional_note').val() == '') {

            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Additional note is required.",
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


            let deliverTime = $('input:radio[name="delivery_time"]:checked').val();

            $("input:radio[name=delivery_time_review][value='" + deliverTime + "']").prop('checked', true);

            $('#ItemCost').val($('#item_cost').val());
            $('#shopAddress').text($('#shop_address').val());
            $('#deliveryAddress').text($('#delivery_address').val());

        }
    });

    // TODO: Will Remove
    // $('#backButtonId').click(function(){
    //     $('#nextButton').show();
    //     $('#task-details').show();
    //     // $('#titleId').text('Drop & Shop');
    //     $('#reviewButtons').hide();
    //     $('#timeFrameDiv').hide();
    // });

    // $('#reviewButtonId').click(function() {
    //     $('#reviewButtons').hide();
    //     $('#timeFrameDiv').hide();
    //     $('#taskDetails').show();
    //     $('#postButtonId').show();

    //     var deliverTime = $('input:radio[name="delivery_time"]:checked').val();
    //     $("input:radio[name=delivery_time_review][value='" + deliverTime + "']").prop('checked', true);

    //     $('#shopAdress').text($('#shop_address').val())
    //     $('#deliveryAddress').text($('#delivery_address').val())
    // })

</script>



<script>
    // Submission Button
    $('#postSubmitButtonId').click(function() {
        $('form').submit();
    })

    // Form tag
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

            console.log('====================================');
            console.log(response);
            console.log('====================================');

            if (response.alertType == 'error') {
                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: response.message,
                });

            } else {

                $('#deliveryProcessModal').modal('show');
                $('form').trigger("reset");

                // setTimeout(function () {
                //     window.location = './'
                // }, 3000);
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

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDe9wIv3EiEy0aH3YTSRRZP8eRNbitATDo&libraries=places"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>



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
        delivery_address.address = delivery_address.value;

        let place = auto_delivery_address.getPlace();
        delivery_address.lat = place.geometry.location.lat();
        delivery_address.lng = place.geometry.location.lng();
    });



    
    // function ShowLocationOnTheMap(map, latitude, longitude) {

    //     // Remove old marker
    //     if(typeof shop_address_marker !== 'undefined' && shop_address_marker !== null) {
    //         shop_address_marker.setMap(null);
    //     }

    //     // Add Marker
    //     shop_address_marker = new google.maps.Marker({
    //         position: new google.maps.LatLng(latitude, longitude),
    //         map: map,
    //     });
    // }
 

    $(".pickupModal").click(function() {
        
        // New map
        let map = new google.maps.Map(document.getElementById("googleMap"), {
            zoom: 7,
            center: centeredLatLng,
            disableDefaultUI: true,
            // mapTypeId: google.maps.MapTypeId.ROADMAP,
        });

        let auto_shop_address2 = new google.maps.places.Autocomplete(shop_address2_input, options);
        
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


@endsection
