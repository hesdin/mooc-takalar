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
                {{ Auth::guard('guru')->user()->nama }}!</a>
              <span class="text-dark fs-5">It's good to see you again</span>
            </div>
            <svg class="animated w-50" id="freepik_stories-files-sent" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500" version="1.1"
              xmlns:svgjs="http://svgjs.com/svgjs">
              <style>
                svg#freepik_stories-files-sent:not(.animated) .animable {
                  opacity: 0;
                }

                svg#freepik_stories-files-sent.animated #freepik--background-simple--inject-166 {
                  animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
                  animation-delay: 0s;
                }

                svg#freepik_stories-files-sent.animated #freepik--Bricks--inject-166 {
                  animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                  animation-delay: 0s;
                }

                svg#freepik_stories-files-sent.animated #freepik--Floor--inject-166 {
                  animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                  animation-delay: 0s;
                }

                svg#freepik_stories-files-sent.animated #freepik--Bag--inject-166 {
                  animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                  animation-delay: 0s;
                }

                svg#freepik_stories-files-sent.animated #freepik--Character--inject-166 {
                  animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                  animation-delay: 0s;
                }

                svg#freepik_stories-files-sent.animated #freepik--Progress--inject-166 {
                  animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
                  animation-delay: 0s;
                }

                svg#freepik_stories-files-sent.animated #freepik--Bubble--inject-166 {
                  animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
                  animation-delay: 0s;
                }

                svg#freepik_stories-files-sent.animated #freepik--Folder--inject-166 {
                  animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                  animation-delay: 0s;
                }

                @keyframes slideUp {
                  0% {
                    opacity: 0;
                    transform: translateY(30px);
                  }

                  100% {
                    opacity: 1;
                    transform: inherit;
                  }
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

                @keyframes lightSpeedLeft {
                  from {
                    transform: translate3d(-50%, 0, 0) skewX(20deg);
                    opacity: 0;
                  }

                  60% {
                    transform: skewX(-10deg);
                    opacity: 1;
                  }

                  80% {
                    transform: skewX(2deg);
                  }

                  to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
                  }
                }

                @keyframes fadeIn {
                  0% {
                    opacity: 0;
                  }

                  100% {
                    opacity: 1;
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

                @keyframes slideRight {
                  0% {
                    opacity: 0;
                    transform: translateX(30px);
                  }

                  100% {
                    opacity: 1;
                    transform: translateX(0);
                  }
                }

                @keyframes slideDown {
                  0% {
                    opacity: 0;
                    transform: translateY(-30px);
                  }

                  100% {
                    opacity: 1;
                    transform: translateY(0);
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

                .animator-hidden {
                  display: none;
                }
              </style>
              <g id="freepik--background-simple--inject-166" class="animable"
                style="transform-origin: 248.588px 250.609px;">
                <g id="elwxxkxbze0b">
                  <path
                    d="M67.93,167.09s-27.88,72,11.3,144.5S199.11,422.39,263.7,455.14s131.66,16.8,163.53-36.84-11.84-91.93-11.9-168.42,11.45-96.74-30-161.36-143.06-78.93-219.9-31S67.93,167.09,67.93,167.09Z"
                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 248.588px 250.609px;"
                    class="animable" id="elmrti8ivm2i"></path>
                </g>
                <path
                  d="M99.7,82.87C113.15,66.79,131.34,54.34,153,54.61c37,.46,57,33.2,78.22,58.47,11,13.1,23.49,25.74,39.83,31.89,24.51,9.24,51.81,3.85,75.69-4.72,10.7-3.84,23.38-9.24,35.42-6.48,36.63,8.38,32.82,53.08,26.77,81.38-8.17,38.22-21.45,78.91-48.36,108.27-64.43,70.29-180.38,27.2-238.5-28.89-4.27-4.12-8.36-8.43-12.21-12.95a180,180,0,0,1-25.16-38.44C66,204.19,63.39,156.84,79.64,116.6A127.83,127.83,0,0,1,99.7,82.87Z"
                  style="fill: #90CAF9; transform-origin: 240.865px 207.284px;" id="el60ut8d8nexr" class="animable">
                </path>
                <g id="elr3sur94khm">
                  <path
                    d="M99.7,82.87C113.15,66.79,131.34,54.34,153,54.61c37,.46,57,33.2,78.22,58.47,11,13.1,23.49,25.74,39.83,31.89,24.51,9.24,51.81,3.85,75.69-4.72,10.7-3.84,23.38-9.24,35.42-6.48,36.63,8.38,32.82,53.08,26.77,81.38-8.17,38.22-21.45,78.91-48.36,108.27-64.43,70.29-180.38,27.2-238.5-28.89-4.27-4.12-8.36-8.43-12.21-12.95a180,180,0,0,1-25.16-38.44C66,204.19,63.39,156.84,79.64,116.6A127.83,127.83,0,0,1,99.7,82.87Z"
                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 240.865px 207.284px;"
                    class="animable" id="elj85hq84p62p"></path>
                </g>
              </g>
              <g id="freepik--Bricks--inject-166" class="animable animator-hidden"
                style="transform-origin: 233.68px 199.32px;">
                <g id="el2afaof8kd1x">
                  <rect x="300.34" y="314.69" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 312.815px 319.7px; transform: rotate(180deg);"
                    class="animable" id="elz8rykltpcq9"></rect>
                </g>
                <g id="el0q1mu6cq8k9">
                  <rect x="287.87" y="301.47" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 300.345px 306.48px; transform: rotate(180deg);"
                    class="animable" id="elwzcwpqoavns"></rect>
                </g>
                <g id="elsodsmyfkl7">
                  <rect x="230.61" y="220.57" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 243.085px 225.58px; transform: rotate(180deg);"
                    class="animable" id="el1kid823wcct"></rect>
                </g>
                <g id="elwc5c3oktons">
                  <rect x="244.28" y="208.1" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 256.755px 213.11px; transform: rotate(180deg);"
                    class="animable" id="elb53m8icmno"></rect>
                </g>
                <g id="el8e0mhfmpcmp">
                  <rect x="337.14" y="95.21" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 349.615px 100.22px; transform: rotate(180deg);"
                    class="animable" id="el4tq8mh4e0jc"></rect>
                </g>
                <g id="el3244ilncn9s">
                  <rect x="323.96" y="81.87" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 336.435px 86.88px; transform: rotate(180deg);"
                    class="animable" id="elcd1fdf4yblp"></rect>
                </g>
                <g id="elwnl1c8obpt">
                  <rect x="143.43" y="87.27" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 155.905px 92.28px; transform: rotate(180deg);"
                    class="animable" id="eloh3m3n0n6kc"></rect>
                </g>
                <g id="elg3dr0ehg0jp">
                  <rect x="130.25" y="73.93" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 142.725px 78.94px; transform: rotate(180deg);"
                    class="animable" id="elekui3vtqm0n"></rect>
                </g>
                <g id="elkhm0zwv4fz">
                  <rect x="218.49" y="130.48" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 230.965px 135.49px; transform: rotate(180deg);"
                    class="animable" id="elzzjze455b1e"></rect>
                </g>
                <g id="elyyea97dafl">
                  <rect x="351.63" y="191.19" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 364.105px 196.2px; transform: rotate(180deg);"
                    class="animable" id="ellmezmuch6ao"></rect>
                </g>
                <g id="elp81phmb4i9p">
                  <rect x="381.27" y="278.99" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 393.745px 284px; transform: rotate(180deg);"
                    class="animable" id="eltdat88kv2z"></rect>
                </g>
                <g id="el93ahf41jjl">
                  <rect x="258.57" y="220.57" width="24.95" height="10.02"
                    style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 271.045px 225.58px; transform: rotate(180deg);"
                    class="animable" id="elo2kngzsr32n"></rect>
                </g>
                <path d="M357.16,259.71c-24.25-.27-49.25-.27-72.76,0"
                  style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 320.78px 259.609px;"
                  id="el9zasc8iimd7" class="animable"></path>
                <path d="M367.15,259.71h-6.09"
                  style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 364.105px 259.71px;"
                  id="elpqnknmgeupb" class="animable"></path>
                <path d="M76,287.91c24.25.27,49.25.27,72.76,0"
                  style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 112.38px 288.011px;"
                  id="elvchtl8pyrxk" class="animable"></path>
                <path d="M66.05,287.91h6.1"
                  style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 69.1px 287.91px;"
                  id="el2j6vlcxsezp" class="animable"></path>
                <path d="M242.32,156.27h3.44"
                  style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 244.04px 156.27px;"
                  id="el28zc4imhcdw" class="animable"></path>
                <path d="M206.07,156.27h32.35"
                  style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 222.245px 156.27px;"
                  id="elf7l1wqbgg6d" class="animable"></path>
                <rect x="63.47" y="220.99" width="24.95" height="10.02"
                  style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 75.945px 226px;"
                  id="elvhn7tt4y1zk" class="animable"></rect>
                <path d="M64.58,205.23H61.14"
                  style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 62.86px 205.23px;"
                  id="elmm4o1ukby3p" class="animable"></path>
                <path d="M100.84,205.23H68.49"
                  style="fill: none; stroke: #90CAF9; stroke-linecap: round; stroke-linejoin: round; transform-origin: 84.665px 205.23px;"
                  id="elnphzcpet0j8" class="animable"></path>
              </g>
              <g id="freepik--Floor--inject-166" class="animable" style="transform-origin: 250px 406.03px;">
                <line x1="34.79" y1="406.03" x2="465.21" y2="406.03"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 250px 406.03px;"
                  id="elln10uax9w2r" class="animable"></line>
              </g>
              <g id="freepik--Bag--inject-166" class="animable animator-hidden"
                style="transform-origin: 351.275px 389.542px;">
                <path
                  d="M299.28,416.19s-6.44,9.11.23,12.17,65.73-4,93.37-4.26,42.74-10.7,42.15-13.86-7.33-9.18-7.33-9.18L423,406.55s5,1.5,4.86,3.82-18.45,9.87-41.48,6.69-72.11,6.68-76,6.24-.17-9.14-.17-9.14Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 365.766px 415.094px;" id="elpavzrv0smm"
                  class="animable"></path>
                <path
                  d="M392,419.82c-36.31,2.52-96.64,1.67-96.64,1.67-31.14-2.27-37-12.54-32.14-24.23,7.57-18,40.82-39.35,46.88-39.85,10-.81,20.52,3.16,20.52,3.16l6.5-1.37c-2-5.39,18.55-17.39,27.94-12.21s28.8-1.93,34.65,1.72a13.65,13.65,0,0,1,3.92,3.83,23.12,23.12,0,0,1,3.43,8.16h0l.08,0h0a21.13,21.13,0,0,1,4.5-.7c3.22-.17,7.51.32,10.87,3.25a32.4,32.4,0,0,1,2.45,2.42c6.06,6.62,13.86,19.13,15.66,26.43C442.72,400.4,428.3,417.29,392,419.82Z"
                  style="fill: rgb(153, 153, 153); transform-origin: 351.263px 383.674px;" id="elbb0s918nscb"
                  class="animable"></path>
                <g style="clip-path: url(&quot;#freepik--clip-path--inject-166&quot;); transform-origin: 351.275px 386.233px;"
                  id="elaji9o3c9xfq" class="animable">
                  <g id="elx503fmuo1ef">
                    <path
                      d="M360.87,352.66c-1.77-3.11,20.58-1.64,22.95,0s2.38,6.78,4.95,5.39c2.05-1.1,9.86-5.33,14.86-5.51a23.12,23.12,0,0,1,3.43,8.16s-30.75,8.69-32.73,6.38,5.54-4.23,7.91-9.3-7.12-3.68-9.09-3.64S362.64,355.76,360.87,352.66Z"
                      style="opacity: 0.2; transform-origin: 383.915px 359.154px;" class="animable" id="el3pd1eym275k">
                    </path>
                  </g>
                  <g id="elwhdh5w5ht3">
                    <path
                      d="M392,419.82c-36.31,2.52-96.64,1.67-96.64,1.67-31.14-2.27-37-12.54-32.14-24.23,1.2.94,3.26,1.36,6.64.71,11.11-2.14,17.43-2.73,24.56,4s15.24,10.82,19,9.5c0,0,.52-14.86,15-25.53s17.89-7.64,20.78-10.47,4.6-8-3.7-10.92-12.34-4-12.34-4,9.14-.71,17.06,2.84,14.83,12,11.47,13.91,4.94,5.31,10.68,4.4c5.08-.82,21.94-.91,25.32-1.05-3,.64-16.42,4.83-16.42,8.05,0,0,4.14,6.8,4.11,14.49s9,8.67,12.91,5.79,4.73-6.83,3.25-14.35-5.62-8.08-11-6.91c0,0,6.92-4.17,9.1-2.79s8.3.8,9.49,7.32-3,11.87-1,13.65,13.45-.2,15.43-4,.67-25.57-1.24-26-11.46,2.47-11.73,2.55a7.72,7.72,0,0,1,5.85-5c3.52-.62,7.86-4.08,8.55-7.86,6.06,6.62,13.86,19.13,15.66,26.43C442.72,400.4,428.3,417.29,392,419.82Z"
                      style="opacity: 0.2; transform-origin: 351.275px 391.06px;" class="animable" id="elpe9jm110uy">
                    </path>
                  </g>
                </g>
                <path
                  d="M392,419.82c-36.31,2.52-96.64,1.67-96.64,1.67-31.14-2.27-37-12.54-32.14-24.23,7.57-18,40.82-39.35,46.88-39.85,10-.81,20.52,3.16,20.52,3.16l6.5-1.37c-2-5.39,18.55-17.39,27.94-12.21s28.8-1.93,34.65,1.72a13.65,13.65,0,0,1,3.92,3.83,23.12,23.12,0,0,1,3.43,8.16h0l.08,0h0a21.13,21.13,0,0,1,4.5-.7c3.22-.17,7.51.32,10.87,3.25a32.4,32.4,0,0,1,2.45,2.42c6.06,6.62,13.86,19.13,15.66,26.43C442.72,400.4,428.3,417.29,392,419.82Z"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 351.263px 383.674px;"
                  id="elwjarpcgp8xt" class="animable"></path>
                <path
                  d="M330.62,360.57s4.55,1.52,16,4.25,5.14,12-3.17,12.5S313.81,396.39,313.41,409,330,419.77,330,419.77"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 333.125px 390.217px;"
                  id="eluufgime7jnh" class="animable"></path>
                <path d="M337.13,359.2s15.84-.67,26.52,5.62,39.17-2.51,39.17-2.51"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 369.975px 363.133px;"
                  id="elvf9z744qct" class="animable"></path>
                <path
                  d="M382.24,388.72C387,395.24,385,416.1,385,416.1s31.37-2.86,40-9.88,1.13-29.86-3.62-30.71-22.15,9.07-36,11"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 405.596px 395.779px;"
                  id="eleizpjsjm48i" class="animable"></path>
                <path d="M387.39,388.72s9.89-3.76,11.87,0,5.9,16.48,3.56,20.89-11.08,3.59-11.08,3.59"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 395.466px 400.155px;"
                  id="el5g1taj1hf4t" class="animable"></path>
                <path d="M350.2,349s12.64,5.33,19.77,5.23,15.44-.63,12.27,3.59a67.06,67.06,0,0,0-3.95,5.63"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 366.567px 356.225px;"
                  id="elxlrvxxagiic" class="animable"></path>
                <path d="M319,396.05s14.21,5,29.64,2.67,17.95.45,17.95.45v10.44s-10-1.85-16.37,0-27.3,3.26-36.79-.61"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 340.01px 403.755px;"
                  id="el0aw0vixibcr" class="animable"></path>
                <path d="M314.81,403.21s5.23,1.46,18.33,1.49,25.37-1.08,25.37-1.08"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 336.66px 403.955px;"
                  id="elrz0r0v2aoig" class="animable"></path>
                <path
                  d="M311.72,372.55l-.41-4.55a1.05,1.05,0,0,1,.82-1.11l10.62-2.32a1,1,0,0,1,1.26.91l.43,4.3a1.06,1.06,0,0,1-.79,1.12L313,373.47A1,1,0,0,1,311.72,372.55Z"
                  style="fill: #90CAF9; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 317.875px 369.023px;"
                  id="eliaorvmkzys" class="animable"></path>
                <polygon points="315.58 367.55 321.32 368.54 320.04 369.3 313.9 368.42 315.58 367.55"
                  style="fill: rgb(38, 50, 56); transform-origin: 317.61px 368.425px;" id="elbri52dev3b"
                  class="animable"></polygon>
                <path d="M327.35,362a12,12,0,0,1,7-2.83c3.85,0,6.82,1.19,6.42,1.42s-6.52,1.43-7.66,2.81Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 334.078px 361.285px;" id="el86xjw7qm3o"
                  class="animable"></path>
                <path
                  d="M270.29,410.26s-12.46,4.07-5.74,8.82,15.83,3.76,23.24-1l.79-4.45a30.34,30.34,0,0,0-8.4,2.58c-3.86,2-12.86,0-12.27-1.1a2.68,2.68,0,0,1,2.18-1.09Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 275.57px 416.223px;" id="elqzf3x2yqx7b"
                  class="animable"></path>
                <path
                  d="M308.68,421.19c.92,5,35.68-2.2,63.91-7.18s53.2.79,55.28-3.64,7.16-.13,7.16-.13a23.34,23.34,0,0,1-11.66,11c-8.28,3.39-47.17,2.6-69,7.07s-60.56,11-57.77-6Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 365.744px 420.865px;" id="elpyrb0dvgfys"
                  class="animable"></path>
              </g>
              <g id="freepik--Character--inject-166" class="animable" style="transform-origin: 186.326px 296.98px;">
                <path d="M75,364s-.57,25.77,42.1,44.77S275.73,437,296.86,370.06l-65.71-18.87H143L123.6,360Z"
                  style="fill: #90CAF9; transform-origin: 185.93px 386.914px;" id="el0povyeem6ydo" class="animable">
                </path>
                <g style="clip-path: url(&quot;#freepik--clip-path-2--inject-166&quot;); transform-origin: 185.93px 386.914px;"
                  id="elpzl0kng3cnd" class="animable">
                  <g id="elbc6kmycuz2r">
                    <path d="M75,364s-.57,25.77,42.1,44.77S275.73,437,296.86,370.06l-65.71-18.87H143L123.6,360Z"
                      style="opacity: 0.2; transform-origin: 185.93px 386.914px;" class="animable" id="elmt3vg2l6pyr">
                    </path>
                  </g>
                </g>
                <path d="M75,364s-.57,25.77,42.1,44.77S275.73,437,296.86,370.06l-65.71-18.87H143L123.6,360Z"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 185.93px 386.914px;"
                  id="elbw80hqmojsb" class="animable"></path>
                <path
                  d="M125.09,250.85c-7.74,6.91-34.58,85-31.11,93.52s49,16.3,49,16.3-4.5-88.17-4.73-89.64S125.09,250.85,125.09,250.85Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 118.326px 305.76px;" id="el549nkpkvh9y"
                  class="animable"></path>
                <path
                  d="M245.68,250.85c7.74,6.91,34.58,85,31.11,93.52s-49,16.3-49,16.3,4.5-88.17,4.73-89.64S245.68,250.85,245.68,250.85Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 252.444px 305.76px;" id="el1pxktqxixwmi"
                  class="animable"></path>
                <path
                  d="M125.09,250.85s17.86-20.18,60.1-21.38c33.94-1,57.17,15.85,60.49,21.38s-15.1,79.24-15.1,79.24l10.31,39.68s-55.29,18.42-104.67,0l6.63-41.9S125.46,261.17,125.09,250.85Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 185.585px 303.692px;" id="elq51dgf27ig"
                  class="animable"></path>
                <g id="el0xj5jz22ud3">
                  <g style="opacity: 0.5; transform-origin: 186.435px 286.37px;" class="animable" id="elhjmmcoirnr4">
                    <path d="M208.75,237.58s-15.3,16.86-30.83,12.16"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 193.335px 244.074px;"
                      id="elmml04h8vwnd" class="animable"></path>
                    <path d="M196,268.7a87.4,87.4,0,0,0,10.83,1.4"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 201.415px 269.4px;"
                      id="eljy5r6sn0pf" class="animable"></path>
                    <path d="M152.07,247.48c9.71,8.83,24,16.39,39.15,20.17"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 171.645px 257.565px;"
                      id="elffa6x8xc5r9" class="animable"></path>
                    <path d="M236.3,265a48.11,48.11,0,0,0-5.64,19.51"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 233.48px 274.755px;"
                      id="elcbksqf28l1t" class="animable"></path>
                    <path d="M243.37,254.17a53.5,53.5,0,0,0-4.46,6.2"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 241.14px 257.27px;"
                      id="elfa2bpnmx0u" class="animable"></path>
                    <path d="M244.76,275.17c-6.91,3-13.27,13.82-13.27,13.82a83.34,83.34,0,0,1,6.63,17.69"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 238.125px 290.925px;"
                      id="ell841ns4m39" class="animable"></path>
                    <path d="M234.25,332.67s6.47-1.05,10.51-5.37,15.75-3.16,17.41,0"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 248.21px 328.574px;"
                      id="el8omychxa63" class="animable"></path>
                    <path d="M248.9,322.13s4.15-6.32,13.27-1.9"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 255.535px 320.395px;"
                      id="elgdmnga3n4eo" class="animable"></path>
                    <path d="M128.68,256.11s9.11,6.07,10,22.64"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 133.68px 267.43px;"
                      id="el1jqjxb9pza9" class="animable"></path>
                    <path d="M134.88,295.39c-2.47,6.83-5.15,13.81-6.49,21"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 131.635px 305.89px;"
                      id="elh7pf8uzcmoc" class="animable"></path>
                    <path d="M130.64,278.75c2.41.61,7.88,2.9,8.34,5.72.22,1.31-1.7,4.45-2.15,5.65"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 134.819px 284.435px;"
                      id="elhzxmbbx9tz8" class="animable"></path>
                    <path d="M120.7,323a5.6,5.6,0,0,1,5.28,1.52"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 123.34px 323.685px;"
                      id="elz2ymayn83i" class="animable"></path>
                    <path d="M110.7,327.3a34.84,34.84,0,0,1,5.19-2.85"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 113.295px 325.875px;"
                      id="elcryahx87it" class="animable"></path>
                    <path d="M119.82,330.45s.59-4.93,8.86-3.15,27.9,7.86,27.9,7.86"
                      style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 138.2px 331.036px;"
                      id="elxzzee8nacyg" class="animable"></path>
                  </g>
                </g>
                <path
                  d="M206.9,236.05s-9.5,9.35-21,9.35-22.48-10.83-22.48-10.83,5.93-2.95,7.52-8.86a9.58,9.58,0,0,0,.24-1.09c.43-2.59-.26-7-1.26-11.35-1.57-6.85-3.9-13.71-3.9-13.71h37.15s-1.76,8.57-2.92,16.47c-.21,1.45-.41,2.87-.56,4.22s-.31,2.8-.38,4C198.85,232.62,206.9,236.05,206.9,236.05Z"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 185.16px 222.48px;"
                  id="elheciwvyw0r" class="animable"></path>
                <path
                  d="M241.87,369.84v4.29a3.17,3.17,0,0,1-.08.69A2.92,2.92,0,0,1,239,377H137.18a2.92,2.92,0,0,1-2.83-2.2,3.17,3.17,0,0,1-.08-.69v-4.29Z"
                  style="fill: rgb(117, 117, 117); transform-origin: 188.07px 373.41px;" id="elj7xotoh7kca"
                  class="animable"></path>
                <g style="clip-path: url(&quot;#freepik--clip-path-3--inject-166&quot;); transform-origin: 188.07px 372.33px;"
                  id="el3awse6a7gnm" class="animable">
                  <g id="elh8rfrj7ruxa">
                    <path d="M241.87,369.84v4.29a3.17,3.17,0,0,1-.08.69H134.35a3.17,3.17,0,0,1-.08-.69v-4.29Z"
                      style="opacity: 0.2; transform-origin: 188.07px 372.33px;" class="animable" id="elwu9dzjtwhih">
                    </path>
                  </g>
                </g>
                <path
                  d="M241.87,369.84v4.29a3.17,3.17,0,0,1-.08.69A2.92,2.92,0,0,1,239,377H137.18a2.92,2.92,0,0,1-2.83-2.2,3.17,3.17,0,0,1-.08-.69v-4.29Z"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 188.07px 373.41px;"
                  id="ell1ctfy36ho" class="animable"></path>
                <path
                  d="M240.86,372.7H135.27a2.12,2.12,0,0,1-2.14-1.65l-9.17-74a2,2,0,0,1,2-2.27H250.18a2,2,0,0,1,2,2.27l-9.17,74A2.1,2.1,0,0,1,240.86,372.7Z"
                  style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 188.07px 333.741px;"
                  id="elpso1j1xygjf" class="animable"></path>
                <g id="ell6ekyx98syn">
                  <path d="M135.7,371.14l-9-70.93a1.46,1.46,0,0,1,1.43-1.61H248a1.47,1.47,0,0,1,1.44,1.61l-9,70.93"
                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 188.069px 334.87px;"
                    class="animable" id="elby0yxmfcvtl"></path>
                </g>
                <path d="M135.7,371.14l-9-70.93a1.46,1.46,0,0,1,1.43-1.61H248a1.47,1.47,0,0,1,1.44,1.61l-9,70.93"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 188.069px 334.87px;"
                  id="el7lmwstts8wf" class="animable"></path>
                <polygon points="189.27 340.19 178.42 340.19 191.02 326.99 185.17 337.47 189.27 340.19"
                  style="fill: #90CAF9; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 184.72px 333.59px;"
                  id="ellndw3fiy13e" class="animable"></polygon>
                <polygon points="185.02 347.11 198.4 334.2 187.8 334.2 191.6 337 185.02 347.11"
                  style="fill: #90CAF9; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 191.71px 340.655px;"
                  id="ela2lae3jkxzl" class="animable"></polygon>
                <path
                  d="M275.86,414.81l3.2,3.64s3,6.82-5.29,15.17-29.78,10-38.14,8.55l-5.27.71L212.43,439s-9.08-4.44-5.37-12.23S275.86,414.81,275.86,414.81Z"
                  style="fill: #90CAF9; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 242.879px 428.845px;"
                  id="el01n8s1rrek0u" class="animable"></path>
                <path
                  d="M270.36,432.33c-6.93,7.23-29.13,8.67-38.4,6.56-2.53-.58-11.74-.91-18.6-3.37-3.7-1.31-6.72-3.24-7.64-6.16-2.66-8.33,20.78-24.18,20.78-24.18s14.95,2.88,18.05,3.62a59.14,59.14,0,0,0,11,1.52c7.11.31,11.92-.64,17.13,1.6C278.58,414.47,278.66,423.67,270.36,432.33Z"
                  style="fill: rgb(117, 117, 117); transform-origin: 241.194px 422.479px;" id="el3ye7tblwkf"
                  class="animable"></path>
                <g style="clip-path: url(&quot;#freepik--clip-path-4--inject-166&quot;); transform-origin: 230.51px 420.352px;"
                  id="elvkiyhn7poen" class="animable">
                  <g id="elm8mmktlhipp">
                    <path
                      d="M255.51,410.32c-5.34,8.72-18.67,25.46-42.15,25.2-3.7-1.31-6.72-3.24-7.64-6.16-2.66-8.33,20.78-24.18,20.78-24.18s14.95,2.88,18.05,3.62A59.14,59.14,0,0,0,255.51,410.32Z"
                      style="opacity: 0.2; transform-origin: 230.51px 420.352px;" class="animable" id="elcudv9eu2vfq">
                    </path>
                  </g>
                </g>
                <path
                  d="M270.36,432.33c-6.93,7.23-29.13,8.67-38.4,6.56-2.53-.58-11.74-.91-18.6-3.37-3.7-1.31-6.72-3.24-7.64-6.16-2.66-8.33,20.78-24.18,20.78-24.18s14.95,2.88,18.05,3.62a59.14,59.14,0,0,0,11,1.52c7.11.31,11.92-.64,17.13,1.6C278.58,414.47,278.66,423.67,270.36,432.33Z"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 241.194px 422.479px;"
                  id="elkp9ccouzm" class="animable"></path>
                <path d="M222.25,415.35s23,6.94,27.32,6.49,4.85,3.09,4.85,3.09"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 238.335px 420.14px;"
                  id="elxpea17cud8c" class="animable"></path>
                <path d="M225.94,407s25.24,5.4,28.29,6.3a8.78,8.78,0,0,0,5.59-.25"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 242.88px 410.32px;"
                  id="el8sic3omstok" class="animable"></path>
                <path d="M230.62,407.4a14.19,14.19,0,0,1-8,11.55"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 226.62px 413.175px;"
                  id="elhsgd3vrvwjl" class="animable"></path>
                <path d="M235.34,408.26a17.64,17.64,0,0,1-6.68,12.21"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 232px 414.365px;"
                  id="elfc6g65tj8n" class="animable"></path>
                <path d="M240.37,410s1.36,7.38-6.49,12.81"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 237.17px 416.405px;"
                  id="elljrhv44ai1k" class="animable"></path>
                <path d="M245.67,410.58s1.19,9.3-6.39,14.07"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 242.509px 417.615px;"
                  id="elc481keieq6u" class="animable"></path>
                <path d="M251.34,411.39s-.2,9.71-6.59,13.87"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 248.045px 418.325px;"
                  id="elcgp4e56uhvb" class="animable"></path>
                <path d="M255.79,412.63s1.68,8.25-5.19,13.28"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 253.286px 419.27px;"
                  id="elozz2o0z3uwa" class="animable"></path>
                <path
                  d="M228.27,401.35c-2.23,15.11-25.53,31.53-25.53,31.53s-6.45-6.05-8.58-5.8-11-.38-11-.38S113,400.44,104.58,400.3c-5.26-.08-20.42-4.69-27.92-16.65-4.46-7.1-6.21-16.8-1.6-29.67,7.6-21.23,45.07-5.59,81.81,14.7,12.2,6.75,23,12.16,31.77,16.28,14.55,6.85,23.4,10.15,23.4,10.15l4.86-1.74Z"
                  style="fill: #90CAF9; transform-origin: 150.308px 388.363px;" id="eluqsn2p5yp4o" class="animable">
                </path>
                <g style="clip-path: url(&quot;#freepik--clip-path-5--inject-166&quot;); transform-origin: 152.465px 408.265px;"
                  id="elq4jpl84sp1" class="animable">
                  <g id="elprpaexrpne8">
                    <path
                      d="M228.27,401.35c-2.23,15.11-25.53,31.53-25.53,31.53s-6.45-6.05-8.58-5.8-11-.38-11-.38S113,400.44,104.58,400.3c-5.26-.08-20.42-4.69-27.92-16.65,8.81.65,23.82,2.12,31,4.8,0,0-8,2-5.8,3.92s34.32,5.7,45.62,2.85c10.22-2.57,30.62-9.52,41.18-10.26,14.55,6.85,23.4,10.15,23.4,10.15l4.86-1.74Z"
                      style="opacity: 0.2; transform-origin: 152.465px 408.265px;" class="animable" id="elqek070znf5">
                    </path>
                  </g>
                </g>
                <path
                  d="M228.27,401.35c-2.23,15.11-25.53,31.53-25.53,31.53s-6.45-6.05-8.58-5.8-11-.38-11-.38S113,400.44,104.58,400.3c-5.26-.08-20.42-4.69-27.92-16.65-4.46-7.1-6.21-16.8-1.6-29.67,7.6-21.23,45.07-5.59,81.81,14.7,12.2,6.75,23,12.16,31.77,16.28,14.55,6.85,23.4,10.15,23.4,10.15l4.86-1.74Z"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 150.308px 388.363px;"
                  id="elv7847rc9ku" class="animable"></path>
                <path d="M166.14,386.75c2.49-.43,5-.94,7.41-1.58"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 169.845px 385.96px;"
                  id="el1xyzrdwz834" class="animable"></path>
                <path d="M99.7,388.08c20.33,1.63,41.26,2.09,61.51-.58"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 130.455px 388.451px;"
                  id="el21uf45cli3e" class="animable"></path>
                <path
                  d="M98.23,416.21,95,419.85s-3,6.82,5.28,15.17,29.78,10,38.14,8.55l5.28.71,17.92-3.85S170.74,436,167,428.2,98.23,416.21,98.23,416.21Z"
                  style="fill: #90CAF9; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 131.185px 430.245px;"
                  id="eldxr93vnwfai" class="animable"></path>
                <path
                  d="M147.6,406.58s-14.95,2.88-18.06,3.61c-13.89,3.28-20.59-.09-28.08,3.13-5.94,2.55-6,11.75,2.27,20.41,6.93,7.23,29.13,8.67,38.4,6.56,3.89-.88,23.6-1.23,26.25-9.54S147.6,406.58,147.6,406.58Z"
                  style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 132.911px 423.879px;"
                  id="el3112grc9orp" class="animable"></path>
                <path d="M151.84,416.75s-23,6.94-27.32,6.49-4.85,3.09-4.85,3.09"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 135.755px 421.54px;"
                  id="elw5omc0fckxn" class="animable"></path>
                <path d="M148.16,408.37s-25.25,5.41-28.3,6.3a8.75,8.75,0,0,1-5.59-.24"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 131.215px 411.693px;"
                  id="elh2y9zzfrbje" class="animable"></path>
                <path d="M143.48,408.8a14.19,14.19,0,0,0,8,11.55"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 147.48px 414.575px;"
                  id="eln0s7eqdavwq" class="animable"></path>
                <path d="M138.75,409.66a17.62,17.62,0,0,0,6.69,12.21"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 142.095px 415.765px;"
                  id="elinyovj4kl4s" class="animable"></path>
                <path d="M133.73,411.39s-1.37,7.38,6.48,12.81"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 136.924px 417.795px;"
                  id="elb65mboqqwug" class="animable"></path>
                <path d="M128.42,412s-1.19,9.3,6.39,14.07"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 131.581px 419.035px;"
                  id="eltgduey100t" class="animable"></path>
                <path d="M122.76,412.79s.19,9.71,6.59,13.87"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 126.055px 419.725px;"
                  id="el6nmglqaenhf" class="animable"></path>
                <path d="M118.31,414s-1.68,8.24,5.18,13.28"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 120.809px 420.64px;"
                  id="els31vj10li4d" class="animable"></path>
                <path
                  d="M297.57,353.84c-7.65-21.22-45.08-5.51-81.77,14.85-32.44,18-55.13,26.53-55.13,26.53l-4.86-1.72-11.36,8c2.26,15.1,25.6,31.47,25.6,31.47s6.43-6.07,8.57-5.82,11-.4,11-.4,70.16-26.39,78.53-26.54S310,388.39,297.57,353.84Z"
                  style="fill: #90CAF9; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 222.378px 388.352px;"
                  id="elpado766sygq" class="animable"></path>
                <path d="M195.78,408.35c2,.14,4.06.22,6.09.23"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 198.825px 408.465px;"
                  id="elh0wsbi4omui" class="animable"></path>
                <path d="M160.67,395.22C168,403,180,406.38,190.22,407.78"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 175.445px 401.5px;"
                  id="el15z9wy1c6j7" class="animable"></path>
                <path d="M243.24,381.46c14.35,2.73,30.31,5.23,44.75,1.86"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 265.615px 383.202px;"
                  id="elxvsx4epz15f" class="animable"></path>
                <path d="M232.23,379.06c2,.51,4.06,1,6.11,1.41"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 235.285px 379.765px;"
                  id="el4tj00rzhq54" class="animable"></path>
                <path
                  d="M200.3,216c-.21,1.45-.41,2.87-.56,4.22-3.74,3.83-10,9.1-16,9.28-4.39.13-9-1.75-12.74-3.82a9.58,9.58,0,0,0,.24-1.09c.43-2.59-.26-7-1.26-11.35Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 185.14px 221.373px;" id="elwz1hkr1350e"
                  class="animable"></path>
                <path
                  d="M210,191.78s2.73-2.57,4.07-1.72,2.93,3.23,2.2,5.41-3.9,6-4.15,8.2-1.88,4.72-3.68,3.25S210,191.78,210,191.78Z"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 212.182px 198.623px;"
                  id="ela5p1g42ouqn" class="animable"></path>
                <path
                  d="M161.38,191.78s-2.73-2.57-4.07-1.72-2.93,3.23-2.19,5.41,3.9,6,4.14,8.2,1.89,4.72,3.68,3.25S161.38,191.78,161.38,191.78Z"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 159.199px 198.623px;"
                  id="elhdkr6ycehag" class="animable"></path>
                <path
                  d="M185.1,156.7c35.5,0,25.9,42.92,19.36,58.1-2.29,5.33-13.61,12.8-19.36,12.8-5.35,0-16-7-18.2-12C160.29,200.3,151.27,156.7,185.1,156.7Z"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 185.699px 192.15px;"
                  id="el73d8oh2kaae" class="animable"></path>
                <path d="M191.12,191.48s9.24-2.86,12.1,2.86"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 197.17px 192.552px;"
                  id="elolm5ichbhlc" class="animable"></path>
                <path d="M198,199.25c0,1.09-.55,2-1.24,2s-1.23-.89-1.23-2,.55-2,1.23-2S198,198.16,198,199.25Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 196.765px 199.25px;" id="elrg95fmep51j"
                  class="animable"></path>
                <path d="M180.28,191.48s-9.25-2.86-12.11,2.86"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 174.225px 192.552px;"
                  id="elxev6kaqj2zd" class="animable"></path>
                <path d="M173.43,199.25c0,1.09.56,2,1.24,2s1.24-.89,1.24-2-.56-2-1.24-2S173.43,198.16,173.43,199.25Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 174.67px 199.25px;" id="el9o1wfwlz08w"
                  class="animable"></path>
                <path d="M181.53,207.36c-1.34,1.43,3.3,3.78,4.17,3.78s4.4-1.85,4.4-2.94"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 185.694px 209.25px;"
                  id="elk518msy4xpf" class="animable"></path>
                <path
                  d="M199.84,168.79a45,45,0,0,1-27.36,0s-4.79-.28-6.68,2.13,0,9.84.5,12.87-4.16,5.12-3.53,12.77l-.63,2.89s-5.16-13.14-3.9-23.73,6.93-14.12,6.93-14.12,3.05-9.14,20.91-9.08c19.25.08,21.19,10.5,21.19,10.5s12,9,2.32,37.41l-1-3.87a15.92,15.92,0,0,0-2.44-10.76c-1.68-2.45,1-9.83.38-13.61S199.84,168.79,199.84,168.79Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 185.703px 176.475px;" id="elg3rgstx7jm7"
                  class="animable"></path>
                <path d="M178,214.62a18,18,0,0,0,7.71,1.68,20,20,0,0,0,7.37-1.25"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 185.54px 215.462px;"
                  id="elnuhtyarez1" class="animable"></path>
                <path
                  d="M199.06,172.17a36,36,0,0,0,4.16,11.05c3,4.79,6.54,5.28,7.55,11.12,0,0,9.21-15.54,1.42-29.18,0,0-2.45-15.48-26.49-15.48s-35.17,16.75-25.83,42.47a13.93,13.93,0,0,0,8.3-11.32,13.73,13.73,0,0,1-2.47,9.93s12.38-1.83,15.59-12.15c0,0-1.25,6.86-5.38,9.77,0,0,4.67,5.9,10-3.32S194.45,170.32,199.06,172.17Z"
                  style="fill: rgb(38, 50, 56); transform-origin: 185.948px 172.01px;" id="elov5iyebu7am"
                  class="animable"></path>
                <g id="el1aj6txohjil">
                  <path d="M180.09,174.18c-1.5,2.15-3.61,5.47-6.66,5.15"
                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; opacity: 0.2; transform-origin: 176.76px 176.766px;"
                    class="animable" id="el6beayaysjb"></path>
                </g>
                <g id="elc7g4c8ve0sh">
                  <path d="M198,165.25c-4.05-8.24-12.83,1.86-15.7,5.84"
                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; opacity: 0.2; transform-origin: 190.15px 166.597px;"
                    class="animable" id="el17ya65jheyij"></path>
                </g>
                <g id="el96hy4fjlz5t">
                  <path d="M164.08,167.08a9.11,9.11,0,0,1-3.45,1.95"
                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; opacity: 0.2; transform-origin: 162.355px 168.055px;"
                    class="animable" id="el78bzyd904tg"></path>
                </g>
                <g id="el6nh035su42k">
                  <path d="M193.07,157.56c-8.17-8.55-19.75,1.39-26.22,7.08"
                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; opacity: 0.2; transform-origin: 179.96px 159.434px;"
                    class="animable" id="eljminh40pown"></path>
                </g>
                <g id="eljedl7wd8ds">
                  <path d="M209.57,167.29a17.73,17.73,0,0,1,2.62,7.27"
                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; opacity: 0.2; transform-origin: 210.88px 170.925px;"
                    class="animable" id="el4i5u5mtocz7"></path>
                </g>
                <g id="elgje7vceg7xe">
                  <path d="M203.22,163.7a6.66,6.66,0,0,1,3.68,1"
                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; opacity: 0.2; transform-origin: 205.06px 164.199px;"
                    class="animable" id="eltaags79x6u"></path>
                </g>
                <g id="elrltnjlbcg7m">
                  <path d="M200.74,159.4s1.77-4.69,5.33-1.26"
                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; opacity: 0.2; transform-origin: 203.405px 158.143px;"
                    class="animable" id="el6drgf8qoums"></path>
                </g>
              </g>
              <g id="freepik--Progress--inject-166" class="animable" style="transform-origin: 187.1px 282.28px;">
                <rect x="141.7" y="275.76" width="90.8" height="13.04" rx="4.8"
                  style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.35896px; transform-origin: 187.1px 282.28px;"
                  id="elh2ja8of2y2h" class="animable"></rect>
                <path d="M177.69,279.33a1.22,1.22,0,0,0,1.36-1h.83v7.88h-1.23v-6h-1Z"
                  style="fill: rgb(255, 255, 255); transform-origin: 178.765px 282.27px;" id="el1a8lq9g2v9h"
                  class="animable"></path>
                <path
                  d="M181.28,280.23a1.88,1.88,0,1,1,3.76,0v4.1a1.88,1.88,0,1,1-3.76,0Zm1.24,4.18c0,.56.24.77.64.77s.64-.21.64-.77v-4.26c0-.56-.25-.77-.64-.77s-.64.21-.64.77Z"
                  style="fill: rgb(255, 255, 255); transform-origin: 183.16px 282.28px;" id="elhrssmhkfqc7"
                  class="animable"></path>
                <path
                  d="M185.74,280.23a1.88,1.88,0,1,1,3.76,0v4.1a1.88,1.88,0,1,1-3.76,0Zm1.23,4.18c0,.56.25.77.65.77s.64-.21.64-.77v-4.26c0-.56-.25-.77-.64-.77s-.65.21-.65.77Z"
                  style="fill: rgb(255, 255, 255); transform-origin: 187.62px 282.28px;" id="eld7arzpi4hf5"
                  class="animable"></path>
                <path
                  d="M190.23,279.54a1.19,1.19,0,1,1,2.38,0v2.59a1.19,1.19,0,1,1-2.38,0Zm.79,2.65c0,.35.14.5.4.5s.41-.15.41-.5v-2.7c0-.35-.16-.5-.41-.5s-.4.15-.4.5Zm3.51-3.85h.73l-3.11,7.88h-.73Zm-.4,4.09a1.2,1.2,0,1,1,2.39,0V285a1.2,1.2,0,1,1-2.39,0Zm.79,2.64c0,.35.15.5.41.5s.4-.15.4-.5v-2.7c0-.35-.15-.5-.4-.5s-.41.15-.41.5Z"
                  style="fill: rgb(255, 255, 255); transform-origin: 193.378px 282.325px;" id="elfs8h2kbib3m"
                  class="animable"></path>
              </g>
              <g id="freepik--Bubble--inject-166" class="animable" style="transform-origin: 117.54px 151.13px;">
                <g id="elh6d45dmom1r">
                  <circle cx="117.54" cy="151.13" r="28.1"
                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 117.54px 151.13px; transform: rotate(-54.3955deg);"
                    class="animable" id="elnlu7az2jrzr"></circle>
                </g>
                <path d="M139.22,129a31,31,0,0,0-41.93-1.31"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 118.255px 124.58px;"
                  id="el3aabxchw2k8" class="animable"></path>
                <path d="M146.37,162.43A31,31,0,0,0,141,130.88"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 144.755px 146.655px;"
                  id="ela3xyf3l02rv" class="animable"></path>
                <path d="M139.75,180l5.64,3.36-4.78-11.56a30.11,30.11,0,0,0,2.2-2.75"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 142.57px 176.205px;"
                  id="el9veeikrj3av" class="animable"></path>
                <path d="M97.29,174.56a31,31,0,0,0,37.35,2.38l2.78,1.65"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 117.355px 178.323px;"
                  id="el6fp4wwywvna" class="animable"></path>
                <path d="M88.78,139.64a31,31,0,0,0,5.34,31.75"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 90.3478px 155.515px;"
                  id="ellcfu1pg6sgm" class="animable"></path>
                <path d="M91.92,133.74a29,29,0,0,0-1.86,3.11"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 90.99px 135.295px;"
                  id="elryfpu1f1r9" class="animable"></path>
                <path d="M112.49,161.24l-9.71-9.35a2.27,2.27,0,0,1,3.15-3.27"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 107.287px 154.612px;"
                  id="elvegw5emaudj" class="animable"></path>
                <path
                  d="M128.57,139.07a2.27,2.27,0,0,1,3.78,2.52l-14.27,21.33a2.26,2.26,0,0,1-1.64,1l-.2,0a2.29,2.29,0,0,1-1.62-.64"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 123.676px 150.989px;"
                  id="ely3y640vvlqs" class="animable"></path>
                <polyline points="108.14 150.76 115.81 158.14 126.7 141.86"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 117.42px 150px;"
                  id="el2e718pasy3j" class="animable"></polyline>
              </g>
              <g id="freepik--Folder--inject-166" class="animable animator-hidden"
                style="transform-origin: 354.741px 217.748px;">
                <path
                  d="M407,152.6s-14-1.55-22.57-16.92-54.6-10.32-54.6-10.32.27,5.38,7.39,6.77l-5,2.4s1.46,6.16,14.5,5.61L343.24,144s5.48,4.47,19.22,2.51l-2.59,3.33s6.42,4.47,17.32,1.33L376,154.22s8.26.6,13.13-1.53C389.15,152.69,398.57,158.5,407,152.6Z"
                  style="fill: rgb(255, 255, 255); transform-origin: 368.415px 139.906px;" id="elzfyi4nk535"
                  class="animable"></path>
                <g style="clip-path: url(&quot;#freepik--clip-path-6--inject-166&quot;); transform-origin: 368.435px 140.306px;"
                  id="eluvbkoxwrwng" class="animable">
                  <g id="elu19232kwoj">
                    <path
                      d="M407,152.61c-8.46,5.89-17.88.09-17.88.09-4.87,2.11-13.13,1.53-13.13,1.53l1.16-3.1c-10.89,3.15-17.31-1.33-17.31-1.33l2.59-3.33c-13.74,2-19.22-2.52-19.22-2.52l3.54-3.8c-13,.53-14.49-5.62-14.49-5.62l5-2.39c-7.12-1.4-7.39-6.78-7.39-6.78s2.61,4.65,10.13,4.5c0,0-1.26,3.14,6.44,3.72,0,0,6.51,2.77,11.23.7,0,0,1.58,3.22,7.24,2.67L363,139.48s.59,3.32,7.6,1.67l-1,3.26s2.3,2.67,11.32.68c0,0-2.82,1.84-1.89,2.78s3.77,1.39,6.23,1.15C385.22,149,394.85,156.61,407,152.61Z"
                      style="fill: #90CAF9; opacity: 0.4; transform-origin: 368.435px 140.306px;" class="animable"
                      id="el2zjnq77hqc7"></path>
                  </g>
                </g>
                <path
                  d="M407,152.6s-14-1.55-22.57-16.92-54.6-10.32-54.6-10.32.27,5.38,7.39,6.77l-5,2.4s1.46,6.16,14.5,5.61L343.24,144s5.48,4.47,19.22,2.51l-2.59,3.33s6.42,4.47,17.32,1.33L376,154.22s8.26.6,13.13-1.53C389.15,152.69,398.57,158.5,407,152.6Z"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 368.415px 139.906px;"
                  id="elbks0adnlopq" class="animable"></path>
                <path d="M347.4,128.28c-4.63,1.17-7.43.8-10.87,2.55,0,0,3,4.1,10.9,3.55"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 341.98px 131.355px;"
                  id="elx94i5m4ea7" class="animable"></path>
                <path d="M350.92,136a32.73,32.73,0,0,0-5.82,1.82s1.14,5.33,13.65,2.78"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 351.925px 138.645px;"
                  id="elnwp44dzo4e" class="animable"></path>
                <path d="M363.62,142.34,360,144.7a21.78,21.78,0,0,0,13.4,1"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 366.7px 144.33px;"
                  id="elyobjn6peb2" class="animable"></path>
                <path d="M377,145.79s-3.58,2.52-3.46,2.87,7.17,3,13.55-.47"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 380.314px 147.873px;"
                  id="ell94ndbpe0s" class="animable"></path>
                <path d="M355,129.79c-2.19,1-8.68,1.94-9.11,2.89,0,0,2.12,5.94,13,2.59"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 352.39px 133.042px;"
                  id="elvj7n9uc7c1" class="animable"></path>
                <path d="M362.29,136.72a18.84,18.84,0,0,0-4.61,2.66s4.22,5.86,14.47.8"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 364.915px 139.479px;"
                  id="elozmz6jv95" class="animable"></path>
                <path d="M373.45,140.17a7.27,7.27,0,0,0-3.89,4.24s5.07,3.28,13.76-.13"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 376.44px 143px;"
                  id="elgm5ikgtz2aa" class="animable"></path>
                <path d="M364,131.82s-6.18,1.32-6.35,2.46c0,0,5,4.27,12.91,2.12"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 364.105px 134.413px;"
                  id="elw88brq5o6e" class="animable"></path>
                <path d="M371.49,135.85a7,7,0,0,0-2.44,2.05s2.39,3.54,8.55,1.61"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 373.325px 137.968px;"
                  id="elwx2hjkq2cy9" class="animable"></path>
                <path
                  d="M414,131.11l-4.84,1.67-2.32-4.85a1.08,1.08,0,0,0-1.35-.56L389,133a1.32,1.32,0,0,0-.86,1.33l.43,5.49-27.49,9.47a2.74,2.74,0,0,0-1.72,3.26l11.1,41.85a2.31,2.31,0,0,0,3,1.62l52.89-18.22a2.76,2.76,0,0,0,1.73-3.26L417,132.74A2.32,2.32,0,0,0,414,131.11Z"
                  style="fill: #90CAF9; transform-origin: 393.718px 161.726px;" id="elher1txwchs" class="animable">
                </path>
                <g style="clip-path: url(&quot;#freepik--clip-path-7--inject-166&quot;); transform-origin: 393.718px 161.726px;"
                  id="elo0ybru3vmng" class="animable">
                  <g id="eli61oau3ht8j">
                    <path
                      d="M414,131.11l-4.84,1.67-2.32-4.85a1.08,1.08,0,0,0-1.35-.56L389,133a1.32,1.32,0,0,0-.86,1.33l.43,5.49-27.49,9.47a2.74,2.74,0,0,0-1.72,3.26l11.1,41.85a2.31,2.31,0,0,0,3,1.62l52.89-18.22a2.76,2.76,0,0,0,1.73-3.26L417,132.74A2.32,2.32,0,0,0,414,131.11Z"
                      style="opacity: 0.2; transform-origin: 393.718px 161.726px;" class="animable" id="el6tv8w6rihtt">
                    </path>
                  </g>
                </g>
                <path
                  d="M414,131.11l-4.84,1.67-2.32-4.85a1.08,1.08,0,0,0-1.35-.56L389,133a1.32,1.32,0,0,0-.86,1.33l.43,5.49-27.49,9.47a2.74,2.74,0,0,0-1.72,3.26l11.1,41.85a2.31,2.31,0,0,0,3,1.62l52.89-18.22a2.76,2.76,0,0,0,1.73-3.26L417,132.74A2.32,2.32,0,0,0,414,131.11Z"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 393.718px 161.726px;"
                  id="ely73kpa09p4" class="animable"></path>
                <path
                  d="M426.08,177.89l-52.89,18.22a2.92,2.92,0,0,1-3.48-1.47l-.26-.53L357,168.28l-6.17-12.76a2.2,2.2,0,0,1,1.27-3.11L405,134.2a2.9,2.9,0,0,1,3.48,1.46l18.91,39.13A2.19,2.19,0,0,1,426.08,177.89Z"
                  style="fill: #90CAF9; transform-origin: 389.107px 165.152px;" id="elkhjl2eqzkug" class="animable">
                </path>
                <g style="clip-path: url(&quot;#freepik--clip-path-8--inject-166&quot;); transform-origin: 372.65px 181.195px;"
                  id="el6k6uazlx45f" class="animable">
                  <g id="elmcaz1gz81kr">
                    <path
                      d="M388.3,168.63a15.61,15.61,0,0,1-13,14.12,29.86,29.86,0,0,1-5.83,11.36L357,168.28C367.53,170.1,379.65,171.12,388.3,168.63Z"
                      style="opacity: 0.2; transform-origin: 372.65px 181.195px;" class="animable" id="elgf4txvw2taj">
                    </path>
                  </g>
                </g>
                <path
                  d="M426.08,177.89l-52.89,18.22a2.92,2.92,0,0,1-3.48-1.47l-.26-.53L357,168.28l-6.17-12.76a2.2,2.2,0,0,1,1.27-3.11L405,134.2a2.9,2.9,0,0,1,3.48,1.46l18.91,39.13A2.19,2.19,0,0,1,426.08,177.89Z"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 389.107px 165.152px;"
                  id="el6nhzazv4idf" class="animable"></path>
                <path
                  d="M388.3,168.62s-13.72,3-26.81-8.78-55,7.74-55,7.74,2,5,9.16,4l-3.93,3.87s3.35,5.36,15.53.66l-2.13,4.75s6.62,2.48,19-3.79l-1.39,4s7.52,2.17,16.83-4.29l-.11,3.3s8-2.09,11.95-5.66C371.4,174.45,382.18,176.92,388.3,168.62Z"
                  style="fill: rgb(255, 255, 255); transform-origin: 347.395px 168.741px;" id="elo1p7ftfyabf"
                  class="animable"></path>
                <g style="clip-path: url(&quot;#freepik--clip-path-9--inject-166&quot;); transform-origin: 347.39px 174.291px;"
                  id="elgdp9dd9m3zl" class="animable">
                  <g id="eli5rub9fnyqb">
                    <path
                      d="M388.3,168.63c-6.12,8.29-16.9,5.82-16.9,5.82-3.93,3.57-11.95,5.66-11.95,5.66l.11-3.31c-9.31,6.48-16.83,4.3-16.83,4.3l1.39-4c-12.38,6.28-19,3.79-19,3.79l2.13-4.74c-12.18,4.69-15.53-.67-15.53-.67l3.94-3.87c-7.2,1-9.18-4-9.18-4s4,3.56,11,1c0,0-.19,3.38,7.29,1.46,0,0,7.06.54,10.86-2.94,0,0,2.54,2.54,7.72.21l-1,3s1.62,2.95,7.74-.86l.07,3.42s3,1.78,10.95-3c0,0-2.08,2.65-.91,3.24s4,.1,6.28-.91C366.5,172.23,378.05,176.33,388.3,168.63Z"
                      style="fill: #90CAF9; opacity: 0.4; transform-origin: 347.39px 174.291px;" class="animable"
                      id="elsz3e10vcbw"></path>
                  </g>
                </g>
                <path
                  d="M388.3,168.62s-13.72,3-26.81-8.78-55,7.74-55,7.74,2,5,9.16,4l-3.93,3.87s3.35,5.36,15.53.66l-2.13,4.75s6.62,2.48,19-3.79l-1.39,4s7.52,2.17,16.83-4.29l-.11,3.3s8-2.09,11.95-5.66C371.4,174.45,382.18,176.92,388.3,168.62Z"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 347.395px 168.741px;"
                  id="elpv9pbcicsib" class="animable"></path>
                <path d="M324,164.72c-4,2.6-6.78,3.13-9.47,5.9,0,0,4.19,2.91,11.46-.14"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 320.26px 168.296px;"
                  id="el7o9tu3vwuv" class="animable"></path>
                <path d="M329.82,170.86a32.5,32.5,0,0,0-4.92,3.59s2.78,4.69,13.81-1.75"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 331.805px 173.479px;"
                  id="el6hzt696j06o" class="animable"></path>
                <path d="M343.9,172.83l-2.71,3.41a21.78,21.78,0,0,0,13-3.4"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 347.69px 174.553px;"
                  id="elgnwse4ydztg" class="animable"></path>
                <path d="M357.63,171.82s-2.58,3.53-2.35,3.83,7.75.54,12.68-4.8"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 361.613px 173.315px;"
                  id="el5vx3ggebumb" class="animable"></path>
                <path d="M331.72,163.7c-1.77,1.6-7.6,4.62-7.7,5.66,0,0,3.92,4.95,13.17-1.72"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 330.605px 167.413px;"
                  id="elqdafdrn4ij" class="animable"></path>
                <path d="M340.83,167.93a18.94,18.94,0,0,0-3.51,4s5.88,4.2,14-3.88"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 344.32px 170.476px;"
                  id="el5puhfruuy24" class="animable"></path>
                <path d="M352.51,167.62a7.26,7.26,0,0,0-2.32,5.27s5.84,1.48,13-4.54"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 356.69px 170.335px;"
                  id="el743rvr6h8g9" class="animable"></path>
                <path d="M340.88,162.74s-5.43,3.24-5.22,4.37c0,0,6.07,2.45,12.9-2.13"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 342.107px 165.252px;"
                  id="eld2deetodbl" class="animable"></path>
                <path d="M349.27,164.16a6.84,6.84,0,0,0-1.65,2.72s3.4,2.59,8.61-1.21"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 351.925px 165.951px;"
                  id="elzq8v97asc9" class="animable"></path>
                <path d="M281.32,310.93c1.19-.4,2.45-.86,3.76-1.37"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 283.2px 310.245px;"
                  id="elhkmvbbhgnct" class="animable"></path>
                <path
                  d="M289.63,307.65c22.56-10.1,55.6-34.3,48.49-73.68-5.86-32.4-32.65-29.51-40.71-22.83-13.67,11.34-15.75,38,4,43.58,32.8,9.19,57.73-31.76,65.88-47.34"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; stroke-dasharray: 7.90288, 4.9393; transform-origin: 327.079px 257.259px;"
                  id="eljqpj2pcfwq9" class="animable"></path>
                <path d="M368.46,205.18c1.13-2.26,1.72-3.61,1.72-3.61"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 369.32px 203.375px;"
                  id="elfe41oo01qc4" class="animable"></path>
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
              <defs>
                <clipPath id="freepik--clip-path--inject-166">
                  <path
                    d="M392,419.82c-36.31,2.52-96.64,1.67-96.64,1.67-31.14-2.27-37-12.54-32.14-24.23,7.57-18,40.82-39.35,46.88-39.85,10-.81,20.52,3.16,20.52,3.16l6.5-1.37c-2-5.39,18.55-17.39,27.94-12.21s28.8-1.93,34.65,1.72a13.65,13.65,0,0,1,3.92,3.83,23.12,23.12,0,0,1,3.43,8.16h0l.08,0h0a21.13,21.13,0,0,1,4.5-.7c3.22-.17,7.51.32,10.87,3.25a32.4,32.4,0,0,1,2.45,2.42c6.06,6.62,13.86,19.13,15.66,26.43C442.72,400.4,428.3,417.29,392,419.82Z"
                    style="fill:#999;stroke:#90CAF9;stroke-linecap:round;stroke-linejoin:round"></path>
                </clipPath>
                <clipPath id="freepik--clip-path-2--inject-166">
                  <path d="M75,364s-.57,25.77,42.1,44.77S275.73,437,296.86,370.06l-65.71-18.87H143L123.6,360Z"
                    style="fill:#92E3A9;stroke:#90CAF9;stroke-linecap:round;stroke-linejoin:round"></path>
                </clipPath>
                <clipPath id="freepik--clip-path-3--inject-166">
                  <path
                    d="M241.87,369.84v4.29a3.17,3.17,0,0,1-.08.69A2.92,2.92,0,0,1,239,377H137.18a2.92,2.92,0,0,1-2.83-2.2,3.17,3.17,0,0,1-.08-.69v-4.29Z"
                    style="fill:#757575;stroke:#90CAF9;stroke-linecap:round;stroke-linejoin:round"></path>
                </clipPath>
                <clipPath id="freepik--clip-path-4--inject-166">
                  <path
                    d="M270.36,432.33c-6.93,7.23-29.13,8.67-38.4,6.56-2.53-.58-11.74-.91-18.6-3.37-3.7-1.31-6.72-3.24-7.64-6.16-2.66-8.33,20.78-24.18,20.78-24.18s14.95,2.88,18.05,3.62a59.14,59.14,0,0,0,11,1.52c7.11.31,11.92-.64,17.13,1.6C278.58,414.47,278.66,423.67,270.36,432.33Z"
                    style="fill:#757575;stroke:#90CAF9;stroke-linecap:round;stroke-linejoin:round"></path>
                </clipPath>
                <clipPath id="freepik--clip-path-5--inject-166">
                  <path
                    d="M228.27,401.35c-2.23,15.11-25.53,31.53-25.53,31.53s-6.45-6.05-8.58-5.8-11-.38-11-.38S113,400.44,104.58,400.3c-5.26-.08-20.42-4.69-27.92-16.65-4.46-7.1-6.21-16.8-1.6-29.67,7.6-21.23,45.07-5.59,81.81,14.7,12.2,6.75,23,12.16,31.77,16.28,14.55,6.85,23.4,10.15,23.4,10.15l4.86-1.74Z"
                    style="fill:#92E3A9;stroke:#90CAF9;stroke-linecap:round;stroke-linejoin:round"></path>
                </clipPath>
                <clipPath id="freepik--clip-path-6--inject-166">
                  <path
                    d="M407,152.6s-14-1.55-22.57-16.92-54.6-10.32-54.6-10.32.27,5.38,7.39,6.77l-5,2.4s1.46,6.16,14.5,5.61L343.24,144s5.48,4.47,19.22,2.51l-2.59,3.33s6.42,4.47,17.32,1.33L376,154.22s8.26.6,13.13-1.53C389.15,152.69,398.57,158.5,407,152.6Z"
                    style="fill:#fff;stroke:#90CAF9;stroke-linecap:round;stroke-linejoin:round"></path>
                </clipPath>
                <clipPath id="freepik--clip-path-7--inject-166">
                  <path
                    d="M414,131.11l-4.84,1.67-2.32-4.85a1.08,1.08,0,0,0-1.35-.56L389,133a1.32,1.32,0,0,0-.86,1.33l.43,5.49-27.49,9.47a2.74,2.74,0,0,0-1.72,3.26l11.1,41.85a2.31,2.31,0,0,0,3,1.62l52.89-18.22a2.76,2.76,0,0,0,1.73-3.26L417,132.74A2.32,2.32,0,0,0,414,131.11Z"
                    style="fill:#92E3A9;stroke:#90CAF9;stroke-linecap:round;stroke-linejoin:round"></path>
                </clipPath>
                <clipPath id="freepik--clip-path-8--inject-166">
                  <path
                    d="M426.08,177.89l-52.89,18.22a2.92,2.92,0,0,1-3.48-1.47l-.26-.53L357,168.28l-6.17-12.76a2.2,2.2,0,0,1,1.27-3.11L405,134.2a2.9,2.9,0,0,1,3.48,1.46l18.91,39.13A2.19,2.19,0,0,1,426.08,177.89Z"
                    style="fill:#92E3A9;stroke:#90CAF9;stroke-linecap:round;stroke-linejoin:round"></path>
                </clipPath>
                <clipPath id="freepik--clip-path-9--inject-166">
                  <path
                    d="M388.3,168.62s-13.72,3-26.81-8.78-55,7.74-55,7.74,2,5,9.16,4l-3.93,3.87s3.35,5.36,15.53.66l-2.13,4.75s6.62,2.48,19-3.79l-1.39,4s7.52,2.17,16.83-4.29l-.11,3.3s8-2.09,11.95-5.66C371.4,174.45,382.18,176.92,388.3,168.62Z"
                    style="fill:#fff;stroke:#90CAF9;stroke-linecap:round;stroke-linejoin:round"></path>
                </clipPath>
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

        <div class="card h-md-100">
          <div class="col-12">
            <!--begin: Statistics Widget 6-->
            <div class="card card-xl-stretch">
              <!--begin::Body-->
              <div class="d-flex justify-content-center">
                <div class="card-body">
                  <div class="py-1 d-flex align-items-center">
                    <div>
                      <span class="text-dark display-3 fw-bolder">10</span>
                    </div>
                    <div class="ms-2">
                      <span class="fw-bold text-dark fs-6 d-block">Kursus</span>
                      <span class="fw-bold text-dark fs-6 d-block">Selesai</span>
                    </div>
                  </div>
                </div>

                <div class="card-body">
                  <div class="py-1 d-flex align-items-center">
                    <div>
                      <span class="text-dark display-3 fw-bolder">3</span>
                    </div>
                    <div class="ms-2">
                      <span class="fw-bold text-dark fs-6 d-block">Kursus</span>
                      <span class="fw-bold text-dark fs-6 d-block">Proses</span>
                    </div>
                  </div>
                </div>
              </div>
              <!--end:: Body-->
            </div>

            @php
              $user = Auth::guard('guru')->user();
              $latestEnrollment = $user
                  ->enrollments()
                  ->latest()
                  ->first();
              $latestCourse = $latestEnrollment ? $latestEnrollment->course : null;
            @endphp

            @if ($latestCourse)
              <!-- Tampilkan informasi course terbaru -->
              <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                  <!--begin::Name-->
                  <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
                    <!--begin::Image-->
                    <div class="">'
                      <img src="{{ asset('assets/media/svg/files/pdf.svg') }}" alt="">
                    </div>
                    <!--end::Image-->
                    <!--begin::Title-->
                    <div class="fs-5 fw-bolder mb-2">Project Reqs..</div>
                    <!--end::Title-->
                  </a>
                  <!--end::Name-->
                  <!--begin::Description-->
                  <div class="fs-7 fw-bold text-gray-400">3 days ago</div>
                  <!--end::Description-->
                </div>
                <!--end::Card body-->
              </div>
            @else
              <!-- Tampilkan jika tidak ada course terbaru -->
              <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                  <!--begin::Name-->
                  <a href="{{ route('course.all') }}" class="text-gray-800 text-hover-primary d-flex flex-column">
                    <!--begin::Image-->
                    <div class="">
                      <i class="far fa-file-excel fs-3x text-danger mb-3"></i>
                      {{-- <i class="fa-regular fa-file-excel"></i> --}}
                    </div>
                    <!--end::Image-->
                    <!--begin::Title-->
                    <div class="fs-5 fw-bolder mb-1 mt-2">Ayo Ambil Kursus !</div>
                    <!--end::Title-->
                  </a>
                  <!--end::Name-->
                  <!--begin::Description-->
                  <div class="fs-7 fw-bold fw-bolder text-dark">Kamu belum punya kursus</div>
                  <!--end::Description-->
                </div>
                <!--end::Card body-->
              </div>
            @endif



            <!--end: Statistics Widget 6-->
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
              <span class="fw-bolder text-dark">Kursus</span>
              <span class="text-muted mt-1 fw-bold fs-7">Kursus Terbaru</span>
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

              <!--end::Menu-->
            </div>
          </div>
          <!--end::Header-->
          <!--begin::Body-->
          <div class="card-body pt-3">
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
          </div>
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
