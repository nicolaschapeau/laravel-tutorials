@extends('template')

@section('content')
    <br>

    <div class="container">
        <h1>Recent Questions:</h1>
        <hr />

        @foreach ($questions as $question)
            <div class="well my-4 pt-5 pb-4 px-3" style="background: white; border-radius: 3px; border: 1px solid #ddd;">
                <h3>{{ $question->title }}</h3>
                <p>
                    {{ $question->description }}
                </p>
                <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary btn-sm px-4 py-2">View Details</a>
            </div>
        @endforeach

        {{ $questions->links() }}
    </div>
@endsection