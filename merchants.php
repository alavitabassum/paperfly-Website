<?php

include 'modHeader.php';
?>
<!-- <script>
    function myfunction(){
      var x = document.forms["merchant_reg"]["email"].value;
    
   
        if (x == "") {
        alert("You must enter your email");
       
        
      }else{

         $.ajax({
           type: 'post',
           url: 'merchants.php',
           data: $('form').serialize(),
           success: function () { 
               alert('form was submitted');
           }
         });
          $.ajax({
           type: 'post',
           url: 'http://paperflybd.com/api_temporary_merchant_registration.php',
           data: $('form').serialize(),
           success: function () {
             alert('form was submitted');
           }
         });

        }
     }



   </script> -->

   <?php
  
  error_reporting(0);

if (!$conn = mysqli_connect("localhost","paperfly_db_root","db_root_123","paperfly_db"))
    {
    $connError = 'Y';
    }

error_reporting(E_ALL & ~(E_WARNING | E_NOTICE));
 $districtsql = "select districtId, districtName from tbl_district_info where districtId in (select distinct districtId from tbl_thana_info)";
    $districtresult = mysqli_query($conn,$districtsql);


   ?>

   <div class="pageCoverPanel shortHeight">
        <img class="pageCoverImg imgBlurEfx" src="./img/MerchantPCP.jpg" alt="Page Cover">
        <div class="pageCoverHeading">Register <span class="thinText">as </span> MERCHANT</div>
        <div class="pageCoverIconPanel" style="
        position: relative;
    float: right;
    right: 0;
    text-align: right;
    max-width: 100%;
    margin: 10vh 0;
    padding-right: 12%;
    background-color: rgba(22, 70, 158, 0.7);
    padding-right: 0px;
        ">
           <a  href="services.php#svc1"><img class="pageCoverIcon" src="./img/iconDSD.png"></a>
           <a  href="services.php#svc2"><img class="pageCoverIcon" src="./img/iconCOD.png"></a>
           <a  href="services.php#svc4"><img class="pageCoverIcon" src="./img/iconRet.png"></a>
           <a  href="automation.php#aut2"><img class="pageCoverIcon" src="./img/icon14S.png"></a>
           <a  href="automation.php#aut3"><img class="pageCoverIcon" src="./img/iconEIn.png"></a>
           <a  href="automation.php#aut5"><img class="pageCoverIcon" src="./img/iconSMS.png"></a>

       </div>
    </div>
<div class="OfferHeading">
  <h4>Limited time offer on delivery charges</h4>
<ul>
  <li>
Delivery within Dhaka <img class="offer_img" src="./img/76.png"> <span>60</span> Taka + 1% COD
  </li>
  <li>
Delivery outside Dhaka <img class="offer_img" src="./img/140.png"> <span>120</span> Taka + 1% COD
  </li>
  <li class="postnote">
 <span> &#42; </span>For details please refer to our <a target="_blank" href="http://paperfly.com.bd/Terms and conditions.pdf">Terms and Conditions</a>
  </li>
</ul>
</div>
<div class="stdFormContainer">

