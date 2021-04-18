@extends('layouts.app')

@section('pageTitle', "Group-Actual")

@section('content')

<div class="container mx-auto p-4">
    <a href="{{ route('welcome') }}" class="text-gray-100">retour à la case départ</a>
    <div class="bg-gray-100 rounded-lg">
    @foreach ($annonces as $annonce)
        <div class="p-4">
            <h3 class="text-xl bg-gray-200 text-center rounded-t">{{$annonce->title}}</h3>
            <p>{{$annonce->description}}</p>
            @if ($annonce->candidats->count())
                <p> 
                    A postulé : 
                    <ul class="list-disc pl-8">
                    @foreach ($annonce->candidats as $candidat)
                        <li class="">{{ $candidat->firstname }} {{ $candidat->lastname }}</li>
                    @endforeach
                    </ul>
                </p>
            @else
                <p class="text-center"><strong>Aucun postulant</strong></p>
            @endif
        </div>
    @endforeach
    </div>

</div>




@endsection