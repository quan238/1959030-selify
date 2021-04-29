<?php include "includes/header.php"
?>
<div class="header">
    <div class="navbar" id="myTopnav">
        <div class="menu">
            <ul>
                <li><a href="./index.php" class="active">Home</a></li>
                <li><a href="./resume.php">Resume</a></li>
                <li><a href="./gallery.php">Gallery</a></li>
                <li><a href="#">Contact</a></li>
                <a href="javascript:void(0);" class="icon" onclick="myFunction2()">
                    <i class="fa fa-bars"></i>
                </a>
            </ul>
        </div>
    </div>
    <div class="banner">
        <div class="app-text">
            <h1><span>Hello,</span> I'm<br />Quan Tran</h1>
            <div class="primary-btn">
                <div class="btn-group">
                    <div class="play-btn">
                        <div class="play-btn-inner">
                            <i class="fa fa-play" onclick="toggle();"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="portfolio section container" id="portfolio">
    <h2 class="section-title">Gallery</h2>

    <div class="portfolio__container bd-grid">
        <div class="portfolio__img">
            <img src="./assets/images/_DSC8389-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/_DSC8431-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/_DSC8454-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/x-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/_DSC8483-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/_DSC9056-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/_DSC8493-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/DSC09885-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/DSC09887.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/DSC09934-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/DSC09984-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/_DSC9698-2-Edit-min.jpg" alt="" />
        </div>
    </div>
</section>
<button id="back-to-top-btn"><i class="fa fa-angle-double-up"></i></button>
<?php include "./includes/footer.php" ?>