<?php

	//application details
		$apps[$x]['name'] = "Destinations";
		$apps[$x]['uuid'] = "5ec89622-b19c-3559-64f0-afde802ab139";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Used to define external destination numbers.";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Wird verwendet um externe Ziele zu definieren.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Wird verwendet um externe Ziele zu definieren.";
		$apps[$x]['description']['es-cl'] = "Utilizado para definir números de destino externos.";
		$apps[$x]['description']['es-mx'] = "Utilizado para definir numeros destinos externos.";
		$apps[$x]['description']['fr-ca'] = "Usé pour définir cibler nombres externe.";
		$apps[$x]['description']['fr-fr'] = "Défini les numéros externes.";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "Utilizado para definir os números de destino externos.";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//destination details
		$y=0;
		$apps[$x]['destinations'][$y]['type'] = "sql";
		$apps[$x]['destinations'][$y]['label'] = "destinations";
		$apps[$x]['destinations'][$y]['name'] = "destinations";
		$apps[$x]['destinations'][$y]['sql'] = "select destination_number as destination, destination_context as context, destination_description as description from v_destinations ";
		$apps[$x]['destinations'][$y]['where'] = "where (domain_uuid = '\${domain_uuid}' or domain_uuid is null) and (destination_type = 'outbound' or destination_type = 'local') and destination_enabled = 'true' ";
		$apps[$x]['destinations'][$y]['order_by'] = "destination_number asc";
		$apps[$x]['destinations'][$y]['field']['uuid'] = "destination_uuid";
		$apps[$x]['destinations'][$y]['field']['context'] = "destination_context";
		$apps[$x]['destinations'][$y]['field']['destination'] = "destination_number";
		$apps[$x]['destinations'][$y]['field']['description'] = "destination_description";
		$apps[$x]['destinations'][$y]['select_value']['dialplan'] = "transfer:\${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_value']['ivr'] = "menu-exec-app:transfer \${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_label'] = "\${destination} \${description}";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "destination_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "fd2a708a-ff03-c707-c19d-5a4194375eba";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_upload";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_import";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_domain";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_all";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_record";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_context";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_fax";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_caller_id_name";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "destination_caller_id_number";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";

	//default settings
		$y = 0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "70d8538a-89ab-4db6-87b1-f5e447680283";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "limit";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "destinations";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "911412de-e0a6-49db-a3c8-65f05c9d847f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "destinations";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dialplan_details";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_destinations";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_dialplans";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "dialplan_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "fax_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_fax";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "fax_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "destination_type";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "destination_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select the type.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "destination_number";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "destination_extension";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the number.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_number_regex";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Regular Expression version of destination number";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_caller_id_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the caller id name.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_caller_id_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the caller id number.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_cid_name_prefix";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the caller id name prefix.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_context";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the context.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_record";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select whether to record the call.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_accountcode";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the accountcode.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_app";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the application.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_data";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the data.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_alternate_app";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the alternate application.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_alternate_data";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the alternate data.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "destination_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the description.";

?>
