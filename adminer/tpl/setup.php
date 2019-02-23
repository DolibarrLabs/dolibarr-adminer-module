<?php

global $langs, $dolibarr_main_db_host, $dolibarr_main_db_user, $dolibarr_main_db_pass, $dolibarr_main_db_name;

?>

<table class="noborder allwidth">
	<tr>
		<td width="70%"><?php echo $langs->trans('Server'); ?></td>
		<td align="right"></td>
		<td align="center"><input type="text" value="<?php echo $dolibarr_main_db_host; ?>" readonly/></td>
	</tr>
	<tr>
		<td width="70%"><?php echo $langs->trans('Username'); ?></td>
		<td align="right"></td>
		<td align="center"><input type="text" value="<?php echo $dolibarr_main_db_user; ?>" readonly/></td>
	</tr>
	<tr>
		<td width="70%"><?php echo $langs->trans('Password'); ?></td>
		<td align="right" width="10%"><a href="#" id="show_password"><?php echo $langs->trans('ShowPassword'); ?></a></td>
		<td align="center"><input type="password" value="<?php echo $dolibarr_main_db_pass; ?>" readonly/></td>
	</tr>
	<tr>
		<td width="70%"><?php echo $langs->trans('Database'); ?></td>
		<td align="right"></td>
		<td align="center"><input type="text" value="<?php echo $dolibarr_main_db_name; ?>" readonly/></td>
	</tr>
</table>
