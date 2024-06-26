@extends('front.layout.master')

@section('content')
    <!-- Navigation-->
    <main style="display: flex;justify-content: space-between;max-width: 1200px;margin: 0 auto">
        <div class="col-md-9 ">
            <!-- Post preview-->
          @foreach($articles as $article)
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">{{$article->title}}</h2>
                        <img style="display: block;width: 780px;height: 390px" src="{{$article->image}}">
                        <article>{{Str::limit($article->content, 200) }}</article>
                    </a>
                    <p class="post-meta">
                     <h5 style="display: inline-block;margin-right: 10px">Category : {{$article->slug}}</h5>
                    <span>Date : {{$article->created_at}}</span>
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
          @endforeach

        </div>
        <div class="container col-md-3">
            <h2>List Group With Badges</h2>
            <ul class="list-group">
                @foreach($categories as $categorie)
                    <li class="list-group-item">{{$categorie->name}} <span class="badge">12</span></li>
                @endforeach


            </ul>
        </div>
    </main>
    <!-- Footer-->

    <!-- Main Content-->


@endsection
