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
          <p class='notifi_date' >10 Oct, 2020</p>
           <li class='mt-2'>
             <div class="notification_item_area mt-3">
               <div class="notification_inner_iteam_area">
                 <div class="notifi_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 183.69 134.7">
                    <g id="Layer_x0020_1_1_" transform="translate(59.84 -64.65)">
                      <path id="Path_1" data-name="Path 1" d="M96.03,64.65H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.12,6.12,0,0,0,6.12,6.12H96.03A15.59,15.59,0,0,1,111.6,92.47v.58H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.116,6.116,0,0,0,6.12,6.13H111.6v66.26a15.586,15.586,0,0,1-15.57,15.56H-32.03A15.586,15.586,0,0,1-47.6,171.56V91.87a6.131,6.131,0,0,0-6.13-6.13,6.126,6.126,0,0,0-6.11,6.13v79.68a27.841,27.841,0,0,0,27.82,27.8H96.03a27.841,27.841,0,0,0,27.82-27.8V92.47A27.845,27.845,0,0,0,96.03,64.65ZM15.82,167.16a6.17,6.17,0,0,0,3.43-1.05l53.74-36.5a6.116,6.116,0,1,0-6.87-10.12l-49.3,33.47L-.98,132.99a6.094,6.094,0,0,0-8.64-.49,6.112,6.112,0,0,0-.49,8.64l21.36,23.97A6.074,6.074,0,0,0,15.82,167.16Z" fill="#5bdb98"/>
                    </g>
                  </svg>
                 </div>
                 <div class="notifi_content">
                   <h4>Payment method added</h4>
                   <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                 </div>
               </div>
             </div>

             <div class="notification_item_area mt-3">
               <div class="notification_inner_iteam_area">
                 <div class="notifi_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 183.69 134.7">
                    <g id="Layer_x0020_1_1_" transform="translate(59.84 -64.65)">
                      <path id="Path_1" data-name="Path 1" d="M96.03,64.65H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.12,6.12,0,0,0,6.12,6.12H96.03A15.59,15.59,0,0,1,111.6,92.47v.58H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.116,6.116,0,0,0,6.12,6.13H111.6v66.26a15.586,15.586,0,0,1-15.57,15.56H-32.03A15.586,15.586,0,0,1-47.6,171.56V91.87a6.131,6.131,0,0,0-6.13-6.13,6.126,6.126,0,0,0-6.11,6.13v79.68a27.841,27.841,0,0,0,27.82,27.8H96.03a27.841,27.841,0,0,0,27.82-27.8V92.47A27.845,27.845,0,0,0,96.03,64.65ZM15.82,167.16a6.17,6.17,0,0,0,3.43-1.05l53.74-36.5a6.116,6.116,0,1,0-6.87-10.12l-49.3,33.47L-.98,132.99a6.094,6.094,0,0,0-8.64-.49,6.112,6.112,0,0,0-.49,8.64l21.36,23.97A6.074,6.074,0,0,0,15.82,167.16Z" fill="#5bdb98"/>
                    </g>
                  </svg>
                 </div>
                 <div class="notifi_content">
                   <h4>Payment method added</h4>
                   <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                 </div>
               </div>
             </div>
           </li>

          <p class='notifi_date' >10 Oct, 2020</p>
           <li class='mt-2'>
             <div class="notification_item_area mt-3">
               <div class="notification_inner_iteam_area">
                 <div class="notifi_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 153.32 144.34">
                    <g id="refer_a_friend" data-name="refer a friend" transform="translate(1.66 -2.83)">
                      <g id="Group_3" data-name="Group 3">
                        <path id="Path_27" data-name="Path 27" d="M58.24,61.43a29.3,29.3,0,1,1,29.3-29.3,29.3,29.3,0,0,1-29.3,29.3Zm0-48.98A19.68,19.68,0,1,0,77.92,32.13h0A19.679,19.679,0,0,0,58.24,12.45Z" fill="#5bdb98"/>
                        <path id="Path_28" data-name="Path 28" d="M91.92,147.17H24.56A26.266,26.266,0,0,1-1.66,120.95,50.806,50.806,0,0,1,49.05,70.19H67.43a50.8,50.8,0,0,1,50.71,50.76A26.26,26.26,0,0,1,91.92,147.17ZM49.05,79.81A41.143,41.143,0,0,0,7.96,120.95a16.649,16.649,0,0,0,16.6,16.6H91.92a16.649,16.649,0,0,0,16.6-16.6A41.143,41.143,0,0,0,67.43,79.81H49.05Z" fill="#5bdb98"/>
                      </g>
                      <g id="Group_4" data-name="Group 4">
                        <path id="Path_29" data-name="Path 29" d="M128.94,25.06V48.69h22.72v6.03H128.94V78.55h-6.43V54.72H99.78V48.69H122.5V25.06Z" fill="#b3b3b3"/>
                      </g>
                    </g>
                  </svg>
                 </div>
                 <div class="notifi_content">
                   <h4>Referral completed</h4>
                   <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                 </div>
               </div>
             </div>
             <div class="notification_item_area mt-3">
               <div class="notification_inner_iteam_area">
                 <div class="notifi_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class='profile_img_tab' viewBox="0 0 183.69 134.7">
                    <g id="Layer_x0020_1_1_" transform="translate(59.84 -64.65)">
                      <path id="Path_1" data-name="Path 1" d="M96.03,64.65H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.12,6.12,0,0,0,6.12,6.12H96.03A15.59,15.59,0,0,1,111.6,92.47v.58H-32.64a6.12,6.12,0,0,0-6.12,6.12,6.116,6.116,0,0,0,6.12,6.13H111.6v66.26a15.586,15.586,0,0,1-15.57,15.56H-32.03A15.586,15.586,0,0,1-47.6,171.56V91.87a6.131,6.131,0,0,0-6.13-6.13,6.126,6.126,0,0,0-6.11,6.13v79.68a27.841,27.841,0,0,0,27.82,27.8H96.03a27.841,27.841,0,0,0,27.82-27.8V92.47A27.845,27.845,0,0,0,96.03,64.65ZM15.82,167.16a6.17,6.17,0,0,0,3.43-1.05l53.74-36.5a6.116,6.116,0,1,0-6.87-10.12l-49.3,33.47L-.98,132.99a6.094,6.094,0,0,0-8.64-.49,6.112,6.112,0,0,0-.49,8.64l21.36,23.97A6.074,6.074,0,0,0,15.82,167.16Z" fill="#5bdb98"/>
                    </g>
                  </svg>
                 </div>
                 <div class="notifi_content">
                   <h4>Payment method added</h4>
                   <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                 </div>
               </div>
             </div>
           </li>
         </ul>
       </div>








        </div>
      </div>
   </div>
</div>
<!-- ---- end  tab ------ -->

@include("user.component.task_process")
@include("user.payment.payment_release")
@endsection

