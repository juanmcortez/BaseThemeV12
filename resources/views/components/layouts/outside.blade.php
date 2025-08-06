<x-layouts.main>
    <main>
        <div class="wrapper">
            <div class="left-section">
                {{-- SOME OTHER CONTENT --}}
                {{ __('OUTSIDE LAYOUT') }}
            </div>
            <div class="right-section">
                {{-- MAIN SCREEN --}}
                {{ $slot }}
            </div>
        </div>
    </main>
</x-layouts.main>
