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
                <a class="navbar-brand mb-2 mb-md-0" href="index.html">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/MOOC_-_Massive_Open_Online_Course_logo.svg/1200px-MOOC_-_Massive_Open_Online_Course_logo.svg.png"
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
        <div class="container">
            <div class="row mb-11">
                <div class="col-lg-11 col-wd-12 ms-lg-auto pt-11 pt-lg-8">
                    <h2 class="font-size-xl mb-6">Balasan Komentar</h2>
                    <div id="content-container"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- COURSE INFO TAB
                ================================================== -->
    <div class="container">
        <div class="media d-flex">
            <div class="avatar avatar-xxl me-3 me-md-6 flex-shrink-0">
                <img src="{{ asset('frontend/assets/img/avatars/avatar-1.jpg') }}" alt="..."
                    class="avatar-img rounded-circle">
            </div>
            <div class="media-body flex-grow-1">
                <div class="d-md-flex align-items-center">
                    <div class="me-auto mb-md-0">
                        <h5 class="mb-0">{{ $comment->guru->nama }}</h5>
                        <p class="font-size-sm font-italic">{{ $comment->curriculum->title }}</p>
                    </div>
                    <span>{{ Carbon\Carbon::parse($comment->created_at)->isoFormat('HH:mm') }} pada
                        {{ Carbon\Carbon::parse($comment->created_at)->isoFormat('DD MMMM YYYY') }}</span>
                </div>
                <p class="line-height-md mb-6">{{ $comment->comment_text }}</p>
            </div>
        </div>
        <ul class="list-unstyled pt-2 mb-10 ms-10">
            @foreach ($comment->replies as $reply)
                <li class="media d-flex">
                    <div class="avatar avatar-xxl me-3 me-md-6 flex-shrink-0">
                        <img src="{{ asset('frontend/assets/img/avatars/avatar-1.jpg') }}" alt="..."
                            class="avatar-img rounded-circle">
                    </div>
                    <div class="media-body flex-grow-1">
                        <div class="d-md-flex align-items-center">
                            <div class="me-auto mb-md-0">
                                <h5 class="mb-3">{{ $reply->guru->nama }}</h5>
                            </div>
                            <span>{{ Carbon\Carbon::parse($reply->created_at)->isoFormat('HH:mm') }} pada
                                {{ Carbon\Carbon::parse($reply->created_at)->isoFormat('DD MMMM YYYY') }}</span>
                        </div>
                        <p class="line-height-md mb-8">{{ $reply->comment_text }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="border shadow rounded p-6 p-md-9">
            <h3 class="mb-2">Tambahkan balasan tentang komentar ini</h3>
            <form action="{{ route('guru.mycourse.comment-reply', ['uuid' => $course->uuid, 'id' => $comment->id]) }}"
                method="post">
                @csrf
                <div class="form-group my-6">
                    <textarea class="form-control placeholder-1" id="content" name="content" rows="6" placeholder="Content"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block mw-md-300p py-3">SUBMIT</button>
            </form>
        </div>


        <!-- JAVASCRIPT
    ================================================== -->
        <!-- Libs JS -->
        @include('user.layouts.js')


</body>

<!-- Mirrored from transvelo.github.io/skola-html/5.1/lesson-single-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:28:57 GMT -->

</html>
