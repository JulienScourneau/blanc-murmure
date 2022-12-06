<section class="navbar w-full flex justify-beetween items-center p-2.5 bg-green">
    <a href="/">
        <img class="w-48" src="{{asset('assets/blanc-murmure-logo.png')}}" alt="">
    </a>
    <div class="block h-10 lg:hidden">
        <img id="navbar__mobile__menu" class="h-10" src="{{asset('assets/icons/menu.svg')}}" alt="">
        <nav id="navigation" class="flex flex-col" style="display:none">
            <ul id="menu">
                <li><a href="{{ Route ('home')}}">Accueil</a></li>
                <li><a href="{{ Route ('news')}}">En ce moment</a></li>
                <li id="projectMobile" class="flex hover:underline">
                    <p>Nos projets</p>
                    <img class="pl-2.5" src="{{asset('assets/icons/chevron-down.svg')}}" alt="">
                </li>
                <ul id="menuDeroulantMobile" class="ml-10 pt-0" style="display: none">
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
    <div class="hidden lg:flex w-full items-center">
        <div class="w-full flex justify-center">
            <nav class="flex justify-around w-11/12 h-10 items-center lg:text-sm 2xl:w-6/12 pt-1">
                <a class="pr-1 {{ (request()->is('/')) ? 'uppercase text-white' : 'highlightBlack' }}" href="{{ Route ('home')}}">Accueil</a>
                <a class="pr-1 {{ (request()->is('en-ce-moment')) ? 'uppercase text-white' : 'highlightBlack' }}" href="{{ Route ('news')}}">Envie de créer ?</a>
                <div id="project" class="h-full flex justify-center items-center relative z-50">
                    <div class="highlightBlack">
                        <p class="text-sm self-center">Nos projets</p>
                        <img class="pl-2.5 w-3/12" src="{{asset('assets/icons/chevron-down.svg')}}" alt="">
                        <ul id="menuDeroulant" class="absolute top-7 mr-32 bg-green p-5 w-56 shadow-lg" style="display: none">
                            <li><a class="{{ (request()->is('nos-projets')) ? 'uppercase text-white' : 'highlightBlack' }}" href="{{ Route ('project')}}">Tous les projets</a></li>
                            <li><a class="{{ (request()->is('nos-projets/video')) ? 'uppercase text-white' : 'highlightBlack' }}" href="{{ Route ('video') }}">Film d'animation - vidéo</a></li>
                            <li><a class="{{ (request()->is('nos-projets/sculpture')) ? 'uppercase text-white' : 'highlightBlack' }}" href="{{ Route ('sculpture')}}">Sculpture</a></li>
                            <li><a class="{{ (request()->is('nos-projets/illustration')) ? 'uppercase text-white' : 'highlightBlack' }}" href="{{ Route ('illustration')}}">Illustration</a></li>
                            <li><a class="{{ (request()->is('nos-projets/espace-urbain')) ? 'uppercase text-white' : 'highlightBlack' }}" href="{{ Route ('urbanSpace')}}">Espace urbain</a></li>
                            <li><a class="{{ (request()->is('nos-projets/catalogue')) ? 'uppercase text-white' : 'highlightBlack' }}" href="{{ Route ('catalog')}}">Catalogue</a></li>
                        </ul>
                    </div>
                </div>
                <a class="pr-1 {{ (request()->is('construire-un-projet')) ? 'uppercase text-white' : 'highlightBlack' }}" href="{{ Route ('collaborater')}}">Envie de travailler avec nous ?</a>
                <a class="pr-1 {{ (request()->is('à-propos')) ? 'uppercase text-white' : 'highlightBlack' }}" href="{{ Route ('about')}}">A propos</a>
                <a class=" {{ (request()->is('contact')) ? 'uppercase text-white' : 'highlightBlack' }}" href="{{ Route ('contact')}}">Contact</a>
            </nav>
        </div>
        <a href="{{ Route('inscription') }}"
        class="bg-orange text-white Title font-black text-center text-xl rounded-full w-52 py-4 border-2 border-orange hover:bg-white hover:text-orange lg:w-36 text-sm font-base xl:w-52 text-xl">Choisir un stage</a>
    </div>
</section>

{{-- shrink-0 --}}