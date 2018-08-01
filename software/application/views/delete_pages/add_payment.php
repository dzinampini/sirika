<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Payments</a>
        </li>
        <li class="breadcrumb-item active">Add Payment</li>
      </ol>
      <h1>Add Payment</h1>
      <hr>
      

      <div class="card card-register mx-auto mt-5">
      <p>
        <?php $success_msg= $this->session->flashdata('success_msg');
        $error_msg= $this->session->flashdata('error_msg');
        if($success_msg){ ?>
          <div class="alert alert-success">
            <?php echo $success_msg; ?>
          </div>
        <?php }

        if($error_msg){ ?>
          <div class="alert alert-danger">
            <?php echo $error_msg; ?>
          </div>
        <?php } ?>
      </p>

      <div class="card-body">
        <form action="payment_add" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <select name="biller" class="form-control" required>
              <option value="">Select Biller</option>
                <?php foreach ($billers as $biller): ?>
                <option value="<?php echo $biller->id; ?>"><?php echo $biller->company; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <select name="supplier" class="form-control" required>
              <option value="">Select Supplier</option>
                <?php foreach ($suppliers as $supplier): ?>
                <option value="<?php echo $supplier->id; ?>"><?php echo $supplier->company; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="product" required  placeholder="Product">
          </div>

          <div class="form-group">
            <input class="form-control" id="exampleInputName" type="number" aria-describedby="nameHelp" name="amount" min="0" step="0.01" required  placeholder="Amount">
          </div>

          <div class="form-group">
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="receipt" required  placeholder="Receipt Location/Link">
          </div>
          
          <button class="btn btn-primary btn-block">Add Payment</button>
        </form>
      </div>
    </div>




      
      <div style="height: 100px;"></div>
    </div>

<?php include('footer.php'); ?>