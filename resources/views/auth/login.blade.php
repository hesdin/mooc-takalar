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
            @if (Session::has('error'))
              <div class="alert alert-danger d-flex align-items-center p-5 mb-10">
                <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                <span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path opacity="0.3"
                      d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                      fill="black"></path>
                    <path
                      d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                      fill="black"></path>
                  </svg>
                </span>
                <!--end::Svg Icon-->
                <div class="d-flex flex-column">
                  <h4 class="mb-1 text-danger">Login Invalid</h4>
                  <span>{{ Session::get('error') }}</span>
                </div>
              </div>
            @endif


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
