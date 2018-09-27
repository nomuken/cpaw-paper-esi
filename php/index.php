<?php   header('X-Esi: 1'); ?>
<html>
<body>
Echo: <?=$_GET['e']?>
<code>
<pre><?=htmlspecialchars($_GET['e'])?></pre>
</code>
</body>
</html>
