<article class="media">
    <div class="media-left">
        <i class="fa-regular fa-circle-check"></i>
    </div>
    <div class="media-content">
        <div class="content">
            <a href="{{ route('posts.show', $task['id']) }}">
                {{ $task['title'] }}
            </a>
        </div>
    </div>
    <div class="media-right">
    </div>
</article>
