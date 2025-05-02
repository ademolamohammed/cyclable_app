<div class="px-6 py-10 space-y-12">
    <!-- Product Info -->
    <div class="flex flex-col lg:flex-row gap-10 mt-[6rem] px-[5rem]">
        <!-- Product Image -->
        <div class="w-full lg:w-2/3">
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Product Details</h2>
            <p class="text-sm text-gray-500 mb-6">Here are more details about the product</p>
            <img src="{{ Storage::url($product->image) }}" alt="Product Image" class="rounded-xl w-full shadow-md object-cover h-[400px]">
        </div>

        <!-- Side Panel -->
        <div class="w-full lg:w-1/3 space-y-4 mb-[2rem]">
            <!-- Chat Button -->
            

            @if (auth()->check())
            <a wire:click.prevent="addToCart({{ $product->id }})" href="#">
                <div class="flex gap-2 justify-center w-full rounded bg-[#039B00] px-12 py-2 text-sm font-medium text-white text-center shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto">
                    <div wire:loading class="animate-spin inline-block size-4 border-[3px] border-current border-t-transparent text-white-600 rounded-full" role="status" aria-label="loading">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg> 
                    <span>Add to cart</span>
                </div>
            </a>
            @else
                <a wire:navigate href='/auth/login'>
                    <div class="flex gap-2 justify-center w-full rounded bg-[#039B00]px-12 py-2 text-sm font-medium text-white text-center shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg> 
                        <span>Add to cart</span>
                    </div>
                </a>
            @endif

            <!-- Safety Tips -->
            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="text-sm font-semibold mb-2">Safety tips</h4>
                <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                    <li>Avoid sending any prepayments</li>
                    <li>Meet with the seller at a safe public place</li>
                    <li>Inspect what you're going to buy</li>
                    <li>Check all docs and only pay if you're satisfied</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Product Details -->
    <div class="space-y-6 max-w-3xl px-[5rem]">
        <div class="flex items-center gap-2">
            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full font-semibold">New</span>
        </div>
        <h1 class="text-2xl font-bold">{{ $product->name }}</h1>
        <p class="text-green-600 font-bold text-xl">${{ number_format($product->price, 2) }}</p>

        <div class="border-l-4 border-green-500 bg-green-50 p-4 text-sm text-gray-800">
            {{ $product->description ?? 'No description available for this product.' }}
        </div>

        <!-- Rating -->
        <div>
            <p class="text-sm text-gray-600 mb-1">Rate this Product</p>
            <div class="flex gap-1 text-xl text-gray-400 cursor-pointer">
                @for ($i = 0; $i < 5; $i++)
                    <span>★</span>
                @endfor
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <div class="px-[5rem]">
        <h3 class="text-xl font-semibold mb-4">Related products</h3>
        <div class="grid grid-cols-2 ml-[3rem] sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            Coming Soon ...
        </div>

        <!-- Pagination (optional or mock) -->
        <div class="flex justify-center mt-6 space-x-2">
            <button class="bg-gray-100 px-3 py-1 rounded text-sm hover:bg-gray-200">‹</button>
            <button class="bg-green-600 text-white px-3 py-1 rounded text-sm">1</button>
            <button class="bg-gray-100 px-3 py-1 rounded text-sm hover:bg-gray-200">›</button>
        </div>
    </div>
</div>
