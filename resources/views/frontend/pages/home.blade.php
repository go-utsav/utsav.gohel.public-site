@extends('frontend.layout')

@section('content')
<!-- Hero Section -->
<div class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-4">I Help Businesses Build Secure, Scalable Solutions</h1>
                <p class="lead mb-4">Transforming ideas into high-performance web applications and cloud infrastructure that drives real business growth.</p>
                <p class="lead mb-4">Your startup idea, live in days—not months. Precision-built, launch-ready.</p>
                <div class="d-flex gap-3">
                    <a href="#portfolio" class="btn btn-primary">See My Work</a>
                    <a href="#contact" class="btn btn-outline-primary">Contact Me</a>
                </div>
            </div>
            <div class="col-lg-4 text-center mt-4 mt-lg-0">
                <img src="https://media.licdn.com/dms/image/v2/D4E03AQE49Af6T7Wr-w/profile-displayphoto-shrink_200_200/B4EZZsIKS8HcAY-/0/1745570801305?e=1753920000&v=beta&t=qi_xq3MuDLvcOkAW1Qk3l0JIi-R4ExV6b14YQCeDUbE" alt="Utsav Gohel" class="img-fluid"
                    style="width: 250px; height: 250px; object-fit: cover; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
            </div>
        </div>
    </div>
</div>  

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

<!-- Certification Badges Marquee -->
<div class="container">
    <section id="certifications " class="py-2">
        <div class="container-fluid">
            <div class="row">
                <!-- Left side fixed content -->
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="certification-intro p-4">
                        <h2 class="mb-3">Professional Certifications</h2>
                        <p class="lead">Continuously expanding knowledge through industry-recognized certifications.</p>
                        <div class="certification-count mt-4">
                            <span class="h1 fw-bold">7+</span>
                            <span class="text-muted d-block">Active Certifications</span>
                        </div>
                    </div>
                </div>

                <!-- Right side marquee -->
                <div class="col-lg-9">
                    <div class="certification-marquee">
                        <div class="marquee-content">
                            <!-- AWS Cloud Practitioner -->
                            <a href="#" class="certification-badge" target="_blank">
                                <img src="https://images.credly.com/size/340x340/images/00634f82-b07f-4bbd-a6bb-53de397fc3a6/image.png"
                                    alt="AWS Cloud Practitioner">
                                <div class="badge-info">
                                    <h4>AWS Cloud Practitioner</h4>
                                    <p>June 2023</p>
                                </div>
                            </a>

                            <!-- AWS Solutions Architect -->
                            <a href="#" class="certification-badge" target="_blank">
                                <img src="https://images.credly.com/size/340x340/images/0e284c3f-5164-4b21-8660-0d84737941bc/image.png"
                                    alt="AWS Solutions Architect">
                                <div class="badge-info">
                                    <h4>AWS Solutions Architect Associate</h4>
                                    <p>June 2024</p>
                                </div>
                            </a>

                            <!-- AWS Data Engineer -->
                            <a href="#" class="certification-badge" target="_blank">
                                <img src="https://images.credly.com/size/340x340/images/2d84e428-9078-49b6-a804-13c15383d0de/image.png"
                                    alt="AWS Data Engineer">
                                <div class="badge-info">
                                    <h4>AWS Data Engineer Associate</h4>
                                    <p>Oct 2024</p>
                                </div>
                            </a>

                            <!-- AWS AI Practitioner -->
                            <a href="#" class="certification-badge" target="_blank">
                                <img src="https://images.credly.com/size/340x340/images/01c3b0d7-39c0-41c7-a8fb-459a58a87a9c/image.png"
                                    alt="AWS AI Practitioner">
                                <div class="badge-info">
                                    <h4>AWS AI Practitioner</h4>
                                    <p>Nov 2024</p>
                                </div>
                            </a>

                            <!-- HashiCorp Terraform -->
                            <a href="#" class="certification-badge" target="_blank">
                                <img src="https://images.credly.com/size/340x340/images/99289602-861e-4929-8277-773e63a2fa6f/image.png"
                                    alt="HashiCorp Terraform">
                                <div class="badge-info">
                                    <h4>HashiCorp Terraform Associate</h4>
                                    <p>May 2025</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Portfolio Image Cards -->
