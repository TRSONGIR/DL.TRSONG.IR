<HTML>
<head>
<title>در حال دانلود...</title>
</head>
<body>
<?php
$googledrive = "https://drive.google.com/uc?export=download&id=";
$googledriveid = $_GET['url'];
?>
<iframe style="display:none" src="<?= $googledrive.$googledriveid ?>"></iframe>
<script> document.title = "تبلیغات"; </script>
</body>
</HTML>
