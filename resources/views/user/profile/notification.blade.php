@extends('user.asset')
@section('user_content')

<style>
    @media(max-width:425px){
        .notification_section ul li{
            margin-left: -33px;
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
                          <li class="breadcrumb-item active" aria-current="page">Notification</li>
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



         <!-- -------------Notification tab ------------- -->

        <div class="profile_tab_title">
          <h2>Notification</h2>
        </div>
       <div class="notification_section">
         <ul>

          

          @forelse ($notifications as $date=> $notification)
          {{-- <h1>{{ $date }}</h1> --}}
            @foreach ($notification as $item)
              {{-- <h2>{{$item->type}}</h2>
              <h2>{{$item->data['type']}}</h2>
              <h2>{{$item->data['title']}}</h2> --}}
              {{-- <h2>@php $hello = $item->data['data'];

                dump($hello["id"]);
              
              @endphp</h2> --}}
            @endforeach


     

          <p class='notifi_date' >{{ $date }}</p>
           <li class='mt-2'>

            @foreach ($notification as $item)
             <div class="notification_item_area mt-3">
               <div class="notification_inner_iteam_area">
                 <div class="notifi_icon">
                   @if ($item->data['type'] == 'payment')
                       
                    <img src="{{asset('frontend/images/notification_Icons/payment.png')}}" alt="">
     

                   @elseif ($item->data['type'] == 'referral')
                       
                    <img src="{{asset('frontend/images/notification_Icons/referral.png')}}" alt="">
                   @else
                       
                    <img src="{{asset('frontend/images/notification_Icons/task.png')}}" alt="">
                   @endif
                 </div>
                 <div class="notifi_content">
                   <h4>{{$item->data['title']}}</h4>
                   <p>{{$item->data['msg']}}</p>
                 </div>
               </div>
             </div>
             @endforeach
           </li>

  





           

           @empty

           <div style="margin: auto;
           margin-top: 130px;" >
           <p style="font-size: 18px; text-align: center;">There are no notifications right now.</p>
        </div>

           @endforelse

         </ul>
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

