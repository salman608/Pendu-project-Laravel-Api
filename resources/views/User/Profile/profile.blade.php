@extends('User.Asset')
<style>
    .fa.fa-pencil:before{
        font-size: 12px;
        margin-left: -19px;
        margin-bottom: 19px;
        position: absolute;
        color: white;
        background: #60e99c;
        padding: 4px 4px;
        border-radius: 50%;
        border: 1px solid white;
        }
</style>
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
                  <h2>Profile info</h2>
               </div>
               <div class="profile_info_section" style="height: 100%;">
                  <!-- ------------- (Register Form but modify)  ------------- -->
                  <div class="modal-content login_page_modal_content profile_form_area">
                     <div class="modal-body ">
                        <div class="reg_form profile_info_form">
                           <form action="{{ url('profile/update/'.Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <div class="form-group">
                                <div class="col-12 mb-3">

                                <div id="profile-container" style="text-align: center;">
                                   <img id="profileImage" src="{{Auth::user()->profile_photo}}" style="border: 1px solid #5bdb98;border-radius: 50%; margin: auto; display: inline-block;width: 78px;height: 78px;"/>


                                   <i class="fa fa-pencil" style="margin: right" id="porImage"></i>
                                </div>
                                <input id="imageUpload" type="file"
                                       name="profile_photo" placeholder="Photo"  capture style=" display: none;">
                             </div>
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
                                 <label class='reg_sub profile_sub' for="  "style="top: 247px !important;left: 49px">Suburb</label>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control form-control-lg reg_phn_input" value="{{Auth::user()->phone}}" name="phone">
                                 <label class='reg_phn profile_phn' for="  "style="top: 305px!important;left: 49px">Phone</label>
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

<script>
    $("#profileImage").click(function(e) {
    $("#imageUpload").click();
   });

   $("#porImage").click(function(e) {
    $("#imageUpload").click();
   });

    function fasterPreview( uploader ) {
        if ( uploader.files && uploader.files[0] ){
            $('#profileImage').attr('src',
                window.URL.createObjectURL(uploader.files[0]) );
        }
    }

$("#imageUpload").change(function(){
    fasterPreview( this );
});
</script>
@endsection

