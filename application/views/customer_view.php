<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Customer Details</h4>
                      <button class="btn btn-info float-right" type="button" onclick="print_div('print_d')">Print</button>
                    
                  </div>
                  <div class="card-body" id="print_d">
					<div class="row">
					  <div class="col-7">
						<table width="100%" cellpadding="5px">
            <tr>
                <td colspan="2" rowspan="5">
                  <img src="<?= base_url('upload/customer/'.$data->image) ?>" width="200px" height="200px">
                </td>
								<th>Name&nbsp;:</th>
								<td><?= $data->first_name?> <?= $data->last_name?></td>
              </tr>
              <tr>
								<th>Father Name:</th>
								<td><?= $data->father_name?></td>
              </tr>
							<tr>
								<th>Email:</th>
								<td><?= $data->email_address?></td>
							</tr>
							<tr>
								<th>NID No:</th>
								<td><?= $data->nid_no?></td>
							</tr>
							<tr>
								<th>Date of Birth:</th>
								<td><?= $data->dob?></td>
							</tr>
							<tr>
								<th>Account No:</th>
								<td><?= $data->account_no?></td>
                <th>Mobile:</th>
								<td><?= $data->mobile_no?></td>
							</tr>
							<tr>
								<th>Balance:</th>
								<td><?= $data->balance?></td>
                <th>Gender:</th>
								<td><?= $data->gender?></td>
							</tr>
							<tr>
                <td></td>
                <td></td>
								<th>Address:</th>
								<td><?= $data->address?><br><?= $data->city?><br><?= $data->district?><br>
								<br><?= $data->division?></td>
								
							</tr>
							
						</table>
					  </div>
					</div>
                    <div class="row">
                      <div class="col-12">
                        <h4 class="p2 text-center">Transaction History</h4>
                      <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Account No</th>
                            <th>Note</th>
                            <th>Amount DR</th>
                            <th>Amount CR</th>
                            <th>Balance</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $dr=0;
                            $cr=0;
                            if($trans){
				
                          foreach($trans as $i=>$data){
                            $dr+=$data->amount_dr;
                            $cr+=$data->amount_cr;
                            ?>
                          <tr>
                            <td> <?= ++$i ?></td>
                            <td><?= $data->account_no?></td>
                            <td><?= $data->note?></td>
                            <td><?= $data->amount_dr?></td>
                            <td><?= $data->amount_cr?></td>
                            <td><?= $cr-$dr ?></td>
                          </tr>
						              <?php } } ?>
                        </tbody>
						            <tfoot>
                          <tr>
                            <th></th>
                            <th></th>
                            <th>Total</th>
                            <th><?= $dr ?></th>
                            <th><?= $cr ?></th>
                            <th><?= $cr-$dr ?></th>
                          </tr>
                          </tfoot>
                      </table>
                    </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      

  <script>
    function print_div(e){
      var prtContent = document.getElementById(e);
      var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900');
      WinPrint.document.write('<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">');
      WinPrint.document.write(prtContent.innerHTML);
      WinPrint.document.close();
      WinPrint.focus();
      WinPrint.print();
      WinPrint.close();
    }
  </script>