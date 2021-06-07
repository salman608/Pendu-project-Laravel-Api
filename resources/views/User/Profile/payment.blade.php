@extends('User.Asset')
@section('user_content')
<div class="container profile_tab_main_area">
   <div class="row">
      @include('User.Partial._Sidebar')
      <div class="col-md-8 col-lg-8 col-xl-8    order_details_row">
        <div>             <!-- ------------- profile tab info  ------------- -->




         <!-- -------------Payment tab ------------- -->

        <div class="profile_tab_title">
          <h2>Payment</h2>
        </div>
        <div class="payment_section">
          <div class="payment_card_area">
            <ul>
              <li>
                <div class="payment_card">
                  <img src="{{asset('frontend')}}/assets/images/Banner/Card.png" alt="" width="50px" height="auto">
                  {{-- <p>2652 66262 642 ***</p>
                  <h4>John Doe</h4> --}}
                  <span class="close test_cls">&times;</span>
                </div>
              </li>
              <li>
                <div class="payment_card">
                  <img src="{{asset('frontend')}}/assets/images/Banner/Card.png" alt="" width="50px" height="auto">
                  {{-- <p>2652 66262 642 ***</p>
                  <h4>John Doe</h4> --}}
                  <span class="close test_cls ">&times;</span>
                </div>
              </li>
            </ul>
          </div>
        </div>






        </div>
      </div>
   </div>
</div>
<!-- ---- end  tab ------ -->

@include("User.component.task_process")
@include("User.payment.payment_release")
@endsection

