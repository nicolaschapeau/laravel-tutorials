@extends('template')

@section('content')
    <br>

    <div class="container">
        <h1>{{ $question->title }}</h1>
        <p class="lead">
            {{ $question->description }}
        </p>
        <p>
            Submitted By : {{ $question->user->name }} on {{ $question->created_at->diffForHumans() }}
        </p>
        @if(Auth::id() === $question->user->id)
            <a class="btn btn-primary" href="{{ route('questions.edit', $question->id) }}">Edit Question</a>
        @endif
        <hr />

        <!-- display all of the answers for this question -->

        @if($question->answers->count() > 0)

            @foreach($question->answers as $answer)
                <div class="panel panel-default my-3" style="background: #fefefe; border-radius: 3px; border: 1px solid #eee;">
                    <div class="panel-body d-flex justify-content-start align-items-start flex-column mt-3 ml-2 mb-3">
                        <p>
                            {{ $answer->content  }}
                        </p>
                        <h6>
                           Answered by {{ $answer->user->name  }}, {{ $answer->created_at->diffForHumans() }}
                        </h6>
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