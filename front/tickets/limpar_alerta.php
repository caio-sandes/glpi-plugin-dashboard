<?php
// Apaga o arquivo-flag após o alerta ser processado na TV
@unlink(__DIR__ . '/../sounds/alert.flag');
http_response_code(200);