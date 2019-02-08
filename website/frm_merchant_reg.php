<div class="stdFormHeader"> New Merchant Registration</div>
<form action="./merchantReg.php" method="POST">
    <label class="stdFormLabel">Merchant name : </label><input class="stdFormInput" type="text" name="merchantName" required><br>
<!--    <label class="stdFormLabel">Business Type : </label><select class="stdFormSelect" name="shopMarket" required>-->
<!--        <option value="shop">Shop</option>-->
<!--        <option value="market">Market Place</option>-->
<!--    </select><br>-->
    <label class="stdFormLabel">Contact Person : </label><input class="stdFormInput" type="text" name="contactPerson" required><br>
    <label class="stdFormLabel">Contact Number : </label><input class="stdFormInput" type="text" name="contactNumber" required><br>
    <label class="stdFormLabel">Address : </label><textarea class="stdFormInputBox" name="address"></textarea><br>
<!--    <label class="stdFormLabel">District : </label><select class="stdFormSelect" name="district" onchange="fetch_select(this.value);" required>-->
<!--        <option></option>-->
<!--        <option value="1">Dhaka</option>-->
<!--        <option value="8">Moulvibazar</option>-->
<!--        <option value="13">Narayanganj</option>-->
<!--        <option value="32">Sunamganj</option>-->
<!--        <option value="33">Sylhet</option>-->
<!--        <option value="55">Chittagong</option>-->
<!--        <option value="63">Gazipur</option>-->
<!--        <option value="65">Habiganj</option>-->
<!--        <option value="76">Savar</option>-->
<!--        <option value="78">Keraniganj</option>-->
<!--    </select><br>-->
<!--    <label class="stdFormLabel">Thana : </label><select class="stdFormSelect" id="thana" name="thanaid" required>-->
<!--        <option></option>-->
<!--    </select><br>-->
    <input class="stdFormButton" type="submit" name="submit" value="Apply">
</form>
