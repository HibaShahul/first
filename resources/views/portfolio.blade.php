@extends('layout.theme')
@section('content')

  <main>
    <div class="page-section">
      <div class="container">
        <div class="filterable-btn">
          <button class="btn active" data-filter="*">All</button>
          <button class="btn" data-filter=".web">Website</button>
          <button class="btn" data-filter=".mobile">Mobile</button>
          <button class="btn" data-filter=".desktop">Desktop</button>
        </div>

        <div class="grid mt-3">
          <div class="grid-item mobile">
            <div class="portfolio">
              <a href="../assets/img/portfolio/work-1.jpg" data-fancybox="portfolio">
                <img src="../assets/img/portfolio/work-1.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item mobile">
            <div class="portfolio">
              <a href="../assets/img/portfolio/work-2.jpg" data-fancybox="portfolio">
                <img src="../assets/img/portfolio/work-2.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item web desktop">
            <div class="portfolio">
              <a href="../assets/img/portfolio/work-3.jpg" data-fancybox="portfolio">
                <img src="../assets/img/portfolio/work-3.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item web">
            <div class="portfolio">
              <a href="../assets/img/portfolio/work-4.jpg" data-fancybox="portfolio">
                <img src="../assets/img/portfolio/work-4.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item mobile">
            <div class="portfolio">
              <a href="../assets/img/portfolio/work-5.jpg" data-fancybox="portfolio">
                <img src="../assets/img/portfolio/work-5.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item web desktop">
            <div class="portfolio">
              <a href="../assets/img/portfolio/work-6.jpg" data-fancybox="portfolio">
                <img src="../assets/img/portfolio/work-6.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item web">
            <div class="portfolio">
              <a href="../assets/img/portfolio/work-7.jpg" data-fancybox="portfolio">
                <img src="../assets/img/portfolio/work-7.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item mobile">
            <div class="portfolio">
              <a href="../assets/img/portfolio/work-8.jpg" data-fancybox="portfolio">
                <img src="../assets/img/portfolio/work-8.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item mobile">
            <div class="portfolio">
              <a href="../assets/img/portfolio/work-9.jpg" data-fancybox="portfolio">
                <img src="../assets/img/portfolio/work-9.jpg" alt="">
              </a>
            </div>
          </div>
        </div> <!-- .grid -->
        <div class="mt-5 text-center">
          <button class="btn btn-primary">Load More</button>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  </main>
  @endsection