<header >
    <div class="bg-primary">
    <div class="container text-center text-white py-1 relative ">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, dolorem.
        </p>
        <button type="button" class="absolute right-20 top-[50%] translate-y-[-50%] cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
</div>
<nav class="shadow-lg">
    <div class="container flex flex-wrap md:flex-row gap-4 items-center justify-between py-3">
        <div class="flex items-center gap-4">
            <img class="h-12" src="{{ asset('frontend/images/leleforweb.png') }}" alt="logo">
            <a href="{{ route('home') }}"><p class="font-bold text-2xl text-primary">Lele Sasto GharJagga Karobar Kendra</p></a>

        </div>
        <div>
            <form action="" method="get">
                <div class="flex items-center">
                <input type="search" name="search" placeholder="Search">
                <button type="submit" class="bg-[#ababab] border-red-500 text-black py-2 px-4">compare<i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            </form>
        </div>
        <div class="flex items-center gap-4">
            <a href="" class="btn-primary">sign-in</a>
            <a href="" class="btn-secondary">sign up</a>
        </div>
    </div>
</nav>
</header>
