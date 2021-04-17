<?php



$name='data.json';
$data=file_get_contents($name);
$users=json_decode($data);
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Json Conversion</title>
</head>
<body>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Acopation</th>
        <th>Country</th>
    </tr>
<?php  
foreach ($users as $user ) {
   ?>


    <tr>
        <td><?= $user->name?></td>
        <td><?= $user->occupation?></td>
        <td><?= $user->country ?></td>
    </tr>
<?php }
?>
</table>

</body>
</html>





























