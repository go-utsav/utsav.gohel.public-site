  <!-- Simple Navigation -->
  <nav class="navbar navbar-expand-lg bg-white border-bottom">
      <div class="container">
          <a class="navbar-brand fw-bold" href="/">Utsav Gohel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto align-items-center">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('about') }}">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('service-grid') }}">Services</a>
                  </li>
                  
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('projects-grid') }}">Projects</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('case-study-grid') }}">Case Studies</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  <li class="nav-item ms-lg-3">
                      <a href="https://calendly.com/utsavgohel-ug/30min" 
                         target="_blank" 
                         class="btn btn-dark btn-sm rounded-pill px-3 py-1">
                          <i class="far fa-calendar-check me-1"></i> Book Free Discovery Call
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

<style>
.navbar {
    position: sticky;
    top: 0;
    z-index: 1000;
    transition: all 0.3s ease;
}

@media (max-width: 991.98px) {
    .nav-item .btn {
        margin-top: 10px;
        width: 100%;
    }
}
</style>