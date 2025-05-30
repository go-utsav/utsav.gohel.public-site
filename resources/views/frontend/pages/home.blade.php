@extends('frontend.layout')

@section('content')
<!-- Hero Section -->
<div class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-4">I Help Businesses Build Secure, Scalable Solutions</h1>
                <p class="lead mb-4">Transforming ideas into high-performance web applications and cloud infrastructure
                    that drives real business growth.</p>
                <p class="lead mb-4">Your startup idea, live in days—not months. Precision-built, launch-ready.</p>
                <div class="d-flex gap-3">
                    <a href="#portfolio" class="btn btn-primary">See My Work</a>
                    <a href="#contact" class="btn btn-outline-primary">Contact Me</a>
                </div>
            </div>
            <div class="col-lg-4 text-center mt-4 mt-lg-0">
                <img src="https://media.licdn.com/dms/image/v2/D4E03AQE49Af6T7Wr-w/profile-displayphoto-shrink_200_200/B4EZZsIKS8HcAY-/0/1745570801305?e=1753920000&v=beta&t=qi_xq3MuDLvcOkAW1Qk3l0JIi-R4ExV6b14YQCeDUbE"
                    alt="Utsav Gohel" class="img-fluid"
                    style="width: 250px; height: 250px; object-fit: cover; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Case Studies -->
<section id="portfolio" class="py-5">
    <div class="container">
        <h2 class="section-heading mb-4">Client Success Stories</h2>
        <div class="row g-4">
            <!-- E-Commerce Platform Case Study -->
            <div class="col-md-6">
                <div class="case-study-card">
                    <div class="case-study-image">
                        <span class="client-location"><i class="fas fa-globe-asia"></i> IN</span>
                        <img src="https://www.shutterstock.com/image-vector/online-store-ecommerce-mobile-app-260nw-1917442511.jpg"
                            alt="E-Commerce Platform" class="img-fluid">
                    </div>
                    <div class="case-study-content">
                        <h3>Premium Fashion E-Commerce Platform</h3>
                        <div class="tech-stack">
                            <span>React</span>
                            <span>Node.js</span>
                            <span>AWS</span>
                            <span>MongoDB</span>
                        </div>
                        <ul class="case-study-points">
                            <li><strong>Challenge:</strong> Legacy system with poor performance and scalability issues
                            </li>
                            <li><strong>Solution:</strong> Built a modern e-commerce platform with real-time inventory
                                and personalized recommendations</li>
                            <li><strong>Role:</strong> Lead Full Stack Developer & Cloud Architect</li>
                            <li><strong>Impact:</strong> 3x faster page loads, 40% increase in mobile conversions</li>
                        </ul>
                        <a href="/case-studies/fashion-ecommerce" class="btn btn-outline-primary">View Full Case Study
                            →</a>
                    </div>
                </div>
            </div>

            <!-- Cloud Infrastructure Case Study -->
            <div class="col-md-6">
                <div class="case-study-card">
                    <div class="case-study-image">
                        <span class="client-location"><i class="fas fa-globe-europe"></i> UK</span>
                        <img src="https://www.shutterstock.com/image-vector/cloud-computing-modern-flat-design-260nw-2227590831.jpg"
                            alt="Cloud Infrastructure" class="img-fluid">
                    </div>
                    <div class="case-study-content">
                        <h3>FinTech Cloud Migration</h3>
                        <div class="tech-stack">
                            <span>AWS</span>
                            <span>Terraform</span>
                            <span>Docker</span>
                            <span>Kubernetes</span>
                        </div>
                        <ul class="case-study-points">
                            <li><strong>Challenge:</strong> Complex on-premise infrastructure with high maintenance
                                costs</li>
                            <li><strong>Solution:</strong> Designed and implemented cloud-native architecture with
                                automated scaling</li>
                            <li><strong>Role:</strong> Lead Cloud Architect</li>
                            <li><strong>Impact:</strong> 60% reduction in infrastructure costs, 99.99% uptime achieved
                            </li>
                        </ul>
                        <a href="/case-studies/fintech-cloud" class="btn btn-outline-primary">View Full Case Study →</a>
                    </div>
                </div>
            </div>

            <!-- AI Dashboard Case Study -->
            <div class="col-md-6">
                <div class="case-study-card">
                    <div class="case-study-image">
                        <span class="client-location"><i class="fas fa-globe-americas"></i> US</span>
                        <img src="https://www.shutterstock.com/image-vector/dashboard-infographic-template-charts-graphs-260nw-1065822260.jpg"
                            alt="AI Analytics Dashboard" class="img-fluid">
                    </div>
                    <div class="case-study-content">
                        <h3>AI-Powered Analytics Platform</h3>
                        <div class="tech-stack">
                            <span>Python</span>
                            <span>TensorFlow</span>
                            <span>React</span>
                            <span>GCP</span>
                        </div>
                        <ul class="case-study-points">
                            <li><strong>Challenge:</strong> Manual data analysis causing delayed business decisions</li>
                            <li><strong>Solution:</strong> Built real-time analytics dashboard with predictive insights
                            </li>
                            <li><strong>Role:</strong> Technical Lead & ML Engineer</li>
                            <li><strong>Impact:</strong> 80% faster reporting, 45% improvement in prediction accuracy
                            </li>
                        </ul>
                        <a href="/case-studies/ai-analytics" class="btn btn-outline-primary">View Full Case Study →</a>
                    </div>
                </div>
            </div>

            <!-- Healthcare App Case Study -->
            <div class="col-md-6">
                <div class="case-study-card">
                    <div class="case-study-image">
                        <span class="client-location"><i class="fas fa-globe-asia"></i> SG</span>
                        <img src="https://www.shutterstock.com/image-vector/fitness-tracker-app-ui-ux-260nw-1388504049.jpg"
                            alt="Healthcare App" class="img-fluid">
                    </div>
                    <div class="case-study-content">
                        <h3>Healthcare Management Platform</h3>
                        <div class="tech-stack">
                            <span>Flutter</span>
                            <span>Firebase</span>
                            <span>Node.js</span>
                            <span>MongoDB</span>
                        </div>
                        <ul class="case-study-points">
                            <li><strong>Challenge:</strong> Fragmented patient data and appointment management</li>
                            <li><strong>Solution:</strong> Developed integrated healthcare platform with real-time
                                updates</li>
                            <li><strong>Role:</strong> Full Stack Developer</li>
                            <li><strong>Impact:</strong> 50% reduction in appointment no-shows, 90% patient satisfaction
                            </li>
                        </ul>
                        <a href="/case-studies/healthcare-platform" class="btn btn-outline-primary">View Full Case Study
                            →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust & Certification Section -->
