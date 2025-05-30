@extends('frontend.layout', [
    'meta_title' => $meta_title,
    'meta_description' => $meta_description,
    'meta_keywords' => $meta_keywords,
    'meta_image' => $meta_image,
    'page_type' => 'article'
])

@section('content')
<!-- Add Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Add Lightbox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

<section class="service-detail-section py-5">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}" class="text-decoration-none">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('projects-grid') }}" class="text-decoration-none">
                        Services
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $post->title }}
                </li>
            </ol>
        </nav>

        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Service Overview Card -->
                <div class="card service-card border-0 shadow-sm mb-4">
                    <!-- Service Image -->
                    <div class="position-relative">
                        <img src="{{ asset('storage/' . $post->image) }}" 
                             class="card-img-top" 
                             alt="{{ $post->title }}"
                             style="height: 300px; object-fit: contain;">
                        <div class="service-tag">Premium Service</div>
                    </div>
                    
                    <!-- Service Details -->
                    <div class="card-body">
                        <h1 class="service-title mb-4">{{ $post->title }}</h1>
                        
                        @if($post->excerpt)
                        <div class="service-overview mb-4">
                            <h5 class="section-subtitle">Service Overview</h5>
                            <p class="lead">{{ $post->excerpt }}</p>
                        </div>
                        @endif

                        <!-- Personal Commitment Section -->
                        <div class="commitment-section mb-4">
                            <div class="commitment-header">
                                <i class="fas fa-heart"></i>
                                <h5>Personal Commitment</h5>
                            </div>
                            <p>I personally handle every project with dedication and care. No outsourcing - you work directly with me. I treat each project as if it were my own business, crafting solutions that drive real results and growth.</p>
                        </div>

                        <!-- Guarantee Section -->
                        <div class="guarantee-section mb-4">
                            <div class="guarantee-header">
                                <i class="fas fa-shield-alt"></i>
                                <h5>My Guarantee to You</h5>
                            </div>
                            <ul class="guarantee-list">
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <span>100% Money-Back Guarantee if requirements are not met</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <span>Clear communication and regular updates</span>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <span>Transparent pricing with no hidden fees</span>
                                </li>
                            </ul>
                        </div>

                        @if($post->body)
                        <div class="service-content">
                            {!! $post->body !!}
                        </div>
                        @endif

                        @if($post->tech_stack)
                        <div class="tech-stack-section mt-4">
                            <h5 class="section-subtitle">Technologies I'll Use</h5>
                            <div class="tech-stack">
                                @foreach(explode(',', $post->tech_stack) as $tech)
                                <span class="tech-badge">{{ trim($tech) }}</span>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Process Section -->
                        <div class="process-section mt-4">
                            <h5 class="section-subtitle">My Working Process</h5>
                            <div class="process-steps">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <h6>Requirements Clarity</h6>
                                    <p>Detailed discussion to understand your needs perfectly</p>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">2</div>
                                    <h6>Planning & Design</h6>
                                    <p>Strategic planning and solution design</p>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">3</div>
                                    <h6>Development</h6>
                                    <p>Careful crafting of your solution</p>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">4</div>
                                    <h6>Quality Assurance</h6>
                                    <p>Thorough testing and refinement</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Image Gallery -->
                @if($post->images)
                <div class="service-gallery mb-4">
                    <div class="swiper imageSwiper">
                        <div class="swiper-wrapper">
                            @foreach(json_decode($post->images) as $image)
                            <div class="swiper-slide">
                                <a href="{{ asset('storage/' . trim($image, '"[]')) }}" 
                                   data-fancybox="gallery"
                                   class="gallery-item">
                                    <img src="{{ asset('storage/' . trim($image, '"[]')) }}" 
                                         alt="{{ $post->title }}"
                                         class="img-fluid rounded">
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Sticky Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-sidebar">
                    <!-- Contact Card -->
                    <div class="card contact-card border-0 shadow-sm mb-4">
                        <div class="card-body">
                          
                            
                            <div class="profile-section mb-4">
                                <img src="https://media.licdn.com/dms/image/v2/D4E03AQE49Af6T7Wr-w/profile-displayphoto-shrink_200_200/B4EZZsIKS8HcAY-/0/1745570801305?e=1753920000&v=beta&t=qi_xq3MuDLvcOkAW1Qk3l0JIi-R4ExV6b14YQCeDUbE" 
                                     alt="Utsav Gohel" 
                                     class="profile-image">
                                <div class="profile-info">
                                    <h5>Utsav Gohel</h5>
                                    <p>Cloud Architect & Full Stack Developer</p>
                                    <div class="availability-badge">
                                        <span class="status-dot"></span>
                                        Available for Projects
                                    </div>
                                </div>
                            </div>

                              <!-- Service Title and Price - Now Sticky -->
                              <div class="sticky-header mb-4">
                                <h3 class="sticky-title">{{ $post->title }}</h3>
                                <div class="price-tag">
                                    <span class="currency">£</span>
                                    <span class="amount">{{ $post->Fees }}</span>
                                </div>
                                <p class="price-note">*Price may vary based on specific requirements</p>
                            </div>


                            <!-- Action Buttons -->
                            <div class="action-buttons">
                                <a href="#" class="btn btn-primary btn-block mb-2" data-bs-toggle="modal" data-bs-target="#projectModal">
                                    <i class="fas fa-rocket me-2"></i>Start Your Project
                                </a>
                                <a href="mailto:contact@utsav.cloud" class="btn btn-outline-primary btn-block mb-2">
                                    <i class="fas fa-envelope me-2"></i>Email Me
                                </a>
                                <a href="https://www.linkedin.com/in/utsav-gohel-cloud/" target="_blank" class="btn btn-outline-primary btn-block">
                                    <i class="fab fa-linkedin me-2"></i>Connect on LinkedIn
                                </a>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Add Lightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper
    const swiper = new Swiper(".imageSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        keyboard: {
            enabled: true,
        },
    });

    // Initialize Fancybox
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
});
</script>

