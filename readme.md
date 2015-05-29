To Start using it add to composer.json repozitory

    "repositories": [
      {
      "type": "git",
       "url": "git@github.com:shivergard/developer.git"
      }
    ],

and add requirements

	"require": {
		...
        "shivergard/developer" : "dev-master"
    },

and add service provider

		'providers' => [
		...
			'Shivergard\Developer\DeveloperServiceProvider',
		...