@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-manrope font-bold text-4xl text-black mb-8 max-lg:text-center">
                Product list
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($viewData['products'] as $product)
                <a href="{{ route('view.product', ['id' => $product->getId()]) }}"
                    class="mx-auto sm:mr-0 group cursor-pointer lg:mx-auto bg-white transition-all duration-500">
                    <div class="">
                        <img src="{{ asset('/storage/' . $product->getImage()) }}" alt=""
                            class="w-full aspect-square rounded-2xl object-cover">
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
    </section>
@endsection
