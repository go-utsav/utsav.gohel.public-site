@extends('frontend.layout')

@section('meta')
    <title>{{ $caseStudy->seo_title ?? $caseStudy->title }} - Case Study | Utsav Gohel</title>
    <meta name="description" content="{{ $caseStudy->seo_description ?? $caseStudy->description }}">
    <meta name="keywords" content="{{ $caseStudy->seo_keywords }}">
    <meta property="og:title" content="{{ $caseStudy->seo_title ?? $caseStudy->title }} - Case Study">
    <meta property="og:description" content="{{ $caseStudy->seo_description ?? $caseStudy->description }}">
    <meta property="og:image" content="{{ asset('storage/' . $caseStudy->cover_image) }}">
@endsection

@section('content')
<article class="case-study-detail">
    <!-- Hero Section -->
    <header class="hero-section py-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-3">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('case-study-grid') }}">Case Studies</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $caseStudy->title }}</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">{{ $caseStudy->title }}</h1>
                    
                    @if($caseStudy->featured)
                        <div class="featured-badge mb-3">
                            <span class="badge bg-warning text-dark">
                                <i class="fas fa-star me-1"></i> Featured Case Study
                            </span>
                        </div>
                    @endif

                    <div class="tech-stack mb-4">
                        @php
                            $techStack = json_decode($caseStudy->tech_stack) ?? [];
                            if (!is_array($techStack)) {
                                $techStack = explode(',', $caseStudy->tech_stack);
                            }
                        @endphp
                        @foreach($techStack as $tech)
                            <span class="badge bg-light text-dark">{{ trim($tech) }}</span>
                        @endforeach
                    </div>

                    <p class="lead mb-0">{{ $caseStudy->description }}</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('storage/' . $caseStudy->cover_image) }}" 
                         alt="{{ $caseStudy->title }}" 
                         class="img-fluid rounded">
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <div class="content-wrapper py-5">
        <div class="container">
            <div class="row">
                <!-- Main Scrolling Content -->
                <div class="col-lg-8 content-main">
                   
                    <!-- Challenge -->
                    <section class="content-section mb-5">
                        <h2 class="h3 ">
                         
                            The Challenge
                        </h2>
                        <p>{{ $caseStudy->challenge }}</p>
                    </section>

                    <!-- Solution -->
                    <section class="content-section mb-5">
                        <h2 class="h3 ">
                           
                            My Solution
                        </h2>
                        <p>{{ $caseStudy->solution }}</p>
                    </section>

                    <!-- Impact -->
                    <section class="content-section mb-5">
                        <h2 class="h3">
                           
                            Impact & Results
                        </h2>
                        <p>{{ $caseStudy->impact }}</p>
                    </section>
                </div>

                <!-- Fixed Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-fixed">
                        <!-- Quick Info -->
                        <div class="quick-info mb-4">
                            <h3 class="h5 mb-3">Project Overview</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <strong><i class="fas fa-user-tie me-2"></i>Role:</strong>
                                    <p class="mb-0 mt-1">{{ $caseStudy->role }}</p>
                                </li>
                                <li class="mb-3">
                                    <strong><i class="fas fa-calendar me-2"></i>Timeline:</strong>
                                    <p class="mb-0 mt-1">{{ $caseStudy->created_at->format('F Y') }}</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Tech Stack -->
                        <div class="tech-stack-wrapper mb-4">
                            <h3 class="h5 mb-3">
                                <i class="fas fa-code me-2"></i>
                                Technologies Used
                            </h3>
                            <div class="tech-stack">
                                @php
                                    $techStack = json_decode($caseStudy->tech_stack) ?? [];
                                    if (!is_array($techStack)) {
                                        $techStack = explode(',', $caseStudy->tech_stack);
                                    }
                                @endphp
                                @foreach($techStack as $tech)
                                    <span class="tech-badge">{{ trim($tech) }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="cta-wrapper text-center p-4 rounded">
                            <h3 class="h5 mb-3">Interested in similar solutions?</h3>
                            <p class="mb-4">Let's discuss how we can help transform your business.</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary w-100">
                                <i class="fas fa-paper-plane me-2"></i>
                                Get in Touch
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<style>
.case-study-detail {
    background-color: #fff;
}

.hero-section {
    background: linear-gradient(to right, #f8f9fa 0%, #ffffff 100%);
    border-bottom: 1px solid #eee;
}

/* Sidebar Styles */
.sidebar-fixed {
    position: sticky;
    top: 2rem;
    background: #fff;
    padding: 1.5rem;
    border-radius: 12px;
    border: 1px solid #eee;
}

.quick-info ul li {
    color: #555;
}

.quick-info ul li strong {
    color: #333;
    display: block;
}

/* Tech Stack Styles */
.tech-stack {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.tech-badge {
    background: #f8f9fa;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.85rem;
    color: #333;
    border: 1px solid #eee;
    display: inline-block;
}

/* Content Styles */
.content-section h2 {
    color: #333;
    border-bottom: 2px solid #f0f0f0;
    padding-bottom: 0.5rem;
}

.content-section p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #444;
}

/* CTA Styles */
.cta-wrapper {
    background: #f8f9fa;
    border: 1px solid #eee;
}

.btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
    padding: 12px 24px;
    border-radius: 25px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #0b5ed7;
    border-color: #0b5ed7;
    transform: translateY(-2px);
}

/* Breadcrumb Styles */
.breadcrumb {
    background: transparent;
    padding: 0;
    margin: 0;
}

.breadcrumb-item a {
    color: #6c757d;
    text-decoration: none;
}

.breadcrumb-item.active {
    color: #343a40;
}

/* Responsive Adjustments */
@media (max-width: 991.98px) {
    .sidebar-fixed {
        position: static;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    
    .hero-section {
        text-align: left;
    }
}
</style>
@endsection
