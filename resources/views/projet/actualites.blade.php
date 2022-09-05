@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container row feature px-lg-0">
        <p class="col-lg-3"></p>
        <div class="row g-5 mx-lg-0 col-lg-6">
            @if (Route::is('view_actualite1'))
                <div class="col-lg-12 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img src=" {{asset("assets/img/noel.jpg")}} " width="100%" height="100%" >
                    </div>
                </div>
                <div class="col-lg-12 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-5" style="margin-left: 1rem">Fête de Noël : Une Ong partage la magie de Noël avec les enfants d’Allakro (Cocody)</h2>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="ms-4 fs-4">
                            <p class="mb-0">Quartier précaire de la commune huppée de Cocody, Allakro a reçu la visite de l’Ong Le droit de vivre qui a mis la joie dans le cœur des enfants, le vendredi 17 décembre 2021.</p>
                            <p>Les parents du quartier Allakro ont pu avoir la joie dans le cœur à l’idée de voir leurs enfants être cadeautés par une Ong. En cette fin d’année, cet événement heureux vient amoindrir la pénibilité de la vie qu'ils mènent.

                                Un peu plus de 100 tout-petits ont manifesté la joie de recevoir un présent en ces temps de fête de fin d'année. En effet, les enfants du quartier précaire Allakro situé dans la commune de Cocody ont reçu des cadeaux. Ils ont par la même occasion reçu la magie de Noël.</p>
                                <p>Une réalité qu'il ne vivent pas toujours vu le manque de moyen de leurs parents. Et c'est Ong Le droit de vivre qui en est l'auteur. Selon son président Robert Assi Boni, cette action n'aurait pas eu lieu sans le consentement des mêmes parents de ces bambins</p>
                        </div>
                    </div>
                </div>
            @endif
            @if (Route::is('view_actualite2'))
                <div class="col-lg-12 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img src=" {{asset("assets/img/uvci.jpg")}} " width="100%" height="100%" >
                    </div>
                </div>
                <div class="col-lg-12 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-5" style="margin-left: 1rem">Humanité numérique : l’Université virtuelle de Côte d’Ivoire au service du quartier précaire d’Allakro</h2>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="ms-4 fs-4">
                            <p class="mb-0">Quartier précaire de la commune huppée de Cocody, Allakro a reçu la visite de l’Ong Le droit de vivre qui a mis la joie dans le cœur des enfants, le vendredi 17 décembre 2021.</p>
                            <p>
                                Mitoyen au siège de l’Université virtuelle de Côte d’Ivoire (UVCI), le quartier précaire d’Allakro servira de champ d’étude à la promotion de licence 2021-2022 de l’UVCI en vue de résoudre des problèmes d’inclusion communautaire par la diffusion de solutions numériques.

                                (Cio Mag) – Chefferie, associations de jeunes et de femmes… C’est avec une forte délégation que la communauté villageoise d’Allakro, quartier précaire de la commune résidentielle de Cocody située dans Abidjan nord, s’est présentée le jeudi 27 janvier 2022 au siège de l’UVCI pour participer à la cérémonie de lancement de la 3e promotion du Projet collectif tuteuré (PCT) visant, cette année, l’inclusion des structures de l’UVCI au sein de ladite communauté.

                                Fondé en 1974, Allakro abrite le siège de l’UVCI depuis 2017. Dans le cadre du projet voisinage faisant le pont entre l’UVCI et ses environs, diverses actions de portée sociale, telles que l’installation de panneaux miroir, sont menées par l’université en faveur des populations d’Allakro. Cette année est particulièrement innovante en ce sens que l’UVCI, qui veut améliorer son impact sociétal, va se servir de ce quartier comme champ d’étude de sa promotion de licence 2021-2022.

                                Les spécialités de l’UVCI au service d’Allakro

                                Base de données, développement d’applications et e-services, e-commerce et marketing digital, réseaux et sécurité informatique, communication digitale, multimédia et art numérique… Spécialité par spécialité, les 134 étudiants de cette promotion seront mobilisés entre janvier et juin 2022 pour résoudre des problèmes d’inclusion communautaire d’Allakro.

                                Dans l’attente des résultats, le PCT 2021-2022 évoque des initiatives qui pourraient faciliter le commerce en ligne, ouvrir les populations d’Allakro sur le monde extérieur, faciliter l’accès et l’usage des réseaux sociaux, et accélérer le processus de développement de la communauté.

                                A terme, les 2000 bénéficiaires du projet, dont un grand nombre exerce des activités professionnelles sur le site et hors du site, pourront vivre et travailler dans un environnement offrant plus de liberté, de visibilité et de revenu.

                                « Cette année, nous avons voulu pour cette promotion résoudre le problème de l’inclusion communautaire (…) Il s’agit pour nous de faire en sorte que le savoir que nous emmagasinons au niveau de nos universités puisse être utile », a expliqué le directeur général de l’UVCI, Prof. Koné Tiémoman, devant ses convives du jour. Figurait, le chef de cabinet du ministère de la Jeunesse, de l’insertion professionnelle et du service civique, Kouamé Fils David Vincent, parrain de cette promotion.

                                Humanité numérique

                                Troisième université publique en termes d’effectif avec 14.000 étudiants, l’Université virtuelle de Côte d’Ivoire pratique la techno-pédagogie. En plus de la formation et la recherche, elle promeut l’employabilité. Grâce à ses laboratoires de fabrique (FabLab) et ses incubateurs, elle apprend à ses étudiants à monter des projets d’entreprise. A ce jour, six sociétés à responsabilité limité ont été déjà créées par les étudiants de l’UVCI, la première en 2018 et la dernière en 2020.

                                Si la pandémie de Covid a jeté un éclairage sur les besoins des quartiers défavorisés, elle a surtout renforcé l’idée d’ajouter l’humanité numérique comme quatrième pilier de l’UVCI, après la formation, la recherche et l’employabilité.

                                L’humanité numérique, un concept novateur qui vise selon Prof. Koné Tiémoman à faire en sorte que la collaboration entre l’être humain et la machine soit à l’avantage de l’humain ; que le numérique soit beaucoup plus au service de l’être humain et non une contrainte.

                                C’est fort de ce concept d’humanité numérique que le premier Projet collectif tuteuré a été lancé au cours de l’année académique 2019-2020. Il a mobilisé 534 étudiants pour résoudre des problèmes au sein de l’entreprise Fortic Group. En 2020-2021, 478 étudiants ont été mis au service du ministère de l’Education nationale pour numériser et simplifier la gestion des permutations des enseignants. Cette année, il s’agira pour la promotion 3 de travailler sur l’inclusion communautaire des structures de l’UVCI. Des initiatives qui traduisent sans doute une extension de l’aire d’influence de cette université, en qualité de transformateur numérique des pratiques pédagogiques.


                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if (Route::is('view_actualite3'))
                <div class="col-lg-12 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img src=" {{asset("uploads/images/sante1.png")}} " width="100%" height="100%" >
                    </div>
                </div>
                <div class="col-lg-12 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-5" style="margin-left: 1rem">Bientôt un centre de santé pour le village d’Allakro</h2>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="ms-4 fs-4">
                            <p>
                                Aboisso- Le ministre de la Santé et de l’Hygiène publique, Eugène Aka Aouélé, a annoncé, dimanche, la construction d’un centre de santé à Allakro, lors d’une visite qu’il a effectuée dans ce village situé dans la sous-préfecture de Noé, département de Tiapoum.

                                "Allakro aura son centre de santé", a annoncé Dr Aka Aouélé en réponse à une doléance des populations du village.

                                Ce centre de santé sera construit par le Ministère de la Santé et de l’Hygiène publique, a fait savoir le ministre en charge de ce département.

                                Les 4000 âmes qui constituent la population du village d’Allakro sont obligées de se rendre à Noé ou dans les autres villages proches dotés de centres de santé pour se faire soigner, a fait savoir le porte-parole du village, Allah Akoli.

                                Le Aka Aouélé a annoncé, à cette occasion, un investissement de 800 milliards en trois ans pour la réhabilitation et la construction d’établissements sanitaires.

                                Les populations d’Allakro ont exprimé leur reconnaissance au ministre de la Santé et de l’Hygiène publique, Eugène Aka Aouélé, pour les actes de développement qu’il a posés dans la région notamment la construction infrastructures sanitaires et scolaires.


                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <p class="col-lg-3"></p>
</div>
@endsection
