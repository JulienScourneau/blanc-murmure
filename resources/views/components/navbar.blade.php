<section class="navbar flex items-center p-2.5 bg-green">
    <a href="/">
        <img class="w-48" src="{{asset('assets/blanc-murmure-logo.png')}}" alt="">
    </a>
    <div class="block xl:hidden">
        <img id="navbar__mobile__menu" class="h-10" src="{{asset('assets/icons/menu.svg')}}" alt="">
        <nav id="navigation" class="flex flex-col" style="display:none">
            <ul id="menu">
                <li><a href="{{ Route ('home')}}">Accueil</a></li>
                <li><a href="{{ Route ('news')}}">En ce moment</a></li>
                <li id="project" class="flex hover:underline">
                    <p>Nos projets</p>
                    <img class="pl-2.5" src="{{asset('assets/icons/chevron-down.svg')}}" alt="">
                </li>
                <ul id="menuDeroulant" class="ml-10 pt-0" style="display: none">
                    <li><a class="text-base" href="{{ Route ('project')}}">Tous les projets</a></li>
                    <li><a class="text-base" href="{{ Route ('video') }}">Film d'animation - vidéo</a></li>
                    <li><a class="text-base" href="{{ Route ('sculpture')}}">Sculpture</a></li>
                    <li><a class="text-base" href="{{ Route ('illustration')}}">Illustration</a></li>
                    <li><a class="text-base" href="{{ Route ('urbanSpace')}}">Espace urbain</a></li>
                    <li><a class="text-base" href="{{ Route ('catalog')}}">Catalogue</a></li>
                </ul>
            <li><a href="{{ Route ('collaborater')}}">Envie de travailler avec nous ?</a></li>
            <li><a href="{{ Route ('about')}}">A propos</a></li>
            <li><a href="{{ Route ('contact')}}">Contact</a></li>
            </ul>
            <a href="{{ Route('inscription') }}"
            class="bg-green text-white font-black text-center text-xl rounded-full w-52 py-4 mt-9">Choisir un stage</a>
        </nav>
    </div>
    <div class="hidden xl:flex w-full justify-center items-center">
        <div class="w-10/12 flex justify-center">
            <nav class="flex justify-around w-10/12 2xl:w-6/12">
                <a href="{{ Route ('home')}}">Accueil</a>
                <a href="{{ Route ('news')}}">En ce moment</a>
                <li class="flex">
                    <p>Nos projets</p>
                    <img class="pl-2.5 w-3/12" src="{{asset('assets/icons/chevron-down.svg')}}" alt="">
                </li>
                <a href="{{ Route ('collaborater')}}">Envie de travailler avec nous ?</a>
                <a href="{{ Route ('about')}}">A propos</a>
                <a href="{{ Route ('contact')}}">Contact</a>
            </nav>
        </div>
        <a href="{{ Route('inscription') }}"
        class="bg-orange text-white Title font-black text-center text-xl rounded-full w-52 py-4">Choisir un stage</a>
    </div>
</section>