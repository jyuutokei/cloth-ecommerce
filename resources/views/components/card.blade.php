<div class="card w-96 rounded-none mt-7">
    <figure class="border relative">
        <img {{ $attributes->merge(['class' => "w-full object-center object-cover"]) }}
            src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
            alt="Fashion model wearing new summer collection">
        <button class="absolute bottom-0 left-1/2 -translate-x-1/2 p-2 bg-altgray">
            <x-icons.plus />
        </button>
    </figure>
    <div class="card-body px-1">
        <span class="text-gray-500">V-Neck T-Shirt</span>
        <div class="flex justify-between">
            <h3 class="card-title">Embroided Seersucker Shirt</h3>
            <h3 class="card-title">$99</h3>
        </div>
    </div>
</div>