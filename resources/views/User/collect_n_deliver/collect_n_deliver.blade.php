@extends('User.Asset')
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
        width:100%!important;
    }

    .hello-salman-modal {
    width: 50%;
    margin: auto;
    border: 1px solid green;
    border-radius: 9px;
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


@section('user_content')
<section class=""  style="position: relative;">
    @if (session()->has('success'))
    <div class="hello-salman-modal-block">
        <div class="hello-salman-modal">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1122 593">
                <defs>
                  <clipPath id="clip-path">
                    <rect id="Rectangle_2286" data-name="Rectangle 2286" width="388" height="328.887" fill="none"/>
                  </clipPath>
                  <clipPath id="clip-path-2">
                    <rect id="Rectangle_2265" data-name="Rectangle 2265" width="388.002" height="328.887" fill="none"/>
                  </clipPath>
                  <clipPath id="clip-path-3">
                    <rect id="Rectangle_2262" data-name="Rectangle 2262" width="388" height="307.821" fill="none"/>
                  </clipPath>
                  <clipPath id="clip-path-4">
                    <path id="Path_5608" data-name="Path 5608" d="M5.171,148.125C-14.8,71.934,20.508-42.158,156.194,15.881c66.862,28.6,21.97,70.8,39.544,73.861,20.229,3.52,29.894-46.635,61-54.466C304.925,23.149,398.536,114.053,387.03,188.85,374.127,272.736,228.91,337,123.005,294.173,34.784,258.5,8.974,162.636,5.171,148.125" transform="translate(0 0)" fill="none"/>
                  </clipPath>
                  <linearGradient id="linear-gradient" x1="0.153" y1="0.825" x2="0.153" y2="0.825" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#5bdb98"/>
                    <stop offset="1" stop-color="#60e99c"/>
                  </linearGradient>
                  <clipPath id="clip-path-5">
                    <rect id="Rectangle_2264" data-name="Rectangle 2264" width="81.11" height="214.327" fill="none"/>
                  </clipPath>
                  <clipPath id="clip-path-6">
                    <path id="Path_5635" data-name="Path 5635" d="M464.582,376.963c0,5.271-2.952,8.9-6.59,8.077q-33.969-7.541-67.933-15.075c-3.631-.819-6.586-5.056-6.586-9.453V194.947c0-4.4,2.954-8.615,6.586-9.408q3.892-.838,7.786-1.674c.2,4.247,3.023,7.113,6.5,6.439l39.362-7.758c3.474-.677,6.294-5.057,6.5-9.939q3.888-.834,7.782-1.671c3.638-.8,6.593,2.851,6.59,8.127Z" transform="translate(-383.472 -170.828)" fill="none"/>
                  </clipPath>
                  <linearGradient id="linear-gradient-2" x1="-1.787" y1="1.228" x2="-1.783" y2="1.228" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#fff"/>
                    <stop offset="0.269" stop-color="#bcbbbb"/>
                    <stop offset="0.625" stop-color="#6a6768"/>
                    <stop offset="0.877" stop-color="#363334"/>
                    <stop offset="1" stop-color="#231f20"/>
                  </linearGradient>
                  <clipPath id="clip-path-7">
                    <path id="Path_5643" data-name="Path 5643" d="M301.987,170.937l-1.487.32L132.627,207.336V339.468c0,4.4,2.954,8.634,6.586,9.453q32.879,7.294,65.755,14.591a.073.073,0,0,0,.014,0q33.968,7.536,67.933,15.075c.048.011.1.018.144.027l28.928,6.42c3.638.819,6.59-2.805,6.59-8.077v-197.9c0-4.79-2.433-8.236-5.6-8.236a4.616,4.616,0,0,0-.988.109" transform="translate(-132.627 -170.828)" fill="none"/>
                  </clipPath>
                  <clipPath id="clip-path-8">
                    <path id="Path_5644" data-name="Path 5644" d="M319.843,623.561c-4.134,8.2-2.127,14.036,2.515,15.66,10.595,3.7,10.9,2.991,23.843,7.088,1.637.518,3.7,1.2,6.037,1.973l22.314,4.952,2.605-7.294c-11.9-8.065-34.437-22.392-39.766-25.655-3.074-1.884-6.081-3.067-8.834-3.067-3.407,0-6.427,1.81-8.714,6.344" transform="translate(-317.598 -617.217)" fill="none"/>
                  </clipPath>
                  <linearGradient id="linear-gradient-3" x1="-1.886" y1="2.555" x2="-1.879" y2="2.555" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#0f1e2d"/>
                    <stop offset="1" stop-color="#082947"/>
                  </linearGradient>
                  <clipPath id="clip-path-10">
                    <path id="Path_5648" data-name="Path 5648" d="M346.6,511.555s-28.459,35.788-33.862,43.186c-.963,1.32-1.346,4.126-1.091,6.754.674,6.967,10.067,12.221,19.321,7.246,11.264-6.047,26.691-14.675,34.385-23.936s11.3-18.193,9.115-29.212c-1.265-6.389-7.861-9.971-14.671-9.972a16.678,16.678,0,0,0-13.2,5.934" transform="translate(-311.569 -505.621)" fill="none"/>
                  </clipPath>
                  <linearGradient id="linear-gradient-4" x1="-1.738" y1="1.984" x2="-1.733" y2="1.984" xlink:href="#linear-gradient-3"/>
                  <clipPath id="clip-path-12">
                    <path id="Path_5663" data-name="Path 5663" d="M167.557,413.591c-2.179,1.2.135,2.489-.08,5.625-.138,2.025,4.673,2.5,4.673,2.5a5.44,5.44,0,0,0-.783-4.053c-.591-1.079-2.589-4.127-3.6-4.127a.421.421,0,0,0-.207.051" transform="translate(-166.616 -413.54)" fill="none"/>
                  </clipPath>
                  <linearGradient id="linear-gradient-5" x1="-6.876" y1="21.309" x2="-6.834" y2="21.309" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#f4aa74"/>
                    <stop offset="0.419" stop-color="#f4b385"/>
                    <stop offset="1" stop-color="#f4be9a"/>
                  </linearGradient>
                  <clipPath id="clip-path-13">
                    <path id="Path_5664" data-name="Path 5664" d="M155.674,431.886c4.024,1.258,4.391.022,6.158-.915,0,0,.008,0,.013,0s1.541-3.69.835-5.289c-1.736-3.942-2.191-3.8-4.094-3.654a13.754,13.754,0,0,1-4.5-.345,2.386,2.386,0,0,0-.538-.065c-3.464,0-2.413,8.848,2.127,10.268" transform="translate(-151.492 -421.618)" fill="none"/>
                  </clipPath>
                  <linearGradient id="linear-gradient-6" x1="-4.386" y1="11.881" x2="-4.357" y2="11.881" xlink:href="#linear-gradient-5"/>
                  <clipPath id="clip-path-15">
                    <rect id="Rectangle_2270" data-name="Rectangle 2270" width="11.013" height="14.657" fill="none"/>
                  </clipPath>
                  <clipPath id="clip-path-16">
                    <rect id="Rectangle_2271" data-name="Rectangle 2271" width="38.366" height="13.295" fill="none"/>
                  </clipPath>
                  <clipPath id="clip-path-17">
                    <rect id="Rectangle_2273" data-name="Rectangle 2273" width="11.903" height="14.299" fill="none"/>
                  </clipPath>
                  <clipPath id="clip-path-18">
                    <path id="Path_5676" data-name="Path 5676" d="M162.468,421.9a7.709,7.709,0,0,0-.475-3.648c-.738-1.618-2.76-4.4-3.7-4.765a1.225,1.225,0,0,0-1.661.888,3.748,3.748,0,0,0,.237,1.723,1.953,1.953,0,0,1,.045.668,11.657,11.657,0,0,1-2.207-.1c-.949-.168-3.208-1.3-3.911,1.9a7.245,7.245,0,0,0,4.975,8.733c4.43,1.34,5.863-1.165,6.153-2.4a22.986,22.986,0,0,0,.545-3" transform="translate(-150.611 -413.384)" fill="none"/>
                  </clipPath>
                  <linearGradient id="linear-gradient-7" x1="-4.464" y1="11.134" x2="-4.434" y2="11.134" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#054592"/>
                    <stop offset="0.603" stop-color="#0d6aa8"/>
                    <stop offset="1" stop-color="#127fb5"/>
                  </linearGradient>
                  <clipPath id="clip-path-19">
                    <rect id="Rectangle_2281" data-name="Rectangle 2281" width="4.672" height="11.663" fill="none"/>
                  </clipPath>
                  <clipPath id="clip-path-20">
                    <path id="Path_5677" data-name="Path 5677" d="M328.481,469.764a1.147,1.147,0,0,0-.382.215l.382-.215m0,0c-.861.686-.757,3.168-.616,4.226.272,2.033,1.371,6.9,3.481,7.429,3.305-1.09-1.817-11.986-2.866-11.656" transform="translate(-327.77 -469.757)" fill="none"/>
                  </clipPath>
                  <linearGradient id="linear-gradient-8" x1="-11.408" y1="11.155" x2="-11.373" y2="11.155" xlink:href="#linear-gradient-7"/>
                  <clipPath id="clip-path-21">
                    <path id="Path_5681" data-name="Path 5681" d="M319.758,446.8c-10.9,2.2-33.236,17.629-38.487,17.994l1.555,4.752c2.617-2,28.538-9.241,35.673-11.846,3.244-1.185,7.975-3.3,7.718-5.767-.346-3.357-1.853-5.313-4.8-5.313a8.467,8.467,0,0,0-1.662.18" transform="translate(-281.271 -446.622)" fill="none"/>
                  </clipPath>
                  <linearGradient id="linear-gradient-9" x1="-2.049" y1="4.304" x2="-2.041" y2="4.304" xlink:href="#linear-gradient-5"/>
                  <clipPath id="clip-path-22">
                    <path id="Path_5682" data-name="Path 5682" d="M264.321,494.817c-1.219.51-4.864,2.392-4.454,3.36.6,1.426,1.417,1.127,2.693.828a6.869,6.869,0,0,1,2.892-.158c2,.351,2.982-4.382,2.982-4.382A3.755,3.755,0,0,0,267,494.23a6.918,6.918,0,0,0-2.68.586" transform="translate(-259.835 -494.23)" fill="none"/>
                  </clipPath>
                  <linearGradient id="linear-gradient-10" x1="-13.94" y1="14.6" x2="-13.887" y2="14.6" xlink:href="#linear-gradient-5"/>
                  <clipPath id="clip-path-23">
                    <path id="Path_5683" data-name="Path 5683" d="M269.706,494.564c-6.226,1.993-.231,2.253-5.618,7.273-3.075,2.865,9.071,4.926,11.053.347,1.675-3.869.484-4.365-.264-6.22,0,0,0-.008,0-.014a12.489,12.489,0,0,0-4.492-1.48,2.244,2.244,0,0,0-.681.093" transform="translate(-263.592 -494.471)" fill="none"/>
                  </clipPath>
                  <linearGradient id="linear-gradient-11" x1="-6.383" y1="8.055" x2="-6.358" y2="8.055" xlink:href="#linear-gradient-5"/>
                  <clipPath id="clip-path-25">
                    <rect id="Rectangle_2285" data-name="Rectangle 2285" width="29.602" height="20.06" fill="none"/>
                  </clipPath>
                  <clipPath id="clip-path-26">
                    <rect id="Rectangle_2260" data-name="Rectangle 2260" width="78.146" height="87.191" fill="#ffb44a"/>
                  </clipPath>
                  <clipPath id="clip-path-27">
                    <rect id="Rectangle_2485" data-name="Rectangle 2485" width="124.932" height="98.523" fill="none"/>
                  </clipPath>
                </defs>
                <rect id="Rectangle_4230" data-name="Rectangle 4230" width="1122" height="593" rx="10" fill="#fff"/>
                <g id="Group_2731" data-name="Group 2731" transform="translate(43 130.592)">
                  <g id="Group_1185" data-name="Group 1185" clip-path="url(#clip-path)">
                    <g id="Group_1141" data-name="Group 1141">
                      <g id="Group_1140" data-name="Group 1140" clip-path="url(#clip-path-2)">
                        <g id="Group_1134" data-name="Group 1134" opacity="0.12">
                          <g id="Group_1133" data-name="Group 1133">
                            <g id="Group_1132" data-name="Group 1132" clip-path="url(#clip-path-3)">
                              <g id="Group_1131" data-name="Group 1131" transform="translate(0 0)">
                                <g id="Group_1130" data-name="Group 1130" clip-path="url(#clip-path-4)">
                                  <rect id="Rectangle_2261" data-name="Rectangle 2261" width="552.401" height="558.724" transform="translate(-197.89 196.598) rotate(-52.517)" fill="url(#linear-gradient)"/>
                                </g>
                              </g>
                            </g>
                          </g>
                        </g>
                        <path id="Path_5609" data-name="Path 5609" d="M680.737,376.5a47.637,47.637,0,0,1,13.494,14.849c5.08,8.455,6.039,19.465-3.1,19.83-9.091.735-9.232-6.678-9.738-15.623-.089-8.732-.541-18.993-.652-19.056" transform="translate(-423.358 -234.145)" fill="#60e99c"/>
                        <path id="Path_5610" data-name="Path 5610" d="M676.828,359.534c.244-.07,8.777,11.043,16.382,15.854,8.372,5.388,12.13-3.96,3.951-9.623-8.684-5.413-14.945-2.65-20.332-6.231" transform="translate(-420.929 -223.599)" fill="#60e99c"/>
                        <path id="Path_5611" data-name="Path 5611" d="M658.3,348.288l0,0a.345.345,0,0,0,.518.457h0l0,0a1.394,1.394,0,0,1,1.009-.582c.71-.013,1.754.71,3.186,2.212,6.478,6.684,16.44,11.194,19.714,12.676.452.2.846.383.948.441a.345.345,0,0,0,.529-.428c-.078-.138-.121-.157-1.193-.642-3.244-1.468-13.117-5.937-19.5-12.526-1.615-1.694-2.756-2.442-3.7-2.424a2.089,2.089,0,0,0-1.511.814" transform="translate(-409.349 -216.098)" fill="#082947"/>
                        <path id="Path_5612" data-name="Path 5612" d="M631.117,316.358c.326-.229,14.851,10.151,25.635,13.766,12,4.12,13.365-9.267,1.239-13.613-12.593-3.713-19.009,2.159-26.875-.153" transform="translate(-392.5 -196.055)" fill="#60e99c"/>
                        <path id="Path_5613" data-name="Path 5613" d="M636.759,347.842a39.637,39.637,0,0,1,7.279,7.869c3.405,4.793,6.156,11.5,4.909,16.774-1.314,5.635-6.073,7.135-9.913,6.849-3.921-.408-6.926-2.6-6.606-7.2.4-9.956,7.852-16.951,4.331-24.294" transform="translate(-393.301 -216.328)" fill="#60e99c"/>
                        <path id="Path_5614" data-name="Path 5614" d="M632.343,329.039l-.009.011c-.963,1.18-.94,2.154,1.74,4.81,4.06,3.97,5.908,11.148,6.285,16.542a37.819,37.819,0,0,1-.469,9.789c-.089.509-.1.574.015.709a.349.349,0,0,0,.267.123.344.344,0,0,0,.343-.348c0-.009,0-.017,0-.026.008-.061.031-.2.057-.34a38.426,38.426,0,0,0,.476-9.96c-.385-5.517-2.291-12.877-6.488-16.98-2.687-2.663-2.247-3.2-1.691-3.883a.345.345,0,0,0-.525-.447" transform="translate(-392.897 -204.561)" fill="#082947"/>
                        <path id="Path_5615" data-name="Path 5615" d="M617.887,311.037l-.728.426c.394.169.831.385,1.317.652,10.02,5.317,22.867,8.469,27.7,9.656.916.224,1.711.42,1.879.485a.345.345,0,0,0,.451-.514c-.111-.13-.121-.141-2.166-.642-4.812-1.181-17.6-4.319-27.54-9.593-.324-.178-.628-.334-.916-.471" transform="translate(-383.819 -193.438)" fill="#082947"/>
                        <path id="Path_5616" data-name="Path 5616" d="M610.368,315.47c19.282,9.917,34.028,28.745,34.838,45.621a.345.345,0,1,0,.689-.034c-.815-16.992-15.533-35.922-34.824-46Z" transform="translate(-379.596 -195.939)" fill="#082947"/>
                        <path id="Path_5617" data-name="Path 5617" d="M683.964,64.7a47.608,47.608,0,0,0,1.825-19.981c-1.04-9.809-6.907-19.174-14.424-13.956-7.7,4.889-3.346,10.892,1.639,18.335,5.19,7.023,11.01,15.485,10.96,15.6" transform="translate(-414.927 -18.204)" fill="#60e99c"/>
                        <path id="Path_5618" data-name="Path 5618" d="M718.678,93.75c.236-.091.353-14.1,3.525-22.522,3.436-9.344,12.067-4.148,8.951,5.3-3.671,9.553-10.333,11.12-12.475,17.223" transform="translate(-446.956 -41.237)" fill="#60e99c"/>
                        <path id="Path_5619" data-name="Path 5619" d="M709.514,112.312h0a.345.345,0,0,1,.137-.677h0a1.392,1.392,0,0,0,1.156-.143c.576-.417.972-1.623,1.21-3.685,1.144-9.238,6.377-18.839,8.1-21.994.238-.436.445-.816.491-.924a.345.345,0,0,1,.68.023c.021.157,0,.2-.565,1.231-1.7,3.127-6.892,12.641-8.019,21.745-.269,2.326-.729,3.61-1.489,4.162a2.1,2.1,0,0,1-1.7.261" transform="translate(-441.081 -52.622)" fill="#082947"/>
                        <path id="Path_5620" data-name="Path 5620" d="M622.763,282.8c.233.026,8.879-8.868,17.173-11.894,9.135-3.538,11.4,6.23,2.342,10.224-9.513,3.542-11.952-1.838-19.516,1.67" transform="translate(-387.305 -168.01)" fill="#60e99c"/>
                        <path id="Path_5621" data-name="Path 5621" d="M707.107,148.571c.4-.012,5.738-17.049,12.167-26.431,7.1-10.518,16.251-.656,9.191,10.118-7.813,10.55-16.473,9.729-21.357,16.313" transform="translate(-439.759 -73.168)" fill="#60e99c"/>
                        <path id="Path_5622" data-name="Path 5622" d="M691.336,169.828a3.923,3.923,0,0,1-.98-.363.345.345,0,1,1,.31-.616,1.925,1.925,0,0,0,1.546.265c.694-.246,1.385-1.183,2.177-2.947,4.794-10.28,13.149-20.536,16.294-24.4.6-.731,1.113-1.366,1.206-1.52a.345.345,0,0,1,.67.138c-.011.171-.012.185-1.342,1.817-3.13,3.843-11.445,14.05-16.2,24.249-.884,1.97-1.679,2.993-2.573,3.311a2.048,2.048,0,0,1-1.107.062" transform="translate(-429.223 -87.081)" fill="#082947"/>
                        <path id="Path_5623" data-name="Path 5623" d="M667.711,221.874c.408.008,9.975-14.571,20.193-22.146,5.574-4.048,9.654-2.045,10.74,2.673,1.137,4.587-.72,11.888-5.881,15.386-10.9,7.223-18.468-.782-25.051,4.087" transform="translate(-415.258 -122.859)" fill="#60e99c"/>
                        <path id="Path_5624" data-name="Path 5624" d="M648.835,242.56a1.728,1.728,0,0,1-.865-.484.345.345,0,0,1,.481-.5.948.948,0,0,0,.728.319c.694-.026,1.716-.8,3.038-2.295,4.774-5.419,11.241-9.389,16.929-12.684,3.192-1.806,5.788-3.2,7.053-3.872,3.1-1.647,3.113-1.638,3.327-1.5a.345.345,0,0,1-.116.631c-.479.2-4.781,2.434-9.921,5.343-5.637,3.266-12.048,7.2-16.754,12.542-1.494,1.69-2.615,2.493-3.528,2.528a1.557,1.557,0,0,1-.37-.029" transform="translate(-402.916 -137.748)" fill="#082947"/>
                        <path id="Path_5625" data-name="Path 5625" d="M667.219,120.01a39.656,39.656,0,0,0,1.069-10.667c-.17-5.877-2.013-12.884-6.189-16.344-4.444-3.706-9.146-2.037-12.039.5-2.883,2.689-3.959,6.25-.934,9.726,6.32,7.7,16.48,8.8,18.093,16.78" transform="translate(-402.574 -56.495)" fill="#60e99c"/>
                        <path id="Path_5626" data-name="Path 5626" d="M681.054,139.377l-.013,0c-1.479-.361-2.048-1.154-1.509-4.888.848-5.613-2-12.456-4.951-16.989a37.837,37.837,0,0,0-6.271-7.531c-.378-.353-.426-.4-.416-.575a.35.35,0,0,1,.14-.259.346.346,0,0,1,.483.071.214.214,0,0,1,.014.022c.044.044.145.138.251.237a38.487,38.487,0,0,1,6.381,7.663c3.016,4.634,5.929,11.658,5.051,17.461-.539,3.743.136,3.909.991,4.118a.345.345,0,0,1-.151.673" transform="translate(-415.372 -67.828)" fill="#082947"/>
                        <path id="Path_5627" data-name="Path 5627" d="M646.132,175.149a42.762,42.762,0,0,0,4.862-11.6c1.753-6.661,1.815-15.182-2.029-20.392-4.075-5.583-9.858-5.338-13.834-3.632-4.024,1.893-6.242,5.247-4.332,10.2,4,11.842,14.249,16.336,15.334,25.426" transform="translate(-391.87 -86.104)" fill="#60e99c"/>
                        <path id="Path_5628" data-name="Path 5628" d="M661.708,199.8a.344.344,0,0,1-.14-.064l-.026-.02c-1.052-.8-1.527-1.515.745-4.717,2.874-3.955,2.5-12.009.929-17.82a40.642,40.642,0,0,0-4.233-10.406c-.281-.495-.317-.558-.232-.734a.346.346,0,0,1,.647.061c.031.059.106.193.185.333a41.25,41.25,0,0,1,4.3,10.575c1.605,5.956,1.967,14.259-1.036,18.393-2.049,2.887-1.587,3.236-.889,3.766l.026.02a.345.345,0,0,1-.277.613" transform="translate(-409.661 -103.141)" fill="#082947"/>
                        <path id="Path_5629" data-name="Path 5629" d="M610.685,226.19a41.649,41.649,0,0,0,6.878-10.832c2.8-6.3,3.976-14.483.721-19.853-3.47-5.7-9.12-6.111-13.183-4.862-4.138,1.43-6.691,4.513-5.715,9.971,1.7,12.9,11.125,16.74,11.3,25.576" transform="translate(-372.636 -118.202)" fill="#60e99c"/>
                        <path id="Path_5630" data-name="Path 5630" d="M614.329,248.181a.346.346,0,0,1-.213-.139,1.328,1.328,0,0,1-.247-1.08c.18-.825,1.163-1.717,3.187-2.89,4.244-2.428,5.181-10.382,4.255-16.746a40.58,40.58,0,0,0-3.353-11.587c-.246-.555-.273-.612-.171-.781a.348.348,0,0,1,.274-.167.344.344,0,0,1,.363.292c.026.066.093.217.164.375A41.228,41.228,0,0,1,622,227.236c.956,6.579-.073,14.847-4.6,17.434-1.766,1.023-2.728,1.845-2.858,2.44a.635.635,0,0,0,.136.534.345.345,0,0,1-.35.537" transform="translate(-381.755 -133.581)" fill="#082947"/>
                        <path id="Path_5631" data-name="Path 5631" d="M642.768,60.466a.345.345,0,0,0-.57.389c10.728,15.725,8.828,44.091-4.331,64.587-5.956,10.175-14.812,19.209-26.324,26.855l.953.192c11.321-7.622,20.056-16.6,25.96-26.686,13.29-20.7,15.184-49.4,4.312-65.338" transform="translate(-380.326 -37.512)" fill="#082947"/>
                        <path id="Path_5632" data-name="Path 5632" d="M639.1,284.5h0c-.075-.016-8.764.169-20.205,7.783l.957.194c10.754-6.976,18.906-7.3,19.127-7.3a.345.345,0,0,0,.122-.679" transform="translate(-384.9 -176.933)" fill="#082947"/>
                        <path id="Path_5633" data-name="Path 5633" d="M457.678,139.48q-33.969,8.3-67.936,16.6c-6.571,1.647-11.943,9.4-11.943,17.225V346.627c0,7.819,5.373,15.579,11.943,17.229q33.97,8.295,67.936,16.6c6.572,1.646,11.946-4.918,11.946-14.568V154.048c0-9.659-5.374-16.22-11.946-14.568" transform="translate(-234.958 -86.586)" fill="#1b3149"/>
                        <path id="Path_5634" data-name="Path 5634" d="M464.582,376.963c0,5.271-2.952,8.9-6.59,8.076q-33.97-7.541-67.933-15.075c-3.632-.819-6.586-5.056-6.586-9.453V194.947c0-4.4,2.954-8.615,6.586-9.408q3.891-.838,7.786-1.674c.2,4.247,3.023,7.114,6.5,6.439q19.68-3.877,39.362-7.758c3.474-.678,6.294-5.057,6.5-9.939q3.888-.834,7.782-1.671c3.638-.8,6.592,2.85,6.59,8.127Z" transform="translate(-238.486 -106.241)" fill="#f0fbff"/>
                        <g id="Group_1139" data-name="Group 1139" transform="translate(144.986 64.588)" style="mix-blend-mode: color-burn;isolation: isolate">
                          <g id="Group_1138" data-name="Group 1138">
                            <g id="Group_1137" data-name="Group 1137" clip-path="url(#clip-path-5)">
                              <g id="Group_1136" data-name="Group 1136" transform="translate(0 0)">
                                <g id="Group_1135" data-name="Group 1135" clip-path="url(#clip-path-6)">
                                  <rect id="Rectangle_2263" data-name="Rectangle 2263" width="81.112" height="215.717" transform="translate(0 -0.686)" fill="url(#linear-gradient-2)"/>
                                </g>
                              </g>
                            </g>
                          </g>
                        </g>
                        <path id="Path_5636" data-name="Path 5636" d="M434.484,199.332a1.949,1.949,0,0,1-.395-3.856l24.87-5.175a1.947,1.947,0,1,1,.793,3.813l-24.869,5.176a1.945,1.945,0,0,1-.4.042" transform="translate(-269.002 -118.325)" fill="#f0fbff"/>
                        <path id="Path_5637" data-name="Path 5637" d="M513.907,188.123a1.947,1.947,0,0,1-.4-3.854l8.695-1.813a1.946,1.946,0,1,1,.793,3.811l-8.693,1.814a1.942,1.942,0,0,1-.4.042" transform="translate(-318.395 -113.445)" fill="#f0fbff"/>
                        <path id="Path_5638" data-name="Path 5638" d="M590.895,139.34c4.645.854,8.07,6.721,8.07,14.711V365.89c0,7.987-3.427,13.855-8.076,14.708,6.255,1.039,11.258-5.4,11.258-14.708V154.051c0-9.316-5-15.749-11.253-14.711" transform="translate(-367.482 -86.589)" fill="#1b4360"/>
                        <path id="Path_5639" data-name="Path 5639" d="M581.922,170.863c2.859.323,5,3.657,5,8.207v197.9c0,4.531-2.123,7.841-4.968,8.164,3.386.363,6.051-3.157,6.051-8.164V179.07c0-5.027-2.678-8.57-6.079-8.207" transform="translate(-361.905 -106.246)" fill="#fff"/>
                        <path id="Path_5640" data-name="Path 5640" d="M384.556,381.956V216.392c0-4.4,2.875-8.615,6.41-9.408q3.442-.762,6.888-1.522c0-.05-.008-.1-.01-.152q-3.9.835-7.786,1.674c-3.631.793-6.586,5.012-6.586,9.408V381.956c0,4.4,2.954,8.634,6.586,9.453l33.961,7.537-33.053-7.537c-3.535-.819-6.41-5.056-6.41-9.453" transform="translate(-238.486 -127.685)" fill="#ffb44a"/>
                      </g>
                    </g>
                    <g id="Group_1143" data-name="Group 1143" transform="translate(50.144 64.588)">
                      <g id="Group_1142" data-name="Group 1142" clip-path="url(#clip-path-7)">
                        <path id="Path_5641" data-name="Path 5641" d="M515.461,738.871c1.115-4.289,3.675-13.542,3.892-14.557.242-1.123.555-2.934,3.784-1.339s4.271,2.038,4.271,2.038S519.8,738.79,518.8,740.169s-4.13,1.76-3.336-1.3" transform="translate(-370.637 -513.825)" fill="#0f1b29"/>
                        <path id="Path_5642" data-name="Path 5642" d="M488.623,709.384a2.882,2.882,0,0,0,1.522-1.615c.473-1.65-.364-2.23-.364-2.23s-8.773-3.736-13.977-7.808c-1.175-.921-3.9-2.79-7.169-5.08l-2.9,9.349c12.05,3.88,22.891,7.384,22.891,7.384" transform="translate(-339.79 -495.357)" fill="#f4be9a"/>
                      </g>
                    </g>
                    <g id="Group_1145" data-name="Group 1145" transform="translate(120.08 233.361)">
                      <g id="Group_1144" data-name="Group 1144" clip-path="url(#clip-path-8)">
                        <rect id="Rectangle_2266" data-name="Rectangle 2266" width="62.425" height="37.709" transform="translate(-2.889 0.027) rotate(-1.591)" fill="url(#linear-gradient-3)"/>
                      </g>
                    </g>
                    <g id="Group_1147" data-name="Group 1147" transform="translate(50.144 64.588)">
                      <g id="Group_1146" data-name="Group 1146" clip-path="url(#clip-path-7)">
                        <path id="Path_5645" data-name="Path 5645" d="M303.695,419.223s-10.265,4.34-13.535,5.071c-2.345.524-3.524-2.8-3.128-4.815.594-3.02,5.068-7.473,10.843-10.389,4.421-2.231,6.363,9.332,5.82,10.133" transform="translate(-228.607 -318.829)" fill="#f4be9a"/>
                        <path id="Path_5646" data-name="Path 5646" d="M339.392,380.4c-7.452,5.5-26.981,13.973-26.981,13.973s-2.79-1.272-5.926-6.4c-4.7-7.7-4.112-11.563-4.112-11.563s16.44-13.027,28.316-20.7c9.4-6.071,13.233-.638,13.72,7.608.422,7.139-.852,14.007-5.017,17.076" transform="translate(-238.179 -284.201)" fill="#60e99c"/>
                      </g>
                    </g>
                    <g id="Group_1149" data-name="Group 1149" transform="translate(117.8 191.169)">
                      <g id="Group_1148" data-name="Group 1148" clip-path="url(#clip-path-10)">
                        <rect id="Rectangle_2267" data-name="Rectangle 2267" width="67.124" height="69.88" transform="translate(-2.068 0.052) rotate(-1.591)" fill="url(#linear-gradient-4)"/>
                      </g>
                    </g>
                    <g id="Group_1151" data-name="Group 1151" transform="translate(50.144 64.588)">
                      <g id="Group_1150" data-name="Group 1150" clip-path="url(#clip-path-7)">
                        <path id="Path_5649" data-name="Path 5649" d="M595.2,811.094a2.883,2.883,0,0,0,2.183-.4c1.357-1.048,1.027-2.013,1.027-2.013s-4.856-8.205-6.637-14.568c-.4-1.438-1.492-4.562-2.767-8.34l-7.876,5.813c7.41,10.263,14.07,19.507,14.07,19.507" transform="translate(-411.558 -553.271)" fill="#f4be9a"/>
                        <path id="Path_5650" data-name="Path 5650" d="M502.03,647.115c-8.189,4.16-10.027,10.05-7.247,14.107,6.342,9.259,7.012,8.866,15.011,19.834,3.661,5.017,10.555,14.986,16.823,23.666l8.338-5.629c-4.811-13.547-14.486-38.44-16.846-44.224-3.045-7.469-7.892-11.91-16.08-7.754" transform="translate(-357.104 -466.045)" fill="#082947"/>
                        <path id="Path_5651" data-name="Path 5651" d="M428.648,505.954s20.451,46.278,24.251,54.4,20.494,3.483,20.62-9.04,5.589-45.055-11.886-61.425c-10.557-9.89-37.654,4.936-32.985,16.061" transform="translate(-316.394 -367.24)" fill="#082947"/>
                        <path id="Path_5652" data-name="Path 5652" d="M397.15,336.489c14.251-2.059,18.867,7.056,22.208,17.265,8.657,26.453,15.783,55.539,15.783,55.539s-8.386,7.579-32.387,13.208c-23.728,5.563-30.119-5.191-30.119-5.191s-3.405-35.206-.939-64.856c.6-7.188,4.846-10.515,16.1-14a56.42,56.42,0,0,1,9.354-1.96" transform="translate(-280.75 -273.673)" fill="#56cd93"/>
                        <path id="Path_5653" data-name="Path 5653" d="M399.165,337.458c-.1,4.314-1.52,14.033,8.366,11.9,11.616-2.507,12.145-15.03,11.268-16.292-2-2.875-6.375-.411-9.3.262s-10.25.477-10.335,4.134" transform="translate(-298.312 -270.877)" fill="#082947"/>
                        <path id="Path_5654" data-name="Path 5654" d="M419.931,336c-.574.047-1.154.105-1.754.183a56.422,56.422,0,0,0-9.312,2.141,20.016,20.016,0,0,0-2.932,1.113c.081,2.779-1.38,10.749,6.1,9.351,7.68-1.437,8.5-10.208,7.9-12.788" transform="translate(-302.559 -273.549)" fill="#f4be9a"/>
                        <path id="Path_5655" data-name="Path 5655" d="M367.63,274.044c-5.465-2.4-8.542-13.846-2.81-19.115,8.884-8.168,7.091,2.818,11.6,1.507,9.8-2.855,14.286,2.686,15.294,10.743.625,4.987-2.564,8.746-6.647,11.216-1.807,1.093-2.827-4.154-8.514-5.193s-8.919.843-8.919.843" transform="translate(-275.121 -221.236)" fill="#082947"/>
                        <path id="Path_5656" data-name="Path 5656" d="M395.142,306.481c-4.161-7.476-5.851-8.22-9.912-13.643-.064-.225-8.849,3.895-12.528-.118a50.14,50.14,0,0,0,3.279,11.069c2.115,4.539,4.243,6.731,8.278,3.169.638,2.327,2.132,4.767,2.666,6.815,1.081,4.128,4.191,4.245,6.055,3.457s6.012-3.83,2.161-10.749" transform="translate(-281.934 -246.634)" fill="#f4be9a"/>
                        <path id="Path_5657" data-name="Path 5657" d="M387.1,302.919a13.312,13.312,0,0,0,2.07,3.593c1.242,1.573,1.694,2.061,1.694,2.061s-1.923,4.58-4.851,6.134-5.356.385-6.522-1.55a17.068,17.068,0,0,1-2.57-6.256s3.473.632,10.18-3.982" transform="translate(-284.555 -252.977)" fill="#62caef"/>
                        <path id="Path_5658" data-name="Path 5658" d="M387.461,309.122a.109.109,0,0,0-.138-.169,17.907,17.907,0,0,1-8.863,3.828c.021.071.043.143.067.21a18.611,18.611,0,0,0,4.431-1.2,17.562,17.562,0,0,0,4.5-2.673m.864,1.2a.11.11,0,0,0-.006-.154.108.108,0,0,0-.155,0,19.393,19.393,0,0,1-8.726,4.982c.034.067.069.131.106.2a23.088,23.088,0,0,0,2.447-.843,18.048,18.048,0,0,0,6.333-4.186m.832,1.038a.111.111,0,0,0-.152.033c-2.066,3.193-6.167,5.362-8.031,6.225.051.059.1.113.157.169,1.915-.893,5.986-3.075,8.057-6.275a.11.11,0,0,0-.032-.152m.828,1.194a.11.11,0,0,0-.139.068c-.907,2.59-3.742,5.05-5.748,6.535.117.005.235.01.355.006,2.011-1.516,4.71-3.924,5.6-6.469a.109.109,0,0,0-.067-.14" transform="translate(-285.514 -256.714)" fill="#f5f5f5"/>
                        <path id="Path_5659" data-name="Path 5659" d="M405.882,304.363l-.457-.709c2.06-1.329,3.335-2.922,3.5-4.373a3.213,3.213,0,0,0-1.064-2.65,2.418,2.418,0,0,0-1.883-.918c-1.217.106-2.245,1.6-3,2.69-.22.321-.41.6-.586.81l-.652-.535c.153-.186.333-.449.543-.753.845-1.23,2-2.913,3.617-3.053a3.212,3.212,0,0,1,2.559,1.167,4.02,4.02,0,0,1,1.3,3.335c-.191,1.7-1.6,3.522-3.878,4.989" transform="translate(-299.993 -247.967)" fill="#62caef"/>
                        <path id="Path_5660" data-name="Path 5660" d="M413.244,293.92c1.182.716,1.281,2.712.222,4.462s-2.424,2.322-3.262,1.227c-1.148-1.5-1.757-2.653-1.016-3.819,1.1-1.725,2.876-2.584,4.056-1.87" transform="translate(-304.422 -247.224)" fill="#f4be9a"/>
                        <path id="Path_5661" data-name="Path 5661" d="M220.172,425.343c4.071.695,5.218,3.292,4.181,7.112-.65,2.4-5.822,2.669-9.276,2.606-7.595-.135-34.386-2.7-37.547-1.774l.257-4.993c5.031,1.547,31.423-4.82,42.384-2.951" transform="translate(-160.553 -328.898)" fill="#f4be9a"/>
                      </g>
                    </g>
                    <g id="Group_1153" data-name="Group 1153" transform="translate(62.995 156.354)">
                      <g id="Group_1152" data-name="Group 1152" clip-path="url(#clip-path-12)">
                        <rect id="Rectangle_2268" data-name="Rectangle 2268" width="8.869" height="8.095" transform="translate(-2.048 8.099) rotate(-84.282)" fill="url(#linear-gradient-5)"/>
                      </g>
                    </g>
                    <g id="Group_1155" data-name="Group 1155" transform="translate(57.277 159.408)">
                      <g id="Group_1154" data-name="Group 1154" clip-path="url(#clip-path-13)">
                        <rect id="Rectangle_2269" data-name="Rectangle 2269" width="12.794" height="14.385" transform="translate(-2.551 11.412) rotate(-84.282)" fill="url(#linear-gradient-6)"/>
                      </g>
                    </g>
                    <g id="Group_1173" data-name="Group 1173" transform="translate(50.144 64.588)">
                      <g id="Group_1172" data-name="Group 1172" clip-path="url(#clip-path-7)">
                        <path id="Path_5665" data-name="Path 5665" d="M419.645,354.939c-6.057-20.63-17.149-19.875-17.923-19.875s2.11,16.314-14.275,19.62c-14.076,2.84-8.755-14.557-8.755-14.557a19.025,19.025,0,0,0-7.471,5.784c-3.252,4.4-3.323,20.375-3.183,34.219s1.02,32.991,1.02,32.991,2.894,4.974,22.889,4.923c22.457-.058,42.615-13.923,42.615-13.923s-8.86-28.551-14.917-49.181m-10.117,13.739c-4.008-5.555-6.47-8.509-6.751-14.134-.145-2.9-.661-9.311,3.885-10.952,5.7-2.057,10.051,4.674,12.5,15.928,2.743,12.605-5.626,14.715-9.634,9.159" transform="translate(-279.008 -272.967)" fill="#56cd93"/>
                        <path id="Path_5666" data-name="Path 5666" d="M399.337,354.4a7.46,7.46,0,0,1-5.9-2.326c-3.844-4.369-1.121-13.209-1-13.583a.844.844,0,0,1,1.61.506c-.026.083-2.555,8.31.663,11.964,1.407,1.6,3.808,2.106,7.139,1.509,12.785-2.291,13.222-13.263,13.385-17.393.054-1.349.089-2.24,1.039-2.24a.844.844,0,0,1,.7,1.312c-.023.214-.04.625-.055.995-.162,4.07-.654,16.457-14.774,18.988a15.908,15.908,0,0,1-2.8.269" transform="translate(-293.554 -271.584)" fill="#014f6d"/>
                        <g id="Group_1158" data-name="Group 1158" transform="translate(110.413 93.694)" style="mix-blend-mode: color-burn;isolation: isolate">
                          <g id="Group_1157" data-name="Group 1157">
                            <g id="Group_1156" data-name="Group 1156" clip-path="url(#clip-path-15)">
                              <path id="Path_5667" data-name="Path 5667" d="M425.443,418.982a.814.814,0,0,0-.784.873l.613,8.767a2.044,2.044,0,0,0,.745,1.333l4.408,3.164a1.042,1.042,0,0,0,1.287-.1l3.385-3.331a2.2,2.2,0,0,0,.572-1.436l-.305-8.8a.843.843,0,0,0-.872-.812Z" transform="translate(-424.657 -418.638)" fill="#7c7c7c"/>
                            </g>
                          </g>
                        </g>
                        <path id="Path_5668" data-name="Path 5668" d="M435.363,419.451a.843.843,0,0,0-.872-.812l-9.048.343a.814.814,0,0,0-.784.873l.116,1.661c3.362-.086,6.942-.211,10.647-.386Z" transform="translate(-314.244 -324.945)" fill="#014f6d"/>
                        <path id="Path_5669" data-name="Path 5669" d="M396.593,269.768s-1.7,9.969,5.249,11.516c8.083,1.8,10.354-6.8,10.354-6.8Zm5.888,10.716a1.55,1.55,0,1,1,1.707-1.378,1.551,1.551,0,0,1-1.707,1.378" transform="translate(-296.676 -232.36)" fill="#f23c06"/>
                        <path id="Path_5670" data-name="Path 5670" d="M396.593,269.768s-1.7,9.969,5.249,11.516c8.083,1.8,10.354-6.8,10.354-6.8Zm5.888,10.716a1.55,1.55,0,1,1,1.707-1.378,1.551,1.551,0,0,1-1.707,1.378" transform="translate(-296.676 -232.36)" fill="#ffb44a"/>
                        <path id="Path_5671" data-name="Path 5671" d="M394.851,254.083c.01-.035.022-.068.032-.1a14.479,14.479,0,1,0-27.805-8.091c-.01.035-.018.07-.027.1Z" transform="translate(-278.418 -211.018)" fill="#f23c06"/>
                        <path id="Path_5672" data-name="Path 5672" d="M375.089,246.885l1.666.485c1.938-6.142,6.843-10.391,12.128-11.019a11.441,11.441,0,0,1,1.912-.063q-.381-.134-.771-.249a14.475,14.475,0,0,0-4.713-.561,17.852,17.852,0,0,0-10.223,11.408" transform="translate(-283.417 -211.025)" fill="#ffb44a"/>
                        <path id="Path_5673" data-name="Path 5673" d="M418.1,238.873c.979,1.655,2.945,6.533-.811,15.107l1.942.824c2.957-6.763,2.645-11.544,1.769-14.471a14.243,14.243,0,0,0-2.232-1.2q-.333-.141-.668-.264" transform="translate(-309.66 -213.146)" fill="#ffb44a"/>
                        <path id="Path_5674" data-name="Path 5674" d="M383.474,268.183a1.516,1.516,0,0,1-.6-.05l-35.34-10.268a1.513,1.513,0,0,1,.845-2.906l35.339,10.269a1.513,1.513,0,0,1-.245,2.956" transform="translate(-265.603 -223.113)" fill="#dd2a00"/>
                        <g id="Group_1161" data-name="Group 1161" transform="translate(80.841 31.786)" style="mix-blend-mode: color-burn;isolation: isolate">
                          <g id="Group_1160" data-name="Group 1160" transform="translate(0)">
                            <g id="Group_1159" data-name="Group 1159" clip-path="url(#clip-path-16)">
                              <path id="Path_5675" data-name="Path 5675" d="M383.474,268.183a1.516,1.516,0,0,1-.6-.05l-35.34-10.268a1.513,1.513,0,0,1,.845-2.906l35.339,10.269a1.513,1.513,0,0,1-.245,2.956" transform="translate(-346.444 -254.899)" fill="#ffb44a"/>
                            </g>
                          </g>
                        </g>
                        <g id="Group_1166" data-name="Group 1166" transform="translate(6.8 91.707)" opacity="0.5">
                          <g id="Group_1165" data-name="Group 1165">
                            <g id="Group_1164" data-name="Group 1164" clip-path="url(#clip-path-17)">
                              <g id="Group_1163" data-name="Group 1163" transform="translate(0 0)">
                                <g id="Group_1162" data-name="Group 1162" clip-path="url(#clip-path-18)">
                                  <rect id="Rectangle_2272" data-name="Rectangle 2272" width="12.64" height="15.524" transform="translate(-0.52 -0.268)" fill="url(#linear-gradient-7)"/>
                                </g>
                              </g>
                            </g>
                          </g>
                        </g>
                        <rect id="Rectangle_2274" data-name="Rectangle 2274" width="35.057" height="31.859" transform="translate(4.921 98.21)" fill="#ffb44a"/>
                        <rect id="Rectangle_2275" data-name="Rectangle 2275" width="63.607" height="13.768" transform="translate(4.922 103.487)" fill="#ffb44a"/>
                        <rect id="Rectangle_2276" data-name="Rectangle 2276" width="36.886" height="7.032" transform="translate(3.092 96.456)" fill="#f2a040"/>
                        <rect id="Rectangle_2277" data-name="Rectangle 2277" width="28.55" height="31.859" transform="translate(39.978 98.21)" fill="#62caef"/>
                        <rect id="Rectangle_2278" data-name="Rectangle 2278" width="28.55" height="31.859" transform="translate(39.978 98.21)" fill="#ffb44a"/>
                        <rect id="Rectangle_2279" data-name="Rectangle 2279" width="29.956" height="7.033" transform="translate(39.979 96.454)" fill="#f2a040"/>
                        <g id="Group_1171" data-name="Group 1171" transform="translate(73.781 113.021)" opacity="0.75">
                          <g id="Group_1170" data-name="Group 1170" transform="translate(0)">
                            <g id="Group_1169" data-name="Group 1169" clip-path="url(#clip-path-19)">
                              <g id="Group_1168" data-name="Group 1168" transform="translate(0 0)">
                                <g id="Group_1167" data-name="Group 1167" clip-path="url(#clip-path-20)">
                                  <rect id="Rectangle_2280" data-name="Rectangle 2280" width="10.69" height="13.663" transform="matrix(0.94, -0.34, 0.34, 0.94, -3.985, 1.064)" fill="url(#linear-gradient-8)"/>
                                </g>
                              </g>
                            </g>
                          </g>
                        </g>
                        <path id="Path_5678" data-name="Path 5678" d="M399.077,435.316s-9.442,5.921-12.553,7.162c-2.231.893-3.219-2.3-3.854-4.254s3.812-8.185,9.048-11.985c4.009-2.908,7.77,8.2,7.36,9.076" transform="translate(-288.094 -329.371)" fill="#f4be9a"/>
                        <path id="Path_5679" data-name="Path 5679" d="M431.453,387.244c-6.482,6.614-24.408,18.095-24.408,18.095s-2.958-.81-6.87-5.37c-5.872-6.853-5.9-10.76-5.9-10.76s12.013-13.8,22.514-23.264c8.307-7.491,12.721-4.144,15.675,4.756,2.252,6.787,2.616,12.849-1.007,16.544" transform="translate(-295.348 -289.602)" fill="#60e99c"/>
                      </g>
                    </g>
                    <g id="Group_1175" data-name="Group 1175" transform="translate(106.345 168.862)">
                      <g id="Group_1174" data-name="Group 1174" clip-path="url(#clip-path-21)">
                        <rect id="Rectangle_2282" data-name="Rectangle 2282" width="50.596" height="39.055" transform="translate(-8.386 3.648) rotate(-23.51)" fill="url(#linear-gradient-9)"/>
                      </g>
                    </g>
                    <g id="Group_1177" data-name="Group 1177" transform="translate(98.24 186.862)">
                      <g id="Group_1176" data-name="Group 1176" clip-path="url(#clip-path-22)">
                        <rect id="Rectangle_2283" data-name="Rectangle 2283" width="7.088" height="9.882" transform="translate(-1.449 5.15) rotate(-78.252)" fill="url(#linear-gradient-10)"/>
                      </g>
                    </g>
                    <g id="Group_1179" data-name="Group 1179" transform="translate(99.661 186.953)">
                      <g id="Group_1178" data-name="Group 1178" clip-path="url(#clip-path-23)">
                        <rect id="Rectangle_2284" data-name="Rectangle 2284" width="15.252" height="17.974" transform="translate(-5.029 11.783) rotate(-78.252)" fill="url(#linear-gradient-11)"/>
                      </g>
                    </g>
                    <g id="Group_1184" data-name="Group 1184" transform="translate(50.144 64.588)">
                      <g id="Group_1183" data-name="Group 1183" clip-path="url(#clip-path-7)">
                        <g id="Group_1182" data-name="Group 1182" transform="translate(47.755 113.028)" opacity="0.5">
                          <g id="Group_1181" data-name="Group 1181">
                            <g id="Group_1180" data-name="Group 1180" clip-path="url(#clip-path-25)">
                              <path id="Path_5684" data-name="Path 5684" d="M285.67,469.776s-15.928,9.019-17.423,8.913c-3.726-.264-4.781.527-6.838,1.74s-3.3,2.486-1.846,3.616,3.631-.633,2.7.638c-.8,1.1-3.863,3.262-.039,4.5,3.57,1.157,7.776.8,9.554-1.283,1.954-2.286,1.96-3.552,1.706-4.818,4.957-1.828,6.61-.949,15.049-1.652-2.11-.527-3.209-5.4-3.481-7.429-.141-1.058-.246-3.541.616-4.227" transform="translate(-258.934 -469.776)" fill="#56cd93"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
                <text id="Task_received" data-name="Task received" transform="translate(566 351)" fill="#1b3149" font-size="16" font-family="SegoeUI, Segoe UI"><tspan x="-46.434" y="0">Task received</tspan></text>
                <text id="Task_in_Review_" data-name="Task in Review " transform="translate(758 353)" fill="#1b3149" font-size="16" font-family="SegoeUI, Segoe UI"><tspan x="-52.242" y="0">Task in Review </tspan></text>
                <text id="Going_to_the_network_for_offers" data-name="Going to the
              network for offers" transform="translate(968 353)" fill="#1b3149" font-size="16" font-family="SegoeUI, Segoe UI"><tspan x="-46.746" y="0">Going to the </tspan><tspan x="-63.059" y="21">network for offers</tspan></text>
                <g id="Group_2730" data-name="Group 2730" transform="translate(483 336.042)">
                  <circle id="Ellipse_158" data-name="Ellipse 158" cx="11" cy="11" r="11" transform="translate(0 -0.042)" fill="#5bdb98"/>
                  <path id="Path_5605" data-name="Path 5605" d="M11.158,0,4.094,7.051,1.126,4.089,0,5.216,4.094,9.3l8.191-8.175Z" transform="translate(3.876 6.771)" fill="#fff"/>
                </g>
                <line id="Line_24" data-name="Line 24" x2="185.831" transform="translate(546.88 263.866)" fill="none" stroke="#5bdb98" stroke-width="2"/>
                <line id="Line_25" data-name="Line 25" x2="131.077" transform="translate(787.466 263.866)" fill="none" stroke="#5bdb98" stroke-width="2"/>
                <g id="Group_2732" data-name="Group 2732" transform="translate(730.223 228.785)">
                  <path id="Path_5601" data-name="Path 5601" d="M59.392,47.97H2.492A2.491,2.491,0,0,0,0,50.462v72.889a2.491,2.491,0,0,0,2.492,2.492h56.9a2.491,2.491,0,0,0,2.492-2.492V50.462a2.491,2.491,0,0,0-2.492-2.492M56.9,104.661l-16.2,16.2H4.984V52.954H56.9Z" transform="translate(0 -47.97)" fill="#6ad1ff"/>
                  <path id="Path_5603" data-name="Path 5603" d="M99.279,175a15.4,15.4,0,1,1-15.4,15.4,15.4,15.4,0,0,1,15.4-15.4" transform="translate(-68.336 -151.462)" fill="#6ad1ff"/>
                  <path id="Path_5604" data-name="Path 5604" d="M133.686,221.425a1.669,1.669,0,0,0-2.361,0l-9.26,9.262-4.368-4.368a1.67,1.67,0,1,0-2.361,2.361l5.549,5.549a1.669,1.669,0,0,0,2.361,0l10.441-10.442a1.669,1.669,0,0,0,0-2.361" transform="translate(-93.569 -188.891)" fill="#6ad1ff"/>
                </g>
                <g id="Group_2733" data-name="Group 2733" transform="translate(483.001 219.897)">
                  <g id="Group_1127" data-name="Group 1127" clip-path="url(#clip-path-26)">
                    <path id="Path_5606" data-name="Path 5606" d="M32.338,80.379H13.625a6.82,6.82,0,0,1-6.812-6.812V22.138a6.82,6.82,0,0,1,6.812-6.812h10.71v1.7a10.218,10.218,0,1,0,20.436,0v-1.7H55.5a6.82,6.82,0,0,1,6.812,6.812V49.785a3.406,3.406,0,0,0,6.812,0V22.138A13.639,13.639,0,0,0,55.5,8.515H44.77V3.406A3.406,3.406,0,0,0,41.364,0H27.74a3.406,3.406,0,0,0-3.406,3.406V8.515H13.625A13.639,13.639,0,0,0,0,22.138V73.568A13.639,13.639,0,0,0,13.625,87.191H32.338a3.406,3.406,0,1,0,0-6.812M31.145,6.812h6.812V17.03a3.406,3.406,0,1,1-6.812,0Zm26.4,39.168A20.606,20.606,0,1,0,78.147,66.586,20.629,20.629,0,0,0,57.541,45.98m0,34.4A13.794,13.794,0,1,1,71.335,66.586,13.809,13.809,0,0,1,57.541,80.379m8.345-13.794a3.406,3.406,0,0,1-3.406,3.406H57.541a3.406,3.406,0,0,1-3.406-3.406V59.6a3.406,3.406,0,1,1,6.812,0V63.18H62.48a3.406,3.406,0,0,1,3.406,3.406" transform="translate(-0.001)" fill="#ffb44a"/>
                  </g>
                </g>
                <g id="Group_2734" data-name="Group 2734" transform="translate(915.563 217.639)">
                  <g id="Group_1406" data-name="Group 1406" clip-path="url(#clip-path-27)">
                    <path id="Path_5911" data-name="Path 5911" d="M57.332,77.266h-29.9a20.674,20.674,0,0,1-9.9-2.527C9.608,70.441,5.122,61.766,5.122,52.886S9.608,35.33,17.53,31.033a20.627,20.627,0,0,1,14.551-1.994,2.561,2.561,0,0,0,3.046-1.809C38.582,14.8,49.249,5.122,62.465,5.122S86.348,14.8,89.8,27.229a2.56,2.56,0,0,0,3.046,1.809A20.627,20.627,0,0,1,107.4,31.033c7.922,4.3,12.409,12.973,12.409,21.854S115.322,70.441,107.4,74.739a20.674,20.674,0,0,1-9.9,2.527H71.779a2.561,2.561,0,0,0,0,5.122H97.5a25.8,25.8,0,0,0,12.342-3.147c9.578-5.2,15.088-15.592,15.088-26.355s-5.511-21.16-15.089-26.356a25.754,25.754,0,0,0-15.8-2.912C89.349,10.075,77.189,0,62.465,0S35.582,10.075,30.89,23.618a25.754,25.754,0,0,0-15.8,2.912C5.51,31.726,0,42.122,0,52.886S5.51,74.046,15.087,79.241a25.8,25.8,0,0,0,12.342,3.147H55.624" transform="translate(0.001)" fill="#3de99f" fill-rule="evenodd"/>
                    <line id="Line_53" data-name="Line 53" x1="0.052" y2="0.157" transform="translate(57.333 77.11)" fill="#077bb2"/>
                    <path id="Path_5912" data-name="Path 5912" d="M160.846,111.747h-17.2l14.235-37.119h20.342L167.085,99.881l13.311-.105-31.915,50.063Z" transform="translate(-99.349 -51.616)" fill="#223349" fill-rule="evenodd"/>
                    <path id="Path_5913" data-name="Path 5913" d="M173.642,73.286,163.1,97.2a.953.953,0,0,0,.871,1.337h.008l11.52-.091L149.2,139.7l9.774-30.113a1.025,1.025,0,0,0-.975-1.342H142.291L155.7,73.286h17.944m-18.664-2.158a1.111,1.111,0,0,0-1.038.713l-13.665,35.633-.817,2.13a.591.591,0,0,0,.552.8h16.43l-9.293,28.63-2.3,7.1a1.207,1.207,0,0,0,2.166,1.022l4.011-6.291,26.3-41.251,1.551-2.434a.591.591,0,0,0-.5-.908l-2.886.023-9,.072a.421.421,0,0,1-.389-.591l10.176-23.083a1.112,1.112,0,0,0-1.017-1.56Z" transform="translate(-96.429 -49.195)" fill="#3de99f"/>
                  </g>
                </g>
                <g id="Group_2736" data-name="Group 2736" transform="translate(-399 -289)">
                  <text id="Quick_Tip_-_we_will_notify_you_once_your_offer_is_accepted_or_a_new_offer_is_made." data-name="Quick Tip - we will notify you once your offer is accepted or a new offer is made." transform="translate(1157 769)" fill="#1b3149" font-size="14" font-family="SegoeUI, Segoe UI"><tspan x="-212.142" y="0">Quick Tip - we will notify you once your offer is accepted or a new offer is made.</tspan></text>
                  <g id="Rectangle_4231" data-name="Rectangle 4231" transform="translate(882 742)" fill="none" stroke="#ffebcf" stroke-width="1">
                    <rect width="559" height="45" rx="5" stroke="none"/>
                    <rect x="0.5" y="0.5" width="558" height="44" rx="4.5" fill="none"/>
                  </g>
                </g>
                <a href="javascript:void(0)" id="modalClose" data-dismiss="modal">
                <g id="Group_2735" data-name="Group 2735" transform="translate(-384.505 -285)">
                  <circle id="Ellipse_159" data-name="Ellipse 159" cx="19.5" cy="19.5" r="19.5" transform="translate(1424.505 317)" fill="#e8e8e8"/>
                  <text id="X" transform="translate(1444.505 344)" fill="#f97a7a" font-size="20" font-family="SegoeUI, Segoe UI"><tspan x="-5.898" y="0">X</tspan></text>
                </g>
                </a>
              </svg>

        </div>
    </div>
@endif



















    <div style="height: 120px; background: #5bdb98"></div>
    <div class="container" style="margin-top: -60px;">
        <span class="font-weight-bold" id="titleId">Collect And Drop</span>
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
        <form method="POST" id="collect-n-drop-form" action="{{route('collect_n_drop.store')}}">
        @csrf
        <input type="hidden" name="category_id" value="2">
        <input type="hidden" name="vahicle_type" value="car">

            <div id="task-details">








            <div class="form-group">
                <div class="form-row" style="margin-top: -18px;">
                    <div class="float-left"><label for="exampleInputEmail1" class="label-title mr-5" style="margin-top: 20px;">Vahicle Type-</label></div>
                    <div class="cc-selector">
                        <div class="row">
                        @foreach ($vehicles as $vehicle)
                        <label class="drinkcard-cc" for="checboxStrip">
                           <div class="col form-check">
                                <input id="checboxStrip@php echo $vehicle->id @endphp" type="checkbox" class="vehicle_id_cl" name="vahicle_id" value="{{$vehicle->id}}"/>
                               <img src="{{ $vehicle->icon }}" alt="">
                            </div>
                        </label>

                        @endforeach

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
                    </select><!-- End -->
                  </div> --}}
                  <div class="form-group">
                    <label for="taskTitle" class="label-title">Task title</label>
                    <input type="text" class="form-control" id="taskTitle" name="title" placeholder="Enter your title here" style="outline: none">
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

                  <!-- <div class="form-group">
                    <label for="additional_note" class="label-title">Additional notes</label>

                    <textarea id="additional_note" class="form-control input-group-lg bg-input-orange" name="additional_note"  placeholder="Enter additional notes" required ></textarea>
                </div> -->

                    <div class="form-group">
                        <label for="productCost" class="label-title">Product cost</label>
                        <input id="productCost" class="form-control input-group-lg" type="text" name="product_cost" style="padding-left: 35px;"
                            title="Enter your total cost of the items"
                            placeholder="Enter your total cost of the items"/>
                        <svg class="dollar-sign" xmlns="http://www.w3.org/2000/svg" width="18" height="33" viewBox="0 0 18 33">
                            <text id="_" data-name="$" transform="translate(9 26)" fill="#5bdb98" font-size="27" font-family="Montserrat-Medium, Montserrat" font-weight="500"><tspan x="-8.384" y="0">$</tspan></text>
                        </svg>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="shop_address" class="label-title">Enter shops/Pickup address</label>
                            <div class="input-group">
                                <input id="shop_address" class="form-control input-group-lg" type="text" name="shop_address"
                                   title="Enter your pickup address"
                                   placeholder="Enter your pickup address"/>
                                <div class="input-group-append cursor-pointer">
                                    <span class="input-group-text border-0 pickupModal" data-toggle="modal" data-target="#googleMapPicupModal" id="pickupSpanId">
                                        <img src="{{ asset('frontend/assets/images/Icons/location.svg') }}" alt="" width="20" height="auto">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="delivery_address" class="label-title">Enter delivery address</label>
                            <div class="input-group">
                                <input id="delivery_address" class="form-control input-group-lg" type="text" name="delivery_address"
                                   title="Enter your delivery address"
                                   placeholder="Enter your delivery address"/>
                                <div class="input-group-append cursor-pointer">
                                    <span class="input-group-text border-0 deliveryModal" data-toggle="modal" data-target="#googleMapDeliveryModal" id="deliverySpanId">
                                        <img src="{{ asset('frontend/assets/images/Icons/location green.svg') }}" alt="" width="20" height="auto">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

            <div id="timeFrameDiv" style="">

                <div class="form-group">
                    <label for="exampleInputEmail1" class="label-title">Delivery Time</label>
                    <div class="row">
                        @foreach ($delivery_times as $d_time)
                        <div class="pr-2" >
                            <label >
                                <input type="radio" name="delivery_time"  value="{{$d_time->id}}" >
                                <div style="width: 180px;">
                                    <img src="{{ asset('frontend/assets/images/Icons/ASAP Black.svg') }}" height="30" width="80">
                                    <label class="radio-btn-text delivery_time_checker" style="margin-top: 16px;margin-right: 6px;" for="asap" >{{$d_time->title}}</label>
                                </div>
                            </label>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="form-group text-center nb-mover">
                    <small>No Purchases - Dropper would not be able to make any purchase. Restricted/Illegal Item - Please don’t hand over any  restricted item.</small>
                </div>
            </div>

            <div id="taskDetails" style="display: none;">
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
                                <input type="radio" value="{{$d_time->id}}" name="delivery_time_review"  disabled>
                                <div style="width: 180px;">
                                    <img src="{{ asset('frontend/assets/images/Icons/ASAP Black.svg') }}" height="30" width="80">
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
        <a class="button text-white">Next</a>
    </div>
    <div class="text-center" id="reviewButtons" style="display: none">
        <a class="button-outline backButtonCls" id="backButtonId">Back</a>
        <a class="button text-white reviewButtonCls" id="reviewButtonId">Review</a>
    </div>
    <div class="text-center" id="postButtonId" style="display: none">
        <button class="button text-white" id="postSubmitButtonId">Post Delivery Request</button>
    </div><br><br>
</section>

{{-- data-toggle="modal" data-target="#deliveryProcessModal" --}}

@include("User.component.googleMap_pickup_modal")
@include("User.component.googleMap_delivery_modal")
@include("User.component.post_delivery")

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
        else if ($('#taskTitle').val() == '') {
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
        else if (!timeSelected) {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "Delivery time is required.",
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
        }
    });

    $('.hello-salman-modal-block').click(function(){
        $(this).css("display", "none");
    });


</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js"></script> --}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDe9wIv3EiEy0aH3YTSRRZP8eRNbitATDo&libraries=places"></script>
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
// console.log(auto_shop_address2.val());

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



    // Car selection
    $(document).on('click','.drinkcard-cc',function(){

        $('.drinkcard-cc').removeClass("car-selected");

        $(this).toggleClass("car-selected");
        let inputCar = $(this).find("input");
        inputCar.prop( "checked", true );
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
