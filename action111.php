<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "mystore";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}


if(isset($_post["get_product"])){
	$product_query="select * from products ";
    $run_query = mysqli_query($conn,$product_query);
		if(mysqli_num_rows($run_query)>0){
			while ($row=mysqli_fetch_array($run_query)){
				
				$pro_id =$row ["product_id"];
				$pro_cat=$row ["product_cat"];
				$pro_brand=$row ["product_brand"];
				$pro_title=$row ["product_title"];
				$pro_price=$row ["product_pcrice"];
				$pro_desc=$row ["product_desc"];
				$pro_image=$row ["product_image"];
				echo "
				<div class='col-md-3 product-men'>
                        <div class='men-pro-item simpleCart_shelfItem'>
                            <div class='men-thumb-item'>
                                <img src='images/$pro_image' alt='' class='pro-image-front'>
                                <img src='images/$pro_image' alt='' class='pro-image-back'>
                                <div class='men-cart-pro'>
                                    <div class='inner-men-cart-pro'>
                                        <a href='single.html' class='link-product-add-cart'>Quick View</a>
                                    </div>
                                </div>
                                <span class='product-new-top'>New</span>

                            </div>
                            <div class='item-info-product '>
                                <h4><a href='single.html'>Formal Blue Shirt</a></h4>
                                <div class='info-product-price'>
                                    <span class='item_price'>$.$pro_price</span>
                                    <del>$pro_desc</del>
                                </div>
                                <div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2'>
                                    <form action='#' method='post'>
                                        <fieldset>
                                            <input type='hidden' name='cmd' value='_cart' />
                                            <input type='hidden' name='add' value='1' />
                                            <input type='hidden' name='business' value=' ' />
                                            <input type='hidden' name='item_name' value='$pro_title' />
                                            <input type='hidden' name='amount' value='30.99' />
                                            <input type='hidden' name='discount_amount' value='1.00' />
                                            <input type='hidden' name='currency_code' value='USD' />
                                            <input type='hidden' name='return' value=' ' />
                                            <input type='hidden' name='cancel_return' value=' ' />
                                            <input type='submit' name='submit' value='Add to cart' class='button' />
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
				
				";
			}
		
	}
	
	}
?>