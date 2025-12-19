@extends('frontend.layouts.main')

@section('main-container')
    <link rel="stylesheet" href="{{ url('frontend\about.css') }}">

    {{--
    <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        /* Layout */
        .nxp-z8k2r-wrapper {
            background: #f8fafc;
            padding: 60px 20px;
            font-family: system-ui, sans-serif;
            color: #0f172a;
        }

        .nxp-m4p9x-container {
            max-width: 900px;
            margin: auto;
        }

        /* Header */
        .nxp-j2v7q-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .nxp-t6w9a-title {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .nxp-e3r8k-subtitle {
            color: #64748b;
            font-size: 18px;
        }

        /* Search */
        .nxp-h7s5c-searchbox {
            position: relative;
            max-width: 500px;
            margin: 0 auto 40px;
        }

        .nxp-h7s5c-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #4f46e5;
        }

        .nxp-h7s5c-input {
            width: 100%;
            padding: 16px 20px 16px 48px;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            font-size: 15px;
        }

        /* Accordion */
        .nxp-q1b9z-accordion {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #e5e7eb;
            margin-bottom: 16px;
            overflow: hidden;
            transition: 0.3s ease;
        }

        .nxp-q1b9z-trigger {
            width: 100%;
            padding: 22px 28px;
            background: none;
            border: none;
            display: flex;
            justify-content: space-between;
            font-size: 20px;
            font-weight: 700;
            cursor: pointer;
        }

        .nxp-q1b9z-arrow {
            transition: transform 0.3s;
        }

        /* Panel */
        .nxp-q1b9z-panel {
            display: grid;
            grid-template-rows: 0fr;
            transition: grid-template-rows 0.4s ease;
        }

        .nxp-open-x9k3 .nxp-q1b9z-panel {
            grid-template-rows: 1fr;
        }

        .nxp-open-x9k3 .nxp-q1b9z-arrow {
            transform: rotate(180deg);
        }

        /* Cards */
        .nxp-c8m4y-card {
            display: grid;
            grid-template-columns: 1.5fr 2fr 1.5fr 1fr;
            gap: 16px;
            padding: 26px;
            border-bottom: 1px solid #f1f5f9;
            align-items: center;
        }

        .nxp-c8m4y-card:last-child {
            border-bottom: none;
        }

        .nxp-c8m4y-info h3 {
            margin: 0;
            font-size: 18px;
        }

        .nxp-c8m4y-info span {
            font-size: 11px;
            background: #eef2ff;
            color: #4338ca;
            padding: 4px 8px;
            border-radius: 6px;
        }

        .nxp-c8m4y-person {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .nxp-c8m4y-person i {
            background: #f1f5f9;
            padding: 10px;
            border-radius: 50%;
            color: #4f46e5;
        }

        .nxp-c8m4y-person small {
            color: #64748b;
        }

        .nxp-c8m4y-phone {
            font-weight: 700;
        }

        .nxp-c8m4y-call {
            text-align: center;
            background: #0f172a;
            color: #ffffff;
            padding: 12px;
            border-radius: 12px;
            font-weight: 700;
            text-decoration: none;
            transition: 0.3s;
        }

        .nxp-c8m4y-call:hover {
            background: #4f46e5;
        }

        .nxp-q1b9z-panel {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .nxp-q1b9z-panel.open {
            overflow: hidden;
        }

        .nxp-q1b9z-arrow {
            transition: transform 0.3s ease;
        }

        .nxp-q1b9z-arrow.rotate {
            transform: rotate(180deg);
        }
    </style>

    <!-- Page Hero Section -->
    <section class="page-hero" style="background: url('assets/header-images/kalshf.png')">
        <div class="container">
            <h1 class="display-4">About Fiberworld Communication Pvt. Ltd.</h1>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="about-intro-section section-padding">
        <div class="container">
            <div class="row align-items-center">

                {{-- LEFT IMAGE --}}
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ url('assets/header-images/get-started-pic.png') }}"
                        alt="{{ $about_intro->title ?? 'About Image' }}" class="img-fluid about-image">
                </div>

                {{-- RIGHT TEXT --}}
                <div class="col-lg-6">

                    {{-- Dynamic Title --}}
                    <h2 class="display-6 fw-bold mb-4 text-primary">
                        {{ $about_intro->title ?? 'About Fiberworld Communication Pvt. Ltd.' }}
                    </h2>

                    {{-- Dynamic Paragraphs --}}
                    @if($about_intro && $about_intro->paragraphs->count())
                        @foreach($about_intro->paragraphs as $para)
                            <p class="{{ $loop->first ? 'lead mb-4' : 'mb-3' }}">
                                {{ $para->paragraph }}
                            </p>
                        @endforeach
                    @else
                        <p class="text-muted">About information will be updated soon.</p>
                    @endif

                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg mt-3">
                        Contact Our Team
                    </a>

                </div>
            </div>
        </div>
    </section>


    <!-- Mission & Vision Section -->
    <section class="mission-vision-section section-padding bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title">Our Guiding Principles</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="mission-vision-card">
                        <div class="icon"><i class="bi bi-bullseye"></i></div>
                        <h3>Our Mission</h3>
                        <p>To provide unparalleled internet services that enable individuals and businesses in Nepal to
                            thrive in the digital age, fostering innovation, education, and economic growth through reliable
                            and accessible connectivity.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="mission-vision-card">
                        <div class="icon"><i class="bi bi-lightbulb"></i></div>
                        <h3>Our Vision</h3>
                        <p>To be the most trusted and preferred Internet Service Provider in Nepal, recognized for our
                            cutting-edge technology, exceptional customer support, and commitment to connecting every Nepali
                            household and enterprise.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- branches and employees --}}
    <section class="nxp-z8k2r-wrapper">

        <div class="nxp-m4p9x-container">
            <header class="nxp-j2v7q-header">
                <h1 class="nxp-t6w9a-title">Network Directory</h1>
                <p class="nxp-e3r8k-subtitle">
                    Access our professional branch services across the country
                </p>
            </header>

            <div class="nxp-h7s5c-searchbox">
                <i class="fas fa-search nxp-h7s5c-icon"></i>
                <input type="text" id="search" onkeyup="searchFunction()" placeholder="Search by district or branch name..."
                    class="nxp-h7s5c-input">
            </div>

            @foreach($provinces as $province)
                <div class="nxp-q1b9z-accordion">

                    <button class="nxp-q1b9z-trigger" onclick="toggleAccordion(this)">
                        <span>{{ $province->name }}</span>
                        <i class="fas fa-chevron-down nxp-q1b9z-arrow"></i>
                    </button>

                    <div class="nxp-q1b9z-panel">
                        @foreach($province->branches as $branch)
                            <div class="nxp-c8m4y-card">

                                <div class="nxp-c8m4y-info">
                                    <h3>{{ $branch->name }}</h3>
                                    <span>{{ $branch->district }}</span>
                                </div>

                                <div class="nxp-c8m4y-person">
                                    <i class="fas fa-user-tie"></i>
                                    <div>
                                        <strong>{{ $branch->incharge_name }}</strong>
                                        <small>{{ $branch->designation }}</small>
                                    </div>
                                </div>

                                <div class="nxp-c8m4y-phone">
                                    <i class="fas fa-mobile-screen"></i>
                                    {{ $branch->phone }}
                                </div>

                                <a href="tel:{{ $branch->phone }}" class="nxp-c8m4y-call">
                                    CALL
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>
    </section>

    <script>
    /* -----------------------------
       ACCORDION TOGGLE (SINGLE OPEN)
    ------------------------------ */
    function toggleAccordion(button) {
        const currentAccordion = button.closest('.nxp-q1b9z-accordion');
        const currentPanel = button.nextElementSibling;
        const currentArrow = button.querySelector('.nxp-q1b9z-arrow');

        const allAccordions = document.querySelectorAll('.nxp-q1b9z-accordion');

        allAccordions.forEach(acc => {
            const panel = acc.querySelector('.nxp-q1b9z-panel');
            const arrow = acc.querySelector('.nxp-q1b9z-arrow');

            // Close all except clicked one
            if (acc !== currentAccordion) {
                panel.classList.remove('open');
                panel.style.maxHeight = null;
                arrow.classList.remove('rotate');
            }
        });

        // Toggle clicked accordion
        if (currentPanel.classList.contains('open')) {
            currentPanel.classList.remove('open');
            currentPanel.style.maxHeight = null;
            currentArrow.classList.remove('rotate');
        } else {
            currentPanel.classList.add('open');
            currentPanel.style.maxHeight = currentPanel.scrollHeight + 'px';
            currentArrow.classList.add('rotate');
        }
    }

    /* -----------------------------
       SEARCH FUNCTION
    ------------------------------ */
    function searchFunction() {
        const input = document.getElementById('search').value.toLowerCase();
        const accordions = document.querySelectorAll('.nxp-q1b9z-accordion');

        accordions.forEach(accordion => {
            const trigger = accordion.querySelector('.nxp-q1b9z-trigger');
            const panel = accordion.querySelector('.nxp-q1b9z-panel');
            const arrow = trigger.querySelector('.nxp-q1b9z-arrow');
            const cards = panel.querySelectorAll('.nxp-c8m4y-card');

            let hasMatch = false;

            cards.forEach(card => {
                const branch = card.querySelector('h3').innerText.toLowerCase();
                const district = card.querySelector('span').innerText.toLowerCase();

                if (branch.includes(input) || district.includes(input)) {
                    card.style.display = 'flex';
                    hasMatch = true;
                } else {
                    card.style.display = 'none';
                }
            });

            if (hasMatch && input !== '') {
                accordion.style.display = 'block';

                panel.classList.add('open');
                panel.style.maxHeight = panel.scrollHeight + 'px';
                arrow.classList.add('rotate');
            } else if (input === '') {
                accordion.style.display = 'block';

                panel.classList.remove('open');
                panel.style.maxHeight = null;
                arrow.classList.remove('rotate');

                cards.forEach(card => card.style.display = 'flex');
            } else {
                accordion.style.display = 'none';
            }
        });
    }
