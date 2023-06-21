@extends('user.layouts.index')

@section('content')
  <!-- HERO ================================================== -->
  <section class="pb-11 pt-13 pt-xl-14 mt-n12 position-relative">
    <div class="position-absolute top-0 right-0">
      <img src="{{ asset('frontend/assets/img/illustrations/illustration-7.svg') }}" class="img-fluid" alt="...">
    </div>
    <div class="container container-wd">
      <div class="row align-items-center">
        <div class="col-12 col-md-5 col-lg-6 order-md-2" data-aos="fade-in">

          <!-- Image -->
          <img src="{{ asset('frontend/assets/img/illustrations/illustration-5.svg') }}" class="img-fluid mb-6 mb-md-0"
            alt="...">

        </div>
        <div class="col-12 col-md-7 col-lg-6 order-md-1">
          <!-- Heading -->
          <h1 class="display-4" data-aos="fade-left" data-aos-duration="150"><span class="fw-bold">Massive Online Open
              Courses <br> </span> Kabupaten
            Takalar </h1>

          <!-- Text -->
          <p class="text-capitalize me-xl-11 me-wd-14 pe-wd-4 text-dark" data-aos="fade-up" data-aos-duration="200">
            MOOC Kabupaten Takalar adalah sebuah inisiatif untuk memberikan akses kursus secara online kepada
            guru-guru Kabupaten Takalar. Teknologi membawa gelombang evolusi dalam pembelajaran yang dapat diakses secara
            fleksibel dan beragam cara.</p>

          <!-- Buttons -->
          <a href="course-list-v4.html"
            class="rounded rounded-0 btn btn-pill btn-helio btn-gradient-1 text-white btn-x-wide shadow lift mb-5 mt-1"
            data-aos="fade-up" data-aos-duration="200">Semua Kursus
          </a>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- FEATURED PRODUCT ================================================== -->
  <section class="pt-5 pb-9 py-md-11 bg-white">
    <div class="container container-wd">
      <div class="row align-items-end mb-7">
        <div class="col-xl mb-5 mb-xl-0">
          <h1 class="mb-1">Kursus Unggulan</h1>
          <p class="font-size-lg text-capitalize mb-0">Temukan Kursus Yang Anda Minati</p>
        </div>
        <div class="col-xl-auto">
          <!-- Nav -->
          <div class="nav justify-content-lg-start justify-content-xl-center justify-content-center tab-nav-1"
            id="pills-tab" role="tablist">

            <a class="btn-sm btn-pill me-1 mb-1 text-dark fw-medium px-6 active" id="pills-all-tab" data-bs-toggle="tab"
              href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">
              All Categories
            </a>

            @foreach ($categories as $category)
              <a class="btn-sm btn-pill me-1 mb-1 text-dark fw-medium px-6" id="pills-{{ $category->id }}-tab"
                data-bs-toggle="tab" href="#pills-{{ $category->id }}" role="tab"
                aria-controls="pills-{{ $category->id }}" aria-selected="false">
                {{ Str::ucfirst($category->name) }}
              </a>
            @endforeach
          </div>
        </div>

      </div>

      <div class="tab-content flickity-tab" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
          <!-- Items -->
          <div class="mx-n4 flickity-button-outset"
            data-flickity='{"pageDots": true, "prevNextButtons": true, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
            @foreach ($all_courses as $course)
              <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                <!-- Card -->
                <div class="card border shadow p-2 sk-fade">
                  <!-- Image -->
                  <div class="card-zoom position-relative">
                    <a href="{{ route('course.detail', ['id' => $course->id]) }}" class="card-img sk-thumbnail d-block">
                      <img class="rounded shadow-light-lg" src="{{ asset('storage/images/course/' . $course->image) }}"
                        alt="...">
                    </a>
                  </div>
                  <!-- Footer -->
                  <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                    <a href="#" class="">
                      <div
                        class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                        <img src="{{ asset('storage/images/' . $course->instructor->image) }}" alt="..."
                          class="avatar-img rounded-circle">
                      </div>
                    </a>

                    <!-- Preheading -->
                    <a href="{{ route('course.detail', ['id' => $course->id]) }}"><span
                        class="mb-1 d-inline-block text-gray-800">{{ Str::ucfirst($course->category->name) }}</span></a>

                    <!-- Heading -->
                    <div class="position-relative">
                      <a href="{{ route('course.detail', ['id' => $course->id]) }}" class="d-block stretched-link">
                        <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">
                          {{ Str::ucfirst($course->title) }}</h4>
                      </a>

                      <div class="row mx-n2 align-items-end mh-40">
                        <div class="col px-2">

                          <ul class="nav mx-n3">
                            <li class="nav-item px-3">
                              <div class="d-flex align-items-center">
                                <div class="me-2 d-flex icon-uxs text-secondary">
                                  <!-- Icon -->
                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                      fill="currentColor"></path>
                                  </svg>

                                </div>
                                <div class="font-size-sm">5 lessons</div>
                              </div>
                            </li>
                            <li class="nav-item px-3">
                              <div class="d-flex align-items-center">
                                <div class="me-2 d-flex icon-uxs text-secondary">
                                  <!-- Icon -->
                                  <svg width="16" height="16" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                      fill="currentColor"></path>
                                    <path
                                      d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                      fill="currentColor"></path>
                                  </svg>

                                </div>
                                <div class="font-size-sm">8h 12m</div>
                              </div>
                            </li>
                          </ul>

                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        @foreach ($categories as $category)
          <div class="tab-pane fade" id="pills-{{ $category->id }}" role="tabpanel"
            aria-labelledby="pills-{{ $category->id }}-tab">
            <!-- Items -->
            <div class="mx-n4 flickity-button-outset"
              data-flickity='{"pageDots": true, "prevNextButtons": true, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
              @foreach ($category->courses as $course)
                <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7"
                  style="padding-right:15px;padding-left:15px;">
                  {{-- ITEM --}}
                  <!-- Card -->
                  <div class="card border shadow p-2 sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                      <a href="course-single-v1.html" class="card-img sk-thumbnail d-block">
                        <img class="rounded shadow-light-lg"
                          src="{{ asset('storage/images/course/' . $course->image) }}" alt="...">
                      </a>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                      <a href="instructors-single.html" class="">
                        <div
                          class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                          <img src="{{ asset('storage/images/' . $course->instructor->image) }}" alt="..."
                            class="avatar-img rounded-circle">
                        </div>
                      </a>

                      <!-- Preheading -->
                      <a href="course-single-v1.html"><span
                          class="mb-1 d-inline-block text-gray-800">{{ Str::ucfirst($category->name) }}</span></a>

                      <!-- Heading -->
                      <div class="position-relative">
                        <a href="course-single-v1.html" class="d-block stretched-link">
                          <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">
                            {{ Str::ucfirst($course->title) }}
                          </h4>
                        </a>

                        <div class="row mx-n2 align-items-end mh-40">
                          <div class="col px-2">

                            <ul class="nav mx-n3">
                              <li class="nav-item px-3">
                                <div class="d-flex align-items-center">
                                  <div class="me-2 d-flex icon-uxs text-secondary">
                                    <!-- Icon -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                        d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                        fill="currentColor"></path>
                                    </svg>

                                  </div>
                                  <div class="font-size-sm">5 lessons</div>
                                </div>
                              </li>
                              <li class="nav-item px-3">
                                <div class="d-flex align-items-center">
                                  <div class="me-2 d-flex icon-uxs text-secondary">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                        d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                        fill="currentColor"></path>
                                      <path
                                        d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                        fill="currentColor"></path>
                                    </svg>

                                  </div>
                                  <div class="font-size-sm">8h 12m</div>
                                </div>
                              </li>
                            </ul>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- CATEGORIES                                         ================================================== -->
  <section class="py-5 py-md-8 bg-white">
    <div class="container container-wd">
      <div class="row align-items-end mb-md-7 mb-4">
        <div class="col-md mb-4 mb-md-0">
          <h1 class="mb-1">Trending Kategori</h1>
          <p class="font-size-lg mb-0 text-capitalize">Pilih Kategori Kursus Yang Anda Minati.</p>
        </div>
        <div class="col-md-auto">
          <a href="course-list-v6.html" class="d-flex align-items-center fw-medium">
            Lihat Semua
            <div class="ms-2 d-flex">
              <!-- Icon -->
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z"
                  fill="currentColor" />
              </svg>

            </div>
          </a>
        </div>
      </div>

      <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 row-cols-wd-6">

        @foreach ($categories as $category)
          <div class="col mb-md-6 mb-4 px-2 px-md-4">
            <!-- Card -->
            <a href="course-list-v6.html"
              class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
              <!-- Image -->
              <div class="mt-7 text-gigas display-4">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M35.416 40H6.24935C3.72102 40 1.66602 37.945 1.66602 35.4167V4.58333C1.66602 2.055 3.72102 0 6.24935 0H32.0827C32.7727 0 33.3327 0.56 33.3327 1.25V6.66667H35.416C36.106 6.66667 36.666 7.22667 36.666 7.91667V38.75C36.666 39.44 36.106 40 35.416 40ZM4.16602 8.665V35.4167C4.16602 36.565 5.10102 37.5 6.24935 37.5H34.166V9.16667H6.24935C5.49935 9.16667 4.79102 8.98667 4.16602 8.665ZM6.24935 2.5C5.10102 2.5 4.16602 3.435 4.16602 4.58333C4.16602 5.73167 5.10102 6.66667 6.24935 6.66667H30.8327V2.5H6.24935Z"
                    fill="currentColor"></path>
                  <path
                    d="M20.4173 31.6665C20.189 31.6665 19.964 31.6048 19.7606 31.4815L15.0006 28.5515L10.2407 31.4815C9.85398 31.7198 9.37232 31.7282 8.97398 31.5082C8.57732 31.2865 8.33398 30.8682 8.33398 30.4165V7.9165H10.834V28.1798L14.344 26.0198C14.7473 25.7732 15.2523 25.7732 15.6556 26.0198L19.1656 28.1798V7.9165H21.6673V30.4165C21.6673 30.8682 21.424 31.2865 21.0273 31.5082C20.8373 31.6132 20.6273 31.6665 20.4173 31.6665Z"
                    fill="currentColor"></path>
                </svg>

                <!-- Footer -->
                <div class="card-footer px-0 pb-0 pt-4">
                  <h5 class="mb-0 line-clamp-2 text-gigas">{{ $category->name }}</h5>
                </div>
              </div>
            </a>
          </div>
        @endforeach

      </div>
    </div>
  </section>

  <!-- BLOG ================================================== -->
  <section class="py-5 py-md-8 bg-white">
    <div class="container container-wd">
      <div class="row align-items-end mb-4 mb-md-7">
        <div class="col-md mb-4 mb-md-0">
          <h1 class="mb-1">Kursus Terbaru</h1>
          <p class="font-size-lg mb-0 text-capitalize">Ikuti Kursus Terbaru Yang Kamu Minati</p>
        </div>
        <div class="col-md-auto">
          <a href="blog-grid-v2.html" class="d-flex align-items-center fw-medium">
            Lihat Semua
            <div class="ms-2 d-flex">
              <!-- Icon -->
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z"
                  fill="currentColor" />
              </svg>

            </div>
          </a>
        </div>
      </div>

      {{-- Latest Course --}}
      <div class="row row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
        @foreach ($latest_courses as $course)
          <div class="col-md mb-5 mb-lg-0">
            <!-- Card -->
            <div class="card border shadow p-2 rounded-lg lift sk-fade">
              <!-- Image -->
              <div class="card-zoom position-relative">
                <a href="blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img
                    class="rounded shadow-light-lg img-fluid"
                    src="{{ asset('storage/images/course/' . $course->image) }}" alt="..."></a>

                <a href="#"
                  class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                  <span class="text-white fw-normal font-size-sm">{{ $course->category->name }}</span>
                </a>
              </div>

              <!-- Footer -->
              <div class="card-footer px-2 pb-0 pt-4">
                <ul class="nav mx-n3 mb-3">
                  <li class="nav-item px-3">
                    <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                      <div class="me-3 d-flex">
                        <!-- Icon -->
                        <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z"
                            fill="currentColor" />
                        </svg>

                      </div>
                      <div class="font-size-sm">{{ $course->instructor->name }}</div>
                    </a>
                  </li>
                  <li class="nav-item px-3">
                    <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                      <div class="me-2 d-flex">
                        <!-- Icon -->
                        <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z"
                            fill="currentColor" />
                        </svg>
                      </div>
                      <div class="font-size-sm">{{ $course->created_at->format('d M, Y') }}</div>
                    </a>
                  </li>
                </ul>

                <!-- Heading -->
                <a href="blog-single.html" class="d-block">
                  <h5 class="line-clamp-2 h-48 h-lg-52">{{ $course->title }}</h5>
                </a>
              </div>
            </div>

          </div>
        @endforeach

      </div>
    </div>
  </section>

  <!-- INSTRUCTORS
                                                                                                                                                                                            ================================================== -->
  <section class="py-5 py-md-8 bg-white">
    <div class="container container-wd">
      <div class="row align-items-end mb-3 mb-md-5">
        <div class="col-md mb-4 mb-md-0">
          <h1 class="mb-1">Instruktur Peringkat Teratas</h1>
          <p class="font-size-lg mb-0 text-capitalize">Instruktur Keren Dan Berpengalaman.</p>
        </div>
        <div class="col-md-auto">
          <a href="instructors-list-v2.html" class="d-flex align-items-center fw-medium">
            Lihat Semua
            <div class="ms-2 d-flex">
              <!-- Icon -->
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z"
                  fill="currentColor" />
              </svg>

            </div>
          </a>
        </div>
      </div>

      <div class="mx-n3 mx-md-n4 flickity-button-outset"
        data-flickity='{"pageDots": false,"cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>

        @foreach ($instructors as $instructor)
          <div class="col-6 col-md-4 col-lg-4 mw-xl-20 text-center py-5 text-md-left px-3 px-md-4">
            <div class="card border shadow p-2 lift">
              <!-- Image -->
              <div class="card-zoom position-relative" style="max-width: 250px;">

                <a href="instructors-single.html"
                  class="card-img sk-thumbnail img-ratio-4 card-hover-overlay card-hover-overlay-gradient-1 d-block">
                  <img class="rounded shadow-light-lg img-fluid"
                    src="{{ asset('storage/images/' . $instructor->image) }}" alt="..."></a>
              </div>

              <!-- Footer -->
              <div class="card-footer px-3 pt-4 pb-1">
                <a href="instructors-single.html" class="d-block">
                  <h5 class="mb-0">{{ $instructor->name }}</h5>
                </a>
                <span class="font-size-d-sm">{{ $instructor->expertise }}</span>
              </div>
            </div>
          </div>
        @endforeach

      </div>


    </div>
  </section>

  <!-- FEATURES GENERAL
                                                                                                                                                                                            ================================================== -->
  <section class="py-5 py-md-8 bg-white">
    <div class="container container-wd">
      <div class="row align-items-center mb-6">
        <div class="col-md-6 order-2" data-aos="fade-left">
          <h2>MOOC Kabupaten Takalar</h2>
          <p class="line-clamp-3 line-height-md">Bergabunglah dengan MOOC Kabupaten Takalar dan tingkatkan pengetahuan
            Anda secara online. Dapatkan kesempatan belajar dari para ahli dan komunitas yang berbagi pengetahuan di
            berbagai bidang. Belajarlah dengan kebebasan dan kecepatan sesuai kebutuhan Anda.</p>
        </div>
        <div class="col-md-6 order-1 mb-8 mb-md-0" data-aos="zoom-in">
          <img class="img-fluid" src="{{ asset('frontend/assets/img/post/post-10.png') }}" alt="...">
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-md-6 order-2 order-md-1" data-aos="fade-right">
          <h2>Komunitas Peluang</h2>
          <p class="line-clamp-3 line-height-md">Bergabunglah dengan MOOC Kabupaten Takalar dan temukan peluang baru.
            Saling berbagi pengetahuan dan pengalaman dengan jutaan orang dari berbagai belahan dunia. Bersama, kita
            dapat menciptakan komunitas pembelajaran yang beragam dan inklusif.</p>
        </div>

        <div class="col-md-6 order-1 mb-8 mb-md-0 order-md-2 text-right" data-aos="zoom-in">
          <img class="img-fluid" src="{{ asset('frontend/assets/img/post/post-11.png') }} " alt="...">
        </div>
      </div>
    </div>
  </section>
@endsection
