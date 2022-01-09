<?php
if ( ! defined( 'ABSPATH' ) ) {
     exit;
 }                                           
//echo json_encode($fields).'--------------';
 ?>
 <div  class="vx_div">
   <div class="vx_head">
<div class="crm_head_div"> <?php _e('5. Map Form Fields to HubSpot Fields.', 'contact-form-hubspot-crm'); ?></div>
<div class="crm_btn_div" title="<?php _e('Expand / Collapse','contact-form-hubspot-crm') ?>"><i class="fa crm_toggle_btn vx_action_btn fa-minus"></i></div>
<div class="crm_clear"></div> 
  </div>
  <div class="vx_group">
  <div class="vx_col1">
  <label>
  <?php _e("Fields Mapping", 'contact-form-hubspot-crm'); ?>
  <?php $this->tooltip("vx_map_fields") ?>
  </label>
  </div>
  <div class="vx_col2">
  <div id="vx_fields_div">
  <?php 
   $req_span=" <span class='vx_red vx_required'>(".__('Required','contact-form-hubspot-crm').")</span>";
 $req_span2=" <span class='vx_red vx_required vx_req_parent'>(".__('Required','contact-form-hubspot-crm').")</span>";
  foreach($map_fields as $k=>$v){ 
        if(isset($v['name_c'])){
  $v['name']=$v['name_c'];      
  $v['label']=__('Custom Field','contact-form-hubspot-crm');      
  } 
  if( in_array($v['name'] , array("OwnerId","AccountId","ContractId") )){
    continue;
}
if($module == "Order" && in_array($v['name'] , array("Status" ))){
    continue;
} 
  $sel_val=isset($map[$k]['field']) ? $map[$k]['field'] : ""; 
  $val_type=isset($map[$k]['type']) && !empty($map[$k]['type']) ? $map[$k]['type'] : "field"; 

  $options=$this->form_fields_options($form_id,$sel_val); 
    $display="none"; $btn_icon="fa-plus";
  if(isset($map[$k][$val_type]) && !empty($map[$k][$val_type])){
    $display="block"; 
    $btn_icon="fa-minus";   
  }
  $required=isset($v['req']) && $v['req'] == "true" ? true : false;
   $req_html=$required ? $req_span : "";
  ?>
<div class="crm_panel crm_panel_100">
<div class="crm_panel_head2">
<div class="crm_head_div"><span class="crm_head_text crm_text_label">  <?php echo $v['label'];?></span> <?php echo $req_html ?></div>
<div class="crm_btn_div">
<?php
 if(! $required){   
?>
<i class="vx_remove_btn vx_remove_btn vx_action_btn fa fa-trash-o" title="<?php _e('Delete','contact-form-hubspot-crm'); ?>"></i>
<?php } ?>
<i class="fa crm_toggle_btn vx_action_btn vx_btn_inner <?php echo $btn_icon ?>" title="<?php _e('Expand / Collapse','contact-form-hubspot-crm') ?>"></i>
</div>
<div class="crm_clear"></div> </div>
<div class="more_options crm_panel_content" style="display: <?php echo $display ?>;">
  <?php if(!isset($v['name_c'])){ ?>

  <div class="crm-panel-description">
  <span class="crm-desc-name-div"><?php echo __('Name:','contact-form-hubspot-crm')." ";?><span class="crm-desc-name"><?php echo $v['name']; ?></span> </span>
  <?php if($this->post('type',$v) !=""){ ?>
    <span class="crm-desc-type-div">, <?php echo __('Type:','contact-form-hubspot-crm')." ";?><span class="crm-desc-type"><?php echo $v['type'] ?></span> </span>
<?php
   }
  if($this->post('maxlength',$v) !=""){ 
   ?>
   <span class="crm-desc-len-div">, <?php echo __('Max Length:','contact-form-hubspot-crm')." ";?><span class="crm-desc-len"><?php echo $v['maxlength']; ?></span> </span>
  <?php 
  }
   if($this->post('eg',$v) !=""){ 
   ?>
   <span class="crm-eg-div">, <?php echo __('e.g:','contact-form-hubspot-crm')." ";?><span class="crm-eg"><?php echo $v['eg']; ?></span> </span>
  <?php 
  }
  ?>
   </div> 
  <?php
  }
  ?>

<div class="vx_margin">

<?php
    if(isset($v['name_c'])){
?>
<div class="entry_row">
<div class="entry_col1 vx_label"><?php _e('Field API Name','contact-form-hubspot-crm') ?></div>
<div class="entry_col2">
<input type="text" name="meta[map][<?php echo $k ?>][name_c]" value="<?php echo $v['name_c'] ?>" placeholder="<?php _e('Field API Name','contact-form-hubspot-crm') ?>" class="vx_input_100">
</div>
<div class="crm_clear"></div>
</div> 
<?php             
    }
?>
<div class="entry_row">
<div class="entry_col1 vx_label"><label  for="vx_type_<?php echo $k ?>"><?php _e('Field Type','contact-form-hubspot-crm') ?></label></div>
<div class="entry_col2">
<select name='meta[map][<?php echo $k ?>][type]'  id="vx_type_<?php echo $k ?>" class='vxc_field_type vx_input_100'>
<?php
  foreach($sel_fields as $f_key=>$f_val){
  $select="";
  if($this->post2($k,'type',$map) == $f_key)
  $select='selected="selected"';
  ?>
  <option value="<?php echo $f_key ?>" <?php echo $select ?>><?php echo $f_val?></option>    
  <?php } ?> 
</select>
</div>
<div class="crm_clear"></div>
</div>  
<div class="entry_row entry_row2">
<div class="entry_col1 vx_label">
<label for="vx_field_<?php echo $k ?>" style="<?php if($this->post2($k,'type',$map) != ''){echo 'display:none';} ?>" class="vxc_fields vxc_field_"><?php _e('Select Field','contact-form-hubspot-crm') ?></label>

<label for="vx_value_<?php echo $k ?>" style="<?php if($this->post2($k,'type',$map) != 'value'){echo 'display:none';} ?>" class="vxc_fields vxc_field_value"> <?php _e('Custom Value','contact-form-hubspot-crm') ?></label>
</div>
<div class="entry_col2">
<div class="vxc_fields vxc_field_value" style="<?php if($this->post2($k,'type',$map) != 'value'){echo 'display:none';} ?>">

<textarea name='meta[map][<?php echo $k?>][value]'  id="vx_value_<?php echo $k ?>" placeholder='<?php _e("Custom Value",'contact-form-hubspot-crm')?>' class='vx_input_100 vxc_field_input'><?php $text_val=$this->post2($k,'value',$map); echo htmlentities($text_val); ?></textarea>

<div class="howto"><?php echo sprintf(__('You can add a form field %s in custom value from following form fields','contact-form-hubspot-crm'),'<code>{field_id}</code>')?></div>
</div>


<select name="meta[map][<?php echo $k ?>][field]"  id="vx_field_<?php echo $k ?>" class="vxc_field_option vx_input_100">
<?php echo $options ?>
</select>


</div>
<div class="crm_clear"></div>
</div>  

  </div></div>
  <div class="clear"></div>
  </div>
<?php
  }
  ?> 
 
 <div id="vx_field_temp" style="display:none"> 
  <div class="crm_panel crm_panel_100 vx_fields">
