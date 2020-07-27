@extends('layouts.app')

<style>
   .home-bg
   {
       display: block;
       margin-left: auto;
       margin-right: auto;
       padding: 20px;
       width: 50%;
       height: 50%;
   }
   .brand
   {
       font-family: 'Lobster', cursive;

   }
</style>
@section('title', 'Lifestyle')

@section('font')
 <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
@endsection

{{-- @section('nav')
                       <li class="nav-item">
                         <a class="nav-link" href="/world_article">World</a></li>
                         <li class="nav-item">
                         <a class="nav-link" href="/world_article">Sports</a></li>
                         <li class="nav-item">
                         <a class="nav-link" href="/world_article">Opinion</a></li>
                         <li class="nav-item">
                         <a  class="nav-link" href="/world_article">Lifestyle</a></li>
                         <li class="nav-item">
                         <a class="nav-link" href="/world_article">Business</a></li>
                         <li class="nav-item">
                           <a class="nav-link" href="#">Culture</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">Fashion</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="#">Tech</a>
                         </li>
@endsection  --}}

@section('brand_name')
<span class="brand">Stay Updated</span>
@endsection

@section('home_img')
    <img src="image/home_img.svg" class="img-fluid home-bg">
@endsection

@section('footer')
    @include('includes.footer')
@endsection
