<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
  <base href="">
  <title>MOOC untuk Guru Kabupaten Takalar - Platform Pembelajaran Online Terdepan</title>
  <meta charset="utf-8" />
  <meta name="description"
    content="MOOC untuk Guru Kabupaten Takalar adalah platform pembelajaran online tercanggih yang ditujukan bagi para guru di Kabupaten Takalar. Kami menyediakan berbagai kursus dan sumber daya pembelajaran untuk meningkatkan keterampilan dan pengetahuan mereka. Bergabunglah sekarang dan tingkatkan kemampuan mengajar Anda!" />
  <meta name="keywords"
    content="MOOC, Guru, Kabupaten Takalar, pembelajaran online, kursus, sumber daya, pendidikan, pengembangan profesional, keterampilan mengajar, e-learning" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:locale" content="id_ID" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="MOOC untuk Guru Kabupaten Takalar - Platform Pembelajaran Online Terdepan" />
  <meta property="og:url" content="https://mooc-guru-kabupaten-takalar.com" />

  <meta property="og:site_name" content="MOOC Kabupaten Takalar" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->
  @include('app.css')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
  <!--begin::Main-->
  <!--begin::Root-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div
      class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
      style="background-image: url(assets/media/illustrations/dozzy-1/14.png">
      <!--begin::Content-->
      <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <!--begin::Logo-->
        <a href="{{ route('home') }}" class="mb-12">
          <img alt="Logo"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/MOOC_-_Massive_Open_Online_Course_logo.svg/1598px-MOOC_-_Massive_Open_Online_Course_logo.svg.png?20130311214424"
            class="h-40px" />
        </a>
        <!--end::Logo-->
        <!--begin::Wrapper-->
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
          <!--begin::Form-->
          <form class="form w-100" action="{{ route('loginProcess') }}" method="POST">
            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-10">
              <!--begin::Title-->
              <h1 class="text-dark mb-3">Sign In to MOOC</h1>
              <!--end::Title-->
            </div>
            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
              <!--begin::Label-->
              <label class="form-label fs-6 fw-bolder text-dark">Username</label>
              <!--end::Label-->
              <!--begin::Input-->
              <input class="form-control form-control-lg form-control-solid" type="text" name="username"
                autocomplete="off" required />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                <!--end::Label-->
                <!--begin::Link-->
                <a href="#" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                <!--end::Link-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Input-->
              <input class="form-control form-control-lg form-control-solid" type="password" name="password"
                autocomplete="off" required />
              <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center">
              <!--begin::Submit button-->
              <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">Sign In</span>
              </button>
              <!--end::Submit button-->
              <!--begin::Separator-->

            </div>
            <!--end::Actions-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Content-->
      <!--begin::Footer-->
      <div class="d-flex flex-center flex-column-auto p-10">
        <!--begin::Links-->
        <div class="d-flex align-items-center fw-bold fs-6">
          <a href="#" class="text-active text-hover-primary px-2">Copyright @ 2023</a>
          <a href="#" class="text-dark text-hover-primary">MOOC - Kabupaten
            Takalar</a>
        </div>
        <!--end::Links-->
      </div>
      <!--end::Footer-->
    </div>
    <!--end::Authentication - Sign-in-->
  </div>
  <!--end::Root-->
  <!--end::Main-->
  <!--begin::Javascript-->
  @include('app.js')
  <!--begin::Page Custom Javascript(used by this page)-->
  <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
  <!--end::Page Custom Javascript-->
  <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
