@extends('layout')

@include('partials.inline_nav')

@section('content')
    <section id="main" class="wrapper">
        <div class="inner">

            <!-- Content -->
            <h2 id="content">Sample Content</h2>
            <p>Praesent ac adipiscing ullamcorper semper ut amet ac risus. Lorem sapien ut odio odio nunc. Ac adipiscing nibh porttitor erat risus justo adipiscing adipiscing amet placerat accumsan. Vis. Faucibus odio magna tempus adipiscing a non. In mi primis arcu ut non accumsan vivamus ac blandit adipiscing adipiscing arcu metus praesent turpis eu ac lacinia nunc ac commodo gravida adipiscing eget accumsan ac nunc adipiscing adipiscing.</p>

            <hr class="major" />

            <div class="row">
                <!-- Break -->
                <div class="4u 12u$(medium)">
                    @foreach($articles as $article)
                        <h4><a href="/articles/{{ $article->id }}">{{ $article->art_title }}</a></h4>
                        <p>{{ $article->excerpt }}</p>
                    @endforeach

                    <h3><a href="/articles">See more articles...</a></h3>

                </div>
                <div class="4u 12u$(medium)">
                    @foreach($posts as $post)
                        <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                        <p>{{ $post->slug }}</p>
                    @endforeach

                </div>
                <div class="4u$ 12u$(medium)">
                    <h3>Accumsan montes viverra</h3>
                    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio
                        porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet.
                        Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                </div>
            </div>

            <hr class="major" />
        </div>
    </section>
    @include('partials.footer')
@endsection
