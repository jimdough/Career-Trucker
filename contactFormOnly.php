<link href="longForm.css" rel="stylesheet" type="text/css" />

<!-- Form Highlighting -->

<script type="text/javascript">
        $(document).ready(function(){
                $("input").focus(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .addClass("curFocus")
                });
                $("input").blur(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .removeClass("curFocus")
                });
				
				 $("select").focus(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .addClass("curFocus")
                });
                $("select").blur(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .removeClass("curFocus")
                });
				 $("textarea").focus(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .addClass("curFocus")
                });
                $("textarea").blur(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .removeClass("curFocus")
                });
				
        });
</script>

<!--END -->

<!-- Begin Long Form Validation Include -->

<style type="text/css">
label { width: 10em; float: left; }
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
</style>
  <script>
  $(document).ready(function(){
    $("#longLeadForm").validate({
		  rules: {
   			 ZipCode: {
     			 required: true,
     			 digits: true,
				 maxlength: 5,
				 minlength: 5
   				  },
			
			Phone: {
  			     required: true,
				 minlength: 10,
  			}
  				 }						 		 
});
		 });
  </script>
  
<!-- End Long Form Validation Include -->


<body>
<div id="longContactForm">

<form action="contact2.php" method="post" name="longLeadForm" id="longLeadForm">
                
<input type="hidden" name="LeadType" value="CTR"/>
<input type="hidden" name="SuccessPage" value="/confirmation.php"/>
<input type="hidden" name="ErrorPage" value="/error.php"/>

<div class="sectionBreak">
	<div class="text">Please complete the form below to have a representative contact you with more information about Career Trucker</div>
</div>

<div class="sectionBreak">
    <div class="labelExtraLarge">Do you already have a CDL License?</div>
    
    <div class="input">
    			<select name="HasCDL" id="HasCDL" class="required">
						<option value="">Please Choose</option>
						<option value="1">Yes I have one</option>
						<option value="0">No I need one</option>
					</select>
    </div>
    <div class="clear"></div>
</div>

   
   <div class="sectionBreak">
    <div class="labelExtraLarge">How did you hear about us??</div>

    <div class="input">
		<?php include("CPTLib/html/srcreftype.php"); SrcRefTypeDropDown(); ?>
    </div>
    <div class="clear"></div>
</div>

<div class="sectionBreak">

    <div class="label">First Name</div>
    <div class="input"><input type="text"  name="FirstName" id="firstName" size="18" class="required" /></div>
    
    <div class="label">Last Name</div>
    <div class="input"><input type="text" name="LastName" id="lastName" size="18" class="required" /></div>
        
    <div class="label clear">E-Mail Address</div>
    <div class="input"><input type="text" name="EmailAddress" id="email" size="18" class="required email" /></div>
    
    <div class="label">Phone Number</div>
    <div class="input"><input type="text" name="Phone" id="phone" size="18" class="required" /></div>
    
    <div class="label clear">Address 1</div>
    <div class="input"><input type="text" name="Address1" id="address1" size="18" /></div>
    
    <div class="label">Address 2</div>
    <div class="input"><input type="text" name="Address2" id="address2" size="18" /></div>
      
    <div class="label clear">City</div>
    <div class="input"><input type="text" name="City" id="city" size="18" /></div>
    
    <div class="label">State</div>
    <div class="input">
    <select name="GeoState" id="state">
    	<option value="">Select a State</option>
    	<option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
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
    </div>
    
    <div class="label clear">ZipCode</div>
    <div class="input"><input type="text" name="ZipCode" id="ZipCode" size="5" class="required" /></div>
    
    <div class="clear"></div>
  
</div>

<div class="sectionBreak">
    <div class="label">Education</div>
    <div class="input">
    <select name="EduLevel" size="1" id="education">
            <option selected="selected">Please select</option>
            <option value="High School">High School</option>
            <option value="GED">GED</option>
            <option value="Current Student">Current Student</option>
            <option value="Some College">Some College</option>
            <option value="College Degree">College Degree</option>
            <option value="Other">Other</option>
    </select>
    </div>
    
    <div class="label">Contact Time</div>
    <div class="input">
    <select name="BestContactTime" id="contactTime">
            <option value="Anytime" selected="selected">Anytime</option>
            <option value="Morning">Morning</option>
            <option value="Afternoon">Afternoon</option>
            <option value="Evening">Evening</option>
    </select>
    </div>
    
    <div class="clear"></div>
    
</div>

<div class="sectionBreak">

    <div class="labelLarge">Comment or Question</div>
    <div class="inputLarge"><textarea name="Comment" id="comment" cols="45" rows="5"></textarea></div>
    
    <div class="labelLarge clear"><br />May we send you emails?</div>
    <div class="inputSmall"><br /><input type="checkbox" name="EmailOptIn" id="correspondence" /></div>
    
    <div class="formDisclaimer clear">By submitting this form you are consenting that you may be contacted by a representative and/or receive periodic e-mail correspondence.</div>
    <div class="submitButton clear"><input type="submit" name="submit" id="submit" value="Submit this Form" /></div>

</div>

</form>
</div>
<?php include("includes/analytics.inc"); ?>