<div class="crm_panel_head2">
<div class="crm_head_div"><span class="crm_head_text crm_text_label">  <?php _e('Custom Field', 'contact-form-hubspot-crm');?></span> </div>
<div class="crm_btn_div">
<i class="vx_remove_btn vx_action_btn fa fa-trash-o" title="<?php _e('Delete','contact-form-hubspot-crm'); ?>"></i>
<i class="fa crm_toggle_btn vx_action_btn vx_btn_inner fa-minus" title="<?php _e('Expand / Collapse','contact-form-hubspot-crm') ?>"></i>
</div>
<div class="crm_clear"></div> </div>
<div class="more_options crm_panel_content" style="display: block;">

<?php
    if($api_type  != 'web'){
?>

  <div class="crm-panel-description">
  <span class="crm-desc-name-div"><?php echo __('Name:','contact-form-hubspot-crm')." ";?><span class="crm-desc-name"></span> </span>
  <span class="crm-desc-type-div">, <?php echo __('Type:','contact-form-hubspot-crm')." ";?><span class="crm-desc-type"></span> </span>
  <span class="crm-desc-len-div">, <?php echo __('Max Length:','contact-form-hubspot-crm')." ";?><span class="crm-desc-len"></span> </span>
<span class="crm-eg-div">, <?php echo __('e.g:','contact-form-hubspot-crm')." ";?><span class="crm-eg"></span> </span>
   </div> 

<?php
    }
?>
<div class="vx_margin">

<?php
    if($api_type  == 'web'){
?>
<div class="entry_row">
<div class="entry_col1 vx_label"><?php _e('Field API Name','contact-form-hubspot-crm') ?></div>
<div class="entry_col2">
<input type="text" name="name_c" placeholder="<?php _e('Field API Name','contact-form-hubspot-crm') ?>" class="vx_input_100">
</div>
<div class="crm_clear"></div>
</div> 
<?php
    }
