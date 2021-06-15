@extends('User.Asset')
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
      @include('User.Partial._Sidebar')
      <div class="col-md-8 col-lg-8 col-xl-8    order_details_row">
        <div>             <!-- ------------- profile tab info  ------------- -->      
             
   <div class="profile_tab_title">
      <h2>History</h2>
   </div>
   <div class="inbox_list_area history_section">
      <ul>
         @forelse ($tasks as $task)
             
         

         <p class='mt-1 history_date_time_section'><span class='history_time' >16:40</span>
            <span class='history_date'>15 Nov 2020</span>
         </p>
         <li >
            <div class="history_item_area">
               <div class="history_item_name">
                  <p>Collect & deliver</p>
               </div>
               <div class="history_details_inner_area">
                  <div class="history_name">
                     <p>Buy some groceries for me-</p>
                     <h4>Toothpaste(1X), Apples(1KG), Chips(1Pack).</h4>
                  </div>
                  <div class="history_rating_area">
                     <div class="history_ratting">
                        <i class="fas fa-star"></i>
                        <span>5.00</span>
                     </div>
                     {{-- <div class="history_client_img">
                        <img src="{{asset('frontend')}}/assets/images/member/men_pic8.jpg" alt="">
                        <img src="{{asset('frontend')}}/assets/images/member/girl_pic5.jpg" alt="">
                        <img src="{{asset('frontend')}}/assets/images/member/men_pic10_copy.jpg" alt="">
                     </div> --}}
                  </div>
               </div>
            </div>
         </li>

         @empty
   
            <div 
               style="display: flex;    display: flex;
               justify-content: center;
               align-items: center;
               height: 100%;"> 
               <p style="font-size: 18px;">There are no records found.</p>
            </div>
       
         @endforelse


      </ul>
   </div>



        



        </div>        
      </div>
   </div>
</div>
<!-- ---- end  tab ------ -->

@include("User.component.task_process")
@include("User.payment.payment_release")
@endsection

