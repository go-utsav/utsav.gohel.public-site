@extends('frontend.layout')

@section('content')
<!-- Portfolio Case Studies -->
<section id="portfolio" class="py-5">
    <div class="container">
        <h2 class="section-heading mb-4">Client Success Stories</h2>
        <div class="row g-4">

            @foreach ($caseStudies as $caseStudy)
            <!-- E-Commerce Platform Case Study -->
            <div class="col-md-6">
                <div class="case-study-card">
                    <div class="case-study-image">
                        <span class="client-location"><i class="fas fa-globe-asia"></i> IN</span>
                        <img src="{{ asset('storage/' . $caseStudy->cover_image) }}"
                            alt="E-Commerce Platform" class="img-fluid">
                    </div>
                    <div class="case-study-content">
                        <h3>{{ $caseStudy->title }}</h3>
                        <div class="tech-stack">
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
                        <ul class="case-study-points">
                            <li><strong>Challenge:</strong> {{ $caseStudy->challenge }}</li>
                            <li><strong>Solution:</strong> {{ $caseStudy->solution }}</li>
                            <li><strong>Role:</strong> {{ $caseStudy->role }}</li>
                            <li><strong>Impact:</strong> {{ $caseStudy->impact }}</li>
                        </ul>
                            <a href="{{ route('case-study-detail', $caseStudy->slug) }}" class="btn btn-outline-primary">View Full Case Study
                            →</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<style>
.case-study-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    height: 100%;
}

.case-study-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.12);
}

.case-study-image {
    position: relative;
    width: 100%;
    height: 240px;
    overflow: hidden;
}

.case-study-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.client-location {
    position: absolute;
    top: 16px;
    right: 16px;
    background: rgba(255, 255, 255, 0.95);
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 500;
    color: #1a1a1a;
    z-index: 1;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.case-study-content {
    padding: 24px;
}

.case-study-content h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 16px;
    color: #1a1a1a;
}

.tech-stack {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 20px;
}

.tech-stack .badge {
    font-size: 0.85rem;
    font-weight: 500;
    padding: 6px 12px;
    border-radius: 16px;
    background-color: #f0f0f0;
    color: #333;
    border: 1px solid #e0e0e0;
}

.case-study-points {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
}

.case-study-points li {
    margin-bottom: 12px;
    padding-left: 24px;
    position: relative;
    line-height: 1.5;
}

.case-study-points li:before {
    content: "•";
    position: absolute;
    left: 8px;
    color: #1a1a1a;
}

.case-study-points li strong {
    color: #1a1a1a;
    font-weight: 600;
}

.btn-outline-primary {
    color: #1a1a1a;
    border-color: #1a1a1a;
    padding: 8px 20px;
    border-radius: 20px;
    transition: all 0.3s ease;
}

.btn-outline-primary:hover {
    background-color: #1a1a1a;
    color: white;
    border-color: #1a1a1a;
}
</style>

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