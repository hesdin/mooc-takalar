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
      <!--begin::Card-->
      <div class="card">
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
          <!--begin::Card title-->
          <!--begin::Card toolbar-->
          <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

              <!--begin::Add user-->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_course_category">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                <span class="svg-icon svg-icon-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                      transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black">
                    </rect>
                  </svg>
                </span>
                <!--end::Svg Icon-->Add Category
              </button>
              <!--end::Add user-->
            </div>
            <!--end::Toolbar-->
          </div>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
          <!--begin::Table-->
          <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
            <thead>
              <tr class="fw-bold fs-6 text-muted">
                <th>ID</th>
                <th>Category Name</th>
                <th>Created At</th>
                <th class="text-end">Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($categories as $category)
                <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ Str::ucfirst($category->name) }}</td>
                  <td>{{ $category->created_at }}</td>
                  <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click"
                      data-kt-menu-placement="bottom-end">Actions
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                      <span class="svg-icon svg-icon-5 m-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none">
                          <path
                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                            fill="black"></path>
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
                        <a data-bs-toggle="modal" data-bs-target="#editModal{{ $category->id }}"
                          class="menu-link px-3">Edit</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <form id="delete-form-{{ $category->id }}"
                          action="{{ route('admin.course-categories.destroy', $category->id) }}" method="POST"
                          class="d-inline">
                          @csrf
                          @method('DELETE')
                          <a href="#" class="menu-link px-3 showConfirm"
                            data-name="{{ $category->name }}">Delete</a>
                        </form>
                        <!--end::Menu item-->
                      </div>
                      <!--end::Menu-->
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

  {{-- Create Modals --}}
  <div class="modal fade" tabindex="-1" id="add_course_category">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Course Category</h5>

          <!--begin::Close-->
          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                  transform="rotate(-45 6 17.3137)" fill="black" />
                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                  transform="rotate(45 7.41422 6)" fill="black" />
              </svg></span>
          </div>
          <!--end::Close-->
        </div>

        <form action="{{ route('admin.course-categories.store') }}" method="POST">
          <div class="modal-body">
            @csrf
            <div class="form-group">
              <label for="create_name">Name:</label>
              <input type="text" class="form-control" id="create_name" name="name" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- Edit Modals -->
  @foreach ($categories as $category)
    <div class="modal fade" id="editModal{{ $category->id }}" tabindex="-1" role="dialog"
      aria-labelledby="editModal{{ $category->id }}Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModal{{ $category->id }}Label">Edit Course Category</h5>

            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
              <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" viewBox="0 0 24 24" fill="none">
                  <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                    transform="rotate(-45 6 17.3137)" fill="black" />
                  <rect x="7.41422" y="6" width="16" height="2" rx="1"
                    transform="rotate(45 7.41422 6)" fill="black" />
                </svg></span>
            </div>
            <!--end::Close-->
          </div>

          <form action="{{ route('admin.course-categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
              <div class="form-group">
                <label for="edit_name{{ $category->id }}">Name:</label>
                <input type="text" class="form-control" id="edit_name{{ $category->id }}" name="name"
                  value="{{ $category->name }}" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  @endforeach
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
          html: `Are you sure you want to delete <strong>${name}</strong> category?`,
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
