<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    <div class="min-w-0 overflow-x-hidden w-full mt-20">
        <div>
            <p class="text-xl">Men</p>
            <p class="text-xl">Women</p>
            <p class="text-xl">Kids</p>
            <x-search-input class="mt-5" />
        </div>
        <div class="min-w-0 md:grid grid-rows-[minmax(0,200px)_minmax(0,200px)] grid-cols-3 gap-4 mt-20">
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
            <div class="flex row-start-2 place-items-end-safe justify-between">
                <a role="button" href="{{ route("products") }}"
                    class="btn shrink justify-between px-6 py-2 bg-altgray w-50 md:w-2xs cursor-pointer group hover:bg-neutral hover:text-white">
                    Go To Shop
                    <x-icons.arrow />
                </a>
                <x-buttons.pagination-btn class="hidden ml-7" />
            </div>
        </div>
        <div class="mt-35">
            <div class="flex justify-between items-end-safe">
                <h2 class="font-extrabold text-6xl md:text-5xl lg:text-5xl xl:text-6xl">NEW <br> THIS WEEK</h2>
                <a href="#" class="text-gray-500 link-hover">See All</a>
            </div>
            <div class="overflow-hidden flex items-center-safe gap-6 p-1">
                <x-card class="max-h-85" />
                <x-card class="max-h-85" />
                <x-card class="max-h-85" />
                <x-card class="max-h-85" />
            </div>
            <div class="mt-4 flex justify-center items-center">
                <x-buttons.pagination-btn />
            </div>
        </div>
        <div class="mt-35">
            <div>
                <h2 class="font-extrabold text-6xl md:text-5xl lg:text-5xl xl:text-6xl">XIV <br> COLLECTIONS <br> 23-24
                </h2>
            </div>
            <div class="mt-15">
                <div class="flex justify-between items-end">
                    <div class="flex gap-10">
                        <a href="#" class="hover:underline">(ALL)</a>
                        <a href="#" class="text-gray-500 link-hover">Men</a>
                        <a href="#" class="text-gray-500 link-hover">Women</a>
                        <a href="#" class="text-gray-500 link-hover">Kids</a>
                    </div>
                    <div>
                        <a href="#" class="block text-gray-500 link-hover">Less to More</a>
                        <a href="#" class="block text-gray-500 link-hover">More to Less</a>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="overflow-hidden flex items-center-safe gap-10 p-1">
                    <x-card class="max-h-100" />
                    <x-card class="max-h-100" />
                    <x-card class="max-h-100" />
                </div>
            </div>
            <div class="flex justify-center mt-5">
                <button class="btn bg-transparent flex-col cursor-pointer group hover:bg-neutral">
                    <p class="text-gray-500 -mb-2 group-hover:text-white">More</p>
                    <x-icons.angle-arrow direction="down" />
                </button>
            </div>
        </div>
        <div class="mt-35">
            <div>
                <h2 class="text-center text-6xl md:text-5xl lg:text-5xl xl:text-6xl">OUR APPROACH TO FASHION DESIGN</h2>
                <p class="text-xl text-center max-w-2xl mx-auto mt-5 font-light">at elegant vogue , we blend creativity
                    with
                    craftsmanship
                    to
                    create
                    fashion
                    that
                    transcends trends and
                    stands the test
                    of time each design is meticulously crafted, ensuring the highest quelity exqulsite finish</p>
            </div>
            <div class="mt-8 flex overflow-hidden gap-6">
                <img class="max-w-87.5 max-h-112.5 object-cover border"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
                <img class="max-w-87.5 max-h-112.5 object-cover border"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
                <img class="max-w-87.5 max-h-112.5 object-cover border"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
                <img class="max-w-87.5 max-h-112.5 object-cover border"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
            </div>
        </div>
    </div>
</x-layout>