<?php
session_start();
if (isset($_SESSION['log'])) {
    $log = $_SESSION['log'];
    if (!$log) {
        header('location: login.php');
    }
} else {
    header('location: login.php');
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/ms2_style.css">

    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">MUSD</a>
                </div>

                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="php/logout.php">Log Out</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="row"></div>
        <div class="row row_detail">
            <div class="col-lg-1"></div>

            <form class="form-horizontal">
                <div class="col-lg-3 panel panel-default">
                    <?php require './includes/ms2_frm.php';?>

                </div>
                <div class="col-lg-5  ">
                    <div class="panel panel-default">
                        <?php require './includes/enter_tbl.php'; ?>
                    </div>

                </div>
                <div class="col-lg-2 ">
                    <ul class="list-group tot_viwer">
                        <li class="list-group-item tot_sum"><h4>Sum: Rs.0</h4></li>
                        <li class="list-group-item tot_vat"><h4>Vat: Rs.0</h4></li>
                        <li class="list-group-item tot_final"><h4>Tot: Rs.0</h4></li>
                        <li class="list-group-item"><button type="submit" class="btn btn-primary btn-lg">Submit</button></li>
                    </ul>

                </div>
            </form>  







        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var tot = 0;
                $('.amount_in').keyup(function() {
                    var rate = parseFloat($(this).parent().prev().text());
                    var amount = parseInt($(this).val());
                    var final_rate = rate * amount;
                    $(this).parent().next().replaceWith('<td>' + final_rate + '</td>');

                });
                $('.amount_in').focusout(function() {
                    var value = $(this).val();
                    if (value == '')
                    {
                        $(this).val(0);
                        $(this).parent().next().replaceWith('<td>' + 0 + '</td>');
                    }else{
                        var rate = parseFloat($(this).parent().prev().text());
                        var amount = parseInt($(this).val());
                        var final_rate = rate * amount;
                        tot += final_rate;
                        $('.tot_sum').children().replaceWith('<h4>Sum: Rs.' + tot + '</h4>');
                        var vat = tot*0.11;
                        $('.tot_vat').children().replaceWith('<h4>Vat: Rs.' + vat + '</h4>');
                        var tott = vat + tot;
                        $('.tot_final').children().replaceWith('<h4>Tot: Rs.' + tott + '</h4>');
                        
                    }
                });
            });
            
        </script>
    </body>
</html>


