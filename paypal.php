
<!DOCTYPE html>
<html>
<title>Payment</title>
<head>
<style>
    .container {
  border-style:outset;
  border-width: 1px;
  background-color: white;
  
  margin-top: 125px;
  margin-left:300px;
  margin-right:240px;
  
  }
  input[type=text] {
  width: 40%;
  float:right;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  
}
label {
    /* Other styling... */
    text-align: right;
    clear: both;
    float:left;
    margin-right:0px;
}
.row {
  content: "";
  display: table;
  clear: both;
  margin:10px
}

  </style>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>
	
    <!-- Set up a container element for the button -->
   <div class="container"> 
   <div class="row">
   	<label>First name</label>
<input type="text" id="fname" name="fname"  style="margin-left:80px"/>
</div>

<div class="row">
<label>Last name</label>
<input type="text" id="lname" name="lname" style="margin-left:80px"/>

</div> 

<div class="row">
<label >
Email 
</label>  
<input type="text" id="email" name="email" style="margin-left:120px"/>
</div>
	<div class="row">
    <label ><h4>Amount to donate:</h4></label>
    <input type="text" id="amount" placeholder="in Dollars(USD$)" style="margin-top:5px"/>
</div>
   	<div id="paypal-button-container"></div></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

    <script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: ''+document.getElementById("amount").value
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      
      return actions.order.capture().then(function(details) {
        
        alert('Transaction completed by ' + details.payer.name.given_name);
        window.location ="invoice.php?name="+document.getElementById('fname').value+" "+document.getElementById('lname').value+"&amount="+document.getElementById("amount").value;
      });
    }
  }).render('#paypal-button-container');
    </script>
</body>
    
