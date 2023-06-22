@extends('user.layouts.index')

@push('css')
  <style>
    .container {
      margin-left: 150px !important;
      margin-right: 150px !important;
    }
  </style>
  {{-- toastr --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
@endpush

@section('content')
  <div class="container">
    <nav class="mb-5 mb-md-8 mt-2" aria-label="breadcrumb">

    </nav>

  </div>

  <div class="container">
    <div class="row mb-8">
      <div class="col-lg-8 mb-6 mb-lg-0 position-relative">
        <h1 class="me-xl-14">
          {{ Str::ucfirst($course->title) }}
        </h1>
        <p class="me-xl-13 mb-5">{{ Str::ucfirst($course->sub_title) }}</p>

        <!-- COURSE META
                                                                                                                                                                                                                                                                                                                                      ================================================== -->
        <div class="d-md-flex align-items-center mb-5">
          <div class="border rounded-circle d-inline-block mb-4 mb-md-0 me-md-6 me-lg-4 me-xl-6">
            <div class="p-2">
              <img src="{{ asset('storage/images/' . $course->instructor->image) }}" alt="..." class="rounded-circle"
                width="68" height="68">
            </div>
          </div>

          <div class="mb-4 mb-md-0 me-md-8 me-lg-4 me-xl-8">
            <h6 class="mb-0">Instruktur</h6>
            <a href="#" class="font-size-sm text-gray-800">{{ $course->instructor->name }}</a>
          </div>

          <div class="mb-4 mb-md-0 me-md-8 me-lg-4 me-xl-8">
            <h6 class="mb-0">Kategori</h6>
            <a href="#" class="font-size-sm text-gray-800">{{ $course->category->name }}</a>
          </div>
        </div>
        <!-- COURSE INFO TAB
                                                                                                                                                                                                                                                                                                                                      ================================================== -->
        <div class="border rounded shadow p-3 mb-6">
          <ul id="pills-tab" class="nav nav-pills course-tab-v2 h5 mb-0 flex-nowrap overflow-auto" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-overview-tab" data-bs-toggle="pill" href="#pills-overview"
                role="tab" aria-controls="pills-overview" aria-selected="false">Ringkasan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-curriculum-tab" data-bs-toggle="pill" href="#pills-curriculum" role="tab"
                aria-controls="pills-curriculum" aria-selected="false">Kurikulum</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="pills-instructor-tab" data-bs-toggle="pill" href="#pills-instructor" role="tab"
                aria-controls="pills-instructor" aria-selected="false">Instruktur</a>
            </li>

          </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
            <h3 class="">Deskripsi Kursus</h3>
            <div class="mb-6 line-height-md">
              {!! $course->description !!}
            </div>

            <a class="text-teal read-more h6 d-inline-block mb-8" data-bs-toggle="collapse" href="#readcollapseExample"
              role="button" aria-expanded="false" aria-controls="readcollapseExample">
              <span class="d-inline-flex align-items-center more">
                Read More
                <span class="d-flex align-items-center justify-content-center bg-teal rounded-circle ms-2 p-2 w-26p">
                  <i class="fas fa-plus font-size-10 text-white"></i>
                </span>
              </span>
              <span class="d-inline-flex align-items-center less">
                Read Less
                <span class="d-flex align-items-center justify-content-center bg-teal rounded-circle ms-2 p-2 w-26p">
                  <i class="fas fa-minus font-size-10 text-white"></i>
                </span>
              </span>
            </a>

            <h3 class="mb-5">Yang Akan Dipelajari</h3>
            <div class="row row-cols-lg-2 mb-8">
              <div class="col-md">
                <ul class="list-style-v1 list-unstyled ms-xl-6">
                  @foreach ($course->curriculum as $curriculum)
                    <li>{{ Str::ucfirst($curriculum->title) }}</li>
                  @endforeach
                </ul>
              </div>
            </div>


          </div>

          <div class="tab-pane fade" id="pills-curriculum" role="tabpanel" aria-labelledby="pills-curriculum-tab">
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
                          <div class="badge text-dark-70 bg-orange-40 me-5 font-size-sm fw-normal py-2">
                            {{ $subcurriculum->question_count }} question
                          </div>
                          <div class="badge btn-blue-soft me-5 font-size-sm fw-normal py-2">
                            {{ $subcurriculum->duration }} min
                          </div>
                          <a href="#" class="text-secondary d-flex">
                            <!-- Add your subcurriculum icon link here if needed -->
                          </a>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              @endforeach
            </div>
          </div>


          <div class="tab-pane fade" id="pills-instructor" role="tabpanel" aria-labelledby="pills-instructor-tab">
            <h3 class="mb-6">Tentang Instruktur</h3>

            <div class="d-flex align-items-center mb-6">
              <div class="d-inline-block rounded-circle border me-6 p-2">
                <div class="avatar avatar-size-120">
                  <img src="{{ asset('storage/images/' . $course->instructor->image) }}" alt="..."
                    class="avatar-img rounded-circle">
                </div>
              </div>
              <div class="media-body">
                <h4 class="mb-0">{{ $course->instructor->name }}</h4>
                <span>{{ Str::ucfirst($course->instructor->expertise) }} </span>
              </div>
            </div>

            <div class="row mx-xl-n5 mb-6">

              <div class="col-12 col-md-auto mb-3 mb-md-0 px-xl-5">
                <div class="d-flex align-items-center">
                  <div class="me-3 d-flex text-secondary icon-uxs">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                        fill="currentColor"></path>
                    </svg>

                  </div>
                  {{ $course->enrollment->count() }}
                </div>
              </div>

              <div class="col-12 col-md-auto mb-3 mb-md-0 px-xl-5">
                <div class="d-flex align-items-center">
                  <div class="me-3 d-flex text-secondary icon-uxs">
                    <!-- Icon -->
                    <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                        fill="currentColor"></path>
                    </svg>

                  </div>
                  {{ $course->instructor->courses->count() }} Kursus
                </div>
              </div>
            </div>

            <p class="mb-6 line-height-md">{{ $course->instructor->bio }}</p>

          </div>

        </div>
      </div>

      <div class="col-lg-4">
        <!-- SIDEBAR FILTER
                                                                                                                                                                                                                                                                                                                                      ================================================== -->
        <div class="d-block rounded border p-2 shadow mb-6">
          <a href="#" class="d-block sk-thumbnail rounded mb-1" data-fancybox="">
            <img class="rounded shadow-light-lg" src="{{ asset('storage/images/course/' . $course->image) }}"
              alt="...">
          </a>

          <div class="pt-5 pb-4 px-5 px-lg-3 px-xl-5">

            <div class="d-flex align-items-center text-alizarin mb-6">
              <!-- Icon -->
              <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M16.5465 5.13024L15.2322 4.02945L14.9329 2.34131C14.8335 1.78023 14.348 1.37335 13.7783 1.37335C13.778 1.37335 13.7775 1.37335 13.7772 1.37335L12.0628 1.37488L10.7485 0.274205C10.3114 -0.0919028 9.67738 -0.0913556 9.24091 0.275574L7.92861 1.37875L6.2142 1.38035C5.64405 1.3809 5.15872 1.78887 5.06026 2.35042L4.76408 4.03907L3.45178 5.14228C3.01535 5.50917 2.90582 6.13362 3.19137 6.62712L4.04992 8.1111L3.75378 9.79967C3.65524 10.3613 3.97276 10.91 4.50875 11.1046L5.9543 11.6292L5.95989 18.8268C5.95989 19.2647 6.20095 19.6629 6.58899 19.8659C6.76059 19.9556 6.94712 20 7.13295 20C7.36737 20 7.60062 19.9294 7.8013 19.7901L9.9861 18.2734L12.1709 19.7901C12.5306 20.0398 12.9951 20.0689 13.3832 19.8659C13.7712 19.6629 14.0123 19.2647 14.0123 18.8268V11.6377L15.5005 11.0945C16.0361 10.899 16.3526 10.3496 16.2531 9.78825L15.9538 8.10015L16.8096 6.61461C17.0943 6.12056 16.9836 5.49631 16.5465 5.13024ZM10.3205 17.078C10.1194 16.9385 9.85281 16.9385 9.65178 17.078L7.13264 18.8265C7.13264 18.8264 7.13264 18.8263 7.13264 18.8263L7.12842 13.3771C7.35154 13.6218 7.66652 13.7592 7.99315 13.7592C8.12738 13.7592 8.26357 13.7361 8.39608 13.6877L10.0065 13.0999L11.6181 13.6848C12.0517 13.842 12.5242 13.7298 12.8396 13.4196L12.8395 18.8266L10.3205 17.078ZM14.9377 7.51475C14.8003 7.75327 14.7511 8.03382 14.7992 8.30482L15.0984 9.99292L13.4878 10.5808C13.286 10.6545 13.1095 10.783 12.9761 10.949C12.9697 10.9566 12.9639 10.9647 12.9579 10.9727C12.9277 11.0123 12.899 11.0533 12.8739 11.0969L12.0185 12.5825C12.0185 12.5825 12.0183 12.5825 12.0181 12.5824L10.4065 11.9976C10.1478 11.9037 9.86297 11.9039 9.6044 11.9983L7.99393 12.5861L7.13538 11.1022C7.08925 11.0224 7.03339 10.9496 6.97073 10.8835C6.96507 10.8774 6.95975 10.871 6.95381 10.8652C6.83236 10.7425 6.68464 10.6468 6.52039 10.5871L4.90882 10.0022L5.205 8.31358C5.2525 8.04245 5.20277 7.76199 5.06495 7.52378L4.20639 6.03984L5.51869 4.93663C5.72942 4.75952 5.87163 4.51263 5.91912 4.24159L6.2153 2.55298L7.92963 2.55138C8.20489 2.55114 8.47254 2.45346 8.68319 2.27635L9.99549 1.17318L11.3098 2.27389C11.5205 2.45041 11.7879 2.54759 12.0629 2.54759H12.0638L13.7783 2.54602L14.0775 4.23416C14.1255 4.50517 14.2682 4.75166 14.4792 4.92842L15.7935 6.02921L14.9377 7.51475Z"
                  fill="currentColor"></path>
                <path
                  d="M9.99928 3.64673C8.13493 3.64673 6.61816 5.1635 6.61816 7.02785C6.61816 8.89221 8.13493 10.409 9.99928 10.409C11.8636 10.409 13.3804 8.89221 13.3804 7.02785C13.3804 5.1635 11.8636 3.64673 9.99928 3.64673ZM9.99928 9.23631C8.78154 9.23631 7.79083 8.2456 7.79083 7.02785C7.79083 5.81011 8.78154 4.8194 9.99928 4.8194C11.217 4.8194 12.2078 5.81011 12.2078 7.02785C12.2078 8.2456 11.217 9.23631 9.99928 9.23631Z"
                  fill="currentColor"></path>
              </svg>

              <span class="ms-2">Ayo mendaftar sekarang!</span>
            </div>

            <a href="{{ route('guru.enrollment', ['uuid' => $course->uuid]) }}" class="btn btn-orange btn-block mb-6"
              type="button" name="button">Mendaftar</a>

            <ul class="list-group list-group-flush">
              {{-- <li class="list-group-item d-flex align-items-center py-3">
                <div class="text-secondary d-flex icon-uxs">
                  <!-- Icon -->
                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                      fill="currentColor"></path>
                    <path
                      d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                      fill="currentColor"></path>
                  </svg>

                </div>
                <h6 class="mb-0 ms-3 me-auto">Duration</h6>
                <span>43 weeks</span>
              </li> --}}
              <li class="list-group-item d-flex align-items-center py-3" style="background-color: #F6F9FB">
                <div class="text-secondary d-flex icon-uxs">
                  <!-- Icon -->
                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M15.7262 1.94825C13.4059 0.396725 10.401 0.315126 8.00002 1.73839C5.59897 0.315126 2.59406 0.396725 0.273859 1.94825C0.102729 2.06241 -3.54271e-05 2.25456 6.30651e-07 2.46027V14.6553C-0.000323889 14.8826 0.124616 15.0914 0.324917 15.1987C0.525109 15.3058 0.768066 15.294 0.9569 15.168C2.98471 13.8111 5.63063 13.8111 7.65844 15.168C7.66645 15.1735 7.67568 15.1747 7.68368 15.1796C7.69169 15.1846 7.7003 15.1932 7.70953 15.1987C7.73102 15.2079 7.75302 15.2159 7.77538 15.2227C7.79773 15.2329 7.82077 15.2415 7.84428 15.2486C7.87828 15.2564 7.91286 15.2616 7.94766 15.264C7.96551 15.264 7.98213 15.2714 7.99998 15.2714C8.00492 15.2714 8.00982 15.2714 8.01538 15.2714C8.03604 15.2699 8.05655 15.2672 8.07693 15.2634C8.10808 15.2602 8.13895 15.2547 8.16923 15.2467C8.19018 15.2399 8.21074 15.2319 8.23078 15.2227C8.24986 15.2147 8.27016 15.2104 8.28862 15.2006C8.29724 15.1956 8.30402 15.1883 8.31264 15.1827C8.32125 15.1772 8.3311 15.1753 8.33971 15.1698C10.3675 13.8129 13.0134 13.8129 15.0413 15.1698C15.3233 15.3595 15.7057 15.2846 15.8953 15.0026C15.9643 14.9 16.0008 14.779 16 14.6554V2.46027C16 2.25456 15.8973 2.06241 15.7262 1.94825ZM7.38462 13.6036C5.43516 12.6896 3.18022 12.6896 1.23076 13.6036V2.79993C3.12732 1.67313 5.48806 1.67313 7.38462 2.79993V13.6036ZM14.7692 13.6036C12.8198 12.6896 10.5648 12.6896 8.61538 13.6036V2.79993C10.5119 1.67313 12.8727 1.67313 14.7692 2.79993V13.6036Z"
                      fill="currentColor"></path>
                  </svg>

                </div>
                <h6 class="mb-0 ms-3 me-auto">Materi</h6>
                <span>{{ $course->curriculum->count() }}</span>
              </li>

              <li class="list-group-item d-flex align-items-center py-3" style="background-color: #F6F9FB">
                <div class="text-secondary d-flex icon-uxs">
                  <!-- Icon -->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                      fill="currentColor"></path>
                  </svg>

                </div>
                <h6 class="mb-0 ms-3 me-auto">Terdaftar</h6>
                <span>{{ $course->enrollment->count() }} member</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="d-none">
          <div class="border rounded px-6 px-lg-5 px-xl-6 pt-5 shadow">
            <h3 class="mb-5">Latest Courses</h3>
            <ul class="list-unstyled mb-0">
              <li class="media mb-6 d-flex">
                <a href="course-single-v5.html" class="w-100p d-block me-5">
                  <img src="assets/img/photos/photo-1.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                </a>
                <div class="media-body flex-grow-1">
                  <a href="course-single-v5.html" class="d-block">
                    <h6 class="line-clamp-2 mb-3">Web Developtment and Design</h6>
                  </a>
                  <del class="font-size-sm me-2">$959</del>
                  <ins class="h6 mb-0 ">$415.99</ins>
                </div>
              </li>

              <li class="media mb-6 d-flex">
                <a href="course-single-v5.html" class="w-100p d-block me-5">
                  <img src="assets/img/photos/photo-2.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                </a>
                <div class="media-body flex-grow-1">
                  <a href="course-single-v5.html" class="d-block">
                    <h6 class="line-clamp-2 mb-3">The Complete Cyber Security Course : Hackers </h6>
                  </a>
                  <del class="font-size-sm me-2">$959</del>
                  <ins class="h6 mb-0 ">$415.99</ins>
                </div>
              </li>

              <li class="media mb-6 d-flex">
                <a href="course-single-v5.html" class="w-100p d-block me-5">
                  <img src="assets/img/photos/photo-14.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                </a>
                <div class="media-body flex-grow-1">
                  <a href="course-single-v5.html" class="d-block">
                    <h6 class="line-clamp-2 mb-3">Fashion Photography From Professional</h6>
                  </a>
                  <del class="font-size-sm me-2">$959</del>
                  <ins class="h6 mb-0 ">$415.99</ins>
                </div>
              </li>

              <li class="media mb-6 d-flex">
                <a href="course-single-v5.html" class="w-100p d-block me-5">
                  <img src="assets/img/photos/photo-16.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                </a>
                <div class="media-body flex-grow-1">
                  <a href="course-single-v5.html" class="d-block">
                    <h6 class="line-clamp-2 mb-3">The Complete Financial Analyst Course 2020</h6>
                  </a>
                  <del class="font-size-sm me-2">$959</del>
                  <ins class="h6 mb-0 ">$415.99</ins>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <div class="text-center mb-5 mb-md-8">
      <h1>Kursus Terkait</h1>
      <p class="font-size-lg text-capitalize">Kursus terkait dengan kategori {{ $course->category->name }}</p>
    </div>

    <div class="mx-n4 mb-12 flickity-enabled is-draggable"
      data-flickity="{&quot;pageDots&quot;: true, &quot;prevNextButtons&quot;: false, &quot;cellAlign&quot;: &quot;left&quot;, &quot;wrapAround&quot;: true, &quot;imagesLoaded&quot;: true}"
      tabindex="1">
      <div class="flickity-viewport" style="height: 371.719px; touch-action: pan-y;">
        <div class="flickity-slider" style="left: 0px; transform: translateX(-175%);">
          <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5 is-selected"
            style="padding-right: 15px; padding-left: 15px; position: absolute; left: 175%;">
            <!-- Card -->
            <div class="card border shadow-dark-hover p-2 sk-fade">
              <!-- Image -->
              <div class="card-zoom position-relative">
                <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-3 d-block">
                  <img class="rounded shadow-light-lg" src="{{ asset('frontend/assets/img/products/product-15.jpg') }}"
                    alt="...">
                </a>

                <span class="sk-fade-right badge-float bottom-0 right-0 mb-2 me-2">
                  <ins class="h5 mb-0 text-white">$415.99</ins>
                </span>
              </div>

              <!-- Footer -->
              <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                <!-- Preheading -->
                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                <!-- Heading -->
                <div class="position-relative">
                  <a href="course-single-v5.html" class="d-block stretched-link">
                    <h5 class="line-clamp-2 h-md-48 h-lg-58 me-md-8 me-lg-10 me-xl-4 mb-2">Fashion Photography From
                      Professional</h5>
                  </a>

                  <div class="row mx-n2 align-items-end">
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
                      </ul>
                    </div>

                    <div class="col-auto px-2 text-right">
                      <div class="star-rating mb-2 mb-lg-0">
                        <div class="rating" style="width:100%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5"
            style="padding-right: 15px; padding-left: 15px; position: absolute; left: 200%;" aria-hidden="true">
            <!-- Card -->
            <div class="card border shadow-dark-hover p-2 sk-fade">
              <!-- Image -->
              <div class="card-zoom position-relative">
                <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-3 d-block">
                  <img class="rounded shadow-light-lg" src="{{ asset('frontend/assets/img/products/product-14.jpg') }}"
                    alt="...">
                </a>

                <span class="sk-fade-right badge-float bottom-0 right-0 mb-2 me-2">
                  <ins class="h5 mb-0 text-white">$415.99</ins>
                </span>
              </div>

              <!-- Footer -->
              <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                <!-- Preheading -->
                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Marketing</span></a>

                <!-- Heading -->
                <div class="position-relative">
                  <a href="course-single-v5.html" class="d-block stretched-link">
                    <h5 class="line-clamp-2 h-md-48 h-lg-58 me-md-8 me-lg-10 me-xl-4 mb-2">Productivity and Time
                      Management for workplace</h5>
                  </a>

                  <div class="row mx-n2 align-items-end">
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
                      </ul>
                    </div>

                    <div class="col-auto px-2 text-right">
                      <div class="star-rating mb-2 mb-lg-0">
                        <div class="rating" style="width:100%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5"
            style="padding-right: 15px; padding-left: 15px; position: absolute; left: 225%;" aria-hidden="true">
            <!-- Card -->
            <div class="card border shadow-dark-hover p-2 sk-fade">
              <!-- Image -->
              <div class="card-zoom position-relative">
                <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-3 d-block">
                  <img class="rounded shadow-light-lg" src="{{ asset('frontend/assets/img/products/product-16.jpg') }}"
                    alt="...">
                </a>

                <span class="sk-fade-right badge-float bottom-0 right-0 mb-2 me-2">
                  <ins class="h5 mb-0 text-white">$415.99</ins>
                </span>
              </div>

              <!-- Footer -->
              <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                <!-- Preheading -->
                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Personal
                    Development</span></a>

                <!-- Heading -->
                <div class="position-relative">
                  <a href="course-single-v5.html" class="d-block stretched-link">
                    <h5 class="line-clamp-2 h-md-48 h-lg-58 me-md-8 me-lg-10 me-xl-4 mb-2">Learn Ethical Hacking From
                      Scratch</h5>
                  </a>

                  <div class="row mx-n2 align-items-end">
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
                      </ul>
                    </div>

                    <div class="col-auto px-2 text-right">
                      <div class="star-rating mb-2 mb-lg-0">
                        <div class="rating" style="width:100%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5"
            style="padding-right: 15px; padding-left: 15px; position: absolute; left: 250%;" aria-hidden="true">
            <!-- Card -->
            <div class="card border shadow-dark-hover p-2 sk-fade">
              <!-- Image -->
              <div class="card-zoom position-relative">
                <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-3 d-block">
                  <img class="rounded shadow-light-lg" src="{{ asset('frontend/assets/img/products/product-12.jpg') }}"
                    alt="...">
                </a>

                <span class="sk-fade-right badge-float bottom-0 right-0 mb-2 me-2">
                  <ins class="h5 mb-0 text-white">$415.99</ins>
                </span>
              </div>

              <!-- Footer -->
              <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                <!-- Preheading -->
                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Development</span></a>

                <!-- Heading -->
                <div class="position-relative">
                  <a href="course-single-v5.html" class="d-block stretched-link">
                    <h5 class="line-clamp-2 h-md-48 h-lg-58 me-md-8 me-lg-10 me-xl-4 mb-2">The Complete JavaScript
                      Course 2020: Real Projects!</h5>
                  </a>

                  <div class="row mx-n2 align-items-end">
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
                      </ul>
                    </div>

                    <div class="col-auto px-2 text-right">
                      <div class="star-rating mb-2 mb-lg-0">
                        <div class="rating" style="width:100%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5"
            style="padding-right: 15px; padding-left: 15px; position: absolute; left: 100%;" aria-hidden="true">
            <!-- Card -->
            <div class="card border shadow-dark-hover p-2 sk-fade">
              <!-- Image -->
              <div class="card-zoom position-relative">
                <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-3 d-block">
                  <img class="rounded shadow-light-lg" src="{{ asset('frontend/assets/img/products/product-13.jpg') }}"
                    alt="...">
                </a>

                <span class="sk-fade-right badge-float bottom-0 right-0 mb-2 me-2">
                  <ins class="h5 mb-0 text-white">$415.99</ins>
                </span>
              </div>

              <!-- Footer -->
              <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                <!-- Preheading -->
                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Marketing</span></a>

                <!-- Heading -->
                <div class="position-relative">
                  <a href="course-single-v5.html" class="d-block stretched-link">
                    <h5 class="line-clamp-2 h-md-48 h-lg-58 me-md-8 me-lg-10 me-xl-4 mb-2">Learn Ethical Hacking From
                      Scratch</h5>
                  </a>

                  <div class="row mx-n2 align-items-end">
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
                      </ul>
                    </div>

                    <div class="col-auto px-2 text-right">
                      <div class="star-rating mb-2 mb-lg-0">
                        <div class="rating" style="width:100%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5"
            style="padding-right: 15px; padding-left: 15px; position: absolute; left: 125%;" aria-hidden="true">
            <!-- Card -->
            <div class="card border shadow-dark-hover p-2 sk-fade">
              <!-- Image -->
              <div class="card-zoom position-relative">
                <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-3 d-block">
                  <img class="rounded shadow-light-lg" src="{{ asset('frontend/assets/img/products/product-11.jpg') }}"
                    alt="...">
                </a>

                <span class="sk-fade-right badge-float bottom-0 right-0 mb-2 me-2">
                  <ins class="h5 mb-0 text-white">$415.99</ins>
                </span>
              </div>

              <!-- Footer -->
              <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                <!-- Preheading -->
                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Development</span></a>

                <!-- Heading -->
                <div class="position-relative">
                  <a href="course-single-v5.html" class="d-block stretched-link">
                    <h5 class="line-clamp-2 h-md-48 h-lg-58 me-md-8 me-lg-10 me-xl-4 mb-2">The Complete JavaScript
                      Course 2020: Real Projects!</h5>
                  </a>

                  <div class="row mx-n2 align-items-end">
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
                      </ul>
                    </div>

                    <div class="col-auto px-2 text-right">
                      <div class="star-rating mb-2 mb-lg-0">
                        <div class="rating" style="width:100%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5"
            style="padding-right: 15px; padding-left: 15px; position: absolute; left: 150%;" aria-hidden="false">
            <!-- Card -->
            <div class="card border shadow-dark-hover p-2 sk-fade">
              <!-- Image -->
              <div class="card-zoom position-relative">
                <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-3 d-block">
                  <img class="rounded shadow-light-lg" src="{{ asset('frontend/assets/img/products/product-10.jpg') }}"
                    alt="...">
                </a>

                <span class="sk-fade-right badge-float bottom-0 right-0 mb-2 me-2">
                  <ins class="h5 mb-0 text-white">$415.99</ins>
                </span>
              </div>

              <!-- Footer -->
              <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                <!-- Preheading -->
                <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Marketing</span></a>

                <!-- Heading -->
                <div class="position-relative">
                  <a href="course-single-v5.html" class="d-block stretched-link">
                    <h5 class="line-clamp-2 h-md-48 h-lg-58 me-md-8 me-lg-10 me-xl-4 mb-2">Productivity and Time
                      Management for workplace</h5>
                  </a>

                  <div class="row mx-n2 align-items-end">
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
                      </ul>
                    </div>

                    <div class="col-auto px-2 text-right">
                      <div class="star-rating mb-2 mb-lg-0">
                        <div class="rating" style="width:100%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="flickity-page-dots">
        <li class="dot is-selected" aria-label="Page dot 1" aria-current="step"></li>
        <li class="dot" aria-label="Page dot 2"></li>
        <li class="dot" aria-label="Page dot 3"></li>
        <li class="dot" aria-label="Page dot 4"></li>
        <li class="dot" aria-label="Page dot 5"></li>
        <li class="dot" aria-label="Page dot 6"></li>
        <li class="dot" aria-label="Page dot 7"></li>
      </ol>
    </div>
  </div>
@endsection

@push('js')
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
  {{-- toastr js --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script> --}}

  {{-- <script>
    $(document).ready(function() {
      toastr.options.timeOut = 10000;
      //   @if (Session::has('error'))
      toastr.error('test');
      //   @elseif (Session::has('success'))
      // toastr.success('{{ Session::get('success') }}');
      //   @endif
    });
  </script> --}}
@endpush
