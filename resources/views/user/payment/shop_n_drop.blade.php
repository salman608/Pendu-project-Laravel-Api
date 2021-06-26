@extends('user.asset')
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
    @media (max-width: 375 px){
        .payment-checkbox{
           width: 158px !important;
       }
    }

    @media (max-width: 575.98px){
      .payment-checkbox{
           width: 183px !important;
       }
       .payment-checkbox img{
           width: 97px !important;
       }
       .checkout-products{
           padding: 0px !important;
       }
       #pay-confirm-model{
           width: 92% !important;
       }
       .payment-summary{
           margin-top: 28px;
       }


   }


    div#card-errors {
        text-align: center;
    }



</style>
@section('user_content')
<section class="" >







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
                                            <img src="{{ asset('frontend/assets/images/Icons/pendu.png') }}" alt=""   style="margin-top: 25px;padding-left: 8px;height: 43px;">

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
                            <input type="submit" style="width: 200px; background: #5ee39a; border-color: #5ee39a" value="Pay via Stripe" class="btn btn-primary pay-via-stripe-btn">
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








@include('user.component.task_process')

@include("user.payment.payment_release")
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



    // Apply Coupon
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
