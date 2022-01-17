<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="assets/css/boots.css">
    <style>
        body{
            background-color:#1ecbe1;
        }
    </style>
</head>
<body>
    <div class="container-fluid ">
        
        <div class="container mt-3">
            <h2> Add Products</h2>
            <form  method="POST"  action=" " enctype="multipart/form-data">
              
                <div class="form-group mt-5">
                    <label for="">Categories</label>

                    <select class="form-control" name="cat_id">
                         <option>Select categories</option>
                          <option value=""> </option>
                           <option value=""> </option>
                           <option value=""></option>
                           <option value=""> </option>
                           <option value="">  </option>
                            <option value="">  </option>
                    </select>
              </div>
          
              <div class="form-group mt-5">
                <label for="">Subcategory</label>
                <select class="form-control" name="sub_id">
                    <option>Select subcategories</option>
                     <option value=""> </option>
                      <option value=""> </option>
                      <option value=""></option>
                      <option value=""> </option>
                      <option value="">  </option>
                       <option value="">  </option>
               </select>
                </div>

                <div class="form-group mt-5">
                    <label for="">Product name</label>
                    <input type="text" name="product_name" class="form-control"  placeholder="Enter Product name" >
                  </div>

                  <div class="form-group mt-5">
                    <label for="">Vendor Id</label>
                    <input type="text" name="vendor_id" class="form-control"  placeholder="Enter vender id" >
                  </div>

                  
                  <div class="form-group mt-5">
                    <label for="">MRP</label>
                    <input type="text" name="mrp" class="form-control"  placeholder="Original Price" >
                  </div>

                  <div class="form-group mt-5">
                    <label for="">Selling Price</label>
                    <input type="text" name="selling_price" class="form-control"  placeholder="Offer Price" >
                  </div>

                  <div class="form-group mt-5">
                    <label for="">Units</label>
                    <input type="text" name="units" class="form-control"  placeholder="Enter Units" >
                  </div>

                  <div class="form-group mt-5">
                    <label for="">Qty</label>
                    <input type="text" name="qty" class="form-control"  placeholder="Enter Quantity" >
                  </div>

                  <div class="form-group mt-5">
                    <label for="">Stock</label>
                    <input type="text" name="stock" class="form-control"  placeholder="Total stock" >
                  </div>

                  
              <div class="form-group mt-5">
                <label for="">Photo</label>
                <input type="file" class="form-control " name="image" >
              </div>
              <input type="submit" name="submit" class="btn btn-primary mt-5">
            </form>
          </div>

    
      </div>
</body>
</html>