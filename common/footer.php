<footer class="footer">

<div class="container">

<div class="footer-grid">

<div class="footer-about">

<h2>
Talent<span>Gum</span>
</h2>

<p>

Empowering kids with Coding, AI,
Robotics and Future Skills through
interactive live learning.

</p>

<div class="social-links">

<a href="#"><i class="fab fa-facebook-f"></i></a>

<a href="#"><i class="fab fa-instagram"></i></a>

<a href="#"><i class="fab fa-linkedin-in"></i></a>

<a href="#"><i class="fab fa-youtube"></i></a>

</div>

</div>


<div>

<h3>Quick Links</h3>

<ul>

<li><a href="#">Home</a></li>

<li><a href="#">About</a></li>

<li><a href="#">Courses</a></li>

<li><a href="#">Gallery</a></li>

<li><a href="#">Contact</a></li>

</ul>

</div>


<div>

<h3>Programs</h3>

<ul>

<li><a href="#">Coding</a></li>

<li><a href="#">Artificial Intelligence</a></li>

<li><a href="#">Robotics</a></li>

<li><a href="#">Public Speaking</a></li>

<li><a href="#">Game Development</a></li>

</ul>

</div>


<div>

<h3>Newsletter</h3>

<p>

Subscribe to get latest updates.

</p>

<form>

<input
type="email"
placeholder="Enter Your Email">

<button>

Subscribe

</button>

</form>

</div>

</div>


<div class="footer-bottom">

<p>

© 2026 TalentGum.
All Rights Reserved.

</p>

</div>

</div>

</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".shubhamgoogleReviewSlider", {

    loop:true,

    autoplay:{
        delay:3000,
        disableOnInteraction:false,
    },

    slidesPerView:1,
    slidesPerGroup:1,
    spaceBetween:25,

    pagination:{
        el:".swiper-pagination",
        clickable:true,
    },

    breakpoints:{
        768:{
            slidesPerView:2,
            slidesPerGroup:1
        },

        992:{
            slidesPerView:3,
            slidesPerGroup:1
        }
    }

});
</script>

<script>
/*=========================navbar menu=========================*/
const menuBtn = document.querySelector(".menu-toggle");
const closeBtn = document.querySelector(".close-menu");
const navbar = document.querySelector(".navbar");
const overlay = document.querySelector(".menu-overlay");
menuBtn.onclick = function(){
    navbar.classList.add("active");
    overlay.classList.add("active");
}
closeBtn.onclick = function(){
    navbar.classList.remove("active");
    overlay.classList.remove("active");
}
overlay.onclick = function(){
    navbar.classList.remove("active");
    overlay.classList.remove("active");
}
/*=========================navbar menu=========================*/
/*=========================PRELOADER=========================*/
window.addEventListener("load", () => {
    const loader = document.querySelector(".preloader");
    if(loader){
        loader.style.opacity = "0";
        setTimeout(() => {
            loader.style.display = "none";
        },500);
    }
});
/*=========================PRELOADER=========================*/
// banner slider
var swiper = new Swiper(".shubhamheroSwiper", {
    loop: true,
    effect: "fade",
    speed: 1200,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            speed: 800
        },
        768: {
            speed: 1200
        }
    }
});
// banner slider
// counter
const counters = document.querySelectorAll('.shubhamcounter-number');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            const counter = entry.target;
            const target = +counter.getAttribute('data-count');
            let current = 0;
            const increment = target / 150;
            const updateCounter = () => {
                current += increment;
                if(current < target){
                    if(target >= 1000){
                        counter.innerText = Math.floor(current).toLocaleString() + '+';
                    }else{
                        counter.innerText = Math.floor(current) + '+';
                    }
                    requestAnimationFrame(updateCounter);
                }else{
                    if(target >= 1000){
                        counter.innerText = target.toLocaleString() + '+';
                    }else{
                        counter.innerText = target + '+';
                    }
                }
            }
            updateCounter();
            observer.unobserve(counter);
        }
    });
},{
    threshold:0.5
});
counters.forEach(counter=>{
    observer.observe(counter);
});
// counter
document.addEventListener("DOMContentLoaded",()=>{

/*========================
CARD HOVER TILT
========================*/

const cards=document.querySelectorAll(".ucan-course-card");

cards.forEach(card=>{

card.addEventListener("mousemove",(e)=>{

const rect=card.getBoundingClientRect();

const x=e.clientX-rect.left;

const y=e.clientY-rect.top;

const rotateY=((x/rect.width)-0.5)*14;

const rotateX=((y/rect.height)-0.5)*-14;

card.style.transform=
`perspective(1000px)
rotateX(${rotateX}deg)
rotateY(${rotateY}deg)
translateY(-12px)`;

});

card.addEventListener("mouseleave",()=>{

card.style.transform=
"perspective(1000px) rotateX(0) rotateY(0) translateY(0)";

});

});


/*========================
BUTTON RIPPLE
========================*/

document.querySelectorAll(".course-btn").forEach(btn=>{

btn.addEventListener("click",function(e){

let ripple=document.createElement("span");

const rect=this.getBoundingClientRect();

const size=Math.max(rect.width,rect.height);

ripple.style.width=size+"px";
ripple.style.height=size+"px";

ripple.style.left=e.clientX-rect.left-size/2+"px";

ripple.style.top=e.clientY-rect.top-size/2+"px";

ripple.className="ripple";

this.appendChild(ripple);

setTimeout(()=>{

ripple.remove();

},700);

});

});


/*========================
SCROLL ANIMATION
========================*/

const observer=new IntersectionObserver(entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.classList.add("show");

}

});

},{
threshold:.15
});

document.querySelectorAll(".ucan-course-card,.bottom-item").forEach(el=>{

el.classList.add("hidden");

observer.observe(el);

});


/*========================
FLOATING EFFECT
========================*/

cards.forEach((card,index)=>{

setInterval(()=>{

card.style.transform="translateY(-6px)";

setTimeout(()=>{

card.style.transform="translateY(0px)";

},1200);

},3000+(index*400));

});


});
</script>


<!-- ================================back to top ==============================-->
 <script>

const backToTop = document.getElementById("backToTop");

window.addEventListener("scroll", () => {

    if(window.scrollY > 300){

        backToTop.classList.add("show");

    }else{

        backToTop.classList.remove("show");

    }

});

backToTop.addEventListener("click", () => {

    window.scrollTo({
        top:0,
        behavior:"smooth"
    });

});

</script>

<!-- ==============================FAQ================================= -->
 <script>
document.querySelectorAll('.question-btn').forEach(button => {

    button.addEventListener('click', function () {

        const item = this.parentElement;
        const answer = item.querySelector('.question-answer');
        const icon = this.querySelector('i');

        item.classList.toggle('active');

        if (item.classList.contains('active')) {
            answer.style.maxHeight = answer.scrollHeight + 'px';
            icon.classList.remove('fa-plus');
            icon.classList.add('fa-minus');
        } else {
            answer.style.maxHeight = null;
            icon.classList.remove('fa-minus');
            icon.classList.add('fa-plus');
        }

    });

});
</script>
</html>