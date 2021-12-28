<?php
$regex = "/^[A-Z][a-z]+[\d]{2}$/";
    if(isset($_POST['submit'])){
        if(preg_match($regex,$_POST['text'])){
            $output = "<span style='color:green'>Correct:)</span>";
        }else{
            $output = "<span style='color:red'>Start with Capital and End with 2 Digit.</span>";
        }
    }


?>




<form method='POST'>
    <input type="text" name='text' autofocus/>
    <input type="SUBMIT" name="submit">
    <?php if(isset($output)) {echo $output;} ?>
</form>