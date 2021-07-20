@extends('user.asset')
<style>
    p{
        font-family: var(--montserrat-font)!important;
    }
    .service_drop{
        margin-top: -23px;
        border: 1px solid #90a0b2;
        border-radius: 10px;
    }
    .dropdown-toggle{
        border-radius: 10px !important;
    }



    .service-cat-container {
        margin-top: 32px;
    }

    .service-cat-label {
        display: inline-block;
        margin-bottom: .5rem;
        z-index: 999999 !important;
        position: absolute;
        top: -36px;
        background: white;
        left: 23;
        font-weight: 600;
        padding: 0 12px;
    }

    @media (max-width: 500px){
        .blog_header_img img {
           display: none;
         }
         .dropper_home_btn button{
            padding: 9px 133px !important;
         }
         #dropper_submit_btn{
           padding: 9px 86px !important;
         }

    }

    @media only screen (min-width: 360px){

         .dropper_home_btn button{
            padding: 9px 125px !important;
         }
         #dropper_submit_btn{
            padding: 9px 78px !important;
         }

    }

</style>
@section('user_content')

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

<!-- ============== Blog header =============== -->
<div class="blog_header_section">
    <div class="row">
        <div class="container">
            <div class="blog_header_content_area">
                <div class="blog_header_content">
                    <h4>Become a dropper</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat consequuntur ducimus quasi </p>

                </div>
                <div class="blog_header_img">
                    <img src="{{asset('frontend')}}/assets/images/Illustrations/blog.png" alt="">

                </div>

            </div>
        </div>
    </div>
</div>

