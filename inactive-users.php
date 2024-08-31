<?php 
  include 'header.php';
  include 'menu.php';

  if ($_SESSION['user_type'] == 'admin') {
?>
<div class="content-wrapper">  <!-- Div Closed in footer file -->
    <div class="container-full">
      <!-- Main content -->

          <section class="content">
            <div class="box">
              <div class="box-header">
                <h4 class="box-title">Inactivated User List(s)</h4>
              </div>
              <div class="box-body">
                <div class="row">
                 <div class="table-responsive">
                     <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                       <thead>
                         <tr>
                           <th>Sl.</th>
                           <th>User Id</th>
                           <th>Name</th>
                           <th>Mobile No.</th>
                           <th>Email Id</th>
                           <th>Referred By</th>
                           <th>Added On</th>
                           <th>Link</th>
                         </tr>
                       </thead>
                       <tbody>
                          <?php
                            $i=0;
                            $user_sql = "SELECT * from users where user_type != 'admin' and status = '0' order by added_on DESC";
                            $user_sql_res = $conn->query($user_sql);
                            while ($user_sql_rows = $user_sql_res->fetch_assoc()) {
                            $i++;
                          ?>
                            <tr>
                              <td><?=$i?></td>
                              <td class="text-center refCode"><?=$user_sql_rows['user_id']?></td>
                              <td class="text-center"><?=$user_sql_rows['name']?></td>
                              <td class="text-center"><?=$user_sql_rows['mobile']?></td>
                              <td class="text-center"><?=$user_sql_rows['email_id']?></td>
                              <td class="text-center"><?=$user_sql_rows['referral_code']?></td>
                              <td class="text-center"><?=date('d-m-Y', strtotime($user_sql_rows['added_on']))?></td>
                              <td><a href="#" class="copyLink" onclick="copyToClipboard(this)">Copy Link</a></td>
                            </tr>
                         <?php } ?>
                       </tbody>
                     </table>
                      !-- Hidden input field to store the full link -->
                      <input type="text" id="linkToCopy" style="display:none;">
                   </div>
                </div>
              </div>
            </div>
          </section>
  </div>

<?php 
  }
  include 'footer.php';
?>
