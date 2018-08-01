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

      <?php foreach($invoices as $invoice):
      $inv_or_quote = ucfirst($this->uri->segment(3));
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
      $details = $this->user_model->get_biller_invoice($invoice->biller);
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
                    <?php echo $inv_or_quote; ?>
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
                    <h4><?php echo $inv_or_quote; ?> Details</h4>
                    <?php echo $inv_or_quote; ?> No: <?php echo $invoice->id; ?>
                    <br>
                    <?php echo $inv_or_quote; ?> Date: <?php echo $invoice->date; ?>
                    <br>
                    <?php echo $inv_or_quote; ?> Amount: $<?php echo $invoice->amount; ?>
                    <br>
                    Paid: $<?php echo $paid; ?>
                    <br>
                    Owing: $<?php echo $balance; ?>
                  </td>
                </tr>
              </table>
            </div>

            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th>Product/Service</th>
                  <th>Amount</th>
                </tr>
                <?php foreach($sales as $sale): ?>
                <tr>
                  <td><?php echo $this->user_model->get_product_name($sale->product); ?></td>
                  <td><?php echo $sale->price; ?></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                  <td></td>
                  <td><b><?php echo $invoice->amount; ?></b></td>
                </tr>
              </table>
            </div>

            <h5>Notes</h5>
            <hr>
            <p><?php echo $invoice->notes; ?></p>

            <br><br>

            <h5>Details</h5>
            <hr>
            <p><?php echo $details; ?></p>
              
          </div>
        </div>
      </div>
      <?php endforeach; ?>



      
      <div style="height: 100px;"></div>
    </div>

<?php include('footer.php'); ?>