
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-home.articles.first-article :post="$posts[0]"/>
            @if($posts->count() > 1 )
                <div class="lg:grid lg:grid-cols-6">
                    @foreach($posts->skip(1) as $post)
                        <div class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}">
                            <x-home.articles.article :post="$post"/>
                        </div>
                    @endforeach
                </div>
            @endif
        @endif
    </main>


