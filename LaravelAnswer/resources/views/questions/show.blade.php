@extends('template')

@section('content')
    <br>

    <div class="container">
        <h1>{{ $question->title }}</h1>
        <p class="lead">
            {{ $question->description }}
        </p>

        <hr />

        <!-- display all of the answers for this question -->

        @if($question->answers->count() > 0)

            @foreach($question->answers as $answer)
                <div class="panel panel-default my-2" style="background: #fefefe; border-radius: 3px; border: 1px solid #eee;">
                    <div class="panel-body d-flex justify-content-start align-items-center mt-3 ml-2">
                        <p>
                            {{ $answer->content  }}
                        </p>
                    </div>
                </div>
            @endforeach

            <hr />

        @else

            <p>
                The are no answers for this question yet.
            </p>

        @endif

        <hr />

        <!-- display the form, to submit a new answer -->
        <form action="{{ route('answers.store') }}" method="POST">
            {{ csrf_field() }}

            <h4>Submit your own answer :</h4>

            <textarea class="form-control" name="content" rows="4"></textarea>
            <input type="hidden" value="{{ $question->id }}" name="question_id">
            <button class="btn btn-primary mt-3">Submit answer</button>
        </form>
    </div>
@endsection