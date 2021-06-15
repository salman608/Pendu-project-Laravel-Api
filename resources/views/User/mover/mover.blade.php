@extends('User.Asset')
@section('user_content')
<style>
    input[type="text"] {
        background: #f1f1f1;
        border:none;
        outline: none;
    }
    select {
        background-color: #f1f1f1!important;
        -webkit-appearance: none;
        -moz-appearance: none;
    }

    select.select-box {
        background-image:
            linear-gradient(45deg, transparent 50%, #8f8f8f 50%),
            linear-gradient(135deg, #8f8f8f 50%, transparent 50%);
        background-position:
            calc(100% - 20px) calc(1em + 2px),
            calc(100% - 15px) calc(1em + 2px),
            100% 0;
        background-size:
            5px 5px,
            5px 5px,
            2.5em 2.5em;
        background-repeat: no-repeat;
    }
    .cc-selector input{
        margin:0;padding:0;
        -webkit-appearance:none;
        -moz-appearance:none;
                appearance:none;
    }

    .cc-selector-2 input{
        position:absolute;
        z-index:999;
    }

    /* .car{
        background-image:url({{ asset('frontend/assets/images/Icons/car.svg') }});
    }
    .ute{
        background-image:url({{ asset('frontend/assets/images/Icons/ute.svg') }});
    }
    .van{
        background-image:url({{ asset('frontend/assets/images/Icons/van.svg') }});
    }
    .truck{
        background-image:url({{ asset('frontend/assets/images/Icons/truck.svg') }});
    } */

    .cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
    .cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
        -webkit-filter: none;
        -moz-filter: none;
                filter: none;
    }
    .drinkcard-cc{
        cursor:pointer;
        background-size:contain;
        background-repeat:no-repeat;
        display:inline-block;
        width:100px;height:70px;
        -webkit-transition: all 100ms ease-in;
        -moz-transition: all 100ms ease-in;
                transition: all 100ms ease-in;
        -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
        -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
                filter: brightness(1.8) grayscale(1) opacity(.7);
    }
    .car-selected, .drinkcard-cc:hover{
        -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
        -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
                filter: brightness(1.2) grayscale(.5) opacity(.9);
    }

    /* Extras */
    a:visited{color:#888}
    a{color:#444;text-decoration:none;}
    p{margin-bottom:.3em;}
    /* * { font-family:monospace; } */
    .cc-selector-2 input{ margin: 5px 0 0 12px; }
    .cc-selector-2 label{ margin-left: 7px; }
    span.cc{ color:#6d84b4 }


    .mover-from-address {
        margin-left: 23px;
        margin-top: -32px;
    }
    .qty{
        text-align: center !important;
    }
    .plus-button{
        font-weight: bold;
        width: 70px;
    }
    #pname{
        width:100% !important;

    }

.hello-salman-modal {
    width: 50%;
    margin: auto;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem;
    position: absolute;
    z-index: 9999999999999;
   top: 50%; right: 50%;
   transform: translate(50%,-50%);

}

.hello-salman-modal-block{
    position: fixed;
    background-color: transparent;
    /* opacity: 0.9; */
    width: 100vw;
    height: 100vh;
    z-index: 999999999999;
    /* display: none; */
 }

</style>

<section class="" style="position: relative;">
    @if (session()->has('success'))
    <div class="hello-salman-modal-block">
      <div class="hello-salman-modal">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1122 593">
                    <defs>
                      <clipPath id="clip-path">
                        <rect id="Rectangle_2260" data-name="Rectangle 2260" width="78.146" height="87.191" fill="#ffb44a"/>
                      </clipPath>
                      <clipPath id="clip-path-2">
                        <rect id="Rectangle_2485" data-name="Rectangle 2485" width="124.932" height="98.523" fill="none"/>
                      </clipPath>
                      <clipPath id="clip-path-3">
                        <rect id="Rectangle_2519" data-name="Rectangle 2519" width="312.434" height="219.117" fill="none"/>
                      </clipPath>
                      <clipPath id="clip-path-5">
                        <rect id="Rectangle_2502" data-name="Rectangle 2502" width="6.605" height="43.562" fill="none"/>
                      </clipPath>
                      <clipPath id="clip-path-6">
                        <rect id="Rectangle_2513" data-name="Rectangle 2513" width="61.618" height="166.644" fill="none"/>
                      </clipPath>
                    </defs>
                    <g id="Group_2979" data-name="Group 2979" transform="translate(5179 -8149)">
                      <rect id="Rectangle_4230" data-name="Rectangle 4230" width="1122" height="593" rx="10" transform="translate(-5179 8149)" fill="#fff"/>
                      <text id="Task_received" data-name="Task received" transform="translate(-4618 8500)" fill="#1b3149" font-size="16" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="-55.968" y="0">Task received</tspan></text>
                      <text id="Task_in_Review_" data-name="Task in Review " transform="translate(-4426 8502)" fill="#1b3149" font-size="16" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="-63" y="0">Task in Review </tspan></text>
                      <text id="Going_to_the_network_for_offers" data-name="Going to the
                  network for offers" transform="translate(-4216 8502)" fill="#1b3149" font-size="16" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="-53.64" y="0">Going to the </tspan><tspan x="-73.864" y="19">network for offers</tspan></text>
                      <g id="Group_2730" data-name="Group 2730" transform="translate(-4701 8485.042)">
                        <circle id="Ellipse_158" data-name="Ellipse 158" cx="11" cy="11" r="11" transform="translate(0 -0.042)" fill="#5bdb98"/>
                        <path id="Path_5605" data-name="Path 5605" d="M11.158,0,4.094,7.051,1.126,4.089,0,5.216,4.094,9.3l8.191-8.175Z" transform="translate(3.876 6.771)" fill="#fff"/>
                      </g>
                      <line id="Line_24" data-name="Line 24" x2="185.831" transform="translate(-4637.12 8412.866)" fill="none" stroke="#5bdb98" stroke-width="2"/>
                      <line id="Line_25" data-name="Line 25" x2="131.077" transform="translate(-4396.534 8412.866)" fill="none" stroke="#5bdb98" stroke-width="2"/>
                      <g id="Group_2732" data-name="Group 2732" transform="translate(-4453.777 8377.784)">
                        <path id="Path_5601" data-name="Path 5601" d="M59.392,47.97H2.492A2.491,2.491,0,0,0,0,50.462v72.889a2.491,2.491,0,0,0,2.492,2.492h56.9a2.491,2.491,0,0,0,2.492-2.492V50.462a2.491,2.491,0,0,0-2.492-2.492M56.9,104.661l-16.2,16.2H4.984V52.954H56.9Z" transform="translate(0 -47.97)" fill="#6ad1ff"/>
                        <path id="Path_5603" data-name="Path 5603" d="M99.279,175a15.4,15.4,0,1,1-15.4,15.4,15.4,15.4,0,0,1,15.4-15.4" transform="translate(-68.336 -151.462)" fill="#6ad1ff"/>
                        <path id="Path_5604" data-name="Path 5604" d="M133.686,221.425a1.669,1.669,0,0,0-2.361,0l-9.26,9.262-4.368-4.368a1.67,1.67,0,1,0-2.361,2.361l5.549,5.549a1.669,1.669,0,0,0,2.361,0l10.441-10.442a1.669,1.669,0,0,0,0-2.361" transform="translate(-93.569 -188.891)" fill="#6ad1ff"/>
                      </g>
                      <g id="Group_2733" data-name="Group 2733" transform="translate(-4700.999 8368.897)">
                        <g id="Group_1127" data-name="Group 1127" clip-path="url(#clip-path)">
                          <path id="Path_5606" data-name="Path 5606" d="M32.338,80.379H13.625a6.82,6.82,0,0,1-6.812-6.812V22.138a6.82,6.82,0,0,1,6.812-6.812h10.71v1.7a10.218,10.218,0,1,0,20.436,0v-1.7H55.5a6.82,6.82,0,0,1,6.812,6.812V49.785a3.406,3.406,0,0,0,6.812,0V22.138A13.639,13.639,0,0,0,55.5,8.515H44.77V3.406A3.406,3.406,0,0,0,41.364,0H27.74a3.406,3.406,0,0,0-3.406,3.406V8.515H13.625A13.639,13.639,0,0,0,0,22.138V73.568A13.639,13.639,0,0,0,13.625,87.191H32.338a3.406,3.406,0,1,0,0-6.812M31.145,6.812h6.812V17.03a3.406,3.406,0,1,1-6.812,0Zm26.4,39.168A20.606,20.606,0,1,0,78.147,66.586,20.629,20.629,0,0,0,57.541,45.98m0,34.4A13.794,13.794,0,1,1,71.335,66.586,13.809,13.809,0,0,1,57.541,80.379m8.345-13.794a3.406,3.406,0,0,1-3.406,3.406H57.541a3.406,3.406,0,0,1-3.406-3.406V59.6a3.406,3.406,0,1,1,6.812,0V63.18H62.48a3.406,3.406,0,0,1,3.406,3.406" transform="translate(-0.001)" fill="#ffb44a"/>
                        </g>
                      </g>
                      <g id="Group_2734" data-name="Group 2734" transform="translate(-4268.438 8366.639)">
                        <g id="Group_1406" data-name="Group 1406" clip-path="url(#clip-path-2)">
                          <path id="Path_5911" data-name="Path 5911" d="M57.332,77.266h-29.9a20.674,20.674,0,0,1-9.9-2.527C9.608,70.441,5.122,61.766,5.122,52.886S9.608,35.33,17.53,31.033a20.627,20.627,0,0,1,14.551-1.994,2.561,2.561,0,0,0,3.046-1.809C38.582,14.8,49.249,5.122,62.465,5.122S86.348,14.8,89.8,27.229a2.56,2.56,0,0,0,3.046,1.809A20.627,20.627,0,0,1,107.4,31.033c7.922,4.3,12.409,12.973,12.409,21.854S115.322,70.441,107.4,74.739a20.674,20.674,0,0,1-9.9,2.527H71.779a2.561,2.561,0,0,0,0,5.122H97.5a25.8,25.8,0,0,0,12.342-3.147c9.578-5.2,15.088-15.592,15.088-26.355s-5.511-21.16-15.089-26.356a25.754,25.754,0,0,0-15.8-2.912C89.349,10.075,77.189,0,62.465,0S35.582,10.075,30.89,23.618a25.754,25.754,0,0,0-15.8,2.912C5.51,31.726,0,42.122,0,52.886S5.51,74.046,15.087,79.241a25.8,25.8,0,0,0,12.342,3.147H55.624" transform="translate(0.001)" fill="#3de99f" fill-rule="evenodd"/>
                          <line id="Line_53" data-name="Line 53" x1="0.052" y2="0.157" transform="translate(57.333 77.11)" fill="#077bb2"/>
                          <path id="Path_5912" data-name="Path 5912" d="M160.846,111.747h-17.2l14.235-37.119h20.342L167.085,99.881l13.311-.105-31.915,50.063Z" transform="translate(-99.349 -51.616)" fill="#223349" fill-rule="evenodd"/>
                          <path id="Path_5913" data-name="Path 5913" d="M173.642,73.286,163.1,97.2a.953.953,0,0,0,.871,1.337h.008l11.52-.091L149.2,139.7l9.774-30.113a1.025,1.025,0,0,0-.975-1.342H142.291L155.7,73.286h17.944m-18.664-2.158a1.111,1.111,0,0,0-1.038.713l-13.665,35.633-.817,2.13a.591.591,0,0,0,.552.8h16.43l-9.293,28.63-2.3,7.1a1.207,1.207,0,0,0,2.166,1.022l4.011-6.291,26.3-41.251,1.551-2.434a.591.591,0,0,0-.5-.908l-2.886.023-9,.072a.421.421,0,0,1-.389-.591l10.176-23.083a1.112,1.112,0,0,0-1.017-1.56Z" transform="translate(-96.429 -49.195)" fill="#3de99f"/>
                        </g>
                      </g>
                      <g id="Group_2736" data-name="Group 2736" transform="translate(-5583 7860)">
                        <text id="Quick_Tip_-_we_will_notify_you_once_your_offer_is_accepted_or_a_new_offer_is_made." data-name="Quick Tip - we will notify you once your offer is accepted or a new offer is made." transform="translate(1157 769)" fill="#1b3149" font-size="12" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="-238.014" y="0">Quick Tip</tspan><tspan y="0" xml:space="preserve" font-family="Montserrat-Regular, Montserrat" font-weight="400"> - we will notify you once your offer is accepted or a new offer is made.</tspan></text>
                        <g id="Rectangle_4231" data-name="Rectangle 4231" transform="translate(882 742)" fill="none" stroke="#ffebcf" stroke-width="1">
                          <rect width="559" height="45" rx="5" stroke="none"/>
                          <rect x="0.5" y="0.5" width="558" height="44" rx="4.5" fill="none"/>
                        </g>
                      </g>
                      <a href="javascript:void(0)" data-dismiss="modal">
                      <g id="Group_2735" data-name="Group 2735" transform="translate(-5568.505 7864)">
                        <circle id="Ellipse_159" data-name="Ellipse 159" cx="19.5" cy="19.5" r="19.5" transform="translate(1424.505 317)" fill="#e8e8e8"/>
                        <text id="X" transform="translate(1444.505 344)" fill="#f97a7a" font-size="20" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="-6.93" y="0">X</tspan></text>
                      </g>
                    </a>
                      <g id="Group_1439" data-name="Group 1439" transform="translate(-5101 8328.1)" clip-path="url(#clip-path-3)">
                        <g id="Group_1438" data-name="Group 1438">
                          <g id="Group_1437" data-name="Group 1437" clip-path="url(#clip-path-3)">
                            <path id="Path_5973" data-name="Path 5973" d="M214.525,155.622a2.112,2.112,0,0,1,2.113-2.113H310.32a2.113,2.113,0,1,0,0-4.225H2.114a2.113,2.113,0,1,0,0,4.225H77.231a2.113,2.113,0,0,1,0,4.227H35.423a1.873,1.873,0,0,0-1.873,1.873v.48a1.873,1.873,0,0,0,1.873,1.873h92.558a2.113,2.113,0,1,1,0,4.227H106.043a2.113,2.113,0,1,0,0,4.227H228.185a2.113,2.113,0,1,0,0-4.227H186.237a2.113,2.113,0,1,1,0-4.227H277.01a1.872,1.872,0,0,0,1.873-1.873v-.48a1.872,1.872,0,0,0-1.873-1.873H216.637a2.113,2.113,0,0,1-2.113-2.114" transform="translate(0 48.702)" fill="#baf4d2"/>
                            <path id="Path_5974" data-name="Path 5974" d="M25.016,125.7v11.261h-9.78v-11.31Z" transform="translate(4.971 40.993)" fill="#19205d"/>
                            <path id="Path_5975" data-name="Path 5975" d="M106.692,125.7v11.261H79.161v-11.31Z" transform="translate(25.825 40.993)" fill="#19205d"/>
                            <path id="Path_5976" data-name="Path 5976" d="M86.706,105.116c-3.849,0-7.03,11.849-7.544,27.236H94.248c-.513-15.387-3.694-27.236-7.542-27.236" transform="translate(25.826 34.293)" fill="#19205d"/>
                            <path id="Path_5977" data-name="Path 5977" d="M108.2,108.626H85.676v53.921H108.2c3.587,0,6.5-12.07,6.5-26.961s-2.908-26.96-6.5-26.96" transform="translate(27.951 35.438)" fill="#19205d"/>
                            <path id="Path_5978" data-name="Path 5978" d="M93.77,135.587c0,14.891-2.908,26.961-6.5,26.961s-6.5-12.07-6.5-26.961,2.908-26.96,6.5-26.96,6.5,12.07,6.5,26.96" transform="translate(26.353 35.438)" fill="#435277"/>
                            <path id="Path_5979" data-name="Path 5979" d="M88.141,117.951c-.463-.8-.969-1.243-1.5-1.243-2.162,0-3.914,7.273-3.914,16.242s1.752,16.241,3.914,16.241c.533,0,1.04-.443,1.5-1.243-1.415-2.444-2.411-8.239-2.411-15s1-12.554,2.411-15" transform="translate(26.988 38.075)" fill="#c3d2d7"/>
                            <path id="Path_5980" data-name="Path 5980" d="M87.4,117.645c-1.415,2.446-2.411,8.239-2.411,15s1,12.554,2.411,15c1.415-2.444,2.411-8.239,2.411-15s-1-12.554-2.411-15" transform="translate(27.727 38.381)" fill="#95a4b1"/>
                            <path id="Path_5981" data-name="Path 5981" d="M200.27,108.626H177.749v53.921H200.27c3.587,0,6.5-12.07,6.5-26.961s-2.908-26.96-6.5-26.96" transform="translate(57.989 35.438)" fill="#19205d"/>
                            <path id="Path_5982" data-name="Path 5982" d="M185.844,135.587c0,14.891-2.907,26.961-6.5,26.961s-6.5-12.07-6.5-26.961,2.91-26.96,6.5-26.96,6.5,12.07,6.5,26.96" transform="translate(56.391 35.438)" fill="#435277"/>
                            <path id="Path_5983" data-name="Path 5983" d="M180.214,117.951c-.463-.8-.969-1.243-1.5-1.243-2.162,0-3.912,7.273-3.912,16.242s1.751,16.241,3.912,16.241c.533,0,1.04-.443,1.5-1.243-1.415-2.444-2.411-8.239-2.411-15s1-12.554,2.411-15" transform="translate(57.026 38.075)" fill="#c3d2d7"/>
                            <path id="Path_5984" data-name="Path 5984" d="M179.475,117.645c-1.415,2.446-2.411,8.239-2.411,15s1,12.554,2.411,15c1.415-2.444,2.411-8.239,2.411-15s-1-12.554-2.411-15" transform="translate(57.765 38.381)" fill="#95a4b1"/>
                            <path id="Path_5985" data-name="Path 5985" d="M22.781,105.116c-3.849,0-7.03,11.849-7.544,27.236H30.323c-.513-15.387-3.694-27.236-7.542-27.236" transform="translate(4.971 34.293)" fill="#19205d"/>
                            <rect id="Rectangle_2498" data-name="Rectangle 2498" width="155.093" height="166.645" transform="translate(132.518)" fill="#a3efc2"/>
                            <rect id="Rectangle_2499" data-name="Rectangle 2499" width="142.101" height="153.65" transform="translate(139.014 6.496)" fill="#19205d"/>
                            <path id="Path_5986" data-name="Path 5986" d="M43.446,108.626H20.925v53.921H43.446c3.587,0,6.5-12.07,6.5-26.961s-2.908-26.96-6.5-26.96" transform="translate(6.827 35.438)" fill="#19205d"/>
                            <path id="Path_5987" data-name="Path 5987" d="M29.019,135.587c0,14.891-2.908,26.961-6.5,26.961s-6.5-12.07-6.5-26.961,2.908-26.96,6.5-26.96,6.5,12.07,6.5,26.96" transform="translate(5.228 35.438)" fill="#435277"/>
                            <path id="Path_5988" data-name="Path 5988" d="M23.39,117.951c-.464-.8-.969-1.243-1.5-1.243-2.162,0-3.914,7.273-3.914,16.242s1.752,16.241,3.914,16.241c.533,0,1.038-.443,1.5-1.243-1.415-2.444-2.411-8.239-2.411-15s1-12.554,2.411-15" transform="translate(5.864 38.075)" fill="#c3d2d7"/>
                            <path id="Path_5989" data-name="Path 5989" d="M22.651,117.645c-1.415,2.446-2.411,8.239-2.411,15s1,12.554,2.411,15c1.415-2.444,2.41-8.239,2.41-15s-.995-12.554-2.41-15" transform="translate(6.603 38.381)" fill="#95a4b1"/>
                            <path id="Path_5990" data-name="Path 5990" d="M53.459,0V166.645H87.546c.515-15.388,3.695-27.236,7.545-27.236s7.028,11.847,7.542,27.236h12.444V0Z" transform="translate(17.44)" fill="#56cd93"/>
                            <path id="Path_5991" data-name="Path 5991" d="M67.7,29.516H39.958a9.744,9.744,0,0,0-9.651,8.4l-7.06,50.717L14.4,97.77a16.25,16.25,0,0,0-4.576,11.3v47.945H17c.515-15.388,3.695-27.236,7.545-27.236s7.029,11.847,7.542,27.236H67.7Z" transform="translate(3.204 9.629)" fill="#c3d2d7"/>
                            <rect id="Rectangle_2500" data-name="Rectangle 2500" width="160.247" height="11.26" transform="translate(132.518 166.645)" fill="#c3d2d7"/>
                            <rect id="Rectangle_2501" data-name="Rectangle 2501" width="12.395" height="11.31" transform="translate(120.123 166.645)" fill="#95a4b1"/>
                            <path id="Path_5992" data-name="Path 5992" d="M62.218,125.652v.049l-35.606-.049v11.31H96.3V125.7Z" transform="translate(8.682 40.993)" fill="#95a4b1"/>
                            <path id="Path_5993" data-name="Path 5993" d="M17.642,125.7v11.261H7.862v-11.31Z" transform="translate(2.565 40.993)" fill="#95a4b1"/>
                            <path id="Path_5994" data-name="Path 5994" d="M50.87,34.9H34.882a2.61,2.61,0,0,0-2.574,2.24L25.385,86.878H50.87Z" transform="translate(8.282 11.387)" fill="#a3efc2"/>
                            <path id="Path_5995" data-name="Path 5995" d="M49.894,80.813a13.306,13.306,0,0,0-9.41-3.9h-9.43l4.729-37.843a1.3,1.3,0,0,1,1.29-1.137H50.869V34.9H34.882a2.609,2.609,0,0,0-2.576,2.24L25.385,86.876H50.869V80.813Z" transform="translate(8.282 11.387)" fill="#56cd93"/>
                            <g id="Group_1433" data-name="Group 1433" transform="translate(50.705 48.024)" opacity="0.5">
                              <g id="Group_1432" data-name="Group 1432">
                                <g id="Group_1431" data-name="Group 1431" clip-path="url(#clip-path-5)">
                                  <path id="Path_5996" data-name="Path 5996" d="M43.566,79.6h0a13.977,13.977,0,0,1-5.333-10.983V37.511a1.3,1.3,0,0,1,1.3-1.3h4.007a1.3,1.3,0,0,1,1.3,1.3V78.985a.786.786,0,0,1-1.272.618" transform="translate(-38.232 -36.211)" fill="#fff"/>
                                </g>
                              </g>
                            </g>
                            <path id="Path_5997" data-name="Path 5997" d="M25.029,70.6H19.792v2.6h5.237a1.3,1.3,0,0,0,0-2.6" transform="translate(6.457 23.033)" fill="#435277"/>
                            <path id="Path_5998" data-name="Path 5998" d="M20.82,60.254h-6.8a1.733,1.733,0,0,0-1.733,1.732V77.252a1.733,1.733,0,0,0,1.733,1.732h6.8a1.733,1.733,0,0,0,1.733-1.732V61.986a1.733,1.733,0,0,0-1.733-1.732" transform="translate(4.007 19.657)" fill="#435277"/>
                            <path id="Path_5999" data-name="Path 5999" d="M22.78,60.254h-6.8a1.733,1.733,0,0,0-1.732,1.732V77.252a1.733,1.733,0,0,0,1.732,1.732h6.8a1.733,1.733,0,0,0,1.733-1.732V61.986a1.733,1.733,0,0,0-1.733-1.732" transform="translate(4.647 19.657)" fill="#a3efc2"/>
                            <path id="Path_6000" data-name="Path 6000" d="M42.805,74.092v61.337a1.191,1.191,0,1,0,2.382,0V74.092Z" transform="translate(13.965 24.172)" fill="#e76164"/>
                            <path id="Path_6001" data-name="Path 6001" d="M12.948,113.69a.974.974,0,0,1-.975-.973V92.737a15.2,15.2,0,0,1,4.3-10.623.975.975,0,0,1,1.4,1.357,13.251,13.251,0,0,0-3.753,9.266v19.98a.974.974,0,0,1-.973.973" transform="translate(3.906 26.692)" fill="#ffdd87"/>
                            <path id="Path_6002" data-name="Path 6002" d="M17.856,82.313a.974.974,0,0,1-.7-1.652l1.885-1.944a.974.974,0,1,1,1.4,1.357l-1.883,1.943a.966.966,0,0,1-.7.3" transform="translate(5.507 25.583)" fill="#ffdd87"/>
                            <rect id="Rectangle_2503" data-name="Rectangle 2503" width="52.25" height="52.25" transform="translate(202.509 107.896)" fill="#ffd277"/>
                            <rect id="Rectangle_2504" data-name="Rectangle 2504" width="9.312" height="16.354" transform="translate(223.977 107.896)" fill="#ffeed0"/>
                            <rect id="Rectangle_2505" data-name="Rectangle 2505" width="11.244" height="52.25" transform="translate(191.264 107.896)" fill="#eca700"/>
                            <rect id="Rectangle_2506" data-name="Rectangle 2506" width="44.074" height="44.074" transform="translate(190.378 63.823)" fill="#ffd277"/>
                            <rect id="Rectangle_2507" data-name="Rectangle 2507" width="7.854" height="13.794" transform="translate(208.488 63.823)" fill="#ffeed0"/>
                            <rect id="Rectangle_2508" data-name="Rectangle 2508" width="14.22" height="44.074" transform="translate(176.158 63.823)" fill="#eca700"/>
                            <rect id="Rectangle_2509" data-name="Rectangle 2509" width="37.144" height="52.25" transform="translate(139.014 55.646)" fill="#ffd277"/>
                            <rect id="Rectangle_2510" data-name="Rectangle 2510" width="9.312" height="16.354" transform="translate(145.378 55.646)" fill="#ffeed0"/>
                            <path id="Path_6003" data-name="Path 6003" d="M141.962,83.618H104.818v-9.2Z" transform="translate(34.196 24.278)" fill="#eca700"/>
                            <rect id="Rectangle_2511" data-name="Rectangle 2511" width="52.25" height="52.25" transform="translate(139.015 107.896)" fill="#ffd277"/>
                            <rect id="Rectangle_2512" data-name="Rectangle 2512" width="9.312" height="16.354" transform="translate(160.483 107.896)" fill="#ffeed0"/>
                            <path id="Path_6004" data-name="Path 6004" d="M157.069,123.67h-52.25V111.81Z" transform="translate(34.196 36.477)" fill="#eca700"/>
                            <path id="Path_6005" data-name="Path 6005" d="M111.038,133.285H99.912v-7.633h18.76a7.633,7.633,0,0,1-7.634,7.633" transform="translate(32.595 40.993)" fill="#c3d2d7"/>
                            <path id="Path_6006" data-name="Path 6006" d="M214.245,133.285h11.126v-7.633h-18.76a7.633,7.633,0,0,0,7.634,7.633" transform="translate(67.405 40.993)" fill="#c3d2d7"/>
                            <path id="Path_6007" data-name="Path 6007" d="M101.587,133.285h0a6.777,6.777,0,0,1-6.777-6.777v-.855h6.777Z" transform="translate(30.931 40.993)" fill="#bb4063"/>
                            <g id="Group_1436" data-name="Group 1436" transform="translate(70.9)" opacity="0.24">
                              <g id="Group_1435" data-name="Group 1435">
                                <g id="Group_1434" data-name="Group 1434" clip-path="url(#clip-path-6)">
                                  <path id="Path_6008" data-name="Path 6008" d="M115.077,0,53.459,140.383v26.262H66.1L115.077,62.914Z" transform="translate(-53.459 0)" fill="#a3efc2"/>
                                </g>
                              </g>
                            </g>
                            <rect id="Rectangle_2514" data-name="Rectangle 2514" width="52.298" height="4.385" transform="translate(69.003 43.369)" fill="#fff"/>
                            <rect id="Rectangle_2515" data-name="Rectangle 2515" width="52.298" height="4.386" transform="translate(69.003 47.753)" fill="#c3d2d7"/>
                            <path id="Path_6009" data-name="Path 6009" d="M91.462,32.7V41.47h3.627V32.7Z" transform="translate(29.839 10.668)" fill="#95a4b1"/>
                            <rect id="Rectangle_2516" data-name="Rectangle 2516" width="52.298" height="4.386" transform="translate(69.003 90.549)" fill="#fff"/>
                            <rect id="Rectangle_2517" data-name="Rectangle 2517" width="52.298" height="4.386" transform="translate(69.003 94.934)" fill="#c3d2d7"/>
                            <path id="Path_6010" data-name="Path 6010" d="M91.462,68.275v8.77h3.627v-8.77Z" transform="translate(29.839 22.274)" fill="#95a4b1"/>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
               </div>
            </div>
    @endif





    <div style="height: 120px; background: #5bdb98"></div>
    <div class="container" style="margin-top: -60px;">
        <span class="font-weight-bold" id="titleId">Mover</span>
        <div class="row" style="background: #fff; box-shadow: 0px 3px 6px rgba(0, 0, 0, 13);height: 80px;border-radius: 10px;">
            <div class="d-flex justify-content-center" style="width: 80%;align-items: center;margin: auto;
            ">
                <div class="step-line">
                    <div class="bg-done-first-step">
                        <small class="step-line-text">Task Details</small>
                        <img class="task-img" src="{{ asset('frontend/assets/images/Icons/task white.svg') }}" alt="">
                    </div>
                    {{-- <div>
                        <small class="step-line-text">Timeframe</small>
                        <img class="task-img" src="{{ asset('frontend/assets/images/Icons/time.svg') }}" alt="">
                    </div> --}}
                    <div>
                        <small class="step-line-text" style="margin-left: -40px;">Review & Submit</small>
                        <img class="task-img" src="{{ asset('frontend/assets/images/Icons/tik.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        @if (session()->has('error'))
            <div class="alert alert-danger mt-4" style="font-size: 22px;" role="alert">{{ session()->get('error') }}</div>
        @endif

    </div>

    <div class="container" style="border-radius: 10px; bacground: #fff;box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.6); padding: 25px 40px 25px 40px;margin-top: 30px;margin-bottom: 30px;">
        <form enctype="multipart/form-data" method="POST" id="mover-form" action="{{route('mover.store')}}">
            @csrf
            <div id="task-details">
                <div class="form-group">
                <div class="form-row" style="margin-top: -18px;">
                    <div class="float-left"><label for="exampleInputEmail1" class="label-title mr-5" style="margin-top: 20px;">Vehicle Type-</label></div>
                    <div class="cc-selector">
                        <div class="row">
                        @foreach ($vehicles as $vehicle)
                        <label class="drinkcard-cc" for="checboxStrip">
                           <div class="col form-check">
                            <input id="checboxStrip@php echo $vehicle->id @endphp" type="checkbox" name="vahicle_id" class="vehicle_id_cl" data-icon="{{ $vehicle->icon }}" value="{{$vehicle->id}}"/>
                               <img src="{{ $vehicle->icon }}" alt="">
                            </div>
                        </label>

                        @endforeach
                            {{-- <div class="col form-check">
                                <input id="car" type="radio" name="vahicle_type" value="car"  />
                                <label class="drinkcard-cc" for="car"><img src="{{ asset('frontend/assets/images/Icons/car.svg') }}" alt=""></label>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>

                {{-- <div class="form-group">
                    <label for="procat_id" class="label-title">Categories</label>
                    <select multiple class="selectpicker w-100" id="procat_id" name="product_cats[]">
                        @foreach ($product_cats as $p_cat)
                            <option value="{{ $p_cat->id  }}">{{$p_cat->title}}</option>
                        @endforeach
                    </select>
                    <!-- End -->
                  </div> --}}

                  <div class="form-group">
                    <label for="taskTitle" class="label-title">Task title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter your title here" style="outline: none" name="title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="label-title">Products</label>&ensp;
                    <small style="color: #56cd93">(Please Provide clear name & details if you have it. You''ll receive  photos of the items once shopper begin the shopping.)</small>
                    <div class="products-box">
                        <table class="table table-borderless border-top-0">
                            <tbody>
                                <tr class="top border-bottom border-light" id="tableRow_1">
                                    <td><div class="circle"></div></td>
                                    <td><input class="form-control" type="text" name="pro_name[]" id="pname" placeholder="Enter Product Name..."></td>
                                    <td class="qty">
                                           <span class="minus" style="background: #8f8f8f">-</span>
                                           <input type="number" class="count" name="qty[]" value="1">
                                           <span class="plus" style="background: #8f8f8f">+</span>
                                      </td>
                                    {{-- <td class="text-right"> <input type="text" id="pprice" name="pro_price[]" class="form-control" placeholder="Unit Price.."></td> --}}
                                    <td class="text-right"><button type="button" class="cross-button" id="remove"></button>
                                </tr>
                            </tbody>
                            <tfoot >
                                  <tr >
                                      <td colspan="5" class="text-center">
                                          <button type="button" class="btn btn-success plus-button" id="add_btn">+</button>
                                      </td>
                                  </tr>
                            </tfoot>
                            <thead>
                            </thead>
                        </table>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-lg-6 col-md-6">
                        <label for="shop_address" class="label-title">Pickup address</label>
                        <div class="input-group">
                            <input id="shop_address" class="form-control input-group-lg" type="text" name="shop_address"
                               title="Enter your pickup address"
                               placeholder="Enter your pickup address"/>
                            <div class="input-group-append cursor-pointer">
                                <span class="input-group-text border-0 pickupModal"  data-toggle="modal" data-target="#googleMapPicupModal" id="pickupSpanId">
                                    <img src="{{ asset('frontend/assets/images/Icons/location.svg') }}" alt="" width="20" height="auto">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6">
                        <label for="delivery_address" class="label-title">Delivery address</label>
                        <div class="input-group">
                            <input id="delivery_address" class="form-control input-group-lg" type="text" name="delivery_address"
                               title="Enter your delivery address"
                               placeholder="Enter your delivery address"/>
                            <div class="input-group-append cursor-pointer">
                                <span class="input-group-text border-0 deliveryModal"  data-toggle="modal" data-target="#googleMapDeliveryModal" id="deliverySpanId">
                                    <img src="{{ asset('frontend/assets/images/Icons/location green.svg') }}" alt="" width="20" height="auto">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="form-group nb-mover" style="border-color: #60e99c!important;border-style: dashed; height: 40px!important;">
                      <label for="task_image" style="width: 100%">
                        <div class="row" style="position: relative;">
                            <div class="col-md-6 col-12 col-sm-6 col-lg-12" style="padding-top: 8px;">
                                <small>Add photos to the task (Optional)<span id="task_image_show" style="font-size: 15px; font-weight: 600; color: #60e99c;"></span></small>

                            </div>
                            <div class="col-md-6 col-6 col-sm-6 col-lg-6 d-flex justify-content-end" style="position: absolute; right: 14px;">
                                <svg style="height: 30px;width: 30px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34.025" height="38.645" viewBox="0 0 34.025 38.645">
                                    <defs>
                                      <clipPath id="clip-path">
                                        <rect width="34.025" height="38.645" fill="none"/>
                                      </clipPath>
                                      <clipPath id="clip-path-2">
                                        <rect id="Rectangle_2496" data-name="Rectangle 2496" width="26.417" height="26.417" fill="#90a0b2"/>
                                      </clipPath>
                                    </defs>
                                    <g id="Repeat_Grid_7" data-name="Repeat Grid 7" clip-path="url(#clip-path)">
                                      <g id="Group_2968" data-name="Group 2968" transform="translate(-315.975 -654.826)">
                                        <g id="Group_1429" data-name="Group 1429" transform="translate(315.975 667.054)">
                                          <g id="Group_1428" data-name="Group 1428" clip-path="url(#clip-path-2)">
                                            <path id="Path_5969" data-name="Path 5969" d="M20.253,22.894H.881A.881.881,0,0,1,0,22.013V.88A.881.881,0,0,1,.881,0H20.253a.881.881,0,0,1,.881.881V22.013a.881.881,0,0,1-.881.881M1.761,21.133H19.372V1.76H1.761Z" transform="translate(0 0.001)" fill="#90a0b2"/>
                                            <path id="Path_5970" data-name="Path 5970" d="M62.342,50.954H42.969a.881.881,0,0,1,0-1.761H61.461V29.82h-.88a.881.881,0,0,1,0-1.761h1.761a.881.881,0,0,1,.881.881V50.073a.881.881,0,0,1-.881.881" transform="translate(-36.806 -24.537)" fill="#90a0b2"/>
                                            <path id="Path_5971" data-name="Path 5971" d="M.937,96.51a.876.876,0,0,1-.616-1.5L3.887,91.35a2.351,2.351,0,0,1,3.064-.255l3.161,2.289a.6.6,0,0,0,.775-.07l3.258-3.276a2.422,2.422,0,0,1,3.364,0L20.926,93.5a.881.881,0,0,1-1.25,1.233l-3.417-3.461a.608.608,0,0,0-.859-.021l-.022.021-3.267,3.3a2.36,2.36,0,0,1-3.064.264L5.886,92.548a.589.589,0,0,0-.775.062L1.563,96.246a.88.88,0,0,1-.625.264" transform="translate(-0.057 -78.142)" fill="#90a0b2"/>
                                            <path id="Path_5972" data-name="Path 5972" d="M65.6,34.122A3.522,3.522,0,1,1,69.125,30.6,3.522,3.522,0,0,1,65.6,34.122m0-5.283A1.761,1.761,0,1,0,67.364,30.6,1.761,1.761,0,0,0,65.6,28.838" transform="translate(-54.288 -23.678)" fill="#90a0b2"/>
                                          </g>
                                        </g>
                                        <text id="_" data-name="+" transform="translate(343 675.826)" fill="#60e99c" font-size="22" font-family="Montserrat-Medium, Montserrat" font-weight="500"><tspan x="-6.402" y="0">+</tspan></text>
                                      </g>
                                    </g>
                                  </svg>
                            </div>
                        </div>
                          <input type="file" name="task_image" id="task_image" class="d-none">
                      </label>
                  </div>
            </div>

            <div id="timeFrameDiv" style="">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="label-title">Delivery Time</label>
                    <div class="row">
                        @foreach ($delivery_times as $d_time)
                        <div class="pr-2" >
                            <label >
                                <input type="radio" name="delivery_time" id="delivery_time"  value="{{$d_time->id}}" >
                                <div style="width: 180px;">
                                    <img src="{{$d_time->icon}}" height="30" width="80">
                                    <label class="radio-btn-text delivery_time_checker" style="margin-top: 16px;margin-right: 6px;" for="asap" >{{$d_time->title}}</label>
                                </div>
                            </label>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div id="taskDetails" style="display: none;">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="label-title mr-5" >Vehicle Type-</label>

                    <img src="" id="vehicle-icon-show" style="height: 70;" alt="">
                </div>

                <div class="task-details-timeframe" style="padding-left: 30px;padding-top: 8px;">
                    <div>
                        <img src="{{ asset('frontend/assets/images/Icons/location green.svg') }}" alt="" height="39" width="30">
                        <span style="margin-left: 20px;color: #8f8f8f" class="shopAddress" id="shopAddress">3/A Jadobpur, Abdul Goli, MD Pur, Dhaka, Abdul Goli, MD Pur, Dhaka</span>
                    </div>
                    <div class="vertical-dotted-line" style="margin-left: 14px;margin-top: -5px;"></div>
                    <div style="margin-left: 22px;margin-top: -5px;">
                        <div class="row">
                            <div class="circle-div"></div>
                            <div style="margin-left: 30px;margin-top: -5px;color: #8f8f8f" class="deliveryAddress" id="deliveryAddress">2103 N Main St, Highlands, TX, 77562</div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="label-title mt-3">Delivery Time</label>
                    <div class="row">
                        @foreach ($delivery_times as $d_time )
                        <div class="pr-2">
                            <label>
                                <input type="radio" value="{{$d_time->id}}" name="delivery_time_review" id="asap" disabled>
                                <div style="width: 180px;">
                                    <img src="{{$d_time->icon}}" height="30" width="80">
                                    <label class="radio-btn-text" style="margin-top: 16px;margin-right: 6px;" for="asap">{{$d_time->title}}</label>
                                </div>
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
          </form>
    </div>
    <div class="text-center" id="nextButton">
        <a class="button-outline mr-2">Close</a>
        <a class="button text-white" data-toggle="modal" data-target="#googleMapModal">Next</a>
    </div>
    <div class="text-center" id="reviewButtons" style="display: none">
        <a class="button-outline backButtonCls" id="backButtonId">Back</a>
        <a class="button text-white reviewButtonCls" id="reviewButtonId">Review</a>
    </div>
    <div class="text-center" id="postButtonId" style="display: none">
        <a class="button text-white" id="postSubmitButtonId">Post Delivery Request</a>
    </div>
    <br><br>
</section>

{{-- data-toggle="modal" data-target="#postMoverModal" --}}

@include("User.component.googleMap_pickup_modal")
@include("User.component.googleMap_delivery_modal")
@include("User.component.post_mover")

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDe9wIv3EiEy0aH3YTSRRZP8eRNbitATDo&libraries=places"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

{{-- map script start here --}}
<script>
    // Maps

    let options = {
        // types: ['(cities)',],
        componentRestrictions: { country: "bd" },
    }
    centeredLatLng = { lat: 23.810332, lng: 90.4125181 }

    let shop_address_marker;
    var shop_address = { address: '', lat: '', lng: '' };
    var shop_address_modal = { address: '', lat: '', lng: '' };
    let shop_address_input = document.getElementById("shop_address");
    let auto_shop_address = new google.maps.places.Autocomplete(shop_address_input, options);
    let shop_address2_input = document.getElementById("shop_address2");

    let delivery_address_marker;
    var delivery_address = { address: '', lat: '', lng: '' };
    var delivery_address_modal = { address: '', lat: '', lng: '' };
    let delivery_address_input = document.getElementById("delivery_address");
    let auto_delivery_address = new google.maps.places.Autocomplete(delivery_address_input, options);
    let delivery_address2_input = document.getElementById("delivery_address2");

    auto_shop_address.addListener("place_changed", () => {
        shop_address.address = shop_address_input.value;

        let place = auto_shop_address.getPlace();
        shop_address.lat = place.geometry.location.lat();
        shop_address.lng = place.geometry.location.lng();
    });

    auto_delivery_address.addListener("place_changed", () => {
        delivery_address.address = delivery_address_input.value;

        let place = auto_delivery_address.getPlace();
        delivery_address.lat = place.geometry.location.lat();
        delivery_address.lng = place.geometry.location.lng();
    });

    $(".pickupModal").click(function() {

// New map
let map = new google.maps.Map(document.getElementById("googleMap"), {
    zoom: 7,
    center: centeredLatLng,
    disableDefaultUI: true,
    // mapTypeId: google.maps.MapTypeId.ROADMAP,
});

let auto_shop_address2 = new google.maps.places.Autocomplete(shop_address2_input, options);

auto_shop_address2.addListener("place_changed", () => {
    let place = auto_shop_address2.getPlace();
    let latitude = place.geometry.location.lat();
    let longitude = place.geometry.location.lng();

    shop_address_modal.address = shop_address2_input.value;
    shop_address_modal.lat = latitude;
    shop_address_modal.lng = longitude;

    // ShowLocationOnTheMap(
    //     map,
    //     place.geometry.location.lat(),
    //     place.geometry.location.lng()
    // );

    // Remove old marker
    if(typeof shop_address_marker !== 'undefined' && shop_address_marker !== null) {
        shop_address_marker.setMap(null);
    }

    // Add Marker
    shop_address_marker = new google.maps.Marker({
        position: new google.maps.LatLng(latitude, longitude),
        map: map,
    });

    if (place.geometry.viewport) {
       map.fitBounds(place.geometry.viewport);
    }
});
});

$("#picupModalBtn").click(function() {

if(
    shop_address2_input.value == '' ||
    typeof shop_address_modal == 'undefined' ||
    shop_address_modal.address == '' ||
    shop_address_modal.lng == '' ||
    shop_address_modal.lat == ''
) {
    swal({
        icon: 'error',
        title: 'Oops...',
        text: "Shop/Pickup address is invalid. Try again.",
    });

    return;
}
shop_address = shop_address_modal;
shop_address_input.value = shop_address.address;
$("#googleMapPicupModal").modal('hide');
});

$(".deliveryModal").click(function() {
        // New map
        let map = new google.maps.Map(document.getElementById("googleMapDelivery"), {
            zoom: 7,
            center: centeredLatLng,
            disableDefaultUI: true,
            // mapTypeId: google.maps.MapTypeId.ROADMAP,
        });

        let auto_delivery_address2 = new google.maps.places.Autocomplete(delivery_address2_input, options);

        auto_delivery_address2.addListener("place_changed", () => {
            let place = auto_delivery_address2.getPlace();
            let latitude = place.geometry.location.lat();
            let longitude = place.geometry.location.lng();

            delivery_address_modal.address = delivery_address2_input.value;
            delivery_address_modal.lat = latitude;
            delivery_address_modal.lng = longitude;

            // ShowLocationOnTheMap(
            //     map,
            //     place.geometry.location.lat(),
            //     place.geometry.location.lng()
            // );

            // Remove old marker
            if(typeof delivery_address_marker !== 'undefined' && delivery_address_marker !== null) {
                delivery_address_marker.setMap(null);
            }

            // Add Marker
            delivery_address_marker = new google.maps.Marker({
                position: new google.maps.LatLng(latitude, longitude),
                map: map,
            });

            if (place.geometry.viewport) {
               map.fitBounds(place.geometry.viewport);
            }
        });
    });


    $("#deliveryModalBtn").click(function() {

        if(
            delivery_address2_input.value == '' ||
            typeof delivery_address_modal == 'undefined' ||
            delivery_address_modal.address == '' ||
            delivery_address_modal.lng == '' ||
            delivery_address_modal.lat == ''
        ) {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Delivery address is invalid. Try again.",
            });

            return;
        }
        delivery_address = delivery_address_modal;
        delivery_address_input.value = delivery_address.address;

        $("#googleMapDeliveryModal").modal('hide');
    });


// Hello Salman  Success Modal
$('.hello-salman-modal-block').click(function(){
        $(this).css("display", "none");
    });

</script>

<script>
//======product and price ======
$(document).ready(function(){

// Add another Product field
$('#add_btn').on('click',function(){
    let html='';
    html+='<tr>';
    html+='<td><div class="circle"></div></td>';
    html+=' <td><input class="form-control" type="text" name="pro_name[]" id="pname" placeholder="Enter Product Name..."></td>';
    html+='<td class="qty"> <span class="minus" style="background: #8f8f8f">-</span>  <input type="number" class="count" name="qty[]" value="1">  <span class="plus" style="background: #8f8f8f">+</span></td>';
    // html+='<td  class="text-right"> <input type="text" id="pprice" name="pro_price[]" class="form-control" placeholder="Unit Price.."></td>';
    html+='<td class="text-right"><button type="button" class="cross-button" id="remove"></button></td>';
    html+='</tr>';
    $('tbody').append(html);
});

// remove product field
$(document).on('click','#remove',function(){
    $(this).closest('tr').remove();
});

// Select Delivery Time based on 2nd Lable
$('.delivery_time_checker').click(function(){

    let label = $('.delivery_time_checker').parents("label");
    label.children().prop("checked", true);
});

});

// quantity count
$(document).ready(function(){
    $('.count').prop('disabled', true);
       $(document).on('click','.plus',function(){
        //    console.log($(this).siblings('input').val());
       var countInput = $(this).siblings('input');
        $(countInput).val(parseInt(countInput.val()) + 1 );
    });
    $(document).on('click','.minus',function(){
        // console.log($(this).siblings('input').val());
        var countMinus = $(this).siblings('input');
        $(countMinus).val(parseInt(countMinus.val()) - 1 );
            if ($(countMinus).val() == 0) {
                $(countMinus).val(1);
            }
        });
 });


  // Car selection
  $(document).on('click','.drinkcard-cc',function(){

        $('.drinkcard-cc').removeClass("car-selected");

        $(this).toggleClass("car-selected");
        let inputCar = $(this).find("input");
        inputCar.prop( "checked", true );
  });

  // Task Image Show


  $('#task_image').change(function(e){

      if( name = e.target.files[0].name){
        $('#task_image_show').text(" " +name + " has been selected.")
      }
  })


  $('#nextButton').click(function(){

      let vehicleSelected = $('.vehicle_id_cl').is(':checked');
      let timeSelected =  $('input:radio[name="delivery_time"]').is(':checked');



      if (!vehicleSelected) {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Vehicle is required.",
            })
        }
       else if ($('#title').val() == '') {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Title is required.",
            })
        }
        else if ($('#product_cost').val() == '') {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Product cost is required.",
            })
        }
        else if ($('#shop_address').val() == '') {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Shop address is required.",
            })
        }
        else if ($('#delivery_address').val() == '') {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Delivery address is required.",
            })

        }

        else if ($('#delivery_time').val() == '') {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Delivery Time is required.",
            })

        }
        else if ($('#shop_address').val() == '') {

            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Shop address is required.",
            })
            }
        else if(
            shop_address.address == '' ||
            shop_address.lng == '' ||
            shop_address.lat == ''
        ) {
                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: "Shop/Pickup address is invalid. Try again.",
                });
        }
        else if ($('#delivery_address').val() == '') {

            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Delivery address is required.",
            })
        }

        else if(
            delivery_address.address == '' ||
            delivery_address.lng == '' ||
            delivery_address.lat == ''
            ) {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Delivery address is invalid. Try again.",
            });

            return;
        }
        else {
            $('#nextButton').hide();
            $('#task-details').hide();
            $('#postButtonId').show();
            // $('#titleId').text('Review');
            $('#timeFrameDiv').hide();
            $('#taskDetails').show();
            // myMap()

            var deliverTime = $('input:radio[name="delivery_time"]:checked').val();
            $("input:radio[name=delivery_time_review][value='" + deliverTime + "']").prop('checked', true);
            $('#ItemCost').val($('#item_cost').val());
            $('#shopAddress').text($('#shop_address').val());
            $('#deliveryAddress').text($('#delivery_address').val());

            // Vehicle Icon Show
            let vehicleIcon = $('.vehicle_id_cl:checked').data('icon');
            // vehicle-icon-show
            $('#vehicle-icon-show').attr('src', vehicleIcon);

        }
    });


