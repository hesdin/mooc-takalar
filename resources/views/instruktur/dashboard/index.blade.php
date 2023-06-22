@extends('app.index')


@section('content')
  <div class="container-fluid" id="kt_content_container">
    <!--begin::Row-->
    <div class="row">
      <div class="col-xl-8">
        <!--begin::Statistics Widget 2-->
        <div class="card card-xl-stretch mb-xl-8">
          <!--begin::Body-->
          <div class="card-body d-flex align-items-center pt-3 pb-0">
            <div class="d-flex flex-column flex-grow-1 py-2 py-lg-13 me-2">
              <a href="#" class="fw-bolder text-dark display-6 mb-2 text-hover-primary">Hello
              </a>
              <span class="text-dark fs-5">Instruktur <span
                  class="text-dark fw-bolder">{{ Str::ucfirst(Auth::guard('instruktur')->user()->name) }}</span></span>
            </div>
            <svg class="animated w-50" id="freepik_stories-mathematics" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 467.92 408.56" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns:svgjs="http://svgjs.com/svgjs">
              <style>
                svg#freepik_stories-mathematics:not(.animated) .animable {
                  opacity: 0;
                }

                svg#freepik_stories-mathematics.animated #freepik--background-simple--inject-26 {
                  animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                  animation-delay: 0s;
                }

                svg#freepik_stories-mathematics.animated #freepik--Character--inject-26 {
                  animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                  animation-delay: 0s;
                }

                svg#freepik_stories-mathematics.animated #freepik--Graphics--inject-26 {
                  animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                  animation-delay: 0s;
                }

                @keyframes lightSpeedRight {
                  from {
                    transform: translate3d(50%, 0, 0) skewX(-20deg);
                    opacity: 0;
                  }

                  60% {
                    transform: skewX(10deg);
                    opacity: 1;
                  }

                  80% {
                    transform: skewX(-2deg);
                  }

                  to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
                  }
                }

                @keyframes zoomIn {
                  0% {
                    opacity: 0;
                    transform: scale(0.5);
                  }

                  100% {
                    opacity: 1;
                    transform: scale(1);
                  }
                }

                @keyframes slideLeft {
                  0% {
                    opacity: 0;
                    transform: translateX(-30px);
                  }

                  100% {
                    opacity: 1;
                    transform: translateX(0);
                  }
                }

                .animator-hidden {
                  display: none;
                }
              </style>
              <g id="freepik--background-simple--inject-26" class="animable"
                style="transform-origin: 245.531px 245.616px;">
                <g id="elwqxbg20675c">
                  <path
                    d="M465.62,254.08c-5.47-43.4-22.64-86.58-45-121.88C391.57,86.27,345.12,49.42,290,42.59c-39-4.83-83.46,7.48-113.62,33.89A117.45,117.45,0,0,0,143,124.68c-7.38,20.27-10.53,43.49-26.43,59.4-19.12,19.12-45.51,28.26-65.26,46.51-43.78,40.46-31,113.55,5.88,153.92C90.41,420.85,139.67,414.13,184,421c33.62,5.2,62.72,24.16,97.09,27.74,49.71,5.19,101-11.45,137.5-45.82C461,362.88,472.45,308.31,465.62,254.08Z"
                    style="fill: rgb(64, 123, 255); transform-origin: 245.531px 245.616px;" class="animable"></path>
                </g>
                <g id="elfxyc3o2x2f">
                  <path
                    d="M465.62,254.08c-5.47-43.4-22.64-86.58-45-121.88C391.57,86.27,345.12,49.42,290,42.59c-39-4.83-83.46,7.48-113.62,33.89A117.45,117.45,0,0,0,143,124.68c-7.38,20.27-10.53,43.49-26.43,59.4-19.12,19.12-45.51,28.26-65.26,46.51-43.78,40.46-31,113.55,5.88,153.92C90.41,420.85,139.67,414.13,184,421c33.62,5.2,62.72,24.16,97.09,27.74,49.71,5.19,101-11.45,137.5-45.82C461,362.88,472.45,308.31,465.62,254.08Z"
                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 245.531px 245.616px;"
                    class="animable"></path>
                </g>
              </g>
              <g id="freepik--Character--inject-26" class="animable" style="transform-origin: 247.784px 280.835px;">
                <g id="elylc5129mrac">
                  <path
                    d="M296.26,449.62,300.75,383l-4.57-41.79s-38.13,5.19-84.79-6.1l-1.22,58.87,2.75,34.54c22.37,7.6,44,17.73,68.13,20.25C286.11,449.25,291.18,449.54,296.26,449.62Z"
                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 255.46px 392.365px;"
                    class="animable"></path>
                </g>
                <g id="el20fe6eq9v92">
                  <path
                    d="M296.18,341.16s-38.13,5.19-84.79-6.1l-.15,6.89c3.83,2.83,13.82,8.43,35.22,11.11,22.3,2.79,42.29-1.85,50.56-4.23Z"
                    style="fill: rgb(112, 112, 112); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 254.13px 344.493px;"
                    class="animable"></path>
                </g>
                <g id="el5uexbzsfs6x">
                  <path
                    d="M271,353.5c1.72-.14,3.4-.31,5-.5V342.34a268.8,268.8,0,0,1-52.72-4.7l1.17,3.52v7.19c1.33.44,2.77.88,4.31,1.31l.27-8.19,42.39,3.35Z"
                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 249.64px 345.57px;"
                    class="animable"></path>
                </g>
                <g id="el575gkfbv74u">
                  <path d="M238.94,351.92q3.5.63,7.52,1.14c3.13.39,6.22.63,9.23.76l.23-6.56-16.47-2.74Z"
                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 247.43px 349.17px;"
                    class="animable"></path>
                </g>
                <g id="el1hmozz2gd81">
                  <path d="M227.86,350.92s-6.41,12.51-14.64,14"
                    style="fill: none; stroke: rgb(133, 133, 133); stroke-linecap: round; stroke-linejoin: round; transform-origin: 220.54px 357.92px;"
                    class="animable"></path>
                </g>
                <g id="elb9xy2ru1mjq">
                  <path d="M282.26,373.65a20.59,20.59,0,0,0,2,1.67"
                    style="fill: none; stroke: rgb(133, 133, 133); stroke-linecap: round; stroke-linejoin: round; transform-origin: 283.26px 374.485px;"
                    class="animable"></path>
                </g>
                <g id="eleu71ae4at9c">
                  <path d="M273.91,356.72a32.87,32.87,0,0,0,5.84,14.14"
                    style="fill: none; stroke: rgb(133, 133, 133); stroke-linecap: round; stroke-linejoin: round; transform-origin: 276.83px 363.79px;"
                    class="animable"></path>
                </g>
                <line x1="237.96" y1="394.85" x2="237.97" y2="400.09"
                  style="fill: none; stroke: rgb(133, 133, 133); stroke-linecap: round; stroke-linejoin: round; transform-origin: 237.965px 397.47px;"
                  id="elvpqgvixcdiq" class="animable"></line>
                <polyline points="225.72 354.5 237.92 365.18 237.95 391.04"
                  style="fill: none; stroke: rgb(133, 133, 133); stroke-linecap: round; stroke-linejoin: round; transform-origin: 231.835px 372.77px;"
                  id="elyealqwz6gnq" class="animable"></polyline>
                <polyline points="225.78 324.33 226.63 346.27 233.04 351.15 232.43 328.27"
                  style="fill: none; stroke: rgb(133, 133, 133); stroke-linecap: round; stroke-linejoin: round; transform-origin: 229.41px 337.74px;"
                  id="elq6ji2rmi2sr" class="animable"></polyline>
                <line x1="225.41" y1="315.16" x2="225.57" y2="319.1"
                  style="fill: none; stroke: rgb(133, 133, 133); stroke-linecap: round; stroke-linejoin: round; transform-origin: 225.49px 317.13px;"
                  id="el192nc8yf5h6" class="animable"></line>
                <g id="elgox5c42e52d">
                  <path
                    d="M256.86,221.29s-34.64,1.08-37.08,2.71-22.73,11.64-22.73,11.64,7-14.08,7-19.76-4.33-9.2-12.18-12.18-18.68,1.35-20.84,7.31-12.45,42.76-13.53,53.31,13,19.76,18.94,19.22,36.27-11.64,36.27-11.64-2.17,59.54-2.17,61.17,0,4.06,3.25,5.41,18.67,9.2,37.35,10.83,39.78-2.17,42.49-2.44,5.14-5.95,5.14-8.39S301,317.37,301,317.37L305,333.88s2.7,3,11.36,3.79,15.43-3.52,17.32-7.85,1.9-5.41,1.9-5.41S318,257.29,316.67,251.33s-1.08-6-4.87-10.28-28.42-14.07-35.18-16S256.86,221.29,256.86,221.29Z"
                    style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 246.511px 276.224px;"
                    class="animable"></path>
                </g>
                <line x1="179.97" y1="194.07" x2="168.6" y2="225.74"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 174.285px 209.905px;"
                  id="elg2l2cdk6v4r" class="animable"></line>
                <g id="el7d678x55sn5">
                  <path d="M192.45,249.17a84.28,84.28,0,0,1-.54,15.42"
                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 192.248px 256.88px;"
                    class="animable"></path>
                </g>
                <line x1="195.67" y1="230.34" x2="196.48" y2="200.84"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 196.075px 215.59px;"
                  id="eldzgececd0o9" class="animable"></line>
                <g id="elid3uq4khzm">
                  <path d="M212.75,266.76s-4.6-11.1-5.42-21.11"
                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 210.04px 256.205px;"
                    class="animable"></path>
                </g>
                <line x1="283.9" y1="275.81" x2="292.99" y2="221.73"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 288.445px 248.77px;"
                  id="el8jfzderx5y" class="animable"></line>
                <line x1="287.45" y1="255.27" x2="295.79" y2="229.43"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 291.62px 242.35px;"
                  id="elusrbzf63s8" class="animable"></line>
                <polygon
                  points="234.56 202.31 238.84 212.37 218.4 281.61 228.77 297.16 241.28 282.52 243.41 213.9 256.22 206.58 246.16 193.16 234.56 202.31"
                  style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 237.31px 245.16px;"
                  id="elc4fwwce3sr8" class="animable"></polygon>
                <g id="eloc5bpr6tve">
                  <path
                    d="M257.44,216.11s-4.88.92-5.18,2.75-4.58,5.18-5.49,12.2.3,16.77.3,16.77,9.46-4.27,11.29-4.57,7,.3,7.93,1.83,5.79,11,8.23,9.45,14-14.33,14.64-24.7-9.45-9.46-10.67-10.07S257.44,216.11,257.44,216.11Z"
                    style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 267.81px 235.41px;"
                    class="animable"></path>
                </g>
                <g id="els75fpr6013">
                  <path
                    d="M257.44,206.35s-.91,8.85-1.52,16.17-1.53,14.94,1.52,18.91,6.41,4.57,13.73-.92S282.76,230.14,284,225s3-10.68,3-10.68S272.08,218.25,257.44,206.35Z"
                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 271.149px 225.434px;"
                    class="animable"></path>
                </g>
                <g id="elwmsm53juqj">
                  <path
                    d="M257.44,206.35s-.77,7.48-1.37,14.38a15.1,15.1,0,0,0,8.14,4.55c9.86,2.08,18.76-5.33,22.38-9.65.27-.84.44-1.35.44-1.35S272.08,218.25,257.44,206.35Z"
                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 271.55px 215.995px;"
                    class="animable"></path>
                </g>
                <g id="elxf25wo0ow38">
                  <path d="M257,183.87s-1.22-4-3.66-.92-1.22,10.68.31,12.51S257,183.87,257,183.87Z"
                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 254.477px 188.708px;"
                    class="animable"></path>
                </g>
                <g id="elwmvzcq28b3e">
                  <path
                    d="M261.31,165.2s-9.36,30.63-7.95,37.16,4,17.59,14.75,19.85,20.43-6.8,23.27-10.77c0,0,7.37.85,9.36-4s4.82-9.92,2-11.06a12.79,12.79,0,0,0-4-1.13s7.94-12.48,8.51-16.74-2.27-18.44-11.35-25.25-24.39-7.65-23.54-4.53,2.84,3.4,2.84,3.4-17.87-2-19.29,2.84,6.24,7.66,6.24,7.66Z"
                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 280.268px 184.78px;"
                    class="animable"></path>
                </g>
                <g id="elvt2hczidefd">
                  <path
                    d="M298.75,195.27s7.94-12.48,8.51-16.74-2.27-18.44-11.35-25.25-24.39-7.65-23.54-4.53,2.84,3.4,2.84,3.4-17.87-2-19.29,2.84,6.24,7.66,6.24,7.66l-.85,2.55s-1.8,5.87-3.69,13l.57,0s.85-2.56,2-6.53,3.41-8.51,14.75-7.37,22.7,7.09,23.26,11.34-4.25,6-2.55,7.95,4,2.83,2.55,4.25-4.25,7.38-2.55,8.23,4.54-.57,4.54-.57h.08A6.76,6.76,0,0,0,298.75,195.27Z"
                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 281.537px 171.677px;"
                    class="animable"></path>
                </g>
                <polyline points="254.44 143.49 249.33 157.11 254.72 158.81"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 252.025px 151.15px;"
                  id="el3r5wdw0k7px" class="animable"></polyline>
                <g id="elkwbdysmu73">
                  <path d="M267.55,204.63a10.6,10.6,0,0,0,12.19-2.27"
                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 273.645px 204.001px;"
                    class="animable"></path>
                </g>
                <g id="elo6yzr1kq3d">
                  <path d="M261.31,177.68s7.09,1.13,9.07,2.27"
                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 265.845px 178.815px;"
                    class="animable"></path>
                </g>
                <g id="elg0h1aypkduh">
                  <path d="M280.6,180.23s5.1-1.7,8.51,2.56"
                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 284.855px 181.343px;"
                    class="animable"></path>
                </g>
                <g id="elimnq6w70kg">
                  <path
                    d="M265.55,184.94c-.16,1.24-.86,2.17-1.56,2.08s-1.13-1.17-1-2.42.86-2.17,1.56-2.08S265.72,183.7,265.55,184.94Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 264.276px 184.77px;" class="animable"></path>
                </g>
                <g id="elq0xfe7wd57">
                  <path
                    d="M282,189.61c-.17,1.25-.87,2.18-1.57,2.09s-1.13-1.18-1-2.42.86-2.18,1.56-2.08S282.18,188.37,282,189.61Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 280.722px 189.449px;" class="animable"></path>
                </g>
                <g id="el3qq6d5y6ct6">
                  <path
                    d="M188.66,197.48,183.79,207s0,4.33,7.31,5.68,9.74-3,9.74-3L206,195.58s4.06-2.71,4.6-5.68,0-11.91.81-16,6.77-10.28,3.79-11.1-6.22,1.36-7,5.15-2.17,8.11-2.17,8.11-2.71-3.24-3-6,1.09-4.06-.81-4.6-14.34,8.66-14.88,11.64S188.66,197.48,188.66,197.48Z"
                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 199.909px 187.784px;"
                    class="animable"></path>
                </g>
                <line x1="189.38" y1="112.05" x2="189.38" y2="135.45"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 3px; transform-origin: 189.38px 123.75px;"
                  id="elg2ucvira205" class="animable"></line>
                <g id="el0nsngucsruxo">
                  <path d="M201.65,194.23s-2.44,4.87-6.22,5.68-4.88-1.35-4.88-1.35"
                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 196.1px 197.161px;"
                    class="animable"></path>
                </g>
                <g id="elgswz0v4fwbb">
                  <path
                    d="M191.5,171.41s-1.05-.6.15-1.49,5.39-2.85,6.73-3.59,3.45,6.43,4.19,9,1.05,3.15,0,3.15-1.94,0-3.29-2.7a20.88,20.88,0,0,0-2.09-3.59l-2.55.45"
                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 197.16px 172.378px;"
                    class="animable"></path>
                </g>
                <g id="el4q11sttta65">
                  <path
                    d="M188.21,174s-1.05-.6.15-1.5,5.39-2.84,6.73-3.59,3.44,6.43,4.19,9,1.05,3.14,0,3.14-1.94,0-3.29-2.69a21.72,21.72,0,0,0-2.09-3.6l-2.55.45"
                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 193.872px 174.953px;"
                    class="animable"></path>
                </g>
                <g id="elho7t7kh0hf">
                  <path
                    d="M188.93,178.8l3,2.71s1.08,3,2.7,3.25,1.63-1.36,0-4.33-2.43-7.58-3.51-7.85-5.42,3.51-5.42,3.51l2.17,7"
                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 190.774px 178.676px;"
                    class="animable"></path>
                </g>
                <g id="elont2iukgoo">
                  <path
                    d="M202.67,163.76s-2.73,0-3,2.34,1.43,3,3.91,2.47,3.64-2.86,2.73-4.16S202.67,163.76,202.67,163.76Z"
                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 203.13px 166.17px;"
                    class="animable"></path>
                </g>
                <g id="elazrvfqdxu1n">
                  <path
                    d="M200.84,209.65l2.48-6.8c-10,3-14.62.25-16.52-1.75l-3,5.85s0,4.33,7.31,5.68S200.84,209.65,200.84,209.65Z"
                    style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 193.56px 206.995px;"
                    class="animable"></path>
                </g>
                <g id="eljbga1kidws">
                  <path
                    d="M317.84,328s-8.7.23-11.45,3.44-3,19-3,21.54,5,10.08,14.2,11.92,17-3.67,17.19-9.4,4.12-21.31,3.21-27.27-4.81-8-4.81-8"
                    style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 320.758px 342.745px;"
                    class="animable"></path>
                </g>
                <ellipse cx="299.7" cy="313.63" rx="10.78" ry="10.53"
                  style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 299.7px 313.63px;"
                  id="ely7n9rua54m9" class="animable"></ellipse>
                <g id="elhh5v9qey8ah">
                  <path
                    d="M319.91,364.86s1.14-5.05,0-8-8.71-6.88-11-6-1.15,2.52-3.21,3.44-9.86,2.06-11.46,4.12-2.75,6-5.27,10.54-5.5,6.65-2.06,6.88a7.53,7.53,0,0,0,7.1-4.36,8.61,8.61,0,0,1,3.44-3.44s-6.19,14-5.27,15.36A3.64,3.64,0,0,0,294,385s-.69,2.75.92,3.44a3.32,3.32,0,0,0,3-.23s2.06,1.6,3.21,1.6a3.86,3.86,0,0,0,2.06-.68s3.89.45,5-1.38,6.19-7.79,8.71-12.6A30.75,30.75,0,0,0,319.91,364.86Z"
                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 302.885px 370.272px;"
                    class="animable"></path>
                </g>
                <line x1="276.93" y1="343.46" x2="286.78" y2="328.79"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 281.855px 336.125px;"
                  id="elezs7e9gxpud" class="animable"></line>
                <line x1="280.83" y1="346.67" x2="291.83" y2="332.46"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 286.33px 339.565px;"
                  id="elr4570whpern" class="animable"></line>
                <line x1="286.1" y1="347.58" x2="294.8" y2="337.73"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 290.45px 342.655px;"
                  id="ellp3jzpb46k" class="animable"></line>
                <line x1="280.37" y1="326.5" x2="282.2" y2="320.32"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 281.285px 323.41px;"
                  id="eljkri4y0cv4" class="animable"></line>
              </g>
              <g id="freepik--Graphics--inject-26" class="animable animator-hidden"
                style="transform-origin: 250.001px 240.285px;">
                <g id="elp7q6dkx3e6a">
                  <path
                    d="M409.85,222.79c-1.28-.37-2.66.67-3.14,2.35s.15,3.29,1.43,3.66a1.86,1.86,0,0,0,.52.07,2.23,2.23,0,0,0,1.42-.54,3.66,3.66,0,0,0,1.21-1.89C411.77,224.76,411.14,223.15,409.85,222.79Zm.44,3.37a2.74,2.74,0,0,1-.85,1.36,1.17,1.17,0,0,1-1,.28c-.7-.2-1-1.29-.72-2.37s1-1.68,1.63-1.68l.23,0C410.27,224,410.6,225.07,410.29,226.16Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 409px 225.793px;" class="animable"></path>
                </g>
                <g id="elqw2bybo246p">
                  <path
                    d="M414.83,222.19c.48,0,.87-.52.87-1.18s-.39-1.17-.87-1.17-.87.52-.87,1.17S414.35,222.19,414.83,222.19Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 414.83px 221.015px;" class="animable"></path>
                </g>
                <g id="el5y5ngw4b5rt">
                  <path d="M415,222.94c-.48,0-.86.53-.86,1.18s.38,1.18.86,1.18.87-.53.87-1.18S415.43,222.94,415,222.94Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 415.005px 224.12px;" class="animable"></path>
                </g>
                <g id="elbnibd3khqi4">
                  <path
                    d="M425.47,213.28l-.68-.79c-.09.08-9.28,8.24-2.86,21.59l.94-.45C416.79,221,425.11,213.59,425.47,213.28Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 422.562px 223.285px;" class="animable"></path>
                </g>
                <g id="eln6r55lxwnhj">
                  <path d="M452.4,213c.07.08,7,8.78,0,20.5l.89.53c7.42-12.33,0-21.6,0-21.69Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 454.494px 223.185px;" class="animable"></path>
                </g>
                <g id="el6hzc1vs1x7s">
                  <path
                    d="M428.17,222c.29-.61.59-1.22.89-1.74a2.73,2.73,0,0,1,.34-.48,5.87,5.87,0,0,1,.93,2.78l1-.15c-.15-1-.62-3.44-1.75-3.66-.53-.09-1,.24-1.45,1L428,220a2,2,0,0,0-.68-1,1.45,1.45,0,0,0-1.44-.3c-1.34.47-2,3.05-2.11,3.57l1,.23c.23-1,.85-2.61,1.45-2.82.06,0,.19-.07.45.13a2.16,2.16,0,0,1,.47,1.83L427,222c-.92,1.94-2,4.14-3,3.93a1.5,1.5,0,0,1-1-.53.68.68,0,0,1-.06-.52l-1-.35a1.76,1.76,0,0,0,.13,1.37,2.39,2.39,0,0,0,1.75,1,2.21,2.21,0,0,0,.35,0c1.05,0,1.87-.92,2.6-2.15a2.11,2.11,0,0,0,.41,1.87,2,2,0,0,0,1.37.49,2.87,2.87,0,0,0,.64-.08,2.93,2.93,0,0,0,2-1.47l-.95-.4a2,2,0,0,1-1.31.86,1.26,1.26,0,0,1-1.1-.18c-.21-.19,0-1.48.11-2.18S428.13,222.55,428.17,222Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 426.594px 222.867px;" class="animable"></path>
                </g>
                <g id="elld3n328n0z">
                  <path
                    d="M435.53,225.69a.64.64,0,0,0-.77.3,14.07,14.07,0,0,1-1.26,1.29l-.24.22a20.39,20.39,0,0,0-.43-2.44l-1,.23a18,18,0,0,1,.47,3.19c-.46.52-.6.83-.47,1.16a.64.64,0,0,0,.63.39.74.74,0,0,0,.6-.29,1.59,1.59,0,0,0,.25-.82l.91-.89.81-.78c0,.66,0,1.63-.11,2.47l1,.09C436.28,226,435.86,225.81,435.53,225.69Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 433.921px 227.546px;" class="animable"></path>
                </g>
                <g id="elj9qnaq2n64a">
                  <path
                    d="M335.19,230.52a3.93,3.93,0,0,1-.28.47,4.31,4.31,0,0,1-.73-2.07,46,46,0,0,1-.49-6.73.52.52,0,0,0-.44-.51.52.52,0,0,0-.57.37c0,.06-1.86,6.29-3.18,8.44-.53.87-.82.89-.82.89a.58.58,0,0,1-.23-.31l-.49.18-.49.18c0,.09.35.9,1.1,1h.11c.58,0,1.14-.46,1.71-1.39a34.38,34.38,0,0,0,2.35-5.76,29.65,29.65,0,0,0,.42,3.85c.38,1.89.89,2.81,1.61,2.91.52.08,1-.28,1.35-1a47.42,47.42,0,0,0,3.4-10.94l-1-.18A46,46,0,0,1,335.19,230.52Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 333.495px 226.175px;" class="animable"></path>
                </g>
                <g id="ela1zm774n08m">
                  <path
                    d="M352.73,227.67l-.94-.39v0h-.05l-3.48-1.45-.39,1,1.17.49h-8.3v1h9.93a8.29,8.29,0,0,0-3,1.88l.81.65c.73-.91,3.3-1.89,4.22-2.19a.5.5,0,0,0,.36-.47A.51.51,0,0,0,352.73,227.67Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 346.901px 228.34px;" class="animable"></path>
                </g>
                <g id="elud9zalec4z">
                  <path
                    d="M361,232.46a1.25,1.25,0,0,1-.9-.44,15.37,15.37,0,0,1-2.25-3.79,5.4,5.4,0,0,0,1.48-1.07c1.78-1.66,2.94-3,1.59-5.58a1.36,1.36,0,0,0-1.32-.85c-.86,0-1.8,1-2.65,2.2l.06-.69-1-.09-.25,2.84a22,22,0,0,0-1,2.1,8,8,0,0,0,.28,6.66.54.54,0,0,0,.45.26l.12,0a.52.52,0,0,0,.4-.46l.5-5.75.06.12a18.11,18.11,0,0,0,2.76,4.82,2.21,2.21,0,0,0,1.69.78,3.65,3.65,0,0,0,2.32-1.3l-.8-.66A2.58,2.58,0,0,1,361,232.46Zm-5.76-1.9a7.1,7.1,0,0,1,.18-2.09ZM357,227l-.13,0a.53.53,0,0,0-.29.19l.17-1.95c1.1-2.07,2.31-3.47,2.92-3.51.05,0,.18,0,.35.3.92,1.75.46,2.62-1.39,4.35a4,4,0,0,1-1.18.86A.52.52,0,0,0,357,227Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 358.753px 227.369px;" class="animable"></path>
                </g>
                <g id="elqrzpbvwfr08">
                  <path
                    d="M380.1,226.3a7.81,7.81,0,0,1,0-2.84,25.59,25.59,0,0,0,.13-4c-.13-1.64-.57-2.54-1.36-2.74s-1.93.58-3.07,2.38a13.35,13.35,0,0,0-1.28,2.79v-5.61h-1v10.3a.52.52,0,0,0,1,.05s.5-4.37,2.15-7c1.05-1.65,1.73-2,1.94-1.93s.48.47.58,1.81a23.66,23.66,0,0,1-.13,3.87c-.19,2.13-.32,3.68.79,3.92a1.54,1.54,0,0,0,.3,0c1.33,0,2.17-2,2.27-2.21l-1-.39C381.22,225.32,380.55,226.38,380.1,226.3Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 377.97px 221.794px;" class="animable"></path>
                </g>
                <g id="elx36khjqsnlg">
                  <path
                    d="M392.64,222.13a.53.53,0,0,0-.23-.49l-5.58-3.85-.59.86,4.78,3.29-4.8,1.88.38,1,5.71-2.24A.53.53,0,0,0,392.64,222.13Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 389.431px 221.305px;" class="animable"></path>
                </g>
                <g id="ely94w8n7iabs">
                  <path d="M386.77,227.18l.77.69s2.83-3.15,5.64-2.8l.12-1C390,223.65,386.9,227,386.77,227.18Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 390.035px 225.952px;" class="animable"></path>
                </g>
                <g id="elgr0zcktxjh7">
                  <path
                    d="M403.52,224.69a21,21,0,0,1-.08-2.37c0-1.65-.08-3-.95-3.37-.66-.24-1.43.22-2.57,1.54a17.71,17.71,0,0,0-2.12,3l-.07-4.07-1,0,.12,6.46a.52.52,0,0,0,.46.5h.06a.51.51,0,0,0,.5-.38,14,14,0,0,1,2.87-4.88c1.06-1.23,1.42-1.24,1.41-1.25s.29.52.29,2.4c0,2.18,0,3.38.8,3.59.61.15,1.14-.36,2-2l-.9-.5A9.72,9.72,0,0,1,403.52,224.69Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 400.985px 222.635px;" class="animable"></path>
                </g>
                <rect x="419.72" y="181.85" width="4.34" height="1.04"
                  style="fill: rgb(38, 50, 56); transform-origin: 421.89px 182.37px;" id="el3z1mm1z302r"
                  class="animable"></rect>
                <g id="elaxsdub4e2hu">
                  <path
                    d="M450.36,219.74a1.26,1.26,0,0,0-1-.67c-1.34-.11-3.19,1.83-3.67,3.41a2.2,2.2,0,0,0,1,2.77,2.81,2.81,0,0,0,2.38.29,2.17,2.17,0,0,0,.46-.22,24.36,24.36,0,0,1-1.58,5.23c-1.52,3.61-2.31,3.69-2.33,3.69s-.52-.6-.52-2.74h-1c0,2.31.45,3.57,1.35,3.76l.23,0c.67,0,1.7-.64,3.26-4.32a25,25,0,0,0,1.85-6.93,2.89,2.89,0,0,0,.26-.53l-.21-.09A7,7,0,0,0,450.36,219.74Zm-.57,3.93a2.29,2.29,0,0,1-1.05.9,1.8,1.8,0,0,1-1.52-.23c-.21-.11-.85-.47-.52-1.56.41-1.37,1.9-2.68,2.55-2.68h0a.38.38,0,0,1,.18.18A6.61,6.61,0,0,1,449.79,223.67Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 447.575px 227.163px;" class="animable"></path>
                </g>
                <g id="ele34zxvqllds">
                  <path
                    d="M460.84,223.21l6.43-5-.63-.82-7.57,5.83a.51.51,0,0,0-.17.6.52.52,0,0,0,.52.33s3.43-.2,4.61,1.63l.88-.57A5.49,5.49,0,0,0,460.84,223.21Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 463.067px 221.585px;" class="animable"></path>
                </g>
                <g id="el8wsaipejktf">
                  <path
                    d="M473.49,224.86c-1.24.83-3.72,1.29-4.83.63a1.2,1.2,0,0,1-.57-1.27c.16-1.88,2.12-2.48,3.14-2.67a4.08,4.08,0,0,0,.69-.09.53.53,0,0,0,.39-.59.55.55,0,0,0-.55-.44c-.19,0-.41,0-.65.08a1.7,1.7,0,0,1-1.43-.72,1.55,1.55,0,0,1,.39-1.85,1.27,1.27,0,0,1,1-.54c.71,0,1.4.9,1.61,1.23l.88-.56a3.73,3.73,0,0,0-2.41-1.71,2.27,2.27,0,0,0-1.9.9,2.54,2.54,0,0,0-.49,3.07,2.41,2.41,0,0,0,.65.7,3.74,3.74,0,0,0-2.39,3.11,2.17,2.17,0,0,0,1.08,2.24,3.88,3.88,0,0,0,2,.47,7.78,7.78,0,0,0,3.94-1.12Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 470.516px 221.605px;" class="animable"></path>
                </g>
                <g id="ell5yzcu5s1n">
                  <path
                    d="M106.54,212.07c-1.28-.37-2.66.67-3.14,2.35s.15,3.29,1.43,3.66a1.86,1.86,0,0,0,.52.07,2.23,2.23,0,0,0,1.42-.54,3.66,3.66,0,0,0,1.21-1.89C108.46,214,107.83,212.43,106.54,212.07Zm.44,3.37a2.74,2.74,0,0,1-.85,1.36,1.17,1.17,0,0,1-1,.28c-.7-.2-1-1.28-.72-2.37s1-1.68,1.63-1.68a.66.66,0,0,1,.23,0C107,213.27,107.29,214.35,107,215.44Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 105.69px 215.073px;" class="animable"></path>
                </g>
                <g id="el65pxe9ok5om">
                  <path
                    d="M111.52,211.47c.48,0,.87-.52.87-1.17s-.39-1.18-.87-1.18-.87.52-.87,1.18S111,211.47,111.52,211.47Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 111.52px 210.295px;" class="animable"></path>
                </g>
                <g id="elbw7di2hav4h">
                  <path
                    d="M111.64,212.22c-.48,0-.86.53-.86,1.18s.38,1.18.86,1.18.87-.53.87-1.18S112.12,212.22,111.64,212.22Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 111.645px 213.4px;" class="animable"></path>
                </g>
                <g id="el0o2zwe36c5w">
                  <path
                    d="M122.16,202.56l-.68-.79c-.09.09-9.28,8.24-2.86,21.6l.94-.45C113.48,210.29,121.8,202.87,122.16,202.56Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 119.252px 212.57px;" class="animable"></path>
                </g>
                <g id="elhbmmeqgw3ll">
                  <path d="M149.09,202.25c.07.08,7,8.79,0,20.5l.89.53c7.42-12.33,0-21.6,0-21.69Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 151.184px 212.435px;" class="animable"></path>
                </g>
                <g id="elyzd55lag6dm">
                  <path
                    d="M124.86,211.24c.29-.61.59-1.22.89-1.74a2.19,2.19,0,0,1,.34-.48,5.87,5.87,0,0,1,.93,2.78l1-.15c-.15-1-.62-3.44-1.75-3.65-.53-.1-1,.23-1.45,1l-.16.32a2,2,0,0,0-.68-1,1.45,1.45,0,0,0-1.44-.3c-1.34.48-2,3.06-2.11,3.57l1,.23c.23-1,.85-2.61,1.45-2.82.06,0,.19-.07.45.13a2.17,2.17,0,0,1,.47,1.83l-.12.27c-.92,1.94-2,4.14-3,3.93a1.46,1.46,0,0,1-1-.53.68.68,0,0,1-.06-.52l-1-.35a1.76,1.76,0,0,0,.13,1.37,2.39,2.39,0,0,0,1.75,1,1.45,1.45,0,0,0,.35,0c1,0,1.87-.92,2.6-2.15a2.08,2.08,0,0,0,.41,1.87,2,2,0,0,0,1.37.49,2.87,2.87,0,0,0,.64-.08,2.94,2.94,0,0,0,2-1.46l-.95-.41a2,2,0,0,1-1.31.86,1.26,1.26,0,0,1-1.1-.18c-.21-.19,0-1.48.11-2.18S124.82,211.83,124.86,211.24Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 123.279px 212.142px;" class="animable"></path>
                </g>
                <g id="elfcmcyv72som">
                  <path
                    d="M132.22,215a.64.64,0,0,0-.77.3,14.07,14.07,0,0,1-1.26,1.29l-.24.22a20.39,20.39,0,0,0-.43-2.44l-1,.23a18,18,0,0,1,.47,3.19c-.46.52-.6.83-.47,1.16a.64.64,0,0,0,.63.4.75.75,0,0,0,.6-.3,1.59,1.59,0,0,0,.25-.82l.91-.89.81-.78c0,.66,0,1.63-.11,2.47l1,.09C133,215.25,132.55,215.1,132.22,215Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 130.617px 216.861px;" class="animable"></path>
                </g>
                <g id="elm6adhj3t54">
                  <path
                    d="M31.88,219.81a3.36,3.36,0,0,1-.28.46,4.31,4.31,0,0,1-.73-2.07,45.86,45.86,0,0,1-.49-6.72.53.53,0,0,0-.44-.52.52.52,0,0,0-.57.37c0,.06-1.86,6.29-3.18,8.44-.53.87-.82.89-.82.89a.59.59,0,0,1-.23-.3l-.49.17-.49.18a1.48,1.48,0,0,0,1.1,1h.11c.58,0,1.14-.46,1.71-1.39a34,34,0,0,0,2.35-5.76,29.65,29.65,0,0,0,.42,3.85c.38,1.89.89,2.82,1.61,2.91.52.08,1-.28,1.35-1a47.42,47.42,0,0,0,3.4-10.94l-1-.18A46.32,46.32,0,0,1,31.88,219.81Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 30.185px 215.455px;" class="animable"></path>
                </g>
                <g id="eljxns4f22j1">
                  <path
                    d="M49.42,217l-.94-.39v0h0L45,215.09l-.39,1,1.17.49h-8.3v1h9.93a8.3,8.3,0,0,0-3,1.89l.81.64c.73-.91,3.3-1.89,4.22-2.18a.52.52,0,0,0,0-1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 43.6486px 217.6px;" class="animable"></path>
                </g>
                <g id="el9omfux0nilp">
                  <path
                    d="M57.7,221.74a1.21,1.21,0,0,1-.9-.44,15.37,15.37,0,0,1-2.25-3.79A5.33,5.33,0,0,0,56,216.45c1.78-1.67,2.94-3,1.59-5.59A1.38,1.38,0,0,0,56.3,210c-.86.05-1.8,1-2.65,2.2l.06-.69-1-.09-.25,2.84a22,22,0,0,0-1,2.1,8,8,0,0,0,.28,6.66.54.54,0,0,0,.45.26l.11,0a.52.52,0,0,0,.41-.46l.5-5.75.06.12A18.11,18.11,0,0,0,56,222a2.17,2.17,0,0,0,1.69.78,3.61,3.61,0,0,0,2.32-1.3l-.8-.66A2.58,2.58,0,0,1,57.7,221.74Zm-5.76-1.89a7.14,7.14,0,0,1,.18-2.1Zm1.75-3.56-.13,0a.53.53,0,0,0-.29.19l.17-1.94c1.1-2.07,2.31-3.48,2.92-3.52,0,0,.18,0,.35.31.92,1.74.46,2.61-1.39,4.34a3.82,3.82,0,0,1-1.18.86A.52.52,0,0,0,53.69,216.29Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 55.4381px 216.64px;" class="animable"></path>
                </g>
                <g id="elvnqymuqwha">
                  <path
                    d="M76.79,215.58a7.76,7.76,0,0,1,0-2.83,25.72,25.72,0,0,0,.13-4.05c-.13-1.64-.57-2.54-1.36-2.73s-1.93.57-3.07,2.37a12.86,12.86,0,0,0-1.28,2.79v-5.61h-1v10.3a.52.52,0,0,0,1,.06s.5-4.38,2.15-7c1-1.65,1.73-2,1.94-1.93s.48.47.58,1.81a23.66,23.66,0,0,1-.13,3.87c-.19,2.14-.32,3.68.79,3.92a1,1,0,0,0,.3,0c1.32,0,2.17-2,2.27-2.21l-1-.39C77.91,214.6,77.24,215.66,76.79,215.58Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 74.66px 211.041px;" class="animable"></path>
                </g>
                <g id="elf7kdjteuj0t">
                  <path
                    d="M89.33,211.41a.53.53,0,0,0-.23-.49l-5.58-3.84-.59.85,4.78,3.29-4.8,1.88.38,1L89,211.83A.53.53,0,0,0,89.33,211.41Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 86.1213px 210.59px;" class="animable"></path>
                </g>
                <g id="el4spgdydyiyh">
                  <path d="M83.46,216.47l.77.69s2.83-3.16,5.64-2.81l.12-1C86.66,212.93,83.59,216.32,83.46,216.47Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 86.725px 215.237px;" class="animable"></path>
                </g>
                <g id="eldxge8653fr6">
                  <path
                    d="M100.21,214a21,21,0,0,1-.08-2.37c0-1.65-.08-3-.95-3.36-.66-.25-1.43.21-2.57,1.53a17.71,17.71,0,0,0-2.12,3l-.07-4.07-1,0,.12,6.45a.52.52,0,0,0,.46.5H94a.52.52,0,0,0,.5-.39,14,14,0,0,1,2.87-4.88c1.06-1.23,1.42-1.24,1.41-1.25s.29.52.29,2.4c0,2.18,0,3.38.8,3.59.61.15,1.14-.36,2-2l-.9-.51A9.72,9.72,0,0,1,100.21,214Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 97.645px 211.942px;" class="animable"></path>
                </g>
                <rect x="116.41" y="171.13" width="4.34" height="1.04"
                  style="fill: rgb(38, 50, 56); transform-origin: 118.58px 171.65px;" id="el2l5btlp59r5"
                  class="animable"></rect>
                <g id="elh1r9cpbfqwr">
                  <path
                    d="M147.05,209a1.28,1.28,0,0,0-1-.68c-1.34-.11-3.19,1.83-3.67,3.41a2.22,2.22,0,0,0,1,2.78,2.85,2.85,0,0,0,2.38.28,2.17,2.17,0,0,0,.46-.22,24.6,24.6,0,0,1-1.58,5.24c-1.52,3.6-2.31,3.68-2.33,3.68s-.52-.6-.52-2.74h-1c0,2.31.45,3.58,1.35,3.76l.23,0c.67,0,1.7-.64,3.26-4.32a25,25,0,0,0,1.85-6.93,2.89,2.89,0,0,0,.26-.53l-.21-.08A7,7,0,0,0,147.05,209Zm-.57,3.92a2.29,2.29,0,0,1-1,.9,1.83,1.83,0,0,1-1.52-.22c-.21-.12-.85-.47-.52-1.57.41-1.37,1.9-2.68,2.55-2.68h0c.05,0,.12.07.18.17A6.61,6.61,0,0,1,146.48,213Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 144.265px 216.413px;" class="animable"></path>
                </g>
                <g id="eldhg2mr7dav">
                  <path
                    d="M157.53,212.49l6.43-5-.63-.82-7.57,5.83a.51.51,0,0,0-.17.6.52.52,0,0,0,.52.33s3.43-.2,4.61,1.63l.88-.57A5.49,5.49,0,0,0,157.53,212.49Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 159.757px 210.865px;" class="animable"></path>
                </g>
                <g id="elctdgwh5dqxo">
                  <path
                    d="M170.18,214.15c-1.24.83-3.72,1.28-4.83.62a1.2,1.2,0,0,1-.57-1.27c.16-1.88,2.12-2.48,3.14-2.67a2.72,2.72,0,0,0,.69-.09.52.52,0,0,0-.16-1,5.57,5.57,0,0,0-.65.07,1.68,1.68,0,0,1-1.43-.72,1.55,1.55,0,0,1,.39-1.85,1.27,1.27,0,0,1,1-.54c.71,0,1.4.9,1.61,1.23l.88-.56a3.72,3.72,0,0,0-2.41-1.7,2.24,2.24,0,0,0-1.9.89,2.54,2.54,0,0,0-.49,3.07,2.29,2.29,0,0,0,.65.7,3.74,3.74,0,0,0-2.39,3.11,2.2,2.2,0,0,0,1.08,2.25,4,4,0,0,0,2,.46,7.78,7.78,0,0,0,3.94-1.12Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 167.207px 210.91px;" class="animable"></path>
                </g>
                <rect x="14.92" y="204.21" width="0.95" height="4.76"
                  style="fill: rgb(38, 50, 56); transform-origin: 15.395px 206.59px;" id="elbh0c69senh"
                  class="animable"></rect>
                <rect x="14.92" y="250.45" width="0.95" height="8.3"
                  style="fill: rgb(38, 50, 56); transform-origin: 15.395px 254.6px;" id="els56h590hkc"
                  class="animable"></rect>
                <rect x="14.92" y="267.05" width="0.95" height="4.76"
                  style="fill: rgb(38, 50, 56); transform-origin: 15.395px 269.43px;" id="elsnmdm52d24o"
                  class="animable"></rect>
                <rect x="61.09" y="204.21" width="0.95" height="4.76"
                  style="fill: rgb(38, 50, 56); transform-origin: 61.565px 206.59px;" id="elo57sw1tufvj"
                  class="animable"></rect>
                <rect x="61.09" y="217.27" width="0.95" height="8.3"
                  style="fill: rgb(38, 50, 56); transform-origin: 61.565px 221.42px;" id="el2hopdw0y68g"
                  class="animable"></rect>
                <rect x="61.09" y="250.45" width="0.95" height="8.3"
                  style="fill: rgb(38, 50, 56); transform-origin: 61.565px 254.6px;" id="elx7gl3tmw4s"
                  class="animable"></rect>
                <rect x="61.09" y="267.05" width="0.95" height="4.76"
                  style="fill: rgb(38, 50, 56); transform-origin: 61.565px 269.43px;" id="elyc52icmkay"
                  class="animable"></rect>
                <rect x="117.26" y="186.44" width="0.95" height="4.76"
                  style="fill: rgb(38, 50, 56); transform-origin: 117.735px 188.82px;" id="elen3ajvke8pf"
                  class="animable"></rect>
                <rect x="117.26" y="250.19" width="0.95" height="8.43"
                  style="fill: rgb(38, 50, 56); transform-origin: 117.735px 254.405px;" id="el6hdio5dd4z"
                  class="animable"></rect>
                <rect x="117.26" y="216.48" width="0.95" height="8.43"
                  style="fill: rgb(38, 50, 56); transform-origin: 117.735px 220.695px;" id="elpz79t688na"
                  class="animable"></rect>
                <rect x="117.26" y="267.05" width="0.95" height="4.76"
                  style="fill: rgb(38, 50, 56); transform-origin: 117.735px 269.43px;" id="elx4d77pcdlk"
                  class="animable"></rect>
                <g id="elwktqw7el5yf">
                  <path
                    d="M150.09,277.19H154v-.95h-4c0-1.24,0-2.45,0-3.63,0-.54,0-1.08,0-1.61,0-9.08-1.32-20.22-5-24.28a13.23,13.23,0,0,0-5-3.33h3.84v-.95H135.3v-1.25h-1v1.25H127v.95h3.85a12,12,0,0,0-2.53,1.36c-5.43,3.77-9.55,12.27-11.31,23.32a38,38,0,0,1-2.17,8.17H92.82a46.52,46.52,0,0,1-1.65-5.81c-1.29-6.06-4.78-12.44-9.71-14.09,3.31-.07,5.75,0,6.17.29a.29.29,0,0,1-.1-.23h1a.65.65,0,0,0-.22-.47c-1.2-1.11-13.64-.28-17.43,0l.07.95c1.59-.12,3.21-.22,4.79-.31-4.76,1.87-8.4,7.8-10.21,16.88-.21,1-.44,1.92-.68,2.79h-22c-1.28-4.64-2.67-9.56-3.88-11.23a7,7,0,0,0-3.31-2.42h8.48v-.95H33v-2.81H32v2.81H23.43v.95h7.42a6.73,6.73,0,0,0-2.7,1.91c-1.31,1.52-2.88,6.48-4.26,11.74H17.08v.95h6.56c-1.73,6.75-3.11,13.67-3.22,14.19l.94.18c0-.13,1.48-7.42,3.26-14.37H32v6.53h1v-6.53H42c0,.14.07.28.11.41a62.17,62.17,0,0,0,2.11,6.93,8.84,8.84,0,0,0,4.3,4.4H43v.95H63.1v-.95h-9l.09,0c4.32-1.67,8.76-3.4,11.31-11.71H78.17v6.53h1v-6.53h13c1.66,4.31,4.38,9,8.59,10.16H95.94v.95h17.78v-.95H104.8c4.66-1,8.33-4.54,10.72-10.16h18.82v6.14h1v-6.14h13.84c.35,8.22,2.85,17.65,18.7,22.51l.28-.91C152.83,294.1,150.43,285.32,150.09,277.19ZM33,276.24v-.82H32v.82H24.87c1.33-5.05,2.8-9.73,4-11.12A5.72,5.72,0,0,1,32,263.24v3.89h1v-4h.48a6.22,6.22,0,0,1,4.69,2.45c1.08,1.5,2.47,6.34,3.66,10.67ZM53.88,288c-5.58,2.16-8.28-2.85-8.76-3.88a65.23,65.23,0,0,1-2-6.78l0-.16H64.54C62.13,284.81,58.11,286.37,53.88,288Zm25.24-11.77v-.82h-1v.82H65.81c.22-.81.42-1.68.61-2.61,2.07-10.33,6.7-16.59,12.4-16.75s9.94,6.8,11.42,13.74a47.55,47.55,0,0,0,1.58,5.62ZM104,286.56c-5.43.91-8.82-4.4-10.78-9.37h21.3C112.1,282.55,108.51,285.8,104,286.56Zm31.34-10.32V274.9h-1v1.34H115.91a39.51,39.51,0,0,0,2.08-8c1.72-10.8,5.69-19.07,10.91-22.69a11.35,11.35,0,0,1,5.44-2v6.1h1v-6.15a12.36,12.36,0,0,1,9,3.89c3.53,3.86,4.79,15.15,4.79,23.64,0,.53,0,1.06,0,1.61,0,1.16,0,2.38,0,3.63Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 92.62px 270.46px;" class="animable"></path>
                </g>
                <g id="elzhnekci3q7">
                  <path
                    d="M50.19,303a3.84,3.84,0,0,0,2.89-2.56l-.91-.25A2.93,2.93,0,0,1,50,302.11c-.25.06-.32,0-.38-.09-.41-.56-.23-2.24.29-3.94,1.5-1.05,3.11-2.46,3.21-3.72.06-.78.07-1.63-.53-1.82s-1.19.42-2.42,2.5a12.66,12.66,0,0,0-1.07,2.44c-.77.52-1.57,1-2.23,1.35l.44.84c.17-.09.71-.38,1.4-.81-.35,1.52-.4,3,.14,3.72a1.2,1.2,0,0,0,1,.5A1.47,1.47,0,0,0,50.19,303Zm.78-7.52a14.77,14.77,0,0,1,1.2-1.81c0,.14,0,.33,0,.58a4.07,4.07,0,0,1-1.64,2.12C50.66,296.09,50.81,295.8,51,295.52Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 50.0084px 297.794px;" class="animable"></path>
                </g>
                <g id="el9xyfiahihw7">
                  <path
                    d="M54.39,302.59a.66.66,0,0,0,.46.18.94.94,0,0,0,.34-.07,6.42,6.42,0,0,0,2.27-2.08l-.79-.53a6.25,6.25,0,0,1-1.58,1.59,14.31,14.31,0,0,1,.84-3.06l-.9-.33C53.69,301.92,54.22,302.43,54.39,302.59Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 55.8015px 300.53px;" class="animable"></path>
                </g>
                <g id="elyr3nfj1piwe">
                  <path
                    d="M58.35,298.18l-1,3.81a.47.47,0,0,0,.3.56l.16,0a.48.48,0,0,0,.43-.28c.92-2,2.16-3.85,2.57-3.88a.27.27,0,0,1,.07.1,4.61,4.61,0,0,1,.29,3.27.47.47,0,0,0,.87.37,29.16,29.16,0,0,1,2.27-3.7c0,.48,0,.93-.09,1.34-.09,1-.15,1.77.29,2.2a1.18,1.18,0,0,0,1,.26l-.12-.95h-.19a3.79,3.79,0,0,1,0-1.43c0-.51.1-1.1.1-1.74s-.18-.87-.53-.95-.81-.2-2.48,2.61a4.61,4.61,0,0,0-.54-1.73,1,1,0,0,0-.92-.59c-.54,0-1.13.58-1.67,1.31l.09-.38Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 61.4227px 299.84px;" class="animable"></path>
                </g>
                <g id="eljqunx579cb">
                  <rect x="55.79" y="295.2" width="0.81" height="0.95"
                    style="fill: rgb(38, 50, 56); transform-origin: 56.195px 295.675px; transform: rotate(-78.62deg);"
                    class="animable"></rect>
                </g>
                <g id="ellwyu158jpbj">
                  <path
                    d="M68.45,311.62c-.25,0-.34-.05-.37-.08-.26-.24-.25-1.08-.24-1.76a4.65,4.65,0,0,0-.37-2.38.77.77,0,0,0-.74-.4c-.56,0-1.27.75-2,1.68a.55.55,0,0,0-.19-.18.48.48,0,0,0-.61.15c-.56.79-2.43,2.94-3.58,2.53s-.59-2.87-.34-3.7a.48.48,0,0,0-.28-.58.47.47,0,0,0-.6.23c-.68,1.36-2,3.37-2.85,3.55l-.17,0a5.81,5.81,0,0,1,.25-1.73c.12-.53.25-1.12.34-1.73,0-.21.11-.84-.39-1-.29-.11-.74-.27-2.64,2.68,0-.39.1-.84.17-1.36s-.06-.87-.39-1-.6-.24-1.9,1.17l.51-1.14-.87-.39-2.06,4.6a.48.48,0,0,0,.19.61.5.5,0,0,0,.63-.13,28.75,28.75,0,0,1,2.9-3.52,27.07,27.07,0,0,0-.28,3.08.49.49,0,0,0,.35.46.48.48,0,0,0,.54-.22c.72-1.2,1.59-2.54,2.18-3.31-.06.35-.14.7-.21,1-.28,1.24-.48,2.14,0,2.62a1.05,1.05,0,0,0,1,.22,4.7,4.7,0,0,0,2.24-2,2.34,2.34,0,0,0,1.3,2.43c1,.38,2.16-.28,3.06-1.07l-.33.94a.46.46,0,0,0,.26.59.46.46,0,0,0,.61-.21c1.12-2.13,2.48-4.08,3-4.35a4.88,4.88,0,0,1,.19,1.8,3.34,3.34,0,0,0,.54,2.47,1.33,1.33,0,0,0,.94.34h.16a6.76,6.76,0,0,0,3.25-1l-.55-.77A6,6,0,0,1,68.45,311.62Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 60.3685px 309.352px;" class="animable"></path>
                </g>
                <rect x="43.16" y="262.92" width="0.95" height="1.27"
                  style="fill: rgb(38, 50, 56); transform-origin: 43.635px 263.555px;" id="elf2rzw2jeem"
                  class="animable"></rect>
                <g id="elys7tt2xi5up">
                  <path
                    d="M98.42,300.27a1.36,1.36,0,0,0,.9.71,4.58,4.58,0,0,0,1.09.14,2,2,0,0,0,1.83-.87l-.84-.44s-.39.61-1.85.24a.38.38,0,0,1-.28-.2c-.26-.53.12-1.78.59-3,1.29-1,2.59-2.33,2.59-3.33s-.26-1.76-.78-1.85c-.67-.12-1.09.79-1.41,1.69-.17.46-.4,1-.65,1.6-.18.42-.36.85-.53,1.27a6,6,0,0,1-1.58.94l0,1a2.69,2.69,0,0,0,1-.4A3.62,3.62,0,0,0,98.42,300.27Zm2.73-6.58a6.39,6.39,0,0,1,.31-.74,4.26,4.26,0,0,1,0,.58,2.42,2.42,0,0,1-.8,1.31C100.87,294.42,101,294,101.15,293.69Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 99.975px 296.393px;" class="animable"></path>
                </g>
                <g id="elkel8dq5jo3">
                  <path
                    d="M104.41,295c-.64.09-1.13.61-1.46,1.54-.72,2.05.1,2.78.48,3a1.51,1.51,0,0,0,.72.18,1.81,1.81,0,0,0,1.36-.65,6.66,6.66,0,0,0,1.21-2.42.52.52,0,0,0-.08-.4C106.53,296.12,105.54,294.83,104.41,295Zm.37,3.46a.76.76,0,0,1-.88.25c-.27-.15-.45-.73-.05-1.86.11-.31.35-.86.7-.91h.07a2,2,0,0,1,1.11.72A5.77,5.77,0,0,1,104.78,298.47Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 104.697px 297.352px;" class="animable"></path>
                </g>
                <g id="elmiahdp7mn8m">
                  <path
                    d="M110.36,299.38l.63-2.21,1.56,1.9.74-.6-1.86-2.26,3-1.62-.46-.84-2.37,1.3.84-3-.92-.26-1.1,3.89a.45.45,0,0,0-.18.27.57.57,0,0,0,0,.26l-.81,2.88Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 111.93px 295.585px;" class="animable"></path>
                </g>
                <ellipse cx="98.49" cy="258" rx="0.74" ry="0.79"
                  style="fill: rgb(38, 50, 56); transform-origin: 98.49px 258px;" id="eli0rdnekc7w" class="animable">
                </ellipse>
                <g id="el6cn4mfu3p5j">
                  <path
                    d="M104.25,304.8c-1-.12-1.68,1.16-2.13,2.57a4.69,4.69,0,0,0-.54-1.39.86.86,0,0,0-1.24-.26l-.14.09a10.11,10.11,0,0,0-.14-1.09l-.94.16a11.47,11.47,0,0,1,.17,1.81c-.93,1.15-1.85,2.9-1.53,3.61a.68.68,0,0,0,.65.42,1.18,1.18,0,0,0,.39-.08c1.2-.43,1.47-2.14,1.46-3.63a1.89,1.89,0,0,1,.56-.46,9.38,9.38,0,0,1,.68,3.64.48.48,0,0,0,.44.48.47.47,0,0,0,.5-.4c.38-2.38,1.17-4.6,1.7-4.52s.75,2.11.53,4.24l1,.09C105.74,308.9,106,305,104.25,304.8Zm-5.54,4.76a5.77,5.77,0,0,1,.44-1A2.14,2.14,0,0,1,98.71,309.56Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 101.71px 307.72px;" class="animable"></path>
                </g>
                <g id="el0ss0sq4ge05h">
                  <path
                    d="M108.63,309.75a.73.73,0,0,1-.63-.23c-.9-.8.36-3.08.87-3.81l-.78-.55c-.25.36-2.42,3.57-.72,5.07a1.72,1.72,0,0,0,1.15.48,1.36,1.36,0,0,0,.29,0c1.15-.22,1.91-1.69,2-1.86l-.85-.43C109.8,308.71,109.21,309.63,108.63,309.75Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 108.768px 307.939px;" class="animable"></path>
                </g>
                <g id="elilmzrja1qnh">
                  <rect x="108.67" y="302.82" width="1.37" height="0.95"
                    style="fill: rgb(38, 50, 56); transform-origin: 109.355px 303.295px; transform: rotate(-54.42deg);"
                    class="animable"></rect>
                </g>
                <g id="elnwgmzrdz2xr">
                  <path
                    d="M116.63,308.61c-.28,0-.38-.91-.45-1.49-.11-.95-.23-2-1.13-2.16-.68-.1-1.39.68-2,1.69,0-.38.07-.75.07-1.06s0-1-.56-1.2-1.1.28-1.2.39l.67.67.12-.1a1.44,1.44,0,0,1,0,.24,25.65,25.65,0,0,1-.62,4,.47.47,0,0,0,.31.56.39.39,0,0,0,.15,0,.49.49,0,0,0,.44-.28c.88-2.06,2.08-4,2.51-4,.17,0,.28,1,.32,1.31.11,1,.24,2.21,1.27,2.34a2.65,2.65,0,0,0,2.34-.81l-.75-.6A1.62,1.62,0,0,1,116.63,308.61Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 115.115px 307.25px;" class="animable"></path>
                </g>
                <g id="elm540wd6nnpn">
                  <path
                    d="M145.26,306.49c-.45,2.6-.56,3.55,0,3.94a.71.71,0,0,0,.39.12.8.8,0,0,0,.37-.09,6.27,6.27,0,0,0,2.25-2.08l-.8-.5a5.58,5.58,0,0,1-1.61,1.58,21,21,0,0,1,.38-2.81,12.28,12.28,0,0,0,.34-4.21.72.72,0,0,0-.64-.58c-.24,0-.92-.06-2.77,3.47l.26-3-.95-.08-.48,5.55a.47.47,0,0,0,.35.5.49.49,0,0,0,.56-.25,29.13,29.13,0,0,1,2.81-5A19.79,19.79,0,0,1,145.26,306.49Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 145.134px 306.205px;" class="animable"></path>
                </g>
                <g id="el5d8vw03yprm">
                  <path
                    d="M163.15,301.29c-.83.15-1.86.35-3.16.5a11.19,11.19,0,0,1-6.44-1.17,7.32,7.32,0,0,0-1-.4,1,1,0,0,0-.93.14c-.78.59-.78,2.33-.78,7,0,3.74-2.55,8.56-3.76,10.63a33.11,33.11,0,0,1-.53-3.68,2,2,0,0,0-.88-1.77,1.74,1.74,0,0,0-1.59.12l.49.82a.85.85,0,0,1,.66-.1c.2.11.33.47.37,1a36.35,36.35,0,0,0,.81,5,.47.47,0,0,0,.38.36h.08a.47.47,0,0,0,.4-.22c.18-.28,4.52-7,4.52-12.16,0-3.21,0-6,.4-6.22a.19.19,0,0,1,.1,0,7.46,7.46,0,0,1,.86.36,12.22,12.22,0,0,0,6.94,1.24c1.33-.15,2.38-.35,3.23-.51a7.7,7.7,0,0,1,1.8-.24.59.59,0,0,1,0,.23c-.16,1.4-.47,3.28-.47,3.3l.94.16s.32-1.93.48-3.36a1.22,1.22,0,0,0-.29-1C165.33,300.87,164.6,301,163.15,301.29Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 155.083px 309.951px;" class="animable"></path>
                </g>
                <g id="elgp9mumdtynh">
                  <path
                    d="M157.28,310.36l-3.06.12c.22-.44.52-1.09.88-2a16.18,16.18,0,0,0,1-3.93l-1-.09a15.16,15.16,0,0,1-.92,3.68A12.43,12.43,0,0,1,153,310.7a.49.49,0,0,0,0,.51.48.48,0,0,0,.42.25h0l3.59-.13-1.2,4,.91.28,2.69-8.89-.91-.27Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 156.169px 310.035px;" class="animable"></path>
                </g>
                <g id="el75pw6x1fdgf">
                  <path
                    d="M203.84,298.71c-.41-.25-1-.06-2.3.31a19.13,19.13,0,0,1-6.09,1c-4.25-.16-16.72,0-16.84,0a.48.48,0,0,0-.46.37c0,.14-3.18,13.94-4.41,16.39a.94.94,0,0,1-.08.15c-.52-.48-1.43-3.37-2-6.53l-.93.18c.51,2.66,1.57,7.15,2.89,7.34h.11c.27,0,.62-.14.91-.71,1.18-2.36,3.87-14,4.39-16.24,2.12,0,12.62-.14,16.43,0a20,20,0,0,0,6.39-1.06,13.34,13.34,0,0,1,1.45-.38c.19.88.58,2.44.6,2.51l.92-.23s-.47-1.9-.63-2.68A.66.66,0,0,0,203.84,298.71Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 187.775px 308.258px;" class="animable"></path>
                </g>
                <g id="el9lqtzi0mte">
                  <path
                    d="M209.56,301.6l.95,0a20.56,20.56,0,0,0-.5-5.56c-.18-.6-.54-.69-.74-.69s-.75,0-1.71,2.36l.09-1-1-.09-.47,5.08a.46.46,0,0,0,.38.51h.09a.48.48,0,0,0,.46-.34,28,28,0,0,1,2-5.33A20.64,20.64,0,0,1,209.56,301.6Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 208.354px 298.78px;" class="animable"></path>
                </g>
                <g id="elzbg9mlpvdm">
                  <path
                    d="M196.12,306.47l-.1.06a7.64,7.64,0,0,1,0-1.5,13,13,0,0,0,0-1.86.76.76,0,0,0-.55-.75c-.21-.05-.77-.19-2.52,2.14l.51-1.86-.92-.25-1.26,4.6a.46.46,0,0,0,.26.56.45.45,0,0,0,.19.05.49.49,0,0,0,.41-.22,24.26,24.26,0,0,1,2.94-3.9,14,14,0,0,1,0,1.43c-.08,1.23-.14,2.12.44,2.46a1,1,0,0,0,1.12-.17l2.38-1.59-.53-.79Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 195.14px 305.03px;" class="animable"></path>
                </g>
                <g id="el476xq9rb3h1">
                  <rect x="176.99" y="309.32" width="8.17" height="0.95"
                    style="fill: rgb(38, 50, 56); transform-origin: 181.075px 309.795px; transform: rotate(-82.14deg);"
                    class="animable"></rect>
                </g>
                <g id="elz28e92ffzvf">
                  <path
                    d="M187.79,308.3a2.36,2.36,0,0,0-1.88-.12,6.12,6.12,0,0,0,.79-2.2c0-.26.16-1.06-.41-1.32s-1.24.18-2.16,1.26l.71.62a6.07,6.07,0,0,1,.94-.88,1.41,1.41,0,0,1,0,.18,5.68,5.68,0,0,1-1.59,3.05.47.47,0,0,0,.54.77c.8-.42,2.14-.85,2.53-.58.14.1.13.37.11.58-.21,1.52-1.72,3.19-2.66,3.27-.13,0-.48,0-.7-.66l-.91.29a1.61,1.61,0,0,0,1.56,1.32h.13c1.46-.13,3.27-2.23,3.52-4.1A1.44,1.44,0,0,0,187.79,308.3Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 185.725px 309.234px;" class="animable"></path>
                </g>
                <g id="elk2ybctnq0ef">
                  <path
                    d="M171.27,306.28a33.16,33.16,0,0,1,2.29-4.09c0,.46,0,1,0,1.55-.07,2.07-.08,3,.54,3.21a.52.52,0,0,0,.21,0,1,1,0,0,0,.74-.47l-.5-.39a12.17,12.17,0,0,1,0-2.35,20.32,20.32,0,0,0,0-2.2c-.05-.56-.37-.7-.55-.73s-.83-.15-2.63,3.23v-2.3h-.95v4.29a.48.48,0,0,0,.91.21Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 172.735px 303.881px;" class="animable"></path>
                </g>
                <g id="elex51rxz7ew">
                  <path
                    d="M216.14,295.13a.47.47,0,0,0-.38.35l-3.64,14.7-2.77-6.05-.86.39,3.33,7.3a.48.48,0,0,0,.43.28h.05a.49.49,0,0,0,.42-.36L216.61,296c2-.33,13.73-2.14,19.42-1.85l.05-.95C229.75,292.89,216.7,295,216.14,295.13Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 222.285px 302.634px;" class="animable"></path>
                </g>
                <g id="elz60gzosvuvn">
                  <rect x="220.26" y="286.63" width="7.46" height="0.95"
                    style="fill: rgb(38, 50, 56); transform-origin: 223.99px 287.105px; transform: rotate(-87.54deg);"
                    class="animable"></rect>
                </g>
                <g id="elt4bu1nurw57">
                  <rect x="223.05" y="287.03" width="6.82" height="0.95"
                    style="fill: rgb(38, 50, 56); transform-origin: 226.46px 287.505px; transform: rotate(-77.93deg);"
                    class="animable"></rect>
                </g>
                <g id="el6gf5r7rql6e">
                  <rect x="216.01" y="305.36" width="9.47" height="0.95"
                    style="fill: rgb(38, 50, 56); transform-origin: 220.745px 305.835px; transform: rotate(-81.35deg);"
                    class="animable"></rect>
                </g>
                <g id="eln4dik89txge">
                  <path
                    d="M227.93,303.31a2.66,2.66,0,0,0-2.14.23,5,5,0,0,0,.58-2c0-.3.08-1.22-.58-1.47s-1.9.88-2.49,1.62l.75.59a5.44,5.44,0,0,1,1.36-1.29,1.75,1.75,0,0,1,0,.49,5.31,5.31,0,0,1-2.07,3.56l-.28.22a.47.47,0,0,0,.55.77s.15-.1.34-.25c1.37-1,3-1.85,3.53-1.58.16.08.17.42.16.61-.11,2-1.72,4-2.64,4.06-.1,0-.39,0-.55-.65l-.93.22c.29,1.21,1,1.39,1.44,1.39h.13c1.58-.14,3.38-2.69,3.5-5A1.45,1.45,0,0,0,227.93,303.31Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 225.74px 304.932px;" class="animable"></path>
                </g>
                <g id="el6psqdfi65f3">
                  <path
                    d="M232.69,300.66c0-.26,0-.64.06-.92a5.39,5.39,0,0,0-.06-2.25.8.8,0,0,0-.65-.55c-.58-.07-1.39.6-2.13,1.41l.26-1.05-.92-.23-.8,3.17a.5.5,0,0,0,.26.55.47.47,0,0,0,.59-.16,11.24,11.24,0,0,1,2.53-2.72,6.38,6.38,0,0,1,0,1.74c-.1,1-.18,1.73.35,2a.67.67,0,0,0,.33.08,1.5,1.5,0,0,0,.85-.39l-.6-.74Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 230.899px 299.333px;" class="animable"></path>
                </g>
                <g id="elx884u6u1dsi">
                  <path d="M164.94,310.53a.58.58,0,0,0-.58.58.58.58,0,0,0,1.15,0A.58.58,0,0,0,164.94,310.53Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 164.935px 311.072px;" class="animable"></path>
                </g>
                <g id="elmm0lqyoydcs">
                  <path
                    d="M70.33,84.25c-.22,0-2.17-.1-3,1a2,2,0,0,0-.07,2c.44,1,1.73,4.56,0,5.65l-4.39,2.72a.52.52,0,0,0,.06.92A6.78,6.78,0,0,1,66.65,101c.58,3.12-1.6,7.15-1.62,7.19a.52.52,0,0,0,0,.51.54.54,0,0,0,.43.26l4.19.21h0a.51.51,0,0,0,.52-.49.52.52,0,0,0-.49-.55L66.3,108c.65-1.38,1.87-4.48,1.37-7.16a7.37,7.37,0,0,0-3.46-4.74l3.64-2.26c1.67-1,1.82-3.57.42-6.93a1.06,1.06,0,0,1,0-1c.38-.53,1.64-.59,2-.57a.52.52,0,1,0,.06-1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 66.7898px 96.7089px;" class="animable"></path>
                </g>
                <g id="elkj8ic4a1iti">
                  <path
                    d="M93.42,95A.53.53,0,0,0,93,95a3.34,3.34,0,0,1-3.06-.74c-.57-.5.64-2.09,1.61-3.37,1.1-1.44,2.13-2.79,2.13-4A1.41,1.41,0,0,0,93,85.58c-1.31-.81-4.15.54-4.71.82a.51.51,0,0,0-.23.69.52.52,0,0,0,.69.24c1.14-.57,3.1-1.24,3.7-.87.05,0,.16.1.16.4,0,.85-1,2.18-1.91,3.37C89.34,92,87.94,93.87,89.24,95a4.31,4.31,0,0,0,3.45,1.07c.42,3.88.53,9.78-.88,10.68-1.92,1.22-2.8.83-2.8.83a.52.52,0,0,0-.72.18.53.53,0,0,0,.18.71,1.91,1.91,0,0,0,1,.21,5.65,5.65,0,0,0,2.94-1.06c2.46-1.56,1.5-10.46,1.28-12.23A.5.5,0,0,0,93.42,95Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 91.0315px 97.0042px;" class="animable"></path>
                </g>
                <g id="eljwgat48mtkh">
                  <path
                    d="M80.15,101.22a1.62,1.62,0,0,1-.92.6c-.18,0-.36-.13-.54-.38a19.7,19.7,0,0,1-1.47-3c1.08-2.1,2.06-4.38,2.36-5.1a.52.52,0,1,0-1-.4c-.54,1.28-1.23,2.81-1.93,4.22-.7-1.75-1.28-3.33-1.29-3.36a.52.52,0,0,0-1,.35c.06.15.82,2.21,1.65,4.23a10.61,10.61,0,0,1-2,3.11.58.58,0,0,1-.53.08c-.43-.18-.74-1-.81-1.24a.53.53,0,0,0-.64-.36.51.51,0,0,0-.36.64,3.12,3.12,0,0,0,1.41,1.92,1.51,1.51,0,0,0,.56.11,1.82,1.82,0,0,0,.88-.25,8.47,8.47,0,0,0,2.06-2.79A16.39,16.39,0,0,0,77.84,102a1.72,1.72,0,0,0,1.38.82h0a2.51,2.51,0,0,0,1.74-1,.52.52,0,0,0-.83-.62Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 76.3431px 97.7103px;" class="animable"></path>
                </g>
                <g id="elwn1fkywgm5c">
                  <path
                    d="M87.28,101.63c-.33,0-1.12-.13-3.39,4.92l.13-4.17a.52.52,0,0,0-.5-.53.54.54,0,0,0-.54.5l-.21,6.92a.53.53,0,0,0,.41.52.52.52,0,0,0,.59-.31A39,39,0,0,1,87,102.93a26,26,0,0,1-.66,6.65.52.52,0,0,0,.39.63h.11a.51.51,0,0,0,.51-.41c0-.19,1.07-4.73.63-7.32C87.88,101.8,87.5,101.65,87.28,101.63Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 85.4281px 105.92px;" class="animable"></path>
                </g>
                <g id="elppyc23arlqq">
                  <path
                    d="M101.78,96.19l-1.62-.14.2-1.36a.52.52,0,0,0-.44-.59.53.53,0,0,0-.59.44L99.13,96,97,95.77a.54.54,0,0,0-.57.48.53.53,0,0,0,.48.56L99,97l-.28,2a.53.53,0,0,0,.44.59h.08a.52.52,0,0,0,.51-.44l.29-2,1.67.15h0a.52.52,0,0,0,0-1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 99.2581px 96.8429px;" class="animable"></path>
                </g>
                <g id="eljyzgiv48ky">
                  <path
                    d="M108.28,86.42c-.33-.2-2.06-1.18-3.08-.54a1.58,1.58,0,0,0-.63,1.65,9.79,9.79,0,0,0,.63,2.56c.43,1.22.74,2.09.07,3.21-1,1.69-1.68,1.84-1.65,1.84a.52.52,0,0,0-.39.87,5.86,5.86,0,0,1,1.34,4.39c-.26,1.72-.85,8.77.41,9.71a5.45,5.45,0,0,0,2.83.74.52.52,0,0,0,0-1,4.51,4.51,0,0,1-2.19-.51c-.5-.57-.52-5.55,0-8.74a6.75,6.75,0,0,0-1.17-4.69,6.37,6.37,0,0,0,1.73-2c.92-1.53.46-2.83,0-4.08a8.91,8.91,0,0,1-.58-2.3c0-.17,0-.58.15-.69.34-.22,1.38.18,2,.55a.53.53,0,0,0,.71-.18A.51.51,0,0,0,108.28,86.42Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 105.836px 98.2583px;" class="animable"></path>
                </g>
                <g id="elw96hawqeoe8">
                  <path
                    d="M117.86,91.41a.53.53,0,0,0-.66.23c-1.52,2.75-3.75,5.5-4.62,5.21a.7.7,0,0,1-.41-.38c-.37-.81.12-2.6.52-3.54a.53.53,0,0,0-.28-.68.51.51,0,0,0-.68.28c-.12.29-1.18,2.88-.51,4.37a1.72,1.72,0,0,0,1,.93c1.26.42,2.78-1.11,4-2.75a51.4,51.4,0,0,0-1.11,5.65,20.51,20.51,0,0,0-4.55,3,2.67,2.67,0,0,0-.82,3,3,3,0,0,0,2.9,1.46l.42,0c2.71-.19,2.77-1.72,2.85-4,0-.72,0-1.54.15-2.51,0-.06,0-.12,0-.18.79-.4,1.34-.65,1.36-.66a.51.51,0,0,0,.26-.68.52.52,0,0,0-.69-.26l-.76.36A66.25,66.25,0,0,1,118.15,92,.52.52,0,0,0,117.86,91.41Zm-3,12.65c-.09,2.44-.16,2.9-1.88,3-1.17.08-2-.23-2.3-.84a1.7,1.7,0,0,1,.61-1.84A17.79,17.79,0,0,1,115,102C114.93,102.76,114.91,103.44,114.89,104.06Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 113.869px 99.789px;" class="animable"></path>
                </g>
                <g id="el8du2gpnbhjp">
                  <path
                    d="M124.56,102.28a2.56,2.56,0,0,1-1,.74c0-.23,0-.55.05-.81a7.29,7.29,0,0,0-.28-3.41,1,1,0,0,0-.9-.66c-.56,0-1.17.7-1.74,1.61l.16-.85a.54.54,0,0,0-.42-.61.52.52,0,0,0-.6.42l-.84,4.61a.52.52,0,0,0,1,.29,14.91,14.91,0,0,1,2.4-4.38,6.39,6.39,0,0,1,.19,2.9c-.08,1-.13,1.59.31,1.91a.72.72,0,0,0,.43.14,1,1,0,0,0,.36-.07,3.71,3.71,0,0,0,1.71-1.25.51.51,0,0,0-.14-.71A.52.52,0,0,0,124.56,102.28Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 122.224px 101.16px;" class="animable"></path>
                </g>
                <g id="elv8jldn5u7r">
                  <path
                    d="M132.3,94.13a.53.53,0,0,0-.59.15,1.06,1.06,0,0,1-1.57.15c-.5-.42.1-2,.62-3.32a17.21,17.21,0,0,0,1-3.33c.13-.89,0-1.47-.52-1.74-.88-.49-2.29.58-2.85,1.06a.52.52,0,0,0-.06.73.53.53,0,0,0,.74,0,3.91,3.91,0,0,1,1.65-.95s.09.14,0,.69a16,16,0,0,1-1,3.11c-.74,1.94-1.38,3.61-.32,4.49a2,2,0,0,0,2.05.42,56.42,56.42,0,0,1-1.17,8.47,2.44,2.44,0,0,1-2.94,1.94.52.52,0,0,0-.62.39.51.51,0,0,0,.39.62,3.22,3.22,0,0,0,.74.08,3.45,3.45,0,0,0,3.43-2.75,65,65,0,0,0,1.28-9.74A.52.52,0,0,0,132.3,94.13Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 129.633px 96.5024px;" class="animable"></path>
                </g>
                <g id="elzkm1q6mhb1">
                  <path
                    d="M135.88,95.55h4.19a.52.52,0,0,0,.52-.52.52.52,0,0,0-.52-.52h-4.19a.53.53,0,0,0-.52.52A.52.52,0,0,0,135.88,95.55Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 137.975px 95.03px;" class="animable"></path>
                </g>
                <g id="elh8l0ldp0atj">
                  <path
                    d="M134.94,97l5,1h.1a.52.52,0,0,0,.51-.42.51.51,0,0,0-.4-.61l-5-1.05a.5.5,0,0,0-.61.4A.52.52,0,0,0,134.94,97Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 137.537px 96.953px;" class="animable"></path>
                </g>
                <g id="elyyun7459rl">
                  <path
                    d="M138.9,101.44a.52.52,0,0,0-.6.42l-.63,3.82a3,3,0,0,0-2-1.1,2.7,2.7,0,0,0-2.3,1.48c-1.62,2.43-1.68,5.17-.71,6.11a1.16,1.16,0,0,0,.82.34,1.49,1.49,0,0,0,.83-.29,16.85,16.85,0,0,0,2.8-3.11l-.47,2.81a.52.52,0,0,0,.42.6h.09a.52.52,0,0,0,.51-.43L139.33,102A.51.51,0,0,0,138.9,101.44Zm-5.2,9.93c-.22.15-.28.1-.33,0-.5-.49-.56-2.67.85-4.78.45-.68.91-1,1.36-1h0c.7,0,1.39.83,1.74,1.34A23.77,23.77,0,0,1,133.7,111.37Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 135.678px 106.976px;" class="animable"></path>
                </g>
                <g id="elphwts4cx1ff">
                  <path
                    d="M143,102.44a1.85,1.85,0,0,0-1.31,1.18,6.39,6.39,0,0,0-.36,2.11,7,7,0,0,0-1.84.34.52.52,0,0,0-.33.65.52.52,0,0,0,.66.33,6.37,6.37,0,0,1,1.49-.28,1.15,1.15,0,0,0,0,.19c0,1.81,0,3.87-1.11,4.62a.51.51,0,0,0-.12.72.5.5,0,0,0,.42.22.53.53,0,0,0,.3-.09c1.51-1.05,1.53-3.4,1.55-5.46v-.11a1.19,1.19,0,0,1,.51.27.5.5,0,0,0,.73,0,.5.5,0,0,0,0-.73,2.32,2.32,0,0,0-1.21-.6,5.47,5.47,0,0,1,.27-1.76c.16-.34.34-.54.55-.58.4-.07,1,.37,1.13.53a.52.52,0,0,0,.73-.73A2.64,2.64,0,0,0,143,102.44Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 142.153px 107.478px;" class="animable"></path>
                </g>
                <g id="el3xghn21sqgq">
                  <path
                    d="M148,109.78c.12-1.56.33-4.66.33-7.62a6.54,6.54,0,0,0-1.89-5.08,6.2,6.2,0,0,0,2.24-2.41c.92-1.57.67-3.61.41-5.76a16.08,16.08,0,0,1-.14-4.68,1.59,1.59,0,0,1,.81-1.31c.92-.39,2.48.45,3,.81a.52.52,0,0,0,.72-.14.52.52,0,0,0-.13-.72c-.24-.16-2.39-1.58-4-.9a2.51,2.51,0,0,0-1.43,2.08,17,17,0,0,0,.13,5c.24,2,.47,3.85-.27,5.11-1.27,2.18-2.49,2.26-2.49,2.26a.51.51,0,0,0-.5.41.53.53,0,0,0,.3.59c.09,0,2.2,1,2.2,4.76,0,4.11-.42,8.49-.42,8.54a.52.52,0,0,0,.26.5.59.59,0,0,0,.26.07.57.57,0,0,0,.3-.1c.64-.46,2.13-1.24,2.68-.68a.52.52,0,1,0,.74-.74C150.26,108.88,148.91,109.32,148,109.78Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 149.175px 96.5384px;" class="animable"></path>
                </g>
                <g id="elrxpukfyypd">
                  <path
                    d="M158,99.38a14.47,14.47,0,0,1-.8-1.7,33.55,33.55,0,0,0,2.39-5.41.52.52,0,0,0-1-.34,33.84,33.84,0,0,1-1.91,4.48c-.55-1.45-1.17-3.21-1.72-4.89a.52.52,0,1,0-1,.32c.86,2.64,1.52,4.47,2,5.75-.82,1.36-1.65,2.28-2.3,2.17-1-.17-1.4-.49-1.56-.73a.66.66,0,0,1-.12-.5.52.52,0,0,0-.36-.64.52.52,0,0,0-.64.35,1.68,1.68,0,0,0,.23,1.32,3.1,3.1,0,0,0,2.28,1.22,1.06,1.06,0,0,0,.25,0c.95,0,1.88-.87,2.71-2.07.8,1.73,1.13,1.82,1.3,1.86l.11,0a.78.78,0,0,0,.48-.18l1.88-1.89-.73-.73Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 155.576px 95.9707px;" class="animable"></path>
                </g>
                <g id="eliq13bgnvyr">
                  <path
                    d="M166.91,104.55a3.22,3.22,0,0,1-.43.45,13.57,13.57,0,0,1-.13-1.49,12.58,12.58,0,0,0-.43-3.19c-.23-.68-.62-.83-.91-.83h0c-.66,0-1.43,1-2.31,3.08l.31-3.72a.52.52,0,0,0-.47-.56.5.5,0,0,0-.56.47l-.63,7.54a.52.52,0,0,0,.41.56h.1a.53.53,0,0,0,.5-.36c.8-2.47,2-5.24,2.57-5.87h0a10.89,10.89,0,0,1,.38,2.91c.07,1.4.12,2.32.8,2.55s1.14-.34,1.6-.9a.52.52,0,1,0-.8-.66Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 164.601px 102.573px;" class="animable"></path>
                </g>
                <g id="el51j9twj9ep5">
                  <path
                    d="M173.39,96.19h-.6c0-.8.07-1.53.07-1.79a.52.52,0,0,0-1,0c0,.25,0,1-.07,1.79h-2.34a.52.52,0,1,0,0,1h2.29c0,.83-.09,1.53-.09,1.55a.52.52,0,0,0,.49.54h0a.52.52,0,0,0,.52-.49c0-.06,0-.77.08-1.6h.66a.52.52,0,1,0,0-1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 171.425px 96.6514px;" class="animable"></path>
                </g>
                <g id="eljgv0axnbjed">
                  <path
                    d="M181.24,93c-.45-.12-.63.2-1.1,1s-1.7,3-2.44,2.83-.89-2.71-.66-4.45a.51.51,0,0,0-.44-.58.5.5,0,0,0-.58.44c-.12.85-.59,5.1,1.43,5.6,1.22.31,2.28-1.11,3.08-2.44-.22,2.8-.85,7.16-1.95,7.77a.87.87,0,0,1-.79.09c-.71-.27-1.25-1.46-1.4-1.9a.51.51,0,0,0-.65-.32.52.52,0,0,0-.33.65c.07.21.71,2,2,2.54a2,2,0,0,0,.67.13,2.17,2.17,0,0,0,1-.28c2.34-1.3,2.57-10.42,2.57-10.51A.67.67,0,0,0,181.24,93Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 178.518px 98.0765px;" class="animable"></path>
                </g>
                <g id="el8dj4o5tmbqg">
                  <path
                    d="M188.21,104.72a.52.52,0,0,0-.59-.1c0-.3,0-.69,0-1a11.55,11.55,0,0,0-.15-3.47c-.19-.71-.56-.86-.84-.86h0c-.28,0-.93,0-2,3.28l-.48-3a.52.52,0,1,0-1,.17L184,105a.52.52,0,0,0,.48.44A.51.51,0,0,0,185,105a25.07,25.07,0,0,1,1.57-4.39,11.84,11.84,0,0,1,.06,2.92c-.08,1.33-.12,2.06.45,2.32a.74.74,0,0,0,.28.06,1.35,1.35,0,0,0,.86-.47A.53.53,0,0,0,188.21,104.72Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 185.733px 102.466px;" class="animable"></path>
                </g>
                <g id="el2gj5c24wfs8">
                  <path
                    d="M191.71,100.81a12.4,12.4,0,0,1,1-7.62.52.52,0,0,0-.12-.65l-1.46-1.25c-.65-.56-.55-.83,0-2a13,13,0,0,0,1-2.26c.1-.32.4-1.29-.24-1.72-.79-.54-2.28.5-3.1,1.17a.52.52,0,1,0,.66.8,6.33,6.33,0,0,1,1.8-1.08,2.1,2.1,0,0,1-.11.53,13.17,13.17,0,0,1-.88,2.1c-.58,1.16-1.09,2.16.2,3.26l1.16,1a13.47,13.47,0,0,0-.91,7.92,26.41,26.41,0,0,0,1.11,4c.73,2.14.79,2.59-.15,2.94a2.12,2.12,0,0,1-2.7-1.2.52.52,0,0,0-.95.43,3.28,3.28,0,0,0,2.85,2,3.37,3.37,0,0,0,1.15-.22c2-.72,1.45-2.28.78-4.25A25.57,25.57,0,0,1,191.71,100.81Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 190.693px 97.1699px;" class="animable"></path>
                </g>
                <g id="elig6y02wx59j">
                  <path
                    d="M345.09,248.72c-.21,0-2.17-.09-2.95,1a2,2,0,0,0-.07,2c.44,1,1.73,4.56,0,5.65s-4.4,2.72-4.4,2.72a.52.52,0,0,0-.25.48.55.55,0,0,0,.31.44,6.78,6.78,0,0,1,3.68,4.44c.59,3.12-1.6,7.15-1.62,7.19a.52.52,0,0,0,0,.51.54.54,0,0,0,.43.26l4.19.21h0a.51.51,0,0,0,.51-.49.5.5,0,0,0-.49-.54l-3.4-.17c.65-1.39,1.87-4.49,1.37-7.16a7.33,7.33,0,0,0-3.46-4.75l3.64-2.26c1.67-1,1.82-3.56.42-6.93a1.06,1.06,0,0,1,0-1c.38-.53,1.64-.59,2-.56a.53.53,0,0,0,.55-.49A.52.52,0,0,0,345.09,248.72Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 341.485px 261.169px;" class="animable"></path>
                </g>
                <g id="elijg1frh3x9">
                  <path
                    d="M368.18,259.49a.49.49,0,0,0-.44-.06,3.32,3.32,0,0,1-3.06-.73c-.57-.5.64-2.1,1.61-3.37,1.1-1.44,2.13-2.8,2.13-4a1.39,1.39,0,0,0-.65-1.28c-1.31-.81-4.15.54-4.71.82a.52.52,0,0,0,.46.93c1.14-.57,3.1-1.24,3.7-.87,0,0,.16.1.16.4,0,.85-1,2.19-1.91,3.37-1.36,1.79-2.77,3.64-1.47,4.78a4.33,4.33,0,0,0,3.45,1.06c.42,3.88.53,9.78-.87,10.68-1.93,1.22-2.81.83-2.81.83a.52.52,0,0,0-.53.89,1.81,1.81,0,0,0,.95.21,5.58,5.58,0,0,0,2.94-1c2.46-1.57,1.5-10.47,1.29-12.24A.52.52,0,0,0,368.18,259.49Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 365.791px 261.474px;" class="animable"></path>
                </g>
                <g id="eld7fl85rru3r">
                  <path
                    d="M354.92,265.69a1.6,1.6,0,0,1-.93.6c-.18,0-.36-.13-.54-.38a20.7,20.7,0,0,1-1.47-3c1.08-2.1,2.06-4.38,2.36-5.1a.52.52,0,0,0-.27-.68.51.51,0,0,0-.68.28c-.54,1.28-1.24,2.81-1.93,4.22-.71-1.74-1.29-3.33-1.3-3.36a.52.52,0,0,0-.67-.31.53.53,0,0,0-.3.67c.05.14.81,2.2,1.65,4.22a10.56,10.56,0,0,1-2,3.11.58.58,0,0,1-.53.08c-.43-.18-.74-1-.81-1.23a.53.53,0,0,0-.64-.37.52.52,0,0,0-.36.64,3.1,3.1,0,0,0,1.42,1.92,1.42,1.42,0,0,0,.56.11,1.69,1.69,0,0,0,.87-.25,8.51,8.51,0,0,0,2.06-2.78,16.7,16.7,0,0,0,1.24,2.42,1.7,1.7,0,0,0,1.38.82h0a2.51,2.51,0,0,0,1.75-1,.51.51,0,0,0-.11-.72A.5.5,0,0,0,354.92,265.69Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 351.182px 262.203px;" class="animable"></path>
                </g>
                <g id="el1dk80itblm">
                  <path
                    d="M362,266.1c-.33,0-1.11-.12-3.38,4.92l.12-4.17a.51.51,0,0,0-.5-.53.53.53,0,0,0-.53.5l-.21,6.92a.51.51,0,0,0,.41.52.53.53,0,0,0,.59-.31,38.32,38.32,0,0,1,3.23-6.55,26.13,26.13,0,0,1-.66,6.66.52.52,0,0,0,.39.62h.12a.51.51,0,0,0,.5-.4c.05-.2,1.07-4.74.64-7.33C362.64,266.27,362.26,266.12,362,266.1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 360.163px 270.39px;" class="animable"></path>
                </g>
                <g id="elgk7tc0rbnl7">
                  <path
                    d="M376.54,260.66l-1.61-.14.19-1.36a.52.52,0,0,0-1-.15l-.2,1.42-2.17-.18a.51.51,0,0,0-.56.47.52.52,0,0,0,.47.56l2.11.18-.28,2a.52.52,0,0,0,.45.59H374a.51.51,0,0,0,.51-.44l.29-2,1.67.15h0a.51.51,0,0,0,.52-.47A.53.53,0,0,0,376.54,260.66Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 374.094px 261.368px;" class="animable"></path>
                </g>
                <g id="elrgbot7x0qub">
                  <path
                    d="M383.05,250.89c-.34-.2-2.07-1.18-3.09-.54a1.62,1.62,0,0,0-.63,1.66,9.89,9.89,0,0,0,.63,2.56c.43,1.21.74,2.09.07,3.2-1,1.69-1.68,1.84-1.65,1.84a.53.53,0,0,0-.47.31.52.52,0,0,0,.08.56,5.86,5.86,0,0,1,1.34,4.39c-.26,1.72-.85,8.77.41,9.72a5.51,5.51,0,0,0,2.83.73.52.52,0,1,0,0-1,4.51,4.51,0,0,1-2.19-.51c-.5-.57-.51-5.55,0-8.74a6.75,6.75,0,0,0-1.17-4.69,6.29,6.29,0,0,0,1.73-2c.92-1.54.46-2.83,0-4.09a8.91,8.91,0,0,1-.58-2.3c0-.17,0-.58.15-.69.35-.22,1.39.18,2,.55a.52.52,0,0,0,.54-.89Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 380.581px 262.738px;" class="animable"></path>
                </g>
                <g id="el3k25ixmt7dr">
                  <path
                    d="M392.62,255.88a.53.53,0,0,0-.66.23c-1.52,2.75-3.74,5.51-4.62,5.21a.7.7,0,0,1-.41-.38c-.36-.81.12-2.6.52-3.54a.53.53,0,0,0-.28-.68.52.52,0,0,0-.68.28c-.12.29-1.18,2.88-.5,4.37a1.67,1.67,0,0,0,1,.93c1.26.42,2.79-1.11,4-2.75a53.86,53.86,0,0,0-1.11,5.65,21.12,21.12,0,0,0-4.55,2.95,2.67,2.67,0,0,0-.81,3,3,3,0,0,0,2.89,1.46l.42,0c2.72-.19,2.77-1.72,2.85-4,0-.72.05-1.54.15-2.51a1.1,1.1,0,0,1,0-.18c.78-.39,1.34-.65,1.35-.65a.52.52,0,1,0-.43-1l-.76.36a69,69,0,0,1,1.89-8.12A.52.52,0,0,0,392.62,255.88Zm-3,12.65c-.08,2.44-.15,2.91-1.88,3-1.16.08-2-.23-2.3-.84a1.71,1.71,0,0,1,.61-1.84,17.79,17.79,0,0,1,3.68-2.44C389.7,267.23,389.67,267.91,389.65,268.53Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 388.629px 264.233px;" class="animable"></path>
                </g>
                <g id="el8m7t17ajq6j">
                  <path
                    d="M399.32,266.76a2.73,2.73,0,0,1-1,.73c0-.23,0-.55.05-.81a7.24,7.24,0,0,0-.28-3.4,1,1,0,0,0-.9-.67c-.56,0-1.17.7-1.73,1.61l.15-.85a.51.51,0,0,0-.42-.6.51.51,0,0,0-.6.41l-.84,4.61a.51.51,0,0,0,.37.59.5.5,0,0,0,.62-.3,14.91,14.91,0,0,1,2.4-4.38,6.39,6.39,0,0,1,.19,2.9c-.07,1-.12,1.59.31,1.91a.73.73,0,0,0,.44.14,1.08,1.08,0,0,0,.36-.07,3.82,3.82,0,0,0,1.7-1.24.52.52,0,1,0-.86-.58Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 396.996px 265.63px;" class="animable"></path>
                </g>
                <g id="elnwshcqkz3ml">
                  <path
                    d="M407.07,258.6a.52.52,0,0,0-.59.15,1.08,1.08,0,0,1-1.58.15c-.49-.41.1-2,.62-3.32a17.21,17.21,0,0,0,1-3.33c.13-.89,0-1.47-.51-1.73-.89-.5-2.3.57-2.86,1a.52.52,0,0,0,.68.79,3.74,3.74,0,0,1,1.65-1s.1.14,0,.68a15.67,15.67,0,0,1-1,3.12c-.74,1.93-1.38,3.6-.31,4.48a2,2,0,0,0,2,.42,57.68,57.68,0,0,1-1.16,8.47,2.44,2.44,0,0,1-2.95,1.94.52.52,0,0,0-.62.39.51.51,0,0,0,.39.62,3.22,3.22,0,0,0,.74.08,3.47,3.47,0,0,0,3.44-2.74,66.2,66.2,0,0,0,1.27-9.75A.53.53,0,0,0,407.07,258.6Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 404.353px 260.95px;" class="animable"></path>
                </g>
                <g id="el1yew8vmu8gx">
                  <path d="M410.65,260h4.19a.52.52,0,0,0,0-1h-4.19a.52.52,0,1,0,0,1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 412.602px 259.5px;" class="animable"></path>
                </g>
                <g id="el4l5j45ugpk7">
                  <path
                    d="M409.7,261.48l5,1h.11a.51.51,0,0,0,.5-.41.52.52,0,0,0-.4-.62l-5-1.05a.52.52,0,0,0-.61.41A.51.51,0,0,0,409.7,261.48Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 412.297px 261.435px;" class="animable"></path>
                </g>
                <g id="elnniyszeohe">
                  <path
                    d="M413.66,265.91a.5.5,0,0,0-.59.42l-.64,3.83a3,3,0,0,0-2-1.11,2.73,2.73,0,0,0-2.31,1.48c-1.62,2.43-1.67,5.17-.71,6.11a1.16,1.16,0,0,0,.82.34,1.4,1.4,0,0,0,.83-.29,16.53,16.53,0,0,0,2.8-3.11l-.47,2.81a.52.52,0,0,0,.43.6h.08a.52.52,0,0,0,.51-.44l1.68-10.06A.5.5,0,0,0,413.66,265.91Zm-5.2,9.93c-.21.16-.28.1-.32.05-.51-.48-.57-2.67.84-4.78.45-.68.91-1,1.37-1h0c.7,0,1.39.83,1.74,1.34A23.77,23.77,0,0,1,408.46,275.84Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 410.437px 271.445px;" class="animable"></path>
                </g>
                <g id="elsvoc6fk3ux9">
                  <path
                    d="M417.76,266.92a1.78,1.78,0,0,0-1.3,1.17,5.92,5.92,0,0,0-.36,2.11,7.56,7.56,0,0,0-1.85.34.52.52,0,0,0-.33.65.53.53,0,0,0,.66.33,6.94,6.94,0,0,1,1.49-.28v.19c0,1.81,0,3.87-1.11,4.62a.52.52,0,0,0-.13.72.51.51,0,0,0,.43.23.46.46,0,0,0,.29-.1c1.51-1,1.53-3.39,1.55-5.46v-.1a1.19,1.19,0,0,1,.51.27.53.53,0,0,0,.37.15.55.55,0,0,0,.37-.15.53.53,0,0,0,0-.74,2.38,2.38,0,0,0-1.22-.6,5.07,5.07,0,0,1,.28-1.75c.15-.35.33-.54.54-.58.41-.08,1,.36,1.13.52a.51.51,0,0,0,.73,0,.52.52,0,0,0,0-.73A2.64,2.64,0,0,0,417.76,266.92Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 416.928px 271.958px;" class="animable"></path>
                </g>
                <g id="el207hfjyhkky">
                  <path
                    d="M422.77,274.25c.13-1.56.34-4.66.34-7.62a6.52,6.52,0,0,0-1.9-5.08,6.21,6.21,0,0,0,2.25-2.41c.91-1.57.66-3.61.4-5.76a16.41,16.41,0,0,1-.13-4.68,1.56,1.56,0,0,1,.8-1.31c.92-.39,2.48.45,3,.81a.52.52,0,0,0,.72-.14.51.51,0,0,0-.13-.72c-.24-.16-2.39-1.58-4-.9a2.51,2.51,0,0,0-1.42,2.08,17,17,0,0,0,.12,5c.24,2,.47,3.85-.27,5.11-1.27,2.18-2.49,2.26-2.49,2.26a.52.52,0,0,0-.2,1c.09,0,2.2,1,2.2,4.76,0,4.12-.41,8.5-.42,8.54a.52.52,0,0,0,.26.5.48.48,0,0,0,.26.07.54.54,0,0,0,.3-.1c.64-.46,2.13-1.24,2.68-.68a.52.52,0,1,0,.74-.74C425,273.35,423.67,273.79,422.77,274.25Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 423.943px 261.008px;" class="animable"></path>
                </g>
                <g id="elr0wyc9cjtpo">
                  <path
                    d="M432.8,263.85a13.26,13.26,0,0,1-.79-1.7,32.88,32.88,0,0,0,2.38-5.41.51.51,0,0,0-.32-.66.52.52,0,0,0-.66.32,33.21,33.21,0,0,1-1.9,4.48c-.56-1.45-1.18-3.21-1.72-4.89a.53.53,0,0,0-.66-.33.52.52,0,0,0-.33.65c.86,2.64,1.52,4.47,2,5.75-.82,1.36-1.65,2.28-2.3,2.17a2.17,2.17,0,0,1-1.56-.73.72.72,0,0,1-.12-.5.52.52,0,1,0-1-.28,1.66,1.66,0,0,0,.23,1.31,3.1,3.1,0,0,0,2.28,1.22,1.07,1.07,0,0,0,.25,0c1,0,1.88-.88,2.72-2.07.79,1.72,1.13,1.82,1.3,1.86h.1a.76.76,0,0,0,.48-.18l1.89-1.89-.74-.73Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 430.422px 260.446px;" class="animable"></path>
                </g>
                <g id="elc2g1rheyd2">
                  <path
                    d="M441.68,269a5.29,5.29,0,0,1-.44.46,13.8,13.8,0,0,1-.13-1.49,12.22,12.22,0,0,0-.43-3.2c-.23-.68-.62-.83-.91-.83h0c-.66,0-1.43,1-2.31,3.08l.31-3.72a.52.52,0,1,0-1-.09l-.63,7.55a.52.52,0,0,0,.41.55h.11a.51.51,0,0,0,.49-.36c.8-2.47,2-5.24,2.57-5.87h0a11.78,11.78,0,0,1,.38,2.92c.06,1.39.11,2.31.8,2.54s1.13-.34,1.59-.9a.51.51,0,0,0-.06-.73A.52.52,0,0,0,441.68,269Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 439.377px 266.955px;" class="animable"></path>
                </g>
                <g id="eloeunhi3psbb">
                  <path
                    d="M448.15,260.66h-.6c0-.8.07-1.53.07-1.78a.52.52,0,0,0-.52-.52.52.52,0,0,0-.52.52c0,.24,0,1-.07,1.78h-2.34a.52.52,0,1,0,0,1h2.29c0,.84-.08,1.53-.08,1.55a.51.51,0,0,0,.48.54h0a.52.52,0,0,0,.52-.49c0-.07,0-.78.09-1.61h.65a.52.52,0,0,0,0-1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 446.002px 261.055px;" class="animable"></path>
                </g>
                <g id="el5srjx6si2ie">
                  <path
                    d="M456,257.44c-.46-.11-.63.2-1.11,1s-1.7,3-2.43,2.83-.9-2.72-.66-4.46a.52.52,0,0,0-1-.14c-.12.85-.59,5.1,1.43,5.6,1.23.31,2.28-1.11,3.08-2.44-.21,2.8-.84,7.16-1.94,7.77a.9.9,0,0,1-.8.09c-.71-.27-1.25-1.46-1.39-1.89a.52.52,0,0,0-1,.32c.07.21.71,2,2,2.54a1.65,1.65,0,0,0,.66.13,2.11,2.11,0,0,0,1-.28c2.34-1.3,2.57-10.42,2.57-10.51A.66.66,0,0,0,456,257.44Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 453.283px 262.567px;" class="animable"></path>
                </g>
                <g id="elitpl8ahlj7">
                  <path
                    d="M463,269.2a.49.49,0,0,0-.59-.1c0-.3,0-.7,0-1a11.55,11.55,0,0,0-.15-3.47c-.19-.71-.56-.86-.84-.86h0c-.27,0-.93,0-2,3.28l-.48-3a.52.52,0,1,0-1,.17l.84,5.23a.51.51,0,0,0,.49.44.53.53,0,0,0,.53-.38,25.18,25.18,0,0,1,1.56-4.39,11.84,11.84,0,0,1,.06,2.92c-.07,1.33-.12,2.06.46,2.32a.71.71,0,0,0,.28.06,1.35,1.35,0,0,0,.85-.47A.5.5,0,0,0,463,269.2Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 460.538px 266.961px;" class="animable"></path>
                </g>
                <g id="el9ve0gry2mbu">
                  <path
                    d="M466.47,265.28a12.42,12.42,0,0,1,1-7.62.51.51,0,0,0-.12-.64l-1.46-1.26c-.65-.56-.55-.83.05-2a14.74,14.74,0,0,0,.94-2.26c.1-.32.4-1.3-.24-1.73s-2.27.5-3.09,1.17a.51.51,0,0,0-.08.73.52.52,0,0,0,.73.08,6.18,6.18,0,0,1,1.8-1.09,2.1,2.1,0,0,1-.11.53,12.3,12.3,0,0,1-.88,2.1c-.58,1.16-1.08,2.16.2,3.27l1.16,1a13.49,13.49,0,0,0-.91,7.92,27.27,27.27,0,0,0,1.11,4c.73,2.14.79,2.59-.15,2.94a2.14,2.14,0,0,1-2.7-1.2A.51.51,0,0,0,463,271a.52.52,0,0,0-.26.68,3.28,3.28,0,0,0,2.85,2,3.43,3.43,0,0,0,1.16-.22c2-.72,1.45-2.28.77-4.25A25.57,25.57,0,0,1,466.47,265.28Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 465.419px 261.67px;" class="animable"></path>
                </g>
                <g id="elmeju140ksm">
                  <path
                    d="M198,95.78a.51.51,0,0,0-.59.44,12.49,12.49,0,0,1-1.18,4,.53.53,0,0,0,.43.81.53.53,0,0,0,.44-.23,14.06,14.06,0,0,0,1.34-4.41A.52.52,0,0,0,198,95.78Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 197.299px 98.4015px;" class="animable"></path>
                </g>
                <g id="elbqdt48twnkc">
                  <path
                    d="M197.48,94.29h.05a.52.52,0,0,0,.47-.57l-.21-2.09a.52.52,0,1,0-1,.1l.21,2.1A.5.5,0,0,0,197.48,94.29Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 197.38px 92.6584px;" class="animable"></path>
                </g>
                <g id="el58muwyhd792">
                  <path
                    d="M204.53,96.52a.53.53,0,0,0,.72-.16l1.3-2-2,10.83a.51.51,0,0,0,.41.61h.1a.52.52,0,0,0,.51-.42L208.05,92a.51.51,0,0,0-.32-.58.52.52,0,0,0-.63.2l-2.72,4.19A.53.53,0,0,0,204.53,96.52Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 206.182px 98.5913px;" class="animable"></path>
                </g>
                <g id="el0cfbuqv5ofzl">
                  <path
                    d="M209.22,94.92a13.82,13.82,0,0,1,2.21-2.49v0c-.19,2.36-2.41,6-2.44,6a.53.53,0,0,0,.12.68.52.52,0,0,0,.68,0c1.49-1.43,3.23-2.53,3.65-2.33,0,0,.16.23.09.85-.31,2.76-1.81,5.09-3,5.46a.83.83,0,0,1-1-.3.51.51,0,0,0-.73,0,.52.52,0,0,0,0,.73,1.89,1.89,0,0,0,1.44.69,2.18,2.18,0,0,0,.6-.09c1.7-.54,3.35-3.39,3.68-6.34.11-1-.11-1.62-.66-1.89-.71-.35-1.8.15-2.78.82a13.35,13.35,0,0,0,1.35-4.18c0-.68-.12-1.11-.53-1.26s-1.07-.4-3.55,3a.51.51,0,0,0,.11.72A.52.52,0,0,0,209.22,94.92Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 211.398px 97.7031px;" class="animable"></path>
                </g>
                <g id="elen0sfaiiuhp">
                  <path
                    d="M209.8,85.28h0a.52.52,0,0,0,.51-.48l1-11.73a.52.52,0,0,0-.47-.56.5.5,0,0,0-.56.47l-1,11.73A.5.5,0,0,0,209.8,85.28Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 210.293px 78.8935px;" class="animable"></path>
                </g>
                <g id="elgdi143bu8vh">
                  <path
                    d="M212.32,85.07h0a.52.52,0,0,0,.52-.48l.83-11.32a.52.52,0,0,0-1-.08l-.84,11.32A.51.51,0,0,0,212.32,85.07Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 212.749px 78.9583px;" class="animable"></path>
                </g>
                <g id="elibd7c74nhua">
                  <path
                    d="M204.8,124.05h0a.52.52,0,0,0,.51-.5l.42-10.48a.52.52,0,0,0-.49-.54.51.51,0,0,0-.54.5l-.42,10.48A.52.52,0,0,0,204.8,124.05Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 205.005px 118.29px;" class="animable"></path>
                </g>
                <g id="eluwiqfrz07oc">
                  <path
                    d="M207.44,113.23l-.63,12a.52.52,0,0,0,.49.54h0a.52.52,0,0,0,.52-.49l.63-11.94a.53.53,0,0,0-.49-.55A.52.52,0,0,0,207.44,113.23Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 207.63px 119.28px;" class="animable"></path>
                </g>
                <g id="elitmdo5dikr">
                  <path
                    d="M212,123.26c-1.81.72-5.78,4.9-7.35,6.6l-2.44-7.33a.52.52,0,0,0-.66-.33.52.52,0,0,0-.33.65l2.73,8.18a.51.51,0,0,0,.38.34h.11a.52.52,0,0,0,.38-.17c1.55-1.72,5.94-6.34,7.56-7a.52.52,0,0,0-.38-1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 206.96px 126.771px;" class="animable"></path>
                </g>
                <g id="elmwl0ijk0owa">
                  <path
                    d="M220.81,133.25a2.85,2.85,0,0,1-.47.36,12.13,12.13,0,0,1,0-2.75c0-.81.09-1.74.09-2.67,0-.29,0-1.18-.68-1.34-.31-.08-1.16-.28-3.85,4.56l.54-3.35a.5.5,0,0,0-.43-.59.51.51,0,0,0-.59.43l-1,6.49a.52.52,0,0,0,.35.58.47.47,0,0,0,.16,0,.51.51,0,0,0,.47-.28,35,35,0,0,1,4-6.68v.16c0,.91,0,1.82-.09,2.62-.12,2.13-.19,3.41.59,3.78s1.36-.33,1.63-.57a.51.51,0,0,0,0-.73A.52.52,0,0,0,220.81,133.25Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 218.048px 130.9px;" class="animable"></path>
                </g>
                <g id="ellq273wv5sek">
                  <path
                    d="M232.47,130.65,228.7,129a.53.53,0,0,0-.68.27.51.51,0,0,0,.26.68l2,.89h-5.57a.52.52,0,0,0-.52.52.52.52,0,0,0,.52.52h5.57L228.62,133a.52.52,0,0,0-.14.72.52.52,0,0,0,.43.23.55.55,0,0,0,.3-.09l3.35-2.31a.52.52,0,0,0-.09-.9Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 228.485px 131.456px;" class="animable"></path>
                </g>
                <g id="elhscqofupkij">
                  <path
                    d="M243.88,127.05c-2.5-.46-5.11,1.48-5.22,1.56a.51.51,0,0,0-.16.2l-.12.25-.32-.28a6.31,6.31,0,0,0-2.29-1.51,1.58,1.58,0,0,0-2,1c-.64,1.39-.21,3.93,1.16,4.79a1.46,1.46,0,0,0,.8.23,1.53,1.53,0,0,0,.47-.07c1-.29,1.9-1.53,2.51-2.55a6.72,6.72,0,0,0,3.59,1.21c2.29.14,3.44-1,3.58-2.24A2.34,2.34,0,0,0,243.88,127.05Zm-8,5.15a.48.48,0,0,1-.42,0c-.88-.55-1.21-2.52-.77-3.49.16-.34.34-.43.53-.43a.67.67,0,0,1,.24,0,5.5,5.5,0,0,1,1.9,1.28l.51.45C237.29,131,236.52,132,235.89,132.2Zm6.46-1.38a5.68,5.68,0,0,1-3.14-1.09l.17-.36c.47-.32,2.5-1.63,4.31-1.3a1.31,1.31,0,0,1,1.15,1.42C244.76,130.16,244.06,130.9,242.35,130.82Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 239.688px 130.135px;" class="animable"></path>
                </g>
                <g id="elpq199y59zq8">
                  <path
                    d="M248,130.19a.53.53,0,0,0-.56.47,7,7,0,0,1-1.73,3.87.5.5,0,0,0,0,.73.51.51,0,0,0,.36.15.51.51,0,0,0,.37-.15,8,8,0,0,0,2-4.51A.52.52,0,0,0,248,130.19Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 246.997px 132.799px;" class="animable"></path>
                </g>
                <g id="elx8t1fnzz1n">
                  <path d="M248.61,127.77a.63.63,0,1,0,0,1.26.63.63,0,0,0,0-1.26Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 248.61px 128.4px;" class="animable"></path>
                </g>
                <g id="elxlxgbucc6a">
                  <path d="M354.21,104.51a.63.63,0,1,0-.63.63A.63.63,0,0,0,354.21,104.51Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 353.58px 104.51px;" class="animable"></path>
                </g>
                <g id="el6ac4hv5ptac">
                  <path d="M352.53,108.49a.63.63,0,0,0-.63.63.63.63,0,0,0,1.26,0A.63.63,0,0,0,352.53,108.49Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 352.53px 109.12px;" class="animable"></path>
                </g>
                <g id="eleo82ein0hdm">
                  <path d="M395.69,118.76a.63.63,0,0,0,0,1.26.63.63,0,1,0,0-1.26Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 395.69px 119.39px;" class="animable"></path>
                </g>
                <g id="ell1ywb4cpfwk">
                  <path d="M440.74,118.13a.63.63,0,1,0-.63-.63A.63.63,0,0,0,440.74,118.13Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 440.74px 117.5px;" class="animable"></path>
                </g>
                <g id="elf4m7766cck">
                  <path
                    d="M272.45,114.92a.51.51,0,0,0-.62.24c-.66,1.22-2.92,4.57-4.66,4.15a.76.76,0,0,1-.59-.46c-.35-.88.5-2.79,1.12-3.8a.52.52,0,0,0-.89-.54c-.19.31-1.86,3.08-1.19,4.73a1.79,1.79,0,0,0,1.3,1.07c1.66.42,3.29-1.09,4.4-2.51-.28,1.51-.66,3.49-1.05,5.36a7.53,7.53,0,0,0-4.32,4.18c-.9,1.89-.67,2.86-.31,3.33a1.42,1.42,0,0,0,1.17.55l.32,0a4.12,4.12,0,0,0,2.92-2.85c.33-1,.72-2.61,1.1-4.36a4,4,0,0,1,.89-.1.53.53,0,0,0,.55-.49.52.52,0,0,0-.49-.55,5.12,5.12,0,0,0-.72,0c.73-3.49,1.37-7.15,1.41-7.39A.51.51,0,0,0,272.45,114.92ZM269.07,128a3.13,3.13,0,0,1-2.1,2.14.5.5,0,0,1-.5-.12c-.2-.26-.19-1,.41-2.27a7,7,0,0,1,3.12-3.39C269.67,125.87,269.35,127.19,269.07,128Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 269.059px 122.742px;" class="animable"></path>
                </g>
                <g id="el4dziiby2rwj">
                  <path
                    d="M279.83,125.2a.53.53,0,0,0-.69.27,7.71,7.71,0,0,1-.62,1.18,15.21,15.21,0,0,1-.06-3.67c0-.37.08-1.24-.58-1.42-.29-.08-.91-.25-2.69,2.91a15.26,15.26,0,0,0-.1-2.69.52.52,0,0,0-.63-.38.53.53,0,0,0-.38.63,32.62,32.62,0,0,1,0,4.67.53.53,0,0,0,.39.53.51.51,0,0,0,.59-.27,28.31,28.31,0,0,1,2.37-4c-.27,4.33.28,4.83.82,5a.62.62,0,0,0,.19,0c.62,0,1.12-.81,1.66-2A.52.52,0,0,0,279.83,125.2Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 277.121px 124.676px;" class="animable"></path>
                </g>
                <g id="elrk6p8zwfh2h">
                  <path
                    d="M297.33,103.8a.52.52,0,0,0-.62.39l-2.51,10.89a.52.52,0,0,0,.39.63h.11a.52.52,0,0,0,.51-.4l2.51-10.9A.51.51,0,0,0,297.33,103.8Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 295.959px 109.749px;" class="animable"></path>
                </g>
                <g id="el5ty5voww8b7">
                  <path
                    d="M304.33,106.75a1,1,0,0,0-.25,0c.3-.92.51-1.7.56-1.92s.25-1.19-.37-1.5c-.26-.12-1-.49-3.89,3a.52.52,0,0,0,.8.66,15.62,15.62,0,0,1,2.48-2.5s0,.11,0,.18a18.65,18.65,0,0,1-.83,2.72,4,4,0,0,0-1.48,2.35c-.09.73.21.94.48,1,.61.1,1.3-1.24,1.85-2.66a1,1,0,0,1,.63-.24c.36,0,.39.87.39,1.13a3.63,3.63,0,0,1-2.63,3.48,1,1,0,0,1-1.19-.53.52.52,0,0,0-.67-.28.5.5,0,0,0-.29.67,1.88,1.88,0,0,0,1.83,1.2,2.21,2.21,0,0,0,.51,0,4.65,4.65,0,0,0,3.48-4.49C305.7,107.1,304.84,106.78,304.33,106.75Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 302.809px 108.391px;" class="animable"></path>
                </g>
                <g id="el08cv7759ucnv">
                  <path d="M312.09,109a.52.52,0,1,0,0-1h-3.77a.52.52,0,1,0,0,1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 310.205px 108.5px;" class="animable"></path>
                </g>
                <g id="el2o8hbewdkut">
                  <path d="M314,110.28l-5.45-.42a.55.55,0,0,0-.56.48.53.53,0,0,0,.48.56l5.45.42h0a.52.52,0,0,0,0-1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 311.143px 110.59px;" class="animable"></path>
                </g>
                <g id="elh2kotpu18vt">
                  <path
                    d="M324.79,112.59a8.23,8.23,0,0,0-1.38.37,39.91,39.91,0,0,0,.52-7,.52.52,0,0,0-1-.1s-.11.47-.3,1.09c-.76-.41-2.25-1.07-3.36-.63a1.92,1.92,0,0,0-1.16,1.42,2.54,2.54,0,0,0,1.2,3.05,2.35,2.35,0,0,0,2.85-.5,5.4,5.4,0,0,0,.67-1.05,35.54,35.54,0,0,1-.53,4.19,14.16,14.16,0,0,0-5.51,4.28A4.07,4.07,0,0,0,316,121c.32,1.35.9,2.06,1.73,2.12h.1c2,0,3.87-4.29,4.39-5.63a20.79,20.79,0,0,0,1-3.32,7.74,7.74,0,0,1,1.76-.54.52.52,0,1,0-.16-1Zm-3.46-3a1.32,1.32,0,0,1-1.58.23,1.48,1.48,0,0,1-.66-1.87.9.9,0,0,1,.53-.71,1.23,1.23,0,0,1,.44-.07,5.36,5.36,0,0,1,2.19.73A6.44,6.44,0,0,1,321.33,109.63Zm-.08,7.48c-1.45,3.69-2.93,5-3.46,5-.3,0-.6-.52-.79-1.33a3.09,3.09,0,0,1,.62-2.45,12.48,12.48,0,0,1,4.37-3.57A20.14,20.14,0,0,1,321.25,117.11Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 320.731px 114.322px;" class="animable"></path>
                </g>
                <g id="el3691i2bl1sx">
                  <path
                    d="M331.16,109.43a.48.48,0,0,0,.48-.52.56.56,0,0,0-.49-.52,2,2,0,0,1,.25-.69.52.52,0,0,0-.19-.7.51.51,0,0,0-.71.19c-.15.26-.61,1.16-.25,1.78A1,1,0,0,0,331.16,109.43Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 330.879px 108.179px;" class="animable"></path>
                </g>
                <g id="el2suz4l9f1y2">
                  <path
                    d="M331.18,110.11a.5.5,0,0,0-.29.67s.87,2.27.07,3.83a2.68,2.68,0,0,1-1.82,1.35.51.51,0,0,0-.37.63.52.52,0,0,0,.5.39l.14,0a3.68,3.68,0,0,0,2.48-1.88c1-2,0-4.57,0-4.68A.5.5,0,0,0,331.18,110.11Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 330.543px 113.517px;" class="animable"></path>
                </g>
                <g id="elt3a8lrdusae">
                  <path
                    d="M347.57,108.27a.5.5,0,0,0-.71.16c-.5.77-1,1.17-1.28,1.09-.48-.11-1-1-1.38-2.34a31.5,31.5,0,0,0,2.73-4.76.51.51,0,0,0-.26-.68.52.52,0,0,0-.69.26,31.88,31.88,0,0,1-2.14,3.87,29.15,29.15,0,0,1-.64-3.72.53.53,0,0,0-.57-.46.52.52,0,0,0-.46.57,29.32,29.32,0,0,0,.89,4.72,13.12,13.12,0,0,1-1.16,1.36,6.09,6.09,0,0,1-.6.53,5.06,5.06,0,0,1,.2-.84.52.52,0,1,0-1-.33c-.27.82-.47,1.88.14,2.26a.73.73,0,0,0,.4.11,2.74,2.74,0,0,0,1.58-1c.28-.28.55-.59.82-.91.47,1.22,1.09,2.18,1.89,2.37a1.24,1.24,0,0,0,.33,0c.69,0,1.38-.53,2.06-1.59A.52.52,0,0,0,347.57,108.27Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 344.012px 106.115px;" class="animable"></path>
                </g>
                <g id="el2hrjddt7uav">
                  <path
                    d="M360.73,101.73c-1.63.62-2.33,2.89-2.69,5.85l-.1,0a.52.52,0,0,0-.21.7s.08.14.2.32c-.13,1.43-.21,3-.29,4.56-.05,1.08-.11,2.17-.18,3.22-.22,3.27-1.64,4.93-2.94,5.14s-2.41-.85-3.18-2.78a.52.52,0,0,0-.68-.29.53.53,0,0,0-.29.67c.88,2.2,2.3,3.46,3.85,3.46a2.45,2.45,0,0,0,.46,0c2.05-.32,3.59-2.77,3.82-6.09.07-1.06.12-2.15.18-3.24s.12-2.45.21-3.62a2.78,2.78,0,0,0,1.21.53,3.35,3.35,0,0,0,2.84-1.07,5,5,0,0,0,.88-6.19A2.47,2.47,0,0,0,360.73,101.73Zm1.51,6.59a2.39,2.39,0,0,1-2,.82,2.23,2.23,0,0,1-1.28-.81c.29-2.87.84-5.15,2.1-5.64a1.49,1.49,0,0,1,1.84.76A4,4,0,0,1,362.24,108.32Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 357.427px 112.077px;" class="animable"></path>
                </g>
                <g id="el8v461ajhva">
                  <path
                    d="M374.84,113.62c-.57,3.79-.69,5,0,5.41a.76.76,0,0,0,.32.08,1.14,1.14,0,0,0,.77-.4,28.09,28.09,0,0,0,2.14-2.36.52.52,0,0,0-.11-.73.51.51,0,0,0-.72.11,27.32,27.32,0,0,1-1.86,2.06,33.84,33.84,0,0,1,.47-4c.16-1.06.32-2.15.43-3.13.05-.46.15-1.32-.5-1.47-.88-.2-2.38,2.86-3.35,5.08,0-1.39,0-3.21.09-4.91a.53.53,0,0,0-.51-.54.56.56,0,0,0-.53.51c-.21,7.79-.15,7.8.4,7.89a.57.57,0,0,0,.61-.38,55.19,55.19,0,0,1,2.7-5.76C375.11,111.89,375,112.77,374.84,113.62Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 374.77px 113.965px;" class="animable"></path>
                </g>
                <g id="ele609jsxkxpp">
                  <path
                    d="M395.27,107.65a10.73,10.73,0,0,1-5,1.16,18,18,0,0,1-5.6-.53,8.38,8.38,0,0,0-1.47-.3,1.56,1.56,0,0,0-1.28.34c-.71.64-.71,2-.71,4.12,0,.91,0,2-.05,3.16-.2,4.4-3.24,11.6-4.47,13.41-.07-.51-.11-1.34-.13-2a29,29,0,0,0-.24-3.09c-.07-.43-.27-1.75-1.15-2s-1.39.6-1.45.69a.51.51,0,0,0,.1.72.52.52,0,0,0,.73-.09.9.9,0,0,1,.36-.31s.24.14.39,1.12a28.81,28.81,0,0,1,.22,3c.08,2.07.15,3,.78,3.25a.67.67,0,0,0,.26,0,.94.94,0,0,0,.66-.33c1.17-1.17,4.76-9.54,5-14.38.06-1.22.06-2.27.06-3.2,0-1.62,0-3,.37-3.35,0,0,.13-.12.46-.08a7.5,7.5,0,0,1,1.31.27,18.8,18.8,0,0,0,5.88.57,11.77,11.77,0,0,0,5.47-1.26l.48-.22c0,.11,0,.28,0,.54,0,2.68-.2,5.38-.21,5.41a.53.53,0,0,0,.48.56.54.54,0,0,0,.56-.48s.21-2.77.21-5.49c0-.64,0-1.23-.47-1.5S395.91,107.35,395.27,107.65Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 385.452px 118.78px;" class="animable"></path>
                </g>
                <g id="el5jjf64f7els">
                  <path
                    d="M390.6,114.7a.52.52,0,0,0-.64.35l-1.21,4-3.66-.32a9.06,9.06,0,0,0,1.22-1.86,7.91,7.91,0,0,0,.51-4.17c0-.19,0-.35,0-.46a.52.52,0,0,0-.52-.52.52.52,0,0,0-.52.52c0,.13,0,.32,0,.55a6.84,6.84,0,0,1-.4,3.61,7.58,7.58,0,0,1-1.75,2.35.52.52,0,0,0-.17.55.54.54,0,0,0,.45.37l4.54.39-1,3.34a.53.53,0,0,0,.35.65l.15,0a.53.53,0,0,0,.5-.37l2.51-8.38A.52.52,0,0,0,390.6,114.7Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 387.204px 117.885px;" class="animable"></path>
                </g>
                <g id="el3h1muqknkjw">
                  <path
                    d="M405.2,112.2c-.29,1.29-.52,2.31,0,2.85a1,1,0,0,0,.72.28,1.5,1.5,0,0,0,.35,0c2.18-.49,2.29-1.56,2.29-1.77a.54.54,0,0,0-.51-.54.5.5,0,0,0-.52.5c0,.13-.35.54-1.48.79l-.11,0a6.41,6.41,0,0,1,.27-1.87,6.42,6.42,0,0,0,.23-3.28.88.88,0,0,0-.77-.63c-.8,0-1.83,1.4-2.76,3.08v-2.06a.53.53,0,0,0-.52-.52.52.52,0,0,0-.52.52v4.19a.52.52,0,0,0,.4.51.53.53,0,0,0,.59-.28,17.67,17.67,0,0,1,2.65-4.3A7.41,7.41,0,0,1,405.2,112.2Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 405.215px 111.935px;" class="animable"></path>
                </g>
                <g id="elgrda7var6x">
                  <path
                    d="M436.45,105.78a56.37,56.37,0,0,1-9,1.57,84.58,84.58,0,0,1-16-.63.53.53,0,0,0-.58.42c0,.15-2.74,14.48-4.59,19.62a3.34,3.34,0,0,1-.44.9c-.56-.69-1.21-4.42-1.49-7.69a.52.52,0,0,0-.56-.47.52.52,0,0,0-.47.56c.33,3.87,1,8.51,2.42,8.7h.12c.71,0,1.12-.87,1.4-1.65,1.7-4.74,4-16.7,4.54-19.29a85.18,85.18,0,0,0,15.76.56,57.4,57.4,0,0,0,9.1-1.59c.77-.18,1.55-.37,1.93-.41a30.88,30.88,0,0,1,.14,3.16.52.52,0,1,0,1,0,22.15,22.15,0,0,0-.23-3.72C439.31,105.09,438.53,105.28,436.45,105.78Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 421.534px 117.049px;" class="animable"></path>
                </g>
                <g id="elmrfo5i9t1p">
                  <path
                    d="M414.45,113.22a.53.53,0,0,0-.41.61,77.52,77.52,0,0,1-.63,8.44.51.51,0,0,0,.45.57h.06a.52.52,0,0,0,.52-.46c.14-1.27.83-7.68.62-8.75A.53.53,0,0,0,414.45,113.22Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 414.253px 118.026px;" class="animable"></path>
                </g>
                <g id="el60pss07ktyu">
                  <path
                    d="M420.84,115.69a1.67,1.67,0,0,0-.77,0,8.68,8.68,0,0,0,.65-2c0-.27.2-1.1-.41-1.39-.22-.1-.89-.42-2.8,1.79a.52.52,0,0,0,.79.68,8.92,8.92,0,0,1,1.41-1.35s0,.05,0,.08a6.8,6.8,0,0,1-1.54,3.29.52.52,0,0,0,0,.72.51.51,0,0,0,.72,0c.33-.3,1.22-.91,1.69-.78.17,0,.3.23.4.54.71,2.39-1.49,3.32-2.18,3.55a1.06,1.06,0,0,1-.9,0,1.52,1.52,0,0,1-.52-1,.52.52,0,1,0-1,.1,2.57,2.57,0,0,0,1,1.78,1.79,1.79,0,0,0,1,.27,2.55,2.55,0,0,0,.81-.14c2.41-.8,3.51-2.66,2.85-4.83A1.64,1.64,0,0,0,420.84,115.69Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 419.288px 117.098px;" class="animable"></path>
                </g>
                <g id="el2qzs7z5mk0s">
                  <path
                    d="M433.25,113c-1.19,1.19-1.6,1.13-1.67,1.11-.35-.12-.55-1.44-.68-2.32l-.12-.82c-.13-.73-.49-.93-.78-1-.74-.11-1.81,1.11-3.16,3.63l-.25-2.62a.52.52,0,1,0-1,.1l.42,4.4a.51.51,0,0,0,.42.46h.09a.52.52,0,0,0,.47-.29,19.89,19.89,0,0,1,2.79-4.55h0c.05.27.09.54.13.8.22,1.52.41,2.84,1.37,3.15.72.24,1.56-.18,2.73-1.36a.52.52,0,1,0-.73-.73Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 429.883px 112.952px;" class="animable"></path>
                </g>
                <g id="eli4kkfdgqzjh">
                  <path
                    d="M442.08,120.08a.53.53,0,0,0-.65-.35.52.52,0,0,0-.35.64s.9,3.16-.78,4a.52.52,0,0,0,.23,1,.46.46,0,0,0,.23-.06C443.22,124.07,442.12,120.24,442.08,120.08Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 441.168px 122.54px;" class="animable"></path>
                </g>
                <g id="elwxc3j88hl6">
                  <path
                    d="M237.92,105.66a.52.52,0,0,0,.05-1l-3.79-.36a40.72,40.72,0,0,0,1.12-6.21,5.55,5.55,0,0,0-1.34-4,6.79,6.79,0,0,0,2.29-.64c2-.89,1.59-5,1.29-8.29a18.74,18.74,0,0,1-.15-2.81c0-.07,0-.12,0-.16a6.47,6.47,0,0,1,1.11,1.42.53.53,0,0,0,.72.18.52.52,0,0,0,.17-.71c-.6-1-1.5-2.18-2.3-2q-.65.15-.75,1.17a18.53,18.53,0,0,0,.15,3c.23,2.5.61,6.67-.69,7.26-2,.91-3.11.43-3.11.42a.53.53,0,0,0-.69.21.52.52,0,0,0,.17.69A5,5,0,0,1,234.26,98a40.66,40.66,0,0,1-1.24,6.6.57.57,0,0,0,.07.44.54.54,0,0,0,.38.22l4.4.42Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 235.699px 93.3708px;" class="animable"></path>
                </g>
                <g id="elfuuxglxmfum">
                  <path
                    d="M239,95.64a.51.51,0,0,0-.35.64c.22.72.63.92.95,1h.13c.65,0,1.56-.57,3.45-3.55.29,1.58.74,2.92,1.75,3.2a1.47,1.47,0,0,0,.36,0c.94,0,1.83-1,2.44-1.73a.52.52,0,0,0-.82-.65c-1.08,1.37-1.58,1.37-1.71,1.33-.63-.17-1-2.13-1.19-3.55l.2-.34c1.19-2,2.74-1.52,2.92-1.45a.52.52,0,0,0,.67-.29.52.52,0,0,0-.29-.68,3.34,3.34,0,0,0-3.74,1.24,4.8,4.8,0,0,0-.4-1.43,1.16,1.16,0,0,0-1.06-.69c-1,0-1.91,1.5-2.15,2a.52.52,0,1,0,.91.49c.39-.72,1-1.41,1.25-1.42,0,0,.07,0,.15.18a10,10,0,0,1,.45,2.15v.07c-2.38,3.95-3.13,4.08-3.18,4.1a.58.58,0,0,1-.1-.24A.52.52,0,0,0,239,95.64Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 243.235px 92.985px;" class="animable"></path>
                </g>
                <g id="elkx6xrvfo6b">
                  <path
                    d="M253.52,99.53c0-1.3.06-2.91-1.21-3.27a1.12,1.12,0,0,0-.93.15,2.23,2.23,0,0,0-.65.73l.07-1a.52.52,0,0,0-1-.08l-.42,5.66a.53.53,0,0,0,.45.56h.06a.53.53,0,0,0,.52-.44c.25-1.65.9-4.16,1.65-4.61.49.14.47,1.31.45,2.25a3.67,3.67,0,0,0,.32,2.17.52.52,0,1,0,.83-.62A4.43,4.43,0,0,1,253.52,99.53Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 251.586px 98.9983px;" class="animable"></path>
                </g>
                <g id="elmvxntolzug">
                  <path
                    d="M260.84,81.59c.21-.82-.07-1.21-.34-1.39-1-.67-3.33.76-4.65,1.68a.52.52,0,1,0,.6.85A9.94,9.94,0,0,1,259.87,81a.72.72,0,0,1,0,.34,10.89,10.89,0,0,1-1.74,3c-1,1.35-1.8,2.51-1.53,3.44a1.32,1.32,0,0,0,.85.86,6.71,6.71,0,0,0,2.19.56c-.49,1.74-1.55,6-1,8.7s.15,5.4-.74,6.1a.74.74,0,0,1-.84,0,.51.51,0,0,0-.68.26.52.52,0,0,0,.25.69,2.25,2.25,0,0,0,.88.2,1.63,1.63,0,0,0,1-.37c1.39-1.08,1.62-4.47,1.12-7.11-.59-3.18,1.23-8.9,1.24-9a.53.53,0,0,0-.16-.59.48.48,0,0,0-.58,0s-.58.23-2.28-.45c-.21-.09-.24-.17-.25-.2-.13-.44.71-1.6,1.38-2.53A11.09,11.09,0,0,0,260.84,81.59Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 258.272px 92.5885px;" class="animable"></path>
                </g>
                <g id="eljgv5mebqkj7">
                  <path
                    d="M267.59,98.83a7.09,7.09,0,0,0,4.19-1.46.51.51,0,0,0,.06-.73.52.52,0,0,0-.73-.07,5.78,5.78,0,0,1-5.16,1,2.47,2.47,0,0,1-1.67-1.83A6.48,6.48,0,0,1,266,90.2c1.51-1.65,3.3-.68,4.86.37.25.16.46.3.6.37a.52.52,0,0,0,.7-.23.53.53,0,0,0-.23-.7,4.43,4.43,0,0,1-.49-.31c-1.19-.79-4-2.65-6.2-.2A7.5,7.5,0,0,0,263.27,96a3.49,3.49,0,0,0,2.35,2.55A6.27,6.27,0,0,0,267.59,98.83Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 267.684px 93.5546px;" class="animable"></path>
                </g>
                <g id="ellgrmpp30h9e">
                  <path
                    d="M284.25,96.21a2.75,2.75,0,0,1-3,.7c-1.25-.5-2.51-3.77-3.12-6a13.92,13.92,0,0,0,2.29-.76,3.34,3.34,0,0,0,2-1.86A4.11,4.11,0,0,0,282,85a2.15,2.15,0,0,0-1.57-1.27,4.22,4.22,0,0,0-3,1V84a.52.52,0,0,0-.51-.53h0a.53.53,0,0,0-.52.51l-.21,12.78a.52.52,0,0,0,.51.53h0a.51.51,0,0,0,.52-.51l.09-5.17c.53,1.85,1.8,5.55,3.6,6.27a3.65,3.65,0,0,0,1.38.28A4,4,0,0,0,285,96.89a.53.53,0,0,0-.05-.73A.52.52,0,0,0,284.25,96.21ZM277.31,90l.07-3.92.08,0c.41-.39,1.81-1.46,2.75-1.28a1.15,1.15,0,0,1,.83.71,3.19,3.19,0,0,1,.4,2.42,2.37,2.37,0,0,1-1.4,1.27,12.78,12.78,0,0,1-2.61.8Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 280.656px 90.815px;" class="animable"></path>
                </g>
                <g id="elibb4fzadb4s">
                  <path
                    d="M308.46,98a.51.51,0,0,0,.16.24l.05,0a.33.33,0,0,0,.1.06.39.39,0,0,0,.18,0H309a.39.39,0,0,0,.21-.08.05.05,0,0,0,0,0,.46.46,0,0,0,.17-.22h0c0-.06,2.28-6,4.45-7.74a.52.52,0,0,0,.07-.73.51.51,0,0,0-.73-.07c-1.42,1.16-2.8,3.74-3.71,5.7l.37-18.91a.52.52,0,0,0-.51-.53.54.54,0,0,0-.53.51l-.35,17.83-1.56-6a.53.53,0,0,0-.64-.37.52.52,0,0,0-.37.63l2.52,9.64S308.46,98,308.46,98Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 309.936px 87.0153px;" class="animable"></path>
                </g>
                <g id="ely684u6zq6q9">
                  <path
                    d="M329,88.4a.52.52,0,0,0-.73.07c-1.09,1.31-1.46,1.32-1.45,1.34-.34-.28-.28-2.36-.25-3.61a19,19,0,0,0-.12-3.79c-.12-.6-.39-.92-.8-.93s-1.1,0-2.95,5.3l.41-4.43a.52.52,0,0,0-.47-.56.54.54,0,0,0-.57.47l-.84,9.22a.52.52,0,0,0,.42.55h.1a.53.53,0,0,0,.5-.37,54.44,54.44,0,0,1,3.22-8.84,22.38,22.38,0,0,1,.07,3.35c-.07,2.44-.12,4.21.9,4.59.68.26,1.47-.24,2.63-1.64A.52.52,0,0,0,329,88.4Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 325.206px 86.7546px;" class="animable"></path>
                </g>
                <g id="ele6716mr2l3i">
                  <path
                    d="M344.25,85.6a.52.52,0,0,0-.34-.43l-4.61-1.68a.52.52,0,1,0-.36,1l1.62.59-7.07-.34a.52.52,0,0,0-.05,1l8.48.4L338,88.57a.52.52,0,0,0,.27,1,.5.5,0,0,0,.27-.08L344,86.1A.53.53,0,0,0,344.25,85.6Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 338.669px 86.518px;" class="animable"></path>
                </g>
                <g id="elo66d7j4zzv">
                  <path
                    d="M352.41,85.77l.17-.13c1.58,1.81,3.33,2.1,4.4,1.56.84-.43,1.57-1.53,1.08-3.35a1.86,1.86,0,0,0-1.18-1.45c-1.18-.38-2.77.69-4.28,1.89-.94-.65-3.08-2-4.55-1.57a1.79,1.79,0,0,0-1.23,1,2.61,2.61,0,0,0,.56,3.22,2.54,2.54,0,0,0,1.64.57,3.34,3.34,0,0,0,1.92-.64C351.37,86.62,351.87,86.21,352.41,85.77Zm4.15-2.38c.08,0,.33.11.5.72.27,1,.07,1.85-.55,2.16s-1.91.07-3.12-1.28C354.56,84.08,355.89,83.17,356.56,83.39ZM348,86.19a1.59,1.59,0,0,1-.27-2,.73.73,0,0,1,.53-.47,1.12,1.12,0,0,1,.32,0A7.06,7.06,0,0,1,351.75,85c-.51.42-1,.81-1.4,1.1A1.87,1.87,0,0,1,348,86.19Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 352.357px 84.9161px;" class="animable"></path>
                </g>
                <g id="el3tickfh1l2d">
                  <path
                    d="M163.54,163.54c-.22-5.2-2.22-20.58-6.78-24.13-4.27-3.32-80.73,3.57-89.43,4.36l.09,1c34-3.11,85.72-6.9,88.7-4.58,4,3.1,6.15,17.76,6.38,23.35.24,5.77-2.48,13.75-6.22,15s-86.64,8-92,8c-4.38,0-7.43-4-8.21-6-.62-1.63,4.87-20.25,8.47-31.61l-1-.31c-1.58,5-9.4,29.91-8.44,32.31,1.1,2.77,4.68,6.67,9.17,6.67s87.86-6.54,92.29-8C161.25,178,163.78,169.19,163.54,163.54Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 109.287px 163.056px;" class="animable"></path>
                </g>
                <g id="el6v51ya2nknl">
                  <path
                    d="M78.47,150.68c.14-1.69-.39-3-1.3-3.06-.56-.07-1.59.28-2.08,3.4l-.14.9c-.19,1.14-.36,2.25-.5,3.28A30,30,0,0,1,72,157.52l.66.8c.08-.06.76-.63,1.62-1.46-.26,2.75-.13,4.8.91,5.45a1.42,1.42,0,0,0,.75.21,3,3,0,0,0,1.63-.65,18.11,18.11,0,0,0,4.75-5.06c0,1.67.18,3.75.91,4.53a1.17,1.17,0,0,0,.85.39c1.88,0,2.92-2.13,3-2.38a30.4,30.4,0,0,1,3.53-4.81,35.43,35.43,0,0,1,0,4.75.54.54,0,0,0,.41.55.53.53,0,0,0,.6-.33c1.29-3.5,2.87-6.62,3.54-7a2.27,2.27,0,0,1,.16.61,32.15,32.15,0,0,1,.29,3.57c.08,2.14.15,3.69,1.1,4.07a1.14,1.14,0,0,0,.41.07c.56,0,1.23-.42,2.13-1.32l-.73-.73c-1.1,1.1-1.43,1-1.43,1-.33-.13-.4-2-.45-3.14a30.67,30.67,0,0,0-.3-3.7c0-.35-.22-1.43-1-1.51-1-.12-2.38,2.25-3.54,5a19.48,19.48,0,0,0-.11-2.25.8.8,0,0,0-.61-.77c-.27-.06-1-.22-3.77,3.87l.15-3.72-1,0L86.13,159c-.18.36-.95,1.73-2.07,1.73,0,0,0,0-.09-.06-.63-.68-.71-3.9-.57-6a.52.52,0,0,0-.39-.55.52.52,0,0,0-.6.31A17.16,17.16,0,0,1,77,161c-.56.4-1,.54-1.23.41-.75-.48-.6-3.18-.28-5.76C76.87,154.14,78.34,152.22,78.47,150.68Zm-2.5,1.4.14-.89c.32-2,.83-2.51.93-2.54s.5.72.4,1.94a7,7,0,0,1-1.74,3.21Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 85.625px 155.066px;" class="animable"></path>
                </g>
                <g id="el05f2yd3teta4">
                  <path
                    d="M100.93,146.15l-.23,5.17a.53.53,0,0,0,.41.53.52.52,0,0,0,.59-.32c1-2.62,2.29-5,2.87-5.44a2.52,2.52,0,0,1,.13.61,65.32,65.32,0,0,1,.46,6.52h1a64.81,64.81,0,0,0-.47-6.64c0-.4-.17-1.48-1-1.59s-1.74,1.08-2.89,3.52l.1-2.32Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 103.43px 149.101px;" class="animable"></path>
                </g>
                <g id="eltgaftxoax0l">
                  <path
                    d="M71.79,173a.52.52,0,0,0,1,.14,41.54,41.54,0,0,1,1.88-5.5c0,.15.06.31.08.48.37,2.2.82,4.94,2.31,5.54a1.62,1.62,0,0,0,.61.12,2.56,2.56,0,0,0,1.51-.6l-.62-.83c-.46.34-.83.46-1.11.35-1-.38-1.4-3.12-1.67-4.75-.06-.33-.11-.64-.16-.92-.1-.59-.36-.9-.75-.91s-.88,0-2.06,3.4v-3.81h-1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 75.485px 169.745px;" class="animable"></path>
                </g>
                <g id="elnvf9508rqyc">
                  <path
                    d="M86.31,172.28l6.82-1.88a.5.5,0,0,0,.38-.46.51.51,0,0,0-.32-.51l-5.64-2.35-.4.95,3,1.25-9.77-1.07-.11,1,9.45,1-3.66,1Zm4.83-2.59.26.11-.29.08Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 86.8906px 169.68px;" class="animable"></path>
                </g>
                <g id="elf6n3uuocu7c">
                  <path
                    d="M97.78,170.7c.11-.15.21-.32.32-.5s.29-.53.29-.53l-.93-.47s-.1.2-.26.47-.22.37-.32.52c-.43-.25-.78-.48-1.06-.66-.77-.5-1.16-.75-1.55-.45s-.25.86.11,1.93c.27.81.69,1.26,1.25,1.32a1.9,1.9,0,0,0,1.51-.79,21.09,21.09,0,0,0,2,1,5.21,5.21,0,0,0,2,.45,2.89,2.89,0,0,0,1.93-.67,3,3,0,0,0,.92-3,2,2,0,0,0-1.47-1.55l-.22,1a1,1,0,0,1,.68.78,2,2,0,0,1-.59,1.94c-.63.55-1.61.56-2.83,0C98.88,171.26,98.29,171,97.78,170.7Zm-2,.59s-.21-.12-.38-.61l-.08-.27c.25.17.56.37.93.59C96,171.22,95.82,171.31,95.74,171.29Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 99.0607px 170.381px;" class="animable"></path>
                </g>
                <g id="elttyigbb4bh">
                  <path
                    d="M131.8,144.71c-2-.12-19.23-1.15-21.18-.18s-3.92,14.18-4.78,20.11l-3.24-5.34-.89.53,4,6.58a.5.5,0,0,0,.44.25h.11a.52.52,0,0,0,.41-.43c1.34-9.65,3.37-20.05,4.41-20.76,1.25-.63,12.79-.18,20.14.26l-.21,3.47,1,.07.23-4A.52.52,0,0,0,131.8,144.71Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 116.976px 155.389px;" class="animable"></path>
                </g>
                <g id="el43x1qr91rih">
                  <path
                    d="M122.17,163c.32-1.76,1.88-10.59,1.13-12.08A1.48,1.48,0,0,0,122,150c-1.24-.07-2.93,1.26-4.07,3.17s-3.86,7.26-4.84,9.19l-.66-.8-.8.67,1.17,1.41a.52.52,0,0,0,.4.18h.06a.53.53,0,0,0,.41-.28c0-.08,3.76-7.53,5.15-9.84,1-1.68,2.41-2.68,3.14-2.66a.43.43,0,0,1,.41.28c.26.51,0,3.14-.4,6.3-1-.25-3.27-.72-4-.14a.82.82,0,0,0-.32.65h1a.2.2,0,0,1-.09.17,7.91,7.91,0,0,1,3.2.34l.14-.56c-.22,1.51-.48,3.12-.76,4.66Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 117.566px 156.909px;" class="animable"></path>
                </g>
                <rect x="112.81" y="112.08" width="5.17" height="1.04"
                  style="fill: rgb(38, 50, 56); transform-origin: 115.395px 112.6px;" id="eleyczv572ujh"
                  class="animable"></rect>
                <rect x="112.57" y="115.37" width="5.4" height="1.04"
                  style="fill: rgb(38, 50, 56); transform-origin: 115.27px 115.89px;" id="el2z7t75ro2bw"
                  class="animable"></rect>
                <g id="el13wntsucv0l">
                  <path
                    d="M138.82,161.49h5.4v-1h-2.75a10.09,10.09,0,0,0,.9-2.41,23.29,23.29,0,0,0,0-6.07.54.54,0,0,0-.42-.45.53.53,0,0,0-.56.27l-2.11,4,.92.48,1.28-2.43a15.3,15.3,0,0,1-.13,3.94,8.21,8.21,0,0,1-1.09,2.64l0,0h-1.49Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 141.495px 156.521px;" class="animable"></path>
                </g>
                <g id="elgmv99elkjb">
                  <path
                    d="M34.47,175.11a24.47,24.47,0,0,1-2.55,4.71,18.65,18.65,0,0,1-.21-4l-1-.06a17.26,17.26,0,0,0,.43,5.08,2.67,2.67,0,0,1-1.19.79l-2.35.47.2,1,2.35-.47a3,3,0,0,0,1.4-.78,2.09,2.09,0,0,0,.86.88,1.44,1.44,0,0,0,.67.16,2.83,2.83,0,0,0,1.78-.84l-.68-.79c-.4.35-.94.72-1.32.54a1.37,1.37,0,0,1-.55-.73,24.66,24.66,0,0,0,3.16-5.56Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 31.535px 179.105px;" class="animable"></path>
                </g>
                <g id="eln1x42xszht">
                  <path
                    d="M49.1,174.62a4.24,4.24,0,0,0-4.32,3.65,17.15,17.15,0,0,0-.25,2.14c-.08,1.22-.12,2.62-.16,4.1-.11,3.79-.23,8.08-1.17,9.56-.31.49-.6.69-.85.59a3.27,3.27,0,0,1-1.26-2.29l-.5-.14-.5-.16a4,4,0,0,0,1.77,3.51,1.59,1.59,0,0,0,.64.15,1.92,1.92,0,0,0,1.58-1.11c1.09-1.72,1.21-6,1.33-10.08,0-1.47.08-2.86.16-4.06a17.37,17.37,0,0,1,.23-2,3.23,3.23,0,0,1,3.2-2.8,1.54,1.54,0,0,1,1.41,1.76c0,3.19-.56,4.93-1.1,5.25-.06,0-.19.11-.48-.06a.52.52,0,0,0-.64.11c-.06.06-.24.21-.36.18s-.51-.2-.86-2.05l-1,.2c.32,1.71.85,2.65,1.62,2.85a1.32,1.32,0,0,0,1.1-.23,1.34,1.34,0,0,0,1.16-.1c1.41-.82,1.62-4.2,1.62-6.15A2.56,2.56,0,0,0,49.1,174.62Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 45.7848px 185.174px;" class="animable"></path>
                </g>
                <circle cx="24.21" cy="135.86" r="0.94"
                  style="fill: rgb(38, 50, 56); transform-origin: 24.21px 135.86px;" id="el9w1rrgl9oxv"
                  class="animable"></circle>
                <circle cx="23.51" cy="139.86" r="0.94"
                  style="fill: rgb(38, 50, 56); transform-origin: 23.51px 139.86px;" id="el9nw48zjt2bs"
                  class="animable"></circle>
                <g id="eludox1v9zyl">
                  <path
                    d="M406.19,150.8H404.1l-1.06,0a230.62,230.62,0,0,1-40-1.24c-21.34-2.52-21.71-2.2-23.07-1l-.26.22c-1.41,1.13-4.69,14.66-5.85,19.61l-3.51-5.77a.53.53,0,0,0-.72-.17.52.52,0,0,0-.17.71l4.17,6.86a.55.55,0,0,0,.45.25h.08a.51.51,0,0,0,.42-.4c1.83-7.91,4.83-19.44,5.78-20.27l.29-.25c1-.86,1.39-1.22,22.27,1.25a231.59,231.59,0,0,0,40.17,1.25l1,0h1.57v3.06a.52.52,0,1,0,1,0v-3.58A.52.52,0,0,0,406.19,150.8Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 368.033px 158.962px;" class="animable"></path>
                </g>
                <g id="elbnm54ha5ly">
                  <path
                    d="M340,170.32a.52.52,0,0,0,.51-.47l1.49-15.2a.52.52,0,0,0-.46-.57.53.53,0,0,0-.57.47l-1.49,15.2a.51.51,0,0,0,.46.56Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 340.74px 162.199px;" class="animable"></path>
                </g>
                <g id="el8aqglwl54m4">
                  <path
                    d="M348.21,157.37a.52.52,0,0,0-.63.38l-.62,2.46a.48.48,0,0,0-.32-.17l-2.43-.22,2.22-3.45a.52.52,0,0,0-.15-.72.53.53,0,0,0-.72.16L342.88,160a.52.52,0,0,0,0,.51.54.54,0,0,0,.42.29l3.27.3h0a.76.76,0,0,0,.16,0l-1,3.85a.52.52,0,0,0,.38.63l.12,0a.52.52,0,0,0,.51-.4l1.78-7.15A.53.53,0,0,0,348.21,157.37Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 345.68px 160.576px;" class="animable"></path>
                </g>
                <g id="elo38c0bnee5">
                  <path
                    d="M331.77,157.27a.51.51,0,0,0,.53-.1l2.81-2.51.18,2.66a.51.51,0,0,0,.51.48h0a.51.51,0,0,0,.48-.55l-.25-3.73a.5.5,0,0,0-.32-.44.51.51,0,0,0-.54.09l-2.84,2.55-.27-2.46a.51.51,0,0,0-.57-.46.52.52,0,0,0-.46.57l.37,3.47A.53.53,0,0,0,331.77,157.27Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 333.654px 155.298px;" class="animable"></path>
                </g>
                <g id="el9etmmqsgdat">
                  <path
                    d="M357.84,158.3a.51.51,0,0,0-.17-.71c-.21-.14-.07-1.17,0-1.78a5.68,5.68,0,0,0-.2-3.36.93.93,0,0,0-.89-.57c-.78,0-1.67,1.25-2.4,2.56v-2.62a.52.52,0,1,0-1,0v4.84a.52.52,0,0,0,1,.21c.85-1.9,1.94-3.67,2.42-3.93a5.15,5.15,0,0,1,.08,2.73c-.16,1.19-.31,2.31.47,2.8a.57.57,0,0,0,.28.08A.52.52,0,0,0,357.84,158.3Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 355.539px 154.854px;" class="animable"></path>
                </g>
                <g id="elsv44xkn5zm">
                  <path
                    d="M359.11,163.36a.52.52,0,0,0,1,0v-1.09h1.47a.52.52,0,0,0,0-1h-1.47V160a.52.52,0,0,0-1,0v1.22h-1.46a.52.52,0,1,0,0,1h1.46Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 359.472px 161.68px;" class="animable"></path>
                </g>
                <g id="eliw62mo2d0j">
                  <path
                    d="M377.11,158.54a2,2,0,0,0-1,2.31,5.19,5.19,0,0,0,1.38,2.44c.76.9.83,1.09.49,1.46-.55.61-2.37-.34-3.68-1.32a5.36,5.36,0,0,0,.73-3.21c-.09-1.14-.47-1.8-1.12-2-1.08-.27-2.25,1.07-2.43,1.35l.86.58c.2-.3,1-1,1.31-.92.09,0,.28.27.35,1a4.42,4.42,0,0,1-1.61,3.8,1.7,1.7,0,0,1-1.54.39c-.9-.35-.76-2.59-.54-3.63a.52.52,0,0,0-1-.35c-.55,1-2.06,3.15-3.1,3.08a.55.55,0,0,1-.5-.4,4.71,4.71,0,0,1,.74-3.84,1.13,1.13,0,0,1,.21-.22,2.38,2.38,0,0,1,.23.82l1-.12c0-.35-.23-1.51-1-1.73-.43-.13-.87.07-1.3.59a5.78,5.78,0,0,0-.89,4.91,1.61,1.61,0,0,0,1.38,1c1.12.08,2.18-.91,2.95-1.89,0,1.11.33,2.32,1.37,2.72a2,2,0,0,0,.74.13,3,3,0,0,0,1.79-.66,4.56,4.56,0,0,0,.68-.65,7.51,7.51,0,0,0,3.77,1.7,1.64,1.64,0,0,0,1.28-.53c1-1.11.19-2.07-.47-2.84a4.21,4.21,0,0,1-1.14-1.94,1,1,0,0,1,.45-1.21,1.43,1.43,0,0,1,1.53.18,3.71,3.71,0,0,1,.86,1.12h0l1-.25a3.75,3.75,0,0,0-1.13-1.61A2.45,2.45,0,0,0,377.11,158.54Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 372.693px 161.937px;" class="animable"></path>
                </g>
                <g id="elf3dravwre9u">
                  <path
                    d="M386.76,160.09a23.08,23.08,0,0,1-2.52,1.52c-1.14.62-1.83,1-1.9,1.64a1,1,0,0,0,.41.88c.75.66,2.77.78,4.19.78.64,0,1.16,0,1.39,0l-.06-1c-1.61.09-4.11,0-4.84-.52a8.74,8.74,0,0,1,1.31-.8,23.27,23.27,0,0,0,2.62-1.59c1.37-1,2-1.88,2-2.76a2.51,2.51,0,0,0-1.29-1.93,1.21,1.21,0,0,0-1.1-.18c-1.15.38-1.91,2.5-2.05,2.92l1,.33c.27-.82.9-2.1,1.39-2.26,0,0,.09,0,.17,0,.58.4.85.75.85,1.09S388.08,159.14,386.76,160.09Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 385.849px 160.49px;" class="animable"></path>
                </g>
                <g id="elqf7kh8p46jt">
                  <path
                    d="M398.71,163.89a.75.75,0,0,1-1.13.08c-.28-.25-.18-.76,0-1.57a5.76,5.76,0,0,0,.15-2.77.88.88,0,0,0-.73-.72c-.84-.13-2.14,1.35-3.35,3.08l.37-3.16-1-.12-.62,5.34a.51.51,0,0,0,.95.33,18.39,18.39,0,0,1,3.43-4.39,5,5,0,0,1-.18,2.17c-.22.94-.45,1.92.31,2.59a1.78,1.78,0,0,0,1.19.48,2,2,0,0,0,1.41-.66Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 395.951px 161.97px;" class="animable"></path>
                </g>
                <g id="eld6u873hvvxe">
                  <rect x="395.99" y="160.18" width="11.92" height="1.04"
                    style="fill: rgb(38, 50, 56); transform-origin: 401.95px 160.7px; transform: rotate(-81.63deg);"
                    class="animable"></rect>
                </g>
                <g id="elvotedbesfon">
                  <path
                    d="M342.22,187.07a.6.6,0,0,1-.58-.09c-.3-.21-.12-2,0-3,.22-2.24.47-4.79-1.2-5.25a1.46,1.46,0,0,0-1.3.3c-1,.78-1.87,2.9-2.47,4.91,0-1.9-.05-4.06-.07-5.59l-1,0,.06,4.9c0,2.51.05,3.86.11,4.58a2.49,2.49,0,0,0,0,.32h.08c.07.5.19.52.4.52h0a.56.56,0,0,0,.52-.5c.05-.61,1.49-7.26,3.08-8.36.18-.13.28-.12.35-.1.83.23.61,2.49.45,4.15-.19,2-.34,3.5.56,4a1.68,1.68,0,0,0,1.46.15,2.48,2.48,0,0,0,1.26-1.42l-1-.35A1.49,1.49,0,0,1,342.22,187.07Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 339.765px 183.51px;" class="animable"></path>
                </g>
                <g id="elfoj3cs10per">
                  <path
                    d="M354.68,184.17a.51.51,0,0,0-.22-.51L349,179.94l-.58.85L353,183.9l-5.16,1.55.3,1,6.2-1.86A.52.52,0,0,0,354.68,184.17Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 351.264px 183.195px;" class="animable"></path>
                </g>
                <g id="elv61gs82kadb">
                  <rect x="349.51" y="187.04" width="6.48" height="1.04"
                    style="fill: rgb(38, 50, 56); transform-origin: 352.75px 187.56px; transform: rotate(-20.17deg);"
                    class="animable"></rect>
                </g>
                <g id="elwgy0jnsj7ce">
                  <path
                    d="M365.05,186.56a5.92,5.92,0,0,1,.3-2.27,8.73,8.73,0,0,0,.38-3.28,1.2,1.2,0,0,0-.91-1.06c-1.46-.29-3.71,2.61-4.79,4.17v-2.76h-1v4.41c-.48.91-.55,1.48-.28,1.87a.82.82,0,0,0,.69.33.93.93,0,0,0,.24,0,.52.52,0,0,0,.39-.5V186c.15-.27.36-.62.65-1,2.06-3,3.62-4.13,3.93-4a.45.45,0,0,1,.1.24,8.14,8.14,0,0,1-.37,2.84c-.32,1.36-.58,2.43-.16,3.08a1.06,1.06,0,0,0,.7.45c1.73.32,2.63-1.58,2.67-1.66l-.94-.44S366,186.72,365.05,186.56Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 363.092px 183.954px;" class="animable"></path>
                </g>
                <g id="elhbl6kf318ur">
                  <path
                    d="M371.66,185.05a2.18,2.18,0,0,0-2,.47,3.79,3.79,0,0,0-1.2,1.89c-.48,1.68.15,3.29,1.44,3.66a2.32,2.32,0,0,0,.52.07,3,3,0,0,0,2.62-2.43C373.57,187,372.94,185.42,371.66,185.05Zm.43,3.38c-.31,1.08-1.16,1.83-1.86,1.64s-1-1.29-.72-2.38a2.74,2.74,0,0,1,.85-1.36,1.37,1.37,0,0,1,.78-.31.91.91,0,0,1,.23,0C372.07,186.25,372.4,187.34,372.09,188.43Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 370.764px 188.058px;" class="animable"></path>
                </g>
                <g id="eljz66ukyr45">
                  <path
                    d="M377.25,183.34c.48,0,.87-.52.87-1.18s-.39-1.17-.87-1.17-.86.52-.86,1.17S376.77,183.34,377.25,183.34Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 377.255px 182.165px;" class="animable"></path>
                </g>
                <g id="elzem4t17bd0b">
                  <path
                    d="M377.38,184.09c-.48,0-.87.53-.87,1.18s.39,1.18.87,1.18.87-.53.87-1.18S377.86,184.09,377.38,184.09Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 377.38px 185.27px;" class="animable"></path>
                </g>
                <g id="el85sjr3nn3lj">
                  <path
                    d="M387.52,174.43l-.68-.79c-.09.08-9.28,8.24-2.86,21.59l.94-.45C378.85,182.16,387.16,174.74,387.52,174.43Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 384.612px 184.435px;" class="animable"></path>
                </g>
                <g id="el33a917w234t">
                  <path d="M398.69,174.36c.08.09,7,8.79,0,20.51l.89.53c7.42-12.33,0-21.6,0-21.69Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 400.784px 184.555px;" class="animable"></path>
                </g>
                <g id="el49b8xu9md37">
                  <path
                    d="M389.6,183.49c.29-.61.59-1.22.89-1.75a2.73,2.73,0,0,1,.34-.48,5.81,5.81,0,0,1,.93,2.78l1-.15c-.15-1-.62-3.44-1.75-3.65-.53-.11-1,.23-1.44,1-.06.09-.11.21-.17.31a2.1,2.1,0,0,0-.68-1,1.45,1.45,0,0,0-1.44-.3c-1.34.48-2,3.06-2.11,3.57l1,.23c.23-1,.85-2.61,1.45-2.82.06,0,.2-.07.45.13a2.19,2.19,0,0,1,.48,1.84,2.1,2.1,0,0,0-.13.26c-.92,1.94-2,4.14-3,3.93a1.46,1.46,0,0,1-1-.53.65.65,0,0,1-.06-.51l-1-.36a1.78,1.78,0,0,0,.13,1.38,2.42,2.42,0,0,0,1.75,1,1.47,1.47,0,0,0,.36,0c1,0,1.86-.92,2.59-2.15-.08.83,0,1.49.41,1.87a2.06,2.06,0,0,0,1.38.49,2.83,2.83,0,0,0,.63-.07,3,3,0,0,0,2-1.47l-.95-.41a2,2,0,0,1-1.31.86,1.26,1.26,0,0,1-1.1-.18c-.21-.19,0-1.48.11-2.18S389.56,184.07,389.6,183.49Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 388.019px 184.377px;" class="animable"></path>
                </g>
                <g id="el9m588dnzhm8">
                  <path
                    d="M397.46,187.46a.64.64,0,0,0-.77.3,13.18,13.18,0,0,1-1.27,1.29l-.23.22a20.39,20.39,0,0,0-.43-2.44l-1,.23a18,18,0,0,1,.47,3.19c-.47.52-.6.83-.47,1.16a.62.62,0,0,0,.63.39.77.77,0,0,0,.6-.29,1.59,1.59,0,0,0,.25-.82c.29-.29.63-.63.91-.89L397,189c0,.66,0,1.63-.11,2.47l1,.09C398.2,187.74,397.79,187.58,397.46,187.46Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 395.856px 189.316px;" class="animable"></path>
                </g>
                <g id="eltxjzek6134">
                  <path
                    d="M410.66,173.56c.36-11.89,6.81-23.1,6.88-23.21l-.9-.53c-.06.12-6.65,11.55-7,23.7s6.7,18.64,7,18.9l.69-.78C417.24,191.58,410.3,185.34,410.66,173.56Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 413.584px 171.12px;" class="animable"></path>
                </g>
                <g id="elxntfnbypyfj">
                  <path
                    d="M463.19,150.23c.07.12,7.17,11.84,4.41,21.81a32.52,32.52,0,0,1-10.12,15.73l.63.83a33,33,0,0,0,10.49-16.29c2.88-10.4-4.23-22.13-4.53-22.62Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 463.383px 169.145px;" class="animable"></path>
                </g>
                <g id="elpkdmuryvhf">
                  <path
                    d="M420.94,173.53c-.79.2-1.49,1.42-2.06,2.83l.09-1.42-1-.07-.37,5.83a.52.52,0,0,0,.44.55h.07a.53.53,0,0,0,.51-.4c.66-2.83,1.82-6,2.53-6.3.39.53.47,3.49.17,6.5l1,.1c.19-1.92.52-6.49-.56-7.43A.91.91,0,0,0,420.94,173.53Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 420.06px 177.375px;" class="animable"></path>
                </g>
                <g id="el22u6uy3p5w6">
                  <path
                    d="M430,174.18h.12v-1H430a5.74,5.74,0,0,1-2.67-.29,5,5,0,0,1,.62-.8c.73-.84,1.84-2.11.85-3.32a1.26,1.26,0,0,0-1.23-.55c-1,.17-1.65,1.75-1.76,2.07l1,.36c.23-.63.69-1.36,1-1.41.07,0,.18.09.26.19.37.45,0,1-.83,2a2.73,2.73,0,0,0-.9,1.54.92.92,0,0,0,.28.65c.43.42,1.39.62,3.06.62Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 427.965px 171.223px;" class="animable"></path>
                </g>
                <g id="elgqw4mhalwrg">
                  <path
                    d="M419.91,161.65a.52.52,0,0,0,.55-.45c.19-1.51,1.1-5.42,3-5.51a.79.79,0,0,1,.65.25c1.05,1.07.8,4.81.71,6.21,0,.33,0,.58,0,.72h1c0-.13,0-.36,0-.65.12-1.82.37-5.6-1-7a1.84,1.84,0,0,0-1.43-.57c-1.35.07-2.26,1.18-2.87,2.46l.06-3.29-1,0-.12,7.32A.51.51,0,0,0,419.91,161.65Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 422.689px 158.345px;" class="animable"></path>
                </g>
                <polygon
                  points="417.86 118.45 418.89 118.45 418.89 116.24 419.87 116.24 419.87 115.2 418.89 115.2 418.89 113.86 417.86 113.86 417.86 115.2 416.51 115.2 416.51 116.24 417.86 116.24 417.86 118.45"
                  style="fill: rgb(38, 50, 56); transform-origin: 418.19px 116.155px;" id="el4h79b9a12v7"
                  class="animable"></polygon>
                <g id="elv588vh5evts">
                  <path
                    d="M440.42,161.4h0a.52.52,0,0,0,.49-.52v-.57a5.69,5.69,0,0,1,1.71-3.65c1.74-1.74,2.41-1.86,2.66-1.78s.45.58.55,1.35a42.29,42.29,0,0,1,.37,5h1a42.35,42.35,0,0,0-.38-5.15c-.16-1.25-.57-2-1.25-2.2-.89-.3-2,.3-3.72,2a7.08,7.08,0,0,0-1,1.22v-2.71h-1v5.88a5.39,5.39,0,0,0,0,.62A.53.53,0,0,0,440.42,161.4Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 443.521px 157.604px;" class="animable"></path>
                </g>
                <rect x="431.78" y="116.44" width="3.23" height="1.04"
                  style="fill: rgb(38, 50, 56); transform-origin: 433.395px 116.96px;" id="elw2rqe2ksju"
                  class="animable"></rect>
                <g id="elem09ycnsgsb">
                  <path
                    d="M456.57,155.7l.09,5.19,1,0-.12-7.81a.52.52,0,0,0-1-.19s-.5,1.25-.87,2.24a6,6,0,0,1-1.35,1.79l.69.77A7.22,7.22,0,0,0,456.57,155.7Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 455.99px 156.73px;" class="animable"></path>
                </g>
                <g id="eljt3drex7m7">
                  <path
                    d="M429.19,154.64a21.79,21.79,0,0,0,3.25-.32l-.17-1a13.81,13.81,0,0,1-4.33.19,5.16,5.16,0,0,1,1.79-1.24c1-.52,2.29-1.16,1.88-2.67s-1.29-1.66-1.66-1.7A2,2,0,0,0,428,149l.93.47a.92.92,0,0,1,.87-.53c.47,0,.68.6.77.93.17.61-.14.86-1.35,1.47a6.05,6.05,0,0,0-2.16,1.55,1,1,0,0,0-.16,1.12C427.23,154.47,428.1,154.64,429.19,154.64Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 429.618px 151.267px;" class="animable"></path>
                </g>
                <g id="el1hhoysd5jti">
                  <path
                    d="M469.28,145.81a2.08,2.08,0,0,0-1.41.14l.49-1.37,4.18-.81-.2-1-4.47.87a.52.52,0,0,0-.39.33l-1.11,3.1a.51.51,0,0,0,.2.61.51.51,0,0,0,.64,0c.35-.34,1.24-1,1.76-.8.34.1.52.61.6,1a2.7,2.7,0,0,1-1.19,3.07c-.65.25-1.3-.09-1.83-1l-.88.54A2.77,2.77,0,0,0,468,152a2.13,2.13,0,0,0,.81-.16,3.69,3.69,0,0,0,1.83-4.24A2.15,2.15,0,0,0,469.28,145.81Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 469.105px 147.385px;" class="animable"></path>
                </g>
                <rect x="399.62" y="124.26" width="43.71" height="1.04"
                  style="fill: rgb(38, 50, 56); transform-origin: 421.475px 124.78px;" id="elf141y05izgp"
                  class="animable"></rect>
                <rect x="410.43" y="135.54" width="6.82" height="1.04"
                  style="fill: rgb(38, 50, 56); transform-origin: 413.84px 136.06px;" id="eleztn30cj8pe"
                  class="animable"></rect>
                <g id="el9jlbow7vdbm">
                  <path
                    d="M439.53,174.24c-.06-.36-.23-1.3-1-1.37s-1.49,1.15-1.91,2.21l1,.38a6.36,6.36,0,0,1,.78-1.44,2.53,2.53,0,0,1,.1.4c.37,2-1.32,3.26-2.33,4l-.29.21a.69.69,0,0,0-.29.76c.09.31.27.94,5,1.35l.09-1a25.5,25.5,0,0,1-3.75-.57C438.06,178.32,440,176.77,439.53,174.24Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 438.123px 176.804px;" class="animable"></path>
                </g>
                <g id="elswqeg52zzr">
                  <path
                    d="M447.7,179.75c-.19.11-.3.13-.32.15a8.24,8.24,0,0,1,.14-2.7,21.12,21.12,0,0,0,.25-2.64c0-.72-.32-.94-.58-1s-.91-.22-3,3.23l.73-3.52-1-.21-1.41,6.81a.53.53,0,0,0,.33.6.54.54,0,0,0,.64-.25,38,38,0,0,1,3.24-5.28c0,.65-.13,1.4-.23,2.13-.25,1.85-.44,3.19.31,3.7a.94.94,0,0,0,.54.17,1.78,1.78,0,0,0,.86-.27,11.39,11.39,0,0,0,3.21-2.48l-.81-.65A10.28,10.28,0,0,1,447.7,179.75Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 446.955px 177px;" class="animable"></path>
                </g>
                <polygon
                  points="439.04 134.93 439.15 133.9 437.44 133.71 437.72 132.66 436.72 132.4 436.4 133.59 434.93 133.43 434.81 134.46 436.14 134.61 435.54 136.87 436.54 137.13 437.18 134.72 439.04 134.93"
                  style="fill: rgb(38, 50, 56); transform-origin: 436.98px 134.765px;" id="elq25ndga6mkg"
                  class="animable"></polygon>
                <g id="eldwqecq008an">
                  <path
                    d="M460.28,179.94a3.48,3.48,0,0,0,2.75-2.67,1.9,1.9,0,0,0-.44-2,3.53,3.53,0,0,0-2.75-.47,4.14,4.14,0,0,0,.61-2.69c0-.27-.11-1.1-.77-1.22s-1.44.7-2.32,2.45l.93.47a8.8,8.8,0,0,1,1.11-1.74.61.61,0,0,1,0,.15,3.31,3.31,0,0,1-1.4,3,.52.52,0,0,0-.2.66.53.53,0,0,0,.64.27c.85-.28,2.82-.69,3.43-.14.07.06.29.26.13.94a2.48,2.48,0,0,1-2,1.9,3.57,3.57,0,0,1-3.23-.7l-.8.66a4.19,4.19,0,0,0,3.12,1.19A5,5,0,0,0,460.28,179.94Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 459.558px 175.445px;" class="animable"></path>
                </g>
                <g id="eln38zree0fej">
                  <path
                    d="M111.46,358.44h-2.09l-1.07.05a230.51,230.51,0,0,1-40-1.24c-21.34-2.53-21.71-2.2-23.07-1l-.26.22c-1.41,1.12-4.69,14.65-5.85,19.61l-3.51-5.77a.52.52,0,0,0-.89.54l4.17,6.85a.51.51,0,0,0,.44.25h.09a.53.53,0,0,0,.42-.39c1.83-7.92,4.83-19.44,5.78-20.27l.29-.25c1-.87,1.39-1.22,22.27,1.25a231.59,231.59,0,0,0,40.17,1.25l1,0h1.57v3a.52.52,0,0,0,.52.52.52.52,0,0,0,.52-.52V359A.52.52,0,0,0,111.46,358.44Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 73.3038px 366.645px;" class="animable"></path>
                </g>
                <g id="elannnigbhqj">
                  <path d="M45.3,378a.52.52,0,0,0,.52-.47l1.49-15.19a.52.52,0,0,0-1-.11l-1.49,15.2a.52.52,0,0,0,.46.57Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 46.0636px 369.948px;" class="animable"></path>
                </g>
                <g id="elzl7o77p2cep">
                  <path
                    d="M53.48,365a.52.52,0,0,0-.63.38l-.62,2.45a.47.47,0,0,0-.32-.16l-2.43-.22L51.7,364a.53.53,0,0,0-.16-.72.51.51,0,0,0-.71.15l-2.68,4.18a.5.5,0,0,0,0,.5.47.47,0,0,0,.41.29l3.28.3h0a.41.41,0,0,0,.16,0l-1,3.86a.52.52,0,0,0,.38.63h.12a.5.5,0,0,0,.5-.39l1.79-7.15A.52.52,0,0,0,53.48,365Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 50.9497px 368.193px;" class="animable"></path>
                </g>
                <g id="el6ob4sbtxrv6">
                  <path
                    d="M37,364.91a.51.51,0,0,0,.53-.1l2.81-2.52.18,2.66a.51.51,0,0,0,.51.49h0a.53.53,0,0,0,.48-.56l-.25-3.72a.53.53,0,0,0-.32-.45.54.54,0,0,0-.54.1l-2.85,2.55-.26-2.47a.53.53,0,0,0-.57-.46.52.52,0,0,0-.46.57l.37,3.48A.53.53,0,0,0,37,364.91Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 38.8841px 362.934px;" class="animable"></path>
                </g>
                <g id="el3hyj9ydhk1c">
                  <path
                    d="M63.11,365.94a.53.53,0,0,0-.17-.72c-.21-.13-.07-1.16,0-1.78a5.69,5.69,0,0,0-.2-3.36.94.94,0,0,0-.89-.56c-.78,0-1.67,1.24-2.4,2.56v-2.62a.52.52,0,1,0-1,0v4.84a.53.53,0,0,0,.41.51.52.52,0,0,0,.58-.3c.85-1.91,1.94-3.67,2.42-3.93a5.11,5.11,0,0,1,.08,2.72c-.16,1.19-.31,2.32.47,2.8a.48.48,0,0,0,.28.08A.51.51,0,0,0,63.11,365.94Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 60.8078px 362.489px;" class="animable"></path>
                </g>
                <g id="elf9p3kuje3mt">
                  <path
                    d="M64.38,371a.52.52,0,0,0,1,0v-1.1h1.47a.52.52,0,1,0,0-1H65.42v-1.22a.52.52,0,0,0-1,0v1.22H62.92a.52.52,0,1,0,0,1h1.46Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 64.885px 369.34px;" class="animable"></path>
                </g>
                <g id="el1qxd9xjk3ok">
                  <path
                    d="M82.38,366.17a2,2,0,0,0-1,2.31,5.21,5.21,0,0,0,1.37,2.44c.77.9.84,1.09.5,1.47-.56.6-2.38-.34-3.68-1.32a5.41,5.41,0,0,0,.73-3.22c-.09-1.13-.47-1.79-1.13-2-1.07-.28-2.24,1.07-2.42,1.35l.86.57c.19-.29,1-1,1.31-.92.09,0,.28.28.35,1.05a4.4,4.4,0,0,1-1.61,3.79,1.68,1.68,0,0,1-1.54.4c-.9-.35-.76-2.6-.54-3.63a.51.51,0,0,0-.34-.59.51.51,0,0,0-.63.24c-.56,1-2.06,3.15-3.1,3.08a.55.55,0,0,1-.5-.41,4.73,4.73,0,0,1,.74-3.84,1,1,0,0,1,.21-.21,2.38,2.38,0,0,1,.23.81l1-.11c0-.35-.22-1.52-1-1.74-.43-.13-.87.07-1.3.6a5.77,5.77,0,0,0-.89,4.9,1.59,1.59,0,0,0,1.38,1c1.12.08,2.18-.91,3-1.88,0,1.11.33,2.32,1.37,2.72a2,2,0,0,0,.74.13,3,3,0,0,0,1.79-.67,4.47,4.47,0,0,0,.68-.64,7.56,7.56,0,0,0,3.77,1.7,1.64,1.64,0,0,0,1.28-.53c1-1.11.19-2.07-.47-2.84a4.24,4.24,0,0,1-1.14-1.95,1,1,0,0,1,.45-1.21,1.47,1.47,0,0,1,1.53.18,3.65,3.65,0,0,1,.86,1.13h0l1-.25a3.82,3.82,0,0,0-1.13-1.6A2.47,2.47,0,0,0,82.38,366.17Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 78.0181px 369.602px;" class="animable"></path>
                </g>
                <g id="el7avgijk7dsa">
                  <path
                    d="M92,367.72a23.32,23.32,0,0,1-2.52,1.53c-1.14.62-1.83,1-1.9,1.63a1,1,0,0,0,.4.88c.76.66,2.78.79,4.2.79.64,0,1.16,0,1.39,0l-.06-1c-1.61.1-4.11,0-4.85-.51a8.63,8.63,0,0,1,1.32-.8,26.68,26.68,0,0,0,2.62-1.59c1.37-1,2-1.88,2-2.76a2.53,2.53,0,0,0-1.29-1.94,1.18,1.18,0,0,0-1.1-.17c-1.15.38-1.91,2.5-2,2.92l1,.32c.27-.81.9-2.1,1.38-2.26a.19.19,0,0,1,.18,0c.57.4.85.76.85,1.1S93.35,366.78,92,367.72Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 91.0885px 368.132px;" class="animable"></path>
                </g>
                <g id="elm4s3syasftm">
                  <path
                    d="M104,371.52a.74.74,0,0,1-1.13.08c-.28-.24-.18-.75,0-1.57a5.61,5.61,0,0,0,.14-2.76.89.89,0,0,0-.72-.73c-.84-.12-2.14,1.36-3.35,3.08l.37-3.15-1-.12-.62,5.33a.52.52,0,0,0,1,.34,18.39,18.39,0,0,1,3.43-4.39,5,5,0,0,1-.18,2.17c-.22.94-.45,1.92.31,2.58a1.79,1.79,0,0,0,1.19.49,2,2,0,0,0,1.41-.66Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 101.256px 369.61px;" class="animable"></path>
                </g>
                <g id="elve3gzdtlha">
                  <rect x="101.26" y="367.81" width="11.92" height="1.04"
                    style="fill: rgb(38, 50, 56); transform-origin: 107.22px 368.33px; transform: rotate(-81.63deg);"
                    class="animable"></rect>
                </g>
                <g id="elbmpjuppl6rl">
                  <path
                    d="M47.49,394.71a.67.67,0,0,1-.58-.09c-.3-.21-.12-2,0-3,.22-2.25.47-4.79-1.2-5.26a1.46,1.46,0,0,0-1.3.3c-1,.78-1.87,2.91-2.47,4.92,0-1.91,0-4.07-.07-5.59h-1l.06,4.91c0,2.51,0,3.86.11,4.58a2.43,2.43,0,0,0,0,.31H41c.07.5.19.53.4.53h0a.54.54,0,0,0,.51-.51c0-.6,1.5-7.25,3.09-8.36.18-.12.28-.12.35-.1.83.23.61,2.5.45,4.16-.19,1.95-.34,3.5.56,4a1.69,1.69,0,0,0,1.45.15,2.5,2.5,0,0,0,1.27-1.42l-1-.36A1.56,1.56,0,0,1,47.49,394.71Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 44.975px 391.155px;" class="animable"></path>
                </g>
                <g id="elmya91gccnz">
                  <path
                    d="M60,391.8a.5.5,0,0,0-.22-.5l-5.46-3.73-.58.86,4.56,3.11-5.16,1.55.29,1,6.21-1.86A.52.52,0,0,0,60,391.8Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 56.5733px 390.83px;" class="animable"></path>
                </g>
                <g id="elqpy86802nr8">
                  <rect x="54.77" y="394.68" width="6.48" height="1.04"
                    style="fill: rgb(38, 50, 56); transform-origin: 58.01px 395.2px; transform: rotate(-20.17deg);"
                    class="animable"></rect>
                </g>
                <g id="elpwu6vw9kaa">
                  <path
                    d="M70.32,394.2c-.19-.24.12-1.51.3-2.27a8.56,8.56,0,0,0,.37-3.29,1.16,1.16,0,0,0-.9-1.05c-1.46-.3-3.71,2.61-4.79,4.17V389h-1v4.42c-.48.91-.55,1.48-.28,1.87a.85.85,0,0,0,.68.33,1,1,0,0,0,.25,0,.53.53,0,0,0,.39-.51v-1.39a11.11,11.11,0,0,1,.65-1c2.06-3,3.62-4.13,3.93-4a.46.46,0,0,1,.1.25,8.64,8.64,0,0,1-.37,2.84c-.33,1.35-.58,2.43-.16,3.07a1,1,0,0,0,.69.45c1.74.32,2.64-1.57,2.68-1.66l-.94-.43S71.29,394.36,70.32,394.2Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 68.3617px 391.598px;" class="animable"></path>
                </g>
                <g id="elm4nqtk62est">
                  <path
                    d="M76.92,392.69a2.14,2.14,0,0,0-1.94.47,3.72,3.72,0,0,0-1.2,1.88c-.48,1.69.15,3.3,1.44,3.66a1.81,1.81,0,0,0,.52.07,3,3,0,0,0,2.62-2.42C78.84,394.66,78.21,393.05,76.92,392.69Zm.44,3.37c-.31,1.09-1.16,1.84-1.86,1.64s-1-1.28-.72-2.37a2.7,2.7,0,0,1,.85-1.36,1.3,1.3,0,0,1,.78-.31l.23,0C77.34,393.89,77.67,395,77.36,396.06Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 76.07px 395.697px;" class="animable"></path>
                </g>
                <g id="els6sfqdm2hjn">
                  <path d="M82.52,391c.48,0,.87-.53.87-1.18s-.39-1.18-.87-1.18-.87.53-.87,1.18S82,391,82.52,391Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 82.52px 389.82px;" class="animable"></path>
                </g>
                <g id="eljfxrhrqmppm">
                  <path
                    d="M82.65,391.72c-.48,0-.87.53-.87,1.18s.39,1.18.87,1.18.87-.53.87-1.18S83.13,391.72,82.65,391.72Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 82.65px 392.9px;" class="animable"></path>
                </g>
                <g id="eldl9mei5rf1e">
                  <path
                    d="M92.79,382.06l-.68-.78c-.09.08-9.28,8.23-2.86,21.59l.94-.45C84.11,389.8,92.43,382.37,92.79,382.06Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 89.8819px 392.075px;" class="animable"></path>
                </g>
                <g id="elck1zbldevp4">
                  <path d="M104,382c.07.09,7,8.79,0,20.5l.89.54c7.42-12.34,0-21.61,0-21.7Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 106.094px 392.19px;" class="animable"></path>
                </g>
                <g id="elcljun73gxcl">
                  <path
                    d="M94.87,391.12c.29-.61.59-1.22.89-1.74a4.17,4.17,0,0,1,.34-.49,6,6,0,0,1,.93,2.79l1-.16c-.15-1-.62-3.43-1.75-3.65-.53-.1-1,.24-1.45,1,0,.1-.11.21-.16.32a2.13,2.13,0,0,0-.68-1,1.44,1.44,0,0,0-1.44-.29c-1.34.47-2,3.05-2.11,3.56l1,.24c.23-1,.85-2.62,1.45-2.83.06,0,.19-.06.45.14a2.16,2.16,0,0,1,.47,1.83l-.12.26c-.92,1.94-2,4.15-3,3.94a1.5,1.5,0,0,1-1-.53.68.68,0,0,1-.06-.52l-1-.35a1.76,1.76,0,0,0,.13,1.37,2.39,2.39,0,0,0,1.75,1.05l.35,0c1,0,1.87-.91,2.6-2.14a2.08,2.08,0,0,0,.41,1.87,2,2,0,0,0,1.37.49,2.87,2.87,0,0,0,.64-.08,3,3,0,0,0,2-1.47l-1-.41a2,2,0,0,1-1.31.87,1.26,1.26,0,0,1-1.1-.18c-.21-.19,0-1.49.11-2.18S94.83,391.7,94.87,391.12Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 93.2888px 392.05px;" class="animable"></path>
                </g>
                <g id="el59orp9jefvn">
                  <path
                    d="M102.73,395.1a.64.64,0,0,0-.77.29,13,13,0,0,1-1.27,1.3l-.23.22a22.82,22.82,0,0,0-.43-2.45l-1,.23a19.1,19.1,0,0,1,.47,3.2c-.47.51-.61.83-.47,1.16a.63.63,0,0,0,.63.39.74.74,0,0,0,.59-.29,1.51,1.51,0,0,0,.26-.83c.28-.29.63-.62.91-.88s.57-.54.81-.79c0,.67,0,1.63-.11,2.48l1,.08C103.47,395.37,103.06,395.22,102.73,395.1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 101.116px 396.951px;" class="animable"></path>
                </g>
                <g id="elwebzzebl5p">
                  <path
                    d="M115.93,381.19c.36-11.88,6.81-23.1,6.88-23.21l-.9-.52c-.07.11-6.65,11.55-7,23.7s6.7,18.63,7,18.9l.69-.78C122.51,399.22,115.57,393,115.93,381.19Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 118.854px 378.76px;" class="animable"></path>
                </g>
                <g id="elp3nbryc3z5g">
                  <path
                    d="M168.45,357.87c.08.12,7.18,11.83,4.41,21.8a32.58,32.58,0,0,1-10.11,15.74l.63.82A32.88,32.88,0,0,0,173.86,380c2.89-10.4-4.22-22.13-4.52-22.62Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 168.65px 376.805px;" class="animable"></path>
                </g>
                <g id="elpnx1w757tkq">
                  <path
                    d="M126.2,381.17c-.78.19-1.48,1.42-2,2.83l.09-1.43-1-.06-.38,5.83a.53.53,0,0,0,.45.55h.07a.52.52,0,0,0,.51-.4c.66-2.82,1.82-5.95,2.53-6.29.39.53.47,3.48.17,6.49l1,.11c.19-1.93.52-6.5-.56-7.43A.87.87,0,0,0,126.2,381.17Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 125.375px 385.008px;" class="animable"></path>
                </g>
                <g id="elkxaq89rmu9f">
                  <path
                    d="M135.27,381.82h.12v-1h-.14a5.85,5.85,0,0,1-2.67-.28,4.59,4.59,0,0,1,.62-.8c.73-.84,1.84-2.11.85-3.32a1.27,1.27,0,0,0-1.23-.56c-1,.18-1.65,1.76-1.76,2.08l1,.35c.23-.62.69-1.36,1-1.4.07,0,.18.09.26.19.37.45,0,1-.83,2-.48.55-.9,1-.9,1.53a.9.9,0,0,0,.28.65c.43.43,1.38.62,3.06.62Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 133.225px 378.864px;" class="animable"></path>
                </g>
                <g id="el4fje1tcdy4k">
                  <path
                    d="M125.18,369.28a.52.52,0,0,0,.55-.45c.19-1.5,1.1-5.42,3-5.5a.79.79,0,0,1,.65.25c1,1.07.8,4.8.71,6.21,0,.32,0,.57,0,.71h1c0-.12,0-.35,0-.65.12-1.81.37-5.6-1-7a1.88,1.88,0,0,0-1.44-.56c-1.34.06-2.25,1.17-2.86,2.46l.06-3.3-1,0-.13,7.33A.52.52,0,0,0,125.18,369.28Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 127.954px 365.975px;" class="animable"></path>
                </g>
                <polygon
                  points="123.13 326.09 124.16 326.09 124.16 323.88 125.13 323.88 125.13 322.84 124.16 322.84 124.16 321.5 123.13 321.5 123.13 322.84 121.78 322.84 121.78 323.88 123.13 323.88 123.13 326.09"
                  style="fill: rgb(38, 50, 56); transform-origin: 123.455px 323.795px;" id="elvs0rbxlf5y"
                  class="animable"></polygon>
                <g id="elcq1jv2499dg">
                  <path
                    d="M145.69,369h0a.53.53,0,0,0,.49-.52V368a5.7,5.7,0,0,1,1.71-3.66c1.74-1.74,2.41-1.85,2.65-1.77s.46.58.56,1.35a42.16,42.16,0,0,1,.37,5h1a45.13,45.13,0,0,0-.38-5.16c-.16-1.24-.57-2-1.25-2.19-.89-.3-2,.3-3.73,2a7.91,7.91,0,0,0-1,1.21v-2.71h-1V368a5.39,5.39,0,0,0,0,.62A.52.52,0,0,0,145.69,369Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 148.786px 365.251px;" class="animable"></path>
                </g>
                <rect x="137.05" y="324.08" width="3.23" height="1.04"
                  style="fill: rgb(38, 50, 56); transform-origin: 138.665px 324.6px;" id="elyy68rd7ergi"
                  class="animable"></rect>
                <g id="el6e4chi2lf5t">
                  <path
                    d="M161.84,363.34l.08,5.19,1,0-.12-7.82a.51.51,0,0,0-.43-.5.51.51,0,0,0-.57.32s-.5,1.24-.88,2.24a5.8,5.8,0,0,1-1.34,1.78l.69.78A7.4,7.4,0,0,0,161.84,363.34Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 161.25px 364.366px;" class="animable"></path>
                </g>
                <g id="el5viwzmt2mqn">
                  <path
                    d="M134.45,362.27a21.76,21.76,0,0,0,3.26-.31l-.17-1a13.5,13.5,0,0,1-4.33.19,5.06,5.06,0,0,1,1.78-1.23c1-.52,2.3-1.16,1.89-2.68a1.87,1.87,0,0,0-3.57-.59l.93.46a1,1,0,0,1,.87-.53c.47.05.68.6.77.93.16.61-.14.87-1.35,1.48a5.93,5.93,0,0,0-2.16,1.55,1,1,0,0,0-.16,1.12C132.5,362.11,133.37,362.27,134.45,362.27Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 134.908px 358.906px;" class="animable"></path>
                </g>
                <g id="elx9w4kou064">
                  <path
                    d="M174.55,353.45a2.07,2.07,0,0,0-1.41.13l.49-1.36,4.18-.82-.2-1-4.47.86a.54.54,0,0,0-.39.34l-1.11,3.1a.51.51,0,0,0,.2.61.51.51,0,0,0,.64-.06c.35-.33,1.24-1,1.76-.8.34.11.52.62.6,1a2.68,2.68,0,0,1-1.19,3.06c-.65.26-1.3-.08-1.83-.95l-.88.53a2.76,2.76,0,0,0,2.28,1.55,2.13,2.13,0,0,0,.81-.16,3.7,3.7,0,0,0,1.83-4.24A2.14,2.14,0,0,0,174.55,353.45Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 174.375px 355.02px;" class="animable"></path>
                </g>
                <rect x="104.89" y="331.89" width="43.71" height="1.04"
                  style="fill: rgb(38, 50, 56); transform-origin: 126.745px 332.41px;" id="el2btr3jrssqy"
                  class="animable"></rect>
                <rect x="115.7" y="343.17" width="6.82" height="1.04"
                  style="fill: rgb(38, 50, 56); transform-origin: 119.11px 343.69px;" id="elugfjii137ch"
                  class="animable"></rect>
                <g id="eljdzkx5cloh">
                  <path
                    d="M144.8,381.87c-.06-.35-.23-1.29-1-1.37s-1.49,1.16-1.91,2.21l1,.39a6.5,6.5,0,0,1,.79-1.44,2,2,0,0,1,.1.4c.37,2-1.32,3.25-2.33,4l-.29.21a.69.69,0,0,0-.29.76c.09.3.27.93,5,1.35l.09-1a25.29,25.29,0,0,1-3.75-.57C143.33,386,145.26,384.41,144.8,381.87Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 143.403px 384.438px;" class="animable"></path>
                </g>
                <g id="eljc1ezm8y6a">
                  <path
                    d="M153,387.39c-.2.11-.3.13-.32.15a8.24,8.24,0,0,1,.14-2.7,21.12,21.12,0,0,0,.25-2.64c0-.72-.32-.95-.58-1s-.91-.23-3,3.23l.73-3.53-1-.2-1.41,6.81a.52.52,0,0,0,.33.59.52.52,0,0,0,.64-.24,38.19,38.19,0,0,1,3.24-5.29c0,.66-.13,1.41-.23,2.14-.26,1.85-.44,3.19.3,3.7a1,1,0,0,0,.55.16,1.81,1.81,0,0,0,.86-.27,11.18,11.18,0,0,0,3.21-2.48l-.81-.65A10.38,10.38,0,0,1,153,387.39Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 152.255px 384.635px;" class="animable"></path>
                </g>
                <polygon
                  points="144.31 342.56 144.42 341.53 142.71 341.34 142.99 340.3 141.99 340.04 141.67 341.23 140.19 341.06 140.08 342.09 141.41 342.24 140.81 344.5 141.81 344.76 142.45 342.36 144.31 342.56"
                  style="fill: rgb(38, 50, 56); transform-origin: 142.25px 342.4px;" id="el2ab1x9595ee"
                  class="animable"></polygon>
                <g id="elkfateyxeip">
                  <path
                    d="M165.55,387.58a3.51,3.51,0,0,0,2.75-2.68,1.86,1.86,0,0,0-.45-1.94,3.43,3.43,0,0,0-2.74-.47,4.15,4.15,0,0,0,.61-2.69c0-.27-.11-1.11-.77-1.23s-1.45.71-2.32,2.46l.93.46a8.65,8.65,0,0,1,1.11-1.74.61.61,0,0,1,0,.15,3.33,3.33,0,0,1-1.4,3,.51.51,0,0,0-.2.66.54.54,0,0,0,.64.27c.85-.29,2.82-.7,3.43-.15.07.07.28.27.13.95a2.49,2.49,0,0,1-2,1.9,3.57,3.57,0,0,1-3.23-.71l-.8.67a4.19,4.19,0,0,0,3.12,1.18A5,5,0,0,0,165.55,387.58Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 164.822px 383.117px;" class="animable"></path>
                </g>
                <g id="el7jb0x0ytqt2">
                  <path
                    d="M484.48,377h-69v-2l66.72-21.51a.54.54,0,0,0,.35-.38.52.52,0,0,0-.15-.49l-46.69-44a.53.53,0,0,0-.48-.13.54.54,0,0,0-.37.35l-19.38,62.69V282a.52.52,0,1,0-1,0v87.82l-18.63-60.73a.51.51,0,0,0-.36-.35.52.52,0,0,0-.49.12l-.33.32a.49.49,0,0,0-.48.36l0,.12-21.36,20a.55.55,0,0,0-.48.12.52.52,0,0,0-.14.47l-25.69,24a.51.51,0,0,0-.15.5.53.53,0,0,0,.36.38l66.93,18.71.23.24a.51.51,0,0,0,.38.16.59.59,0,0,0,.25-.07V377H341.61a.52.52,0,0,0,0,1h72.81V407.4a.52.52,0,1,0,1,0V378h69a.52.52,0,1,0,0-1Zm-28-47.27-4.79,5.11a.51.51,0,0,0,0,.73.54.54,0,0,0,.35.14.51.51,0,0,0,.38-.16l4.8-5.11L481,352.79,416.9,373.46l.79-.84a.52.52,0,0,0-.76-.71l-.73.78L427,337.85l6.85,1.95.14,0a.53.53,0,0,0,.5-.38.52.52,0,0,0-.36-.64l-6.82-1.94,7.79-25.21,1.86,6a.53.53,0,0,0,.5.36.39.39,0,0,0,.15,0,.51.51,0,0,0,.34-.65l-2.14-6.94a.5.5,0,0,0-.24-.29l0-.13ZM379,363.06l1.05-3.47a.52.52,0,0,0-1-.3L378,362.77h0l-30-8.39,3.36-1a.51.51,0,0,0,.36-.64.53.53,0,0,0-.65-.35l-1.64.48L372.75,331l2,2.09a.55.55,0,0,0,.38.16.5.5,0,0,0,.35-.15.51.51,0,0,0,0-.73l-2-2.08,20-18.68-.42,1.37a.52.52,0,0,0,.35.65l.15,0a.5.5,0,0,0,.49-.37l.94-3.09.05,0L403.28,337h0l-3.49,1a.53.53,0,0,0-.35.65.53.53,0,0,0,.5.37l.15,0,3.48-1,.05,0L414.29,373l-.17-.05L412,370.71a.52.52,0,0,0-.76.72l.88.92Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 413.158px 344.7px;" class="animable"></path>
                </g>
                <g id="elduq0ya7q9ng">
                  <path
                    d="M389.4,326.87l.15,0a.53.53,0,0,0,.5-.37l2-6.61a.52.52,0,0,0-1-.31l-2,6.62A.52.52,0,0,0,389.4,326.87Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 390.547px 323.042px;" class="animable"></path>
                </g>
                <g id="el9wr2orywpin">
                  <path
                    d="M383.67,345.72a.51.51,0,0,0-.64.35l-2,6.61a.52.52,0,0,0,.34.65l.15,0a.53.53,0,0,0,.5-.37l2-6.61A.52.52,0,0,0,383.67,345.72Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 382.522px 349.514px;" class="animable"></path>
                </g>
                <g id="el6jl9z7ttu4w">
                  <path
                    d="M385.38,340.1a.39.39,0,0,0,.15,0,.52.52,0,0,0,.5-.37l2-6.61a.53.53,0,0,0-.35-.65.54.54,0,0,0-.65.35l-2,6.61A.51.51,0,0,0,385.38,340.1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 386.524px 336.28px;" class="animable"></path>
                </g>
                <g id="el9peku8gij2">
                  <path
                    d="M364.94,348.31l-7,2.05a.52.52,0,0,0-.35.64.53.53,0,0,0,.5.38l.15,0,7-2.05a.52.52,0,0,0-.29-1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 361.592px 349.845px;" class="animable"></path>
                </g>
                <g id="elztwog8seqn">
                  <path d="M378.86,344.21l-7,2.05a.52.52,0,0,0,.15,1l.15,0,7-2.05a.52.52,0,1,0-.3-1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 375.534px 345.724px;" class="animable"></path>
                </g>
                <g id="ellt2969j5g6c">
                  <path
                    d="M386.12,343.16l7-2.05a.52.52,0,1,0-.29-1l-7,2.05a.52.52,0,0,0-.35.65.43.43,0,0,0,.15.21l-4.92-5.16a.52.52,0,0,0-.73,0,.51.51,0,0,0,0,.73l5.22,5.48a.55.55,0,0,0,.38.16.49.49,0,0,0,.35-.15.51.51,0,0,0,0-.73l-.24-.26a.48.48,0,0,0,.28.1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 386.661px 340.97px;" class="animable"></path>
                </g>
                <g id="elcj6mr84q51a">
                  <path
                    d="M401.59,359.76a.52.52,0,0,0-.75.72l5.22,5.47a.53.53,0,0,0,.38.17.51.51,0,0,0,.36-.15.52.52,0,0,0,0-.73Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 403.827px 362.865px;" class="animable"></path>
                </g>
                <g id="elg4d92tuit0f">
                  <path
                    d="M391.15,348.81a.52.52,0,0,0-.73,0,.51.51,0,0,0,0,.73l5.22,5.48a.55.55,0,0,0,.38.16.51.51,0,0,0,.36-.15.52.52,0,0,0,0-.73Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 393.398px 351.92px;" class="animable"></path>
                </g>
                <g id="ele21xki3449j">
                  <path
                    d="M441.22,331.55a.53.53,0,0,0,.5.37.4.4,0,0,0,.15,0,.51.51,0,0,0,.34-.65l-2.14-6.94a.52.52,0,1,0-1,.31Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 440.641px 327.944px;" class="animable"></path>
                </g>
                <g id="elvlt5ra9i2u">
                  <path
                    d="M448,351.72a.51.51,0,0,0-.34.65l2.14,6.94a.53.53,0,0,0,.5.37.4.4,0,0,0,.15,0,.51.51,0,0,0,.34-.65l-2.14-6.94A.52.52,0,0,0,448,351.72Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 449.225px 355.693px;" class="animable"></path>
                </g>
                <g id="el47x0dtv7387">
                  <path
                    d="M444.37,341.73l-3.28-.93a.52.52,0,0,0-.65.35.52.52,0,0,0,.36.64l3.47,1-2.49,2.65a.52.52,0,0,0,0,.73.47.47,0,0,0,.35.14.51.51,0,0,0,.38-.16l2.4-2.56.57,1.85a.53.53,0,0,0,.5.37.4.4,0,0,0,.15,0,.51.51,0,0,0,.34-.65l-.57-1.86,1.85.53.15,0a.52.52,0,0,0,.14-1l-1.88-.54,1.32-1.41a.51.51,0,0,0,0-.73.53.53,0,0,0-.74,0l-1.34,1.44-1.05-3.39a.52.52,0,0,0-1,.31Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 444.394px 342.071px;" class="animable"></path>
                </g>
                <g id="elihck99xn79">
                  <path
                    d="M426.87,361.32l-5,5.3a.51.51,0,0,0,0,.73.5.5,0,0,0,.36.14.52.52,0,0,0,.38-.16l5-5.3a.52.52,0,0,0,0-.73A.51.51,0,0,0,426.87,361.32Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 424.738px 364.32px;" class="animable"></path>
                </g>
                <g id="eldvvla9f8mmr">
                  <path
                    d="M436.81,350.73l-5,5.29a.52.52,0,0,0,.38.88.52.52,0,0,0,.38-.17l5-5.29a.54.54,0,0,0,0-.74A.53.53,0,0,0,436.81,350.73Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 434.691px 353.727px;" class="animable"></path>
                </g>
                <g id="elgudovp84snc">
                  <path
                    d="M468.74,349.77l7,2a.39.39,0,0,0,.15,0,.53.53,0,0,0,.5-.37.54.54,0,0,0-.36-.65l-7-2a.52.52,0,0,0-.65.36A.53.53,0,0,0,468.74,349.77Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 472.383px 350.253px;" class="animable"></path>
                </g>
                <g id="eldx88ybm8d7l">
                  <path
                    d="M454.77,345.78l7,2a.32.32,0,0,0,.14,0,.53.53,0,0,0,.5-.38.51.51,0,0,0-.36-.64l-7-2a.53.53,0,0,0-.64.36A.51.51,0,0,0,454.77,345.78Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 458.407px 346.265px;" class="animable"></path>
                </g>
                <g id="el2bb2krd3l1e">
                  <path
                    d="M406.08,379.47c-1.82,0-3.86,2-4.33,3.68a1.83,1.83,0,0,0,.69,2.22,3.44,3.44,0,0,0,1.83.58,2.53,2.53,0,0,0,1.73-.65.52.52,0,0,0,0-.73.53.53,0,0,0-.73,0c-.09.09-.91.8-2.28-.07-.12-.07-.47-.29-.25-1.06.37-1.27,2.05-2.92,3.34-2.92.39,0,.51.09.53.12.1.21-.25.94-.71,1.5a.51.51,0,0,0,.08.73.52.52,0,0,0,.73-.07c.22-.27,1.29-1.65.84-2.61A1.47,1.47,0,0,0,406.08,379.47Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 404.637px 382.703px;" class="animable"></path>
                </g>
                <g id="el2abfsxl7gcc">
                  <path
                    d="M410.82,381.49a.55.55,0,0,0-.53.41c-.28,1.33-.93,2.88-1.31,3a5.68,5.68,0,0,1-.14-2.82.52.52,0,0,0-1-.13c-.11.88-.28,3,.46,3.71a.93.93,0,0,0,.83.23,2.25,2.25,0,0,0,1.35-1.27c0,1.91-.35,3.8-1.36,4.08a.52.52,0,0,0,.14,1l.13,0c2.83-.77,2.05-7.05,1.95-7.76A.51.51,0,0,0,410.82,381.49Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 409.627px 385.595px;" class="animable"></path>
                </g>
                <g id="elbhe1bshndg">
                  <path
                    d="M420.21,379c-1.2.06-3.25.3-3.54,1.3-.14.49.13,1,.79,1.44a3.24,3.24,0,0,0,1.77.71,1.36,1.36,0,0,0,.74-.21c1-.6.87-2.15.78-2.79A.51.51,0,0,0,420.21,379Zm-.78,2.36c-.24.14-.75,0-1.37-.47-.25-.17-.34-.28-.38-.3a5,5,0,0,1,2.08-.51C419.79,380.79,419.63,381.25,419.43,381.38Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 418.722px 380.724px;" class="animable"></path>
                </g>
                <g id="elc2tl7gjvj1a">
                  <path
                    d="M428,384.15a.52.52,0,0,0-.05-.73.51.51,0,0,0-.73.05c-.34.38-1.5,1.4-2.3,1a2.48,2.48,0,0,1-.95-2.18,2.73,2.73,0,0,1,1.82-2.5c.68-.29,1-.25,1.05-.18s0,1.28-.38,2.19a.52.52,0,0,0,.26.69.54.54,0,0,0,.69-.27c.25-.57,1-2.49.17-3.34-.45-.46-1.19-.47-2.2,0a3.79,3.79,0,0,0-2.45,3.42,3.45,3.45,0,0,0,1.52,3.14,2,2,0,0,0,.88.2A4.29,4.29,0,0,0,428,384.15Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 425.523px 382.086px;" class="animable"></path>
                </g>
                <g id="elq9ley9f83ck">
                  <path
                    d="M429.57,384.65a.52.52,0,1,0-.25,1,2.44,2.44,0,0,0,.59.07,3.11,3.11,0,0,0,1.94-.79,2.39,2.39,0,0,0,.22.23,2.59,2.59,0,0,0,1.78.65,4.65,4.65,0,0,0,1.12-.16.53.53,0,0,0,.37-.64.52.52,0,0,0-.64-.36,2,2,0,0,1-1.93-.26,1.12,1.12,0,0,1-.17-.21,13.81,13.81,0,0,0,2-3.57.52.52,0,1,0-1-.36,13.29,13.29,0,0,1-1.57,2.9,8.07,8.07,0,0,1-.13-2.87.53.53,0,0,0-.44-.59.52.52,0,0,0-.59.44,8.46,8.46,0,0,0,.36,3.9A1.91,1.91,0,0,1,429.57,384.65Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 432.107px 382.748px;" class="animable"></path>
                </g>
                <g id="eldtendu2z1me">
                  <path
                    d="M435.88,301.21H436a.52.52,0,0,0,.51-.44l.92-6.31a.64.64,0,0,0,.18-.06,4.82,4.82,0,0,1,2.43-.85.9.9,0,0,1-.05.49,5.35,5.35,0,0,1-1.21,2.51l-.18.14a.52.52,0,0,0,.55.87,1.21,1.21,0,0,0,.28-.19,3.39,3.39,0,0,1,1.46-.71s.07.12,0,.57c-.39,2.14-1.06,3.55-1.83,3.86a1.46,1.46,0,0,1-1.4-.37.5.5,0,0,0-.72.12.51.51,0,0,0,.11.72,2.88,2.88,0,0,0,1.66.63,2.07,2.07,0,0,0,.74-.14c1.44-.58,2.13-2.84,2.46-4.64.15-.8,0-1.35-.45-1.62a1.33,1.33,0,0,0-.93-.11,9.83,9.83,0,0,0,.47-1.37,1.36,1.36,0,0,0-.32-1.57c-.73-.56-2.13,0-3.05.47l.24-1.65a.52.52,0,1,0-1-.15l-1.35,9.21A.53.53,0,0,0,435.88,301.21Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 438.74px 296.517px;" class="animable"></path>
                </g>
                <g id="elis3eqme55aq">
                  <path
                    d="M441.52,302.45a.51.51,0,0,0-.66.31.53.53,0,0,0,.31.67,3.24,3.24,0,0,0,1.08.19,2.74,2.74,0,0,0,1.33-.34l.25-.16a3,3,0,0,0,1.61,1.76,1.68,1.68,0,0,0,.5.07,3,3,0,0,0,2.09-1.22.51.51,0,0,0,0-.73.52.52,0,0,0-.73,0c-.41.47-1,1-1.5.85s-.81-.75-1.11-1.52a8.52,8.52,0,0,0,1.48-3.14.51.51,0,0,0-.39-.62.53.53,0,0,0-.62.39,8.14,8.14,0,0,1-.87,2.14,13.86,13.86,0,0,1-.35-1.85.54.54,0,0,0-.58-.46.51.51,0,0,0-.45.57,14.4,14.4,0,0,0,.58,2.72,3.9,3.9,0,0,1-.36.25A1.83,1.83,0,0,1,441.52,302.45Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 444.507px 301.755px;" class="animable"></path>
                </g>
                <g id="elksc8rdu9m5">
                  <path
                    d="M395.19,303.22h.11a.52.52,0,0,0,.51-.41l1.09-5.18a6.52,6.52,0,0,1,2.14-.85h0a3.65,3.65,0,0,1-1.16,2.14.51.51,0,0,0-.12.66.52.52,0,0,0,.64.23c.64-.26,1.75-.49,2.11-.2.18.14.16.48.11.74a2.88,2.88,0,0,1-1.95,2.42.83.83,0,0,1-.9-.53.51.51,0,1,0-.92.46,1.84,1.84,0,0,0,1.67,1.11,1.51,1.51,0,0,0,.3,0,3.87,3.87,0,0,0,2.82-3.25,1.67,1.67,0,0,0-.47-1.73,2.25,2.25,0,0,0-1.62-.36,4.45,4.45,0,0,0,.52-1.52,1,1,0,0,0-.39-1c-.56-.38-1.6,0-2.51.39l.2-.91a.52.52,0,0,0-.4-.62.53.53,0,0,0-.62.4l-.41,1.93a.65.65,0,0,0,0,.21l-1.12,5.28A.51.51,0,0,0,395.19,303.22Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 398.263px 299.309px;" class="animable"></path>
                </g>
                <g id="elhvol672lhb">
                  <path
                    d="M403.38,306.91a2.46,2.46,0,0,1-2.2-1.67.52.52,0,0,0-.66-.32.51.51,0,0,0-.32.65,3.49,3.49,0,0,0,3.18,2.38c2.36,0,3.09-4.68,3.22-5.62a.52.52,0,0,0-1-.22,2.77,2.77,0,0,1-.93,1.43.53.53,0,0,1-.43,0,.43.43,0,0,1-.28-.25,3.22,3.22,0,0,1,.16-2,.52.52,0,0,0-1-.36,4.28,4.28,0,0,0-.11,2.81,1.47,1.47,0,0,0,.88.78,1.53,1.53,0,0,0,1.17-.06C404.67,305.75,404.1,306.91,403.38,306.91Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 403.386px 304.265px;" class="animable"></path>
                </g>
                <g id="elk4vx9k4leo">
                  <path
                    d="M362.72,387.31a2.57,2.57,0,0,0,.54.08.52.52,0,0,0,.52-.52.53.53,0,0,0-.52-.52,1.11,1.11,0,0,1-.28-.05c-1.08-.28-1.82.09-3.05,3-.07.17-.14.32-.21.47-.4-1.38-.81-3-1.14-4.52a.53.53,0,0,0-.62-.4.52.52,0,0,0-.4.62c.58,2.63,1.08,4.46,1.5,5.74-1.29,2.71-1.86,3.06-2,3,0,0-.25-.05-.53-1a.52.52,0,1,0-1,.3c.12.41.51,1.66,1.47,1.71H357c.84,0,1.63-1,2.53-2.71.69,1.62,1.14,1.63,1.36,1.63a4.77,4.77,0,0,0,2.7-1.45.51.51,0,0,0,0-.74.52.52,0,0,0-.73,0,4.11,4.11,0,0,1-1.87,1.14,6.3,6.3,0,0,1-.83-1.86c.22-.48.45-1,.69-1.56C362,387.11,362.39,387.23,362.72,387.31Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 359.644px 390.03px;" class="animable"></path>
                </g>
                <g id="elvoq91sh712">
                  <path
                    d="M370.1,398.5a2.89,2.89,0,0,1-.55.62,11.24,11.24,0,0,1-.23-2.48c0-.66,0-1.28-.1-1.79s-.44-.8-.65-.84-.84-.16-2.5,2.4l.55-2.42a.52.52,0,0,0-.39-.62.51.51,0,0,0-.62.39l-1.3,5.71a.52.52,0,0,0,1,.36,27.18,27.18,0,0,1,3-4.57c0,.41,0,.9.06,1.41.06,1.82.1,3.25,1,3.52a1,1,0,0,0,.24,0c.57,0,1.07-.58,1.46-1.12a.51.51,0,0,0-.11-.72A.52.52,0,0,0,370.1,398.5Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 367.725px 396.776px;" class="animable"></path>
                </g>
                <g id="elpfxp7xv3owi">
                  <path
                    d="M378.56,390.76h-2.37l.29-1.45a.53.53,0,0,0-.41-.61.52.52,0,0,0-.61.41l-.33,1.65h-2a.52.52,0,0,0-.52.52.52.52,0,0,0,.52.52h1.8l-.24,1.2a.53.53,0,0,0,.41.61h.1a.52.52,0,0,0,.51-.42l.28-1.4h2.58a.52.52,0,0,0,.52-.52A.52.52,0,0,0,378.56,390.76Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 375.85px 391.15px;" class="animable"></path>
                </g>
                <g id="ele0vl8ht9xf">
                  <path
                    d="M384.36,387.4a.52.52,0,0,0-.56.29c-.69,1.48-2.06,3.47-2.82,3.34,0,0-.09,0-.17-.13-.46-.69-.2-2.93.08-4.17a.52.52,0,0,0-1-.23c-.13.61-.77,3.72.08,5a1.25,1.25,0,0,0,.86.57c1.16.2,2.28-1.11,3-2.29,0,1.74-.06,4.32-.81,5.68-.46.83-1,1.27-1.54,1.2a1.51,1.51,0,0,1-1.15-1.11.52.52,0,0,0-.65-.33.53.53,0,0,0-.33.66,2.51,2.51,0,0,0,2,1.82h.17c.59,0,1.55-.27,2.37-1.74,1.36-2.45.86-7.86.84-8.09A.52.52,0,0,0,384.36,387.4Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 382.081px 391.939px;" class="animable"></path>
                </g>
                <g id="elkr2poassfi">
                  <path
                    d="M393.09,396.54a.52.52,0,0,0-.71.19,4.41,4.41,0,0,1-.92,1.28,9.57,9.57,0,0,1-.59-2.19c-.11-.58-.24-1.2-.39-1.81-.07-.27-.27-1.09-1-1.09-.26,0-.9,0-1.89,2.78v-2.08a.52.52,0,1,0-1,0v5.71a.51.51,0,0,0,.45.51h.06a.53.53,0,0,0,.51-.39,25.14,25.14,0,0,1,1.82-5.29.36.36,0,0,1,0,.1c.15.6.27,1.2.38,1.76.35,1.76.58,2.92,1.43,3.05.62.1,1.2-.42,2-1.82A.52.52,0,0,0,393.09,396.54Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 389.945px 396.38px;" class="animable"></path>
                </g>
                <g id="el9rdjravzsz7">
                  <path
                    d="M437.61,390a.51.51,0,0,0-.65.34c-.89,2.88-3.5,9.21-4.56,11.62a4.43,4.43,0,0,0-.47-1.36c-.28-.57-.44-5.19-.44-9.33a.52.52,0,0,0-1-.15s-1.55,4.93-2.33,7.53c-.66,2.19-1.86,2.48-1.93,2.49a.52.52,0,0,0-.42.6.5.5,0,0,0,.59.42c.08,0,1.89-.34,2.75-3.21.36-1.2.89-2.9,1.35-4.38,0,2.82.2,6,.58,6.59a5.45,5.45,0,0,1,.37,1.21c.16.75.28,1.29.79,1.35h.08c.27,0,.51-.19.69-.55.5-1,3.91-9.13,5-12.53A.52.52,0,0,0,437.61,390Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 431.915px 396.847px;" class="animable"></path>
                </g>
                <g id="el004kyce2l76gv">
                  <path
                    d="M451.68,397.82l-5.71-2.6a.53.53,0,0,0-.69.26.52.52,0,0,0,.26.69l2.45,1.11-9,.75a.52.52,0,0,0-.48.56.53.53,0,0,0,.52.48h0l9.34-.77a.53.53,0,0,0,.48-.56.14.14,0,0,1,0-.06l1.39.63-6,2.89a.52.52,0,0,0,.23,1,.59.59,0,0,0,.22-.05l7-3.37a.54.54,0,0,0,.29-.48A.51.51,0,0,0,451.68,397.82Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 445.244px 398.689px;" class="animable"></path>
                </g>
                <g id="elrzrf6bwoxu">
                  <path
                    d="M461,401.29a3,3,0,0,1-3.54.44,6.6,6.6,0,0,1-2.7-3.16l1.36-.58c1.56-.67,2.43-3.36,2.36-5-.05-1.39-.72-1.82-1.11-1.95-.71-.23-1.46.43-2.4,2.16l-.12.21,0-.83a.54.54,0,0,0-.51-.53.5.5,0,0,0-.53.51c0,1.12-.07,2.28-.14,3.4-1.19,3-2.27,6.81-1.22,7.65a.74.74,0,0,0,.48.18.66.66,0,0,0,.3-.07c.54-.25.9-1.66,1.15-3.59a7.09,7.09,0,0,0,2.55,2.49,4,4,0,0,0,4.77-.6.52.52,0,0,0,0-.73A.51.51,0,0,0,461,401.29Zm-7.91.61a11.14,11.14,0,0,1,.2-1.21C453.19,401.16,453.12,401.57,453.05,401.9Zm1.66-5.76c1-2.54,2-4,2.3-4.1.22.07.37.45.4,1,.06,1.43-.73,3.55-1.74,4l-1.05.45C454.66,397,454.68,396.6,454.71,396.14Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 456.937px 397.393px;" class="animable"></path>
                </g>
              </g>
              <defs>
                <filter id="active" height="200%">
                  <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                  <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                  <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                  <feMerge>
                    <feMergeNode in="OUTLINE"></feMergeNode>
                    <feMergeNode in="SourceGraphic"></feMergeNode>
                  </feMerge>
                </filter>
                <filter id="hover" height="200%">
                  <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                  <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                  <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                  <feMerge>
                    <feMergeNode in="OUTLINE"></feMergeNode>
                    <feMergeNode in="SourceGraphic"></feMergeNode>
                  </feMerge>
                  <feColorMatrix type="matrix"
                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                  </feColorMatrix>
                </filter>
              </defs>
            </svg>
          </div>
          <!--end::Body-->
        </div>
        <!--end::Statistics Widget 2-->
      </div>
      <!--end::Col-->
      <!--begin::Col-->
      <div class="col-xl-4 mb-5 mb-xl-10">
        <!--begin::Engage widget 1-->
        <div class="card h-md-100 pt-6">

          <div class="d-flex flex-wrap flex-sm-nowrap">

            <div class="me-7 mb-4 ps-5">
              <div class="symbol symbol-100px symbol-lg-120px symbol-fixed position-relative">
                <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="image">
                <div
                  class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px">
                </div>
              </div>
            </div>

            <div class="d-flex flex-column">
              <!--begin::Name-->
              <div class="d-flex align-items-center mb-2">
                <a href="#"
                  class="text-gray-900 text-hover-primary fs-6 fw-bolder">{{ Auth::guard('instruktur')->user()->name }}</a>

              </div>
              <!--end::Name-->
              <!--begin::Info-->
              <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                  <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                  <span class="svg-icon svg-icon-4 me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none">
                      <path opacity="0.3"
                        d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                        fill="black"></path>
                      <path
                        d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                        fill="black"></path>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->{{ Auth::guard('instruktur')->user()->username }}
                </a>
                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                  <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                  <span class="svg-icon svg-icon-4 me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none">
                      <path opacity="0.3"
                        d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                        fill="black"></path>
                      <path
                        d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                        fill="black"></path>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->{{ Auth::guard('instruktur')->user()->expertise }}
                </a>
                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                  <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                  <span class="svg-icon svg-icon-4 me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none">
                      <path opacity="0.3"
                        d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                        fill="black"></path>
                      <path
                        d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                        fill="black"></path>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->Pengajar
                </a>
              </div>
              <!--end::Info-->
            </div>
          </div>


        </div>
        <!--end::Engage widget 1-->
      </div>
      <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row gy-5 g-xl-10">
      <!--begin::Col-->
      <div class="col-xl-8 mb-xl-10">
        <div class="card card-xl-stretch mb-5 mb-xl-8">
          <!--begin::Header-->
          <div class="card-header align-items-center border-0 mt-4">
            <h3 class="card-title align-items-start flex-column">
              <span class="fw-bolder text-dark">Kursus Terbaru</span>
              <span class="text-muted mt-1 fw-bold fs-7">Kursus</span>
            </h3>
            <div class="card-toolbar">
              <!--begin::Menu-->
              <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                <span class="svg-icon svg-icon-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="5" y="5" width="5" height="5" rx="1"
                        fill="#000000"></rect>
                      <rect x="14" y="5" width="5" height="5" rx="1"
                        fill="#000000" opacity="0.3"></rect>
                      <rect x="5" y="14" width="5" height="5" rx="1"
                        fill="#000000" opacity="0.3"></rect>
                      <rect x="14" y="14" width="5" height="5" rx="1"
                        fill="#000000" opacity="0.3"></rect>
                    </g>
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </button>
              <!--begin::Menu 3-->
              <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                data-kt-menu="true">
                <!--begin::Heading-->
                <div class="menu-item px-3">
                  <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                </div>
                <!--end::Heading-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a href="#" class="menu-link px-3">Create Invoice</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a href="#" class="menu-link flex-stack px-3">Create Payment
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                      data-bs-original-title="Specify a target name for future usage and reference"
                      aria-label="Specify a target name for future usage and reference"></i></a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a href="#" class="menu-link px-3">Generate Bill</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                  <a href="#" class="menu-link px-3">
                    <span class="menu-title">Subscription</span>
                    <span class="menu-arrow"></span>
                  </a>
                  <!--begin::Menu sub-->
                  <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="#" class="menu-link px-3">Plans</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="#" class="menu-link px-3">Billing</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="#" class="menu-link px-3">Statements</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <div class="menu-content px-3">
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                          <!--begin::Input-->
                          <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                            checked="checked" name="notifications">
                          <!--end::Input-->
                          <!--end::Label-->
                          <span class="form-check-label text-muted fs-6">Recuring</span>
                          <!--end::Label-->
                        </label>
                        <!--end::Switch-->
                      </div>
                    </div>
                    <!--end::Menu item-->
                  </div>
                  <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3 my-1">
                  <a href="#" class="menu-link px-3">Settings</a>
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu 3-->
              <!--end::Menu-->
            </div>
          </div>
          <!--end::Header-->
          <!--begin::Body-->
          {{-- <div class="card-body pt-3">
            <!--begin::Item-->
            @foreach ($courses as $course)
              <div class="d-flex align-items-sm-center mb-7">
                <!--begin::Symbol-->
                <div class="symbol symbol-60px symbol-2by3 me-4">
                  <div class="symbol-label"
                    style="background-image: url('{{ asset('storage/images/course/' . $course->image) }}')">
                  </div>
                </div>
                <!--end::Symbol-->
                <!--begin::Content-->
                <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                  <!--begin::Title-->
                  <div class="flex-grow-1 my-lg-0 my-2 me-2">
                    <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">{{ $course->title }}</a>
                    <span
                      class="text-muted fw-bold d-block pt-1">{{ implode(' ', array_slice(str_word_count($course->sub_title, 1), 0, 4)) }}
                    </span>
                  </div>
                  <!--end::Title-->
                  <!--begin::Section-->
                  <div class="d-flex align-items-center">
                    <div class="me-6">
                      <span class="text-gray-800 fw-bolder">{{ $course->category->name }}</span>
                    </div>
                    <a href="{{ route('course.detail', ['uuid' => $course->uuid]) }}"
                      class="btn btn-icon btn-light btn-sm border-0">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                      <span class="svg-icon svg-icon-2 svg-icon-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none">
                          <rect opacity="0.5" x="18" y="13" width="13" height="2"
                            rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                          <path
                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                            fill="black"></path>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </a>
                  </div>
                  <!--end::Section-->
                </div>
                <!--end::Content-->
              </div>
            @endforeach
            <!--end::Item-->
          </div> --}}
          <!--end::Body-->
        </div>
      </div>
      <!--end::Col-->
      <!--begin::Col-->
      <div class="col-xl-4 mb-5 mb-xl-10">
        <!--begin::List widget 4-->
        <div class="card card-flush h-lg-100">
          <!--begin::Header-->
          <div class="card-header pt-5">
            <!--begin::Title-->
            <h3 class="card-title align-items-start flex-column">
              <span class="card-label fw-bolder text-dark">Key Statistics</span>
              <span class="text-gray-400 mt-1 fw-bold fs-6">Social activities overview</span>
            </h3>
            <!--end::Title-->
            <!--begin::Toolbar-->
            <div class="card-toolbar">
              <!--begin::Menu-->
              <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                <span class="svg-icon svg-icon-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <rect opacity="0.3" x="2" y="2" width="20" height="20"
                      rx="4" fill="black"></rect>
                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                      fill="black">
                    </rect>
                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                      fill="black">
                    </rect>
                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                      fill="black">
                    </rect>
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </button>
              <!--begin::Menu 2-->
              <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mb-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a href="#" class="menu-link px-3">New Ticket</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a href="#" class="menu-link px-3">New Customer</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                  <!--begin::Menu item-->
                  <a href="#" class="menu-link px-3">
                    <span class="menu-title">New Group</span>
                    <span class="menu-arrow"></span>
                  </a>
                  <!--end::Menu item-->
                  <!--begin::Menu sub-->
                  <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="#" class="menu-link px-3">Admin Group</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="#" class="menu-link px-3">Staff Group</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="#" class="menu-link px-3">Member Group</a>
                    </div>
                    <!--end::Menu item-->
                  </div>
                  <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a href="#" class="menu-link px-3">New Contact</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mt-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <div class="menu-content px-3 py-3">
                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                  </div>
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu 2-->
              <!--end::Menu-->
            </div>
            <!--end::Toolbar-->
          </div>
          <!--end::Header-->
          <!--begin::Body-->
          <div class="card-body pt-9 pb-5">
            <!--begin::Slider-->
            <div class="tns tns-initiazlied">
              <!--begin::Slider wrapper-->
              <div class="tns-outer" id="tns1-ow">
                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span
                    class="current">5</span> of 4</div>
                <div id="tns1-mw" class="tns-ovh">
                  <div class="tns-inner" id="tns1-iw">
                    <div data-tns="true" data-tns-nav-position="bottom" data-tns-controls="false"
                      class="  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1"
                      style="transform: translate3d(-66.6667%, 0px, 0px);">
                      <div class="mb-3 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">9.1k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Likes</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-34-n9z7" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-36-5h1p">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-35-5xml" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-p69a-container"
                                    aria-controls="select2-p69a-container"><span class="select2-selection__rendered"
                                      id="select2-p69a-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">4.2k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Comments</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-37-uh3a" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-39-aozq">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-38-3m6v" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-svzo-container"
                                    aria-controls="select2-svzo-container"><span class="select2-selection__rendered"
                                      id="select2-svzo-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">450</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Shares</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-40-c9s1" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-42-h1m4">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-41-2mkx" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-hj33-container"
                                    aria-controls="select2-hj33-container"><span class="select2-selection__rendered"
                                      id="select2-hj33-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 85%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                      </div>
                      <!--begin::Slide-->
                      <div class="mb-3 tns-item" id="tns1-item0" aria-hidden="true" tabindex="-1">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">6.3k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Likes</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-7-idke" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-9-8j6g">Jul
                                  22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-8-w654" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-8mx9-container"
                                    aria-controls="select2-8mx9-container"><span class="select2-selection__rendered"
                                      id="select2-8mx9-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">2.1k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Comments</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-10-hcs2" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-12-xb9q">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-11-y643" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-p3gh-container"
                                    aria-controls="select2-p3gh-container"><span class="select2-selection__rendered"
                                      id="select2-p3gh-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">650</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Shares</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-13-dqjj" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-15-a63i">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-14-gyir" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-z3vm-container"
                                    aria-controls="select2-z3vm-container"><span class="select2-selection__rendered"
                                      id="select2-z3vm-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 85%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                      </div>
                      <!--end::Slide-->
                      <!--begin::Slide-->
                      <div class="mb-3 tns-item" id="tns1-item1" aria-hidden="true" tabindex="-1">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">3.4k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Comments</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-16-rvaa" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-18-5bv4">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-17-w6f2" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-ky7y-container"
                                    aria-controls="select2-ky7y-container"><span class="select2-selection__rendered"
                                      id="select2-ky7y-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">7.1k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Likes</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-19-2hsj" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-21-3nrj">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-20-wzl0" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-19t3-container"
                                    aria-controls="select2-19t3-container"><span class="select2-selection__rendered"
                                      id="select2-19t3-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">345</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Shares</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-22-bcoy" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-24-viv5">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-23-ru2o" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-gn1d-container"
                                    aria-controls="select2-gn1d-container"><span class="select2-selection__rendered"
                                      id="select2-gn1d-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 85%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                      </div>
                      <!--end::Slide-->
                      <!--begin::Slide-->
                      <div class="mb-3 tns-item" id="tns1-item2" aria-hidden="true" tabindex="-1">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">650</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Shares</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-25-zjiq" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-27-5rmb">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-26-e27j" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-z36z-container"
                                    aria-controls="select2-z36z-container"><span class="select2-selection__rendered"
                                      id="select2-z36z-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 85%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">3.5k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Comments</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-28-veg9" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-30-liga">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-29-yxp9" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-05ro-container"
                                    aria-controls="select2-05ro-container"><span class="select2-selection__rendered"
                                      id="select2-05ro-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">7.5k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Likes</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-31-67hn" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-33-cb0s">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-32-9xv0" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-i79y-container"
                                    aria-controls="select2-i79y-container"><span class="select2-selection__rendered"
                                      id="select2-i79y-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                      </div>
                      <!--end::Slide-->
                      <!--begin::Slide-->
                      <div class="mb-3 tns-item tns-slide-active" id="tns1-item3">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">9.1k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Likes</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-34-n9z7" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-36-5h1p">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-35-5xml" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-p69a-container"
                                    aria-controls="select2-p69a-container"><span class="select2-selection__rendered"
                                      id="select2-p69a-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">4.2k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Comments</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-37-uh3a" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-39-aozq">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-38-3m6v" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-svzo-container"
                                    aria-controls="select2-svzo-container"><span class="select2-selection__rendered"
                                      id="select2-svzo-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">450</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Shares</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-40-c9s1" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-42-h1m4">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-41-2mkx" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-hj33-container"
                                    aria-controls="select2-hj33-container"><span class="select2-selection__rendered"
                                      id="select2-hj33-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 85%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                      </div>
                      <!--end::Slide-->
                      <div class="mb-3 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">6.3k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Likes</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-7-idke" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-9-8j6g">Jul
                                  22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-8-w654" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-8mx9-container"
                                    aria-controls="select2-8mx9-container"><span class="select2-selection__rendered"
                                      id="select2-8mx9-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">2.1k</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Comments</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-10-hcs2" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-12-xb9q">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-11-y643" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-p3gh-container"
                                    aria-controls="select2-p3gh-container"><span class="select2-selection__rendered"
                                      id="select2-p3gh-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="m-0">
                            <span class="text-gray-800 fw-bolder d-block fs-2hx lh-1">650</span>
                            <span class="text-gray-400 fw-bold fs-6">Avarage
                              <br>Shares</span>
                          </div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                            <!--begin::Select-->
                            <div class="mb-2">
                              <select
                                class="form-select form-select-transparent p-0 w-150px me-n5 select2-hidden-accessible"
                                data-control="select2" data-placeholder="All Users"
                                data-dropdown-css-class="w-150px" data-hide-search="true"
                                data-select2-id="select2-data-13-dqjj" tabindex="-1" aria-hidden="true">
                                <option value="1" selected="selected" data-select2-id="select2-data-15-a63i">
                                  Jul 22 - Aug 22</option>
                                <option value="2">Jul 24 - Aug 24</option>
                                <option value="3">Jul 26 - Aug 29</option>
                              </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-14-gyir" style="width: 100%;"><span
                                  class="selection"><span
                                    class="select2-selection select2-selection--single form-select form-select-transparent p-0 w-150px me-n5"
                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-disabled="false" aria-labelledby="select2-z3vm-container"
                                    aria-controls="select2-z3vm-container"><span class="select2-selection__rendered"
                                      id="select2-z3vm-container" role="textbox" aria-readonly="true"
                                      title="Jul 22 - Aug 22">Jul 22 - Aug 22</span><span
                                      class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                  aria-hidden="true"></span></span>
                            </div>
                            <!--end::Select-->
                            <!--begin::Progress-->
                            <div class="progress h-6px w-100 bg-light">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 85%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!--end::Progress-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Slide-->
                      </div>
                    </div>
                  </div>

                </div>


              </div>
              <!--end::Slider wrapper-->
            </div>
            <!--end::Slider wrapper-->
          </div>
          <!--end::Body-->
        </div>
        <!--end::List widget 4-->
      </div>
      <!--end::Col-->
    </div>
    <!--end::Row-->
  </div>
@endsection
