@extends('user.asset')
@section('user_content')


  <!-- ============ Breadcrumb ============ -->
  <section class="breadcrumb_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bread_area">
                    <nav aria-label="breadcrumb bread_item">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Payment</li>
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




         <!-- -------------Payment tab ------------- -->

        <div class="profile_tab_title">
          <h2>Payment</h2>
        </div>
        <div class="payment_section">
          <div class="payment_card_area">
            <ul>
              @forelse ($cards as $card)



              <li>
                <div class="payment_card">
                  <img src="{{asset('frontend')}}/assets/images/Banner/Card.png" alt="" width="50px" height="auto">
                  <p>2652 66262 642 ***</p>
                  <h4>John Doe</h4>
                  <span class="close test_cls">&times;</span>
                </div>
              </li>
              <li>
                <div class="payment_card">
                  <img src="{{asset('frontend')}}/assets/images/Banner/Card.png" alt="" width="50px" height="auto">
                   <p>2652 66262 642 ***</p>
                  <h4>John Doe</h4>
                  <span class="close test_cls ">&times;</span>
                </div>
              </li>
              @empty

              <div style="margin: auto;
              margin-top: 130px;" >
              <p style="font-size: 18px;">There are no cards found.</p>
           </div>

              @endforelse

            </ul>
          </div>
        </div>






        </div>
      </div>
   </div>
</div>
<!-- ---- end  tab ------ -->
<!-- --------- invite section --------------- -->
@include("user.partial._Invite")

@include("user.component.task_process")
@include("user.payment.payment_release")
@endsection