<style>
:root {
    --brand-gradient: linear-gradient(to right, #ffde59, #ff914d);
    --brand-start: #ffde59;
    --brand-end: #ff914d;
}

.service-detail-section {
    background: linear-gradient(to right, rgba(255, 222, 89, 0.05), rgba(255, 145, 77, 0.05));
}

.breadcrumb-item a {
    color: #1a1a1a;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    color: #1a1a1a;
}

.service-card {
    border-radius: 16px;
    overflow: hidden;
}

.service-tag {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: var(--brand-gradient);
    padding: 0.5rem 1rem;
    border-radius: 20px;
    color: #1a1a1a;
    font-weight: 500;
}

.service-title {
    font-size: 2rem;
    font-weight: 600;
    color: #1a1a1a;
}

.section-subtitle {
    color: #1a1a1a;
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.commitment-section,
.guarantee-section {
    background: white;
    border-radius: 12px;
    padding: 1.5rem;
    border: 1px solid rgba(255, 145, 77, 0.1);
}

.commitment-header,
.guarantee-header {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
}

.commitment-header i,
.guarantee-header i {
    font-size: 1.5rem;
    margin-right: 1rem;
    background: var(--brand-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.guarantee-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.guarantee-list li {
    display: flex;
    align-items: center;
    margin-bottom: 0.75rem;
}

.guarantee-list i {
    color: var(--brand-end);
    margin-right: 0.75rem;
}

.tech-badge {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: white;
    border: 1px solid rgba(255, 145, 77, 0.2);
    border-radius: 20px;
    margin: 0.25rem;
    color: #1a1a1a;
    font-size: 0.9rem;
}

.process-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin-top: 1rem;
}

.process-step {
    text-align: center;
    padding: 1.5rem;
    background: white;
    border-radius: 12px;
    border: 1px solid rgba(255, 145, 77, 0.1);
}

.step-number {
    width: 40px;
    height: 40px;
    background: var(--brand-gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-weight: 600;
    color: #1a1a1a;
}

.contact-card {
    border-radius: 16px;
}

.profile-section {
    text-align: center;
}

.profile-image {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 1rem;
    object-fit: cover;
    border: 3px solid;
    border-image: var(--brand-gradient) 1;
}

.profile-info h5 {
    margin-bottom: 0.25rem;
}

.profile-info p {
    color: #666;
    margin-bottom: 0.5rem;
}

.availability-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: #d1e7dd;
    border-radius: 20px;
    color: #0f5132;
    font-size: 0.9rem;
}

.status-dot {
    width: 8px;
    height: 8px;
    background: #198754;
    border-radius: 50%;
    margin-right: 0.5rem;
}

.price-tag {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 0.5rem;
}

.price-note {
    text-align: center;
    color: #666;
    font-size: 0.9rem;
    margin: 0;
}

.btn-block {
    width: 100%;
}

.trust-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.trust-list li {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
}

.trust-list i {
    width: 30px;
    margin-right: 0.75rem;
    background: var(--brand-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

@media (max-width: 991.98px) {
    .sticky-sidebar {
        margin-top: 2rem;
    }
    
    .process-steps {
        grid-template-columns: 1fr;
    }
}

.sticky-sidebar {
    position: sticky;
    top: 2rem;
    max-height: calc(100vh - 4rem);
    overflow-y: auto;
}

.sticky-header {
    background: white;
    padding: 1rem;
    border-radius: 12px;
    border: 1px solid rgba(255, 145, 77, 0.1);
    margin: -1rem -1rem 1rem -1rem;
}

.sticky-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 1rem;
    text-align: center;
}

.divine-message {
    background: linear-gradient(135deg, rgba(255, 222, 89, 0.1), rgba(255, 145, 77, 0.1));
    padding: 1.5rem;
    border-radius: 12px;
    text-align: center;
    position: relative;
}

.divine-icon {
    width: 40px;
    height: 40px;
    background: var(--brand-gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
}

.divine-icon i {
    font-size: 1.5rem;
    color: #1a1a1a;
}

.divine-message p {
    font-style: italic;
    color: #1a1a1a;
    margin: 0;
    font-size: 0.95rem;
    line-height: 1.6;
}

.divine-message::before,
.divine-message::after {
    content: '"';
    font-size: 2rem;
    color: var(--brand-end);
    position: absolute;
    opacity: 0.2;
}

.divine-message::before {
    top: 0.5rem;
    left: 1rem;
}

.divine-message::after {
    bottom: 0;
    right: 1rem;
}

.service-gallery {
    position: relative;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.swiper {
    width: 100%;
    height: 400px;
}

.swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
}

.swiper-slide img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.gallery-item {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.swiper-button-next,
.swiper-button-prev {
    color: var(--brand-end);
    background: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.swiper-button-next:after,
.swiper-button-prev:after {
    font-size: 18px;
    font-weight: bold;
}

.swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    background: var(--brand-end);
    opacity: 0.5;
}

.swiper-pagination-bullet-active {
    opacity: 1;
    background: var(--brand-end);
}

/* Fancybox customization */
.fancybox__backdrop {
    background: rgba(0, 0, 0, 0.9);
}

.fancybox__toolbar {
    background: rgba(0, 0, 0, 0.5);
}

.fancybox__nav {
    background: transparent;
}

@media (max-width: 768px) {
    .swiper {
        height: 300px;
    }
    
    .swiper-button-next,
    .swiper-button-prev {
        width: 35px;
        height: 35px;
    }
}
</style>
@endsection
