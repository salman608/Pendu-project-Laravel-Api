
{{-- google map modal --}}
<div class="modal fade bd-example-modal-lg" id="googleMapPicupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="width:600px;left:0;top:0;">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle">Select pickup/shop address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <input type="button" aria-hidden="true" class="modal-cross-btn" value="x"></input>
                </button>
            </div>
            <div class="modal-body popUpImage position-relative" style="padding: 0">

                <div id="googleMap" class="map"></div>

                <div class="w-100 d-flex justify-content-center">
                    <div id="input_container">
                    <input type="text" name="input shop_address2" id="shop_address2"
                                   title="Enter your pickup address"
                                   placeholder="Enter your pickup address" required/>


                        <!-- <input type="text" id="input" class="pickupInputAuto"> -->
                        <img src="{{ asset('frontend/assets/images/Icons/location.svg') }}" width="20px" height="20px" id="input_img" style="margin-bottom: 5px!important">
                    </div>
                </div>

                <div style="margin: 5 25 20 25;">
                    <!-- <p class="mt-3">3/A Jadobpur, Abdul Goli, MD Pur, Dhaka, Abdul Goli, MD Pur, Dhaka</p> -->
                    <button type="button" id="picupModalBtn" class="button text-white" style="margin-top: -10px;width: 100%">Select Picup Point</button>
                </div>
            </div>
        </div>
    </div>
</div>
