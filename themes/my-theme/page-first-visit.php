<?php get_header(); ?>

<style>
.first-visit-hero {
    width: 100%;
    height: 45vh;
    background-image: url('<?php echo get_template_directory_uri(); ?>/asset/images/hero-section4.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
 }

/* soft overlay like design */
.first-visit-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(255, 255, 255, 0.6);
}

.first-visit-hero * {
    position: relative;
}

.first-visit-title {
    font-size: 36px;
    letter-spacing: 6px;
    color: #4a3b2a;
    margin-bottom: 20px;
    font-family: 'Georgia', serif;
}

.first-visit-breadcrumb {
    font-size: 14px;
    color: #6f6252;
}

.first-visit-breadcrumb a {
    color: #6f6252;
    text-decoration: none;
}

.first-visit-breadcrumb span {
    margin: 0 6px;
}

.first-visit-content {
    max-width: 900px;
    margin: 80px auto;
    padding: 0 20px;
    color: #4a3b2a;
    font-size: 15px;
    line-height: 1.8;
}

.section-block {
    margin-bottom: 50px;
    text-align: center;
}

.section-block h2 {
    font-size: 28px;
    letter-spacing: 4px;
    margin-bottom: 20px;
}

.section-line {
    width: 100px;
    height: 3px;
    background: #e3c27a;
    margin: 0 auto 30px;
}

.note-list,
.need-list {
    text-align: left;
    max-width: 700px;
    margin: auto;
}

.note-item,
.need-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 15px;
}

.dot {
    width: 8px;
    height: 8px;
    background: #e3c27a;
    border-radius: 50%;
    margin-top: 8px;
    flex-shrink: 0;
}

.need-item strong {
    display: block;
}

.sub-title {
    text-align: left;
    font-size: 20px;
    margin: 40px auto 20px;
    max-width: 700px;
}

.cost-text {
    max-width: 700px;
    margin: auto;
    text-align: left;
}

.cost-button {
    display: inline-block;
    margin-top: 30px;
    padding: 12px 30px;
    background: #f1c75b;
    color: #ffffff;
    border-radius: 30px;
    text-decoration: none;
    font-size: 14px;
}
</style>



<section class="first-visit-hero">
    <h1 class="first-visit-title">First visit</h1>

    <div class="first-visit-breadcrumb">
        <a href="' . esc_url( http://ohana-clinic.test/ ) . '">Home</a>
        <span>›</span>
        <span>First visit</span>
    </div>
</section>

<div class="first-visit-content">

    <!-- Notes -->
    <div class="section-block">
        <h2>Notes on the first visit reservation</h2>
        <div class="section-line"></div>

        <div class="note-list">
            <div class="note-item">
                <div class="dot"></div>
                <p>Only those who are registered can make a reservation at our hospital. (Undocumented registration is not possible.)</p>
            </div>

            <div class="note-item">
                <div class="dot"></div>
                <p>
                    I would like to hear your story firmly, so it takes about two hours from your visit to the accounting.
                    Depending on the congestion situation, you may have to wait even longer, so please come to the hospital with plenty of time.
                </p>
            </div>
        </div>
    </div>

    <!-- Belongings -->
    <div class="section-block">
        <h2>About your belongings</h2>
        <div class="section-line"></div>

        <div class="sub-title">What you need</div>

        <div class="need-list">
            <div class="need-item">
                <div class="dot"></div>
                <p>
                    <strong>Your spouse's health insurance card</strong>
                    Please note that your reservation will be canceled if you forget it.
                </p>
            </div>

            <div class="need-item">
                <div class="dot"></div>
                <p>
                    <strong>Certificate of registration or family register</strong>
                    (within three months after issuance)
                </p>
            </div>

            <div class="need-item">
                <div class="dot"></div>
                <p>
                    <strong>Referral letter</strong>
                    (only for those who have been treated or tested at another hospital)
                </p>
            </div>

            <div class="need-item">
                <div class="dot"></div>
                <p>
                    <strong>Basal body temperature table</strong>
                    (as shown in the graph)
                </p>
            </div>
        </div>
    </div>

    <!-- Cost -->
    <div class="section-block">
        <h2>About the cost of the test at the time of the first visit</h2>
        <div class="section-line"></div>

        <div class="cost-text">
            <p>
                In order to perform accurate treatment, we ask you to perform the following tests
                at your own expense at the time of your first visit.
                Our hospital is a designated medical institution for the Tokyo Metropolitan Government's
                specified fertility treatment subsidy project.The Tokyo Metropolitan Government subsidizes part of the cost of testing and treatment.
            </p>

            <p>Please check the following website for details.</p>

            <a href="#" class="cost-button">
                Fertility Testing Grants | The Tokyo Metropolitan Government Welfare Bureau →
            </a>
        </div>
    </div>

</div>