@extends('layout')

@section('nav-content')
    <li><a href="#home-section" class="nav-link">Главная</a></li>
    <li><a href="#services-section" class="nav-link">Новости</a></li>
    <li class="has-children">
        <a href="#about-section" class="nav-link">Руководство</a>
        <ul class="dropdown arrow-top">
            <li><a href="#managerTeam-section" class="nav-link">Руководящий состав</a></li>
            <li><a href="#coaches-section" class="nav-link">Тренерско-инструкторский</a></li>
            <li class="has-children">
                <a href="#">More Links</a>
                <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li><a href="#groups-section" class="nav-link">Школы и клубы</a></li>
    <li><a href="#teachers-section" class="nav-link">Наши учителя</a></li>

    <li><a href="#faq-section" alt="часто задаваемые вопросы" class="nav-link">FAQ</a></li>
    <li><a href="#contact-section" class="nav-link">Контакты</a></li>
    <li><a href="#about-section" target="_blank" class="nav-link">О нас</a></li>
@endsection

{{--@section('main-content')--}}
{{--    @foreach( $currentNews as $news)--}}
{{--    {{$news->name}}--}}
{{--    @endforeach--}}
{{--@endsection--}}
