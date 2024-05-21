<x-layout.main>
    <div class="full-width-box">
        <h1 class="title is-4">{{ $post->title }}</h1>
        <h2 class="subtitle is-6 is-italic">{!! $post->slug !!}</h2>
        <textarea disabled>{!! $post->body !!}</textarea>
        <div class="button-container">
            <a href="{{ route('posts.edit', $post) }}" class="button is-primary">Edit this post</a>
            <a href="{{ route('posts.delete', $post) }}" class="button is-danger">Delete this post</a>
        </div>
    </div>
</x-layout.main>
