<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if($posts->count())
        @foreach($posts as $post)
            @if($loop->first)
                @include('home.articles.first-article.index')
                @break
            @endif
        @endforeach

        <div class="lg:grid lg:grid-cols-2">
            @foreach($posts->skip(1) as $post)
                @if($loop->iteration <= 3 )
                    @include('home.articles.article.index')
                @elseif($loop->iteration > 3)
                    @break
                @endif
            @endforeach
        </div>

        <div class="lg:grid lg:grid-cols-3">
            @foreach($posts->skip(3) as $post)
                    @include('home.articles.article.index')
            @endforeach
        </div>
    @endif
</main>
