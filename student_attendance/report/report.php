<?php 

session_start();
?>


<html><head>
        <title>VCET Attendance Manager</title>
        <!-- <link rel="stylesheet" href="index1.css" type="text/class"> -->

     <link rel="stylesheet" href="css/menu_style.css" type="text/css">
       <script language="javascript" type="text/javascript">
            function confirmation() {
                var answer = confirm("Are you sure you want to Logout ?")
                if (answer){
                    window.location = "logout.php";
                }
            }
        </script>
        
  
</head>
        
        <title>Student Attendance</title>
    
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all"> -->
    <link href="css/table1.css" rel="stylesheet" type="text/css">


                <center><h3>Attendance Result</h3></center>
            <table style="margin: auto;">
                <tbody><tr>
                    <td colspan="4">Student ID : <?php echo $_SESSION["username"]; ?></td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <th>Total Lectures</th>
                    <th>Lectures Present</th>
                    <th>(%)</th>
                </tr>
                                    <tr>
                        <td> Centre for soft skill &amp; personality development  </td>
                        <td align="center"> 4 </td>
                        <td align="center"> 4 </td>
                        <td align="center">
                            100                    </td>
                    </tr>

                                    <tr>
                        <td> Microcontroller and Embedded Programming </td>
                        <td align="center"> 52 </td>
                        <td align="center"> 46 </td>
                        <td align="center">
                            88.46                    </td>
                    </tr>

                                    <tr>
                        <td> Internet Programming </td>
                        <td align="center"> 55 </td>
                        <td align="center"> 50 </td>
                        <td align="center">
                            90.91                    </td>
                    </tr>

                                    <tr>
                        <td> Advanced Data Management Technology </td>
                        <td align="center"> 52 </td>
                        <td align="center"> 47 </td>
                        <td align="center">
                            90.38                    </td>
                    </tr>

                                    <tr>
                        <td> Cryptography &amp; Network Security </td>
                        <td align="center"> 54 </td>
                        <td align="center"> 46 </td>
                        <td align="center">
                            85.19                    </td>
                    </tr>

                                    <tr>
                        <td> Advanced Data Structures &amp; Analysis of Algorithms </td>
                        <td align="center"> 52 </td>
                        <td align="center"> 47 </td>
                        <td align="center">
                            90.38                    </td>
                    </tr>

                                    <tr>
                        <td> Business Communication and Ethics </td>
                        <td align="center"> 26 </td>
                        <td align="center"> 22 </td>
                        <td align="center">
                            84.62                    </td>
                    </tr>

                                    <tr>
                    <td style="text-align: right;"><b>Total</b></td>
                    <td style="text-align: center;"><b>295</b></td>
                    <td style="text-align: center;"><b>262</b></td>
                </tr>
            </tbody></table>
        <br>
        <center> <h2>Overall Attendance: <u>88.81</u> </h2> </center>            <br><br>       
            <table style="margin: auto;">                
                <tbody><tr>
                    <th>Subject</th>
                    <th>Total Practicals Conducted</th>
                    <th>Practicals Attended</th>
                    <th>(%)</th>
                </tr>
                                    <tr>
                        <td> Business Communication and Ethics </td>
                        <td style="text-align: center;"> 10 </td>
                        <td style="text-align: center;"> 8 </td>
                        <td style="text-align: center;">
                            80                        </td>
                    </tr>
                                    <tr>
                        <td> Internet Programming Lab </td>
                        <td style="text-align: center;"> 9 </td>
                        <td style="text-align: center;"> 8 </td>
                        <td style="text-align: center;">
                            88.89                        </td>
                    </tr>
                                    <tr>
                        <td> IOT (Mini Project) Lab </td>
                        <td style="text-align: center;"> 12 </td>
                        <td style="text-align: center;"> 12 </td>
                        <td style="text-align: center;">
                            100                        </td>
                    </tr>
                                    <tr>
                        <td> OLAP Lab </td>
                        <td style="text-align: center;"> 11 </td>
                        <td style="text-align: center;"> 11 </td>
                        <td style="text-align: center;">
                            100                        </td>
                    </tr>
                                    <tr>
                        <td> Security Lab </td>
                        <td style="text-align: center;"> 10 </td>
                        <td style="text-align: center;"> 10 </td>
                        <td style="text-align: center;">
                            100                        </td>
                    </tr>
                            </tbody></table>
            <label style="text-align: center;"><h2>Overall Practical Attendance: 94.23%</h2></label>
</body></html>