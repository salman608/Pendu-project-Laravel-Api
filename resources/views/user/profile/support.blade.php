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
                          <li class="breadcrumb-item active" aria-current="page">Support</li>
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



       <!-- ------------- support tab ------------- -->

	<div class="profile_tab_title">
		<h2>Support</h2> </div>
	<div class="support_section">
		<div class="support_table_area">
			<table class="table table-bordered text-center table-hover">
				<thead class='support_table_head'>
					<tr>
						<th>ID</th>
						<th>Topic</th>
						<th>Type</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>924589654</td>
						<td>Order issue</td>
						<td>Urgent</td>
						<td>
							<svg xmlns="http://www.w3.org/2000/svg" class='table_row_delete_icon' viewBox="0 0 141.113 160.703">
								<g id="delete" transform="translate(-4.899 3.822)">
									<g id="Group_990" transform="translate(1.741 7.462)">
										<path id="Path_2450" d="M106.02,149.42H40.93A23.757,23.757,0,0,1,17.22,125.7V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7a15.688,15.688,0,0,0,15.67,15.67h65.09a15.688,15.688,0,0,0,15.67-15.67V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7A24,24,0,0,1,106.02,149.42Z" fill="#ff7e5d" /> </g>
									<g id="Group_991">
										<path id="Path_2451" d="M129.06,15.85H98.52a23.641,23.641,0,0,0-46.61.01H21.38A16.3,16.3,0,0,0,4.9,31.96v.37A15.96,15.96,0,0,0,20.74,48.41c.21,0,.43,0,.64-.01H129.46A16.282,16.282,0,0,0,130,15.84c-.32-.01-.63-.01-.94.01ZM75.22,4.2A15.113,15.113,0,0,1,90.09,15.85H59.95A15.916,15.916,0,0,1,75.22,4.2Zm53.84,36.16H21.38a8.444,8.444,0,0,1,0-16.88H129.46a8.493,8.493,0,0,1,8.44,8.44A8.844,8.844,0,0,1,129.06,40.36Z" fill="#ff7e5d" /> </g>
									<g id="Group_992" transform="translate(4.726 8.159)">
										<path id="Path_2452" d="M42.38,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,42.38,129.01Z" fill="#ff7e5d" /> </g>
									<g id="Group_993" transform="translate(11.691 8.159)">
										<path id="Path_2453" d="M91.67,129.01a3.8,3.8,0,0,1-4.04-3.54,4.17,4.17,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,91.67,129.01Z" fill="#ff7e5d" /> </g>
									<g id="Group_994" transform="translate(8.208 8.159)">
										<path id="Path_2454" d="M67.02,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81v67.1A4.288,4.288,0,0,1,67.02,129.01Z" fill="#ff7e5d" /> </g>
								</g>
							</svg>
						</td>
					</tr>
					<tr>
						<td>454589654</td>
						<td>Order issue</td>
						<td>Urgent</td>
						<td>
							<svg xmlns="http://www.w3.org/2000/svg" class='table_row_delete_icon' viewBox="0 0 141.113 160.703">
								<g id="delete" transform="translate(-4.899 3.822)">
									<g id="Group_990" transform="translate(1.741 7.462)">
										<path id="Path_2450" d="M106.02,149.42H40.93A23.757,23.757,0,0,1,17.22,125.7V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7a15.688,15.688,0,0,0,15.67,15.67h65.09a15.688,15.688,0,0,0,15.67-15.67V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7A24,24,0,0,1,106.02,149.42Z" fill="#ff7e5d" /> </g>
									<g id="Group_991">
										<path id="Path_2451" d="M129.06,15.85H98.52a23.641,23.641,0,0,0-46.61.01H21.38A16.3,16.3,0,0,0,4.9,31.96v.37A15.96,15.96,0,0,0,20.74,48.41c.21,0,.43,0,.64-.01H129.46A16.282,16.282,0,0,0,130,15.84c-.32-.01-.63-.01-.94.01ZM75.22,4.2A15.113,15.113,0,0,1,90.09,15.85H59.95A15.916,15.916,0,0,1,75.22,4.2Zm53.84,36.16H21.38a8.444,8.444,0,0,1,0-16.88H129.46a8.493,8.493,0,0,1,8.44,8.44A8.844,8.844,0,0,1,129.06,40.36Z" fill="#ff7e5d" /> </g>
									<g id="Group_992" transform="translate(4.726 8.159)">
										<path id="Path_2452" d="M42.38,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,42.38,129.01Z" fill="#ff7e5d" /> </g>
									<g id="Group_993" transform="translate(11.691 8.159)">
										<path id="Path_2453" d="M91.67,129.01a3.8,3.8,0,0,1-4.04-3.54,4.17,4.17,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,91.67,129.01Z" fill="#ff7e5d" /> </g>
									<g id="Group_994" transform="translate(8.208 8.159)">
										<path id="Path_2454" d="M67.02,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81v67.1A4.288,4.288,0,0,1,67.02,129.01Z" fill="#ff7e5d" /> </g>
								</g>
							</svg>
						</td>
					</tr>
					<tr>
						<td>7876589654</td>
						<td>Order issue</td>
						<td>Urgent</td>
						<td>
							<svg xmlns="http://www.w3.org/2000/svg" class='table_row_delete_icon' viewBox="0 0 141.113 160.703">
								<g id="delete" transform="translate(-4.899 3.822)">
									<g id="Group_990" transform="translate(1.741 7.462)">
										<path id="Path_2450" d="M106.02,149.42H40.93A23.757,23.757,0,0,1,17.22,125.7V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7a15.688,15.688,0,0,0,15.67,15.67h65.09a15.688,15.688,0,0,0,15.67-15.67V53.01a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81V125.7A24,24,0,0,1,106.02,149.42Z" fill="#ff7e5d" /> </g>
									<g id="Group_991">
										<path id="Path_2451" d="M129.06,15.85H98.52a23.641,23.641,0,0,0-46.61.01H21.38A16.3,16.3,0,0,0,4.9,31.96v.37A15.96,15.96,0,0,0,20.74,48.41c.21,0,.43,0,.64-.01H129.46A16.282,16.282,0,0,0,130,15.84c-.32-.01-.63-.01-.94.01ZM75.22,4.2A15.113,15.113,0,0,1,90.09,15.85H59.95A15.916,15.916,0,0,1,75.22,4.2Zm53.84,36.16H21.38a8.444,8.444,0,0,1,0-16.88H129.46a8.493,8.493,0,0,1,8.44,8.44A8.844,8.844,0,0,1,129.06,40.36Z" fill="#ff7e5d" /> </g>
									<g id="Group_992" transform="translate(4.726 8.159)">
										<path id="Path_2452" d="M42.38,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,42.38,129.01Z" fill="#ff7e5d" /> </g>
									<g id="Group_993" transform="translate(11.691 8.159)">
										<path id="Path_2453" d="M91.67,129.01a3.8,3.8,0,0,1-4.04-3.54,4.17,4.17,0,0,1,0-.5V57.94a4.035,4.035,0,0,1,8.03,0v67.1A4.3,4.3,0,0,1,91.67,129.01Z" fill="#ff7e5d" /> </g>
									<g id="Group_994" transform="translate(8.208 8.159)">
										<path id="Path_2454" d="M67.02,129.01a3.8,3.8,0,0,1-4.04-3.54,4.171,4.171,0,0,1,0-.5V57.94a4.035,4.035,0,1,1,8.03-.81,3.656,3.656,0,0,1,0,.81v67.1A4.288,4.288,0,0,1,67.02,129.01Z" fill="#ff7e5d" /> </g>
								</g>
							</svg>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="support_btn">
				<button type="button" class="btn " data-toggle="modal" data-target="#tricket_exampleModalCenter">Create a support ticket</button>
			</div>
		</div>
		<!-- /* ------------- support chat section (chat ) ------------- */ -->
		<div class="support_chat_section">
			<div class="row">
				<div class="col-lg-4 ">
					<div class="support_details_area">
						<div class="support_details_item">
							<p>Ticket submitted by</p>
							<div class="support_client_name">
								<h3>John Doe</h3> </div>
							<p>Topic</p>
							<div class="support_client_name">
								<h3>Payment Issue</h3> </div>
						</div>
						<div class="support_details_item mt-3">
							<p>Supporting by</p>
							<div class="support_client_name">
								<h3>XYZ</h3>
								<p class='pendu_support_name'>CTO, Pendu</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 ">
					<!-- ------------- copy of message tab ------------- -->
					<div class=" inbox_user_msg support_msg_area">
						<div class="myself_client_msg_area support_client_myselft_msg_area">
							<div class="myself_msg_area">
								<div class="myself_name_pic_area "> <span class='myself_name'>Name</span> <span class='myself_time'>10.24</span> <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt=""> </div>
								<div class='myself_msg support_myself_msg'>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
								</div>
							</div>
							<div class="client_msg_area">
								<div class="client_name_pic_area"> <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt=""> <span class='client_name'>Name</span> <span class='client_time'>10.24</span> </div>
								<div class='client_msg support_client_msg'>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
								</div>
							</div>
							<div class="myself_msg_area ">
								<div class="myself_name_pic_area"> <span class='myself_name'>Name</span> <span class='myself_time'>10.24</span> <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt=""> </div>
								<div class='myself_msg support_myself_msg'>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
								</div>
							</div>
							<div class="client_msg_area ">
								<div class="client_name_pic_area"> <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt=""> <span class='client_name'>Name</span> <span class='client_time'>10.24</span> </div>
								<div class='client_msg support_client_msg'>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
								</div>
							</div>
							<div class="myself_msg_area ">
								<div class="myself_name_pic_area"> <span class='myself_name'>Name</span> <span class='myself_time'>10.24</span> <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt=""> </div>
								<div class='myself_msg support_myself_msg'>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
								</div>
							</div>
							<div class="client_msg_area ">
								<div class="client_name_pic_area"> <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt=""> <span class='client_name'>Name</span> <span class='client_time'>10.24</span> </div>
								<div class='client_msg support_client_msg'>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
								</div>
							</div>
							<div class="unread_msg_area ">
								<h3>UNREAD</h3>
								<div class="unread_name_pic_area mt-2"> <img src="{{asset('frontend')}}/assets/images/member/men_pic13.jpg" alt=""> <span class='unread_name'>Name</span> <span class='unread_time'>10.24</span> </div>
								<div class="unread_msg support_unread_msg">
									<p class='mt-2'>Many desktop publishing packages and web page editors now use Lorem Ipsum</p>
									<p>Many desktop publishing packages and web page editors now use Lorem Ipsum</p>
								</div>
							</div>
						</div>
						<div class="msg_typing_area mt-4">
							<form>
								<div class="input-group typing_input_group_area">
									<input type="text" class="form-control form-control-lg msg_input_typing" id="inlineFormInputGroupUsername" placeholder="Start typing here...…..">
									<div class="input-group-prepend">
										<div class="input-group-text typing_input_group">
											<div class="msg_send_btn support_msg_send_btn">
												<button type="submit" class="btn ">Send</button>
												<svg xmlns="http://www.w3.org/2000/svg" class='send_svg' viewBox="0 0 150 95.66">
													<path id="Path_124" d="M87.6,99.29v22.73l62.9-47.18L87.6,27.67V49.93A83.28,83.28,0,0,0,62.27,54.7,94.515,94.515,0,0,0,8.41,106.52L.5,123.33l16.41-8.71A151.7,151.7,0,0,1,87.6,99.29ZM93.04,62.4l6.92.84V52.38l29.93,22.44L99.97,97.27V87.76l-5.61-.53c-.51-.05-4.27-.38-10.28-.38a170.617,170.617,0,0,0-55.45,9.14,72.219,72.219,0,0,1,64.4-33.6h.01Z" transform="translate(-0.5 -27.67)" fill="#d0dbe5" /> </svg>
											</div>
										</div>
									</div>
								</div>
								<div class="support_msg_emoji_section mt-1">
									<div class="support_msg_icon mt-2"> <span class='text-size_icon'><i class="fas fa-text-height"></i></span> <span class='emoji_icon'><i class="far fa-grin-alt"></i></span> <span class='support_attach_icon'>
                  <label for="file-input" >
                    <i class="fas fa-paperclip"></i>
                    <input id="file-input" class='custom-file-input' type="file"/>

                  </label>
                </span> </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /* ------------- support modal tab ------------- */ -->
	<!-- Modal -->
	<div class="modal fade" id="tricket_exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body tricket_modal_body">
					<div class="tricket_modal_section">
						<div class="tricket_top_content">
							<h5>Submit new ticket</h5>
							<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
						</div>
						<div class="tricket_form_area">
							<form>
								<div class="form-group">
									<label for="formGroupExampleInput">Topic</label>
									<input type="text" class="form-control" id=" "> </div>
								<div class="form-group">
									<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
									<select class="custom-select my-1 mr-sm-2 tricket_selectbox" id="inlineFormCustomSelectPref">
										<option selected>Choose...</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Describe your issue</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn trick_close_btn" data-dismiss="modal">Close</button>
					<button type="button" class="btn trick_save_btn">Submit ticket</button>
				</div>
			</div>
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

