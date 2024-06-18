@extends('layouts.app')

@section('content')
    <div class="menu_wrapper">
        <div class="menu__container">
            <div class="menu__image">
                <div class="menu__image__back">
                    <img src="{{ asset('style/uploads/win2.webp') }}" alt="">
                </div>
                <div class="menu__image__logo">
                    <img src="{{ asset('style/uploads/logo.jpg') }}" alt="">
                </div>
                <div class="menu__image__name">
                    Innvino
                </div>
                <div class="menu__burger">
                    
                </div>
            </div>

            <div class="menu__elements_container">
                <!----->
                <div class="menu__element__block">
                    <div class="menu__element__name">
                        Название категории
                    </div>

                    <div class="menu__sub-element">
                        <div class="sub-element__name">
                            Product name
                        </div>
                        <div class="sub-element__price">
                            20 / 30 AZN
                        </div>
                    </div>

                </div>
            </div>
            


        </div>
    </div>
@endsection
