<style>
 .review-row{
        margin-top: -222px;
    }
.text-review{
        margin: auto;

    }
.accurancy-lebel{
    font-weight: 500;
    padding-right: 34px;
    margin-left: 2px;
    }

.button-review{
    width: 291px;
    margin: auto !important;
    background: rgb(96, 233, 156);
    border: 1px solid rgb(96, 233, 156);
    display: block;
    margin-top: 12px!important;
    margin-bottom: 10px !important;
    }
.button-review:hover{
    background: rgb(88, 231, 150);
    border: 1px solid rgb(88, 231, 150);
}
.rate {
    float: left;
    margin-left: 265px;

}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

#ex1Slider .slider-selection {
	background: #0eca46;
}

/* .range-wrap {
  position: relative;
  margin: 0 auto 3rem;
} */
.range {
    width: 38%;
    margin-left: 162px;
    margin-top: -21px;
}
/* .bubble {
  background: red;
  color: white;
  padding: 4px 12px;
  position: absolute;
  border-radius: 4px;
  left: 50%;
  transform: translateX(-50%);
} */
/* .bubble::after {
  content: "";
  position: absolute;
  width: 2px;
  height: 2px;
  background: red;
  top: -1px;
  left: 50%;
} */


</style>
{{-- payment confirm modal --}}
<div class="modal fade" id="paymentReleaseModalId" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div style="background: #60e99c;height: 8px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <input type="button" aria-hidden="true" class="modal-cross-btn" value="x">
                    </button>
                </div>
            </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" viewBox="0 0 744 687">

                    <defs>
                      <clipPath id="clip-path">
                        <rect id="Rectangle_2475" data-name="Rectangle 2475" width="250.555" height="234.467" fill="none"/>
                      </clipPath>
                      <clipPath id="clip-path-2">
                        <rect id="Rectangle_2467" data-name="Rectangle 2467" width="250.556" height="234.467" fill="none"/>
                      </clipPath>
                      <clipPath id="clip-path-3">
                        <rect id="Rectangle_2465" data-name="Rectangle 2465" width="226.173" height="158.475" fill="none"/>
                      </clipPath>
                      <clipPath id="clip-path-4">
                        <path id="Path_5874" data-name="Path 5874" d="M275.021,424.128a112.632,112.632,0,0,1-9.483,45.38H58.315a113.1,113.1,0,1,1,216.706-45.38" transform="translate(-48.848 -311.033)" fill="none"/>
                      </clipPath>
                      <linearGradient id="linear-gradient" x1="-0.052" y1="1.004" x2="-0.051" y2="1.004" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#5bdb98"/>
                        <stop offset="1" stop-color="#60e99c"/>
                      </linearGradient>
                      <clipPath id="clip-path-6">
                        <rect id="Rectangle_2471" data-name="Rectangle 2471" width="93.191" height="93.192" fill="none"/>
                      </clipPath>
                      <clipPath id="clip-path-7">
                        <path id="Path_5895" data-name="Path 5895" d="M728.123,46.6A46.6,46.6,0,1,1,681.527,0a46.6,46.6,0,0,1,46.6,46.6" transform="translate(-634.931)" fill="none"/>
                      </clipPath>
                      <linearGradient id="linear-gradient-2" x1="-1.65" y1="2.516" x2="-1.648" y2="2.516" xlink:href="#linear-gradient"/>
                      <clipPath id="clip-path-8">
                        <rect id="Rectangle_2476" data-name="Rectangle 2476" width="18.149" height="17.299" fill="none"/>
                      </clipPath>
                      <clipPath id="clip-path-12">
                        <rect id="Rectangle_2476-5" data-name="Rectangle 2476" width="18.149" height="17.299" fill="#fff"/>
                      </clipPath>
                    </defs>
                    <g id="Group_2864" data-name="Group 2864" transform="translate(-19669 -1567)">
                      <rect id="Rectangle_4272" data-name="Rectangle 4272" width="744" height="687" rx="10" transform="translate(19669 1567)" fill="#fff"/>
                      <path id="Rectangle_4275" data-name="Rectangle 4275" d="M10,0H734a10,10,0,0,1,10,10v4a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V10A10,10,0,0,1,10,0Z" transform="translate(19669 1567)" fill="#60e99c"/>


                      <line id="Line_81" data-name="Line 81" x2="657" transform="translate(19713.5 1890.5)" fill="none" stroke="#e8e8e8" stroke-width="1"/>
                      <g id="Group_1384" data-name="Group 1384" transform="translate(19908.418 1594.5)">
                        <g id="Group_1383" data-name="Group 1383" clip-path="url(#clip-path)">
                          <g id="Group_1375" data-name="Group 1375">
                            <g id="Group_1374" data-name="Group 1374" clip-path="url(#clip-path-2)">
                              <g id="Group_1373" data-name="Group 1373" transform="translate(11.833 75.344)" opacity="0.12">
                                <g id="Group_1372" data-name="Group 1372">
                                  <g id="Group_1371" data-name="Group 1371" clip-path="url(#clip-path-3)">
                                    <g id="Group_1370" data-name="Group 1370" transform="translate(0 0)">
                                      <g id="Group_1369" data-name="Group 1369" clip-path="url(#clip-path-4)">
                                        <rect id="Rectangle_2464" data-name="Rectangle 2464" width="226.173" height="158.475" transform="translate(0 0)" fill="url(#linear-gradient)"/>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </g>
                              <path id="Path_5875" data-name="Path 5875" d="M500.366,430.237s20.679-27.681,28.064-21.773-21.786,34.711-21.786,34.711Z" transform="translate(-379.159 -308.893)" fill="#ffc7b6"/>
                              <path id="Path_5876" data-name="Path 5876" d="M500.366,512.941s20.679-27.681,28.064-21.773-21.786,34.711-21.786,34.711Z" transform="translate(-379.159 -371.562)" fill="#ffc7b6"/>
                              <path id="Path_5877" data-name="Path 5877" d="M500.366,595.643s20.679-27.681,28.064-21.773-21.786,34.711-21.786,34.711Z" transform="translate(-379.159 -434.231)" fill="#ffc7b6"/>
                              <path id="Path_5878" data-name="Path 5878" d="M571.2,416.329v19.615c1.319-1.549,2.648-3.166,3.919-4.8V413.64a29.553,29.553,0,0,0-3.919,2.689" transform="translate(-432.832 -313.441)" fill="#202640"/>
                              <path id="Path_5879" data-name="Path 5879" d="M571.2,499.031v19.615c1.319-1.549,2.648-3.166,3.919-4.8V496.342a29.586,29.586,0,0,0-3.919,2.689" transform="translate(-432.832 -376.11)" fill="#202640"/>
                              <path id="Path_5880" data-name="Path 5880" d="M571.2,581.734v19.615c1.319-1.549,2.648-3.166,3.919-4.8V579.045a29.585,29.585,0,0,0-3.919,2.689" transform="translate(-432.832 -438.779)" fill="#202640"/>
                              <rect id="Rectangle_2466" data-name="Rectangle 2466" width="55.399" height="52.79" transform="translate(61.384 181.028)" fill="#ffc7b6"/>
                              <path id="Path_5881" data-name="Path 5881" d="M483.942,747.319a15.6,15.6,0,0,1-1.814,5.891,19.647,19.647,0,0,1-6.944,7.083,33.972,33.972,0,0,1-8.05,3.679,33.362,33.362,0,0,1-4.785,1.227V747.319Z" transform="translate(-350.351 -566.291)" fill="#ffc7b6"/>
                              <path id="Path_5882" data-name="Path 5882" d="M366.111,753.309v4.439a19.648,19.648,0,0,1-6.944,7.083l-8.05-.691-4.785-.414-37.088-3.23,1.5-7.186Z" transform="translate(-234.334 -570.83)" fill="#202640"/>
                              <path id="Path_5883" data-name="Path 5883" d="M350.7,414.517H307.5a12.924,12.924,0,0,1-12.924-12.924V309.646A12.924,12.924,0,0,1,307.5,296.721h43.2a12.924,12.924,0,0,1,12.924,12.924v91.948A12.924,12.924,0,0,1,350.7,414.517" transform="translate(-223.215 -224.844)" fill="#60e99c"/>
                              <path id="Path_5884" data-name="Path 5884" d="M334.515,432.9a4.292,4.292,0,0,1-4.286-4.287V336.663a4.292,4.292,0,0,1,4.286-4.287h43.2a4.292,4.292,0,0,1,4.287,4.287v91.948a4.292,4.292,0,0,1-4.287,4.287Z" transform="translate(-250.235 -251.862)" fill="#fff"/>
                              <path id="Path_5885" data-name="Path 5885" d="M226.332,582.518s25.849-31.757-1.847-45.42c0,0,15.879-15.879,9.97-22.526-5.539-6.231-38.016,7.335-35.664,32.18a28.371,28.371,0,0,0,2.995,9.843c8.369,16.9,24.545,25.923,24.545,25.923" transform="translate(-150.545 -388.783)" fill="#ffc7b6"/>
                              <path id="Path_5886" data-name="Path 5886" d="M385.608,543.94h-25.6a7.755,7.755,0,0,1,0-15.509h25.6a7.755,7.755,0,1,1,0,15.509" transform="translate(-266.927 -400.426)" fill="#60e99c"/>
                            </g>
                          </g>
                          <text id="pay" transform="translate(93.007 133.443)" fill="#133479" font-size="9" font-family="Montserrat-Regular, Montserrat"><tspan x="0" y="0">pay</tspan></text>
                          <g id="Group_1382" data-name="Group 1382">
                            <g id="Group_1381" data-name="Group 1381" clip-path="url(#clip-path-2)">
                              <path id="Path_5887" data-name="Path 5887" d="M697.17,800.109H639.992l-4.854-22.992,4.75-20.85,44.913-8.948Z" transform="translate(-481.284 -566.291)" fill="#ffc7b6"/>
                              <path id="Path_5888" data-name="Path 5888" d="M795.309,670.795l-3.127,17.24L783.13,654.4l-2.159-8.05a9.317,9.317,0,0,1,2.332.138h.017c11.228,2.09,11.988,24.3,11.988,24.3" transform="translate(-591.791 -489.766)" fill="#ffc7b6"/>
                              <path id="Path_5889" data-name="Path 5889" d="M791.111,673.472,783.13,654.4l-2.159-8.05a9.318,9.318,0,0,1,2.332.138h.017c2.367,1.883,5.079,5.372,6.616,11.816a40.316,40.316,0,0,1,1.175,15.167" transform="translate(-591.791 -489.766)" fill="#202640"/>
                              <path id="Path_5890" data-name="Path 5890" d="M703.4,653.045c-.173,8.965-11.177,11.159-11.177,11.159l-14.32-15.91-14.1-34.721a33.362,33.362,0,0,1,23.234,1.088c12.23,5.3,16.549,29.436,16.359,38.384" transform="translate(-503.007 -463.742)" fill="#ffc7b6"/>
                              <path id="Path_5891" data-name="Path 5891" d="M718.194,643.6,703.027,612a30.617,30.617,0,0,1,5.856.4,56.634,56.634,0,0,1,9.311,31.2" transform="translate(-532.728 -463.743)" fill="#202640"/>
                              <path id="Path_5892" data-name="Path 5892" d="M644.94,639.272c-.173,10.158-11.177,12.645-11.177,12.645l-14.32-18.052-14.113-39.42a18.378,18.378,0,0,1,2.591-.829,29.927,29.927,0,0,1,20.66,2.073c12.23,6.029,16.531,33.409,16.359,43.583" transform="translate(-458.697 -449.089)" fill="#ffc7b6"/>
                              <path id="Path_5893" data-name="Path 5893" d="M637.1,628.2l-21.075-34.479a29.375,29.375,0,0,1,6.2-.933c2.695,1.918,5.714,3.75,8.98,7.824,4.62,9.887,5.894,27.588,5.894,27.588" transform="translate(-466.803 -449.191)" fill="#202640"/>
                              <path id="Path_5894" data-name="Path 5894" d="M543.413,620.29l-12.705.945s-22.218,3.2-28.824-20.655c-4.531-18.465.825-26.724,3.975-26.972,8.082-.637,8.586,13.309,11.035,19.152a3.291,3.291,0,0,0,6.279-1.817l-3.205-19.41s-26.35-19.3-22.2-28.01,38.384,14.731,40.666,18.258S545.072,579,545.072,579l6.847,34.234Z" transform="translate(-376.854 -410.4)" fill="#ffc7b6"/>
                              <rect id="Rectangle_2468" data-name="Rectangle 2468" width="16.193" height="1.296" transform="translate(204.714 123.636)" fill="#60e99c"/>
                              <rect id="Rectangle_2469" data-name="Rectangle 2469" width="16.193" height="1.296" transform="translate(20.623 173.707)" fill="#60e99c"/>
                              <g id="Group_1380" data-name="Group 1380" transform="translate(153.804)" opacity="0.12">
                                <g id="Group_1379" data-name="Group 1379">
                                  <g id="Group_1378" data-name="Group 1378" clip-path="url(#clip-path-6)">
                                    <g id="Group_1377" data-name="Group 1377">
                                      <g id="Group_1376" data-name="Group 1376" clip-path="url(#clip-path-7)">
                                        <rect id="Rectangle_2470" data-name="Rectangle 2470" width="93.192" height="93.192" transform="translate(0 0)" fill="url(#linear-gradient-2)"/>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </g>
                              <path id="Path_5896" data-name="Path 5896" d="M796.477,164.228H724.423a1.718,1.718,0,0,1-1.718-1.718V119.449a1.718,1.718,0,0,1,1.718-1.718h72.053a1.718,1.718,0,0,1,1.718,1.718V162.51a1.718,1.718,0,0,1-1.718,1.718" transform="translate(-547.639 -89.212)" fill="#88b7e6"/>
                              <rect id="Rectangle_2472" data-name="Rectangle 2472" width="75.49" height="8.594" transform="translate(175.066 38.173)" fill="#133479"/>
                              <path id="Path_5897" data-name="Path 5897" d="M777.335,230.569H745.946a.413.413,0,0,1-.413-.414V223.3a.413.413,0,0,1,.413-.413h31.388a.413.413,0,0,1,.413.413v6.855a.413.413,0,0,1-.413.414" transform="translate(-564.938 -168.896)" fill="#133479"/>
                              <path id="Path_5898" data-name="Path 5898" d="M925.574,233.633h-8.341a.414.414,0,0,1-.414-.413V223.3a.414.414,0,0,1,.414-.413h8.341a.413.413,0,0,1,.414.413v9.919a.413.413,0,0,1-.414.413" transform="translate(-694.732 -168.896)" fill="#133479"/>
                              <path id="Path_5899" data-name="Path 5899" d="M984.958,233.633h-8.342a.414.414,0,0,1-.414-.413V223.3a.414.414,0,0,1,.414-.413h8.342a.414.414,0,0,1,.414.413v9.919a.414.414,0,0,1-.414.413" transform="translate(-739.73 -168.896)" fill="#133479"/>
                              <rect id="Rectangle_2473" data-name="Rectangle 2473" width="249.839" height="1.295" transform="translate(0 233.172)" fill="#60e99c"/>
                            </g>
                          </g>
                        </g>
                      </g>
                      <text id="Payment_released_" data-name="Payment released!" transform="translate(20041 1865.487)" font-size="25" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="-119.85" y="0">Payment released!</tspan></text>
                      <text id="Review_your_experience" data-name="Review your experience" transform="translate(20049 1919.487)" fill="#5bdb98" font-size="16" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="-98.408" y="0">Review your experience</tspan></text>
                      <text id="Overall_rating" data-name="Overall rating" transform="translate(19907 1962.487)" fill="#1b3149" font-size="16" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="-56.128" y="0">Overall rating</tspan></text>

                    </svg>

                    <form action="{{ route('user.review_submit') }}" id="submitReviewForm" method="POST">

                      @csrf
                    <div class="row review-row">


                            <div class="rate">

                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                              </div>
                              <div class="accurancy" style="margin: auto;margin-left: 77px;">
                                  <label class="accurancy-lebel" for="" style="font-size: 13px;margin-left: 57px">Order accurancy</label>
                                    <input type="range" name="range" class="range">
                              </div>
                              <div class="text-review">
                                  <textarea class="form-control input-group-lg bg-input-orange" name="experience" id="" cols="36" rows="4" placeholder="Write your experience here"></textarea>
                              </div>
                              <br>

                        </div>

                        <button class="btn btn-success mt-3 mb-3 button-review"   id="submitReview">Submit</button>
                    </form>
                    </div>

            </div>
        </div>

