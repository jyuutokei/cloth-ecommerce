<x-layout>
    <x-slot:title>
        Cart
    </x-slot:title>

    <div class="min-w-0">
        <h1 class="font-extrabold text-3xl">Shopping Cart</h1>
        <div class="divider"></div>
        <div class="flex gap-5">
            <div class="flex-1 grid grid-cols-[repeat(auto-fill,minmax(max(100%/4,300px),1fr))] gap-10">
                <x-card-cart />
                <x-card-cart />
                <x-card-cart />
                <x-card-cart />
                <x-card-cart />
                <x-card-cart />
            </div>
            <div class="divider lg:divider-horizontal"></div>
            <div>
                <div class="border p-6 sticky top-15">
                    <h5 class="font-bold">Order Summary</h5>
                    <p class="mt-5">1 Item</p>
                    <div class="mt-2 flex justify-between items-center">
                        <p class="font-bold">Total:</p>
                        <p class="font-bold">$127</p>
                    </div>
                    <div>
                        <button class="mt-7 w-full btn rounded-none bg-altgray">Place
                            Order</button>
                    </div>
                </div>
            </div>
        </div>
</x-layout>