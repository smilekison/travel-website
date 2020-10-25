<?php include('templates/header.php'); ?>
<body>
    <section class="header">
        <div class="container">
            <?php include('templates/nav.php');?>
        </div>
        <h1>Travel Across The Globe</h1>
        <p>Click here to search</p>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Country or City">
            <div class="input-group-append">
                <button class="input-group-text btn" type="submit">Search</button>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-box">
                    <div class="feature-img">
                        <img src="assets/img/map.jpg" alt="Map image">
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-box">
                    <h2>Contact Us</h2>
                    <form action="#" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label for="uname">Email:</label>
                            <input type="email" class="contactform-control" id="email" placeholder="Enter Email" name="email" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Message:</label>
                            <textarea name="message" class="contactform-control" placeholder="Enter Message" id="message" cols="20" rows="30" required></textarea>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/logo.gif" alt="Footer Logo" class="footer-logo">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="col-md-3">
                    <h4>Features</h4>
                    <p>Deal & Offers</p>
                    <p>Customer Reviews</p>
                    <p>Cancelation Policy</p>
                </div>
                <div class="col-md-3">
                    <h4>Quick Contact</h4>
                    <p><i class="fa fa-phone-square">  +977 -9813446920</i></p>
                    <p><i class="fa fa-envelope">  social@networkmeme.com</i></p>
                    <p><i class="fa fa-home">  Kathmandu, Nepal</i></p>
                </div>
                <div class="col-md-3">
                    <h4>Quick Contact</h4>
                    <p><i class="fa fa-facebook-official">  Facebook</i></p>
                    <p><i class="fa fa-twitter">  Twitter </i></p>
                </div>
            </div>
            <hr>
            <p class="copyright">Made with <i class="fa fa-heart"></i> by Network Meme</p>
        </div>
    </section>
<script src="assets/footer.js"></script>
</body>
</html>
