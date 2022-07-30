<?php require APPROOT . '/views/inc/head.php';?>
<section class="about-header">
    <?php require APPROOT . '/views/inc/navbar.php';?>
    <div class="about-logo">
        <img style="width:200px; height:200px" src="<?= URLPUB ?>/images/eSports-logo-white.png" alt="">
    </div>
</section>

<section class="about-us">
    <div class="who-we-are">
        <h1>Who We are</h1>
        <p>We are a community first. We accept all people regardless of race, gender, sexual orientation/identity, and physical and/or mental abilities.
        </p>
        <p>We are made up of 40% freshmen, 40% sophomores and juniors and 20% seniors, grad students and post-baccalaureate students. We represent over 22 different majors across campus. We have students from all over the US and beyond.
        </p>
    </div>

    <div class="our-focus">
    <h1>What is our focus?</h1>
        <strong> We have three priorities:</strong>
            <li>1. Community for everyone</li>
            <li>2. Academic excellence in school, internships, community collaboration and involvement, and leadership and communication</li>
           <li>3. Healthy, positive game play in every competitive match</li> 
    </div>

    <div class="what-it-means">
      <h1>What does this mean?</h1>
      <p>
        This means we are always looking to expand our community. We are an open and inviting group where everyone is accepted regardless of your background.<br> <br>
        We continue to reach out to those who are looking for a place to call home.
      </p> 
    </div>
</section>

<section class="contact-us">
    <div class="contact-header">
        <h1>CONTACT US</h1>
    </div>

        <form class="contact-form" action="">

           <div class="form-field">
            <label for="firstname">Firstname: </label>
            <input type="text" name="firstname">
           </div>

           <div class="form-field">
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname">
           </div>

           <div class="form-field">
            <label for="email">Email:</label>
            <input type="email" name="email">
           </div>

           <div class="form-field">
            <label for="email">Message:</label>
            <textarea rows="5" cols="33" placeholder="Message...">
            </textarea>
           </div>
            <button class="form-btn">SEND</button>
        </form>

</section>
<?php require APPROOT . '/views/inc/footer.php';?>
