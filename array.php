<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend>Personal information:</legend>
        Name: <input type="text" name="fname">
        <input type="submit">
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['fname'];
            if(sizeof($data)){

            }else{
                $data=array();
            }
            if(!empty($name)){
                array_push($data,$name);
            }

            if (empty($data)) {
                echo "Name is empty please enter your name";
            } else {
                foreach ($data as $value){
                    echo "$value <br>";
                }

            }
            print_r($data);
            $name='';

        }

        ?>
</form>



