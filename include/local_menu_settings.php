<?php
$tdatalocal_menu = array();
$tdatalocal_menu[".searchableFields"] = array();
$tdatalocal_menu[".ShortName"] = "local_menu";
$tdatalocal_menu[".OwnerID"] = "";
$tdatalocal_menu[".OriginalTable"] = "local_menu";


$tdatalocal_menu[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalocal_menu[".originalPagesByType"] = $tdatalocal_menu[".pagesByType"];
$tdatalocal_menu[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalocal_menu[".originalPages"] = $tdatalocal_menu[".pages"];
$tdatalocal_menu[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalocal_menu[".originalDefaultPages"] = $tdatalocal_menu[".defaultPages"];

//	field labels
$fieldLabelslocal_menu = array();
$fieldToolTipslocal_menu = array();
$pageTitleslocal_menu = array();
$placeHolderslocal_menu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslocal_menu["Spanish"] = array();
	$fieldToolTipslocal_menu["Spanish"] = array();
	$placeHolderslocal_menu["Spanish"] = array();
	$pageTitleslocal_menu["Spanish"] = array();
	$fieldLabelslocal_menu["Spanish"]["Idmenu"] = "Idmenu";
	$fieldToolTipslocal_menu["Spanish"]["Idmenu"] = "";
	$placeHolderslocal_menu["Spanish"]["Idmenu"] = "";
	$fieldLabelslocal_menu["Spanish"]["menu_name"] = "Título";
	$fieldToolTipslocal_menu["Spanish"]["menu_name"] = "";
	$placeHolderslocal_menu["Spanish"]["menu_name"] = "";
	$fieldLabelslocal_menu["Spanish"]["menu_status"] = "Estado";
	$fieldToolTipslocal_menu["Spanish"]["menu_status"] = "";
	$placeHolderslocal_menu["Spanish"]["menu_status"] = "";
	$fieldLabelslocal_menu["Spanish"]["menu_link"] = "Enlace";
	$fieldToolTipslocal_menu["Spanish"]["menu_link"] = "";
	$placeHolderslocal_menu["Spanish"]["menu_link"] = "";
	$fieldLabelslocal_menu["Spanish"]["menu_ubica"] = "Menu Ubica";
	$fieldToolTipslocal_menu["Spanish"]["menu_ubica"] = "";
	$placeHolderslocal_menu["Spanish"]["menu_ubica"] = "";
	$fieldLabelslocal_menu["Spanish"]["menu_rol"] = "Menu Rol";
	$fieldToolTipslocal_menu["Spanish"]["menu_rol"] = "";
	$placeHolderslocal_menu["Spanish"]["menu_rol"] = "";
	$fieldLabelslocal_menu["Spanish"]["menu_img"] = "Imagen";
	$fieldToolTipslocal_menu["Spanish"]["menu_img"] = "";
	$placeHolderslocal_menu["Spanish"]["menu_img"] = "";
	$fieldLabelslocal_menu["Spanish"]["menu_desc"] = "Descripción";
	$fieldToolTipslocal_menu["Spanish"]["menu_desc"] = "";
	$placeHolderslocal_menu["Spanish"]["menu_desc"] = "";
	$fieldLabelslocal_menu["Spanish"]["order"] = "Order";
	$fieldToolTipslocal_menu["Spanish"]["order"] = "";
	$placeHolderslocal_menu["Spanish"]["order"] = "";
	if (count($fieldToolTipslocal_menu["Spanish"]))
		$tdatalocal_menu[".isUseToolTips"] = true;
}


	$tdatalocal_menu[".NCSearch"] = true;



$tdatalocal_menu[".shortTableName"] = "local_menu";
$tdatalocal_menu[".nSecOptions"] = 0;

$tdatalocal_menu[".mainTableOwnerID"] = "";
$tdatalocal_menu[".entityType"] = 0;
$tdatalocal_menu[".connId"] = "dbusers_at_127_0_0_1";


$tdatalocal_menu[".strOriginalTableName"] = "local_menu";

	



$tdatalocal_menu[".showAddInPopup"] = false;

$tdatalocal_menu[".showEditInPopup"] = false;

$tdatalocal_menu[".showViewInPopup"] = false;

$tdatalocal_menu[".listAjax"] = false;
//	temporary
//$tdatalocal_menu[".listAjax"] = false;

	$tdatalocal_menu[".audit"] = false;

	$tdatalocal_menu[".locking"] = false;


$pages = $tdatalocal_menu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalocal_menu[".edit"] = true;
	$tdatalocal_menu[".afterEditAction"] = 1;
	$tdatalocal_menu[".closePopupAfterEdit"] = 1;
	$tdatalocal_menu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalocal_menu[".add"] = true;
$tdatalocal_menu[".afterAddAction"] = 1;
$tdatalocal_menu[".closePopupAfterAdd"] = 1;
$tdatalocal_menu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalocal_menu[".list"] = true;
}



$tdatalocal_menu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalocal_menu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalocal_menu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalocal_menu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalocal_menu[".printFriendly"] = true;
}



