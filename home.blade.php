@extends('layouts.app')

@section('title', 'Retnews – Best news, blog & magazine template')

@section('content')

@include('partials.header')

<!-- loading -->
<div class="loading-container">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <ul class="list-unstyled">
            <li>
                <img src="{{ asset('images/placeholder/loading.png') }}" alt="Loading" height="100" />
            </li>
            <li>
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </li>
            <li><p>Loading</p></li>
        </ul>
    </div>
</div>
<!-- End loading -->

<!-- Home page demo -->
<section class="first">
    <div class="bg-overlay"></div>
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col mx-auto">
                <div class="wrap-text text-center">
                    <figure>
                        <img src="{{ asset('images/placeholder/logo.jpg') }}" alt="">
                    </figure>
                    <h1><span class="text-primary">14+</span> news, blog & magazine template</h1>
                    <p>Retnews is a premium HTML Bootstrap 4 template, perfect for news, magazines, blogs, etc.</p>
                    <br>
                    <a href="#demo" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i> PURCHASE NOW
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Demo title -->
<section class="wrap__section">
    <div class="title-demo">
        <div class="container">
            <div class="row justify-content-center align-items-center">
