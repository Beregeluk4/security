<x-layout.main>
    <h1 class="title is-4">Blog</h1>

    @if ($posts->isEmpty())
        <p>This blog is empty</p>
    @else
    @foreach($posts-> sortByDesc('created_at') as $post)
        <div class="post-container">
           <x-post.list-item :post="$post"></x-post.list-item>
            <p>{{ $post->summary }}</p>
        </div>
    @endforeach
    @endif
    <a href="{{ route('posts.create') }}" class="button is-primary">Create a New Blog Post</a>
</x-layout.main>

