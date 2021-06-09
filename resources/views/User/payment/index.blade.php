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
                                        <input type="checkbox" name="test" value="small" style="position: absolute; margin-left: 25px;" id="checboxVisa">
                                        <div class="payment-checkbox" style="padding-left: 50px">
                                            <img src="{{ asset('frontend/assets/images/Icons/stripe.svg') }}" alt="" width="100" height="auto" style="margin-top: 10px">
                                        </div>
                                    </label> --}}

                                    <label for="checboxStrip" class="d-flex justify-content-between align-items-center">
                                        <input type="checkbox" name="test" value="small" style="position: absolute; margin-left: 25px;" id="checboxStrip">
                                        <div class="payment-checkbox" style="padding-left: 50px">
                                            <img src="{{ asset('frontend/assets/images/Icons/stripe.svg') }}" alt="" width="100" height="auto" style="margin-top: 10px">
                                        </div>
                                    </label>

                                    <label for="checboxPendu" class="d-flex justify-content-between align-items-center">
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

                            <td class="text-right">${{$service_fee_amount}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Promo code</td>
                            <td class="text-right">$18df0</td>
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

@include("User.payment.payment_release")
<script>
     $('#taskProcessModal').click(function() {
        $('#paymentConfirmModalId').modal('hide');
    })
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
@endsection
