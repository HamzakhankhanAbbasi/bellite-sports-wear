<!-- New Payment Modal Start  -->
<div class="modal payment-popup fade" id="payment-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
      		<h6>Add a new payment method</h6>
      		<p>Payment Type > <span>Payment Inforrnatir ' Billing Address</span> </p>
      		<button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        	</button>
      	</div>
      	<div class="payment-types">
      		<p>Select Payment Type </p>

      		<a href="javascript:void(0)" class="payment-type" data-toggle="modal" data-target="#credit-modal">
          <img src="assets/images/credit-card.png" class="img-fluid"> Credit Card</a>
      		<a href="javascript:void(0)" class="payment-type"><img src="assets/images/paypal.png" class="img-fluid"> PayPal</a>
      		<a href="javascript:void(0)" class="payment-type">Auto Fill From Browser</a>
      	</div>
      </div> 
    </div>
  </div>
</div>
<!-- End -->

<!-- Credit Card Modal Start  -->
<div class="modal payment-popup fade" id="credit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Credit Card Details</h6>
          <p>Payment Type > <span>Payment Inforrnatir ' Billing Address</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="text" name="" maxlength="20" placeholder="Card Holder Name" class="card-input">
            <input type="tel" name="" placeholder="Card Number" class="card-input">
            <input type="text" name="" pattern="[0-9]*" inputmode="numeric" placeholder="Expiration (mm/yy)" class="card-input">
            <input type="text" pattern="[0-9]*" inputmode="numeric" placeholder="Security Code" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>
<!-- End -->

<!-- Change User Name Modal Start -->
<div class="modal payment-popup fade" id="newUsername-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Add/Edit Details</h6>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="text" name="" maxlength="20" placeholder="Name" class="card-input">
            <input type="text" name="" maxlength="20" placeholder="Address" class="card-input">
            <input type="tel" name="" maxlength="15" placeholder="Phone Number" class="card-input">
            <button type="submit" class="card-btn">Update</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->



<!-- End -->

<!-- Change Password Modal Start -->
<div class="modal payment-popup fade" id="newPassword-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Chanege Your Password</h6>
          <p><span>Enter a new password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="password" name="" maxlength="30" placeholder="New Password" class="card-input">
            <input type="password" name="" maxlength="15" placeholder="Confirm Password" class="card-input">
            <button type="submit" class="card-btn">Update</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->

<!-- Change Email Address Modal Start -->
<div class="modal payment-popup fade" id="newEmail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Chanege Your Email Address</h6>
          <p><span>Enter a new email addressand your existing password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="email" name="" maxlength="30" placeholder="New Email Address" class="card-input">
            <input type="email" name="" maxlength="30" placeholder="Confirm Email Address" class="card-input">
            <input type="password" name="" maxlength="30" placeholder="Current Password" class="card-input">
            <button type="submit" class="card-btn">Update</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->




  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
  AOS.init();
</script>

</body>

</html>