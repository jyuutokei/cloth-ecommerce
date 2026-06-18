<x-layout>
    <x-slot:title>
        Products
    </x-slot:title>

    <div class="drawer lg:drawer-open mt-20">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col max-inline-1/6">
            <label for="my-drawer-3" class="btn drawer-button lg:hidden">
                Open drawer
            </label>
            <div>
                <div class="breadcrumbs text-sm">
                    <ul>
                        <li><a href="{{ route("home") }}">Home</a></li>
                        <li><a href="{{ route("products") }}">Products</a></li>
                    </ul>
                </div>
                <h2 class="font-bold text-3xl mt-2 mb-3">PRODUCTS</h2>
                <div class="flex justify-between items-center-safe">
                    <x-search-input />
                    <div>
                        <x-buttons.carousel-btn />
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                <x-card class="max-h-85" />
                <x-card class="max-h-85" />
                <x-card class="max-h-85" />
                <x-card class="max-h-85" />
                <x-card class="max-h-85" />
                <x-card class="max-h-85" />
            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
            <h3 class="font-bold text-2xl mt-25">Filters</h3>
            <div>
                <h3 class="font-bold text-xl mt-4 mb-1">Size</h3>
                <x-buttons.size-tabs />
            </div>
            <div class="divider w-full"></div>
            <div class="w-full">
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