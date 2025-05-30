@extends('frontend.layout', [
    'meta_title' => $meta_title,
    'meta_description' => $meta_description,
    'meta_keywords' => $meta_keywords,
    'meta_image' => $meta_image,
    'page_type' => 'article'
])

@section('content')
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}" class="text-decoration-none text-dark">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('projects-grid') }}" class="text-decoration-none text-dark">
                        Projects
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $projects->title }}
                </li>
            </ol>
        </nav>

        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <!-- Project Image -->
                    <div class="position-relative">
                        <img src="{{ asset('storage/' . $projects->image) }}" 
                             class="card-img-top" 
                             alt="{{ $projects->title }}"
                             style="height: 300px; object-fit: contain; background-color: white;">
                    </div>
                    
                    <!-- Project Details -->
                    <div class="card-body">
                        <h1 class="h2 mb-3">{{ $projects->title }}</h1>
                        
                        @if($projects->excerpt)
                        <div class="mb-4">
                            <h5 class="text-muted mb-2">Overview</h5>
                            <p>{{ $projects->excerpt }}</p>
                        </div>
                        @endif

                        @if($projects->body)
                        <div class="project-content">
                            {!! $projects->body !!}
                        </div>
                        @endif

                        @if($projects->tech_stack)
                        <div class="mt-4">
                            <h5 class="text-muted mb-2">Technologies Used</h5>
                            <div class="tech-stack">
                                @foreach(explode(',', $projects->tech_stack) as $tech)
                                <span class="badge bg-light text-dark me-2 mb-2">{{ trim($tech) }}</span>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if($projects->url)
                        <div class="mt-4">
                            <a href="{{ $projects->url }}" 
                               class="btn btn-dark"
                               target="_blank"
                               rel="noopener noreferrer">
                                View Live Project <i class="fas fa-external-link-alt ms-2"></i>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Sticky Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-sidebar" style="position: sticky; top: 2rem;">
                    <!-- Contact Card -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Let's Connect</h5>
                            
                            <!-- Quick Contact -->
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://media.licdn.com/dms/image/v2/D4E03AQE49Af6T7Wr-w/profile-displayphoto-shrink_200_200/B4EZZsIKS8HcAY-/0/1745570801305?e=1753920000&v=beta&t=qi_xq3MuDLvcOkAW1Qk3l0JIi-R4ExV6b14YQCeDUbE" 
                                     alt="Utsav Gohel" 
                                     class="rounded-circle me-3"
                                     style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-1">Utsav Gohel</h6>
                                    <p class="text-muted mb-0 small">Cloud Architect & Full Stack Developer</p>
                                </div>
                            </div>

                            <!-- Contact Buttons -->
                            <div class="d-grid gap-2 mb-4">
                                <a href="mailto:contact@utsav.cloud" class="btn btn-outline-dark btn-sm">
                                    <i class="fas fa-envelope me-2"></i> Email Me
                                </a>
                                <a href="https://www.linkedin.com/in/utsav-gohel-cloud/" target="_blank" class="btn btn-outline-dark btn-sm">
                                    <i class="fab fa-linkedin me-2"></i> Connect on LinkedIn
                                </a>
                            </div>

                            <!-- Availability Status -->
                            <div class="alert alert-success mb-0" role="alert" style="background-color: #d1e7dd; border: none;">
                                <div class="d-flex align-items-center">
                                    <div class="me-2" style="width: 8px; height: 8px; background-color: #198754; border-radius: 50%;"></div>
                                    <small>Available for new projects</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advertisement Space -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h6 class="text-muted mb-3">Sponsored</h6>
                            <!-- Ad Space -->
                            <div class="bg-light rounded text-center py-5">
                                <p class="text-muted mb-0">Advertisement Space</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.breadcrumb {
    background: transparent;
    padding: 0;
    margin: 0;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    font-size: 1.2rem;
    line-height: 1;
    vertical-align: middle;
}

.sticky-sidebar {
    transition: all 0.3s ease;
}

.tech-stack .badge {
    font-size: 0.875rem;
    font-weight: normal;
    padding: 0.5rem 1rem;
    border: 1px solid #dee2e6;
}

.project-content {
    font-size: 1.1rem;
    line-height: 1.8;
}

.project-content img {
    max-width: 100%;
    height: auto;
    margin: 1.5rem 0;
}

.project-content h2, 
.project-content h3, 
.project-content h4 {
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.project-content p {
    margin-bottom: 1.5rem;
}

.project-content ul, 
.project-content ol {
    margin-bottom: 1.5rem;
    padding-left: 1.5rem;
}

@media (max-width: 991.98px) {
    .sticky-sidebar {
        position: static !important;
        margin-top: 2rem;
    }
}
</style>
@endsection
