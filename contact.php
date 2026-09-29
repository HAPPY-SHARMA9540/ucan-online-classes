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

<style>

.contact-section{
    padding:80px 20px;
}

.container{
    max-width:1200px;
    margin:auto;
}

.section-title{
    text-align:center;
    margin-bottom:50px;
}

.section-title h2{
    font-size:40px;
    color:#222;
    margin-bottom:10px;
}

.section-title p{
    color:#666;
}

.contact-wrapper{
    display:flex;
    gap:30px;
    flex-wrap:wrap;
}

.contact-info,
.contact-form{
    flex:1;
    min-width:320px;
    background:#fff;
    padding:40px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.contact-info h3,
.contact-form h3{
    margin-bottom:25px;
    color:#222;
}

.info-box{
    display:flex;
    align-items:flex-start;
    gap:15px;
    margin-bottom:25px;
}

.info-box i{
    width:50px;
    height:50px;
    background:#007bff;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    font-size:20px;
}

.info-box h4{
    margin-bottom:5px;
    color:#222;
}

.info-box p{
    color:#666;
    line-height:1.6;
}

.contact-form form{
    display:flex;
    flex-direction:column;
    gap:20px;
}

.contact-form input,
.contact-form textarea{
    width:100%;
    padding:15px;
    border:1px solid #ddd;
    border-radius:8px;
    outline:none;
    font-size:15px;
}

.contact-form textarea{
    height:150px;
    resize:none;
}

.contact-form button{
    background:#007bff;
    color:#fff;
    border:none;
    padding:15px;
    font-size:16px;
    border-radius:8px;
    cursor:pointer;
    transition:.3s;
}

.contact-form button:hover{
    background:#0056b3;
}

.map-section{
    margin-top:50px;
}

.map-section iframe{
    width:100%;
    height:450px;
    border:none;
    border-radius:15px;
}

@media(max-width:768px){

    .contact-section{
        padding:60px 15px;
    }

    .section-title h2{
        font-size:30px;
    }

    .contact-info,
    .contact-form{
        padding:25px;
    }

    .map-section iframe{
        height:300px;
    }
}
</style>

<section class="contact-section">
    <div class="container">

        <div class="section-title">
            <h2>Contact Us</h2>
            <p>Feel Free To Contact Us Anytime</p>
        </div>

        <div class="contact-wrapper">

            <!-- Contact Info -->
            <div class="contact-info">

                <h3>Get In Touch</h3>

                <div class="info-box">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>
                        <h4>Address</h4>
                        <p>123 Business Street, New Delhi, India</p>
                    </div>
                </div>

                <div class="info-box">
                    <i class="fa-solid fa-phone"></i>
                    <div>
                        <h4>Phone</h4>
                        <p>+91 9876543210</p>
                    </div>
                </div>

                <div class="info-box">
                    <i class="fa-solid fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>info@example.com</p>
                    </div>
                </div>

                <div class="info-box">
                    <i class="fa-solid fa-clock"></i>
                    <div>
                        <h4>Working Hours</h4>
                        <p>Mon - Sat : 09:00 AM - 06:00 PM</p>
                    </div>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="contact-form">

                <h3>Send Message</h3>

                <form>
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="tel" placeholder="Phone Number" required>
                    <input type="text" placeholder="Subject">
                    <textarea placeholder="Write Your Message"></textarea>
                    <button type="submit">Send Message</button>
                </form>

            </div>

        </div>

        <!-- Google Map -->
        <div class="map-section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.48172865817!2d77.06889999108627!3d28.52728034674064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d194f2a5d3f39%3A0x4c4b6f6e8d2f6d9b!2sNew%20Delhi!5e0!3m2!1sen!2sin!4v1719999999999"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>

    </div>
</section>

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