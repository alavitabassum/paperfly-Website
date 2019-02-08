<?php include 'modHeader.php';?>

<!-------------------------------------- Page Body -->

<div class="pageCoverPanel shortHeight">
    <img class="pageCoverImg" src="./img/ContactPCP.jpg" alt="Page Cover">
    <!--<div class="pageCoverHeading">COVERAGE <span class="thinText">that</span> WORKS</div>
    <div class="pageCoverIconPanel">
        <img class="pageCoverIcon" src="./img/doorstep_pcp_icon_white.png" onclick="smoothScroll('cvg1');">
        <img class="pageCoverIcon" src="./img/cod_pcp_icon_white.png" onclick="smoothScroll('cvg2');">
        <img class="pageCoverIcon" src="./img/any_pcp_icon_white.png" onclick="smoothScroll('cvg3');">
        <img class="pageCoverIcon" src="./img/return_pcp_icon_white.png" onclick="smoothScroll('cvg4');">
    </div>-->
</div>


<div class="contactPageContainer">
    <div class="contactInfoContainer">
        <h4>Contact Info:</h4>

        <h3>PAPERFLY Private Limited</h3>
        House 04, Road 15, <br>
        Block D, Banani, <br>
        Dhaka 1213, <br>
        Bangladesh<br>
        <br>
        Call: +880 2 9851140, +880 1678 401000 <br>
        Email: info@paperfly.com.bd<br>
        <a href="https://www.facebook.com/paperfly123/"><img src="./img/facebook-Button.jpg"></a>
    </div>
    <div class="contactFormContainer">
        <h4>Write to Us</h4>
        <label class="stdFormLabel">Name:</label><input class="stdFormInput" type="text" name="qryName" required><br>
        <label class="stdFormLabel">Email:</label><input class="stdFormInput" type="text" name="qryEmail" required><br>
        <label class="stdFormLabel">Phone:</label><input class="stdFormInput" type="text" name="qryPhone" required><br>
        <label class="stdFormLabel">Query:</label><input class="stdFormInputBox" type="text" name="qryQuery" required><br>
        <input class="stdFormButton" type="submit" name="submit" value="Submit">
    </div>
</div>

<?php include 'modFooter.php';?>