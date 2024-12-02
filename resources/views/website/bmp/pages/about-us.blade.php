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
    @endsection
