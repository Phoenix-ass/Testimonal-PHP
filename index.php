<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!---------------Bootstrap-------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./style.css" />

    <title>Dynamic Testimonals</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <i class="ri-code-s-slash-line"></i>GR Networks
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="https://gowthamrajnetwork.com/" class="nav__link">Home</a>
                    </li>

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Explore <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-flashlight-line"></i>
                                    </div>

                                    <span class="dropdown__title">Most viewed courses</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">HTML for beginners</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Advanced CSS</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">JavaScript Basic</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-heart-3-line"></i>
                                    </div>

                                    <span class="dropdown__title">Popular courses</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Development with Flutter</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Web development with React</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Fullstack Java Development</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-book-mark-line"></i>
                                    </div>

                                    <span class="dropdown__title">Careers</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Web development</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Applications development</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">UI/UX design</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Cyber security</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Data Analystics</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-file-paper-2-line"></i>
                                    </div>

                                    <span class="dropdown__title">Certifications</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Course certificates</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Free certifications</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Resources <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-code-line"></i>
                                    </div>

                                    <span class="dropdown__title">Web templates</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Free templates</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Premium templates</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-pen-nib-line"></i>
                                    </div>

                                    <span class="dropdown__title">Designs</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Web designs</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">App designs</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-service-fill"></i>
                                    </div>

                                    <span class="dropdown__title">Job Portal</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Register</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Jobs List</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Application</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-apps-2-line"></i>
                                    </div>

                                    <span class="dropdown__title">Others</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Recent blogs</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Tutorial videos</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Webinar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="#" class="nav__link">Reviews</a>
                    </li>

                    <!--=============== DROPDOWN 3 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Company <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-community-line"></i>
                                    </div>

                                    <span class="dropdown__title">About us</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">About us</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Support</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Contact us</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-shield-line"></i>
                                    </div>

                                    <span class="dropdown__title">Safety and quality</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Cookie settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__link">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--Content Center-->
    <div class="container">
        <?php
        $conn = new mysqli("localhost:4306", "root", "", "carousel");

        $msg = '';
        if (isset($_POST['upload'])) {
            $image = $_FILES['image']['name'];
            $path = 'Images/' . $image;

            $sql = $conn->query("INSERT INTO slider(image_path) VALUES('$path')");
            if ($sql) {
                move_uploaded_file($_FILES['image']['tmp_name'], $path);
                $msg = 'Image Uploaded Successfully';
            } else {
                $msg = 'Image Upload Failed';
            }
        }

        $result = $conn->query("SELECT image_path FROM slider")
        ?>

        <div class="container-fluid">
            <div class="row justify-content-center mb-2">
                <div class="col-10">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators d-none">

                            <?php
                            $i = 0;
                            foreach ($result as $row) {
                                $actives = '';
                                if ($i == 0) {
                                    $actives = 'active';
                                }
                            ?>
                                <li data-target="#demo" data-slide-to="<?= $i ?>" class="<?= $actives; ?>"></li>
                            <?php $i++;
                            } ?>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner ">
                            <?php
                            $i = 0;
                            foreach ($result as $row) {
                                $actives = '';
                                if ($i == 0) {
                                    $actives = 'active';
                                }
                            ?>
                                <div class="carousel-item <?= $actives; ?>">
                                    <img src="<?= $row['image_path'] ?>" width="60%" height="60%">
                                </div>
                            <?php $i++;
                            } ?>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon "></span>
                        </a>

                    </div>

                </div>
            </div>
            <div class="row justify-content-center px-2 d-none">
                <div class="col-lg-4 bg-dark rounded px-4">
                    <h4 class="text-center text-light p-1">Select Image to Upload!</h4>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="image" class="form-control p-1" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="upload" class="btn btn-warning btn-block" value="Upload Image">
                        </div>
                        <div class="form-group">
                            <h5 class="text-center text-light"><?= $msg; ?></h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="about-content">
            <h2>Start New Life With New Career</h2>
            <p>
                "Education is not the filling of a pail, but the lighting of a
                fire."<br />Online education is a modern educational paradigm where
                students access instructional<br />
                content through the internet.<br />
                This innovative approach has gained immense popularity,
                <br />especially after the pandemic, owing to its convenience and
                adaptability.
            </p>
        </div>
        </section>
    </div>

    <!---Success Stories-->
    <div class="container1">
        <div class="head">
            <h2>GOWTHAMRAJ NETWORK'S Learners Speaks</h2>
        </div>
        <div class="part2">
            <div class="card">
                <img src="./Images/images.jpeg" alt="..." class="circle" />
                <div class="content">
                    <p>
                        i used to watch courses from video of gowthamraj network.which are
                        very easy to understand.i take notes and understand the concepts
                        to core which made programming easy
                    </p>
                    <ul>
                        <li>Web developer</li>
                        <li>|</li>
                        <li>sureh</li>
                        <li>|</li>
                        <li>chennai</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <img src="./Images/s1.jpeg" alt="..." class="circle" />
                <div class="content">
                    <p>
                        i used to watch courses from video of gowthamraj network.which are
                        very easy to understand.i take notes and understand the concepts
                        to core which made programming easy
                    </p>
                    <ul>
                        <li>Web developer</li>
                        <li>|</li>
                        <li>sureh</li>
                        <li>|</li>
                        <li>chennai</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <img src="./Images/s2.jpeg" alt="..." class="circle" />
                <div class="content">
                    <p>
                        i used to watch courses from video of gowthamraj network.which are
                        very easy to understand.i take notes and understand the concepts
                        to core which made programming easy
                    </p>
                    <ul>
                        <li>Web developer</li>
                        <li>|</li>
                        <li>sureh</li>
                        <li>|</li>
                        <li>chennai</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <img src="./Images/s3.jpeg" alt="..." class="circle" />
                <div class="content">
                    <p>
                        i used to watch courses from video of gowthamraj network.which are
                        very easy to understand.i take notes and understand the concepts
                        to core which made programming easy
                    </p>
                    <ul>
                        <li>Web developer</li>
                        <li>|</li>
                        <li>sureh</li>
                        <li>|</li>
                        <li>chennai</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <img src="./Images/s4.jpeg" alt="..." class="circle" />
                <div class="content">
                    <p>
                        i used to watch courses from video of gowthamraj network.which are
                        very easy to understand.i take notes and understand the concepts
                        to core which made programming easy
                    </p>
                    <ul>
                        <li>Web developer</li>
                        <li>|</li>
                        <li>sureh</li>
                        <li>|</li>
                        <li>chennai</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <img src="./Images/s6.jpg" alt="..." class="circle" />
                <div class="content">
                    <p>
                        i used to watch courses from video of gowthamraj network.which are
                        very easy to understand.i take notes and understand the concepts
                        to core which made programming easy
                    </p>
                    <ul>
                        <li>Web developer</li>
                        <li>|</li>
                        <li>sureh</li>
                        <li>|</li>
                        <li>chennai</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <img src="IMAGES/s5.jpg" alt="..." class="circle" />
                <div class="content">
                    <p>
                        i used to watch courses from video of gowthamraj network.which are
                        very easy to understand.i take notes and understand the concepts
                        to core which made programming easy
                    </p>
                    <ul>
                        <li>Web developer</li>
                        <li>|</li>
                        <li>sureh</li>
                        <li>|</li>
                        <li>chennai</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <img src="./Images/s7.jpg" alt="..." class="circle" />
                <div class="content">
                    <p>
                        i used to watch courses from video of gowthamraj network.which are
                        very easy to understand.i take notes and understand the concepts
                        to core which made programming easy
                    </p>
                    <ul>
                        <li>Web developer</li>
                        <li>|</li>
                        <li>sureh</li>
                        <li>|</li>
                        <li>chennai</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <img src="./Images/s8.jpg" alt="..." class="circle" />
                <div class="content">
                    <p>
                        i used to watch courses from video of gowthamraj network.which are
                        very easy to understand.i take notes and understand the concepts
                        to core which made programming easy
                    </p>
                    <ul>
                        <li>Web developer</li>
                        <li>|</li>
                        <li>sureh</li>
                        <li>|</li>
                        <li>chennai</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="part3">
            <div class="heading">
                <h1>Success Stories</h1>
            </div>

            <!-- one -->
            <div class="bigcard">
                <img src="./Images/images.jpeg" alt="..." />
                <h3>vignesh Kumar Got Selected at SSR Technologies</h3>
                <p>
                    "I’m incredibly grateful to GR Network for helping me reach this
                    milestone in my career. The courses provided me with not only
                    technical skills but also the practical experience needed to excel
                    as a web developer. The hands-on projects and expert guidance
                    allowed me to understand complex concepts and apply them in
                    real-world scenarios. GR Network truly gave me the confidence and
                    skills to succeed, and I owe a big part of this achievement to their
                    support and training."
                </p>
                <span><a href="./readmore.html">Show more</a></span>
            </div>
            <!-- two -->
            <div class="bigcard">
                <img src="./Images/p1.jpeg" alt="..." />
                <h3>vignesh Kumar Got Selected at SSR Technologies</h3>
                <p>
                    "I’m incredibly grateful to GR Network for helping me reach this
                    milestone in my career. The courses provided me with not only
                    technical skills but also the practical experience needed to excel
                    as a web developer. The hands-on projects and expert guidance
                    allowed me to understand complex concepts and apply them in
                    real-world scenarios. GR Network truly gave me the confidence and
                    skills to succeed, and I owe a big part of this achievement to their
                    support and training."
                </p>
                <span><a href="./readmore.html">Show more</a></span>
            </div>
            <!-- three -->

            <div class="bigcard">
                <img src="./Images/p2.jpeg" alt="..." />
                <h3>vignesh Kumar Got Selected at SSR Technologies</h3>
                <p>
                    "I’m incredibly grateful to GR Network for helping me reach this
                    milestone in my career. The courses provided me with not only
                    technical skills but also the practical experience needed to excel
                    as a web developer. The hands-on projects and expert guidance
                    allowed me to understand complex concepts and apply them in
                    real-world scenarios. GR Network truly gave me the confidence and
                    skills to succeed, and I owe a big part of this achievement to their
                    support and training."
                </p>
                <span><a href="./readmore.html">Show more</a></span>
            </div>
            <!-- four -->
            <div class="bigcard">
                <img src="./Images/p3.jpeg" alt="..." />
                <h3>vignesh Kumar Got Selected at SSR Technologies</h3>
                <p>
                    "I’m incredibly grateful to GR Network for helping me reach this
                    milestone in my career. The courses provided me with not only
                    technical skills but also the practical experience needed to excel
                    as a web developer. The hands-on projects and expert guidance
                    allowed me to understand complex concepts and apply them in
                    real-world scenarios. GR Network truly gave me the confidence and
                    skills to succeed, and I owe a big part of this achievement to their
                    support and training."
                </p>
                <span><a href="./readmore.html">Show more</a></span>
            </div>
            <!-- five -->
            <div class="bigcard">
                <img src="./Images/p4.jpeg" alt="..." />
                <h3>vignesh Kumar Got Selected at SSR Technologies</h3>
                <p>
                    "I’m incredibly grateful to GR Network for helping me reach this
                    milestone in my career. The courses provided me with not only
                    technical skills but also the practical experience needed to excel
                    as a web developer. The hands-on projects and expert guidance
                    allowed me to understand complex concepts and apply them in
                    real-world scenarios. GR Network truly gave me the confidence and
                    skills to succeed, and I owe a big part of this achievement to their
                    support and training."
                </p>
                <span><a href="./readmore.html">Show more</a></span>
            </div>
            <!-- six -->

            <div class="bigcard">
                <img src="./Images/image 4.jpg" alt="..." />
                <h3>vignesh Kumar Got Selected at SSR Technologies</h3>
                <p>
                    "I’m incredibly grateful to GR Network for helping me reach this
                    milestone in my career. The courses provided me with not only
                    technical skills but also the practical experience needed to excel
                    as a web developer. The hands-on projects and expert guidance
                    allowed me to understand complex concepts and apply them in
                    real-world scenarios. GR Network truly gave me the confidence and
                    skills to succeed, and I owe a big part of this achievement to their
                    support and training."
                </p>
                <span><a href="./readmore.html">Show more</a></span>
            </div>
        </div>

        <div class="part4"></div>
    </div>

    <!-- Topper Video Reviews Section -->
    <section class="topper-reviews">
        <div class="section-title">
            <h1>Topper's Reviews</h1>
            <p>
                Hear from our top-performing students about their learning experience.
            </p>
        </div>
        <div class="reviews-container">
            <!-- Review Item 1 -->
            <div class="review-item">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/nP8SOOoDQiA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>John Doe</h3>
                <p>
                    " 💫 The course helped me immensely in understanding the core
                    concepts. Highly recommend!"
                </p>
                <br />
                <strong>⭐⭐⭐⭐⭐ </strong>
            </div>

            <!-- Review Item 2 -->
            <div class="review-item">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/nP8SOOoDQiA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>Jane Smith</h3>
                <p>
                    " 💫 The learning experience was top-notch, with supportive mentors
                    and detailed material."
                </p>
                <br />
                <strong>⭐⭐⭐⭐⭐ </strong>
            </div>

            <!-- Review Item 3 -->
            <div class="review-item">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/nP8SOOoDQiA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>Mark Wilson</h3>
                <p>
                    " 💫 This program gave me the confidence to excel. Thank you for the
                    wonderful platform!"
                </p>
                <br />
                <strong>⭐⭐⭐⭐⭐ </strong>
            </div>

            <!-- Additional Review Items -->
            <div class="review-item">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/nP8SOOoDQiA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>Emily Clark</h3>
                <p>
                    " 💫 An exceptional platform that goes beyond just learning. A truly
                    enriching experience!"
                </p>
                <br />
                <strong>⭐⭐⭐⭐⭐ </strong>
            </div>

            <div class="review-item">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/nP8SOOoDQiA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>Michael Brown</h3>
                <p>
                    " 💫 Absolutely loved the experience. The mentors were insightful
                    and engaging!"
                </p>
                <br />
                <strong>⭐⭐⭐⭐⭐ </strong>
            </div>

            <div class="review-item">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/nP8SOOoDQiA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>Michael Brown</h3>
                <p>
                    " 💫 Absolutely loved the experience. The mentors were insightful
                    and engaging!"
                </p>
                <br />
                <strong>⭐⭐⭐⭐⭐ </strong>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll(".review-item").forEach((item) => {
            item.addEventListener("click", () => {
                const videoSrc = item.querySelector("iframe").src;
                showModal(videoSrc);
            });
        });

        function showModal(src) {
            const modal = document.createElement("div");
            modal.className = "modal";
            modal.innerHTML = `
                <div class="modal-content">
                    <span class="close-button">&times;</span>
                    <iframe src="${src}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            `;
            document.body.appendChild(modal);

            modal.querySelector(".close-button").onclick = () => {
                modal.remove();
            };
        }
    </script>

    <!--Footer-->

    <footer>
        <div class="contact-us">
            <h2>Let's be a Part of Us</h2>
            <p>
                Being an immigrants and minorities doesn't prevent you for having a
                good future. We're here to help to help you to know skills,get
                connection, and a great Career.
            </p>
        </div>

        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-sm-2">
                    <h6>Goals</h6>
                    <span>Support minorities to get the brighter future</span><br />
                </div>

                <div class="col-sm-2">
                    <h6>Discover</h6>
                    <span>What You Can Learn</span><br />
                    <span>Become a Student</span><br />
                    <span>Refer Students</span><br />
                </div>

                <div class="col-sm-2">
                    <h6>Resources</h6>
                    <span>MOU</span><br />
                    <span>Clients</span><br />
                    <span>College</span><br />
                    <span>Startups</span><br />
                </div>

                <div class="col-sm-2">
                    <h6>Team</h6>
                    <span>Designer</span><br />
                    <span>Analyst</span><br />
                    <span>Developer</span><br />
                    <span>HR</span><br />
                </div>

                <div class="col-sm-3">
                    <h6>Subscribe Us</h6>
                    <span>Subscribe Us for Daily Notification.</span>
                    <input type="text" class="font-weight-bold form-control" placeholder="Enter ur email" />
                    <button type="submit" class="font-weight-bold btn btn-outline-danger btn-sm float-left">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </footer>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="./script.js"></script>
</body>

</html>