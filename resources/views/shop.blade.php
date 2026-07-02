<x-layout>
    <x-slot:title>
        Products
    </x-slot:title>

    <div class="min-w-0 overflow-x-hidden md:gap-16 drawer mt-20">
        <div class="drawer-content flex flex-col">
            <div>
                <div class="breadcrumbs text-sm">
                    <ul>
                        <li><a href="{{ route("home") }}">Home</a></li>
                        <li><a href="{{ route("shop") }}">Shop</a></li>
                    </ul>
                </div>
                <h2 class="font-extrabold text-3xl mt-2 mb-3">PRODUCTS</h2>
                <div class="flex justify-between items-center-safe">
                    <x-search-input />
                </div>
            </div>
            <div x-data="{ open: false }" class="md:hidden my-5">
                <button class="btn bg-transparent group"
                    @click="open = !open; $dispatch('toggle-filter', { open: open })">
                    Filter
                    <span x-show="!open">
                        <x-icons.angle-arrow direction="right" />
                    </span>
                    <span x-show="open">
                        <x-icons.angle-arrow direction="left" />
                    </span>
                </button>
            </div>
            <div class="md:mt-10 grid grid-cols-[repeat(auto-fill,minmax(max(100%/4,150px),1fr))] gap-5">
                <x-card class="aspect-square" />
                <x-card class="aspect-square" />
                <x-card class="aspect-square" />
                <x-card class="aspect-square" />
                <x-card class="aspect-square" />
                <x-card class="aspect-square" />
            </div>
        </div>
        <div x-data="{ open: false }" @toggle-filter.window="open = $event.detail.open"
            x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 -translate-x-10"
            x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-10"
            x-show="open" class="flex flex-col mr-10 md:mr-0 md:!flex">
            <h3 class="font-bold text-2xl mt-25">Filters</h3>
            <div class="divider w-full"></div>
            <div>
                <x-accordion>Availability</x-accordion>
                <x-accordion>Category</x-accordion>
                <x-accordion>Price Range</x-accordion>
                <x-accordion>Collections</x-accordion>
                <x-accordion>Tags</x-accordion>
                <x-accordion>Ratings</x-accordion>
            </div>
        </div>
    </div>
</x-layout>