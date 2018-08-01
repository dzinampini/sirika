<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Quotations</a>
        </li>
        <li class="breadcrumb-item active">View Quotations</li>
      </ol>

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

      <?php foreach($receipts as $receipt):
      foreach($invoices as $invoice):
      // $inv_or_quote = ucfirst($this->uri->segment(3));
      $biller_img = $this->user_model->get_biller_image($invoice->biller);
      $biller_name = $this->user_model->get_biller_name($invoice->biller);
      $biller_address = $this->user_model->get_biller_address($invoice->biller);
      $biller_city = $this->user_model->get_biller_city($invoice->biller);
      $biller_country = $this->user_model->get_biller_country($invoice->biller);
      $biller_phone = $this->user_model->get_biller_phone($invoice->biller);
      $biller_email = $this->user_model->get_biller_email($invoice->biller);
      $biller_website = $this->user_model->get_biller_website($invoice->biller);
      $customer_name = $this->user_model->get_biller_name($invoice->customer);
      $customer_address = $this->user_model->get_biller_address($invoice->customer);
      $customer_city = $this->user_model->get_biller_city($invoice->customer);
      $customer_country = $this->user_model->get_biller_country($invoice->customer);
      $customer_phone = $this->user_model->get_biller_phone($invoice->customer);
      $customer_email = $this->user_model->get_biller_email($invoice->customer);
      $customer_website = $this->user_model->get_biller_website($invoice->customer);
      $paid = $this->user_model->get_paid_amount($invoice->id); 
      $balance = $invoice->amount - $paid;  
      $details = $this->user_model->get_biller_receipt($invoice->biller);
      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>
                    <img src="<?php echo base_url(); ?>img/logos/<?php echo $biller_img; ?>" width="50%" height="auto">
                  </td>
                  <td>
                    Receipt
                  </td>
                </tr>
              </table>
            </div>

            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>
                    <h4>Biller: <?php echo $biller_name; ?></h4>
                    <i class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;<?php echo $biller_address.', '.$biller_city.', '.$biller_country; ?></i>
                    <br>
                    <i class="fa fa-mobile">&nbsp;&nbsp;&nbsp;<?php echo $biller_phone; ?></i>
                    <br>
                    <i class="fa fa-envelope">&nbsp;<?php echo $biller_email; ?></i>
                    <br>
                    <i class="fa fa-chain">&nbsp;&nbsp;<?php echo $biller_website; ?></i>
                    <br><br>
                    <h4>Customer: <?php echo $customer_name; ?></h4>
                    <i class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;<?php echo $customer_address.', '.$customer_city.', '.$customer_country; ?></i>
                    <br>
                    <i class="fa fa-mobile">&nbsp;&nbsp;&nbsp;<?php echo $customer_phone; ?></i>
                    <br>
                    <i class="fa fa-envelope">&nbsp;<?php echo $customer_email; ?></i>
                    <br>
                    <i class="fa fa-chain">&nbsp;&nbsp;<?php echo $customer_website; ?></i>
                    <br><br>
                  </td>
                  <td>
                    <h4>Receipt Details</h4>
                    Receipt No: <?php echo $receipt->id; ?>
                    <br>
                    For Invoice: <?php echo $invoice->id; ?>
                    <br>
                    Receipt Date: <?php echo $receipt->date_time; ?>
                    <br>
                    Invoice Amount: $<?php echo $invoice->amount; ?>
                    <br>
                    Total Paid to Date: $<?php echo $paid; ?>
                    <br>
                    Balance: $<?php echo $balance; ?>
                    <br>
                    Payment Method: <?php echo ucfirst($receipt->type); ?>
                  </td>
                </tr>
              </table>
            </div>

            

            <h5>Notes &amp; Details</h5>
            <hr>
            <p><?php echo $receipt->notes; ?></p>
            <br>
            <p><?php echo $details; ?></p>

            
              
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <?php endforeach; ?>



      
      <div style="height: 100px;"></div>
    </div>

<?php include('footer.php'); ?>