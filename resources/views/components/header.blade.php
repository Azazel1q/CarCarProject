<header>
    <div class="container">
        <div class="header-content">
            <div class="logo">CarCar.ru</div>
            <ul class="nav">
                <li><a class="link" href="">Главная</a></li>
                <li><a class="link" href="">Каталог</a></li>
                <li><a class="link" href=""></a></li>
                <li><a class="link" href=""></a></li>
            </ul>
            <div class="flex">
                @guest
                    <a href="{{route('login')}}" class="button">Вход</a>
                    <a href="{{route('register')}}" class="button">Регистрация</a>
                @endguest
                @auth
                    <a href="" class="button">Личный кабинет</a>
                    <form action="">
                        @csrf
                        <input type="submit" class="button" value="Выход">
                    </form>
                @endauth
            </div>
        </div>
    </div>
</header>
