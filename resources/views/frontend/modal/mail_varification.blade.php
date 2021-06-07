<style>
    #OtpModal .model-header{
        padding: none !important;
        border-bottom: 1px solid #fcfdfd;
    }
.card-otp {
    width: 400px;
    padding: 10px;
    border-radius: 20px;
    background: #fff;
    border: none;
    /* height: 350px; */
    position: relative
}

/* .container {
    height: 100vh
} */

/* body {
    background: #eee
} */

.mobile-text {
    color: #989696b8;
    font-size: 15px
}

.form-.card-otp {
    width: 400px;
    padding: 10px;
    border-radius: 20px;
    background: #fff;
    border: none;
    height: 350px;
    position: relative
}

/* .container {
    height: 100vh
} */

/* body {
    background: #eee
} */

.mobcontrol {
    margin-right: 12px
}

.otp-input:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ff8880;
    outline: 0;
    box-shadow: none
}
.otp-input{
    width: 52px!important;
    margin: auto;
    height: calc(1.5em + 0.75rem + 0px);
}

.cursor {
    cursor: pointer
}
.card-otp p{
    font-size: 11px;
    font-weight: bold;
}
.button-cm {
        background-color: #60e99c !important;
        border: 1px solid #60e99c;
        text-align: center;
        display: inline-block;
        /* font-size: 16px; */
        /* padding: 14px 70px; */
        cursor: pointer;
        border-radius: 5px;
        font-weight: bold;
        color: white;
        width: 248px;
        margin: auto;
    }
    .button-cm:hover{
        color: white;
        border: 1px solid #3acf71;
    }
</style>
<!-- Modal -->
<div class="modal fade" id="OtpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0px solid #dee2e6;padding:0px !important">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <input type="button" aria-hidden="true" class="modal-cross-btn" value="x"></input>
                </button>
            </div>
            <div class="d-flex justify-content-center align-items-center container">
                <div class="card card-otp">
                    <img src="{{asset('frontend/assets/images/Icons/mail.png')}}" alt="" style="width:265px;margin:auto;">
                    <p class="mt-2">One Time Password(OTP) Has been sent to your phone number</p>
                    <div class="d-flex flex-row mt-1" style="width: 295px;margin:auto;"><input type="text" class="form-control otp-input" autofocus=""> <input type="text" class="form-control otp-input"><input type="text" class="form-control otp-input"><input type="text" class="form-control otp-input"></div>
                    <a href="" class="btn mt-3 button-cm">Confirm</a>
                    <div class="text-center mt-2 mb-5" style="font-size: 9px"> <span>Not received? Send again in</span> <strong> 0:59s</strong></div>
                </div>
            </div>
       </div>
    </div>
</div>



  <script>

  </script>
