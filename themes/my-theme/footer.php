<style>
/* Footer Wrapper */
.site-footer {
    font-family: "Helvetica Neue", Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", sans-serif;
    color: #5d4037;
    padding: 40px 20px;
    max-width: 1100px;
    margin: 0 auto;
    line-height: 1.5;
}

/* 1. Top Navigation Menu */
.footer-nav {
    display: flex;
    justify-content: center;
    gap: 25px;
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.footer-nav li a {
    text-decoration: underline;
    color: #5d4037;
    font-size: 14px;
    display: flex;
    align-items: center;
}

/* Red arrow icon before links */
.footer-nav li a::before {
    content: '>';
    color: #d32f2f;
    font-weight: bold;
    margin-right: 8px;
    font-size: 12px;
}

.footer-nav li a:hover {
    color: #f5c24c
}


.footer-flex-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
    gap: 40px;
    border-top: 1px solid #e0e0e0;
    padding-top: 40px;
}

/* Left Column: Brand and Address */
.footer-brand-section {
    flex: 1;
    min-width: 300px;
}

.footer-logo-container {
    display: flex;
    align-items: center;
    gap: 15px;
    width: 250px;
    margin-bottom: 25px;
}

.clinic-icon {
    width: 60px; /* Adjust size as needed */
    height: auto;
}


.info-group h4 {
    font-size: 16px;
    margin: 20px 0 5px 0;
    font-weight: bold;
    position: relative;
}

/* Underline style from image */
.info-group h4::after {
    content: '';
    display: block;
    width: 60px;
    height: 1px;
    background: #5d4037;
    margin-top: 2px;
}

.info-group p {
    margin: 0;
    font-size: 14px;
    color: #555;
}

.contact-row {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 25px;
}

.phone-icon-link {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 22px;
    font-weight: bold;
    color: #5d4037;
    text-decoration: underline;
}

.booking-button {
    background-color: #fbc02d;
    color: #5d4037;
    padding: 10px 20px;
    border-radius: 30px;
    text-decoration: underline;
    font-weight: bold;
    font-size: 13px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Right Column: Schedule Table */
.footer-schedule-section {
    flex: 2;
    min-width: 400px;
}

.schedule-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px;
}

.schedule-table th {
    background-color: #fffaf0;
    font-weight: normal;
    padding: 12px 5px;
    color: #8d6e63;
}

.schedule-table td {
    padding: 10px 5px;
    border-bottom: 1px solid #f5f5f5;
    text-align: center;
    vertical-align: middle;
}

.sunday-col { color: #d32f2f; }

.schedule-notes {
    margin-top: 15px;
    font-size: 12px;
    color: #d32f2f;
}

/* Bottom Copyright & Social */
.footer-bottom {
    text-align: center;
    margin-top: 60px;
    font-size: 18px;
}

.insta-link {
    text-decoration: underline;
    color: #5d4037;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    margin-bottom: 10px;
}

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<footer class="site-footer">
    <nav>
        <ul class="footer-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/first-visit">First visit</a></li>
            <li><a href="/about">About our hospital</a></li>
            <li><a href="/medical-info">Medical Information</a></li>
            <li><a href="/access">Access and Clinic Hours</a></li>
            <li><a href="/contact">Contact Us</a></li>
        </ul>
    </nav>
    <div class="footer-flex-container">
        <div class="footer-brand-section">
            <div class="footer-logo-container">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/images/clinic.svg' ); ?>" alt="">
                
            </div>
            
            <div class="info-group">
                <h4>Location</h4>
                <p>〒170-0013<br>
                Fujigi Bldg. 4F, 1-12-8 Higashi-Ikebukuro,<br>
                Toshima-ku, Tokyo</p>
            </div>

            <div class="info-group">
                <h4>Medical Subjects</h4>
                <p>Gynecologist</p>
            </div>

            <div class="contact-row">
                <a href="tel:0339873090" class="phone-icon-link">
                    <i class="fas fa-phone-alt" style="font-size: 16px;"></i> 03-3987-3090
                </a>
                <a href="#" class="booking-button">
                    <i class="far fa-calendar-alt"></i> WEB BOOKING
                </a>
            </div>
        </div>

        <div class="footer-schedule-section">
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Moon</th>
                        <th>Fire</th>
                        <th>Water</th>
                        <th>Tree</th>
                        <th>Gold</th>
                        <th>Sat</th>
                        <th class="sunday-col">Sun/Hol</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>08:00-12:00</td>
                        <td>Takehara<br>Tanaka<br>(guard)*1</td>
                        <td>Takehara</td>
                        <td>Takehara<br>Muraki</td>
                        <td>Takehara</td>
                        <td>Takehara<br>Muraki<br>Ohashi<br>Bridge*2</td>
                        <td>/</td>
                        <td>/</td>
                    </tr>
                    <tr>
                        <td>09:00-12:00</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>Takehara</td>
                        <td>Takehara</td>
                    </tr>
                    <tr>
                        <td>18:00-20:00</td>
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

            <div class="schedule-notes">
                <p>It will be a complete reservation system.</p>
                <p style="color:black;">*1 2nd and 4th Mondays<br>
                *2 2nd and 4th Fridays</p><br>
                <p style="margin-top: -25px;">* There are times when Director Takehara is absent on Monday afternoon.</p>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <a href="https://www.instagram.com/keiaiclinic/" class="insta-link" target="_blank">
            <i class="fab fa-instagram"></i> Instagram
        </a>
        <p>© <?php echo date("Y"); ?> KEIAI CLINIC</p>
    </div>
</footer>