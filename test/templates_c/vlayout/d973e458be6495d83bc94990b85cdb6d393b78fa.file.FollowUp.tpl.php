<?php /* Smarty version Smarty-3.1.7, created on 2021-11-01 04:46:20
         compiled from "/srv/http/apache/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Events/uitypes/FollowUp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1344531957617f711c0215d7-22194565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd973e458be6495d83bc94990b85cdb6d393b78fa' => 
    array (
      0 => '/srv/http/apache/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Events/uitypes/FollowUp.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1344531957617f711c0215d7-22194565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_MODEL' => 0,
    'time' => 0,
    'COUNTER' => 0,
    'SHOW_FOLLOW_UP' => 0,
    'MODULE' => 0,
    'FOLLOW_UP_STATUS' => 0,
    'FOLLOW_UP_LABEL' => 0,
    'dateFormat' => 0,
    'FIELD_INFO' => 0,
    'FOLLOW_UP_DATE' => 0,
    'currentDate' => 0,
    'FOLLOW_UP_TIME' => 0,
    'currentTimeInVtigerFormat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_617f711c0cb7e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_617f711c0cb7e')) {function content_617f711c0cb7e($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["dateFormat"] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["currentDate"] = new Smarty_variable(Vtiger_Date_UIType::getDisplayDateValue(''), null, 0);?>
<?php $_smarty_tpl->tpl_vars["time"] = new Smarty_variable(Vtiger_Time_UIType::getDisplayTimeValue(null), null, 0);?>
<?php $_smarty_tpl->tpl_vars["currentTimeInVtigerFormat"] = new Smarty_variable(Vtiger_Time_UIType::getTimeValueInAMorPM($_smarty_tpl->tpl_vars['time']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?>
</tr><tr class="<?php if (!($_smarty_tpl->tpl_vars['SHOW_FOLLOW_UP']->value)){?>hide <?php }?>followUpContainer massEditActiveField">
	<?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(1, null, 0);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?>
<?php }?>
<?php ob_start();?><?php echo vtranslate('LBL_HOLD_FOLLOWUP_ON',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FOLLOW_UP_LABEL'] = new Smarty_variable($_tmp1, null, 0);?>
<td class="fieldLabel">
	<label class="muted pull-right marginRight10px">
		<input name="followup" type="checkbox" class="alignTop" <?php if ($_smarty_tpl->tpl_vars['FOLLOW_UP_STATUS']->value){?> checked<?php }?>/>
		<?php echo $_smarty_tpl->tpl_vars['FOLLOW_UP_LABEL']->value;?>

	</label>	
</td>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FOLLOW_UP_LABEL']->value;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('FIELD_INFO', null, 0);
$_smarty_tpl->tpl_vars['FIELD_INFO']->value['label'] = $_tmp2;?>
<td class="fieldValue">
	<div>
		<div class="input-append row-fluid">
			<div class="span10 row-fluid date">
				<input name="followup_date_start" type="text" class="span9 dateField" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
" type="text"  data-fieldinfo= '<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
'
					   value="<?php if (!empty($_smarty_tpl->tpl_vars['FOLLOW_UP_DATE']->value)){?><?php echo $_smarty_tpl->tpl_vars['FOLLOW_UP_DATE']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['currentDate']->value;?>
<?php }?>" data-validation-engine="validate[funcCall[Vtiger_greaterThanDependentField_Validator_Js.invokeValidation]]" />
				<span class="add-on"><i class="icon-calendar"></i></span>
			</div>	
		</div>		
	</div>
	<div>
		<div class="input-append time">
			<input type="text" name="followup_time_start" class="timepicker-default input-small" 
				   value="<?php if (!empty($_smarty_tpl->tpl_vars['FOLLOW_UP_TIME']->value)){?><?php echo $_smarty_tpl->tpl_vars['FOLLOW_UP_TIME']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['currentTimeInVtigerFormat']->value;?>
<?php }?>" />
			<span class="add-on cursorPointer">
				<i class="icon-time"></i>
			</span>
		</div>	
	</div>
</td>
<td></td><td></td><?php }} ?>