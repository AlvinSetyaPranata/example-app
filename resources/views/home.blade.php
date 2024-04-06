<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    
    <div class="grid place-items-center w-full box-border gap-y-16">
    <nav class="min-w-full px-16 sticky left-0 top-0 flex bg-white justify-between items-center py-8">
        <h1 class="text-2xl font-semibold text-red-500">Myblog</h1>

        <div class="flex gap-8">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[30px] h-[30px]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
            </button>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[30px] h-[30px]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                </svg>
            </button>
        </div>
    </nav>


    <section class="px-16">
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


    </section>


    <footer class="w-full grid gap-16 px-16 pt-12 pb-4 bg-black text-white relative">
        <div class="flex flex-col w-full gap-y-14">
            <div>
                <!-- brand group -->
                <h1 class="text-4xl font-bold">Myblog</h1>
                <p class="mt-6">The tiredness that you feel now is better than the one you feel later</p>

                <!-- socials links -->
                <div class="flex mt-8 gap-x-[20px]">
                    <a href="https://github.com/AlvinSetyaPranata">
                        <svg fill="currentColor" viewBox="0 0 24 24" class="w-[30px] h-[30px] fill-gray-300"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="">
                        <svg fill="currentColor" viewBox="0 0 24 24" class="w-[30px] h-[30px] fill-gray-300"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>            
            </div>

            <div class="flex gap-x-20 text-white">
                <div class="flex flex-col gap-y-6">
                    <p class="font-semibold">Pages</p>
                    <a href="#">Home</a>
                    <a href="#">About me</a>
                    <a href="#">Contact</a>
                </div>
                <div class="flex flex-col gap-y-6">
                    <p class="font-semibold">Supports</p>
                    <a href="#">Api References</a>
                    <a href="#">About me</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>

        <div class="w-full text-center text-gray-400 font-bold">
            <p class="text-sm">Build by &lt/&gt, Created with ❤️</p>
        </div>
    </footer>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>