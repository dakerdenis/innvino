@extends('layouts.admin-app')

@section('content')


    <div class="admin__panel__wrapper">
        <div class="admin__panel__navigation">
            <div class="panel__navigation__logo">
                <img src="{{asset('style/uploads/logo.jpg')}}" alt="">
            </div>
            <div class="panel__navigation__name">
                Innvino 
            </div>
            <div class="panel__navigation__elements">
                <a href="#">Меню</a>
                <a href="#">Винная карта</a>
            </div>
            <div class="panel__navigation__logout">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>

        <div class="admin__panel__content">
            <div class="panel__content__wrapper">

            </div>
        </div>
    </div>




    

@endsection
