<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}
{
  padding: 25px;
  background-color: white;
  color: black;
  font-size: 25px;
}

.dark-mode {
  background-color: black;
  color: white;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
</head>
<body>

<button onclick="myFunction()">Dark mode</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
<h2 style="text-align:center">CHOOSE YOUR PLAN AND GET STARTED </h2>
<p style="text-align:center">Resize the browser window to see the effect.</p>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#04AA6D" >DR.AMAN KHARADI </li>
    <li class="grey">₹ 499 </li>
    <li>12 years of experience </li>
    <li>BHMS </li>
    <li>Access to Diagnostic Services </li>
    <li> Maintain your Personal Health record for Free</li>
    <li class="grey"><a href="connect.php " class="button">Appoimtment </a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#04AA6D"> DR.ZAID SHAIKH</li>
    <li class="grey">₹ 999 </li>
    <li>9 years of experience </li>
    <li>UG </li>
    <li> Access to Diagnostic Services</li>
    <li>Maintain your Personal Health record for Free </li>
    <li class="grey"><a href="connect.php " class="button">Appoimtment </a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#04AA6D" > DR.UMAIR SHAIKH</li>
    <li class="grey">₹ 1599 </li>
    <li>5years of experience </li>
    <li>MBBS </li>
    <li>Access to Diagnostic Services </li>
    <li>Maintain your Personal Health record for Free </li>
    <li class="grey"><a href="connect.php" class="button">Appoimtment </a></li>
  </ul>
</div>

</body>
</html>
