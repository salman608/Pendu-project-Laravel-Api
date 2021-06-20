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
    input[type=text] {
        background: #f1f1f1;
        border:none;
        outline: none;
    }
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
        border-radius: 10px;
        background: transparent;
        border: 1px solid #90a0b2;
        width: 150px;
        height: 60px;
        margin-top: 10px;
    }

        /* CHECKED STYLES */
    [type=radio]:checked + div {
        border: 0px;
        padding: 0px;
        background: #5bdb98;
        border-radius: 10px;
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
</style>
<section class="">
    <div style="height: 120px; background: #5bdb98"></div>
    <div class="container" style="margin-top: -60px;">
        <span class="font-weight-bold" id="titleId">Movers</span>
        <div class="row" style="background: #fff; box-shadow: 0px 3px 6px rgba(0, 0, 0, 13);height: 80px;border-radius: 10px;">
            <div class="d-flex justify-content-center" style="width: 80%;align-items: center;margin: auto;
            ">
                <div class="step-line">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="border-radius: 10px; bacground: #fff;box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.6); padding: 25px 40px 25px 40px;margin-top: 30px;margin-bottom: 30px;">
        <form method="POST" action="#">
            <div id="task-details">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="label-title">Vahicle Type</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="label-title">Task title</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" style="outline: none">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="label-title">Products</label>
                    <div class="products-box">
                      <table class="table">
                          <tbody>
                              <tr>
                                  <td><div class="circle"></div></td>
                                  <td>Toothpaster(2X)</td>
                                  <td>+ 2 -</td>
                                  <td>x</td>
                              </tr>
                          </tbody>
                          <tfoot> 
                              <tr>
                                  <td colspan="4">+ Add another</div></td>
                              </tr>
                          </tfoot>
                      </table>
                    </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-lg-6 col-md-6">
                          <label for="firstname">Pickup address</label>
                          <input id="firstname" class="form-control input-group-lg" type="text" name="firstname"
                                 title="Enter first name"
                                 placeholder="First name"/>
                      </div>
                      <div class="form-group col-lg-6 col-md-6">
                          <label for="lastname">Enter delivery address</label>
                          <input id="lastname" class="form-control input-group-lg" type="text" name="lastname"
                                 title="Enter last name"
                                 placeholder="Last name"/>
                      </div>
                  </div>
                  <div class="form-group" style="border-style: dashed;height: 35px;border-radius: 10px;border-color: #5bdb98;padding-left: 15px;">
                      Add photos to the task (Optional)
                      <span class="float-right">Img</span>
                  </div>
            </div>
            <div id="reviewDiv" style="display: none">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="label-title">Deliver Time</label>
                    {{-- <label>
                        <input type="radio" name="deliver_time" value="small" checked>
                        <img src="http://placehold.it/40x60/0bf/fff&text=A">
                    </label>
                      
                    <label>
                        <input type="radio" name="deliver_time" value="big">
                        <img src="http://placehold.it/40x60/b0f/fff&text=B">
                    </label> --}}
                    <label>
                        <input type="radio" name="deliver_time" id="asap" value="small" checked>
                        <div>
                            <img src="{{ asset('frontend/assets/images/Icons/ASAP.svg') }}" height="30" width="60">
                            <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="asap">ASAP</label>
                        </div>
                    </label>
                      
                    <label>
                        <input type="radio" name="deliver_time" value="big" id="hrs4">
                        <div>
                            <img src="{{ asset('frontend/assets/images/Icons/4hours.svg') }}" height="30" width="60">
                            <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="hrs4">4Hrs</label>
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="deliver_time" value="big" id="hrs6">
                        <div>
                            <img src="{{ asset('frontend/assets/images/Icons/4hours.svg') }}" height="30" width="60">
                            <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="hrs6">6Hrs</label>
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="deliver_time" value="big" id="sameDay">
                        <div>
                            <img src="{{ asset('frontend/assets/images/Icons/4hours.svg') }}" height="30" width="60" style="margin-bottom: 22px;">
                            <label class="radio-btn-text" for="sameDay">Same<br>day</label>
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="deliver_time" value="big" id="nextDay">
                        <div>
                            <img src="{{ asset('frontend/assets/images/Icons/4hours.svg') }}" height="30" width="60" style="margin-bottom: 22px;">
                            <label class="radio-btn-text" for="nextDay">Next<br>day</label>
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="deliver_time" value="big" id="setLater">
                        <div>
                            <img src="{{ asset('frontend/assets/images/Icons/4hours.svg') }}" height="30" width="60" style="margin-bottom: 22px;">
                            <label class="radio-btn-text" for="setLater">Set<br>later</label>
                        </div>
                    </label>
                  </div>
            </div>

          </form>
    </div>
    <div class="text-center" id="nextButton">
        <a class="button-outline">Close</a>
        <a class="button text-white" data-toggle="modal" data-target="#googleMapModal">Next</a>
    </div>
    <div class="text-center" id="reviewButton" style="display: none">
        <a class="button-outline ">Back</a>
        <a class="button text-white" >Review</a>
        {{-- data-toggle="modal" data-target="#googleMapModal" --}}
    </div>
</section>


{{-- google map modal --}}
<div class="modal fade bd-example-modal-lg" id="googleMapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Select pickup/shop address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body popUpImage position-relative">
                <div id="googleMap" style="width:100%;height:400px"></div>

                <p class="mt-3">Address</p>
                <button type="button" class="button text-white" style="margin-top: -10px;width: 100%">Select Picup Point</button>
            </div>
        </div>
    </div>
</div>

<script>

    $('#nextButton').click(function(){
        $(this).hide();
        $('#titleId').text('Review');
        $('#task-details').hide();
        $('#reviewButton').show('slow');
        $('#reviewDiv').show('slow');
    })

    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
                zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }

    
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmk0nIJTNglKWztaherdwjuDoLW_wpXTY&callback=myMap"></script>
@endsection