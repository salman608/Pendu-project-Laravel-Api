@extends('User.Asset')
@section('user_content')

<style>

   .add-comma-except span:after {
      content: ", ";
   }
   .add-comma-except span:last-child:after {
      content: "";
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
             


<!-- ------------- deliveries tab (Histroy tab) ------------- -->
   <div class="profile_tab_title">
      <h2>Deliveries</h2>
   </div>
   <div class="inbox_list_area history_section deliveries_section">
      <ul>

         @forelse ($tasks as $task)
             
      
         <li class='mt-2' >
            <div class="deliveries_item_area">
               <div class="history_item_name">
                  <p>{{$task->serviceCategory->title}}</p>
               </div>
               <div class="deliveries_itam">
                  <div class="deliveries_client_name_area">
                     <img src="{{asset('frontend')}}/assets/images/member/girl_pic5.jpg" alt="">
                     <div class="deliveries_item_content">
                        <p>{{ $task->title }}-</p>
                        <h5 class="add-comma-except">
                           @foreach($task->products as $product)
                               <span>{{$product->name}}({{$product->qty}}X)</span>
                           @endforeach
                           .
                       </h5>
                     </div>
                  </div>
                  <div class="history_ratting">
                     <i class="fas fa-star"></i>
                     <span>{{$task->order->review->rating}}</span>
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

