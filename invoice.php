
<html>
<head>
<title>Donation Invoice </title>
<style>
.container {
  border-style:outset;
  border-width: 1px;
  background-color: white;
  
  margin-top: 125px;
  margin-left:300px;
  margin-right:240px;
  
  }
</style>
<script type="text/javascript" src="jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

</head>
<body>
<div class="container">
<div id="content">
<p>
<script> document.write(new Date().toLocaleDateString()); </script><br>
Receipt no. 045826
<br>

Caring for Children,
<br>
Pune
</p>

<br>
     <p> We acknowledge, with thanks, the receipt of <?php echo '$'.$_GET['amount'];?>, which you have so generously contributed to Caring for Children.</p>
<br>
Donor: <?php echo $_GET['name'];?>
<br>
Donation: <?php echo '$'.$_GET['amount'];?>
<br>
Caring for Children is recognized as a nonprofit organization.




</div>
<div id="editor"></div>
<button id="cmd">Download receipt</button>
</div>

</body><script>
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 2000,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>
</html>
