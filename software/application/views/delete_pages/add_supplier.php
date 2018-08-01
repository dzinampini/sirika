<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Suppliers</a>
        </li>
        <li class="breadcrumb-item active">Add Supplier</li>
      </ol>
      <h1>Add Supplier</h1>
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
        <form action="supplier_add" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="company" required  placeholder="Supplier Name">
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="address" required  placeholder="Address Line 1">
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="city" required  placeholder="City">
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="country" required  placeholder="Country">
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="phone" required  placeholder="Phone">
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" placeholder="Email"  required>
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputName" type="url" aria-describedby="nameHelp" name="website" required  placeholder="Website">
          </div>
          

          <button class="btn btn-primary btn-block">Add Supplier</button>
        </form>
      </div>
    </div>






      
      <!-- <div style="height: 1000px;"></div> -->
    </div>

<?php include('footer.php'); ?>