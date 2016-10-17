<?php require_once('header.html'); ?>

<div id="calculator" class="background-wrap">
    <section class="quote-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Let's Get Started</h1>
                    <p>Complete the below to find out the level of coverage you need.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="quote-tabs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="quote-form.php" class="tab">Quick Facts</a>
                    <a href="calculator.php" class="tab active">Full Calculator</a>
                </div>
            </div>
        </div>
    </section>
    <section id="needs-calculator" class="quote">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="needsCalculatorErrorMsgId">
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
                        <div class="text-center">
                            <input id="calculate-need-submit" type="button" onclick="validateNeeds()" class="btn btn-primary" value="Calculate Need" wpvalue="calculate_need">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once('footer.html'); ?>