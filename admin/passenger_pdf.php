

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Contacts</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style>
    
  </style>
</head>
<body >
<!-- Site wrapper -->



    <section class="content">
        <div class="card card-solid">
            <div class="row">

                

                <div class="col-md-12">
            
                <table class="table  table-sm">
                    <tr>
                        <td style="border: bottom 0px;">
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small">
                            <img src="dist/img/logo_pdf.png" alt="" width="120px">
                        </li>
                        </ul>
                        </td>
                        <td style="border: bottom 0px;"> <h2 class="lead"><b>Bon de mission :</b> PCI1000</h2></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border: bottom 0px;">
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><h1 class="lead"><b>Paris Cab Limousinee</b></h1></li>
                        <li class="small"><p class="text-muted text-sm"><b>44 Avenue Albert Sarraut 95190 <br> Goussainville <br>France</b></p></li>
                        <li class="small"><p class="text-muted text-sm"><b>Tél.: </b>+33 660 763 235</p></li>
                        <li class="small"><p class="text-muted text-sm"><b>Email: </b>pariscablimo@gmail.com</p></li>
                        </ul>

                        </td>
                    </tr>
  

                    <tr>
                        <td colspan="2">

                            <table class="table table-bordered ">
                            <tbody>
                                <tr>
                                    <th>Référence</th>
                                    <td>Réservation PCI1000<?php if(isset($_GET['get_id'])) echo $pid ?> du 25/09/2023</td>
                                </tr>
                                <tr>
                                    <th>Date de prise en charge</th>
                                    <td><?php if(isset($_GET['get_id'])) echo $dd ?> | <?php if(isset($_GET['get_id'])) echo $tm ?></td>
                                </tr>
                                <tr>
                                    <th>Adresse du pick-up</th>
                                    <td><?php if(isset($_GET['get_id'])) echo $pu ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Adresse de dépose</th>
                                    <td><?php if(isset($_GET['get_id'])) echo $dp ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nb. de passager</th>
                                    <td><?php if(isset($_GET['get_id'])) echo $np ?> passagers</td>
                                </tr>
                                <tr>
                                    <th>Passager principal</th>
                                    <td>{{ passager_principal }} | {{ contact_number }}</td>
                                </tr>
                                <tr>
                                    <th>Chauffeur</th>
                                    <td><?php if(isset($_GET['get_id'])) echo  $dn ?></td>
                                </tr>
                                <tr>
                                    <th>Véhicule</th>
                                    <td><?php if(isset($_GET['get_id'])) echo $vn ?></td>
                                </tr>
                                <tr>
                                    <th>Options</th>
                                    <td><?php if(isset($_GET['get_id'])) echo $op ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </td>
                    </tr>

                            <!-- <tr>
                                <td colspan="2">
                                    <hr>
                     
                                    <ul class="pagination justify-content-center m-0">
                                    <li class="small">First Plaza, 105, rue de Lourmel 75015 Paris - contact@first-plaza.fr</li>              
                                    </ul>
                   
                                </td>
                            </tr> -->
                </table>
      
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>


  </div>
  <!-- /.content-wrapper -->


<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

