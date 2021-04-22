<?php
session_start();
if (empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == '') {
  header("Location: /index.php");
  die();
}
if (opendir('csv') === false)
    {echo "it failed!";
        }
if ($handle = opendir('csv')) {
  $a = array();
  while (false !== ($entry = readdir($handle))) {
    if ($entry != "." && $entry != "..") {
      array_push($a, $entry);
    }
  }
    
  closedir($handle);
}

?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="a.validate.01" content="c7e1f68ff3ae2d6e3148e5293a1933d655c1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <meta name="propeller" content="fba13ff48847f414ae81bdb3b518fef0">
  <style>
    body {
      background-color: #ffffff;
    }

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
<div class="float-right pull-right" style="margin-right:20px; margin-top:20vh;margin-left:89vw; position:absolute;">
    <script type="text/javascript">
	atOptions = {
		'key' : '2cc57d618163c606efb9b5c080c7c290',
		'format' : 'iframe',
		'height' : 300,
		'width' : 160,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.creativedisplayformat.com/2cc57d618163c606efb9b5c080c7c290/invoke.js"></scr' + 'ipt>');
</script>
</div>

  <div class="container">
  <br>
    <div class="float-right pull-right" style="margin:10px 10px;">
      <form action="/leetcode/logout.php"><input type="submit" class="btn btn-danger" name="submit" value="Logout" /></form>
    </div>
    <div class="float-left pull-left" style="margin:10px 10px;">
      <button onclick="goBack()">Go Back</button>
    </div>
    <br>
    <table id="leetcode" class="table table-bordered table-striped-center table-responsive display" style="width: 100%">
      <thead>
        <tr>
          <th>SLN</th>
          <th>COMPANY</th>
          <th>DONE</th>
        </tr>
      </thead>
      <tbody id="company_table">
      </tbody>
    </table>

    <div class="float-right pull-right" style="margin:10px 10px;">
    <script type='text/javascript' src='//pl16194254.highperformancecpmnetwork.com/23/5e/06/235e0627bed425690c9d980581fcbff0.js'></script>
    <a class="float-right pull-right" href='https://www.symptoma.es/'>View Counter</a>    
    <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=84146a4fa3f35ef7d012b11f6cd277f17bfcb1c3'></script>
    <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/812159/t/10"></script>
    <script async="async" data-cfasync="false" src="//pl16196381.highperformancecpmnetwork.com/d96f5fb16edee674da207ca4b67ca43e/invoke.js"></script>
<div id="container-d96f5fb16edee674da207ca4b67ca43e"></div>
    </div><br>

  </div>
  </div>
  <script data-ad-client="ca-pub-3796868232423351" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  

  <script>
  
    function TestPage() {
        // if ($('#atContainer-2cc57d618163c606efb9b5c080c7c290').offsetHeight!='300';)
        if (1==2)
            {
                alert("Allow Me 🙏! Please Turn off adblocker!");
            }
        else{
            var company = <?php echo json_encode($a); ?>;
            company.sort();  
            var k = "";
            for (var i = 1; i <= company.length; i++) {
            if (company[i - 1].split(".")[0] == "read_csv") {
                continue;
            }
            k += "<tr>";
            k += "<td style='width:7em'>" + i + "</td>";
            k += "<td style='text-align:left'><a href='/leetcode/csv/read_csv.php?company=" + company[i - 1].split(".")[0]  + "'>" + company[i - 1].split(".")[0] + "</a></td>";
            k += "<td style='width:5em;'><p style='display:none' id='"+company[i - 1].split(".")[0]+"_p'></p><input type='checkbox' id='" + company[i - 1].split(".")[0] + "' /><label  for='" + company[i - 1].split(".")[0] + "'></label></td>";
            k += "</tr>";
            }

            document.getElementById("company_table").innerHTML = k;
            $(document).ready(function() {
            $('#leetcode').DataTable({
                "pagingType": "full_numbers"
            });
            });
            $(document).ready(function() {
                
            $('#example').DataTable({
                columnDefs: [{
                targets: [0],
                orderData: [0, 0]
                }, {
                targets: [1],
                orderData: [1, 0]
                }, {
                targets: [2],
                orderData: [2, 0]
                }]
            });
            });
     $('input[type="checkbox"]').click(function() {
      if ($(this).prop("checked") == true) {
        console.log("Checkbox is checked.");
       document.getElementById(this.id+'_p').value=this.id; 
       $("#"+this.id+"_p").html(this.id);
      } else if ($(this).prop("checked") == false) {
        $("#"+this.id+"_p").html("");
        console.log("Checkbox is unchecked.");
      }
    });
        }}
    $(document).ready(function() {
        // setTimeout(function(){TestPage();}, 3000);
        TestPage();
    });
    function goBack() {
        window.history.back();
        }    
  </script>

 
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


<script>$(document).bind("contextmenu",function(e){return false;});(function(a,b,c){Object.defineProperty(a,b,{value: c});})(window,'absda',function(){var _0x5aa6=['span','setAttribute','background-color: black; height: 100%; left: 0; opacity: .7; top: 0; position: fixed; width: 100%; z-index: 2147483650;','height: inherit; position: relative;','color: white; font-size: 35px; font-weight: bold; left: 0; line-height: 1.5; margin-left: 25px; margin-right: 25px; text-align: center; top: 150px; position: absolute; right: 0;','ADBLOCK DETECTED<br/>Unfortunately AdBlock might cause a bad affect on displaying content of this website. Please, deactivate it.','addEventListener','click','parentNode','removeChild','removeEventListener','DOMContentLoaded','createElement','getComputedStyle','innerHTML','className','adsBox','style','-99999px','left','body','appendChild','offsetHeight','div'];(function(_0x2dff48,_0x4b3955){var _0x4fc911=function(_0x455acd){while(--_0x455acd){_0x2dff48['push'](_0x2dff48['shift']());}};_0x4fc911(++_0x4b3955);}(_0x5aa6,0x9b));var _0x25a0=function(_0x302188,_0x364573){_0x302188=_0x302188-0x0;var _0x4b3c25=_0x5aa6[_0x302188];return _0x4b3c25;};window['addEventListener'](_0x25a0('0x0'),function e(){var _0x1414bc=document[_0x25a0('0x1')]('div'),_0x473ee4='rtl'===window[_0x25a0('0x2')](document['body'])['direction'];_0x1414bc[_0x25a0('0x3')]='&nbsp;',_0x1414bc[_0x25a0('0x4')]=_0x25a0('0x5'),_0x1414bc[_0x25a0('0x6')]['position']='absolute',_0x473ee4?_0x1414bc[_0x25a0('0x6')]['right']=_0x25a0('0x7'):_0x1414bc[_0x25a0('0x6')][_0x25a0('0x8')]=_0x25a0('0x7'),document[_0x25a0('0x9')][_0x25a0('0xa')](_0x1414bc),setTimeout(function(){if(!_0x1414bc[_0x25a0('0xb')]){var _0x473ee4=document[_0x25a0('0x1')](_0x25a0('0xc')),_0x3c0b3b=document[_0x25a0('0x1')](_0x25a0('0xc')),_0x1f5f8c=document[_0x25a0('0x1')](_0x25a0('0xd')),_0x5a9ba0=document['createElement']('p');_0x473ee4[_0x25a0('0xe')]('style',_0x25a0('0xf')),_0x3c0b3b['setAttribute']('style',_0x25a0('0x10')),_0x1f5f8c[_0x25a0('0xe')](_0x25a0('0x6'),'color: white; cursor: pointer; font-size: 0px; font-weight: bold; position: absolute; right: 30px; top: 20px;'),_0x5a9ba0[_0x25a0('0xe')](_0x25a0('0x6'),_0x25a0('0x11')),_0x5a9ba0[_0x25a0('0x3')]=_0x25a0('0x12'),_0x1f5f8c[_0x25a0('0x3')]='&#10006;',_0x3c0b3b['appendChild'](_0x5a9ba0),_0x3c0b3b[_0x25a0('0xa')](_0x1f5f8c),_0x1f5f8c[_0x25a0('0x13')](_0x25a0('0x14'),function _0x3c0b3b(){_0x473ee4[_0x25a0('0x15')][_0x25a0('0x16')](_0x473ee4)}),_0x473ee4[_0x25a0('0xa')](_0x3c0b3b),document[_0x25a0('0x9')][_0x25a0('0xa')](_0x473ee4);}},0xc8),window[_0x25a0('0x17')]('DOMContentLoaded',e);});});</script><script type='text/javascript' onerror='absda()' src='//adriftstressful.com/5a/0a/84/5a0a849384219225c4a6401b3683a527.js'></script>
</body>

</html>