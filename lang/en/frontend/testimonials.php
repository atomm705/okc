<?php

return [
	'seo' => [
		'title'       => 'Leave a review about the work of the clinic Dokart. Read real reviews',
		'description' => 'Real reviews about the multidisciplinary medical center in Kharkov on Mayakovsky Street, 24. Reviews about Dokart. Read real reviews about the Dokart clinic in Kharkov',
	],

	'api' => [
		'store' => [
			'fatal_error' => 'Unfortunately, due to an error we were unable to send your message. Please try again later.',
		]
	],

	'title' => 'Reviews',
	'form'  => [
		'title'       => 'Leave us your feedback',
		'name'        => [
			'label' => 'Name',
		],
		'email'       => [
			'label'       => ' E-Mail',
			'description' => 'Your E-Mail will be available only to the staff of the clinic "OK-Center". E-Mail is necessary to respond to your review, as well as to resolve the situation if you are dissatisfied with our work.',
		],
		'text'        => [
			'label'       => 'Review text',
			'placeholder' => 'Write your review here'
		],
		'agreement'   => 'By filling out this form, you agree to the terms of personal data processing. We guarantee the confidentiality of your data!',
		'submit'      => 'Leave feedback',
	],
	'video' => [
		'title'     => 'Video reviews',
		'load_more' => 'Show more',
		'frame'     => [
			'close' => 'Close'
		]
	],
];
