<x-layout.main>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-12-tablet">
                    <div class="content">
                        <h1>Mijn blog</h1>
                         Loop through each task and display as links
                        <a href="{{ route('posts.create') }}" class="button is-primary">Create a New Blog Post</a>
                        @foreach($posts as $post)
                            <x-post.list-item :post="$post"></x-post.list-item>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.main>
