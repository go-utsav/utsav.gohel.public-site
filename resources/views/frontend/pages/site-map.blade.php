@extends('frontend.layout')

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Header -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="h2 mb-3">Site Map</h1>
                <p class="lead text-muted">Complete overview of all pages and resources available on this site.</p>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="text" 
                           id="siteSearch" 
                           class="form-control border-start-0 ps-0" 
                           placeholder="Search pages, projects, certifications..."
                           style="border-radius: 0 20px 20px 0;">
                </div>
                <div id="searchFeedback" class="text-muted text-center mt-2" style="display: none;">
                    <small>No results found</small>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Main Navigation -->
            <div class="col-md-4 searchable-section">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="h5 mb-3">
                            <i class="fas fa-compass me-2 text-primary"></i>
                            Main Navigation
                        </h2>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2 searchable-item" data-search="home homepage main landing">
                                <a href="{{ route('home') }}" class="text-decoration-none text-dark d-flex align-items-center">
                                    <i class="fas fa-home me-2 text-muted"></i>
                                    Home
                                </a>
                            </li>
                            <li class="mb-2 searchable-item" data-search="about me profile information">
                                <a href="{{ route('about') }}" class="text-decoration-none text-dark d-flex align-items-center">
                                    <i class="fas fa-user me-2 text-muted"></i>
                                    About
                                </a>
                            </li>
                            <li class="mb-2 searchable-item" data-search="projects portfolio work case studies">
                                <a href="{{ route('projects-grid') }}" class="text-decoration-none text-dark d-flex align-items-center">
                                    <i class="fas fa-project-diagram me-2 text-muted"></i>
                                    Projects
                                </a>
                            </li>
                            <li class="mb-2 searchable-item" data-search="certificates certifications achievements awards">
                                <a href="{{ route('certifiate-grid') }}" class="text-decoration-none text-dark d-flex align-items-center">
                                    <i class="fas fa-certificate me-2 text-muted"></i>
                                    Certifications
                                </a>
                            </li>
                            <li class="searchable-item" data-search="contact message email reach out">
                                <a href="#contact" class="text-decoration-none text-dark d-flex align-items-center">
                                    <i class="fas fa-envelope me-2 text-muted"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Projects -->
            <div class="col-md-4 searchable-section">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="h5 mb-3">
                            <i class="fas fa-laptop-code me-2 text-primary"></i>
                            Latest Projects
                        </h2>
                        <ul class="list-unstyled mb-0">
                            @foreach($projects as $project)
                            <li class="mb-2 searchable-item" data-search="{{ strtolower($project->title) }} {{ strtolower($project->excerpt) }} project">
                                <a href="{{ route('project-detail', $project->slug) }}" 
                                   class="text-decoration-none text-dark d-flex align-items-center">
                                    <i class="fas fa-angle-right me-2 text-muted"></i>
                                    {{ $project->title }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Certificates -->
            <div class="col-md-4 searchable-section">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="h5 mb-3">
                            <i class="fas fa-award me-2 text-primary"></i>
                            Latest Certifications
                        </h2>
                        <ul class="list-unstyled mb-0">
                            @foreach($certificates as $certificate)
                            <li class="mb-2 searchable-item" data-search="{{ strtolower($certificate->title) }} certificate certification">
                                <a href="{{ route('certifiate-detail', $certificate->slug) }}" 
                                   class="text-decoration-none text-dark d-flex align-items-center">
                                    <i class="fas fa-angle-right me-2 text-muted"></i>
                                    {{ $certificate->title }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-12 searchable-section">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="h5 mb-3">
                            <i class="fas fa-bolt me-2 text-primary"></i>
                            Quick Actions
                        </h2>
                        <div class="row g-3">
                            <div class="col-md-4 searchable-item" data-search="schedule book call meeting appointment calendly">
                                <a href="https://calendly.com/utsavgohel-ug/30min" 
                                   target="_blank"
                                   class="btn btn-outline-dark btn-sm d-flex align-items-center justify-content-center">
                                    <i class="far fa-calendar-check me-2"></i>
                                    Schedule a Call
                                </a>
                            </div>
                            <div class="col-md-4 searchable-item" data-search="linkedin social network professional connect">
                                <a href="https://www.linkedin.com/in/utsav-gohel-cloud/" 
                                   target="_blank"
                                   class="btn btn-outline-dark btn-sm d-flex align-items-center justify-content-center">
                                    <i class="fab fa-linkedin me-2"></i>
                                    Connect on LinkedIn
                                </a>
                            </div>
                            <div class="col-md-4 searchable-item" data-search="github code repository source development">
                                <a href="https://github.com/go-utsav" 
                                   target="_blank"
                                   class="btn btn-outline-dark btn-sm d-flex align-items-center justify-content-center">
                                    <i class="fab fa-github me-2"></i>
                                    View GitHub Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.card {
    transition: transform 0.2s ease;
}

.card:hover {
    transform: translateY(-2px);
}

.list-unstyled li a {
    transition: all 0.2s ease;
    padding: 0.5rem;
    border-radius: 4px;
}

.list-unstyled li a:hover {
    background-color: #f8f9fa;
    padding-left: 1rem;
}

.btn-outline-dark {
    border-radius: 20px;
    padding: 0.5rem 1rem;
}

.searchable-item {
    transition: opacity 0.3s ease;
}

.searchable-item.hidden {
    display: none;
}

.searchable-section.hidden {
    display: none;
}

#siteSearch {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group-text {
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('siteSearch');
    const searchFeedback = document.getElementById('searchFeedback');
    const searchableItems = document.querySelectorAll('.searchable-item');
    const searchableSections = document.querySelectorAll('.searchable-section');

    function normalizeString(str) {
        return str.toLowerCase()
                 .normalize('NFD')
                 .replace(/[\u0300-\u036f]/g, '')
                 .replace(/[^a-z0-9\s]/g, '');
    }

    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    const performSearch = debounce(function(searchTerm) {
        searchTerm = normalizeString(searchTerm);
        let hasResults = false;
        
        // Reset sections
        searchableSections.forEach(section => {
            section.classList.remove('hidden');
        });

        // Search items
        searchableItems.forEach(item => {
            const searchData = normalizeString(item.dataset.search);
            if (searchTerm === '' || searchData.includes(searchTerm)) {
                item.classList.remove('hidden');
                hasResults = true;
            } else {
                item.classList.add('hidden');
            }
        });

        // Hide empty sections
        searchableSections.forEach(section => {
            const visibleItems = section.querySelectorAll('.searchable-item:not(.hidden)');
            if (visibleItems.length === 0) {
                section.classList.add('hidden');
            }
        });

        // Show/hide feedback
        if (!hasResults && searchTerm !== '') {
            searchFeedback.style.display = 'block';
            searchFeedback.innerHTML = `<small>No results found for "${searchInput.value}"</small>`;
        } else {
            searchFeedback.style.display = 'none';
        }
    }, 300);

    searchInput.addEventListener('input', function() {
        performSearch(this.value);
    });
});
</script>
@endsection 