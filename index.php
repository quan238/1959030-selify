<?php include "includes/headerIndex.php"
?>
<div class="header">
    <div class="navbar" id="myTopnav">
        <div class="menu">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="./resume.php">Resume</a></li>
                <li><a href="./gallery.php">Gallery</a></li>
                <li><a href="#">Contact</a></li>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
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
                            <div class="trailer">
                                <iframe width="1905" height="796" src="https://www.youtube.com/embed/caPK7lugGYQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <img src="./assets/images/close.png" class="close" onclick="toggle();" alt="" />

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="social-icons">
        <ul>
            <li>
                <a target="_blank" href="https://www.facebook.com/HQuaan238/"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/quaan.832/"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a target="_blank" href="https://www.youtube.com/channel/UCkXPlSy8elJWveD-vQPMmug"><i class="fa fa-youtube"></i></a>
            </li>
        </ul>
    </div>
</div>
<?php include "./includes/footer.php" ?>