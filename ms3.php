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
        <link rel="stylesheet" href="css/ms3_style.css">
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
        <div class="content">
            <div class="row from_row">
                <div class="col-lg-5">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="report_month">Month</label>
                            <input type="month" class="form-control" id="report_month">
                        </div>
                        <button type="submit" class="btn btn-default">Generate Report</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Date</th>
                            <th>Performed Duties</th>
                            <th>Issued W/ME no</th>
                            <th>MS2 No</th>
                            <th>Amount</th>
                            <th>Date of Deposit</th>
                            <th>Bank Details</th>
                            <th>Deposit Amount</th>
                            <th>Assistant</th>
                            <th>Traders</th>                   
                        </tr>
                        <tr>
                            <td>2015/02/02</td>
                            <td>Awareness Program Jayanthipura</td>
                            <td>E272753 - E27276</td>
                            <td>A070587</td>
                            <td>6270.00</td>
                            <td>2014/06/06</td>
                            <td>BOC Jayanthipura 048570</td>
                            <td>26277.00</td>
                            <td>M.L.S.de Costha</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>2015/02/02</td>
                            <td>Awareness Program Jayanthipura</td>
                            <td>E272753 - E27276</td>
                            <td>A070587</td>
                            <td>6270.00</td>
                            <td>2014/06/06</td>
                            <td>BOC Jayanthipura 048570</td>
                            <td>26277.00</td>
                            <td>M.L.S.de Costha</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>2015/02/02</td>
                            <td>Awareness Program Jayanthipura</td>
                            <td>E272753 - E27276</td>
                            <td>A070587</td>
                            <td>6270.00</td>
                            <td>2014/06/06</td>
                            <td>BOC Jayanthipura 048570</td>
                            <td>26277.00</td>
                            <td>M.L.S.de Costha</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>2015/02/02</td>
                            <td>Awareness Program Jayanthipura</td>
                            <td>E272753 - E27276</td>
                            <td>A070587</td>
                            <td>6270.00</td>
                            <td>2014/06/06</td>
                            <td>BOC Jayanthipura 048570</td>
                            <td>26277.00</td>
                            <td>M.L.S.de Costha</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>2015/02/02</td>
                            <td>Awareness Program Jayanthipura</td>
                            <td>E272753 - E27276</td>
                            <td>A070587</td>
                            <td>6270.00</td>
                            <td>2014/06/06</td>
                            <td>BOC Jayanthipura 048570</td>
                            <td>26277.00</td>
                            <td>M.L.S.de Costha</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>2015/02/02</td>
                            <td>Awareness Program Jayanthipura</td>
                            <td>E272753 - E27276</td>
                            <td>A070587</td>
                            <td>6270.00</td>
                            <td>2014/06/06</td>
                            <td>BOC Jayanthipura 048570</td>
                            <td>26277.00</td>
                            <td>M.L.S.de Costha</td>
                            <td>9</td>
                        </tr>
                        <tr >
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="active">26277.00</td>
                            <td></td>
                            <td class="active">9</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>