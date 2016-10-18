<?php require_once('header.html'); ?>

<div id="life_need" class="background-wrap child-landing life-landing">
	<section id="life_know_hero" class="cover text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>SAVE UP TO 5O% ON YOUR PREMIUM.</h1>
                    <p>Life insurance is often significantly less expensive for healthy people like you.</p>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-12">
            		<div class="form-wrapper">
            			<div class="primary-container">
            				<h4>I know how much I need</h4>
            				<p>Experts recommened 8x your salary for optimal coverage.</p>
            				<p>See our full <a href="calculator.php">Calculator</a>.</p>
            				<form>
            					<select name="coverageAmount" id="coverageAmount" class="coverageamt-select">
                                    <option value="">Total Coverage</option>
                                    <option value="100000">$100,000</option>
                                    <option value="200000">$200,000</option>
                                    <option value="350000">$350,000</option>
                                    <option value="500000">$500,000</option>
                                    <option value="750000">$750,000</option>
                                    <option value="1000000">$1,000,000</option>
                                    <option value="1500000">$1,500,000</option>
                                    <option value="2000000">$2,000,000</option>
                                </select>
            					<input type="submit" value="Go">
            				</form>
            			</div>
            			<a href="life-help.php" class="secondary-container">
            				<h5>Help Me Determine <br>My Coverage</h5>
            			</a>
            			<a href="life-afford.php" class="secondary-container">
            				<h5>I Know What <br>I Can Afford</h5>
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
    					<h3>Athletic Blood Profile</h3>
    				</a>
    				<a href="life-help.php" id="life" class="tile active">
    					<h3>Life Insurance for the Healthy</h3>
    				</a>
    			</div>
    		</div>
    	</div>
    </section>
</div>

<?php require_once('footer.html'); ?>