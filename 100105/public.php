<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '1';
    $folder = '/site/custom_scripts/styles/';
  }
?>
    <link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick-theme.css">
    <link href="<?php echo $folder; ?>mc-student-life.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">

    <div class="fs-bg">
        <figure class="loading-gif"></figure>

        <div class="parallax-slider">
            <picture>
                <source 
                    media="(max-width: 766px)"
                    data-srcset="<?php echo $folder; ?>img/student-life/student-life-hero.jpg" />
                <img 
                    class="lazyload-img hero-img" 
                    src="<?php echo $folder; ?>img/student-life/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/student-life/student-life-hero.jpg" />
            </picture>
        </div>

        <div class="fs-wrapper">
            <h2>Home Away<br>from Home</h2>
            <hr>
            <p>Student Life at Messiah</p>
        </div>
        
        <div class="student-life-tabs hide-on-mobile">
            <ul>
                <li class="tab-item life-on-campus-item"><a>Life on Campus</a></li>
                <li class="tab-item welcome-home-item"><a>Welcome Home</a></li>
                <li class="tab-item resident-life-item"><a>Resident Life & Dining</a></li>
                <li class="explore-button"><a class="gtm-car-scroll">Explore Messiah<br><img src="<?php echo $folder; ?>img/student-life/car2-arrow-down.png"></a></li>
                <li class="tab-item diversity-item"><a>Diversity</a></li>
                <li class="tab-item support-item"><a>Support</a></li> 
            </ul>
        </div>
    </div>