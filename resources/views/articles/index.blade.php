@extends('layout')

@include('partials.inline_nav')

@section('content')
    <section id="main" class="wrapper">
        <div class="inner">

        @foreach($articles as $article)
            <!-- Content -->
            <div class="container">
                <div><h4><a href="{{ $article->path() }}">{{ $article->art_title }}</a></h4></div>
                <div style="width: 300px; height: auto" class="image fit">
                    <img src="images/{{ $article->art_image }}" alt="" />
                </div>

                <p>{{ $article->excerpt }}</p>


            </div>

            <hr class="major" />
            @endforeach
        </div>
    </section>
    @include('partials.footer')
@endsection
