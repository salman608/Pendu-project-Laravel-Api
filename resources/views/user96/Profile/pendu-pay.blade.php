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
                          <li class="breadcrumb-item active" aria-current="page">Library</li>
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


        <!-- -------------pendu pay tab ------------- -->

            <div class="profile_tab_title">
            <h2>PenduPay</h2>
            </div>

            <div class="pendu_pay_area">
            <p>Your balance</p>
            <h4>AUD <span>{{auth()->user()->balance}}</span> </h4>
            </div>



        </div>
      </div>
   </div>
</div>
<!-- ---- end  tab ------ -->

@include("user.component.task_process")
@include("user.payment.payment_release")
@endsection

