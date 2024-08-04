@extends('dashboard.layout')

@section('content')
<div class="container">
    <h1>Quiz Results</h1>
    <h2>Your Score: {{ $totalScore }}</h2>
    <h3>Details:</h3>
    <ol>
        @foreach ($results as $result)
            <li>
                <strong>{{ $result['question'] }}</strong>
                <p>Selected Answer: {{ $result['selected_answer'] }}</p>
                @if ($result['correct'])
                    <p style="color:green">Correct</p>
                @else
                    <p style="color:red">Incorrect</p>
                    <p>Jawaban yang benar adalah: <strong>{{ $result['correct_answer'] }}</strong></p>
                @endif
            </li>
        @endforeach
    </ol>
</div>
@endsection
