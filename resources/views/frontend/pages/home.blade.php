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
                    <span class="badge bg-primary rounded-pill">7+ Active</span>
                </div>
            </div>
            
            <!-- Certification Slider -->
            <div class="position-relative">
                <div class="certification-slider">
                    <div class="row g-3">
                        <!-- AWS Solutions Architect -->
                        <div class="col-md-3">
                            <a href="https://www.credly.com/org/amazon-web-services/badge/aws-certified-solutions-architect-associate" 
                               class="cert-card" target="_blank">
                                <img src="https://images.credly.com/size/340x340/images/0e284c3f-5164-4b21-8660-0d84737941bc/image.png"
                                     alt="AWS Solutions Architect">
                                <div class="cert-info">
                                    <h5>Solutions Architect</h5>
                                    <span>AWS Associate</span>
                                </div>
                            </a>
                        </div>
                        <!-- Azure Expert -->
                        <div class="col-md-3">
                            <a href="https://learn.microsoft.com/en-us/certifications/azure-solutions-architect/" 
                               class="cert-card" target="_blank">
                                <img src="https://images.credly.com/size/340x340/images/987adb7e-49be-4e24-b67e-55986bd3fe66/azure-solutions-architect-expert-600x600.png"
                                     alt="Azure Expert">
                                <div class="cert-info">
                                    <h5>Solutions Architect</h5>
                                    <span>Azure Expert</span>
                                </div>
                            </a>
                        </div>
                        <!-- Terraform -->
                        <div class="col-md-3">
                            <a href="https://www.credly.com/org/hashicorp/badge/hashicorp-certified-terraform-associate" 
                               class="cert-card" target="_blank">
                                <img src="https://images.credly.com/size/340x340/images/99289602-861e-4929-8277-773e63a2fa6f/image.png"
                                     alt="Terraform">
                                <div class="cert-info">
                                    <h5>Terraform Associate</h5>
                                    <span>HashiCorp</span>
                                </div>
                            </a>
                        </div>
                        <!-- Kubernetes -->
                        <div class="col-md-3">
                            <a href="https://www.credly.com/org/the-linux-foundation/badge/ckad-certified-kubernetes-application-developer" 
                               class="cert-card" target="_blank">
                                <img src="https://images.credly.com/size/340x340/images/f88d800c-5261-45c6-9515-0458e31c3e16/ckad_from_cncfsite.png"
                                     alt="CKAD">
                                <div class="cert-info">
                                    <h5>CKAD</h5>
                                    <span>Kubernetes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Slider Controls -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        <button class="btn btn-sm btn-outline-primary me-2" id="prevCert">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-primary" id="nextCert">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <a href="/certifications" class="btn btn-link text-dark">View All Certifications →</a>
                </div>
            </div>
        </div>

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

<!-- About Section -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="mb-4">About Me</h2>
                <p class="lead mb-4">A passionate Full Stack Developer and Cloud Architect with a drive for creating
                    innovative solutions that make a difference.</p>
                <p class="mb-4">With over 5 years of experience in the tech industry, I've developed a deep
                    understanding of both frontend and backend technologies, along with cloud architecture. I believe in
                    writing clean, maintainable code and creating user-centric applications that solve real-world
                    problems.</p>
                <p class="mb-4">When I'm not coding, you'll find me exploring new technologies, contributing to
                    open-source projects, or sharing my knowledge through technical writing and mentoring.</p>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 bg-white">
                    <div class="card-body p-4">
                        <h3 class="h4 mb-4">Education & Certifications</h3>

                        <!-- Education -->
                        <div class="mb-4">
                            <h4 class="h5 mb-3">Education</h4>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="h6 mb-1">Master of Science in Computer Science</h5>
                                    <span class="badge bg-light text-dark">2020-2022</span>
                                </div>
                                <p class="mb-0 text-muted">University Name</p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="h6 mb-1">Bachelor of Engineering in Information Technology</h5>
                                    <span class="badge bg-light text-dark">2016-2020</span>
                                </div>
                                <p class="mb-0 text-muted">University Name</p>
                            </div>
                        </div>

                        <!-- Certifications -->
                        <div>
                            <h4 class="h5 mb-3">Key Certifications</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fas fa-certificate text-dark me-2"></i>
                                    AWS Certified Solutions Architect
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-certificate text-dark me-2"></i>
                                    Microsoft Azure Developer Associate
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-certificate text-dark me-2"></i>
                                    Google Cloud Professional Developer
                                </li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-2">View All Credentials →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-5">
    <div class="container">
        <h2 class="section-heading">Technical Skills</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Frontend Development</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">• React.js & Next.js</li>
                            <li class="mb-2">• TypeScript</li>
                            <li class="mb-2">• Responsive Design</li>
                            <li class="mb-2">• UI/UX Principles</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Backend Development</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">• Node.js & Express</li>
                            <li class="mb-2">• MongoDB & PostgreSQL</li>
                            <li class="mb-2">• RESTful APIs</li>
                            <li class="mb-2">• Authentication & Security</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Cloud & DevOps</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">• AWS Services</li>
                            <li class="mb-2">• Docker & Kubernetes</li>
                            <li class="mb-2">• CI/CD Pipelines</li>
                            <li class="mb-2">• Infrastructure as Code</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5 bg-light">
    <div class="container">
        <h2 class="section-heading">Recent Projects</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5 mb-3">E-Commerce Platform</h3>
                        <p class="card-text">A scalable e-commerce solution built with React and Node.js.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">View Details →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Cloud Infrastructure</h3>
                        <p class="card-text">AWS-based infrastructure setup with automated deployment.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">View Details →</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">View All Projects</a>
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
                            <img src="https://ui-avatars.com/api/?name=Rahul+S&background=random" 
                                 alt="Rahul S." class="client-image">
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
                            <img src="https://ui-avatars.com/api/?name=James+T&background=random" 
                                 alt="James T." class="client-image">
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
                            <img src="https://ui-avatars.com/api/?name=Sarah+M&background=random" 
                                 alt="Sarah M." class="client-image">
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