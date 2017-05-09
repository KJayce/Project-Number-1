<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="motive.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $SnameErr = $TnameErr = $GenderErr = $MotiveErr = "";
        $Sname = $Tname = $Gender = $Motive = "";

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
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


        if (empty($_POST["Gender"])) {
            $GenderErr = "Gender is required";
                } else {
                    $Gender = test_input($_POST["Gender"]);
                }
            }

        if ($_POST["Motive"] == "."){
            $MotiveErr = "An unnatendance motive is required";
            }   else {
                $Motive = test_input ($_POST["Motive"]);
            }
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}

?>

<h1 class= "page-header">Unattendance Motive</h1>
<p><span>required field</span></p>

<form class"form-horizontal" name="form1" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<section class="container-fluid">
        <h2 class="panel-info"><div class="panel-body">Please complete following form</div></h2>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Sname">Student Name:
                </label>

                <div class="col-sm-10"> <input type="text" id="Sname" placeholder="Enter Student Name..." value="<?php echo $Sname; ?>">
                </div>  
            </div>

            <span class="error" >* <?php echo $SnameErr; ?></span>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Tname">Teacher Name:
                </label>

                <div class="col-sm-10"> <input type="text" id="Tname" placeholder="Enter Teacher Name..." value="<?php echo $Tname; ?>" >
                </div>
            </div>
            
            <span class="error" >*<?php echo $TnameErr; ?></span>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Motive">Motive:
                </label>
                <div class="col-sm-10"> 
                    <select id="Motive">
                        <<option value=".">-</option>
                        <option value="A"> Sick</option>
                        <option value="B"> Dead Pet</option>
                        <option value="C"> Family issues</option>
                        <option value="D"> Extra-curricular Activities</option>
                    </select> <br>

                <div id="gndr" class="form-group">
                    <label class="control-label col-sm-2" for="Gender">Gender:</label>
                        <div class="col-sm-10">
                        <input class="form-inline" type="radio" name="Gender"<?php if (isset($gender) && $gender=="male") echo "checked";?> value="M">Male
                        <input class="form-inline" type="radio" name="Gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="F">Female
                        </div>
                </div>  

                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" value="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </div>
    </section>
    <h3 class="jumbotron">Dear <?php echo($_POST['Tname']); ?>.</h3>
        <p>I would like to apologize for my  
    </form>





</body>
</html>