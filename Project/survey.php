<?php

include('conn.php');



function format_telephone($phone_number)
{
    $cleaned = preg_replace('/[^[:digit:]]/', '', $phone_number);
    preg_match('/(\d{3})(\d{3})(\d{4})/', $cleaned, $matches);
    return "({$matches[1]}) {$matches[2]}-{$matches[3]}";
}

?>





<html>

<head>


<script>
function generate_year()                    /*For generate cc year*/
    {
        for (var i = 2014; i <= 2104; i++)

        {
            document.write ("<option value='" + i + "'>" + i + "</option>");
        }   
    }

        function val_cc () {          

        var expiry_month = document.getElementById("expiry_month").value;
        var expiry_year = document.getElementById("expiry_year").value;
        var today = new Date();
        var expiry_date = today.setFullYear(expiry_year, expiry_month);

        if (today.getTime() > expiry_date.getTime())

        {
            alert ("\u2022Expiry month and year cannot be blank/Expiry month and year is before today month and year.");

            return false;
        }
}
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){
	 $(".frm1").hide();
	  });
	  
	 $(document).ready(function(){
		 $(".btnsubmit").click(function()
		 {
			 $(".form").hide();
		 $(".frm1").show(100);
		 
		 });
	 });

 
 </script>
</head>

<form name="form" action="showsurvey.php" method="post" class="form">
<h1 align="center" style="font-size:24px" style="font-family:Verdana, Geneva, sans-serif">Fill The Survey Form!!!</h1>
<p><br>
  <br><br><br><br><br> Name: <input type="text" name="name" id="name"><br>
</p>
<p>Phone: 
  <label for="phone_no"></label>
  <input type="text" name="phone" id="phone">
  <br>
  <br>
  
  MaritalStatus:
  <br><br>
  
  <input type="radio" name="MaritalStatus" value="Single">Single <br>
  
  
  
  <input type="radio" name="MaritalStatus" value="Married">Married <br>
  
  <input type="radio" name="MaritalStatus" value="Separated">Separated <br>
  
  <input type="radio" name="MaritalStatus" value="Divorced">Divorced <br>
  
  <input type="radio" name="MaritalStatus" value="Widowed">Widowed <br>
  
  <input type="radio" name="MaritalStatus" value="Prefer not to answer">Prefer not to answer <br>
  
  
  <br><br>Credit Card:<br>
  <select name="cctype">
    <option value="Visa" name="cctype">Visa</option>
    <br>
    <option value="American Express" name="cctype">American Express</option>
    <br>
    <option value="MasterCard" name="cctype">MasterCard</option>
    <br>
    <option value="Delta" name="cctype">Delta</option>
    <br>
  </select>
  <br><br>
  
</p>
<tr>
    <td><label for="expiry_day">Expiry date(MM/YYYY):<span id="imp">*</span></label></td>
    <td>
    <select id="expiry_month" tabindex="4" name="expdate">
    <optgroup label="Month">
    <option value="01" id="expdate">January</option>
    <option value="02" id="expdate">February</option>
    <option value="03" id="expdate">March</option>
    <option value="04" id="expdate">April</option>
    <option value="05" id="expdate">May</option>
    <option value="06" id="expdate">June</option>
    <option value="07" id="expdate">July</option>
    <option value="08" id="expdate">August</option>
    <option value="09" id="expdate">September</option>
    <option value="10" id="expdate">October</option>
    <option value="11" id="expdate">November</option>
    <option value="12" id="expdate">December</option>
    </optgroup>
    </select>

    <select id="expiry_year" tabindex="5" name="expyear">
    <optgroup label="Year">
    <script>generate_year();</script>   
    </optgroup>
    </select>
    </td>
</tr><br><br>

 Comment:<br><br> <textarea name="comment" id="comment" required></textarea><br>
 
<br>

<input name="btnsubmit" type="submit"  id="btnsubmit"  value="Submit Survey" class="btnsubmit" />

</form>
<form name="frm1" class="frm1">
<h1 align="center" style="font-size:24px">Details You Filled!!</h1>
  <p>Name: <?php echo @$name; ?> </p>
  <p>Phone: <?php echo format_telephone(@$phone); ?></p>
  <p>Status: <?php echo @$status; ?></p>
  <p>Credit Card Type: <?php echo @$cctype; ?></p>
  <p>Credit Card Expiry Date: <?php echo @$ccexpmonth; ?>/<?php  echo @$ccexpyear; ?></p>
  <p>Comments: <?php echo @$cmnt; ?></p>
</form>
<span><a href="displaysurvey.php"><input type="submit" name="display" value="Display All Surveys"></a>
</html>