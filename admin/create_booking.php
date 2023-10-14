<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | SLGTI";

include_once("head.php");
include_once("menu.php");

$u_n = $_SESSION['user']['username'];
$u_t = $_SESSION['user']['user_type'];
$u_p = $_SESSION['user']['profile'];


$dn=null;
?>
<!--END DON'T CHANGE THE ORDER-->
<?php

if(isset($_GET['get_id'])){
    $pid=$_GET['get_id'];
    $sql="SELECT `passenger`.`passager_principal`,`passenger`.`contact_number`,
    `passenger`.`date_de_prise_en_charge`,`passenger`.`Time`,`passenger`.`adresse_du_pick_up`,
    `passenger`.`adresse_de_depose`,passenger.`nb_de_passager`,`passenger`.`options`,`driver`.`d_id`,
    `driver`.`dtp_num`,`passenger`.`Vehicule_num`,`passenger`.`Tarif` from driver,passenger where `driver`.d_id=`passenger`.d_id and  `passenger`.p_id=$pid";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1) {       
        $row=mysqli_fetch_assoc($result);
        $pp=$row['passager_principal'];
        $cn=$row['contact_number'];
        $dd=$row['date_de_prise_en_charge'];
        $tm=$row['Time'];
        $pu=$row['adresse_du_pick_up'];
        $dp=$row['adresse_de_depose'];
        $np=$row['nb_de_passager'];
        $op=$row['options'];
        $dn=$row['d_id'];
        $dtn=$row['dtp_num'];
        $vn=$row['Vehicule_num'];
        $ta=$row['Tarif'];
    }

}

?>



<!--BLOCK#2 START YOUR CODE HERE -->
  <!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Passenger Detail</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">February
              <?php
                  // echo  $Sdate = new DateTime("now", new DateTimeZone('Asia/Colombo'));
                  // date_default_timezone_set('Asia/Colombo');
                  // $date = date('d-m-y h:i:s');
                  // echo $date;
              ?>
              </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
                  
    <section class="content">
        <div class="card">
            <div class="card-header">
                <?php
                if(isset($_GET['get_id'])){
                ?>
                    <h3 class="card-title">Edit Passenger</h3>
                <?php
                }else{
                ?>
                <h3 class="card-title">Create Passenger</h3>
                <?php
                }
                ?>
            </div>
      
                <!-- /.card-header -->
                <div class="card-body">
                <form action="" method="POST"> 
                 <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Passager principal</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="passager_principal" value="<?php if(isset($_GET['get_id'])){ echo $pp;}?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php if(isset($_GET['get_id'])){ echo $cn;}?>" name="contact_number">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Date de prise en charge</label>
                        <input type="date" class="form-control" placeholder="Enter ..." value="<?php if(isset($_GET['get_id'])){ echo $dd;}?>" name="date_de_prise_en_charge">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Time</label>
                        <input type="time" class="form-control" placeholder="Enter ..." value="<?php if(isset($_GET['get_id'])){ echo $tm;}?>" name="Time">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Adresse du pick-up</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="adresse_du_pick_up"><?php if(isset($_GET['get_id'])){ echo $pu;}?></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Adresse de dépose</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."  name="adresse_de_depose"><?php if(isset($_GET['get_id'])){ echo $dp;}?></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Nb. de passager</label>
                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php if(isset($_GET['get_id'])){ echo $np;}?>" name="nb_de_passager">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Options</label>
                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php if(isset($_GET['get_id'])){ echo $op;}?>" name="options">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Chauffeur</label>
                        <select class="form-control select2" style="width: 100%;" name="d_id" id="didx"  onchange="showTelNum(this.value)" required>
                        <option value="null" selected disabled >---- Select the Chauffeur ---- </option>
                        <?php
                        $sql="select * from `driver`";
                        $result = mysqli_query($con,$sql);
                        if (mysqli_num_rows($result) > 0 ) {
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<option  value="'.$row["d_id"].'" required';
                            if($row["d_id"]== $dn) echo ' selected';
                            echo '>'.$row["dname"].'</option>';
                        }}   
                        ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Chauffeur Contact Number</label>
                        <select class="form-control select2" style="width: 100%;" id="tel_num" name="tel_id" disabled="disabled">
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Véhicule</label>
                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php if(isset($_GET['get_id'])){ echo $vn;}?>"name="Vehicule_num">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tarif</label>
                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php if(isset($_GET['get_id'])){ echo $ta;}?>"name="Tarif">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <?php
                        if(isset($_GET['get_id'])){
                        ?>
                        <input type="submit" class="btn btn-danger btn-block" value="- Edit Booking" name="edit">
                        <?php
                        }else{
                        ?>
                        <input type="submit" class="btn btn-primary btn-block" value="+ Add Booking" name="add">
                        <?php
                        }
                        ?> 
                      </div>
                    </div>
                  </div>
                </form>
                </div>

            <!-- /.card-body -->

        </div>
      <!-- /.card -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.content-wrapper -->


  <?php
