<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['mhmsaid']) == 0) {
    header('location:logout.php');
    exit(); // Added exit to stop further execution
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Maid Hiring Management System || All Request</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/colors.css" />
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="js/semantic.min.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" />
</head>
<body class="inner_page tables_page">
    <div class="full_container">
        <div class="inner_container">
            <?php include_once('includes/sidebar.php');?>
            <div id="content">
                <?php include_once('includes/header.php');?>
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>All Request</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>All Request</h2>
                                        </div>
                                    </div>
                                    <div class="table_section padding_infor_info">
                                        <div class="table-responsive-sm">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center"></th>
                                                        <th>Booking ID</th>
                                                        <th class="d-none d-sm-table-cell">Name</th>
                                                        <th class="d-none d-sm-table-cell">Mobile Number</th>
                                                        <th class="d-none d-sm-table-cell">Email</th>
                                                        <th class="d-none d-sm-table-cell">Booking Date</th>
                                                        <th class="d-none d-sm-table-cell">Status</th>
                                                        <th class="d-none d-sm-table-cell">Assign To</th>
                                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT * FROM tblmaidbooking";
                                                    $query = $dbh->prepare($sql);
                                                    $query->execute();
                                                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                                                    $cnt = 1;
                                                    if ($query->rowCount() > 0) {
                                                        foreach ($results as $row) { ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo htmlentities($cnt); ?></td>
                                                                <td class="font-w600"><?php echo htmlentities($row->BookingID); ?></td>
                                                                <td class="font-w600"><?php echo htmlentities($row->Name); ?></td>
                                                                <td class="font-w600"><?php echo htmlentities($row->ContactNumber); ?></td>
                                                                <td class="font-w600"><?php echo htmlentities($row->Email); ?></td>
                                                                <td class="font-w600">
                                                                    <span class="badge badge-primary"><?php echo htmlentities($row->BookingDate); ?></span>
                                                                </td>
                                                                <td class="font-w600">
                                                                    <?php if ($row->Status == "") { ?>
                                                                        <?php echo "Not Updated Yet"; ?>
                                                                    <?php } else { ?>
                                                                        <span class="badge badge-primary"><?php echo htmlentities($row->Status); ?></span>
                                                                    <?php } ?>
                                                                </td>
                                                                <td class="font-w600">
                                                                    <?php if ($row->Status == "") { ?>
                                                                        <?php echo "Not Assign Yet"; ?>
                                                                    <?php } elseif ($row->Status == "Cancelled") { ?>
                                                                        <?php echo "Cancelled"; ?>
                                                                    <?php } else { ?>
                                                                        <span class="badge badge-primary"><?php echo htmlentities($row->AssignTo); ?></span>
                                                                    <?php } ?>
                                                                </td>
                                                                <td class="d-none d-sm-table-cell"><a href="view-booking-detail.php?editid=<?php echo htmlentities($row->ID); ?>&amp;bookingid=<?php echo htmlentities($row->BookingID); ?>" class="btn btn-primary btn-sm">View Details</a></td>
                                                            </tr>
                                                            <?php $cnt = $cnt + 1;
                                                        }
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include_once('includes/footer.php');?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/Chart.bundle.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/analyser.js"></script>
    <script src="js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/semantic.min.js"></script>
</body>
</html>
<?php } ?>
