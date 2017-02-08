<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to Reactikle</title>
<link rel="stylesheet" href="/assets/css/style.css">
<script language="javascript" src="/assets/js/main.js"></script>
</head>
<body>
<canvas id=c></canvas>
<div id=stats><span id=score>0</span>/<span id=outOf>0</span></div>
<div id=rules>Click anywhere to make an explosion. If any of the squares will bump into your explosion they'll explode aswell, making a chain reaction. See how many squares you can get! Click again to start a new game</div>

</body>
</html>