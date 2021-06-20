<style>
.track-row{
    margin-top: -217px;
    margin-left: 37px;
    }
  .step-line {
    width: 417px;
    display: flex;
    justify-content: space-between;
    border-top:2px dashed #60e99c;
    padding-top: 15px;
    margin-top: 15px;
    margin: auto;
}
.step-line-text {
    margin-top: 10px;
    margin-left: -38px;
    position: absolute;
    font-size: 9px;
}
hr {
    margin-top: 10px;
    margin-bottom: 2rem;
    border: 0;
    border-top: 2px solid rgba(0,0,0,.1);
    width: 90%;
}
.chat-btn{
    margin-left: 116px;
    width: 108px;
    border-radius: 23px;
    font-size: 10px;
    background: #60e99c;
    border: 1px solid #60e99c;
}
.chat-btn:hover{
    background: #41ab70;
    border: 1px solid #41ab70;

}
.home-btn{
    width: 108px;
    background: #60e99c;
    border: 1px solid #60e99c;
    margin-left: 110px;
    border-radius: 5px;
}

.home-btn:hover{

    background: #41ab70;
    border: 1px solid #41ab70;

}
.release-btn{
    background: #ffce8a;
    border: 1px solid #ffce8a;
    border-radius: 5px;
}
.release-btn:hover{
    background: #e4a957;
    border: 1px solid #e4a957;

}




