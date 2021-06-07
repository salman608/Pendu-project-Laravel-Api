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
    text-align: center;
    font-weight: 400;
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
        width: 151px;
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
            <div style="background: #60e99c;height: 7px;">
            <div class="modal-header" style="border-bottom: 0px solid #dee2e6;padding:0px !important">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <input type="button" aria-hidden="true" class="modal-cross-btn" value="x"></input>
                </button>
            </div>
        </div>
            <div class="d-flex justify-content-center align-items-center container">
                <div class="card card-otp">
                    <img src="{{asset('frontend/assets/images/Icons/mail.png')}}" alt="" style="width:265px;margin:auto;">
                    <h3 class="mt-2" style="font-size: 15px;font-weight:bold;text-align: center;">Confirmation Email has been sent!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium</p>
                    <a href="" class="btn btn-sm mt-3 button-cm mb-3"><i class="fa fa-home"></i> Home</a>

                </div>
            </div>
       </div>
    </div>
</div>
