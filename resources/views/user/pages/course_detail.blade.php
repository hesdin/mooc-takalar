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
      <ol class="breadcrumb breadcrumb-scroll">
        <li class="breadcrumb-item">
          <a class="text-gray-800" href="#">
            Home
          </a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-gray-800" href="#">
            Courses List
          </a>
        </li>
        <li class="breadcrumb-item text-gray-800 active" aria-current="page">
          Courses Single
        </li>
      </ol>
    </nav>
  </div>

  <div class="container">
    <div class="row mb-8">
      <div class="col-lg-8 mb-6 mb-lg-0 position-relative">
        <h1 class="me-xl-14">
          {{ $course->title }}
        </h1>
        <p class="me-xl-13 mb-5">{{ $course->sub_title }}</p>

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
              <a class="nav-link" id="pills-overview-tab" data-bs-toggle="pill" href="#pills-overview" role="tab"
                aria-controls="pills-overview" aria-selected="false">Ringkasan</a>
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
          <div class="tab-pane fade" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
            <h3 class="">Deskripsi Kursus</h3>
            <div class="mb-6 line-height-md">
              {!! $course->description !!}
            </div>

            <p class="collapse mb-6 line-height-md" id="readcollapseExample">Anim pariatur cliche reprehenderit, enim
              eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
              anderson cred nesciunt sapiente I will help you learn and master Figma app comprehensively from scratch.
              Figma is an innovative and brilliant tool for User Interface design. It's used by everyone from
              entrepreneurs ea proident.</p>
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
                    <li>{{ $curriculum->title }}</li>
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
                        type="button" data-bs-toggle="collapse"
                        data-bs-target="#Curriculumcollapse{{ $curriculum->id }}" aria-expanded="true"
                        aria-controls="Curriculumcollapse{{ $curriculum->id }}">
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
                  80 students
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

            <p class="mb-6 line-height-md">I am a UI/UX designer and an iOS developer with having almost six years of
              experience in application development and also ten years of graphic design and User Interface design.</p>
            <p class="mb-6 line-height-md">My passion is helping people to learn new skills in a short-term course and
              achieve their goals. I've been designing for more than ten years and developing iOS apps for four years.
              It's my honor if I could help you learn to program in a simple word. I currently am teaching iOS 13, Swift
              5, ARKit 3, Sketch 5, Illustrator, Photoshop, Cinema 4D, HTML, CSS, JavaScript, etc.</p>
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
                  d="M9.99974 3.0083C5.79444 3.0083 2.37305 6.42973 2.37305 10.635C2.37305 14.8405 5.79448 18.2619 9.99974 18.2619C14.2053 18.2619 17.6264 14.8405 17.6264 10.635C17.6264 6.42973 14.205 3.0083 9.99974 3.0083ZM9.99974 16.8797C6.55666 16.8797 3.7555 14.0783 3.7555 10.6353C3.7555 7.19219 6.55662 4.39103 9.99974 4.39103C13.4428 4.39103 16.244 7.19219 16.244 10.6353C16.244 14.0785 13.4428 16.8797 9.99974 16.8797Z"
                  fill="currentColor"></path>
                <path
                  d="M12.1193 10.4048H10.2761V7.73202C10.2761 7.35022 9.9666 7.04077 9.5848 7.04077C9.20301 7.04077 8.89355 7.35022 8.89355 7.73202V11.0961C8.89355 11.4779 9.20301 11.7873 9.5848 11.7873H12.1194C12.5012 11.7873 12.8106 11.4779 12.8106 11.0961C12.8106 10.7143 12.5011 10.4048 12.1193 10.4048Z"
                  fill="currentColor"></path>
                <path
                  d="M6.08489 15.5823C5.80102 15.3267 5.36391 15.35 5.10864 15.6336L3.0349 17.9378C2.77935 18.2214 2.80263 18.6585 3.08627 18.9138C3.2183 19.033 3.38372 19.0915 3.54849 19.0915C3.73767 19.0915 3.92614 19.0143 4.06255 18.8625L6.13629 16.5583C6.3918 16.2746 6.36852 15.8375 6.08489 15.5823Z"
                  fill="currentColor"></path>
                <path
                  d="M16.9661 17.9381L14.8924 15.634C14.6375 15.3501 14.2002 15.327 13.9163 15.5826C13.6325 15.8379 13.6097 16.275 13.865 16.5586L15.9387 18.8628C16.0749 19.0144 16.2633 19.0916 16.4525 19.0916C16.6171 19.0916 16.7825 19.033 16.9147 18.9141C17.1986 18.6588 17.2214 18.2217 16.9661 17.9381Z"
                  fill="currentColor"></path>
                <path
                  d="M5.96733 1.91597C4.59382 0.571053 2.3798 0.573123 1.03211 1.92105C0.361569 2.59132 -0.00479631 3.47819 4.74212e-05 4.41826C0.00512553 5.34705 0.373327 6.21665 1.03715 6.86689C1.17172 6.99845 1.34614 7.06411 1.52078 7.06411C1.69774 7.06411 1.87469 6.99638 2.00949 6.86181L5.9726 2.8987C6.10303 2.76808 6.17584 2.59085 6.17491 2.40632C6.17401 2.22171 6.09932 2.04523 5.96733 1.91597ZM1.5966 5.31939C1.45813 5.04037 1.38414 4.73162 1.38254 4.41088C1.37953 3.84315 1.60211 3.30581 2.00949 2.89843C2.41594 2.49222 2.95328 2.28921 3.49359 2.28921C3.80949 2.28921 4.12655 2.35855 4.4187 2.49726L1.5966 5.31939Z"
                  fill="currentColor"></path>
                <path
                  d="M18.9673 1.92072C17.6194 0.573026 15.4053 0.570721 14.0318 1.91564C13.9 2.04489 13.8252 2.22142 13.8242 2.40595C13.8233 2.59052 13.8963 2.76794 14.0268 2.89833L17.9899 6.86144C18.1247 6.99648 18.3016 7.06398 18.4786 7.06398C18.6532 7.06398 18.8279 6.99831 18.9622 6.86628C19.6263 6.21628 19.9945 5.34672 19.9993 4.41789C20.0042 3.47809 19.6376 2.59122 18.9673 1.92072ZM18.4028 5.3193L15.5807 2.4972C16.3729 2.12114 17.3459 2.25458 17.9899 2.89856C18.3973 3.30594 18.6199 3.84301 18.6169 4.41102C18.6152 4.73152 18.5413 5.04051 18.4028 5.3193Z"
                  fill="currentColor"></path>
              </svg>

              <span class="ms-2">2 days left at this price!</span>
            </div>

            <a href="{{ route('guru.enrollment', ['uuid' => $course->uuid]) }}" class="btn btn-orange btn-block mb-6"
              type="button" name="button">ENROLL</a>

            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex align-items-center py-3">
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
              </li>
              <li class="list-group-item d-flex align-items-center py-3">
                <div class="text-secondary d-flex icon-uxs">
                  <!-- Icon -->
                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M15.7262 1.94825C13.4059 0.396725 10.401 0.315126 8.00002 1.73839C5.59897 0.315126 2.59406 0.396725 0.273859 1.94825C0.102729 2.06241 -3.54271e-05 2.25456 6.30651e-07 2.46027V14.6553C-0.000323889 14.8826 0.124616 15.0914 0.324917 15.1987C0.525109 15.3058 0.768066 15.294 0.9569 15.168C2.98471 13.8111 5.63063 13.8111 7.65844 15.168C7.66645 15.1735 7.67568 15.1747 7.68368 15.1796C7.69169 15.1846 7.7003 15.1932 7.70953 15.1987C7.73102 15.2079 7.75302 15.2159 7.77538 15.2227C7.79773 15.2329 7.82077 15.2415 7.84428 15.2486C7.87828 15.2564 7.91286 15.2616 7.94766 15.264C7.96551 15.264 7.98213 15.2714 7.99998 15.2714C8.00492 15.2714 8.00982 15.2714 8.01538 15.2714C8.03604 15.2699 8.05655 15.2672 8.07693 15.2634C8.10808 15.2602 8.13895 15.2547 8.16923 15.2467C8.19018 15.2399 8.21074 15.2319 8.23078 15.2227C8.24986 15.2147 8.27016 15.2104 8.28862 15.2006C8.29724 15.1956 8.30402 15.1883 8.31264 15.1827C8.32125 15.1772 8.3311 15.1753 8.33971 15.1698C10.3675 13.8129 13.0134 13.8129 15.0413 15.1698C15.3233 15.3595 15.7057 15.2846 15.8953 15.0026C15.9643 14.9 16.0008 14.779 16 14.6554V2.46027C16 2.25456 15.8973 2.06241 15.7262 1.94825ZM7.38462 13.6036C5.43516 12.6896 3.18022 12.6896 1.23076 13.6036V2.79993C3.12732 1.67313 5.48806 1.67313 7.38462 2.79993V13.6036ZM14.7692 13.6036C12.8198 12.6896 10.5648 12.6896 8.61538 13.6036V2.79993C10.5119 1.67313 12.8727 1.67313 14.7692 2.79993V13.6036Z"
                      fill="currentColor"></path>
                  </svg>

                </div>
                <h6 class="mb-0 ms-3 me-auto">Lectures</h6>
                <span>32</span>
              </li>

              <li class="list-group-item d-flex align-items-center py-3">
                <div class="text-secondary d-flex icon-uxs">
                  <!-- Icon -->
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                      fill="currentColor"></path>
                  </svg>

                </div>
                <h6 class="mb-0 ms-3 me-auto">Enrolled</h6>
                <span>1982 students</span>
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
      <h1>Related Courses</h1>
      <p class="font-size-lg text-capitalize">Discover your perfect program in our courses.</p>
    </div>

    <div class="mx-n4 mb-12 flickity-enabled is-draggable"
      data-flickity="{&quot;pageDots&quot;: true, &quot;prevNextButtons&quot;: false, &quot;cellAlign&quot;: &quot;left&quot;, &quot;wrapAround&quot;: true, &quot;imagesLoaded&quot;: true}"
      tabindex="0">







      <div class="flickity-viewport" style="height: 371.719px; touch-action: pan-y;">
        <div class="flickity-slider" style="left: 0px; transform: translateX(-175%);">
          <div class="col-md-6 col-lg-4 col-xl-3 pb-4 pb-md-5 is-selected"
            style="padding-right: 15px; padding-left: 15px; position: absolute; left: 175%;">
            <!-- Card -->
            <div class="card border shadow-dark-hover p-2 sk-fade">
              <!-- Image -->
              <div class="card-zoom position-relative">
                <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-3 d-block">
                  <img class="rounded shadow-light-lg" src="assets/img/products/product-15.jpg" alt="...">
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
                  <img class="rounded shadow-light-lg" src="assets/img/products/product-14.jpg" alt="...">
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
                  <img class="rounded shadow-light-lg" src="assets/img/products/product-16.jpg" alt="...">
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
                  <img class="rounded shadow-light-lg" src="assets/img/products/product-12.jpg" alt="...">
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
                  <img class="rounded shadow-light-lg" src="assets/img/products/product-13.jpg" alt="...">
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
                  <img class="rounded shadow-light-lg" src="assets/img/products/product-11.jpg" alt="...">
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
            style="padding-right: 15px; padding-left: 15px; position: absolute; left: 150%;" aria-hidden="true">
            <!-- Card -->
            <div class="card border shadow-dark-hover p-2 sk-fade">
              <!-- Image -->
              <div class="card-zoom position-relative">
                <a href="course-single-v5.html" class="card-img sk-thumbnail img-ratio-3 d-block">
                  <img class="rounded shadow-light-lg" src="assets/img/products/product-10.jpg" alt="...">
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  {{-- toastr js --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

  <script>
    $(document).ready(function() {
      toastr.options.timeOut = 10000;
      //   @if (Session::has('error'))
      toastr.error('test');
      //   @elseif (Session::has('success'))
      // toastr.success('{{ Session::get('success') }}');
      //   @endif
    });
  </script>
@endpush
