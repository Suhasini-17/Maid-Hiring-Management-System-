<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-bg footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <?php
                                $sql = "SELECT * from tblpage where PageType='aboutus'";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);

                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $row) {
                                ?>
                                        <h4><?php echo htmlentities($row->PageTitle); ?></h4>
                                        <div class="footer-pera">
                                            <p><?php echo $row->PageDescription; ?>.</p><?php $cnt = $cnt + 1;
                                                                                            }
                                                                                        } ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <?php
                                        $sql = "SELECT * from tblpage where PageType='contactus'";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);

                                        $cnt = 1;
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $row) {
                                        ?>
                                                <li>
                                                    <p>Address :<?php echo htmlentities($row->PageDescription); ?></p>
                                                </li>
                                                <li><a href="#">Phone : <?php echo htmlentities($row->MobileNumber); ?></a></li>
                                                <li><a href="#">Email : <?php echo htmlentities($row->Email); ?></a></li><?php $cnt = $cnt + 1;
                                                                                                                            }
                                                                                                                        } ?>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Important Link</h4>
                                    <ul>
                                        <li><a href="index.php"> Home</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="maid-hiring.php">Maid Hiring</a></li>
                                        <li><a href="admin/login.php">Admin</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--  -->

                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area footer-bg">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-xl-10 col-lg-10 ">
                                <div class="footer-copy-right">
                                    <div class="social-icons">
                                        <a href="#" class="social-icon" style="margin-right: 10px;"><i class="fab fa-facebook-f" style="font-size: 20px; color: #333;"></i></a>
                                        <a href="#" class="social-icon" style="margin-right: 10px;"><i class="fab fa-twitter" style="font-size: 20px; color: #333;"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-instagram" style="font-size: 20px; color: #333;"></i></a>
                                    </div>
                                    <head>
    <!-- Other head content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .social-icons {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .social-icons li {
            display: inline-block;
            margin-right: 50px;
        }

        .social-icons li:last-child {
            margin-right: 0;
        }

        .social-icon {
            font-size: 50px;
            color: pink;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-icon:hover {
            filter: brightness(1000%);
        }
    </style>
</head>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
</footer>
