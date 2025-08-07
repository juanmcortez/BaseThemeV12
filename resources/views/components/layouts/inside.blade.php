<x-layouts.main>
    <main class="wrapper">
        <x-layouts.parts.sidebar/>
        <section>
            <x-layouts.parts.header/>
            <x-layouts.parts.sidebar/>
            <article>
                {{ $slot }}
            </article>
            <x-layouts.parts.footer/>
        </section>
    </main>
</x-layouts.main>
