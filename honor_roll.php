<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CLIPCO - Honor Roll</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">

            .donation-level-title {
                font-size: 2em;
            }

            .grade-header {
                font-size: 1.5em;
            }

            .family-name {
                font-size: 1em;
            }

            .grade-header, .family-name {
                color: black;
            }

            @media screen and (max-width:768px){

                .jumbotron{
                    height: 300px;
                }

            }

        </style>
    </head>
    <body id="top" onload="loadImage(0);">

        <div id="navbar-placeholder"></div>
        <script>
            $(function () {
                $("#navbar-placeholder").load("subpage_navbar.html");
            });
        </script>

        <div class="bg"></div>

        <div class="jumbotron text-center">
            <?php
            /*script wide variables*/
            $empty_message = "Direct Give Competition is still on going. <a href=\"donations.html\">Donate</a> now to see your name here!";
            date_default_timezone_set("America/Los_Angeles");
            $date = getdate();
            $year = "";
            if($date["mon"] < 7){
                $year = ($date['year'] - 1) . "-" . $date['year'];
            } else {
                $year = $date['year'] . "-" . ($date['year'] + 1);
            }
            ?>
            <h1>Honor Roll&nbsp;<?php echo $year?></h1>
            <p>Thank You to All the Families Who Donated</p>
        </div>

        <div class="container-fluid bg-grey">
            <h4>The CLIPCO Board would like to thank the following donors for their support in the continuing success of CLIP.</h4>
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <h2>K-6 Families</h2>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="donation-level-title">Platinum</span><span class="donation-level-range">&nbsp;(Donation of $950 or more)</span></a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php
                                        $empty = true;
                                        $grades = array("Kindergarten", "1st Grade", "2nd Grade", "3rd Grade", "4th Grade", "5th Grade", "6th Grade");
                                        $length = count($grades);
                                        for ($i=0; $i < $length; $i++) { 
                                            $filename = dirname(__FILE__) . "/documents/honor roll names/" . strtolower($grades[$i]) . "_platinum_names.txt";
                                            $file = fopen($filename, "r");
                                            if(filesize($filename) > 0){
                                                echo "<span class=\"grade-header\">" . $grades[$i] . "</span><br>\n";
                                                $empty = false;
                                                while(! feof($file)){
                                                    $txt = fgets($file);
                                                    if(strlen($txt) > 2){
                                                        echo "<span class=\"family-name\">" . chop($txt) . "</span><br>\n";
                                                    }
                                                }
                                                fclose($file);
                                            }
                                        }
                                        if($empty){
                                            echo $empty_message;
                                        } 
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="donation-level-title">Gold</span><span class="donation-level-range">&nbsp;(Donation of $651 - $949)</span></a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php
                                        $empty = true;
                                        $grades = array("Kindergarten", "1st Grade", "2nd Grade", "3rd Grade", "4th Grade", "5th Grade", "6th Grade");
                                        $length = count($grades);
                                        for ($i=0; $i < $length; $i++) { 
                                            $filename = dirname(__FILE__) . "/documents/honor roll names/" . strtolower($grades[$i]) . "_gold_names.txt";
                                            $file = fopen($filename, "r");
                                            if(filesize($filename) > 0){
                                                echo "<span class=\"grade-header\">" . $grades[$i] . "</span><br>\n";
                                                $empty = false;
                                                while(! feof($file)){
                                                    $txt = fgets($file);
                                                    if(strlen($txt) > 2){
                                                        echo "<span class=\"family-name\">" . chop($txt) . "</span><br>\n";
                                                    }
                                                }
                                                fclose($file);
                                            }
                                        }
                                        if($empty){
                                            echo $empty_message;
                                        } 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="donation-level-title">Silver</span><span class="donation-level-range">&nbsp;(Donation of $426 - $650)</span></a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php
                                        $empty = true;
                                        $grades = array("Kindergarten", "1st Grade", "2nd Grade", "3rd Grade", "4th Grade", "5th Grade", "6th Grade");
                                        $length = count($grades);
                                        for ($i=0; $i < $length; $i++) { 
                                            $filename = dirname(__FILE__) . "/documents/honor roll names/" . strtolower($grades[$i]) . "_silver_names.txt";
                                            $file = fopen($filename, "r");
                                            if(filesize($filename) > 0){
                                                echo "<span class=\"grade-header\">" . $grades[$i] . "</span><br>\n";
                                                $empty = false;
                                                while(! feof($file)){
                                                    $txt = fgets($file);
                                                    if(strlen($txt) > 2){
                                                        echo "<span class=\"family-name\">" . chop($txt) . "</span><br>\n";
                                                    }
                                                }
                                                fclose($file);
                                            }
                                        }
                                        if($empty){
                                            echo $empty_message;
                                        } 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="donation-level-title">Bronze</span><span class="donation-level-range">&nbsp;(Donation of $425)</span></a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php
                                        $empty = true;
                                        $grades = array("Kindergarten", "1st Grade", "2nd Grade", "3rd Grade", "4th Grade", "5th Grade", "6th Grade");
                                        $length = count($grades);
                                        for ($i=0; $i < $length; $i++) { 
                                            $filename = dirname(__FILE__) . "/documents/honor roll names/" . strtolower($grades[$i]) . "_bronze_names.txt";
                                            $file = fopen($filename, "r");
                                            if(filesize($filename) > 0){
                                                echo "<span class=\"grade-header\">" . $grades[$i] . "</span><br>\n";
                                                $empty = false;
                                                while(! feof($file)){
                                                    $txt = fgets($file);
                                                    if(strlen($txt) > 2){
                                                        echo "<span class=\"family-name\">" . chop($txt) . "</span><br>\n";
                                                    }
                                                }
                                                fclose($file);
                                            }
                                        }
                                        if($empty){
                                            echo $empty_message;
                                        } 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2>7-8 Families</h2>
                    <div class="panel-group" id="accordion2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                                        <span class="donation-level-title">Platinum</span><span class="donation-level-range">&nbsp;(Donation of $475 or more)</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php
                                        $empty = true;
                                        $grades = array("7th grade", "8th grade");
                                        $length = count($grades);
                                        for ($i=0; $i < $length; $i++) { 
                                            $filename = dirname(__FILE__) . "/documents/honor roll names/" . strtolower($grades[$i]) . "_platinum_names.txt";
                                            $file = fopen($filename, "r");
                                            if(filesize($filename) > 0){
                                                echo "<span class=\"grade-header\">" . $grades[$i] . "</span><br>\n";
                                                $empty = false;
                                                while(! feof($file)){
                                                    $txt = fgets($file);
                                                    if(strlen($txt) > 2){
                                                        echo "<span class=\"family-name\">" . chop($txt) . "</span><br>\n";
                                                    }
                                                }
                                                fclose($file);
                                            }
                                        }
                                        if($empty){
                                            echo $empty_message;
                                        } 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6"><span class="donation-level-title">Gold</span><span class="donation-level-range">&nbsp;(Donation of $350 - $474)</span></a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php
                                        $empty = true;
                                        $grades = array("7th grade", "8th grade");
                                        $length = count($grades);
                                        for ($i=0; $i < $length; $i++) { 
                                            $filename = dirname(__FILE__) . "/documents/honor roll names/" . strtolower($grades[$i]) . "_gold_names.txt";
                                            $file = fopen($filename, "r");
                                            if(filesize($filename) > 0){
                                                echo "<span class=\"grade-header\">" . $grades[$i] . "</span><br>\n";
                                                $empty = false;
                                                while(! feof($file)){
                                                    $txt = fgets($file);
                                                    if(strlen($txt) > 2){
                                                        echo "<span class=\"family-name\">" . chop($txt) . "</span><br>\n";
                                                    }
                                                }
                                                fclose($file);
                                            }
                                        }
                                        if($empty){
                                            echo $empty_message;
                                        } 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse7"><span class="donation-level-title">Silver</span><span class="donation-level-range">&nbsp;(Donation of $201 - $325)</span></a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php
                                        $empty = true;
                                        $grades = array("7th grade", "8th grade");
                                        $length = count($grades);
                                        for ($i=0; $i < $length; $i++) { 
                                            $filename = dirname(__FILE__) . "/documents/honor roll names/" . strtolower($grades[$i]) . "_silver_names.txt";
                                            $file = fopen($filename, "r");
                                            if(filesize($filename) > 0){
                                                echo "<span class=\"grade-header\">" . $grades[$i] . "</span><br>\n";
                                                $empty = false;
                                                while(! feof($file)){
                                                    $txt = fgets($file);
                                                    if(strlen($txt) > 2){
                                                        echo "<span class=\"family-name\">" . chop($txt) . "</span><br>\n";
                                                    }
                                                }
                                                fclose($file);
                                            }
                                        }
                                        if($empty){
                                            echo $empty_message;
                                        } 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse8"><span class="donation-level-title">Bronze</span><span class="donation-level-range">&nbsp;(Donation of $200)</span></a>
                                </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php
                                        $empty = true;
                                        $grades = array("7th grade", "8th grade");
                                        $length = count($grades);
                                        for ($i=0; $i < $length; $i++) { 
                                            $filename = dirname(__FILE__) . "/documents/honor roll names/" . strtolower($grades[$i]) . "_bronze_names.txt";
                                            $file = fopen($filename, "r");
                                            if(filesize($filename) > 0){
                                                echo "<span class=\"grade-header\">" . $grades[$i] . "</span><br>\n";
                                                $empty = false;
                                                while(! feof($file)){
                                                    $txt = fgets($file);
                                                    if(strlen($txt) > 2){
                                                        echo "<span class=\"family-name\">" . chop($txt) . "</span><br>\n";
                                                    }
                                                }
                                                fclose($file);
                                            }
                                        }
                                        if($empty){
                                            echo $empty_message;
                                        } 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12" id="stock-image">
                    <!-- scripty mcscriptface will fill this in-->
                    <script src="imageLoading.js" id="image-laoding-script"></script>
                </div>
            </div>
            <div class="row">
                <?php
                $date = getdate();
                $year_link = "";
                if($date["mon"] < 7){
                    $year_link = $date['year'] - 2 . "-" . $date['year'] - 1;
                } else {
                    $year_link = $date['year'] - 1 . "-" . $date['year'];
                }
                ?>
                <p>View the previous year's honor roll <a href="honor_roll_<?php echo $year_link; ?>.html">here.</a></p>
            </div>
        </div>
        <footer class="container-fluid text-center">
            <a href="#top" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>* Donors have the option to remain anonymous. If you previously indicated your choice to be an anonymous donor
                but would like to have your name published, or if you wish to become anonymous, please e-mail us at
                clipcotreasurer@gmail.com.</p>
        </footer>
        <script src="js.js"></script>
    </body>
</html>