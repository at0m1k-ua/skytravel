@extends('page')

@section('content')

    <div class="center-container" style="height: 50vh;">
        <h1>チケットを選ぶ</h1>
        <h2 class="center-container-subtitle">(Вибрати квиток на екскурсію)</h2>
    </div>
    <div class="travels-horizontal-array">

        @foreach($travels as $travel)
            <x-travel-card :travel="$travel" />
        @endforeach

    </div>

@endsection
