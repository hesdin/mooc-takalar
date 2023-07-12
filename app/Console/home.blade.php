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
          <h1 class="display-4" data-aos="fade-left" data-aos-duration="150">Massive Online Open
            Courses <br> <span class="fw-bold">Kabupaten
              Takalar</span></h1>

          <!-- Text -->
          <p class="me-xl-11 me-wd-14 pe-wd-4 text-dark" data-aos="fade-up" data-aos-duration="200">
            MOOC Kabupaten Takalar adalah sebuah inisiatif untuk memberikan akses kursus secara online kepada
            para guru di Kabupaten Takalar. Teknologi membawa gelombang evolusi dalam pembelajaran yang dapat diakses
            secara
            fleksibel dan beragam cara.</p>

          <!-- Buttons -->
          <a href="{{ route('course.all') }}"
            class="rounded rounded-0 btn btn-pill btn-helio btn-gradient-1 text-white btn-x-wide shadow lift mb-5 mt-1"
            data-aos="fade-up" data-aos-duration="200">Semua Kursus
          </a>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- KURSUS UNGGULAMN                                   ================================================== -->
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
                    <a href="{{ route('course.detail', ['uuid' => $course->uuid]) }}"
                      class="card-img sk-thumbnail d-block">
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
                    <a href="{{ route('course.detail', ['uuid' => $course->uuid]) }}"><span
                        class="mb-1 d-inline-block text-gray-800">{{ Str::ucfirst($course->category->name) }}</span></a>

                    <!-- Heading -->
                    <div class="position-relative">
                      <a href="{{ route('course.detail', ['uuid' => $course->uuid]) }}" class="d-block stretched-link">
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
                                <div class="font-size-sm">{{ $course->curriculum->count() }} materi</div>
                              </div>
                            </li>
                            <li class="nav-item px-3">
                              <div class="d-flex align-items-center">
                                <div class="me-2 d-flex icon-uxs text-secondary">
                                  <!-- Icon -->
                                  <svg width="15" height="15" viewBox="0 0 15 15"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z"
                                      fill="currentColor" />
                                  </svg>

                                </div>
                                <div class="font-size-sm">{{ $course->created_at->format('d M, Y') }}</div>
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
                      <a href="{{ route('course.detail', ['uuid' => $course->uuid]) }}"
                        class="card-img sk-thumbnail d-block">
                        <img class="rounded shadow-light-lg"
                          src="{{ asset('storage/images/course/' . $course->image) }}" alt="...">
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
                                  <div class="font-size-sm">{{ $course->curriculum->count() }} materi</div>
                                </div>
                              </li>
                              <li class="nav-item px-3">
                                <div class="d-flex align-items-center">
                                  <div class="me-2 d-flex icon-uxs text-secondary">
                                    <!-- Icon -->
                                    <svg width="15" height="15" viewBox="0 0 15 15"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                        d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z"
                                        fill="currentColor" />
                                    </svg>

                                  </div>
                                  <div class="font-size-sm">{{ $course->created_at->format('d M, Y') }}</div>
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

  <!-- TRENDING KATEGORI                                  ================================================== -->
  <section class="py-5 py-md-8 bg-white">
    <div class="container container-wd">
      <div class="row align-items-end mb-md-7 mb-4">
        <div class="col-md mb-4 mb-md-0">
          <h1 class="mb-1">Trending Kategori</h1>
          <p class="font-size-lg mb-0 text-capitalize">Pilih Kategori Kursus Yang Anda Minati.</p>
        </div>
        <div class="col-md-auto">

        </div>
      </div>

      <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 row-cols-wd-6">

        @foreach ($categories as $category)
          <div class="col mb-md-6 mb-4 px-2 px-md-4">
            <!-- Card -->
            <a href="#" class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
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

  <!-- KURSUS TERBARU                                      ================================================== -->
  <section class="py-5 py-md-8 bg-white">
    <div class="container container-wd">
      <div class="row align-items-end mb-4 mb-md-7">
        <div class="col-md mb-4 mb-md-0">
          <h1 class="mb-1">Kursus Terbaru</h1>
          <p class="font-size-lg mb-0 text-capitalize">Ikuti Kursus Terbaru Yang Kamu Minati</p>
        </div>
        <div class="col-md-auto">
          <a href="{{ route('course.all') }}" class="d-flex align-items-center fw-medium">
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
                <a href="{{ route('course.detail', ['uuid' => $course->uuid]) }}"
                  class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid"
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
                    <a href="{{ route('course.detail', ['uuid' => $course->uuid]) }}"
                      class="d-flex align-items-center text-gray-800">
                      <div class="me-3 d-flex">
                        <!-- Icon -->
                        <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z"
                            fill="currentColor" />
                        </svg>

                      </div>
                      <div class="font-size-sm">{{ Str::ucfirst($course->instructor->name) }}</div>
                    </a>
                  </li>
                  <li class="nav-item px-3">
                    <a href="{{ route('course.detail', ['uuid' => $course->uuid]) }}"
                      class="d-flex align-items-center text-gray-800">
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
                <a href="{{ route('course.detail', ['uuid' => $course->uuid]) }}" class="d-block">
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

        </div>
      </div>

      <div class="mx-n3 mx-md-n4 flickity-button-outset"
        data-flickity='{"pageDots": false,"cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>

        @foreach ($instructors as $instructor)
          <div class="col-6 col-md-4 col-lg-4 mw-xl-20 text-center py-5 text-md-left px-3 px-md-4">
            <div class="card border shadow p-2 lift">
              <!-- Image -->
              <div class="card-zoom position-relative" style="max-width: 250px;">

                <a href="#"
                  class="card-img sk-thumbnail img-ratio-4 card-hover-overlay card-hover-overlay-gradient-1 d-block">
                  <img class="rounded shadow-light-lg img-fluid"
                    src="{{ asset('storage/images/' . $instructor->image) }}" alt="..."></a>
              </div>

              <!-- Footer -->
              <div class="card-footer px-3 pt-4 pb-1">
                <a href="#" class="d-block">
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
          <p class="line-clamp-3 line-height-md">Ikuti kelas MOOC Kabupaten Takalar dan tingkatkan pengetahuan
            Anda secara online. Dapatkan kesempatan belajar dari para ahli dan komunitas yang berbagi pengetahuan di
            berbagai bidang. Belajarlah dengan kebebasan dan kecepatan sesuai kebutuhan Anda.</p>
        </div>
        <div class="col-md-6 order-1 mb-8 mb-md-0" data-aos="zoom-in">
          <svg class="animated" id="freepik_stories-nerd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"
            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
            <style>
              svg#freepik_stories-nerd:not(.animated) .animable {
                opacity: 0;
              }

              svg#freepik_stories-nerd.animated #freepik--Floor--inject-1--inject-236 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                animation-delay: 0s;
              }

              svg#freepik_stories-nerd.animated #freepik--Shadows--inject-1--inject-236 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                animation-delay: 0s;
              }

              svg#freepik_stories-nerd.animated #freepik--Pencil--inject-1--inject-236 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                animation-delay: 0s;
              }

              svg#freepik_stories-nerd.animated #freepik--Backpack--inject-1--inject-236 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
                animation-delay: 0s;
              }

              svg#freepik_stories-nerd.animated #freepik--game-console--inject-1--inject-236 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                animation-delay: 0s;
              }

              svg#freepik_stories-nerd.animated #freepik--Cloud--inject-1--inject-236 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
                animation-delay: 0s;
              }

              svg#freepik_stories-nerd.animated #freepik--Character--inject-1--inject-236 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                animation-delay: 0s;
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

              @keyframes zoomOut {
                0% {
                  opacity: 0;
                  transform: scale(1.5);
                }

                100% {
                  opacity: 1;
                  transform: scale(1);
                }
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
            </style>
            <g id="freepik--Floor--inject-1--inject-236" class="animable"
              style="transform-origin: 249.996px 340.407px;">
              <path
                d="M97.76,419.94c84.08,43.93,220.4,43.93,304.48,0s84.09-115.14,0-159.07-220.4-43.92-304.49,0S13.67,376,97.76,419.94Z"
                style="fill: rgb(245, 245, 245); transform-origin: 249.996px 340.407px;" id="elf3ch68mvbxj"
                class="animable"></path>
            </g>
            <g id="freepik--Shadows--inject-1--inject-236" class="animable"
              style="transform-origin: 294.038px 347.945px;">
              <path d="M204,381.79c22.66,10.8,59.39,10.8,82,0s22.66-28.3,0-39.1-59.38-10.8-82,0S181.3,371,204,381.79Z"
                style="fill: rgb(235, 235, 235); transform-origin: 244.991px 362.24px;" id="eltfgoun33nbc"
                class="animable"></path>
              <path
                d="M400.16,355.06l-81,46.75a4.79,4.79,0,0,1-4.33,0L213.58,343.33a1.32,1.32,0,0,1,0-2.5l81-46.75a4.79,4.79,0,0,1,4.33,0l101.28,58.48A1.32,1.32,0,0,1,400.16,355.06Z"
                style="fill: rgb(235, 235, 235); transform-origin: 306.878px 347.945px;" id="elb2hvons8l9n"
                class="animable"></path>
            </g>
            <g id="freepik--Pencil--inject-1--inject-236" class="animable"
              style="transform-origin: 397.67px 166.365px;">
              <path
                d="M422.7,98.07v21.47s-8.82,4.13-25,4.13-25-4.14-25-4.14v-21l16.88-47.77c-.23,1.5.65,3,2.63,4.18a10.36,10.36,0,0,0,9.74.61,9.19,9.19,0,0,0,1.26-.61c2.1-1.21,3-2.87,2.59-4.45Z"
                style="fill: rgb(245, 245, 245); transform-origin: 397.7px 87.08px;" id="el9mbm78ua5rc"
                class="animable"></path>
              <g id="elhqdh7yp3s">
                <path
                  d="M422.7,98.07v21.47s-8.82,4.13-25,4.13-25-4.14-25-4.14v-21l16.88-47.77c-.23,1.5.65,3,2.63,4.18a10.36,10.36,0,0,0,9.74.61,9.19,9.19,0,0,0,1.26-.61c2.1-1.21,3-2.87,2.59-4.45Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 397.7px 87.08px;" class="animable"
                  id="el8wmwy1g3ayq"></path>
              </g>
              <path
                d="M420.76,248.57a17,17,0,0,1-5.39,4.64c-9.78,5.65-25.63,5.65-35.4,0a17,17,0,0,1-5.4-4.64,9.67,9.67,0,0,1-1.92-5.17v11.15c.18,3.56,2.61,7.09,7.32,9.81,9.77,5.64,25.62,5.64,35.4,0,4.88-2.82,7.33-6.52,7.33-10.22V243A9.47,9.47,0,0,1,420.76,248.57Z"
                style="fill: rgb(245, 245, 245); transform-origin: 397.675px 255.795px;" id="el1okdrpx3mp1"
                class="animable"></path>
              <path
                d="M420.76,237.42a17,17,0,0,1-5.39,4.64c-.58.33-1.17.64-1.78.93-9.23,4.4-22.62,4.4-31.84,0-.61-.29-1.21-.6-1.78-.93a17,17,0,0,1-5.4-4.64,9.64,9.64,0,0,1-1.92-5.16V243.4a9.67,9.67,0,0,0,1.92,5.17,17,17,0,0,0,5.4,4.64c9.77,5.65,25.62,5.65,35.4,0a17,17,0,0,0,5.39-4.64A9.47,9.47,0,0,0,422.7,243V231.85A9.46,9.46,0,0,1,420.76,237.42Z"
                style="fill: rgb(235, 235, 235); transform-origin: 397.675px 244.649px;" id="el37n4bc9zroy"
                class="animable"></path>
              <path
                d="M420.76,226.27a17.12,17.12,0,0,1-5.39,4.65c-.58.33-1.17.63-1.78.93-9.23,4.4-22.62,4.4-31.84,0-.61-.3-1.21-.6-1.78-.93a17.17,17.17,0,0,1-5.4-4.65,9.64,9.64,0,0,1-1.92-5.16v11.15a9.64,9.64,0,0,0,1.92,5.16,17,17,0,0,0,5.4,4.64c.57.33,1.17.64,1.78.93,9.22,4.4,22.61,4.4,31.84,0,.61-.29,1.2-.6,1.78-.93a17,17,0,0,0,5.39-4.64,9.46,9.46,0,0,0,1.94-5.57V220.7A9.44,9.44,0,0,1,420.76,226.27Z"
                style="fill: rgb(245, 245, 245); transform-origin: 397.675px 233.495px;" id="elu6krfszym8n"
                class="animable"></path>
              <path
                d="M372.65,98.49V221.11a9.64,9.64,0,0,0,1.92,5.16,17.17,17.17,0,0,0,5.4,4.65c.57.33,1.17.63,1.78.93a33,33,0,0,0,7.58,2.47L384.8,105.09Z"
                style="fill: rgb(245, 245, 245); transform-origin: 380.99px 166.405px;" id="eleeh477ayyit"
                class="animable"></path>
              <path
                d="M410.54,105.09,406,234.32a33,33,0,0,0,7.58-2.47c.61-.3,1.2-.6,1.78-.93a17.12,17.12,0,0,0,5.39-4.65,9.44,9.44,0,0,0,1.94-5.57V98.07Z"
                style="fill: rgb(245, 245, 245); transform-origin: 414.345px 166.195px;" id="elmn3iv5ussci"
                class="animable"></path>
              <path
                d="M372.65,98.49V221.11a9.64,9.64,0,0,0,1.92,5.16,17.17,17.17,0,0,0,5.4,4.65c.57.33,1.17.63,1.78.93a33,33,0,0,0,7.58,2.47L384.8,105.09Z"
                style="fill: rgb(224, 224, 224); transform-origin: 380.99px 166.405px;" id="el2rsl8ksm31g"
                class="animable"></path>
              <path
                d="M410.54,105.09,406,234.32a33,33,0,0,0,7.58-2.47c.61-.3,1.2-.6,1.78-.93a17.12,17.12,0,0,0,5.39-4.65,9.44,9.44,0,0,0,1.94-5.57V98.07Z"
                style="fill: rgb(224, 224, 224); transform-origin: 414.345px 166.195px;" id="eljgxy165ecm"
                class="animable"></path>
              <path
                d="M384.8,105.09v128a35.85,35.85,0,0,0,4.53,1.24,41.9,41.9,0,0,0,8.34.83h0a42.66,42.66,0,0,0,8.34-.83,35.85,35.85,0,0,0,4.53-1.24v-128Z"
                style="fill: rgb(235, 235, 235); transform-origin: 397.67px 170.125px;" id="elwrr0k9f9jtl"
                class="animable"></path>
              <path
                d="M403.17,54.89a9.19,9.19,0,0,1-1.26.61,10.36,10.36,0,0,1-9.74-.61c-2-1.14-2.86-2.68-2.63-4.18l5.76-16.13A2.52,2.52,0,0,1,397.67,33h0a2.53,2.53,0,0,1,2.38,1.58l5.7,15.84v0C406.14,52,405.27,53.68,403.17,54.89Z"
                style="fill: rgb(224, 224, 224); transform-origin: 397.672px 44.7169px;" id="elsfzqxjooab8"
                class="animable"></path>
              <path
                d="M415.37,264.36c-8.4,4.85-21.28,5.52-30.94,2q-.81-.28-1.59-.63l-.72-.3c-.75-.34-1.47-.71-2.15-1.1-4.71-2.72-7.14-6.25-7.32-9.81V284.9c-.18,3.84,2.25,7.71,7.32,10.63.6.35,1.23.68,1.88,1,.24.12.5.21.74.32.42.18.83.37,1.26.53s.67.24,1,.35.71.26,1.08.37.82.23,1.23.34.63.18.95.25.95.21,1.43.3c.27,0,.54.12.81.16.54.1,1.09.17,1.64.25l.65.09c.61.07,1.22.12,1.83.16l.48,0c.67.05,1.34.07,2,.08h.32c.72,0,1.44,0,2.16,0h.16c.76,0,1.52-.09,2.28-.16h0a34.38,34.38,0,0,0,12.77-3.66h0c.22-.12.45-.22.67-.35,4.88-2.82,7.33-6.52,7.33-10.22V254.14C422.7,257.84,420.25,261.54,415.37,264.36Z"
                style="fill: rgb(224, 224, 224); transform-origin: 397.641px 276.935px;" id="elvbg3f43jbci"
                class="animable"></path>
            </g>
            <g id="freepik--Backpack--inject-1--inject-236" class="animable"
              style="transform-origin: 124.326px 229.271px;">
              <path
                d="M113.48,282.08c-2.89-.73-18.32-9.51-19.89-10.58s-4.67-3.28-4.67-7.09c0-3.37.35-35.15,3.11-50.5a35.64,35.64,0,0,1,15.85-23.4c9.6-5.95,19.25-10.26,27.38-6.88s15.55,9.59,18.75,17.09,5.39,22.52,5.62,28.33,0,25.73,0,27.5-.32,4.07-9.85,10-22.69,13-26.76,14.83A15.54,15.54,0,0,1,113.48,282.08Z"
                style="fill: rgb(55, 71, 79); transform-origin: 124.326px 232.483px;" id="eleqcwjbz6ay"
                class="animable"></path>
              <path
                d="M111.1,194.64c-.88.5-3.42-.75-3.8-1.38s-.48-6.08,1.42-9.09,13.75-8.56,16.68-8.15a8.17,8.17,0,0,1,5.45,3.48c.36.77.76,5.84,0,6.88s-3.47-.56-3.71-1,.89-4.15-1-4.92c-1.74-.7-10,2.81-13.36,5.63-1.46,1.23-1.39,4.28-1.32,5.79S111.54,194.38,111.1,194.64Z"
                style="fill: rgb(69, 90, 100); transform-origin: 119.18px 185.377px;" id="elrg05a9rgdik"
                class="animable"></path>
              <path
                d="M108.72,230.42c1.7-16.51,4.76-26.15,20.91-33.34s22.42-1.07,24.71,4.44c3,7.72,5.07,21.92,5.29,27.53.23,5.81,0,25.73,0,27.5s-.32,4.07-9.85,10-22.69,13-26.76,14.83a15.54,15.54,0,0,1-9.54.73,12.7,12.7,0,0,1-1.86-.73C106.59,274.92,107.16,245.5,108.72,230.42Z"
                style="fill: rgb(69, 90, 100); transform-origin: 133.675px 238.176px;" id="elek1ayi09eub"
                class="animable"></path>
              <path
                d="M146.37,190.63c-4.22-2.47-11.14-4.1-21.3.43-18.16,8.09-22.77,18.22-24.6,36-.33,3.26-.82,7.14-1,11.31l-1.5-.91c.21-4.5.65-8.35,1-11.83,2-17.91,7.37-27.81,24.72-35.54,9.61-4.28,15.92-3.72,20.1-1.61A31.47,31.47,0,0,1,146.37,190.63Z"
                style="fill: rgb(38, 50, 56); transform-origin: 122.17px 212.621px;" id="el7qrqegyusm7"
                class="animable"></path>
              <path
                d="M147,191.09c-4.21-2.47-11.14-4.1-21.29.43-18.17,8.09-22.78,18.22-24.61,36-.33,3.26-.82,7.14-1,11.31l-1.5-.91c.21-4.5.65-8.35,1-11.83,2-17.91,7.37-27.82,24.72-35.54,9.61-4.28,16.09-3.57,20.27-1.47A27.86,27.86,0,0,1,147,191.09Z"
                style="fill: rgb(69, 90, 100); transform-origin: 122.8px 213.122px;" id="el4nafmcvfpmq"
                class="animable"></path>
              <path
                d="M141.12,206.79l-5.49-3.14a1.18,1.18,0,0,0-1.6.44l-5.63,9.79a1.18,1.18,0,0,0,.42,1.61l5.42,3.16a1.18,1.18,0,0,0,1.61-.42l5.7-9.85A1.15,1.15,0,0,0,141.12,206.79Z"
                style="fill: rgb(38, 50, 56); transform-origin: 134.975px 211.155px;" id="elmvi0ob4y12q"
                class="animable"></path>
              <path
                d="M135.23,217.53l5.41-9.33a.58.58,0,0,0-.22-.8l-5-2.84a.59.59,0,0,0-.8.22l-5.35,9.29a.59.59,0,0,0,.22.8l4.91,2.87A.59.59,0,0,0,135.23,217.53Z"
                style="fill: rgb(69, 90, 100); transform-origin: 134.957px 211.158px;" id="el7azqrffcni6"
                class="animable"></path>
              <path
                d="M136.39,213.07h0a1.09,1.09,0,0,0,.52-.82v-4.47c0-.29-.23-.38-.52-.22h0a1.09,1.09,0,0,0-.52.82v4.47C135.87,213.14,136.1,213.23,136.39,213.07Z"
                style="fill: rgb(55, 71, 79); transform-origin: 136.39px 210.315px;" id="eladaofec0twg"
                class="animable"></path>
              <path
                d="M133.49,214.75h0a1.12,1.12,0,0,0,.52-.83v-4.46c0-.29-.24-.39-.52-.22h0a1.07,1.07,0,0,0-.52.82v4.47C133,214.81,133.2,214.91,133.49,214.75Z"
                style="fill: rgb(55, 71, 79); transform-origin: 133.49px 211.992px;" id="el7soyyhtz49j"
                class="animable"></path>
              <path
                d="M116.2,244.38s2.72,2.24,4.68,10.68,3.14,19.07,1,20.35-5.23-1.4-6-2.32C114.3,271.2,114.69,251.14,116.2,244.38Z"
                style="fill: rgb(38, 50, 56); transform-origin: 118.943px 260.065px;" id="el5fjqwoow0qy"
                class="animable"></path>
              <path
                d="M116.2,244.38s2.72,2.24,4.68,10.68,3.14,19.07,1,20.35l33-19.46c2.16-1.28,2.69-12.45.74-20.89-1.29-5.55-3.66-8.19-5.12-9.35a2.12,2.12,0,0,0-2.37-.15L116.2,244.38"
                style="fill: rgb(55, 71, 79); transform-origin: 136.514px 250.339px;" id="eldhoveqcsoh"
                class="animable"></path>
              <path
                d="M149.82,227c1.58.78,4.26,2.93,5.47,8.64a4.29,4.29,0,0,1-1.35,4.34c-1.1.78-24.72,14.21-27.85,16.08-2.7,1.61-4.1-.53-4.69-1.87h0c-1-2.38-1.86-4.23-2.6-5.65a11.84,11.84,0,0,0-2.59-4.15l31.47-17.3A2.28,2.28,0,0,1,149.82,227Z"
                style="fill: rgb(38, 50, 56); transform-origin: 135.82px 241.706px;" id="elwlu6r92yxm8"
                class="animable"></path>
              <path
                d="M100.49,239.76a29,29,0,0,1,.89,5.25c0,.36-.49.55-.63.55A6.37,6.37,0,0,1,97.69,244a30.23,30.23,0,0,1,.82-4.48Z"
                style="fill: rgb(38, 50, 56); transform-origin: 99.535px 242.54px;" id="elocnwv0fhpb" class="animable">
              </path>
              <path d="M101.51,238.35a1.91,1.91,0,1,0-1.91,1.91A1.91,1.91,0,0,0,101.51,238.35Z"
                style="fill: rgb(38, 50, 56); transform-origin: 99.6px 238.35px;" id="elzlyy9b23kop" class="animable">
              </path>
              <path
                d="M125.4,180.37c2.09-.2,4.06,0,4.56,2.09s.32,4,0,4.26a5,5,0,0,1-2.82-1.34c-.24-.45.89-4.15-1-4.92a1.86,1.86,0,0,0-.72-.09Z"
                style="fill: rgb(38, 50, 56); transform-origin: 127.836px 183.515px;" id="eltwzuffass4p"
                class="animable"></path>
              <path
                d="M148.33,225.45a2.28,2.28,0,0,1,2.15-.09c1.58.78,4.26,2.93,5.47,8.64a4.3,4.3,0,0,1-1.35,4.34c-1.1.78-24.71,14.21-27.84,16.08-2.7,1.61-4.11-.53-4.7-1.87h0c-3.27-6.84-5.86-8.17-5.86-8.17Z"
                style="fill: rgb(55, 71, 79); transform-origin: 136.145px 240.064px;" id="el6hl9uosxt1i"
                class="animable"></path>
            </g>
            <g id="freepik--game-console--inject-1--inject-236" class="animable"
              style="transform-origin: 153.213px 325.167px;">
              <path
                d="M142.67,341.79l-26.48-15.28a5.28,5.28,0,0,1-2.38-4.12v.3a5.26,5.26,0,0,1,2.38-4.12l53.25-30.74a5.23,5.23,0,0,1,4.75,0l26.48,15.29a5.22,5.22,0,0,1,2.38,4.11v-.3a5.26,5.26,0,0,1-2.37,4.12l-53.25,30.74A5.25,5.25,0,0,1,142.67,341.79Z"
                style="fill: #407BFF; transform-origin: 158.43px 314.81px;" id="elplwg11m1fe" class="animable"></path>
              <g id="eltlqt35k4ijp">
                <path
                  d="M142.67,341.79l-26.48-15.28a5.28,5.28,0,0,1-2.38-4.12v.3a5.26,5.26,0,0,1,2.38-4.12l53.25-30.74a5.23,5.23,0,0,1,4.75,0l26.48,15.29a5.22,5.22,0,0,1,2.38,4.11v-.3a5.26,5.26,0,0,1-2.37,4.12l-53.25,30.74A5.25,5.25,0,0,1,142.67,341.79Z"
                  style="opacity: 0.7; transform-origin: 158.43px 314.81px;" class="animable" id="eljpoi3ye3wri">
                </path>
              </g>
              <path
                d="M145,301.91l-28.85,16.66a5.26,5.26,0,0,0-2.38,4.12v-.3a5.28,5.28,0,0,0,2.38,4.12l26.48,15.28a4.87,4.87,0,0,0,2.38.57Z"
                style="fill: #407BFF; transform-origin: 129.39px 322.135px;" id="el30apzof1w2s" class="animable">
              </path>
              <g id="eledjhtxri1b6">
                <path
                  d="M145,301.91l-28.85,16.66a5.26,5.26,0,0,0-2.38,4.12v-.3a5.28,5.28,0,0,0,2.38,4.12l26.48,15.28a4.87,4.87,0,0,0,2.38.57Z"
                  style="opacity: 0.7; transform-origin: 129.39px 322.135px;" class="animable" id="elrn8w9vzada">
                </path>
              </g>
              <path
                d="M116.18,321.32l26.47,15.29a5.32,5.32,0,0,0,4.76,0l53.25-30.75c1.32-.76,1.32-2,0-2.74l-26.48-15.29a5.23,5.23,0,0,0-4.75,0l-53.25,30.74C114.86,319.33,114.86,320.56,116.18,321.32Z"
                style="fill: #407BFF; transform-origin: 158.42px 312.216px;" id="elc3czt5bqkm9" class="animable">
              </path>
              <g id="eljxev7md7jrn">
                <path
                  d="M116.18,321.32l26.47,15.29a5.32,5.32,0,0,0,4.76,0l53.25-30.75c1.32-.76,1.32-2,0-2.74l-26.48-15.29a5.23,5.23,0,0,0-4.75,0l-53.25,30.74C114.86,319.33,114.86,320.56,116.18,321.32Z"
                  style="opacity: 0.5; transform-origin: 158.42px 312.216px;" class="animable" id="el5st0hrwr0j9">
                </path>
              </g>
              <path d="M116.18,316.29v2.54l27.48,15.87a2.76,2.76,0,0,0,2.75,0l54.25-31.33v-2.62l-55.63,27Z"
                style="fill: #407BFF; transform-origin: 158.42px 317.908px;" id="elg02je2tl7ct" class="animable">
              </path>
              <path
                d="M142.66,331.58l-26.48-15.29a5.24,5.24,0,0,1-2.38-4.12v-4.89a5.24,5.24,0,0,1,2.38-4.12l53.25-30.75a5.23,5.23,0,0,1,4.75,0l26.48,15.29a5.24,5.24,0,0,1,2.38,4.12v4.9a5.09,5.09,0,0,1-2.38,4l-53.25,30.83A5.23,5.23,0,0,1,142.66,331.58Z"
                style="fill: #407BFF; transform-origin: 158.42px 301.988px;" id="eldquw9rz1n3w" class="animable">
              </path>
              <g id="els458g7d4eyp">
                <path
                  d="M142.66,331.58l-26.48-15.29a5.24,5.24,0,0,1-2.38-4.12v-4.89a5.24,5.24,0,0,1,2.38-4.12l53.25-30.75a5.23,5.23,0,0,1,4.75,0l26.48,15.29a5.24,5.24,0,0,1,2.38,4.12v4.9a5.09,5.09,0,0,1-2.38,4l-53.25,30.83A5.23,5.23,0,0,1,142.66,331.58Z"
                  style="opacity: 0.6; transform-origin: 158.42px 301.988px;" class="animable" id="el1v9spj95s8">
                </path>
              </g>
              <path
                d="M145,286.5l-28.85,16.66a5.24,5.24,0,0,0-2.38,4.12v4.89a5.24,5.24,0,0,0,2.38,4.12l26.48,15.29a4.8,4.8,0,0,0,2.37.57Z"
                style="fill: #407BFF; transform-origin: 129.385px 309.326px;" id="elmqt9ad8pxm" class="animable">
              </path>
              <g id="elffmbdh8fnxg">
                <path
                  d="M145,286.5l-28.85,16.66a5.24,5.24,0,0,0-2.38,4.12v4.89a5.24,5.24,0,0,0,2.38,4.12l26.48,15.29a4.8,4.8,0,0,0,2.37.57Z"
                  style="opacity: 0.7; transform-origin: 129.385px 309.326px;" class="animable" id="el0ffw79zc7li">
                </path>
              </g>
              <path
                d="M116.18,305.9l26.47,15.29a5.25,5.25,0,0,0,4.76,0l53.25-30.74c1.32-.76,1.32-2,0-2.75l-26.48-15.29a5.23,5.23,0,0,0-4.75,0l-53.25,30.75C114.86,303.92,114.86,305.15,116.18,305.9Z"
                style="fill: #407BFF; transform-origin: 158.42px 296.8px;" id="elfbf85m88lan" class="animable"></path>
              <g id="elplx1jbhjl8">
                <path
                  d="M116.18,305.9l26.47,15.29a5.25,5.25,0,0,0,4.76,0l53.25-30.74c1.32-.76,1.32-2,0-2.75l-26.48-15.29a5.23,5.23,0,0,0-4.75,0l-53.25,30.75C114.86,303.92,114.86,305.15,116.18,305.9Z"
                  style="opacity: 0.5; transform-origin: 158.42px 296.8px;" class="animable" id="elb9qe58eqbi"></path>
              </g>
              <path
                d="M153.11,293.75c-2.93,1.7-2.93,4.43,0,6.11a11.82,11.82,0,0,0,10.62,0c2.93-1.68,2.93-4.41,0-6.11A11.76,11.76,0,0,0,153.11,293.75Z"
                style="fill: #407BFF; transform-origin: 158.42px 296.801px;" id="ellfz1gtp01fa" class="animable">
              </path>
              <path
                d="M196.35,295.54a2.06,2.06,0,0,0-.93,1.62c0,.6.42.85.93.56a2.06,2.06,0,0,0,.93-1.62C197.28,295.5,196.86,295.25,196.35,295.54Z"
                style="fill: #407BFF; transform-origin: 196.35px 296.63px;" id="el34nbi5ktdv5" class="animable"></path>
              <path
                d="M196.35,299.13a2.06,2.06,0,0,0-.93,1.62c0,.6.42.85.93.56a2,2,0,0,0,.93-1.62C197.28,299.09,196.86,298.84,196.35,299.13Z"
                style="fill: #407BFF; transform-origin: 196.35px 300.22px;" id="elt29n7k4ejq" class="animable"></path>
              <path
                d="M131.57,362a.73.73,0,0,1-.35-.09L105.56,347a4.38,4.38,0,0,1,0-7.58l18.81-10.86a.7.7,0,0,1,.7,1.21L106.27,340.6a3,3,0,0,0,0,5.16l25.66,14.89a.69.69,0,0,1,.25,1A.68.68,0,0,1,131.57,362Z"
                style="fill: #407BFF; transform-origin: 117.838px 345.242px;" id="elpyhcu1fmwb" class="animable">
              </path>
              <path
                d="M163.71,347.6l-5.56-22.32a6,6,0,0,0-.31-.9l1.62-.23-3.53-2h0a4.64,4.64,0,0,0-4.78.21L128,335.76a12.09,12.09,0,0,0-5.45,9.48v26.84c0,2.14.52,3.61,1.59,4.12h0l3.32,1.92-.8-2.12.18-.07c3.81-1.82,5.19-5.14,6.33-8.43l4.41-12.75c1.14-3.29,4-7.06,6.34-8.43s5.68,0,7.4,3l2.22,3.88a7.24,7.24,0,0,0,2.94,2.9h0l3.38,2-.86-1.34a3.94,3.94,0,0,0,2-.54C163.31,354.84,164.55,351,163.71,347.6Z"
                style="fill: #407BFF; transform-origin: 143.262px 349.853px;" id="elngg7pxlq3ja" class="animable">
              </path>
              <g id="elql9bkvvgtwm">
                <path
                  d="M163.71,347.6l-5.56-22.32a6,6,0,0,0-.31-.9l1.62-.23-3.53-2h0a4.64,4.64,0,0,0-4.78.21L128,335.76a12.09,12.09,0,0,0-5.45,9.48v26.84c0,2.14.52,3.61,1.59,4.12h0l3.32,1.92-.8-2.12.18-.07c3.81-1.82,5.19-5.14,6.33-8.43l4.41-12.75c1.14-3.29,4-7.06,6.34-8.43s5.68,0,7.4,3l2.22,3.88a7.24,7.24,0,0,0,2.94,2.9h0l3.38,2-.86-1.34a3.94,3.94,0,0,0,2-.54C163.31,354.84,164.55,351,163.71,347.6Z"
                  style="opacity: 0.7; transform-origin: 143.262px 349.853px;" class="animable" id="el60gf3fga0ys">
                </path>
              </g>
              <path
                d="M157.84,324.38l1.62-.23-3.53-2h0a4.64,4.64,0,0,0-4.78.21L128,335.76a10.64,10.64,0,0,0-3.24,3.15l5.51,3.36,28.18-15.92-.27-1.07A6,6,0,0,0,157.84,324.38Z"
                style="fill: #407BFF; transform-origin: 142.11px 331.928px;" id="elsncdpgvuiv" class="animable"></path>
              <g id="elarj3icm5fup">
                <path
                  d="M157.84,324.38l1.62-.23-3.53-2h0a4.64,4.64,0,0,0-4.78.21L128,335.76a10.64,10.64,0,0,0-3.24,3.15l5.51,3.36,28.18-15.92-.27-1.07A6,6,0,0,0,157.84,324.38Z"
                  style="opacity: 0.5; transform-origin: 142.11px 331.928px;" class="animable" id="elhbqzcqhtjqd">
                </path>
              </g>
              <path
                d="M164.53,358.3c-2.37,1.37-5.7,0-7.43-3l-2.21-3.88c-1.73-3-5-4.37-7.41-3s-5.2,5.13-6.34,8.43l-4.4,12.74c-1.14,3.29-2.53,6.61-6.34,8.43-2.88,1.38-4.27-.36-4.27-3.84V347.32a12.1,12.1,0,0,1,5.46-9.47l23.19-13.45a4.48,4.48,0,0,1,7,3l5.56,22.33C168.16,353.07,166.91,356.93,164.53,358.3Z"
                style="fill: #407BFF; transform-origin: 146.861px 351.042px;" id="el00g75vnhbrc4i" class="animable">
              </path>
              <g id="elg4653lyrbm9">
                <path
                  d="M164.53,358.3c-2.37,1.37-5.7,0-7.43-3l-2.21-3.88c-1.73-3-5-4.37-7.41-3s-5.2,5.13-6.34,8.43l-4.4,12.74c-1.14,3.29-2.53,6.61-6.34,8.43-2.88,1.38-4.27-.36-4.27-3.84V347.32a12.1,12.1,0,0,1,5.46-9.47l23.19-13.45a4.48,4.48,0,0,1,7,3l5.56,22.33C168.16,353.07,166.91,356.93,164.53,358.3Z"
                  style="opacity: 0.6; transform-origin: 146.861px 351.042px;" class="animable" id="eltwfx64thrtm">
                </path>
              </g>
              <polygon
                points="155.54 332.13 156.12 335.42 158.69 333.78 159.26 337.07 156.7 338.72 157.28 342.01 154.72 343.65 154.14 340.36 151.58 342.01 151 338.71 153.56 337.07 152.98 333.78 155.54 332.13"
                style="fill: rgb(38, 50, 56); transform-origin: 155.13px 337.89px;" id="eldbepsstisqe"
                class="animable"></polygon>
              <polygon
                points="156.28 332.52 156.86 335.81 159.42 334.17 160 337.46 157.44 339.11 158.02 342.4 155.46 344.04 154.88 340.75 152.32 342.39 151.74 339.1 154.3 337.46 153.72 334.17 156.28 332.52"
                style="fill: #407BFF; transform-origin: 155.87px 338.28px;" id="elgvciuks6v4p" class="animable">
              </polygon>
              <path
                d="M136.14,343.78a2.63,2.63,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.83a2.6,2.6,0,0,1,1-2.47C135.27,342.5,136,342.87,136.14,343.78Z"
                style="fill: rgb(38, 50, 56); transform-origin: 134.854px 344.6px;" id="elg6l823jmtyc"
                class="animable"></path>
              <path
                d="M137.3,350.36a2.6,2.6,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.82a2.59,2.59,0,0,1,1-2.47C136.43,349.08,137.14,349.45,137.3,350.36Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.015px 351.182px;" id="elgvz5zt1ztwo"
                class="animable"></path>
              <path
                d="M139.28,345.42a2.59,2.59,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.59,2.59,0,0,1,1-2.47C138.42,344.15,139.12,344.51,139.28,345.42Z"
                style="fill: rgb(38, 50, 56); transform-origin: 137.995px 346.247px;" id="elq2s66n6epd"
                class="animable"></path>
              <path
                d="M134.16,348.71a2.59,2.59,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C133.3,347.44,134,347.8,134.16,348.71Z"
                style="fill: rgb(38, 50, 56); transform-origin: 132.875px 349.537px;" id="eljzn2s52phiq"
                class="animable"></path>
              <path
                d="M136.19,343.81a2.6,2.6,0,0,1-1,2.47c-.71.45-1.41.09-1.57-.82a2.59,2.59,0,0,1,1-2.47C135.33,342.53,136,342.9,136.19,343.81Z"
                style="fill: rgb(38, 50, 56); transform-origin: 134.905px 344.633px;" id="el0009ur8fdld5d"
                class="animable"></path>
              <path
                d="M137.35,350.39a2.59,2.59,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.59,2.59,0,0,1,1-2.47C136.49,349.12,137.19,349.48,137.35,350.39Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.065px 351.217px;" id="elybl1du13fvn"
                class="animable"></path>
              <path
                d="M139.33,345.46a2.59,2.59,0,0,1-1,2.46c-.7.46-1.41.09-1.57-.82a2.62,2.62,0,0,1,1-2.47C138.47,344.18,139.17,344.55,139.33,345.46Z"
                style="fill: rgb(38, 50, 56); transform-origin: 138.045px 346.278px;" id="eldb84mq7f9ma"
                class="animable"></path>
              <path
                d="M134.21,348.75a2.6,2.6,0,0,1-1,2.47c-.7.45-1.41.08-1.57-.83a2.63,2.63,0,0,1,1-2.47C133.35,347.47,134.05,347.84,134.21,348.75Z"
                style="fill: rgb(38, 50, 56); transform-origin: 132.926px 349.57px;" id="elymzgfbuvxr"
                class="animable"></path>
              <path
                d="M136.24,343.84a2.59,2.59,0,0,1-1,2.47c-.7.46-1.41.09-1.57-.82a2.62,2.62,0,0,1,1-2.47C135.38,342.57,136.08,342.93,136.24,343.84Z"
                style="fill: rgb(38, 50, 56); transform-origin: 134.956px 344.667px;" id="eligui262yiym"
                class="animable"></path>
              <path
                d="M137.4,350.43a2.59,2.59,0,0,1-1,2.46c-.7.46-1.41.09-1.57-.82a2.62,2.62,0,0,1,1-2.47C136.54,349.15,137.24,349.52,137.4,350.43Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.115px 351.248px;" id="elicu9rh6fo7"
                class="animable"></path>
              <path
                d="M139.39,345.49a2.62,2.62,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.82a2.59,2.59,0,0,1,1-2.47C138.52,344.21,139.23,344.58,139.39,345.49Z"
                style="fill: rgb(38, 50, 56); transform-origin: 138.104px 346.312px;" id="elhvzoft846vk"
                class="animable"></path>
              <path
                d="M134.27,348.78a2.62,2.62,0,0,1-1,2.47c-.71.45-1.41.09-1.57-.82a2.59,2.59,0,0,1,1-2.47C133.4,347.5,134.11,347.87,134.27,348.78Z"
                style="fill: rgb(38, 50, 56); transform-origin: 132.984px 349.603px;" id="el1d6zp67nfg2j"
                class="animable"></path>
              <path
                d="M136.3,343.88a2.62,2.62,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.83a2.59,2.59,0,0,1,1-2.46C135.43,342.6,136.14,343,136.3,343.88Z"
                style="fill: rgb(38, 50, 56); transform-origin: 135.015px 344.704px;" id="el0jxn8b092ckl"
                class="animable"></path>
              <path
                d="M137.46,350.46a2.62,2.62,0,0,1-1,2.47c-.71.45-1.41.09-1.57-.82a2.59,2.59,0,0,1,1-2.47C136.59,349.18,137.3,349.55,137.46,350.46Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.174px 351.283px;" id="elo9dhkem2yln"
                class="animable"></path>
              <path
                d="M139.44,345.52a2.59,2.59,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C138.58,344.25,139.28,344.61,139.44,345.52Z"
                style="fill: rgb(38, 50, 56); transform-origin: 138.155px 346.347px;" id="el23tzruplzem"
                class="animable"></path>
              <path
                d="M134.32,348.81a2.59,2.59,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C133.46,347.54,134.16,347.9,134.32,348.81Z"
                style="fill: rgb(38, 50, 56); transform-origin: 133.035px 349.637px;" id="elvu3pca7ns4d"
                class="animable"></path>
              <path
                d="M136.35,343.91a2.6,2.6,0,0,1-1,2.47c-.71.45-1.41.09-1.57-.82a2.59,2.59,0,0,1,1-2.47C135.49,342.63,136.19,343,136.35,343.91Z"
                style="fill: rgb(38, 50, 56); transform-origin: 135.065px 344.733px;" id="elj3yjakkumzh"
                class="animable"></path>
              <path
                d="M137.51,350.49a2.59,2.59,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C136.65,349.22,137.35,349.58,137.51,350.49Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.225px 351.317px;" id="el7jdtjvlgj1r"
                class="animable"></path>
              <path
                d="M139.49,345.56a2.61,2.61,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.83a2.6,2.6,0,0,1,1-2.47C138.63,344.28,139.33,344.65,139.49,345.56Z"
                style="fill: rgb(38, 50, 56); transform-origin: 138.205px 346.38px;" id="el6iiqq6sluuh"
                class="animable"></path>
              <path
                d="M134.37,348.85a2.6,2.6,0,0,1-1,2.47c-.7.45-1.41.08-1.57-.83a2.61,2.61,0,0,1,1-2.46C133.51,347.57,134.21,347.94,134.37,348.85Z"
                style="fill: rgb(38, 50, 56); transform-origin: 133.086px 349.672px;" id="elmhrnrj0wv7o"
                class="animable"></path>
              <path
                d="M136.4,343.94a2.59,2.59,0,0,1-1,2.47c-.7.46-1.41.09-1.57-.82a2.62,2.62,0,0,1,1-2.47C135.54,342.67,136.24,343,136.4,343.94Z"
                style="fill: rgb(38, 50, 56); transform-origin: 135.116px 344.764px;" id="elakileo6jmlh"
                class="animable"></path>
              <path
                d="M137.56,350.53a2.61,2.61,0,0,1-1,2.47c-.7.45-1.41.08-1.57-.83a2.62,2.62,0,0,1,1-2.47C136.7,349.25,137.4,349.62,137.56,350.53Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.275px 351.35px;" id="el583pqtatoj3"
                class="animable"></path>
              <path
                d="M139.54,345.59a2.6,2.6,0,0,1-1,2.47c-.7.45-1.41.09-1.57-.82a2.61,2.61,0,0,1,1-2.47C138.68,344.31,139.38,344.68,139.54,345.59Z"
                style="fill: rgb(38, 50, 56); transform-origin: 138.255px 346.413px;" id="ele1xiqt6sbu"
                class="animable"></path>
              <path
                d="M134.43,348.88a2.62,2.62,0,0,1-1,2.47c-.71.45-1.41.09-1.57-.82a2.59,2.59,0,0,1,1-2.47C133.56,347.6,134.27,348,134.43,348.88Z"
                style="fill: rgb(38, 50, 56); transform-origin: 133.144px 349.705px;" id="eloqpq5xxxa9g"
                class="animable"></path>
              <path
                d="M136.46,344a2.62,2.62,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.82a2.59,2.59,0,0,1,1-2.47C135.59,342.7,136.3,343.07,136.46,344Z"
                style="fill: rgb(38, 50, 56); transform-origin: 135.174px 344.816px;" id="elnadjylpdijf"
                class="animable"></path>
              <path
                d="M137.62,350.56a2.62,2.62,0,0,1-1,2.47c-.71.45-1.41.09-1.57-.82a2.59,2.59,0,0,1,1-2.47C136.75,349.28,137.46,349.65,137.62,350.56Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.334px 351.383px;" id="elj5riy7nr55i"
                class="animable"></path>
              <path
                d="M139.6,345.62a2.61,2.61,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C138.73,344.35,139.44,344.71,139.6,345.62Z"
                style="fill: rgb(38, 50, 56); transform-origin: 138.315px 346.447px;" id="elh2miojnphi"
                class="animable"></path>
              <path
                d="M134.48,348.91a2.59,2.59,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C133.62,347.64,134.32,348,134.48,348.91Z"
                style="fill: rgb(38, 50, 56); transform-origin: 133.195px 349.737px;" id="el1tne5rszuwc"
                class="animable"></path>
              <path
                d="M136.51,344a2.59,2.59,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.59,2.59,0,0,1,1-2.47C135.65,342.73,136.35,343.1,136.51,344Z"
                style="fill: rgb(38, 50, 56); transform-origin: 135.225px 344.828px;" id="ell23iphqq8vm"
                class="animable"></path>
              <path
                d="M137.67,350.59a2.59,2.59,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C136.81,349.32,137.51,349.68,137.67,350.59Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.385px 351.417px;" id="el9r7ejeum1lk"
                class="animable"></path>
              <path
                d="M139.65,345.66a2.6,2.6,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.83a2.59,2.59,0,0,1,1-2.46C138.79,344.38,139.49,344.75,139.65,345.66Z"
                style="fill: rgb(38, 50, 56); transform-origin: 138.365px 346.482px;" id="elw8svmas7qg"
                class="animable"></path>
              <path
                d="M134.53,349a2.6,2.6,0,0,1-1,2.47c-.7.45-1.41.08-1.57-.82a2.59,2.59,0,0,1,1-2.47C133.67,347.67,134.37,348,134.53,349Z"
                style="fill: rgb(38, 50, 56); transform-origin: 133.245px 349.802px;" id="elmidrrbw9wv"
                class="animable"></path>
              <path
                d="M136.56,344.05a2.59,2.59,0,0,1-1,2.46c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C135.7,342.77,136.4,343.14,136.56,344.05Z"
                style="fill: rgb(38, 50, 56); transform-origin: 135.275px 344.868px;" id="elkmllg4onc89"
                class="animable"></path>
              <path
                d="M137.72,350.63a2.6,2.6,0,0,1-1,2.47c-.7.45-1.41.08-1.57-.83a2.59,2.59,0,0,1,1-2.46C136.86,349.35,137.56,349.72,137.72,350.63Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.435px 351.452px;" id="eltwxzdnjq35g"
                class="animable"></path>
              <path
                d="M139.7,345.69a2.6,2.6,0,0,1-1,2.47c-.7.45-1.41.09-1.57-.82a2.61,2.61,0,0,1,1-2.47C138.84,344.41,139.54,344.78,139.7,345.69Z"
                style="fill: rgb(38, 50, 56); transform-origin: 138.415px 346.513px;" id="elyd73dvlmakl"
                class="animable"></path>
              <path
                d="M134.58,349a2.59,2.59,0,0,1-1,2.47c-.7.46-1.4.09-1.57-.82a2.61,2.61,0,0,1,1-2.47C133.72,347.7,134.42,348.07,134.58,349Z"
                style="fill: rgb(38, 50, 56); transform-origin: 133.296px 349.819px;" id="elomlg2oqm63"
                class="animable"></path>
              <path
                d="M136.61,344.08a2.6,2.6,0,0,1-1,2.47c-.7.45-1.41.08-1.57-.82a2.61,2.61,0,0,1,1-2.47C135.75,342.8,136.45,343.17,136.61,344.08Z"
                style="fill: rgb(38, 50, 56); transform-origin: 135.325px 344.902px;" id="el6yihxau5kzf"
                class="animable"></path>
              <path
                d="M137.77,350.66a2.6,2.6,0,0,1-1,2.47c-.7.45-1.4.09-1.56-.82a2.59,2.59,0,0,1,1-2.47C136.91,349.38,137.61,349.75,137.77,350.66Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.49px 351.483px;" id="elmdy2nn05k9"
                class="animable"></path>
              <path
                d="M139.76,345.72a2.61,2.61,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C138.89,344.45,139.6,344.82,139.76,345.72Z"
                style="fill: rgb(38, 50, 56); transform-origin: 138.475px 346.548px;" id="elhl0a90vnnxh"
                class="animable"></path>
              <path
                d="M134.64,349a2.61,2.61,0,0,1-1,2.46c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C133.77,347.74,134.48,348.11,134.64,349Z"
                style="fill: rgb(38, 50, 56); transform-origin: 133.354px 349.824px;" id="elnjiaa3m4tjf"
                class="animable"></path>
              <path
                d="M136.67,344.11a2.61,2.61,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C135.8,342.84,136.51,343.2,136.67,344.11Z"
                style="fill: rgb(38, 50, 56); transform-origin: 135.385px 344.937px;" id="elpbi396yv4bd"
                class="animable"></path>
              <path
                d="M137.83,350.69a2.61,2.61,0,0,1-1,2.47c-.71.46-1.41.09-1.57-.82a2.6,2.6,0,0,1,1-2.47C137,349.42,137.67,349.79,137.83,350.69Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.545px 351.518px;" id="el3ip2sy646da"
                class="animable"></path>
              <path
                d="M139.81,345.76a2.6,2.6,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.82a2.59,2.59,0,0,1,1-2.47C139,344.48,139.65,344.85,139.81,345.76Z"
                style="fill: rgb(38, 50, 56); transform-origin: 138.525px 346.582px;" id="elzo0axn9gmms"
                class="animable"></path>
              <path
                d="M134.69,349.05a2.6,2.6,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.82a2.59,2.59,0,0,1,1-2.47C133.83,347.77,134.53,348.14,134.69,349.05Z"
                style="fill: rgb(38, 50, 56); transform-origin: 133.405px 349.872px;" id="elyfvtdwcl7ak"
                class="animable"></path>
              <path
                d="M136.72,344.15a2.61,2.61,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.83a2.6,2.6,0,0,1,1-2.47C135.86,342.87,136.56,343.24,136.72,344.15Z"
                style="fill: rgb(38, 50, 56); transform-origin: 135.435px 344.97px;" id="el1ra3awbhg3h"
                class="animable"></path>
              <path
                d="M137.88,350.73a2.6,2.6,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.82a2.59,2.59,0,0,1,1-2.47C137,349.45,137.72,349.82,137.88,350.73Z"
                style="fill: rgb(38, 50, 56); transform-origin: 136.595px 351.552px;" id="elm2qws7d5dci"
                class="animable"></path>
              <path
                d="M139.86,345.79a2.59,2.59,0,0,1-1,2.47c-.7.46-1.41.09-1.57-.82a2.61,2.61,0,0,1,1-2.47C139,344.51,139.7,344.88,139.86,345.79Z"
                style="fill: rgb(38, 50, 56); transform-origin: 138.576px 346.615px;" id="elg2evuz9x51j"
                class="animable"></path>
              <path
                d="M134.74,349.08a2.59,2.59,0,0,1-1,2.47c-.7.46-1.41.09-1.57-.82a2.62,2.62,0,0,1,1-2.47C133.88,347.81,134.58,348.17,134.74,349.08Z"
                style="fill: rgb(38, 50, 56); transform-origin: 133.456px 349.907px;" id="elppzyfec1ybh"
                class="animable"></path>
              <polygon points="155.54 332.13 156.28 332.52 153.72 334.17 152.98 333.78 155.54 332.13"
                style="fill: rgb(38, 50, 56); transform-origin: 154.63px 333.15px;" id="el44k8bshd066"
                class="animable"></polygon>
              <polygon points="153.56 337.07 154.3 337.46 151.74 339.1 151 338.71 153.56 337.07"
                style="fill: rgb(38, 50, 56); transform-origin: 152.65px 338.085px;" id="el0chnsgg7kdcg"
                class="animable"></polygon>
              <polygon points="156.86 335.81 156.72 335.04 158.69 333.78 159.42 334.17 156.86 335.81"
                style="fill: rgb(38, 50, 56); transform-origin: 158.07px 334.795px;" id="el5vs30aa9pdt"
                class="animable"></polygon>
              <polygon points="151 338.71 151.74 339.1 152.32 342.39 151.58 342.01 151 338.71"
                style="fill: rgb(38, 50, 56); transform-origin: 151.66px 340.55px;" id="eluf42jqtb1l" class="animable">
              </polygon>
              <polygon points="154.72 343.65 155.46 344.04 154.88 340.75 154.28 341.14 154.72 343.65"
                style="fill: rgb(38, 50, 56); transform-origin: 154.87px 342.395px;" id="ell81bw8c4evh"
                class="animable"></polygon>
              <path
                d="M136.72,344.15a2.61,2.61,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.83a2.6,2.6,0,0,1,1-2.47C135.86,342.87,136.56,343.24,136.72,344.15Z"
                style="fill: #407BFF; transform-origin: 135.435px 344.97px;" id="elvz1s22hzina" class="animable">
              </path>
              <path
                d="M137.88,350.73a2.6,2.6,0,0,1-1,2.47c-.71.45-1.41.08-1.57-.82a2.59,2.59,0,0,1,1-2.47C137,349.45,137.72,349.82,137.88,350.73Z"
                style="fill: #407BFF; transform-origin: 136.595px 351.552px;" id="el0oupm7oz3ts" class="animable">
              </path>
              <path
                d="M139.86,345.79a2.59,2.59,0,0,1-1,2.47c-.7.46-1.41.09-1.57-.82a2.61,2.61,0,0,1,1-2.47C139,344.51,139.7,344.88,139.86,345.79Z"
                style="fill: #407BFF; transform-origin: 138.576px 346.615px;" id="elpvfxku458i9" class="animable">
              </path>
              <path
                d="M134.74,349.08a2.59,2.59,0,0,1-1,2.47c-.7.46-1.41.09-1.57-.82a2.62,2.62,0,0,1,1-2.47C133.88,347.81,134.58,348.17,134.74,349.08Z"
                style="fill: #407BFF; transform-origin: 133.456px 349.907px;" id="elrcsqsodu1xh" class="animable">
              </path>
            </g>
            <g id="freepik--Cloud--inject-1--inject-236" class="animable" style="transform-origin: 132.2px 84.4957px;">
              <path
                d="M161.32,64.69l-10.75,6.2a11.4,11.4,0,0,0,.09-1.42V66.36c0-5.54-3.89-7.79-8.68-5a16.64,16.64,0,0,0-5.18,5c-.79-7-6.25-9.56-12.89-5.73-7.18,4.15-13,14.23-13,22.51v4.66a12.32,12.32,0,0,0,1.1,5.4l-8.93,5.15a10.67,10.67,0,0,0-4.82,8.35c0,3.07,2.16,4.32,4.82,2.78l58.24-33.62a10.67,10.67,0,0,0,4.82-8.35C166.14,64.4,164,63.15,161.32,64.69Z"
                style="fill: rgb(240, 240, 240); transform-origin: 132.2px 84.4957px;" id="el8ow8tpmhtwy"
                class="animable"></path>
            </g>
            <g id="freepik--Character--inject-1--inject-236" class="animable"
              style="transform-origin: 284.04px 236.111px;">
              <path d="M384.67,344.11l-2-1.13,1.42-.64s1.11.3,1.14.35a5.7,5.7,0,0,1-.08.77Z"
                style="fill: rgb(224, 224, 224); transform-origin: 383.95px 343.225px;" id="el4vr09t60e4j"
                class="animable"></path>
              <path d="M384.67,344.11l-2-1.13,1.42-.64s1.11.3,1.14.35a5.7,5.7,0,0,1-.08.77Z"
                style="fill: #407BFF; transform-origin: 383.95px 343.225px;" id="eli2cach8l2co" class="animable">
              </path>
              <g id="elcuei3oono5j">
                <path d="M384.67,344.11l-2-1.13,1.42-.64s1.11.3,1.14.35a5.7,5.7,0,0,1-.08.77Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 383.95px 343.225px;" class="animable"
                  id="elv70i13mylh"></path>
              </g>
              <path
                d="M310.25,381.6a6.33,6.33,0,0,0,5.72,0l64.14-37-96-55.44-2.24-1.29-64.14,37c-1.57.91-1.57,2.4,0,3.3Z"
                style="fill: #407BFF; transform-origin: 298.331px 335.076px;" id="el44qrz7emr71" class="animable">
              </path>
              <g id="elh6imcn4hrfm">
                <path
                  d="M310.25,381.6a6.33,6.33,0,0,0,5.72,0l64.14-37-96-55.44-2.24-1.29-64.14,37c-1.57.91-1.57,2.4,0,3.3Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 298.331px 335.076px;"
                  class="animable" id="el1icuuwep2lc"></path>
              </g>
              <path
                d="M334.34,311.64l22.37,12.87,14.48-8.36L388,325.89V338c0,1.47-1.65,3.56-2.25,3.22a16.6,16.6,0,0,0-3.22,1.14,24.17,24.17,0,0,0-4.65,3.44l-51.4-29.67Z"
                style="fill: rgb(224, 224, 224); transform-origin: 357.24px 328.72px;" id="els03yiaqu7fo"
                class="animable"></path>
              <path
                d="M334.34,311.64l22.37,12.87,14.48-8.36L388,325.89V338c0,1.47-1.65,3.56-2.25,3.22a16.6,16.6,0,0,0-3.22,1.14,24.17,24.17,0,0,0-4.65,3.44l-51.4-29.67Z"
                style="fill: #407BFF; transform-origin: 357.24px 328.72px;" id="elpjfld98wug" class="animable"></path>
              <g id="elnhss3gfv0h9">
                <path
                  d="M334.34,311.64l22.37,12.87,14.48-8.36L388,325.89V338c0,1.47-1.65,3.56-2.25,3.22a16.6,16.6,0,0,0-3.22,1.14,24.17,24.17,0,0,0-4.65,3.44l-51.4-29.67Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 357.24px 328.72px;" class="animable"
                  id="eluuc00jvhv1"></path>
              </g>
              <path
                d="M316,381.59l3.87-2.24,58.07-33.52a3.7,3.7,0,0,1,.79-2.08,8.4,8.4,0,0,1,2.54-2.24,5.83,5.83,0,0,1,2.74-.85,2.92,2.92,0,0,1,1.8.59,9.87,9.87,0,0,0,1.07-4.8h2.2c0,3-1,6.08-2.23,6.78l-1.11.65c-.63.36-1.13.38-1.13,0v-.59c0-.66-1-.63-2.24.09s-2.23,1.82-2.23,2.48v.6c0,.34-.86,1.1-1.9,1.7l-56.16,32.43-6.08,3.5s0,0,0,0a6,6,0,0,1-2.85.67v-2.54A5.71,5.71,0,0,0,316,381.59Z"
                style="fill: #407BFF; transform-origin: 351.115px 360.605px;" id="el5diz4ib91in" class="animable">
              </path>
              <g id="eldrfbr4oko7q">
                <path
                  d="M316,381.59l3.87-2.24,58.07-33.52a3.7,3.7,0,0,1,.79-2.08,8.4,8.4,0,0,1,2.54-2.24,5.83,5.83,0,0,1,2.74-.85,2.92,2.92,0,0,1,1.8.59,9.87,9.87,0,0,0,1.07-4.8h2.2c0,3-1,6.08-2.23,6.78l-1.11.65c-.63.36-1.13.38-1.13,0v-.59c0-.66-1-.63-2.24.09s-2.23,1.82-2.23,2.48v.6c0,.34-.86,1.1-1.9,1.7l-56.16,32.43-6.08,3.5s0,0,0,0a6,6,0,0,1-2.85.67v-2.54A5.71,5.71,0,0,0,316,381.59Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 351.115px 360.605px;"
                  class="animable" id="eltqnqm5f68n"></path>
              </g>
              <path
                d="M216.53,326.47v2.59a2,2,0,0,0,1.14,1.62l0,0,86.47,49.92,6.07,3.5v0s0,0,0,0a6,6,0,0,0,2.85.67v-2.54a5.71,5.71,0,0,1-2.86-.69l-3.86-2.23h0l-88.67-51.21A2,2,0,0,1,216.53,326.47Z"
                style="fill: #407BFF; transform-origin: 264.795px 355.62px;" id="el80q7xwazb3u" class="animable">
              </path>
              <g id="elsk0azg2m0oh">
                <path
                  d="M216.53,326.47v2.59a2,2,0,0,0,1.14,1.62l0,0,86.47,49.92,6.07,3.5v0s0,0,0,0a6,6,0,0,0,2.85.67v-2.54a5.71,5.71,0,0,1-2.86-.69l-3.86-2.23h0l-88.67-51.21A2,2,0,0,1,216.53,326.47Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 264.795px 355.62px;" class="animable"
                  id="el20rldbd05mp"></path>
              </g>
              <path d="M313.11,365.16V380a3.76,3.76,0,0,0,1.9-.45l7-4.06,53.59-30.94,0-15.48Z"
                style="fill: rgb(255, 255, 255); transform-origin: 344.355px 354.536px;" id="elreagxdysotp"
                class="animable"></path>
              <path d="M219.32,312.86v11.41a4.21,4.21,0,0,0,1.9,3.3l83,47.9,7,4.06a3.79,3.79,0,0,0,1.9.45V366.73Z"
                style="fill: rgb(240, 240, 240); transform-origin: 266.22px 346.421px;" id="elrpxu2rx7s1o"
                class="animable"></path>
              <path
                d="M375.64,344.53a3.76,3.76,0,0,1,.81-2.08,8.5,8.5,0,0,1,2.54-2.23,5.69,5.69,0,0,1,2.73-.86,3,3,0,0,1,1.81.59V324.5l-7.87,4.55Z"
                style="fill: rgb(69, 90, 100); transform-origin: 379.585px 334.515px;" id="el6s300ze1o6q"
                class="animable"></path>
              <path d="M378.79,340.35a8,8,0,0,0-2.34,2.1,3.76,3.76,0,0,0-.81,2.08V329.77h3.14Z"
                style="fill: rgb(245, 245, 245); transform-origin: 377.215px 337.15px;" id="el8bm7bhsla29"
                class="animable"></path>
              <path
                d="M284.09,271l96,55.44v1.29c0,.71,1,1,2.23.26s2.24-1.6,2.24-2.83l.12-1.22-97.83-56.48-.39-.23a1.32,1.32,0,0,0-.17.59v.6C286.31,269.16,285.32,270.31,284.09,271Z"
                style="fill: #407BFF; transform-origin: 334.385px 297.826px;" id="ell54rowl3lu" class="animable">
              </path>
              <g id="ellotjshcqxyp">
                <path
                  d="M284.09,271l96,55.44v1.29c0,.71,1,1,2.23.26s2.24-1.6,2.24-2.83l.12-1.22-97.83-56.48-.39-.23a1.32,1.32,0,0,0-.17.59v.6C286.31,269.16,285.32,270.31,284.09,271Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 334.385px 297.826px;"
                  class="animable" id="elvskmwkbhxl"></path>
              </g>
              <path
                d="M316,363.51l62.72-36.22c.79-.41,1.52-.75,1.83-.59l-.41-.23-96-55.44-1.12-.65a3.67,3.67,0,0,0-3,.45l-62.23,35.94c-1.57.91-1.57,2.39,0,3.3l92.54,53.44A6.33,6.33,0,0,0,316,363.51Z"
                style="fill: #407BFF; transform-origin: 298.581px 317.21px;" id="elqln1y5h84ts" class="animable">
              </path>
              <g id="elo95102jndz">
                <path
                  d="M316,363.51l62.72-36.22c.79-.41,1.52-.75,1.83-.59l-.41-.23-96-55.44-1.12-.65a3.67,3.67,0,0,0-3,.45l-62.23,35.94c-1.57.91-1.57,2.39,0,3.3l92.54,53.44A6.33,6.33,0,0,0,316,363.51Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 298.581px 317.21px;" class="animable"
                  id="elr5bq0pwsh0s"></path>
              </g>
              <path
                d="M286.48,267.26l.39.23L384.7,324a.79.79,0,0,1,.21-.27l.33-.19.71-.4.87-.51a.89.89,0,0,1,1.11.1.5.5,0,0,1,.11.1,1.58,1.58,0,0,1,.29.41,2.8,2.8,0,0,1,.26.55,5.19,5.19,0,0,1,.19.63c.06.25.1.49.15.75a3.26,3.26,0,0,1,.05.45c0,.12,0,.23,0,.37s0,.56,0,.85v-2.75a5.86,5.86,0,0,0-2.86-4.39l-92.55-53.44a5.74,5.74,0,0,0-5.09-.37l-1.17.68,0,0-.5.28h0A1,1,0,0,0,286.48,267.26Z"
                style="fill: #407BFF; transform-origin: 337.73px 296.152px;" id="el6ki45irq4pv" class="animable">
              </path>
              <g id="el7jjjnya9fyc">
                <path
                  d="M286.48,267.26l.39.23L384.7,324a.79.79,0,0,1,.21-.27l.33-.19.71-.4.87-.51a.89.89,0,0,1,1.11.1.5.5,0,0,1,.11.1,1.58,1.58,0,0,1,.29.41,2.8,2.8,0,0,1,.26.55,5.19,5.19,0,0,1,.19.63c.06.25.1.49.15.75a3.26,3.26,0,0,1,.05.45c0,.12,0,.23,0,.37s0,.56,0,.85v-2.75a5.86,5.86,0,0,0-2.86-4.39l-92.55-53.44a5.74,5.74,0,0,0-5.09-.37l-1.17.68,0,0-.5.28h0A1,1,0,0,0,286.48,267.26Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 337.73px 296.152px;" class="animable"
                  id="elacb5hys4rh5"></path>
              </g>
              <path
                d="M316,363.52h0l3.88-2.25,44.61-25.74,14.24-8.22c1-.6,1.84-.81,1.89-.5,0,0,0,0,0,0v.64c0,.72,1,.72,2.23,0a3,3,0,0,0,1.76-2.24v-.7a1,1,0,0,1,.33-.84l.33-.19.71-.4.87-.51a.89.89,0,0,1,1.11.1.5.5,0,0,1,.11.1,1.24,1.24,0,0,1,.19.26.49.49,0,0,1,.1.15,2.8,2.8,0,0,1,.26.55,5.19,5.19,0,0,1,.19.63c.06.25.1.49.15.75a3.26,3.26,0,0,1,.05.45c0,.12,0,.23,0,.37s0,.56,0,.85v9.64h-2.2v-9.64c0-.23,0-.46,0-.68l-.06-.55a.09.09,0,0,0,0-.05c-.2,1.75-1.87,3.31-3.32,4.13a5.48,5.48,0,0,1-2.68.84,3,3,0,0,1-2-.73l-.2.11-.38.23-56.16,32.43L316,366.05h0l0,0a5.93,5.93,0,0,1-2.8.65v-2.54A5.9,5.9,0,0,0,316,363.52Z"
                style="fill: #407BFF; transform-origin: 351.105px 344.561px;" id="elup7entk8u2" class="animable">
              </path>
              <g id="el6fjzf7jprqc">
                <path
                  d="M316,363.52h0l3.88-2.25,44.61-25.74,14.24-8.22c1-.6,1.84-.81,1.89-.5,0,0,0,0,0,0v.64c0,.72,1,.72,2.23,0a3,3,0,0,0,1.76-2.24v-.7a1,1,0,0,1,.33-.84l.33-.19.71-.4.87-.51a.89.89,0,0,1,1.11.1.5.5,0,0,1,.11.1,1.24,1.24,0,0,1,.19.26.49.49,0,0,1,.1.15,2.8,2.8,0,0,1,.26.55,5.19,5.19,0,0,1,.19.63c.06.25.1.49.15.75a3.26,3.26,0,0,1,.05.45c0,.12,0,.23,0,.37s0,.56,0,.85v9.64h-2.2v-9.64c0-.23,0-.46,0-.68l-.06-.55a.09.09,0,0,0,0-.05c-.2,1.75-1.87,3.31-3.32,4.13a5.48,5.48,0,0,1-2.68.84,3,3,0,0,1-2-.73l-.2.11-.38.23-56.16,32.43L316,366.05h0l0,0a5.93,5.93,0,0,1-2.8.65v-2.54A5.9,5.9,0,0,0,316,363.52Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 351.105px 344.561px;"
                  class="animable" id="elbh3stftkw5g"></path>
              </g>
              <path
                d="M216.53,308.39V311a2,2,0,0,0,1.14,1.63l0,0,86.47,49.92,6.07,3.51h0a6,6,0,0,0,2.85.67v-2.54a5.82,5.82,0,0,1-2.86-.68l-3.86-2.23h0l-88.67-51.21A2,2,0,0,1,216.53,308.39Z"
                style="fill: #407BFF; transform-origin: 264.795px 337.56px;" id="elae33ylpw4dd" class="animable">
              </path>
              <g id="elw8mg7tptvd">
                <path
                  d="M216.53,308.39V311a2,2,0,0,0,1.14,1.63l0,0,86.47,49.92,6.07,3.51h0a6,6,0,0,0,2.85.67v-2.54a5.82,5.82,0,0,1-2.86-.68l-3.86-2.23h0l-88.67-51.21A2,2,0,0,1,216.53,308.39Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 264.795px 337.56px;" class="animable"
                  id="elxy8jymkkgf8"></path>
              </g>
              <path
                d="M279.94,270.83a3.67,3.67,0,0,1,3-.45l1.12.65c1.23-.72,2.22-1.87,2.22-2.58v-.6a1.32,1.32,0,0,1,.17-.59,1,1,0,0,1,.35-.4h0l.5-.28,0,0,1.17-.68a5.74,5.74,0,0,1,5.09.37l92.55,53.44.1.06L320.9,357.48a4.19,4.19,0,0,1-3.81,0l-93.15-54.31Z"
                style="fill: rgb(38, 50, 56); transform-origin: 305.075px 311.706px;" id="elbvf4rlt0357"
                class="animable"></path>
              <path d="M326.13,352l-2.47-1.42a4,4,0,0,1,2.07-.15C326.39,350.77,326.13,352,326.13,352Z"
                style="fill: #407BFF; transform-origin: 324.92px 351.179px;" id="elancj59z3b9a" class="animable">
              </path>
              <g id="elxjcl07nkesf">
                <path d="M326.13,352l-2.47-1.42a4,4,0,0,1,2.07-.15C326.39,350.77,326.13,352,326.13,352Z"
                  style="opacity: 0.7; transform-origin: 324.92px 351.179px;" class="animable" id="elct5nvt25k3j">
                </path>
              </g>
              <path d="M327.83,350.47a3,3,0,0,0-4.41,0c-2.41,2.21-2.53,4.4-3.53,4.37s-1-17.65-1-17.65L328.4,346Z"
                style="fill: #407BFF; transform-origin: 323.645px 346.015px;" id="elx2st36bah9f" class="animable">
              </path>
              <g id="el9i9eqy40ty6">
                <path d="M327.83,350.47a3,3,0,0,0-4.41,0c-2.41,2.21-2.53,4.4-3.53,4.37s-1-17.65-1-17.65L328.4,346Z"
                  style="opacity: 0.7; transform-origin: 323.645px 346.015px;" class="animable" id="elcbvq15jjhnj">
                </path>
              </g>
              <path
                d="M228.41,286.42l-.16-.09,1.52-.88,65.48-37.8,95.41,61.74c1.57.91,1.85,2.23.62,2.93l-2.23,1.29L327.85,349l-.44-.32Z"
                style="fill: #407BFF; transform-origin: 310.149px 298.325px;" id="el7lf6zqkeafn" class="animable">
              </path>
              <g id="elvjcjaczvy0j">
                <path
                  d="M228.41,286.42l-.16-.09,1.52-.88,65.48-37.8,95.41,61.74c1.57.91,1.85,2.23.62,2.93l-2.23,1.29L327.85,349l-.44-.32Z"
                  style="opacity: 0.5; transform-origin: 310.149px 298.325px;" class="animable" id="el6e1hon2wsmj">
                </path>
              </g>
              <path d="M319.68,328.85l4.74-1v19c-2.86,1.22-4.68,2.36-5,4.75Z"
                style="fill: rgb(69, 90, 100); transform-origin: 321.92px 339.725px;" id="elndyqm0qqglo"
                class="animable"></path>
              <path
                d="M326.51,347.1l60.63-35a4.21,4.21,0,0,0,1.91-3.3V290.09l-61.22,35.65s-.73,2.65-2.9,3.48-.51,1.68-.51,1.68v16C326.29,346.63,326.51,347.1,326.51,347.1Z"
                style="fill: rgb(240, 240, 240); transform-origin: 356.431px 318.595px;" id="eli5f4vmrzt3m"
                class="animable"></path>
              <path
                d="M320.92,328.2c.63-.36,1.13-.38,1.13,0v.59c0,.66,1,.63,2.24-.09s2.24-1.82,2.24-2.48v-.6c0-.34.85-1.1,1.89-1.7l-98.64-56.52-1.53.88a1.43,1.43,0,0,0-.38.82v.6c0,.66-1,1.77-2.23,2.48s-2.24.75-2.24.09v-.6c0-.34-.5-.31-1.12.05Z"
                style="fill: #407BFF; transform-origin: 275.35px 298.332px;" id="elekwyxnwzfm" class="animable"></path>
              <g id="el2iiuwx8njll">
                <path
                  d="M320.92,328.2c.63-.36,1.13-.38,1.13,0v.59c0,.66,1,.63,2.24-.09s2.24-1.82,2.24-2.48v-.6c0-.34.85-1.1,1.89-1.7l-98.64-56.52-1.53.88a1.43,1.43,0,0,0-.38.82v.6c0,.66-1,1.77-2.23,2.48s-2.24.75-2.24.09v-.6c0-.34-.5-.31-1.12.05Z"
                  style="opacity: 0.6; transform-origin: 275.35px 298.332px;" class="animable" id="elk67o495qjn">
                </path>
              </g>
              <path
                d="M228.41,268.33l-.16-.09,1.52-.88,65.48-37.8,95.41,55.1c1.57.91,1.85,2.22.62,2.93l-2.23,1.28-61.22,36.87Z"
                style="fill: #407BFF; transform-origin: 310.149px 277.65px;" id="elofzsvucwoyn" class="animable">
              </path>
              <g id="ela9lruq1a44m">
                <path
                  d="M228.41,268.33l-.16-.09,1.52-.88,65.48-37.8,95.41,55.1c1.57.91,1.85,2.22.62,2.93l-2.23,1.28-61.22,36.87Z"
                  style="opacity: 0.5; transform-origin: 310.149px 277.65px;" class="animable" id="el8jt79dg6lw6">
                </path>
              </g>
              <path d="M223.38,271.06,322,328l-3.45,2.7-98.25-56.72a3.76,3.76,0,0,1,1.31-1.83Z"
                style="fill: #407BFF; transform-origin: 271.15px 300.88px;" id="el0q874476xwyq" class="animable">
              </path>
              <g id="elrfocfchsg1">
                <path d="M223.38,271.06,322,328l-3.45,2.7-98.25-56.72a3.76,3.76,0,0,1,1.31-1.83Z"
                  style="opacity: 0.5; transform-origin: 271.15px 300.88px;" class="animable" id="elhkefcyorlg"></path>
              </g>
              <path
                d="M220.63,299.43a1.09,1.09,0,0,1-.17-.13.27.27,0,0,1-.11-.1,1.05,1.05,0,0,1-.2-.27.36.36,0,0,1-.1-.14,2.31,2.31,0,0,1-.25-.55,4.34,4.34,0,0,1-.2-.64c-.06-.24-.1-.48-.14-.74a2.32,2.32,0,0,1-.06-.45l0-.37c0-.27,0-.56,0-.85V278.9a13.29,13.29,0,0,1,.92-5l98.25,56.72.41,25.52-98.24-56.74Z"
                style="fill: #407BFF; transform-origin: 269.19px 315.02px;" id="elxffg4c54t9h" class="animable"></path>
              <g id="elulhyvx7hvu">
                <path
                  d="M220.63,299.43a1.09,1.09,0,0,1-.17-.13.27.27,0,0,1-.11-.1,1.05,1.05,0,0,1-.2-.27.36.36,0,0,1-.1-.14,2.31,2.31,0,0,1-.25-.55,4.34,4.34,0,0,1-.2-.64c-.06-.24-.1-.48-.14-.74a2.32,2.32,0,0,1-.06-.45l0-.37c0-.27,0-.56,0-.85V278.9a13.29,13.29,0,0,1,.92-5l98.25,56.72.41,25.52-98.24-56.74Z"
                  style="opacity: 0.7; transform-origin: 269.19px 315.02px;" class="animable" id="elqn854jechfq">
                </path>
              </g>
              <g id="elg29oc6myv4v">
                <path
                  d="M318.5,330.66h0s-77.38-36.21-84.42-39.53c-4.65-2.19-6.93,2.41-5.83,7.17,1,4.16,5.07,8.45,5.07,8.45h0l-12.65-7.31h0a1.09,1.09,0,0,1-.17-.13.27.27,0,0,1-.11-.1,1.05,1.05,0,0,1-.2-.27.36.36,0,0,1-.1-.14,2.31,2.31,0,0,1-.25-.55,4.34,4.34,0,0,1-.2-.64c-.06-.24-.1-.48-.14-.74a2.32,2.32,0,0,1-.06-.45l0-.37c0-.27,0-.56,0-.85V278.9a13.29,13.29,0,0,1,.92-5Z"
                  style="fill: rgb(38, 50, 56); opacity: 0.79; transform-origin: 268.97px 302.28px;" class="animable"
                  id="elrnloi5de8br"></path>
              </g>
              <path
                d="M317.59,335.63h2.2a10,10,0,0,1,1.06-4.8,3,3,0,0,0,1.81.59,5.69,5.69,0,0,0,2.73-.86,8.36,8.36,0,0,0,2.54-2.23,1.43,1.43,0,0,0,.14-.2,3.61,3.61,0,0,0,.65-1.88l58.07-33.52,2-1.15,2.52-1.45a1.32,1.32,0,0,0,.77-1.13v-2.57a1.35,1.35,0,0,1-.77,1.16l0,0-6.67,3.84-56.15,32.43c-1.05.6-1.9,1.36-1.9,1.7v.6a1.81,1.81,0,0,1-.52,1,6.26,6.26,0,0,1-1.72,1.44c-1.24.72-2.24.75-2.24.09v-.59c0-.35-.49-.32-1.12,0l-1.11.65C318.59,329.55,317.59,332.6,317.59,335.63Z"
                style="fill: #407BFF; transform-origin: 354.835px 311.03px;" id="elh1aomylolpr" class="animable">
              </path>
              <path
                d="M319.79,335.63v16.29c0,.23,0,.46,0,.68l.05.55a.09.09,0,0,0,0,.05c.2-1.75,1.87-3.31,3.32-4.13a5.49,5.49,0,0,1,2.69-.84,3,3,0,0,1,2,.73l.19-.11.39-.23,56.15-32.43,3.23-1.86.92-.54,2.72-1.57a1.28,1.28,0,0,0,.6-1.05v2.57a1.26,1.26,0,0,1-.56,1l0,0c-.32.19-.66.37-1,.58l-.63.37-1.08.62c-.24.15-.46.28-.67.39s-.33.2-.47.27l-.83.49-44.61,25.74-14.24,8.22c-1,.6-1.83.81-1.89.5a.59.59,0,0,1,0-.11v-.57c0-.72-1-.72-2.23,0a3,3,0,0,0-1.76,2.24v.7a1,1,0,0,1-.33.84l-.33.19-.7.4-.87.51a.89.89,0,0,1-1.11-.1.27.27,0,0,1-.11-.1,1,1,0,0,1-.2-.26h0a.71.71,0,0,1-.1-.14,2.31,2.31,0,0,1-.25-.55,3.87,3.87,0,0,1-.2-.63c-.06-.25-.1-.49-.14-.75a2.22,2.22,0,0,1-.06-.45c0-.12,0-.23,0-.37s0-.56,0-.85V335.63Z"
                style="fill: #407BFF; transform-origin: 354.865px 333.719px;" id="el7gzu1opxey3" class="animable">
              </path>
              <g id="el7v1b0om0weh">
                <g style="opacity: 0.6; transform-origin: 354.835px 321.349px;" class="animable" id="el9lujs92h56u">
                  <path
                    d="M317.59,335.63h2.2a10,10,0,0,1,1.06-4.8,3,3,0,0,0,1.81.59,5.69,5.69,0,0,0,2.73-.86,8.36,8.36,0,0,0,2.54-2.23,1.43,1.43,0,0,0,.14-.2,3.61,3.61,0,0,0,.65-1.88l58.07-33.52,2-1.15,2.52-1.45a1.32,1.32,0,0,0,.77-1.13v-2.57a1.35,1.35,0,0,1-.77,1.16l0,0-6.67,3.84-56.15,32.43c-1.05.6-1.9,1.36-1.9,1.7v.6a1.81,1.81,0,0,1-.52,1,6.26,6.26,0,0,1-1.72,1.44c-1.24.72-2.24.75-2.24.09v-.59c0-.35-.49-.32-1.12,0l-1.11.65C318.59,329.55,317.59,332.6,317.59,335.63Z"
                    id="elppq6i37x06" class="animable" style="transform-origin: 354.835px 311.03px;"></path>
                  <path
                    d="M319.79,335.63v16.29c0,.23,0,.46,0,.68l.05.55a.09.09,0,0,0,0,.05c.2-1.75,1.87-3.31,3.32-4.13a5.49,5.49,0,0,1,2.69-.84,3,3,0,0,1,2,.73l.19-.11.39-.23,56.15-32.43,3.23-1.86.92-.54,2.72-1.57a1.28,1.28,0,0,0,.6-1.05v2.57a1.26,1.26,0,0,1-.56,1l0,0c-.32.19-.66.37-1,.58l-.63.37-1.08.62c-.24.15-.46.28-.67.39s-.33.2-.47.27l-.83.49-44.61,25.74-14.24,8.22c-1,.6-1.83.81-1.89.5a.59.59,0,0,1,0-.11v-.57c0-.72-1-.72-2.23,0a3,3,0,0,0-1.76,2.24v.7a1,1,0,0,1-.33.84l-.33.19-.7.4-.87.51a.89.89,0,0,1-1.11-.1.27.27,0,0,1-.11-.1,1,1,0,0,1-.2-.26h0a.71.71,0,0,1-.1-.14,2.31,2.31,0,0,1-.25-.55,3.87,3.87,0,0,1-.2-.63c-.06-.25-.1-.49-.14-.75a2.22,2.22,0,0,1-.06-.45c0-.12,0-.23,0-.37s0-.56,0-.85V335.63Z"
                    id="elkp5n13tntqr" class="animable" style="transform-origin: 354.865px 333.719px;"></path>
                </g>
              </g>
              <path
                d="M220.25,273.93l93.38,53.92,70.58-40.75a1.16,1.16,0,0,0,0-2.2l-92.4-53.36-62,35.82h0l-1.53.89a1.42,1.42,0,0,0-.37.81v.6c0,.66-1,1.77-2.23,2.48a.93.93,0,0,1-.2.1l-2.06-1.19-1,.56-.14.07h0l-.72.42A3.78,3.78,0,0,0,220.25,273.93Z"
                style="fill: rgb(38, 50, 56); transform-origin: 302.626px 279.695px;" id="elruox1i2iazd"
                class="animable"></path>
              <path d="M379,287.5l-2.81-1.5,2.56-.61A1.91,1.91,0,0,1,379,287.5Z"
                style="fill: rgb(224, 224, 224); transform-origin: 377.699px 286.445px;" id="elm9k4f4whfc8"
                class="animable"></path>
              <g id="elsumrwyl2q">
                <path d="M379,287.5l-2.81-1.5,2.56-.61A1.91,1.91,0,0,1,379,287.5Z"
                  style="fill: rgb(224, 224, 224); opacity: 0.5; mix-blend-mode: multiply; transform-origin: 377.699px 286.445px;"
                  class="animable" id="ellj9mums240k"></path>
              </g>
              <path
                d="M304.53,325a6.31,6.31,0,0,0,5.71,0l64.14-37-96-60.69-2.25-1.3L212,268.25c-1.57.91-1.57,2.39,0,3.3Z"
                style="fill: #407BFF; transform-origin: 292.601px 275.846px;" id="eln3hythfe8u" class="animable">
              </path>
              <path
                d="M328.61,249.77l48.46,32.84-26.09-20,14.48-8.36L382.3,264v17.39c0,1.48-1.65,3.57-2.25,3.23a16.6,16.6,0,0,0-3.22,1.14,24.17,24.17,0,0,0-4.65,3.44l-51.39-34.93Z"
                style="fill: #407BFF; transform-origin: 351.545px 269.485px;" id="eluejwh6nba1q" class="animable">
              </path>
              <g id="elvy5k4ykf2eh">
                <path
                  d="M328.61,249.77l48.46,32.84-26.09-20,14.48-8.36L382.3,264v17.39c0,1.48-1.65,3.57-2.25,3.23a16.6,16.6,0,0,0-3.22,1.14,24.17,24.17,0,0,0-4.65,3.44l-51.39-34.93Z"
                  style="opacity: 0.2; transform-origin: 351.545px 269.485px;" class="animable" id="eleamiscahxic">
                </path>
              </g>
              <path d="M307.38,303.29v20.08a3.91,3.91,0,0,0,1.91-.45l7-4.06,53.6-30.94V267.18Z"
                style="fill: rgb(255, 255, 255); transform-origin: 338.635px 295.275px;" id="el3qkjqcvh2gp"
                class="animable"></path>
              <path d="M213.59,251v16.67a4.23,4.23,0,0,0,1.9,3.3l83,47.9,7,4.06a3.9,3.9,0,0,0,1.9.45V304.86Z"
                style="fill: rgb(240, 240, 240); transform-origin: 260.49px 287.19px;" id="ele0cl54xjvk"
                class="animable"></path>
              <path
                d="M369.92,287.92a3.74,3.74,0,0,1,.8-2.08,8.23,8.23,0,0,1,2.54-2.23,5.73,5.73,0,0,1,2.74-.86,2.85,2.85,0,0,1,1.8.42V262.63l-7.87,4.55Z"
                style="fill: rgb(69, 90, 100); transform-origin: 373.86px 275.275px;" id="el5kftv1kvhpp"
                class="animable"></path>
              <path d="M373.06,283.73a8.35,8.35,0,0,0-2.34,2.11,3.74,3.74,0,0,0-.8,2.08v-20h3.13Z"
                style="fill: rgb(245, 245, 245); transform-origin: 371.49px 277.92px;" id="elzkbm886kjg"
                class="animable"></path>
              <path
                d="M278.37,209.16l96,55.45v1.28c0,.72,1,1,2.23.27s2.25-1.61,2.25-2.84l.12-1.22-97.83-56.48-.4-.23a1.31,1.31,0,0,0-.16.6v.59C280.59,207.29,279.6,208.44,278.37,209.16Z"
                style="fill: #407BFF; transform-origin: 328.67px 235.989px;" id="elx2v0r5ahkrb" class="animable">
              </path>
              <g id="elnvxry05rcls">
                <path
                  d="M278.37,209.16l96,55.45v1.28c0,.72,1,1,2.23.27s2.25-1.61,2.25-2.84l.12-1.22-97.83-56.48-.4-.23a1.31,1.31,0,0,0-.16.6v.59C280.59,207.29,279.6,208.44,278.37,209.16Z"
                  style="opacity: 0.2; transform-origin: 328.67px 235.989px;" class="animable" id="el182csvzxunz">
                </path>
              </g>
              <path
                d="M310.24,301.64,373,265.43c.8-.42,1.53-.76,1.83-.6l-.41-.22-96-55.45-1.13-.64a3.58,3.58,0,0,0-3,.45L212,244.9c-1.57.91-1.57,2.4,0,3.3l92.55,53.44A6.31,6.31,0,0,0,310.24,301.64Z"
                style="fill: #407BFF; transform-origin: 292.826px 255.345px;" id="el9d41d7c0ml6" class="animable">
              </path>
              <path
                d="M280.75,205.39l.4.23L379,262.1a.79.79,0,0,1,.21-.27l.33-.18.7-.41.87-.51a.9.9,0,0,1,1.11.1.52.52,0,0,1,.11.1,2.17,2.17,0,0,1,.3.41,2.78,2.78,0,0,1,.25.55,6,6,0,0,1,.2.64c.05.24.1.48.14.74a3.4,3.4,0,0,1,.06.46l0,.36c0,.27,0,.56,0,.86V262.2a5.84,5.84,0,0,0-2.86-4.4l-92.55-53.44a5.73,5.73,0,0,0-5.09-.36l-1.17.68,0,0-.49.29h0A1,1,0,0,0,280.75,205.39Z"
                style="fill: #407BFF; transform-origin: 332.015px 234.259px;" id="elqabpxnfg73g" class="animable">
              </path>
              <path
                d="M310.24,325l3.87-2.24,58.07-33.53a3.77,3.77,0,0,1,.8-2.08,8.38,8.38,0,0,1,2.54-2.23,5.79,5.79,0,0,1,2.73-.85,2.89,2.89,0,0,1,1.81.59,10.07,10.07,0,0,0,1.06-4.81h2.2c0,3-1,6.08-2.23,6.79l-1.11.65c-.63.36-1.12.38-1.12,0v-.59c0-.66-1-.63-2.25.08s-2.23,1.83-2.23,2.49v.59c0,.34-.85,1.1-1.9,1.71L316.32,324l-6.08,3.51h0a6,6,0,0,1-2.85.67v-2.54A5.79,5.79,0,0,0,310.24,325Z"
                style="fill: #407BFF; transform-origin: 345.355px 304.015px;" id="elkpbrjrpu7qm" class="animable">
              </path>
              <g id="eluy32vrpydfs">
                <path
                  d="M310.24,325l3.87-2.24,58.07-33.53a3.77,3.77,0,0,1,.8-2.08,8.38,8.38,0,0,1,2.54-2.23,5.79,5.79,0,0,1,2.73-.85,2.89,2.89,0,0,1,1.81.59,10.07,10.07,0,0,0,1.06-4.81h2.2c0,3-1,6.08-2.23,6.79l-1.11.65c-.63.36-1.12.38-1.12,0v-.59c0-.66-1-.63-2.25.08s-2.23,1.83-2.23,2.49v.59c0,.34-.85,1.1-1.9,1.71L316.32,324l-6.08,3.51h0a6,6,0,0,1-2.85.67v-2.54A5.79,5.79,0,0,0,310.24,325Z"
                  style="opacity: 0.4; transform-origin: 345.355px 304.015px;" class="animable" id="el74i7ezrd2cn">
                </path>
              </g>
              <path
                d="M310.22,301.65h0l3.87-2.24,44.61-25.74L373,265.43c1-.59,1.84-.8,1.9-.49a0,0,0,0,1,0,0v.65c0,.71,1,.71,2.23,0a3,3,0,0,0,1.76-2.25v-.7a1,1,0,0,1,.33-.84l.33-.18.7-.41.87-.51a.9.9,0,0,1,1.11.1.52.52,0,0,1,.11.1,1.35,1.35,0,0,1,.2.27.85.85,0,0,1,.1.14,2.78,2.78,0,0,1,.25.55,6,6,0,0,1,.2.64c.05.24.1.48.14.74a3.4,3.4,0,0,1,.06.46l0,.36c0,.27,0,.56,0,.86v14.88h-2.2V265c0-.23,0-.47,0-.69l-.05-.55a.09.09,0,0,0,0,0c-.2,1.75-1.87,3.31-3.33,4.13a5.41,5.41,0,0,1-2.68.84,3,3,0,0,1-2-.73l-.19.11-.39.23-56.16,32.43-6.08,3.51h0l0,0a5.94,5.94,0,0,1-2.81.65v-2.54A5.9,5.9,0,0,0,310.22,301.65Z"
                style="fill: #407BFF; transform-origin: 345.345px 282.742px;" id="el6stydlck9iq" class="animable">
              </path>
              <g id="ela741qwonylh">
                <path
                  d="M310.22,301.65h0l3.87-2.24,44.61-25.74L373,265.43c1-.59,1.84-.8,1.9-.49a0,0,0,0,1,0,0v.65c0,.71,1,.71,2.23,0a3,3,0,0,0,1.76-2.25v-.7a1,1,0,0,1,.33-.84l.33-.18.7-.41.87-.51a.9.9,0,0,1,1.11.1.52.52,0,0,1,.11.1,1.35,1.35,0,0,1,.2.27.85.85,0,0,1,.1.14,2.78,2.78,0,0,1,.25.55,6,6,0,0,1,.2.64c.05.24.1.48.14.74a3.4,3.4,0,0,1,.06.46l0,.36c0,.27,0,.56,0,.86v14.88h-2.2V265c0-.23,0-.47,0-.69l-.05-.55a.09.09,0,0,0,0,0c-.2,1.75-1.87,3.31-3.33,4.13a5.41,5.41,0,0,1-2.68.84,3,3,0,0,1-2-.73l-.19.11-.39.23-56.16,32.43-6.08,3.51h0l0,0a5.94,5.94,0,0,1-2.81.65v-2.54A5.9,5.9,0,0,0,310.22,301.65Z"
                  style="opacity: 0.4; transform-origin: 345.345px 282.742px;" class="animable" id="elwp2d44vag1">
                </path>
              </g>
              <path
                d="M210.81,246.52v2.58a2,2,0,0,0,1.13,1.63l0,0,86.48,49.92,6.07,3.51h0a6,6,0,0,0,2.84.67v-2.54a5.78,5.78,0,0,1-2.85-.68l-3.86-2.23h0L212,248.2A1.94,1.94,0,0,1,210.81,246.52Z"
                style="fill: #407BFF; transform-origin: 259.07px 275.675px;" id="el050e7v8eozh5" class="animable">
              </path>
              <g id="elskmsa8t9w89">
                <path
                  d="M210.81,246.52v2.58a2,2,0,0,0,1.13,1.63l0,0,86.48,49.92,6.07,3.51h0a6,6,0,0,0,2.84.67v-2.54a5.78,5.78,0,0,1-2.85-.68l-3.86-2.23h0L212,248.2A1.94,1.94,0,0,1,210.81,246.52Z"
                  style="opacity: 0.2; transform-origin: 259.07px 275.675px;" class="animable" id="el1k2giq104fdh">
                </path>
              </g>
              <path
                d="M210.81,269.86v2.58a2,2,0,0,0,1.13,1.63l0,0L298.46,324l6.07,3.51h0a6,6,0,0,0,2.84.67v-2.54a5.78,5.78,0,0,1-2.85-.68l-3.86-2.23h0L212,271.54A1.94,1.94,0,0,1,210.81,269.86Z"
                style="fill: #407BFF; transform-origin: 259.09px 299.02px;" id="elcip9x2q2z" class="animable">
              </path>
              <g id="el2yld46ogzzz">
                <path
                  d="M210.81,269.86v2.58a2,2,0,0,0,1.13,1.63l0,0L298.46,324l6.07,3.51h0a6,6,0,0,0,2.84.67v-2.54a5.78,5.78,0,0,1-2.85-.68l-3.86-2.23h0L212,271.54A1.94,1.94,0,0,1,210.81,269.86Z"
                  style="opacity: 0.2; transform-origin: 259.09px 299.02px;" class="animable" id="elpicp90f79j">
                </path>
              </g>
              <polygon points="250.75 179.13 241.57 195.49 254.95 202.61 264.69 188.11 250.75 179.13"
                style="fill: rgb(255, 168, 167); transform-origin: 253.13px 190.87px;" id="elve9xgyux5u7"
                class="animable"></polygon>
              <path
                d="M283.32,142.28c-5.1-.87-12.82-1.1-17.84,7.51s-15.84,29.86-15.84,29.86,6.32,8.18,15.47,9.67l14.95-23.72Z"
                style="fill: #407BFF; transform-origin: 266.48px 165.598px;" id="el66bjqyl5syy" class="animable">
              </path>
              <rect x="259.85" y="342.64" width="11.42" height="19.55"
                style="fill: rgb(255, 168, 167); transform-origin: 265.56px 352.415px;" id="elkrpa7uvhr6"
                class="animable"></rect>
              <polygon points="238.21 337.88 226.79 338.27 226.22 317.58 237.63 317.19 238.21 337.88"
                style="fill: rgb(255, 168, 167); transform-origin: 232.215px 327.73px;" id="el85b51fwi6hi"
                class="animable"></polygon>
              <path
                d="M259.85,356.55v-1.63c-1.09.47-3.63,10.16-8.16,14.29-3.6,3.29-8.51,7.08-9.76,10.74-1.3,3.81,6.84,5.92,10.2,5.32,3.91-.69,10.69-3.44,12.39-6s2.5-6.31,3.88-8.18,4.57-4,5.32-6.13c.41-1.19-.08-3.79-.65-6-.53-2-1.11-4.24-1.8-4.05v1.24c-.83.92-3.12,1.83-5.71,1.93C263.89,358.16,259.84,357.83,259.85,356.55Z"
                style="fill: rgb(38, 50, 56); transform-origin: 257.831px 370.135px;" id="el6p9lrrerw95"
                class="animable"></path>
              <path
                d="M226.67,334.75c-.59,0-1.07.86-2.38,2.27a24.84,24.84,0,0,1-6.72,4.83C213.29,344,205,347.29,201.22,349c-2.35,1.06-2.24,3.9.19,5.52s8.29,2.78,15.34,1.2c3.83-.86,8.83-4.4,12-4.21s9.08.15,11.41-1.46,1.4-5,.74-8c-.72-3.22-1.75-8.15-2.82-7.93l0,1c-1.37,2.08-8.36,2.93-11.38,1.4Z"
                style="fill: rgb(38, 50, 56); transform-origin: 220.587px 345.292px;" id="el6k61gh66yfs"
                class="animable"></path>
              <path
                d="M317.27,223.75c2.5,17.65-.87,21-17.64,37.94-9,9.09-23.55,22.42-23.55,22.42s.21,5.64.32,18.28c.11,11.13-4.54,47.35-4.54,47.35s-7.58,3.19-12.78-.12c0,0-2.35-26.95-3.62-41-1.72-19-2.62-28.58-1.65-32.67.86-3.61,17.93-25.17,21.87-31.21L239.4,265.82a123.82,123.82,0,0,1,1.06,16.11c-.4,15.11-2.26,45.29-2.26,45.29s-8.3,3.71-12.42.51c0,0-10.45-66-10.45-71.42,0-8.23,35.74-32.8,42.51-38.52C261.7,214.53,266,211,266,211Z"
                style="fill: rgb(69, 90, 100); transform-origin: 266.669px 281.061px;" id="elcuclwfridtp"
                class="animable"></path>
              <path
                d="M275.68,244.75a26.23,26.23,0,0,1-8.29-11.83,59.52,59.52,0,0,0,1.29,9c1,3.92-29.28,23.9-29.28,23.9Z"
                style="fill: rgb(55, 71, 79); transform-origin: 257.54px 249.37px;" id="elhjrtvymnhic"
                class="animable"></path>
              <g id="elwrn5oglovme">
                <circle cx="280.06" cy="107.01" r="16.21"
                  style="fill: rgb(38, 50, 56); transform-origin: 280.06px 107.01px; transform: rotate(-76.81deg);"
                  class="animable" id="el3ig7rl598m3"></circle>
              </g>
              <path
                d="M314.12,152.1s4,3.28,4,13.64v22.37l-.57,37.62c-8,8.71-44,5.41-52.91-13.59,0,0,.07-39.71.07-48.61s5-20.45,18.6-21.25l17.62,4.1Z"
                style="fill: rgb(38, 50, 56); transform-origin: 291.38px 186.292px;" id="eldbyvxy6opwi"
                class="animable"></path>
              <path d="M308.08,118.54s-2.63,12.34-3.68,14.37a5.55,5.55,0,0,1-3.23,2.6l.18-8.68Z"
                style="fill: rgb(38, 50, 56); transform-origin: 304.625px 127.025px;" id="el0a1dm5sj8zln"
                class="animable"></path>
              <path d="M304.78,100.86a6.07,6.07,0,0,1,5,1.77c2.16,2.21.95,9.13-1.74,15.91l-4.95.57Z"
                style="fill: rgb(38, 50, 56); transform-origin: 306.99px 109.966px;" id="el3lc6wvkt4wr"
                class="animable"></path>
              <path
                d="M301.65,119.11c1,.59,2.41-1.31,3.63-2.59s5.22-3,7.21,1.17-1.76,9.93-4.9,10.92c-5.42,1.7-6.24-1.78-6.24-1.78l-.41,19.55c-4.67,5.22-20.64,4-17.63-.52v-6s-4.91.75-7.3.38c-4-.62-6.5-3.76-7.71-8.08-1.94-6.93-2.68-12.52-1-26.15,1.81-14.94,19.18-15.09,28.56-9.19S301.65,119.11,301.65,119.11Z"
                style="fill: rgb(255, 168, 167); transform-origin: 289.706px 121.498px;" id="ely8qz4n8m05"
                class="animable"></path>
              <path
                d="M287.84,122.53H287a5.53,5.53,0,0,1,0-11.06h.85a5.53,5.53,0,1,1,0,11.06ZM287,112.4a4.6,4.6,0,0,0,0,9.2h.85a4.6,4.6,0,1,0,0-9.2Z"
                style="fill: rgb(38, 50, 56); transform-origin: 287.433px 117px;" id="elic2iq35nbys"
                class="animable"></path>
              <path
                d="M271,122.53h-.85a5.53,5.53,0,1,1,0-11.06H271a5.53,5.53,0,0,1,0,11.06Zm-.85-10.13a4.6,4.6,0,0,0,0,9.2H271a4.6,4.6,0,0,0,0-9.2Z"
                style="fill: rgb(38, 50, 56); transform-origin: 270.567px 117px;" id="elmqbnj2ip1l8"
                class="animable"></path>
              <path
                d="M281.53,115.91a3.66,3.66,0,0,0-2.92-1.49,3,3,0,0,0-2.55,1l-.74-.56a3.82,3.82,0,0,1,3.34-1.33,4.54,4.54,0,0,1,3.67,1.93Z"
                style="fill: rgb(38, 50, 56); transform-origin: 278.825px 114.708px;" id="elwx4d2zlykn"
                class="animable"></path>
              <rect x="292.86" y="115.87" width="11.76" height="0.93"
                style="fill: rgb(38, 50, 56); transform-origin: 298.74px 116.335px;" id="elm5157mj2lvl"
                class="animable"></rect>
              <path
                d="M301.65,120.78c.5,0,2.39-3.14,3.63-4.26,1.71-1.56-.5-15.66-.5-15.66s1.65-3.51-1.65-7.13c-2.34-2.58-6.26-2.87-12.95-3.92-3.51-.55-8.83-1.54-12.34-2.19-4.18-.78-7.65-1.6-10.6,1a7.42,7.42,0,0,0-2.05,8.31,7.59,7.59,0,0,0,4.2,3.85s1.82,1.62,8.17,2.39,16.24-.14,17.59-.33c1.84-.25,2.23,1.53,3.23,6.41C299.25,113.5,300,120.75,301.65,120.78Z"
                style="fill: rgb(38, 50, 56); transform-origin: 285.305px 103.816px;" id="el67011d9990q"
                class="animable"></path>
              <path d="M304.77,102l6-3.23a3.31,3.31,0,0,0-4.54-1.5A3.6,3.6,0,0,0,304.77,102Z"
                style="fill: rgb(38, 50, 56); transform-origin: 307.584px 99.4418px;" id="elzd7mqxcfkal"
                class="animable"></path>
              <path
                d="M283.32,139.91s8.9-1.79,12-3.44a10.26,10.26,0,0,0,4.3-4.26,14,14,0,0,1-2.44,5c-2.28,2.91-13.87,5.05-13.87,5.05Z"
                style="fill: rgb(242, 143, 143); transform-origin: 291.465px 137.235px;" id="el5rc6vemx45k"
                class="animable"></path>
              <path d="M285.46,116.89a1.79,1.79,0,1,0,1.78-1.86A1.82,1.82,0,0,0,285.46,116.89Z"
                style="fill: rgb(38, 50, 56); transform-origin: 287.249px 116.82px;" id="elhqu6jkxr5i"
                class="animable"></path>
              <path d="M288.32,109.51l3.82,2.1a2.3,2.3,0,0,0-.89-3A2.13,2.13,0,0,0,288.32,109.51Z"
                style="fill: rgb(38, 50, 56); transform-origin: 290.349px 109.977px;" id="el4lkj40atypm"
                class="animable"></path>
              <path d="M284.13,129.2l-4.07,1.53a2.13,2.13,0,0,0,2.76,1.35A2.28,2.28,0,0,0,284.13,129.2Z"
                style="fill: rgb(242, 143, 143); transform-origin: 282.16px 130.705px;" id="eld6jp9f7kf5p"
                class="animable"></path>
              <path d="M269.1,111.07l3.48-2.67a2.1,2.1,0,0,0-3-.47A2.3,2.3,0,0,0,269.1,111.07Z"
                style="fill: rgb(38, 50, 56); transform-origin: 270.632px 109.284px;" id="eldftkuccdol8"
                class="animable"></path>
              <path d="M270.63,116.38a1.79,1.79,0,1,0,1.78-1.86A1.82,1.82,0,0,0,270.63,116.38Z"
                style="fill: rgb(38, 50, 56); transform-origin: 272.419px 116.31px;" id="el02azdd3rmkw3"
                class="animable"></path>
              <polygon points="279.44 114.95 279.24 125.76 272.85 124.35 279.44 114.95"
                style="fill: rgb(242, 143, 143); transform-origin: 276.145px 120.355px;" id="eldc5funjbs2f"
                class="animable"></polygon>
              <path
                d="M268.52,204.82v1a2.91,2.91,0,0,1-1.46,2.52l-27.77,16a2.91,2.91,0,0,1-2.91,0l-50.95-29.41a2.91,2.91,0,0,1-1.46-2.52v-.71l53.86,31.09Z"
                style="fill: #407BFF; transform-origin: 226.245px 208.215px;" id="elmo2zow8dcc" class="animable">
              </path>
              <g id="els61mav5yaw">
                <path
                  d="M268.52,204.82v1a2.91,2.91,0,0,1-1.46,2.52l-27.77,16a2.91,2.91,0,0,1-2.91,0l-50.95-29.41a2.91,2.91,0,0,1-1.46-2.52v-.71l53.86,31.09Z"
                  style="opacity: 0.6; transform-origin: 226.245px 208.215px;" class="animable" id="elhjl86c7f97">
                </path>
              </g>
              <path d="M184,191.71l30.21-17.44a1.74,1.74,0,0,1,1.74,0l52.4,30.26a.39.39,0,0,1,0,.67l-30.49,17.6Z"
                style="fill: #407BFF; transform-origin: 226.27px 198.418px;" id="el1zylo27q036" class="animable">
              </path>
              <g id="elsnaja3l3afm">
                <path d="M184,191.71l30.21-17.44a1.74,1.74,0,0,1,1.74,0l52.4,30.26a.39.39,0,0,1,0,.67l-30.49,17.6Z"
                  style="opacity: 0.5; transform-origin: 226.27px 198.418px;" class="animable" id="elxyjgqltqlgo">
                </path>
              </g>
              <polygon points="238.11 220.24 254.4 210.84 206.76 183.34 190.38 192.69 238.11 220.24"
                style="fill: rgb(38, 50, 56); transform-origin: 222.39px 201.79px;" id="elxbqeptano2h"
                class="animable"></polygon>
              <polygon
                points="246.12 194.1 245.82 194.27 237.83 198.88 223.63 190.68 223.34 190.51 231.62 185.73 246.12 194.1"
                style="fill: rgb(38, 50, 56); transform-origin: 234.73px 192.305px;" id="elzw26es621a8"
                class="animable"></polygon>
              <polygon points="245.82 194.27 237.83 198.88 223.63 190.68 231.62 186.07 245.82 194.27"
                style="fill: rgb(38, 50, 56); transform-origin: 234.725px 192.475px;" id="elemwlhma81tf"
                class="animable"></polygon>
              <g id="elrabrk7qu8g9">
                <path d="M237.83,222.8v1.94a2.9,2.9,0,0,1-1.45-.39l-50.95-29.41a2.91,2.91,0,0,1-1.46-2.52v-.71Z"
                  style="opacity: 0.7; transform-origin: 210.9px 208.225px;" class="animable" id="elg1a9fm4gbll">
                </path>
              </g>
              <path
                d="M237,223.23a3.42,3.42,0,0,1-3-.23l-50.72-29.28a3.44,3.44,0,0,1-1.68-2.41l-5.55-33.12a3.53,3.53,0,0,1-.05-.56,3.47,3.47,0,0,1,1-2.46l52.71,30.44A2.57,2.57,0,0,1,231,187.4Z"
                style="fill: #407BFF; transform-origin: 206.5px 189.321px;" id="el9ytcvj7zgyr" class="animable">
              </path>
              <g id="elukxy2x6z3m">
                <path
                  d="M237,223.23a3.42,3.42,0,0,1-3-.23l-50.72-29.28a3.44,3.44,0,0,1-1.68-2.41l-5.55-33.12a3.53,3.53,0,0,1-.05-.56,3.47,3.47,0,0,1,1-2.46l52.71,30.44A2.57,2.57,0,0,1,231,187.4Z"
                  style="opacity: 0.5; transform-origin: 206.5px 189.321px;" class="animable" id="el2c1erad8t54">
                </path>
              </g>
              <path
                d="M237.83,222.8l-.34.2a3.49,3.49,0,0,1-.48.23l-6-35.83a2.57,2.57,0,0,0-1.24-1.79l-52.71-30.44a3.39,3.39,0,0,1,.7-.53l52.82,30.49a2.57,2.57,0,0,1,1.24,1.79Z"
                style="fill: rgb(224, 224, 224); transform-origin: 207.445px 188.935px;" id="elr92ziglwgf"
                class="animable"></path>
              <path
                d="M208.44,192.66c-.37-2.21-2.66-5.16-5.11-6.57s-4.14-.77-3.76,1.45,2.66,5.16,5.11,6.58S208.82,194.88,208.44,192.66Z"
                style="fill: #407BFF; transform-origin: 204.005px 190.106px;" id="elz064791thra" class="animable">
              </path>
              <path
                d="M218.83,214.22A17.87,17.87,0,0,0,218,210c-.78-2.45-3.1-11.89-8.4-13.31a3.76,3.76,0,0,0-1.94-.06c-1.47.4-2.14,1.93-2.43,3.3a23.07,23.07,0,0,0,0,6.1,11.94,11.94,0,0,0-2.83-2.37,5.79,5.79,0,0,0-3.25-1.16,1,1,0,0,0-.85.4c-.19.35,0,.79.3,1.1.53.64,1.18,1.18,1.71,1.82a18.69,18.69,0,0,1,1.15,1.74c.67,1.08,1.42,2.1,2.17,3.13a21.9,21.9,0,0,0,5.34,5.52,20.13,20.13,0,0,0,8,3.19c3.87.48,7.63.42,10.07-.43Z"
                style="fill: rgb(255, 168, 167); transform-origin: 212.632px 208.116px;" id="elqygj93ypgnc"
                class="animable"></path>
              <path
                d="M313.06,152.39c-3.57-1.84-8.79,5.45-7.13,13.07s9.84,34.41,9.84,34.41-36.95,3.3-40.09,3.69c-2.19.26-4.64-.85-6.67-1.52-2.76-.92-5.55-1.56-8.27-2.56a3.51,3.51,0,0,0-1.51-.32,1.19,1.19,0,0,0-1.11.93,1.58,1.58,0,0,0,.23.89,11.67,11.67,0,0,0,3.81,4.44A17,17,0,0,1,264.4,207c.43.43,1.38,1.62,1,2.27l-14.68,8.45s3.38,2.94,15.62-.49a80.13,80.13,0,0,0,12.87-4.57s43.54,1.81,51.41-.57c2.78-.85,3.78-2.82,1.9-11.78C330.37,189.93,324.2,171,322.8,166,319.73,155.17,319,155.42,313.06,152.39Z"
                style="fill: rgb(255, 168, 167); transform-origin: 292.101px 185.497px;" id="elul9w36xiqbl"
                class="animable"></path>
              <path
                d="M311.22,150.84s5.9,1.66,8.44,5S332,191.49,332,191.49a23,23,0,0,1-18.66,5s-7.88-22.35-8.72-28.32C303.13,158.92,307.65,151.64,311.22,150.84Z"
                style="fill: #407BFF; transform-origin: 318.164px 173.834px;" id="eltn4a6gkuwg" class="animable">
              </path>
              <path
                d="M279.38,172.52c-.48-2.5,1.08-3.85,3.49-3a8.82,8.82,0,0,1,5.2,6C288.55,178.05,279.85,175,279.38,172.52Z"
                style="fill: #407BFF; transform-origin: 283.691px 172.868px;" id="elk36rlwyq4ep" class="animable">
              </path>
              <path
                d="M295.87,180.31l-7.09-4.51c.36,1.92-2.23,1.65-4.56.84s-5.18-2.45-5.55-4.37l-6.18-.08c-.57,0-.58.74,0,1.35,1.53,1.71,5.09,4.74,12.57,7.35s10.35,1.8,11.43,1C296.84,181.59,296.52,180.72,295.87,180.31Z"
                style="fill: #407BFF; transform-origin: 284.346px 177.43px;" id="eln5n7k16p1e" class="animable">
              </path>
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
      </div>

      <div class="row align-items-center">
        <div class="col-md-6 order-2 order-md-1" data-aos="fade-right">
          <h2>Komunitas Peluang</h2>
          <p class="line-clamp-3 line-height-md">Bergabunglah dengan MOOC Kabupaten Takalar dan temukan peluang baru.
            Saling berbagi pengetahuan dan pengalaman dengan jutaan orang dari berbagai belahan dunia. Bersama, kita
            dapat menciptakan komunitas pembelajaran yang beragam dan inklusif.</p>
        </div>

        <div class="col-md-6 order-1 mb-8 mb-md-0 order-md-2 text-right" data-aos="zoom-in">
          <svg class="animated" id="freepik_stories-kids-studying-from-home" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500" version="1.1"
            xmlns:svgjs="http://svgjs.com/svgjs">
            <style>
              svg#freepik_stories-kids-studying-from-home:not(.animated) .animable {
                opacity: 0;
              }

              svg#freepik_stories-kids-studying-from-home.animated #freepik--background-simple--inject-245 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                animation-delay: 0s;
              }

              svg#freepik_stories-kids-studying-from-home.animated #freepik--Pictures--inject-245 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                animation-delay: 0s;
              }

              svg#freepik_stories-kids-studying-from-home.animated #freepik--Plants--inject-245 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                animation-delay: 0s;
              }

              svg#freepik_stories-kids-studying-from-home.animated #freepik--Books--inject-245 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                animation-delay: 0s;
              }

              svg#freepik_stories-kids-studying-from-home.animated #freepik--Bookshelf--inject-245 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
                animation-delay: 0s;
              }

              svg#freepik_stories-kids-studying-from-home.animated #freepik--Desk--inject-245 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                animation-delay: 0s;
              }

              svg#freepik_stories-kids-studying-from-home.animated #freepik--character-1--inject-245 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                animation-delay: 0s;
              }

              svg#freepik_stories-kids-studying-from-home.animated #freepik--character-2--inject-245 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
                animation-delay: 0s;
              }

              svg#freepik_stories-kids-studying-from-home.animated #freepik--Device--inject-245 {
                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                animation-delay: 0s;
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
            </style>
            <g id="freepik--background-simple--inject-245" class="animable"
              style="transform-origin: 242.728px 217.397px;">
              <path
                d="M459.34,237.11c2.25-29.86-4.7-61-14-88.84-13.82-41.29-40.66-83.63-85.85-93.4-26.06-5.64-52.57.4-74.91,14.52-21.49,13.58-38.25,31.12-64.65,34.52-26.72,3.44-54.14,2-81,2-69,0-125.09,72.55-111.08,148.11s80.06,128,136.1,128c50.36,0,91.79-30.22,139.62-38.33,23.72-4,47.54.74,71-5.29,27.28-7,52.94-23.72,68.05-47.93C452.92,274,457.93,255.81,459.34,237.11Z"
                style="fill: rgb(64, 123, 255); transform-origin: 242.728px 217.397px;" id="el0c4kr8jw16c4"
                class="animable"></path>
              <g id="elkspwnb2ab2">
                <path
                  d="M459.34,237.11c2.25-29.86-4.7-61-14-88.84-13.82-41.29-40.66-83.63-85.85-93.4-26.06-5.64-52.57.4-74.91,14.52-21.49,13.58-38.25,31.12-64.65,34.52-26.72,3.44-54.14,2-81,2-69,0-125.09,72.55-111.08,148.11s80.06,128,136.1,128c50.36,0,91.79-30.22,139.62-38.33,23.72-4,47.54.74,71-5.29,27.28-7,52.94-23.72,68.05-47.93C452.92,274,457.93,255.81,459.34,237.11Z"
                  style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 242.728px 217.397px;"
                  class="animable"></path>
              </g>
            </g>
            <g id="freepik--Pictures--inject-245" class="animable" style="transform-origin: 276.575px 187.74px;">
              <rect x="172.3" y="125.84" width="73.61" height="102.05"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.25474px; transform-origin: 209.105px 176.865px;"
                id="el5th6ccmyh3u" class="animable"></rect>
              <rect x="181.35" y="138.39" width="55.51" height="76.96"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.25474px; transform-origin: 209.105px 176.87px;"
                id="elj73r8uqpea" class="animable"></rect>
              <rect x="329.56" y="178.54" width="51.29" height="71.1"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.25474px; transform-origin: 355.205px 214.09px;"
                id="elenwo7qo2df" class="animable"></rect>
              <rect x="335.87" y="187.28" width="38.68" height="53.62"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 1.25474px; transform-origin: 355.21px 214.09px;"
                id="el0fou41nvg2fs" class="animable"></rect>
            </g>
            <g id="freepik--Plants--inject-245" class="animable" style="transform-origin: 426.807px 336.003px;">
              <path
                d="M446.66,313.18s1-3.56,1-3.79c.38-2.7-.48-8.14-3.23-9.47a3.61,3.61,0,0,0-4.91,2.18c-.74,2,.19,4.51,1.3,6.22C442.12,310.32,446.65,313.18,446.66,313.18Z"
                style="fill: rgb(38, 50, 56); transform-origin: 443.5px 306.392px;" id="eliq0c067urxp"
                class="animable"></path>
              <path
                d="M392.46,312c2.19,1,7.55.84,7.56.84s-1.16-3.51-1.26-3.72c-1.17-2.46-4.89-6.52-7.92-6.11a3.6,3.6,0,0,0-2.89,4.52C388.45,309.63,390.6,311.19,392.46,312Z"
                style="fill: rgb(38, 50, 56); transform-origin: 393.919px 307.915px;" id="elhvgyrw89h6a"
                class="animable"></path>
              <path
                d="M400.78,301.14l.05,0c-.12.86-.24,1.78-.35,2.8-.18,1.87-.37,4-.43,6.3a64.11,64.11,0,0,0,.18,7.49,47.37,47.37,0,0,0,1.39,8.26l0,.09c-.48-.75-1.9-2.82-2-3-1.79-2.06-6.44-5-9.25-3.81a3.61,3.61,0,0,0-1.6,5.14c1,1.88,3.52,2.82,5.53,3.11,2.27.33,7.06-1,7.44-1.17a62,62,0,0,0,2.9,8c.65,1.52,1.36,3,2.1,4.54-.44-.64-.84-1.2-.9-1.28-1.78-2.06-6.44-5-9.25-3.8A3.61,3.61,0,0,0,395,339c1,1.89,3.52,2.82,5.54,3.12s6.14-.81,7.22-1.11c.29.57.57,1.15.86,1.73,1.38,2.75,2.78,5.5,4.06,8.23.45,1,.86,1.93,1.28,2.9-.39-.57-.72-1-.78-1.11-1.78-2.06-6.44-5-9.25-3.8a3.61,3.61,0,0,0-1.6,5.13c1,1.89,3.52,2.82,5.54,3.11s5.74-.69,7-1.05c.39,1,.79,2,1.13,3,.21.68.47,1.32.64,2s.38,1.36.57,2c.31,1.31.65,2.65.92,3.93.2.89.37,1.74.54,2.6-.44-1-1.34-2.84-1.43-3-1.45-2.3-5.61-5.91-8.57-5.16a3.62,3.62,0,0,0-2.36,4.83c.74,2,3.05,3.33,5,3.92,2.14.66,6.89.06,7.48,0,.29,1.42.55,2.8.78,4.11.72,4.11,1.19,7.62,1.51,10.22h2.05c-.37-2.65-.93-6.27-1.78-10.55-.29-1.44-.62-3-1-4.55a39.58,39.58,0,0,0,4.17-2c1.56,1.69,5.57,3.67,6.08,3.92-.54,1.34-1.08,2.64-1.61,3.85-1.65,3.8-3.18,6.95-4.35,9.29H427c1.06-2.28,2.37-5.18,3.76-8.58.56-1.36,1.13-2.82,1.7-4.33.58.12,5.27,1.07,7.46.58,2-.45,4.39-1.57,5.28-3.54a3.61,3.61,0,0,0-2-5c-2.89-1-7.31,2.32-8.93,4.51-.09.13-1,1.65-1.51,2.62.23-.62.46-1.22.69-1.86.46-1.25.88-2.52,1.34-3.89.2-.66.41-1.34.61-2s.36-1.4.54-2.11c.4-1.65.71-3.35,1-5.06,1.1.4,5,1.77,7.08,1.63s4.58-.89,5.75-2.7a3.61,3.61,0,0,0-1.21-5.23c-2.71-1.4-7.58,1.18-9.51,3.1-.12.12-1.35,1.65-2,2.51.16-1,.33-2.06.46-3.11.37-3,.66-6.1,1-9.17.09-.94.19-1.87.29-2.81.39.15,5,1.88,7.32,1.72,2-.14,4.58-.89,5.76-2.69a3.61,3.61,0,0,0-1.22-5.24c-2.71-1.4-7.57,1.18-9.51,3.1-.14.15-1.91,2.36-2.33,2.94.22-2.06.45-4.11.77-6.13a62.2,62.2,0,0,1,1.76-8.06c.18.07,5,1.9,7.36,1.73,2-.14,4.58-.88,5.75-2.69a3.62,3.62,0,0,0-1.21-5.24c-2.71-1.4-7.58,1.18-9.51,3.11-.13.12-1.47,1.8-2.1,2.62l-.15-.08a46.82,46.82,0,0,1,3.2-7.65c.69-1.36,1.43-2.62,2.18-3.83.87.43,4.85,2.37,7,2.45s4.65-.38,6-2.05a3.6,3.6,0,0,0-.63-5.33c-2.55-1.69-7.66.34-9.8,2-.11.09-1.19,1.16-2,1.95.35-.54.69-1.11,1-1.62,1.27-1.92,2.56-3.6,3.71-5.08.67-.84,1.28-1.58,1.86-2.27,1.08,0,5.39-.15,7.28-1s4-2.48,4.4-4.59a3.62,3.62,0,0,0-3-4.45c-3-.32-6.64,3.84-7.75,6.33-.1.21-1.21,3.75-1.15,3.75h.06c-.57.65-1.18,1.36-1.83,2.14-1.19,1.46-2.52,3.12-3.84,5a63.68,63.68,0,0,0-4,6.34,47.43,47.43,0,0,0-3.4,7.66l0,.09c0-.89,0-3.39-.05-3.58-.35-2.71-2.61-7.72-5.61-8.28a3.61,3.61,0,0,0-4.17,3.4c-.18,2.15,1.38,4.3,2.9,5.65,1.71,1.53,6.47,3,6.84,3.13a63.9,63.9,0,0,0-2,8.29c-.3,1.63-.54,3.29-.76,4.95,0-.77,0-1.47,0-1.56-.35-2.71-2.62-7.72-5.62-8.28a3.61,3.61,0,0,0-4.16,3.4c-.18,2.15,1.38,4.3,2.9,5.65s5.56,2.72,6.63,3.07l-.24,1.91c-.36,3.06-.72,6.12-1.15,9.11-.16,1.05-.35,2.08-.53,3.12,0-.69,0-1.27,0-1.36-.35-2.7-2.62-7.72-5.62-8.27a3.6,3.6,0,0,0-4.16,3.4c-.18,2.14,1.38,4.29,2.9,5.65s5.17,2.59,6.44,3c-.22,1.05-.44,2.11-.7,3.12-.2.68-.34,1.35-.58,2s-.43,1.35-.64,2c-.46,1.26-.93,2.56-1.41,3.78-.32.85-.65,1.65-1,2.46.16-1,.44-3.1.44-3.27a14,14,0,0,0-1.88-6.83,3.5,3.5,0,0,0-.05-.79,3.6,3.6,0,0,0-4.41-3.07c-2.95.79-4.82,6-5,8.69,0,.16.09,1.91.18,3-.15-.64-.29-1.26-.45-1.92-.31-1.31-.65-2.6-1-4-.2-.67-.41-1.34-.61-2s-.48-1.37-.72-2.06c-.58-1.6-1.25-3.19-2-4.77,1.14-.28,5.19-1.31,6.81-2.55s3.33-3.27,3.31-5.42a3.61,3.61,0,0,0-3.9-3.7c-3,.33-5.67,5.16-6.22,7.83,0,.17-.21,2.13-.29,3.21-.44-.95-.86-1.9-1.33-2.85-1.36-2.73-2.82-5.45-4.26-8.17l-1.31-2.51c.41-.09,5.24-1.21,7.06-2.61,1.61-1.24,3.32-3.26,3.31-5.42a3.62,3.62,0,0,0-3.9-3.7c-3,.33-5.67,5.17-6.22,7.84,0,.2-.3,3-.33,3.74-.95-1.84-1.89-3.68-2.74-5.54a65.09,65.09,0,0,1-3-7.69c.19,0,5.24-1.19,7.1-2.62,1.62-1.24,3.33-3.27,3.31-5.42a3.61,3.61,0,0,0-3.9-3.7c-3,.33-5.67,5.16-6.22,7.83,0,.18-.23,2.33-.3,3.35l-.17,0a45.56,45.56,0,0,1-1.55-8.15c-.18-1.52-.25-3-.3-4.4,1-.11,5.35-.7,7.17-1.8s3.67-2.88,3.89-5a3.62,3.62,0,0,0-3.47-4.11c-3.06,0-6.2,4.51-7,7.11-.05.14-.36,1.62-.56,2.71,0-.64,0-1.31,0-1.92,0-2.31.15-4.42.29-6.29.09-1.07.19-2,.3-2.92.88-.61,4.41-3.1,5.5-4.88s1.93-4.25,1.14-6.26a3.62,3.62,0,0,0-5-2c-2.71,1.4-3.42,6.86-3,9.55C399.71,297.6,400.73,301.17,400.78,301.14Z"
                style="fill: rgb(38, 50, 56); transform-origin: 427.026px 336.003px;" id="elhsxikjknyn8"
                class="animable"></path>
            </g>
            <g id="freepik--Books--inject-245" class="animable" style="transform-origin: 267.735px 405.813px;">
              <polygon points="260.84 388.22 218.15 388.22 187.31 404.87 233.86 404.87 260.84 388.22"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 224.075px 396.545px;"
                id="eler5gvrbpclb" class="animable"></polygon>
              <line x1="217.71" y1="392.25" x2="249.98" y2="392.25"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 233.845px 392.25px;"
                id="elvijhdt4ojqf" class="animable"></line>
              <line x1="212.75" y1="394.84" x2="245.02" y2="394.84"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 228.885px 394.84px;"
                id="eluoes7o88m5" class="animable"></line>
              <line x1="207.8" y1="397.43" x2="240.07" y2="397.43"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 223.935px 397.43px;"
                id="elyngq0i2gl0k" class="animable"></line>
              <line x1="202.85" y1="400.03" x2="235.12" y2="400.03"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 218.985px 400.03px;"
                id="elrouhp8wdpe" class="animable"></line>
              <polygon points="187.31 404.87 187.31 407.74 234.83 407.74 233.86 404.87 187.31 404.87"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 211.07px 406.305px;"
                id="elg9igiewvwzb" class="animable"></polygon>
              <polygon points="234.83 407.74 262.09 390.67 260.84 388.22 233.86 404.87 234.83 407.74"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 247.975px 397.98px;"
                id="elxvlssdaw4q7" class="animable"></polygon>
              <path d="M188.08,404a3.6,3.6,0,0,1-.11-.88,3.31,3.31,0,0,1,5.65-2.34"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 190.795px 401.906px;"
                id="elr6oy8gobri" class="animable"></path>
              <path d="M192.41,402a3.58,3.58,0,0,1-.11-.87,3.31,3.31,0,0,1,5.65-2.34"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 195.125px 399.911px;"
                id="elhj87y08kbeb" class="animable"></path>
              <path d="M196.4,400a3.58,3.58,0,0,1-.12-.87,3.32,3.32,0,0,1,5.66-2.34"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 199.11px 397.913px;"
                id="els0qfzpf8qz" class="animable"></path>
              <path d="M200.22,397.91a3.15,3.15,0,0,1-.12-.87,3.32,3.32,0,0,1,5.66-2.34"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 202.93px 395.823px;"
                id="el1d3ii8plg1y" class="animable"></path>
              <path d="M204.46,395.45a3.58,3.58,0,0,1-.11-.87,3.31,3.31,0,0,1,5.65-2.34"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 207.175px 393.361px;"
                id="elnri1e1daoq" class="animable"></path>
              <path d="M209,392.9a3.15,3.15,0,0,1-.12-.87,3.31,3.31,0,0,1,5.65-2.34"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 211.705px 390.811px;"
                id="elqsjbik1btyf" class="animable"></path>
              <path d="M211.44,391.37a3.15,3.15,0,0,1-.12-.87,3.31,3.31,0,0,1,5.65-2.35"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 214.145px 389.276px;"
                id="elul4q481pyfk" class="animable"></path>
              <path
                d="M266.56,398.17s3.25,7.16-2.14,9.22l32,20.54s3.11,1.79,7.07-1.77.66-11.37-1.12-12.36S266.56,398.17,266.56,398.17Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 284.888px 413.275px;"
                id="el73dictg9f" class="animable"></path>
              <path
                d="M306.66,381.88l-41.4,15.89,33.12,18a14.07,14.07,0,0,1,4.23,4.59,8.55,8.55,0,0,1,.45,1.43,4.78,4.78,0,0,1-7.13,5.11l-31.51-19.47s-2.93,0,.42,2.51C267.62,412,289,425,295.79,429a5.32,5.32,0,0,0,4.6.4l45.17-18.29a5.73,5.73,0,0,0,2.5-3.87,7.16,7.16,0,0,0-4.11-7.72Z"
                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 305.697px 405.813px;"
                id="elgcf0mpnb17l" class="animable"></path>
            </g>
            <g id="freepik--Bookshelf--inject-245" class="animable" style="transform-origin: 102.965px 258.01px;">
              <g style="clip-path: url(&quot;#freepik--clip-path--inject-245&quot;); transform-origin: 102.965px 258.01px;"
                id="el9jwpi6wlc3q" class="animable">
                <polygon
                  points="77.66 179.96 71.53 162.45 77.66 169.89 72.84 143.63 80.29 162.45 82.91 125.68 87.29 160.7 92.11 153.69 92.11 162.45 97.8 150.63 94.73 171.21 99.99 167.71 91.67 179.09 77.66 179.96"
                  style="fill: rgb(64, 123, 255); transform-origin: 85.76px 152.82px;" id="elvvtarbh178a"
                  class="animable"></polygon>
                <polygon points="96.92 175.59 74.16 175.59 78.25 221.55 92.83 221.55 96.92 175.59"
                  style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 85.54px 198.57px;"
                  id="el4sjzqc5dfu8" class="animable"></polygon>
                <rect x="62.06" y="221.02" width="77.55" height="164.27"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 100.835px 303.155px;"
                  id="ela4v38kvcxr" class="animable"></rect>
                <rect x="100.84" y="221.02" width="43.03" height="164.27"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 122.355px 303.155px;"
                  id="elyh6wly5sjea" class="animable"></rect>
                <rect x="100.84" y="221.02" width="38.18" height="164.27"
                  style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 119.93px 303.155px;"
                  id="elsurzp4u6ohh" class="animable"></rect>
                <rect x="100.84" y="347.11" width="33.89" height="33.64"
                  style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 117.785px 363.93px;"
                  id="ela25qh7sieso" class="animable"></rect>
                <rect x="100.84" y="348.93" width="33.89" height="4.31"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 117.785px 351.085px;"
                  id="elzk8zgwnp3al" class="animable"></rect>
                <rect x="100.84" y="373.69" width="33.89" height="4.31"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 117.785px 375.845px;"
                  id="ellvyy0w3kgj" class="animable"></rect>
                <line x1="107.27" y1="347.8" x2="107.27" y2="390.34"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 107.27px 369.07px;"
                  id="elj4hxdew9u7" class="animable"></line>
                <line x1="119.09" y1="347.8" x2="119.09" y2="390.34"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 119.09px 369.07px;"
                  id="elmsuqm41ff" class="animable"></line>
                <line x1="129.46" y1="347.8" x2="129.46" y2="390.34"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 129.46px 369.07px;"
                  id="elove2c1emm9e" class="animable"></line>
                <rect x="100.84" y="227.13" width="33.89" height="49.46"
                  style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 117.785px 251.86px;"
                  id="els420bf1p31" class="animable"></rect>
                <rect x="100.84" y="229.2" width="33.89" height="4.9"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 117.785px 231.65px;"
                  id="elrxeek6p86f" class="animable"></rect>
                <rect x="100.84" y="260.9" width="33.89" height="4.9"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 117.785px 263.35px;"
                  id="elsdxjccslq8e" class="animable"></rect>
                <line x1="107.27" y1="227.92" x2="107.27" y2="276.25"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 107.27px 252.085px;"
                  id="eld59m7dxbdwc" class="animable"></line>
                <line x1="119.09" y1="227.92" x2="119.09" y2="276.25"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 119.09px 252.085px;"
                  id="elt6kldmavb5l" class="animable"></line>
                <line x1="129.46" y1="227.92" x2="129.46" y2="276.25"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 129.46px 252.085px;"
                  id="eljgj5t20l49" class="animable"></line>
                <rect x="100.84" y="286.74" width="33.89" height="49.46"
                  style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 117.785px 311.47px;"
                  id="elqi7z7hc89x" class="animable"></rect>
                <rect x="100.84" y="288.81" width="33.89" height="4.9"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 117.785px 291.26px;"
                  id="elozmriv9v4go" class="animable"></rect>
                <rect x="100.84" y="320.52" width="33.89" height="4.9"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 117.785px 322.97px;"
                  id="el40l8yqv8vw1" class="animable"></rect>
                <line x1="107.27" y1="287.53" x2="107.27" y2="335.86"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 107.27px 311.695px;"
                  id="eldou2ju4wvyw" class="animable"></line>
                <line x1="119.09" y1="287.53" x2="119.09" y2="335.86"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 119.09px 311.695px;"
                  id="elqi8xlpdhl4e" class="animable"></line>
                <line x1="129.46" y1="287.53" x2="129.46" y2="335.86"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 129.46px 311.695px;"
                  id="el69k3w6tiool" class="animable"></line>
                <rect x="100.84" y="275.91" width="38.78" height="5.62"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 120.23px 278.72px;"
                  id="eleaespydvys" class="animable"></rect>
                <rect x="100.84" y="335.9" width="38.78" height="5.62"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 120.23px 338.71px;"
                  id="elkdco4qgxa1" class="animable"></rect>
                <line x1="139.62" y1="221.02" x2="139.62" y2="385.29"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 139.62px 303.155px;"
                  id="elaksiyp6s3fc" class="animable"></line>
                <polygon
                  points="95.38 221.02 95.38 385.29 100.84 385.29 100.84 227.13 138.95 227.13 138.95 220.96 95.38 221.02"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 117.165px 303.125px;"
                  id="elxrjn156c1o" class="animable"></polygon>
                <line x1="100.84" y1="227.13" x2="100.84" y2="221.02"
                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 100.84px 224.075px;"
                  id="elthmop4x35j" class="animable"></line>
              </g>
            </g>
            <g id="freepik--Desk--inject-245" class="animable" style="transform-origin: 251.82px 384.37px;">
              <line x1="473.45" y1="384.37" x2="30.19" y2="384.37"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 251.82px 384.37px;"
                id="el4m47thu4i4t" class="animable"></line>
            </g>
            <g id="freepik--character-1--inject-245" class="animable" style="transform-origin: 179.634px 313.42px;">
              <path
                d="M260,317.45H190.7c-8.6-.66-9.12,2.76-9.12,2.76l-13,64.19h85.56c.45-3.21,7.2-50.68,8.47-58.35C263.94,318.11,260,317.45,260,317.45Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 215.732px 350.883px;"
                id="el961xl49a4o" class="animable"></path>
              <path
                d="M260,317.45h-.13c-.5,0-2.37.5-3.51,5.62s-7.65,49.12-9.45,61.33h7.26c.45-3.21,7.2-50.68,8.47-58.35C263.94,318.11,260,317.45,260,317.45Z"
                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 254.907px 350.925px;"
                id="elig00yru8ffb" class="animable"></path>
              <path
                d="M147.63,384.4h80.65c-.42-12.61-2-58.08-3.2-63.72-1.38-6.56-4.83-7.59-9.66-7.94s-8.42.9-18.08.9-19-1-19-1-3.79-.35-5.86-.35-3.45,1.38-6.21,1.38a125.69,125.69,0,0,1-14.84-.69c-5.18-.69-11.39,2.07-12.42,7.25-.9,4.5-3,52.26-3.53,64.57h12.13Z"
                style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 181.88px 348.545px;"
                id="elcbjluwrncrn" class="animable"></path>
              <path d="M170.92,319.69s2.85,13.68,10.82,17.09"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 176.33px 328.235px;"
                id="el6dkikb11bj5" class="animable"></path>
              <path d="M163.51,317.41s-4,8.55,1.71,21.08"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 163.684px 327.95px;"
                id="elnxe9ov69m4s" class="animable"></path>
              <path d="M210.8,335.08s-9.11,23.35-29.06,34.18"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 196.27px 352.17px;"
                id="el7e11lp5wi9o" class="animable"></path>
              <path
                d="M173.19,304.67s.69,9.66,1.72,15.18,6.9,9,13.46,6.9,9.31-6.55,9.66-9.66.34-14.83.34-14.83S188,309.16,173.19,304.67Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 185.78px 314.814px;"
                id="elmxuhm14d08" class="animable"></path>
              <path
                d="M208.59,249.71s.94-1.25-1.56-5-8.44-6.25-8.44-6.25l3.75,5s-10.62-5.62-15-5.62S172,239.4,172,239.4l5.31,1.25s-13.12,4.06-14.68,5.93-9.06,8.13-7.5,8.13,9.37-1.25,9.37-1.25-7.81,7.5-7.81,10.62,6.87,18.12,6.87,18.12,4.69,8.44,6.25,4.37-.94-13.74-.62-14.68,18.43-2.5,22.49-2.5,3.44,9.69,5,11.25S205.78,285,207,285s3.44-.93,3.44-2.18A23.83,23.83,0,0,1,212,275c1.25-3.13,2.81-5.94,3.12-9.69s-1.87-12.18-1.87-12.18h2.81S213.28,248.46,208.59,249.71Z"
                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 185.489px 262.76px;"
                id="elm7blst4k2y" class="animable"></path>
              <path d="M165.17,280s-1.57-5.93-4.38-1.87c-1.81,2.62,2.81,13.12,5.31,13.75S165.17,280,165.17,280Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 163.696px 284.306px;"
                id="elj4z41ctvgk8" class="animable"></path>
              <path
                d="M165.17,268.14s0,22.81,1.56,28.43,7.81,14.06,16.87,14.06,15.31-4.69,17.81-8.12,3.74-10.31,3.74-10.31,2.82,2.19,6.25-1.88,3.93-11.29,2.5-12.18c-2.5-1.56-5.31.31-6.56,1.56l-2.5,2.5s-4.06-2.81-4.06-6.56.63-10.62.63-10.62l-2.82,1.87.32-2.5s-.63.63-4.38.63-12.81.62-12.81.62l4.69-6.25s-9.06,4.07-12.18,5.94S165.17,268.14,165.17,268.14Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 189.91px 285.01px;"
                id="elo8m3gwbb6me" class="animable"></path>
              <path
                d="M176.91,281.83c0,1.69-.67,3.07-1.5,3.07s-1.5-1.38-1.5-3.07.67-3.07,1.5-3.07S176.91,280.14,176.91,281.83Z"
                style="fill: rgb(38, 50, 56); transform-origin: 175.41px 281.83px;" id="elb77t2swcgiu"
                class="animable"></path>
              <path
                d="M191.37,282.25c0,1.69-.67,3.06-1.5,3.06s-1.5-1.37-1.5-3.06.67-3.07,1.5-3.07S191.37,280.55,191.37,282.25Z"
                style="fill: rgb(38, 50, 56); transform-origin: 189.87px 282.245px;" id="eltvwpj27p2h"
                class="animable"></path>
              <path d="M179.41,289.08s0,4.39,5.44,3.34"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 182.13px 290.831px;"
                id="elv15sfwc95b" class="animable"></path>
              <path d="M177.74,297s4.39,2.71,10.46-.21"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 182.97px 297.467px;"
                id="eldzmc8nfsqya" class="animable"></path>
              <path d="M170,275.9a4.84,4.84,0,0,1,5.65-2.3"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 172.825px 274.645px;"
                id="elh92ozw4j1hb" class="animable"></path>
              <path d="M186.94,273.6s5-1.46,6.9,1.89"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 190.39px 274.387px;"
                id="elwm94u6sv8o" class="animable"></path>
              <path
                d="M139.63,318.24l-13.86,38.17s-8.88,6.45-9.83,8.12c-2.39,4.17.72,10.09,3.59,13.18,4.52,4.85,13.71,5.54,19.21,1.94,3.61-2.36,5.73-7.16,7.09-11.11L147.29,335"
                style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 131.19px 350.083px;"
                id="elcu5vb7uhh5d" class="animable"></path>
              <path d="M119.77,359.76s7.11-5.85,18.82.84"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 129.18px 358.996px;"
                id="elnhpwfm85fvn" class="animable"></path>
              <path
                d="M125.91,362.62l9.39,2s9-3.67,9.79.41-5.3,5.31-6.94,5.31-5.71-.41-7.34,0-3.67,2.44-7.34,2.85c0,0-10.2,4.08-14.28,1.63s-.82-11,4.49-13.87S125.91,362.62,125.91,362.62Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 126.257px 367.801px;"
                id="elodn0xml4pp" class="animable"></path>
              <path d="M105,365.64s-4-2.38-5.26.65-4.93,10.06-2.64,9.43S105,365.64,105,365.64Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 100.682px 370.256px;"
                id="elwhxdwgb8o9" class="animable"></path>
              <path
                d="M111.23,361.4s-6.58-.71-7.35,1.22c-1.42,3.59-3.26,13.47-.4,14.28s3.67-5.3,5.3-9A55.79,55.79,0,0,0,111.23,361.4Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 106.602px 369.123px;"
                id="elxfngxyapdzh" class="animable"></path>
              <path d="M114.9,357.32s-4.9-.41-6.53,2.86-2.58,16.34-1,16.34,1.18,1.29,3.63-4c1.2-2.59,3-11.11,3-11.11Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 110.73px 366.981px;"
                id="elcz8mufmf3cu" class="animable"></path>
              <path
                d="M127.09,363.73s-6.5-5.54-8.21-6.49-2.87-1.34-4.78.38-2.29,7.83-3.81,11.65-3.06,7.82-1.15,7.82,3.63-.95,5.15-3,4.4-9.55,4.4-9.55"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 117.671px 366.759px;"
                id="elcceqzi3d3tp" class="animable"></path>
              <path d="M117.73,368.31s2.29,1,5.54-1.15"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 120.5px 367.851px;"
                id="elyq7dnoyey4" class="animable"></path>
              <path
                d="M213.82,312.47s7.81-1.5,11.6,2.3,14.7,32.3,18.5,42,7.59,16.56,6.55,21.39-9,6.55-14.83,6.9c-6.63.39-11-3.8-11-5.18s-2.42-4.48,2.07-15.18l-3.11-22.77"
                style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 232.232px 348.632px;"
                id="elcz5s9d2lklr" class="animable"></path>
              <path
                d="M234.2,366.24s-6.56-2.85-7.66-2.85a6.72,6.72,0,0,0-1.53,3.94c0,2.19.22,11.16,1.31,11.6s4.38-1.53,6.57-4.59S235.51,366.89,234.2,366.24Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 229.974px 371.191px;"
                id="elkcfx9z7rvan" class="animable"></path>
              <path
                d="M229.39,354l-3.72,30.17L227,389l2.19-4.16,3.94-30.42a1.87,1.87,0,0,0-1.64-2.06h0A1.86,1.86,0,0,0,229.39,354Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 229.406px 370.671px;"
                id="elvlbiac1cqt" class="animable"></path>
              <polygon points="229.17 384.84 225.67 384.18 226.98 389 229.17 384.84"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 227.42px 386.59px;"
                id="elsu6hvvqxq1" class="animable"></polygon>
              <path d="M231.47,352.36a1.86,1.86,0,0,0-2.08,1.65l-.48,3.9,3.65.73.55-4.22A1.87,1.87,0,0,0,231.47,352.36Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 231.016px 355.493px;"
                id="eldnyqkud0rx" class="animable"></path>
              <path
                d="M226.54,363.39c-1.09,0-3.28,2.85-4.59,4.38s-.88,4.81.21,7.44,1.54,7.44,2.85,7.66,2.41-1.09,2.41-3.5-.44-7.44-.44-7.44"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 224.28px 373.142px;"
                id="elyf1of2q2rji" class="animable"></path>
              <path d="M241.2,378.93s1.54,4.16-.21,6.35-7.45,1.31-8.54.44S237.27,383.31,241.2,378.93Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 237.072px 382.792px;"
                id="elp0l3fv0jq5b" class="animable"></path>
              <path
                d="M240.55,375a4.63,4.63,0,0,1,.87,4.82c-1.09,2.84-5,5.25-7.88,5.69s-5.25-1.1-3.93-2S237.48,378.28,240.55,375Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 235.492px 380.294px;"
                id="elh5727xuognm" class="animable"></path>
              <path
                d="M237.92,370.18s2.63,2.4,2.63,4.81-6.35,8.1-9.41,9.19-4.6,0-3.72-2,9.63-11.81,9.63-11.81S236.61,369.74,237.92,370.18Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 233.862px 377.318px;"
                id="elizmqjmwoej" class="animable"></path>
              <path
                d="M230.48,370.18s-4.81,8.31-5.47,10.94,1.75,2.63,3.28,1.53,8.76-9.85,9.63-12.47-.65-5.47-3.5-5S230.48,370.18,230.48,370.18Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 231.531px 374.237px;"
                id="elm56v5jq4fmc" class="animable"></path>
            </g>
            <g id="freepik--character-2--inject-245" class="animable"
              style="transform-origin: 295.118px 285.543px;">
              <path
                d="M403.83,384.35c1.42-10.36,7.11-51.88,8.27-58.81,1.32-7.94-2.65-8.6-2.65-8.6H340.18c-8.6-.66-9.12,2.76-9.12,2.76L318.4,384.35Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 365.384px 350.603px;"
                id="elmy8r35raiy" class="animable"></path>
              <path
                d="M403.83,384.35c1.42-10.36,7.11-51.88,8.27-58.81,1.32-7.94-2.65-8.6-2.65-8.6h-.13c-.5,0-2.37.5-3.5,5.62-1.08,4.85-7.07,47-9.23,61.79Z"
                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 404.479px 350.645px;"
                id="elo1pgcff1kb" class="animable"></path>
              <path
                d="M262.63,384.35c5.28-5.78,22.11-24.18,26.36-28.44,5.07-5.07,8.93-9.89,8.93-9.89l1.45,38.33h80.32c-.09-.52-4.62-29.34-8.44-49.18-3.86-20-7.72-39.08-16.4-51.14s-34.5-24.36-34.5-24.36L298.16,277s-6.51,7.72-8.44,15.2-6.76,26.53-8.93,34c-2,6.85-26.64,50.8-30.76,58.11Z"
                style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 314.86px 322.01px;"
                id="el8zt5kd1j1if" class="animable"></path>
              <path d="M353.3,318.27c4.28,20.46,8.05,39.28,12,59.23"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 359.3px 347.885px;"
                id="eltd5mq8j3td" class="animable"></path>
              <path d="M335.45,324.22c3.31,17,5.82,35.84,9.1,53.36"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 340px 350.9px;"
                id="el9nbu18n3ucn" class="animable"></path>
              <path d="M316,287.43c2.72,30,5.22,60.08,8.66,90"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 320.33px 332.43px;"
                id="el44fe2fwlnk5" class="animable"></path>
              <path d="M298.11,295.55c3,28.12,5.52,54.47,9.06,82.05"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 302.64px 336.575px;"
                id="el6fhuh3f25eb" class="animable"></path>
              <path d="M291.62,301.5s-8.11,36.25-12.44,46"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 285.4px 324.5px;"
                id="el6n3sxkddlcl" class="animable"></path>
              <path d="M293.78,329.09s-4.86,20-8.65,27.59"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 289.455px 342.885px;"
                id="elkhj9zp1sh8f" class="animable"></path>
              <line x1="320.84" y1="270.12" x2="333.28" y2="278.77"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 327.06px 274.445px;"
                id="el14tft1y7ek6" class="animable"></line>
              <line x1="297.92" y1="346.02" x2="293.82" y2="313.22"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 295.87px 329.62px;"
                id="elrbxrbkpla4a" class="animable"></line>
              <path
                d="M262.63,384.35c5-5.49,20.41-22.33,25.53-27.59-4.28-2.8-11.58-7.56-16.73-10.83-7.41,14.38-18.66,33.76-21.38,38.42Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 269.105px 365.14px;"
                id="elf7uaq4ihxep" class="animable"></path>
              <path d="M268,352.29s14,10.13,15.2,10.13,8.2-7,8.68-8.44S275,340.71,274,340.71,268,348.92,268,352.29Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 279.945px 351.565px;"
                id="elx69g53lxoi" class="animable"></path>
              <polyline points="301.54 284.75 303.95 310.08 308.29 309.12 307.81 303.57"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 304.915px 297.415px;"
                id="elah83yluyv0n" class="animable"></polyline>
              <polygon points="291.41 281.13 290.2 291.02 299.13 281.86 291.41 281.13"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 294.665px 286.075px;"
                id="elf8myipjjym" class="animable"></polygon>
              <polygon points="296.47 272.93 291.41 281.13 305.16 286.44 309.01 276.31 296.47 272.93"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 300.21px 279.685px;"
                id="el0c7fgk2hoch" class="animable"></polygon>
              <path
                d="M260.05,217.45s-1.93,12.31-1.21,14.72,3.86,5.31,4.1,7.48-5.54,9.64-3.86,11.57,5.31,3.38,5.31,3.38,7.24,19.06,10.61,19.78,14.24-5.06,14.24-5.06,13.5,12.3,14.23,13,14.23-26.53,14.23-26.53-6-11.82-6-12.55,9.41-26.53,8.92-36.9-30.15-20.5-36.18-19.54-18.81,8-18.81,8,4.58-3.86.72-3.62-15.44,8.93-14.95,16.4S260.05,217.45,260.05,217.45Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 286.012px 234.535px;"
                id="elynk1uos1y2" class="animable"></path>
              <path
                d="M301.3,256.77c2.41-6.75-2.9-19.54-2.42-22.43s2.9-9.89,7.24-9.89,3.62,8.68,3.14,12.3A22.31,22.31,0,0,1,306.6,244s2.84-.51,5.09-.86c.55-2.17,9.37-26.72,8.9-36.77-.48-10.37-30.15-20.5-36.18-19.54s-18.81,8-18.81,8,4.58-3.86.72-3.62-15.44,8.93-14.95,16.4,8.68,9.89,8.68,9.89,15.44-7.71,21-8.44-1.68,5.31-2.17,8.69,8,6,11.1,8.92,5.06,21.47,3.14,25.81-11.1,2.17-15.44.48-13.27,1.69-13.27,1.69,7.24,19.06,10.61,19.78c1.85.4,5.93-1.16,9.25-2.64l5-2.42S298.88,263.53,301.3,256.77Z"
                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 285.982px 230.63px;"
                id="elnam1abtled" class="animable"></path>
              <path
                d="M270.39,239.15c.38,1.55.22,2.92-.36,3.07s-1.37-1-1.75-2.56-.22-2.92.36-3.07S270,237.59,270.39,239.15Z"
                style="fill: rgb(38, 50, 56); transform-origin: 269.335px 239.405px;" id="elflgsrca9zaa"
                class="animable"></path>
              <path d="M268,258.94s4.82,0,7.48-3.86"
                style="fill: none; stroke: rgb(125, 125, 125); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 271.74px 257.01px;"
                id="el2p46bqtfth6" class="animable"></path>
              <path d="M264.15,233.13s.72-3.37,6.75-1"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.50947px; transform-origin: 267.525px 232.208px;"
                id="elryj07src5u9" class="animable"></path>
              <polygon points="316.73 251.71 300.09 284.27 309.01 295.37 324.21 259.43 316.73 251.71"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 312.15px 273.54px;"
                id="elmya5oy0vwj" class="animable"></polygon>
              <path
                d="M336.27,280.89s-7.48-1-10.37,1.21S308.29,319,308.29,319a23.84,23.84,0,0,1,11.34,7.24c4.58,5.55,8,15.44,8,15.44s19.54-23.88,23.15-29.19"
                style="fill: rgb(64, 123, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 329.535px 311.172px;"
                id="el1tkapvb804d" class="animable"></path>
              <path
                d="M337.61,285.81s-6.49.54-8.66,4.33S310,328.55,310,328.55l7,5.95s14.61-30.84,18.94-36.25a22.26,22.26,0,0,1,10.82-7"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 328.38px 310.155px;"
                id="elvmzxd8d4e0h" class="animable"></path>
              <line x1="347.89" y1="302.04" x2="324.08" y2="335.04"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 335.985px 318.54px;"
                id="el0i2u7othqlb" class="animable"></line>
              <path
                d="M304.67,317.32s-6.51,4.1-6.51,8.68,5.79,15,12.06,20,11.82,3.62,15,1.45,10.85-3.38,11.33-12.06-11.33-21.23-16.4-22.92S304.67,317.32,304.67,317.32Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 317.362px 330.802px;"
                id="eleupnpohypyv" class="animable"></path>
              <path
                d="M198.54,346s-2.65,2.41-5.31,4.34-5.54,3.38-3.13,4.59,5.06.24,7.72-.25,5.79-1.2,6-3.13S203.61,343.85,198.54,346Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 196.529px 350.52px;"
                id="elpenyke94qs" class="animable"></path>
              <path
                d="M321.32,345.06s3.86-6.76.24-13.51-10.62-9.89-15-9.89-78.39,20.74-78.39,20.74-22.43-6.27-25.09-5.3-18.57,9.64-22.19,11.33-3.62,3.86-1.93,4.1,6-1.2,8.2-1.93,9.41-3.37,9.41-3.37a39.14,39.14,0,0,0-1.45,5.3c0,1,6.76,4.59,8,4.59s5.31.72,8.2-.24-1.2-5.07-1.2-5.07l5.06-2.17s5.07,2.65,9.41,2.41a15.73,15.73,0,0,0,6.75-1.69S309.74,348.19,321.32,345.06Z"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 250.488px 339.52px;"
                id="elw659xvj2xos" class="animable"></path>
              <path d="M201,345.06s-3.13,6-2.41,7.23,7,4.59,7,4.59"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 202.036px 350.97px;"
                id="elhqqk3hzoqms" class="animable"></path>
              <path d="M206,345.3s-3.14,6-2.17,7.23,7.47,4.35,7.47,4.35"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 207.472px 351.09px;"
                id="el7pkd25xcgmn" class="animable"></path>
              <line x1="196.61" y1="347.23" x2="197.09" y2="345.06"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 196.85px 346.145px;"
                id="el16akvez5k6r" class="animable"></line>
            </g>
            <g id="freepik--Device--inject-245" class="animable" style="transform-origin: 127.74px 373.33px;">
              <polygon points="191.27 383.67 110.45 383.67 79.61 400.33 164.28 400.33 191.27 383.67"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 135.44px 392px;"
                id="el45ug9eqk3c8" class="animable"></polygon>
              <line x1="115.74" y1="388.03" x2="175.41" y2="388.03"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 145.575px 388.03px;"
                id="elwyowmcoj68b" class="animable"></line>
              <line x1="111.39" y1="391.13" x2="171.06" y2="391.13"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 141.225px 391.13px;"
                id="el2kffoo0rgjn" class="animable"></line>
              <line x1="107.03" y1="394.24" x2="166.71" y2="394.24"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 136.87px 394.24px;"
                id="elikm7fljg0r" class="animable"></line>
              <line x1="175.72" y1="388.03" x2="158.63" y2="396.42"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 167.175px 392.225px;"
                id="elied3m1ch8a" class="animable"></line>
              <line x1="166.4" y1="388.03" x2="149.31" y2="396.42"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 157.855px 392.225px;"
                id="elhtnj7tzoxri" class="animable"></line>
              <polygon points="65.15 342.2 149.83 342.2 164.28 400.33 79.61 400.33 65.15 342.2"
                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 114.715px 371.265px;"
                id="el658zdig67a4" class="animable"></polygon>
              <g id="eldcv23lo8qb6">
                <rect x="79.61" y="400.33" width="84.68" height="4.13"
                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 121.95px 402.395px; transform: rotate(180deg);"
                  class="animable"></rect>
              </g>
              <polygon points="64.21 342.2 148.89 342.2 163.35 400.33 78.67 400.33 64.21 342.2"
                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 113.78px 371.265px;"
                id="el90xy0pxmgeb" class="animable"></polygon>
              <polygon points="164.28 400.33 191.27 383.67 191.27 387.09 164.28 404.46 164.28 400.33"
                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 177.775px 394.065px;"
                id="elpjtmv5sk398" class="animable"></polygon>
              <path d="M117.46,369.5a4.53,4.53,0,1,1-5.6-3.7A4.76,4.76,0,0,1,117.46,369.5Z"
                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.25474px; transform-origin: 112.983px 370.213px;"
                id="el8xp7zvutvij" class="animable"></path>
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
              <clipPath id="freepik--clip-path--inject-245">
                <rect x="55.69" y="125.54" width="99.75" height="258.59" style="fill:none"></rect>
              </clipPath>
            </defs>
          </svg>
        </div>
      </div>
    </div>
  </section>
@endsection
