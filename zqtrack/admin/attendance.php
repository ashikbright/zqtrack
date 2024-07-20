<!-- -------------ye select karne ka h k konsi class ki dekhne h -->
<div class="container mt-5 d-flex">
<h2 class="mt-1">Attendence Table</h2>
<form action="" method="post" class="ms-auto d-flex mt-1"> 
  <select name="class" id="" class="form-control">
  <option selected disabled>---- Select Class ----</option>
  <?php //for std search db to sheet
  $query = "SELECT * FROM class";
  $q = $obj->query($query);
  while($row = mysqli_fetch_assoc($q)){
  ?>
  <option value="<?php echo $row["class_name"]; ?>"><?php echo $row["class_name"]; ?></option>
  <?php } ?>
  </select>
  <button class="btn btn-success ms-2" type="submit" name="submit">Search</button>
</form> 
</div>

<?php  //here work start for atd sheet
date_default_timezone_set("Asia/Karachi"); // timezone set
$firstdayofmonth = date("1-m-Y"); //first day of month
$totalDaysInMonth = date("t",strtotime($firstdayofmonth)); //total day of month

if(isset($_POST["submit"])){ //class student data query
  extract($_POST);
$query = "SELECT * FROM student WHERE class = '$class'";
$std_fetch = $obj->query($query);

$stdname = array(); //create aaray for print std
$std_id = array(); //create aaray for print std id for showing attendence
$counter = 0;       // array index dynamic karne k liye  
while($row = mysqli_fetch_assoc($std_fetch)){    // std fetch
  $stdname[] = $row["name"];
  $std_id[] = $row["sid"];
}
}
$std = mysqli_num_rows($std_fetch); //total student
?>

<div class="container">
  <div class="d-flex">
  <h4 class="mt-3">Student Attendence Of Month : <font color="red"><u><?php echo strtoupper(date("F",strtotime($firstdayofmonth))) ?></u></font></h4>  
</div>
  
  <div class="row mt-4">
    <div class="col-md-12">
  <div class="table-responsive">
    <table class="table table-bordered">

<?php
for($i = 1; $i <= $std + 2; $i++){ //loop here for rows
?>

<?php  // first row for date
if($i == 1){
?>
<tr class="bg-muted">  
  <td rowspan="2"><h6 class="mt-4 text-white fs-5">Names</h6></td>                         
<?php
for($j = 1; $j <= $totalDaysInMonth; $j++){
?>  
<td class="text-white"><?php echo $j; ?></td>
<?php } ?>
</tr>

<?php } 
else if($i == 2){  // second row for day
?>
<tr>                           
<?php
for($j = 0; $j < $totalDaysInMonth; $j++){
?>  
<td class="text-white bg-muted"><?php echo date("D",strtotime("+ $j day",strtotime($firstdayofmonth))); ?></td>
<?php } ?>
</tr>

<?php } 
else{ ?>
<tr>
  <td class="bg-muted text-white"><?php echo $stdname[$counter];  // opper data fetch howa h ye td me data lane k liye data array me save karaya h isliye counetr k zarie?></td> 
<?php
for($j = 1; $j <= $totalDaysInMonth; $j++){
?> 
<?php  // Here work for showing ateendence
$att_date = date("Y-m-$j"); // date take sheet me jo date h usi date me show kare
$query = "SELECT attentdance FROM full_s_attendance WHERE student_id = '$std_id[$counter]' AND curr_date = '$att_date' ";
$fetch = $obj->query($query); //query data lane k liye
$num = mysqli_num_rows($fetch); // num rows maloom karne k liye
if($num > 0){ // num rows agar 1 se ziyada h to
  $row = mysqli_fetch_assoc($fetch); // data fetch
?>
<?php if($row["attentdance"] == "P") { ?>
<td class="text-center bg-success text-white fs-4"><?php echo $row["attentdance"];?></td>
<?php } elseif($row["attentdance"] == "A") {?>
<td class="text-center bg-danger text-white fs-4"><?php echo $row["attentdance"];?></td>
<?php } elseif($row["attentdance"] == "L") {?>
<td class="text-center bg-warning text-white fs-4"><?php echo $row["attentdance"];?></td>
<?php } elseif($row["attentdance"] == "H") {?>
<td class="text-center bg-info text-white fs-4"><?php echo $row["attentdance"];?></td>
<?php } } else{  // here elseif, numrowsif,braketclose and else beacket start ?> 
  <td></td>
<?php }  // else bracket agr data nh h to khali td show kare?>
<?php } ?>
</tr>
<?php $counter++; }  // counter array k liye k index ki value change ho?>

<?php } ?>
    </table>
  </div>
</div>
</div>
</div>

