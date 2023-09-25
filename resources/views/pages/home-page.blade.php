@extends('layout.app')
@section('content')
    @include('components.MenuBar')
    @include('components.HeroSlider')
    @include('components.TopCategories')
    @include('components.ExclusiveProducts')
    @include('components.TopBrands')
    @include('components.Footer')

    <script>
        (async ()=>{
            await Category();
            await HeroSlider();
            await TopCategory();
            //loader
            $(".preloader").delay(80).fadeOut(100).addClass('loaded');

            await Popular();
            await New();
            await Top();
            await Special();
            await Trending();
            await TopBrands();
        })()
    </script>
@endsection
