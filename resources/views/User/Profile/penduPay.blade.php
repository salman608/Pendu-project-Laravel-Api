@extends('User.Asset')
@section('user_content')
<div class="container profile_tab_main_area">
   <div class="row">
      @include('User.Partial._Sidebar')
      <div class="col-md-8 col-lg-8 col-xl-8    order_details_row">
        <div>             <!-- ------------- profile tab info  ------------- -->


        <!-- -------------pendu pay tab ------------- -->

            <div class="profile_tab_title">
            <h2>PenduPay</h2>
            </div>

            <div class="pendu_pay_area">
            <p>Your balance</p>
            <h4>AUD <span>15</span> </h4>
            </div>



        </div>
      </div>
   </div>
</div>
<!-- ---- end  tab ------ -->

@include("User.component.task_process")
@include("User.payment.payment_release")
@endsection

