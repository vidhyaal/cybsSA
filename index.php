<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cybersource iFrame Hosted Checkout </title>
    
    <script type="text/javascript" src="jquery-1.7.min.js"></script>
<style>
#test1 {
display:none;
};
</style>
    

</head>
<body>
    <div class="container">
        <h1>Cybersource iFrame Hosted Checkout</h1>

       <div>
            <img src="camera.jpg"/>
            <p>SGD 100</p>
            <iframe src="payment_form.php"  id="test1" title="payment" name="payment" width="50%%" height="100%">  </iframe>
                       <button class="btn"><img id="image" src="paynow.jpg"/></button>
          
       </div>

    
    </div>

    <script>

$(document).ready(function() {
	$(".btn").click(function() {
        $(".btn").hide();
		$("#test1").show();
	});
});

</script>
</body>
</html>
<?php ?>
