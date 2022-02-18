<footer class="footer bg-secondary text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase text-headfooter mb-4">Adresa</h4>
                <p class="lead text-headfooter mb-0">
                <?php echo nl2br(get_theme_mod('footer-address-setting', 'Ulice 123/45
        616 00 Brno'));?>
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase text-headfooter mb-4">Sociální sítě</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="<?php echo (get_theme_mod('footer-socials-1-link-setting', '#!'));?>"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="<?php echo (get_theme_mod('footer-socials-2-link-setting', '#!'));?>"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="<?php echo (get_theme_mod('footer-socials-3-link-setting', '#!'));?>"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="<?php echo (get_theme_mod('footer-socials-4-link-setting', '#!'));?>"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase text-headfooter mb-4">Odkazy</h4>
                <p class="lead text-headfooter mb-0">
                    <?php echo nl2br(get_theme_mod('footer-link-setting', 'Ulice 123/45
        616 00 Brno'));?>
                </p>
            </div>
        </div>
    </div>
</footer>
    
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright © Depth Charge Software s.r.o.</small></div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
            class="fa fa-chevron-up"></i></a>
</div>

<?php wp_footer(); ?>
</body>

</html>