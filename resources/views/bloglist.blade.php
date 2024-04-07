@extends('layouts/base')

@section('title', 'Blog List')


@section('content')
<div class="container min-w-full pb-24 grid gap-y-20 mt-16">    
    <!-- this will be dynamic to data -->
    <div class="min-w-full flex items-center gap-x-6 hover:cursor-pointer">
        <img src="https://cdn.thewirecutter.com/wp-content/media/2023/06/laptops-2048px-5607.jpg?auto=webp&quality=75&crop=1.91:1&width=1200" alt="blogImage" class="w-[220px] aspect-auto" />
        <div class="">
            <div class="w-full flex justify-between items-center">
                <a href="/details" class="font-bold text-2xl underline-offset-4">That time i learned laravel</a>
                <span class="text-gray-400">Tue, 12 March</span>
            </div>

            <p class="mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam consequuntur quos consectetur minima cumque quae perferendis, atque officiis non aut quod quibusdam fugiat vitae, tenetur reiciendis dolorum ad voluptate? Harum.
            </p>
        </div>
    </div>
</div>
@endsection 