</style>
{{-- payment confirm modal --}}
<div class="modal fade" id="taskProcessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="auto" viewBox="0 0 744 643">
              <defs>
                <clipPath id="clip-path">
                  <rect width="744" height="310" fill="none"/>
                </clipPath>
                <clipPath id="clip-path-2">
                  <path id="Path_5803" data-name="Path 5803" d="M77.264,413.314a3.966,3.966,0,0,0,.045.557c-.132-.01-.263-.017-.4-.017a4.274,4.274,0,0,0-4.5,4c0,.109.011.213.019.319H72.41c-2.055,0-3.837.739-3.967,3.049a3.021,3.021,0,0,0,2.171,3.03c1.048.423,3.329.3,9.332.3,7.354,0,13.982.017,13.982.017a3.268,3.268,0,0,0,2.662-3c.273-2.553-2.085-4.557-4.843-4.49,0-.067.008-.138.008-.206a4.266,4.266,0,0,0-4.5-3.983,4.946,4.946,0,0,0-1.01.1,4.519,4.519,0,0,0-8.983.313" transform="translate(-68.438 -409.114)" fill="none"/>
                </clipPath>
                <radialGradient id="radial-gradient" cx="0.496" cy="0.497" r="0.73" gradientTransform="matrix(0.547, 0, 0, -1, -0.325, 18.725)" gradientUnits="objectBoundingBox">
                  <stop offset="0" stop-color="#56cd93"/>
                  <stop offset="1" stop-color="#60e99c"/>
                </radialGradient>
                <clipPath id="clip-path-3">
                  <rect id="Rectangle_2448" data-name="Rectangle 2448" width="238.302" height="268.073" fill="none"/>
                </clipPath>
                <clipPath id="clip-path-4">
                  <path id="Path_5805" data-name="Path 5805" d="M149,80.787a4.817,4.817,0,0,0,.052.655c-.155-.012-.309-.019-.469-.019-2.927,0-5.3,2.111-5.3,4.712,0,.128.011.251.022.376h-.022c-2.421,0-4.519.87-4.671,3.589a3.554,3.554,0,0,0,2.556,3.567c1.235.5,3.92.356,10.988.356,8.66,0,16.464.02,16.464.02a3.85,3.85,0,0,0,3.135-3.528c.32-3.006-2.455-5.365-5.7-5.287,0-.078.01-.162.01-.241,0-2.588-2.373-4.691-5.3-4.691a5.824,5.824,0,0,0-1.19.122A5.321,5.321,0,0,0,149,80.787" transform="translate(-138.609 -75.842)" fill="none"/>
                </clipPath>
                <radialGradient id="radial-gradient-2" cx="0.496" cy="0.497" r="0.73" gradientTransform="matrix(0.547, 0, 0, -1, -0.56, 26.783)" xlink:href="#radial-gradient"/>
                <clipPath id="clip-path-6">
                  <path id="Path_5807" data-name="Path 5807" d="M712.113,93.052a4.065,4.065,0,0,0,.045.551c-.13-.01-.261-.016-.394-.016a4.235,4.235,0,0,0-4.461,3.965c0,.109.011.211.02.316h-.02c-2.037,0-3.8.732-3.93,3.021a2.994,2.994,0,0,0,2.15,3c1.039.42,3.3.3,9.248.3,7.287,0,13.854.016,13.854.016a3.238,3.238,0,0,0,2.639-2.969c.27-2.53-2.066-4.516-4.8-4.449,0-.067.008-.137.008-.2a4.228,4.228,0,0,0-4.457-3.947,4.932,4.932,0,0,0-1,.1,4.478,4.478,0,0,0-8.9.31" transform="translate(-703.368 -88.89)" fill="none"/>
                </clipPath>
                <radialGradient id="radial-gradient-3" cx="0.496" cy="0.497" r="0.73" gradientTransform="matrix(0.547, 0, 0, -1, -3.38, 31.318)" xlink:href="#radial-gradient"/>
                <clipPath id="clip-path-8">
                  <path id="Path_5809" data-name="Path 5809" d="M665.306,517.783a4.846,4.846,0,0,0,.055.673c-.159-.013-.318-.02-.481-.02-3.009,0-5.446,2.167-5.446,4.841,0,.132.012.258.023.386h-.023c-2.487,0-4.642.895-4.8,3.689a3.653,3.653,0,0,0,2.626,3.665c1.269.513,4.028.366,11.291.366,8.9,0,16.916.02,16.916.02a3.954,3.954,0,0,0,3.221-3.625c.329-3.089-2.522-5.513-5.861-5.432,0-.082.01-.167.01-.248,0-2.659-2.437-4.82-5.442-4.82a6.038,6.038,0,0,0-1.222.125,5.468,5.468,0,0,0-10.868.379" transform="translate(-654.629 -512.702)" fill="none"/>
                </clipPath>
                <radialGradient id="radial-gradient-4" cx="0.496" cy="0.497" r="0.73" gradientTransform="matrix(0.547, 0, 0, -1, -2.577, 12.186)" xlink:href="#radial-gradient"/>
                <filter id="Ellipse_165" x="619.5" y="391.5" width="38" height="38" filterUnits="userSpaceOnUse">
                  <feOffset dy="3" input="SourceAlpha"/>
                  <feGaussianBlur stdDeviation="2.5" result="blur"/>
                  <feFlood flood-opacity="0.102"/>
                  <feComposite operator="in" in2="blur"/>
                  <feComposite in="SourceGraphic"/>
                </filter>
                <filter id="Ellipse_165-2" x="80.5" y="391.5" width="38" height="38" filterUnits="userSpaceOnUse">
                  <feOffset dy="3" input="SourceAlpha"/>
                  <feGaussianBlur stdDeviation="2.5" result="blur-2"/>
                  <feFlood flood-opacity="0.102"/>
                  <feComposite operator="in" in2="blur-2"/>
                  <feComposite in="SourceGraphic"/>
                </filter>
                <filter id="Ellipse_165-3" x="260.5" y="391.5" width="38" height="38" filterUnits="userSpaceOnUse">
                  <feOffset dy="3" input="SourceAlpha"/>
                  <feGaussianBlur stdDeviation="2.5" result="blur-3"/>
                  <feFlood flood-opacity="0.102"/>
                  <feComposite operator="in" in2="blur-3"/>
                  <feComposite in="SourceGraphic"/>
                </filter>
                <filter id="Ellipse_165-4" x="439.5" y="391.5" width="38" height="38" filterUnits="userSpaceOnUse">
                  <feOffset dy="3" input="SourceAlpha"/>
                  <feGaussianBlur stdDeviation="2.5" result="blur-4"/>
                  <feFlood flood-opacity="0.102"/>
                  <feComposite operator="in" in2="blur-4"/>
                  <feComposite in="SourceGraphic"/>
                </filter>
                <clipPath id="clip-path-10">
                  <rect id="Rectangle_2458" data-name="Rectangle 2458" width="16.584" height="16.126" fill="#fff"/>
                </clipPath>
                <clipPath id="clip-path-11">
                  <rect id="Rectangle_2462" data-name="Rectangle 2462" width="24.991" height="25" fill="#fff"/>
                </clipPath>
              </defs>
              <g id="Group_2860" data-name="Group 2860" transform="translate(-17916 -1679)">
                <g id="Repeat_Grid_12" data-name="Repeat Grid 12" transform="translate(17916 1679)" clip-path="url(#clip-path)">
                  <g transform="translate(-17916 -1679)">
                    <rect id="Rectangle_4272" data-name="Rectangle 4272" width="744" height="643" rx="10" transform="translate(17916 1679)" fill="#fff"/>
                  </g>
                </g>
                <path id="Rectangle_4275" data-name="Rectangle 4275" d="M10,0H734a10,10,0,0,1,10,10v4a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V10A10,10,0,0,1,10,0Z" transform="translate(17916 1679)" fill="#60e99c"/>
                <a href="javascript:void(0)" data-dismiss="modal">
                  <g id="Group_2814" data-name="Group 2814" transform="translate(17174.494 1389)">
                    <circle id="Ellipse_159" data-name="Ellipse 159" cx="19.5" cy="19.5" r="19.5" transform="translate(1424.505 317)" fill="#f1f1f1"/>
                    <text id="X" transform="translate(1444.505 344)" fill="#f97a7a" font-size="20" font-family="SegoeUI, Segoe UI"><tspan x="-5.898" y="0">X</tspan></text>
                  </g>
                </a>
                <g id="Group_2849" data-name="Group 2849" transform="translate(18159 1714.5)">
                  <g id="Group_1347" data-name="Group 1347" transform="translate(20.471 122.37)">
                    <g id="Group_1346" data-name="Group 1346" clip-path="url(#clip-path-2)">
                      <rect id="Rectangle_2447" data-name="Rectangle 2447" width="28.47" height="15.562" transform="translate(-0.045)" fill="url(#radial-gradient)"/>
                    </g>
                  </g>
                  <g id="Group_1349" data-name="Group 1349">
                    <g id="Group_1348" data-name="Group 1348" clip-path="url(#clip-path-3)">
                      <path id="Path_5804" data-name="Path 5804" d="M33.145,415.435c.006-.1.017-.194.017-.288,0-3.133-2.865-5.67-6.4-5.67a7.248,7.248,0,0,0-1.439.148,6.231,6.231,0,0,0-6.375-5.528,6.2,6.2,0,0,0-6.4,5.971,5.722,5.722,0,0,0,.065.795c-.189-.017-.375-.027-.565-.027-3.535,0-6.4,2.55-6.4,5.7,0,.153.016.3.028.451H5.648c-2.921,0-5.461,1.053-5.642,4.339-.067,1.253.391,3.216,3.088,4.307,1.492.6,4.735.43,13.271.43,10.462,0,19.89.022,19.89.022a4.642,4.642,0,0,0,3.786-4.257c.388-3.635-2.967-6.484-6.9-6.387" transform="translate(0 -283.228)" fill="#e5e5e5"/>
                    </g>
                  </g>
                  <g id="Group_1351" data-name="Group 1351" transform="translate(41.459 22.685)">
                    <g id="Group_1350" data-name="Group 1350" clip-path="url(#clip-path-4)">
                      <rect id="Rectangle_2449" data-name="Rectangle 2449" width="33.523" height="18.324" transform="translate(-0.054 0)" fill="url(#radial-gradient-2)"/>
                    </g>
                  </g>
                  <g id="Group_1353" data-name="Group 1353">
                    <g id="Group_1352" data-name="Group 1352" clip-path="url(#clip-path-3)">
                      <path id="Path_5806" data-name="Path 5806" d="M97.051,83.283c.009-.114.021-.228.021-.34,0-3.689-3.373-6.676-7.53-6.676a8.54,8.54,0,0,0-1.7.173,7.569,7.569,0,0,0-15.044.523,6.729,6.729,0,0,0,.076.936c-.223-.019-.442-.032-.666-.032-4.162,0-7.538,3-7.538,6.706,0,.181.018.354.034.531h-.034c-3.441,0-6.431,1.239-6.644,5.109-.079,1.476.46,3.787,3.636,5.072,1.758.71,5.575.5,15.626.5,12.318,0,23.421.025,23.421.025a5.465,5.465,0,0,0,4.457-5.012c.458-4.281-3.493-7.635-8.12-7.521" transform="translate(-40.668 -49.015)" fill="#e5e5e5"/>
                    </g>
                  </g>
                  <g id="Group_1355" data-name="Group 1355" transform="translate(210.384 26.588)">
                    <g id="Group_1354" data-name="Group 1354" clip-path="url(#clip-path-6)">
                      <rect id="Rectangle_2451" data-name="Rectangle 2451" width="28.211" height="15.421" transform="translate(-0.045 0)" fill="url(#radial-gradient-3)"/>
                    </g>
                  </g>
                  <g id="Group_1357" data-name="Group 1357">
                    <g id="Group_1356" data-name="Group 1356" clip-path="url(#clip-path-3)">
                      <path id="Path_5808" data-name="Path 5808" d="M668.4,95.154c.007-.1.017-.192.017-.285,0-3.1-2.84-5.618-6.337-5.618a7.138,7.138,0,0,0-1.426.147,6.37,6.37,0,0,0-12.661.44,5.708,5.708,0,0,0,.065.787c-.188-.016-.373-.027-.56-.027-3.5,0-6.345,2.527-6.345,5.644,0,.152.015.3.029.447h-.029c-2.894,0-5.411,1.043-5.59,4.3-.066,1.242.388,3.187,3.059,4.268,1.479.6,4.692.425,13.15.425,10.366,0,19.709.021,19.709.021a4.6,4.6,0,0,0,3.751-4.218c.385-3.6-2.94-6.425-6.832-6.329" transform="translate(-445.452 -58.818)" fill="#e5e5e5"/>
                    </g>
                  </g>
                  <g id="Group_1359" data-name="Group 1359" transform="translate(195.806 153.354)">
                    <g id="Group_1358" data-name="Group 1358" clip-path="url(#clip-path-8)">
                      <rect id="Rectangle_2453" data-name="Rectangle 2453" width="34.445" height="18.828" transform="translate(-0.055)" fill="url(#radial-gradient-4)"/>
                    </g>
                  </g>
                  <g id="Group_1361" data-name="Group 1361">
                    <g id="Group_1360" data-name="Group 1360" clip-path="url(#clip-path-3)">
                      <path id="Path_5810" data-name="Path 5810" d="M611.926,520.348c.008-.117.021-.234.021-.349,0-3.79-3.467-6.86-7.738-6.86a8.705,8.705,0,0,0-1.742.18,7.777,7.777,0,0,0-15.458.537,6.934,6.934,0,0,0,.078.962c-.229-.021-.454-.033-.684-.033-4.276,0-7.747,3.086-7.747,6.891,0,.185.02.364.036.545h-.036c-3.534,0-6.606,1.274-6.826,5.25-.081,1.517.473,3.891,3.735,5.211,1.806.73,5.73.519,16.057.519,12.657,0,24.065.026,24.065.026a5.617,5.617,0,0,0,4.581-5.151c.469-4.4-3.59-7.845-8.343-7.728" transform="translate(-400.786 -355.093)" fill="#e5e5e5"/>
                      <path id="Path_5811" data-name="Path 5811" d="M455.123,720.822,405.554,733.19l5.765-60.156,49.286-9.426Z" transform="translate(-284.249 -465.116)" fill="#a86725"/>
                      <path id="Path_5812" data-name="Path 5812" d="M186.092,711.379l65.643,15.191,5.765-60.156-65.923-12.251Z" transform="translate(-130.43 -458.497)" fill="#d79641"/>
                      <path id="Path_5813" data-name="Path 5813" d="M204.429,636.767l67.809-7.423,47.4,10.248-49.286,9.426Z" transform="translate(-143.282 -441.101)" fill="#e7b160"/>
                      <path id="Path_5814" data-name="Path 5814" d="M348.328,802.32c-.572-.978-1.154-1.952-1.731-2.927l-1.741-2.924-3.5-5.829-1.766-2.906-1.773-2.9-1.785-2.9-1.787-2.893-3.59-5.773-.591-.934-1.455,1.148.5.77,3.694,5.711,1.858,2.847,1.861,2.844,1.869,2.842,1.878,2.834,3.78,5.655,1.9,2.815c.636.938,1.271,1.88,1.918,2.814l1.924,2.8c.648.93,1.292,1.864,1.95,2.79-.559-.988-1.128-1.97-1.7-2.95Z" transform="translate(-230.317 -541.324)" fill="#b56b2b"/>
                      <path id="Path_5815" data-name="Path 5815" d="M212.965,762.023l-2.268,2.02-2.265,2.025-4.511,4.064-2.253,2.039c-.753.678-1.5,1.367-2.241,2.049l-2.24,2.05c-.748.685-1.5,1.367-2.236,2.059l-2.23,2.066c-.743.689-1.481,1.38-2.22,2.075l-2.209,2.083c-.733.7-1.472,1.394-2.2,2.1.8-.627,1.587-1.263,2.376-1.9l2.363-1.91q1.181-.955,2.355-1.919L195.541,779c.778-.642,1.558-1.291,2.337-1.936l2.335-1.943c.779-.647,1.56-1.293,2.334-1.946l2.327-1.95,4.636-3.923,2.314-1.969,2.306-1.975.435-.371c-.345-.487-.693-.974-1.035-1.46Z" transform="translate(-130.43 -533.747)" fill="#b56b2b"/>
                      <path id="Path_5816" data-name="Path 5816" d="M243.633,689.033l2.248-1.776,2.243-1.783,4.471-3.577,2.229-1.8c.747-.6,1.483-1.2,2.225-1.807l2.218-1.81c.74-.606,1.482-1.205,2.219-1.818l2.2-1.826c.739-.608,1.475-1.216,2.2-1.833l2.2-1.843c.726-.622,1.46-1.236,2.18-1.862-.788.543-1.564,1.1-2.348,1.644l-2.337,1.661q-1.164.832-2.325,1.674l-2.322,1.677c-.778.558-1.543,1.127-2.313,1.69l-2.312,1.7c-.772.565-1.543,1.128-2.3,1.7l-2.3,1.705-4.589,3.433-2.285,1.724-2.285,1.729-.473.36-1.49,1.13-.319.241-2.273,1.74-2.271,1.743-1.489,1.146-1.277-1.777-1.854-2.57q-1.127-1.566-2.262-3.122c-.361-.492-.717-.984-1.073-1.473-.129-.18-.262-.358-.391-.536L223.63,679.4l-1.886-2.549-1.89-2.544-1.9-2.541-1.906-2.534-3.829-5.053-1.935-2.515c-.644-.837-1.283-1.68-1.933-2.511l-1.956-2.5c-.657-.829-1.309-1.66-1.971-2.485.569.89,1.153,1.774,1.729,2.662l1.748,2.644c.582.883,1.173,1.758,1.765,2.637l1.764,2.632L215,669.982l1.8,2.61,1.8,2.606,1.814,2.6,1.82,2.6,3.65,5.181c.168.231.332.463.5.694.342.486.69.973,1.035,1.46q1.069,1.508,2.146,3.01l1.848,2.577,1.853,2.572.575.8.772-.6,2.264-1.756,2.259-1.765,2.25-1.764.188-.148,1.455-1.148Z" transform="translate(-143.282 -458.497)" fill="#b56b2b"/>
                      <path id="Path_5817" data-name="Path 5817" d="M276.025,642.038l60.038,11.626,12.728-2.436-56.074-11.02Z" transform="translate(-193.463 -448.716)" fill="#ecc180"/>
                      <path id="Path_5818" data-name="Path 5818" d="M487.618,677.052l-12.728,2.436-.792,8.261,12.749-2.658Z" transform="translate(-332.29 -474.539)" fill="#b98551"/>
                      <path id="Path_5819" data-name="Path 5819" d="M480.68,843.306,467.9,846.193l-.8,8.351,12.8-3.2Z" transform="translate(-327.391 -591.065)" fill="#b98551"/>
                      <path id="Path_5820" data-name="Path 5820" d="M373.463,617.625s.038-.158.112-.454.161-.732.271-1.286.221-1.234.328-2.011.181-1.66.224-2.619a21.779,21.779,0,0,0-.086-3.078c-.008-.135-.027-.271-.044-.408s-.032-.273-.052-.412c-.044-.274-.088-.55-.148-.827a13.08,13.08,0,0,0-.439-1.666l-.036-.1-.017-.051-.008-.028c.018.048,0,.008,0,.013l-.008-.013-.088-.212-.088-.212-.089-.168-.092-.168-.112-.172-.115-.17-.131-.161a4.28,4.28,0,0,0-1.284-1.049,4.164,4.164,0,0,0-3.284-.278l-.425.166c-.114.065-.228.121-.35.183-.114.078-.238.15-.355.229s-.223.173-.327.269a4.111,4.111,0,0,0-1,1.345,4.3,4.3,0,0,0-.4,1.609l-.009.2.014.207.011.205.032.2.027.2.054.2.046.2.008.012s0,.018,0,0l.012.026.017.054.036.108c.049.142.1.293.149.426s.1.262.15.4.112.263.167.393.121.26.181.39a15.083,15.083,0,0,0,.792,1.461,21.908,21.908,0,0,0,1.78,2.514c.608.743,1.2,1.4,1.75,1.961s1.046,1.035,1.465,1.413.758.673.991.868l.364.294m0,0s-.147-.079-.405-.24-.639-.4-1.1-.735-1.017-.75-1.627-1.266a24.389,24.389,0,0,1-1.955-1.837,20.244,20.244,0,0,1-2.016-2.483,14.412,14.412,0,0,1-.916-1.508c-.151-.263-.275-.541-.409-.822-.065-.146-.128-.292-.191-.439s-.107-.283-.167-.426l-.038-.107-.019-.054-.014-.027-.01-.041-.075-.245-.072-.246-.049-.253-.044-.256-.02-.258-.024-.261c0-.085.007-.175.007-.261a5.241,5.241,0,0,1,1.714-3.8c.135-.123.284-.231.425-.346s.3-.2.454-.3c.172-.09.342-.176.515-.262l.481-.188a5.27,5.27,0,0,1,5.817,1.767c.051.068.105.136.158.206l.138.221.138.221.12.244.117.241.082.219.078.215.02.053.01.029.013.055.035.115a12.836,12.836,0,0,1,.4,1.811,14.913,14.913,0,0,1,.172,1.756,20.311,20.311,0,0,1-.121,3.2,23.742,23.742,0,0,1-.468,2.644c-.169.777-.369,1.444-.538,1.988s-.331.963-.438,1.249-.176.434-.176.434" transform="translate(-255.341 -421.019)" fill="#b56b2b"/>
                      <path id="Path_5821" data-name="Path 5821" d="M395.01,621.333s-.044-.156-.112-.456-.166-.733-.256-1.3-.192-1.251-.258-2.047a24.371,24.371,0,0,1-.083-2.683,20.142,20.142,0,0,1,.329-3.181,14.521,14.521,0,0,1,.419-1.713,12.855,12.855,0,0,1,.655-1.738l.047-.107.026-.055.014-.028.026-.047.107-.2.111-.2.151-.225.153-.225c.056-.066.113-.132.17-.2l.166-.2c.062-.063.126-.123.189-.186a5.285,5.285,0,0,1,3.9-1.471,5.3,5.3,0,0,1,2.1.546l.449.255c.157.109.319.219.472.333.135.12.279.237.409.361s.255.263.372.4a5.287,5.287,0,0,1,1.161,4.007c-.011.089-.021.173-.033.259l-.061.255-.057.253-.084.244-.08.246-.106.233-.106.231-.02.04-.015.024-.026.051-.058.1c-.076.134-.14.262-.224.4s-.165.271-.247.407c-.174.261-.338.515-.522.757a14.98,14.98,0,0,1-1.12,1.36,20.087,20.087,0,0,1-2.349,2.176,24.807,24.807,0,0,1-2.2,1.542c-.674.426-1.285.758-1.792,1.021s-.911.448-1.19.573-.436.181-.436.181m0,0s.144-.082.4-.242.633-.4,1.1-.714,1.027-.719,1.651-1.193,1.3-1.047,2.01-1.693a22.981,22.981,0,0,0,2.119-2.237c.174-.209.337-.43.506-.649s.334-.451.484-.69c.078-.116.157-.234.229-.358s.153-.243.224-.368.14-.245.207-.367.138-.266.208-.4l.05-.1.022-.052.016-.026c-.009.017,0,0,0,0l.006-.013.078-.187.077-.189.059-.195.057-.195.043-.2.041-.2.021-.208a4.222,4.222,0,0,0-.165-1.648,4.317,4.317,0,0,0-.8-1.472c-.091-.109-.2-.207-.29-.312s-.217-.186-.32-.278c-.107-.077-.214-.152-.321-.23l-.4-.225a4.164,4.164,0,0,0-3.286-.19,4.242,4.242,0,0,0-1.418.859l-.153.14-.138.154-.137.153-.11.154-.118.153-.116.2-.12.2-.005.013c0-.008-.015.029.005-.011l-.008.022-.025.05-.047.1a13.189,13.189,0,0,0-.677,1.586c-.1.267-.178.536-.26.8-.042.132-.073.267-.107.4s-.08.266-.108.4a22.867,22.867,0,0,0-.517,3.034c-.092.957-.14,1.841-.148,2.624s.008,1.473.037,2.037.06,1.01.088,1.313.047.465.047.465" transform="translate(-276.356 -424.086)" fill="#b56b2b"/>
                      <path id="Path_5822" data-name="Path 5822" d="M246.818,253.838a118.169,118.169,0,0,0-3.949,18.388,118.169,118.169,0,0,1,3.949-18.388" transform="translate(-170.225 -177.913)" fill="#fff"/>
                      <path id="Path_5823" data-name="Path 5823" d="M151.822,88.584a89.959,89.959,0,0,0-26.253,55.175l30.254,2.9a127.86,127.86,0,0,1,10.2-39.42,56.74,56.74,0,0,1-14.2-18.654" transform="translate(-88.01 -62.088)" fill="#56cd93"/>
                      <path id="Path_5824" data-name="Path 5824" d="M607.239,70.982A53.651,53.651,0,0,1,599.8,85.1c7.847,16.731,11.553,38.051,9.42,60.813l30.254,2.9a90.412,90.412,0,0,0-32.231-77.834" transform="translate(-420.391 -49.751)" fill="#56cd93"/>
                      <path id="Path_5825" data-name="Path 5825" d="M502.2,139.488a353.093,353.093,0,0,1-1.667,35.772l39.111,3.749c2.133-22.762-1.573-44.081-9.42-60.813A64,64,0,0,1,502.2,139.488" transform="translate(-350.817 -82.843)" fill="#f5f5f5"/>
                      <path id="Path_5826" data-name="Path 5826" d="M236.921,150.957a127.73,127.73,0,0,0-10.2,39.418l39.109,3.747c.932-9.709,2.195-19.023,3.71-27.718a68.245,68.245,0,0,1-32.623-15.447" transform="translate(-158.91 -105.804)" fill="#f5f5f5"/>
                      <path id="Path_5827" data-name="Path 5827" d="M236.914,150.949a127.86,127.86,0,0,0-10.2,39.42h0a127.732,127.732,0,0,1,10.2-39.418Z" transform="translate(-158.902 -105.799)" fill="#fff"/>
                      <path id="Path_5828" data-name="Path 5828" d="M375.54,194.542a74.91,74.91,0,0,1-14.355-1.21c-1.515,8.7-2.777,18.009-3.71,27.718l42.789,4.1a352.96,352.96,0,0,0,1.667-35.772,73.3,73.3,0,0,1-26.391,5.164" transform="translate(-250.551 -132.733)" fill="#56cd93"/>
                      <path id="Path_5829" data-name="Path 5829" d="M227.539,45.15C240.3,16.51,262.765-1.845,286.464.425A91.188,91.188,0,0,0,213.339,26.5a56.744,56.744,0,0,0,14.2,18.654" transform="translate(-149.527 0)" fill="#60e99c"/>
                      <path id="Path_5830" data-name="Path 5830" d="M457.819,1.419c18.081,1.735,33.175,15.116,42.467,34.929a53.643,53.643,0,0,0,7.443-14.122,91.148,91.148,0,0,0-49.91-20.807" transform="translate(-320.881 -0.995)" fill="#60e99c"/>
                      <path id="Path_5831" data-name="Path 5831" d="M457.819,1.419h0c8.806.846,14.228,23.943,14.443,56.221a64.007,64.007,0,0,0,28.024-21.291C490.994,16.535,475.9,3.154,457.819,1.419" transform="translate(-320.881 -0.995)" fill="#fff"/>
                      <path id="Path_5832" data-name="Path 5832" d="M319.739.976c-23.7-2.269-46.163,16.085-58.927,44.728a68.242,68.242,0,0,0,32.623,15.447c6.244-35.792,16.8-61.084,26.3-60.175" transform="translate(-182.801 -0.552)" fill="#fff"/>
                      <path id="Path_5833" data-name="Path 5833" d="M457.816,1.419h0Z" transform="translate(-320.878 -0.995)" fill="#4014c5"/>
                      <path id="Path_5834" data-name="Path 5834" d="M319.739.976h0c-23.7-2.27-46.162,16.085-58.925,44.726v0c12.764-28.643,35.226-47,58.927-44.728" transform="translate(-182.801 -0.551)" fill="#4014c5"/>
                      <path id="Path_5835" data-name="Path 5835" d="M396.182,1.363h0c-9.5-.91-20.061,24.383-26.3,60.175a74.914,74.914,0,0,0,14.355,1.21,73.32,73.32,0,0,0,26.392-5.164c-.215-32.277-5.636-55.375-14.442-56.221" transform="translate(-259.244 -0.939)" fill="#60e99c"/>
                      <path id="Path_5836" data-name="Path 5836" d="M136.921,258.275c-6.807.937-10.838,2.362-11.236,4.248,3-.108,6.323-.164,9.942-.171q.595-2.065,1.295-4.077" transform="translate(-88.091 -181.022)" fill="#bfbfbf"/>
                      <path id="Path_5837" data-name="Path 5837" d="M708.372,315.307c-.636-1.789-4.225-3.758-10.127-5.767q.276,1.916.463,3.857c3.747,4.861,6.7,1.277,9.664,1.91" transform="translate(-489.393 -216.954)" fill="#bfbfbf"/>
                      <path id="Path_5838" data-name="Path 5838" d="M186.331,259.915q.748-3.1,1.649-6.089a208.785,208.785,0,0,0-27.764,1.327q-.7,2.012-1.3,4.078c8.046,5.088,17.769,8.367,27.41.685" transform="translate(-111.386 -177.901)" fill="#32965d"/>
                      <path id="Path_5839" data-name="Path 5839" d="M635.427,297.992q-.186-1.939-.463-3.857a208.849,208.849,0,0,0-27.006-6.574q.308,3,.451,6.089c9.633,6.663,17.885,8.074,27.018,4.342" transform="translate(-426.112 -201.549)" fill="#32965d"/>
                      <path id="Path_5840" data-name="Path 5840" d="M528.323,281.538q-.144-3.08-.451-6.089c-9.967-1.875-21.474-3.64-33.961-5.169q-.066,3.413-.216,6.947c11.346,9.068,20.122,12.741,34.628,4.311" transform="translate(-346.026 -189.437)" fill="#bfbfbf"/>
                      <path id="Path_5841" data-name="Path 5841" d="M286.534,255.213c-12.55-.87-24.186-1.323-34.325-1.376q-.9,2.99-1.649,6.09c7,9.574,21.695,10.061,34.855,2.207q.529-3.525,1.119-6.921" transform="translate(-175.615 -177.912)" fill="#bfbfbf"/>
                      <path id="Path_5842" data-name="Path 5842" d="M387.286,273.11c5.733.548,9.507,1.963,17.671-4.184q.145-3.53.216-6.946c-5.954-.728-12.129-1.4-18.458-2.011s-12.526-1.118-18.508-1.531q-.59,3.394-1.119,6.921c6.37,6.427,13.019,7.064,20.2,7.752" transform="translate(-257.288 -181.137)" fill="#32965d"/>
                      <path id="Path_5843" data-name="Path 5843" d="M153.772,278.091c6.128,2.263,15.312,4.6,26.65,6.8a120.494,120.494,0,0,1,2.3-12.3c-10.289-.467-19.544-.7-27.41-.685q-.886,3.044-1.54,6.186" transform="translate(-107.777 -190.576)" fill="#3aa06a"/>
                      <path id="Path_5844" data-name="Path 5844" d="M609.322,307.918a122.062,122.062,0,0,1-.062,12.713c11.543-.006,21-.554,27.444-1.612-.023-2.273-.152-4.527-.364-6.758-7.872-1.451-16.973-2.918-27.018-4.342" transform="translate(-427.024 -215.817)" fill="#3aa06a"/>
                      <path id="Path_5845" data-name="Path 5845" d="M491.273,293.5c-.216,5.085-.559,10.337-1.034,15.707,13.107.89,25.2,1.324,35.6,1.317a121.894,121.894,0,0,0,.062-12.713c-10.614-1.505-22.274-2.964-34.628-4.311" transform="translate(-343.604 -205.714)" fill="#e5e5e5"/>
                      <path id="Path_5846" data-name="Path 5846" d="M278.064,291.96c.548-5.342,1.205-10.544,1.96-15.557-12.473-.988-24.22-1.725-34.855-2.207a120.572,120.572,0,0,0-2.3,12.3c10.207,1.981,22.158,3.852,35.2,5.466" transform="translate(-170.225 -192.181)" fill="#e5e5e5"/>
                      <path id="Path_5847" data-name="Path 5847" d="M383.5,283.416c-7.172-.688-14.2-1.3-21.006-1.841-.754,5.013-1.412,10.215-1.96,15.557,6.237.772,12.72,1.486,19.376,2.123s13.153,1.17,19.419,1.594c.475-5.37.818-10.621,1.034-15.707q-8.243-.9-16.863-1.726" transform="translate(-252.695 -197.353)" fill="#3aa06a"/>
                      <path id="Path_5848" data-name="Path 5848" d="M396.32,402.75l-.7-.455L467.1,292.878l.872.187Z" transform="translate(-277.288 -205.275)" fill="#c48955"/>
                      <path id="Path_5849" data-name="Path 5849" d="M396.467,429.672l-.583-.6,99.256-97.893.8.458Z" transform="translate(-277.471 -232.124)" fill="#b56b2b"/>
                      <path id="Path_5850" data-name="Path 5850" d="M396.318,387.644l-.8-.223L428,271.486l.831.108Z" transform="translate(-277.212 -190.282)" fill="#b56b2b"/>
                      <path id="Path_5851" data-name="Path 5851" d="M280.089,375.378,230.806,253.936l.942-.014L280.86,375.064Z" transform="translate(-161.77 -177.971)" fill="#c48955"/>
                      <path id="Path_5852" data-name="Path 5852" d="M208.407,392.966,128.471,278.9l1.444.6L209.09,392.488Z" transform="translate(-90.044 -195.477)" fill="#b56b2b"/>
                      <path id="Path_5853" data-name="Path 5853" d="M372.009,378.005,362,257.844l.855.057,9.986,120.034Z" transform="translate(-253.723 -180.721)" fill="#b56b2b"/>
                      <path id="Path_5854" data-name="Path 5854" d="M295.267,709.792l-.82-.188,5.509-58.69,51.4-9.986,2,.432-51.531,9.9Z" transform="translate(-206.375 -449.22)" fill="#b56b2b"/>
                      <path id="Path_5855" data-name="Path 5855" d="M133.988,278.093q.655-3.141,1.54-6.186c-3.619.007-6.944.063-9.942.171a1.164,1.164,0,0,0-.035.17c-.171,1.787,2.872,3.787,8.436,5.845" transform="translate(-87.993 -190.577)" fill="#e5e5e5"/>
                      <path id="Path_5856" data-name="Path 5856" d="M700.158,329.192c5.865-.963,9.225-2.348,9.4-4.136a1.627,1.627,0,0,0-.1-.712q-4.448-.949-9.664-1.91c.213,2.231.341,4.485.364,6.758" transform="translate(-490.479 -225.991)" fill="#e5e5e5"/>
                      <path id="Path_5857" data-name="Path 5857" d="M307.945,642.244l-2.293.251,59.657,10.972,1.112-.212Z" transform="translate(-214.229 -450.143)" fill="#b56b2b"/>
                      <path id="Path_5858" data-name="Path 5858" d="M492.388,679.27l-5.425,58.669.865-.21,5.673-58.67Z" transform="translate(-341.307 -475.946)" fill="#96571b"/>
                      <path id="Path_5859" data-name="Path 5859" d="M294.615,759.433a7.6,7.6,0,1,1-6.846-8.288,7.6,7.6,0,0,1,6.846,8.288" transform="translate(-195.859 -526.445)" fill="#f2f2f2"/>
                      <path id="Path_5860" data-name="Path 5860" d="M285.173,765.637a8.073,8.073,0,1,1,8.809-7.266,8.081,8.081,0,0,1-8.809,7.266m1.483-15.478a7.477,7.477,0,1,0,6.733,8.157,7.484,7.484,0,0,0-6.733-8.157" transform="translate(-194.757 -525.337)" fill="#cf3f0a"/>
                      <path id="Path_5861" data-name="Path 5861" d="M317.54,766.206a8.178,8.178,0,0,1-3.965-1.36,8.4,8.4,0,0,0-7.608-.729,8.995,8.995,0,0,1-8.119-.778,7.59,7.59,0,0,0-3.719-1.28.3.3,0,1,1,.056-.593,8.187,8.187,0,0,1,3.969,1.361,8.409,8.409,0,0,0,7.607.73,9.007,9.007,0,0,1,8.124.777,7.592,7.592,0,0,0,3.716,1.28.3.3,0,1,1-.06.592" transform="translate(-205.963 -533.703)" fill="#cf3f0a"/>
                      <path id="Path_5862" data-name="Path 5862" d="M315.281,775.907a8.217,8.217,0,0,1-3.969-1.362,8.4,8.4,0,0,0-7.61-.728,9,9,0,0,1-8.121-.78,7.612,7.612,0,0,0-3.715-1.279.3.3,0,0,1-.269-.325.3.3,0,0,1,.326-.267,8.2,8.2,0,0,1,3.965,1.361,8.406,8.406,0,0,0,7.611.73,9,9,0,0,1,8.121.777,7.571,7.571,0,0,0,3.717,1.281.3.3,0,1,1-.056.592" transform="translate(-204.377 -540.502)" fill="#cf3f0a"/>
                      <path id="Path_5863" data-name="Path 5863" d="M313.012,785.61a8.2,8.2,0,0,1-3.967-1.359,8.395,8.395,0,0,0-7.608-.73,9.023,9.023,0,0,1-8.127-.78,7.563,7.563,0,0,0-3.712-1.278.3.3,0,1,1,.057-.592,8.18,8.18,0,0,1,3.967,1.36,8.383,8.383,0,0,0,7.605.731,9,9,0,0,1,8.122.777,7.617,7.617,0,0,0,3.717,1.281.3.3,0,0,1,.27.326.294.294,0,0,1-.325.264" transform="translate(-202.786 -547.304)" fill="#cf3f0a"/>
                    </g>
                  </g>
                </g>
            </svg>
         {{-- <div class="d-flex justify-content-center" style="margin-top: -102px;">
            <div class="row track-row">
                <div class=" col-sm-6 col-md-6 d-flex justify-content-center">
                    <small>Track order</small>
                </div>
                <div class=" col-sm-6 col-md-6 d-flex justify-content-center">
                    <small>ID#25425233254</small>
                </div>
                <hr>
            </div>
        </div> --}}
        <div class="container-fluid">
            <div class="row track-row">
                <div class="col-sm-6"><small>Track order</small></div>
                <div class="col-sm-6"><small>ID#25425233254</small></div>

            </div>
            <hr>

            <div class="step-line mt-6">

                <div class="bg-done-first-step">
                    <small class="step-line-text">Task is assigned</small>
                    <img class="task-img" src="{{ asset('frontend/assets/images/Icons/task white.svg') }}" alt="">
                </div>
                <div>
                    <small class="step-line-text">Task is in the progress</small>
                    <img class="task-img" src="{{ asset('frontend/assets/images/Icons/time.svg') }}" alt="">
                </div>
                <div>
                    <small class="step-line-text" style="margin-left: -40px;">Order collected</small>
                    <img class="task-img" src="{{ asset('frontend/assets/images/Icons/tik.png') }}" alt="">
                </div>
                <div>
                    <small class="step-line-text" style="margin-left: -40px;">Order is delivered</small>
                    <img class="task-img" src="{{ asset('frontend/assets/images/Icons/tik.png') }}" alt="">
                </div>
            </div>
            <div class="chat mt-3">
                <div class="text" style="margin-left:131px;"><small style="font-size: 8px; color:gray;">(you can ask for product <br> image in the chat box)</small></div>

                <a href="" class="btn btn-sm btn-success chat-btn mt-2">            Chat   <i class="fa fa-comments"></i></a>
            </div>
             <div class="redirect mt-4 mb-4">
                 <a href="" class="btn  btn-success home-btn"><i class="fa fa-home"></i>    Home</a>
                 <a href="" data-toggle="modal" data-target="#paymentReleaseModalId" id="releasePaymentId" class="btn  btn-success release-btn"><i class="fa fa-book"></i>    Release Payment </a>
             </div>


        </div>


            {{-- <div style="padding-left: 8px; padding-right: 8px;">
                <div class="step-line">
                    <div class="bg-done-first-step">
                        <small class="step-line-text">Task is assigned</small>
                        <img class="task-img" src="{{ asset('frontend/assets/images/Icons/task white.svg') }}" alt="">
                    </div>
                    <div>
                        <small class="step-line-text">Task is in the progress</small>
                        <img class="task-img" src="{{ asset('frontend/assets/images/Icons/time.svg') }}" alt="">
                    </div>
                    <div>
                        <small class="step-line-text" style="margin-left: -40px;">Order collected</small>
                        <img class="task-img" src="{{ asset('frontend/assets/images/Icons/tik.png') }}" alt="">
                    </div>
                    <div>
                        <small class="step-line-text" style="margin-left: -40px;">Order is delivered</small>
                        <img class="task-img" src="{{ asset('frontend/assets/images/Icons/tik.png') }}" alt="">
                    </div>
                </div>
            </div> --}}

       </div>
    </div>
</div>


