@extends('app.index')

@section('content')
  <div class="content d-flex flex-column flex-column-fluid pt-0" id="kt_content">
    <!--begin::Container-->
    <div class="container-fluid" id="kt_content_container">
      <!--begin::Form-->
      <form action="{{ route('instruktur.courses.store') }}" method="POST" enctype="multipart/form-data"
        class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf
        <!--begin::Aside column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
          <!--begin::Thumbnail settings-->
          <div class="card card-flush border border-dark rounded-0">
            <!--begin::Card header-->
            <div class="card-header">
              <!--begin::Card title-->
              <div class="card-title">
                <h2>Gambar Kursus</h2>
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body text-center pt-0">
              <!--begin::Image input-->
              <div class="image-input image-input-empty image-input-outline border border-dark rounded-0 mb-3"
                data-kt-image-input="true"
                style="background-image: url(https://s.udemycdn.com/course/200_H/placeholder.jpg)">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper" style="width: 220px;"></div>
                <!--end::Preview existing avatar-->
                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                  data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                  data-bs-original-title="Change image">
                  <i class="bi bi-pencil-fill fs-7"></i>
                  <!--begin::Inputs-->
                  <input type="file" name="image" accept=".png, .jpg, .jpeg" required>
                  <input type="hidden" name="image_remove">
                  <!--end::Inputs-->
                </label>
                <!--end::Label-->
                <!--begin::Cancel-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                  data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                  data-bs-original-title="Cancel image">
                  <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Cancel-->
                <!--begin::Remove-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                  data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                  data-bs-original-title="Remove image">
                  <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Remove-->
              </div>
              <!--end::Image input-->
              <!--begin::Description-->
              <div class="text-dark fs-7 required">Unggah gambar kursus Anda di sini. Hanya file gambar *.png, *.jpg dan
                *.jpeg
              </div>
              <!--end::Description-->
            </div>
            <!--end::Card body-->
          </div>
          <!--end::Thumbnail settings-->

          <!--begin::Category & tags-->
          <div class="card card-flush rounded rounded-0 border border-dark">
            <!--begin::Card header-->
            <div class="card-header">
              <!--begin::Card title-->
              <div class="card-title">
                <h2>Kategori</h2>
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
              <!--begin::Input group-->
              <!--begin::Label-->
              <label class="required form-label">Kategori Kursus</label>
              <!--end::Label-->
              <!--begin::Select2-->
              <select class="rounded rounded-0 select2-selection select2-selection--single form-select mb-2"
                data-control="select2" data-placeholder="Pilih Kategori" data-allow-clear="true" multiple=""
                data-select2-id="select2-data-9-oc0q" tabindex="-1" aria-hidden="true" name="category_id" required>

                <option></option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
              <!--end::Select2-->
            </div>
            <!--end::Card body-->
          </div>
          <!--end::Category & tags-->
        </div>
        <!--end::Aside column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
          <!--end:::Tabs-->
          <!--begin::Tab content-->
          <div class="tab-content">
            <!--begin::Tab pane-->
            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
              <div class="d-flex flex-column gap-7 gap-lg-10">
                <!--begin::General options-->
                <div class="card rounded-0 border border-dark card-flush py-0">
                  <!--begin::Card header-->
                  <div class="card-header">
                    <div class="card-title">
                      <h2>Kursus</h2>
                    </div>
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-5 fv-row fv-plugins-icon-container">
                      <!--begin::Label-->
                      <label class="required form-label">Judul Kursus</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" name="title" class="rounded rounded-0 form-control rounded rounded-0 mb-2"
                        placeholder="Judul Kursus" name="title" required>
                      <!--end::Input-->
                      <!--begin::Description-->
                      {{-- <div class="text-muted fs-7">Judul Kursus is required.</div> --}}
                      <!--end::Description-->
                      <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>

                    <div class="mb-5 fv-row fv-plugins-icon-container">
                      <!--begin::Label-->
                      <label class="required form-label">Subtitle Kursus</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <textarea class="rounded rounded-0 form-control mb-2" name="sub_title" id="sub_title" cols="30" rows="3"
                        required></textarea>
                      <!--end::Input-->
                      <!--begin::Description-->
                      {{-- <div class="text-muted fs-7">Subtitle Kursus is required.</div> --}}
                      <!--end::Description-->
                      <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="form-group">
                      <label for="content" class="form-label">Deskripsi</label>
                      <textarea class="ckeditor rounded rounded-0 form-control" name="description"></textarea>
                    </div>

                    <!--end::Input group-->
                  </div>
                  <!--end::Card header-->
                </div>
                <!--end::General options-->
              </div>
              <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
          </div>
          <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="#" id="kt_ecommerce_add_product_cancel" class="btn btn-danger me-5 rounded rounded-0">Batal</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" class="btn btn-dark rounded rounded-0">
              Simpan
            </button>
            <!--end::Button-->
          </div>
          <!--end::Main column-->
          <div></div>
      </form>
      <!--end::Form-->
    </div>
    <!--end::Container-->

  </div>
@endsection


@push('js')
  <script src="//cdn.ckeditor.com/4.14.1/basic/ckeditor.js"></script>
  <!--begin::Page Custom Javascript(used by this page)-->
  <script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
  <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
  <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
  <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
  <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
  <!--end::Page Custom Javascript-->
@endpush
