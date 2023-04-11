<x-layout>

@include('posts._header')

    <main class="max-w-7xl mx-auto mt-2 lg:mt-2 space-y-2">

        @if ($posts->count())

            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}

        @else

        <p class="text-center">No posts yet, Please check back later.</p>

        @endif

    </main>

</x-layout>