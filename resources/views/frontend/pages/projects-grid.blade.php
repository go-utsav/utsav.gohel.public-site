@extends('frontend.layout')

@section('content')
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <!-- Optimized Header Section -->
        <div class="row align-items-center mb-4">
            <div class="col-lg-8">
                <div class="d-flex flex-column">
                    <h2 class="section-heading mb-2">Projects</h2>
                    <p class="lead text-muted mb-0" style="font-size: 1rem;">Explore my latest work and technical projects</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0" style="border-radius: 20px 0 0 20px;">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="text" 
                           id="projectSearch" 
                           class="form-control border-start-0 ps-0" 
                           placeholder="Search projects..."
                           style="border-radius: 0 20px 20px 0;">
                </div>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4" id="projectsGrid">
            @foreach ($projects as $project)
                <div class="col-md-6 col-lg-4 project-item" 
                     data-title="{{ strtolower($project->title) }}"
                     data-description="{{ strtolower($project->excerpt) }}">
                    <div class="card h-100 border-0 shadow-sm">
                        <!-- Project Image -->
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $project->image) }}" 
                                 class="card-img-top p-0" 
                                 alt="{{ $project->title }}"
                                 style="height: 200px; object-fit: contain; padding: 1.5rem; background-color: white;">
                            @if($project->featured)
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge" style="background-color: black;">Featured</span>
                            </div>
                            @endif
                        </div>
                        
                        <!-- Card Content Wrapper -->
                        <div class="card-body d-flex flex-column" style="background-color: white;">
                            <!-- Project Details -->
                            <div class="text-left mb-auto">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="card-title mb-0">{{ $project->title }}</h5>
                                    
                                </div>
                                <p class="card-text text-muted">{{ $project->excerpt }}</p>
                                @if($project->tech_stack)
                                <div class="tech-stack mt-2">
                                    @foreach(explode(',', $project->tech_stack) as $tech)
                                    <span class="badge bg-light text-dark me-1 mb-1">{{ trim($tech) }}</span>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            
                            <!-- Action Button - Always at Bottom -->
                            <div class="text-left mt-3" >
                                <a href="{{ route('project-detail', $project->slug) }}" 
                                   class="btn btn-sm" 
                                   style="background-color: black; color: white; border-radius: 20px; padding: 0.2rem 0.8rem;">
                                    View Project Details →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Empty State (if no projects) -->
        <div id="noResults" class="text-center py-5 d-none">
            <p class="text-muted">No projects match your search.</p>
        </div>

        @if(count($projects) === 0)
            <div class="text-center py-5">
                <p class="text-muted">No projects available at the moment.</p>
            </div>
        @endif
    </div>
</section>

<style>
.project-item {
    transition: transform 0.2s ease-in-out;
}

.project-item:hover {
    transform: translateY(-5px);
}

#projectSearch {
    transition: box-shadow 0.2s ease-in-out;
}

#projectSearch:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.1);
    border-color: #ced4da;
}

.tech-stack .badge {
    font-size: 0.75rem;
    font-weight: normal;
}

.badge.bg-success-subtle {
    background-color: #d1e7dd !important;
}

@media (max-width: 991.98px) {
    .row.align-items-center.mb-4 {
        gap: 1rem;
    }
}
</style>

<!-- Search Functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('projectSearch');
    const projectItems = document.querySelectorAll('.project-item');
    const noResults = document.getElementById('noResults');
    let searchTimeout;

    function normalizeText(text) {
        return text.toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '') // Remove diacritics
            .replace(/[^a-z0-9\s]/g, ''); // Remove special characters
    }

    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);

        searchTimeout = setTimeout(() => {
            const searchTerm = normalizeText(this.value.trim());
            let hasResults = false;

            projectItems.forEach(item => {
                const title = normalizeText(item.dataset.title);
                const description = normalizeText(item.dataset.description);
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    item.style.display = '';
                    hasResults = true;
                } else {
                    item.style.display = 'none';
                }
            });

            // Toggle no results message
            noResults.classList.toggle('d-none', hasResults);

            // Add animation class to visible items
            projectItems.forEach(item => {
                if (item.style.display !== 'none') {
                    item.style.opacity = '0';
                    setTimeout(() => {
                        item.style.transition = 'opacity 0.3s ease-in';
                        item.style.opacity = '1';
                    }, 50);
                }
            });
        }, 300);
    });

    // Clear search on 'x' button click
    searchInput.addEventListener('search', function() {
        if (this.value === '') {
            projectItems.forEach(item => {
                item.style.display = '';
            });
            noResults.classList.add('d-none');
        }
    });
});
</script>
@endsection
