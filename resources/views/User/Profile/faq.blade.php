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



       <!-- ------------- faq tab ------------- -->

	<div class="profile_tab_title">
		<h2>FAQ</h2> </div>
	<div class="faq_main_section">
		<h5 class='faq_title'> <span>
          <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 150.009 142.99">
            <g id="iconfinder_Cart_2742767" transform="translate(-6.5 -10.11)">
              <path id="Path_2424" d="M120.18,118.06a17.52,17.52,0,1,0,17.52,17.52h0A17.724,17.724,0,0,0,120.18,118.06Z" fill="#60e99c"/>
              <path id="Path_2425" d="M151,34.53c-.34,0-.84-.17-1.35-.17H43.55L41.87,23.08A15.074,15.074,0,0,0,26.88,10.11H13.24a6.74,6.74,0,0,0,0,13.48H26.88a1.8,1.8,0,0,1,1.68,1.52L38.98,96.18a18.461,18.461,0,0,0,18.19,15.64h70.09a18.721,18.721,0,0,0,18.19-14.8L156.4,42.28a6.653,6.653,0,0,0-5.36-7.74A.076.076,0,0,0,151,34.53Z" fill="#60e99c"/>
              <path id="Path_2426" d="M59.92,118.06a17.616,17.616,0,0,0-16.84,18.19,17.267,17.267,0,0,0,17.15,16.7h.34a17.448,17.448,0,0,0-.65-34.89Z" fill="#60e99c"/>
            </g>
          </svg>

        </span> <span>Order</span> </h5>
		<ul class='faq_list'>
			<li class='mt-2'><span>Q1:</span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr?
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna .</p>
			</li>
			<li class='mt-2'><span>Q2:</span> agna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum? </li>
			<li class='mt-2'><span>Q3:</span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr? </li>
		</ul>
		<h5 class='faq_title mt-4'> <span>
          <svg id="delivery" xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 151 151">
            <path id="Path_2433" d="M0,0H151V151H0Z" fill="none"/>
            <path id="Path_2434" d="M125.84,50.34H106.96V25.17H18.88A12.577,12.577,0,0,0,6.3,37.75h0v69.21H18.88a18.875,18.875,0,1,0,37.75,0H94.38a18.88,18.88,0,0,0,37.76,0h12.58V75.5ZM37.75,116.4a9.43,9.43,0,1,1,.02,0Zm84.94-56.63L135.05,75.5H106.96V59.77Zm-9.44,56.63a9.43,9.43,0,1,1,.02,0Z" fill="#60e99c"/>
          </svg>


        </span> <span>Delivery</span> </h5>
		<ul class='faq_list'>
			<li class='mt-2'><span>Q1:</span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr?
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna .</p>
			</li>
			<li class='mt-2'><span>Q2:</span> agna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum? </li>
			<li class='mt-2'><span>Q3:</span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr? </li>
		</ul>
	</div>
	<!-- ---------- pagination section ------------ -->
	<div class="pagination_section mt-3">
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-end" style="margin:20px 0">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> <span class="sr-only">Previous</span> </a>
				</li>
				<li class="page-item">
					<a class="page-link left_icon_pagi" href="#" aria-label="Previous"> <i class="fas fa-chevron-left"></i> </a>
				</li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link left_icon_pagi" href="#" aria-label="Previous"> <i class="fas fa-chevron-right"></i> </a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> <span class="sr-only">Next</span> </a>
				</li>
			</ul>
		</nav>
	</div>







        </div>
      </div>
   </div>
</div>
<!-- ---- end  tab ------ -->

@include("User.component.task_process")
@include("User.payment.payment_release")
@endsection

