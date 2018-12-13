<!DOCTYPE html>
<html>
<head>
	<title>HOME ADMIN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style type="text/css">
    body{
      font-family: Helvetica;
      font-size: 16px;
    }

    .slogan{
      font-family: PT Serif;
      font-style: italic;
      font-size: 18px;
      color: black;
      margin-top: 2%;
    }

    .logout{
      font-size: 15px;
      margin-top: 50%;
      color: black;
      font-weight: bold;
    }

    .garis{
      height: 2px;
      width: auto;
      background-color: #AF7817;
    }

    .navr {
      font-weight: bold;
    }

    .fixed-top{
      background-color: white;
    }

    .logout:hover{
      color: #AF7817;
      text-decoration: none;
    }

    .creator{
      background-color: #AF7817;
    }

    .lampu{
      margin: 100% 25%;
    }

    .sampahse{

    }

     .ul1 li{
      list-style-type:none;
      height: 36px;
      font-size: 18px;
      font-family: Chaparral Pro Light;
      font-weight:400;
    }

    .ul1 li span{

    }

    .ul1 {
      margin-left: 0;
      padding: 0;
    }
    .ul1 li a{
      color: black;
      font-style: italic;
    }

    li a:hover{
        text-decoration: none;
        color: #AF7817;   
    }

    .kotak1-judul h3{
      text-transform: uppercase;
      color: #AF7817; 
      font-weight: 600;
      padding-bottom: 35px;

    }

    .create-by{
      color: #AF7817;
    }

    .create-by:hover{
      font-weight: bold;
      text-decoration: none;
      color: #AF7817;
    }

    .dropdown:hover .dropdown-menu:hover .dropdown-item:hover{
      color: white;
      background-color: #AF7817; 
    }

    .nav-item .nav-link{
      color: black;
      text-decoration: none;
      font-weight: bold;
    }
    .nav-item:hover .nav-link:hover{
      color: #AF7817;
    }

    .nav-item:active .nav-link{
      color: #AF7817;
    }

    #drop:hover #navbardrop:hover{
      color: #AF7817; 
    }

     #img5{
      margin-top: 13%;
      color: black;
      font-weight: bold;
      float: right;
    }

    #img5:hover{
      border: 1px solid  #AF7817;
    }

    .fa:hover{
      color: #AF7817;
      text-decoration: none;
    }

  </style>
</head>

  <!-- NAVBAR -->

  <div class="fixed-top">
    <div class="container">
      <?php echo $this->session->flashdata('info'); ?>
      <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 col-8">
         <div class="slogan">"Everyone Can be an Artist"</div>
        </div>
         <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 col-1"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2"></div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 col-1">
          <a href="<?php echo site_url('cLogin/logout'); ?>" class="logout" ><div style="margin-top: 30%">LOGOUT</div></a>
        </div>
      </div>
    </div>
    <div class="garis"></div>
    <ul class="nav justify-content-center">
      <li style="text-align: center; height: 50%">
        <img class="sampahse" href="<?php echo site_url('cAdmin'); ?>" src="<?php echo base_url() ?>/foto/logoWEBPRO.jpg" height="100%" width="6%" style="margin-top: 1%">
      </li>
    </ul>
    <ul class="nav justify-content-center" class="navr">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('cAdmin'); ?>">USERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('cAdmin/addBarang'); ?>">ADD PRODUCT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('cAdmin/lBarang'); ?>">PRODUCT LIST</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('cAdmin/kontak'); ?>">USERS MESSAGES</a>
      </li>
    </ul>
  </div>


  <!-- BODY -->
  <div class="container" style="margin-top: 18%">  
      <form name="tbKeranjang">
              <table class="table table-hover" id="TbKeranjang">
                <thead>
                  <tr>
                    <th align="center">Username</th>
                    <th align="center">Email</th>
                    <th align="center">Message</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                   <?php
                    foreach ($data as $d) {
                        echo '<tr>';
                        echo '<td>'.$d['username'].'</td>';
                        echo '<td>'.$d['email'].'</td>';
                        echo '<td>'.$d['pesan'].'</td>';
                        echo '<td>
                              <a onclick=\'return confirm("Yakin Data Anda Ingin Dihapus?")\' href="'.site_url('cAdmin/deleteKontak/'.$d['id_kontak']).'" data-toggle="tooltip" data-placement="bottom" title="Hapus Alamat" class="btn btn-danger" >Delete</a>
                              </td>' ;
                        echo '</tr>';
                      }
                    
                  ?>
                </tbody>  
              </table>
            </form>
        </div>
  

  <!--- FOOTER -->

  
    <!-- Insert Your Copyright Here -->
    <p style="font-size: 12px; text-align: center;">Copyrigt &#169; 2018 - All Right reserved • Design by <a class="create-by" href="">RECYCLE SQUAD</a></p>
  </footer>
</body>
</html>