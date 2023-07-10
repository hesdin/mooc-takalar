@extends('user.layouts.index')

@push('css')
  <style>
    .container {
      margin-left: 150px !important;
      margin-right: 150px !important;
    }
  </style>
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
            <a href="#" class="font-size-sm text-gray-800">{{ Str::ucfirst($course->instructor->name) }}</a>
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
              {!! Str::words($course->description, 30) !!}
              <div class="collapse" id="readcollapseExample">
                {!! $course->description !!}
              </div>
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

            <h3 class="mb-5">Yang akan dipelajari</h3>
            <div class="row row-cols-lg-2 mb-8">
              <div class="col-md">
                <ul class="list-style-v1 list-unstyled">
                  @foreach ($course->curriculum as $curriculum)
                    <li class="text-dark">{{ Str::ucfirst($curriculum->title) }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-curriculum" role="tabpanel" aria-labelledby="pills-curriculum-tab">
            <div id="accordionCurriculum">
              <div>
                <h3 class="text-dark">Konten kursus</h3>
              </div>
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
                            {{ Str::ucfirst($subcurriculum->title) }}
                          </div>
                        </div>
                        <div class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                          @if (strpos($subcurriculum->content, '.com') !== false)
                            <div
                              class="btn btn-xs text-dark-70 bg-orange-40 me-5 font-size-sm fw-normal py-2 subcurriculum-link"
                              data-content="{{ $subcurriculum->content }}">
                              Video
                            </div>
                          @else
                            <div class="btn btn-xs btn-blue-soft me-5 font-size-sm fw-normal py-2 subcurriculum-link"
                              data-content="{{ $subcurriculum->content }}">
                              File Materi
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
            <h3 class="mb-6">Tentang Instruktur</h3>

            <div class="d-flex align-items-center mb-6">
              <div class="d-inline-block rounded-circle border me-6 p-2">
                <div class="avatar avatar-size-120">
                  <img src="{{ asset('storage/images/' . $course->instructor->image) }}" alt="..."
                    class="avatar-img rounded-circle">
                </div>
              </div>
              <div class="media-body">
                <h4 class="mb-0">{{ Str::ucfirst($course->instructor->name) }}</h4>
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
                  {{ $course->enrollment->count() }} Peserta
                </div>
              </div>

              <div class="col-12 col-md-auto mb-3 mb-md-0 px-xl-5">
                <div class="d-flex align-items-center">
                  <div class="me-3 d-flex text-secondary icon-uxs">
                    <!-- Icon -->
                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M15.7262 1.94825C13.4059 0.396725 10.401 0.315126 8.00002 1.73839C5.59897 0.315126 2.59406 0.396725 0.273859 1.94825C0.102729 2.06241 -3.54271e-05 2.25456 6.30651e-07 2.46027V14.6553C-0.000323889 14.8826 0.124616 15.0914 0.324917 15.1987C0.525109 15.3058 0.768066 15.294 0.9569 15.168C2.98471 13.8111 5.63063 13.8111 7.65844 15.168C7.66645 15.1735 7.67568 15.1747 7.68368 15.1796C7.69169 15.1846 7.7003 15.1932 7.70953 15.1987C7.73102 15.2079 7.75302 15.2159 7.77538 15.2227C7.79773 15.2329 7.82077 15.2415 7.84428 15.2486C7.87828 15.2564 7.91286 15.2616 7.94766 15.264C7.96551 15.264 7.98213 15.2714 7.99998 15.2714C8.00492 15.2714 8.00982 15.2714 8.01538 15.2714C8.03604 15.2699 8.05655 15.2672 8.07693 15.2634C8.10808 15.2602 8.13895 15.2547 8.16923 15.2467C8.19018 15.2399 8.21074 15.2319 8.23078 15.2227C8.24986 15.2147 8.27016 15.2104 8.28862 15.2006C8.29724 15.1956 8.30402 15.1883 8.31264 15.1827C8.32125 15.1772 8.3311 15.1753 8.33971 15.1698C10.3675 13.8129 13.0134 13.8129 15.0413 15.1698C15.3233 15.3595 15.7057 15.2846 15.8953 15.0026C15.9643 14.9 16.0008 14.779 16 14.6554V2.46027C16 2.25456 15.8973 2.06241 15.7262 1.94825ZM7.38462 13.6036C5.43516 12.6896 3.18022 12.6896 1.23076 13.6036V2.79993C3.12732 1.67313 5.48806 1.67313 7.38462 2.79993V13.6036ZM14.7692 13.6036C12.8198 12.6896 10.5648 12.6896 8.61538 13.6036V2.79993C10.5119 1.67313 12.8727 1.67313 14.7692 2.79993V13.6036Z"
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
        <!-- SIDEBAR FILTER                                                                                                                                                                                                                                                                                                                                                                                        ================================================== -->
        <div class="d-block rounded border p-2 shadow mb-6">
          <a href="#" class="d-block sk-thumbnail rounded mb-1" data-fancybox="">
            <img class="rounded shadow-light-lg" src="{{ asset('storage/images/course/' . $course->image) }}"
              alt="...">
          </a>

          <div class="pt-5 pb-4 px-5 px-lg-3 px-xl-5">
            @if (auth()->guard('guru')->check() &&
                    auth()->guard('guru')->user()->enrollments->contains('course_id', $course->id))
              <div class="d-flex align-items-center text-dark mb-6">
                <!-- Icon -->
                <span class="m-4 icon-sm" data-toggle="tooltip" data-placement="top" title="icon-reader.svg"><svg
                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                      fill="currentColor"></path>
                  </svg>
                </span>

                <span class="ms-1">Sudah mendaftar pada
                  {{ auth()->guard('guru')->user()->enrollments->where('course_id', $course->id)->first()->created_at->format('d F Y') ?? '' }}</span>

              </div>

              <a href="{{ route('guru.mycourse.detail', ['uuid' => $course->uuid]) }}"
                class="btn btn-dark btn-block mb-6" type="button" name="button">Ke kursus
              </a>
            @else
              <div class="d-flex align-items-center text-dark mb-6">
                <!-- Icon -->
                <span class="m-4 icon-sm" data-toggle="tooltip" data-placement="top" title="icon-online.svg"><svg
                    width="45" height="46" viewBox="0 0 45 46" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M36.5455 26.7089C35.746 23.8553 34.0867 21.2808 31.7968 19.3737C30.4514 18.2532 28.9205 17.3934 27.2882 16.8229C28.7711 15.4936 29.7073 13.5595 29.7073 11.4088V7.25208C29.7073 3.25326 26.4743 0 22.5003 0C18.5263 0 15.2933 3.25326 15.2933 7.25208V11.4088C15.2933 13.5595 16.2295 15.4936 17.7124 16.8229C16.0801 17.3934 14.5492 18.2532 13.2038 19.3737C10.914 21.2808 9.25457 23.8553 8.45512 26.7089H5.20703L7.25778 45.2812H37.7428L39.7936 26.7089H36.5455ZM17.93 7.25208C17.93 4.71624 19.9802 2.6532 22.5003 2.6532C25.0204 2.6532 27.0706 4.71624 27.0706 7.25208V11.4088C27.0706 13.9446 25.0204 16.0076 22.5003 16.0076C19.9802 16.0076 17.93 13.9446 17.93 11.4088V7.25208ZM22.5003 18.6608C27.6174 18.6608 32.1295 21.9612 33.7835 26.7089H11.2171C12.8711 21.9612 17.3832 18.6608 22.5003 18.6608ZM35.3828 42.6281H9.61782L8.15295 29.3621H36.8477L35.3828 42.6281Z"
                      fill="currentColor"></path>
                    <path
                      d="M22.5 37.2332C23.4708 37.2332 24.2578 36.4412 24.2578 35.4644C24.2578 34.4875 23.4708 33.6956 22.5 33.6956C21.5292 33.6956 20.7422 34.4875 20.7422 35.4644C20.7422 36.4412 21.5292 37.2332 22.5 37.2332Z"
                      fill="currentColor"></path>
                  </svg>
                </span>

                <span class="ms-1">Ayo mendaftar sekarang</span>

              </div>

              <a href="{{ route('guru.enrollment', ['uuid' => $course->uuid]) }}" class="btn btn-dark btn-block mb-6"
                type="button" name="button">Mendaftar
              </a>
            @endif



            <ul class="list-group list-group-flush">
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
                <span>{{ $course->curriculum->count() }} materi</span>
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

        <div class="">
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
  <script>
    $(document).ready(function() {
      $('.read-more').on('click', function(event) {
        event.preventDefault();
        $('#readcollapseExample').collapse('toggle');
        $(this).find('.more, .less').toggle();
      });
    });
  </script>
@endpush
