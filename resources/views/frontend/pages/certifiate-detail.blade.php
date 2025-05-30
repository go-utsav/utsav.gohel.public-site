@extends('frontend.layout', [
    'meta_title' => $meta_title,
    'meta_description' => $meta_description,
    'meta_keywords' => $meta_keywords,
    'meta_image' => $meta_image
])

@section('content')
<section class="certificate-detail py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}" class="text-decoration-none" style="color: black;">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('certifiate-grid') }}" class="text-decoration-none" style="color: black;">
                        Certificates
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $post->title }}
                </li>
            </ol>
        </nav>

        <div class="row">
            <!-- Fixed Left Panel -->
            <div class="col-lg-4">
                <div class="sticky-panel" style="position: sticky; top: 2rem;">
                    <!-- Certificate Image Card -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4" style="background-color: white;">
                            @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" 
                                 alt="{{ $post->title }}"
                                 class="img-fluid mb-4"
                                 style="width: 100%; object-fit: contain;">
                            @endif
                            
                            <h1 class="h3 mb-3">{{ $post->title }}</h1>
                            @if($post->excerpt)
                            <p class="text-muted">{{ $post->excerpt }}</p>
                            @endif

                            <!-- Quick Info -->
                            <div class="quick-info mb-4">
                                <ul class="list-unstyled mb-0">
                                    @if($post->issue_date)
                                    <li class="mb-2">
                                        <i class="fas fa-calendar-check me-2 text-muted"></i>
                                        <small>Issued: {{ \Carbon\Carbon::parse($post->issue_date)->format('F Y') }}</small>
                                    </li>
                                    @endif

                                    @if($post->credential_id)
                                    <li class="mb-2">
                                        <i class="fas fa-fingerprint me-2 text-muted"></i>
                                        <small class="font-monospace">ID: {{ $post->credential_id }}</small>
                                    </li>
                                    @endif

                                    @if($post->status === 'PUBLISHED')
                                    <li>
                                        <i class="fas fa-check-circle text-success"></i>
                                        <small>Active Certificate</small>
                                    </li>
                                    @endif
                                </ul>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-grid gap-2 mb-4">
                                @if($post->link)
                                <a href="{{ $post->link }}" 
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="btn"
                                   style="background-color: black; color: white; border-radius: 20px;">
                                    <i class="fas fa-external-link-alt me-2"></i>Verify Certificate
                                </a>
                                @endif
                            </div>

                            <!-- Social Share -->
                            <div class="social-share">
                                <p class="text-muted mb-3 small">Share this certificate</p>
                                <div class="d-flex gap-2">
                                    <button onclick="shareVia('linkedin')" 
                                            class="btn btn-sm flex-grow-1"
                                            style="background-color: black; color: white; border-radius: 20px;">
                                        <i class="fab fa-linkedin me-2"></i>LinkedIn
                                    </button>
                                    <button onclick="shareVia('twitter')" 
                                            class="btn btn-sm flex-grow-1"
                                            style="background-color: black; color: white; border-radius: 20px;">
                                        <i class="fab fa-twitter me-2"></i>Twitter
                                    </button>
                                    <button onclick="copyLink()" 
                                            class="btn btn-sm flex-grow-1"
                                            style="background-color: black; color: white; border-radius: 20px;">
                                        <i class="fas fa-link me-2"></i>Copy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scrollable Right Content -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4" style="background-color: white;">
                        <div class="certificate-content" data-bs-spy="scroll" data-bs-target="#contentNav" data-bs-offset="0" tabindex="0">
                            {!! $post->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Breadcrumb Styles */
.breadcrumb {
    background: transparent;
    padding: 0;
    margin: 0;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    font-size: 1.2rem;
    line-height: 1;
    color: #6c757d;
}

.breadcrumb-item a:hover {
    opacity: 0.7;
}

.breadcrumb-item.active {
    color: #6c757d;
}

/* Certificate Content Styles */
.certificate-detail {
    min-height: 100vh;
}

.sticky-panel {
    position: sticky;
    top: 2rem;
}

.certificate-content {
    line-height: 1.8;
    color: #2c3e50;
    max-height: calc(100vh - 8rem);
    overflow-y: auto;
    scroll-behavior: smooth;
    padding-right: 1rem;
}

.certificate-content::-webkit-scrollbar {
    width: 6px;
}

.certificate-content::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 3px;
}

.certificate-content::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 3px;
}

.certificate-content h2,
.certificate-content h3,
.certificate-content h4 {
    margin-top: 1.5rem;
    margin-bottom: 1rem;
    font-weight: 600;
}

.certificate-content p {
    margin-bottom: 1rem;
}

.certificate-content ul,
.certificate-content ol {
    margin-bottom: 1rem;
    padding-left: 1.5rem;
}

.certificate-content img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 1rem 0;
}

/* Mobile Responsiveness */
@media (max-width: 991.98px) {
    .sticky-panel {
        position: relative;
        top: 0;
        margin-bottom: 2rem;
    }

    .certificate-content {
        max-height: none;
        overflow-y: visible;
        padding-right: 0;
    }
}
</style>

<script>
function shareVia(platform) {
    const url = window.location.href;
    const title = @json($post->title);
    const text = @json($meta_description);

    switch(platform) {
        case 'linkedin':
            window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`, '_blank');
            break;
        case 'twitter':
            window.open(`https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}&url=${encodeURIComponent(url)}`, '_blank');
            break;
    }
}

function copyLink() {
    navigator.clipboard.writeText(window.location.href)
        .then(() => {
            const button = event.target.closest('button');
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="fas fa-check me-2"></i>Copied!';
            setTimeout(() => {
                button.innerHTML = originalText;
            }, 2000);
        })
        .catch(console.error);
}
</script>
@endsection