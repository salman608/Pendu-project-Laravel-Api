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
                        <div class="form-group w-100">
                            <label for="exampleInputPassword1" class="label-title">Products</label>&ensp;
                            <div class="">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Toothpaster(2X)</td>
                                            <td class="text-right">$99.99</td>
                                        </tr>
                                        <tr>
                                            <td>Toothpaster(2X)</td>
                                            <td class="text-right">$99.99</td>
                                        </tr>
                                        <tr>
                                            <td>Toothpaster(2X)</td>
                                            <td class="text-right">$99.99</td>
                                        </tr>
                                        <tr>
                                            <td>Toothpaster(2X)</td>
                                            <td class="text-right">$99.99</td>
                                        </tr>
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
                                    <div class="col-md-11 col-sm-11 deliver-info-text">3/A Jadobpur, Abdul Goli, MD Pur, Dhaka, Abdul Goli, MD Pur, Dhaka</div>
                                </div>
                                <div class="vertical-dotted-line" style="margin-left: 14px;margin-top: -5px;"></div>
                                <div style="margin-left: 22px;margin-top: 10px;">
                                    <div class="row">
                                        <div class="circle-div"></div>
                                        <div class="col-md-11 col-sm-11 deliver-info-dest">2103 N Main St, Highlands, TX, 77562</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group w-100">
                            <label for="exampleInputEmail1" class="label-title">Payment method</label>
                            <div class="row pl-3 paymentCls">
                                    <label for="checboxPaypal" class="d-flex justify-content-between align-items-center">
                                        <input type="checkbox" name="test" value="small" style="position: absolute; margin-left: 25px;" id="checboxPaypal">
                                        <div class="payment-checkbox" style="padding-top: 30px;padding-left: 50px">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="125" height="35" viewBox="0 0 125 35">
                                                <defs>
                                                <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 400 114">
                                                    <image width="400" height="114" xlink:href="data:image/png;base64,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"/>
                                                </pattern>
                                                </defs>
                                                <rect id="paypal_PNG15" width="125" height="35" fill="url(#pattern)"/>
                                            </svg>
                                        </div>
                                    </label>
                                    <label for="checboxVisa" class="d-flex justify-content-between align-items-center">
                                        <input type="checkbox" name="test" value="small" style="position: absolute; margin-left: 25px;" id="checboxVisa">
                                        <div class="payment-checkbox" style="padding-left: 50px">
                                            <img src="{{ asset('frontend/assets/images/Icons/visa.svg') }}" alt="" width="100" height="auto">
                                        </div>
                                    </label>
                                    <label for="checboxMasterCard" class="d-flex justify-content-between align-items-center">
                                        <input type="checkbox" name="test" value="small" style="position: absolute; margin-left: 25px;" id="checboxMasterCard">
                                        <div class="payment-checkbox" style="padding-left: 50px">
                                            <img src="{{ asset('frontend/assets/images/Icons/mastercard.svg') }}" alt="" width="100" height="auto">
                                        </div>
                                    </label>
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
                            <td class="text-right">$180</td>
                        </tr>
                        <tr>
                            <td class="text-left">Delivery fee offer</td>
                            <td class="text-right">$180</td>
                        </tr>
                        <tr>
                            <td class="text-left">Service fee(3%)</td>
                            <td class="text-right">$180</td>
                        </tr>
                        <tr>
                            <td class="text-left">Promo code</td>
                            <td class="text-right">$180</td>
                        </tr>
                    </table>
                </div>
                
                <div class="input-group">
                    <input type="text" class="form-control bg-white border-right-0 promo-code-field" id="taskTitle" placeholder="Enter promo code">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent border-left-0" style="border: 1px solid #60e99c;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9.749" height="15.114" viewBox="0 0 9.749 15.114">
                            <path id="Path_7539" data-name="Path 7539" d="M7077.18,886l8.1,6.8-8.1,7.178" transform="translate(-7076.682 -885.426)" fill="none" stroke="#90a0b2" stroke-width="1.5"/>
                            </svg>
                        </span>
                    </div>  
                </div>
                <div>
                    <button type="button" id="picupModalBtn" class="button text-white" style="margin-top: 15px;width: 100%;" style="padding-bottom: 15px" data-toggle="modal" data-target="#paymentConfirmModalId">Procced</button>
                    <h5 class="text-center mt-4 pb-4">$3652.59</h5>
                </div>
                <div class="payment-procced-nb mt-3">
                    Your funds will be securely held in "Pendu Pay" until the task is done.
                </div>
            </div>
        </div>
    </div>
</section>
@include('User.payment.payment_confirm_modal')
@include('User.component.task_process')
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
@endsection