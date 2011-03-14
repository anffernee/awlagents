<h1>Update Bulletin Board</h1>
<?php
//echo print_r($results, true);
$userinfo = $session->read('Auth.TransAccount');
echo $form->create(null, array('controller' => 'trans', 'action' => 'addnews'));
?>
<table width="100%">
	<tr>
		<td align="center">
		Bulletin Board
		</td>
		<td>
		<div style="float:left">
		<?php
		echo $form->input('Bulletin.info', array('label' => '', 'rows' => '60', 'cols' => '80'));
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo $form->submit('Update'); ?></td>
	</tr>
</table>
<?php
echo $form->input('Bulletin.id', array('type' => 'hidden'));
echo $form->end();
?>

<script type="text/javascript">
	CKEDITOR.replace('BulletinInfo');
	CKEDITOR.config.height = '500px';
	CKEDITOR.config.width = '850px';
	CKEDITOR.config.resize_maxWidth = '850px';
	CKEDITOR.config.toolbar =
		[
		    ['Source','-','NewPage','Preview','-','Templates'],
		    ['Cut','Copy','Paste','PasteText','PasteFromWord'],
		    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
		    '/',
		    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
		    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
		    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		    ['Link','Unlink','Anchor'],
		    ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
		    '/',
		    ['Styles','Format','Font','FontSize'],
		    ['TextColor','BGColor']
		];
</script>
