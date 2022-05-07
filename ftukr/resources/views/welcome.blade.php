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
    <div class="owl-carousel slide-one-item">
        <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/6.png'); " >
            <div class="container">
                {{--                <div class="row align-items-center justify-content-center text-center">--}}
                {{--                    <div class="col-md-12 col-lg-7">--}}
                {{--                        <h1 data-aos="fade-up" data-aos-delay="">Федерация традиционного ушу КР</h1>--}}
                {{--                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, cumque vitae animi.</p>--}}
                {{--                        <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-outline-white border-w-2 btn-md">Get in touch</a></p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>

        </div>

        <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/13.png');" >
            <div class="container">

            </div>
        </div>
        <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/21.png');" >
            <div class="container" >

            </div>
        </div>

    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <div class="block-heading-1">
                    <h2> Ушу это</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
                    <div class="block__35630">
                        <div class="icon mb-3">
                            <img src="images/Icons/wushu1.png">
                        </div>
                        <h3 class="mb-3">Ловкость</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="block__35630">
                        <div class="icon mb-3">
                            <img src="images/Icons/wushu3.png">
                        </div>
                        <h3 class="mb-3">Сила</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="block__35630">
                        <div class="icon mb-3">
                            <img src="images/Icons/wushu10.png">
                        </div>
                        <h3 class="mb-3">Гибкость</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
                    <div class="block__35630">
                        <div class="icon mb-3">
                            <img src="images/Icons/wushu4.png">
                        </div>
                        <h3 class="mb-3">Духовность</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="block__35630">
                        <div class="icon mb-3">
                            <img src="images/Icons/wushu.png">
                        </div>
                        <h3 class="mb-3">Здоровье</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="block__35630">
                        <div class="icon mb-3">
                            <img src="images/Icons/wushu7.png">
                        </div>
                        <h3 class="mb-3">Гармония</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="block__73694 mb-2" id="services-section">
            <div class="text-center mb-5">
                <div class="block-heading-1">
                    <h2>Последние новости</h2>
                </div>
            </div>
            <a href="#">
                <div class="container news">

                    <div class="row d-flex no-gutters align-items-stretch">
                        <img alt="image name" class="news-image" src="{{ url(  '/images/newsImage/'.$news[0]->file_path) }} " style="height: 300px;" />
                        <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
                            <h2 id="current-news" class="mb-3 text-black">
                                {{ $news[0]->name}}
                            </h2>
                            <div class="text-black"><i>от:</i> {{$news[0]->created_at}}</div>
                            <p>
                                {{ $news[0]->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        </p>


        <div class="block__73694">
            <div class="container news" >
                <a href="#">
                    <div class="row d-flex no-gutters align-items-stretch">
                        <img alt="image name" class="col-12 col-lg-6 block__73422 order-lg-2 news-image"   data-aos="fade-left" src="{{ url(  '/images/newsImage/'.$news[1]->file_path) }}" style="height: 300px;" />
                        <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
                            <h2 class="mb-3 text-black">{{$news[1]->name}}</h2>
                            <div class="text-black"><i>от:</i> {{$news[0]->created_at}}</div>
                            <p>
                                {{ $news[1]->description }}
                            </p>
                        </div>
                    </div>
            </div>
            </a>
            <p class="text-lg-right ">
                <a href="{{ URL::to('all-news') }}" class="btn btn-primary btn-md text-white all-news">Еще</a>
            </p>
        </div>
    </div>
    </div>

    <div class="site-section" id="groups-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <span>Действующие</span>
                        <h2>Группы ФТУКР</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto" data-aos="fade-up" data-aos-delay="">
                        <div class="mb-4 d-block"><img src="images/Groups/adult.jpg"  alt="Image" class="img-fluid rounded"></div>
                        <h2 class="groups-h">Взрослые</h2>
                        <p class="mb-4 d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                        {{--                    <p class="see-more"><a href="single.html">Подробнее</a></p>--}}
                        <p class="text-center">
                            <a href="#" class="btn btn-primary btn-md text-white">Подробнее</a>
                        </p>
                    </div>
                    <div class="col-md-auto" data-aos="fade-up" data-aos-delay="">
                        <div class="mb-4 d-block"><img src="images/Groups/juniors.jpg"  alt="Image" class="img-fluid rounded"></div>
                        <h2 class="groups-h">Юношеские</h2>
                        <p class="mb-4 d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                        {{--                    <p class="see-more"><a href="single.html">Подробнее</a></p>--}}
                        <p class="text-center">
                            <a href="#" class="btn btn-primary btn-md text-white">Подробнее</a>
                        </p>
                    </div>
                    <div class="col-md-auto" data-aos="fade-up" data-aos-delay="">
                        <div class="mb-4 d-block"><img src="images/Groups/childs.jpg"  alt="Image" class="img-fluid rounded"></div>
                        <h2 class="groups-h">Детские</h2>
                        <p class="mb-4 d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                        {{--                    <p class="see-more"><a href="single.html">Подробнее</a></p>--}}
                        <p class="text-center">
                            <a href="#" class="btn btn-primary btn-md text-white">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-light block-13" id="managerTeam-section" data-aos="fade">
        <div class="container">

            <div class="text-center mb-5">
                <div class="block-heading-1">
                    <h2> Руководство федерации</h2>
                </div>
            </div>

            <div class="owl-carousel nonloop-block-13">

                @foreach( $managers as $manager)
                    <div>
                        <div class="text-center">
                            <figure class="manager-image-block">
                                <img src="{{ url('Avatars/'.$manager['image_path']) }}" alt="Image" class="img-fluid rounded-circle mx-auto">
                            </figure>
                            <blockquote class="mb-4 text-black">
                                <p class="h3 text-center">{{$manager->name}}</p>
                                <p class="h6 text-center">
                                    @foreach($manager->positions as $item)
                                        {{$item['name']}}
                                    @endforeach
                                </p>
                            </blockquote>

                            <div class="block-social-1">
                                <p></p>
                                <p></p>
                                <p class="text-center">
                                    <a href="#" class="btn btn-primary btn-md text-white">Просмотреть</a>
                                </p>
                                {{--                            <a href="#" class="btn border-w-2 ">Подробнее</a>--}}
                            </div>

                            {{--                        <div class="block-social-1">--}}
                            {{--                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>--}}
                            {{--                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>--}}
                            {{--                            <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>--}}
                            {{--                        </div>--}}

                        </div>
                    </div>

                @endforeach
            </div>

        </div>
    </div>







    <div class="site-section" id="teachers-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                        <h2>Наши учителя</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere at delectus laudantium, deserunt, atque eveniet. Voluptatem, fuga quos rerum inventore.</p>
                    </div>
                </div>
            </div>

            <div class="row" style="height: auto">
                @foreach($teachers as $teacher)

                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                        <div class="block-team-member-1 text-center rounded">
                            <figure class="teachers-block-image">
                                <a href="#"> <img  src=" {{ url('Avatars/chineseTeachers/'.$teacher['image_path']) }}" style="width: 400px; margin-bottom: 40px;" class="img-fluid rounded-circle"></a>
                            </figure>
                            <div class="name-manager">
                                <h3 class="font-size-20 text-black text-center">{{$teacher['name']}}</h3>
                            </div>
                            <p style="text-indent: 30px;"> {{$teacher['annotation']}}</p>
                            <p style="text-indent: 30px;">{{$teacher['description']}}<a href="#">&nbsp&nbspДалее...</a>

                            </p>

                        </div>
                    </div>
                @endforeach

                <section class="site-section bg-light" id="coaches-section">
                    <div class="container">
                        <div class="row mb-5 justify-content-center text-center">
                            <div class="col-md-7">
                                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                                    <h2>Тренерско-инструкторский состав и члены президиума</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quae temporibus tenetur vitae iusto suscipit alias, laudantium, porro unde tempora.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto" data-aos="fade-up" data-aos-delay="">
                                    <div class="mb-4 d-block"><img src="images/Coaches/Coach.jpg"  alt="Image" class="img-fluid rounded"></div>
                                    <h2 class="groups-h">Тренерский состав</h2>
                                    <p class="mb-4 d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                                    <p class="text-center">
                                        <a href="#" class="btn btn-primary btn-md text-white">Просмотреть</a>
                                    </p>                                    </div>
                                <div class="col-md-auto" data-aos="fade-up" data-aos-delay="">
                                    <div class="mb-4 d-block"><img src="images/Coaches/Instructor.jpg"  alt="Image" class="img-fluid rounded"></div>
                                    <h2 class="groups-h">Инструкторский состав</h2>
                                    <p class="mb-4 d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                                    <p class="text-center">
                                        <a href="#" class="btn btn-primary btn-md text-white">Просмотреть</a>
                                    </p>                                    </div>
                                <div class="col-md-auto" data-aos="fade-up" data-aos-delay="">
                                    <div class="mb-4 d-block"><img src="images/Groups/childs.jpg"  alt="Image" class="img-fluid rounded"></div>
                                    <h2 class="groups-h">Члены президиума</h2>
                                    <p class="mb-4 d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
                                    <p class="text-center">
                                        <a href="#" class="btn btn-primary btn-md text-white">Просмотреть</a>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="row site-section" id="faq-section">
                            <div class="col-12 text-center" data-aos="fade">
                                <h2 class="section-title text-primary">Часто задаваемые вопросы</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="text-black">С какого возрасте можно заниматься ушу?</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                                </div>

                                <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="text-black">Ушу и кунг-фу это одно и то же?</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                                </div>

                                <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="text-black">Можно ли заниматься ушу при травмах колен и спины?</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                                </div>

                                <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="text-black">Практикуем ли мы Тайцзинюань?</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="text-black"><br>Ушу могут заниматься только мальчики?</h3>
                                    <p>Voluptatum nobis obcaecati perferendis dolor totam unde dolores quod maxime corporis officia et. Distinctio assumenda minima maiores.</p>
                                </div>

                                <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="text-black"><br>Может ли ушу быть эффективным в бою?</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                                </div>

                                <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="text-black"><br>Чем полезны занятия ушу, что развивают?</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                                </div>

                                <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="text-black"><br>Ушу поможет мне стать сильным и выносливым?</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis perferendis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="site-section" id="about-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
                                    <h2>О нас</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li class="mb-5" data-aos="fade-right" data-aos-delay="">
                                        <span class="d-block text-muted mb-3">Apr 19, 2019</span>
                                        <h2 class="h4"><a href="press-single.html" class="text-black">Достижения федерации</a></h2>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
                                    </li>
                                    <li class="mb-5" data-aos="fade-right" data-aos-delay="100">
                                        <span class="d-block text-muted mb-3">Apr 19, 2019</span>
                                        <h2 class="h4"><a href="press-single.html" class="text-black">СМИ о федерации</a></h2>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
                                    </li>
                                    <li class="mb-5" data-aos="fade-right" data-aos-delay="200">
                                        <span class="d-block text-muted mb-3">Apr 19, 2019</span>
                                        <h2 class="h4"><a href="press-single.html" class="text-black">Соревнования и массовые мероприятия</a></h2>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>




                {{--                <div class="col-sm-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">--}}
                {{--                    <div>--}}
                {{--                        <a href="single.html" class="mb-4 d-block"><img src="images/Groups/adult.jpg" style="height: 200px;" alt="Image" class="img-fluid rounded"></a>--}}
                {{--                        <h2><a href="single.html">Взрослые</a></h2>--}}
                {{--                        <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span> By <a href="single.html" class="by">James Cooper</a></p>--}}
                {{--                        <p class="clubs-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>--}}
                {{--                        <p><a href="single.html">Read More</a></p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">--}}
                {{--                    <div>--}}
                {{--                        <a href="single.html" class="mb-4 d-block"><img src="images/Groups/juniors.jpg" style="height: 200px;" alt="Image" class="img-fluid rounded"></a>--}}
                {{--                        <h2><a href="single.html">Юношеские</a></h2>--}}
                {{--                        <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span> By <a href="single.html" class="by">James Cooper</a></p>--}}
                {{--                        <p class="clubs-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>--}}
                {{--                        <p><a href="single.html">Read More</a></p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">--}}
                {{--                    <div>--}}
                {{--                        <a href="single.html" class="mb-4 d-block"><img src="images/wushu-2.jpg" style="height: 200px;" alt="Image" class="img-fluid rounded"></a>--}}
                {{--                        <h2><a href="single.html">Детские</a></h2>--}}
                {{--                        <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span> By <a href="single.html" class="by">James Cooper</a></p>--}}
                {{--                        <p class="clubs-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</>--}}
                {{--                        <p><a href="single.html">Read More</a></p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--            </div>--}}
                {{--        </div>--}}
                {{--    </div>--}}


                <div class="site-section bg-light" id="contact-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                                <div class="block-heading-1">
                                    <span>Get In Touch</span>
                                    <h2>Contact Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                                <form action="#" method="post">
                                    <div class="form-group row">
                                        <div class="col-md-6 mb-4 mb-lg-0">
                                            <input type="text" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="First name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" placeholder="Email address">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 ml-auto">
                                            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                                <h2 class="text-black">Need to know more on details. Get In Touch</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, distinctio! Harum quibusdam nisi, illum nulla aspernatur aut quidem aperiam, quae non tempora recusandae voluptatibus fugit impedit.</p>
                                <p><a href="#" class="btn btn-primary text-white">Get Started</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
