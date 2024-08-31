<?php 
  include 'header.php';
  include 'menu.php';
?>
<div class="content-wrapper">  <!-- Div Closed in footer file -->
    <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row m-auto">			  
				<div class="col-lg-6 col-12 m-auto">
					<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Personal KYC</h4>
					</div>
						<!-- /.box-header -->
						<form class="form" method="POST" action="kyc.php">
							<input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['uid']?>">
							<div class="box-body">
								<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Bank Info</h4>
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Banker Name</label>
									  <input type="text" name="banker_name" id="banker_name" class="form-control" placeholder="Enter Banker Name" required>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">IFSC Code</label>
									  <input type="text" name="ifsc_code" id="ifsc_code" class="form-control" placeholder="Enter IFSC Code" required>
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Bank Name</label>
									  <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="Enter Bank Name" required>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Account No</label>
									  <input type="text" name="account_no" id="account_no" class="form-control" placeholder="Enter Account No" required>
									</div>
								  </div>
								</div>
								<h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> KYC Info</h4>
								<hr class="my-15">
								<div class="form-group">
								  <label class="form-label">Aadhar Card</label>
								  <label class="file">
									<input type="file" id="aadhar" name="aadhar" required>
								  </label>
								</div>
								<div class="form-group">
								  <label class="form-label">PAN Card</label>
								  <label class="file">
									<input type="file" id="pan" name="pan">
								  </label>
								</div>
								<div class="form-group">
								  <label class="form-label">Cancel Cheque Book</label>
								  <label class="file">
									<input type="file" id="can_chq" name="can_chq">
								  </label>
								</div>
								<div class="form-group">
								  <label class="form-label">Profile Photo</label>
								  <label class="file">
									<input type="file" id="p_photo" name="p_photo">
								  </label>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer m-auto text-center">
								<button type="submit" value="KYC" name="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>  
						</form>
					</div>
					<!-- /.box -->			
				</div> 
			</div>
		</section>
	</div>
<?php   include 'footer.php'; ?>