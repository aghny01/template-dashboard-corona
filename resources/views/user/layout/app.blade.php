@extends('user.layout.skeleton')

@section('app')

    @include('user.layout.components.preloader')

    @include('user.layout.components.header')
        
    <main id="main">
        @yield('content')
    </main>
    
    @include('user.layout.components.footer')
    
@endsection

