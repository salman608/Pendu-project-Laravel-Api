<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
</head>
<body>

<div class="container">

    @if (session()->has('error'))
        <div class="alert alert-danger mt-4" role="alert">{{ session()->get('error') }}</div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success mt-4" role="alert">{{ session()->get('success') }}</div>
    @endif
    <form action="/stripe3" method="post" id="payment-form">



        <div class="row form-group">
                <div class="col-md-12">
                    <!-- Display errors returned by createToken -->
                    <label>Card Number</label>
                    <div id="paymentResponse" class="text-danger font-italic"></div>
                    <div id="card_number" class="field form-control"></div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label>Expiry Date</label>
                    <div id="card_expiry" class="field form-control"></div>
                </div>
                <div class="col-md-3">
                    <label>CVC Code</label>
                    <div id="card_cvc" class="field form-control"></div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <input type="submit" value="Pay via Stripe" class="btn btn-primary pay-via-stripe-btn">
                </div>
            </div>


        <!-- Used to display Element errors. -->
        <div id="card-errors" style="color: red;" role="alert"></div>
        @csrf
    </form>


</div>


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
    }
    
</script>




</body>
</html>