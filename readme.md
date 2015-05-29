To Start using it add to composer.json repozitory

    "repositories": [
      {
      "type": "git",
       "url": "git@github.com:shivergard/developer.git"
      },
      {
      "type": "git",
       "url": "git@github.com:shivergard/crud.git"
      }
    ],

and add requirements

	"require": {
		...
        "shivergard/crud" : "dev-master" ,
        "shivergard/developer" : "dev-master"
    },

and add service provider

		'providers' => [
		...
      'Shivergard\Crud\CrudServiceProvider',
			'Shivergard\Developer\DeveloperServiceProvider',
		...