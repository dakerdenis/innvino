@extends('layouts.admin-app')

@section('content')
    <div class="admin__panel__wrapper">
        @include('admin-components.header')

        <div class="admin__panel__content">
            <div class="panel__content__wrapper">
                @if (isset($content))
                    @include('admin-components.' . $content)
                @else
                    @include('admin-components.main') <!-- Default content -->
                @endif
            </div>
        </div>
    </div>
@endsection
