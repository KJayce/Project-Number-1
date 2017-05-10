<?php 
/*sanitization fct */

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="motive.css">
    <title>Document</title>
</head>
<body>
    <?php 

        $SnameErr = $TnameErr = $GenderErr = $MotiveErr = ""; /*initiate empty variable */
        $Gender = $Motive = "";

        $Sname =  $_POST['Sname'];  /* give value to variables who need one */
        $Tname =  $_POST['Tname'];

        if ($_SERVER["REQUEST_METHOD"]=="POST"){ /* state in an if the request method of server*/

        /* everything below are all the conditions necessary for the form to be submitted */
            if (empty($_POST["Sname"])){
                $SnameErr = "Student's name is required";
            } else {
                $Sname = test_input($_POST["Sname"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $Sname)){
                    $SnameErr = "Only letters and white space allowed";
                }
            }

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            if (empty($_POST["Tname"])){
                $TnameErr = "Teacher's name is required";
            } else {
                $Tname = test_input($_POST["Tname"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $Tname)){
                    $TnameErr = "Only letters and white space allowed";
                }
            }

        if ($_POST["Gender"] == null) {
            $GenderErr = "Student's Gender is required";
                } else {
                    $Gender = test_input($_POST["Gender"]);
                }
            }
        if ($_POST["TGender"] == null){
            $TGenderErr = "Teacher's gender is required";
            } else {
                    $TGender = test_input($_POST["TGender"]);
            }

        if ($_POST["Motive"] == "null"){
            $MotiveErr = "An unnatendance motive is required";
            }   else {
                $Motive = test_input ($_POST["Motive"]);
            }
        }



?>

<h1 class= "page-header">EXGen</h1>

<fieldset>
    

<p><span class="error"> * Required field</span></p>

<form class"form-horizontal" name="form1" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<section class="container-fluid">
        <h2 class="panel-info"><div class="panel-body">Please complete following form</div></h2>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Sname">Student Name:
                </label>

                <div class="col-sm-10"><input type="text" name="Sname" placeholder="Enter Student Name..." value="<?php echo $Sname; ?>">
                <span class="error" >* <?php echo $SnameErr; ?></span>
                </div>  
            </div>

            

            <div class="form-group">
                <label class="control-label col-sm-2" for="Tname">Teacher Name:
                </label>

                <div class="col-sm-10"> <input type="text" name="Tname" placeholder="Enter Teacher Name..." value="<?php echo $Tname; ?>" >
                <span class="error" >*<?php echo $TnameErr; ?></span>
                </div>
            </div>
            
            

            <div class="form-group">
                <label class="control-label col-sm-2" for="Motive">Motive:
                </label>
                <div class="col-sm-10"> 
                    <select name="Motive">
                        <option value="null">-</option>
                        <option value="Sick"> Sick</option>
                        <option value="Dead Pet"> Dead Pet</option>
                        <option value="Family issues"> Family issues</option>
                        <option value="Extra-curricular Activities"> Extra-curricular Activities</option>
                        
                    </select> <span class="error">*<?php echo $MotiveErr; ?></span><br>
            

                <div class="form-group" class="radio">
                    <label class="control-label col-sm-2" for="Gender">Gender:</label>
                        <div class="col-sm-10">
                        <input class="form-inline" type="radio" name="Gender"<?php if (isset($Gender) && $Gender=="male") echo "checked";?> value="Male">Male <br>
                        <input class="form-inline" type="radio" name="Gender"<?php if (isset($Gender) && $Gender=="female") echo "checked";?> value="Female">Female
                        <span class="error">* <?php echo $GenderErr;?></span>
                        <br><br>
                        </div>
                </div>  

                <div class="form-group" class="radio"> 
                    <label class="control-label col-sm-2" for="TGender"> Teacher's Gender:</label>
                        <div class="col-sm-10" class="pull-left">
                        <input class="form-inline" type="radio" name="TGender"<?php if (isset($TGender) && $TGender=="male") echo "checked";?> value="Male">Male <br>
                        <input class="form-inline" type="radio" name="TGender"<?php if (isset($TGender) && $TGender=="female") echo "checked";?> value="Female">Female
                        <span class="error">* <?php echo $TGenderErr;?></span>
                        <br><br>
                        </div>
                </div>  

                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                        <a href="https://www.youtube.com/" target="_blank"><button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button></a>
                        </div>
                    </div>
                </div>
    </section>
    
    </form>
    </fieldset>












    <?php

    if (!preg_match("/^a-zA-Z*$/", $Tname)){
                $Tname='';
                }else echo $Tname;
    
        echo "<br>";
    if (!preg_match ("/^a-zA-Z*$/", $Sname)){
                $Sname='';
                }else echo $Sname;
    
        echo "<br>";
        echo $Gender;
        echo "<br>";
        echo $Motive;
    ?>
</body>
</html>