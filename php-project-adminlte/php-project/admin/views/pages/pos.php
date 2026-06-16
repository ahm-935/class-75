 <?php
    require_once 'models/product.class.php';

    $rows = Product::readAll();
    // echo '<pre>';
    // print_r($rows);
    // echo '</pre>';
    if(isset($_POST['checkout'])) {
        $cart = json_decode($_POST['cart'],);
    }

    ?>

 <style>
     .app-sidebar,
     .app-header,
     .app-footer {
         display: none;
     }

     .appar-wrapper {
         margin-left: 0px !important;
     }
 </style>
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>POS</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="products" class="btn btn-sm btn-primary">Back to Products</a></li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-8">
                     <div class="row">
                         <?php foreach ($rows as $item) { 
                         if($item['is_inactive'] == 0){
                             continue;
                         }
                         ?>
                             <div class="col-lg-3 col-sm-6">
                                 <div class="card" style="cursor: pointer;" onclick="addToCart(<?= $item['id'] ;?>,
                                     '<?= $item['name'] ;?>', <?= $item['price'] ;?>)">
                                     <img src="<?=  $item['image'] ?>" width="50px" class="card-img">
                                     <div class="card-body text-center">
                                         <h6><?= $item['name'] ;?></h6>
                                         <h5>BDT<?= $item['price'] ;?></h5>
                                     </div>
                                 </div>
                             </div>
                         <?php } ?>
                     </div>
                     <!-- /.card -->
                 </div>
                 <div class="col-4">
                    <table class="table table-striped">
                        <tr>
                            <th>Items</th>
                            <th>QTY</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                        <tbody id="cartTbody">
                              <tr>
                            <td>Shirt</td>
                            <td>5</td>
                            <td>120</td>
                            <td><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                        </tbody>
                        <tr>
                            <td colspan="3">Total</td>
                            <td></td>
                        </tr>
                    </table>
                    <form action="" method="POST" class="text-right">
                        <input type="hidden" name="checkout" value="cartInput">
                        <button type="submit" class="btn btn-success">Checkout</button>
                    </form>

                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
 </div>
 <script src="helpers/cart-helper.js"> </script>
 <script>
    var cart = new CartHelper("cart");
    // console.log(cart);
    function printCart(){
        console.log("My Item");
        console.log(cart.getCart());
        var items = cart.getCart();
        document.querySelector("#cartInput").innerHTML = "";
        var html = "";
        var total = 0;
        items.forEach(item => {
            html += `<tr>
            <td>${item.name}</td>
            <td>${item.quantity}</td>
            <td>${item.quantity * item.price}</td>
            <td><a href="javascript:;" onclick="removeFromCart(${item.id})"><i class="fa fa-trash text-danger"></i></a></td>
        </tr>`;
            total += item.quantity * item.price;
        });
        document.querySelector("#cartTbody").innerHTML = html;
    }
    
    
    printCart();
    function removeFromCart(id) {
        cart.removeItem(id);
        printCart();
    }
    function addToCart(id, name, price) {
        cart.addItem(id, name, price);
        printCart();
    }
    function updateInput(){

    }
    </script>