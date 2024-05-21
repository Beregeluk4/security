<x-layout.main>
    <h1 class="title is-4">Faq</h1>

    @if ($faqs->isEmpty())
        <p>There are no FAQs</p>
@else

    @foreach($faqs-> sortByDesc('created_at') as $faq)
        <div class="post-container">
           <x-faq.list-item :faq="$faq"></x-faq.list-item>
        </div>
    @endforeach
    @endif

    <a href="{{ route('faqs.create') }}" class="button is-primary">Create a New Faq</a>
</x-layout.main>

