@extends('app.index')

@section('content')
  <div class="content d-flex flex-column flex-column-fluid pt-0" id="kt_content">
    <!--begin::Container-->
    <div class="container-fluid pt-0" id="kt_content_container">

      <!--end::Row-->
      <!--begin::Row-->
      <div class="row g-5 g-lg-10">

        <!--begin::Col-->
        <div class="col-xxl-12 col-md-12 mb-xxl-5">
          <!--begin::Tables Widget 9-->
          <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
            <!--begin::Col-->
            <div class="col-md-6 col-lg-4 col-xl-4">
              <!--begin::Card-->
              <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                  <!--begin::Name-->
                  <a href="#" class="text-gray-800 d-flex flex-column">
                    <!--begin::Image-->
                    <i class="fas fa-user fs-3x text-dark mb-3"></i>
                    <!--end::Image-->
                    <!--begin::Title-->
                    <div class="fs-5 mb-2">Total Guru</div>
                    <!--end::Title-->
                  </a>
                  <!--end::Name-->
                  <!--begin::Description-->
                  <div class="fs-2 fw-bolder text-dark-400">{{ $guru }}</div>
                  <!--end::Description-->
                </div>
                <!--end::Card body-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-6 col-lg-4 col-xl-4">
              <!--begin::Card-->
              <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                  <!--begin::Name-->
                  <a href="#" class="text-gray-800 d-flex flex-column">
                    <!--begin::Image-->
                    <i class="fas fa-user-graduate fs-3x text-dark mb-3"></i>
                    <!--end::Image-->
                    <!--begin::Title-->
                    <div class="fs-5 mb-2">Total Instruktur</div>
                    <!--end::Title-->
                  </a>
                  <!--end::Name-->
                  <!--begin::Description-->
                  <div class="fs-2 fw-bolder text-dark-400">{{ $instruktur }}</div>
                  <!--end::Description-->
                </div>
                <!--end::Card body-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-6 col-lg-4 col-xl-4">
              <!--begin::Card-->
              <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                  <!--begin::Name-->
                  <a href="#" class="text-gray-800 d-flex flex-column">
                    <!--begin::Image-->
                    <i class="fas fa-layer-group fs-3x text-dark mb-3"></i>
                    <!--end::Image-->
                    <!--begin::Title-->
                    <div class="fs-5 mb-2">Total Kursus</div>
                    <!--end::Title-->
                  </a>
                  <!--end::Name-->
                  <!--begin::Description-->
                  <div class="fs-2 fw-bolder text-dark-400">{{ $kursus }}</div>
                  <!--end::Description-->
                </div>
                <!--end::Card body-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Col-->

          </div>
          <!--end::Tables Widget 9-->
        </div>
        <!--end::Col-->




      </div>
      <!--end::Row-->

      <div class="row g-5 g-lg-10">
        <div class="col-xxl-8 col-md-8 mb-xxl-10">
          <div class="card">
            <div class="card-header mt-5">
              <!--begin::Card title-->
              <div class="card-title flex-column">
                <h3 class="fw-bolder mb-1">Instruktur</h3>
                <div class="fs-7 text-gray-800">Instruktur dengan Course teratas</div>
              </div>
              <!--begin::Card title-->
            </div>
            <!--begin::Card body-->
            <div class="card-body py-4">
              <!--begin::Table-->
              <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                <thead>
                  <tr class="fw-bold fs-6 text-muted">
                    <th>Nama Instruktur</th>
                    <th>Keahlian</th>
                    <th>Total Course</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ($instructors as $instructor)
                    <tr>
                      <td class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                          <a href="#">
                            <div class="symbol-label">
                              <img src="{{ asset('storage/images/' . $instructor->image) }}" alt="{{ $instructor->name }}"
                                class="w-100">
                            </div>
                          </a>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::User details-->
                        <div class="d-flex flex-column">
                          <a href="#"
                            class="text-dark fw-bolder text-hover-primary mb-1">{{ Str::ucfirst($instructor->name) }}</a>
                          <span>{{ $instructor->username }}</span>
                        </div>
                        <!--begin::User details-->
                      </td>

                      <td>{{ Str::ucfirst($instructor->expertise) }}</td>
                      <td>{{ $instructor->courses->count() }}</td>
                      <td class="text-end">
                      </td>
                    </tr>
                  @endforeach

              </table>
              <!--end::Table-->
            </div>
            <!--end::Card body-->
          </div>
        </div>
      </div>
    </div>
    <!--end::Container-->
  </div>
@endsection
