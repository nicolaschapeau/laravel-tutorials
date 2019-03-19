@extends('template')

@section('content')
    <br>

    <div class="container">
        <h1>Edit your question</h1>
        <hr />
        <form method="post" action="{{ route('questions.update', $question->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <label for="title">Question :</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $question->title }}"/>

            <br>

            <label for="description">More Information:</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{ $question->description }}</textarea>

            <br>

            <input type="submit" class="btn btn-primary" value="Edit Question" />
        </form>
    </div>
@endsection
