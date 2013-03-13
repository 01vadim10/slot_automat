<?php

$socket=socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($socket, '127.0.0.1', '1113');
//socket_connect($socket, '46.254.16.221', '1113');
/*$daemon = new socketDaemon();
$daemon->process();
$client = $daemon->create_client('gameServerClient', SERVER_IP, SERVER_PORT); 
$client->on_write('Success!');*/
//socket_send($socket, $package, strLen($package), 0);
/**
 * Посмотреть авторизацию
 */
print '<pre>';
$data = json_encode(
	array(
		'query_id'=>'auth',
		'module'=>'user',
		'action'=>'authorize',
		'params'=>array(
			'sid'=>'8a6ed0b6060fab2aa11ead374b243b73'
		)
	)
);
socket_write($socket, $data."\0");
var_dump(socket_read($socket, 200000));
//sleep(1);
$data = '{
	"query_id":"start_game",
	"module":"game",
	"action":"start",
	"params":{
		"id":1
	}
}';
socket_write($socket, $data."\0");
var_dump(socket_read($socket, 200000));
$data = '{
	"query_id":"denominations",
	"module":"game",
	"action":"getDenominations",
	"params":{
	}
}';
socket_write($socket, $data."\0");
var_dump(socket_read($socket, 200000));
//sleep(1);
for ($i = 1; $i <= 100; $i++)
{
	$data = '{
		"query_id":"spin_'.$i.'",
		"module":"game",
		"action":"spin",
		"params":{
			"bet":1,
			"denomination":0.01,
			"lines":10
		}
	}';
socket_write($socket, $data."\0");
var_dump(socket_read($socket, 200000));
	$data2 = '{
		"query_id":"dual_rate_spin'.$i.'",
		"module":"game",
		"action":"dualratespin",
		"params":{
			"rate":1,
			"expectation":0.01,
			"dual_rate_expectation":0.1
		}
	}';
	
socket_write($socket, $data2."\0");
var_dump(socket_read($socket, 200000));
};
print '</pre>';
/*foreach ($data as $_data)
	socket_write($socket, $_data."\0");*/
