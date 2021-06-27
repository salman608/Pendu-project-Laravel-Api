<style>
    @media(max-width: 425px){
        .invite_button2 {
        width: 41% !important;
        }
        .invite_button {
         margin-top: 10px;
        }
        .inner_footer{
            width: 90% !important;
        }

    }

    @media(max-width: 375px){
        .invite_button2 {
        width: 45% !important;
        }
        .invite_button {
         margin-top: 10px;
        }
    }
</style>

<!-- --------- invite section --------------- -->

<section class="invite_area py-4 mt-4">
    <div class="container inner_footer py-4">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="invite_content">
                    <h1> Invite a friend , you both get $15 </h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt
                        ut labore et dolore magna</p>

                </div>

                <div class="invite_mail">
                    @auth


                    <form method="POST" action="{{ route('user.refer-n-earn') }}">
                        @csrf
                        <div class="form-group form-inline ">
                            <input type="email" class="form-control  mail_input" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email" placeholder="Enter email address">

                            <a href="#"><button type="submit" class="btn invite_button">Send invite</button></a>
                        </div>

                        <p class='more_way'>More way to invite</p>

                        <div class="section_tooltipss">
                            <input type="text" class=" link_input"
                                value="{{ auth()->user()->referral_link }}" id="myInput1">

                            <div class="tooltip22">
                                <button type="button" class="btn invite_button2" onclick="myFunctions()"
                                    onmouseout="outFunca()">
                                    <span class="tooltiptext1" id="myTooltip1">Copy to clipboard</span>
                                    Copy text
                                </button>
                            </div>
                        </div>

                        <div class="share_invite">
                            <span>Share:-</span>
                            <a href="#" class='twiter'> <i class="fab fa-twitter-square"></i></a>
                            <a href="#" class='fb'> <i class="fab fa-facebook-square"></i></a>
                            <a href="#" class='ins'> <i class="fab fa-instagram-square"></i></a>
                        </div>

                    </form>

                    @error('email')
                    <div class="alert alert-danger " style="width: 76%; margin:auto">{{ $message }}</div>
                    @enderror

                    @if(session('success'))
                    <div class="alert alert-success " style="width: 76%; margin:auto">{{ session('success') }}</div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger " style="width: 76%; margin:auto">{{ session('error') }}</div>
                    @endif


                    @endauth
                    @guest
                        <h1>You have to login to refer and earn.</h1>
                    @endguest

                </div>

            </div>
        </div>
    </div>

</section>