<!--<div class="stdFormHeader"> New Merchant Registration</div>-->
<form id="merchant_reg" action="frm_merchant_reg.php" method="POST">
  <table class="merchant-reg-tbl">
  <tbody>
    <tr>
      <td colspan="3">
      <h3><u>Basic Information</u></h3>
    </td>
    </tr>
    <tr>
      <td>
         <label class="stdFormLabel">Business name : </label>
      </td>
      <td>
         <input class="stdFormInput" type="text" name="merchantName" id = "merchant_name" required>
      </td>
      <td>
          <label class="stdFormLabel">Business Type : </label>
      </td>
      <td>
          <select class="stdFormInput" id="businessType" name="businessType">
              <option value="Market Place">Market Place</option>
              <option value="Shop">Facebook Shop</option>
          </select>
      </td>
      <td>
          <label class="stdFormLabel">Product(s) Nature : </label>
      </td>
      <td>
          <input class="stdFormInput" type="text" name="productNature">
      </td>
    </tr>

    <tr>
      <td>
          <label class="stdFormLabel">Address : </label>
      </td>
      <td>
          <input  class="stdFormInput" type="text" name="address">
      </td>
      <td>
          <label class="stdFormLabel">District : </label>
      </td>
      <td>
          <select class="stdFormInput" id="districtid" name="districtid" onchange="fetch_select(this.value);">
              <option></option>
                    <?php
                    foreach ($districtresult as $districtrow) {
                    echo "<option value=" . $districtrow['districtId'] . ">" . $districtrow['districtName'] . "</option>";
                    }
                    ?>
          </select>
      </td>
      <td>
          <label class="stdFormLabel">Thana : </label>
      </td>
      <td>
          <select class="stdFormInput" id="thanaid" name="thanaid" onchange="fetch_pointCode(this.value)">
          </select>
      </td>
    </tr>


    <tr>
      <td>
          <label class="stdFormLabel">Website : </label>
          </td>
      <td>
          <input class="stdFormInput" type="text" name="website">
      </td>
      <td>
          <label class="stdFormLabel">Facebook Page : </label>
          </td>
      <td>
          <input class="stdFormInput" type="text" name="facebook">
      </td>
      <td>
          <label class="stdFormLabel">Company Phone : </label>
          </td>
      <td>
          <input class="stdFormInput" type="text" name="companyPhone">
      </td>
    </tr>

    <tr>
      <td colspan="3">
      <h3><u>Contact Person Details</u></h3>
    </td>
    </tr>
    <tr>
      <td>
      <label class="stdFormLabel">Name : </label>
    </td>
      <td>
        <input class="stdFormInput" type="text" name="contactName" id="c_name">
      </td>
      <td>
      <label class="stdFormLabel">Designation : </label>
      </td>
      <td>
      <input class="stdFormInput" type="text" name="designation" >
      </td>
      <td>
      <label class="stdFormLabel">Contact Number : </label>
      </td>
      <td>
      <input class="stdFormInput" type="text" name="contactNumber" id="c_number" required >
      </td>
    </tr>
    <tr>
    <td>
      <label class="stdFormLabel">Email : </label>
      </td>
      <td>
      <input class="stdFormInput" type="text" id="email" name="email" required>
      </td>
    </tr>
    <tr>
      <td colspan="3">
      <h3><u>Banking Information</u></h3>
    </td>
    </tr>

    <tr>

         <td>
        <label class="stdFormLabel">Payment Method : </label>
        </td>
      <td>
        <select name="paymentMode" class="stdFormInput" id="paymentMode" required>
          <option value="">Select</option>
            <option value="cheque">Cheque</option>
            <option value="beftn">Bank Transfer</option>

        </select>
        </td>
        <td>
        <label style="display: none;" for="accountName" id="accountName_l" class="stdFormLabel">Account Name : </label>
        </td>
      <td>
        <input style="display: none;" class="stdFormInput" type="text" name="accountName" id="accountName" required>
        </td>
        <td>
        <label style="display: none;" for = "accountNumber" id="accountNumber_l" class="stdFormLabel">Account Number : </label>
        </td>
      <td>
        <input style="display: none;" class="stdFormInput" type="text" name="accountNumber" id="accountNumber" required>
        </td>
        </tr>

        <tr>
        <td>
        <label style="display: none;" for="bankName" id="bankName_l" class="stdFormLabel">Bank Name : </label>
        </td>
      <td>
        <input style="display: none;" class="stdFormInput" type="text" name="bankName" id="bankName" required>
        </td>
          <td>
        <label style="display: none;" for="branch" id="branch_l" class="stdFormLabel">Branch : </label>
        </td>
      <td>
        <input style="display: none;" class="stdFormInput" type="text" name="branch" id=branch required="">
        </td>
        <td>
        <label style="display: none;" for="routeNumber" id="routeNumber_l" class="stdFormLabel">Routing Number : </label>
        </td>
      <td>
        <input style="display: none;" class="stdFormInput" type="text" name="routeNumber" id="routeNumber" required>
        </td>
      </tr>

      <tr>
      <td   colspan="3">
       <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)"> I agree to the <b><a  target="_blank" href="http://paperfly.com.bd/Terms and conditions.pdf"> Terms & Conditions</a></b>

       </td>
      </tr>
    <tr>


      <td colspan="3">
      <input class="stdFormButton"  type="submit" name="submit" value="Submit" id="submit">
      </td>
    </tr>

  </tbody>
