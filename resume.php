<?php include "includes/header.php"
?>
<div class="header">
    <div class="navbar" id="myTopnav">
        <div class="menu">
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
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

<section id="about">
    <div class="row">
        <div class="three columns">
            <img class="profile-pic" src="./assets/images/img.jpg" alt="" />
        </div>

        <div class="nine columns main-col">
            <h2>About Me</h2>

            <p>Hello! I am Quan Tran. Student at Ho Chi Minh University.</p>

            <div class="row">
                <div class="columns contact-details">
                    <h2>Basic Information</h2>
                    <p class="address">
                        <span>Tran Hong Quan</span><br />
                        <span>109/44/2b Duong Ba Trac<br />
                            District 8, Ho Chi Minh City </span><br />
                        <span>(+84) 0929 70 2312</span><br />
                        <span>1959030@itec.hcmus.edu.vn</span>
                    </p>
                </div>
                <div class="columns download" onclick="myFunction()" id="myPopup">
                    <p>
                        <a href="#" class="button"><i class="fa fa-id-card" aria-hidden="true"></i>More
                            Information</a>
                    </p>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end .main-col -->
    </div>
</section>
<!-- About Section End-->
<section class="skills container" id="skills">
    <h2 class="section-title">Skills</h2>

    <div class="skills__container bd-grid">
        <div class="skills__box">
            <h3 class="skills__subtitle">Development</h3>
            <span class="skills__name">Html
                <i class="fab fa-html5" style="color: red" aria-hidden="true"></i></span>
            <span class="skills__name">Css
                <i class="fab fa-css3" style="color: blue" aria-hidden="true"></i></span>
            <span class="skills__name">Javascript <i class="fab fa-js" style="color: #efd81d"></i></span>
            <span class="skills__name">Scss <i class="fab fa-sass" style="color: #ce6b9e"></i></span>
            <span class="skills__name">React <i class="fab fa-react" style="color: #6bd4f3"></i></span>
            <span class="skills__name">Sql <i class="fa fa-database" style="color: #eaab17"></i></span>
            <span class="skills__name">Android <i class="fab fa-android" style="color: #7bd980"></i></span>

            <h3 class="skills__subtitle">Design</h3>

            <span class="skills__name">Audition <img src="./assets/images/audition.svg" alt="" /></span>
            <span class="skills__name">Premiere <img src="./assets/images/Premiere.svg" alt="" /></span>
            <span class="skills__name">Photoshop <img src="./assets/images/photoshop.svg" alt="" /></span>
            <span class="skills__name">LightRoom <img src="./assets/images/lightroom.svg" alt="" /></span>

            <h3 class="skills__subtitle">Hobby</h3>
            <span class="skills__name">Guitar 🎸</span>
            <span class="skills__name">Piano 🎹</span>
            <span class="skills__name">Photography 📸</span>
            <span class="skills__name">Running 👟</span>
        </div>

        <div class="skills__img">
            <img src="./assets/images/_DSC8043.jpg" alt="" />
        </div>
    </div>
</section>
<section class="portfolio section container" id="portfolio">
    <h2 class="section-title">Portfolio</h2>

    <div class="portfolio__container bd-grid">
        <div class="portfolio__img">
            <img src="./assets/images/1-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/2-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/3-min.jpg" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/IMG_0704-min.JPG" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/4-min.JPG" alt="" />
        </div>
        <div class="portfolio__img">
            <img src="./assets/images/6-min.jpg" alt="" />
        </div>
    </div>
</section>
<button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>

