@extends('dashboard.layout')

@section('content')
<div class="container">
    <h1>Quiz</h1>
    <form action="/quiz-web-1-submit" method="POST">
        {{ csrf_field() }}
        @foreach ($questions as $question)
            <div class="mb-3">
                <strong>{{ $question->deskripsi }}</strong>
                <ul>
                    @foreach ($question->jawaban as $jawaban)
                        <li>
                            <input type="radio" name="jawaban[{{ $question->id }}]" value="{{ $jawaban->id }}">
                            {{ $jawaban->deskripsi }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
