@extends('layout')

@include('partials.inline_nav')

@section('content')
    <section id="main" class="wrapper">
        <div class="inner">

            <!-- Content -->
            <h2 id="content">{{ $post->slug }}</h2>
            <p>{{ $post->body }}</p>

            <hr class="major" />
        </div>
    </section>
    @include('partials.footer')
@endsection
