<?php require_once('header.html'); ?>

<div id="quote_recommended" class="background-wrap">
	<section id="recommended" class="i-know-what-i-need cover main-section" style="">
	    <div class="overlay"></div>
	    <div class="container">
	        <div class="column online">
	            <h2>Apply Online</h2>
	            <div class="row">
	                <div class="price-wrapper">
	                    <span>$700,000</span>
	                </div>
	                <div id="class_category">
	                    <h3>Preferred Plus Class</h3>
	                </div>
	                <div class="comparison">
	                    <h5>Compare to <output>$425,000</output> Standard Non-Smoker</h5>
	                </div>
	                <div id="coverage_and_term">
	                    <div class="column">
	                        <span>Rate</span>
	                        <h4 class="coverage-amount"><output>$58</output>/MO</h4>
	                    </div>
	                    <div class="column">
	                        <span>Term</span>
	                        <h4 class="coverage-term"><output>10</output> years</h4>
	                    </div>
	                </div>
	                <div id="transamerica_logo">
	                    <img src="resources/images/icon-transamerica-slider.png" alt="">
	                </div>
	                <div id="apply_button">
	                    <button>Apply Now</button>
	                </div>
	            </div>
	        </div>
	        <div class="column call">
	            <h2>Call To Apply</h2>
	            <div class="row">
	                <div class="column">
	                    <h6>Metlife<sup>TM</sup></h6>
	                    <p>Rate: <span class="coverage-amount"><output>$58</output>/month</span></p>
	                    <p>Term: <span class="coverage-term"><output>10</output> years</span></p>
	                    <p>Call <a href="tel:18005491664">1-800-549-1664</a></p>
	                </div>
	                <div class="column">
	                    <div class="price-wrapper">
	                        <sup>$</sup><span>52</span><sup>/mo</sup>
	                    </div>
	                    <div class="comparison">
	                        <h5>Compare to <output>$650,000</output></h5>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="column">
	                    <h6>Banner Life<sup>TM</sup></h6>
	                    <p>Rate: <span class="coverage-amount"><output>$58</output>/month</span></p>
	                    <p>Term: <span class="coverage-term"><output>10</output> years</span></p>
	                    <p>Call <a href="tel:18005491664">1-800-549-1664</a></p>
	                </div>
	                <div class="column">
	                    <div class="price-wrapper">
	                        <span>$715,000</span>
	                    </div>
	                    <div class="comparison">
	                        <h5>Compare to <output>$650,000</output></h5>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="column">
	                    <h6>AIG Life<sup>TM</sup></h6>
	                    <p>Rate: <span class="coverage-amount"><output>$58</output>/month</span></p>
	                    <p>Term: <span class="coverage-term"><output>10</output> years</span></p>
	                    <p>Call <a href="tel:18005491664">1-800-549-1664</a></p>
	                </div>
	                <div class="column">
	                    <div class="price-wrapper">
	                        <span>$695,000</span>
	                    </div>
	                    <div class="comparison">
	                        <h5>Compare to <output>$650,000</output></h5>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="column">
	                    <h6>Aflac<sup>TM</sup></h6>
	                    <p>Rate: <span class="coverage-amount"><output>$58</output>/month</span></p>
	                    <p>Term: <span class="coverage-term"><output>10</output> years</span></p>
	                    <p>Call <a href="tel:18005491664">1-800-549-1664</a></p>
	                </div>
	                <div class="column">
	                    <div class="price-wrapper">
	                        <span>$687,000</span>
	                    </div>
	                    <div class="comparison">
	                        <h5>Compare to <output>$650,000</output></h5>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<section id="range_sliders">
	    <div class="slider-wrapper">
	        <span class="slider-label">Monthly Premium</span>
	        <h4 class="coverage-amount"><output>$58</output></h4>
	        <input id="coverage" class="slider_one" value="58" min="40" max="100" step="1" name="rangeslider" type="range">
	    </div>
	    <div class="slider-wrapper">
	        <span class="slider-label">Number of Years to Maintain Coverage</span>
	        <h4 class="coverage-term"><output>10</output> years</h4>
	        <input id="term" class="slider_two" value="10" min="5" max="50" step="5" name="rangeslider" type="range">
	    </div>
	</section>
</div>

<?php require_once('footer.html'); ?>