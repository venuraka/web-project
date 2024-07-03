<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css" />

    <title>Admin Panel</title>
  </head>
</head>

<body>
  <div class=" container-fluid">
    <div class=" col-6 d-flex justify-content-center align-content-between offset-3 mt-5">
      <div class="row g-5">
        <div class=" col-12 mt-5">
          <h1 class=" text-center text-danger">Product Add From</h1>
        </div>
        <div class=" col-6 mt-5">
          <label class=" form-label">Product Brand</label>
          <input type="text" class=" form-control" id="pb"/>
        </div>
        <div class=" col-6 mt-5">
          <label class=" form-label">Product Name</label>
          <input type="text" class=" form-control" id="pn"/>
        </div>
        <div class=" col-6 mt-5">
          <label class=" form-label">Product Price</label>
          <input type="text" class=" form-control" id="pp"/>
        </div>
        <div class=" col-6 mt-5">
          <label class=" form-label">Product Img</label>
          <input type="file" class=" form-control" id="pi"/>
        </div>
        <div class=" col-12">
          <button class="btn btn-primary col-12 d-grid" onclick="insertproduct();">Insert</button>
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>