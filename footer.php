<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $footer_about = $row['footer_about'];
    $contact_email = $row['contact_email'];
    $contact_phone = $row['contact_phone'];
    $contact_address = $row['contact_address'];
    $footer_copyright = $row['footer_copyright'];
}
?>

<div class="footer">
    <div class="container">
        <div class="row">
		<div class="col-md-4 logo">
    <a href="index.php"><img src="assets/uploads/<?php echo $logo; ?>" alt="logo image"></a>
    <p><?php echo $footer_about; ?></p>
</div>

            <div class="col-md-4">
                <h4>Contact Information</h4>
                <p><i class="fa fa-envelope"></i> <?php echo $contact_email; ?></p>
                <p><i class="fa fa-phone"></i> <?php echo $contact_phone; ?></p>
            </div>
            <div class="col-md-4">
                <h4>Connect With Us</h4>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/profile.php?id=100068808242089" class="fa fa-facebook"></a>/chingupingu</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 copyright">
                <?php echo $footer_copyright; ?>
            </div>
        </div>
    </div>
</div>

<a href="#" class="scrollup">
    <i class="fa fa-angle-up"></i>
</a>
<link rel="stylesheet" href="assets/css/main.css">
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="assets/js/megamenu.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl.animate.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/rating.js"></script>
<script src="assets/js/jquery.touchSwipe.min.js"></script>
<script src="assets/js/bootstrap-touch-slider.js"></script>
<script src="assets/js/select2.full.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>
    function confirmDelete() {
        return confirm("Sure you want to delete this data?");
    }
</script>
</body>
</html>
