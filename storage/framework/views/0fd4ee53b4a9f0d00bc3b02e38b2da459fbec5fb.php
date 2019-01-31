<?php $__env->startSection('title'); ?>
About Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">

<body style="background-color: #1c1c1c; color:white; font-family: 'New Peninim MT', Times, serif;">

<center>
<div class="row">
  <div class="col-lg-6" style="border-right: 1.2px solid black;">
    <img class="rounded-circle" src="<?php echo e(asset('images/44271615.jpg')); ?>" alt="Generic placeholder image" width="140" height="140">
    <h2>Justin Tibbetts</h2>
    <p>Hello I'm Justin. I attended school at Valencia and the University of Central Florida. During my time here at UCF I joined their coding bootcamp, where I learned all the basics and technicals of front end and back end. Im eager to see where the next step takes me.</p>
    <ul class="nav-item dropdown btn btn-secondary"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>View Information</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="#" target="_blank"
        onclick="event.preventDefault();">
        My Github
      </a></li>
      <li><a class="dropdown-item" href="#" target="_blank"
        onclick="event.preventDefault();">
        LinkedIn
      </a></li>
      <li><a class="dropdown-item" href="#" target="_blank"
        onclick="event.preventDefault();">
        My Instagram
      </a></li>
    </div>
    </ul>
  </div>
  <div class="col-lg-6">
    <img class="rounded-circle" src="<?php echo e(asset('images/42950569.jpg')); ?>" alt="Generic placeholder image" width="140" height="140">
    <h2>Pernell Louis-Pierre</h2>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    <ul class="nav-item dropdown btn btn-secondary"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>View Information</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="https://github.com/Llenrep" target="_blank">
        My Github
      </a></li>
      <li><a class="dropdown-item" href="https://www.linkedin.com/in/pernell-louis-pierre-179019170/" target="_blank">
        LinkedIn
      </a></li>
      <li><a class="dropdown-item" href="https://www.instagram.com/43nelly43/" target="_blank">
        My Instagram
      </a></li>
      <li><a class="dropdown-item" href="https://soundcloud.com/dj-triet-lpbp/tracks" target="_blank">
        My SoundCloud
      </a></li>
    </div>
    </ul>
  </div>
</div>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>