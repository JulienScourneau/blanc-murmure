<section class="flex justify-around items-center p-2.5">
    <p>BLANC MURMURE</p>
    <nav id="nav">
        <a class="links m-2.5" href="{{ route('home') }}">Home</a>
        <a class="links m-2.5" href="{{ route('news') }}">En ce moment</a>
        <a class="links m-2.5" href="{{ route('collaborater') }}">Construire un projet</a>
        <a id="navbar__project" class="links m-2.5" href="{{ route('project') }}">Nos Projets</a>
        <div id="navbar__deroulant">
            <a href="">Tous les projets</a>
            <a href="">Film d'animation - vidéo</a>
            <a href="">Sculpture</a>
            <a href="">Illustration</a>
            <a href="">Espace urbain</a>
            <a href="">Catalogue</a>
        </div>
        <a class="links m-2.5" href="{{ route('about') }}">A propos</a>
        <a class="links m-2.5" href="{{ route('contact') }}">Contact</a>
    </nav>
    <button class="bg-green-500 rounded-3xl p-2.5">Choisir un stage</button>
</section>