?>
<div class="entry_row">
<div class="entry_col1 vx_label"><label  for="vx_type"><?php _e('Field Type','contact-form-hubspot-crm') ?></label></div>
<div class="entry_col2">
<select name='type' class='vxc_field_type vx_input_100'>
<?php
  foreach($sel_fields as $f_key=>$f_val){
  ?>
  <option value="<?php echo $f_key ?>"><?php echo $f_val?></option>    
  <?php } ?> 
</select>
</div>
<div class="crm_clear"></div>
</div>  

<div class="entry_row entry_row2">
<div class="entry_col1 vx_label">
<label for="vx_field_" class="vxc_fields vxc_field_"><?php _e('Select Field','contact-form-hubspot-crm') ?></label>

<label for="vx_value_" style="display:none" class="vxc_fields vxc_field_value"> <?php _e('Custom Value','contact-form-hubspot-crm') ?></label>
</div>
<div class="entry_col2">
<div class="vxc_fields vxc_field_value" style="display:none">
<textarea name='value'  placeholder='<?php _e("Custom Value",'contact-form-hubspot-crm')?>' class="vx_input_100 vxc_field_input"></textarea>
<div class="howto"><?php echo sprintf(__('You can add a form field %s in custom value from following form fields','contact-form-hubspot-crm'),'<code>{field_id}</code>')?></div>
</div>


<select name="field"  id="vx_field_" class="vxc_field_option vx_input_100">
<?php echo $this->form_fields_options($form_id); ?>
</select>


</div>
<div class="crm_clear"></div>
</div>

  </div></div>
  <div class="clear"></div>
  </div>
   </div>
   <!--end field box template--->
     <?php
  if($api_type =="web"){ ?>
  <div class="vx_fields_footer">
  <div class="vx_row">
  <div class="vx_col1"> &nbsp;</div><div class="vx_col2">
  <button type="button" class="button button-default" id="xv_add_custom_field"><i class=" fa fa-plus-circle" ></i> <?php _e('Add Custom Field','contact-form-hubspot-crm')?></button></div>
  <div class="clear"></div></div>
   </div>
 <?php }else{ ?> 
   <div class="crm_panel crm_panel_100">
<div class="crm_panel_head2">
<div class="crm_head_div"><span class="crm_head_text ">  <?php _e("Add New Field", 'contact-form-hubspot-crm');?></span> </div>
<div class="crm_btn_div"><i class="fa crm_toggle_btn vx_btn_inner fa-minus" style="display: none;" title="<?php _e('Expand / Collapse','contact-form-hubspot-crm'); ?>"></i></div>
<div class="crm_clear"></div> </div>
<div class="more_options crm_panel_content" style="display: block;">

<div class="vx_margin">
<div style="display: table">
  <div style="display: table-cell; width: 85%; padding-right: 14px;">
<select id="vx_add_fields_select" class="vx_input_100" autocomplete="off">
<option value=""></option>
<?php
$json_fields=array();
 foreach($fields as $k=>$v){
     $v['type']=ucfirst($v['type']);
     $json_fields[$k]=$v;
   $disable='';
   if(isset($map_fields[$k])){
    $disable='disabled="disabled"';   
   } 
echo "<option value='{$k}' {$disable} >{$v['label']}</option>";   
} ?>
</select>
  </div><div style="display: table-cell;">
 <button type="button" class="button button-default" style="vertical-align: middle;" id="xv_add_custom_field"><i class="fa fa-plus-circle" ></i> <?php _e('Add Field','contact-form-hubspot-crm')?></button>
  
  </div></div>
 

  </div></div>
  <div class="clear"></div>
  </div>
  <!--add new field box template--->
  <script type="text/javascript">
var crm_fields=<?php echo json_encode($json_fields); ?>;

</script> 
  <?php
 }
 ?>
  </div>
  </div>
  <div class="clear"></div>
  </div>
  </div>
  <div class="vx_div">
   <div class="vx_head">
