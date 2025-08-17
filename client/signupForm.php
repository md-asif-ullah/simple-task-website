
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg border-0 rounded-3">
        <div class="card-body p-4">
          <h3 class="card-title text-center mb-4">Sign Up</h3>
          
          <form method="post" action="server/requests.php">

            <div class="row mb-3">
              <div class="col">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" name="firstName" class="form-control" id="firstName" placeholder="John" required>
              </div>
              <div class="col">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Doe" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="example@email.com" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>

            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input name="confirmPassword" type="password" class="form-control" id="confirmPassword" placeholder="Re-enter password" required>
            </div>

            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="terms" required>
              <label class="form-check-label" for="terms">I agree to the Terms & Conditions</label>
            </div>

            <button type="submit" name="signup" class="btn btn-primary w-100">Sign Up</button>
          </form>

          <p class="text-center mt-3 mb-0">
            Already have an account? <a href="#">Login</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

