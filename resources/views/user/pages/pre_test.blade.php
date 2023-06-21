@extends('user.layouts.index')

@section('content')
    <header class="py-4 py-md-6 overlay overlay-primary overlay-80"
        style="background-image: url(assets/img/covers/cover-19.jpg);">
        <div class="container text-start py-xl-5">
            <h1 class="display-4 fw-semi-bold mb-0 text-white">Pre Test</h1>
        </div>
    </header>

    <div class="container">
        <div class="card my-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <form action="{{ route('guru.mycourse.pre_test', $uuid) }}" method="post">
                            @csrf
                            <input type="hidden" name="quiz" value="{{ $quiz->id }}">
                            <ol>
                                @foreach ($quiz->question as $question)
                                    <h4>
                                        <li>{{ $question->question_text }}</li>
                                    </h4>
                                    @foreach ($question->choices->shuffle() as $choice)
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="{{ $choice->id }}"
                                                name="answer-{{ $question->id }}" id="flexRadioDefault" required />
                                            <label class="form-check-label" for="flexRadioDefault">
                                                {{ $choice->choice_text }}
                                            </label>
                                        </div>
                                    @endforeach
                                @endforeach
                            </ol>
                            <div class="d-grid gap-2 mt-5">
                                <button class="btn btn-primary py-1">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
