<?php  
echo $this->Html->script(array('front_js/Plugins/jquery-ui','client_js/Plugins/datapicker/jquery-hex-colorpicker'));
echo $this->Html->css(array('front_css/jquery-ui','client_css/custom_checkbox_radio','client_css/plugins/datepicker/jquery-hex-colorpicker'));
?>
test
<div class="bg-white section-padding display-setting">
	<div class="site-header-setting flex-row">
		<div class="row">
			<div class="col-lg-12">
				<h5 class="heading">
					<?php echo $this->session->flash();?>
				</h5>
			</div>
		</div> 
		<?php echo $this->Form->create('ProjectSetting',array('id' => 'ProjectSetting', 'type'=>'file', 'class'=>'form-validate')); ?>		
		<div class="row">
			<div class="col-sm-6">
				<div class="col-md-12">
	                <div class="project-search-bar-cnt">
	                    <div class="form-check checkbox-custom-new-parent">
	                        <label class="form-check-label" for="slt">
	                            <?php echo $this->Form->input('hide_iw_trending_popular_btn', array('label' => false, 'type' => 'checkbox', 'id' => 'slt', 'div' => false, 'class' => "form-check-input", (isset($result["ProjectSetting"]["hide_iw_trending_popular_btn"]) && $result["ProjectSetting"]["hide_iw_trending_popular_btn"] == 1 ? "checked" : ""))); ?>
	                            <span class="checkbox-custom-new"><i class="cr-icon fa fa-check"></i></span>
	                            Hide Ideawall & Extended Ideawall "New/Trending/Popular" Button at Front End
	                        </label>
	                    </div>
	                </div>
            	</div>

                <div class="col-md-12">
	                <div class="project-search-bar-cnt">
	                    <div class="form-check checkbox-custom-new-parent">
	                        <label class="form-check-label" for="slt">
	                            <?php echo $this->Form->input('hide_faq_view_all_button', array('label' => false, 'type' => 'checkbox', 'id' => 'slt', 'div' => false, 'class' => "form-check-input", (isset($result["ProjectSetting"]["hide_faq_view_all_button"]) && $result["ProjectSetting"]["hide_faq_view_all_button"] == 1 ? "checked" : ""))); ?>
	                            <span class="checkbox-custom-new"><i class="cr-icon fa fa-check"></i></span>
	                            Hide view all button within the FAQs tool
	                        </label>
	                    </div>
	                </div>
            	</div>

            	<div class="col-md-12">
					<h4 class="btn-top-40">Widget Title Shape Option</h4>
			        <?php
			        $options = array(1 => 'Rectangular', 2 => 'Rounded Corners at the Top');
			        foreach ($options as $k => $v) {
			            $checked = "";
			            if ($result["ProjectSetting"]['widget_title_shape'] == $k || (empty($result["ProjectSetting"]['widget_title_shape']) && $k == 1)) {
			                $checked = "checked";
			            }
			        ?>
			            <div class="form-check radio-custom-new-parent">
			                <label>
			                    <input type="radio" name="data[ProjectSetting][widget_title_shape]" value="<?php echo $k ?>" <?php echo $checked ?>>
			                    <span class="radio-custom-new cr"><i class="cr-icon fa fa-circle"></i></span>
			                    <?php echo $v ?>
			                </label>
			                <?php if ($k == '1') { ?>
			                    <p id="rcorners1">Widget Title</p>
			                <?php } else { ?>
			                    <p id="rcorners2">Widget Title</p>
			                <?php } ?>
			            </div>
			        <?php } ?>
            	</div>

            	<div class="col-md-12">
					<h4 class="btn-top-40">Show separator line between main content widgets</h4>
			        <hr class="heading_line">
			        <?php
			        $options = array(1 => 'Yes', 0 => 'No');
			        foreach ($options as $k => $v) {
			            $checked = "";
			            if ($result["ProjectSetting"]['widget_content_seperator'] == $k || (empty($result["ProjectSetting"]['widget_content_seperator']) && $k == '0')) {
			                $checked = "checked";
			            }
			        ?>
			            <span class="form-check radio-custom-new-parent separator_span">
			                <label>
			                    <input type="radio" name="data[ProjectSetting][widget_content_seperator]" value="<?php echo $k ?>" <?php echo $checked ?>>
			                    <span class="radio-custom-new cr"><i class="cr-icon fa fa-circle"></i></span>
			                    <?php echo $v ?>
			                </label>
			            </span>
			        <?php } ?>	
            	</div>

            	<div class="col-md-12">
			        <h4 class="btn-top-40">Toggle button on widget item options </h4>
			        <?php
			        $options = array(1 => 'arrow_option', 2 => 'angle_option');
			        foreach ($options as $k => $v) {
			            $checked = "";
			            if ($result["ProjectSetting"]['toggle_btn_option'] == $k || (empty($result["ProjectSetting"]['toggle_btn_option']) && $k == 1)) {
			                $checked = "checked";
			            }
			        ?>
			            <div class="form-check radio-custom-new-parent separator_span">
			                <label>
			                    <input type="radio" name="data[ProjectSetting][toggle_btn_option]" value="<?php echo $k ?>" <?php echo $checked ?>>
			                    <span class="radio-custom-new cr"><i class="cr-icon fa fa-circle"></i></span>
			                    <span class="cs_div">
			                        <?php if ($k == '1') { ?>
			                            <?php echo "Arrow Option" ?> <i class="cs_icon fa fa-solid fa-arrow-down" aria-hidden="true"></i>
			                        <?php } else { ?>
			                            <?php echo "Angle Option" ?> <i class="cs_icon fa fa-solid fa-angle-down" aria-hidden="true"></i>
			                        <?php } ?>
			                    </span>

			                </label>
			            </div>
			        <?php } ?>
            	</div>


            	<div class="col-md-12">
			        <h4 class="btn-top-40">Who's Listening Tool Content Position</h4>
			        <?php
			        $options = array(1 => 'Left Aligned', 2 => 'Center Aligned');
			        foreach ($options as $k => $v) {
			            $checked = "";
			            if ($result["ProjectSetting"]['listening_tool_content_position'] == $k || (empty($result["ProjectSetting"]['listening_tool_content_position']) && $k == 1)) {
			                $checked = "checked";
			            }
			        ?>
			            <span class="form-check radio-custom-new-parent separator_span">
			                <label>
			                    <input type="radio" name="data[ProjectSetting][listening_tool_content_position]" value="<?php echo $k ?>" <?php echo $checked ?>>
			                    <span class="radio-custom-new cr"><i class="cr-icon fa fa-circle"></i></span>
			                    <?php echo $v ?>
			                </label>
			            </span>
			        <?php } ?>
            	</div>
			</div>

			<div class="col-sm-6">
				<div class="col-md-12">
					<div class="form-group">
						<label>Vote Up Icon Colour</label>
						<div class="input-group">
							<?php echo $this->Form->input('vote_up_color',array('label'=>false,'type'=>'text','class'=>"form-control",'style' =>'color:#000;background-color:'.((!empty($result["ProjectSetting"]['vote_up_color']))?$result["ProjectSetting"]['vote_up_color']:'#ffffff') )); ?>
							<span class="input-group-addon color-picker"><i class="fa fa-paint-brush"></i></span> 
						 </div>
					 </div> 
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label>Vote Down Icon Colour</label>
						<div class="input-group">
							<?php echo $this->Form->input('vote_down_color',array('label'=>false,'type'=>'text', 'class'=>"form-control",'style' =>'color:#000;background-color:'.((!empty($result["ProjectSetting"]['vote_down_color']))?$result["ProjectSetting"]['vote_down_color']:'#ffffff') ));   ?>
							<span class="input-group-addon color-picker"><i class="fa fa-paint-brush"></i></span> 
						</div>                                
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label>Vote Up Background Colour</label>
						<div class="input-group">
							<?php echo $this->Form->input('vote_up_bg_color',array('label'=>false,'type'=>'text','class'=>"form-control",'style' =>'color:#000;background-color:'.((!empty($result["ProjectSetting"]['vote_up_bg_color']))?$result["ProjectSetting"]['vote_up_bg_color']:'#5cb85c') )); ?>
							<span class="input-group-addon color-picker"><i class="fa fa-paint-brush"></i></span> 
						 </div>
					 </div> 
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label>Vote Down Background Colour</label>
						<div class="input-group">
							<?php echo $this->Form->input('vote_down_bg_color',array('label'=>false,'type'=>'text', 'class'=>"form-control",'style' =>'color:#000;background-color:'.((!empty($result["ProjectSetting"]['vote_down_bg_color']))?$result["ProjectSetting"]['vote_down_bg_color']:'#d9534f') ));   ?>
							<span class="input-group-addon color-picker"><i class="fa fa-paint-brush"></i></span> 
						</div>                                
					</div>
				</div>
				<div class="col-md-12">
					<h4>Ideawall Display Option</h4>
				</div>
				<div class="col-sm-4">
			        <div class="form-group custom_radio_checkbox">              
			          <div class="form-check radio-custom-new-parent">
			            <label>                   
			              <input type="radio" name="data[ProjectSetting][ideawall_display_option]" value="1" <?php if($result["ProjectSetting"]['ideawall_display_option'] == 1 ){ echo "checked";}?> >
			              <span class="radio-custom-new cr"><i class="cr-icon fa fa-circle"></i></span>
			              Default
			            </label>
			            <br>
			            <img class="" src="/images/client_logo.jpg">               
			          </div>            
			        </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="form-group custom_radio_checkbox">              
			          <div class="form-check radio-custom-new-parent">
			            <label>                   
			              <input type="radio" name="data[ProjectSetting][ideawall_display_option]" value="2" <?php if($result["ProjectSetting"]['ideawall_display_option'] == 2 ){ echo "checked";}?> >
			              <span class="radio-custom-new cr"><i class="cr-icon fa fa-circle"></i></span>
			              Option 2
			            </label>
			            <br>
			            <img class="" src="/images/client_logo.jpg">               
			          </div>            
			        </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="form-group custom_radio_checkbox">              
			          <div class="form-check radio-custom-new-parent">
			            <label>                   
			              <input type="radio" name="data[ProjectSetting][ideawall_display_option]" value="3" <?php if($result["ProjectSetting"]['ideawall_display_option'] == 3 ){ echo "checked";}?> >
			              <span class="radio-custom-new cr"><i class="cr-icon fa fa-circle"></i></span>
			              Option 3
			            </label>
			            <br>
			            <img class="" src="/images/client_logo.jpg">               
			          </div>            
			        </div>
			    </div>

			    <div class="col-md-12">
					<h4>Extended Ideawall Display Option</h4>
				</div>
				<div class="col-sm-4">
			        <div class="form-group custom_radio_checkbox">              
			          <div class="form-check radio-custom-new-parent">
			            <label>                   
			              <input type="radio" name="data[ProjectSetting][extend_display_option]" value="1" <?php if($result["ProjectSetting"]['extend_display_option'] == 1 ){ echo "checked";}?> >
			              <span class="radio-custom-new cr"><i class="cr-icon fa fa-circle"></i></span>
			              Default
			            </label>
			            <br>
			            <img class="" src="/images/client_logo.jpg">               
			          </div>            
			        </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="form-group custom_radio_checkbox">              
			          <div class="form-check radio-custom-new-parent">
			            <label>                   
			              <input type="radio" name="data[ProjectSetting][extend_display_option]" value="2" <?php if($result["ProjectSetting"]['extend_display_option'] == 2 ){ echo "checked";}?> >
			              <span class="radio-custom-new cr"><i class="cr-icon fa fa-circle"></i></span>
			              Option 2
			            </label>
			            <br>
			            <img class="" src="/images/client_logo.jpg">               
			          </div>            
			        </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="form-group custom_radio_checkbox">              
			          <div class="form-check radio-custom-new-parent">
			            <label>                   
			              <input type="radio" name="data[ProjectSetting][extend_display_option]" value="3" <?php if($result["ProjectSetting"]['extend_display_option'] == 3 ){ echo "checked";}?> >
			              <span class="radio-custom-new cr"><i class="cr-icon fa fa-circle"></i></span>
			              Option 3
			            </label>
			            <br>
			            <img class="" src="/images/client_logo.jpg">               
			          </div>            
			        </div>
			    </div>
 
			</div>
		</div>
        <div class="row btn-top-40">
            <div class="col-lg-12">
                <div class="form-group"><button class="btn btn-primary" type="submit"><i class="fa fa-plus" aria-hidden="true"></i> Save Change</button>
                    <a href="/projects/project_detail/<?php echo $this->Common->base64url_encode($projectId); ?>" class="btn btn-warning"><i class="fa  fa-backward" aria-hidden="true"></i> Cancel</a>
                </div>
            </div>
        </div>	
		<?php echo $this->form->end(); ?>
	</div>	
</div>
<script>
   jQuery(".color-picker").hexColorPicker({
		"container":"dialog",
    });
    $('.form-control').change( function(){
            var backColor = $(this).val(),
                $this = $(this);
            if(backColor !=''){
                $this.css({"background-color":backColor,'color':'#000'});
            }
    });
    
    $('.form-control').keyup( function(){
            var backColor = $(this).val(),
                $this = $(this);
                console.log(backColor);
            if(backColor !=''){
                $this.css({"background-color":backColor,'color':'#000'});
            }else{
                
                $this.css({"background-color":'','color':'#000'});
            }
    });
</script>
