@extends('layouts.master')

@section('title','Home')

@section('content')
    <div class="mb-10">



    <div class="flex justify-center">
        <h1 class="text-2xl mt-5 text-white">Simple CRUD Process</h1>
    </div>


        @if(session('success'))
            <div class="bg-orange-300  mx-auto my-3 w-[600px] text-center rounded-sm py-2">
                {{session('success')}}
            </div>

        @endif
        <div class="">
            <a href="{{url("/product/create")}}" class="text-center ml-[250px]  bg-orange-300 px-4 py-2 select-none">Product Create</a>
        </div>
    <div class="flex justify-center mt-4">

        <table class="w-[900px]  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$product->product_name}}
                    </th>
                    <td class="px-6 py-4">
                        {{$product->product_color}}
                    </td>
                    <td class="px-6 py-4">
                        {{$product->category}}
                    </td>
                    <td class="px-6 py-4">
                        $&nbsp;{{$product->price}}
                    </td>
                    <td class="px-6 py-4 text-right flex ">
                        <a href="{{url("/product/edit/$product->id")}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="{{url("/product/delete/$product->id")}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-2">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    </div>


@endsection
