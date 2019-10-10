<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php

$dbname = 'currencycops';
$dbuser = 'ms7i273jabfw';
$dbpass = 'G3t2work!';
$dbhost = 'localhost';

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

$test_query = "SELECT * FROM shoes";
$result = mysqli_query($link, $test_query);

#$tblCnt = 0;
#while($rows = mysqli_fetch_array($result)) {
 # $tblCnt++;
 # $image = $rows['img'];
  #echo "<img src = '$image' >";
  #echo "<br>";
#}
 while ($rows = mysqli_fetch_array($result)){
                                          $img = $rows['img'];
                                          $name = $rows['name'];
                                          $price = $rows['price'];
                                            echo "<div class=\"col-lg-4 col-md-7\">
                                                    <div class=\"single-product\">
                                                        <img class=\"img-fluid\" src=\"$img\" alt=\"\">
                                                        <div class=\"product-details\">
                                                            <h6>$name</h6>
                                                            <div class=\"price\">
                                                                <h6>\$$price</h6>
                                                            </div>
                                                            <div class=\"prd-bottom\">
                                                                <a href=\"\" class=\"social-info\">
                                                                    <span class=\"ti-bag\"></span>
                                                                    <p class=\"hover-text\">add to bag</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>";
                                    }
 
?>
