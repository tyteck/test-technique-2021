@extends('layouts.app')

@section('pageTitle', "Group-Actual")

@section('content')

<div class="container text-gray-100 mx-auto p-8">

<h1>EXERCICE TECHNIQUE ACTUAL</h1>
​
<p>L'exercice devra être livré via un repository github privé.</p>
<p>Les travaux devront pouvoir être testable sans aucune modification à apporter au code, ni paramètrage et si besoin en suivant pas pas une documentation.</p>
<p>Nous vous demandons d'utiliser Laravel dans sa dernière version stable, de même que tous les outils dont vous aurez besoin.</p>
​
<p>
Exercices à réaliser :
<ul>
  <li>ACT-TT1 :* Réaliser une page web qui <a href="{{ route('chess') }}" class="underline">affichera un échiquier</a>. </li>
  <li>
    ACT-TT2 :* Réaliser une commande qui prend en argument un chiffre n et retourne un tableau contenant une suite de Fibonacci de la longueur n. ***Tips** : Ne vous limittez pas à un copié / collé !
    <ul class="list-disc pl-8">
      <li><pre>docker exec -it group-actual php artisan fibonacci &lt;number&gt; </pre></li>
    </ul>
  </li>
  <li>ACT-TT3 :* Réaliser une modélisation d'un candidat, d'une annonce et d'une candidature en utilisant l'orm Eloquent et créer un service qui <a href="{{ route('annonces.index') }}" class="underline">liste toutes les candidatures par annonce</a>.</li>
  <li>ACT-TT4 :* Réaliser une suite de test unitaire pour les 3 premiers exercices.</li>
</ul>


</div>




@endsection