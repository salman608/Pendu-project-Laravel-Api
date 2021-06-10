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
                          <li class="breadcrumb-item active" aria-current="page">Tasks</li>
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

    <!-- ------------- mytask tab ------------- -->
         <div class="profile_tab_title">
            <h2>My task</h2>
         </div>

            <div class="row short_order">
               <div class="select_label">
                     <label for=" ">Sort orders</label>
               </div>

               <div class="select_iteam">
                     <select  name="">
                        <option value="All">All</option>
                        <option value="Order 01">Order 01</option>
                        <option value="Order 02">Order 02</option>
                        <option value="Order 03">Order 03</option>
                     </select>
               </div>
            </div>

@foreach($tasks as $key => $value)
            <div class="order_number">


                <div class="order_cat_date_area mt-3">
                  <div class="order_cat_date">
                      <p></p>
                      <h6>{{ $key }}</h6>
                  </div>
                </div>

        @foreach($value as $task)

 <!-- @php var_dump($task);   @endphp    -->
             {{--  @if($task->task_type == "simple")   --}}   
                <div class="order_details_area mt-2">
                  <div class="order_details">
                      <div class="order_id_coast">
                            <!-- <h5>Order ID- <span class='id_num' ></span> </h5> -->
                            <h5>Task ID- <span class='id_num' >{{$task->task_id}}</span> </h5>
                            <p>Item cost- <span class='coast'>${{$task->total_cost}}</span> </p>
                            <h6>{{$task->request_status}}</h6>
                            <!-- <h6>Proccessing</h6> -->
                      </div>
                  </div>
                  <div class="view_order float-right">
                      <button type="button " class="btn view-offer-btn" data-id="{{$task->id}}">View offers</button>
                  </div>
                  <div class="order_track">
                      <p>{{$task->title}}-</p>
                      <h5 class="add-comma-except">
                          @foreach($task->products as $product)
                              <span>{{$product->name}}({{$product->qty}}X)</span>
                          @endforeach
                      </h5>
                      <!-- <h5>Toothpaste(1X), Apples(1KG), Chips(1Pack).</h5> -->
                  </div>
                </div>
                {{--  @else --}}
               <div class="order_details_area mt-2">
                     <div class="row">
                        <div class="col-md-2">
                           <div class="accept_offer_image">
                                 <img src="{{asset('frontend')}}/assets/images/member/men_pic10_copy.jpg" alt="">
                                 <h5>Kal M.</h5>
                                 <h6><i class="fas fa-star"></i> <span>4.5</span> </h6>
                           </div>
                        </div>

                        <div class="col-md-10">
                           <div class="order_details">
                                 <div class="order_id_coast">
                                    <h5>Order ID- <span class='id_num' >251226566</span> </h5>
                                    <p>Delivery charge- <span class='coast'>$26</span> </p>
                                    <h6 class='accepted' >Accepted</h6>
                                 </div>

                           </div>
                           <div class="view_order float-right">
                                 <button type="button" class="btn track_status" data-toggle="modal" data-target="#taskProcessModal">Track status</button>
                           </div>
                           <div class="order_track">
                                 <p>Buy some groceries for me-</p>
                                 <h5>Toothpaste(1X), Apples(1KG), Chips(1Pack).</h5>
                           </div>
                        </div>
                     </div>
               </div>
              {{-- @endif --}}
        @endforeach

            </div>

@endforeach


        </div>
      </div>
   </div>
</div>
<!-- ---- end  tab ------ -->










<!-- ================= Offers from driverstab ============ -->
<div id="offer_show_modal" class="modal fade profile-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg  ">
      <div class="modal-content offer_modal_contetn">
         <div class="modal-header offer_modal_title">
            <h5 class="modal-title" id="exampleModalLongTitle">Offers from drivers</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <section class=" offer_main_area" >
               <ul class="offer_show_modal_ul">
               
               </ul>
            </section>
         </div>
      </div>
   </div>
</div>




@include("User.component.task_process")
@include("User.payment.payment_release")


<script>

$(document).ready(function(){

  function driverOfferItem(offerData){

  
      let url = '{{ route("user.payment", ["offerId" => ":offerId", "taskId" => ":taskId"]) }}';
      url = url.replace(':offerId', offerData['id']);
      url = url.replace(':taskId', offerData['task_id']);



      let offerItem = '<li class="offer_inter_item mt-1">';
      offerItem += '<div class="container">';
      offerItem += '<div class="row">';

      offerItem += '<div class="col-md-2 "><div class="offer_image"><img src="'+ offerData['dropper']['profile_image'] +'" alt=""><h5>'+ offerData['dropper']['last_name'] +'</h5><h6><i class="fas fa-star"></i> <span>'+ offerData['dropper']['rating']  +'</span> </h6></div></div>';


      offerItem += '<div class="col-md-6 offer_middle_row"><div class="circle_offer"><div class="chart" data-percent="'+ offerData['dropper']['average_accuracy'] +'" data-scale-color="#ffb400">'+ offerData['dropper']['average_accuracy'] +'%<h6>Average accuracy</h6></div></div><div class="circle_offer"><div class="chart" data-percent="'+ offerData['dropper']['success_rate'] +'" data-scale-color="#ffb400">'+ offerData['dropper']['success_rate'] +'%<h6>Success rate</h6></div></div><div class="Vehicle_offer"><img src="'+ offerData['dropper']['vehicle']['icon'] +'" alt=""><h6>Vehicle type</h6></div></div>';

      offerItem += '<div class="col-md-3"><div class="accept_offer_cost"><div class="circle_curve"><h1></h1><h4>$'+ offerData['amount'] +'</h4></div><a href="'+ url +'" type="button" class="btn">Accept Offer</a></div></div>';
      // offerItem += '';
      offerItem += '</div>';
      offerItem += '</div>';
      // offerItem += '<span class="close1 offer_close">&times;</span>';
      offerItem += '</li>';
                      
      return offerItem;

  };





  // Show offer Modal
  $('.view-offer-btn').on('click',function(){

    let taskId = $(this).attr("data-id");

    let url = '{{ route("user.task_offer_json", ":id") }}';
      url = url.replace(':id', taskId);

    $.ajax({
						url: url,
						data: {id:taskId},
						type: "GET",
						dataType: "JSON",
						success: function(data){
							if($.isEmptyObject(data) != null){
                
                // empty the container
                $('.offer_show_modal_ul').empty();
              
                data.offers.forEach(offer => {
                    let offerLi = driverOfferItem(offer);
                    $('.offer_show_modal_ul').append(offerLi);
                });      

                $('#offer_show_modal').modal('toggle');
							}
						}
		});


    // $('#offer_show_modal').modal('toggle');
    // let offerLi = driverOfferItem();
    // $('.offer_show_modal_ul').append(offerLi);


  });
});


</script>


@endsection
