<html>
<head>
    <title>Secure Acceptance - Payment Form Example</title>
    <link rel="stylesheet" type="text/css" href="payment.css"/>
    <script type="text/javascript" src="jquery-1.7.min.js"></script>
</head>
<body>
<form id="payment_form" action="token_confirmation.php" method="post">
    <input type="hidden" name="access_key" value="1d3e1a35602e3e149d06de9c1a76bbe8">
    <input type="hidden" name="profile_id" value="0003C773-CA4D-47A7-B98D-47C1526006EB">
    <input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>">
    <input type="hidden" name="signed_field_names" value="access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency">
    <input type="hidden" name="unsigned_field_names" value="bill_to_forename,bill_to_surname,bill_to_address_line1,bill_to_address_city,bill_to_address_state,bill_to_address_postal_code,bill_to_address_country,bill_to_email"/>
    <input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
    <input type="hidden" name="locale" value="en">
  
    <fieldset>  
        <legend>Payment Details</legend>
        <div id="paymentDetailsSection" class="section">
            <span>transaction_type:</span><input type="text" name="transaction_type" value="create_payment_token" size="25"><br/>
            <span>reference_number:</span><input type="text" name="reference_number" value="ref019" size="25"><br/>
            <span>amount:</span><input type="text" name="amount" size="25" value="1.00"><br/>
            <span>currency:</span><input type="text" name="currency" size="25" value="SGD"><br/>
            <!-- <span>Tax:</span><input type="text" name="tax_amount" size="25" value="0.0"/></br> -->
            <span>First Name:</span><input type="text" name="bill_to_forename" value="V"/><br/>
            <span>Sur Name:</span><input type="text" name="bill_to_surname" value='AL'/><br/>
            <span>Address Line1:</span><input type="text" name="bill_to_address1_line1" value="2211"/>
            <span>State:</span><input type="text" name="bill_to_address_state" value="TN"/>
            <span>City:</span><input type="text" name="bill_to_address_city" value="Chennai"/> <br/>
            <span>Country:</span><input type="text" name="bill_to_address_country" value="IN"/> <br/>
            <span>Email:</span><input type="text" name="bill_to_email" value="test@test.test"/> <br/>
            <span>Postal code:</span><input type="text" name="bill_to_address_postal_code" value="600073"/><br/>

        </div>
    </fieldset>
    <input type="submit" id="submit" name="submit" value="Submit"/>
    <script type="text/javascript" src="payment_form.js"></script>
</form>
</body>
</html>
