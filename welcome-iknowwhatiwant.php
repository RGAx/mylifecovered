<?php require_once('header.html'); ?>

	<section id="iknowwhatiwant_hero" class="section-photo cover">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="coverage_amount">
                    <h1>The most affordable rates <br>for the coverage you need.</h1>
                    <p class="heading">How much life insurance coverage do you need to have?</p><br>
                    <p class="heading">Most financial advisors recommend 8-10x income as an<br>
                    appropriate amount of life insurance coverage.</p>  
                    <div class="error-text" style="display: none;"></div>
                    <form action="selectedCoverage.php" method="POST" id="select-coverage-form" name="selectcoverageform">
                    <div id="hero_select_wrapper" class="col-md-4 select-coverage margin-top-s">
                        <select name="coverageAmount" id="coverageAmount" class="coverageamt-select">
                            <option value="">Select coverage amount...</option>
                            <option value="50000">$50,000</option>
                            <option value="100000">$100,000</option>
                            <option value="200000">$200,000</option>
                            <option value="350000">$350,000</option>
                            <option value="500000">$500,000</option>
                            <option value="750000">$750,000</option>
                            <option value="1000000">$1,000,000</option>
                            <option value="1500000">$1,500,000</option>
                            <option value="2000000">$2,000,000</option> 
                        </select>
                    </div>
                    
                    <div class="col-md-4 margin-top-s">
                    <input type="button" class="btn btn-primary" value="Continue" id="selected-coverage-submit" wpvalue="continue" onclick="return validateCoverageAmount();quoteVisiblity('iKnowWhatINeed');">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="home-page-copy" class="cover main-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 margin-bottom-m" id="home-page-copy-container">
                    <p>I'm Todd Seabaugh, a CrossFit® Affiliate owner and athlete since 2008. While attending the 2016 Reebok CrossFit Games® in Carson, CA, I was blown away by the dedication and discipline I saw in each and every competitor. I decided shortly after to start promoting life insurance to adult athletes and other super-fit individuals to help them take advantage of higher coverage amounts and lower rates that may be available to them based on their individual health.</p>
                    <p>Because of this lifestyle, we are all stronger both physically and mentally. But family members need a recovery plan in case something happens to us. Today, I want to challenge you to get this done. Will you make the commitment to protect the ones you care about the most?</p>
                    <p class="small"><img src="./resources/images/todd_seabaugh.png" style="width:187px;"><br>Todd Seabaugh, CrossFit® Affiliate Owner</p>
                    <small>All licensed trademarks are the property of their respective owners, who are not affiliated with MY LIFE COVERED™ and do not endorse its product and services.</small>
                </div>
                <div class="col-md-5 margin-bottom-m" id="home-page-aside-copy-container">
                    <h2>Need a quick rundown on insurance lingo?</h2>
                    <p>Quotes, rates, applications, blah blah blah.<br> Let us help you <a href="basics.php">learn the basics</a>.</p>
                    <br>
                    <h2>You've got to start somewhere.</h2>
                    <p>Even with a policy as low as $25 per month, you could make a huge difference for your family.<br><a href="welcome.php?phoneNo=866-871-8994&amp;src=affordability">Find out how huge</a>.</p>
                </div>
            </div>
        </div>
    </section>

<?php require_once('footer.html'); ?>