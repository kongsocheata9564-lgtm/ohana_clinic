<?php get_header(); ?>

<style>
    .hero-section {
    position: relative;
    width: 100%;
    height: 90vh;
    background-image: url('<?php echo get_template_directory_uri(); ?>/asset/images/hero-section1.jpg');
    background-size: cover;
    background-position: center right;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
}

/* Optional soft overlay like medical sites */
.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to right,
        rgba(245, 249, 252, 0.94) 40%,
        rgba(245, 249, 252, 0.6) 55%,
        rgba(245, 249, 252, 0.1) 70%,
        rgba(245, 249, 252, 0) 100%
    );
}

.hero-content {
    position: relative;
    max-width: 600px;
    padding-left: 80px;
}

.hero-content h1 {
    font-size: 48px;
    font-weight: 700;
    line-height: 1.2;
    color: #1c2b36;
    margin-bottom: 30px;
}

.hero-content h1 span {
    color: #2b7cff;
}

.hero-btn {
    display: inline-block;
    padding: 14px 32px;
    background: #f5c24c;
    color: #ffffff;
    text-decoration: none;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.hero-btn:hover {
    background: #1f255e;
}

.news-section {
    padding: 80px 0;
    background: #ffffff;
}

.news-container {
    max-width: 1000px;
    margin: auto;
    background: #1f255ed0;
    border-radius: 20px;
    padding: 60px;
    display: flex;
    gap: 60px;
}

.news-left {
    width: 30%;
}

.news-label {
    font-size: 25px;
    color: #f7f6f4ff;
    letter-spacing: 2px;
}

.news-left h2 {
    font-size: 45px;
    margin: 20px 0;
    color: #f5c24c;
}

.news-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 35px;
    border: 1px solid #f5c24c;
    border-radius: 30px;
    text-decoration: none;
    color: #f5f4f1ff;
    font-size: 14px;
}

.news-right {
    width: 70%;
}

.news-item {
    display: flex;
    gap: 30px;
    padding: 25px 0;
    border-bottom: 1px solid #e6dccb;
    cursor: pointer;
}

.news-text {
    font-size: 15px;
    line-height: 1.6;
    color: #f2ededff;
    transition: color 0.3s ease;
}

/* HOVER EFFECT */
.news-item:hover .news-text {
    color: #f5c24c; /* soft brown like design */
}

.news-item:last-child {
    border-bottom: none;
}

.news-date {
    min-width: 140px;
    font-size: 14px;
    color: #f5f3efff;
}

.news-date span {
    display: block;
}

.coe-section {
    position: relative;
    padding: 100px 20px;
    /* Replace 'your-image.jpg' with your actual background image URL */
    background: url('<?php echo get_template_directory_uri(); ?>/asset/images/hero-section2.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
    color: #ffffff;
    text-align: center;
    overflow: hidden;
}

/* Dark Blue Overlay to match the image */
.coe-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(54, 61, 69, 0.76); /* Deep blue with 85% opacity */
    z-index: 1;
}

.coe-container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
}

.coe-title {
    font-size: 36px;
    color: #f5c24c; /* Teal title */
    margin-bottom: 60px;
    font-weight: 700;
    text-transform: capitalize;
}

.coe-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 50px 30px;
}

.coe-card {
    padding: 10px;
}

/* Icon Styling (Using FontAwesome) */
.coe-card i {
    font-size: 55px;
    color: #ffffff;
    margin-bottom: 25px;
    display: block;
}

.coe-card h3 {
    color: #f5c24c;
    font-size: 22px;
    margin-bottom: 15px;
    font-weight: 600;
}

.coe-card p {
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 25px;
    color: #d1d1d1;
}

/* Rounded Button Styling */
.coe-btn {
    background-color: #f5c24f;
    color: #ffffff;
    padding: 12px 35px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    display: inline-block;
    transition: 0.3s ease;
    text-transform: uppercase;
}

.coe-btn:hover {
    background-color: #1f255e;
    color: #eae8e3ff;
}

/* ===== Director Message Section ===== */
.director-section {
    padding: 80px 20px;
    background: #faf7f2;
    font-family: Georgia, "Georgia", serif;
}
.director-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 60px;
}
.director-text { flex: 1; }
.director-label {
    font-size: 30px;
    letter-spacing: 2px;
    color: #9a9a9a;
    margin-bottom: -40px;
    font-family: 'Georgia', serif;
    
}
.director-title {
    font-size: 65px;
    line-height: 1.3;
    margin-bottom: 30px;
}
.director-title .highlight {
    color: #f5c24c;
}
.director-title .dark {
    color: #2c1f18;
}
.director-description {
    font-size: 25px;
    line-height: 1.9;
    color: #555;
    max-width: 520px;
    margin-bottom: 40px;
}
.director-button {
    /* font-weight: bold; */
    display: inline-block;
    padding: 14px 98px;
    border: 1px solid #f5c24c;
    border-radius: 30px;
    color: #f5c24c;
    text-decoration: none;
    font-size: 20px;
    transition: 0.3s;
}
.director-button:hover {
    background: #1f255e;
    color: #fff;
}
.director-image-wrap {
    flex: 1;
    position: relative;
    text-align: center;
}
.director-image-wrap img {
    max-width: 100%;
    border-radius: 4px;
}
.director-name {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(255,255,255,0.9);
    padding: 16px 40px;
    font-size: 18px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}
