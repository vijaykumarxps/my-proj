//-- all input validation rules and messages --//

$validate =& get_instance();
$validate->form_validation->set_data($options);
if($api)
{
$validate->form_validation->set_rules($validate->commonvalidation->CreateRules(2329,$options,true,true));
}
else
{
$validate->form_validation->set_rules($validate->commonvalidation->CreateRules(2329,$options,true));
}
if ($validate->form_validation->run() === FALSE)
{
$error = $validate->form_validation->error_array();

$result = array( 'code' => 0, 'error' => $error,
'outputs' => array(
'ovar1' => array('value' => 'complete data', 'unit_label' => ''),
'ovar2' => array('value' => 'complete data', 'unit_label' => ''),
'ovar3' => array('value' => 'complete data', 'unit_label' => ''),
'ovar4' => array('value' => 'complete data', 'unit_label' => '')
)
);
return $result;
}
else
{
$error = 'No error';
}




//-- initialize all variables --//

if(isset($options['ivar1'])) { $b4 = $options['ivar1']; } else { $b4 = ''; }
if(isset($options['ivar2'])) { $b5 = $options['ivar2']; } else { $b5 = ''; }
if(isset($options['ivar3'])) { $b6 = $options['ivar3']; } else { $b6 = ''; }
if(isset($options['ivar4'])) { $b7 = $options['ivar4']; } else { $b7 = ''; }
if(isset($options['ivar5'])) { $b8 = $options['ivar5']; } else { $b8 = ''; }
if(isset($options['ivar6'])) { $b9 = $options['ivar6']; } else { $b9 = ''; }
if(isset($options['ivar7'])) { $b10 = $options['ivar7']; } else { $b10 = ''; }
if(isset($options['ivar8'])) { $b11 = $options['ivar8']; } else { $b11 = ''; }
if(isset($options['ivar9'])) { $b12 = $options['ivar9']; } else { $b12 = ''; }

//-- initialize all possible options arrays --//

$bool = array("yes", "no");

//-- data complete ---//

if($error !== "No error"){ $b15 = 'No'; } else { $b15 = 'Yes'; }

//-- evaluation appropriate --//

if($b15 == "No") {
$b16 = "complete data";
} else if($b4 == "yes") {
$b16 = "Yes";
} else {
$b16 = "No";
}

if($b16 == "No") {
$c16 = "Applies to evaluating a patient with COPD.";
 } else {
$c16 = "";
}



//-- output starts --//


//-- ovar3 --//

if(($b5>=3.5 || $b6== "yes") && $b7 == "no")
{
	$e5 = 1;
}
else
{
	$e5 = 0;
}

if ($b15 == "No") {
$b17 = "complete data";
} else {if ($b16 == "No") {
$b17 = "NA";
} else {if ($e5 == 1) {
$b17 = "Yes";
} else {if ($b7 == "yes") {
$b17 = "possibly";
} else {$b17 = "No";
}}}}


//-- ovar4 --//

if ($e5 == 1 && $b8 >= 35 && $b12 < 15) {
$e8 = 1;
} else {$e8 = 0;
}


