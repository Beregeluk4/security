<x-layout.main>

    <div class="box">
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PATCH')
            <h1 class="title is-4">Edit Blog Post {{ $post->id }}</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please fill out all the form fields and click 'Submit'
            </h2>

            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control has-icons-right">
                    <input type="text" name="title" placeholder="Enter the post's title..."
                           class="input @error('title') is-danger @enderror"
                           value="{{ $post->title }}" autocomplete="title" autofocus>
                    @error('title')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('title')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="slug" class="label">Slug</label>
                <div class="control has-icons-right">
                    <input type="text" name="slug" placeholder="Enter a summary of the post content..."
                           class="input @error('slug') is-danger @enderror"
                           value="{{ $post->slug }}" autocomplete="slug">
                    @error('slug')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('slug')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control has-icons-right">
                    <input type="text" name="body" placeholder="Enter the post's content here..."
                           class="input @error('body') is-danger @enderror"
                           value="{{ $post->body }}" autocomplete="body">
                    @error('body')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('body')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</x-layout.main>
