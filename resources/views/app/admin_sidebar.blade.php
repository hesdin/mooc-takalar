<div id="kt_aside" class="aside bg-white pt-7 pb-4 pb-lg-7 pt-lg-17" data-kt-drawer="true" data-kt-drawer-name="aside"
  data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
  data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
  data-kt-drawer-toggle="#kt_aside_toggle">
  <!--begin::Brand-->
  <div class="aside-logo flex-column-auto px-9 mb-9 mb-lg-17 mx-auto" id="kt_aside_logo">
    <!--begin::Logo-->
    <a href="../../demo15/dist/index.html">
      <img alt="Logo"
        src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/MOOC_-_Massive_Open_Online_Course_logo.svg/1598px-MOOC_-_Massive_Open_Online_Course_logo.svg.png?20130311214424"
        class="h-30px logo" />
    </a>
    <!--end::Logo-->
  </div>
  <!--end::Brand-->
  <!--begin::Aside user-->
  <!--end::Aside user-->
  <!--begin::Aside menu-->
  <div class="aside-menu flex-column-fluid ps-3 ps-lg-5 pe-1 mb-9" id="kt_aside_menu">
    <!--begin::Aside Menu-->
    <div class="w-100 hover-scroll-overlay-y pe-2 me-2" id="kt_aside_menu_wrapper" data-kt-scroll="true"
      data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
      data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_user, #kt_aside_footer"
      data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="0">
      <!--begin::Menu-->
      <div class="menu menu-column menu-rounded fw-bold" id="#kt_aside_menu" data-kt-menu="true">
        <div class="menu-item">
          <a class="menu-link" href="{{ route('admin.dashboard') }}">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
              <span class="svg-icon svg-icon-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                  fill="none">
                  <rect x="2" y="2" width="9" height="9" rx="2" fill="black">
                  </rect>
                  <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                    fill="black"></rect>
                  <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                    fill="black"></rect>
                  <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                    fill="black"></rect>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Beranda</span>
          </a>
        </div>

        <div class="menu-item">
          <a class="menu-link" href="{{ route('admin.instructors.index') }}">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
              <span class="svg-icon svg-icon-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                  fill="none">
                  <path
                    d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                    fill="black"></path>
                  <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                    fill="black"></rect>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Instructors</span>
          </a>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item">
          <span class="menu-link">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
              <span class="svg-icon svg-icon-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                  fill="none">
                  <path opacity="0.3"
                    d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                    fill="black"></path>
                  <path
                    d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                    fill="black"></path>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Course</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
              <a class="menu-link" href="{{ route('admin.course-categories.index') }}">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Course Category</span>
              </a>
            </div>
          </div>
        </div>

      </div>
      <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
  </div>
  <!--end::Aside menu-->
  <!--begin::Footer-->
  <div class="aside-footer flex-column-auto px-6 px-lg-9" id="kt_aside_footer">
    <!--begin::User panel-->
    <div class="d-flex flex-stack ms-7">
      <!--begin::Link-->
      <a href="{{ route('logout') }}"
        class="btn btn-sm btn-icon btn-active-color-primary btn-icon-gray-600 btn-text-gray-600">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
        <span class="svg-icon svg-icon-1 me-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)"
              fill="black" />
            <path
              d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z"
              fill="black" />
            <path
              d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
              fill="#C4C4C4" />
          </svg>
        </span>
        <!--end::Svg Icon-->
        <!--begin::Major-->
        <span class="d-flex flex-shrink-0 fw-bolder">Log Out</span>
        <!--end::Major-->
      </a>
      <!--end::Link-->
      <!--begin::User menu-->
      <div class="ms-1">
        <div class="btn btn-sm btn-icon btn-icon-gray-600 btn-active-color-primary position-relative me-n1"
          data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
          <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
          <span class="svg-icon svg-icon-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
              fill="none">
              <path opacity="0.3"
                d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
                fill="black" />
              <path
                d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
                fill="black" />
            </svg>
          </span>
          <!--end::Svg Icon-->
        </div>
        <!--begin::User account menu-->
        <div
          class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
          data-kt-menu="true">
          <!--begin::Menu item-->
          <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
              <!--begin::Avatar-->
              <div class="symbol symbol-50px me-5">
                <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
              </div>
              <!--end::Avatar-->
              <!--begin::Username-->
              <div class="d-flex flex-column">
                <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                  <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                </div>
                <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
              </div>
              <!--end::Username-->
            </div>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu separator-->
          <div class="separator my-2"></div>
          <!--end::Menu separator-->
          <!--begin::Menu item-->
          <div class="menu-item px-5">
            <a href="../../demo15/dist/account/overview.html" class="menu-link px-5">My Profile</a>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu item-->
          <div class="menu-item px-5">
            <a href="../../demo15/dist/apps/projects/list.html" class="menu-link px-5">
              <span class="menu-text">My Projects</span>
              <span class="menu-badge">
                <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
              </span>
            </a>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu item-->
          <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
            <a href="#" class="menu-link px-5">
              <span class="menu-title">My Subscription</span>
              <span class="menu-arrow"></span>
            </a>
            <!--begin::Menu sub-->
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="../../demo15/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="../../demo15/dist/account/billing.html" class="menu-link px-5">Billing</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="../../demo15/dist/account/statements.html" class="menu-link px-5">Payments</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="../../demo15/dist/account/statements.html"
                  class="menu-link d-flex flex-stack px-5">Statements
                  <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                    title="View your statements"></i></a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu separator-->
              <div class="separator my-2"></div>
              <!--end::Menu separator-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <div class="menu-content px-3">
                  <label class="form-check form-switch form-check-custom form-check-solid">
                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked"
                      name="notifications" />
                    <span class="form-check-label text-muted fs-7">Notifications</span>
                  </label>
                </div>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu sub-->
          </div>
          <!--end::Menu item-->
          <!--begin::Menu item-->
          <div class="menu-item px-5">
            <a href="../../demo15/dist/account/statements.html" class="menu-link px-5">My Statements</a>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu separator-->
          <div class="separator my-2"></div>
          <!--end::Menu separator-->
          <!--begin::Menu item-->
          <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
            <a href="#" class="menu-link px-5">
              <span class="menu-title position-relative">Language
                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                  <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg"
                    alt="" /></span></span>
            </a>
            <!--begin::Menu sub-->
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="../../demo15/dist/account/settings.html" class="menu-link d-flex px-5 active">
                  <span class="symbol symbol-20px me-4">
                    <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                  </span>English</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="../../demo15/dist/account/settings.html" class="menu-link d-flex px-5">
                  <span class="symbol symbol-20px me-4">
                    <img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                  </span>Spanish</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="../../demo15/dist/account/settings.html" class="menu-link d-flex px-5">
                  <span class="symbol symbol-20px me-4">
                    <img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
                  </span>German</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="../../demo15/dist/account/settings.html" class="menu-link d-flex px-5">
                  <span class="symbol symbol-20px me-4">
                    <img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                  </span>Japanese</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="../../demo15/dist/account/settings.html" class="menu-link d-flex px-5">
                  <span class="symbol symbol-20px me-4">
                    <img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                  </span>French</a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu sub-->
          </div>
          <!--end::Menu item-->
          <!--begin::Menu item-->
          <div class="menu-item px-5 my-1">
            <a href="../../demo15/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu item-->
          <div class="menu-item px-5">
            <a href="{{ route('logout') }}" class="menu-link px-5">Sign
              Out</a>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu separator-->
          <div class="separator my-2"></div>
          <!--end::Menu separator-->
          <!--begin::Menu item-->
          <div class="menu-item px-5">
            <div class="menu-content px-5">
              <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                for="kt_user_menu_dark_mode_toggle">
                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode"
                  id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo15/dist/index.html" />
                <span class="pulse-ring ms-n1"></span>
                <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
              </label>
            </div>
          </div>
          <!--end::Menu item-->
        </div>
        <!--end::User account menu-->
      </div>
      <!--end::User menu-->
    </div>
    <!--end::User panel-->
  </div>
  <!--end::Footer-->
</div>
