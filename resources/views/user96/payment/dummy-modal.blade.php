
{{-- payment confirm modal --}}
<div class="modal fade" id="paymentConfirmModalId" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
              
            </div>
            <div class="d-flex justify-content-center">
                <h5 class="payment-done">Payment Done!</h5>
            </div>
            <div class="payment-ul">
                <ul class="text-left">
                    <li>Your payment is securely held in pendu pay.</li>
                    <li>Your dropper has been notified.</li>
                    <li>Private chat directly with the dropper is now available.</li>
                </ul>
            </div>
            <div class="d-flex justify-content-center" style="font-family: Montserrat;
            font-weight: normal;
            font-size: 12px;
            text-align: center;
            color: #1b3149;
            ">
                <p>(please keep the communications within the pendu platform to avoid any disputes)</p>
            </div>
            <div class="d-flex justify-content-center">
              
            </div>
            <br><br>
        </div>
    </div>
</div>
<script>
    $('#taskProcessModal').click(function() {
       $('#paymentConfirmModalId').modal('hide');
   })
</script>
