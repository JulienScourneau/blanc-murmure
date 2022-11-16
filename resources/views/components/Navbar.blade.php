<section class="navbar flex items-center p-2.5">
    <img class="h-24" src="assets/blanc-murmure-logo.png" alt="">
    <img id="navbar__mobile__menu" class="h-10" src="assets/icons/menu.svg" alt="">
    <nav id="navigation" style="display:none">
        <ul id="menu" class="flex flex-col">
          <li><a href="{{ Route ('home')}}">Accueil</a></li>
          <li><a href="{{ Route ('news')}}">En ce moment</a></li>
          <li><a href="{{ Route ('project')}}">Nos projets</a></li>
          <li><a href="{{ Route ('collaborater')}}">Envie de travailler avec nous ?</a></li>
          <li><a href="{{ Route ('about')}}">A propos</a></li>
          <li><a href="{{ Route ('contact')}}">Contact</a></li>
        </ul>
    </nav>
</section>