</table>
  <!--  <label class="stdFormLabel">Merchant name : </label><input class="stdFormInput" type="text" name="merchantName" required><br>
   <label class="stdFormLabel">Contact Person : </label><input class="stdFormInput" type="text" name="contactPerson" required><br>
   <label class="stdFormLabel">Contact Number : </label><input class="stdFormInput" type="text" name="contactNumber" id="c_number" required><br>
   <label class="stdFormLabel">Address : </label><textarea class="stdFormInputBox" name="address"></textarea><br>

   <input class="stdFormButton"  type="submit" name="submit" onClick="myfunction()" value="Apply"> -->
</form>
 </div>
 <?php
include 'modFooter.php';
 ?>
<script type="text/javascript">
        function fetch_select(val)
            {
                $.ajax({
                    type: 'post',
                    url: 'fetchThana.php',
                    data: {
                        get_thanaid: val
                    },
                    success: function (response)
                    {
                        document.getElementById("thanaid").innerHTML = response;
                      /*  document.getElementById("thana2").innerHTML = response;*/
                    }
                });
            }
             
        $(document).ready(function (){
         
          document.getElementById("submit").disabled = true; 
          document.getElementById('submit').style.backgroundColor='grey';
           document.getElementById('submit').style.cursor = 'not-allowed';

            
          
            $("#paymentMode").change(function() {
                // foo is the id of the other select box 
                if ($(this).val() != "cheque") {
                      document.getElementById("accountNumber").required = true;
                    document.getElementById("branch").required = true;
                    document.getElementById("bankName").required = true;
                    document.getElementById("routeNumber").required = true;
                  $("#accountNumber").show();
                  $("#accountNumber_l").show();
                    $("#branch").show();
                     $("#branch_l").show();
                    $("#bankName").show();
                    $("#bankName_l").show();
                    $("#routeNumber").show();
                    $('#routeNumber_l').show();
                    $("#accountName").show();
                     $("#accountName_l").show();
                    //$("#accountName").hide();
                
                   
                }else{
                    document.getElementById("accountNumber").required = false;
                    document.getElementById("branch").required = false;
                    document.getElementById("bankName").required = false;
                    document.getElementById("routeNumber").required = false;
                    $("#accountNumber").hide();
                    $("#accountNumber_l").hide();
                    $("#branch").hide();
                    $("#branch_l").hide();
                    $("#bankName").hide();
                    $("#bankName_l").hide();
                    $("#routeNumber").hide();
                    $('#routeNumber_l').hide();
                    $("#accountName").show();
                     $("#accountName_l").show();
                    
                     
                } 
            });
             $("#paymentMode").change(function() {
                     {
                      if($(this).val() == "")
                      {
                        document.getElementById("accountName").style.display= "none";
                        document.getElementById("accountNumber").style.display= "none";
                        document.getElementById("branch").style.display= "none";
                        document.getElementById("bankName").style.display= "none";
                        document.getElementById("routeNumber").style.display= "none";
                        document.getElementById("accountName_l").style.display= "none";
                        document.getElementById("accountNumber_l").style.display= "none";
                        document.getElementById("branch_l").style.display= "none";
                        document.getElementById("bankName_l").style.display= "none";
                        document.getElementById("routeNumber_l").style.display= "none";

                      }
                     }
                   });
        });

         function activateButton(element) {
        if(element.checked) {
        document.getElementById("submit").disabled = false;
        document.getElementById('submit').style.backgroundColor='#16469E';
           document.getElementById('submit').style.cursor = 'pointer';
       }
       else  {
           
       document.getElementById("submit").disabled = true;
        document.getElementById('submit').style.backgroundColor='grey';
           document.getElementById('submit').style.cursor = 'not-allowed';
          }
          }

          

</script>