if(isset($_POST['add'])){

    if(!empty($_POST['passager_principal'])&& 
    !empty($_POST['contact_number'])&& 
    !empty($_POST['date_de_prise_en_charge'])&& 
    !empty($_POST['Time'])&& 
    !empty($_POST['adresse_du_pick_up'])&& 
    !empty($_POST['adresse_de_depose'])&& 
    !empty($_POST['nb_de_passager'])&& 
    !empty($_POST['options'])&& 
    !empty($_POST['d_id'])&&
    !empty($_POST['Vehicule_num'])&&
    !empty($_POST['Tarif'])){
        $passager_principal=$_POST['passager_principal'];
        $contact_number=$_POST['contact_number'];
        $date_de_prise_en_charge=$_POST['date_de_prise_en_charge'];
        $Time=$_POST['Time'];
        $adresse_du_pick_up=$_POST['adresse_du_pick_up'];
        $adresse_de_depose=$_POST['adresse_de_depose'];
        $nb_de_passager=$_POST['nb_de_passager'];
        $options=$_POST['options'];
        $d_id=$_POST['d_id'];
        $Vehicule_num=$_POST['Vehicule_num'];
        $Tarif=$_POST['Tarif'];

  
        $sql="INSERT INTO `passenger` (`passager_principal`,`contact_number`,`date_de_prise_en_charge`,`Time`,`adresse_du_pick_up`,`adresse_de_depose`,`nb_de_passager`,`options`,`d_id`,`Vehicule_num`,`Tarif`) 
        values('$passager_principal','$contact_number','$date_de_prise_en_charge','$Time','$adresse_du_pick_up','$adresse_de_depose','$nb_de_passager','$options','$d_id','$Vehicule_num','$Tarif')";
        if(mysqli_query($con,$sql)){
            //$message ="<h5>New record created successfully</h5>";
          echo '<script>';
          echo '
          Swal.fire({
             position: "top-end",
         
             icon: "success",
             title: "Your Booking has been saved",
             showConfirmButton: false,
            
             timer: 1500
           }).then(function() {
             // Redirect the user
             window.location.href = "view_passenger";
         
             });
          ';
          echo '</script>';  
        }else{
            echo "Error :-".$sql.
          "<br>"  .mysqli_error($con);
        }
    }
}
?>


<?php
if(isset($_POST['edit'])){
  if(!empty($_POST['passager_principal'])&& 
  !empty($_POST['contact_number'])&& 
  !empty($_POST['date_de_prise_en_charge'])&& 
  !empty($_POST['Time'])&& 
  !empty($_POST['adresse_du_pick_up'])&& 
  !empty($_POST['adresse_de_depose'])&& 
  !empty($_POST['nb_de_passager'])&& 
  !empty($_POST['options'])&& 
  !empty($_POST['d_id'])&&
  !empty($_POST['Vehicule_num'])&&
  !empty($_POST['Tarif'])){

    $passager_principal=$_POST['passager_principal'];
    $contact_number=$_POST['contact_number'];
    $date_de_prise_en_charge=$_POST['date_de_prise_en_charge'];
    $Time=$_POST['Time'];
    $adresse_du_pick_up=$_POST['adresse_du_pick_up'];
    $adresse_de_depose=$_POST['adresse_de_depose'];
    $nb_de_passager=$_POST['nb_de_passager'];
    $options=$_POST['options'];
    $d_id=$_POST['d_id'];
    $Vehicule_num=$_POST['Vehicule_num'];
    $Tarif=$_POST['Tarif'];


  $sql='UPDATE  `passenger` set 
  `passager_principal` ="'.$passager_principal.'",
  `contact_number`="'.$contact_number.'",
  `date_de_prise_en_charge` ="'.$date_de_prise_en_charge.'",
  `Time`="'.$Time.'",
  `adresse_du_pick_up` ="'.$adresse_du_pick_up.'",
  `adresse_de_depose`="'.$adresse_de_depose.'",
  `nb_de_passager` ="'.$nb_de_passager.'",
  `options`="'.$options.'",
  `d_id`="'.$d_id.'",
  `Vehicule_num`="'.$Vehicule_num.'",
  `Tarif`="'.$Tarif.'"

  where `p_id`="'.$pid.'"';

  if(mysqli_query($con,$sql)){
   
    //$message ="<h4 class='text-success' >Update successfully</h4>";

    echo '<script>';
    echo '
    Swal.fire({
       position: "top-end",
   
       icon: "success",
       title: "Your Passenger has been updated",
       showConfirmButton: false,
      
       timer: 1500
     }).then(function() {
       // Redirect the user
       window.location.href = "view_passenger";
   
       });
    ';
    echo '</script>';
}else{
    echo "Error :-".$sql.
  "<br>"  .mysqli_error($con);
}
}



}
?>


<!--BLOCK#2 end YOUR CODE HERE -->


<script>

<?php
if(isset($_GET['get_id'])){
?>
    showTelNum(<?php echo '\''.$dn.'\'';?>);
 
    document.getElementById("tel_num").value = "<?php echo $dtn;?>";
<?php
}
?>

  function showTelNum(val) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("tel_num").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST", "controller/getTelNum", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("driver=" + val);
}
</script>
<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->