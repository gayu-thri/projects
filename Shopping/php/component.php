<?php
function component($product_name,$product_price,$product_prev_price,$product_img,$product_description,$product_id){
    $element = 
"
        <div class=\"col-md-3 col-sm-3 my-3 my-md-0\">
            <form action = \"products.php\" method=\"POST\">
                <div class=\"card shadow\">
                    <div>
                        <img src=\"$product_img\" alt=\"image1\" class=\"img-fluid card-img-top\">
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">$product_name</h5>
                        <h6><mark>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            </mark>
                        </h6>
                        <p class=\"card-text\">
                            $product_description
                        </p>    
                        <h5>
                            <span><i class=\"fas fa-rupee-sign\">$product_price</i></span>
                            <small><s class=\"text-secondary\">₹$product_prev_price</s></small>
                        </h5>

                        <button type=\"submit\" class=\"btn btn-primary my-2\" name=\"add\"><i class=\"fas fa-shopping-cart\"></i> Add to Cart </button>
                        <input type='hidden'name='product_id' value='$product_id'>
                    </div>
                </div>
            </form>
        </div>

";
    echo $element;
}
