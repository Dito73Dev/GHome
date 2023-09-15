<?php

	// create menu nodes arr
	$menuNodes = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "Athena";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "local_menu";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-link";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Athena";



	$menuNodes[] = $menuNode;
	$menuNodesCache[ "main" ] = $menuNodes;
?>