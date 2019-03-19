@extends('template')

@section('content')
<div class="container mt-4">
    <h1>{{ $user->name }}'s Profile</h1>
    <p>See what {{ $user->name }} has been up to on LaravelAnswers.</p>
    <hr />

    <div class="row mt-5">
        <div class="col-md-6">
            <h3>Questions</h3>

            @foreach ($user->questions as $question)
                <div class="panel panel-default mt-3" style="border: 1px solid #ccc; border-radius: 3px;">
                    <div class="panel-body pt-4 pb-2 px-3">
                        <h4>{{ $question->title }}</h4>
                        <p>
                            {{ $question->description }}
                        </p>
                    </div>
                    <div class="panel-footer mx-0 pt-2 pb-2 px-2" style="background-color: #eee; width: 100%; border-top: 1px solid #ccc;">
                        <a href="{{ route('questions.show', $question->id) }}" class="btn btn-link">View Question</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-6">
            <h3>Answers</h3>

            @foreach ($user->answers as $answer)
                <div class="panel panel-default mt-3" style="border: 1px solid #ccc; border-radius: 3px;">
                    <div class="panel-body">
                        <h4 class="d-flex align-items-center mt-3 ml-3" style="font-weight: bold; font-size: 16px;">{{ $answer->question->title }}</h4>
                        <hr />
                        <p class="mt-3 ml-3">
                            <span style="color: #555; font-size: 13px;">{{ $answer->user->name }}'s answer:</span>
                            <br>
                            {{ $answer->content }}
                        </p>
                    </div>
                    <div class="panel-footer mx-0 pt-2 pb-2 px-2" style="background-color: #eee; width: 100%; border-top: 1px solid #ccc;">
                        <a href="{{ route('questions.show', $answer->question->id) }}" class="btn btn-link">View all answers for this question</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection