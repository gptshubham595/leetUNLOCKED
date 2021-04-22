<?php
session_start();
if (empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == '') {
  header("Location: ../index.php");
  die();
}
include('Parsedown.php');
$company = $_GET['company'];
$contents = file_get_contents($company);
$Parsedown = new Parsedown();
$md = $Parsedown->text($contents);
//echo ("<script>console.log(" . $md . ");</script>");
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <style>
        [type="checkbox"]:not(:checked),
        [type="checkbox"]:checked {
            position: absolute;
            left: 0;
            opacity: 0.01;
        }

        [type="checkbox"]:not(:checked)+label,
        [type="checkbox"]:checked+label {
            position: relative;
            padding-left: 2.3em;
            font-size: 1.05em;
            line-height: 1.7;
            cursor: pointer;
        }

        td {
            padding: 5px;
            text-align: center;
        }

        /* checkbox aspect */
        [type="checkbox"]:not(:checked)+label:before,
        [type="checkbox"]:checked+label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 1.53em;
            height: 1.4em;
            border: 1px solid #aaa;
            background: #FFF;
            border-radius: .2em;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, .1), 0 0 0 rgba(203, 34, 237, .2);
            -webkit-transition: all .275s;
            transition: all .275s;
        }

        /* checked mark aspect */
        [type="checkbox"]:not(:checked)+label:after,
        [type="checkbox"]:checked+label:after {
            content: '✔';
            position: absolute;
            top: .525em;
            left: .12em;
            font-size: 1.375em;
            color: #619918;
            line-height: 0;
            -webkit-transition: all .2s;
            transition: all .2s;
        }

        /* checked mark aspect changes */
        [type="checkbox"]:not(:checked)+label:after {
            opacity: 0;
            -webkit-transform: scale(0) rotate(45deg);
            transform: scale(0) rotate(45deg);
        }

        /* Accessibility */
        [type="checkbox"]:checked:focus+label:before,
        [type="checkbox"]:not(:checked):focus+label:before {
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, .1), 0 0 0 6px rgba(97, 153, 24, .2);
        }
    </style>
</head>

<body>
    <div class="container">
    <br>
    <div class="float-right pull-right" style="margin:10px 10px;">
      <form action="/leetcode/logout.php"><input type="submit" class="btn btn-danger" name="submit" value="Logout" /></form>
    </div>
    <div class="float-left pull-left" style="margin:10px 10px;">
      <button onclick="goBack()">Go Back</button>
    </div>
    <br/>
    <br/>
        <pre>
        <code id="company_table">
        </code>
        <pre>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table-locale-all.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
        var company = <?php echo json_encode($md); ?>;

        document.getElementById("company_table").innerHTML = company;
    </script>
    <script>
        $(document).ready(function() {
            $('#questions').DataTable({
                "pagingType": "full_numbers"
            });
        });
            function goBack() {
        window.history.back();
        }
    </script>
    <script>
        $('input[type="checkbox"]').click(function() {
            if ($(this).prop("checked") == true) {
                console.log("Checkbox is checked.");
                console.log($(this));
            } else if ($(this).prop("checked") == false) {
                console.log("Checkbox is unchecked.");
            }
        });
    </script>
</body>

</html>