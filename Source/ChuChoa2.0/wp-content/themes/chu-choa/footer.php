<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ChuChoa
 */

?>

	</main><!-- #content -->

	<footer class="row footer">
        <div class="container">
            <div class="copyright text-right">
                <p>&copy; <?php echo date("Y")?> - ChuChoa.com</p>
            </div>
            <div class="legal pull-right">
                <ol>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Help</a></li>
                </ol>
            </div>

        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
