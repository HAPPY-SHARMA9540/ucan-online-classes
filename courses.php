<?php include "common/header.php"?>
<!--==========================
COURSE HERO
===========================-->

<section class="course-hero">

    <div class="container">

        <div class="course-hero-content">

            <span>LEARN FUTURE SKILLS</span>

            <h1>
                Discover Courses That
                Build Your Future
            </h1>

            <p>
                Learn Coding, Artificial Intelligence,
                Robotics, Public Speaking and much more
                from India's Best Mentors.
            </p>

            <div class="course-search">

                <input
                type="text"
                placeholder="Search Your Favourite Course...">

                <button>

                    Search

                </button>

            </div>

        </div>

    </div>

</section>



<!--==========================
COURSE CATEGORY
===========================-->

    <!-- ========== Shubham Rajput Course Section ============ -->
        <section class="shubham-ucan-courses">
            <div class="container">
                <div class="shubhamcourse-heading">
                    <span class="shubhamcourse-tag">⭐ Explore Our Courses</span>
                    <h2>Learn, Grow & <span>Shine</span></h2>
                    <p>Handpicked interactive courses designed for students to build confidence, creativity and future-ready skills.</p>
                </div>
                <div class="shubhamcourse-grid">
                    <!--================ CARD =================-->
                    <a href="mathematics.php" class="shubhamcourse-card shubham-mathematics" title="Mathematics">
                        <div class="shubhamcourse-image">
                            <img src="assets/images/course/mathematics.jpg" alt="Mathematics" title="Mathematics" loading="lazy">
                        </div>
                        <div class="shubhamcourse-content">
                            <div class="shubhamcourse-icon"><i class="fa-solid fa-calculator"></i></div>
                            <h3>Mathematics</h3>
                            <p>Build strong concepts with fun learning, logical thinking and problem solving.</p>
                            <div class="shubhamcourse-features">
                                <span>Live Classes</span>
                                <span>Worksheets</span>
                                <span>Olympiad</span>
                            </div>
                            <div class="shubhamcourse-btn">View Course
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                    <!--================ CARD =================-->
                    <a href="english.php" class="shubhamcourse-card shubham-english" title="English">
                        <div class="shubhamcourse-image">
                            <img src="assets/images/course/creative_writing.jpg" alt="English" title="English" loading="lazy">
                        </div>
                        <div class="shubhamcourse-content">
                            <div class="shubhamcourse-icon"><i class="fa-solid fa-book-open"></i></div>
                            <h3>English</h3>
                            <p>Improve grammar, vocabulary, reading and spoken English skills.</p>
                            <div class="shubhamcourse-features">
                                <span>Grammar</span>
                                <span>Reading</span>
                                <span>Vocabulary</span>
                            </div>
                            <div class="shubhamcourse-btn">
                                View Course
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                    <!--================ CARD =================-->
                    <a href="public-speaking.php" class="shubhamcourse-card shubham-speaking" title="Public Speaking">
                        <div class="shubhamcourse-image">
                            <img src="assets/images/course/creative_writing.jpg" alt="Public Speaking" title="Public Speaking" loading="lazy">
                        </div>
                        <div class="shubhamcourse-content">
                            <div class="shubhamcourse-icon"><i class="fa-solid fa-microphone"></i></div>
                            <h3>Public Speaking</h3>
                            <p>Build confidence, stage presence and communication skills.</p>
                            <div class="shubhamcourse-features">
                                <span>Confidence</span>
                                <span>Presentation</span>
                                <span>Leadership</span>
                            </div>
                            <div class="shubhamcourse-btn">View Course
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                    <!--================ CARD =================-->
                    <a href="communication-excellence.php" class="shubhamcourse-card shubham-communication" title="Communication">
                        <div class="shubhamcourse-image">
                            <img src="assets/images/course/creative_writing.jpg" alt="Communication" title="Communication" loading="lazy">
                        </div>
                        <div class="shubhamcourse-content">
                            <div class="shubhamcourse-icon"><i class="fa-solid fa-comments"></i></div>
                            <h3>Communication Excellence</h3>
                            <p>Master listening, speaking and interpersonal communication.</p>
                            <div class="shubhamcourse-features">
                                <span>Listening</span>
                                <span>Interaction</span>
                                <span>Soft Skills</span>
                            </div>
                            <div class="shubhamcourse-btn">View Course
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                    <!--================ CARD =================-->
                    <a href="creative-writing.php" class="shubhamcourse-card shubham-writing" title="Creative Writing">
                        <div class="shubhamcourse-image">
                            <img src="assets/images/course/creative_writing.jpg" alt="Creative Writing" title="Creative Writing" loading="lazy">
                        </div>
                        <div class="shubhamcourse-content">
                            <div class="shubhamcourse-icon"><i class="fa-solid fa-pen"></i></div>
                            <h3>Creative Writing</h3>
                            <p>Develop imagination, storytelling and creative expression.</p>
                            <div class="shubhamcourse-features">
                                <span>Stories</span>
                                <span>Grammar</span>
                                <span>Creativity</span>
                            </div>
                            <div class="shubhamcourse-btn">View Course
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
<!-- ========== Shubham Rajput Course Section ============ -->

<?php include "common/footer.php"?>
<style>
    /*==========================
COURSE HERO
===========================*/

.course-hero{

height:550px;

display:flex;

align-items:center;

background:
linear-gradient(rgba(0,0,0,.60),rgba(0,0,0,.60)),
url(images/course-banner.jpg);

background-size:cover;

background-position:center;

text-align:center;

color:#fff;

}

.course-hero-content{

max-width:850px;

margin:auto;

}

.course-hero span{

display:inline-block;

padding:10px 24px;

background:rgba(255,255,255,.15);

border-radius:50px;

backdrop-filter:blur(10px);

margin-bottom:25px;

}

.course-hero h1{

font-size:65px;

margin-bottom:20px;

line-height:78px;

}

.course-hero p{

font-size:20px;

line-height:34px;

margin-bottom:40px;

color:#eee;

}

/*==========================
SEARCH BOX
===========================*/

.course-search{

display:flex;

justify-content:center;

max-width:650px;

margin:auto;

background:#fff;

padding:8px;

border-radius:60px;

overflow:hidden;

box-shadow:0 15px 40px rgba(0,0,0,.15);

}

.course-search input{

flex:1;

border:none;

outline:none;

padding:18px 25px;

font-size:17px;

}

.course-search button{

border:none;

background:linear-gradient(45deg,#ff5f6d,#ff9800);

color:#fff;

padding:18px 35px;

border-radius:50px;

cursor:pointer;

font-size:16px;

font-weight:600;

transition:.3s;

}

.course-search button:hover{

transform:scale(1.05);

}

</style>