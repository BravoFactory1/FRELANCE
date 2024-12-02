@extends('website.bmp.layouts.app')
@section('content')
    <style>
        .slider-half {
            height: 60vh;
            /* ارتفاع الشريط 60% من الشاشة */
            max-height: 60vh;
            overflow: hidden;
            /* للتأكد من عدم ظهور عناصر زائدة */
        }

        .slider-half img {
            object-fit: cover;
            /* لضبط الصور داخل الإطار */
            height: 100%;
            /* جعل الصور تغطي ارتفاع الشريط */
        }

        .carousel-caption {
            left: 5%;
            /* إزاحة النص لليسار */
            top: 40%;
            /* تمركز النص عموديًا في منتصف الشريط */
            transform: translateY(-50%);
            /* لتوسيط النص عموديًا بشكل دقيق */
            text-align: left;
            /* محاذاة النص لليسار */
        }

        .carousel-caption h1 {
            width: 50%;
            margin-top: 30px;
            margin-left: 30px;
            margin-bottom: 10px;
            color: white;
        }


        .carousel-caption p {
            color: white;
            width: 50%;
            margin-top: 30px;
            margin-left: 30px;
            margin-bottom: 10px;
        }

        .carousel-caption a {
            text-decoration: none;
            margin: auto 26px;
            /* إزالة خط الروابط */
        }

        /* إخفاء أزرار التنقل (الأسهم) */
        .carousel-control-prev,
        .carousel-control-next {
            display: none;
            /* إخفاء الأزرار */
        }

        /* تصميم شريط المؤشرات */
        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            /* تثبيت المؤشرات في الأسفل */
            left: 50%;
            transform: translateX(-50%);
            z-index: 15;
            display: flex;
            justify-content: center;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        /* تصميم النقاط */
        .carousel-indicators button {
            width: 8px;
            /* العرض الافتراضي للنقطة */
            height: 8px;
            /* الارتفاع الافتراضي للنقطة */
            margin: 0 5px;
            background-color: #ccc;
            /* لون النقاط الافتراضية */
            border: none;
            border-radius: 50%;
            /* جعل النقاط دائرية */
            transition: all 0.3s ease;
            /* تأثير الانتقال عند التغيير */
        }

        /* النقطة النشطة */
        .carousel-indicators .active {
            width: 12px;
            height: 12px;
            background-color: #dc3545;
            width: 15px;
        }

        /*  section tow Home */
        .who-are-we {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px 20px;
            background-color: #f9f9f9;
        }

        .who-are-we .text-section h1 {
            font-weight: bold;
            color: #000;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .who-are-we .text-section p {
            line-height: 1.8;
            color: #555;
        }

        .who-are-we .text-section a {
            text-decoration: none;
            color: #dc3545;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
        }

        .who-are-we .text-section a:hover {
            text-decoration: underline;
        }

        .who-are-we .image-section {
            display: flex;
            gap: 15px;
            justify-content: space-evenly
        }

        .who-are-we .image-section img {
            width: 207px;
            height: 307px;
            object-fit: cover;
            border-radius: 15px;
            transition: transform 0.3s ease
        }

        .who-are-we .image-section img:hover {
            transform: scale(1.05);
        }

        .who-are-we .logo img {
            width: 100px;
        }

        /* تخصيص للموبايل والأجهزة الصغيرة */
        @media (max-width: 768px) {
            .who-are-we {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }

            .who-are-we .text-section {
                margin-bottom: 20px;
            }

            .who-are-we .image-section {
                flex-direction: column;
                align-items: center;

            }

            .who-are-we .image-section img {
                width: 100%;
                max-width: 250px;
                height: auto;
                margin-bottom: 10px;
            }
        }

        /* End section tow Home */
    </style>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner slider-half">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('Wep/assets/img/1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption text-start">
                    <h1 class="fw-bold">Egyptian Company for Electrical Industries</h1>
                    <p>With lots of unique blocks, you can easily build a page without coding. Build your next consultancy
                        website within few minutes.</p>
                    <a href="#" class="btn btn-danger">Explore Our Services</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('Wep/assets/img/2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption text-start">
                    <h1 class="fw-bold">Egyptian Company for Electrical Industries</h1>
                    <p>With lots of unique blocks, you can easily build a page without coding. Build your next consultancy
                        website within few minutes.</p>
                    <a href="#" class="btn btn-danger">Explore Our Services</a>
                </div>
            </div>
        </div>

        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"
                style="width: 12px; height: 12px;"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                style="width: 12px; height: 12px;"></button>
        </div>
    </div>


    <div class="container">
        <div class="who-are-we">
            <!-- Section 1: Text Content -->
            <div class="text-section col-md-6">
                <h1>Who Are We</h1>
                <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page.
                    With lots of unique blocks, you can easily build a page without coding. Build your next landing page.
                </p>
                <a href="#">More about us <span class="ms-2">&rarr;</span></a>
                <div class="logo mt-3">
                    <img src="{{ asset('Wep/assets/img/1.jpg') }}" alt="Company Logo">
                </div>
            </div>

            <!-- Section 2: Images -->
            <div class="image-section col-md-6 col-12 m-auto">
                <img src="{{ asset('Wep/assets/img/1.jpg') }}" class="mt-5" alt="Image 1">
                <img src="{{ asset('Wep/assets/img/1.jpg') }}" alt="Image 2">
            </div>
        </div>
    </div>


    <style>
        .service-icon {
            font-size: 50px;
            color: #f44336;
        }

        .service-title {
            font-weight: bold;
            font-size: 1.25rem;
        }

        .service-description {
            font-size: 0.875rem;
            color: #6c757d;
        }
    </style>
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="service-icon bg-danger w-25 m-auto text-white mb-3" style="border-radius: 50%;padding: 8px;">
                    <i class="bi bi-check-lg"></i>
                </div>
                <h4 class="service-title">Switchgear Safety</h4>
                <p class="service-description">Elit purus magna donec mattis amet, leo varius sed. Elit purus magna
                    donec mattis amet, leo varius sed.</p>
            </div>
            <div class="col-md-4">
                <div class="service-icon bg-danger w-25 m-auto text-white mb-3" style="border-radius: 50%;padding: 8px;">
                    <i class="bi bi-check-lg"></i>
                </div>
                <h4 class="service-title">Compliance Assured</h4>
                <p class="service-description">Elit purus magna donec mattis amet, leo varius sed. Elit purus magna
                    donec mattis amet, leo varius sed.</p>
            </div>
            <div class="col-md-4">
                <div class="service-icon bg-danger w-25 m-auto text-white mb-3" style="border-radius: 50%;padding: 8px;">
                    <i class="bi bi-check-lg"></i>
                </div>
                <h4 class="service-title">Operational Efficiency</h4>
                <p class="service-description">Elit purus magna donec mattis amet, leo varius sed. Elit purus magna
                    donec mattis amet, leo varius sed.</p>
            </div>
        </div>
    </div>


    <style>
        /* الحاوية الرئيسية */
        .services-section {
            text-align: center;
            padding: 50px 20px;
            background-color: #f8f9fc;
            font-family: Arial, sans-serif;
        }

        .services-title {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        .services-description {
            font-size: 18px;
            color: #666;
        }

        /* تنسيق الحاوية */
        .services-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* العنصر الرئيسي */
        .service {
            position: relative;
            width: 300px;
            height: 400px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.5s ease;
            display: flex;
            flex-direction: column;
        }

        .service-content {
            padding: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: left;
            color: #fff;
            background-image: url('{{ asset('Wep/assets/img/1.jpg') }}');
            background-size: cover;
            background-position: center;
            position: relative;
            width: 100%;
            transition: margin-right 0.5s ease;
        }

        .service-content h3 {
            font-size: 22px;
            margin-bottom: 10px;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .service-content p {
            font-size: 16px;
            line-height: 1.6;
        }

        .service-content .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #ff4757;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }

        /* العنصر المخفي */
        .service-hidden {
            position: absolute;
            top: 50%;
            left: 100%;
            transform: translateY(-50%) translateX(20px);
            width: 200px;
            background-color: #ff4757;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            opacity: 0;
            /* العنصر مخفي */
            visibility: hidden;
            /* العنصر غير مرئي */
            transition: all 0.5s ease;
        }

        /* عند التمرير بالماوس */
        .service:hover .service-hidden {
            opacity: 1;
            /* جعل العنصر مرئي */
            visibility: visible;
            /* جعل العنصر مرئي */
            left: 100%;
            /* يظهر العنصر المخفي إلى الجنب من العنصر */
            transform: translateY(-50%) translateX(0);
            /* حركة خفيفة للظهور من الجنب */
        }

        .service:hover .service-content {
            margin-right: 220px;
            /* توسيع المساحة لاحتواء العنصر المخفي */
        }

        /* عند التمرير، يتم تصغير العنصر */
        .service:hover {
            transform: scale(0.95);
        }

        /* زر المزيد من التفاصيل */
        .more-details .btn {
            margin-top: 30px;
            padding: 15px 30px;
            background-color: #ff4757;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }

        .more-details .btn:hover {
            background-color: #e84141;
        }

        /* تصميم متجاوب */
        @media screen and (max-width: 768px) {
            .services-container {
                flex-direction: column;
                gap: 15px;
            }

            .service {
                width: 100%;
            }

            .service-hidden {
                width: 150px;
                /* عرض أصغر للأجهزة الصغيرة */
                left: 100%;
            }

            .service:hover .service-hidden {
                left: 100%;
            }
        }
    </style>

    <div class="services-section">
        <h2 class="services-title fw-bold">Our Services</h2>
        <p class="services-description w-75 text-center m-auto mb-5 ">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum molestiae corrupti reiciendis blanditiis vero
            minima, modi consectetur. Quod, non possimus ducimus magni numquam nemo vitae error eum nobis placeat
            praesentium delectus explicabo beatae officiis fuga cum? Excepturi harum quam numquam necessitatibus quia </p>
        <div class="services-container">
            <div class="service transition">
                <div class="service-content">
                    <h3>Low Voltage Panels Sector</h3>
                    <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page.
                    </p>
                    <a href="#" class="btn">More About Service →</a>
                </div>
                <div class="service-hidden">
                    <ul>
                        <li>MCCB</li>
                        <li>MVF</li>
                        <li>Packaged Substation</li>
                        <li>Switch-disconnector</li>
                    </ul>
                </div>
            </div>
            <div class="service transition">
                <div class="service-content">
                    <h3>Medium Voltage Panels Sector</h3>
                    <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page.
                    </p>
                    <a href="#" class="btn">More About Service →</a>
                </div>
                <div class="service-hidden">
                    <ul>
                        <li>Transformers</li>
                        <li>High Voltage Panels</li>
                        <li>Disconnectors</li>
                        <li>Circuit Breakers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6">
                <h2 class="fw-bold">Why eei</h2>
                <p class="text-muted">
                    Dui consectetur gravida platea ut dis diam. Enim morbi proin auctor et nisi phasellus.
                    Ultricies pharetra, id quam facilisis urna, enim.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i>
                        Free Consulting With Expert Saving Money
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i>
                        Dui consectetur gravida platea ut dis diam. proin auctor
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i>
                        Dui consectetur gravida plat
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i>
                        Saving Money For The Future
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i>
                        Dui consectetur gravida plat
                    </li>
                </ul>
            </div>

            <!-- Image Section -->
            <div class="col-lg-6">
                <img src="{{ asset('Wep/assets/img/1.jpg') }}" class="img-fluid rounded" alt="Industry image">
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Frequently asked questions</h2>
            <p class="text-muted">
                Et pulvinar nec interdum integer id urna molestie porta nullam. A, donec ornare sed turpis pulvinar purus
                maecenas quam a. Erat porttitor pharetra sed in mauris elementum sollicitudin.
            </p>
        </div>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Enim sodales consequat adipiscing facilisis massa venenatis, non lorem lobortis?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Venenatis nulla sagittis nunc, lobortis nec sollicitudin neque, dolor?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Vestibulum at eros. Nulla vitae elit libero, a pharetra augue.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Varius ultrices molestie tellus fermentum, viverra ipsum scelerisque etiam lorem?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Donec id elit non mi porta gravida at eget metus.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Nulla etiam vitae, at sagittis, nibh ultrices mattis feugiat faucibus?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Sagittis consectetur gravida nec turpis eros, id sit et, dictum?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .contactUS {
            background-color: #0d1b2a;
            /* Dark navy background */
            color: #ffffff;
            /* White text */
            opacity: 0.9;
        }

        .contact-section {
            padding: 50px 0;
        }

        .contact-section h2,
        .contact-section h4 {
            color: #ffffff;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-custom {
            background-color: #ff3e3e;
            /* Red button */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-custom:hover {
            background-color: #e03535;
        }
    </style>
    <div class="container-fluid contact-section contactUS p-5">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-lg-6 mb-4">
                <h2>Contact Us</h2>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        Factory: 10th of Ramadan city, Egypt
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-telephone-fill me-2"></i>
                        0020 01144508585
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-envelope-fill me-2"></i>
                        info@eei.com.eg
                    </li>
                </ul>
            </div>
            <!-- Contact Form -->
            <div class="col-lg-6">
                <h4>Send us a question</h4>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="i.e. John Doe">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="i.e. john@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="i.e. 123-456-7890">
                    </div>
                    <div class="mb-3">
                        <label for="question" class="form-label">Your Question</label>
                        <textarea class="form-control" id="question" rows="3" placeholder="Write Your Question"></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom w-100">To Talk to an Expert</button>
                </form>
            </div>
        </div>
    </div>


    <style>
        .footer {
            background-color: #f8f9fa;
            /* Light background */
            padding: 40px 0;
        }

        .footer-logo img {
            max-width: 100px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-bottom {
            background-color: #ff3e3e;
            /* Red background */
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
        }

        .footer-bottom a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer-icons i {
            margin-right: 10px;
            color: #ffffff;
            font-size: 1.2rem;
        }
    </style>
    </head>

    <body>
        <footer class="footer">
            <div class="container">
                <div class="row text-center text-lg-start">
                    <!-- Company Links -->
                    <div class="col-lg-3 footer-links mb-4">
                        <h6 class="fw-bold">Company</h6>
                        <ul>
                            <li>About us</li>
                            <li>Contact us</li>
                            <li>Certificates</li>
                        </ul>
                    </div>
                    <!-- Services Links -->
                    <div class="col-lg-3 footer-links mb-4">
                        <h6 class="fw-bold">Services</h6>
                        <ul>
                            <li>Low voltage Panels</li>
                            <li>Medium voltage Panels</li>
                            <li>Utility Panels Sector</li>
                        </ul>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-lg-3 footer-links mb-4">
                        <h6 class="fw-bold">Contact us</h6>
                        <ul>
                            <li>info@eei.com.eg</li>
                            <li>0020 01144508585</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 footer-links mb-4">
                        <div class="col-3 footer-logo">
                            <img src="{{ asset('Wep/assets/img/1.jpg') }}" alt="EEI Logo" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- Logo -->

            </div>
            <div class="footer-bottom">
                <div class="row" style="margin: auto;">
                    <div class="col-6">
                        <p class="mb-0">© 2024 Copyright, All Rights Reserved To Nader Emad</p>
                    </div>
                    <div class="col-6">
                        <div class="footer-icons mt-2">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    @endsection
