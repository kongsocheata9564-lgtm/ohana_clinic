<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">

<!-- Banner -->
<section class="banner">
    <h1>Contact Us</h1>
    <br>
    <br>
    <div class="breadcrumb">
        <a href="index.php">Home</a> &gt; <span>Contact Us</span>
    </div>
</section>

<!-- Contact Content -->
<section class="contact">
    <h2>Contact Us</h2> 
    <div class="line"></div>
    <div class="box">
       <p>
            Inquiries are accepted by phone or the following inquiry form.<br>
            If you are in a hurry, please call us.
        </p>
        <div class="phone-box">
             📞 03-3987-3090
        </div>
    </div> 
</section>







<div class="container">

    <h1>Contact form</h1>
    <div class="title-line"></div>
    <form method="POST">

        <!-- Type -->
        <div class="form-row">
            <label>
                Type of inquiry
                <span class="required">Mandatory</span>
            </label>
            <select name="type" required>
                <option value="">Select</option>
                <option value="treatment">診療について</option>
                <option value="reservation">Reservation</option>
                <option value="other">Other</option>
            </select>
        </div>

        <!-- Name -->
        <div class="form-row">
            <label>
                Your name
                <span class="required">Mandatory</span>
            </label>
            <input type="text" name="name" required>
        </div>

        <!-- Furigana -->
        <div class="form-row">
            <label>
                Furigana
                <span class="required">Mandatory</span>
            </label>
            <input type="text" name="furigana" required>
        </div>

        <!-- Email -->
        <div class="form-row">
            <label>
                E-mail address
                <span class="required">Mandatory</span>
            </label>
            <input type="email" name="email" required>
        </div>

        <!-- Phone -->
        <div class="form-row">
            <label>
                Phone number
                <span class="required">Mandatory</span>
            </label>
            <input type="text" name="phone" required>
        </div>

    </form>
</div>










<div class="container1">

    <form method="POST">

        <!-- Inquiry -->
        <div class="form-row">
            <label>
                Your inquiry
                <span class="required">Mandatory</span>
            </label>

            <textarea name="inquiry" rows="8" required></textarea>
        </div>

        <!-- Button -->
        <div class="btn-wrapper">
            <button type="submit" class="confirm-btn">
                Go to the confirmation screen
            </button>
        </div>

    </form>