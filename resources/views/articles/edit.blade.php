@extends('layout')

@include('partials.inline_nav')

@section('content')
    <section id="main" class="wrapper">
        <div class="inner">
            <!-- Form -->
            <h3>Update the article</h3>

            <form method="POST" action="/articles/{{$article->id}}">
                @csrf
                @method('PUT')
                <div class="row uniform">
                    <div class="12u$">
                        <input
                            type="text"
                            name="art_title"
                            id="art_title"
                            placeholder="Title"
                            value="{{ $article->art_title }}"
                            style="@error('art_title') border-color:#dc143c @enderror" >
                        @if($errors->has('art_title'))
                            <p style="color: #dc143c">{{ $errors->first('art_title') }}</p>
                        @endif
                    </div>
                    <div class="12u$">
                        <textarea
                            name="excerpt"
                            id="excerpt"
                            placeholder="Excerpt"
                            style="@error('excerpt') border-color:#dc143c @enderror">
                            {{ $article->excerpt }}
                        </textarea>
                        @if($errors->has('excerpt'))
                            <p style="color: #dc143c">{{ $errors->first('excerpt') }}</p>
                        @endif
                    </div>
                    <div class="12u$">
                        <textarea
                            name="art_body"
                            id="art_body"
                            rows="7"
                            placeholder="Content"
                            style="@error('art_body') border-color:#dc143c @enderror">
                            {{ $article->art_body }}
                        </textarea>
                        @if($errors->has('art_body'))
                            <p style="color: #dc143c">{{ $errors->first('art_body') }}</p>
                        @endif
                    </div>
                    <div class="12u$">
                        <input
                            type="text"
                            name="art_image"
                            id="art_image"
                            placeholder="Image name"
                            value="{{ $article->art_image }}"
                            style="@error('art_image') border-color:#dc143c @enderror">
                        @if($errors->has('art_image'))
                            <p style="color: #dc143c">{{ $errors->first('art_image') }}</p>
                        @endif
                    </div>

                    <!-- Break -->
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Submit" /></li>
                            {{--<li><input type="reset" value="Reset" class="alt" /></li>--}}
                        </ul>
                    </div>
                </div>
            </form>

            <hr />

            <form method="post" action="#">
                <div class="row uniform">
                    <div class="9u 12u$(small)">
                        <input type="text" name="query" id="query" value="" placeholder="Query" />
                    </div>
                    <div class="3u$ 12u$(small)">
                        <input type="submit" value="Search" class="fit" />
                    </div>
                </div>
            </form>
        </div>
    </section>
    @include('partials.footer')
@endsection
