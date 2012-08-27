<?php
	include_once ('inc/crm/header.php');
	include_once("general/CRM/module/T_contract/EditView/group.function.php");
	include_once("general/CRM/module/T_contract/EditView/updateFunction.php");
	include_once($CRM_CONTEXT_PATH."/utils/work_flow/plugin/flow30.php");//游学合同签约
	//include_once($CRM_CONTEXT_PATH."/utils/work_flow/plugin/flow34.php");
		//include_once($CRM_CONTEXT_PATH."/utils/work_flow/plugin/flow31.php");//线路审核新添
	include_once("general/CRM/utils/work_flow/flow_info.php");
	include_once("general/CRM/utils/work_flow/flow_engine.php");
	include_once("general/CRM/utils/work_flow/flow_org.php");
	
	
	changeGroupInfoByContract_AID(16622, 866);
	
	//include_once("inc/utility_sms1.php");
	//$RUN_ID = 53622;
	//$FLOW_ID = 30;

	//$FLOW_PRCS = 5;
	//$PRCS_ID = 5;
	//$CUR_TIME = date("Y-m-d H:i:s",time());
	//$NEXT_CREATE_TIME = date('Y-m-d H:i:s',strtotime("+3 seconds", strtotime($CUR_TIME)));
	//CREATE_FLOW_RUN_NEXT_PRCS($FLOW_ID, $RUN_ID, $PRCS_ID, $FLOW_PRCS, $NEXT_CREATE_TIME);//创建下一个流程步骤

	//线路价格审核
	//PASS_LINES_AUDIT($RUN_ID, $FLOW_ID);
	/*******通过 合同***********/
	//FINANCE_AUDIT_END($RUN_ID, $FLOW_ID);

	/****作废合同***********/
	 //CONTRACT_WASTE($RUN_ID, $FLOW_ID);
	 echo "first ";
?>
