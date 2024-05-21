<x-layout.main>

    <div class="box">
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <h1 class="title is-4">Delete Blog Post {{ $post->id }}</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Are you sure! If so, click 'Submit'
            </h2>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-danger">Delete</button>
                    <a href="{{ url()->previous() }}" type="submit" class="button is-light">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</x-layout.main>
