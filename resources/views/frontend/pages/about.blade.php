@extends('frontend.layout')

@section('content')

<!-- About Section -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <!-- Personal Intro -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="h2 fw-bold mb-3">Hi, I'm Utsav 👋</h2>
                <p class="lead">Crafting cloud solutions by day, exploring new tech by night. I believe in clean code, scalable architecture, and the power of a good cup of coffee! ☕</p>
                <p class="text-muted">From debugging sessions that turn into dawn adventures to architecting systems that make businesses smile - I bring technical expertise with a side of joy to every project! 🚀</p>
            </div>
        </div>

        <!-- Tech Events Section -->
        <div class="events-section mb-5">
            <div class="row align-items-center mb-4">
                <div class="col">
                    <h3 class="h4 mb-0">
                        <i class="fas fa-calendar-alt text-primary me-2"></i>
                        Tech Events & Speaking
                    </h3>
                </div>
                <div class="col-auto">
                    <div class="d-flex align-items-center gap-3">
                        <button class="btn btn-sm btn-outline-primary" id="prevEvent">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-primary" id="nextEvent">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        <a href="" class="btn btn-link text-dark">View All Events →</a>
                    </div>
                </div>
            </div>

            <div class="event-slider">
                <div class="row g-4">
                    <!-- Event Card 1 -->
                    <div class="col-md-4">
                        <div class="event-card">
                            <div class="event-image">
                                <span class="event-date">Dec 2023</span>
                                <img src="https://d1.awsstatic.com/reinvent/2023/homepage-hero-reinvent2023.2dc2d975cd3344e5268e6a0d9a355f5041e4b431.jpg" 
                                     alt="AWS re:Invent 2023">
                            </div>
                            <div class="event-content">
                                <h4>AWS re:Invent 2023</h4>
                                <p class="text-muted">Deep dive into cloud architecture, serverless computing, and yes, I found my laptop this time! 💻</p>
                                <a href="/events/aws-reinvent-2023" class="btn btn-outline-primary btn-sm">Read More →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 2 -->
                    <div class="col-md-4">
                        <div class="event-card">
                            <div class="event-image">
                                <span class="event-date">Oct 2023</span>
                                <img src="https://developers.google.com/static/community/devfest/images/devfest-social.png" 
                                     alt="DevFest India 2023">
                            </div>
                            <div class="event-content">
                                <h4>DevFest India 2023</h4>
                                <p class="text-muted">Spoke about cloud-native architectures and shared my journey from monolith to microservices 🎤</p>
                                <a href="/events/devfest-2023" class="btn btn-outline-primary btn-sm">Read More →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 3 -->
                    <div class="col-md-4">
                        <div class="event-card">
                            <div class="event-image">
                                <span class="event-date">Aug 2023</span>
                                <img src="https://www.docker.com/wp-content/uploads/2024/01/docker-social.png" 
                                     alt="DockerCon 2023">
                            </div>
                            <div class="event-content">
                                <h4>DockerCon 2023</h4>
                                <p class="text-muted">Explored container orchestration and shared tips on optimizing Docker workflows 🐳</p>
                                <a href="/events/dockercon-2023" class="btn btn-outline-primary btn-sm">Read More →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mentors Section -->
        <div class="mentors-section">
            <div class="row align-items-center mb-4">
                <div class="col">
                    <h3 class="h4 mb-0">
                        <i class="fas fa-users text-primary me-2"></i>
                        Amazing Mentors & Guides
                    </h3>
                </div>
                <div class="col-auto">
                    <div class="d-flex align-items-center gap-3">
                        <button class="btn btn-sm btn-outline-primary" id="prevMentor">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-primary" id="nextMentor">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        <a href="" class="btn btn-link text-dark">Meet All Mentors →</a>
                    </div>
                </div>
            </div>

            <div class="mentor-slider">
                <div class="row g-4">
                    <!-- Mentor Card 1 -->
                    <div class="col-md-4">
                        <div class="mentor-card">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&size=200" alt="John D." class="mentor-image">
                            <div class="mentor-content">
                                <h4>John D.</h4>
                                <p class="text-muted">Principal Cloud Architect who taught me that the best architecture is one that you can explain to a 5-year-old 🎯</p>
                                <div class="mentor-tags">
                                    <span>AWS</span>
                                    <span>Architecture</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mentor Card 2 -->
                    <div class="col-md-4">
                        <div class="mentor-card">
                            <img src="https://ui-avatars.com/api/?name=Sarah+Smith&size=200" alt="Sarah S." class="mentor-image">
                            <div class="mentor-content">
                                <h4>Sarah S.</h4>
                                <p class="text-muted">Tech Lead who showed me that debugging is like being a detective, but with better snacks 🔍</p>
                                <div class="mentor-tags">
                                    <span>DevOps</span>
                                    <span>Leadership</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mentor Card 3 -->
                    <div class="col-md-4">
                        <div class="mentor-card">
                            <img src="https://ui-avatars.com/api/?name=Mike+Chen&size=200" alt="Mike C." class="mentor-image">
                            <div class="mentor-content">
                                <h4>Mike C.</h4>
                                <p class="text-muted">Security expert who taught me that the best code is secure code, and the second best is commented code 🔐</p>
                                <div class="mentor-tags">
                                    <span>Security</span>
                                    <span>Best Practices</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection