<?php
/*
 * Admin Vhost interface.
 *
 * @author "Emiliano Gabrielli" <emiliano.gabrielli@gmail.com>
 */

require __DIR__.'/config.inc.php';

$tools = array_map(
    function ($dir) {
        return substr($dir, strlen(ROOT_DIR) + 1 /* slash */);
    },
    array_merge(glob(TOOLS_DIR.'/*', GLOB_ONLYDIR), glob(TOOLS_DIR.'/*.php'))
);
natcasesort($tools);
?>
<html>
<head>
    <title><?php echo getenv('HOSTNAME') ?> admin console</title>
    <style>
        * { margin:0; padding:0 }
        html, body { font-size:0.9em }
        h1 { text-align:center; font-size:1.1em; color:#444; padding:0.3em 0 0.1em 0 }
        ul { list-style-type:none; padding:0 1em; margin-bottom:2px }
        li { display:inline-block; margin-left:10px; padding-left:10px; border-left:1px #e55 dotted; white-space:nowrap }
        li:first-child { border-left:0; margin-left:0; padding-left:0 }
        a { text-decoration:none; font-weight:bold; color:#449 }
        a:hover { background: rgba(255,255,255, 0.2) }
        #header { border-bottom:1px solid #e55; background:lightblue; margin-bottom:4px; -webkit-box-shadow:0 2px 2px -1px #444; -moz-box-shadow:0 2px 2px -1px #444; box-shadow:0 2px 2px -1px #444;}
        #appframe { border:0; height:0; width:100%; }
        .server-name { color:#e55; font-family:monospace; font-size:1.25em }
    </style>
    <script language="javascript" type="text/javascript">
        function resizeIframe(obj) {
            obj.style.height = 0 + 'px';
            obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
        }
    </script>
</head>
<body>
    <div id="header">
        <h1><span class="server-name"><?php echo getenv('HOSTNAME') ?></span> admin console</h1>
        <ul>
            <?php foreach ($tools as $tool): ?>
            <li><a href="<?php echo $tool ?>" onclick="document.getElementById('appframe').src='<?php echo $tool ?>'; return false;"><?php echo strtr(basename($tool, '.php'), '_', ' ') ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <iframe id="appframe" src="" frameborder="0" scrolling="auto" onload="resizeIframe(this);"></iframe>
</body>
</html>
