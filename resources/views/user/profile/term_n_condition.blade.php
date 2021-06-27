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
                          <li class="breadcrumb-item active" aria-current="page">Term & Conditons</li>
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



       <!-- ------------- Term and conditions tab (faq) ------------- -->

	<div class="profile_tab_title">
		<h2>Term and conditions</h2> </div>
	<div class="term_condition_section">
		<div class="term_condi_itea">
			<ul>
				<li>Lorem ipsum dolor </li>
				<p>Lorem ipsum untyam e vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebasd gur sit.</p>
				<li>Lorem ipsum dolor </li>
				<p>Lorem ipsum untyam e vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebasd gur sit.</p>
				<li>Lorem ipsum dolor </li>
				<p>Lorem ipsum untyam e vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebasd gur sit.</p>
			</ul>
		</div>
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
<!-- --------- invite section --------------- -->
@include("user.partial._Invite")

@include("user.component.task_process")
@include("user.payment.payment_release")
@endsection

