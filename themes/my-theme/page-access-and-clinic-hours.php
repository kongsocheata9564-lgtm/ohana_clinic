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


.access-section {
    max-width: 900px;
    margin: 80px auto;
    padding: 0 20px;
    color: #4a3b2a;
}

.access-title {
    text-align: center;
    font-size: 28px;
    letter-spacing: 4px;
    margin-bottom: 10px;
}

.access-line {
    width: 40px;
    height: 2px;
    background: #e3c27a;
    margin: 0 auto 40px;
}

.access-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 15px;
}

.access-table th,
.access-table td {
    border: 1px solid #e6dccb;
    padding: 18px 20px;
    vertical-align: top;
}

.access-table th {
    width: 25%;
    background: #fbf4e9;
    font-weight: normal;
    text-align: left;
}

.access-table td {
    background: #ffffff;
}

.map-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: #b08a5a;
    text-decoration: none;
    font-size: 14px;
}

.map-link:hover {
    text-decoration: underline;
}

.map-icon {
    width: 16px;
    height: 16px;
    fill: #b08a5a;
}


.directions-section {
    padding: 50px 20px;
    font-family: "Helvetica Neue", Arial, sans-serif;
    background-color: #fff;
}

.container {
    max-width: 1000px;
    margin: 0 auto;
}

.section-title {
    font-size: 28px;
    color: #5d4037; /* Dark brownish color from your image */
    border-bottom: 2px solid #d4af37; /* Gold accent line */
    display: inline-block;
    padding-bottom: 5px;
    margin-bottom: 40px;
    font-weight: normal;
}

.directions-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: space-between;
}

.direction-item {
    flex: 0 1 calc(50% - 15px); /* Two columns */
    margin-bottom: 20px;
}

.image-wrapper {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    line-height: 0; /* Removes bottom gap in some browsers */
}

.image-wrapper img {
    width: 100%;
    height: 350px;
    object-fit: cover;
}

.step-number {
    position: absolute;
    top: 15px;
    left: 15px;
    color: rgba(255, 255, 255, 0.7);
    font-size: 24px;
    font-weight: bold;
}

.direction-text {
    margin-top: 15px;
    font-size: 14px;
    color: #444;
    line-height: 1.6;
    text-align: center;
}

.clinic-hours-section {
    padding: 60px 20px;
    background-color: #fff;
    text-align: center;
    font-family: "serif", "Times New Roman", Georgia; /* Matching the elegant font style */
}

.clinic-container {
    max-width: 1100px;
    margin: 0 auto;
}

.clinic-title {
    font-size: 36px;
    color: #5d4637;
    margin-bottom: 30px;
    font-weight: normal;
    letter-spacing: 2px;
}

/* Gold accent under the title */
.clinic-title::after {
    content: "";
    display: block;
    width: 40px;
    height: 2px;
    background-color: #f1c40f;
    margin: 10px auto 0;
}

.clinic-intro {
    margin-bottom: 30px;
    color: #444;
    font-size: 15px;
    line-height: 1.8;
}

/* Table Styling */
.table-responsive {
    overflow-x: auto; /* Allows scrolling on mobile */
    margin-bottom: 20px;
}

.clinic-table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #634b3d;
    background-color: #fff;
    font-size: 14px;
    color: #444;
}

.clinic-table th, .clinic-table td {
    border: 1px solid #634b3d;
    padding: 15px 10px;
    vertical-align: middle;
}

.clinic-table th {
    background-color: #fff9f5; /* Light cream tint for header */
    font-weight: normal;
}

.time-cell {
    background-color: #fff9f5;
    white-space: nowrap;
    font-weight: bold;
}

/* Footer Notes */
.clinic-notes {
    margin-top: 20px;
    font-size: 13px;
    color: #666;
    line-height: 1.6;
}

.red-text {
    color: #e74c3c;
}

</style>



<section class="first-visit-hero">
    <h1 class="first-visit-title">
        Access and Clinic Hours
    </h1>

    <div class="first-visit-breadcrumb">
        <a href="' . esc_url( http://ohana-clinic.test/ ) . '">Home</a>
        <span>›</span>
        <span>
            Access and Clinic Hours
        </span>
    </div>
