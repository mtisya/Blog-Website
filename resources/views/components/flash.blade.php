@if (Session::has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 10000)"
         x-show="show"class="alert alert-info fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
         <p>{{ Session::get('success') }}</p>
    </div>
@endif 