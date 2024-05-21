<x-layout.main>
    <div class="full-width-box">
        <textarea disabled class="title is-4">{{ $faq->question }}</textarea>
        <textarea disabled class="subtitle is-6 is-italic">{!! $faq->answer !!}</textarea>
        <a href=" {!! $faq->link !!} " target="_blank">{!! $faq->link !!} </a>
        <div class="button-container">
            <a href="{{ route('faqs.edit', $faq) }}" class="button is-primary">Edit this faq</a>
            <a href="{{ route('faqs.delete', $faq) }}" class="button is-danger">Delete this faq</a>
        </div>
    </div>
</x-layout.main>
