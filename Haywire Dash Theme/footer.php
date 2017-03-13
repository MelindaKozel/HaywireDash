<footer>
        <div class="container">
            <nav>
                <?php wp_nav_menu( array( 'Footer Menu' => 'footer-menu' ) ); ?>
            </nav>
            <div id="backtotop">
                <a href="#top"><p class="nav-item mobile">Back to Top^</p></a>
            </div>
           <!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="js/min/mobilemenu-min.js"></script>
            <script src="js/min/smoothscroll-min.js"></script> -->
        </div>
        <script type="text/javascript">

            var hamburgerLink = document.getElementById('hamburgerlink');

            hamburgerLink.addEventListener('click', function(e){
                e.preventDefault();
            });

        </script>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>