<!-- /* =========================Become a dropper =============== */ -->
<div class="container mt-4">
    <div class="dropper_page_section">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form role="form" method="POST" action="{{route('dropper.register')}}" enctype="multipart/form-data">
        @csrf
            <div class="form-row mt-4 ">
                <div class="form-group col-md-6">
                    <div class="drop_fisrt_name_area">
                        <label for="inputEmail4" class='dropfnm'>First name</label>
                        <input type="text" name="first_name" class="form-control form-control-lg" id="inputEmail4">

                    </div>

                </div>
                <div class="form-group col-md-6">

                    <div class="drop_fisrt_name_area">


                        <label for="inputEmail5" class='dropfnm'>Last name</label>
                        <input type="text" name="last_name" class="form-control form-control-lg" id="inputEmail5">

                    </div>

                </div>

                <div class="form-group col-md-6">

                    <div class="drop_fisrt_name_area">
                        <label for="inputEmail6" class='dropfnm'>Email</label>
                        <input type="email" name="email" class="form-control form-control-lg" id="inputEmail6">
                    </div>
                </div>

                <div class="form-group col-md-6">

                    <div class="drop_fisrt_name_area">
                        <label for="inputEmail7" class='dropfnm'>Phone no</label>
                        <input type="text" name="phone" class="form-control form-control-lg" id="inputEmail7">
                    </div>
                </div>

                <div class="form-group col-md-6">

                    <div class="drop_fisrt_name_area">
                        <label for="inputEmail8" class='dropfnm'>Password</label>
                        <input type="password" name="password" class="form-control form-control-lg" id="inputEmail8">
                    </div>
                </div>

                <div class="form-group col-md-6">

                    <div class="drop_fisrt_name_area">
                        <label for="inputEmail9" class='dropfnm'>ABN</label>
                        <input type="text" name="abn" class="form-control form-control-lg" id="inputEmail9">
                    </div>
                </div>

                <div class="form-group col-md-6">

                    <div class="drop_fisrt_name_area">
                        <label for="inputEmail10" class='dropfnm'>Vehicle type</label>
                        <select class="custom-select dropper_select1 mr-sm-2" name="vehicle_id"
                            id="inlineFormCustomSelect22">
                            <option value="">Select your Vehicle</option>
                            @foreach ($vehicles as $vehicle )
                            <option value="{{$vehicle->id}}">{{$vehicle->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6 service-cat-container">

                    <div class="service_area">
                        <label name="service" for="inputEmail11" class='dropfnm service-cat-label'>Select category</label>
                        <select multiple class="selectpicker w-100 from-controll service_drop" name="services[]" id="dropperselect">
                            @foreach ($services as $data)
                            <option value="{{$data->id}}">{{$data->title}}</option>
                            @endforeach


                        </select>
                    </div>
                </div>

                <div class="form-group col-md-4 mt-4">
                    <div class="front_back_area-tile">


                        <p>Upload driving license -Front & Back</p>
                    </div>
                </div>

                <div class="form-group col-md-4 mt-4 ">
                    <div class="drop_font_area">

                        <label for="file-input_dropper_font" class='dropper_file_choose_area'>

                            <svg xmlns="http://www.w3.org/2000/svg" class='dropper_file_attach'
                                viewBox="0 0 150 117.766">
                                <g id="upload" transform="translate(0 -16.124)">
                                    <g id="Group_45" data-name="Group 45">
                                        <g id="Group_44" data-name="Group 44">
                                            <path id="Path_166" data-name="Path 166"
                                                d="M124.98,55.14A51.56,51.56,0,0,0,23.55,63.95a28.123,28.123,0,0,0,4.69,55.87H51.67v-9.37H28.24a18.75,18.75,0,0,1,0-37.5,4.69,4.69,0,0,0,4.69-4.69,42.184,42.184,0,0,1,83.57-8.21,4.7,4.7,0,0,0,3.98,3.75,23.432,23.432,0,0,1-3.18,46.63H98.54v9.37h18.75a32.8,32.8,0,0,0,7.69-64.66Z"
                                                fill="#5bdb98" />
                                            <path id="Path_167" data-name="Path 167"
                                                d="M71.78,74.31,53.03,93.06l6.61,6.61L70.42,88.94v44.95h9.37V88.93L90.52,99.66l6.61-6.61L78.39,74.31A4.684,4.684,0,0,0,71.78,74.31Z"
                                                fill="#5bdb98" />
                                        </g>
                                    </g>
                                </g>
                            </svg>

                            <input name="license_front" id="file_input_dropper_font" class='custom-file-input' type="file" />

                        </label>
                        <div class="text-center" id="license_front_side_span"></div>
                    </div>
                </div>

                <div class="form-group col-md-4 mt-4 ">
                    <div class="drop_font_area">

                        <label for="file-input_dropper_font" class='dropper_file_choose_area'>

                            <svg xmlns="http://www.w3.org/2000/svg" class='dropper_file_attach'
                                viewBox="0 0 150 117.766">
                                <g id="upload" transform="translate(0 -16.124)">
                                    <g id="Group_45" data-name="Group 45">
                                        <g id="Group_44" data-name="Group 44">
                                            <path id="Path_166" data-name="Path 166"
                                                d="M124.98,55.14A51.56,51.56,0,0,0,23.55,63.95a28.123,28.123,0,0,0,4.69,55.87H51.67v-9.37H28.24a18.75,18.75,0,0,1,0-37.5,4.69,4.69,0,0,0,4.69-4.69,42.184,42.184,0,0,1,83.57-8.21,4.7,4.7,0,0,0,3.98,3.75,23.432,23.432,0,0,1-3.18,46.63H98.54v9.37h18.75a32.8,32.8,0,0,0,7.69-64.66Z"
                                                fill="#5bdb98" />
                                            <path id="Path_167" data-name="Path 167"
                                                d="M71.78,74.31,53.03,93.06l6.61,6.61L70.42,88.94v44.95h9.37V88.93L90.52,99.66l6.61-6.61L78.39,74.31A4.684,4.684,0,0,0,71.78,74.31Z"
                                                fill="#5bdb98" />
                                        </g>
                                    </g>
                                </g>
                            </svg>

                            <input name="license_back" id="file_input_dropper_back" class='custom-file-input'
                                type="file" />

                        </label>
                        <div class="text-center" id="license_back_side_span"></div>
                    </div>
                </div>

                {{-- <div class="form-group col-md-4 mt-4">
                    <div class="drop_front_area">

                        <label for="file-input_dropper_back" class='dropper_file_choose_area'>

                            <svg xmlns="http://www.w3.org/2000/svg" class='dropper_file_attach'
                                viewBox="0 0 150 117.766">
                                <g id="upload" transform="translate(0 -16.124)">
                                    <g id="Group_45" data-name="Group 45">
                                        <g id="Group_44" data-name="Group 44">
                                            <path id="Path_166" data-name="Path 166"
                                                d="M124.98,55.14A51.56,51.56,0,0,0,23.55,63.95a28.123,28.123,0,0,0,4.69,55.87H51.67v-9.37H28.24a18.75,18.75,0,0,1,0-37.5,4.69,4.69,0,0,0,4.69-4.69,42.184,42.184,0,0,1,83.57-8.21,4.7,4.7,0,0,0,3.98,3.75,23.432,23.432,0,0,1-3.18,46.63H98.54v9.37h18.75a32.8,32.8,0,0,0,7.69-64.66Z"
                                                fill="#5bdb98" />
                                            <path id="Path_167" data-name="Path 167"
                                                d="M71.78,74.31,53.03,93.06l6.61,6.61L70.42,88.94v44.95h9.37V88.93L90.52,99.66l6.61-6.61L78.39,74.31A4.684,4.684,0,0,0,71.78,74.31Z"
                                                fill="#5bdb98" />
                                        </g>
                                    </g>
                                </g>
                            </svg>

                            <input name="licensef_back_side" multiple id="file_input_dropper_back" class='custom-file-input'
                                type="file" />

                        </label>
                        <div class="text-center" id="license_back_side_span"></div>
                    </div>
                </div> --}}

                <div class="form-group col-md-4 mt-2">
                    <div class="front_back_area-tile">
                        <p>Upload profile image</p>
                    </div>
                </div>

                <div class="form-group col-md-8 mt-2 ">
                    <div class="drop_font_area">

                        <label for="file-input_dropper_font" class='dropper_file_choose_area'>

                            <svg xmlns="http://www.w3.org/2000/svg" class='dropper_file_attach'
                                viewBox="0 0 150 117.766">
                                <g id="upload" transform="translate(0 -16.124)">
                                    <g id="Group_45" data-name="Group 45">
                                        <g id="Group_44" data-name="Group 44">
                                            <path id="Path_166" data-name="Path 166"
                                                d="M124.98,55.14A51.56,51.56,0,0,0,23.55,63.95a28.123,28.123,0,0,0,4.69,55.87H51.67v-9.37H28.24a18.75,18.75,0,0,1,0-37.5,4.69,4.69,0,0,0,4.69-4.69,42.184,42.184,0,0,1,83.57-8.21,4.7,4.7,0,0,0,3.98,3.75,23.432,23.432,0,0,1-3.18,46.63H98.54v9.37h18.75a32.8,32.8,0,0,0,7.69-64.66Z"
                                                fill="#5bdb98" />
                                            <path id="Path_167" data-name="Path 167"
                                                d="M71.78,74.31,53.03,93.06l6.61,6.61L70.42,88.94v44.95h9.37V88.93L90.52,99.66l6.61-6.61L78.39,74.31A4.684,4.684,0,0,0,71.78,74.31Z"
                                                fill="#5bdb98" />
                                        </g>
                                    </g>
                                </g>
                            </svg>

                            <input name="profile_image" multiple  id="profile_image" class='custom-file-input'
                                type="file" />

                        </label>
                        <div class="text-center" id="profile_image_span"></div>
                    </div>
                </div>
            </div>
            <div class="dropper_btn_area">
                <a href="index.html" class='dropper_home_btn'><button type="button" class="btn ">Home</button></a>
                <button type="submit" class="btn dropper_submit_btn" id="dropper_submit_btn">Submit application</button>
            </div>

        </form>
    </div>

</div>





<!-- --------- invite section --------------- -->
@include("user.partial._Invite")


<script>
    $('#file_input_dropper_font').change(function(e) {
        var imgName = e.target.files[0].name;
        $("#license_front_side_span").text(imgName);
    });

    $('#file_input_dropper_back').change(function(e) {
        var imgName = e.target.files[0].name;
        $("#license_back_side_span").text(imgName);
    });

    $('#profile_image').change(function(e) {
        var imgName = e.target.files[0].name;
        $("#profile_image_span").text(imgName);
    });


</script>


@endsection
