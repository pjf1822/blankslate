</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
    <div id="copyright">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?>
        <?php echo esc_html(get_bloginfo('name')); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.querySelector(".menu-toggle");
        const menuContainer = document.querySelector("#menu");
        const closeButton = document.querySelector(".menu-close");


        menuToggle.addEventListener("click", function () {
            menuContainer.classList.toggle("open");
            const isExpanded =
                menuToggle.getAttribute("aria-expanded") === "true" || false;
            menuToggle.setAttribute("aria-expanded", !isExpanded);
        });
        closeButton.addEventListener("click", function () {
            menuContainer.classList.remove("open");
            menuToggle.setAttribute("aria-expanded", "false");
        });
    });
</script>
</body>

</html>