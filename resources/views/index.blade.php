@extends('page')

@section('content')

    <div class="center-container">
        <h1>日本へようこそ</h1>
        <h2 class="center-container-subtitle">(Ласкаво просимо до Японії)</h2>
        <a href="/travels" class="order-button-dark order-button-desktop"><span>Замовити екскурсію</span></a>
    </div>
    <a href="/travels" class="order-button-dark order-button-mobile"><span>Замовити екскурсію</span></a>
    <img src="{{ asset('images/night-city.png') }}" alt="Night city" class="night-city-background">
    <div class="dark-screen-divider"></div>
    <div class="guide guide-desktop">
        <div id="guide-start" class="guide-container" onclick="guide_start_onclick()">
            <h1 class="guide-text">Путівник</h1>
            <h2 class="guide-text">(Клікніть мишкою щоб продовжити)</h2>
        </div>
        <div id="guide-first" class="guide-container appear-right-start" onclick="guide_first_onclick()">
            <h1 class="guide-text">Токіо</h1>
            <h2 class="guide-text">Столиця Японії</h2>
        </div>
        <div id="guide-second" class="guide-container appear-right-start">
            <h1 class="guide-text">377 972 км²</h1>
            <h2 class="guide-text">Площа Японії</h2>
        </div>
        <img src="{{ asset('images/park.png') }}" alt="Park" class="park-background">
    </div>
    <div class="guide guide-mobile">
        <div class="guide-horizontal-array">
            <div class="guide-container-mobile">
                <h1 class="guide-text">Путівник</h1>
                <h2 class="guide-text">Скрольте вправо</h2>
            </div>
            <div class="guide-container-mobile">
                <h1 class="guide-text">Токіо</h1>
                <h2 class="guide-text">Столиця Японії</h2>
            </div>
            <div class="guide-container-mobile">
                <h1 class="guide-text">377 972 км²</h1>
                <h2 class="guide-text">Площа Японії</h2>
            </div>
        </div>
        <img src="{{ asset('images/park.png') }}" alt="Park" class="park-background">
    </div>

@endsection