<section id="portfolio" class="py-5">
    <div class="container">
        <h2 class="section-heading mb-4">Featured Work</h2>
        <div class="row">
            <!-- E-Commerce Platform -->
            <div class="col-md-4">
                <a href="/projects/ecommerce">
                    <div class="image-card">
                        <div class="image-card-image-container">
                            <span class="image-card-tag">Full Stack</span>
                            <img src="https://www.shutterstock.com/image-vector/online-store-ecommerce-mobile-app-260nw-1917442511.jpg"
                                alt="E-Commerce Platform">
                        </div>
                        <div class="image-card-content">
                            <h3 class="image-card-title">E-Commerce Platform</h3>
                            <p class="image-card-description">A modern e-commerce solution built with React and Node.js
                                for seamless shopping</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Cloud Infrastructure -->
            <div class="col-md-4">
                <a href="/projects/cloud-infrastructure">
                    <div class="image-card">
                        <div class="image-card-image-container">
                            <span class="image-card-tag">Cloud Architecture</span>
                            <img src="https://www.shutterstock.com/image-vector/cloud-computing-modern-flat-design-260nw-2227590831.jpg"
                                alt="Cloud Infrastructure">
                        </div>
                        <div class="image-card-content">
                            <h3 class="image-card-title">Cloud Infrastructure</h3>
                            <p class="image-card-description">Scalable AWS infrastructure with automated deployment and
                                monitoring</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- AI Analytics Dashboard -->
            <div class="col-md-4">
                <a href="/projects/ai-dashboard">
                    <div class="image-card">
                        <div class="image-card-image-container">
                            <span class="image-card-tag">AI/ML</span>
                            <img src="https://www.shutterstock.com/image-vector/dashboard-infographic-template-charts-graphs-260nw-1065822260.jpg"
                                alt="AI Analytics Dashboard">
                        </div>
                        <div class="image-card-content">
                            <h3 class="image-card-title">AI Analytics Dashboard</h3>
                            <p class="image-card-description">Real-time analytics dashboard powered by machine learning
                                algorithms</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Mobile App -->
            <div class="col-md-4">
                <a href="/projects/health-app">
                    <div class="image-card">
                        <div class="image-card-image-container">
                            <span class="image-card-tag">Mobile Development</span>
                            <img src="https://www.shutterstock.com/image-vector/fitness-tracker-app-ui-ux-260nw-1388504049.jpg"
                                alt="Mobile App">
                        </div>
                        <div class="image-card-content">
                            <h3 class="image-card-title">Health Tracking App</h3>
                            <p class="image-card-description">Cross-platform mobile application for health and fitness
                                tracking</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- DevOps Pipeline -->
            <div class="col-md-4">
                <a href="/projects/devops">
                    <div class="image-card">
                        <div class="image-card-image-container">
                            <span class="image-card-tag">DevOps</span>
                            <img src="https://www.shutterstock.com/image-vector/devops-infinity-loop-icon-development-260nw-1897918189.jpg"
                                alt="DevOps Pipeline">
                        </div>
                        <div class="image-card-content">
                            <h3 class="image-card-title">CI/CD Pipeline</h3>
                            <p class="image-card-description">Automated deployment pipeline using GitHub Actions and
                                Kubernetes</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Security System -->
            <div class="col-md-4">
                <a href="/projects/security">
                    <div class="image-card">
                        <div class="image-card-image-container">
                            <span class="image-card-tag">Security</span>
                            <img src="https://www.shutterstock.com/image-vector/cyber-security-concept-shield-keyhole-260nw-19064275.jpg"
                                alt="Security System">
                        </div>
                        <div class="image-card-content">
                            <h3 class="image-card-title">Security Framework</h3>
                            <p class="image-card-description">Enterprise-level security system with real-time threat
                                detection</p>
                        </div>
                    </div>
                </a>
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



@endsection