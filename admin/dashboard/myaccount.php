<?php include 'inc/header.php'; ?>

<section class="dashboard-sec">
	<div class="row">
		
<aside>
	<div class="side-logo">
		<a href="javascript:void(0)"><img src="assets/images/dashboard-logo.png" class="img-fluid"></a>
	</div>
	<div class="user-profile">
		<div class="profile-image">
			<img src="assets/images/user-image.png" class="img-fluid">
		</div>
		<div class="user-name">
			<p>Hi,<br>
			<strong>John Doe</strong></p>
		</div>
	</div>
	<div class="dashboard-links">
		
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#myccount" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="far fa-user"></i> My Account</a>

  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#myorder" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-shopping-cart"></i> My Orders</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#billing" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-file-invoice-dollar"></i> Billing</a>
  <a class="nav-link" href="javascript:;"><i class="fas fa-sign-out-alt"></i> Logout</a>
  <a class="nav-link" href="javascript:;"><i class="fas fa-home"></i> Back To Home</a>
</div>

	</div>
</aside>

<div class="right-box-wrap">
<div class="tab-content" id="v-pills-tabContent">
	<!-- My Account Tab -->
  <div class="tab-pane fade show active" id="myccount" role="tabpanel" aria-labelledby="v-pills-home-tab">
  	
			<h5 class="black-head">Welcome to Your Account</h5>
			<div class="user-info-box">
				
        <div class="avatar-upload">
          <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"><i class="fas fa-plus"></i></label>
          </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url(assets/images/user-image.png);">
            </div>
        </div>
        </div>


        <!-- <div class="profile-edit">
					<img src="assets/images/user-image.png" class="img-fluid">
					<span><a href="javascript:void(0)"><i class="fas fa-plus"></i></a></span>
				</div> -->
				<div class="info-box">
					<div class="user-detail-box">
						<div class="details">
							<label>User Name</label>
							<p>John Doe</p>
						</div>
						<div class="edit-btn">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#newUsername-modal">Edit</a>
						</div>
					</div>
					<div class="user-detail-box">
						<div class="details">
							<label>Address</label>
							<p>Lorem ipsum dolor sit</p>
						</div>
					</div>
					<div class="user-detail-box">
						<div class="details">
							<label>Phone Number</label>
							<p>You haven’t added a phone number yet</p>
						</div>
					</div>
				</div>
			</div>

			<div class="change-pass-wrap">
				<h5 class="black-head m-0">Password & Authentication</h5>
				<div class="pass-btn-box">
					<a href="javascript:void(0)" class="black-btn" data-toggle="modal" data-target="#newPassword-modal">Change Password</a>
          <a href="javascript:void(0)" class="black-btn" data-toggle="modal" data-target="#newEmail-modal">Change Your Email</a>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
			</div>	
  </div>

	<!-- My Order Tab -->
  <div class="tab-pane fade" id="myorder" role="tabpanel" aria-labelledby="v-pills-profile-tab">
  	<h5 class="black-head">My Orders</h5>
		<div class="order-detail-box">
			<table class="display nowrap" id="example" style="width:100%">
  				<thead class="thead-dark">
    				<tr>
      					<th scope="col">Oder#</th>
      					<th scope="col">Company Name</th>
      					<th scope="col">Status</th>
      					<th scope="col">Total</th>
      					<th scope="col">Last update</th>
    				</tr>
  				</thead>
  <tbody>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td>$230.00</td>
      <td>Today</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td>$230.00</td>
      <td>Today</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="yellow-color">Shipped</td>
      <td>$230.00</td>
      <td>June 12, 2020</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td>$230.00</td>
      <td>Yesterday</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td>$230.00</td>
      <td>June 12, 2020</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Fullfilled</td>
      <td>$230.00</td>
      <td>June 12, 2020</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td>$230.00</td>
      <td>June 12, 2020</td>
    </tr>
    <tr>
      <th scope="row">123456</th>
      <td>Lorem Ipsum</td>
      <td class="green-color">Confirmed</td>
      <td>$230.00</td>
      <td>June 12, 2020</td>
    </tr>
  </tbody>
</table>

		</div>
  </div>

  <!-- Billingt Tab -->
  <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="v-pills-messages-tab">
  	<h5 class="black-head">Payment Method</h5>
			<div class="payment-box">
				<div class="payment-text">
					<p>No payment method saved</p>
					<label>Checkout faster by saving a payment method</label>
				</div>
				<div class="payment-btn">
					<button type="button" class="black-btn" data-toggle="modal" data-target="#payment-modal">add payment method</button>
				</div>
			</div>
			<div class="transaction-history-box">
				<h5 class="black-head m-0">Transaction History</h5>
				<div class="alert alert-box" role="alert">
  					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
				</div>
			</div>
  </div>
  

</div>
</div>



<!-- Tabs End -->


	</div>
</section>




<?php include 'inc/footer.php'; ?>	