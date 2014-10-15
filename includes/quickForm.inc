<!-- Begin Short Form Validation Include -->

<style type="text/css">
label { width: 10em; float: left; font-size:11px;}
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
</style>
  <script>
  $(document).ready(function(){
    $("#quickLeadForm").validate({
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
  
<!-- End Short Form Validation Include -->

<div id="quickform">

				<form action="contact2.php" method="post" name="quickLeadForm" id="quickLeadForm">

				<input type="hidden" name="LeadType" value="CTR"/>
				<input type="hidden" name="SuccessPage" value="/confirmation.php"/>
				<input type="hidden" name="CDLSuccessPage" value="/confirmation-school.php"> 
				<input type="hidden" name="ErrorPage" value="/error.php"/>

				<div class="label">First Name</div><div class="input"><input name="FirstName" type="text" id="FirstName" size="14" class="required"/></div>
				<div class="label clear">Last Name</div><div class="input"><input name="LastName" type="text" id="LastName" size="14" class="required" /></div>
				<div class="label clear">Phone</div><div class="input"><input name="Phone" type="text" id="Phone" size="14" maxlength="14" class="required" /></div>
				<div class="label clear">E-Mail</div><div class="input"><input name="EmailAddress" type="text" id="EmailAddress" size="14" maxlength="40" class="required email"/></div>
				<div class="label clear">Zip Code</div><div class="input"><input name="ZipCode" type="text" id="ZipCode" size="10" maxlength="10" class="ZipCode"/></div>
				<div class="label clear">CDL Status</div><div class="input">
					<select name="HasCDL" id="HasCDL" class="required">
						<option value="">Please Choose</option>
						<option value="1">Yes I have one</option>
						<option value="0">No I need one</option>
					</select>
				</div>
				
				<div class="disclaimer clear">By submitting this form you are expressly consenting<br>to our <a style="text-decoration:underline;" href="terms-of-use.php" target="_blank">Terms of Use</a> and that you may be contacted<br> by a representative via telephone, email or SMS Text</div>
				
				<div class="submit clear"><input name="Submit" type="submit" value="Submit" /></div>

				</form>
		</div>