<div class="wrapper popup" id="wrapper">
    <div class="resume">
        <div class="left">
            <div class="img_holder">
                <img src="./assets/images/img.jpg" alt="picture" />
            </div>
            <div class="contact_wrap pb">
                <div class="title">Contact</div>
                <div class="contact">
                    <ul>
                        <li>
                            <div class="li_wrap">
                                <div class="icon">
                                    <i class="fas fa-mobile-alt" aria-hidden="true" style="color: red"></i>
                                </div>
                                <div class="text">+(84) 0929 70 2312</div>
                            </div>
                        </li>
                        <li>
                            <div class="li_wrap">
                                <div class="icon">
                                    <i class="fas fa-envelope" aria-hidden="true" style="color: blue"></i>
                                </div>
                                <div class="text">1959030@itec.hcmus.edu.vn</div>
                            </div>
                        </li>

                        <li>
                            <div class="li_wrap">
                                <div class="icon">
                                    <i class="fas fa-map-signs" aria-hidden="true" style="color: #efd81d"></i>
                                </div>
                                <div class="text">
                                    109/44/2B Duong Ba Trac, District 8, Ho Chi Minh City
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="skills_wrap pb">
                <div class="title">Skills</div>
                <div class="skills">
                    <ul>
                        <li>
                            <div class="li_wrap">
                                <div class="icon">
                                    <i class="fab fa-html5" style="color: red" aria-hidden="true"></i>
                                </div>
                                <div class="text">HTML</div>
                            </div>
                        </li>
                        <li>
                            <div class="li_wrap">
                                <div class="icon">
                                    <i class="fab fa-css3" style="color: blue" aria-hidden="true"></i>
                                </div>
                                <div class="text">CSS</div>
                            </div>
                        </li>
                        <li>
                            <div class="li_wrap">
                                <div class="icon">
                                    <i class="fab fa-js" style="color: #efd81d"></i>
                                </div>
                                <div class="text">Javascript</div>
                            </div>
                        </li>
                        <li>
                            <div class="li_wrap">
                                <div class="icon">
                                    <i class="fab fa-react" style="color: #6bd4f3"></i>
                                </div>
                                <div class="text">React</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hobbies_wrap pb">
                <div class="title">hobbies</div>
                <div class="hobbies">
                    <ul>
                        <li>
                            <div class="li_wrap">
                                <div class="icon"><i class="fas fa-book"></i></div>
                                <div class="text">Reading</div>
                            </div>
                        </li>
                        <li>
                            <div class="li_wrap">
                                <div class="icon"><i class="fas fa-music"></i></div>
                                <div class="text">Music</div>
                            </div>
                        </li>
                        <li>
                            <div class="li_wrap">
                                <div class="icon"><i class="fas fa-gamepad"></i></div>
                                <div class="text">Gaming</div>
                            </div>
                        </li>
                        <li>
                            <div class="li_wrap">
                                <div class="icon"><i class="fas fa-shoe-prints"></i></div>
                                <div class="text">Running</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="headercv">
                <div class="name_role">
                    <div class="name">Tran Hong Quan</div>
                    <div class="role">Sphomore</div>
                </div>
                <div class="about">I am student at Ho Chi Minh University</div>
            </div>
            <div class="right_inner">
                <div class="education">
                    <div class="title">Education</div>
                    <div class="education_wrap">
                        <ul>
                            <li>
                                <div class="li_wrap">
                                    <div class="date">2016-2019</div>
                                    <div class="info">
                                        <p class="info_title">High School</p>
                                        <p class="info_com">Luong Van Chanh High School</p>
                                        <p class="info_cont">
                                            I've never been exposed to programming before. I just
                                            learned pascal, c++ in school and started to interesed
                                            in with programming.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="li_wrap">
                                    <div class="date">2019-Now</div>
                                    <div class="info">
                                        <p class="info_title">Computer Science</p>
                                        <p class="info_com">University HCMUS</p>
                                        <p class="info_cont">
                                            I started to learn coding when i came to university.
                                            Web development is one of my favortie and i am
                                            learning to go intern in the future.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="education">
                    <div class="title">Project</div>
                    <div class="education_wrap"></div>
                </div>
            </div>
        </div>
    </div>
    <img src="./assets/images/close.png" class="close" id="close" onclick="myFunction();" alt="" />
</div>

<?php include "./includes/footer.php" ?>