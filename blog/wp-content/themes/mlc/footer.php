<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
	</div>
  <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul>
                      <li><a id="mylifeCoveredHome" href="https://www.mylifecovered.net/" wpvalue="home">Home</a></li>
                      <li><a id="mylifeCoveredaboutUS" href="https://www.mylifecovered.net/myLifeCovered/aboutus.do" wpvalue="about">About Us</a></li>
                      <li><a id="mylifeCovered-contactUs" href="https://www.mylifecovered.net/myLifeCovered/contactus.do" wpvalue="contact">Contact Us</a></li>
                      <li><a id="mylifeCovered-privacyPolicy" href="https://www.mylifecovered.net/myLifeCovered/privacypolicy.do" wpvalue="privacy_policy">Privacy Policy</a></li>
                      <li><a id="mylifeCoveredTerms" href="https://www.mylifecovered.net/myLifeCovered/terms.do" wpvalue="terms">Terms</a></li>
                      <li><a id="mylifeCoveredLegalInformation" href="https://www.mylifecovered.net/myLifeCovered/legalInformation.do" wpvalue="legalInfromation">Legal Information</a></li>
                      <li><a id="mylifeCoveredPolicyForms" href="https://www.mylifecovered.net/myLifeCovered/policyForms.do" wpvalue="policyForms">Policy Forms</a></li>
                      <li><a id="mylifeCoveredFinancialRatings" href="https://www.mylifecovered.net/myLifeCovered/financialRatings.do" wpvalue="financialRatings">Financial Ratings</a></li>
                  </ul>
            </div>
            <div class="col-md-6 text-right">
                <a href="https://www.mylifecovered.net/" class="main_logo">
                    <img src='<?php echo get_template_directory_uri(); ?>/_/images/logo.svg' /></a>
                </a>
                <span>Brought to you by <a id="#mylifeCovered-riversAgency" href="http://www.tworiversagency.com" target="_blank" class="secondary">Two Rivers Agency</a>
                <small>Copyright &copy; <script>document.write(new Date().getFullYear())</script> RGAx. All rights reserved.</small>
            </div>
        </div>
    </div>
  </footer>

<?php wp_footer(); ?>


<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script>
  objectFitImages();
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/_/js/xperience.js"></script>
<!-- FontAwesome -->
<script src="https://use.fontawesome.com/354e418e10.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.
-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79521976-1', 'auto');
  ga('send', 'pageview');

</script>


</body>

</html>
