<div class="bg-white mt-9">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 -mt-20">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-10">List of Products</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-96\ rounded-lg">
        @foreach ($viewData['products'] as $product)
            <a href="{{ route('view.product', ['id' => $product->getId()]) }}" class="mx-auto sm:mr-0 group cursor-pointer lg:mx-auto bg-white transition-all duration-500">
        <div class="">
            <img class="h-48 w-full md:h-full md:w-48" src="{{ asset('/storage/' . $product->getImage()) }}" alt="">
        </div>
        <div class="mt-5">
            <div class="flex items-center justify-between">
                <h6
                    class="font-semibold text-xl leading-8 text-black transition-all duration-500 group-hover:text-indigo-600">
                    {{ $product->getProductName() }}</h6>
                <h6 class="font-semibold text-xl leading-8 text-indigo-600">{{ $product->getPrice() }}</h6>
            </div>
            <p class="mt-2 font-normal text-sm leading-6 text-gray-500">{{ $product->getDescription() }}</p>
        </div>
        </a>
        @endforeach
    </div>
  </div>
</div>