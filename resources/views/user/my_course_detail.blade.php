<!doctype html>
<html lang="en">

<!-- Mirrored from transvelo.github.io/skola-html/5.1/lesson-single-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:28:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.png">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Lora:wght@400;700&amp;family=Montserrat:wght@400;500;600;700&amp;family=Nunito:wght@400;700&amp;display=swap"
    rel="stylesheet">

  @include('user.layouts.css')

  <title>Skola</title>

</head>

<body class="bg-white">

  <!-- NAVBAR
    ================================================== -->
  <header class="bg-white border-bottom py-3 header-fixed">
    <div class="px-5 px-lg-8 w-100">
      <div class="d-md-flex align-items-center">
        <!-- Brand -->
        <a class="navbar-brand mb-2 mb-md-0" href="{{ route('home') }}">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/MOOC_-_Massive_Open_Online_Course_logo.svg/1200px-MOOC_-_Massive_Open_Online_Course_logo.svg.png"
            class="navbar-brand-img" style="width: 50%" alt="...">
        </a>

        <!-- Lesson Title -->
        <div class="ms-md-6 ms-wd-12 ms-xl-10 me-auto mb-5 mb-md-0">
          <h3 class="mb-0 line-clamp-2 ms-wd-3">{{ $course->title }}</h3>
        </div>

        <!-- Back to Course -->
        <a href="{{ route('guru.mycourse') }}"
          class="btn btn-sm btn-primary ms-md-6 px-6 mb-3 mb-md-0 flex-shrink-0">Kembali ke Kursus</a>
      </div>
    </div>
  </header>


  <!-- COURSE
    ================================================== -->
  <div class="mt-15 mt-md-11 pt-md-3">
    <div class="">
      <div class="row mb-6">
        <div class="col-lg-11 col-wd-12 ms-lg-auto me-lg-auto pt-11 pt-lg-8">
          <h2 class="font-size-xl">Materi Kursus</h2>
          <div id="content-container"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- COURSE INFO TAB
                ================================================== -->
  <div class="container">
    <ul id="pills-tab" class="nav course-tab-v1 border-bottom h4 my-8 pt-1" role="tablist">
      <li class="nav-item">
        <a class="nav-link {{ Session::has('commented') ? '' : 'active' }}" id="pills-overview-tab"
          data-bs-toggle="pill" href="#pills-curriculum" role="tab" aria-controls="pills-overview"
          aria-selected="true">Konten Kursus</a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Session::has('commented') ? 'active' : '' }}" id="pills-reviews-tab" data-bs-toggle="pill"
          href="#pills-reviews" role="tab" aria-controls="pills-reviews" aria-selected="true">Tanya Jawab</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" id="scores-tab" data-bs-toggle="pill" href="#scores" role="tab" aria-controls="scores"
          aria-selected="true">Nilai Quiz</a>
      </li>

    </ul>

    <div class="tab-content mb-10" id="pills-tabContent">
      <div class="tab-pane fade {{ Session::has('commented') ? '' : 'show active' }}" id="pills-curriculum"
        role="tabpanel" aria-labelledby="pills-curriculum-tab">
        <div id="accordionCurriculum">
          @foreach ($course->curriculum as $curriculum)
            <div class="border rounded shadow mb-6 overflow-hidden">
              <div class="d-flex align-items-center" id="curriculumheading{{ $curriculum->id }}">
                <h5 class="mb-0 w-100">
                  <button
                    class="d-flex align-items-center p-5 min-height-80 text-dark fw-medium collapse-accordion-toggle line-height-one"
                    type="button" data-bs-toggle="collapse" data-bs-target="#Curriculumcollapse{{ $curriculum->id }}"
                    aria-expanded="true" aria-controls="Curriculumcollapse{{ $curriculum->id }}">
                    <span class="me-4 text-dark d-flex">
                      <!-- Icon -->
                      <svg width="15" height="2" viewBox="0 0 15 2" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="15" height="2" fill="currentColor"></rect>
                      </svg>
                      <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 7H15V9H0V7Z" fill="currentColor"></path>
                        <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"></path>
                      </svg>
                    </span>
                    {{ $curriculum->title }}
                  </button>
                </h5>
              </div>
              <div id="Curriculumcollapse{{ $curriculum->id }}" class="collapse show"
                aria-labelledby="curriculumheading{{ $curriculum->id }}" data-parent="#accordionCurriculum">
                @foreach ($curriculum->subcurriculum as $subcurriculum)
                  <div class="border-top px-5 py-4 min-height-70 d-md-flex align-items-center">
                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                      <div class="ms-4">
                        {{ $subcurriculum->title }}
                      </div>
                      @if ($subcurriculum->finished->where('user_id', auth()->user()->id)->first())
                        <div class="ms-4">
                          <span class="badge badge-primary">Selesai</span>
                        </div>
                      @endif
                    </div>
                    <div class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                      @if (strpos($subcurriculum->content, '.com') !== false)
                        <div
                          class="btn btn-xs text-dark-70 bg-orange-40 me-5 font-size-sm fw-normal py-2 subcurriculum-link"
                          data-content="{{ $subcurriculum->content }}">
                          Link YouTube
                        </div>
                      @else
                        <div class="btn btn-xs btn-blue-soft me-5 font-size-sm fw-normal py-2 subcurriculum-link"
                          data-content="{{ $subcurriculum->content }}">
                          Document
                        </div>
                      @endif
                      @if ($subcurriculum->finished->where('user_id', auth()->user()->id)->first())
                        <button class="btn btn-xs btn-rounded-circle btn-secondary" disabled>
                          <i class="fas fa-check"></i>
                        </button>
                      @else
                        <form action="{{ route('guru.mycourse.subcurriculum', $course->uuid) }}" method="post">
                          @csrf
                          <input type="hidden" name="subcurriculum" value="{{ $subcurriculum->id }}">
                          <button class="btn btn-xs btn-rounded-circle btn-success" type="submit">
                            <i class="fas fa-check"></i>
                          </button>
                        </form>
                      @endif
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endforeach

          @if ($course->postTest && $finished->count() == $course->subcurriculum->count() && !$postTestCheck)
            <div class="border rounded shadow mb-6 overflow-hidden">
              <div class="d-flex align-items-center">
                <h5 class="mb-0 w-100">
                  <div
                    class="d-flex align-items-center p-5 min-height-80 text-dark fw-medium line-height-one justify-content-center">
                    <button class="btn btn-primary btn-sm px-10"
                      onclick="document.location.href = '{{ route('guru.mycourse.post_test', $course->uuid) }}'">
                      Quiz Post Test
                    </button>
                  </div>
                </h5>
              </div>
            </div>
          @endif
        </div>
      </div>

      <div class="tab-pane fade {{ Session::has('commented') ? 'show active' : '' }}" id="pills-reviews"
        role="tabpanel" aria-labelledby="pills-reviews-tab">

        <ul class="list-unstyled pt-2">
          @foreach ($course->comments as $comment)
            <li class="media d-flex">
              <div class="avatar avatar-xxl me-3 me-md-6 flex-shrink-0">
                <img src="{{ asset('frontend/assets/img/avatars/avatar-1.jpg') }}" alt="..."
                  class="avatar-img rounded-circle">
              </div>
              <div class="media-body flex-grow-1 mb-8">
                <div class="d-md-flex align-items-center">
                  <div class="me-auto mb-md-0">
                    <h5 class="mb-0">{{ $comment->guru->nama }}</h5>
                    <p class="font-size-sm font-italic">{{ $comment->curriculum->title }}</p>
                  </div>
                  <span>{{ Carbon\Carbon::parse($comment->created_at)->isoFormat('HH:mm') }} pada
                    {{ Carbon\Carbon::parse($comment->created_at)->isoFormat('DD MMMM YYYY') }}</span>
                </div>
                <p class="line-height-md mb-2">{{ $comment->comment_text }}</p>

                <a href="{{ route('guru.mycourse.comment-replies', ['uuid' => $course->uuid, 'id' => $comment->id]) }}"
                  class="btn btn-info py-0">Reply</a>
                <span class="ms-3">{{ $comment->replies->count() }} balasan</span>
              </div>
            </li>
          @endforeach
        </ul>

        <div class="border shadow rounded p-6 p-md-9">
          <h3 class="mb-2">Tambahkan pertanyaan atau komentar terkait kursus ini</h3>
          <form action="{{ route('guru.mycourse.comment', $course->uuid) }}" method="post">
            @csrf
            <input type="hidden" name="course" value="{{ $course->id }}">
            <div class="form-group mb-6">
              <label for="curriculum">Kurikulum</label>
              <select class="form-select" aria-label="Select example" id="curriculum" name="curriculum" required>
                <option value="" selected hidden>Pilih</option>
                @foreach ($course->curriculum as $curriculum)
                  <option value="{{ $curriculum->id }}">{{ $curriculum->title }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group mb-6">
              <label for="content">Konten</label>
              <textarea class="form-control placeholder-1" id="content" name="content" rows="6" placeholder="Content"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block mw-md-300p py-3">SUBMIT</button>
          </form>
        </div>
      </div>

      <div class="tab-pane fade" id="scores" role="tabpanel" aria-labelledby="scores-tab">

        <h3 class="mb-6">Nilai Quiz</h3>
        <div class="row align-items-center mb-8">
          <div class="col mb-5 mb-md-0">
            <div class="border rounded shadow d-flex align-items-center justify-content-center px-9 py-8">
              <div class="m-2 text-center">
                <h1 class="display-2 mb-0 fw-medium mb-n1">
                  {{ $preTest->result->where('user_id', auth()->user()->id)->first()->score }}</h1>
                <h5 class="mb-0">Pre Test</h5>
                <div class="star-rating">
                  <div class="rating"
                    style="width:{{ $preTest->result->where('user_id', auth()->user()->id)->first()->score }}%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5 mb-md-0">
            <div class="border rounded shadow d-flex align-items-center justify-content-center px-9 py-8">
              <div class="m-2 text-center">
                <h1 class="display-2 mb-0 fw-medium mb-n1">
                  {{ $postTest && $postTest->result->where('user_id', auth()->user()->id)->first() ? $postTest->result->where('user_id', auth()->user()->id)->first()->score : '?' }}
                </h1>
                <h5 class="mb-0">Post Test</h5>
                <div class="star-rating">
                  <div class="rating"
                    style="width:{{ $postTest && $postTest->result->where('user_id', auth()->user()->id)->first() ? $postTest->result->where('user_id', auth()->user()->id)->first()->score : 0 }}%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- JAVASCRIPT
    ================================================== -->
  <!-- Libs JS -->
  @include('user.layouts.js')

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.subcurriculum-link').on('click', function(event) {
        event.preventDefault();
        var content = $(this).data('content');
        var contentContainer = $('#content-container');

        // Cek apakah konten adalah link YouTube
        if (content.includes('.com')) {
          // Tampilkan video YouTube
          var videoUrl = content;
          var videoEmbedUrl = videoUrl.replace('/watch?v=', '/embed/');
          var videoHtml = `<div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="${videoEmbedUrl}" style="width: 100%; height: 500px;" allowfullscreen></iframe>
                      </div>`;
          contentContainer.html(videoHtml);
        } else {
          // Mendapatkan URL dokumen
          var documentUrl = "{{ asset('doc/subcurriculum/') }}/" + content;

          // Membuat elemen iframe untuk menampilkan dokumen
          var documentHtml =
            `<iframe src="${documentUrl}" style="width: 100%; height: 500px;"></iframe>`;

          // Menampilkan dokumen di dalam content-container
          contentContainer.html(documentHtml);
        }
      });
    });
  </script>




</body>

<!-- Mirrored from transvelo.github.io/skola-html/5.1/lesson-single-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:28:57 GMT -->

</html>
