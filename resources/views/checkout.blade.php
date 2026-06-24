<x-layout>
    <x-slot:title>
        Checkout
    </x-slot:title>

    <div class="min-w-0">
        <h1 class="font-bold text-3xl">CHECKOUT</h1>
        <div class="mt-8 flex justify-between items-start">
            <div class="max-w-lg">
                <div>
                    <div class="border py-4 px-7">
                        <h3 class="font-bold text-lg">Delivery Address</h3>
                        <p class="text-sm text-gray-500">Enter your address to see delivery options</p>
                        <div class="mt-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur excepturi sit minima
                                culpa
                                voluptatem architecto asperiores ducimus, cumque, officia autem dolorum enim ad quidem
                                soluta
                                praesentium perferendis? Aut, impedit ipsa?</p>
                            <button aria-label="Change delivery address class=" btn border border-black rounded-none
                                bg-transparent mt-3">Change</button>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="mt-5">
                    <div class="border py-4 px-7">
                        <h3 class="font-bold text-lg">Payment Method</h3>
                        <p class="text-sm text-gray-500">Choose your payment method</p>
                        <div class="mt-5">
                            <p>Cash on Delivery</p>
                            <button aria-label="Change payment method"
                                class="btn border border-black rounded-none bg-transparent mt-3">Change</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border p-6">
                <h3>Your Order</h3>
                <div>
                    <div>
                        <div>
                            <figure class="max-w-27.5 aspect-3/4">
                                <img class="w-full h-full object-cover"
                                    src="{{ Vite::asset('resources/images/fashion-models/alameenng.webp') }}"
                                    alt="Fashion model wearing new summer collection">
                            </figure>
                        </div>
                        <div>
                            <div>
                                <h5>Basic Heavy T-shirt</h5>
                                <p>Variant: </p>
                            </div>
                            <p>(1)</p>
                        </div>
                        <div>
                            <button aria-label="Change order item"
                                class="btn bg-transparent border border-black">Change</button>
                            <p>$99</p>
                        </div>
                    </div>
                    <div>
                        <div class="divider"></div>
                        <div>
                            <p class="flex-1">Merchandise Subtotal:</p>
                            <p>$99</p>
                        </div>
                        <div>
                            <p class="flex-1">Shipping Subtotal:</p>
                            <p>$28</p>
                        </div>
                        <div class="divider"></div>
                    </div>
                    <div>
                        <p class="flex-1">Total:</p>
                        <p>$127</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>