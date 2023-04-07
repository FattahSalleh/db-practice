<?php
include("database.php");
include("employees.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>DATABASE PRACTICE</title>

    <!-- Load FontAwesome Pro 5 CSS -->
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Load owlCarousel CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->

    <!-- Load slick CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" /> -->

    <!-- Load Custom CSS -->
    <!-- <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/css/ospl/style.css" />
  <link rel="stylesheet" href="/css/personal/style.css" />
  <link rel="stylesheet" href="/css/Chart.min.css" />
  <link rel="stylesheet" href="/css/Chart.min.css" />
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/css/bootstrap.css.map" />
  <link rel="stylesheet" href="/css/bootstrap.min.css.map" /> -->
</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date of Birth</th>
                                <th>Department</th>
                        </thead>
                        <tbody>
                            <?php
                            if (is_array($fetchData)) {
                                foreach ($fetchData as $data) {
                            ?>
                                    <tr>
                                        <td><?php echo $data['emp_id'] ?? ''; ?></td>
                                        <td><?php echo $data['emp_name'] ?? ''; ?></td>
                                        <td><?php echo $data['emp_dob'] ?? ''; ?></td>
                                        <td><?php echo $data['emp_dept'] ?? ''; ?></td>
                                    </tr>
                                <?php
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="8">
                                        <?php echo $fetchData; ?>
                                    </td>
                                <tr>
                                <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Load Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- Load lodash -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>

    <!-- Load owlCarousel JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->

    <!-- Load slick JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> -->

    <!-- Load TweenMax JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>

    <!-- Load Chart.js JS v4.2.1 -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Load JQuery 3.6 -->
    <!-- <script src="/js/jquery-3.6.3.js"></script> -->

    <!-- Load Validate JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>

    <!-- Load Bootstrap 5 -->

    <!-- Load AutoNumeric -->
    <!-- <script src="/js/autoNumeric.js"></script>
    <script src="/js/autoNumeric.min.js"></script> -->

    <!-- Load Custom JS -->
    <!-- <script src="/js/script.js"></script>
    <script src="/js/script-graph.js"></script> -->

</body>

</html>