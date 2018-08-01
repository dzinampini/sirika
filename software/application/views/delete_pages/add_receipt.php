<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Receipts</a>
        </li>
        <li class="breadcrumb-item active">Add Receipt</li>
      </ol>
      <h1>Add Receipt</h1>
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
        <form action="receipt_add" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <select name="invoice" class="form-control" required>
              <option value="">Select Invoice</option>
                <?php foreach ($invoices as $invoice): ?>
                <option value="<?php echo $invoice->id; ?>">Invoice <?php echo $invoice->id; ?> - $<?php echo $invoice->amount; ?> - <?php echo $this->user_model->get_customer_name($invoice->customer); ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label>Amount</label>
            <input class="form-control" id="exampleInputName" type="number" step="0.01" min="0" aria-describedby="nameHelp" name="amount" required  value="<?php echo $invoice->amount; ?>">
          </div>

          <div class="form-group">
            <select name="type" class="form-control" required>
              <option value="">Select Payment Method</option>                
                <option value="cash">Cash</option>
                <option value="mastercard">MasterCard/VISA Card</option>
                <option value="mwallet">m-wallet (ecocash, telecash, onemoney)</option>
                <option value="rtgs">RTGS</option>
                <option value="zipit">ZIPIT</option>
            </select>
          </div>

          <div class="form-group">
            <label>Extra Notes</label>
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="notes">
          </div>

          <br><br><br>

          
          
          

          <button class="btn btn-primary btn-block">Add Receipt</button>
        </form>
      </div>
    </div>
      
      
      <div style="height: 100px;"></div>
    </div>

<?php include('footer.php'); ?>