<section class="py-4">
    <div class="container">
        <!-- Row 1: Heading -->
        <div class="text-center mb-4">
            <h2 class="h2 fw-bold">Industry Standards & Best Practices</h2>
            <p class="lead mb-0">Building with enterprise-grade security and scalability in mind</p>
        </div>

        <!-- Row 2: Trust Points -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="trust-item">
                    <i class="fas fa-shield-alt fa-2x text-primary"></i>
                    <div class="ms-3">
                        <h4 class="h5 mb-1">Security-First Approach</h4>
                        <p class="mb-0">OWASP guidelines & industry-standard encryption</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="trust-item">
                    <i class="fas fa-code-branch fa-2x text-primary"></i>
                    <div class="ms-3">
                        <h4 class="h5 mb-1">Clean Code Architecture</h4>
                        <p class="mb-0">SOLID principles & comprehensive testing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="trust-item">
                    <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    <div class="ms-3">
                        <h4 class="h5 mb-1">Performance Architect</h4>
                        <p class="mb-0">90+ PageSpeed & sub-second responses</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3: Certifications Slider -->
        <div class="certification-section mb-5">
            <div class="row align-items-center mb-3">
                <div class="col">
                    <h3 class="h4 mb-0">Professional Certifications</h3>
                </div>
                <div class="col-auto">
                    <span class="badge rounded-pill" style="background-color: black;">{{ count($certifiates) }}+
                        Active</span>
                </div>
            </div>

            <!-- Certification Slider -->
            <div class="position-relative">
                <div class="certification-slider overflow-hidden">
                    <div class="row flex-nowrap g-3" id="certSlider" style="transition: transform 0.3s ease;">
                        @foreach ($certifiates as $certifiate)
                        <div class="col-md-3">
                            <div class="cert-card position-relative d-flex flex-column">
                                <img src="{{ asset('storage/' . $certifiate->image) }}" alt="{{ $certifiate->title }}"
                                    class="img-fluid mb-2" style="height: 150px; width: 100%; object-fit: contain;">
                                <div class="cert-info d-flex flex-column flex-grow-1">
                                    <div class="mb-auto">
                                        <h5 class="mb-2" style="font-size: 0.9rem;">{{ $certifiate->title }}</h5>
                                        @if($certifiate->credential_id)
                                        <small class="text-muted d-block mb-2">ID:
                                            {{ $certifiate->credential_id }}</small>
                                        @endif
                                    </div>
                                    <div class="d-flex gap-2 mt-2">
                                        <a href="{{ route('certifiate-detail', $certifiate->slug) }}" class="btn btn-sm"
                                            style="background-color: white; color: black; border: 1px solid black; border-radius: 20px; font-size: 0.8rem;">
                                            Details
                                        </a>
                                        @if($certifiate->link)
                                        <a href="{{ $certifiate->link }}" target="_blank" rel="noopener noreferrer"
                                            class="btn btn-sm"
                                            style="background-color: black; color: white; border-radius: 20px; font-size: 0.8rem;">
                                            Verify
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Slider Controls -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        <button class="btn btn-sm me-2" id="prevCert"
                            style="background-color: white; color: black; border: 1px solid black; border-radius: 20px;">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-sm" id="nextCert"
                            style="background-color: white; color: black; border: 1px solid black; border-radius: 20px;">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <a href="{{ route('certifiate-grid') }}" class="btn btn-sm"
                        style="background-color: black; color: white; border-radius: 20px; padding: 0.5rem 1.5rem;">
                        View All Certifications →
                    </a>
                </div>
            </div>
        </div>

        <style>
        .cert-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s, box-shadow 0.2s;
            height: 100%;
            padding: 1rem;
        }

        .cert-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .certification-slider {
            position: relative;
            overflow: hidden;
        }

        #certSlider {
            transform: translateX(0);
        }
        </style>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('certSlider');
            const prevBtn = document.getElementById('prevCert');
            const nextBtn = document.getElementById('nextCert');
            let currentPosition = 0;
            const cardWidth = 25; // 25% as we're showing 4 cards
            const totalCards = {
                {
                    count($certifiates)
                }
            };
            const visibleCards = 4;
            const maxPosition = Math.max(0, totalCards - visibleCards);

            function updateSliderPosition() {
                slider.style.transform = `translateX(-${currentPosition * cardWidth}%)`;
            }

            prevBtn.addEventListener('click', () => {
                if (currentPosition > 0) {
                    currentPosition--;
                    updateSliderPosition();
                }
                updateButtonStates();
            });

            nextBtn.addEventListener('click', () => {
                if (currentPosition < maxPosition) {
                    currentPosition++;
                    updateSliderPosition();
                }
                updateButtonStates();
            });

            function updateButtonStates() {
                prevBtn.disabled = currentPosition === 0;
                nextBtn.disabled = currentPosition >= maxPosition;

                // Update button styles based on state
                [prevBtn, nextBtn].forEach(btn => {
                    if (btn.disabled) {
                        btn.style.opacity = '0.5';
                        btn.style.cursor = 'not-allowed';
                    } else {
                        btn.style.opacity = '1';
                        btn.style.cursor = 'pointer';
                    }
                });
            }

            // Initial button state
            updateButtonStates();
        });
        </script>

        <!-- Row 4: Standards Cards -->
        <div class="row g-3">
            <div class="col-md-3">
                <div class="standard-card">
                    <i class="fas fa-lock fa-lg text-primary"></i>
                    <h5>OWASP Top 10</h5>
                    <p>Security standards</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="standard-card">
                    <i class="fas fa-cloud fa-lg text-primary"></i>
                    <h5>Cloud Native</h5>
                    <p>CNCF practices</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="standard-card">
                    <i class="fas fa-code fa-lg text-primary"></i>
                    <h5>Clean Code</h5>
                    <p>SOLID & DRY</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="standard-card">
                    <i class="fas fa-tasks fa-lg text-primary"></i>
                    <h5>DevOps</h5>
                    <p>CI/CD pipeline</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About section -->
