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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search Curriculum" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                            Tambah Sub Kurikulum
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
                                <th class="min-w-50px">Order</th>
                                <th class="min-w-200px">Title</th>
                                <th class="min-w-70px">Tipe</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($curriculum->subcurriculum as $subcurriculum)
                                <!--begin::Table row-->
                                <tr>
                                    <td class="text-start pe-0">
                                        <span class="fw-bolder text-dark">{{ $subcurriculum->order }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                                    data-kt-ecommerce-product-filter="product_name">{{ $subcurriculum->title }}</a>
                                                <!--end::Title-->
                                        </div>
                                    </td>
                                    <td class="text-start pe-0" data-order="Scheduled">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">{{ Str::contains($subcurriculum->content, ['.pdf', '.ppt', '.pptx']) ? 'Dokumen' : 'Link' }}</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo15/dist/apps/ecommerce/catalog/edit-product.html"
                                                    class="menu-link px-3">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <form id="delete-form-{{ $curriculum->id }}" action="{{ route('instruktur.courses.curriculum.subcurriculum.destroy', ['course' => $course->id, 'curriculum' => $curriculum->id, 'subcurriculum' => $subcurriculum->id]) }}" method="POST" class="d-inline">
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
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span class="svg-icon svg-icon-2x"></span>
                        </div>
                        <!--end::Close-->
                    </div>

                    <form action="{{ route('instruktur.courses.curriculum.subcurriculum.store', ['course' => $course->id, 'curriculum' => $curriculum->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-10">
                                <label for="order" class="required form-label">Urutan</label>
                                <input type="text" class="form-control" name="order" id="order"
                                    placeholder="" required />
                            </div>
                            <div class="mb-10">
                                <label for="title" class="required form-label">Judul</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    placeholder="" required />
                            </div>
                            <div class="mb-10">
                                <label for="tipe" class="required form-label">Tipe Konten</label>
                                <select class="form-select" aria-label="Select example" id="tipe" name="tipe" required>
                                    <option value="" selected hidden>Pilih</option>
                                    <option value="link">Link</option>
                                    <option value="document">Dokumen</option>
                                </select>
                            </div>

                            <div class="mb-10">
                                <label for="content" class="required form-label">Konten</label>
                                <input type="text" class="form-control" name="content" id="content"
                                    placeholder="" required />
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

        $('#tipe').on('change', function() {
            if (this.value == "link") {
                $('#content').prop('type', 'text')
            } else {
                $('#content').prop('type', 'file')

            }
            $('#content').value = null
        })
    </script>
@endpush
