@extends('user.asset')
@section('user_content')

 <style>
   @media(max-width:575px){
    #refer_earn_section_mobile{
        height: 38rem !important;
    }
    .refer_n_earn_mail{
        width: 93% !important;
        margin: auto !important;
    }
     .refer_earn_invite_btn{
        width: 200px;
        margin-top: 10px;
     }

     .refar_and_earn_copy{
        width: 93% !important;
        margin: auto !important;
     }
     .refer_copy_btn{
        width: 200px;
        margin-top: 5px;
     }

   }

 </style>


  <!-- ============ Breadcrumb ============ -->
  <section class="breadcrumb_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bread_area">
                    <nav aria-label="breadcrumb bread_item">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Refer & Earn</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="container profile_tab_main_area">
   <div class="row">
      @include('user.partial._Sidebar')
      <div class="col-md-8 col-lg-8 col-xl-8    order_details_row">
        <div>             <!-- ------------- profile tab info  ------------- -->



           <!-- -------------Refer & earn tab ------------- -->

        <div class="profile_tab_title">
          <h2>Refer & earn</h2>
        </div>
        <div class="refer_earn_section text-center" id="refer_earn_section_mobile">
           <!-- -------------Footer invite section ------------- -->
          <div class="invite_content refer_earn_content">
            <img src="{{asset('frontend')}}/assets/images/Icons/Layer refer.png" alt="">
            <h1> Invite a friend , you both get $15 </h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
            {{-- <ul class="list-group mt-3">

              <li class="list-group-item">Referrer: {{ Auth::user()->referrer->name ?? 'Not Specified' }}</li>
              <li class="list-group-item">Refferal count: {{ count(Auth::user()->referrals)  ?? '0' }}</li>
          </ul> --}}

           </div>

           <div class="invite_mail">
             <form method="POST" action="{{ route('user.refer-n-earn') }}">
              @csrf
               <div class="form-group form-inline refer_n_earn_mail">
                 <input type="email" class="form-control  mail_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address" value="{{ old('email') }}" name="email">

                 <button type="submit" class="btn invite_button refer_earn_invite_btn">Send invite</button>
               </div>

              </form>

               <p class='more_way more_way_refer' >More way to invite</p>

              <div class="section_tooltipss refar_and_earn_copy">
                 <input type="text" class=" link_input" value=" {{ auth()->user()->referral_link }}" id="myInput1">
                <div class="tooltip22">
                 <button type="button" class="btn invite_button2 refer_copy_btn"  onclick="myFunctions()" onmouseout="outFunca()">
                   <span class="tooltiptext1" id="myTooltip1">Copy to clipboard</span>
                   Copy text
                   </button>
                 </div>
               </div>


               <div class="share_invite refer_earn_share">
                 <span>Share:-</span>
                <a href="#" class='twiter'> <i class="fab fa-twitter-square"></i></a>
                <a href="#" class='fb' > <i class="fab fa-facebook-square"></i></a>
                <a href="#" class='ins'> <i class="fab fa-instagram-square"></i></a>
               </div>
           </div>
        </div>







        </div>
      </div>
   </div>
</div>
@include('sweet::alert')
<!-- ---- end  tab ------ -->
@include("user.component.task_process")
@include("user.payment.payment_release")

@endsection

