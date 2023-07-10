@extends('app.index')

@push('css')
  <!--begin::Page Vendor Stylesheets(used by this page)-->
  <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
  <!--end::Page Vendor Stylesheets-->
@endpush

@section('content')
  <div class="content d-flex flex-column flex-column-fluid pt-0" id="kt_content">
    <!--begin::Container-->
    <div class="container-fluid" id="kt_content_container">
      <!--begin::Card-->
      <div class="card border">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
          <!--begin::Card title-->
          <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
              <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
              <span class="svg-icon svg-icon-1 position-absolute ms-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                    transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                  <path
                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                    fill="black"></path>
                </svg>
              </span>
              <!--end::Svg Icon-->
              <input type="text" class="form-control form-control-solid w-250px ps-14" placeholder="Search">
            </div>
            <!--end::Search-->
          </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
          <!--begin::Table-->
          <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
            <thead>
              <tr class="fw-bold fs-6 text-muted">
                <th>#</th>
                <th>Kursus</th>
                <th>Kategori</th>
                <th>Mendaftar</th>
                <th class="text-end">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($enrollments as $enrollment)
                <tr>
                  <td>{{ $enrollment->course->id }}</td>
                  <td class="d-flex align-items-center">
                    <!--begin:: Thumbnail -->
                    <div class="symbol symbol-60px symbol-2by3 me-4">
                      <div class="symbol-label"
                        style="background-image: url('{{ asset('storage/images/course/' . $enrollment->course->image) }}')">
                      </div>
                    </div>
                    <!--end::Thumbnail-->
                    <!--begin::Course details-->
                    <div class="flex-grow-1 me-2">
                      <a href="{{ route('guru.mycourse.detail', ['uuid' => $enrollment->course->uuid]) }}"
                        class="text-gray-800 fw-bolder text-hover-primary fs-6">{{ Str::ucfirst($enrollment->course->title) }}</a>

                      @php
                        $sub_curiculum = $enrollment->course->subcurriculum->count();
                        $finished = 0;
                        
                        foreach ($enrollment->course->subcurriculum as $subcurriculum) {
                            $finished += $subcurriculum->finished->count();
                        }
                        
                        $persentasi = 0; // Default value
                        
                        if ($finished > 0) {
                            $persentasi = ($finished / $sub_curiculum) * 100;
                        }
                      @endphp

                      <div class="d-flex flex-stack mb-2">
                        <span class="text-dark me-2 fs-7 fw-bold">{{ $persentasi }}% selesai</span>
                      </div>

                      <div class="progress h-6px w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $persentasi }}%"
                          aria-valuenow="{{ $persentasi }}" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      {{-- <span class="text-muted fw-bold d-block pt-1">

                        Persentasi: {{ $persentasi }}

                      </span> --}}

                    </div>
                    <!--begin::Course details-->
                  </td>

                  <td>
                    <span class="text-gray-800 fw-bolder">{{ Str::ucfirst($enrollment->course->category->name) }}</span>
                  </td>
                  <td>{{ Carbon\Carbon::parse($enrollment->course->created_at)->isoFormat('DD MMMM YYYY') }}</td>
                  <td class="text-end">
                    <a href="{{ route('guru.mycourse.detail', ['uuid' => $enrollment->course->uuid]) }}"
                      class="btn btn-icon btn-light btn-sm border-0">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                      <span class="svg-icon svg-icon-2 svg-icon-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none">
                          <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                            transform="rotate(-180 18 13)" fill="black"></rect>
                          <path
                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                            fill="black"></path>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </a>
                  </td>
                </tr>
              @endforeach

          </table>
          <!--end::Table-->
        </div>
        <!--end::Card body-->
      </div>
      <!--end::Card-->
    </div>
    <!--end::Container-->
  </div>
@endsection

@push('js')
  <!--begin::Page Vendors Javascript(used by this page)-->
  <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
  <!--end::Page Custom Javascript-->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      $("#kt_datatable_example_1").DataTable();
    });
  </script>

  @if (Session::has('success'))
    <script>
      Swal.fire({
        text: "{{ Session::get('success') }}",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Ok, got it!",
        customClass: {
          confirmButton: "btn btn-primary"
        }
      });
    </script>
  @endif


  <script>
    $('.showConfirm').click(function(event) {

      let form = $(this).closest("form");
      let name = $(this).data("name");
      event.preventDefault();

      Swal.fire({
          html: `Are you sure you want to delete <strong>${name}</strong> ?`,
          icon: "warning",
          buttonsStyling: false,
          showCancelButton: true,
          confirmButtonText: "Ok, got it!",
          cancelButtonText: 'Nope, cancel it',
          customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: 'btn btn-danger'
          }
        })

        .then((result) => {
          if (result.isConfirmed) {
            form.submit();
          } else {
            // Do something else, like showing a message or performing a different action
          }
        });

    });
  </script>
@endpush
