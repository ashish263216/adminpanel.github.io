<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="assets/css/boots.css">
    <style>
        body{
            background-color:#1ecbe1;
        }
    </style>
</head>
<body>
    <div class="container-fluid ">
        
        <div class="container mt-5">
            <h2> Add Categories </h2>
            <form  method="POST"  action="" enctype="multipart/form-data">
              
                <div class="form-group mt-5">
                    <label for="">Categories</label>

                    <select class="form-control " name="cat_id">
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
                <label for="">Photo</label>
                <input type="file" class="form-control " name="image">
              </div>
              <input type="submit" name="submit" class="btn btn-primary mt-5">
            </form>
          </div>

    
      </div>
</body>
</html>