.director-name span {
    font-size: 14px;
    color: #777;
    margin-right: 6px;
}



.medical-section {
    background-color: #fbf3e8;
    padding: 90px 5%;
    font-family: 'Georgia', serif;
    text-align: center;
}

/* TOP CENTER TEXT */
.medical-header h3 {
    letter-spacing: 2px;
    font-size: 35px;
    color: #9b8c7a;
    margin-top: -60px;
}

.medical-header h2 {
    font-size: 48px;
    color: #3a2f25;
    margin-top: -25px;
    margin-bottom: 70px;
}

/* FOUR FLEX CARDS */
.medical-cards {
    display: flex;
    gap: 25px;
    justify-content: center;
    /* flex-wrap: wrap; */
}

.medical-card {
    background: #ffffff;
    width: 24%;
    padding: 35px 25px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
}

.medical-card h3 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #3a2f25;
}

.medical-card p {
    font-size: 14px;
    line-height: 1.7;
    color: #6d6258;
    margin-bottom: 25px;
}

.medical-card a {
    display: inline-block;
    padding: 10px 24px;
    background-color: #e6b65c;
    color: #fff;
    border-radius: 30px;
    font-size: 13px;
    text-decoration: none;
    transition: background 0.3s ease;
}

.medical-card a:hover {
    background-color: #d9a948;
}
.medical-button {
    /* font-weight: bold; */
    display: inline-block;
    padding: 14px 98px;
    border: 1px solid #f5c24c;
    border-radius: 30px;
    color: #f5c24c;
    text-decoration: none;
    font-size: 20px;
    transition: 0.3s;
    margin-top: 50px;
}
.medical-button:hover {
    background: #1f255e;
    color: #fff;
}



.gallery-section {
    padding: 60px 20px;
    max-width: 1200px;
    margin: 0 auto;
    font-family: 'Georgia', serif;/* Adjust to match your site font */
}

.gallery-header {
    margin-bottom: 40px;
}

.gallery-header span {
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 20px;
    color: #666;
    /* margin-left: 43%; */
}

.gallery-header h2 {
    font-size: 48px;
    margin: 10px 0;
    font-family: 'Georgia', serif; 
    /* margin-left: 43%; */
}

/* Grid Layout */
.gallery-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); 
    gap: 20px;
    margin-bottom: 40px;
}

.gallery-item {
    background: #fff;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
}

.gallery-item img {
    width: 100%;
    height:100%;
    border-radius: 10px;
    object-fit: cover;
    margin-bottom: 15px;
}


/* Hospital Link */
.hospital-button {
    /* font-weight: bold; */
    display: inline-block;
    padding: 14px 98px;
    border: 1px solid #f5c24c;
    border-radius: 30px;
    color: #f5c24c;
    text-decoration: none;
    font-size: 20px;
    transition: 0.3s;
    /* margin-left: 30%; */
    
    /* margin-top: 50px; */
}
.hospital-button:hover {
    background: #1f255e;
    color: #fff;
}


.reservation-section {
    background-color: #f5c24c;
    padding: 80px 20px;
    font-family: 'Georgia', serif; 
}

