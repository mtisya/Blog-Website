<!doctype html>

<title>Mutisya TechBlog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<style>
html {
    scroll-behavior: smooth;
}
    
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-1">
        <nav class="bg-purple-300 md:flex md:justify-between md:items-center rounded">
            <div class="px-1 py-1 rounded-xl">
                <a href="/">
                    <img src="/images/logo4.png" alt="Company Logo" style="max-width: 50%; max-height: 1%;" class="rounded">
                </a>
            </div>
            <div class="py-1 md:flex md:justify-left md:items-center" style="flex-grow: 30">
                <a href="/samtish2010@gmail.com" class="ml-4">
                    <img src="/images/emailimage.jpg" alt="Company Logo" width="30" height="2"></a>
                <a href="/www.facebook.com" class=""><img src="/images/fbimage.jpg" alt="Company Logo" width="35" height="2"></a>
                <a href="/www.whatsapp.com" class=""><img src="/images/whatsappimage.jpg" alt="Company Logo" width="30" height=""></a>
                <p class="text-xs text-red-500 ml-4 font-bold">Tel No. +254-714-795-773 / +254-716-940-422</p>
            </div>

            <div class="mt-4 md:mt-0 flex items-center">

                @auth
	                <x-dropdown>
	                	<x-slot name="trigger">
	                	<button class="text-xs font-bold uppercase">Welcome,  {{ auth()->user()->name }}!
	                	</button>
	            		</x-slot>
	            		<x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
	            		<x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
	            		<x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

	            	<form id="logout-form" method="POST" action="/logout" class="hidden">
                    	@csrf

                    </form>
	            	</x-dropdown> 

                @else
                    <a href="/register" class="ml-6 text-xs font-bold uppercase">Portfolio</a>
                    <a href="/register" class="ml-6 text-xs font-bold uppercase">Register</a>
                    <a href="/login" class="ml-6 text-xs font-bold uppercase">Log In</a>
                @endauth

                <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

       {{ $slot }}

        <footer id="newsletter" class="max-w-8xl mx-auto bg-purple-300 border border-black border-opacity-5 rounded-xl text-center py-6 px-1 mt-12">
           
            <img src="/images/mslogo.png" alt="mslogo" class="mx-auto mb-2 rounded-xl" style="width: 65px;">
            <h5 class="text-2xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>
             
            <div class="mt-4">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf

                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <div>
                            <input id="email" name="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                            @error('email')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

<x-flash />

</body>
