@extends('base')

@title('home')

@section('content')
    <div class="grid place-items-center w-full box-border gap-y-16">

    @section('main-content')
    <h1 class="text-5xl font-semibold max-w-[20ch] leading-tight">That time i learned laravel</h1>
    
        <h3 class="text-lg mt-4 text-gray-500">
            This is my blog for my story in time i get started to learn laravel
        </h3>
    
        <div class="w-full text-center">
            <img src="https://www.logo.wine/a/logo/Laravel/Laravel-Logo.wine.svg" class="max-h-[600px] max-w-[600px] mx-auto mt-12" alt="laravel-logo">
            <a href="https://www.logo.wine/" class="hover:underline hover:text-blue-500">Logo Wine</a>
        </div>
        
        <p class="mt-12 text-medium text-lg leading-relaxed">
            This is my first blog that i've created during learning laravel, because i want to add my knowledge
            in my backend skill to improve my flexibility to technology that companies used, so the main idea behind why i decide to learn laravel
            it because laravel is the one of the most uses framework especially in indonesia it has a wide and active community, and it's suite
            for simple project, thanks to it's feature like illuminate, Symphony, and Sanctum. 
        </p>
        
        <div class="w-full text-center mt-12">
            <img src="{{ asset('images/laravel-trials.png') }}" class="max-h-[600px] max-w-[600px] mx-auto mb-4" alt="laravel-logo">
            <span href="https://www.logo.wine/">Laravel installer failed</span>
        </div>
        
        <p class="mt-12 text-medium text-lg leading-relaxed">
            Even there are some drawbacks in php, when i try to compile from source during installation
            several flag must be turned on during compilation if i want to install composer, the flag or extensions that should be included is Phar, zlib, curl
            i know that i can use apt to install php and just install other extension if i face some issues, but in here i just want to learn diffrent things. it tooks a long time during the compilation
            and somtimes when i finish compile, test and install when i want to install the composer it self there are a lot of issues, start from zlib is not activated, i've try to search the solution in internet
            but turn out it need to be recompile again with a extensions flag like '--with-zlib', it makes me boring but that one of my new experience, >D<
        </p>
    @endsection

</body>
</html>
@endsection