$tdatalocal_menu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalocal_menu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalocal_menu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalocal_menu[".isUseAjaxSuggest"] = true;





$tdatalocal_menu[".ajaxCodeSnippetAdded"] = false;

$tdatalocal_menu[".buttonsAdded"] = false;

$tdatalocal_menu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalocal_menu[".isUseTimeForSearch"] = false;


$tdatalocal_menu[".badgeColor"] = "D2691E";


$tdatalocal_menu[".allSearchFields"] = array();
$tdatalocal_menu[".filterFields"] = array();
$tdatalocal_menu[".requiredSearchFields"] = array();

$tdatalocal_menu[".googleLikeFields"] = array();
$tdatalocal_menu[".googleLikeFields"][] = "Idmenu";
$tdatalocal_menu[".googleLikeFields"][] = "menu_name";
$tdatalocal_menu[".googleLikeFields"][] = "menu_status";
$tdatalocal_menu[".googleLikeFields"][] = "menu_link";
$tdatalocal_menu[".googleLikeFields"][] = "menu_ubica";
$tdatalocal_menu[".googleLikeFields"][] = "menu_rol";
$tdatalocal_menu[".googleLikeFields"][] = "menu_img";
$tdatalocal_menu[".googleLikeFields"][] = "menu_desc";



$tdatalocal_menu[".tableType"] = "list";

$tdatalocal_menu[".printerPageOrientation"] = 0;
$tdatalocal_menu[".nPrinterPageScale"] = 100;

$tdatalocal_menu[".nPrinterSplitRecords"] = 40;

$tdatalocal_menu[".geocodingEnabled"] = false;










$tdatalocal_menu[".pageSize"] = 20;

$tdatalocal_menu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalocal_menu[".strOrderBy"] = $tstrOrderBy;

$tdatalocal_menu[".orderindexes"] = array();


$tdatalocal_menu[".sqlHead"] = "SELECT Idmenu,  menu_name,  menu_status,  menu_link,  menu_ubica,  menu_rol,  menu_img,  menu_desc,  `order`";
$tdatalocal_menu[".sqlFrom"] = "FROM local_menu";
$tdatalocal_menu[".sqlWhereExpr"] = "";
$tdatalocal_menu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalocal_menu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalocal_menu[".arrGroupsPerPage"] = $arrGPP;

$tdatalocal_menu[".highlightSearchResults"] = true;

$tableKeyslocal_menu = array();
$tableKeyslocal_menu[] = "Idmenu";
$tdatalocal_menu[".Keys"] = $tableKeyslocal_menu;


$tdatalocal_menu[".hideMobileList"] = array();




//	Idmenu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Idmenu";
	$fdata["GoodName"] = "Idmenu";
	$fdata["ownerTable"] = "local_menu";
	$fdata["Label"] = GetFieldLabel("local_menu","Idmenu");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Idmenu";

		$fdata["sourceSingle"] = "Idmenu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Idmenu";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocal_menu["Idmenu"] = $fdata;
		$tdatalocal_menu[".searchableFields"][] = "Idmenu";
