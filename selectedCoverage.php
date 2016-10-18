<?php require_once('header.html'); ?>

    <section id="quote-page" class="main-section" style="display: block;">
        <div class="container">
            <span class="error-text"></span>
            <div class="row margin-bottom-m quote-progress">
                <div class="col-md-12">
                    <ul class="progress-bar quote-bar">
                        <li class="current"><a href="#" class="open-calculator-report"><img src="resources/images/icon-quote.svg" alt="">Get Your Quote</a></li>
                        <li><img src="resources/images/icon-application.svg" alt="">APPLY</li>
                    </ul>
                </div>
            </div>
            <span class="success-text" style="display: none;"></span>
            <div class="row">
                <div id="original-quote" class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-5 quote col-md-offset-1 col-lg-4 quote col-lg-offset-2 ">
                    <div class="box">
                        <form action="" id="original-quote-form" name="originalQuoteForm">
                            <div class="tab-heading"><span>Recommended Coverage</span></div>
                            <div class="text-center"><img class="transamerica" src="resources/images/icon-transamerica-slider.png" alt=""></div>
                            <div class="row margin-top-s margin-bottom-s">
                                <div class="col-md-10 col-md-offset-1 best-class">
                                    <div class="text-center">
                                        <span class="currency pre-cover">$</span>
                                        <span class="price">550,000</span>
                                        <!-- <span class="freq">/mo</span> -->
                                        <br>
                                    </div>
                                    <div class="text-center">
                                        <span class="rate-name">Preferred Plus Class</span>
                                    </div>
                                </div>
                                <div class="col-md-10 standard-class standard-main" style="display:block;">
                                    
                                        <div class="text-center">
                                            <span class="rate-name standard-compare">Compare To</span>
                                            <span class="currency standard-currency">$</span>
                                        <span class="price standard-price">200,000</span>
                                        </div>
                                        
                                        <!-- <span class="freq">/mo</span> -->
                                    <div class="text-center">
                                        <span class="rate-name standard-smoker">Standard Non-Smoker</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sliders margin-bottom-s">
                                <div>Monthly Premium<span class="quote-coverage calculated-coverage">$25</span>
                            </div>
                            
                            <div id="preselected-coverage" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-state-disabled ui-slider-disabled">
                                <div class="ui-slider-range ui-widget-header ui-corner-all ">
                                </div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all recom-cov-slider-range" tabindex="0" style="left: 9.090909090909092%;"></span>
                            </div>
                        </div>
                        <div class="sliders margin-bottom-m">
                            <div>Term<span class="quote-term calculated-term">20 Years</span>
                        </div>
                        
                        <div id="preselected-term" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-state-disabled ui-slider-disabled">
                            <div class="ui-slider-range ui-widget-header ui-corner-all ">
                            </div>
                            <span class="ui-slider-handle ui-state-default ui-corner-all recom-term-slider-range" tabindex="0" style="left: 50%;"></span>
                        </div>
                    </div>
                    <div class="row recommended-coverage">
                        <div class="text-center col-md-6">
                            <h4>Monthly Premium</h4>
                            <h3 class="calculated-coverage">$25</h3>
                        </div>
                        <div class="text-center col-md-6">
                            <h4>Term Length</h4>
                            <h3 class="calculated-term">20 Years</h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <a id="#original-quote-applynow" href="#" class="btn btn-primary apply-now">Apply Now</a>
                    </div>
                     <div class="text-center">
                         <p class="meta">Trendsetter Super, Policy Forms ICC16 TL22, TL22, 1-322 11-107, 1-306 11-107, 1-305 11-107, 1-304 11-107, 1-303 11-107, or 1-334 11-107 are term life insurance policies issued by Transamerica Life Insurance Company, Cedar Rapids IA 52499. Premiums increase annually for Trendsetter Super YRT, and beginning in year 11 for the 10-year policy, in year 16 for the 15-year policy, in year 21 for the 20-year policy, in year 26 for the 25-year policy, and in year 31 for the 30-year policy. Policy form and number may vary, and this policy and the riders with this policy may not be available in all jurisdictions. Insurance eligibility and premiums are subject to underwriting. In most states, in the event of suicide during the first two policy years, death benefits are limited only to the return of premiums paid.</p>
                         <!--<p class="meta">Offer available in all states except New York.</p> -->
                         <p class="meta">As a highly fit person, you may qualify for preferred plus class coverage. However, this is non-binding prior to your application.</p>
                         <p class="meta">No quotes are final until underwriting is completed.  Other underwriting classes, face amounts and payment modes are available.  Premiums will be lower if paid annually.  Rates subject to change without notice.</p>
                         <p class="meta">The recommended coverage amount is determined by Two Rivers Agency.  Two Rivers Agency is an independent contractor representing Transamerica Life Insurance Company.</p>
                         <p class="meta">The Two Rivers Agency (Rivers Run Insurance Agency in CA &amp; NY) is a wholly-owned subsidiary of <strong>RGAx</strong>. ©2016 RGAx LLC All Rights Reserved.</p>
                         <p class="meta" align="left">AT 1536928 TRWeb 0616</p>
                    </div>
                    <input type="hidden" id="original-quote-originalCoverageAmnt" name="originalCoverageAmnt" value="25">
                    <input type="hidden" id="original-quote-originalPolicyTerm" name="originalCoverageAmnt" value="20">
                    <input type="hidden" id="original-quote_selected" name="path_selected" value="4">
                </form>
            </div>
        </div>
        <div id="comparison-quote" class="col-xs-8  col-sm-6 col-md-5 quote col-lg-4   quote comparison" style="display:block;">
            <div class="box">
                <form action="" id="comparison-quote-form" name="comparisonQuoteForm">
                    <div class="tab-heading comparison"><span>Enter your own amount &amp; term</span></div>
                    <div class="text-center"><img class="transamerica" src="resources/images/icon-transamerica-slider.png" alt=""></div>
                    <div class="row margin-top-s margin-bottom-s">
                        <div class="col-md-10 col-md-offset-1 best-class">
                            <div class="text-center">
                                <span class="currency pre-cover">$</span>
                                <span class="price">550,000</span>
                               <!--  <span class="freq">/mo</span> -->
                                <br>
                            </div>
                            <div class="text-center">
                                <span class="rate-name">Preferred Plus Class</span>
                            </div>
                        </div>
                        <div class="col-md-10 standard-class standard-main" style="display:block;">
                           <!--  <div class="text-left"> -->
                                <div class="text-center">
                                    <span class="rate-name  standard-compare">Compare To</span>
                                     <span class="currency  standard-currency">$</span>
                                <span class="price  standard-price">200,000</span>
                                </div>
                               <!--  <span class="freq">/mo</span> -->
                            <!-- </div> -->
                            <div class="text-center">
                                <span class="rate-name standard-smoker">Standard Non-Smoker</span>
                            </div>
                        </div>
                    </div>
                    <div class="sliders margin-bottom-s">
                        <div>Monthly Premium<span class="quote-coverage calculated-coverage">$25</span>
                    </div>
                    
                    <div id="comparison-coverage" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                        <div class="ui-slider-range ui-widget-header ui-corner-all ">
                        </div>
                        <span class="ui-slider-handle ui-state-default ui-corner-all upd-cov-slider-range" tabindex="0" style="left: 9.090909090909092%;"></span>
                    </div>
                </div>
                <div class="sliders margin-bottom-m">
                    <div>Term<span class="quote-term calculated-term">20 Years</span>
                </div>
                
                <div id="comparison-term" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                    <div class="ui-slider-range ui-widget-header ui-corner-all ">
                    </div>
                    <span class="ui-slider-handle ui-state-default ui-corner-all upd-term-slider-range" tabindex="0" style="left: 50%;"></span>
                </div>
            </div>
            <div class="row recommended-coverage">
                <div class="text-center col-md-6">
                    <h4>Monthly Premium</h4>
                    <h3 class="calculated-coverage">$25</h3>
                </div>
                <div class="text-center col-md-6">
                    <h4>Term Length</h4>
                    <h3 class="calculated-term">20 Years</h3>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-primary apply-now" id="#recommended-quote-applynow">Apply Now</a>
            </div>
            <div class="text-center">
                 <p class="meta">Trendsetter Super, Policy Forms ICC16 TL22, TL22, 1-322 11-107, 1-306 11-107, 1-305 11-107, 1-304 11-107, 1-303 11-107, or 1-334 11-107 are term life insurance policies issued by Transamerica Life Insurance Company, Cedar Rapids IA 52499. Premiums increase annually for Trendsetter Super YRT, and beginning in year 11 for the 10-year policy, in year 16 for the 15-year policy, in year 21 for the 20-year policy, in year 26 for the 25-year policy, and in year 31 for the 30-year policy. Policy form and number may vary, and this policy and the riders with this policy may not be available in all jurisdictions. Insurance eligibility and premiums are subject to underwriting. In most states, in the event of suicide during the first two policy years, death benefits are limited only to the return of premiums paid.</p>
                 <!--<p class="meta">Offer available in all states except New York.</p>-->
                 <p class="meta">As a highly fit person, you may qualify for preferred plus class coverage. However, this is non-binding prior to your application.</p>
                 <p class="meta">No quotes are final until underwriting is completed.  Other underwriting classes, face amounts and payment modes are available.  Premiums will be lower if paid annually.  Rates subject to change without notice.</p>
                 <p class="meta">The recommended coverage amount is determined by Two Rivers Agency.  Two Rivers Agency is an independent contractor representing Transamerica Life Insurance Company.</p>
                 <p class="meta">The Two Rivers Agency (Rivers Run Insurance Agency in CA &amp; NY) is a wholly-owned subsidiary of <strong>RGAx</strong>. ©2016 RGAx LLC All Rights Reserved.</p>
                 <p class="meta" align="left">AT 1536928 TRWeb 0616</p>
            </div>
            <input type="hidden" id="comparison-quote-selectedCoverageAmnt" name="selectedCoverageAmnt" value="25">
            <input type="hidden" id="comparison-quote-selectedPolicyTerm" name="selectedPolicyTerm" value="20">
            <input type="hidden" id="comparison-quote_selected" name="path_selected" value="4">
        </form>
    </div>
</div>
</div>
</div>
</section>

<?php require_once('footer.html'); ?>