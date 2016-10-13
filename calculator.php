<?php require_once('header.html'); ?>

<section id="needs-calculator" class="main-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="progress-bar">
                        <li class="current" id="calculate coverage"><img src="resources/images/icon-calculator.svg" alt="">Calculate Coverage</li>
                        <li><img src="resources/images/icon-quote.svg" alt="">Get Your Quote</li>
                        <li><img src="resources/images/icon-application.svg" alt="">APPLY</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center" id="needsCalculatorErrorMsgId">
                    <h3>Let's Get Started</h3>
                    <h4>Complete the below to find out the level of coverage you need.</h4>
                    <form action="" id="needs-calculator-form" name="needsCalculatorForm">
                    	<div class="error-text">
                        </div>
                        <div class="inline-text required">
                            <input class=" " type="text" pattern="[0-9]*" id="retirementSavings" name="retirementSavings" value="0" style="text-align: right;">
                            <label class=" " for="retirementSavings">Retirement Savings</label>
                        </div>
                        <div class="inline-text required">
                            <input class=" " type="text" pattern="[0-9]*" id="otherSavings" name="otherSavings" value="0" style="text-align: right;">
                            <label class=" " for="otherSavings">Other Savings</label>
                        </div>
                        <div class="inline-text required">
                            <input class=" " type="text" pattern="[0-9]*" id="annualIncome" name="annualIncome" value="0" style="text-align: right;">
                            <label class=" " for="annualIncome">Your Annual Income</label>
                        </div>
                        <div class="inline-text required">
                            <input class=" " type="text" pattern="[0-9]*" id="yearsIncomeProvided" name="yearsIncomeProvided" value="0" style="text-align: right;">
                            <label class=" " for="yearsIncomeProvided">Years of Income Needed for Beneficiaries</label>
                        </div>
                        <div class="inline-text required">
                            <input class=" " type="text" pattern="[0-9]*" id="existingLifeInsurance" name="existingLifeInsurance" value="0" style="text-align: right;">
                            <label class=" " for="existingLifeInsurance">Your Existing Life Insurance Coverage</label>
                        </div>
                        <div class="inline-text required">
                            <input class=" " type="text" pattern="[0-9]*" id="finalExpenses" name="finalExpenses" value="15000" style="text-align: right;">
                            <label class=" " for="finalExpenses">Funeral Expenses</label>
                        </div>
                        <div class="inline-text required">
                            <input class=" " type="text" pattern="[0-9]*" id="outstandingMortgage" name="outstandingMortgage" value="0" style="text-align: right;">
                            <label class=" " for="outstandingMortgage">Outstanding Mortgage</label>
                        </div>
                        <div class="inline-text required">
                            <input class=" " type="text" pattern="[0-9]*" id="otherOutstandingDebt" name="otherOutstandingDebt" value="0" style="text-align: right;">
                            <label class=" " for="otherOutstandingDebt">Other Outstanding Debt</label>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-md-6">
                                <div class="inline-text required">
                                    <input class=" " type="text" pattern="[1-9]|10" id="estimatedInflationRate" name="estimatedInflationRate" value="3" style="text-align: right;">
                                    <label class=" " for="estimatedInflationRate">Estimated Inflation Rate</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inline-text required">
                                    <input class=" " type="text" pattern="[1-9]|10" id="estimatedInvestmentReturn" name="estimatedInvestmentReturn" value="6" style="text-align: right;">
                                    <label class=" " for="estimatedInvestmentReturn">Estimated Investment Return</label>
                                </div>
                            </div>
                        </div>
                        <div class="incrementer margin-bottom-s">
                            <span>Number of Children Requiring College Funding</span>
                            <div class="text-right">
                                <a data-direction="minus" href="#" class="btn btn-primary">-</a>
                                <input disabled="" value="0" id="childCount" name="childCount" pattern="[0-9]*" type="text" class="naked" style="text-align: right;">
                                <a data-direction="plus" href="#" class="btn btn-primary">+</a>
                            </div>
                        </div>
                        <div id="children">
                        </div>
                        <br>
                        <input id="calculate-need-submit" type="button" onclick="validateNeeds()" class="btn btn-primary" value="Calculate Need" wpvalue="calculate_need">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="calculator-report" class="cover main-section" style="display:none">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="progress-bar">
                        <li><a href="calculator.do" class="open-needs-calculator"><img src="resources/images/icon-calculator.svg" alt="">Calculate Coverage</a></li>
                        <li class="current"><img src="resources/images/icon-quote.svg" alt="">Get Your Quote</li>
                        <li><img src="resources/images/icon-application.svg" alt="">APPLY</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center margin-bottom-s">
                    <h2>Your Recommended Coverage</h2>
                </div>
            </div>
            <div class="row recommended-coverage">
                <div class="col-md-12 text-center margin-bottom-s">
                    <h4>Coverage</h4>
                    <h3 class="calculated-coverage"></h3>
                </div>
                
            </div>
            <div class="row">
                <!-- <div id="coverage-analysis" class="col-md-5 col-md-offset-1" style="visibility:hidden;">
                    <div class="tab-heading"><span>Recommended Coverage</span></div>
                    <div id="edit-coverage">
                        <a href="calculator.do" class="open-needs-calculator">
                            <i class="fa fa-icon fa-pencil-square-o"></i> Edit
                        </a>
                    </div>
                    <h3 class="text-center margin-top-s">Continuing Income Needs</h3>
                    <div id="report-annual-income">Annual Income <span></span></div>
                    <div id="report-years-income-provided">Years Income to be Provided <span>x&nbsp;&nbsp;</span></div>
                    <hr>
                    <div id="report-total-income-to-be-provided" class="subtotal">Total Income to be Provided <span></span></div>
                    <br>
                    <div id="report-current-savings">Current Savings <span>-&nbsp;&nbsp;</span></div>
                    <div id="report-retirement-savings">Retirement Savings <span>-&nbsp;&nbsp;</span></div>
                    <div id="report-existing-life-insurance">Deduct Your Existing Life Insurance Coverage <span>-&nbsp;&nbsp;</span></div>
                    <hr>
                    <div id="report-total-income-needs" class="subtotal">Less other sources of income/savings <span></span></div>
                    <br>
                    <h3 class="text-center">One Time Needs</h3>
                     <div id="report-number-of-children-requiring-funding">Children Requiring College Funding <span></span></div>
                    <div id="report-private-college-expenses"></div>
                    <div id="report-public-college-expenses"></div>
                    <hr id="horizontalLine">
                    <div id="report-total-college-expenses" class="subtotal subtotal-total-college-expenses"></div>
                    <br>
                    <div id="report-final-expenses">Funeral Expenses <span>-&nbsp;&nbsp;</span></div>
                    <div id="report-outstanding-debts">Outstanding Debts <span>-&nbsp;&nbsp;</span></div>
                    <div id="report-outstanding-mortgage">Outstanding Mortgage <span>-&nbsp;&nbsp;</span></div>
                    <hr>
                    <div id="report-total-one-time-needs" class="subtotal">Total One Time Needs <span></span></div>
                    
                    <div id="report-total-coverage" class="total-coverage text-center">
                    	<div id="inflationText" style="font-size:18px">After the adjustment of inflation and investment return</div>
                        Total Coverage: <span class="calculated-coverage"></span>
                    </div>
                    <div id="100KMessage">
                    </div>
                    <div class="text-center">
                        <a href="#" id="report-pdf" class="secondary" wpvalue="download_pdf"><i class="fa fa-icon fa-file-pdf-o"></i> &nbsp;Download a copy of this report as a PDF.</a>
                    </div>
                </div> -->
                <div id="calculator-demographics" class="col-md-7 col-md-offset-3 iknow-calculator-demo">
                    <h3 class="text-center">Get Your Quote</h3>
                    <h4 class="text-center margin-bottom-s">We just need a few pieces of information to give you a quote based on this level of coverage. Onward!</h4>
                    <form action="" id="needs-calculator-demographics-form" name="needsCalculatorDemographicsForm">
                        <div class="error-text">
                        </div>
                        <div class="inline-text required">
                            <input required="" class=" " type="text" id="calc-first-name" name="first-name" maxlength="25">
                            <label class=" " for="calc-first-name">First Name</label>
                        </div>
                        <div class="inline-text required">
                            <input required="" class=" " type="text" pattern="[0-9]*" id="calc-date-of-birth" name="date-of-birth">
                            <label class=" " for="calc-date-of-birth">Date of Birth</label>
                        </div>
                        <div class="inline-text required">
                            <input required="" class="  " type="text" id="calc-email-address" name="email-address" maxlength="100">
                            <label class=" " for="calc-email-address">Email Address</label>
                        </div>
                         <div class="inline-text required">
                            <input class=" " type="text" pattern="[0-9]*" id="calc-form-phone" name="calc-form-phone">
                            <label class=" " for="contact-form-phone">Phone Number</label>
                        </div>
                        
                        <div class="inline-select required complete">
                            <label for="calc-smoker">Smoker or Non-smoker</label>
                            <span class="select-wrapper small">
                                <select required="" name="smoker" id="calc-smoker" class="small">
                                    <option value="2">Non-Smoker</option>
                                    <option value="1">Smoker</option>
                                </select>
                            </span>
                        </div>
                        <div class="inline-select required complete">
                            <label for="calc-gender">Biological Gender</label>
                            <span class="select-wrapper  small">
                                <select required="" name="gender" id="calc-gender" class="small">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </span>
                        </div>
                        <div class="inline-select required ">
                            <label for="calc-state">State</label>
                            <span class="select-wrapper  small">
                                <select required="" name="state" id="calc-state" class="small">
                                    <option value="">- Select a State -</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </span>
                        </div>
                        <div class="inline-select required ">
                            <label for="rec-coverage" class="adj">Number of years to maintain coverage</label>
                            <span class="select-wrapper  small">
                                <select required="" name="rec-coverage" id="rec-coverage" class="small">
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                </select>
                            </span>
                        </div>
                        <div class="inline-checkbox margin-top-s">
                            <input type="checkbox" name="us_citizen" id="calc-us_citizen" checked="">
                            <label for="calc-us_citizen"></label>
                            I am a U.S. Citizen.
                        </div>
                        <div class="inline-checkbox">
                            <input type="checkbox" name="policy_owner" id="calc-policy_owner" checked="">
                            <label for="calc-policy_owner"></label>
                            I, or my spouse, will be the policy owner.
                        </div>
                        <div class="inline-checkbox">
                            <input type="checkbox" name="not_replacing" id="calc-not_replacing" checked="">
                            <label for="calc-not_replacing"></label>
                            I am not replacing an existing policy.
                        </div>
                        <div class="inline-checkbox">
                            <input type="checkbox" name="allow_marketing" id="calc-allow_marketing" checked="">
                            <label for="calc-allow_marketing"></label>
                            By providing your contact information above, you agree to this website's Privacy Policy, and you consent to receive offers and marketing communications at the email address or telephone numbers you provided, including autodialed, pre-recorded calls, SMS or MMS messages.
                        </div>
                        <br>
                        <div class="text-center">
                            <input type="button" class="btn btn-primary" value="Next" id="quote-form-submit" wpvalue="next" onclick="validateQuote('howMuchDoINeed')">
                        </div>
                        <!--   <div id="disclaimers" class="col-md-4 col-md-offset-1">
                            <h4 class="text-center margin-bottom-s">Disclaimer</h4>
                            <p>The quotes that will be provided reflect the best values available based only on your selection of age, gender and smoking status. These quotes were produced automatically.</p>
                            <p>Final rates are always subject to underwriting approval by the insurance company. <a href='#'>Click here</a> to better understand the underwriting criteria. You have an option of continuing with Two Rivers Agency and apply online, or having Health IQ contact you shortly to gather additional information and to further assure that your customized quote is accurate. After speaking with you, Health IQ will send your customized quote via email. It will weigh responses to health and lifestyle questions to more accurately estimate your rate. Please read through our <a href='#legal-modal'>legal policy</a> to better understand the processing and information being made available. <a href='#policy-modal'>Click here</a> for policy forms and descriptions of available plans.</p>
                        </div> -->
                        <input type="hidden" id="calc-requested_coverage" name="requested_coverage">
                        <input type="hidden" id="calc-policy_term" name="policy_term">
                        <input type="hidden" id="calc-path_selected" name="path_selected" value="1">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="quote-page" class="main-section" style="display:none">
       <div class="container">
                <span class="error-text"></span>
                <div class="row margin-bottom-m quote-progress">
                    <div class="col-md-12">
                        <ul class="progress-bar">
                            <li><a href="calculator.do" class="open-needs-calculator"><img src="resources/images/icon-calculator.svg" alt="">Calculate Coverage</a></li>
                            <li class="current"><a href="#" class="open-calculator-report"><img src="resources/images/icon-quote.svg" alt="">Get Your Quote</a></li>
                            <li><img src="resources/images/icon-application.svg" alt="">APPLY</li>
                        </ul>
                    </div>
                </div>
                <span class="success-text"></span>
                <div class="row">
                    <div id="original-quote" class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-5 quote col-md-offset-1 col-lg-4 quote col-lg-offset-2 ">
                        <div class="box">
                            <form action="" id="original-quote-form" name="originalQuoteForm">
                                <div class="tab-heading"><span>Recommended Coverage</span></div>
                                <div class="text-center"><img class="transamerica" src="resources/images/icon-transamerica-slider.png" alt=""></div>
                                <div class="row margin-top-s margin-bottom-s">
                                    <div class="col-md-6 col-md-offset-1 best-class">
                                        <div class="text-center">
                                            <span class="currency">$</span>
                                            <span class="price">24</span>
                                            <span class="freq">/mo</span>
                                            <br>
                                        </div>
                                        <div class="text-center">
                                            <span class="rate-name">Preferred Plus Class</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 standard-class">
                                        <div class="text-left">
                                            <div class="text-center">
                                                <span class="rate-name">Compare To</span>
                                            </div>
                                            <span class="currency">$</span>
                                            <span class="price">24</span>
                                            <span class="freq">/mo</span>
                                            <br>
                                        </div>
                                        <div class="text-center">
                                            <span class="rate-name">Standard Non-Smoker</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sliders margin-bottom-s">
                                    <div>Coverage<span class="quote-coverage calculated-coverage">$300,000</span>
                                </div>
                                
                                <div id="preselected-coverage">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all ">
                                    </div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all recom-cov-slider-range" tabindex="0" style="left: 0%;"></span>
                                </div>
                            </div>
                            <div class="sliders margin-bottom-m">
                                <div>Term<span class="quote-term calculated-term">30 Years</span>
                            </div>
                            
                            <div id="preselected-term">
                                <div class="ui-slider-range ui-widget-header ui-corner-all ">
                                </div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all recom-term-slider-range" tabindex="0" style="left: 0%;"></span>
                            </div>
                        </div>
                        <div class="row recommended-coverage">
                            <div class="text-center col-md-6">
                                <h4>Coverage</h4>
                                <h3 class="calculated-coverage">$1,030,000</h3>
                            </div>
                            <div class="text-center col-md-6">
                                <h4>Term Period</h4>
                                <h3 class="calculated-term">30 Years</h3>
                            </div>
                        </div>
                        <div class="text-center">
                            <a id="#original-quote-applynow" href="#" class="btn btn-primary apply-now" wpvalue="apply_now">Apply Now</a>
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
                        <input type="hidden" id="original-quote-originalCoverageAmnt" name="originalCoverageAmnt">
                        <input type="hidden" id="original-quote-originalPolicyTerm" name="originalCoverageAmnt">
                        <input type="hidden" id="original-quote_selected" name="path_selected">
                    </form>
                </div>
            </div>
            <div id="comparison-quote" class="col-xs-8  col-sm-6 col-md-5 quote col-lg-4   quote comparison" style="display:block;">
                <div class="box">
                    <form action="" id="comparison-quote-form" name="comparisonQuoteForm">
                        <div class="tab-heading comparison"><span>Enter your own amount &amp; term</span></div>
                        <div class="text-center"><img class="transamerica" src="resources/images/icon-transamerica-slider.png" alt=""></div>
                        <div class="row margin-top-s margin-bottom-s">
                            <div class="col-md-6 col-md-offset-1 best-class">
                                <div class="text-center">
                                    <span class="currency">$</span>
                                    <span class="price">24</span>
                                    <span class="freq">/mo</span>
                                    <br>
                                </div>
                                <div class="text-center">
                                    <span class="rate-name">Preferred Plus Class</span>
                                </div>
                            </div>
                            <div class="col-md-4 standard-class">
                                <div class="text-left">
                                    <div class="text-center">
                                        <span class="rate-name">Compare To</span>
                                    </div>
                                    <span class="currency">$</span>
                                    <span class="price">24</span>
                                    <span class="freq">/mo</span>
                                    <br>
                                </div>
                                <div class="text-center">
                                    <span class="rate-name">Standard Non-Smoker</span>
                                </div>
                            </div>
                        </div>
                        <div class="sliders margin-bottom-s">
                            <div>Coverage<span class="quote-coverage calculated-coverage">$300,000</span>
                        </div>
                        
                        <div id="comparison-coverage">
                            <div class="ui-slider-range ui-widget-header ui-corner-all ">
                            </div>
                            <span class="ui-slider-handle ui-state-default ui-corner-all upd-cov-slider-range" tabindex="0" style="left: 0%;"></span>
                        </div>
                    </div>
                    <div class="sliders margin-bottom-m">
                        <div>Term<span class="quote-term calculated-term">30 Years</span>
                    </div>
                    
                    <div id="comparison-term">
                        <div class="ui-slider-range ui-widget-header ui-corner-all ">
                        </div>
                        <span class="ui-slider-handle ui-state-default ui-corner-all upd-term-slider-range" tabindex="0" style="left: 0%;"></span>
                    </div>
                </div>
                <div class="row recommended-coverage">
                    <div class="text-center col-md-6">
                        <h4>Coverage</h4>
                        <h3 class="calculated-coverage">$1,030,000</h3>
                    </div>
                    <div class="text-center col-md-6">
                        <h4>Term Period</h4>
                        <h3 class="calculated-term">30 Years</h3>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary apply-now" id="#recommended-quote-applynow" wpvalue="apply_now">Apply Now</a>
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
                <input type="hidden" id="comparison-quote-selectedCoverageAmnt" name="selectedCoverageAmnt">
                <input type="hidden" id="comparison-quote-selectedPolicyTerm" name="selectedPolicyTerm">
                <input type="hidden" id="comparison-quote_selected" name="path_selected">
            </form>
        </div>
    </div>
    <!--  <div class="col-xs-8  col-sm-6 col-md-5  col-lg-4  quote add text-center">
        <div class="box">
            <h3>Compare Different Coverage</h3>
            <p class="margin-bottom-s">Compare a different term and coverage amount side by side to find the right monthly premium for you.</p>
            <a href="#" id="quote-compare" class="btn btn-primary">Compare</a>
        </div>
    </div>-->
</div>
</div>
</section>

<?php require_once('footer.html'); ?>