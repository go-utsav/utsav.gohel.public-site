@extends('frontend.layout', [
    'meta_title' => $meta_title,
    'meta_description' => $meta_description,
    'meta_keywords' => $meta_keywords,
    'meta_image' => $meta_image,
    'page_type' => 'article'
])

@section('content')
<!-- Add Lightgallery CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lg-zoom.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lg-thumbnail.min.css">

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
                        Events
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
                <div class="card border-0 shadow-sm">
                    <!-- Main Event Image -->
                    <div class="position-relative">
                        <img src="{{ asset('storage/' . $post->image) }}" 
                             class="card-img-top" 
                             alt="{{ $post->title }}"
                             style="height: 300px; object-fit: contain; background-color: white;">
                    </div>
                    
                    <!-- Event Details -->
                    <div class="card-body">
                        <h1 class="h2 mb-3">{{ $post->title }}</h1>
                        
                        @if($post->excerpt)
                        <div class="mb-4">
                            <h5 class="text-muted mb-2">Overview</h5>
                            <p>{{ $post->excerpt }}</p>
                        </div>
                        @endif

                        @if($post->body)
                        <div class="event-content">
                            {!! $post->body !!}
                        </div>
                        @endif

                        <!-- Event Image Gallery -->
                        @if($post->images)
                        <div class="event-gallery mt-4">
                            <h5 class="text-muted mb-3">Event Gallery</h5>
                            <div id="lightgallery" class="gallery-container">
                                @foreach(json_decode($post->images) as $image)
                                <a href="{{ asset('storage/' . trim($image, '"[]')) }}" 
                                   class="gallery-item"
                                   data-lg-size="1400-1400">
                                    <img src="{{ asset('storage/' . trim($image, '"[]')) }}" 
                                         alt="{{ $post->title }}"
                                         class="img-fluid">
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if($post->tech_stack)
                        <div class="mt-4">
                            <h5 class="text-muted mb-2">Technologies Featured</h5>
                            <div class="tech-stack">
                                @foreach(explode(',', $post->tech_stack) as $tech)
                                <span class="badge bg-light text-dark me-2 mb-2">{{ trim($tech) }}</span>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if($post->url)
                        <div class="mt-4">
                            <a href="{{ $post->url }}" 
                               class="btn btn-dark"
                               target="_blank"
                               rel="noopener noreferrer">
                                Event Details <i class="fas fa-external-link-alt ms-2"></i>
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
                            <h5 class="card-title mb-4">Let's Connect, if you are attending any upcoming event</h5>
                            
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
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Lightgallery JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/autoplay/lg-autoplay.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.getElementById('lightgallery');
    if (gallery) {
        lightGallery(gallery, {
            speed: 500,
            plugins: [lgZoom, lgThumbnail, lgAutoplay],
            autoplayFirstVideo: false,
            thumbnails: true,
            thumbWidth: 60,
            thumbHeight: 40,
            thumbMargin: 4,
            download: false,
            autoplayControls: true,
            counter: true,
            mousewheel: true,
            getCaptionFromTitleOrAlt: true,
            autoplay: true,
            autoplayTimeout: 3000,
            mode: 'lg-fade',
        });
    }
});
</script>

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

.event-content {
    font-size: 1.1rem;
    line-height: 1.8;
}

.event-content img {
    max-width: 100%;
    height: auto;
    margin: 1.5rem 0;
}

.event-content h2, 
.event-content h3, 
.event-content h4 {
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.event-content p {
    margin-bottom: 1.5rem;
}

.event-content ul, 
.event-content ol {
    margin-bottom: 1.5rem;
    padding-left: 1.5rem;
}

@media (max-width: 991.98px) {
    .sticky-sidebar {
        position: static !important;
        margin-top: 2rem;
    }
}

.event-gallery {
    background: white;
    border-radius: 12px;
    padding: 1rem;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.gallery-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 1rem;
    margin-top: 1rem;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-2px);
}

.gallery-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
}

/* LightGallery Customization */
.lg-backdrop {
    background-color: rgba(0, 0, 0, 0.95);
}

.lg-toolbar {
    background-color: transparent;
}

.lg-counter {
    color: #fff;
}

.lg-thumb-outer {
    background-color: rgba(0, 0, 0, 0.45);
}

.lg-thumb-item {
    border: 2px solid transparent;
    border-radius: 4px;
}

.lg-thumb-item.active,
.lg-thumb-item:hover {
    border-color: var(--brand-end);
}

.lg-progress-bar {
    background-color: var(--brand-end);
}

@media (max-width: 768px) {
    .gallery-container {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    }

    .gallery-item img {
        height: 150px;
    }
}
</style>
@endsection
