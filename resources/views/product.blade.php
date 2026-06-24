<x-layout>
    <x-slot:title>
        Product
    </x-slot:title>

    <div class="min-w-0 h-dvh flex justify-center items-center">
        <div class="flex justify-center items-center">
            <div class="border mr-10">
                <img class="flex-1 w-full max-h-100 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
            </div>
            <div class="mr-35 flex flex-col gap-3">
                <img class="w-full max-h-20 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
                <img class="w-full max-h-20 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
                <img class="w-full max-h-20 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
                <img class="w-full max-h-20 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
                <img class="w-full max-h-20 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
            </div>
            <div class="border px-15 pb-5 pt-20">
                <h1 class="font-bold text-lg">ABSTRACT PRINT SHIRT</h1>
                <p>$99</p>
                <small class="text-gray-500">MRP incl. of all taxes</small>
                <p class="my-10">Relaxed-fit shirt. Camp collar and short sleeves. Button-up front.</p>
                <div>
                    <p>Variants</p>
                    <x-buttons.tabs-product>
                        <a role="tab" class="tab tab-active"></a>
                        <a role="tab" class="tab"></a>
                        <a role="tab" class="tab"></a>
                        <a role="tab" class="tab"></a>
                        <a role="tab" class="tab"></a>
                    </x-buttons.tabs-product>
                </div>
                <div>
                    <p>Size</p>
                    <x-buttons.tabs-product>
                        <a role="tab" class="tab tab-active">XS</a>
                        <a role="tab" class="tab">S</a>
                        <a role="tab" class="tab">M</a>
                        <a role="tab" class="tab">L</a>
                        <a role="tab" class="tab">XL</a>
                    </x-buttons.tabs-product>
                </div>
                <button class="btn bg-altgray w-full mt-4">
                    ADD
                </button>
            </div>
        </div>
    </div>
</x-layout>