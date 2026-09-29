
<?php include "common/header.php"?>
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


<section class="blog-section">
    <div class="container">

        <div class="section-heading">
            <span>OUR BLOG</span>
            <h2>Latest News & Articles</h2>
            <p>
                Stay updated with digital marketing trends, SEO tips,
                branding strategies, and business growth insights.
            </p>
        </div>

        <div class="blog-grid">

            <!-- Blog Card -->
            <div class="blog-card">
                <div class="blog-img">
                    <img src="assets/images/blog/blog1.png" alt="">
                </div>

                <div class="blog-content">

                    <div class="blog-meta">
                        <span>👤 Admin</span>
                        <span>💬 12 Comments</span>
                    </div>

                    <h3>
                        Public Speaking & Communication 101 (Grades 1-2)
                    </h3>

                    <p>
                        An engaging adventure in self-expression! Children discover how body language, tone, emotions, and storytelling shape communication. Through hands-on activities and performance based practice, they grow into clear, confident, and expressive speakers.      
                    </p>

                    <a href="#" class="read-btn">
                        Read More →
                    </a>

                </div>
            </div>

            <!-- Blog Card -->
            <div class="blog-card">
                <div class="blog-img">
                    <img src="assets/images/blog/blog2.png" alt="">
                </div>

                <div class="blog-content">

                    <div class="blog-meta">
                        <span>👤 Admin</span>
                        <span>💬 08 Comments</span>
                    </div>

                    <h3>
                        Public Speaking & Communication Star (Grades 1–2)
                    </h3>

                    <p>
                        The Public Speaking & Communication Star program helps children develop confidence, clear communication, and presentation skills from an early age. Through engaging activities, storytelling, voice modulation, body language practice, and interactive speaking exercises, students learn to express their thoughts effectively and confidently.
                    </p>

                    <a href="#" class="read-btn">
                        Read More →
                    </a>

                </div>
            </div>

            <!-- Blog Card -->
            <div class="blog-card">
                <div class="blog-img">
                    <img src="assets/images/blog/blog3.png" alt="">
                </div>

                <div class="blog-content">

                    <div class="blog-meta">
                        <span>👤 Admin</span>
                        <span>💬 16 Comments</span>
                    </div>

                    <h3>
                        Math Mastermind (Grade 5)
                    </h3>

                    <p>
                        A structured 81-lesson math journey where students deepen their understanding of numbers and operations, explore algebraic patterns, study geometry, measure accurately, and interpret data with confidence.
                    </p>

                    <a href="#" class="read-btn">
                        Read More →
                    </a>

                </div>
            </div>

            <!-- Blog Card -->
            <div class="blog-card">
                <div class="blog-img">
                    <img src="assets/images/blog/blog4.png" alt="">
                </div>

                <div class="blog-content">

                    <div class="blog-meta">
                        <span>👤 Admin</span>
                        <span>💬 08 Comments</span>
                    </div>

                    <h3>
                        Math Mastermind (Grade 4)
                    </h3>

                    <p>
                        A comprehensive 72-lesson math experience where students strengthen number operations, work with fractions and decimals, explore geometry, measure real-world quantities, identify patterns, and begin learning probability and data handling.
                    </p>

                    <a href="#" class="read-btn">
                        Read More →
                    </a>

                </div>
            </div>

            <!-- Blog Card -->
            <div class="blog-card">
                <div class="blog-img">
                    <img src="assets/images/blog/blog5.png" alt="">
                </div>

                <div class="blog-content">

                    <div class="blog-meta">
                        <span>👤 Admin</span>
                        <span>💬 16 Comments</span>
                    </div>

                    <h3>
                        Math Mastermind (Grade 2)
                    </h3>

                    <p>
                        A playful 72-lesson math journey where learners work with numbers, solve exciting problems, explore shapes, measure everyday objects, and start reading and understanding simple data.
                    </p>

                    <a href="#" class="read-btn">
                        Read More →
                    </a>

                </div>
            </div>

        </div>

    </div>
</section>

<?php include "common/footer.php"?>

<style>
    .blog-section{
    padding:100px 0;
    background:#f7f8fc;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

.section-heading{
    text-align:center;
    margin-bottom:60px;
}

.section-heading span{
    color:#ff5a3c;
    font-weight:600;
    letter-spacing:2px;
}

.section-heading h2{
    font-size: 32px;
    font-weight: 600;
    line-height: 38px;
    color: #000000;
    margin-bottom: 10px;
}

.section-heading p{
    color:#666;
    max-width:650px;
    margin:auto;
    line-height:1.8;
}

.blog-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:35px;
}

.blog-card{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    transition:.4s;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.blog-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 45px rgba(0,0,0,.12);
}

.blog-img{
    position:relative;
    overflow:hidden;
}

.blog-img img{
    width:100%;
    height:250px;
    object-fit:cover;
    transition:.5s;
    display:block;
}

.blog-card:hover img{
    transform:scale(1.08);
}

.blog-date{
    position:absolute;
    top:20px;
    left:20px;
    width:60px;
    height:70px;
    background:#ff5a3c;
    color:#fff;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    font-weight:700;
    line-height:1.3;
}

.blog-content{
    padding:30px;
}

.blog-meta{
    display:flex;
    justify-content:space-between;
    margin-bottom:18px;
    font-size:14px;
    color:#777;
}

.blog-content h3{
    font-size: 16px;
    color: #111;
    margin-bottom: 15px;
    line-height: 1.4;
    font-weight: 500;
}

.blog-content p{
    color: #666;
    line-height: 1.8;
    margin-bottom: 25px;
    font-size: 12px;
}

.read-btn{
    text-decoration:none;
    color:#ff5a3c;
    font-weight:700;
    transition:.3s;
}

.read-btn:hover{
    letter-spacing:1px;
}

/* Tablet */

@media(max-width:992px){

.blog-grid{
grid-template-columns:repeat(2,1fr);
}

}

/* Mobile */

@media(max-width:768px){

.blog-grid{
grid-template-columns:1fr;
}

.section-heading h2{
font-size:32px;
}

.blog-content{
padding:25px;
}

.blog-content h3{
font-size:21px;
}

}
</style>

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