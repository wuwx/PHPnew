<?php
/* Smarty version 3.1.30, created on 2017-04-11 22:06:04
  from "/var/www/html/Plantform/application/views/course/showAllCourse.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ece2ccbde8c7_19593201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df0d00b336716331f46f99139284cf0ff8d8ee77' => 
    array (
      0 => '/var/www/html/Plantform/application/views/course/showAllCourse.php',
      1 => 1491919556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ece2ccbde8c7_19593201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189266830658ece2ccbd1327_00507465', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55618242258ece2ccbddcd4_98883692', 'body');
}
/* {block 'head'} */
class Block_189266830658ece2ccbd1327_00507465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css" media="screen">
	*{
		margin: 0;
		padding: 0;
	}
	div{
		/*border: 1px solid #ccc;*/
	}
	.block{
		
		height: 250px;
		padding: 2%;
		text-align:center;
		background-color: #fff;
		z-index: 100;
	}
	.inner{
		width:100%;
		height:100%; 
		border: 1px solid #ddd;
		box-shadow: 0px 0px 5px #ccc;
		
	}
	.inner:hover{
		box-shadow: 0px 0px 10px #ccc;
	}
	.image{
		position: relative;
		box-shadow: 0px 0px 10px #ccc;
		height: 55%;
		width: 100%;
		margin:0 auto;
	}
	img{
		height: 100%;
		width: 100%;
	}
	.name{
		margin:0 auto;
		text-align:center;
		position: relative;
		top:10px;	
		text-shadow: 0px 0px 2px #ccc;
		font-weight: bold;
		font-size: 20px;
	}
	.introduction{
		margin:0 auto;
		text-align:center;
		position: relative;
		top:12px;	
		overflow-y:hidden; 
		/*display: none;*/
		height:45%;
		width: 90%;
	}
	.text{
		/*background-color: #fff;*/
		height: 60%;
		z-index: 0;
	}
	
	.teacher{
		margin:0 auto;
		text-align:center;
		position: absolute;
		bottom:15px;
		right:20px;
		
		display: none;
	}
	/*.cover{
		position: absolute;
		bottom: 6%;
		width: 95.8%;
		height:24%;
		background-color: #fff;
		z-index: 1000;
		/*display: none;*/
	}*/
</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_55618242258ece2ccbddcd4_98883692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['course_info']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
							<div class="col-md-4 block" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/course/<?php echo $_smarty_tpl->tpl_vars['value']->value['course_id'];?>
'">
								<div class="inner">
									<div class="image">
										<img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img_path'];?>
" alt="" width="100%" height="100%">
									</div>
									<div class="text">
										<div class="name">
											<?php echo $_smarty_tpl->tpl_vars['value']->value['course_name'];?>

										</div>
										<div class="introduction">
											<?php echo $_smarty_tpl->tpl_vars['value']->value['course_introduction'];?>

										</div>
									</div>
									<div class="teacher">
										教师：<?php echo $_smarty_tpl->tpl_vars['value']->value['teacher_name'];?>

									</div>
									<div class="cover">
									</div>
								</div>	
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	
<?php
}
}
/* {/block 'body'} */
}
