<x-master>
    <section class="px-8">
        <main class="container mx-auto mb-8">
            <div class="lg:flex lg:justify-center">
                @if(auth()->check())
                    <div class="lg:w-1/32">
                        @include('includes.sidebar-links')
                    </div>
                @endif
                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                    {{ $slot }}
                </div>
                @if(auth()->check())
                    <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                        @include('includes.friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
