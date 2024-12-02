@extends('website.bmp.layouts.app')
@section('content')
    <style>
        .about-header {
            text-align: center;
            margin-top: 30px;
        }

        .about-logo img {
            width: 100px;
            margin: 20px auto;
        }

        .about-section {
            margin: 50px 0;
        }

        .about-text {
            text-align: justify;
            color: #555;
        }

        .about-image img {
            max-width: 100%;
            border-radius: 10px;
        }
    </style>

    <body>
        <section class="container-fluid text-center py-3" style="margin-top: 5rem;">
            <div class="row" style="background-color: #faf4f4;">
                <div class="col-lg-6 mb-3 mb-lg-0 p-5 mt-3">
                    <h1 class="text-danger ">About Us</h1>
                    <nav>
                        <a href="index.html" class="text-decoration-none text-secondary">Home</a> &gt; <span
                            class="text-danger">About Us</span>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <div class="w-75 m-auto">
                        <img src="{{ asset('Wep/assets/img/1.jpg') }}" class="w-100" alt="EEI Logo">
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid about-section">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <div class="w-75 m-auto">
                        <h2 class="fw-bold text-dark fs-1">Who Are We</h2>
                        <p class="about-text">
                            With lots of unique blocks, you can easily build a page without coding. Build your next landing
                            page effortlessly and focus on showcasing your business. Our goal is to make website development
                            accessible to everyone, ensuring you create engaging, responsive designs.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 about-image">
                    <div class="w-75 m-auto">
                        <img src="{{ asset('Wep/assets/img/1.jpg') }}" alt="Electrical Work Image">
                    </div>
                </div>
            </div>
        </section>

        <style>
            .vision-section {

                background-color: #f9f9f9;
            }

            .vision-title {
                font-size: 2rem;
                font-weight: bold;
                color: #000;
                margin-bottom: 20px;
            }

            .vision-text {
                color: #555;
                text-align: justify;
                margin-bottom: 30px;
            }

            .vision-images img {
                border-radius: 10px;
                width: 100%;
                height: auto;
            }
        </style>

        <section class="container-fluid vision-section">
            <div class="container w-75 m-auto">
                <h2 class="vision-title">Vision</h2>
                <p class="vision-text">
                    With lots of unique blocks, you can easily build a page without coding. Build your next landing page
                    effortlessly and focus on showcasing your vision. Empower your team and elevate your goals by delivering
                    modern and responsive designs.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quae quo perferendis aliquam ab hic
                    vitae itaque, pariatur atque id impedit blanditiis provident quam, obcaecati voluptas similique ipsam
                    neque saepe sunt! Maxime eaque perspiciatis tempora nobis. Repudiandae nihil ex aliquam dolorem quod at
                    odio corporis est? Odio possimus odit doloribus totam commodi doloremque?
                    Accusantium expedita consequatur tenetur, harum, maxime repudiandae non quasi, excepturi optio nam et
                    inventore vitae accusamus dolores omnis doloremque debitis illo architecto quaerat ducimus ab nemo in.
                    Molestiae ex aut sunt eius cumque fugit repellendus recusandae quidem odit. Et dignissimos velit autem
                    hic enim ipsum soluta magni.
                </p>
            </div>
            <div class="container-fluid w-75 m-auto mt-5">
                <div class="row g-4 vision-images">
                    <div class="col-12 col-md-6 m-auto">
                        <img src="{{ asset('Wep/assets/img/1.jpg') }}" alt="Electrical Work">
                    </div>
                    <div class="col-12 col-md-6 m-auto">
                        <img src="{{ asset('Wep/assets/img/1.jpg') }}" alt="Power Station">
                    </div>
                </div>
            </div>
        </section>

        <style>
            .mission-section {
                position: relative;
                width: 100%;
                height: 400px;
                background-image: url('Wep/assets/img/1.jpg');
                /* Replace with the correct image path */
                background-size: cover;
                background-position: center;
            }

            .mission-section:hover::before {
                background-color: rgba(255, 0, 0, 0);

            }

            .mission-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(255, 0, 0, 0.4);
                /* Red overlay */
                z-index: 1;
            }

            .mission-content {
                position: relative;
                z-index: 2;
                text-align: center;
                color: white;
                padding: 0 20px;
                top: 25%;
                transform: translateY(-50%);
            }

            .mission-content h2 {
                font-size: 2.5rem;
                margin-bottom: 20px;
            }

            .mission-content p {
                font-size: 1rem;
                line-height: 1.6;
            }
        </style>
        </head>

        <body>
            <div class="mission-section d-flex align-items-center justify-content-center">
                <div class="mission-content text-center">
                    <h2 class="display-4 fw-bold">Our Mission</h2>
                    <p class="lead">
                        Egestas fringilla aliquam leo, habitasse arcu varius lorem elit. Neque pellentesque donec et tellus
                        ac varius tortor, bibendum.
                        Nulla felis ac turpis at amet. Purus malesuada placerat arcu et enim elit in accumsan. Egestas
                        fringilla aliquam leo, habitasse
                        arcu varius lorem elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit autem
                        quibusdam laborum eveniet sint officia ex inventore fugit, reprehenderit adipisci? Neque quam beatae
                        hic modi incidunt nisi libero magnam eius quidem debitis sit aut quod omnis, reprehenderit deleniti
                        iste eos possimus veniam error rerum ducimus fuga nulla atque culpa! Beatae, laborum qui corrupti
                        laboriosam voluptate quam molestias numquam error ipsam!
                    </p>
                </div>
            </div>



            <style>
                .values-section {
                    background-color: #f8fafc; /* Light background */
                    padding: 50px 0;
                }

                .values-title {
                    font-size: 2rem;
                    font-weight: 700;
                    margin-bottom: 30px;
                    text-align: center;
                }

                .card img {
                    border-radius: 15px 15px 0 0; /* Rounded top corners for images */
                }

                .card {
                    border: none;
                    border-radius: 15px;
                    overflow: hidden;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
                }

                .card-body {
                    text-align: center;
                }
            </style>
        </head>
        <body>
            <section class="values-section">
                <div class="container">
                    <h2 class="values-title">Our Values</h2>
                    <div class="row g-4">
                        <!-- Card 1 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('Wep/assets/img/1.jpg') }}" class="card-img-top" alt="Value 1">
                                <div class="card-body">
                                    <p class="card-text">
                                        Elit purus magna donec mattis amet, leo varius sed. Ut metus sed convallis pretium sollicitudin turpis semper vulputate.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('Wep/assets/img/1.jpg') }}" class="card-img-top" alt="Value 2">
                                <div class="card-body">
                                    <p class="card-text">
                                        Elit purus magna donec mattis amet, leo varius sed. Ut metus sed convallis pretium sollicitudin turpis semper vulputate.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('Wep/assets/img/1.jpg') }}" class="card-img-top" alt="Value 3">
                                <div class="card-body">
                                    <p class="card-text">
                                        Elit purus magna donec mattis amet, leo varius sed. Ut metus sed convallis pretium sollicitudin turpis semper vulputate.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


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
        @endsection
