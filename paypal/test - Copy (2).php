<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="paypalhumza-facilitator@gmail.com">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="item_name" value="Teddy Bear">
<input type="hidden" name="amount" value="12.99">
<INPUT TYPE="hidden" NAME="return" value="http://localhost/paypal/success.php">
<INPUT TYPE="hidden" NAME="cancel" value="http://localhost/paypal/cancel.php">
<input type="hidden" name="hosted_button_id" value="RECREATENEWINPAYPALSANDBOX">
<input type="image" src="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form>