<div class="crm_head_div"> <?php _e('6. When to Send Entry to HubSpot.', 'contact-form-hubspot-crm'); ?></div>
<div class="crm_btn_div" title="<?php _e('Expand / Collapse','contact-form-hubspot-crm') ?>"><i class="fa crm_toggle_btn vx_action_btn fa-minus"></i></div>
<div class="crm_clear"></div> 
  </div>
 
  <div class="vx_group">
  <div class="vx_row">
  <div class="vx_col1">
  <label for="crm_manual_export">
  <?php esc_html_e('Disable Automatic Export', 'contact-form-hubspot-crm'); ?>
  <?php $this->tooltip("vx_manual_export") ?>
  </label>
  </div>
  <div class="vx_col2">
  <fieldset>
  <legend class="screen-reader-text"><span>
  <?php _e('Disable Automatic Export', 'contact-form-hubspot-crm'); ?>
  </span></legend>
  <label for="crm_manual_export">
  <input name="meta[manual_export]" id="crm_manual_export" type="checkbox" value="1" <?php echo isset($meta['manual_export'] ) ? 'checked="checked"' : ''; ?>>
  <?php _e( 'Manually send the entries to HubSpot.', 'contact-form-hubspot-crm'); ?> </label>
  </fieldset>
  </div>
  <div style="clear: both;"></div>
  </div>
  <div class="vx_row">
  <div class="vx_col1">
  <label for="crm_optin">
  <?php _e("Opt-In Condition", 'contact-form-hubspot-crm'); ?>
  <?php $this->tooltip("vx_optin_condition") ?>
  </label>
  </div>
  <div class="vx_col2">
  <div>
  <input type="checkbox" style="margin-top: 0px;" id="crm_optin" class="crm_toggle_check" name="meta[optin_enabled]" value="1" <?php echo !empty($meta["optin_enabled"]) ? "checked='checked'" : ""?>/>
  <label for="crm_optin">
  <?php _e("Enable", 'contact-form-hubspot-crm'); ?>
  </label>
  </div>
  <div style="clear: both;"></div>
  <div id="crm_optin_div"  style="margin-top: 16px; <?php echo empty($meta["optin_enabled"]) ? "display:none" : ""?>">
  <div>
  <?php
  $sno=0;
  foreach($filters as $filter_k=>$filter_v){
  $sno++;
                              ?>
  <div class="vx_filter_or" data-id="<?php echo $filter_k ?>">
  <?php if($sno>1){ ?>
  <div class="vx_filter_label">
  <?php _e('OR','contact-form-hubspot-crm') ?>
  </div>
  <?php } ?>
  <div class="vx_filter_div">
  <?php
  if(is_array($filter_v)){
  $sno_i=0;
  foreach($filter_v as $s_k=>$s_v){   
  $sno_i++;
  
  ?>
  <div class="vx_filter_and">
  <?php if($sno_i>1){ ?>
  <div class="vx_filter_label">
  <?php _e('AND','contact-form-hubspot-crm') ?>
  </div>
  <?php } ?>
  <div class="vx_filter_field vx_filter_field1">
  <select id="crm_optin_field" name="meta[filters][<?php echo $filter_k ?>][<?php echo $s_k ?>][field]">
  <?php 
  echo $this->form_fields_options($form_id,$this->post('field',$s_v));
                ?>
  </select>
  </div>
  <div class="vx_filter_field vx_filter_field2">
  <select name="meta[filters][<?php echo $filter_k ?>][<?php echo $s_k ?>][op]" >
  <?php
                 foreach($vx_op as $k=>$v){
  $sel="";
  if($this->post('op',$s_v) == $k)
  $sel='selected="selected"';
                   echo "<option value='".$k."' $sel >".$v."</option>";
               } 
              ?>
  </select>
  </div>
  <div class="vx_filter_field vx_filter_field3">
  <input type="text" class="vxc_filter_text" placeholder="<?php _e('Value','contact-form-hubspot-crm') ?>" value="<?php echo $this->post('value',$s_v) ?>" name="meta[filters][<?php echo $filter_k ?>][<?php echo $s_k ?>][value]">
  </div>
  <?php if( $sno_i>1){ ?>
  <div class="vx_filter_field vx_filter_field4"><i class="vx_icons-h vx_trash_and vxc_tips fa fa-trash-o" data-tip="Delete"></i></div>
  <?php } ?>
  <div style="clear: both;"></div>
  </div>
  <?php
  } }
                     ?>
  <div class="vx_btn_div">
  <button class="button button-default button-small vx_add_and" title="<?php _e('Add AND Filter','contact-form-hubspot-crm'); ?>"><i class="vx_icons-s vx_trash_and fa fa-hand-o-right"></i>
  <?php _e('Add AND Filter','contact-form-hubspot-crm') ?>
  </button>
  <?php if($sno>1){ ?>
  <a href="#" class="vx_trash_or">
  <?php _e('Trash','contact-form-hubspot-crm') ?>
  </a>
  <?php } ?>
  </div>
  </div>
  </div>
  <?php
                          }
                      ?>
  <div class="vx_btn_div">
  <button class="button button-default  vx_add_or" title="<?php _e('Add OR Filter','contact-form-hubspot-crm'); ?>"><i class="vx_icons vx_trash_and fa fa-check"></i>
  <?php _e('Add OR Filter','contact-form-hubspot-crm') ?>
  </button>
  </div>
  </div>
  <!--------- template------------>
  <div style="display: none;" id="vx_filter_temp">
  <div class="vx_filter_or">
  <div class="vx_filter_label">
  <?php _e('OR','contact-form-hubspot-crm') ?>
  </div>
  <div class="vx_filter_div">
  <div class="vx_filter_and">
  <div class="vx_filter_label vx_filter_label_and">
  <?php _e('AND','contact-form-hubspot-crm') ?>
  </div>
  <div class="vx_filter_field vx_filter_field1">
  <select id="crm_optin_field" name="field">
  <?php 
  echo $this->form_fields_options($form_id);
                ?>
  </select>
  </div>
  <div class="vx_filter_field vx_filter_field2">
  <select name="op" >
  <?php
                 foreach($vx_op as $k=>$v){
  
                   echo "<option value='".$k."' >".$v."</option>";
               } 
              ?>
  </select>
  </div>
  <div class="vx_filter_field vx_filter_field3">
  <input type="text" class="vxc_filter_text" placeholder="<?php _e('Value','contact-form-hubspot-crm') ?>" name="value">
  </div>
  <div class="vx_filter_field vx_filter_field4"><i class="vx_icons vx_trash_and vxc_tips fa fa-trash-o"></i></div>
  <div style="clear: both;"></div>
  </div>
  <div class="vx_btn_div">
  <button class="button button-default button-small vx_add_and" title="<?php _e('Add AND Filter','contact-form-hubspot-crm'); ?>"><i class="vx_icons vx_trash_and  fa fa-hand-o-right"></i>
  <?php _e('Add AND Filter','contact-form-hubspot-crm') ?>
  </button>
  <a href="#" class="vx_trash_or">
  <?php _e('Trash','contact-form-hubspot-crm') ?>
  </a> </div>
  </div>
  </div>
  </div>
  <!--------- template end ------------>
  </div>
  </div>
  <div style="clear: both;"></div>
  </div>
