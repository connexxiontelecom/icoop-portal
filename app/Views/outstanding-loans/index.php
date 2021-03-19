<?php
$session = session();
?>
<!DOCTYPE html>
<html lang="en" class="js">
<?php include(APPPATH.'/Views/_head.php'); ?>
<body class="nk-body npc-crypto bg-white has-sidebar">
<div class="nk-app-root">
	<div class="nk-main">
		<?php include(APPPATH.'/Views/_sidebar.php'); ?>
		<div class="nk-wrap">
			<?php include(APPPATH.'/Views/_header.php'); ?>
			<div class="nk-content nk-content-fluid">
				<div class="container-xl wide-lg">
          <div class="nk-content-body">
            <div class="components-preview">
              <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                  <h2 class="nk-block-title fw-normal">Outstanding Loans</h2>
                  <div class="nk-block-des">
                    <p>View activity on your outstanding loans here.</p>
                  </div>
                </div>
              </div><!-- .nk-block-head -->
              <div class="nk-block nk-block-lg">
                <div class="card card-preview">
                  <div class="card-inner">
                    <table class="datatable-init table">
                      <thead>
                      <tr>
                        <th>Loan Type</th>
                        <th class="text-right">Principal</th>
                        <th class="text-right">Interest</th>
                        <th class="text-right">Paid</th>
                        <th class="text-right">Outstanding</th>
                        <th class="text-right">Encumbered</th>
                        <th>View</th>
                      </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div><!-- .card-preview -->
              </div> <!-- nk-block -->
            </div><!-- .components-preview -->
          </div>
        </div>
			</div>
			<?php include(APPPATH.'/Views/_footer.php'); ?>
		</div>
	</div>
</div>
<?php include(APPPATH.'/Views/_scripts.php'); ?>
</body>
</html>