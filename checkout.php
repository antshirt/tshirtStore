<br><br><br>
<br>
<button class="btn btn-large disabled">1. Review order</button><button class="btn btn-large">2. Address</button><button class="btn btn-large disabled">3. Payment</button>
<form class="form-horizontal" id="address-form">
<legend>Shipping address</legend>
	<div class="controls control-group">
			<input class="" name="firstName" type="text" placeholder="First name" value="">
			<input class="" name="surname" type="text" placeholder="Surname" value="">
			<span class="help-inline">Something may have gone wrong</span>
	</div> <!-- control group -->
	<br>
	<div class="controls control-group">
		<input name="address1" type="text" placeholder="Address field 1" value=""><br>
		<input name="address2" type="text" placeholder="Address field 2" value=""><br>
		<input name="address3" type="text" placeholder="Address field 3" value="">
	</div>

	<div class="controls control-group">
		<input name="zip" type="text" placeholder="Zipcode" value="">
		<input name="city" type="text"  placeholder="City" value="">
	</div>
	<div class="controls control-group">
		<input name="country" type="text" placeholder="Country" value="">
	</div>
<legend>Other contact details</legend>	
	<div class="control-group">
		<div class="controls">
			<label class="control-label" for="email">E-mail:</label><input name="email" type="text" value="">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<label class="control-label" for="email2">Confirm E-mail:</label><input name="email2" type="text" value="">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<label class="control-label" for="other">Additional info:</label><textarea rows="3"></textarea>
		</div>
	</div>

	
	<div class="control-group">
		<div class="controls">
			<label class="control-label" for="button"></label><button type="submit" class="btn btn-primary">Proceed to next step </button>
		</div>
	</div>
</form>