<div class="flex gap-4 justify-start w-[100%]">
@if (count($products) > 0)
    @foreach ($products as $product)
        <div class="w-[300px] flex-shrink-0 rounded-lg shadow p-4 flex flex-col hover:shadow-lg transition duration-300">
            <a href="/product/details/{{ $product->id }}">
                <div class="relative">
                    <img src="{{ Storage::url($product->image)}}"  alt="Product Image" class="rounded-md object-cover w-full h-48">
                    <span class="absolute top-2 left-2 bg-orange-100 text-orange-700 text-xs font-semibold px-2 py-1 rounded">New</span>
                </div>
                <div class="mt-4">
                    <h4 class="font-semibold text-gray-800">{{ $product->name }}</h4>
                    <p class="text-green-600 font-bold mt-1">${{ number_format($product->price, 2) }}</p>
                </div>
            </a>
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
                    <div class="flex gap-2 justify-center w-full rounded bg-[#039B00] px-12 py-2 text-sm font-medium text-white text-center shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg> 
                        <span>Add to cart</span>
                    </div>
                </a>
            @endif
        </div>
    @endforeach
@else
    <h2 class="text-2xl text-gray-300">No Product Available</h2>
@endif


</div>
