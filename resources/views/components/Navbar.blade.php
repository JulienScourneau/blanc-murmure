<section class="navbar flex items-center p-2.5 bg-green">
    <img class="h-24" src="assets/blanc-murmure-logo.png" alt="">
    <img id="navbar__mobile__menu" class="h-10" src="assets/icons/menu.svg" alt="">
    <nav id="navigation" class="flex flex-col" style="display:none">
        <ul id="menu">
          <li><a href="{{ Route ('home')}}">Accueil</a></li>
          <li><a href="{{ Route ('news')}}">En ce moment</a></li>
          <li><a href="{{ Route ('project')}}">Nos projets</a></li>
          <li><a href="{{ Route ('collaborater')}}">Envie de travailler avec nous ?</a></li>
          <li><a href="{{ Route ('about')}}">A propos</a></li>
          <li><a href="{{ Route ('contact')}}">Contact</a></li>
        </ul>
        <a href="{{ Route('inscription') }}" class="bg-green text-white font-black text-center text-xl rounded-3xl w-52 py-4 mt-9">Choisir un stage</a>
    </nav>
</section>