{{-- </div> --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('#releasePaymentId').click(function() {

        $('#taskProcessModal').modal('hide');
    })
</script>

// Review Submission
<script>
   $('#submitReview').click(function() {
        event.preventDefault();

        // submitReviewForm
        let form = document.getElementById('submitReviewForm');

        // Add Task Order ID
        var hiddenProductsInput = document.createElement('input');
        hiddenProductsInput.setAttribute('type', 'hidden');
        hiddenProductsInput.setAttribute('name', 'task_order_id');
        hiddenProductsInput.setAttribute('value', window.orderId);
        form.appendChild(hiddenProductsInput);

        // Submit the form
        form.submit();
    });

</script>
<script>
    $('#taskProcessModal').click(function() {
       $('#paymentConfirmModalId').modal('hide');
   });





   

    const allRanges = document.querySelectorAll(".range-wrap");
    allRanges.forEach(wrap => {
      const range = wrap.querySelector(".range");
      const bubble = wrap.querySelector(".bubble");

      range.addEventListener("input", () => {
        setBubble(range, bubble);
      });
      setBubble(range, bubble);
    });

    function setBubble(range, bubble) {
      const val = range.value;
      const min = range.min ? range.min : 0;
      const max = range.max ? range.max : 100;
      const newVal = Number(((val - min) * 100) / (max - min));
      bubble.innerHTML = val;

      // Sorta magic numbers based on size of the native UI thumb
      bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
    }
 

</script>