<?php
  if($module != 'Task'){ 
         $settings=get_option($this->type.'_settings',array());
         if(!empty($settings['notes'])){
?>

  <div class="vx_row">
  <div class="vx_col1">
  <label for="vx_notes"><?php _e('Entry Notes ', 'contact-form-hubspot-crm');  $this->tooltip('vx_entry_notes');?></label>
  </div>
  <div class="vx_col2">
  <input type="checkbox" style="margin-top: 0px;" id="vx_notes" class="crm_toggle_check" name="meta[entry_notes]" value="1" <?php echo !empty($meta['entry_notes']) ? 'checked="checked"' : ''?> autocomplete="off"/>
    <label for="vx_notes"><?php _e('Add / delete notes to HubSpot when added / deleted in Contact Form Entries Plugin', 'contact-form-hubspot-crm'); ?></label>
  
  </div>
  <div class="clear"></div>
  </div>
<?php
         }
    }
?>

  </div> 
  </div>
  <?php 
   $panel_count=6;
  if(is_array($search_fields) && count($search_fields)>0){ 

  ?>     
  <div class="vx_div "> 
  <div class="vx_head ">
<div class="crm_head_div"> <?php  echo sprintf(__('%s. Choose Primary Key.',  'contact-form-hubspot-crm' ),++$panel_count); ?></div>
<div class="crm_btn_div"><i class="fa crm_toggle_btn fa-minus" title="<?php _e('Expand / Collapse','contact-form-hubspot-crm') ?>"></i></div>
<div class="crm_clear"></div> 
  </div>                    
    <div class="vx_group">
  <div class="vx_row">
  <div class="vx_col1">
  <label for="crm_primary_field"><?php _e('Select Primary Key','%dd%') ?></label>
  </div><div class="vx_col2">
  <select id="crm_primary_field" name="meta[primary_key]" class="vx_sel vx_input_100" autocomplete="off">
  <?php echo $this->crm_select($search_fields,$meta['primary_key']); ?>
  </select> 
  <div class="description" style="float: none; width: 90%"><?php _e('If you want to update a pre-existing object, select what should be used as a unique identifier ("Primary Key"). For example, this may be an email address, lead ID, or address. When a new entry comes in with the same "Primary Key" you select, a new object will not be created, instead the pre-existing object will be updated.', '%dd%'); ?></div>
  </div>
  <div class="clear"></div>
  </div>
 <div class="vx_row">
  <div class="vx_col1">
  <label for="vx_update"><?php _e('Update Entry ', '%dd%');?></label>
  </div>
  <div class="vx_col2">
  <input type="checkbox" style="margin-top: 0px;" id="vx_update" class="crm_toggle_check" name="meta[update]" value="1" <?php echo !empty($meta['update']) ? 'checked="checked"' : ''?> autocomplete="off"/>
    <label for="vx_update"><?php _e('Do not update entry, if already exists', '%dd%'); ?></label>
  
  </div>
  <div class="clear"></div>
  </div>
    
  </div>

  </div>
  <!-------------------------- lead owner -------------------->
  <?php
  }
                  if($module != 'Task'){
                      ?>
                      <div class="vx_div">
     <div class="vx_head">
<div class="crm_head_div"> <?php echo sprintf(__('%s. Add Note.', 'contact-form-hubspot-crm'),$panel_count+=1); ?></div>
<div class="crm_btn_div" title="<?php _e('Expand / Collapse','contact-form-hubspot-crm') ?>"><i class="fa crm_toggle_btn fa-minus"></i></div>
<div class="crm_clear"></div> 
  </div>


  <div class="vx_group">

    <div class="vx_row">
  <div class="vx_col1">
  <label for="crm_note">
  <?php _e("Add Note ", 'contact-form-hubspot-crm'); ?>
  <?php $this->tooltip('vx_entry_note') ?>
  </label>
  </div>
  <div class="vx_col2">
  <input type="checkbox" style="margin-top: 0px;" id="crm_note" class="crm_toggle_check" name="meta[note_check]" value="1" <?php echo !empty($meta['note_check']) ? "checked='checked'" : ""?>/>
  <label for="crm_note_div">
  <?php _e("Enable", 'contact-form-hubspot-crm'); ?>
  </label>
  </div>
  <div style="clear: both;"></div>
  </div>
  <div id="crm_note_div" style="margin-top: 16px; <?php echo empty($meta["note_check"]) ? "display:none" : ""?>">
  <div class="vx_row">
  <div class="vx_col1">
  <label for="crm_note_fields">
  <?php _e( 'Note Fields ', 'contact-form-hubspot-crm' ); $this->tooltip("vx_note_fields") ?>
  </label>
  </div>
  <div class="vx_col2 entry_col2">
  <textarea name="meta[note_val]"  placeholder="<?php _e("{field-id} text",'contact-form-hubspot-crm')?>" class="vx_input_100 vxc_field_input" style="height: 60px"><?php
  if(!empty($meta['note_fields']) && is_array($meta['note_fields'])){
          $meta['note_val']='{'.implode("}\n{",$meta['note_fields'])."}";
}
   echo $this->post('note_val',$meta); ?></textarea>
<div class="howto"><?php echo sprintf(__('You can add a form field %s in custom value from following form fields','contact-form-hubspot-crm'),'<code>{field_id}</code>')?></div>

<select name="field"  class="vxc_field_option vx_input_100">
<?php echo $this->form_fields_options($form_id); ?>
</select>
   </div>
   
  <div style="clear: both;"></div>
  </div>
  
  <div class="vx_row">
  <div class="vx_col1">
  <label for="crm_disable_note">
  <?php _e( 'Disable Note ', 'contact-form-hubspot-crm' ); $this->tooltip("vx_disable_note") ?>
  </label>
  </div>
  <div class="vx_col2">
  
  <input type="checkbox" style="margin-top: 0px;" id="crm_disable_note" class="crm_toggle_check" name="meta[disable_entry_note]" value="1" <?php echo !empty($meta['disable_entry_note']) ? "checked='checked'" : ""?>/>
  <label for="crm_disable_note">
  <?php _e('Do not Add Note if entry already exists in Hubspot', 'contact-form-hubspot-crm'); ?>
  </label>
    
   </div>
  <div style="clear: both;"></div>
  </div>
  
  </div>

  </div>
  </div>
                      <?php
                  }
                  if( in_array($module, array('Task','Contact','Company'))){
                 
                      $users=$this->post('users',$info_meta);
               ?>
     <div class="vx_div vx_refresh_panel ">    
      <div class="vx_head ">
<div class="crm_head_div"> <?php echo sprintf(__('%s. Object Owner',  'contact-form-hubspot-crm' ),++$panel_count); ?></div>
<div class="crm_btn_div"><i class="fa crm_toggle_btn fa-minus" title="<?php _e('Expand / Collapse','contact-form-hubspot-crm') ?>"></i></div>
<div class="crm_clear"></div> 
  </div>                 
    <div class="vx_group ">
   <div class="vx_row"> 
   <div class="vx_col1"> 
  <label for="crm_owner"><?php _e("Assign Owner ", 'contact-form-hubspot-crm'); $this->tooltip('vx_owner_check');?></label>
  </div>
  <div class="vx_col2">
  <input type="checkbox" style="margin-top: 0px;" id="crm_owner" class="crm_toggle_check <?php if(empty($users)){echo 'vx_refresh_btn';} ?>" name="meta[owner]" value="1" <?php echo !empty($meta["owner"]) ? "checked='checked'" : ""?> autocomplete="off"/>
    <label for="owner"><?php _e("Enable", 'contact-form-hubspot-crm'); ?></label>
  </div>
<div class="clear"></div>
</div>
    <div id="crm_owner_div" style="<?php echo empty($meta["owner"]) ? "display:none" : ""?>">
  <div class="vx_row">
  <div class="vx_col1">
  <label><?php _e('Users List ','contact-form-hubspot-crm'); $this->tooltip('vx_owners'); ?></label>
  </div>
  <div class="vx_col2">
  <button class="button vx_refresh_data" data-id="refresh_users" type="button" autocomplete="off" style="vertical-align: baseline;">
  <span class="reg_ok"><i class="fa fa-refresh"></i> <?php _e('Refresh Data','contact-form-hubspot-crm') ?></span>
  <span class="reg_proc"><i class="fa fa-refresh fa-spin"></i> <?php _e('Refreshing...','contact-form-hubspot-crm') ?></span>
  </button>
  </div> 
   <div class="clear"></div>
  </div> 

  <div class="vx_row">
   <div class="vx_col1">
  <label for="crm_sel_user"><?php _e('Select User ','contact-form-hubspot-crm'); $this->tooltip('vx_sel_owner'); ?></label>
</div> 
<div class="vx_col2">

  <select id="crm_sel_user" name="meta[user]" style="width: 100%;" autocomplete="off">
  <?php echo $this->gen_select($users,$meta['user'],__('Select User','contact-form-hubspot-crm')); ?>
  </select>

   </div>

   <div class="clear"></div>
   </div>
 
  
  </div>
  

  </div>
  </div>
<?php
                  }
 

    $file=vxcf_hubspot::$path.'pro/pro-mapping.php';
