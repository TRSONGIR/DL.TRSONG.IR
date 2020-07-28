<HTML>
<head>
<title>در حال دانلود...</title>
  <script type="text/javascript">
    (function(){
    var now = new Date();
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.async = true;
    var script_address = 'https://cdn.yektanet.com/js/dl.trsong.ir/native-dl.trsong.ir-11719.js';
    script.src = script_address + '?v=' + now.getFullYear().toString() + '0' + now.getMonth() + '0' + now.getDate() + '0' + now.getHours();
    head.appendChild(script);
    })();
</script>
</head>
<body>
<?php
$googledrive = "https://drive.google.com/uc?export=download&id=";
$googledriveid = $_GET['url'];
?>
<iframe style="display:none" src="<?= $googledrive.$googledriveid ?>"></iframe>
<script> window.onload = function() { document.title = "تبلیغات"; }; </script>
<div id="pos-article-display-10397"></div>
</body>
</HTML>
