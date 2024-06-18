@extends('layouts.admin-app')

@section('content')
    <div class="admin__wrapper">
        <div class="admin__login-form">
            <div class="admin__login__wrapper">
                <div class="login__hello">
                    Xoş gəldiniz!
                </div>
                <div class="login__desc">
                    Innvino İdarəetmə panelı
                </div>

                <form method="POST" action="{{ route('admin.login') }}" class="login__form">
                    @csrf
                    <div class="input__container">
                        <div class="input__container__desc">
                            Login
                        </div>

                        <div class="input__field">
                            <input type="text" id="email" name="email" placeholder="Login |" required>
                        </div>
                    </div>

                    <div class="input__container">
                        <div class="input__container__desc">
                            Şifrə
                        </div>

                        <div class="input__field">
                            <input type="password" id="password" name="password" placeholder="Şifrə |" required>
                        </div>
                    </div>

                    <div class="input__button">
                        <button type="submit">Daxil ol</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="admin__bakcground">
            <img src="{{asset('style/uploads/win2.webp')}}" alt="">
        </div>

        <div class="admin__absolute-image">
            <img src="{{asset('style/uploads/logo.jpg')}}" alt="">
        </div>
    </div>
@endsection
