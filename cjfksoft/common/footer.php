
<!--Footer start here-->
        <div class="footer nmavbar-fixed-bottom">
            <footer>
                <p class="copyright">Copyright &copy; CleanKakos.com 2015</p>
                <a class="credit"href="chartquality.html">Charte qualité</a>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<a class="credit"href="termofservice.html">Terms of service</a>
            					
                <ul class="socialmedia">
                    <li><a href="http://facebook.com/CleanKakos" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <p class="poweredby">Powered By <a href="">K SOFT SOLUTIONS</a></p>
            </footer>
        </div>
    </div>
    </div>
    <!-- Fin wrapper general -->
    
</body>
</html>
<!-- End footer here -->

<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script>
    $(document).ready(function() {
    $(".hidme").hide(function() { });
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        if($(window).height() + 300 < $(window).scrollTop()) {
            //$(".hidme").animate({'opacity':'1'},500);
            $(".hidme").show();
        }  else { $(".hidme").hide();}
    });
    });
</script>