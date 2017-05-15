<?php 
/*sanitization fct */

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}


        $SnameErr = $TnameErr = $GenderErr = $MotiveErr = ""; /*initiate empty variable */


        $Sname =  $_POST['Sname'];  /* give value to variables who need one */
        $Tname =  $_POST['Tname'];
        $Gender = $_POST['Gender'];
        $TGender = $_POST['TGender'];
        $Motive = $_POST['Motive'];
        date_default_timezone_set('UTC+1');

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
            $GenderErr = "Student's gender is required";
                } else {
                    $Gender = test_input($_POST["Gender"]);
                }
            }
        if ($_POST["TGender"] == null){
            $TGenderErr = "Teacher's gender is required";
            } else {
                    $TGender = test_input($_POST["TGender"]);
            }

        if ($_POST["Motive"] == null){
            $MotiveErr = "An unnatendance motive is required";
            }   else {
                $Motive = test_input ($_POST["Motive"]);
            }
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
    <link rel="stylesheet" type="text/css" href="excuse.css">
    <title>Document</title>
</head>
<body>

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
                        <option value="">-</option>
                        <option value="Sk"> Sick</option>
                        <option value="DP"> Dead Pet</option>
                        <option value="Fi"> Family issues</option>
                        <option value="ECA"> Extra-curricular Activities</option>
                        <option value="misc"> Others </option>
                        
                    </select> <span class="error">*<?php echo $MotiveErr; ?></span><br>
            

                <div class="form-group" class="radio">
                    <label class="control-label col-sm-2" for="Gender">Student's Gender:</label>
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
                        <input class="form-inline" type="radio" name="TGender" value="Male">Male <br>
                        <input class="form-inline" type="radio" name="TGender" value="Female">Female
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
<div class="panel panel-primary">

<div class="panel-heading"><h1 class="Well">Absence Motive</h1></div>

<div class="panel-body">
    <p> Dear <?php if($TGender=='Male'){
                echo 'Mister';
                    }elseif ($TGender=='Female'){
                echo 'Madam';
                    }else{
                echo ' ';
                }
                echo ' ';
                echo $Tname;
            ?>.
    </p>
    <p> I would like to apologize, since my <?php if($Gender=='Male'){
                                            echo 'son';
                                        }elseif($Gender=='Female'){
                                            echo 'daughter';
                                        }else{
                                            echo ' ';
                                        }
                                    ?> will be unable to attend classes on
                                    <?php echo date('l jS \of F Y');?> because 
                                    <?php if($Gender== 'Male'){
                                        echo'he';
                                    }elseif($Gender=='Female'){
                                        echo 'she';
                                    }else{
                                        echo ' ';
                                    } ?> <?php 
                                    
                                            $r=array('has a cold', 'has a migraine', ' has a bad case of diarhea', ' has a serious case of food poisoning');
                                            $randar=array_rand($r, 1);
                                            $fam=array('will be attending a relatives funeral', 'will be needed at a family meeting');
                                            $randFam=array_rand($fam,1);
                                            if($Motive == 'Sk'){
                                                print_r ($r[$randar]);
                                            }elseif ($Motive=='DP'){
                                                echo 'is depressed since his pet has been dead and, school seems to be out of question';
                                            }elseif ($Motive=='Fi'){
                                                print_r ($r[$randFam]);
                                            }elseif ($Motive== 'ECA'){
                                                echo 'will be needed at important, extra-curricular activities';
                                            }else{
                                                echo '';
                                            } /* come with a way to implement loops within the code */
                                            ?>. 





    </p>

    </div>
</div>

</body>
</html>