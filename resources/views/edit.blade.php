@extends('layouts.master')

@section('title','edit')

@section('content')



    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="bg-orange-300   mx-auto my-3 w-[600px] text-center rounded-sm py-2">
                {{$error}}
            </div>
        @endforeach
    @endif

    @if(session('success'))
        <div class="bg-orange-300   mx-auto my-3 w-[600px] text-center rounded-sm py-2">
            {{session('success')}}
        </div>
    @endif

    <div class="justify-center flex mt-10">
        <h1 class="text-center text-2xl text-white ">Edit Form ID - {{$edit_products->id}}</h1>
        <a href="{{url("/home")}}" class="text-center ml-[300px] bg-orange-300 px-4 py-2 select-none">View Product</a>
    </div>
    <div class="w-[600px] mx-auto">
        <form class="mt-5" method="post">
            {{@csrf_field()}}
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="" class="block mb-2 text-white text-sm font-medium  dark:text-white">Product Name</label>
                    <input type="text" value="{{$edit_products->product_name}}" name="name" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name"  />
                </div>
                <div class="">
                    <label for="" class="block mb-2 text-white text-sm font-medium  dark:text-white">Color</label>
                    <input type="text" value="{{$edit_products->product_color}}" name="color" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Color"  />
                </div>
                <div class="">
                    <label for="" class="block mb-2 text-white text-sm font-medium  dark:text-white">Category</label>
                    <input type="text" value="{{$edit_products->category}}" name="category" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Category"  />
                </div>
                <div class="">
                    <label for="" class="block mb-2 text-white text-sm font-medium  dark:text-white">Price</label>
                    <input type="number" value="{{$edit_products->price}}" name="price" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Price" pattern=""  />
                </div>

                <button type="submit" class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>


@endsection
