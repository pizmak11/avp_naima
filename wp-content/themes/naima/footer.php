</main>

<footer class="s10" id="footer">
    <div id="go-up">
        <a href="#home" id="go-up-button"><span></span></a></div>
    <?php echo "<img src='" . get_field('logo') . "'>"; ?>
    <div class="footer-wrap center">
        <div class="footer-text">
            <p>Naima<br>Spółka z ograniczoną odpowiedzialnością<br><?php echo get_field('footer_address'); ?></p>
        </div>
        <div class="footer-text">
            <p>T: <a href="tel:533 336 633">533 336 633</a><br>
                M: <a href="mailto:job@naima.pl">job@naima.pl</a>
            </p>
        </div>
        <div class="footer-text">
            <p>KRS 0000258616<br>NIP 5832944464<br>Regon 220202779</p>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>

</body>
</html>