</script>


    <!-- Why Choose Us / Core Values Section -->
    <section class="values-section section-padding">
        <div class="container">
            <h2 class="section-title">Why Choose Fiberworld Communication Pvt. Ltd.?</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @foreach($values as $value)
                        <div class="value-item mb-4">
                            <h4><i class="{{ $value->icon }}"></i> {{ $value->title }}</h4>
                            <p>{{ $value->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section (Optional - uncomment to include) -->
    <!-- <section class="team-section section-padding bg-light">
            <div class="container">
            <h2 class="section-title">Meet Our Team</h2>
            <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
            <div class="team-member-card">
            <img src="https://via.placeholder.com/150/007bff/ffffff?text=Team+Member" alt="Team Member 1">
            <h4>John Doe</h4>
            <p class="text-muted">CEO & Founder</p>
            <div class="social-icons">
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
            <div class="team-member-card">
            <img src="https://via.placeholder.com/150/007bff/ffffff?text=Team+Member" alt="Team Member 2">
            <h4>Jane Smith</h4>
            <p class="text-muted">Chief Technology Officer</p>
            <div class="social-icons">
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            </div>
            </div>
            </div>  
            <div class="col-lg-3 col-md-6 mb-4">
            <div class="team-member-card">
            <img src="https://via.placeholder.com/150/007bff/ffffff?text=Team+Member" alt="Team Member 3">
            <h4>Peter Jones</h4>
            <p class="text-muted">Head of Operations</p>
            <div class="social-icons">
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
            <div class="team-member-card">
            <img src="https://via.placeholder.com/150/007bff/ffffff?text=Team+Member" alt="Team Member 4">
            <h4>Emily White</h4>
            <p class="text-muted">Customer Service Lead</p>
            <div class="social-icons">
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </section> -->

    <!-- Call to Action / Contact Section - Reusing style from index.html -->

    <section class="cta-section bg-primary text-white text-center section-padding">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Have Questions? We're Here to Help!</h2>
            <p class="lead mb-5">Reach out to our friendly team for any inquiries or support.</p>
            <a href="#" class="btn btn-light btn-lg me-3"><i class="bi bi-telephone-fill me-2"></i> Call Us Now</a>
            <a href="{{ url('/contact') }}#contactForm" class="btn btn-outline-light btn-lg"><i
                    class="bi bi-envelope-fill me-2"></i> Email Us</a>
        </div>
    </section>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>


@endsection