<div class="admin__panel__navigation">
    <div class="panel__navigation__logo">
        <img src="{{ asset('style/uploads/logo.jpg') }}" alt="">
    </div>
    <div class="panel__navigation__name">
        Innvino
    </div>
    <div class="panel__navigation__line"></div>
    <div class="panel__navigation__elements">

        <a href="{{route('admin.main',['content'=>'main'])}}">Главная</a>
        <a href="{{route('admin.main',['content'=>'menu'])}}">Меню</a>
        <a href="{{route('admin.main',['content'=>'wine_map'])}}">Винная карта</a>
        <br>
        <a href="#">Просмотр сайта</a>
        <a href="#">Просмотр Меню</a>
    </div>
    <div class="panel__navigation__logout">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>