@auth
    <x-panel>
    <form method="POST" action="/posts/{{ $post->slug }}/comments">

        @csrf

        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="60" height="60" class="rounded-full">
            <h2 class="ml-4">Want to participate?</h2>
        </header>

        <div class="mt-4">
            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring"  rows="2" placeholder="Quick, think of something to say!" required></textarea>
            @error('body')
            <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror                     
        </div>
        <div class="flex justify-end mt-10 pt-6 border-t border-gray-200">
            <x-form.button>Post</x-form.button>
        </div>
    </form>
    </x-panel>
    @else
    <p class="font-semibold">
        <a href="/register" class="hover:underline text-green-700">Register</a> or 
        <a href="/login" class="hover:underline text-green-700">Log in </a> to leave a comment
    </p>
@endauth