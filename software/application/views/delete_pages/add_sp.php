<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Services &amp; Products</a>
        </li>
        <li class="breadcrumb-item active">Add Service/Product</li>
      </ol>
      <h1>Add Service &amp; Product</h1>
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
        <form action="sp_add" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="sp" required  placeholder="Service/Product">
          </div>        

          <button class="btn btn-primary btn-block">Add Product/Service</button>
        </form>
      </div>
    </div>




      
      <div style="height: 100px;"></div>
    </div>

<?php include('footer.php'); ?>