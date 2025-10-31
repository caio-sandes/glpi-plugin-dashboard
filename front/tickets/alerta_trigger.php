<?php
// Cria ou atualiza o arquivo-flag para o alerta
file_put_contents(__DIR__ . '/../sounds/alert.flag', time());
http_response_code(200);