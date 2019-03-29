<?php include 'php_includes/header.php' ?>
<?php include 'php_includes/connect.php' ?>
<body class="customeScrollbar">

  <div class="homepage">
    <div class="homepage-holder">
      <div class="row">
        <div class="col-sm-12 col-md-6 mx-auto text-center">
          <h1 class="homepage__header lineartext-pink">Troy Wu</h1>
          <p class="lead homepage__header-sub">Simple as This</p>
          <a href="#" class="button button-download">
            <span class="button__item">Download</span>
            <span class="button__item">
              <i class="fas fa-download"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="container-md">
        <div class="row margint-10">
          <div class="container">
            <div class="button__holder">
                <a href="#" class="button button-1" data-toggle="modal" data-target="#profile">Profile</a>
                <a href="#" class="button button-1" data-toggle="modal" data-target="#project">Projects</a>
                <a href="#" class="button button-1" data-toggle="modal" data-target="#blog">Blogs</a>
                <a href="#" class="button button-1" data-toggle="modal" data-target="#contact">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- 
modal fade
       -->
  <!-- Profiile Modal -->
<?php include 'php_includes/profile.php' ?>


<!-- Project Modal -->
<?php include 'php_includes/project.php' ?>


<!-- Blog Modal -->
<?php include 'php_includes/blog.php' ?>



<!-- Contact Modal -->
<?php include 'php_includes/contact.php' ?>









<!-- Footer -->
<?php include 'php_includes/footer.php' ?>

