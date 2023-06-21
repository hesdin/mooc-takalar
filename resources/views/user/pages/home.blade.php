@extends('user.layouts.index')

@section('content')
  <!-- HERO
                                                                                        ================================================== -->
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
          <h1 class="display-2" data-aos="fade-left" data-aos-duration="150">Find The Best <span
              class="fw-bold">Courses</span></h1>

          <!-- Text -->
          <p class="text-capitalize me-xl-11 me-wd-14 pe-wd-4" data-aos="fade-up" data-aos-duration="200">
            Technology is bringing a massive wave of evolution on learning things in different ways.</p>

          <!-- Buttons -->
          <a href="course-list-v4.html"
            class="rounded rounded-0 btn btn-pill btn-helio btn-gradient-1 text-white btn-x-wide shadow lift mb-5 mt-1"
            data-aos="fade-up" data-aos-duration="200">VIEW COURSES
          </a>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>

  <!-- FEATURED PRODUCT
                                                                                            ================================================== -->
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

        <div class="tab-content flickity-tab" id="pills-tabContent">
          @foreach ($courses as $course)
            <div class="tab-pane fade" id="pills-{{ $course->category_id }}" role="tabpanel"
              aria-labelledby="pills-art-tab">
              <!-- Items -->
              <div class="mx-n4 flickity-button-outset"
                data-flickity='{"pageDots": true, "prevNextButtons": true, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                <div class="col-12 col-md-6 col-xl-4 col-wd-3 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                  <!-- Card -->
                  <div class="card border shadow p-2 sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                      <!-- Konten gambar card -->
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                      <!-- Konten footer card -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </div>
  </section>

  <!-- CATEGORIES
                                                                                            ================================================== -->
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
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z"
                  fill="currentColor" />
              </svg>

            </div>
          </a>
        </div>
      </div>

      <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 row-cols-wd-6">
        <div class="col mb-md-6 mb-4 px-2 px-md-4">
          <!-- Card -->
          <a href="course-list-v6.html"
            class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
            <!-- Image -->
            <div class="mt-7 text-gigas display-4">
              <i class="fas fa-bezier-curve"></i>

              <!-- Footer -->
              <div class="card-footer px-0 pb-0 pt-4">
                <h5 class="mb-0 line-clamp-2 text-gigas">Design</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col mb-md-6 mb-4 px-2 px-md-4">
          <!-- Card -->
          <a href="course-list-v6.html"
            class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
            <!-- Image -->
            <div class="mt-7 text-gigas display-4">
              <i class="fas fa-briefcase"></i>

              <!-- Footer -->
              <div class="card-footer px-0 pb-0 pt-4">
                <h5 class="mb-0 line-clamp-2 text-gigas">Business</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col mb-md-6 mb-4 px-2 px-md-4">
          <!-- Card -->
          <a href="course-list-v6.html"
            class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
            <!-- Image -->
            <div class="mt-7 text-gigas display-4">
              <i class="fas fa-laptop-code"></i>

              <!-- Footer -->
              <div class="card-footer px-0 pb-0 pt-4">
                <h5 class="mb-0 line-clamp-2 text-gigas">Software Development</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col mb-md-6 mb-4 px-2 px-md-4">
          <!-- Card -->
          <a href="course-list-v6.html"
            class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
            <!-- Image -->
            <div class="mt-7 text-gigas display-4">
              <i class="far fa-file-alt"></i>

              <!-- Footer -->
              <div class="card-footer px-0 pb-0 pt-4">
                <h5 class="mb-0 line-clamp-2 text-gigas">Personal Development</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col mb-md-6 mb-4 px-2 px-md-4">
          <!-- Card -->
          <a href="course-list-v6.html"
            class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
            <!-- Image -->
            <div class="mt-7 text-gigas display-4">
              <i class="fas fa-camera"></i>

              <!-- Footer -->
              <div class="card-footer px-0 pb-0 pt-4">
                <h5 class="mb-0 line-clamp-2 text-gigas">Photography</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col d-xl-none d-wd-block mb-md-6 mb-4 px-2 px-md-4">
          <!-- Card -->
          <a href="course-list-v6.html"
            class="card bg-lavender hover-gradient-1 rounded-lg p-md-5 p-3 h-210p text-center lift">
            <!-- Image -->
            <div class="mt-7 text-gigas display-4">
              <i class="fas fa-music"></i>

              <!-- Footer -->
              <div class="card-footer px-0 pb-0 pt-4">
                <h5 class="mb-0 line-clamp-2 text-gigas">Audio + Music</h5>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- BLOG
                                                                                            ================================================== -->
  <section class="py-5 py-md-8 bg-white">
    <div class="container container-wd">
      <div class="row align-items-end mb-4 mb-md-7">
        <div class="col-md mb-4 mb-md-0">
          <h1 class="mb-1">Berita Terbaru</h1>
          <p class="font-size-lg mb-0 text-capitalize">Info Berita Terbaru Dan Terkini</p>
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

      <div class="row row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
        <div class="col-md mb-5 mb-lg-0">
          <!-- Card -->
          <div class="card border shadow p-2 rounded-lg lift sk-fade">
            <!-- Image -->
            <div class="card-zoom position-relative">
              <a href="blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img
                  class="rounded shadow-light-lg img-fluid" src="{{ asset('frontend/assets/img/post/post-1.jpg') }}"
                  alt="..."></a>

              <a href="#"
                class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                <span class="text-white fw-normal font-size-sm">Figma</span>
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
                    <div class="font-size-sm">Jack Wilson</div>
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
                    <div class="font-size-sm">06 April, 2020</div>
                  </a>
                </li>
              </ul>

              <!-- Heading -->
              <a href="blog-single.html" class="d-block">
                <h5 class="line-clamp-2 h-48 h-lg-52">The Best Destinations to Begin Your Round the World Trip</h5>
              </a>
            </div>
          </div>
        </div>

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
        <div class="col-6 col-md-4 col-lg-4 mw-xl-20 text-center py-5 text-md-left px-3 px-md-4">
          <div class="card border shadow p-2 lift">
            <!-- Image -->
            <div class="card-zoom position-relative" style="max-width: 250px;">

              <a href="instructors-single.html"
                class="card-img sk-thumbnail img-ratio-4 card-hover-overlay card-hover-overlay-gradient-1 d-block">
                <img class="rounded shadow-light-lg img-fluid"
                  src="{{ asset('frontend/assets/img/instructors/instructor-1.jpg') }}" alt="..."></a>
            </div>

            <!-- Footer -->
            <div class="card-footer px-3 pt-4 pb-1">
              <a href="instructors-single.html" class="d-block">
                <h5 class="mb-0">Jack Wilson</h5>
              </a>
              <span class="font-size-d-sm">Developer</span>
            </div>
          </div>
        </div>


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
