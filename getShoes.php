<?php
// Include the database config file 
require_once 'dbConfig.php'; 

$result = $db->query("SELECT * FROM products ORDER BY id DESC");

if($result->num_rows > 0){ 
 while ($rows = $result->fetch_assoc()){
                                          $img = $rows['img'];
                                          $name = $rows['name'];
                                          $price = $rows['price'];
                                          $id = $rows["id"];
                                            echo "<div class=\"col-lg-4 col-md-7\">
                                                    <div class=\"single-product\">
                                                        <img class=\"img-fluid\" src=\"$img\" alt=\"\">
                                                        <div class=\"product-details\">
                                                            <h6>$name</h6>
                                                            <div class=\"price\">
                                                                <h6>\$$price</h6>
                                                            </div>
                                                            <div class=\"prd-bottom\">
                                                                <a href=\"cartAction.php?action=addToCart&id=$id\" class=\"social-info\">
                                                                    <span class=\"ti-bag\"></span>
                                                                    <p class=\"hover-text\">add to bag</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>";
                                    }
                                }else{
                                    echo "<p>Product(s) not found.....<p>";
                                }
?>
