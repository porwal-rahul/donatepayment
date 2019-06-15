
<!DOCTYPE html>
<html>
<title> Donation</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 100px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-style:ridge;
  border-width: 2px;
  border-color:black;
  background-color: white;
  padding-left: 500px;
  padding-right: 0px
  padding-top: 0px;
  padding-bottom: 00px;
  
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row {
  content: "";
  display: table;
  clear: both;
  margin-top :250px;
  margin-bottom:250px;
}


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

</head>
<body>



<div class="container">
  
  <form action="paypal.php">
   
    <div class="row" >
    	<h1>
  
  </h1>
  Make a difference...Donate now<br>
      <input type="submit"  value="Donate.." >
    </div>
    </div>
  </form>


</body>
</html>

