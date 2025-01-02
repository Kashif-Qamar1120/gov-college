<?php
require_once('process/conn.php');	
$query="select * from events 
        where events.status = 1";
			$excute=mysqli_query($conn, $query);

			?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>GVTC</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.css" rel="stylesheet">
    <!-- <style>
                                            img {
  border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 150px; /* Set a small width */
}
                                        </style> -->
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php require_once 'inc/sidebar.php';?>

        <!-- top navigation -->
        <?php require_once 'inc/header.php';?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Events <small>Record</small></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                        data-target="#exampleModal" data-whatever="@mdo">Add </button>

                            <!-- <a href="offer.php"><button class="btn btn-success btn-sm">Ad sales</button></a> -->

                                <a href="process/event_delete.php?all"> <button class="btn btn-danger btn-lg" style="float: right">Delete All</button></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
										<th>#</th>
                                        <!-- <th>SubCategory Name</th> -->
                                        <th>Name:</th>
                                        <th>Description:</th>
                                        <th>Images</th>       
                                        <th style="float: right">Action</th>
                                    </tr>
                                    </thead>


                                    <tbody>

									<?php


										$i=1; while($record=mysqli_fetch_array($excute)){

										?>
                                    <tr>
										
                                        <td><?php echo $i; ?></td>
										<td><?php echo $record['name']; ?></td>
										<td><?php echo $record['description']; ?></td>
                                        <td><button data-toggle="modal" data-target="#imageModal<?php echo $record['id']; ?>">View Images</button></td>
                                        <td class="text-right">
							<a href="edit_events.php?edit=<?php echo $record['id']; ?>">
                          <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                            <i class="fa fa-user"></i>
                          </button>
                        </a>
										
										
                          <a href="process/event_delete.php?dlt=<?php echo $record['id']; ?>">
										<button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                            <i class="fa fa-times"></i>
                          </button>
										
										</a>
                        </td>
                                        <!-- Modal -->
<div class="modal fade" id="imageModal<?php echo $record['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="imageModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Image Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      <?php
                    $image_query = "SELECT * FROM pictures WHERE event_id = {$record['id']}";
                    $image_result = mysqli_query($conn, $image_query);
                    while ($image_row = mysqli_fetch_assoc($image_result)) {
                        $image_path = $image_row['picture'];
                        ?>
                            <form action="process/event_imageUpdate.php" method="post" enctype="multipart/form-data">
                            <img src="uploads/events/<?php echo $image_path; ?>" width="100" height="100">
                            <input type="file" name="newimg" class="form-control">
                            <input type="hidden" name="imgid" value="<?php echo $image_row['picture_id']; ?>"  class="form-control">
                            <input type="hidden" name="id" value="<?php echo $record['id']; ?>"  class="form-control">
                            <input type="submit" value="update" class="btn btn-info">
                            <input type="hidden" name="update" value="img">
                            </form>
                        <?php
                    }
                    ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                                        
                                       
                                    </tr>
										<?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require_once 'inc/footer.php';?>
        <!-- /footer content -->
    </div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Events</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			
            <!-- <?php
                $regex = "/^[a-zA-z\d\._]+@[a-zA-z\d\._]+\.[a-zA-Z\d\._]$/";
                if(isset($_POST['submit'])){
                    if(preg_match($regex,$_POST['textarea'])){
                        $output = "<span> Good </span>";
                    }
                    else
                    {
                        $output = "<span> Bad </span>";
                    }
                }
            
            ?> -->
			
            <div class="modal-body">
                <form action="process/event_process.php" method="post" enctype="multipart/form-data">
							
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Event Name:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Description:</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Picture:</label>
                        <input type="file" class="form-control" name="photos[]" multiple required>
                    </div>            

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">submit</button>
                    <input type="hidden" name="events" value="form1">
                    <input type="hidden" name="status" value="1">
                    <?php if(isset($output)){ echo $output;} ?>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="vendors/iCheck/icheck.min.js"></script>
<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
<!-- Datatables -->
<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="vendors/jszip/dist/jszip.min.js"></script>
<script src="vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>

<script>
    ClassicEditor
    .create( document.querySelector( '#message-text' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
<script>
    ClassicEditor
    .create( document.querySelector( '#message-text1' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
<script>
    ClassicEditor
    .create( document.querySelector( '#message-text2' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
<script>
    ClassicEditor
    .create( document.querySelector( '#message-text3' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>



</body>
</html>