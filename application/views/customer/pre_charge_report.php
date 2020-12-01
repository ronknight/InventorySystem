<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM box-->
        <div class="box">
<div class="box-title">
                <h4><i class="icon-reorder"></i> Statement of Account</h4>
				<span class="tools">
					<a href="javascript:;" class="icon-chevron-down"></a>
				</span>
            </div>
            <div class="box-body">
                <!-- BEGIN FORM-->
                <?php echo form_open('customer/salesReport',array('class'=>"form-horizontal form-bordered form-validate",'method'=>'post'))?>
                <div class="row">
                    <div class="col-lg-6">
                        <label class="control-label">START DATE</label>
                        <input type="text" data-ad-format="" class="form-control datepicker" name="start_date">
                        <input type="hidden" name="uri" value="<?=$this->uri->segment(3)?>">
                    </div>
                    <div class="col-lg-6">
                        <label class="control-label">END DATE</label>
                        <input type="text" class="form-control datepicker" name="end_date">
                    </div>
                </div>
                <br>
                <div class="form-actions">
                    <input type="hidden" name="Action" value="Search">
                    <button type="submit" class="btn btn-success" >Show Report</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </form>