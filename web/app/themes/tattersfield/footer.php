<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tattersfield
 */

?>

</main>
<footer class="g-footer">
    <div class="container">
        <div class="f-wrap">
            <div class="f-logo"><img src="<?= get_template_directory_uri() ?>/static/piblic/images/logo-light.png"></div>
            <div class="f-menu">
                <div class="menu-item"><a href="#">TERMS & CONDITIONS</a></div>
                <div class="menu-item"><a href="#">PRIVACY POLICY</a></div>
                <div class="menu-item"><a href="#">CONTACT US</a></div>
                <div class="menu-item"><a href="#">PRODUCT REGISTRATION</a></div>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
