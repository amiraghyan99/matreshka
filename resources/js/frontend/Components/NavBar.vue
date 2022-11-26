<script setup>

</script>

<style >
@import "@/../css/frontend/bootstrap.min.css";
@import "@/../css/frontend/style.css";
</style>
<template>
  <div class="container-fluid bg-dark px-0">
    <div class="row gx-0">
      <div class="col-lg-3 bg-dark d-none d-lg-block">
        <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
          <h1 class="m-0 display-4 text-primary text-uppercase">Gymster</h1>
        </a>
      </div>
      <div class="col-lg-9">

        <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
          <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-4 text-primary text-uppercase">Gymster</h1>
          </a>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
              <a href="index.html" class="nav-item nav-link active">Home</a>
              <a href="about.html" class="nav-item nav-link">About</a>
              <a href="class.html" class="nav-item nav-link">Classes</a>
              <a href="team.html" class="nav-item nav-link">Trainers</a>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 m-0">
                  <a href="blog.html" class="dropdown-item">Blog Grid</a>
                  <a href="detail.html" class="dropdown-item">Blog Detail</a>
                  <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
              </div>
              <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Join Us</a>
          </div>
        </nav>
      </div>
    </div>
  </div>
</template>

