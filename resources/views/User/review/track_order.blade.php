@extends('User.Asset')
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
</style>
<section class="">
    <div style="height: 120px; background: #5bdb98"></div>
    <div class="container" style="margin-top: -60px;">
        <span class="font-weight-bold" id="titleId">Tracking Order</span>
        <div class="row" style="background: #fff; box-shadow: 0px 3px 6px rgba(0, 0, 0, 13);border-radius: 10px;margin-bottom: 30px;padding-bottom: 20px;">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center mt-5">
                <img src="{{asset('frontend/images/track.jpg')}}" alt="" height="300px">

            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 text-center" style="font-family: Montserrat;
            font-weight: 600;
            font-size: 20px;
            color: #5bdb98;">
                <p>Track Your Order</p>
            </div>

            <div class="col-md-12 col-sm-12 col-lg-12 text-center border-top pt-2" style="font-family: Montserrat;
            font-weight: 600;
            font-size: 20px;
            color: #60e99c;
            ">

            </div>
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="row w-100 d-flex justify-content-center mt-5 mb-5">
                    <input id="additionalNote" class="form-control w-50" type="text" name="email"
                        title="Enter Your order Number..."
                        placeholder="#5677nhgh....."/>
                    <button class="button ml-4 pl-5 pr-5" style="background: orange;color:#fff;height:37px;border-radius: 5px; padding: 0;" data-toggle="modal" data-target="#taskProcessModal">Track Now</button>
                </div>

            </div>



        </div>
    </div>
</section>

@include("User.component.task_process")

@endsection
