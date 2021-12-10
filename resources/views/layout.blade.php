@extends('index')
@section('header')
<nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="index" class="navbar-brand">Reve<span class="text-primary">Tive.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="index" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="services" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="portfolio" class="nav-link">Projects</a>
            </li>
            <li class="nav-item">
              <a href="blog" class="nav-link">News</a>
            </li>
            <li class="nav-item">
              <a href="contact" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
    @endsection