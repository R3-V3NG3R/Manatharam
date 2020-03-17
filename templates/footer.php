
  <div class="oDonar" data-target="#organDonation" data-toggle="modal" style="cursor:pointer;">
    <img src="assets/images/heart.jpg" class="img img-fluid" alt="">
    <h4>Become DONAR</h4>
  </div>
<footer>
  <div class="container">
    <div class="row py-3">
      <div class="col-12 col-lg-4">
        <h4 class="py-2">Office Address</h4>
        <ul class="px-0">
          <li class="">
            Small description goes here. and this is the least visited area...
          </li>
          <li class="footer-list">
            <i class="fas fa-home"></i>
            address Goes here
          </li>
          <li class="footer-list">
            <i class="fas fa-phone-alt
            "></i>
            Mobile Number
          </li>
          <li class="footer-list">
            <i class="fas fa-envelope"></i>
            Mail
          </li>
        </ul>
      </div>
      <div class="col-12 col-lg-4">
      </div>
      <div class="col-12 col-lg-4">
        <h4 class="py-2">Quick Links</h4>
        <ul class="px-0">
          <a href="index.php" class="text-light text-decoration-none">
            <li class="footer-list">Home</li>
          </a>
          <a href="about.php" class="text-light text-decoration-none">
            <li class="footer-list">About us</li>
          </a>
          <a href="#" class="text-light text-decoration-none"  data-toggle="modal" data-target="#organDonation">
            <li class="footer-list">Become Organ Donar</li>
          </a>
          <a href="#" class="text-light text-decoration-none"  data-toggle="modal" data-target="#joinTeam">
            <li class="footer-list">Join Team</li>
          </a>
          <a href="#" class="text-light text-decoration-none"  data-toggle="modal" data-target="#DonateUs">
            <li class="footer-list">Donate Now</li>
          </a>
        </ul>
      </div>
    </div>
  </div>
  <div class="text-center text-light copy-rights py-3">
    Copyright &copy; 2020 - <b>Manatharam</b> - All Rights Reserved. Designed &amp; Developed By <a href="#">team<b>&pi;</b></a>
  </div>

<!---===<DONATE US>===--->
  <div class="modal fade" id="DonateUs" tabindex="-1" role="dialog" aria-labelledby="Donate Us" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-success" id="">Donate Us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table bg-light table-bordered">
            <!--BANK details--->
            <tr>
              <th>Bank</th>
              <td>HDFC BANK SAINIKPURI BRANCH HYDERABAD</td>
            </tr>
            <tr>
              <th>Account Number</th>
              <td>50200047536468</td>
            </tr>
            <tr>
              <th>IFSC CODE</th>
              <td>HDFC0000126</td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

  <!---===<GET HELP>===--->
  <div class="modal fade" id="getHelp" tabindex="-1" role="dialog" aria-labelledby="Get Help" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger" id="">Need Help</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="uploader.php">
            <div class="form-group">
              <label for="Name">Name:</label>
              <input type="text" name="name" class="form-control" id="Name" aria-describedby="Name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="MobileNumber">Mobile Number:</label>
              <input type="text" class="form-control" name="mobile" id="MobileNumber" placeholder="Mobile Number" required>
            </div>
            <div class="form-group">
              <label for="need">Describe Your Need:</label>
              <textarea name="need" rows="4" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="need">Address:</label>
              <textarea name="address" rows="4" class="form-control"></textarea>
            </div>
            <button type="submit" name="NeedHelp" class="btn btn-success">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <small class="text-warning">Our volunteer will reach you, once we verify your request.</small>
        </div>
      </div>
    </div>
  </div>

  <!---===<Join Team>===--->
  <div class="modal fade" id="joinTeam" tabindex="-1" role="dialog" aria-labelledby="Join Team" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger" id="">Join Our Team</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="uploader.php">
            <div class="form-group">
              <label for="Name">Name:</label>
              <input type="text" name="name" class="form-control" id="Name" aria-describedby="Name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="MobileNumber">Mobile Number:</label>
              <input type="text" name="mobile" class="form-control" id="MobileNumber" placeholder="Mobile Number" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="mail" name="mail" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <textarea name="address" rows="4" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="reason">Why you wan to join us:</label>
              <textarea name="reason" rows="4" class="form-control"></textarea>
            </div>
            <button type="submit" name="joinTeam" class="btn btn-success">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <small class="text-warning">Our volunteer will reach you, once we verify your request.</small>
        </div>
      </div>
    </div>
  </div>


    <!---===<Organ Donation>===--->
    <div class="modal fade" id="organDonation" tabindex="-1" role="dialog" aria-labelledby="Join Team" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-danger" id="">Become Organ Donar &amp; Save Lives</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="uploader.php" method="post">
              <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" name="name" class="form-control" id="Name" aria-describedby="Name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <label for="MobileNumber">Mobile Number:</label>
                <input type="text" name="mobile" class="form-control" id="MobileNumber" placeholder="Mobile Number" required>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="mail" name="mail" class="form-control" id="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="reason">Donation Type:</label>
                <select class="form-control" name="type">
                  <option value="Blood">Blood Donation</option>
                  <option value="organ">Organ Donation</option>
                </select>
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" rows="4" class="form-control"></textarea>
              </div>
              <button type="submit" name="organDonation" class="btn btn-success">Submit</button>
            </form>
          </div>
          <div class="modal-footer">
            <small class="text-warning">Our volunteer will reach you, once we verify your request.</small>
          </div>
        </div>
      </div>
    </div>

</footer>


</body>
</html>
