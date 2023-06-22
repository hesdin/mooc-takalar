@extends('app.index')

@push('css')
  <!--begin::Page Vendor Stylesheets(used by this page)-->
  <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
  <!--end::Page Vendor Stylesheets-->
@endpush

@section('content')
  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-fluid" id="kt_content_container">
      <!--begin::Products-->
      <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
          <!--begin::Card title-->
          <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
              <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
              <span class="svg-icon svg-icon-1 position-absolute ms-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                    transform="rotate(45 17.0365 15.1223)" fill="black" />
                  <path
                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                    fill="black" />
                </svg>
              </span>
              <!--end::Svg Icon-->
              <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14"
                placeholder="Search Curriculum" />
            </div>
            <!--end::Search-->
          </div>
          <!--end::Card title-->
          <!--begin::Card toolbar-->
          <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
              Tambah Kurikulum
            </button>
          </div>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
          <!--begin::Table-->
          <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example_1">
            <!--begin::Table head-->
            <thead>
              <!--begin::Table row-->
              <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th class="min-w-200px">Title</th>
                <th class="min-w-70px">Created At</th>
              </tr>
              <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">
              @foreach ($course->curriculum as $curriculum)
                <!--begin::Table row-->
                <tr>
                  <!--begin::Category=-->
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="{{ route('instruktur.courses.curriculum.subcurriculum.index', ['course' => $course->id, 'curriculum' => $curriculum->id]) }}"
                        class="symbol symbol-50px">
                        <span class="symbol-label bg-light-primary">
                          <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                          <span class="svg-icon svg-icon-2x svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none">
                              <path opacity="0.3"
                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                fill="black"></path>
                              <path
                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                fill="black"></path>
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </span>
                      </a>
                      <!--end::Thumbnail-->
                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="{{ route('instruktur.courses.curriculum.subcurriculum.index', ['course' => $course->id, 'curriculum' => $curriculum->id]) }}"
                          class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                          data-kt-ecommerce-product-filter="product_name">{{ $curriculum->title }}</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-start pe-0">
                    <span
                      class="fw-bolder text-dark">{{ Carbon\Carbon::parse($curriculum->created_at)->isoFormat('DD MMMM YYYY') }}</span>
                  </td>
                  <!--begin::Action=-->
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                      data-kt-menu-placement="bottom-end">Actions
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                      <span class="svg-icon svg-icon-5 m-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none">
                          <path
                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                            fill="black" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </a>
                    <!--begin::Menu-->
                    <div
                      class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                      data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="../../demo15/dist/apps/ecommerce/catalog/edit-product.html"
                          class="menu-link px-3">Edit</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <form id="delete-form-{{ $curriculum->id }}"
                          action="{{ route('instruktur.courses.curriculum.destroy', ['course' => $course->id, 'curriculum' => $curriculum->id]) }}"
                          method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <a href="#" class="menu-link px-3 showConfirm"
                            data-kt-ecommerce-product-filter="delete_row">Delete</a>
                        </form>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                  <!--end::Action=-->
                </tr>
                <!--end::Table row-->
              @endforeach
            </tbody>
            <!--end::Table body-->
          </table>
          <!--end::Table-->
        </div>
        <!--end::Card body-->
      </div>
      <!--end::Products-->
    </div>
    <!--end::Container-->


    <div class="modal fade" tabindex="-1" id="kt_modal_1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Kurikulum</h5>

            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
              <span class="svg-icon svg-icon-2x"></span>
            </div>
            <!--end::Close-->
          </div>

          <form action="{{ route('instruktur.courses.curriculum.store', $course->id) }}" method="post">
            @csrf
            <div class="modal-body">
              <div class="mb-10">
                <label for="title" class="required form-label">Judul</label>
                <input type="text" class="form-control form-control-solid" name="title" id="title"
                  placeholder="" />
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
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