</script>

<script>
    // Submission Button
    $('#postSubmitButtonId').click(function() {
        event.preventDefault();

        // Form
        var form = document.getElementById('shop-n-drop-form');

        var p_names  = $("input[name='pro_name[]']")
            .map(function(){return $(this).val();}).get();

        var p_prices  = $("input[name='pro_price[]']")
            .map(function(){return $(this).val();}).get();

        var p_qtys  = $("input[name='qty[]']")
        .map(function(){return $(this).val();}).get();


        // "products"      : [
        //         {"name": "Pepsi 2L", "price": 150, "qty": 4},
        //         {"name": "Cake 2p", "price": 350, "qty": 2}
        // ]

        var products = p_names.map(function(name, index){
            let product = {name: name, price: p_prices[index], qty: p_qtys[index]};
            return product;
        });

        // hiddenProductsInput
        var hiddenProductsInput = document.createElement('input');
        hiddenProductsInput.setAttribute('type', 'hidden');
        hiddenProductsInput.setAttribute('name', 'products');
        hiddenProductsInput.setAttribute('value', JSON.stringify(products));
        form.appendChild(hiddenProductsInput);


        // hiddenShopAddressInput
        var hiddenShopAddressInput = document.createElement('input');
        hiddenShopAddressInput.setAttribute('type', 'hidden');
        hiddenShopAddressInput.setAttribute('name', 'shop_address');
        hiddenShopAddressInput.setAttribute('value', JSON.stringify(shop_address));
        form.appendChild(hiddenShopAddressInput);

        // hiddenDeliveryAddressInput
        var hiddenDeliveryAddressInput = document.createElement('input');
        hiddenDeliveryAddressInput.setAttribute('type', 'hidden');
        hiddenDeliveryAddressInput.setAttribute('name', 'delivery_address');
        hiddenDeliveryAddressInput.setAttribute('value', JSON.stringify(delivery_address));
        form.appendChild(hiddenDeliveryAddressInput);

        // Submit the form
        form.submit();

    });


</script>
@endsection
