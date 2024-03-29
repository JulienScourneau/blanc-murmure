<footer class="flex flex-col mt-12 p-2.5 p-10 bg-green rounded-2xl">
    <section class="xl:flex justify-around w-11/12 md:w-6/12 xl:w-11/12 mx-auto">
        <div class="flex flex-col xl:w-3/12">
            <div class="flex flex-row pl-5">
                <a href="https://www.facebook.com/blancmurmure.be" target="_blank" rel="noopener noreferrer">
                    <img class="w-6" src="{{asset('assets/icons/facebook_logo.png')}}" alt="">
                </a>
                <a href="https://www.instagram.com/blancmurmure/" target="_blank" rel="noopener noreferrer">
                    <img class="w-6 ml-2" src="{{asset('assets/icons/instagram_logo.png')}}" alt="">
                </a>
            </div>
            <hr class="mt-5 mb-2.5 text-white"/>

            <form action="{{route('newsletter')}}" method="POST">
                @csrf
                @honeypot
                <h2 class="Title uppercase text-orange text-2xl leading-7 font-black w-11/12 self-center">Restez au
                    courant
                    de notre actualité !</h2>
                <input class="FooterInput border-placeHolder border-2 p-1.5 pl-4 rounded-3xl my-5 w-10/12 self-center"
                       type="text"
                       name="email"
                       placeholder="Email">
                <button type="submit"
                    class="p-2.5 text-placeHolder text-2xl font-bold w-10/12 self-center bg-orange text-white text-center rounded-full border-2 border-orange hover:bg-white hover:text-orange">
                    S’inscrire
                </button>

            </form>
        </div>

        <hr class="block my-6 text-separator xl:hidden"/>
        <div class="hidden xl:flex">
            <nav class="flex flex-col mr-5">
                <p class="Title font-light text-xl text-orange uppercase">Explorer</p>
                <a class="py-1 highlightBlack" href="{{ Route ('home')}}">Accueil</a>
                <a class="py-1 highlightBlack" href="{{ Route ('news')}}">En ce moment</a>
                <a class="py-1 highlightBlack" href="{{ Route ('collaborater')}}">Envie de travailler avec nous ?</a>
                <a class="py-1 highlightBlack" href="{{ Route ('about')}}">A propos</a>
                <a class="py-1 highlightBlack" href="{{ Route ('contact')}}">Contact</a>
            </nav>
            <nav class="flex flex-col">
                <p class="Title font-light text-xl text-orange uppercase">Nos projets</p>
                <a class="py-1 highlightBlack" href="{{ Route ('project')}}">Tous les projets</a>
                <a class="py-1 highlightBlack" href="{{ Route ('video')}}">Film d'animation - Vidéo</a>
                <a class="py-1 highlightBlack" href="{{ Route ('sculpture')}}">Sculpture</a>
                <a class="py-1 highlightBlack" href="{{ Route ('illustration')}}">Illustration</a>
                <a class="py-1 highlightBlack" href="{{ Route ('urbanSpace')}}">Espace urbain</a>
                <a class="py-1 highlightBlack" href="{{ Route ('catalog')}}">Catalogue</a>
            </nav>
        </div>

        <div class="footer__information flex flex-col text-sm pl-5 text-sm lg:text-base font-normal leading-5">
            <div class="flex flex-row items-center xl:my-2 text-sm lg:text-base">
                <img src="{{asset('assets/icons/opening_icon.png')}}" alt="">
                <p class="ml-2.5 text-white">Du lundi au vendredi de 9h à 17h</p>
            </div>
            <div class="flex flex-row items-center xl:my-2 text-sm lg:text-base">
                <img src="{{asset('assets/icons/location_icon.png')}}" alt="">
                <p class="ml-2.5 text-white">36 rue de la Boule, 7390 Quaregnon, Belgique</p>
            </div>
            <div class="flex flex-row items-center xl:my-2 text-sm lg:text-base">
                <img src="{{asset('assets/icons/phone_icon.png')}}" alt="">
                <p class="ml-2.5 text-white">+32 (0)65 515 217</p>
            </div>
            <div class="flex flex-row items-center mb-4 xl:my-2 text-sm lg:text-base">
                <img src="{{asset('assets/icons/mail_icon.png')}}" alt="">
                <a class="ml-2.5 text-orange highlightOrange"
                   href="mailto: info@blancmurmure.be">info@blancmurmure.be</a>
            </div>
            <div class="flex flex-row items-center text-sm lg:text-base">
                <p class="ml-2.5 text-white">IBAN :</p>
                <p class="ml-2.5 text-white">BE25 0682 2499 7082</p>
            </div>
            <div class="flex flex-row items-center text-sm lg:text-base">
                <p class="ml-2.5 text-white">BIC :</p>
                <p class="ml-2.5 text-white">GKCCBEBB</p>
            </div>
        </div>
    </section>
</footer>
