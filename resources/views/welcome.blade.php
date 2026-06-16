<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    <div class="mt-20">
        <div>
            <p class="text-xl">Men</p>
            <p class="text-xl">Women</p>
            <p class="text-xl">Kids</p>
            <x-search-input class="mt-5" />
        </div>
        <div class="md:grid grid-rows-[minmax(0,200px)_minmax(0,200px)] grid-cols-3 gap-4 mt-20">
            <div class="row-start-1 col-start-1">
                <h1 class="font-extrabold text-6xl md:text-5xl lg:text-5xl xl:text-6xl">NEW <br> COLLECTION</h1>
                <p class="text-lg mt-4">Discover the latest trends in fashion</p>
                <p class="text-xl font-bold">Summer <br> 2026</p>
            </div>
            <div class="col-start-2 row-span-2 border border-black">
                <img class="w-full h-full object-cover object-center min-h-0"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
            </div>
            <div class="col-start-3 row-span-2 border border-black">
                <img class="w-full h-full object-cover object-center min-h-0"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
            </div>
            <div class="flex row-start-2 place-items-end justify-between">
                <a role="button" class="inline-flex items-center justify-between px-6 py-2 bg-[#d9d9d9] w-50 md:w-2xs">
                    Go To Shop
                    <x-icons.arrow />
                </a>
                <div class="hidden my-1 ml-7 gap-3 md:flex">
                    <x-buttons.pagination-btn />
                    <x-buttons.pagination-btn direction="right" />
                </div>
            </div>
        </div>
    </div>
</x-layout>