<!doctype html> 
<html lang="en"> 
    <head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Bootstrap demo</title> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/dataTables/dataTables.bootstrap5.css">
        <link rel="stylesheet" href="assets/css/stylea.css">
    </head> 
   <body>
        <!-- <header class="header_image" id="header_image"> -->
        <h1 class="text-center p-3" style="color: white" >
           <p style="color: white">Ujian Tengah Semester</p> 
        </h1> 
        </header>    
                <!-- navbar --> 
                <?php include "includes/navbar.php" ?> 
                <!-- navbar --> 
                <!-- navbar -->
                <?php include "Konten.php" ?>
                <!-- navbar -->
                 <footer class="footer"> <div class="text-bg-dark p-3 text-center mt-5"> Pemrograman Web 1 @ <?= date("Y") ?> </div> </footer>
      </div>
      <script src="assets/jquery-3.7.1.js"></script> 
      <script src="assets/dataTables/dataTables.js"></script> 
      <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/dataTables/dataTables.bootstrap5.js"></script>
        <script src="assets/js/main.js"></script>
        <script> 
            new DataTable('#example');
           </script>
        </body> 
        </html>