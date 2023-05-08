@extends('page')

@section('content')

    <div class='center-container' style='height: auto'>
        <h1>{{ $travel->name_japanese }}</h1>
        <h2 class='center-container-subtitle'>({{ $travel->name }})</h2>
        <div class='big-travel-image-container'>
            <img src='{{ $travel->page_image_url }}' class='big-travel-image' alt='Travel image'>
        </div>
        <div class='travel-details-and-map'>
            <div class='travel-details'>
                <p>Маршрут: {{ $travel->getCitiesString() }}</p>
                <p><b>Тривалість: </b>{{ $travel->getDatesIntervalDays() }} днів / {{ $travel->getDatesIntervalDays() - 1 }} ночей</p>
                {!! $travel->description !!}
                <div class='travel-info travel-info-black'>
                    <img src='{{ asset('/images/home.svg') }}' alt='Home'>
                    <span>10 днів</span>
                    <img src='{{ asset('/images/calendar.svg') }}' alt='Calendar'>
                    <span>28 березня - 7 квітня</span>
                </div>
                <h3>{{ $travel->price }} грн</h3>
                <a href='/order?id={{ $travel->id }}' class='order-button-light'><span>Замовити</span></a>
            </div>
            <div class='travel-map'>
                <img src='{{ asset('images/sakura-route.png') }}' alt="Travel image">
            </div>
        </div>
    </div>

@endsection
