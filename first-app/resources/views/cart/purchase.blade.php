@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

    <div class="bg-white p-6 [box-shadow:0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full max-w-sm rounded-2xl overflow-hidden mx-auto mt-12">
        {{-- <div class="relative h-3 m-2.5 overflow-hidden text-white rounded-md"></div> --}}
        <div class="p-4">
            <h6 class="mb-4 mt-6 text-slate-800 text-xl font-semibold">
                Purchase Completed
            </h6>
            <p class="text-slate-600 leading-normal font-light">
                Buyer name: <b class="text-black font-semibold">{{ $viewData['order']->getUserName() }}</b>
            </p>
            <p class="text-slate-600 leading-normal font-light">
                Total amount paid <b>${{ $viewData['order']->getTotal() }}</b>
            </p>
            <p class="text-slate-600 leading-normal font-light">
                Purchase successfuly completed. Order number is <b>#{{ $viewData['order']->getId() }}</b>
            </p>
        </div>
    </div>
@endsection
