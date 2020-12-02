<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bgcolour">
    <link rel="stylesheet" href="css/style.css">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12">
                <h1>Student Details</h1>
                <table class="table">
                <tr>
                    <td>First Name</td>
                    <td><input type="text" class="formcontrol"></td>
                    <td>Last Name</td>
                    <td><input type="text" class="formcontrol"></td>
                </tr>
           
             <tr>
                    <td>Gender</td>
                    <td><input type="radio" class="formcontrol"name="Gender">Male
                    </td>
                    <td><input type="radio" class="formcontrol" name="Gender">Female</td>
                </tr>
           
            
               
               <tr>
                   <td>Age</td>
                   <td><input type="text" class="formcontrol"></td>
                   <td>D.O.B</td>
                   <td><input type="text" class="formcontrol"></td>
               </tr>
               <tr>
                   <td>Mobile No.</td>
                   <td><input type="text" class="formcontrol"></td>
                   <td>Place</td>
                   <td><input type="text" class="formcontrol"></td>
               </tr>
               <tr>
                   <td>Email id</td>
                   <td><input type="text" class="formcontrol"></td>
                   <td>Username</td>
                   <td><input type="text" class="formcontrol"></td>
               </tr>
               <tr>
                   <td>Password</td>
                   <td><input type="password" class="formcontrol"></td>
                   <td>Confirm Password</td>
                   <td><input type="password" class="formcontrol"></td>
               </tr>
               
                <tr>
                <td><input type="checkbox" class="formcontrol">I hereby declare the above mentioned details are true.</td>
                </tr>
                <tr>
                    <td><button class="btn btn-success">Submit</button></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-danger">Cancel</button></td>
                </tr>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>