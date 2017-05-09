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

<h1 class= "page-header">Unattendance Motive</h1>

<form class"form-horizontal" name="form1" method="POST" action="">
<section class="container-fluid">
        <h2 class="panel-info"><div class="panel-body">Please complete following form</div></h2>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Sname">Student Name:
                </label>

                <div class="col-sm-10"> <input type="name" id="Sname" placeholder="Enter Student Name...">
                </div>  
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Tname">Teacher Name:
                </label>

                <div class="col-sm-10"> <input type="name" id="Tname" placeholder="Enter Teacher Name...">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="Ex">Motive:
                </label>
                <div class="col-sm-10"> 
                    <select id="Ex">
                        <<option value=".">-</option>
                        <option value="A"> Sick</option>
                        <option value="B"> Dead Pet</option>
                        <option value="C"> Family issues</option>
                        <option value="D"> Extra-curricular Activities</option>
                    </select> <br>

                <div id="gndr" class="form-group">
                    <label class="control-label col-sm-2" for="gender">Gender:</label>
                        <div class="col-sm-10">
                        <input class="form-inline" type="radio" name="Gender" value="M">Male
                        <input class="form-inline" type="radio" name="Gender" value="F">Female
                        </div>
                </div>  

                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </div>
    </section>
    </form>

<h3 class="jumbotron">Dear <?php echo($_GET['Tname']); ?>.</h3>



</body>
</html>