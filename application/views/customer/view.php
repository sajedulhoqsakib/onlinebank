<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Customer Details</h4>
                  </div>
                  <div class="card-body">
					<div class="row">
					  <div class="col-7">
						<table width="100%">
							<tr>
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
								<th>Mobile:</th>
								<td><?= $data->mobile_no?></td>
							</tr>
							<tr>
								<th>Gender:</th>
								<td><?= $data->gender?></td>
							</tr>
							<tr>
								<th>Address:</th>
								<td><?= $data->address?></td>
								<td><?= $data->city?></td>
								<td><?= $data->district?></td>
								<td><?= $data->division?></td>
								
							</tr>
							
						</table>
					  </div>
					  <div class="col-3">
						<table width="100%">
							<tr>
              <th>Image:</th>
              <td><img src="<?= base_url('upload/customer/'.$data->image) ?>" width="80px" height="80px"></td>
							</tr>
              <tr>
              <th>Account No:</th>
								<td><?= $data->account_no?></td>
							</tr>
							<tr>
								<th>Balance:</th>
								<td><?= $data->balance?></td>
							</tr>
							
						</table>
					  </div>
					</div>
                    <!-- <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Account No</th>
                            <th>NID No</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>District</th>
                            <th>Division</th>
                            <th>Date of Birth</th>
                            <th>Balance</th>
                            <th>Pincode</th>
                            <th>Image</th>
                            <th>Gender</th>
                            <th>Time stamp</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td><?= $data->email_address?></td>
                            <td><?= $data->mobile_no?></td>
                            <td></td>
                            <td><?= $data->nid_no?></td>
                            <td><?= $data->address?></td>
                            <td><?= $data->city?></td>
                            <td><?= $data->district?></td>
                            <td><?= $data->division?></td>
                            <td><?= $data->dob?></td>
                            <td><?= $data->balance?></td>
                            <td><?= $data->pincode?></td>
                            <td><?= $data->image?></td>
                            <td><?= $data->gender?></td>
                            <td><?= $data->timestamp?></td>
                         <td><?= $data->address?>, <?= $data->division?>, <?= $data->district?>, <?= $data->city?></td>
                            
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div> -->
                </div>
              </div>
			  <div class="col-12">
				
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
      

  <!-- JS Libraies -->
  <script src="<?= base_url('assets/bundles/datatables/datatables.min.js') ?>"></script>
  <script src="<?= base_url('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('assets/bundles/jquery-ui/jquery-ui.min.js') ?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/js/page/datatables.js') ?>"></script>