.reservation-card {
    background-color: #fffbf2ab;
    max-width: 900px;
    margin: 0 auto;
    padding: 60px 40px;
    border-radius: 16px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

/* Title Styling with Watermark */
.reservation-title-wrap {
    position: relative;
    margin-bottom: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.reservation-bg-text {
    position: absolute;
    font-size: 90px;
    font-weight: 900;
    color: rgba(255, 255, 255, 0.8);
    letter-spacing: 0.15em;
    text-transform: uppercase;
    z-index: 1;
    user-select: none;
}

.reservation-main-title {
    position: relative;
    z-index: 2;
   font-family: 'Georgia', serif; 
    font-size: 48px;
    color: #4a3424;
    margin: 0;
    letter-spacing: 2px;
}

.reservation-desc {
    font-size: 18px;
    color: #5a4a3a;
    line-height: 1.8;
    margin-bottom: 35px;
}

/* Button Layout */
.reservation-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 35px;
}

.res-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 320px;
    padding: 18px 0;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 18px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.res-btn:hover {
    opacity: 0.9;
    transform: translateY(-2px);
}

.btn-phone {
    background-color: #ffffff;
    color: #4a3424;
}

.btn-web {
    background-color: #ebbf64;
    color: #4a3424;
}


.res-btn i {
    margin-right: 15px;
    font-size: 20px;
}

.inquiry-text {
    font-size: 18px;
    color: #8c7a6b;
    margin-bottom: 30px;
}

.contact-bar {
    border: 1px solid #f5c24c;
    border-radius: 50px;
    padding: 15px 30px;
    text-align: left;
    max-width: 800px;
    margin: 0 auto;
}

.contact-bar a {
    color: #d1a17b;
    text-decoration: none;
    font-size: 14px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}




</style>


    <section class="hero-section">
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1>
            <span>HEALTH CARE</span><br>
            FOR WHOLE FAMILY
        </h1>

        <a href="#appointment" class="hero-btn">
            MAKE AN APPOINTMENT
        </a>
    </div>
</section>

<section class="news-section">
    <div class="news-container">

        <!-- Left -->
        <div class="news-left">
            <span class="news-label">— NEWS</span>
            <h2>News</h2>

            <a href="#" class="news-btn">News List →</a>
        </div>

        <!-- Right -->
        <div class="news-right">

            <div class="news-item">
                <div class="news-date">
                    <span>12th December</span>
                    <span>2025</span>
                </div>
                <div class="news-text">
                    New Year's Holiday
                </div>
            </div>

            <div class="news-item">
                <div class="news-date">
                    <span>20th October</span>
                    <span>20th, 2025</span>
                </div>
                <div class="news-text">
                    Information on the expansion of the target of PGT-A examination
                    in insurance medical care and the accompanying information session
                    schedule for in vitro fertilization briefing sessions
                </div>
            </div>

            <div class="news-item">
                <div class="news-date">
                    <span>20th October</span>
                    <span>20th, 2025</span>
                </div>
                <div class="news-text">
                    Notice of change in clinic hours
                </div>
            </div>

        </div>

    </div>
</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<section class="coe-section">
    <div class="coe-overlay"></div>
    <div class="coe-container">
        <h2 class="coe-title">Center of Excellence</h2>
        
        <div class="coe-grid">
            <div class="coe-card">
                <i class="fa-solid fa-bone"></i>
                <h3>Orthopaedics</h3>
                <p>Oncology is the branch of medicine that deals with the diagnosis</p>
                <a href="' . esc_url( http://ohana-clinic.test/about-our-hospital/ ) . '" class="coe-btn">Read More</a>
            </div>

            <div class="coe-card">
                <i class="fa-solid fa-microscope"></i>
                <h3>Oncology</h3>
                <p>The branch of medicine involves the invasive and non-invasive</p>
                <a href="' . esc_url( http://ohana-clinic.test/about-our-hospital/ ) . '" class="coe-btn">Read More</a>
            </div>

            <div class="coe-card">
                <i class="fa-solid fa-baby"></i>
                <h3>Pediatrics</h3>
                <p>Ohana Clinic has the state of art operation theatre furnished</p>
                <a href="' . esc_url( http://ohana-clinic.test/about-our-hospital/ ) . '" class="coe-btn">Read More</a>
            </div>

            <div class="coe-card">
                <i class="fa-solid fa-hand-dots"></i>
                <h3>Dermatology</h3>
                <p>The Dermatology department at Ohana Clinic ranks as one of the best</p>
                <a href="' . esc_url( http://ohana-clinic.test/about-our-hospital/ ) . '" class="coe-btn">Read More</a>
            </div>

            <div class="coe-card">
                <i class="fa-solid fa-wheelchair"></i>
                <h3>Physiotherapy</h3>
                <p>Physiotherapy is generally seen as an external treatment</p>
                <a href="' . esc_url( http://ohana-clinic.test/about-our-hospital/ ) . '" class="coe-btn">Read More</a>
            </div>

            <div class="coe-card">
                <i class="fa-solid fa-mask-ventilator"></i>
                <h3>Anaesthesia</h3>
                <p>Ohana Clinic has the state of art operation theatre furnished</p>
                <a href="' . esc_url( http://ohana-clinic.test/about-our-hospital/ ) . '" class="coe-btn">Read More</a>
            </div>
        </div>
    </div>
</section>

<section class="director-section">
    <div class="director-container">

        <div class="director-text">
            <div class="director-label">— MESSAGE</div>

            <h2 class="director-title">
                <span class="highlight">Warm medical treatment</span>
                <span class="dark"> and Provide</span>
            </h2>

            <p class="director-description">
                The hospital's philosophy of "infertility treatment with better friends"
                includes the desire to make patients, doctors, and staff communicate, and to
                perform fertility treatment that tends to be dark. In addition, we incorporate
                new tests, treatments, and technologies while supporting as many patients as
                possible so more families can have children.
            </p>

            <a class="director-button" href="' . esc_url( http://ohana-clinic.test/about-our-hospital/ ) . '">
                Director's Introduction →
            </a>
        </div>

        <div class="director-image-wrap">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/images/doctor1.jpg' ); ?>" alt="Director">
            <div class="director-name">
                <span>Director</span> Yushi Takehara
            </div>
        </div>

    </div>
</section>

<!-- Medical Information Section -->
<section class="medical-section">
    <!-- TOP CENTER TEXT -->
    <div class="medical-header">
        <h3>— TREATMENT</h2>
        <h2>Medical Information</h2>
    </div>

    <!-- FOUR FLEX CARDS BOTTOM -->
    <div class="medical-cards">

        <div class="medical-card">
            <h3>In Vitro Fertilization</h3>
            <p>
                It is a treatment that promotes implantation by removing eggs that have grown 
                up to near ovulation by egg retrieval surgery outside the body, fertilizing it
                with the sperm of the partner, and converting the fertilized egg that has been 
                successfully fertilized and divided back into the uterus.successfully fertilized and divided.
            </p>
            <a href="#">See more</a>
        </div>

        <div class="medical-card">
            <h3>Fertility Treatment</h3>
            <p>
                Throughout the treatment, our medical team closely monitors progress 
                to ensure safety and effectiveness. We also provide emotional support 
                and counseling, understanding that fertility treatment can be both physically 
                and emotionally challenging.We provide safe fertility care to help families grow.
            </p>
            <a href="#">See more</a>
        </div>

        <div class="medical-card">
            <h3>Fertility testing</h3>
            <p>
                Fertility testing checks the reproductive health of both women and men to 
                identify possible causes of difficulty conceiving. It includes hormone tests, 
                ultrasound scans, and ovulation assessment for women, and semen analysis for men.
                The results help doctors create a personalized treatment plan and guide the next 
                steps in fertility care.
            </p>
            <a href="#">See more</a>
        </div>

        <div class="medical-card">
            <h3>Imaturity</h3>
            <p>
                Reproductive immaturity is a condition where the reproductive system
                or hormones are not fully developed, which can affect fertility. It can
                be diagnosed through medical tests and managed with proper treatment, helping
                improve reproductive health and the chance of conception.Immaturity can affect fertility.
            </p>
            <a href="#">See more</a>
        </div>


    </div>
    <a class="medical-button" href="' . esc_url( http://ohana-clinic.test/about-our-hospital/ ) . '">
        Other treatments and test. →
     </a>

</section>


<section class="gallery-section">
    <div class="gallery-header">
        <span>— GALLERY</span>
        <h2>Gallery</h2>
    </div>

    <div class="gallery-container">
        <div class="gallery-item">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/images/doctor2.jpg' ); ?>" alt="Director">
        </div>

        <div class="gallery-item">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/images/doctor3.jpg' ); ?>" alt="Director">
        </div>

        <div class="gallery-item">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/images/doctor4.jpg' ); ?>" alt="Director">
        </div>
    </div>

    <a class="hospital-button" href="' . esc_url( http://ohana-clinic.test/about-our-hospital/ ) . '">
        Introduction of the hospital. →
    </a>

    
</section>


<section class="reservation-section">
    <div class="reservation-card">
        
        <div class="reservation-title-wrap">
            <div class="reservation-bg-text">RESERVE</div>
            <h2 class="reservation-main-title">Reservation</h2>
        </div>

        <p class="reservation-desc">
            Reservations are accepted by phone and web reservation.<br>
            If you are in a hurry, please call us.
        </p>

        <div class="reservation-buttons">
            <a href="' . esc_url( http://ohana-clinic.test/contact-us/ ) . '" class="res-btn btn-phone">
                <i class="fa-solid fa-phone"></i> 03-3987-3090
            </a>
            <a href="' . esc_url( http://ohana-clinic.test/contact-us/ ) . '" class="res-btn btn-web">
                <i class="fa-solid fa-calendar-days"></i> WEB BOOKING
            </a>
        </div>

        <p class="inquiry-text">It may take some time to respond to your inquiry via the inquiry form.</p>

        <div class="contact-bar">
            <a href="' . esc_url( http://ohana-clinic.test/contact-us/ ) . '">
                <span>Contact Us</span>
                <i class="fa-solid fa-chevron-right" style="font-size: 12px;"></i>
            </a>
        </div>

    </div>
</section>
<?php get_footer(); ?>