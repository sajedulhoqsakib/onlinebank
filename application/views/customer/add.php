<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12">
                <div class="card">
				
				  <?= form_open_multipart('customeradd') ?>
                  <div class="card-header">
                    <h4>Customer Add</h4>
                  </div>
                  <div class="card-body">
					<div class="row">
						<div class="form-group col-12 col-sm-6">
						  <label >First Name</label>
						  <input type="text" class="form-control" name="first_name" value="<?=  set_value('first_name','') ?>">
						  <?= form_error('first_name') ?>
						</div>
						
						<div class="form-group col-12 col-sm-6">
						  <label>Father Name</label>
						  <input type="text" class="form-control" name="father_name" value="<?=  set_value('father_name','') ?>">
						</div>
            <div class="form-group col-12 col-sm-6">
						  <label>Last Name</label>
						  <input type="text" class="form-control" name="last_name" value="<?=  set_value('last_name','') ?>">
						</div>
						<div class="form-group col-12 col-sm-6">
						  <label>Email</label>
						  <input type="text" class="form-control" name="email_address" value="<?=  set_value('email_address','') ?>">
						</div>
						
						<div class="form-group col-12 col-sm-6">
						  <label>Mobile No</label>
						  <input type="text" class="form-control" name="mobile_no" value="<?=  set_value('mobile_no','') ?>">
						</div>
            <div class="form-group col-12 col-sm-6">
						  <label>Account no</label>
						  <input type="text" class="form-control" name="account_no" value="<?=  set_value('account_no','') ?>">
						</div>
						<div class="form-group col-12 col-sm-6">
						  <label>NID No</label>
						  <input type="text" class="form-control" name="nid_no" value="<?=  set_value('nid_no','') ?>">
						</div>
            <div class="form-group col-12 col-sm-6">
						  <label>Address</label>
						  <input type="text" class="form-control" name="address" value="<?=  set_value('address','') ?>">
						</div>
            
						<div class="form-group col-12 col-sm-6">
						  <label>City</label>
						  <input type="text" class="form-control" name="city" value="<?=  set_value('city','') ?>">
						</div>
            <div class="form-group col-12 col-sm-6">
						  <label>District</label>
						  <input type="text" class="form-control" name="district" value="<?=  set_value('district','') ?>">
						</div>
            <div class="form-group col-12 col-sm-6">
						  <label>Division</label>
						  <input type="text" class="form-control" name="division" value="<?=  set_value('division','') ?>">
						</div>
						<div class="form-group col-12 col-sm-6">
						  <label>Date of Birth</label>
						  <input type="date" class="form-control" name="dob" value="<?=  set_value('dob','') ?>">
						</div>
            <div class="form-group col-12 col-sm-6">
						  <label>Pincode</label>
						  <input type="text" class="form-control" name="pincode" value="<?=  set_value('pincode','') ?>">
						</div>
				
						<div class="form-group col-12 col-sm-6">
						  <label>Image</label>
						  <input type="file" class="form-control" name="image" value="<?=  set_value('image','') ?>">
						</div> 
            <div class="form-group col-12 col-sm-6">
						  <label>Gender</label>
						  <input type="text" class="form-control" name="gender" value="<?=  set_value('gender','') ?>">
						</div>
            <div class="form-group col-12 col-sm-6">
						  <label>Password</label>
						  <input type="password" class="form-control" name="password" value="<?=  set_value('password','') ?>">
						</div>
					</div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
				  <?= form_close() ?>
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