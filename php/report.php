
<?php
$connection = mysqli_connect("localhost", "root", "","employee"); // connect with server and Database employee

if(isset($_POST['submit'])){ 
$employee_id = $_POST['employee_id'];
$employee_name = $_POST['employee_name'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$job = $_POST['job'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$shift = $_POST['shift'];
$discribtion = $_POST['discribtion'];
if($employee_id !=''||$employee_name !=''||$telephone !=''||$email !=''||$job !=''||$start_date !=''||$end_date !=''||$shift !=''||$discribtion !=''){
//Insert Query of SQL
$query = mysqli_query($connection,"INSERT INTO report (employee_id, employee_name, telephone,email,job,start_date,end_date,shift,discribtion) VALUES ('$employee_id', '$employee_name', '$telephone','$email','$job','$start_date','$end_date','$shift','$discribtion')");
echo "Data Inserted successfully...!!";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>