<section id="about" class="">
    <div class="container">
        <div class="about-wrapper p-4">
            <!-- Row 1: Header + CTA -->
            <div class="row align-items-center mb-4 ">
                <div class="col">
                    <h2 class="h2 fw-bold mb-0">About Me</h2>
                </div>
                <div class="col-auto">
                    <a href="{{ route('about') }}" class="btn btn-primary"
                        style="background-color: white; color: black; border-radius: 16px; padding: 10px 20px;">
                        📖 Read My Full Story
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Row 2: Content -->
            <div class="row">
                <div class="col-lg-12">
                    <p class="lead mb-3">Cloud architect by day, bug hunter by night. I turn coffee ☕ into code and
                        complex problems into elegant solutions. Think of me as your tech-savvy friend who's always up
                        for a good coding adventure!</p>
                    <p class=" " style="color: white;">From debugging sessions that feel like detective work to
                        architecting systems that make businesses smile - I bring both technical expertise and a dash of
                        joy to every project. Want to know what makes a cloud architect tick? Click that story button up
                        there! 🚀</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-6">
                <h2 class="section-heading">Technical Expertise</h2>
            </div>
            <div class="col-lg-6">
                <p class="lead text-muted">From cloud architecture to AI solutions, here's my tech arsenal</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Frontend Development -->
            <div class="col-md-6 col-lg-3">
                <div class="skill-card h-100">
                    <div class="skill-header mb-3">
                        <span class="skill-icon">🖥️</span>
                        <h3 class="h5">Frontend</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">HTML5</span>
                        <span class="skill-tag">CSS3</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">Bootstrap</span>
                        <span class="skill-tag">jQuery</span>
                        <span class="skill-tag">SASS</span>
                    </div>
                </div>
            </div>

            <!-- Backend Development -->
            <div class="col-md-6 col-lg-3">
                <div class="skill-card h-100">
                    <div class="skill-header mb-3">
                        <span class="skill-icon">⚡</span>
                        <h3 class="h5">Backend</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">Node.js</span>
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">PostgreSQL</span>
                        <span class="skill-tag">MongoDB</span>
                        <span class="skill-tag">Redis</span>
                        <span class="skill-tag">GraphQL</span>
                    </div>
                </div>
            </div>

            <!-- Cloud & Infrastructure -->
            <div class="col-md-6 col-lg-3">
                <div class="skill-card h-100">
                    <div class="skill-header mb-3">
                        <span class="skill-icon">☁️</span>
                        <h3 class="h5">Cloud</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">AWS</span>
                        <span class="skill-tag">GCP</span>
                        <span class="skill-tag">Azure</span>
                        <span class="skill-tag">Terraform</span>
                        <span class="skill-tag">Docker</span>
                        <span class="skill-tag">Kubernetes</span>
                    </div>
                </div>
            </div>

            <!-- DevOps & Security -->
            <div class="col-md-6 col-lg-3">
                <div class="skill-card h-100">
                    <div class="skill-header mb-3">
                        <span class="skill-icon">🔐</span>
                        <h3 class="h5">DevOps</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">CI/CD</span>
                        <span class="skill-tag">GitHub Actions</span>
                        <span class="skill-tag">Jenkins</span>
                        <span class="skill-tag">Security</span>
                        <span class="skill-tag">Monitoring</span>
                        <span class="skill-tag">Testing</span>
                    </div>
                </div>
            </div>

            <!-- Generative AI -->
            <div class="col-md-6 col-lg-3">
                <div class="skill-card h-100">
                    <div class="skill-header mb-3">
                        <span class="skill-icon">🤖</span>
                        <h3 class="h5">Gen AI</h3>
                    </div>
                    <div class="skill-tags">
                        <span class="skill-tag">AWS Bedrock</span>
                        <span class="skill-tag">OpenAI</span>
                        <span class="skill-tag">LLaMA</span>
                        <span class="skill-tag">RAG</span>
                        <span class="skill-tag">Token Control</span>
                        <span class="skill-tag">Prompt Eng.</span>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-3 ">
    <div class="container" style="background-color: #f8f9fa; border-radius: 16px; padding: 20px;">
        <!-- Section Header -->
        <div class="row align-items-center mb-4">
            <div class="col-lg-6">
                <h2 class="section-heading mb-2">Featured Projects</h2>
                <p class="text-muted">Explore some of my recent work and technical implementations</p>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a href="{{ route('projects-grid') }}" class="btn btn-dark rounded-pill">
                    View All Projects <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4">
            @foreach ($projects->take(3) as $project)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm project-card">
                    <!-- Project Image -->
                    <div class="position-relative">
                        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top"
                            alt="{{ $project->title }}"
                            style="height: 200px; object-fit: contain; background-color: white;">
                        @if($project->featured)
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-dark">Featured</span>
                        </div>
                        @endif
                    </div>

                    <!-- Project Info -->
                    <div class="card-body d-flex flex-column">
                        <h3 class="h5 mb-3">{{ $project->title }}</h3>
                        <p class="card-text text-muted flex-grow-1">{{ Str::limit($project->excerpt, 100) }}</p>

                        @if($project->tech_stack)
                        <div class="tech-stack mb-3">
                            @foreach(array_slice(explode(',', $project->tech_stack), 0, 3) as $tech)
                            <span class="badge bg-light text-dark me-1">{{ trim($tech) }}</span>
                            @endforeach
                            @if(count(explode(',', $project->tech_stack)) > 3)
                            <span
                                class="badge bg-light text-dark">+{{ count(explode(',', $project->tech_stack)) - 3 }}</span>
                            @endif
                        </div>
                        @endif

                        <div class="mt-auto">
                            <a href="{{ route('project-detail', $project->slug) }}"
                                class="btn btn-link text-dark p-0 text-decoration-none">
                                View Project Details <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Call to Action -->

    </div>
