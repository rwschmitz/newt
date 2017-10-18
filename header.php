<?php?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
<meta description="Newt Theme, By:  Rudolph Schmitz">
<!-- The above 2 meta tags must come first according to Bootstrap documentation -->
<meta charset="<?php bloginfo( 'charset' );?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

    <!-- Navigation start -->
    <div class="no-gutters">
        <nav class="nav fixed-top navbar-expand-lg nav-fill nav-style">

            <!-- Navbar brand -->
            <a class="navbar-brand nav-btn" id="goHomeBrand">
                RS
            </a>

            <!-- Button responsible for opening/closing navbar on mobile -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarInfo" aria-controls="navbarInfo" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">MENU</span>
            </button>

            <!-- Actual navbar links -->
            <div class="collapse navbar-collapse" id="navbarInfo">
                <a class="nav-link nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"><button id="goHome" class="nav-btn underline">Home <span class="sr-only">(current)</span></button></a>
                <a class="nav-link nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"><button id="goAbout" class="nav-btn underline">About</button></a>
                <a class="nav-link nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"><button id="goContact" class="nav-btn underline">Contact</button></a>
            </div>
        </nav>
    </div>
    <!-- Navigation end -->

</nav>