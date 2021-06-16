@extends('user.asset')
@section('user_content')

<!-- ------  login Modal ----- -->
<div class="login_modal">


    <!-- Modal -->
    <div class="modal fade" id="login_exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">
          <div class="modal-header login_header">
            <h5 class="modal-title " id="exampleModalLongTitle">Login/Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="login_form">
              <form>
                <div class="form-group">
                  <input type="email" class="form-control login_input" id=" " >
                  <label class='login_email' for="  ">Email address</label>


                </div>
                <div class="form-group">
                  <input type="password" class="form-control pass_input" id=" ">
                  <label class='login_pass' for=" ">Password</label>

                </div>

                <div class="login_btn1 mt-4">
                  <button type="submit" class="btn ">Login</button>
                  <div class="rember_forget mt-2">
                    <form action="">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id=" ">
                        <label class="form-check-label rember_login" for=" ">Remember me</label>
                      </div>
                    </form>
                    <p>Forgot password?</p>
                  </div>
                  <div class="login_social_icon">
                    <span>Or login with</span>
                   <a href="#"> <img class=' google_icon' src="https://img.icons8.com/color/48/000000/google-logo.png"/></a>

                   <a href="#"> <i class="fab fa-apple apple_login_icon"></i></a>
                    <a href="#"><i class="fab fa-facebook login_fb_icon"></i></a>


                  </div>
                </div>


              </form>
            </div>
          </div>

          <div class="modal-footer login_footer">
            <p>New user,<span data-toggle="modal" data-target="#reg_exampleModalCenter"> Register!</span></p>


          </div>
        </div>

      </div>
    </div>
          </div>

          <!-- ------  Register Modal ----- -->
          <div class="register_modal">


    <!-- Modal -->
    <div class="modal fade" id="reg_exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">
          <div class="modal-header reg_modal_header">
            <h5 class="modal-title" id="reg_exampleModalLongTitle">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="reg_form">
              <form action="">

                <div class="form-group">
                  <input type="text" class="form-control reg_name_input" id=" "  >
                  <label class='reg_name' for="  ">Name</label>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control reg_mail_input" id=" "  >
                  <label class='reg_mail' for="  ">Email</label>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control reg_sub_input" id=" "  >
                  <label class='reg_sub' for="  ">Suburb</label>
                </div>

                <div class="form-group">
                  <input type="number" class="form-control reg_phn_input" id=" "  >
                  <label class='reg_phn' for="  ">Phone</label>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control reg_pass_input" id=" "  >
                  <label class='reg_pass' for="  ">Password</label>
                </div>
                <div class="reg_btn">
                  <button type="submit" class="btn ">Register</button>
                </div>


              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
          </div>

         <!-- ===================== Hero Section ================= -->
         <section class="hero_section ">

          <div class="container ">
            <div class="row">

             <div class="col-md-9  hero_main_content1">

              <div class="hero_content">
                <h1>Get your products <br> DELIVERY! </h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipiscing elit ultricies tempor. Nascetur iaculis ante erat etiam semper turpis mus eu augue, gravida primis</p>
              </div>
              <div class="hero_button">
               <div class="hero_button1">
                 <a href="#" class="btn">read more</a>
               </div>
               <div class="hero_button2 mt-2">
                 <a href="#" class="btn">download app</a>
               </div>

              </div>
              <div class="hero_app_store_btn mt-2">
                <div class="app_btn1">
                  <img src="{{asset('frontend')}}/assets/images/Icons/apple2.svg" class="hero_apple_icon" alt="playstore icon">
                </div>
                <div class="app_btn2">
                  <img src="{{asset('frontend')}}/assets/images/Icons/playstore2.svg" class="hero_goole_icon" alt="playstore icon">
                </div>
              </div>


              <div class="hero_service ">
                <div class="container">


                <div class="row">

                  <div class="col-xl-3 col-lg-3 col-md-4 col-4">
                    <a href="{{ url('shop_n_drop') }}">
                      <div class="hero_item">
                        <div class="hero_item_icon">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 145.942 156.32">
                            <g id="Layer_29" transform="translate(-2.03 3.16)">
                              <path id="Path_1" data-name="Path 1" d="M142.74,153.16H90.63a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L95.84,32.84a5.212,5.212,0,0,1,5.21-4.74h31.27a5.212,5.212,0,0,1,5.21,4.74l10.42,114.64a5.207,5.207,0,0,1-4.72,5.66A4.014,4.014,0,0,1,142.74,153.16ZM96.31,142.74h40.75L127.58,38.52H105.8Z" fill="#5bdb98"/>
                              <path id="Path_2" data-name="Path 2" d="M90.63,153.16H7.26a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L12.47,32.84a5.212,5.212,0,0,1,5.21-4.74h83.37a5.207,5.207,0,0,1,5.23,5.19c0,.16-.01.33-.02.49L95.84,148.42A5.205,5.205,0,0,1,90.63,153.16ZM12.94,142.74H85.89L95.37,38.52H22.42Z" fill="#5bdb98"/>
                              <rect id="Rectangle_1" data-name="Rectangle 1" width="10.42" height="31.27" transform="translate(111.48 116.69)" fill="#5bdb98"/>
                              <path id="Path_3" data-name="Path 3" d="M80.21,59.37A5.207,5.207,0,0,1,75,54.16V22.89a15.63,15.63,0,0,0-31.26,0V54.16a5.21,5.21,0,0,1-10.42,0V22.89a26.05,26.05,0,1,1,52.1,0V54.16A5.213,5.213,0,0,1,80.21,59.37Z" fill="#5bdb98"/>
                              <path id="Path_4" data-name="Path 4" d="M111.48,38.52a5.207,5.207,0,0,1-5.21-5.21V22.89A15.633,15.633,0,0,0,90.64,7.26a5.21,5.21,0,0,1,0-10.42,26.046,26.046,0,0,1,26.05,26.05V33.31A5.213,5.213,0,0,1,111.48,38.52Z" fill="#5bdb98"/>
                            </g>
                          </svg>

                        </div>
                        <div class="hero_item_contetn mt-4">
                          <h2>shop & Drop</h2>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-4 col-4">
                    <a href="{{ url('collect_n_delivery') }}">

                    <div class="hero_item">
                      <div class="hero_item_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 121.93">
                          <path id="Collect_and_drop" data-name="Collect and drop" d="M140.88,98.13a7.671,7.671,0,0,0-1.9.24c-11.05,2.78-23.7,5.71-33.75,6.34-.49.03-1.1.05-1.82.05-7.65,0-19.76-1.41-21.96-2.56a8.053,8.053,0,0,1-3.15-2.78H95.7a9.445,9.445,0,0,0,9.19-6.03h34.83a8.269,8.269,0,0,0,8.26-8.26V22.3a8.269,8.269,0,0,0-8.26-8.26H67.4a8.269,8.269,0,0,0-8.26,8.26V75.42c-7.52.25-17.89,2.42-24.5,7.88-2.65,2.19-4.57,3.69-6.11,4.89-.99.78-1.85,1.45-2.66,2.11-3.26,2.68-6.08,4.99-22.36,4.99a3.5,3.5,0,0,0-3.5,3.5v33.67a3.511,3.511,0,0,0,3.51,3.51,3.414,3.414,0,0,0,1.18-.21c13.89-4.97,16.37-5.7,22.35-7.45l.54-.16c.5-.15.98-.29,1.45-.44a26.618,26.618,0,0,1,9.03-1.51c4.47,0,10.56.8,19.15,2.52,16.82,3.37,24.92,4.85,31.92,4.85h0a88.462,88.462,0,0,0,12.58-1.15c10.01-1.41,29.7-7.98,39.74-13.27,3.2-1.68,8.55-4.5,8.55-10.51v-.23C150,103.56,146.26,98.13,140.88,98.13ZM95.55,21.04h16.03V50.16H95.55Zm-28.15,0H88.54V53.66a3.5,3.5,0,0,0,3.5,3.5h23.04a3.5,3.5,0,0,0,3.5-3.5V21.04h21.14a1.25,1.25,0,0,1,1.25,1.25V85.11a1.25,1.25,0,0,1-1.25,1.25H105a9.46,9.46,0,0,0-8.72-7.31c-4.19-.27-10.86-1.08-17.31-1.86-4.71-.57-9.21-1.12-12.83-1.47V22.3A1.261,1.261,0,0,1,67.4,21.04Zm75.59,87.61c0,1.36-1.12,2.37-4.81,4.31-9.32,4.91-28.22,11.23-37.45,12.53a81.752,81.752,0,0,1-11.6,1.09c-6.02,0-12.91-1.18-30.55-4.71-9.06-1.81-15.58-2.66-20.53-2.66a33.473,33.473,0,0,0-11.07,1.81c-.45.14-.9.28-1.38.41l-.54.16c-5.37,1.57-7.98,2.33-18.06,5.91V102.26c14.61-.34,18.8-2.85,23.31-6.55.74-.61,1.57-1.26,2.53-2.01,1.57-1.23,3.53-2.76,6.26-5.01,5.27-4.35,14.61-6.3,21.53-6.3.8,0,1.55.03,2.25.08,3.78.29,9.35.97,15.25,1.68,6.55.79,13.32,1.62,17.71,1.9a2.541,2.541,0,0,1,2.45,2.48c.02.24.03,1.36.04,2.22,0,1.11-1.56,1.63-2.62,1.63H73.73a3.5,3.5,0,0,0-3.5,3.33,14.135,14.135,0,0,0,7.97,12.66c4.51,2.36,19.86,3.36,25.21,3.36.87,0,1.63-.02,2.26-.06,10.61-.66,23.66-3.68,35.02-6.54a.648.648,0,0,1,.19-.02c.79,0,2.11,1.59,2.11,3.28v.26Z" transform="translate(-0.01 -14.04)" fill="#5bdb98"/>
                        </svg>

                      </div>
                      <div class="hero_item_contetn mt-4">
                        <h2>Collect & Delivery</h2>
                      </div>
                    </div>
                    </a>
                  </div>

                  <div class="col-xl-3 col-lg-3 col-md-4 col-4">
                    <a href="{{ url('mover') }}">

                    <div class="hero_item">
                      <div class="hero_item_icon">
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 135.01 111.55">
                          <path id="Movers" d="M58.13,29.79H12.77A5.271,5.271,0,0,1,7.5,24.52h0a5.271,5.271,0,0,1,5.27-5.27H58.12a5.271,5.271,0,0,1,5.27,5.27h0A5.256,5.256,0,0,1,58.13,29.79ZM47.58,40.34H12.78a5.271,5.271,0,0,0-5.27,5.27h0a5.271,5.271,0,0,0,5.27,5.27h34.8a5.271,5.271,0,0,0,5.27-5.27h0A5.271,5.271,0,0,0,47.58,40.34ZM37.03,61.43H12.77A5.271,5.271,0,0,0,7.5,66.7h0a5.271,5.271,0,0,0,5.27,5.27H37.03A5.271,5.271,0,0,0,42.3,66.7h0A5.277,5.277,0,0,0,37.03,61.43Zm95.9,58.8H120.5a15.811,15.811,0,0,1-29.82,0H58.01a15.811,15.811,0,0,1-29.82,0H23.33A15.816,15.816,0,0,1,7.51,104.41V87.8a5.271,5.271,0,0,1,5.27-5.27h0a5.271,5.271,0,0,1,5.27,5.27v16.61a5.271,5.271,0,0,0,5.27,5.27h4.86a15.811,15.811,0,0,1,29.82,0H89.76V35.04a5.271,5.271,0,0,0-5.27-5.27H79.22a5.271,5.271,0,0,1-5.27-5.27h0a5.271,5.271,0,0,1,5.27-5.27h5.27a15.816,15.816,0,0,1,15.82,15.82V45.62h10.57a15.833,15.833,0,0,1,12.63,6.29l14.74,19.52a21.112,21.112,0,0,1,4.26,12.71v26.52A9.585,9.585,0,0,1,132.93,120.23ZM100.31,56.16V75.94h28.12L115.09,58.26a5.3,5.3,0,0,0-4.21-2.1H100.31Zm-51.94,58.8a5.27,5.27,0,1,0-5.27,5.27A5.277,5.277,0,0,0,48.37,114.96Zm62.49,0a5.27,5.27,0,1,0-5.27,5.27A5.277,5.277,0,0,0,110.86,114.96Zm21.09-8.08V86.48H100.31v13.56a15.6,15.6,0,0,1,5.27-.91,15.829,15.829,0,0,1,14.91,10.55h8.65A2.791,2.791,0,0,0,131.95,106.88Z" transform="translate(-7.5 -19.23)" fill="#5bdb98"/>
                        </svg>

                      </div>
                      <div class="hero_item_contetn mt-4">
                        <h2>Movers</h2>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              </div>
             </div>
            </div>
          </div>
         </section>

        <!-- ================== Service Section =============== -->
        <section class="service_home">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-xl-4 col-md-4 col-sm-6 mt-2">
                        <div class="card service_item text-center">
                           <div class="sevice_icon">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 145.942 156.32" style='width: 70px; height: auto;'>
                              <g id="Layer_29" transform="translate(-2.03 3.16)">
                                <path id="Path_1" data-name="Path 1" d="M142.74,153.16H90.63a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L95.84,32.84a5.212,5.212,0,0,1,5.21-4.74h31.27a5.212,5.212,0,0,1,5.21,4.74l10.42,114.64a5.207,5.207,0,0,1-4.72,5.66A4.014,4.014,0,0,1,142.74,153.16ZM96.31,142.74h40.75L127.58,38.52H105.8Z" fill="#5bdb98"/>
                                <path id="Path_2" data-name="Path 2" d="M90.63,153.16H7.26a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L12.47,32.84a5.212,5.212,0,0,1,5.21-4.74h83.37a5.207,5.207,0,0,1,5.23,5.19c0,.16-.01.33-.02.49L95.84,148.42A5.205,5.205,0,0,1,90.63,153.16ZM12.94,142.74H85.89L95.37,38.52H22.42Z" fill="#5bdb98"/>
                                <rect id="Rectangle_1" data-name="Rectangle 1" width="10.42" height="31.27" transform="translate(111.48 116.69)" fill="#5bdb98"/>
                                <path id="Path_3" data-name="Path 3" d="M80.21,59.37A5.207,5.207,0,0,1,75,54.16V22.89a15.63,15.63,0,0,0-31.26,0V54.16a5.21,5.21,0,0,1-10.42,0V22.89a26.05,26.05,0,1,1,52.1,0V54.16A5.213,5.213,0,0,1,80.21,59.37Z" fill="#5bdb98"/>
                                <path id="Path_4" data-name="Path 4" d="M111.48,38.52a5.207,5.207,0,0,1-5.21-5.21V22.89A15.633,15.633,0,0,0,90.64,7.26a5.21,5.21,0,0,1,0-10.42,26.046,26.046,0,0,1,26.05,26.05V33.31A5.213,5.213,0,0,1,111.48,38.52Z" fill="#5bdb98"/>
                              </g>
                            </svg>
                           </div>
                             <div class="card-body service_iteam_body">
                              <h5 class="card-title">Shop & Drop</h5>
                              <p class="card-text mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>

                            </div>
                          </div>

                    </div>

                    <div class="col-xl-4 col-md-4 col-sm-6 mt-2">
                        <div class="card service_item text-center ">
                           <div class="sevice_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 121.93" style='width: 95px; height: auto;'>
                              <path id="Collect_and_drop" data-name="Collect and drop" d="M140.88,98.13a7.671,7.671,0,0,0-1.9.24c-11.05,2.78-23.7,5.71-33.75,6.34-.49.03-1.1.05-1.82.05-7.65,0-19.76-1.41-21.96-2.56a8.053,8.053,0,0,1-3.15-2.78H95.7a9.445,9.445,0,0,0,9.19-6.03h34.83a8.269,8.269,0,0,0,8.26-8.26V22.3a8.269,8.269,0,0,0-8.26-8.26H67.4a8.269,8.269,0,0,0-8.26,8.26V75.42c-7.52.25-17.89,2.42-24.5,7.88-2.65,2.19-4.57,3.69-6.11,4.89-.99.78-1.85,1.45-2.66,2.11-3.26,2.68-6.08,4.99-22.36,4.99a3.5,3.5,0,0,0-3.5,3.5v33.67a3.511,3.511,0,0,0,3.51,3.51,3.414,3.414,0,0,0,1.18-.21c13.89-4.97,16.37-5.7,22.35-7.45l.54-.16c.5-.15.98-.29,1.45-.44a26.618,26.618,0,0,1,9.03-1.51c4.47,0,10.56.8,19.15,2.52,16.82,3.37,24.92,4.85,31.92,4.85h0a88.462,88.462,0,0,0,12.58-1.15c10.01-1.41,29.7-7.98,39.74-13.27,3.2-1.68,8.55-4.5,8.55-10.51v-.23C150,103.56,146.26,98.13,140.88,98.13ZM95.55,21.04h16.03V50.16H95.55Zm-28.15,0H88.54V53.66a3.5,3.5,0,0,0,3.5,3.5h23.04a3.5,3.5,0,0,0,3.5-3.5V21.04h21.14a1.25,1.25,0,0,1,1.25,1.25V85.11a1.25,1.25,0,0,1-1.25,1.25H105a9.46,9.46,0,0,0-8.72-7.31c-4.19-.27-10.86-1.08-17.31-1.86-4.71-.57-9.21-1.12-12.83-1.47V22.3A1.261,1.261,0,0,1,67.4,21.04Zm75.59,87.61c0,1.36-1.12,2.37-4.81,4.31-9.32,4.91-28.22,11.23-37.45,12.53a81.752,81.752,0,0,1-11.6,1.09c-6.02,0-12.91-1.18-30.55-4.71-9.06-1.81-15.58-2.66-20.53-2.66a33.473,33.473,0,0,0-11.07,1.81c-.45.14-.9.28-1.38.41l-.54.16c-5.37,1.57-7.98,2.33-18.06,5.91V102.26c14.61-.34,18.8-2.85,23.31-6.55.74-.61,1.57-1.26,2.53-2.01,1.57-1.23,3.53-2.76,6.26-5.01,5.27-4.35,14.61-6.3,21.53-6.3.8,0,1.55.03,2.25.08,3.78.29,9.35.97,15.25,1.68,6.55.79,13.32,1.62,17.71,1.9a2.541,2.541,0,0,1,2.45,2.48c.02.24.03,1.36.04,2.22,0,1.11-1.56,1.63-2.62,1.63H73.73a3.5,3.5,0,0,0-3.5,3.33,14.135,14.135,0,0,0,7.97,12.66c4.51,2.36,19.86,3.36,25.21,3.36.87,0,1.63-.02,2.26-.06,10.61-.66,23.66-3.68,35.02-6.54a.648.648,0,0,1,.19-.02c.79,0,2.11,1.59,2.11,3.28v.26Z" transform="translate(-0.01 -14.04)" fill="#5bdb98"/>
                            </svg>
                           </div>
                             <div class="card-body service_iteam_body">
                              <h5 class="card-title">Collect & drop</h5>
                              <p class="card-text mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>

                            </div>
                          </div>

                    </div>

                    <div class="col-xl-4 col-md-4 col-sm-6 mt-2 ">
                        <div class="card service_item text-center ">
                           <div class="sevice_icon">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 135.01 111.55" style='width: 90px; height: auto;'>
                              <path id="Movers" d="M58.13,29.79H12.77A5.271,5.271,0,0,1,7.5,24.52h0a5.271,5.271,0,0,1,5.27-5.27H58.12a5.271,5.271,0,0,1,5.27,5.27h0A5.256,5.256,0,0,1,58.13,29.79ZM47.58,40.34H12.78a5.271,5.271,0,0,0-5.27,5.27h0a5.271,5.271,0,0,0,5.27,5.27h34.8a5.271,5.271,0,0,0,5.27-5.27h0A5.271,5.271,0,0,0,47.58,40.34ZM37.03,61.43H12.77A5.271,5.271,0,0,0,7.5,66.7h0a5.271,5.271,0,0,0,5.27,5.27H37.03A5.271,5.271,0,0,0,42.3,66.7h0A5.277,5.277,0,0,0,37.03,61.43Zm95.9,58.8H120.5a15.811,15.811,0,0,1-29.82,0H58.01a15.811,15.811,0,0,1-29.82,0H23.33A15.816,15.816,0,0,1,7.51,104.41V87.8a5.271,5.271,0,0,1,5.27-5.27h0a5.271,5.271,0,0,1,5.27,5.27v16.61a5.271,5.271,0,0,0,5.27,5.27h4.86a15.811,15.811,0,0,1,29.82,0H89.76V35.04a5.271,5.271,0,0,0-5.27-5.27H79.22a5.271,5.271,0,0,1-5.27-5.27h0a5.271,5.271,0,0,1,5.27-5.27h5.27a15.816,15.816,0,0,1,15.82,15.82V45.62h10.57a15.833,15.833,0,0,1,12.63,6.29l14.74,19.52a21.112,21.112,0,0,1,4.26,12.71v26.52A9.585,9.585,0,0,1,132.93,120.23ZM100.31,56.16V75.94h28.12L115.09,58.26a5.3,5.3,0,0,0-4.21-2.1H100.31Zm-51.94,58.8a5.27,5.27,0,1,0-5.27,5.27A5.277,5.277,0,0,0,48.37,114.96Zm62.49,0a5.27,5.27,0,1,0-5.27,5.27A5.277,5.277,0,0,0,110.86,114.96Zm21.09-8.08V86.48H100.31v13.56a15.6,15.6,0,0,1,5.27-.91,15.829,15.829,0,0,1,14.91,10.55h8.65A2.791,2.791,0,0,0,131.95,106.88Z" transform="translate(-7.5 -19.23)" fill="#5bdb98"/>
                            </svg>
                           </div>
                             <div class="card-body service_iteam_body">
                              <h5 class="card-title">Movers</h5>
                              <p class="card-text mt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>

                            </div>
                          </div>

                    </div>

                </div>
            </div>
        </section>


        <!-- ======================= Service Slider ================= -->
        <section class="service_slider ">

          <div class="owl-carousel owl-theme">
            <div class="item service_slider1" style=" background-image: url('{{asset('frontend/assets/images/Others/cup-of-coffee-1280537_1920.jpg')}}');"><h1>2 hours <br> delivery</h1></div>
            <div class="item service_slider1" style=" background-image: url('{{asset('frontend/assets/images/Others/paper-1100254_1280.jpg')}}');"><h1>Safety <br> Driving</h1></div>
            <div class="item service_slider1" style=" background-image: url('{{asset('frontend/assets/images/Others/pen-4337524_1280.jpg')}}');"><h1>2 hours <br> delivery</h1></div>
      </div>
        </section>

        <!-- ================================== Service Tech ================ -->
        <section class="service_tech">
          <div class="container">
            <div class="row ">
              <div class="col-md-6 text-center order-sm-2 order-md-1 order-xl-1 order-2 tech_logo">
                <div class="qr_logo">
                  <img src="{{asset('frontend')}}/assets/images/Icons/qr_code.svg" alt="qr code">
                </div>

                <div class="tech_content mt-4">
                  <h2>Download This App</h2>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                </div>

                <div class="download_icon">
                  <img src="{{asset('frontend')}}/assets/images/Icons/apple2.svg" class="goole_icon pr-2" alt="playstore icon">
                  <img src="{{asset('frontend')}}/assets/images/Icons/playstore2.svg" class="goole_icon" alt="playstore icon">

                </div>

              </div>
              <div class="col-md-6  order-sm-1 order-md-2 order-xl-1 order-2 mt-2">
                <div class="">
                  <img src="{{asset('frontend')}}/assets/images/Icons/2329.png" alt="">
                </div>

              </div>
            </div>
          </div>
        </section>

        <!-- ================================== Member Slider ================ -->
        <section class="member_slider mt-5">

          <div class="container member_border ">
            <h3>Pro Drivers in Your Area</h3>


            <div class="owl-carousel owl-theme ">
              @foreach (App\Models\Dropper::all() as $dropper)
              <div class="item">
                <div class="card member_item" >

                  <img class="card-img-top" src="{{asset($dropper->profile_image)}}" alt="Card image cap">

                  <div class="member_rating">
                    <ul>
                      <li class="ratting_wrapper"><i class="fas fa-star"></i> <span class="rating_point">4.80</span> </li>
                      <li class='ml-auto' >
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 199.99 165.27" class="member_rating_svg pr-2">
                          <path id="Movers_black" data-name="Movers black" d="M75,33.03H7.81A7.814,7.814,0,0,1,0,25.22H0a7.814,7.814,0,0,1,7.81-7.81H75a7.814,7.814,0,0,1,7.81,7.81h0A7.814,7.814,0,0,1,75,33.03ZM59.38,48.65H7.81A7.816,7.816,0,0,0,0,56.47H0a7.814,7.814,0,0,0,7.81,7.81H59.37a7.814,7.814,0,0,0,7.81-7.81h0A7.8,7.8,0,0,0,59.38,48.65ZM43.75,79.9H7.81A7.816,7.816,0,0,0,0,87.72H0a7.814,7.814,0,0,0,7.81,7.81H43.75a7.814,7.814,0,0,0,7.81-7.81h0A7.816,7.816,0,0,0,43.75,79.9Zm142.07,87.11H167.41a23.425,23.425,0,0,1-44.18,0H74.83a23.425,23.425,0,0,1-44.18,0h-7.2A23.436,23.436,0,0,1,0,143.57V118.96a7.814,7.814,0,0,1,7.81-7.81h0a7.814,7.814,0,0,1,7.81,7.81v24.61a7.814,7.814,0,0,0,7.81,7.81h7.2a23.425,23.425,0,0,1,44.18,0h47.05V40.8a7.814,7.814,0,0,0-7.81-7.81h-7.81a7.814,7.814,0,0,1-7.81-7.81h0a7.814,7.814,0,0,1,7.81-7.81h7.81a23.441,23.441,0,0,1,23.44,23.44V56.47h15.65a23.444,23.444,0,0,1,18.71,9.32l21.83,28.93a31.258,31.258,0,0,1,6.31,18.82v39.29A14.167,14.167,0,0,1,185.82,167.01ZM137.5,72.09v29.3h41.66L159.39,75.2a7.848,7.848,0,0,0-6.24-3.11ZM60.55,159.2a7.81,7.81,0,1,0-7.81,7.81A7.814,7.814,0,0,0,60.55,159.2Zm92.58,0a7.81,7.81,0,1,0-7.81,7.81A7.814,7.814,0,0,0,153.13,159.2Zm31.25-11.97V117.01H137.5V137.1a23.426,23.426,0,0,1,29.9,14.29h12.82A4.157,4.157,0,0,0,184.38,147.23Z" transform="translate(0 -17.37)"/>
                        </svg>


                      </li>
                      <li >
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 200.21 162.75" class="member_rating_svg">
                          <path id="Collect_and_drop_black" data-name="Collect and drop black" d="M187.94,130.88a10.32,10.32,0,0,0-2.53.32c-14.75,3.71-31.64,7.62-45.05,8.46-.65.04-1.47.06-2.43.06-10.22,0-26.38-1.89-29.31-3.42a10.806,10.806,0,0,1-4.21-3.71h23.23c5.84,0,10.65-3.33,12.26-8.05h46.49a11.045,11.045,0,0,0,11.03-11.03V29.65a11.045,11.045,0,0,0-11.03-11.03H89.85A11.045,11.045,0,0,0,78.82,29.65v70.91c-10.03.34-23.88,3.23-32.7,10.51-3.54,2.93-6.1,4.92-8.15,6.53-1.33,1.04-2.47,1.93-3.55,2.82-4.35,3.58-8.12,6.66-29.85,6.66a4.68,4.68,0,0,0-4.68,4.68V176.7a4.665,4.665,0,0,0,4.67,4.67,4.814,4.814,0,0,0,1.58-.27c18.54-6.64,21.85-7.6,29.83-9.94l.72-.21c.66-.19,1.31-.39,1.94-.58a35.531,35.531,0,0,1,12.05-2.01c5.97,0,14.1,1.07,25.57,3.37,22.45,4.5,33.26,6.47,42.61,6.47h0a117.353,117.353,0,0,0,16.79-1.54c13.36-1.88,39.64-10.65,53.04-17.71,4.27-2.25,11.41-6.01,11.41-14.03v-.3C200.11,138.12,195.11,130.88,187.94,130.88ZM127.43,27.98h21.4V66.85h-21.4Zm-37.58,0h28.22V71.53a4.68,4.68,0,0,0,4.68,4.68H153.5a4.68,4.68,0,0,0,4.68-4.68V27.98H186.4a1.673,1.673,0,0,1,1.67,1.67V113.5a1.673,1.673,0,0,1-1.67,1.67H140.06a12.594,12.594,0,0,0-11.64-9.75c-5.6-.36-14.5-1.44-23.11-2.49-6.29-.76-12.29-1.49-17.13-1.96V29.65A1.673,1.673,0,0,1,89.85,27.98Zm100.9,116.94c0,1.82-1.5,3.16-6.41,5.75-12.44,6.55-37.67,14.99-49.99,16.73a109.707,109.707,0,0,1-15.49,1.45c-8.04,0-17.23-1.57-40.77-6.29-12.09-2.42-20.8-3.55-27.4-3.55a44.669,44.669,0,0,0-14.78,2.42c-.6.18-1.21.37-1.84.55l-.72.21c-7.17,2.1-10.65,3.12-24.1,7.88V136.39c19.51-.45,25.1-3.8,31.11-8.74.99-.81,2.1-1.68,3.38-2.68,2.1-1.64,4.71-3.68,8.35-6.69,7.03-5.81,19.5-8.4,28.74-8.4,1.06,0,2.07.04,3,.11,5.05.39,12.48,1.29,20.36,2.25,8.74,1.06,17.78,2.16,23.63,2.54a3.389,3.389,0,0,1,3.27,3.32c.02.32.05,1.82.05,2.97,0,1.49-2.08,2.18-3.49,2.18H98.31a4.679,4.679,0,0,0-4.67,4.45c-.02.45-.42,11.11,10.64,16.9,6.02,3.16,26.51,4.49,33.65,4.49,1.16,0,2.17-.03,3.01-.08,14.17-.88,31.58-4.91,46.75-8.72a1.134,1.134,0,0,1,.25-.03c1.06,0,2.81,2.12,2.81,4.38v.28Z" transform="translate(0.11 -18.62)" fill="#1b3149"/>
                        </svg>

                      </li>
                    </ul>
                  </div>
                  <div class="card-body ">
                    <div class="member_details">
                      <p>Success rate</p>
                      <p>5.00</p>
                    </div>
                    <div class="member_details">
                      <p>Accuracy score </p>
                      <p>98</p>
                    </div>
                    <div class="member_button">

                      <button type="button" class="btn " data-toggle="modal" data-target="#bd-example-modal-lg">Request a quote</button>
                    </div>
                  </div>
                </div>
              </div>

              @endforeach
          </div>
          </div>
        </section>

            <!-- ---------------- Become Modal ------------ -->
            <!-- Button trigger modal -->
    <!-- Large modal -->
    <div class="modal fade" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header become_modal_header">
            <h5 class="modal-title">Request a quote</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <div class="become_tab">


              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class='become_tab_name' >Select service</li>
                <li class="nav-item mt-1">
                  <a class="nav-link  active" id="pills-shop" data-toggle="pill" href="#pills-tab1" role="tab" aria-controls="pills-tab1" aria-selected="true">Shop & drop</a>
                </li>
                <li class="nav-item mt-1">
                  <a class="nav-link " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Collect & drop</a>
                </li>
                <li class="nav-item mt-1">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Movers</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tab1" role="tabpanel" aria-labelledby="pills-shop">
                  <div class="shop_tab_content">
                    <form method="POST" action="{{route('quote.store')}}">
                        @csrf
                      <div class="form-group row">
                        <label for="input_text" class="col-sm-2 col-form-label">Categories</label>
                        <div class="col-sm-10">
                          <input name="categories" type="text" class="form-control" id="input_text" >
                        </div>
                      </div>
                      <input type="hidden" name="driver_id" value="" id="">
                      <div class="form-group row">
                        <label for="input_category" class="col-sm-2 col-form-label">Products</label>
                        <div class="col-sm-10">
                           <textarea name="product" class="form-control" id="input_category" rows="3" ></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="input_product_cost" class="col-sm-2 col-form-label">Product cost</label>
                        <div class="col-sm-10">
                          <input name="product_cost" type="text" class="form-control" id="input_product_cost" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input_shop_pickup" class="col-sm-2 col-form-label">Enter shops/ Pickup address</label>
                        <div class="col-sm-10">
                          <input name="pick_address" type="text" class="form-control" id="input_shop_pickup" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input_delivery_address" class="col-sm-2 col-form-label">Enter delivery address</label>
                        <div class="col-sm-10">
                          <input name="delivery_address" type="text" class="form-control" id="input_delivery_address" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input_offer" class="col-sm-2 col-form-label">Offered delivery fee</label>
                        <div class="col-sm-10">
                          <input name="delivery_fee" type="text" class="form-control" id="input_offer" >
                        </div>
                      </div>



                      <div class="modal-footer become_footer">
                        <button  type="submit" class="btn ">Request quote</button>

                      </div>


                    </form>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
              </div>

            </div>
          </div>



        </div>
      </div>
    </div>

       <!-- ================ Work Section ============= -->
       <section class="work_home py-5 mt-5" id='how_works'>


        <div class="work_outter_border">
    {{-- @php
        echo $dropper->id;
    @endphp --}}
        <div class="container">
            <br><br><br><br>
          <div class=" work_home_content">
            <h2>How it works</h2>
          </div>
        </div>
      </div>
        <div class="container mt-5">

            <div class="row mt-4">


            <div class="col-md-4 col-sm-6 text-center">
              <div class="card work_card" >
                <img class="card-img-top" src="{{asset('frontend')}}/assets/images/Illustrations/image1.svg" alt="Card image cap">
                <div class="card-body work_card_content">
                  <h5 class="card-title">Lorem ipsum dolor</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>


                </div>
              </div>

            </div>

            <div class="col-md-4 col-sm-6 text-center">
              <div class="card work_card" >
                <img class="card-img-top" src="{{asset('frontend')}}/assets/images/Illustrations/image2.svg" alt="Card image cap">
                <div class="card-body work_card_content">
                  <h5 class="card-title">Lorem ipsum dolor</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>


                </div>
              </div>

            </div>

            <div class="col-md-4 col-sm-6 text-center">
              <div class="card work_card" >
                <img class="card-img-top" src="{{asset('frontend')}}/assets/images/Illustrations/image3.svg" alt="Card image cap">
                <div class="card-body work_card_content">
                  <h5 class="card-title">Lorem ipsum dolor</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>


                </div>
              </div>

            </div>

          </div>
        </div>
       </section>

          <!-- ================ Recent Drop============= -->
          <section class="recent_drop py-5">
            <div class="recent_outter_border">


              <div class="container">
                <div class="recent_heading">
                  <h2>Recent drops around you</h2>
                </div>
              </div>
            </div>



                <div class="recentL_slider">
                  <div class="owl-carousel owl-theme">

                    <div class="item">

                      <div class="card recent_card text-center" >
                        <img class="card-img-top" src="{{asset('frontend')}}/assets/images/member/men_pic8.jpg" alt="Card image cap">
                        <p class='recent_dis' >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
                        <div class="card-body ">
                          <div class="recent_rating">
                            <p><i class="fas fa-star"></i> <span>5.00</span></p>
                            <p>$70</p>

                          </div>
                          <div class="cat_icon">
                            <p>
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145.941 156.32" style='width: 22px; height: 26px;'>
                                <g id="Layer_29" transform="translate(-2.03 3.16)">
                                  <path id="Path_1" data-name="Path 1" d="M142.74,153.16H90.63a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L95.84,32.84a5.212,5.212,0,0,1,5.21-4.74h31.27a5.212,5.212,0,0,1,5.21,4.74l10.42,114.64a5.207,5.207,0,0,1-4.72,5.66A4.014,4.014,0,0,1,142.74,153.16ZM96.31,142.74h40.75L127.58,38.52H105.8Z" fill="#5bdb98"/>
                                  <path id="Path_2" data-name="Path 2" d="M90.63,153.16H7.26a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L12.47,32.84a5.212,5.212,0,0,1,5.21-4.74h83.37a5.207,5.207,0,0,1,5.23,5.19c0,.16-.01.33-.02.49L95.84,148.42A5.205,5.205,0,0,1,90.63,153.16ZM12.94,142.74H85.89L95.37,38.52H22.42Z" fill="#5bdb98"/>
                                  <rect id="Rectangle_1" data-name="Rectangle 1" width="10.42" height="31.27" transform="translate(111.48 116.69)" fill="#5bdb98"/>
                                  <path id="Path_3" data-name="Path 3" d="M80.21,59.37A5.207,5.207,0,0,1,75,54.16V22.89a15.63,15.63,0,0,0-31.26,0V54.16a5.21,5.21,0,0,1-10.42,0V22.89a26.05,26.05,0,1,1,52.1,0V54.16A5.213,5.213,0,0,1,80.21,59.37Z" fill="#5bdb98"/>
                                  <path id="Path_4" data-name="Path 4" d="M111.48,38.52a5.207,5.207,0,0,1-5.21-5.21V22.89A15.633,15.633,0,0,0,90.64,7.26a5.21,5.21,0,0,1,0-10.42,26.046,26.046,0,0,1,26.05,26.05V33.31A5.213,5.213,0,0,1,111.48,38.52Z" fill="#5bdb98"/>
                                </g>
                              </svg>

                              <span class='pl-2'>Shop & Drop</span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">

                      <div class="card recent_card text-center" >
                        <img class="card-img-top" src="{{asset('frontend')}}/assets/images/member/men_pic8.jpg" alt="Card image cap">
                        <p class='recent_dis' >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
                        <div class="card-body ">
                          <div class="recent_rating">
                            <p><i class="fas fa-star"></i> <span>5.00</span></p>
                            <p>$30</p>

                          </div>
                          <div class="cat_icon">
                            <p>
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145.941 156.32" style='width: 22px; height: 26px;'>
                                <g id="Layer_29" transform="translate(-2.03 3.16)">
                                  <path id="Path_1" data-name="Path 1" d="M142.74,153.16H90.63a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L95.84,32.84a5.212,5.212,0,0,1,5.21-4.74h31.27a5.212,5.212,0,0,1,5.21,4.74l10.42,114.64a5.207,5.207,0,0,1-4.72,5.66A4.014,4.014,0,0,1,142.74,153.16ZM96.31,142.74h40.75L127.58,38.52H105.8Z" fill="#5bdb98"/>
                                  <path id="Path_2" data-name="Path 2" d="M90.63,153.16H7.26a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L12.47,32.84a5.212,5.212,0,0,1,5.21-4.74h83.37a5.207,5.207,0,0,1,5.23,5.19c0,.16-.01.33-.02.49L95.84,148.42A5.205,5.205,0,0,1,90.63,153.16ZM12.94,142.74H85.89L95.37,38.52H22.42Z" fill="#5bdb98"/>
                                  <rect id="Rectangle_1" data-name="Rectangle 1" width="10.42" height="31.27" transform="translate(111.48 116.69)" fill="#5bdb98"/>
                                  <path id="Path_3" data-name="Path 3" d="M80.21,59.37A5.207,5.207,0,0,1,75,54.16V22.89a15.63,15.63,0,0,0-31.26,0V54.16a5.21,5.21,0,0,1-10.42,0V22.89a26.05,26.05,0,1,1,52.1,0V54.16A5.213,5.213,0,0,1,80.21,59.37Z" fill="#5bdb98"/>
                                  <path id="Path_4" data-name="Path 4" d="M111.48,38.52a5.207,5.207,0,0,1-5.21-5.21V22.89A15.633,15.633,0,0,0,90.64,7.26a5.21,5.21,0,0,1,0-10.42,26.046,26.046,0,0,1,26.05,26.05V33.31A5.213,5.213,0,0,1,111.48,38.52Z" fill="#5bdb98"/>
                                </g>
                              </svg>

                              <span class='pl-2'>Shop & Drop</span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">

                      <div class="card recent_card text-center">
                        <img class="card-img-top" src="{{asset('frontend')}}/assets/images/member/men_pic8.jpg" alt="Card image cap">
                        <p class='recent_dis' >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
                        <div class="card-body ">
                          <div class="recent_rating">
                            <p><i class="fas fa-star"></i> <span>5.00</span></p>
                            <p>$50</p>

                          </div>
                          <div class="cat_icon">
                            <p>
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145.941 156.32" style='width: 22px; height: 26px;'>
                                <g id="Layer_29" transform="translate(-2.03 3.16)">
                                  <path id="Path_1" data-name="Path 1" d="M142.74,153.16H90.63a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L95.84,32.84a5.212,5.212,0,0,1,5.21-4.74h31.27a5.212,5.212,0,0,1,5.21,4.74l10.42,114.64a5.207,5.207,0,0,1-4.72,5.66A4.014,4.014,0,0,1,142.74,153.16ZM96.31,142.74h40.75L127.58,38.52H105.8Z" fill="#5bdb98"/>
                                  <path id="Path_2" data-name="Path 2" d="M90.63,153.16H7.26a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L12.47,32.84a5.212,5.212,0,0,1,5.21-4.74h83.37a5.207,5.207,0,0,1,5.23,5.19c0,.16-.01.33-.02.49L95.84,148.42A5.205,5.205,0,0,1,90.63,153.16ZM12.94,142.74H85.89L95.37,38.52H22.42Z" fill="#5bdb98"/>
                                  <rect id="Rectangle_1" data-name="Rectangle 1" width="10.42" height="31.27" transform="translate(111.48 116.69)" fill="#5bdb98"/>
                                  <path id="Path_3" data-name="Path 3" d="M80.21,59.37A5.207,5.207,0,0,1,75,54.16V22.89a15.63,15.63,0,0,0-31.26,0V54.16a5.21,5.21,0,0,1-10.42,0V22.89a26.05,26.05,0,1,1,52.1,0V54.16A5.213,5.213,0,0,1,80.21,59.37Z" fill="#5bdb98"/>
                                  <path id="Path_4" data-name="Path 4" d="M111.48,38.52a5.207,5.207,0,0,1-5.21-5.21V22.89A15.633,15.633,0,0,0,90.64,7.26a5.21,5.21,0,0,1,0-10.42,26.046,26.046,0,0,1,26.05,26.05V33.31A5.213,5.213,0,0,1,111.48,38.52Z" fill="#5bdb98"/>
                                </g>
                              </svg>

                              <span class='pl-2'>Shop & Drop</span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">

                      <div class="card recent_card text-center" >
                        <img class="card-img-top" src="{{asset('frontend')}}/assets/images/member/men_pic8.jpg" alt="Card image cap">
                        <p class='recent_dis' >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
                        <div class="card-body ">
                          <div class="recent_rating">
                            <p><i class="fas fa-star"></i> <span>5.00</span></p>
                            <p>$30</p>

                          </div>
                          <div class="cat_icon">
                            <p>
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145.941 156.32" style='width: 22px; height: 26px;'>
                                <g id="Layer_29" transform="translate(-2.03 3.16)">
                                  <path id="Path_1" data-name="Path 1" d="M142.74,153.16H90.63a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L95.84,32.84a5.212,5.212,0,0,1,5.21-4.74h31.27a5.212,5.212,0,0,1,5.21,4.74l10.42,114.64a5.207,5.207,0,0,1-4.72,5.66A4.014,4.014,0,0,1,142.74,153.16ZM96.31,142.74h40.75L127.58,38.52H105.8Z" fill="#5bdb98"/>
                                  <path id="Path_2" data-name="Path 2" d="M90.63,153.16H7.26a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L12.47,32.84a5.212,5.212,0,0,1,5.21-4.74h83.37a5.207,5.207,0,0,1,5.23,5.19c0,.16-.01.33-.02.49L95.84,148.42A5.205,5.205,0,0,1,90.63,153.16ZM12.94,142.74H85.89L95.37,38.52H22.42Z" fill="#5bdb98"/>
                                  <rect id="Rectangle_1" data-name="Rectangle 1" width="10.42" height="31.27" transform="translate(111.48 116.69)" fill="#5bdb98"/>
                                  <path id="Path_3" data-name="Path 3" d="M80.21,59.37A5.207,5.207,0,0,1,75,54.16V22.89a15.63,15.63,0,0,0-31.26,0V54.16a5.21,5.21,0,0,1-10.42,0V22.89a26.05,26.05,0,1,1,52.1,0V54.16A5.213,5.213,0,0,1,80.21,59.37Z" fill="#5bdb98"/>
                                  <path id="Path_4" data-name="Path 4" d="M111.48,38.52a5.207,5.207,0,0,1-5.21-5.21V22.89A15.633,15.633,0,0,0,90.64,7.26a5.21,5.21,0,0,1,0-10.42,26.046,26.046,0,0,1,26.05,26.05V33.31A5.213,5.213,0,0,1,111.48,38.52Z" fill="#5bdb98"/>
                                </g>
                              </svg>

                              <span class='pl-2'>Shop & Drop</span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">

                      <div class="card recent_card text-center">
                        <img class="card-img-top" src="{{asset('frontend')}}/assets/images/member/men_pic8.jpg" alt="Card image cap">
                        <p class='recent_dis' >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
                        <div class="card-body ">
                          <div class="recent_rating">
                            <p><i class="fas fa-star"></i> <span>5.00</span></p>
                            <p>$30</p>

                          </div>
                          <div class="cat_icon">
                            <p>
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145.941 156.32" style='width: 22px; height: 26px;'>
                                <g id="Layer_29" transform="translate(-2.03 3.16)">
                                  <path id="Path_1" data-name="Path 1" d="M142.74,153.16H90.63a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L95.84,32.84a5.212,5.212,0,0,1,5.21-4.74h31.27a5.212,5.212,0,0,1,5.21,4.74l10.42,114.64a5.207,5.207,0,0,1-4.72,5.66A4.014,4.014,0,0,1,142.74,153.16ZM96.31,142.74h40.75L127.58,38.52H105.8Z" fill="#5bdb98"/>
                                  <path id="Path_2" data-name="Path 2" d="M90.63,153.16H7.26a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L12.47,32.84a5.212,5.212,0,0,1,5.21-4.74h83.37a5.207,5.207,0,0,1,5.23,5.19c0,.16-.01.33-.02.49L95.84,148.42A5.205,5.205,0,0,1,90.63,153.16ZM12.94,142.74H85.89L95.37,38.52H22.42Z" fill="#5bdb98"/>
                                  <rect id="Rectangle_1" data-name="Rectangle 1" width="10.42" height="31.27" transform="translate(111.48 116.69)" fill="#5bdb98"/>
                                  <path id="Path_3" data-name="Path 3" d="M80.21,59.37A5.207,5.207,0,0,1,75,54.16V22.89a15.63,15.63,0,0,0-31.26,0V54.16a5.21,5.21,0,0,1-10.42,0V22.89a26.05,26.05,0,1,1,52.1,0V54.16A5.213,5.213,0,0,1,80.21,59.37Z" fill="#5bdb98"/>
                                  <path id="Path_4" data-name="Path 4" d="M111.48,38.52a5.207,5.207,0,0,1-5.21-5.21V22.89A15.633,15.633,0,0,0,90.64,7.26a5.21,5.21,0,0,1,0-10.42,26.046,26.046,0,0,1,26.05,26.05V33.31A5.213,5.213,0,0,1,111.48,38.52Z" fill="#5bdb98"/>
                                </g>
                              </svg>

                              <span class='pl-2'>Shop & Drop</span> </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item">

                      <div class="card recent_card text-center">
                        <img class="card-img-top" src="{{asset('frontend')}}/assets/images/member/men_pic8.jpg" alt="Card image cap">
                        <p class='recent_dis' >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
                        <div class="card-body ">
                          <div class="recent_rating">
                            <p><i class="fas fa-star"></i> <span>5.00</span></p>
                            <p>$30</p>

                          </div>
                          <div class="cat_icon">
                            <p>
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145.941 156.32" style='width: 22px; height: 26px;'>
                                <g id="Layer_29" transform="translate(-2.03 3.16)">
                                  <path id="Path_1" data-name="Path 1" d="M142.74,153.16H90.63a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L95.84,32.84a5.212,5.212,0,0,1,5.21-4.74h31.27a5.212,5.212,0,0,1,5.21,4.74l10.42,114.64a5.207,5.207,0,0,1-4.72,5.66A4.014,4.014,0,0,1,142.74,153.16ZM96.31,142.74h40.75L127.58,38.52H105.8Z" fill="#5bdb98"/>
                                  <path id="Path_2" data-name="Path 2" d="M90.63,153.16H7.26a5.207,5.207,0,0,1-5.23-5.19c0-.16.01-.33.02-.49L12.47,32.84a5.212,5.212,0,0,1,5.21-4.74h83.37a5.207,5.207,0,0,1,5.23,5.19c0,.16-.01.33-.02.49L95.84,148.42A5.205,5.205,0,0,1,90.63,153.16ZM12.94,142.74H85.89L95.37,38.52H22.42Z" fill="#5bdb98"/>
                                  <rect id="Rectangle_1" data-name="Rectangle 1" width="10.42" height="31.27" transform="translate(111.48 116.69)" fill="#5bdb98"/>
                                  <path id="Path_3" data-name="Path 3" d="M80.21,59.37A5.207,5.207,0,0,1,75,54.16V22.89a15.63,15.63,0,0,0-31.26,0V54.16a5.21,5.21,0,0,1-10.42,0V22.89a26.05,26.05,0,1,1,52.1,0V54.16A5.213,5.213,0,0,1,80.21,59.37Z" fill="#5bdb98"/>
                                  <path id="Path_4" data-name="Path 4" d="M111.48,38.52a5.207,5.207,0,0,1-5.21-5.21V22.89A15.633,15.633,0,0,0,90.64,7.26a5.21,5.21,0,0,1,0-10.42,26.046,26.046,0,0,1,26.05,26.05V33.31A5.213,5.213,0,0,1,111.48,38.52Z" fill="#5bdb98"/>
                                </g>
                              </svg>

                              <span class='pl-2'>Shop & Drop</span> </p>
                          </div>
                        </div>
                      </div>
                    </div>




                </div>

                </div>

          </section>

             <!-- ================ Become a dropper ============= -->
            <section class="dropper_main py-4">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="dropper_left_img text-end">
                      <img src="{{asset('frontend')}}/assets/images/Illustrations/dropper.png" alt="">
                    </div>
                  </div>


                  <div class="col-md-6 col-sm-6">
                    <div class="dropper_right_content">
                      <h2>Become a Dropper</h2>
                      <ul>
                        <li>Simply browse the tasks around you</li>
                        <li> Accept or make an offer</li>
                        <li> Get it done</li>
                        <li>Get paid</li>
                        <li>Easy to join</li>
                      </ul>
                     <div class="become_button">
                     <button type="button" class="btn " >Join here</button>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>


      <!-- ================ Key features ============= -->
       <section class="key_features mt-5">

         <div class="container pb-2 key_border">
          <h4>Key feature of Pendu</h4>
           <div class="row kay_svg">



             <div class="col-md-4 col-lg-3 col-6 text-center mt-2 p-0">
               <div class="key_item">
                <svg xmlns="http://www.w3.org/2000/svg" class='key_item_svg' viewBox="0 0 179.99 199.99">
                  <g id="cashless_payment" data-name="cashless payment" transform="translate(-10)">
                    <path id="Path_76" data-name="Path 76" d="M166.67,0h-80A23.364,23.364,0,0,0,63.33,23.33v10H70v-10A16.691,16.691,0,0,1,86.67,6.66h80a16.691,16.691,0,0,1,16.67,16.67V176.66a16.691,16.691,0,0,1-16.67,16.67h-80A16.691,16.691,0,0,1,70,176.66V153.33H63.33v23.33a23.349,23.349,0,0,0,23.33,23.33h80a23.349,23.349,0,0,0,23.33-23.33V23.33A23.334,23.334,0,0,0,166.67,0Z" fill="#56cd93"/>
                    <rect id="Rectangle_2" data-name="Rectangle 2" width="6.67" height="6.67" transform="translate(96.67 13.33)" fill="#56cd93"/>
                    <rect id="Rectangle_3" data-name="Rectangle 3" width="33.33" height="6.67" transform="translate(110 13.33)" fill="#56cd93"/>
                    <path id="Path_77" data-name="Path 77" d="M120,166.67a10,10,0,0,0,0,20h13.33a10,10,0,0,0,0-20Zm16.67,10a3.329,3.329,0,0,1-3.33,3.33H120a3.33,3.33,0,0,1,0-6.66h13.33A3.331,3.331,0,0,1,136.67,176.67Z" fill="#56cd93"/>
                    <path id="Path_78" data-name="Path 78" d="M123.33,153.33H130v-120h-6.67V40H56.67A6.688,6.688,0,0,0,50,46.67V60H43.33a3.854,3.854,0,0,0-1.5.33l-12.6,6.33H13.33A3.344,3.344,0,0,0,10,70v53.33a3.329,3.329,0,0,0,3.33,3.33H50V140a6.688,6.688,0,0,0,6.67,6.67h66.67v6.66Zm0-106.66V56.2a13.392,13.392,0,0,1-9.53-9.53Zm-46.66,0h9.57a13.36,13.36,0,0,1-9.57,9.53Zm-10,0H70V60H66.67Zm-10,0H60V60H56.67ZM60,140H56.67V92.9a22.369,22.369,0,0,0,2.77-3.37c.23-.3.37-.63.57-.93V140Zm10,0H66.67V80H70Zm3.33-66.63-10-.03H60a3.329,3.329,0,0,0-3.33,3.33,16.559,16.559,0,0,1-1.93,7.77c-.27.5-.53.97-.83,1.43a16.467,16.467,0,0,1-13.9,7.47L39.97,100h.17a23.664,23.664,0,0,0,8.8-1.73c.37-.17.7-.4,1.07-.57V120H16.67V73.33H30a3.262,3.262,0,0,0,1.5-.37l12.6-6.3H73.33a3.2,3.2,0,0,1,2.37.97,3.3,3.3,0,0,1,.97,2.33,3.163,3.163,0,0,1-1.03,2.4A3.32,3.32,0,0,1,73.33,73.37ZM76.67,140v-9.53A13.392,13.392,0,0,1,86.2,140Zm30.3,0H93.03a19.984,19.984,0,0,0-16.37-16.37V79.4a9.579,9.579,0,0,0,3.7-2.33,9.947,9.947,0,0,0,.11-14.06l-.08-.08a6.614,6.614,0,0,0-.77-.63,20.01,20.01,0,0,0,13.4-15.63h13.93a19.984,19.984,0,0,0,16.37,16.37v60.6A19.951,19.951,0,0,0,106.97,140Zm6.83,0a13.392,13.392,0,0,1,9.53-9.53V140Z" fill="#56cd93"/>
                    <path id="Path_79" data-name="Path 79" d="M100,76.67a16.67,16.67,0,1,0,16.67,16.67A16.672,16.672,0,0,0,100,76.67Zm0,26.66a10,10,0,1,1,10-10A10,10,0,0,1,100,103.33Z" fill="#56cd93"/>
                  </g>
                </svg>

                <p class='mt-1'>Secures cashless payment</p>
               </div>

             </div>

             <div class="col-md-4 col-lg-3 col-6 text-center  mt-2 p-0">
               <div class="key_item">
                <svg xmlns="http://www.w3.org/2000/svg" class='key_item_svg' viewBox="0 0 205.676 194.625">
                  <g id="communication" transform="translate(-0.002 0)">
                    <path id="Path_66" data-name="Path 66" d="M55.02,123.82a4.019,4.019,0,1,0-5.49-1.47A4.021,4.021,0,0,0,55.02,123.82Z" fill="#56cd93"/>
                    <path id="Path_67" data-name="Path 67" d="M38.56,151.55l20.23,35.04a16.068,16.068,0,1,0,27.83-16.07L74.57,149.64l10.44-6.03a4.021,4.021,0,0,0,1.47-5.49l-5.22-9.05c.62-.12,4.72-.92,76.94-15.09a12.051,12.051,0,0,0,9.77-18.06L154.62,72.8l8.53-12.92a4.012,4.012,0,0,0,.13-4.22l-8.03-13.92a4.023,4.023,0,0,0-3.72-2l-15.46.93L121.25,15a11.936,11.936,0,0,0-10.29-6.02h-.15a11.955,11.955,0,0,0-10.15,5.56L48.18,81.39l-34.12,19.7a28.119,28.119,0,0,0,24.5,50.46Zm41.1,22.99a8.031,8.031,0,1,1-13.91,8.03L45.66,147.78l13.92-8.03C82.82,180.02,79.29,173.9,79.66,174.54Zm-9.11-31.85-4.02-6.96,6.96-4.02,4.02,6.96Zm78.97-94.77,5.55,9.62-4.95,7.5-9.57-16.58ZM107.37,18.94a4.015,4.015,0,0,1,6.91.08L161,99.95a4.015,4.015,0,0,1-3.38,6.02,14.364,14.364,0,0,0-2.2.37L106,20.74A20.221,20.221,0,0,0,107.37,18.94Zm-6.72,8.61,46.44,80.43L77.01,121.73,55.7,84.82ZM10.73,135.48a20.065,20.065,0,0,1,7.35-27.44L49.39,89.96l20.09,34.79L38.17,142.83A20.106,20.106,0,0,1,10.73,135.48Z" fill="#56cd93"/>
                    <path id="Path_68" data-name="Path 68" d="M42.58,126.37a4.021,4.021,0,0,0-5.49-1.47l-6.96,4.02a4.021,4.021,0,0,1-5.49-1.47,4.019,4.019,0,1,0-6.96,4.02,12.059,12.059,0,0,0,16.46,4.41l6.96-4.02A4.024,4.024,0,0,0,42.58,126.37Z" fill="#56cd93"/>
                    <path id="Path_69" data-name="Path 69" d="M199.71,17.57,177.33,30.03a4.015,4.015,0,0,0,3.9,7.02l22.38-12.46a4.015,4.015,0,0,0-3.9-7.02Z" fill="#56cd93"/>
                    <path id="Path_70" data-name="Path 70" d="M197.36,59.18l-15.52-4.16a4.017,4.017,0,0,0-2.08,7.76l15.52,4.16a4.017,4.017,0,0,0,2.08-7.76Z" fill="#56cd93"/>
                    <path id="Path_71" data-name="Path 71" d="M158.36,2.98,154.2,18.5a4.017,4.017,0,1,0,7.76,2.08l4.16-15.52a4.017,4.017,0,1,0-7.76-2.08Z" fill="#56cd93"/>
                  </g>
                </svg>

                <p class='mt-1'>Built in communications</p>
               </div>

             </div>

             <div class="col-md-4 col-lg-3 col-6 text-center  mt-2 p-0">
               <div class="key_item">
                <svg xmlns="http://www.w3.org/2000/svg" class='key_item_svg' viewBox="0 0 199.69 174.715">
                  <g id="secure_payment" data-name="secure payment" transform="translate(-0.31 -8.775)">
                    <g id="Group_16" data-name="Group 16">
                      <g id="Group_15" data-name="Group 15">
                        <path id="Path_72" data-name="Path 72" d="M193.76,121.1a6.248,6.248,0,0,0-6.24,6.24v43.68H12.79V96.14H81.43a6.24,6.24,0,0,0,0-12.48H12.79V58.69H81.43a6.24,6.24,0,0,0,0-12.48H12.79A12.483,12.483,0,0,0,.31,58.69V171.01a12.483,12.483,0,0,0,12.48,12.48H187.52A12.483,12.483,0,0,0,200,171.01V127.33A6.239,6.239,0,0,0,193.76,121.1Z" fill="#56cd93"/>
                      </g>
                    </g>
                    <g id="Group_18" data-name="Group 18">
                      <g id="Group_17" data-name="Group 17">
                        <path id="Path_73" data-name="Path 73" d="M56.47,121.1H31.51a6.24,6.24,0,0,0,0,12.48H56.47a6.24,6.24,0,0,0,0-12.48Z" fill="#56cd93"/>
                      </g>
                    </g>
                    <g id="Group_20" data-name="Group 20">
                      <g id="Group_19" data-name="Group 19">
                        <path id="Path_74" data-name="Path 74" d="M196.22,27.99,152.54,9.27a6.385,6.385,0,0,0-4.93,0L103.93,27.99a6.261,6.261,0,0,0-3.77,5.74V58.69c0,34.33,12.69,54.4,46.81,74.06a6.308,6.308,0,0,0,6.22,0C187.31,113.15,200,93.08,200,58.69V33.73A6.265,6.265,0,0,0,196.22,27.99Zm-8.7,30.7c0,28.82-9.54,44.68-37.44,61.4-27.91-16.76-37.44-32.62-37.44-61.4V37.85L150.08,21.8l37.44,16.05Z" fill="#56cd93"/>
                      </g>
                    </g>
                    <g id="Group_22" data-name="Group 22">
                      <g id="Group_21" data-name="Group 21">
                        <path id="Path_75" data-name="Path 75" d="M172.71,47.57a6.281,6.281,0,0,0-8.77.97L144.32,73.08l-7.76-11.61a6.238,6.238,0,0,0-10.38,6.92l12.48,18.72a6.282,6.282,0,0,0,4.93,2.78h.26a6.248,6.248,0,0,0,4.88-2.35l24.96-31.2A6.253,6.253,0,0,0,172.71,47.57Z" fill="#56cd93"/>
                      </g>
                    </g>
                  </g>
                </svg>

                <p class='mt-1'>Community Ratings & Reviews</p>
               </div>

             </div>

             <div class="col-md-4 col-lg-3 col-6 text-center  mt-2 p-0">
               <div class="key_item">
                <svg xmlns="http://www.w3.org/2000/svg" class='key_item_svg' viewBox="0 0 220.133 210.177">
                  <path id="star" d="M104.11,1.52l29.2,59.17a4.608,4.608,0,0,0,3.45,2.51l65.3,9.49a4.585,4.585,0,0,1,2.54,7.82l-47.25,46.06a4.6,4.6,0,0,0-1.32,4.06l11.15,65.04a4.581,4.581,0,0,1-6.65,4.83l-58.41-30.71a4.6,4.6,0,0,0-4.27,0L39.46,200.5a4.582,4.582,0,0,1-6.65-4.83l11.15-65.04a4.572,4.572,0,0,0-1.32-4.06L-4.61,80.51a4.584,4.584,0,0,1,2.54-7.82l65.3-9.49a4.59,4.59,0,0,0,3.45-2.51L95.88,1.52A4.589,4.589,0,0,1,104.11,1.52Z" transform="translate(10.071 5.038)" fill="none" stroke="#56cd93" stroke-width="8"/>
                </svg>


                <p class='mt-1'>Fair payments</p>
               </div>

             </div>

           </div>
         </div>
       </section>
        <!-- ================ Blog ============= -->
        <section class="blog">
          <div class="blog_outter_border">
            <div class="container">
              <div class="blog_inner_tilte">
                <h3>From our blogs </h3>
                <p >See all</p>
              </div>
            </div>
          </div>

          <div class="container">

            <div class="row">
                {{-- @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-6 mt-2 ">
                    <div class="card blog_item " >
                      <img class="card-img-top" src="{{$post->featured_image}}" alt="Card image cap">
                      <div class="blog-dat mt-4">
                        <ul>
                          <li style='list-style: none;' ><a href="#">{{$post->category ? $post->category->cat_name : ''}}</a></li>
                          <li><span><a href="#">{{$post->created_at->diffForHumans()}}</a></span></li>
                        </ul>
                      </div>
                      <div class="card-body blog_home_title">
                        <a href="{{url('single_post/'.$post->slug)}}"><h5 class="card-title">{{$post->title}}, </h5></a>
                      </div>
                    </div>
                  </div>
                @endforeach --}}
            </div>

          </div>
        </section>



       <!-- ================ Footer  ============= -->

       <!-- --------- invite section --------------- -->
     <section class="invite_area py-4 mt-4">
         <div class="container inner_footer py-4">
           <div class="row">
             <div class="col-md-12 text-center">
               <div class="invite_content">
                 <h1> Invite a friend , you both get $15 </h1>
                 <p>Lorem ipsum dolor sit amet consectetur adipiscing elit etiam eget, vivamus</p>

                </div>

                <div class="invite_mail">
                  <form>
                    <div class="form-group form-inline ">
                      <input type="email" class="form-control mail_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address">

                      <a href="#" class='mail_input_outter_btn' ><button type="submit" class="btn invite_button">Send invite</button></a>
                    </div>

                    <p class='more_way' >More way to invite</p>


                    <div class="section_tooltipss">

                      <input type="text" class=" link_input" value="https://fontawesome.com/icons?d=gallery&q=apple" id="myInput1">

                      <div class="tooltip22">
                      <button type="button" class="btn invite_button2"  onclick="myFunctions()" onmouseout="outFunca()">
                        <span class="tooltiptext1" id="myTooltip1">Copy to clipboard</span>
                        Copy text
                        </button>
                      </div>
                    </div>

                    <div class="share_invite">
                      <span>Share:-</span>
                     <a href="#" class='twiter'> <img src={{asset('frontend')}}/assets/images/Icons/c_twitter.svg class="custom_icon"  alt=""></a>
                     <a href="#" class='fb' > <img src={{asset('frontend')}}/assets/images/Icons/c_facebook.svg  class="custom_icon" alt=""></a>
                     <a href="#" class='ins'> <img src={{asset('frontend')}}/assets/images/Icons/c_insta.svg class="custom_icon"  alt=""></a>
                    </div>

                  </form>
                </div>
             </div>
           </div>
         </div>

       </section>


@endsection
