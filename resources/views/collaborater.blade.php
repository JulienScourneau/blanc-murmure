@extends('layouts.app')

@section('content')
<article class="shadow-lg w-11/12 card p-5 text-white bg-greenDuck">
    <h2 class="text-2xl mb-10">Écoles</h2>
    <p>
         Nous poussons régulièrement la porte des écoles primaires et secondaires pour mettre en place
         des projets artistiques en collaboration avec les différents corps professoraux.
         La mise en place d’un projet, en accord avec le programme pédagogique, offre une expérience collective,
         éveille le goût de l’expression, les aptitudes créatrices des élèves, tout en développant une image positive de soi
         et des autres.
     </p>
     <div>
         <x-collaborater-img src="assets/collaborater/school_1.png" />
         <x-collaborater-img src="assets/collaborater/school_2.png" />
         <x-collaborater-img src="assets/collaborater/school_3.png" />
     </div>
 </article>
@endsection