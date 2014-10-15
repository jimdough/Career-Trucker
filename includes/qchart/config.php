<?php

return array(

	'CDLLen' => array('text' => 'Have you had your CDL for more than 3 months?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'N'
	),
	
	'DrugTest' => array('text' => 'Have you ever failed or refused a drug or alcohol test?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y'
	),
	
	'DrvWhen' => array('text' => 'Have you driven a semi-trailer truck in the last 12 months?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'N'
	),
	
	'Fired' => array('text' => 'Were you terminated from your last driving job?',
		'type' => 'radio',
		'required' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'show' => array('Y', 'FiredWhy')
	),
	
	'FiredWhy' => array('text' => 'Why were you terminated? Check any that apply',
		'type' => 'checkbox',
		'required' => array('Fired' => 'Y'),
		'hide' => true,
		'fail' => array('AL','PV','DA','UL'),
		'options' => array(
			'AL' => 'Abandonment of load',
			'PV' => 'Company policy violation',
			'DA' => 'Driving Accident',
			'UL' => 'Unauthorized location without notice',
			'NA' => 'None of the above'
		)
	),
	
	'Felony' => array('text' => 'Have you ever been convicted of a felony?',
		'type' => 'radio',
		'required' => true,
		'show' => array('Y', 'FelQual'),
		'options' => array('Y' => 'Yes', 'N' => 'No')
	),
	
	'FelQual' => array('text' => 'Check any that apply to your felony conviction(s):',
		'type' => 'radio',
		'required' => array('Felony' => 'Y'),
		'hide' => true,
		'fail' => array('M2', 'DS', 'TH', 'DA'),
		'options' => 	array(
			'M2' => 'You\'ve had more than 2 felony convictions',
			'DS' => 'One or more felonies were for drugs or sexual offenses',
			'TH' => 'One or more felonies involved grand theft or auto theft or armed robbery',
			'DA' => 'It\'s been less than 10 years since the sentencing and probation ended for any felony',
			'NA' => 'None of the above'
		)
	),
	
	'Misdemeanor' => array('text' => 'Have you ever been convicted of a misdemeanor?',
		'type' => 'radio',
		'required' => true,
		'show' => array('Y', array('MisdDrug','MisdMTrp')),
		'options' => array('Y' => 'Yes', 'N' => 'No'),
	),
	
	'MisdDrug' => array('text' => 'Have you been convicted of a drug related misdemeanor in the last 5 years?',
		'type' => 'radio',
		'required' => array('Misdemeanor' => 'Y'),
		'hide' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y',
	),
	
	'MisdMTrp' => array('text' => 'Have you been convicted of a crime against another person, or theft in the last 3 years?',
		'type' => 'radio',
		'required' => array('Misdemeanor' => 'Y'),
		'hide' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y',
	),
	
	'DUI' => array('text' => 'Have you ever had a DUI, DWI or any alcohol related traffic violation?',
		'type' => 'radio',
		'required' => true,
		'show' => array('Y', 'DUIQual'),
		'options' => array('Y' => 'Yes', 'N' => 'No'),
	),
	
	'DUIQual' => array('text' => 'How many alcohol related traffic violations and how long ago?',
		'type' => 'radio',
		'required' => array('DUI' => 'Y'),
		'hide' => true,
		'options' => 	array(
			'D1' => 'At least 1 within the past 5 years',
			'CV' => 'At least 1 that was in a commercial motor vehicle',
			'D2' => 'Exactly 2 within the past 15 years',
			'D3' => '3 or more in your lifetime',
			'NA' => 'None of the above',
		),
		'fail' => array('D1', 'CV', 'D2', 'D3'),
	),
	
	'MovViol' => array('text' => 'Do you have any moving violations on your driving record?',
		'type' => 'radio',
		'required' => true,
		'show' => array('Y', array('MovVSPLC','MovVCRL5','MovVAAL5')),
		'options' => array('Y' => 'Yes', 'N' => 'No'),
	),
	
	'MovVSPLC' => array('text' => 'Have you had more than 3 violations for speeding, running stop signs/lights, or improper lane changing?',
		'type' => 'radio',
		'required' => array('MovViol' => 'Y'),
		'hide' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y'
	),
	
	'MovVCRL5' => array('text' => 'Have you had any violations for careless or reckless driving in the last 5 years?',
		'type' => 'radio',
		'required' => array('MovViol' => 'Y'),
		'hide' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y'
	),
	
	'MovVAAL5' => array('text' => 'Have you had any at fault accidents in the last 3 years?',
		'type' => 'radio',
		'required' => array('MovViol' => 'Y'),
		'hide' => true,
		'options' => array('Y' => 'Yes', 'N' => 'No'),
		'fail' => 'Y'
	),
);

?>
