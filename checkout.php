


<html>
<head>
<style>
*{
  margin:0;
  padding:0;
}
body{
  height:100vh;
  overflow:hidden;
  background:linear-gradient(-40deg,white,lightgrey);
  box-sizing:border-box;
  font-family: "Montserrat", sans-serif;
 padding-top: 5px;
}
#wrapper{
  height:480px;
  width:700px;
  background:#fff;
  border:1px solid grey;
  border-radius:10px;
  margin:3em auto 0 auto;
  overflow:hidden;
  box-shadow:0px 2px 25px #000;
  
}
.row{
  display:flex;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5{
  display:flex;
  flex-direction:column;
  align-items:center;
  background:#e6e6e6;
/*   border:solid 1px transparent; */
  border-radius:4px;
  margin:1em 5px;
}
.row:nth-of-type(1) .col-xs-5 #cards{
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5 #cards img{
  width:100px;
  height:100px;
}

.row:nth-of-type(2) .col-xs-5{
  display:flex;
  flex-direction:column;
  justify-content:space-around;
  flex-basis:48%;
}
.row:nth-of-type(2) .col-xs-5 input{
  border:1px solid lightgrey;
  height:35px;
  border-radius:10px;
  padding-left:10px;
  box-shadow:1px 2px 2px blue;
}
.row .col-xs-5 input:focus, .row:nth-of-type(3) .col-xs-2 input:focus{
  border-color:blue;
  outline:0;
}
label{
  position:relative;
}
 .fa{
  position:absolute;
  right:25px;
  bottom:10px;
}
.row-three{
  display:flex;
  justify-content:space-around;
  align-items:baseline;
  align-content:space-between;
  margin:2em 1em 2.4em 1em;
}
.row:nth-of-type(3) .col-xs-2{
  flex-basis:50%;
}
.row:nth-of-type(3) .col-xs-5{
  flex-basis:40%;
  align-items:baseline;
}
.row:nth-of-type(3) .col-xs-2 input{
  height:35px;
  border:1px solid lightgrey;
  border-radius:10px;
  padding-left:10px;
  box-shadow:1px 2px 2px blue;
}
.row:nth-of-type(3) .col-xs-5 .small{
  font-size:.70em;
}
footer{
  height:80px;;
  background:#e6e6e6;
  display:flex;
  flex-direction:row;
  justify-content:space-between;
  align-items:center;
}
footer .btn{
  margin:50px 15px 55px 15px;
  border-radius:20px;
  padding:.65em 1.6em;
  background-color:#0077ff;
    border-color:#00a2ff;
    margin-left: 1em;
    font-size:1.1em;
    outline: none;
}
.btn:hover{
  background-color:#2f374c;
  border-color:#2f374c;

}
footer :nth-child(1){
    border-color:#00a2ff;
    margin-left: 15em 0;
    font-size:1.1em;
    outline: none;
    text-decoration:none; 
    color:white;
}
footer :nth-child(2){
    border-color:#00a2ff;
    margin-right: 5em 0;
    font-size:1.1em;
    outline: none;
    text-decoration:none;
    color:white;
}
.col-xs-5.highlight{
  border:solid 1px blue;
}

</style>


<script>
$('input[type="checkbox"]').on('click',function(){
var selected = $(this).parent().parent().parent();   
 $(selected).toggleClass('highlight');
});
</script>

</head>
<body>
<div id="wrapper">
  <div class="row">
    <div class="col-xs-5">
      <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
  <label class="form-check-label" for='card'>
    <input id="card" class="form-check-input" type="checkbox" value="">
    Pay $150.00 with credit card
  </label>
</div>
    </div><!--col-xs-5 end-->
    <div class="col-xs-5">
      <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Paypal-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
  <label class="form-check-label" for='paypal'>
    <input id="paypal" class="form-check-input" type="checkbox" value="">
    Pay $150.00 with PayPal
  </label>
</div>
    </div><!--col-xs-5 end-->
  </div><!--row end-->
  <div class="row">
    <div class="col-xs-5">
      <i class="fa fa fa-user" style="margine-left:0px;"></i>
      <label for="cardholder">Cardholder's Name</label>
      <input type="text" id="cardholder">
    </div><!--col-xs-5-->
    <div class="col-xs-5">
      <i class="fa fa-credit-card-alt"></i>
      <label for="cardnumber">Card Number</label>
      <input type="text" id="cardnumber">
    </div><!--col-xs-5-->
</div><!--row end-->
  <div class="row row-three">
    <div class="col-xs-2">
      <i class="fa fa-calendar"></i>
      <label for="date">Valid Date</label>
      <input type="text" placeholder="MM/YY" id="date">
    </div><!--col-xs-3-->
    <div class="col-xs-2">
      <i class="fa fa-lock"></i>
      <label for="date">CVV / CVC *</label>
      <input type="text">
    </div><!--col-xs-3-->
    <div class="col-xs-5">
      <span class="small">* CVV or CVC is the card security code, unique three digits number on the back of your card seperate from its number.</span>
    </div><!--col-xs-6 end-->
  </div><!--row end-->
  <footer>
    <button class="btn"><a href="payment.php">Back</a></button>
    <button class="btn"><a href="userhome.php">Make payment</a></buton>
  </footer>
</div><!--wrapper end-->






</body>

</html>