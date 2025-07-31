<?php

return [
	'seo' => [
		'title'       => 'Contacts of a medical center in Kharkiv OK Center',
		'description' => 'You will find us at Kharkov, Mykoly Khvylyovogo (Mayakovs\'koho) St, 24, tel. (057) 761-61-31 and (093) 761-61-31. Private clinic OK Center in Kharkov',
	],

	'api' => [
		'store' => [
			'fatal_error' => 'Unfortunately, due to an error, we were unable to send your message. Try later.'
		]
	],

	'contact' => [
		'title'       => 'Contact',
		'description' => 'You can contact us in any way which is convenient for you. We are available 24/7 by fax or email. You can also use the quick contact form below or visit our clinic in person. We will be happy to answer your questions.',
		'form'        => [
			'name'      => [
				'label' => 'First Name'
			],
			'surname'   => [
				'label' => 'Last Name'
			],
			'phone'     => [
				'label' => 'Phone number'
			],
			'message'   => [
				'label' => 'Message'
			],
			'agreement' => 'By filling out this form, you agree to the conditions for the processing of your personal data. We guarantee the confidentiality of your data!',
			'send'      => 'Send'
		],
	],
	'blocks'  => [
		'social_networks' => [
			'title' => 'Contacts'
		],
		'address'         => [
			'title'   => 'Address',
			'country' => 'Ukraine',
			'city'    => 'Kharkiv',
			'street'  => 'Mykoly Khvylyovogo (Mayakovs\'koho) St, 24',
            'full_address' => 'Ukraine, Kharkiv, Mykoly Khvylyovogo',
            'only_street' => '(Mayakovs\'koho) St, 24',
		],
		'time_to_work'    => [
			'title' => 'Working hours',
			'value' => 'Mo-Sa: From 9 am till 5 pm'
		],
		'phones'          => [
			'title' => 'Phone',
		],
	]
];
