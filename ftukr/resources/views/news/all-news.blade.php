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
@section('main-content')
<div class="container">

    <div class="row">
        @foreach($news as $new)
            <div class="col-sm-4" style="background-color:lavenderblush;">

                <div class="img-block">
                    <img alt="image name" class="img-fluid rounded" style="height: 150px;width: 230px;" src="{{ url(  '/images/newsImage/'.$new->file_path) }} " />
                </div>
                <h2 class="text-black">{{$new->name}}</h2>
                <p class="justify-content-xxl-center">{{$new->description}}</p>
                <p class="text-center">
                    <a href="{{url('news/'.$new->id)}}" class="btn btn-primary btn-md text-white">Подробнее</a>
                </p>
            </div>
                @endforeach


    </div>
</div>
</div>
@endsection
<style>
     p {
        -webkit-line-clamp: 1; /* Число отображаемых строк */
        display: -webkit-box; /* Включаем флексбоксы */
        -webkit-box-orient: vertical; /* Вертикальная ориентация */
        overflow: hidden; /* Обрезаем всё за пределами блока */

         max-width: 93%;
    }

</style>