</section>

<section class="access-section">
    <h2 class="access-title">Access</h2>
    <div class="access-line"></div>

    <table class="access-table">
        <tr>
            <th>Name</th>
            <td>Keiai Clinic</td>
        </tr>

        <tr>
            <th>Address</th>
            <td>
                〒170-0013<br>
                Fujigi Building 4F, 1-12-8 Higashi-Ikebukuro, Toshima-ku, Tokyo<br>

                <a 
                    href="https://www.google.com/maps/search/?api=1&query=Fujigi+Building+Higashi+Ikebukuro"
                    target="_blank"
                    class="map-link"
                >
                    <svg class="map-icon" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                    </svg>
                    Google Maps
                </a>
            </td>
        </tr>

        <tr>
            <th>Phone number</th>
            <td>
                <a href="tel:0339873090">03-3987-3090</a>
            </td>
        </tr>

        <tr>
            <th>Access</th>
            <td>A one-minute walk from Ikebukuro Station Exit 35.</td>
        </tr>
    </table>
</section>

<section class="directions-section">
    <div class="container">
        <h2 class="section-title">Directions</h2>
        
        <div class="directions-grid">
            <div class="direction-item">
                <div class="image-wrapper">
                    <span class="step-number">1</span>
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/images/bus1.jpg' ); ?>" alt="Director">

                </div>
                <p class="direction-text">Take the 35th exit of Ikebukuro Station.</p>
            </div>

            <div class="direction-item">
                <div class="image-wrapper">
                    <span class="step-number">2</span>
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/images/bus2.jpg' ); ?>" alt="Director">
                </div>
                <p class="direction-text">Walk towards Sunshine 60th Street.</p>
            </div>

            <div class="direction-item">
                <div class="image-wrapper">
                    <span class="step-number">3</span>
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/images/bus3.jpg' ); ?>" alt="Director">
                </div>
                <p class="direction-text">It is the 4th floor of Fujiki Building with Cafe Terrace Milky Way.</p>
            </div>

            <div class="direction-item">
                <div class="image-wrapper">
                    <span class="step-number">4</span>
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/images/bus4.jpg' ); ?>" alt="Director">
                </div>
                <p class="direction-text">From the entrance next to the elevator, you can go up to the 4th floor.</p>
            </div>
        </div>
    </div>
</section>


<section class="clinic-hours-section">
    <div class="clinic-container">
        <h2 class="clinic-title">Clinic hours</h2>
        
        <div class="clinic-intro">
            <p>The clinic is requested to make a reservation in advance as much as possible.</p>
            <p>Thank you for your understanding and cooperation.</p>
        </div>

        <div class="table-responsive">
            <table class="clinic-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Moon</th>
                        <th>Fire</th>
                        <th>Water</th>
                        <th>Tree</th>
                        <th>Gold</th>
                        <th>Sat</th>
                        <th>Sundays and holidays</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="time-cell">08:00-12:00</td>
                        <td>Takehara<br>Tanaka (guard)*1</td>
                        <td>Takehara</td>
                        <td>Takehara<br>Muraki</td>
                        <td>Takehara</td>
                        <td>Takehara<br>Muraki<br>Ohashi Bridge*2</td>
                        <td>/</td>
                        <td>/</td>
                    </tr>
                    <tr>
                        <td class="time-cell">09:00-12:00</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>Takehara</td>
                        <td>Takehara</td>
                    </tr>
                    <tr>
                        <td class="time-cell">18:00-20:00</td>
                        <td>Takehara<br>Sasaki</td>
                        <td>/</td>
                        <td>Takehara<br>Muraki</td>
                        <td>/</td>
                        <td>Takehara<br>Tokuoka</td>
                        <td>/</td>
                        <td>/</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="clinic-notes">
            <p class="red-text">It will be a complete reservation system.</p>
            <p>※1 2nd and 4th Mondays</p>
            <p>※2 2nd and 4th Fridays</p>
            <p class="red-text">* There are times when Director Takehara is absent on Monday afternoon.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>