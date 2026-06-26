<div class="border p-6">
    <div class="flex gap-4 justify-between">
        <figure class="max-w-66.25 aspect-3/4">
            <img class="w-full h-full object-cover"
                src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                alt="Fashion model wearing new summer collection">
        </figure>
        <div class="flex flex-col items-center">
            <div>
                <button id="close" class="border-none">
                    <x-icons.xmark />
                </button>
            </div>
            <div class="mt-13 join join-vertical gap-2">
                <button class="join-item btn group bg-altgray">
                    <x-icons.plus />
                </button>
                <button class="join-item btn bg-altgray">1</button>
                <button class="join-item btn group bg-altgray">
                    <x-icons.minus />
                </button>
            </div>
        </div>
    </div>
    <div>
        <p class="text-sm text-gray-500 mt-2">Variant: </p>
        <div class="flex justify-between items-center">
            <h5 class="text-lg font-bold truncate">Basic Heavy T-shirt</h5>
            <p class="font-bold">$99</p>
        </div>
    </div>
</div>