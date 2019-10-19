@extends('layout')

@include('partials.inline_nav')

@section('content')
    <section id="main" class="wrapper">
        <div class="inner">

            <!-- Content -->
            <h2 id="content">{{ $article->art_title }}</h2>
            <div style="width: 500px; height: auto" class="image fit">
                <img src="/images/{{ $article->art_image }}" alt="" />
            </div>
            <p>{{ $article->art_body }}</p>
            <hr class="major" />

        </div>
    </section>
    @include('partials.footer')
@endsection
