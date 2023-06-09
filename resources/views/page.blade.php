<!DOCTYPE html>
<html lang="uk">
<head>
    <title>SkyTravel</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" type="application/javascript"></script>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
</head>
<body>
<header class="animated-header">
    <a href="/"><img src="{{ asset('images/logo.svg') }}" alt="Logo" class="logo"></a>
    <a href="javascript:open_menu()" style="text-decoration: none;"><span class="underlined">Меню</span></a>
</header>

@yield('content')

<div class="menu" id="menu">
    <div class="top-menu-row">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="logo">
        <a href="javascript:close_menu()"><img src="{{ asset('images/exit.svg') }}" alt="exit"></a>
    </div>
    <div class="middle-menu-row">
        <a href="/travels"><h2>Екскурсії Японією</h2></a>
        <a href="/"><h2>Путівник</h2></a>
        <a href="javascript:open_footer()"><h2>Зворотній зв'язок</h2></a>
    </div>
    <div class="bottom-menu-row">
        <h2>support@skytravel.tweb.com</h2>
        <p>(Якщо у вас виникають питання, пишіть на пошту)</p>
    </div>
</div>
<footer class="footer-desktop">
    <div class="footer-row" style="margin-top: 240px;">
        <div>
            <img src="{{ asset('images/logo.svg') }}" alt="Logo">
        </div>
        <div class="footer-column">
            <h2 style="font-size: 50px;">Ласкаво<br>просимо<br>до Японії</h2>
        </div>
        <div class="footer-column footer-email">
            <h2 style="margin-bottom: 48pt; font-size: 50px;">+380 95 57 14 263</h2>
            <a style="text-decoration: none;"><span style="font-size: 20pt; text-decoration: underline">support@skytravel.tweb.com</span></a>
            <p>(Якщо у вас виникнуть питання, пишіть на пошту)</p>
        </div>
    </div>
    <div class="footer-row" style="margin-bottom: 88px;" id="footer">
        <div>
            <h2 style="font-size: 60px">Задавайте питання</h2>
        </div>
        <div>
            <h3 style="color: #A7A7A7;">© SKY travel 2023</h3>
        </div>
    </div>
</footer>
<footer class="footer-mobile">
    <img src="{{ asset('images/logo.svg') }}" alt="Logo" style="width: 120px;">
    <h2 style="font-size: 25px">Ласкаво просимо до Японії</h2>
    <h2 style="font-size: 25px; text-decoration: underline;">+ 380 95 57 14 263</h2>
    <h2 style="font-size: 20px; text-decoration: underline;">support@skytravel.tweb.com</h2>
</footer>
</body>
</html>
