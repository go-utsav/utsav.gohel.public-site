@extends('frontend.layout')

@section('content')
<section class="services-section py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-heading">Expert Solutions & Services</h2>
                <p class="lead">Transform your ideas into powerful digital solutions</p>
            </div>
        </div>

        <!-- Service Categories -->
        <div class="service-filters mb-4">
            <div class="d-flex justify-content-center flex-wrap gap-2">
                <button class="filter-btn active" data-filter="all">All Services</button>
                <button class="filter-btn" data-filter="development">Development</button>
                <button class="filter-btn" data-filter="cloud">Cloud & DevOps</button>
                <button class="filter-btn" data-filter="consulting">Consulting</button>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="row g-4" id="servicesGrid">
            @foreach ($posts as $post)
            <div class="col-md-6 col-lg-4 service-item">
                <div class="service-card">
                    <div class="service-card-inner">
                        <!-- Service Header -->
                        <div class="service-header">
                            <h3 class="service-title">{{ $post->title }}</h3>
                            <div class="service-tag">Most Popular</div>
                        </div>

                        <!-- Service Description -->
                        <div class="service-description">
                            <p>{{ $post->description }}</p>
                        </div>

                        <!-- Key Benefits -->
                        <div class="service-benefits">
                            <h4>What's Included:</h4>
                            <ul>
                                @php
                                    $benefits = explode("\n", $post->benefits ?? "Quick Delivery\nProfessional Support\n24/7 Assistance");
                                @endphp
                                @foreach($benefits as $benefit)
                                    @if(trim($benefit))
                                        <li><i class="fas fa-check-circle"></i> {{ trim($benefit) }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <!-- Pricing Section -->
                        <div class="service-pricing">
                            <div class="price-tag">
                                <span class="currency">£</span>
                                <span class="amount">{{ $post->Fees }}</span>
                                <span class="duration">/project</span>
                            </div>
                            <p class="price-note">*Final price may vary based on project requirements</p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="service-actions">
                            <a href="{{ route('service-detail', $post->slug) }}" class="btn btn-outline-primary">
                                View Details
                            </a>
                            <a href="#contact" class="btn btn-primary">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Value Proposition Section -->
        <div class="value-props mt-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="value-prop-item">
                        <i class="fas fa-rocket"></i>
                        <h4>Fast Delivery</h4>
                        <p>Quick turnaround without compromising quality</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-prop-item">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Guaranteed Quality</h4>
                        <p>Industry best practices and secure development</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-prop-item">
                        <i class="fas fa-headset"></i>
                        <h4>24/7 Support</h4>
                        <p>Dedicated assistance throughout the project</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.services-section {
    background: linear-gradient(to right, rgba(255, 222, 89, 0.05), rgba(255, 145, 77, 0.05));
}

.section-heading {
    color: #1a1a1a;
    border-bottom: 4px solid;
    border-image: var(--brand-gradient) 1;
    display: inline-block;
    margin-bottom: 0.5rem;
    padding-bottom: 0.5rem;
}

.filter-btn {
    padding: 0.5rem 1.5rem;
    border: 1px solid rgba(255, 145, 77, 0.2);
    background: white;
    border-radius: 25px;
    color: #1a1a1a;
    transition: all 0.3s ease;
}

.filter-btn:hover,
.filter-btn.active {
    background: var(--brand-gradient);
    border-color: transparent;
    color: #1a1a1a;
    transform: translateY(-2px);
}

.service-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    border: 1px solid rgba(255, 145, 77, 0.1);
}

.service-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(255, 145, 77, 0.15);
    border-color: var(--brand-end);
}

.service-card-inner {
    padding: 2rem;
}

.service-header {
    position: relative;
    margin-bottom: 1.5rem;
}

.service-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1a1a1a;
    margin-bottom: 0.5rem;
}

.service-tag {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    background: var(--brand-gradient);
    color: #1a1a1a;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.service-description {
    color: #666;
    margin-bottom: 1.5rem;
}

.service-benefits {
    margin-bottom: 1.5rem;
}

.service-benefits h4 {
    font-size: 1rem;
    margin-bottom: 1rem;
    color: #1a1a1a;
}

.service-benefits ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.service-benefits li {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
    color: #666;
}

.service-benefits i {
    color: var(--brand-end);
    margin-right: 0.5rem;
}

.service-pricing {
    text-align: center;
    margin: 1.5rem 0;
    padding: 1rem;
    background: linear-gradient(to right, rgba(255, 222, 89, 0.1), rgba(255, 145, 77, 0.1));
    border-radius: 12px;
}

.price-tag {
    font-size: 2rem;
    font-weight: 600;
    color: #1a1a1a;
}

.price-tag .currency {
    font-size: 1.25rem;
    vertical-align: super;
}

.price-tag .duration {
    font-size: 1rem;
    color: #666;
    font-weight: normal;
}

.price-note {
    font-size: 0.8rem;
    color: #666;
    margin: 0.5rem 0 0;
}

.service-actions {
    display: flex;
    gap: 1rem;
}

.service-actions .btn {
    flex: 1;
    padding: 0.75rem 1rem;
    border-radius: 25px;
    font-weight: 500;
}

.value-props {
    text-align: center;
}

.value-prop-item {
    padding: 2rem;
    background: white;
    border-radius: 16px;
    transition: all 0.3s ease;
    height: 100%;
    border: 1px solid rgba(255, 145, 77, 0.1);
}

.value-prop-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(255, 145, 77, 0.1);
}

.value-prop-item i {
    font-size: 2rem;
    margin-bottom: 1rem;
    background: var(--brand-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.value-prop-item h4 {
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
    color: #1a1a1a;
}

.value-prop-item p {
    color: #666;
    margin: 0;
    font-size: 0.9rem;
}

@media (max-width: 768px) {
    .service-card-inner {
        padding: 1.5rem;
    }
    
    .service-actions {
        flex-direction: column;
    }
    
    .price-tag {
        font-size: 1.75rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            const services = document.querySelectorAll('.service-item');
            
            services.forEach(service => {
                if (filter === 'all') {
                    service.style.display = '';
                } else {
                    service.style.display = service.classList.contains(filter) ? '' : 'none';
                }
            });
        });
    });
});
</script>
@endsection