if(vxcf_hubspot::$is_pr && file_exists($file)){
include_once($file);
}
if(in_array($module,array('Ticket'))){
    $pipe='pipes';

$pipes=$this->post($pipe,$info_meta);
 ?>
    <div class="vx_div vx_refresh_panel ">    
      <div class="vx_head ">
<div class="crm_head_div"> <?php  echo sprintf(__('%s. Select Pipeline',  'contact-form-hubspot-crm' ),++$panel_count); ?></div>
<div class="crm_btn_div"><i class="fa crm_toggle_btn fa-minus" title="<?php _e('Expand / Collapse','contact-form-hubspot-crm') ?>"></i></div>
<div class="crm_clear"></div> 
  </div>                 
    <div class="vx_group ">
   <div class="vx_row"> 
   <div class="vx_col1"> 
  <label><?php _e('Assign Pipeline ', 'contact-form-hubspot-crm');?></label>
  </div>
  <div class="vx_col2">
  <input type="checkbox" style="margin-top: 0px;" id="crm_flow" class="crm_toggle_check <?php if( empty($pipes)){echo 'vx_refresh_btn';} ?>" name="meta[add_pipe]" value="1" <?php echo !empty($meta["add_pipe"]) ? "checked='checked'" : ""?> autocomplete="off"/>
    <label for="crm_flow"><?php _e("Enable", 'contact-form-hubspot-crm'); ?></label>
  </div>
<div class="clear"></div>
</div>
    <div id="crm_flow_div" style="<?php echo empty($meta["add_pipe"]) ? "display:none" : ""?>">

  <div class="vx_row">
  <div class="vx_col1">
  <label><?php _e('Pipelines ','contact-form-hubspot-crm'); ?></label>
  </div>
  <div class="vx_col2">
  <button class="button vx_refresh_data" data-id="refresh_<?php echo $pipe; ?>" type="button" autocomplete="off" style="vertical-align: baseline;">
  <span class="reg_ok"><i class="fa fa-refresh"></i> <?php _e('Refresh Data','contact-form-hubspot-crm') ?></span>
  <span class="reg_proc"><i class="fa fa-refresh fa-spin"></i> <?php _e('Refreshing...','contact-form-hubspot-crm') ?></span>
  </button>
  </div> 
   <div class="clear"></div>
  </div> 
  <div class="vx_row">
   <div class="vx_col1">
  <label for="crm_sel_flow"><?php _e('Select Pipeline ','contact-form-hubspot-crm'); ?></label>
</div> <div class="vx_col2">
  <select id="crm_sel_pipe" name="meta[pipe]" style="width: 100%;" autocomplete="off">
  <?php echo $this->gen_select($pipes,$meta['pipe'],__('Select Pipeline','contact-form-hubspot-crm')); ?>
  </select>

  </div>
   <div class="clear"></div>
   </div>

  
  </div>
  

  </div>
  </div>
<?php }
if(in_array($module,array('Deal'))){
     $pipe='deal_pipes';   
    
$pipes=$this->post($pipe,$info_meta);
 ?>
    <div class="vx_div vx_refresh_panel ">    
      <div class="vx_head ">
<div class="crm_head_div"> <?php  echo sprintf(__('%s. Select Pipeline',  'contact-form-hubspot-crm' ),++$panel_count); ?></div>
<div class="crm_btn_div"><i class="fa crm_toggle_btn fa-minus" title="<?php _e('Expand / Collapse','contact-form-hubspot-crm') ?>"></i></div>
<div class="crm_clear"></div> 
  </div>                 
    <div class="vx_group ">
   <div class="vx_row"> 
   <div class="vx_col1"> 
  <label><?php _e('Assign Pipeline ', 'contact-form-hubspot-crm');?></label>
  </div>
  <div class="vx_col2">
  <input type="checkbox" style="margin-top: 0px;" id="crm_flow1" class="crm_toggle_check <?php if( empty($pipes)){echo 'vx_refresh_btn';} ?>" name="meta[add_sales_pipe]" value="1" <?php echo !empty($meta["add_sales_pipe"]) ? "checked='checked'" : ""?> autocomplete="off"/>
    <label for="crm_flow"><?php _e("Enable", 'contact-form-hubspot-crm'); ?></label>
  </div>
<div class="clear"></div>
</div>
    <div id="crm_flow1_div" style="<?php echo empty($meta["add_sales_pipe"]) ? "display:none" : ""?>">

  <div class="vx_row">
  <div class="vx_col1">
  <label><?php _e('Pipelines ','contact-form-hubspot-crm'); ?></label>
  </div>
  <div class="vx_col2">
  <button class="button vx_refresh_data" data-id="refresh_sales_pipes" type="button" autocomplete="off" style="vertical-align: baseline;">
  <span class="reg_ok"><i class="fa fa-refresh"></i> <?php _e('Refresh Data','contact-form-hubspot-crm') ?></span>
  <span class="reg_proc"><i class="fa fa-refresh fa-spin"></i> <?php _e('Refreshing...','contact-form-hubspot-crm') ?></span>
  </button>
  </div> 
   <div class="clear"></div>
  </div> 
  <div class="vx_row">
   <div class="vx_col1">
  <label for="crm_sel_flow"><?php _e('Select Pipeline ','contact-form-hubspot-crm'); ?></label>
</div> <div class="vx_col2">
  <select id="crm_sel_pipe" name="meta[sales_pipe]" style="width: 100%;" autocomplete="off">
  <?php echo $this->gen_select($pipes,$meta['sales_pipe'],__('Select Pipeline','contact-form-hubspot-crm')); ?>
  </select>

  </div>
   <div class="clear"></div>
   </div>

  
  </div>
  

  </div>
  </div>
<?php }
 ?>


  <div class="button-controls submit" style="padding-left: 5px;">
  <input type="hidden" name="form_id" value="<?php echo $form_id ?>">
  <button type="submit" title="<?php _e('Save Feed','contact-form-hubspot-crm'); ?>" name="<?php echo $this->id ?>_submit" class="button button-primary button-hero"> <i class="vx_icons vx vx-arrow-50"></i> <?php echo empty($fid) ? __("Save Feed", 'contact-form-hubspot-crm') : __("Update Feed", 'contact-form-hubspot-crm'); ?> </button>
  </div>

  
  <?php 
do_action('vx_plugin_upgrade_notice_plugin_'.$this->type);
?>

