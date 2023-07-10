@extends('user.layouts.index')

@section('content')
  <header class="py-4 py-md-6 overlay overlay-primary overlay-80"
    style="background-image: url(assets/img/covers/cover-19.jpg);">
    <div class="container text-start py-xl-5">
      <h1 class="display-4 fw-semi-bold mb-0 text-white">Pembelajaran saya</h1>
    </div>
    <!-- Img -->
    <img class="d-none img-fluid" src="...html" alt="...">
  </header>

  <section class="py-5 py-md-8 bg-white">
    <div class="container container-wd">
      <div class="row align-items-end mb-3 mb-md-5">
        <div class="col-md mb-2 mb-md-0">
          <h2 class="mb-1">Kursus</h2>
          <p class="font-size-lg mb-0 text-capitalize">Daftar kursus yang diikuti.</p>
        </div>
        <div class="col-md-auto">

        </div>
      </div>

      <div class="row row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

        @foreach ($enrollments as $enrollment)
          <div class="col-md mb-5 mb-lg-0">
            <!-- Card -->
            <div class="card border shadow p-2 lift sk-fade">
              <!-- Image -->
              <div class="card-zoom position-relative">
                <a href="{{ route('guru.mycourse.detail', ['uuid' => $enrollment->course->uuid]) }}"
                  class="card-img d-block sk-thumbnail img-ratio-3">
                  <img class="rounded shadow-light-lg img-fluid pt-0 mt-0"
                    src="{{ asset('storage/images/course/' . $enrollment->course->image) }}" alt="...">
                </a>

                <a href="#"
                  class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                  <span class="text-white fw-normal font-size-sm">{{ $enrollment->course->category->name }}</span>
                </a>
              </div>

              <!-- Footer -->
              <div class="card-footer px-2 pb-0 pt-4">

                <!-- Heading -->
                <a href="{{ route('guru.mycourse.detail', ['uuid' => $enrollment->course->uuid]) }}" class="d-block">
                  <h5 class="line-clamp-2 h-48 h-lg-52 fw-bold">{{ $enrollment->course->title }}</h5>
                </a>

                <ul class="nav mx-n3 mb-3">
                  <li class="nav-item px-3">
                    <a href="{{ route('guru.mycourse.detail', ['uuid' => $enrollment->course->uuid]) }}"
                      class="d-flex align-items-center text-gray-800">
                      <div class="me-3 d-flex">
                        <!-- Icon -->
                        <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z"
                            fill="currentColor"></path>
                        </svg>

                      </div>
                      <div class="font-size-sm">{{ Str::ucfirst($enrollment->course->instructor->name) }}</div>
                    </a>
                  </li>
                  <li class="nav-item px-3">
                    <a href="{{ route('guru.mycourse.detail', ['uuid' => $enrollment->course->uuid]) }}"
                      class="d-flex align-items-center text-gray-800">
                      <div class="me-2 d-flex">
                        <!-- Icon -->
                        <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z"
                            fill="currentColor"></path>
                        </svg>

                      </div>

                      <div class="font-size-sm">{{ $enrollment->course->created_at->format('d F, Y') }}</div>

                    </a>
                  </li>
                </ul>

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

                <div class="progress" style="height: 3px;">
                  <div class="progress-bar" role="progressbar" style="width: {{ $persentasi }}%;"
                    aria-valuenow="{{ $persentasi }}" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
                <div class="text-dark font-size-sm mt-1">
                  @if ($persentasi == '0')
                    MULAI KURSUS
                  @else
                    {{ $persentasi }}% selesai
                  @endif

                </div>

              </div>
            </div>
          </div>
        @endforeach



      </div>
    </div>
  </section>

  @push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (Session::has('success'))
      <script>
        Swal.fire(
          'Berhasil!',
          '{{ Session::get('success') }}',
          'success'
        )
      </script>
    @endif
  @endpush
@endsection
