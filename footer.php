<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arhitektura_Teme
 */

?>

<footer class="site-footer">
    <div class="footer-container">
        <!-- Lijeva strana sa linkovima -->
        <div class="footer-links">
            <a href="#">Terms of Use</a>
            <a href="#">Legal</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Newsletter</a>
            <a href="#">Cookie Policy</a>
        </div>

        <!-- Desna strana sa društvenim ikonicama -->
        <div class="footer-social-icons">
            <a href="https://linkedin.com" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/linkedin.svg" alt="LinkedIn">
            </a>
            <a href="https://facebook.com" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg" alt="Facebook">
            </a>
            <a href="https://instagram.com" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/insta.svg" alt="Instagram">
            </a>
        </div>
    </div>

    <!-- Ispod loga i copyright tekst -->
    <div class="footer-bottom">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Arhitektura Logo">
        </div>
        <div class="footer-text">
            <p>All rights reserved. Arhitektura, part of DAAily platforms AG</p>
            <p>ISSN 0719-8884</p>
            <p>All images are copyrighted by photographer mentioned.</p>
        </div>
    </div>
</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
