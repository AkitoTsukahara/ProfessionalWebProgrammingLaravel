@if( !$private_posts->isEmpty() )
    <h2>Private Posts</h2>
    <ul>
        @foreach($private_posts as $post)
            <li>
                <h3>{{ $post->title }}</h3>
                <p>Published At: {{ $post->published_at }}</p>
            </li>
        @endforeach
    </ul>
@endif

<h2>Posts</h2>
<ul>
    @foreach($posts as $post)
        <li>
            <h3>{{ $post->title }}</h3>
            <p>Published At: {{ $post->published_at }}</p>
        </li>
    @endforeach
</ul>
