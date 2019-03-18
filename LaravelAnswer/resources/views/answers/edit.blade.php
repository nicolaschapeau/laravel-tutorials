@extends('template')

@section('content')
    <br>

    <div class="container">
        <h1>Edit your question</h1>
        <hr />
        <form method="post" action="{{ route('answers.update', $answer->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <label for="description">Answer content :</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{ $answer->description }}</textarea>

            <br>

            <input type="submit" class="btn btn-primary" value="Edit Answer" />
        </form>
    </div>
@endsection
