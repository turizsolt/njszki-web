<html>
	<head>
		<title>Add news</title>
		<link href="<?=base_url()?>css/news.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<?php

			echo form_open(base_url().'index.php/news/add-submit');

			echo form_label('Text');
			echo form_input(array('id' => 'text', 'name' => 'text'));

			echo form_submit(array('value' => 'Add!'));

			echo form_close();
		?>
	</body>
</html>
