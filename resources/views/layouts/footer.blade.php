<!-- resources/views/layouts/footer.blade.php -->
<footer class="bg-white border-t mt-12 shadow-inner">
    <div class="max-w-7xl mx-auto px-4 py-10 sm:flex sm:justify-between sm:items-center">
        <!-- Left section -->
        <div class="mb-6 sm:mb-0">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600">
                {{ config('app.name', 'Laravel') }}
            </a>
            <p class="text-gray-500 mt-2 text-sm">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </p>
        </div>

        <!-- Links section -->
        <div class="flex flex-col sm:flex-row sm:space-x-6 text-gray-700 text-sm">
            <a href="{{ url('/about') }}" class="hover:text-blue-600 mb-2 sm:mb-0">About</a>
            <a href="{{ url('/services') }}" class="hover:text-blue-600 mb-2 sm:mb-0">Services</a>
            <a href="{{ url('/contact') }}" class="hover:text-blue-600 mb-2 sm:mb-0">Contact</a>
            <a href="{{ url('/privacy') }}" class="hover:text-blue-600">Privacy Policy</a>
        </div>
    </div>

    <!-- Social Media (optional) -->
    <div class="mt-6 border-t text-center py-4 text-gray-500 text-sm">
        Made with ❤️ by Mehedi Hassan
    </div>
</footer>
