@extends('user.asset')
@section('user_content')


<style>
 #OtpModal .model-header{
        padding: none !important;
        border-bottom: 1px solid #fcfdfd;
    }
.card-otp {
    width: 500px;
    padding: 10px;
    border-radius: 20px;
    background: #fff;
    border: none;

    position: relative
}
.card-otp img{
    width:265px;
    margin:auto;

}


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


.mobcontrol {
    margin-right: 12px
}

.button-cm {
        background-color: #60e99c !important;
        border: 1px solid #60e99c;
        text-align: center;
        display: inline-block;
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



.inputs input {
    width: 45px;
    height: 30px
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0
}



.form-control:focus {
    box-shadow: none;
    border: 2px solid red
}

.otp-text{
    font-size: 15px;
}




</style>





<!-- Modal -->

        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0px solid #dee2e6;padding:0px !important">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <input type="button" aria-hidden="true" class="modal-cross-btn" value="x"></input>
                </button>
            </div>
            <div class="d-flex justify-content-center align-items-center container">

                <form action="{{route('verify-phone')}}" method="post">
                    @csrf
                <div class="card card-otp">
                    <img src="{{asset('frontend/images/otp.png')}}" alt="">
                   <p class="mt-2 otp-text" >One Time Password(OTP) Has been sent to your phone number</p>
                   <p class="mt-2" style="font-size: 15px; text-align: center;"> Defaul is : 123456</p>
                   @if (session()->has('error')) {

                        <p class="mt-2" style="font-size: 15px; color:red">{{ session('error') }}</p>
                    @endif




                        <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                             <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" />
                             <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" />
                             <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" />
                             <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" />
                             <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" />
                             <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" />
                        </div>


                    <button type="submit" class="btn mt-3 button-cm">Confirm</button>
                    <div class="text-center mt-2 mb-5" style="font-size: 9px"> <span>Not received? Send again in</span> <strong> 0:59s</strong></div>
                </div>

            </form>
            </div>
       </div>

<script>
document.addEventListener("DOMContentLoaded", function(event) {

function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) {
    if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus();
    } else {
        if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true;
        } else if (event.keyCode> 47 && event.keyCode < 58)
        {
            inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault();
            } else if (event.keyCode> 64 && event.keyCode < 91) {
                inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault();
                 }
                 }
                 });
                 }
                 } OTPInput();
                 });
</script>

@endsection

