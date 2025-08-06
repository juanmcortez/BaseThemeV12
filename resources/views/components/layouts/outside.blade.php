<x-layouts.main>
    <main class="outside">
        <div class="wrapper">
            <div class="left-section">
                {{-- SOME OTHER CONTENT --}}
            </div>
            <div class="right-section">
                {{-- MAIN SCREEN --}}
                {{ $slot }}
            </div>
        </div>
    </main>
</x-layouts.main>
