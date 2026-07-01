<x-layout>
    <x-slot:title>
        Product
    </x-slot:title>
    @section('body-class', 'product-page')

    <x-nav-product />
    <div class="min-w-0 mt-125 lg:mt-25 flex justify-center lg:items-center">
        <div class="flex-1 flex flex-col lg:flex-row lg:justify-center lg:items-center">
            <div class="absolute inset-0 lg:relative lg:border lg:mr-10">
                <img class="flex-1 w-full max-h-125 lg:max-h-100 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
            </div>
            <div class="flex gap-3 lg:flex-col my-10 lg:my-0 lg:mr-30">
                <img class="w-full max-h-30 lg:max-h-25 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
                <img class="w-full max-h-30 lg:max-h-25 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
                <img class="w-full max-h-30 lg:max-h-25 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
                <img class="w-full max-h-30 lg:max-h-25 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
                <img class="w-full max-h-30 lg:max-h-25 aspect-3/4 object-cover"
                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                    alt="Fashion model wearing new summer collection">
            </div>
            <div class="text-lg lg:text-base lg:border lg:p-15">
                <h1 class="font-bold text-xl lg:text-lg">ABSTRACT PRINT SHIRT</h1>
                <p>$99</p>
                <small class="text-gray-500 font-light">MRP incl. of all taxes</small>
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
                <div class="my-5">
                    <p>Size</p>
                    <x-buttons.tabs-product>
                        <a role="tab" class="tab tab-active">XS</a>
                        <a role="tab" class="tab">S</a>
                        <a role="tab" class="tab">M</a>
                        <a role="tab" class="tab">L</a>
                        <a role="tab" class="tab">XL</a>
                    </x-buttons.tabs-product>
                </div>
                <button class="btn bg-altgray w-full mt-4 py-5 text-xl lg:text-base sticky bottom-0 lg:relative">
                    ADD
                </button>
            </div>
        </div>
    </div>
</x-layout>