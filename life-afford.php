<?php require_once('header.html'); ?>

<div id="life_afford" class="background-wrap child-landing life-landing">
	<section id="life_afford_hero" class="cover text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>YOU COULD QUALIFY TO GET SIGNIFICANTLY MORE COVERAGE FOR YOUR PREMIUM DOLLAR. DO YOU QUALIFY?</h1>
                    <p>Fit and healthy people often get more coverage for the same price as standard rated individuals. Find out how much more.</p>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-12">
            		<div class="form-wrapper">
            			<div class="primary-container">
            				<h4>I know how much I can afford</h4>
            				<p>See our full <a href="calculator.php">Calculator</a>.</p>
            				<form>
            					<select name="affordablePremium" id="affordablePremium" class="coverageamt-select afford-dropdown">
                                    <!-- <option value="">Amount</option> -->
                                    <option value="25">$25 per month</option>
                                    <option value="50">$50 per month</option>
                                    <option value="100">$100 per month</option>
                                </select>
                                <select name="affordableAge" id="affordableAge" class="coverageamt-select afford-dropdown">
                                    <!-- <option value="">Age</option> -->
                                    <option value="25-29">25-29</option>
                                    <option value="30-34">30-34</option>
                                    <option value="35-39">35-39</option>
                                    <option value="40-44">40-44</option>
                                    <option value="45-49">40-49</option>
                                    <option value="50+">50+</option>
                                </select>
                                <select name="affordableGender" id="affordableGender" class="coverageamt-select afford-dropdown">
                                    <!-- <option value="">Gender</option> -->
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
            					<!-- <span>/ month</span> -->
            					<!-- <input type="submit" value="Go"> -->
                                <p id="initialQuote">Based on the above, you may qualify for about <span id="totalCoverage" class="quoted-amount">$550,000</span> in coverage and save close to <span id="totalSavings" class="quoted-amount">$10</span> per month over standard premium rates.<sup>*</sup>
            				</form>
            			</div>
            			<a href="life-help.php" class="secondary-container">
            				<h5>Help Me Determine <br>My Coverage</h5>
            			</a>
            			<a href="life-need.php" class="secondary-container">
            				<h5>I Know How <br>Much I Need</h5>
            			</a>
            		</div>
            	</div>
            </div>
        </div>
    </section>
    <section id="life_help_tiles" class="tiles child-tiles">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<a href="blood.php" id="blood" class="tile">
                        <h3>Athletic <br>Blood Profile</h3>
                    </a>
                    <a href="life-help.php" id="life" class="tile active">
                        <h3>Term Life <br>Insurance</h3>
                    </a>
                    <a href="everplans.php" id="emergency" class="tile">
                        <h3>Everplans: Life & <br>Legacy Planning</h3>
                    </a>
    			</div>
    		</div>
    	</div>
    </section>
</div>

<?php require_once('footer.html'); ?>