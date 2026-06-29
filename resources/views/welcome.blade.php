<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    <div class="min-w-0 mt-20">
        <div class="sm:flex sm:justify-center lg:justify-start">
            <x-search-input class="mt-5" />
        </div>
        <div class="min-w-0 flex flex-col lg:grid grid-rows-[minmax(0,200px)_minmax(0,200px)] grid-cols-3 gap-4 mt-20">
            <div class="row-start-1 col-start-1">
                <h1 class="font-extrabold text-6xl md:text-5xl lg:text-5xl xl:text-6xl text-center lg:text-start">
                    NEW
                    <br>
                    COLLECTION
                </h1>
                <p class="text-lg mt-4 text-center lg:text-start">Discover the latest trends in fashion</p>
                <p class="text-xl font-bold text-center lg:text-start">Summer <br> 2026</p>
            </div>
            <div class="hidden lg:block col-start-2 row-span-2 border border-black">
                <x-heading-img />
            </div>
            <div class="hidden lg:block col-start-3 row-span-2 border border-black">
                <x-heading-img />
            </div>
            <div class="flex justify-center lg:hidden my-5 lg:my-0">
                <div class="max-w-85">
                    <x-heading-img />
                </div>
            </div>
            <div class="flex row-start-2 place-items-end justify-center lg:justify-start">
                <div class="aura">
                    <a role="button" href="{{ route("products") }}"
                        class="btn shrink justify-between px-6 py-2 bg-altgray w-50 md:w-2xs cursor-pointer group">
                        Go To Shop
                        <x-icons.arrow />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-35 overflow-hidden">
        <div class="flex justify-between items-end">
            <h2 class="font-extrabold text-6xl">NEW <br> THIS WEEK</h2>
            <a href="#" class="text-gray-500 link-hover">See All</a>
        </div>
        <div class="mt-7 x-slider-cont w-full cursor-grab active:cursor-grabbing">
            <div class="x-slider flex items-center gap-6 p-1 w-max">
                <x-card class="max-h-70 aspect-square" />
                <x-card class="max-h-70 aspect-square" />
                <x-card class="max-h-70 aspect-square" />
                <x-card class="max-h-70 aspect-square" />
                <x-card class="max-h-70 aspect-square" />
                <x-card class="max-h-70 aspect-square" />
                <x-card class="max-h-70 aspect-square" />
            </div>
        </div>
    </div>
    <div class="mt-35">
        <div>
            <h2 class="font-extrabold text-6xl">XIV <br> COLLECTIONS <br> 23-24
            </h2>
        </div>
        <div class="mt-15">
            <div class="flex justify-between items-end">
                <div class="flex gap-10">
                    <a href="#" class="hover:underline">(ALL)</a>
                </div>
                <div>
                    <a href="#" class="block text-gray-500 link-hover">Less to More</a>
                    <a href="#" class="block text-gray-500 link-hover">More to Less</a>
                </div>
            </div>
            <div class="divider"></div>
            <div class="grid grid-cols-[repeat(auto-fill,minmax(max(100%/4,200px),1fr))] gap-5 p-1">
                <x-card class="max-h-80" />
                <x-card class="max-h-80" />
                <x-card class="max-h-80" />
                <x-card class="max-h-80" />
            </div>
        </div>
        <div class="flex justify-center mt-5">
            <button class="btn flex-col cursor-pointer bg-transparent group hover:bg-neutral">
                <p class="text-gray-500 -mb-2 group-hover:text-white">More</p>
                <x-icons.angle-arrow direction="down" />
            </button>
        </div>
    </div>
    <div class="mt-35">
        <div>
            <h2 class="text-center text-6xl">OUR APPROACH TO FASHION DESIGN</h2>
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
        <div class="overflow-hidden mt-20 flex gap-6">
            <img class="max-w-87.5 max-h-112.5 object-cover border -mt-10"
                src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                alt="Fashion model wearing new summer collection mt-10">
            <img class="max-w-87.5 max-h-112.5 object-cover border"
                src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                alt="Fashion model wearing new summer collection">
            <img class="max-w-87.5 max-h-112.5 object-cover border -mt-10"
                src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                alt="Fashion model wearing new summer collection">
            <img class="max-w-87.5 max-h-112.5 object-cover border mt-10"
                src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                alt="Fashion model wearing new summer collection">
        </div>
    </div>
    </div>
</x-layout>