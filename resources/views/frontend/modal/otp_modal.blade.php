<style>
    .model-header{
        padding: none !important;
        border-bottom: 1px solid #fcfdfd;
    }
.card {
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

body {
    background: #eee
}

.mobile-text {
    color: #989696b8;
    font-size: 15px
}

.form-.card {
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

body {
    background: #eee
}

.mobcontrol {
    margin-right: 12px
}

.form-control:focus {
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
p{
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
                <div class="card">
                    <img src="{{asset('frontend/images/otp.png')}}" alt="" style="width:265px;margin:auto;">
                   <p class="mt-2">One Time Password(OTP) Has been sent to your phone number</p>
                    <div class="d-flex flex-row mt-1" style="width: 295px;margin:auto;"><input type="text" class="form-control otp-input" autofocus=""> <input type="text" class="form-control otp-input"><input type="text" class="form-control otp-input"><input type="text" class="form-control otp-input"></div>
                    <a href="" class="btn mt-3 button-cm">Confirm</a>
                    <div class="text-center mt-2 mb-5" style="font-size: 9px"> <span>Not received? Send again in</span> <strong> 0:59s</strong></div>
                </div>
            </div>
       </div>
    </div>
</div>

{{-- <div class="modal fade" id="OtpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="d-flex justify-content-center align-items-center container">
                <div class="card py-5 px-3">
                    <img src="{{asset('frontend/images/otp.png')}}" alt="">
                   <p>One Time Password(OTP) Has been sent to your phone number</p>
                    <div class="d-flex flex-row mt-5"><input type="text" class="form-control" autofocus=""><input type="text" class="form-control"><input type="text" class="form-control"><input type="text" class="form-control"></div>
                    <div class="text-center mt-5"><span class="d-block mobile-text">Don't receive the code?</span><span class="font-weight-bold text-danger cursor">Resend</span></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}

  <script>
      $(function() {
  'use strict';

  var body = $('body');

  function goToNextInput(e) {
    var key = e.which,
      t = $(e.target),
      sib = t.next('input');

    if (key != 9 && (key < 48 || key > 57)) {
      e.preventDefault();
      return false;
    }

    if (key === 9) {
      return true;
    }

    if (!sib || !sib.length) {
      sib = body.find('input').eq(0);
    }
    sib.select().focus();
  }

  function onKeyDown(e) {
    var key = e.which;

    if (key === 9 || (key >= 48 && key <= 57)) {
      return true;
    }

    e.preventDefault();
    return false;
  }

  function onFocus(e) {
    $(e.target).select();
  }

  body.on('keyup', 'input', goToNextInput);
  body.on('keydown', 'input', onKeyDown);
  body.on('click', 'input', onFocus);

});
  </script>
