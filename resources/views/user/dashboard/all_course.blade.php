@extends('app.index')

@section('content')
  <div class="content d-flex flex-column flex-column-fluid pt-0" id="kt_content">
    <!--begin::Container-->
    <div class="container-fluid" id="kt_content_container">
      <!--begin::Post card-->
      <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-10 pb-lg-0">
          <!--begin::Section-->
          <div class="mb-17">
            <!--begin::Content-->
            <div class="d-flex flex-stack mb-5">
              <!--begin::Title-->
              <h3 class="text-dark">Semua Kursus</h3>
              <!--end::Title-->
              <!--begin::Link-->
              <a href="{{ route('course.all') }}" class="fs-6 fw-bold link-primary">Lihat Semua Kursus</a>
              <!--end::Link-->
            </div>
            <!--end::Content-->
            <!--begin::Separator-->
            <div class="separator separator-dashed mb-9"></div>
            <!--end::Separator-->
            <!--begin::Row-->
            <div class="row g-10">
              <!--begin::Col-->
              @foreach ($courses as $course)
                <div class="col-md-4">
                  <!--begin::Feature post-->
                  <div class="card-xl-stretch me-md-6">
                    <!--begin::Image-->
                    <a class="d-block overlay" href="{{ route('course.detail', ['uuid' => $course->uuid]) }}">
                      <!--begin::Image-->
                      <div
                        class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                        style="background-image:url('{{ asset('storage/images/course/' . $course->image) }}')"></div>
                      <!--end::Image-->
                      <!--begin::Action-->
                      <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                      </div>
                      <!--end::Action-->
                    </a>
                    <!--end::Image-->
                    <!--begin::Body-->
                    <div class="mt-5">
                      <!--begin::Title-->
                      <a href="../../demo15/dist/pages/user-profile/overview.html"
                        class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ $course->title }}</a>
                      <!--end::Title-->
                      <!--begin::Text-->
                      <div class="fw-bold fs-5 text-gray-600 text-dark my-4">{{ $course->sub_title }}</div>
                      <!--end::Text-->
                      <!--begin::Content-->
                      <div class="fs-6 fw-bolder">
                        <!--begin::Author-->
                        <a href="../../demo15/dist/pages/user-profile/overview.html"
                          class="text-gray-700 text-hover-primary">{{ Str::ucfirst($course->instructor->name) }}</a>
                        <!--end::Author-->
                        <!--begin::Date-->
                        <span class="text-muted"> | {{ $course->created_at->format('d-m-Y') }}</span>
                        <!--end::Date-->
                      </div>
                      <!--end::Content-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Feature post-->
                </div>
              @endforeach

              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Section-->

        </div>
        <!--end::Body-->
      </div>
      <!--end::Post card-->
    </div>
    <!--end::Container-->
  </div>
@endsection
