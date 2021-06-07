@extends('User.Asset')
@section('user_content')
<div class="container profile_tab_main_area">
   <div class="row">
      @include('User.Partial._Sidebar')
      <div class="col-md-8 col-lg-8 col-xl-8    order_details_row">
        <div>             <!-- ------------- profile tab info  ------------- -->      
            <div class="profile_tab_title">
                  <h2>Profile info</h2>
               </div>
               <div class="profile_info_section">
                  <!-- ------------- (Register Form but modify)  ------------- -->
                  <div class="modal-content login_page_modal_content profile_form_area">
                     <div class="modal-body ">
                        <div class="reg_form profile_info_form">
                           <form action="{{ url('profile/update/'.Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                 <input type="text" class="form-control form-control-lg pro_reg_name_input" value="{{Auth::user()->name}}" name="name">
                                 <label class='reg_name' id="pro_reg_name" for="" style="top: -43px !important">Name</label>
                              </div>
                              <div class="form-group">
                                 <input type="email" class="form-control form-control-lg reg_mail_input"  value="{{Auth::user()->email}}"  name="email">
                                 <label class='reg_mail' for="  " style="top: -43px !important">Email</label>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control form-control-lg reg_sub_input"  value="{{Auth::user()->suburb}}" name="suburb">
                                 <label class='reg_sub profile_sub' for="  "style="top: 153px !important;left: 49px">Suburb</label>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control form-control-lg reg_phn_input" value="{{Auth::user()->phone}}" name="phone">
                                 <label class='reg_phn profile_phn' for="  "style="top: 211px !important;left: 49px">Phone</label>
                              </div>
                              <div class="form-group">
                                 <div class="col-8">
                                    <input type="file" class="form-control form-control-lg " name="profile_image" style="width:100% !important;">
                                 </div>
                                 <label class='reg_image' for="" style="top: 268px !important;left: 49px">Image</label>
                              </div>
                              {{-- 
                              <div class="col-4 mt-4">
                                 <img style="height: 50px;width: 50px;border-radius: 25px;" src="{{Auth::user()->profile_image}}" alt="">
                              </div>
                              --}}
                        </div>
                        <div class="reg_btn profile_info_btn">
                        <button type="submit" class="btn ">Save</button>
                        </div>
                        </form>
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
@endsection

