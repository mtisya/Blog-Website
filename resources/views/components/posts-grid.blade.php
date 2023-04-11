@props(['posts'])

<x-post-featured-card :post="$posts[0]" />

@if ($posts->count() > 1)
    <div class="mx-4 bg-purple-50 lg:grid lg:grid-cols-8 max-w-8xl mx-auto rounded-xl">
        @foreach ($posts->skip(1) as $post)
            <x-post-card
                :post="$post"
                class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
            />
        @endforeach
    </div>
@endif