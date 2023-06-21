<!doctype html>
<html lang="en">

<!-- Mirrored from transvelo.github.io/skola-html/5.1/lesson-single-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:28:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.png">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Lora:wght@400;700&amp;family=Montserrat:wght@400;500;600;700&amp;family=Nunito:wght@400;700&amp;display=swap"
    rel="stylesheet">

  @include('user.layouts.css')

  <title>Skola</title>

</head>

<body class="bg-white">




  <!-- NAVBAR
    ================================================== -->
  <header class="bg-white border-bottom py-3 header-fixed">
    <div class="px-5 px-lg-8 w-100">
      <div class="d-md-flex align-items-center">
        <!-- Brand -->
        <a class="navbar-brand mb-2 mb-md-0" href="index.html">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/MOOC_-_Massive_Open_Online_Course_logo.svg/1200px-MOOC_-_Massive_Open_Online_Course_logo.svg.png"
            class="navbar-brand-img" style="width: 50%" alt="...">
        </a>

        <!-- Lesson Title -->
        <div class="ms-md-6 ms-wd-12 ms-xl-10 me-auto mb-5 mb-md-0">
          <h3 class="mb-0 line-clamp-2 ms-wd-3">{{ $course->title }}</h3>
        </div>

        <!-- Back to Course -->
        <a href="{{ route('guru.mycourse') }}"
          class="btn btn-sm btn-primary ms-md-6 px-6 mb-3 mb-md-0 flex-shrink-0">Kembali ke Kursus</a>
      </div>
    </div>
  </header>


  <!-- COURSE
    ================================================== -->
  <div class="mt-15 mt-md-11 pt-md-3">
    <div class="container">
      <div class="row mb-11">
        <div class="col-lg-11 col-wd-12 ms-lg-auto pt-11 pt-lg-8">
          <h2 class="font-size-xl mb-6">Materi Kursus</h2>
          <div id="content-container"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- COURSE INFO TAB
                ================================================== -->
  <div class="container">
    <ul id="pills-tab" class="nav course-tab-v1 border-bottom h4 my-8 pt-1" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-overview-tab" data-bs-toggle="pill" href="#pills-curriculum" role="tab"
          aria-controls="pills-overview" aria-selected="true">Konten Kursus</a>
      </li>

    </ul>

    <div class="tab-content" id="pills-tabContent">


      <div class="tab-pane fade show active" id="pills-curriculum" role="tabpanel"
        aria-labelledby="pills-curriculum-tab">
        <div id="accordionCurriculum">
          @foreach ($course->curriculum as $curriculum)
            <div class="border rounded shadow mb-6 overflow-hidden">
              <div class="d-flex align-items-center" id="curriculumheading{{ $curriculum->id }}">
                <h5 class="mb-0 w-100">
                  <button
                    class="d-flex align-items-center p-5 min-height-80 text-dark fw-medium collapse-accordion-toggle line-height-one"
                    type="button" data-bs-toggle="collapse" data-bs-target="#Curriculumcollapse{{ $curriculum->id }}"
                    aria-expanded="true" aria-controls="Curriculumcollapse{{ $curriculum->id }}">
                    <span class="me-4 text-dark d-flex">
                      <!-- Icon -->
                      <svg width="15" height="2" viewBox="0 0 15 2" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="15" height="2" fill="currentColor"></rect>
                      </svg>
                      <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 7H15V9H0V7Z" fill="currentColor"></path>
                        <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"></path>
                      </svg>
                    </span>
                    {{ $curriculum->title }}
                  </button>
                </h5>
              </div>
              <div id="Curriculumcollapse{{ $curriculum->id }}" class="collapse show"
                aria-labelledby="curriculumheading{{ $curriculum->id }}" data-parent="#accordionCurriculum">
                @foreach ($curriculum->subcurriculum as $subcurriculum)
                  <div class="border-top px-5 py-4 min-height-70 d-md-flex align-items-center">
                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                      <div class="text-secondary d-flex">
                        <!-- Add your subcurriculum icon here if needed -->
                      </div>
                      <div class="ms-4">
                        {{ $subcurriculum->title }}
                      </div>
                    </div>
                    <div class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                      @if (strpos($subcurriculum->content, '.com') !== false)
                        <div
                          class="btn btn-xs text-dark-70 bg-orange-40 me-5 font-size-sm fw-normal py-2 subcurriculum-link"
                          data-content="{{ $subcurriculum->content }}">
                          Link YouTube
                        </div>
                      @else
                        <div class="btn btn-xs btn-blue-soft me-5 font-size-sm fw-normal py-2 subcurriculum-link"
                          data-content="{{ $subcurriculum->content }}">
                          Document
                        </div>
                      @endif
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <div class="tab-pane fade" id="pills-instructor" role="tabpanel" aria-labelledby="pills-instructor-tab">
        <h3 class="mb-6">About the instructor</h3>

        <div class="d-flex align-items-center mb-6">
          <div class="d-inline-block rounded-circle border me-6 p-2">
            <div class="avatar avatar-size-120">
              <img src="assets/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
          </div>
          <div class="media-body">
            <h4 class="mb-0">Lauren Handerson</h4>
            <span>iOS Developer & UI Designer</span>
          </div>
        </div>

        <div class="row mx-xl-n5 mb-6">
          <div class="col-12 col-md-auto mb-3 mb-md-0 px-xl-5">
            <div class="d-flex align-items-center">
              <div class="me-3 d-flex text-secondary icon-uxs">
                <!-- Icon -->
                <svg width="16px" height="16px" viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor"
                    d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0" />
                </svg>

              </div>
              4.87 Instructor rating
            </div>
          </div>

          <div class="col-12 col-md-auto mb-3 mb-md-0 px-xl-5">
            <div class="d-flex align-items-center">
              <div class="me-3 d-flex text-secondary icon-uxs">
                <!-- Icon -->
                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M9.96092 7.89061C10.3924 7.89061 10.7422 8.24034 10.7422 8.67186C10.7422 9.10338 10.3924 9.45311 9.96092 9.45311C9.5294 9.45311 9.17967 9.10338 9.17967 8.67186C9.17967 8.24034 9.5294 7.89061 9.96092 7.89061ZM12.6953 8.67186C12.6953 9.10338 13.045 9.45311 13.4765 9.45311C13.9081 9.45311 14.2578 9.10338 14.2578 8.67186C14.2578 8.24034 13.9081 7.89061 13.4765 7.89061C13.045 7.89061 12.6953 8.24034 12.6953 8.67186ZM5.66405 8.67186C5.66405 9.10338 6.01378 9.45311 6.4453 9.45311C6.87682 9.45311 7.22655 9.10338 7.22655 8.67186C7.22655 8.24034 6.87682 7.89061 6.4453 7.89061C6.01378 7.89061 5.66405 8.24034 5.66405 8.67186ZM19.313 15.9985C20.2273 16.9128 20.2273 18.3996 19.3135 19.3135C18.8566 19.7703 18.2563 19.9989 17.6562 19.9989C17.0561 19.9989 16.4558 19.7703 15.999 19.3135L11.7103 15.0345C11.6192 14.9435 11.5521 14.8317 11.5147 14.7084L10.5806 11.6333C10.4977 11.3606 10.5699 11.0646 10.7689 10.8606C10.9678 10.6567 11.262 10.5774 11.5367 10.6534L14.6899 11.5268C14.8198 11.5628 14.938 11.6316 15.0334 11.7268L19.313 15.9985ZM12.9527 14.0667L15.8468 16.9545L16.9519 15.8494L14.0748 12.9779L12.4885 12.5384L12.9527 14.0667ZM18.2086 17.1038L18.0578 16.9532L16.9529 18.0581L17.1032 18.208C17.4084 18.5133 17.904 18.5133 18.2086 18.2086C18.5133 17.904 18.5133 17.4084 18.2086 17.1038ZM10.4346 16.1895C10.2902 16.1958 10.144 16.199 9.99998 16.199C8.74373 16.199 7.53432 15.9651 6.40547 15.5038C6.21321 15.4254 5.99746 15.4266 5.80611 15.5073L2.24884 17.0089L3.44741 14.1697C3.5646 13.8922 3.51165 13.5718 3.31115 13.3465C2.1672 12.0614 1.5625 10.5238 1.5625 8.90028C1.5625 4.85427 5.34759 1.5625 9.99998 1.5625C14.6524 1.5625 18.4375 4.85427 18.4375 8.90028C18.4375 9.85975 18.2019 10.823 17.7371 11.7631C17.5459 12.1499 17.7044 12.6185 18.0912 12.8097C18.4781 13.0009 18.9466 12.8424 19.1378 12.4556C19.7099 11.2982 20 10.1021 20 8.90028C20 3.99261 15.514 0 9.99998 0C4.48608 0 0 3.99261 0 8.90028C0 10.7527 0.628051 12.507 1.82174 14.0031L0.0614928 18.1727C-0.0621032 18.4655 0.00411988 18.8041 0.228881 19.0289C0.378417 19.1784 0.578154 19.2578 0.781401 19.2578C0.883787 19.2578 0.987089 19.2376 1.08505 19.1963L6.12136 17.0703C7.34969 17.5291 8.65294 17.7615 9.99998 17.7615C10.1666 17.7615 10.3358 17.7577 10.5029 17.7505C10.934 17.7316 11.2681 17.3669 11.2492 16.9359C11.2304 16.5048 10.865 16.1696 10.4346 16.1895Z"
                    fill="currentColor" />
                </svg>

              </div>
              1,533 reviews
            </div>
          </div>

          <div class="col-12 col-md-auto mb-3 mb-md-0 px-xl-5">
            <div class="d-flex align-items-center">
              <div class="me-3 d-flex text-secondary icon-uxs">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                    fill="currentColor" />
                </svg>

              </div>
              23,912 students
            </div>
          </div>

          <div class="col-12 col-md-auto mb-3 mb-md-0 px-xl-5">
            <div class="d-flex align-items-center">
              <div class="me-3 d-flex text-secondary icon-uxs">
                <!-- Icon -->
                <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                    fill="currentColor" />
                </svg>

              </div>
              29 courses
            </div>
          </div>
        </div>

        <p class="mb-6 line-height-md">I am a UI/UX designer and an iOS developer with having almost six years of
          experience in application development and also ten years of graphic design and User Interface design.</p>
        <p class="mb-6 line-height-md">My passion is helping people to learn new skills in a short-term course and
          achieve their goals. I've been designing for more than ten years and developing iOS apps for four years. It's
          my
          honor if I could help you learn to program in a simple word. I currently am teaching iOS 13, Swift 5, ARKit 3,
          Sketch 5, Illustrator, Photoshop, Cinema 4D, HTML, CSS, JavaScript, etc.</p>
      </div>

      <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
        <h3 class="mb-6">Student feedback</h3>
        <div class="row align-items-center mb-8">
          <div class="col-md-auto mb-5 mb-md-0">
            <div class="border rounded shadow d-flex align-items-center justify-content-center px-9 py-8">
              <div class="m-2 text-center">
                <h1 class="display-2 mb-0 fw-medium mb-n1">4.93</h1>
                <h5 class="mb-0">Course rating</h5>
                <div class="star-rating">
                  <div class="rating" style="width:100%;"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md">
            <div class="d-md-flex align-items-center my-3 my-md-4">
              <div class="bg-gray-200 position-relative rounded-pill flex-grow-1 me-md-5 mb-2 mb-md-0 mw-md-260p"
                style="height: 10px;">
                <div class="bg-teal rounded-pill position-absolute top-0 left-0 bottom-0" style="width: 90%;"></div>
              </div>

              <div class="d-flex align-items-center">
                <div class="star-rating star-rating-lg secondary me-4">
                  <div class="rating" style="width:90%;"></div>
                </div>
                <span>4132</span>
              </div>
            </div>

            <div class="d-md-flex align-items-center my-3 my-md-4">
              <div class="bg-gray-200 position-relative rounded-pill flex-grow-1 me-md-5 mb-2 mb-md-0 mw-md-260p"
                style="height: 10px;">
                <div class="bg-teal rounded-pill position-absolute top-0 left-0 bottom-0" style="width: 60%;"></div>
              </div>

              <div class="d-flex align-items-center">
                <div class="star-rating star-rating-lg secondary me-4">
                  <div class="rating" style="width:60%;"></div>
                </div>
                <span>150</span>
              </div>
            </div>

            <div class="d-md-flex align-items-center my-3 my-md-4">
              <div class="bg-gray-200 position-relative rounded-pill flex-grow-1 me-md-5 mb-2 mb-md-0 mw-md-260p"
                style="height: 10px;">
                <div class="bg-teal rounded-pill position-absolute top-0 left-0 bottom-0" style="width: 50%;"></div>
              </div>

              <div class="d-flex align-items-center">
                <div class="star-rating star-rating-lg secondary me-4">
                  <div class="rating" style="width:50%;"></div>
                </div>
                <span>50</span>
              </div>
            </div>

            <div class="d-md-flex align-items-center my-3 my-md-4">
              <div class="bg-gray-200 position-relative rounded-pill flex-grow-1 me-md-5 mb-2 mb-md-0 mw-md-260p"
                style="height: 10px;">
                <div class="bg-teal rounded-pill position-absolute top-0 left-0 bottom-0" style="width: 35%;"></div>
              </div>

              <div class="d-flex align-items-center">
                <div class="star-rating star-rating-lg secondary me-4">
                  <div class="rating" style="width:35%;"></div>
                </div>
                <span>32</span>
              </div>
            </div>

            <div class="d-md-flex align-items-center my-3 my-md-4">
              <div class="bg-gray-200 position-relative rounded-pill flex-grow-1 me-md-5 mb-2 mb-md-0 mw-md-260p"
                style="height: 10px;">
                <div class="bg-teal rounded-pill position-absolute top-0 left-0 bottom-0" style="width: 15%;"></div>
              </div>

              <div class="d-flex align-items-center">
                <div class="star-rating star-rating-lg secondary me-4">
                  <div class="rating" style="width:15%;"></div>
                </div>
                <span>1</span>
              </div>
            </div>
          </div>
        </div>

        <ul class="list-unstyled pt-2">
          <li class="media d-flex">
            <div class="avatar avatar-xxl me-3 me-md-6 flex-shrink-0">
              <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="media-body flex-grow-1">
              <div class="d-md-flex align-items-center mb-5">
                <div class="me-auto mb-4 mb-md-0">
                  <h5 class="mb-0">Oscar Cafeo</h5>
                  <p class="font-size-sm font-italic">Beautiful courses</p>
                </div>
                <div class="star-rating">
                  <div class="rating" style="width:100%;"></div>
                </div>
              </div>
              <p class="mb-6 line-height-md">This course was well organized and covered a lot more details than any
                other Figma courses. I really enjoy it. One suggestion is that it can be much better if we could
                complete
                the prototype together. Since we created 24 frames, I really want to test it on Figma mirror to see all
                the connections. Could you please let me take a look at the complete prototype?</p>
            </div>
          </li>
          <li class="media d-flex">
            <div class="avatar avatar-xxl me-3 me-md-6 flex-shrink-0">
              <img src="assets/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="media-body flex-grow-1">
              <div class="d-md-flex align-items-center mb-5">
                <div class="me-auto mb-4 mb-md-0">
                  <h5 class="mb-0">Alex Morgan</h5>
                  <p class="font-size-sm font-italic">Beautiful courses</p>
                </div>
                <div class="star-rating">
                  <div class="rating" style="width:100%;"></div>
                </div>
              </div>
              <p class="mb-6 line-height-md">This course was well organized and covered a lot more details than any
                other Figma courses. I really enjoy it. One suggestion is that it can be much better if we could
                complete
                the prototype together. Since we created 24 frames, I really want to test it on Figma mirror to see all
                the connections. Could you please let me take a look at the complete prototype?</p>
            </div>
          </li>
        </ul>

        <div class="border shadow rounded p-6 p-md-9">
          <h3 class="mb-2">Add Reviews & Rate</h3>
          <div class="">What is it like to Course?</div>
          <form>
            <div class="clearfix">
              <fieldset class="slect-rating mb-3">
                <input type="radio" id="star5" name="rating" value="5" />
                <label class="full" for="star5" title="Awesome - 5 stars"></label>

                <input type="radio" id="star4half" name="rating" value="4 and a half" />
                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

                <input type="radio" id="star4" name="rating" value="4" />
                <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                <input type="radio" id="star3half" name="rating" value="3 and a half" />
                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

                <input type="radio" id="star3" name="rating" value="3" />
                <label class="full" for="star3" title="Meh - 3 stars"></label>

                <input type="radio" id="star2half" name="rating" value="2 and a half" />
                <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                <input type="radio" id="star2" name="rating" value="2" />
                <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                <input type="radio" id="star1half" name="rating" value="1 and a half" />
                <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                <input type="radio" id="star1" name="rating" value="1" />
                <label class="full" for="star1" title="Sucks big time - 1 star"></label>

                <input type="radio" id="starhalf" name="rating" value="half" />
                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
              </fieldset>
            </div>

            <div class="form-group mb-6">
              <label for="exampleInputTitle1">Review Title</label>
              <input type="text" class="form-control placeholder-1" id="exampleInputTitle1"
                placeholder="Courses">
            </div>

            <div class="form-group mb-6">
              <label for="exampleFormControlTextarea1">Review Content</label>
              <textarea class="form-control placeholder-1" id="exampleFormControlTextarea1" rows="6" placeholder="Content"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block mw-md-300p">SUBMIT REVIEW</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>



  <!-- JAVASCRIPT
    ================================================== -->
  <!-- Libs JS -->
  @include('user.layouts.js')

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.subcurriculum-link').on('click', function(event) {
        event.preventDefault();
        var content = $(this).data('content');
        var contentContainer = $('#content-container');

        // Cek apakah konten adalah link YouTube
        if (content.includes('.com')) {
          // Tampilkan video YouTube
          var videoUrl = content;
          var videoEmbedUrl = videoUrl.replace('/watch?v=', '/embed/');
          var videoHtml = `<div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="${videoEmbedUrl}" style="width: 100%; height: 500px;" allowfullscreen></iframe>
                      </div>`;
          contentContainer.html(videoHtml);
        } else {
          // Mendapatkan URL dokumen
          var documentUrl = "{{ asset('doc/subcurriculum/') }}/" + content;

          // Membuat elemen iframe untuk menampilkan dokumen
          var documentHtml = `<iframe src="${documentUrl}" style="width: 100%; height: 500px;"></iframe>`;

          // Menampilkan dokumen di dalam content-container
          contentContainer.html(documentHtml);
        }
      });
    });
  </script>




</body>

<!-- Mirrored from transvelo.github.io/skola-html/5.1/lesson-single-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:28:57 GMT -->

</html>