//	menu_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "menu_name";
	$fdata["GoodName"] = "menu_name";
	$fdata["ownerTable"] = "local_menu";
	$fdata["Label"] = GetFieldLabel("local_menu","menu_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "menu_name";

		$fdata["sourceSingle"] = "menu_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menu_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocal_menu["menu_name"] = $fdata;
		$tdatalocal_menu[".searchableFields"][] = "menu_name";
//	menu_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "menu_status";
	$fdata["GoodName"] = "menu_status";
	$fdata["ownerTable"] = "local_menu";
	$fdata["Label"] = GetFieldLabel("local_menu","menu_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "menu_status";

		$fdata["sourceSingle"] = "menu_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menu_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_status";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "status_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocal_menu["menu_status"] = $fdata;
		$tdatalocal_menu[".searchableFields"][] = "menu_status";
//	menu_link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "menu_link";
	$fdata["GoodName"] = "menu_link";
	$fdata["ownerTable"] = "local_menu";
	$fdata["Label"] = GetFieldLabel("local_menu","menu_link");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "menu_link";

		$fdata["sourceSingle"] = "menu_link";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menu_link";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Ingresar";
	$vdata["hlTitleField"] = "menu_link";

	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "url";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=250";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocal_menu["menu_link"] = $fdata;
		$tdatalocal_menu[".searchableFields"][] = "menu_link";
//	menu_ubica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "menu_ubica";
	$fdata["GoodName"] = "menu_ubica";
	$fdata["ownerTable"] = "local_menu";
	$fdata["Label"] = GetFieldLabel("local_menu","menu_ubica");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "menu_ubica";

		$fdata["sourceSingle"] = "menu_ubica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menu_ubica";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocal_menu["menu_ubica"] = $fdata;
		$tdatalocal_menu[".searchableFields"][] = "menu_ubica";
//	menu_rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "menu_rol";
	$fdata["GoodName"] = "menu_rol";
	$fdata["ownerTable"] = "local_menu";
	$fdata["Label"] = GetFieldLabel("local_menu","menu_rol");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "menu_rol";

		$fdata["sourceSingle"] = "menu_rol";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menu_rol";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocal_menu["menu_rol"] = $fdata;
		$tdatalocal_menu[".searchableFields"][] = "menu_rol";
//	menu_img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "menu_img";
	$fdata["GoodName"] = "menu_img";
	$fdata["ownerTable"] = "local_menu";
	$fdata["Label"] = GetFieldLabel("local_menu","menu_img");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "menu_img";

		$fdata["sourceSingle"] = "menu_img";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menu_img";

	
	
				$fdata["UploadFolder"] = "imgmenu";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 250;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

		
	$vdata["imageBorder"] = 0;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("png");
						$edata["acceptFileTypesHtml"] = ".png";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocal_menu["menu_img"] = $fdata;
		$tdatalocal_menu[".searchableFields"][] = "menu_img";
//	menu_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "menu_desc";
	$fdata["GoodName"] = "menu_desc";
	$fdata["ownerTable"] = "local_menu";
	$fdata["Label"] = GetFieldLabel("local_menu","menu_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "menu_desc";

		$fdata["sourceSingle"] = "menu_desc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "menu_desc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 200;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocal_menu["menu_desc"] = $fdata;
		$tdatalocal_menu[".searchableFields"][] = "menu_desc";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "local_menu";
	$fdata["Label"] = GetFieldLabel("local_menu","order");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "order";

		$fdata["sourceSingle"] = "order";

	
		$fdata["FullName"] = "order";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocal_menu["order"] = $fdata;
		$tdatalocal_menu[".searchableFields"][] = "order";


$tables_data["local_menu"]=&$tdatalocal_menu;
$field_labels["local_menu"] = &$fieldLabelslocal_menu;
$fieldToolTips["local_menu"] = &$fieldToolTipslocal_menu;
$placeHolders["local_menu"] = &$placeHolderslocal_menu;
$page_titles["local_menu"] = &$pageTitleslocal_menu;


changeTextControlsToDate( "local_menu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["local_menu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["local_menu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_local_menu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Idmenu,  menu_name,  menu_status,  menu_link,  menu_ubica,  menu_rol,  menu_img,  menu_desc,  `order`";
$proto0["m_strFrom"] = "FROM local_menu";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Idmenu",
	"m_strTable" => "local_menu",
	"m_srcTableName" => "local_menu"
));

$proto6["m_sql"] = "Idmenu";
$proto6["m_srcTableName"] = "local_menu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "menu_name",
	"m_strTable" => "local_menu",
	"m_srcTableName" => "local_menu"
));

$proto8["m_sql"] = "menu_name";
$proto8["m_srcTableName"] = "local_menu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "menu_status",
	"m_strTable" => "local_menu",
	"m_srcTableName" => "local_menu"
));

$proto10["m_sql"] = "menu_status";
$proto10["m_srcTableName"] = "local_menu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "menu_link",
	"m_strTable" => "local_menu",
	"m_srcTableName" => "local_menu"
));

$proto12["m_sql"] = "menu_link";
$proto12["m_srcTableName"] = "local_menu";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "menu_ubica",
	"m_strTable" => "local_menu",
	"m_srcTableName" => "local_menu"
));

$proto14["m_sql"] = "menu_ubica";
$proto14["m_srcTableName"] = "local_menu";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "menu_rol",
	"m_strTable" => "local_menu",
	"m_srcTableName" => "local_menu"
));

$proto16["m_sql"] = "menu_rol";
$proto16["m_srcTableName"] = "local_menu";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "menu_img",
	"m_strTable" => "local_menu",
	"m_srcTableName" => "local_menu"
));

$proto18["m_sql"] = "menu_img";
$proto18["m_srcTableName"] = "local_menu";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "menu_desc",
	"m_strTable" => "local_menu",
	"m_srcTableName" => "local_menu"
));

$proto20["m_sql"] = "menu_desc";
$proto20["m_srcTableName"] = "local_menu";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "local_menu",
	"m_srcTableName" => "local_menu"
));

$proto22["m_sql"] = "`order`";
$proto22["m_srcTableName"] = "local_menu";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "local_menu";
$proto25["m_srcTableName"] = "local_menu";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "Idmenu";
$proto25["m_columns"][] = "menu_name";
$proto25["m_columns"][] = "menu_status";
$proto25["m_columns"][] = "menu_link";
$proto25["m_columns"][] = "menu_ubica";
$proto25["m_columns"][] = "menu_rol";
$proto25["m_columns"][] = "menu_img";
$proto25["m_columns"][] = "menu_desc";
$proto25["m_columns"][] = "order";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "local_menu";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "local_menu";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="local_menu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_local_menu = createSqlQuery_local_menu();


	
		;

									

$tdatalocal_menu[".sqlquery"] = $queryData_local_menu;



$tdatalocal_menu[".hasEvents"] = false;

?>