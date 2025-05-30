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
                     @foreach($events as $event)
                    <div class="col-md-4">
                        <div class="event-card">
                            <div class="event-image">
                              
                                <img src="{{ asset('storage/' . $event->image) }}" 
                                     alt="{{ $event->title }}">
                            </div>
                            <div class="event-content">
                                <h4>{{ $event->title }}</h4>
                                <p class="text-muted">{{ $event->excerpt }}</p>
                                <a href="/events/{{ $event->slug }}" class="btn btn-outline-primary btn-sm">Read More →</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Mentors Section -->
      

           
        </div>
    </div>
</section>

@endsection