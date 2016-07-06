<?php

return [

	'providers' => append_config([
			RabbitMQ\LaravelQueueRabbitMQ\LaravelQueueRabbitMQServiceProvider::class,
	]),

];