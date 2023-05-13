@extends('layouts.app')

@section('content')
    <?php
    $srcImgSchool = ['assets/collaborater/school_1.png', 'assets/collaborater/school_2.png', 'assets/collaborater/school_3.png'];
    $hoverImgSchool = ['assets/collaborater/school_01_hover.png', 'assets/collaborater/school_02_hover.png', 'assets/collaborater/school_03_hover.png'];
    $textImgSchool = ['Atelier réalisé dans le cadre de «Tomber Volontiers dans le Panneau» à Quaregnon. Avec la participation des élèves de 4ème section Arts Appliqués du lycée Jeanne Dufrasnes 2015', 'Atelier «Quai n’histoire» réalisé avec les élèves de 5ème année de l’école communale de Flénu dans le cadre du projet Vhello 2022', 'Atelier «Rêveurs de Sable Émouvant» réalisé avec les élèves de 5ème année de l’école communale De Brouckère à Quaregnon 2015'];
    ?>
    <x-collaborater-article titleArticle="Écoles"
        textArticle="Nous poussons régulièrement la porte des écoles primaires et secondaires pour mettre en place des projets artistiques en collaboration avec les différents corps professoraux. La mise en place d’un projet, en accord avec le programme pédagogique, offre une expérience collective, éveille le goût de l’expression, les aptitudes créatrices des élèves, tout en développant une image positive de soi et des autres."
        :srcImg="$srcImgSchool" :hoverImg="$hoverImgSchool" :textImg="$textImgSchool" />

    <?php
    $srcImgPartner = ['assets/collaborater/partner_01.png', 'assets/collaborater/partner_02.png', 'assets/collaborater/partner_03.png'];
    $hoverImgPartner = ['assets/collaborater/partner_01_hover.png', 'assets/collaborater/partner_02_hover.png', 'assets/collaborater/partner_03_hover.png'];
    $textImgPartner = ['Atelier «Mémoire émaillée» organisé dansle cadre de «Tomber Volontiers dans le Panneau» en partenariat avec la bibliothèque communale de Quaregnon. Réalisé par des enfants et des adultes, avec l’intervention d’Isabelle Baldacchino, auteure 2015', 'Détail du «Jeux de mémoire», stage animé par Catherine Wilkin, illustratrice été 2015', 'Réalisation d’une peinture de 100 mètres dans le cadre de «Tomber Volontiers dans le Panneau». Laurent Duvinage y a mené différents ateliers avec les différents publics de Quaregnon 2015'];
    ?>
    <x-collaborater-article titleArticle="Les partenaires et résidences d’artistes"
        textArticle="Laurent Duvinage, illustrateur, nous parle de son expérience lors du projet « Tomber Volontiers dans le Panneau » 2015 : «Le projet ne m’appartient pas, c’est ce que j’aime, même si c’est déroutant. Il m’échappe sans cesse. Il est vivant, expérimental. Travailler ensemble, c’est tenter de laisser des portes ouvertes au hasard, aux autres. C’est se permettre des dérives, celle de la rencontre, de la découverte qui nourrit un projet commun qui est à tous et à personne à la fois. »"
        :srcImg="$srcImgPartner" :hoverImg="$hoverImgPartner" :textImg="$textImgPartner" />

    <?php
    $srcImgSocial = ['assets/collaborater/social_01.png', 'assets/collaborater/social_02.png', 'assets/collaborater/social_03.png'];
    $hoverImgSocial = ['assets/collaborater/social_01_hover.png', 'assets/collaborater/social_02_hover.png', 'assets/collaborater/social_03_hover.png'];
    $textImgSocial = ['Atelier «Les Maisons» réalisé en partenariat avec le CPAS de Saint-Ghislain et avec l’intervention d’Isabelle Baldacchino dans le cadre de la thématique «Mémoire au Pluriel.» 2015-2017', 'Atelier «Bonheurs Partagés» réalisé en partenariat avec l’article 27 et les CPAS de Colfontaine et Hensies 2019', 'Atelier «Bic Bleu» réalisé en partenariat avec l’article 27 et les CPAS de Colfontaine et Hensies 2020'];
    ?>
    <x-collaborater-article titleArticle="Les partenaires sociaux" textArticle="Favoriser l’épanouissement culturel et social de chacun.
                    L’atelier vise un niveau artistique de qualité, qui dépasse le stade du loisir
                    créatif. Nous tentons de mettre en mouvement l’estime de soi, la valorisation,
                    le respect de l’autre et de son environnement, l’ouverture d’esprit, l’ouverture
                    au monde, dans une ambiance conviviale." :srcImg="$srcImgSocial" :hoverImg="$hoverImgSocial" :textImg="$textImgSocial" />

    <?php
    $srcImgInstitution = ['assets/collaborater/institution_01.png', 'assets/collaborater/institution_02.png', 'assets/collaborater/institution_03.png'];
    $hoverImgInstitution = ['assets/collaborater/institution_01_hover.png', 'assets/collaborater/institution_02_hover.png', 'assets/collaborater/institution_03_hover.png'];
    $textImgInstitution = ['Atelier «L’Art de Récupérer» réalisé en partenariat avec la Maison Folie de Mons 2017', 'Atelier «Les Corbeaux» réalisé dans le cadre de l’installation du Sentier de l’Étrange. Réalisé en partenariat avec le Centre Culturel de Colfontaine 2021', 'Intervention artistique «Table de rue» dans le cadre du Grand Huit organisé par la Fondation «Mons 2025» 2017-2018'];
    ?>
    <x-collaborater-article titleArticle="Les institutions culturelles" textArticle="Spécialisés dans les arts plastiques et l’Espace Urbain participatif, nos compétences s’étendent sur divers domaines et ce depuis 1998. Blanc Murmure coordonne des ateliers, des expositions, des projets socio-artistiques et des éditions dans une perspective d’échange, de valorisation individuelle, collective et d’expression artistique.
                    Initiatrice d’un autre regard sur vos possibles, l’équipe vulgarise l’art contemporain par une immersion pratique et permet ainsi à un public sans prérequis une émancipation culturelle et citoyenne. Les projets participatifs sont au coeur de notre démarche dans laquelle sens et forme se rencontrent à travers des techniques pluridisciplinaires.
                    Forts de nos partenariats, nous avons acquis depuis 2009 une expérience en Espace Urbain participatif dans
                    la création de projets éphémères, pérennes, court et long terme, en fonction des réalités de terrain."
        :srcImg="$srcImgInstitution" :hoverImg="$hoverImgInstitution" :textImg="$textImgInstitution" />

    {{-- 
    
    <x-collaborater-article title="Les institutions culturelles" text="Spécialisés dans les arts plastiques et l’Espace Urbain participatif, nos compétences s’étendent sur divers domaines et ce depuis 1998. Blanc Murmure coordonne des ateliers, des expositions, des projets socio-artistiques et des éditions dans une perspective d’échange, de valorisation individuelle, collective et d’expression artistique.
            Initiatrice d’un autre regard sur vos possibles, l’équipe vulgarise l’art contemporain par une immersion pratique et permet ainsi à un public sans prérequis une émancipation culturelle et citoyenne. Les projets participatifs sont au coeur de notre démarche dans laquelle sens et forme se rencontrent à travers des techniques pluridisciplinaires.
            Forts de nos partenariats, nous avons acquis depuis 2009 une expérience en Espace Urbain participatif dans
            la création de projets éphémères, pérennes, court et long terme, en fonction des réalités de terrain." /> --}}
@endsection
