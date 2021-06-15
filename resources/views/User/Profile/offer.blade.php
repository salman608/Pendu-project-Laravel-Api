@extends('User.Asset')
@section('user_content')

<style>
    .card{
        border-radius: 10px !important;
        width: 232px !important;
    }
    .promo-chead{
        background: #FFB44A;
    }
    .bg-pendu{
        background: #56CD93;
    }

    .promo p {
        width: 194px;
        letter-spacing: 0px !important;
        color: #90A0B2 !important;
        opacity: 1 !important;
        text-align: left;
        /* height: 156px; */
        font-size: 15px;
    }
    .promo a{
        margin: right;
        background: #56CD93;
        color: white;
        float: right;
    }
    .promo a:hover{
        color: white;
        background: #56CD93;
    }
    .promo .btn-sm{
        padding: 1px 25px;
        border-radius: 6px;

    }
    .promo h4{
        font-size: 14px;

    }
    .promo span{
        letter-spacing: 0px;
        color: #90A0B2;
        opacity: 1;
    }
    .promo i{
        color: #FFB44A;
        padding-right: 15px;

    }

    .promo-details span{
        font-size: 13px;
        letter-spacing: 0px;
        color: #51BE8F;
        opacity: 1;
        padding-right: 26px;
        padding-left: 15px;
        font-weight: 500;
        cursor: pointer;

    }

    .promo-details button{
        border: none;
        background: no-repeat;
        color: #56cd93;
        padding-right: 30px;
    }

    .percent-circle{
        font-size: 69px;
        text-align: center;
        height: 100px;
        width: 100px;
        border: 1px solid #52d089;
        margin-top: 43px;
        border-radius: 50%;
        background: #52d089;
        margin-right: 212px;
        color: white;
    }
    .bg-pendu-color{
        background-color: #60e99c;
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
                          <li class="breadcrumb-item"><a href="">Home</a></li>
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
      <div class="col-md-8 col-lg-8 col-xl-8 order_details_row">
        <div>


            <div class="profile_tab_title">
                <h2>Offers</h2>
             </div>
            <div class="container profile_tab_main_area">
                <div class="row mt-5">
                    @forelse ($offers as $offer)
                    <div class="col-md-4 promo-card">
                        <div class="card " style="border-radius: 10px;">
                            <div class="card-header promo-chead

                            @php if ($offer->appliedCoupons->contains(auth()->user()->id))
                                echo "bg-pendu-color";
                            @endphp

                            ">
                                <p style="font-size:16px; margin-bottom:1px; font-weight:500">Promo</p>
                                <h5 style="font-size: 20px;color:white;margin-bottom:1px;" >{{$offer->promo_code}}</h5>
                                <h5 style="font-size: 20px;color:white;" >{{$offer->discount_percentage}}% off</h5>
                            </div>
                            <div class="card-body promo">
                              <p class="card-text">{{Str::limit($offer->details,140)}}</p>
                              <h4><i class="far fa-hourglass"></i> <span style="font-size: 12px">Validity: {{$offer->valid_range}}</span></h4>
                              <div class="row promo-details mt-4">
                                <button id="show-offer" data-id="{{ $offer->id }}">View details</button>

                                @if ($offer->appliedCoupons->contains(auth()->user()->id))
                                    <a disabled class="btn btn-sm" style="background:none;color:gray;">Applied</a></div>
                                @else
                                <a class="btn btn-sm text-white">Apply</a></div>
                                @endif

                            </div>
                          </div>
                      </div>
                    @empty
                        <div class="col-md-12 promo-card">
                            <h4>No offer found. Check again later.</h4>
                      </div>
                    @endforelse
{{--
                  <div class="col-md-4">
                    <div class="card promo-card">
                        <div class="card-header promo-chead

                        @php if ($offer->appliedCoupons->contains(auth()->user()->id))
                            bg-success
                        @endphp

                        ">
                            <p style="font-size:16px; margin-bottom:1px;font-weight:500">Promo</p>
                            <h5 style="font-size: 20px;color:white;margin-bottom:1px;" >RENOVATION</h5>
                            <h5 style="font-size: 20px;color:white;" >4% off</h5>
                        </div>
                        <div class="card-body promo">
                          <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadips cing elitr, sed diam nonu my eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                          <h4><i class="far fa-hourglass"></i>  <span>Validity: 1 Feb- 30 Jun</span></h4>
                          <div class="row promo-details mt-4"><span>View details</span><a href="#" data-toggle="modal" data-target="#detailsModal" class="btn btn-sm">Apply</a></div>
                        </div>
                      </div>
                  </div> --}}
                </div>
            </div>


          <!-- Modal -->
<div class="modal fade" id="offer-details-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div style="background: #60e99c;">
            <div class="modal-header" style="border-bottom: 0px solid #dee2e6;padding:0px !important;background: #60e99c">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-right: -297px;">
                    <input type="button" aria-hidden="true" class="modal-cross-btn" value="x">
                </button>
                 <div class="row bt-5" style="margin-bottom: 23px">
                     <div class="percent-circle" style="font-size:69px;text-align:center;" id="promo-code-percentage">%</div>
                 </div>

            </div>
           </div>
           <div class="modal-body" id="details-offer-body">
            <div class="row mb-3">
                <div class="col-md-7 ">
                     <p style="padding-bottom: 1px;">Promo</p>
                     <h6 style="font-size: 20px;font-weight:500;margin-top: -15px" id="promo-code-show"></h6>
                </div>
                <div class="col-md-5">
                     <p>Validity</p>
                     <h6 style="font-size: 20px;font-weight:500;margin-top: -15px" id="promo-code-range">1 FEB-1 JUN 2021</h6>
                </div>
                <div class="col-md-12 mt-2" id="promo-code-ul-container">
                </div>
            </div>
           </div>

       </div>
    </div>
</div>



        </div>
      </div>
   </div>
</div>
<!-- ---- end  tab ------ -->

@include("User.component.task_process")
@include("User.payment.payment_release")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>


    function liList(couponInfo){
        let html ="<ul>";
            couponInfo.forEach(info => {
                html += "<li>" + info.info + "</li>";
            });
        html += "</ul>"

        return html;
    }

    $('body').on('click', '#show-offer', function() {

        let couponId = $(this).attr("data-id");
     
        let url = '{{ route("user.offer-details", ":id") }}';
        url = url.replace(':id', couponId);


        $.ajax({
            url: url,
            data: {id:couponId},
            type: "GET",
            dataType: "JSON",
            success: function(data){
                if($.isEmptyObject(data) != null){
                    console.log(data);
                    
                    
                    $('#promo-code-show').text(data.coupon.promo_code);
                    $('#promo-code-range').text(data.coupon.valid_range_year);
                    $('#promo-code-percentage').text(data.coupon.discount_percentage+"%");

                    

                    $("#promo-code-ul-container").empty();

                    $("#promo-code-ul-container").append(liList(data.coupon.info));


                    $('#offer-details-modal').modal('show');
                }
		    }
		});
            
    });
</script>
@endsection

