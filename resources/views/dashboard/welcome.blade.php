@extends('dashboard.layout')

@section('css')
<style>
.video-container {
    max-width: 640px; 
    margin: auto; 
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.embed-responsive-item {
    width: 100%; 
    height: auto; 
    border-radius: 10px; /* Rounded corners for video */
}

.hero-section {
    background: linear-gradient(to right, #4facfe, #00f2fe); /* Gradient background */
    color: white;
    padding: 50px 0;
    text-align: center;
    border-radius: 0 0 20px 20px; /* Rounded bottom corners */
}

.hero-section h1 {
    font-size: 3rem;
    margin-bottom: 20px;
}

.hero-section p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}

.container {
    padding-top: 20px;
}
</style>
@endsection

@section('content')

<div class="hero-section">
    <div class="container">
        <h1>Selamat Datang di Concept LMS</h1>
        <p>Your journey to mastering web programming starts here!</p>
    </div>
</div>

<div class="container mt-5" id="video-section">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="video-container">
                <video class="embed-responsive-item" controls autoplay loop muted>
                    <source src="assets/media/pemograman-web/video/intro.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
            <h2>Why Learn with Us?</h2>
            <p>Our platform provides you with comprehensive resources and an interactive environment to learn and practice web programming efficiently. Join our community of learners and enhance your skills with expert guidance.</p>
            <a href="/pemograman-web-1" class="btn btn-primary btn-lg mt-3">Start Learning Now</a>
        </div>
    </div>
</div>

@endsection