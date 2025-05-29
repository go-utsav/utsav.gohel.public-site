@extends('frontend.layout')

@section('content')
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <!-- Section Header -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-heading">Professional Certifications</h2>
                <p class="lead text-muted">Industry-recognized certifications and achievements</p>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="row mb-4">
            <div class="col-md-6 mx-auto">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="text" 
                           id="certificateSearch" 
                           class="form-control border-start-0 ps-0" 
                           placeholder="Search certifications..."
                           style="border-radius: 0 20px 20px 0;">
                </div>
            </div>
        </div>

        <!-- Certificates Grid -->
        <div class="row g-4" id="certificatesGrid">
            @foreach ($posts as $post)
                <div class="col-md-6 col-lg-4 certificate-item" 
                     data-title="{{ strtolower($post->title) }}"
                     data-description="{{ strtolower($post->description) }}">
                    <div class="card h-100 border-0 shadow-sm">
                        <!-- Certificate Image -->
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $post->image) }}" 
                                 class="card-img-top" 
                                 alt="{{ $post->title }}"
                                 style="height: 200px; object-fit: contain; padding: 1.5rem; background-color: white;">
                        </div>
                        
                        <!-- Card Content Wrapper -->
                        <div class="card-body d-flex flex-column" style="background-color: white;">
                            <!-- Certificate Details -->
                            <div class="text-center mb-auto">
                                <h5 class="card-title mb-3">{{ $post->title }}</h5>
                                <p class="card-text text-muted">{{ $post->description }}</p>
                            </div>
                            
                            <!-- Action Button - Always at Bottom -->
                            <div class="text-center mt-3">
                                <a href="{{ route('certifiate-detail', $post->slug) }}" 
                                   class="btn btn-sm" 
                                   style="background-color: black; color: white; border-radius: 20px; padding: 0.5rem 1.5rem;"
                                   target="_blank">
                                    View Certificate →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Empty State (if no certificates) -->
        <div id="noResults" class="text-center py-5 d-none">
            <p class="text-muted">No certificates match your search.</p>
        </div>

        @if(count($posts) === 0)
            <div class="text-center py-5">
                <p class="text-muted">No certificates available at the moment.</p>
            </div>
        @endif
    </div>
</section>

<!-- Search Functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('certificateSearch');
    const certificateItems = document.querySelectorAll('.certificate-item');
    const noResults = document.getElementById('noResults');
    let searchTimeout;

    searchInput.addEventListener('input', function() {
        // Clear the previous timeout
        clearTimeout(searchTimeout);

        // Set a new timeout to delay the search
        searchTimeout = setTimeout(() => {
            const searchTerm = this.value.toLowerCase().trim();
            let hasResults = false;

            certificateItems.forEach(item => {
                const title = item.dataset.title;
                const description = item.dataset.description;
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    item.style.display = '';
                    hasResults = true;
                } else {
                    item.style.display = 'none';
                }
            });

            // Toggle no results message
            noResults.classList.toggle('d-none', hasResults);
        }, 300); // 300ms delay for better performance
    });
});
</script>
@endsection
