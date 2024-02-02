<header>
    <div class="container">
        <div class="header-content">
            <div class="logo"></div>
            <ul class="nav">
                <li><a class="link" href=""></a></li>
                <li><a class="link" href=""></a></li>
                <li><a class="link" href=""></a></li>
                <li><a class="link" href=""></a></li>
            </ul>
            <div class="flex">
                @guest
                    <a href="" class="button">Вход</a>
                    <a href="" class="button">Регистрация</a>
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