</section>

<!-- Project CTA Section -->
<section id="testimonials" class="p-4">
    <div class="container" style="background-color: black; border-radius: 16px; padding: 40px;">
        <div class="row align-items-center">
            <!-- Left Column: Text -->
            <div class="col-lg-8">
                <h3 class="h3 mb-2 text-white">Have a project in mind?</h3>
                <p class="mb-0 text-white-50">Let's discuss how we can work together to create something amazing.</p>
            </div>
            <!-- Right Column: CTA Button -->
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="#contact" class="btn btn-light rounded-pill px-4 py-2">
                    Start a Conversation <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonials Section -->
<section class="testimonials-section py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center ">
            <h2 class="h2 fw-bold">Trusted by Industry Leaders</h2>
            <p class="lead text-muted">Feedback from C-level clients & startups who've worked with Utsav</p>
        </div>

        <!-- Stats Bar -->
        <div class="stats-bar mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex flex-wrap justify-content-between align-items-center text-center text-md-start">
                        <div class="stats-item">
                            <i class="fas fa-check-circle text-success"></i>
                            <span>100% Project Success</span>
                        </div>
                        <div class="stats-item">
                            <i class="fas fa-handshake text-primary"></i>
                            <span>50+ Happy Clients</span>
                        </div>
                        <div class="stats-item">
                            <i class="fas fa-star text-warning"></i>
                            <span>4.9 Rating</span>
                        </div>
                        <div class="stats-item">
                            <i class="fas fa-globe text-info"></i>
                            <span>Worldwide Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial Grid -->
        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-md-4">
                <div class="testimonial-card h-100">
                    <div class="client-identity">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://ui-avatars.com/api/?name=Rahul+S&background=random" alt="Rahul S."
                                class="client-image">
                            <div class="ms-3">
                                <h5 class="client-name mb-1">Rahul S.</h5>
                                <p class="client-position mb-1">CTO, FinTech Startup</p>
                                <div class="client-location">
                                    <img src="https://flagcdn.com/16x12/in.png" alt="India" class="flag-icon">
                                    <span>Mumbai, India</span>
                                </div>
                            </div>
                        </div>
                        <div class="client-links mb-3">
                            <a href="https://linkedin.com/in/rahul" class="btn btn-sm btn-outline-secondary me-2">
                                <i class="fab fa-linkedin"></i> LinkedIn
                            </a>
                            <a href="https://company.com" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-building"></i> Company
                            </a>
                        </div>
                    </div>

                    <blockquote class="testimonial-quote">
                        "Utsav built a secure backend system for our fintech app. On-time, on-budget, zero BS."
                    </blockquote>

                    <div class="tech-focus mt-3 mb-3">
                        <p class="text-muted mb-2">Tech Stack / Focus Areas:</p>
                        <div class="tech-tags">
                            <span>🛡️ Fintech</span>
                            <span>🔒 Security</span>
                            <span>☁️ AWS</span>
                        </div>
                    </div>

                    <div class="testimonial-links">
                        <a href="/case-studies/fintech" class="text-decoration-underline me-3">
                            📄 View Full Case Study
                        </a>
                        <a href="#" class="text-decoration-underline">
                            🔗 LinkedIn Testimonial
                        </a>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="testimonial-card h-100">
                    <div class="client-identity">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://ui-avatars.com/api/?name=James+T&background=random" alt="James T."
                                class="client-image">
                            <div class="ms-3">
                                <h5 class="client-name mb-1">James T.</h5>
                                <p class="client-position mb-1">Head of Engineering</p>
                                <div class="client-location">
                                    <img src="https://flagcdn.com/16x12/gb.png" alt="UK" class="flag-icon">
                                    <span>London, UK</span>
                                </div>
                            </div>
                        </div>
                        <div class="client-links mb-3">
                            <a href="https://linkedin.com/in/james" class="btn btn-sm btn-outline-secondary me-2">
                                <i class="fab fa-linkedin"></i> LinkedIn
                            </a>
                            <a href="https://company.com" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-building"></i> Company
                            </a>
                        </div>
                    </div>

                    <blockquote class="testimonial-quote">
                        "Top-notch cloud skills. Automated our infrastructure and reduced monthly spend by 25%."
                    </blockquote>

                    <div class="tech-focus mt-3 mb-3">
                        <p class="text-muted mb-2">Tech Stack / Focus Areas:</p>
                        <div class="tech-tags">
                            <span>🚀 DevOps</span>
                            <span>💰 Cost Optimization</span>
                            <span>🤖 Automation</span>
                        </div>
                    </div>

                    <div class="testimonial-links">
                        <a href="/case-studies/cloud" class="text-decoration-underline me-3">
                            📄 View Full Case Study
                        </a>
                        <a href="#" class="text-decoration-underline">
                            🔗 LinkedIn Testimonial
                        </a>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="testimonial-card h-100">
                    <div class="client-identity">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://ui-avatars.com/api/?name=Sarah+M&background=random" alt="Sarah M."
                                class="client-image">
                            <div class="ms-3">
                                <h5 class="client-name mb-1">Sarah M.</h5>
                                <p class="client-position mb-1">Product Manager</p>
                                <div class="client-location">
                                    <img src="https://flagcdn.com/16x12/sg.png" alt="Singapore" class="flag-icon">
                                    <span>Singapore</span>
                                </div>
                            </div>
                        </div>
                        <div class="client-links mb-3">
                            <a href="https://linkedin.com/in/sarah" class="btn btn-sm btn-outline-secondary me-2">
                                <i class="fab fa-linkedin"></i> LinkedIn
                            </a>
                            <a href="https://company.com" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-building"></i> Company
                            </a>
                        </div>
                    </div>

                    <blockquote class="testimonial-quote">
                        "Transformed our legacy app into a modern platform. Launched 2 months ahead of schedule."
                    </blockquote>

                    <div class="tech-focus mt-3 mb-3">
                        <p class="text-muted mb-2">Tech Stack / Focus Areas:</p>
                        <div class="tech-tags">
                            <span>💻 Full Stack</span>
                            <span>🔄 Migration</span>
                            <span>⚛️ React</span>
                        </div>
                    </div>

                    <div class="testimonial-links">
                        <a href="/case-studies/migration" class="text-decoration-underline me-3">
                            📄 View Full Case Study
                        </a>
                        <a href="#" class="text-decoration-underline">
                            🔗 LinkedIn Testimonial
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Reviews Link -->
        <div class="text-center mt-5">
            <a href="https://g.page/your-business" class="google-reviews-link" target="_blank">
                <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png"
                    alt="Google" height="20" class="me-2">
                <span>Read All Verified Google Reviews →</span>
            </a>
        </div>
    </div>
</section>

@endsection

<style>
.project-card {
    transition: transform 0.2s ease-in-out;
}

.project-card:hover {
    transform: translateY(-5px);
}

.tech-stack .badge {
    font-size: 0.75rem;
    font-weight: normal;
    padding: 0.4rem 0.8rem;
}

.btn-link:hover {
    text-decoration: underline !important;
}

@media (max-width: 991.98px) {
    .text-lg-end {
        text-align: left !important;
        margin-top: 1rem;
    }
}
</style>