if(//-- all input validation rules and messages --//

$validate =& get_instance();
$validate->form_validation->set_data($options);
if($api)
{
$validate->form_validation->set_rules($validate->commonvalidation->CreateRules(2329,$options,true,true));
}
else
{
$validate->form_validation->set_rules($validate->commonvalidation->CreateRules(2329,$options,true));
}
if ($validate->form_validation->run() === FALSE)
{
$error = $validate->form_validation->error_array();

$result = array( 'code' => 0, 'error' => $error,
'outputs' => array(
'ovar1' => array('value' => 'complete data', 'unit_label' => ''),
'ovar2' => array('value' => 'complete data', 'unit_label' => ''),
'ovar3' => array('value' => 'complete data', 'unit_label' => ''),
'ovar4' => array('value' => 'complete data', 'unit_label' => '')
)
);
return $result;
}
else
{
$error = 'No error';
}




//-- initialize all variables --//

if(isset($options['ivar1'])) { $b4 = $options['ivar1']; } else { $b4 = ''; }
if(isset($options['ivar2'])) { $b5 = $options['ivar2']; } else { $b5 = ''; }
if(isset($options['ivar3'])) { $b6 = $options['ivar3']; } else { $b6 = ''; }
if(isset($options['ivar4'])) { $b7 = $options['ivar4']; } else { $b7 = ''; }
if(isset($options['ivar5'])) { $b8 = $options['ivar5']; } else { $b8 = ''; }
if(isset($options['ivar6'])) { $b9 = $options['ivar6']; } else { $b9 = ''; }
if(isset($options['ivar7'])) { $b10 = $options['ivar7']; } else { $b10 = ''; }
if(isset($options['ivar8'])) { $b11 = $options['ivar8']; } else { $b11 = ''; }
if(isset($options['ivar9'])) { $b12 = $options['ivar9']; } else { $b12 = ''; }

//-- initialize all possible options arrays --//

$bool = array("yes", "no");

//-- data complete ---//

if($error !== "No error"){ $b15 = 'No'; } else { $b15 = 'Yes'; }

//-- evaluation appropriate --//

if($b15 == "No") {
$b16 = "complete data";
} else if($b4 == "yes") {
$b16 = "Yes";
} else {
$b16 = "No";
}

if($b16 == "No") {
$c16 = "Applies to evaluating a patient with COPD.";
 } else {
$c16 = "";
}



//-- output starts --//


//-- ovar3 --//

if(($b5>=3.5 || $b6== "yes") && $b7 == "no")
{
	$e5 = 1;
}
else
{
	$e5 = 0;
}

if ($b15 == "No") {
$b17 = "complete data";
} else {if ($b16 == "No") {
$b17 = "NA";
} else {if ($e5 == 1) {
$b17 = "Yes";
} else {if ($b7 == "yes") {
$b17 = "possibly";
} else {$b17 = "No";
}}}}


//-- ovar4 --//

if ($e5 == 1 && $b8 >= 35 && $b12 < 15) {
$e8 = 1;
} else {$e8 = 0;
}


if($e5 == 1)
{
if ( ($b8 == 0 || $b10 == 0)) {
$e9 = 0;
} else {
$sum1 = $b9 / $b8;

$sum2 = $b11 / $b10;
if ($e5 == 1 && $b9 >= 35 && $sum1 >= 2 && $sum2 < 2 && $b12 < 15) {
$e9 = 1;
} }
else {$e9 = 0;
}}

$b18a = $e8 + $e9;

if ($b15 == "No") {
$b18 = "complete data";
} else {if ($b16 == "No") {
$b18 = "NA";
} else {if ($e5 == 0) {
$b18 = "No";
} else {if ($b18a >= 1) {
$b18 = "Yes";
} else {$b18 = "No";
}}}}



//-results_array--//

$result = array( "code" => 1, "error" => $error,
"outputs" => array(
'ovar1' => array('value' => $b15, 'unit_label' => ''),
'ovar2' => array('value' => $b16, 'unit_label' => $c16),
'ovar3' => array('value' => $b17, 'unit_label' => ''),
'ovar4' => array('value' => $b18, 'unit_label' => '')
)
);

if($api){
return $validate->form_validation->create_result(2329, $result);
}
else
{
return $result;
}
)
if ( ($b8 == 0 || $b10 == 0)) {
$e9 = 0;
} else {
$sum1 = $b9 / $b8;

$sum2 = $b11 / $b10;
if ($e5 == 1 && $b9 >= 35 && $sum1 >= 2 && $sum2 < 2 && $b12 < 15) {
$e9 = 1;
} else {$e9 = 0;
}}

$b18a = $e8 + $e9;

if ($b15 == "No") {
$b18 = "complete data";
} else {if ($b16 == "No") {
$b18 = "NA";
} else {if ($e5 == 0) {
$b18 = "No";
} else {if ($b18a >= 1) {
$b18 = "Yes";
} else {$b18 = "No";
}}}}



//-results_array--//

$result = array( "code" => 1, "error" => $error,
"outputs" => array(
'ovar1' => array('value' => $b15, 'unit_label' => ''),
'ovar2' => array('value' => $b16, 'unit_label' => $c16),
'ovar3' => array('value' => $b17, 'unit_label' => ''),
'ovar4' => array('value' => $b18, 'unit_label' => '')
)
);

if($api){
return $validate->form_validation->create_result(2329, $result);
}
else
{
return $result;
}
