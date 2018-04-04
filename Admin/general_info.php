<?php require_once('header.php');
$query = "select * FROM jail_info"; 
$result = mysql_query($query);
?>
   <style type='text/css'>
fieldset.scheduler-border {
    border: 1px solid #ddd !important;
	border-radius: 5px;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}
legend{
	width:auto;
	display: block;
    padding: 0;
    margin-bottom: 20px;
    font-size: 21px;
    line-height: inherit;
    color: #333;
    border: 0;
    padding: 5px;}
</style>
   <div id="wrapper">
   <!-- Navigation -->
   <?php require_once('navigation.php')?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" id="content">
                    <div class="col-lg-12">
                        <h1 class="page-header">General Entery Information</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!--Inner Content -->
            <div class="panel panel-default" id="content">
                        <div class="panel-heading">
                            Create New Information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form  id="createJailform"  action="" method="post" >
									     <div class="form-group">
                                            <label>Name of Jail*</label>
                                            <select class="form-control" id="jail_id" name="jail_id" >
                                                <option value="">Please Select Jail</option>
                                            <?php while($row=mysql_fetch_array($result)){?>
                                                <option value="<?php echo $row["jail_id"];?>"><?php echo $row["jail_name"];?></option>
                                            <?php }?>
                                            </select>
                                        </div>
										<fieldset class="scheduler-border">
    									<legend class="scheduler-border">Present Population</legend> 
                                        <div class="form-group">
                                            <label>Present Population Male</label>
                                            <input type="text" id="pre_pop_ma" name="pre_pop_ma" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>Present Population Female</label>
                                            <input type="text" id="pre_pop_fm" name="pre_pop_fm" class="form-control" placeholder="" required>
                                        </div>
										</fieldset>
										<fieldset class="scheduler-border">
    									<legend class="scheduler-border">UTP's</legend> 
										 <div class="form-group">
                                            <label>UTP's Male Adult</label>
                                            <input type="text" id="utp_ma_ad" name="utp_ma_ad" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>UTP's Female Adult</label>
                                            <input type="text" id="utp_fm_ad" name="utp_fm_ad" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>UTP's Male Juvenile</label>
                                            <input type="text" id="utp_ma_j" name="utp_ma_j" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>UTP's Female Juvenile</label>
                                            <input type="text" id="utp_fm_j" name="utp_fm_j" class="form-control" placeholder="" required>
                                        </div>
										</fieldset>
										<fieldset class="scheduler-border">
    									<legend class="scheduler-border">Convicted</legend> 
										 <div class="form-group">
                                            <label>Convited Male Adult</label>
                                            <input type="text" id="con_ma" name="con_ma" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>Convited Female Adult</label>
                                            <input type="text" id="con_fm" name="con_fm" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>Convited Male Juvenile</label>
                                            <input type="text" id="con_ma_j" name="con_ma_j" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>Convited Female Juvenile</label>
                                            <input type="text" id="con_fm_j" name="con_fm_j" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>Convited Civil Prisoner Male</label>
                                            <input type="text" id="con_cp_ma" name="con_cp_ma" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>Convited Civil Prisoner Female</label>
                                            <input type="text" id="con_cp_fm" name="con_cp_fm" class="form-control" placeholder="" required>
                                        </div>
										</fieldset>
										<fieldset class="scheduler-border">
    									<legend class="scheduler-border">Condemened</legend> 
										<div class="form-group">
                                            <label>Condemened Male</label>
                                            <input type="text" id="cond_ma" name="cond_ma" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>Condemened Female</label>
                                            <input type="text" id="cond_fm" name="cond_fm" class="form-control" placeholder="" required>
                                        </div>
										</fieldset>
										<fieldset class="scheduler-border">
    									<legend class="scheduler-border">Foreigners</legend> 
										<div class="form-group">
                                            <label>Foreigner's Male</label>
                                            <input type="text" id="for_ma" name="for_ma" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>Foreigner's Female</label>
                                            <input type="text" id="for_fm" name="for_fm" class="form-control" placeholder="" required>
                                        </div>
										</fieldset>
										<fieldset class="scheduler-border">
    									<legend class="scheduler-border">No. of UTPs for more than</legend> 
										 <div class="form-group">
                                            <label>UTP for 1 year</label>
                                            <input type="text" id="no_of_utp_1_year" name="no_of_utp_1_year" class="form-control" placeholder="" required>
                                        </div>
										
										 <div class="form-group">
                                            <label>UTP for 2 year</label>
                                            <input type="text" id="no_of_utp_2_year" name="no_of_utp_2_year" class="form-control" placeholder="" required>
                                        </div>
										
										 <div class="form-group">
                                            <label>UTP for 3 year</label>
                                            <input type="text" id="no_of_utp_3_year" name="no_of_utp_3_year" class="form-control" placeholder="" required>
                                        </div>
										
										 <div class="form-group">
                                            <label>UTP for 5 year</label>
                                            <input type="text" id="no_of_utp_4_year" name="no_of_utp_4_year" class="form-control" placeholder="" required>
                                        </div>
											</fieldset>
										<fieldset class="scheduler-border">
    									<legend class="scheduler-border">No. of UTPs Waiting for trial due to Non-submission 
of Challan</legend> 
										<div class="form-group">
                                            <label>UTP Trial Male Adult</label>
                                            <input type="text" id="utp_non_sub_ch_ma" name="utp_non_sub_ch_ma" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>UTP Trial Female Adult</label>
                                            <input type="text" id="utp_non_sub_ch_fm" name="utp_non_sub_ch_fm" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>UTP Trial Male Juvenile</label>
                                            <input type="text" id="utp_non_sub_ch_ma_j" name="utp_non_sub_ch_ma_j" class="form-control" placeholder="" required>
                                        </div>
										 <div class="form-group">
                                            <label>UTP Trial Female Juvenile</label>
                                            <input type="text" id="utp_non_sub_ch_fm_j" name="utp_non_sub_ch_fm_j" class="form-control" placeholder="" required>
                                        </div>
										</fieldset>
										<fieldset class="scheduler-border">
    									<legend class="scheduler-border">No. of Prisoners Releases on Payment of Diyat during the Month</legend> 
										 <div class="form-group">
                                            <label>No of Prisoner Release on Diyat</label>
                                            <input type="text" id="pri_rel_on_diyat" name="pri_rel_on_diyat" class="form-control" placeholder="" required>
                                        </div>
										</fieldset>
										<fieldset class="scheduler-border">
    									<legend class="scheduler-border">No.of Prisoners Released in Petty Cases During the Month</legend> 
										 <div class="form-group">
                                            <label>No of Prisoner Release on Petty</label>
                                            <input type="text" id="pri_rel_on_petty" name="pri_rel_on_petty" class="form-control" placeholder="" required>
                                        </div>
                                    </fieldset>
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
	</div>
<?php  require_once('footer.php')?>