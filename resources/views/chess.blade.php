@extends('layouts.app')

@section('pageTitle', "Group-Actual")

@section('content')

<div class="container mx-auto py-4">
    <a href="{{ route('welcome') }}" class="text-gray-100">retour à la case départ</a>
    <div class="grid grid-cols-8 grid-flow-row gap-0">
    @for ($row = 0; $row < 8; $row++)
        @for ($col = 0; $col < 8; $col++)
            @if ($row%2===0)
            <div id="cell-{{$row.$col}}" class="@if($col%2 === 0) bg-gray-100 @else bg-gray-700 text-gray-100 @endif h-10 sm:h-14 md:h-32 text-center">
            @else
            <div id="cell-{{$row.$col}}" class="@if($col%2 === 0) bg-gray-700 text-gray-100 @else bg-gray-100 @endif h-10 sm:h-14 md:h-32 text-center">
            @endif
                &nbsp;
            </div>
        @endfor
    @endfor
    </div>

</div>




@endsection