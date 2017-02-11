<?php
include_once 'konek.php';
	if (isset($_GET['delete_id'])){
		$sql_query="DELETE FROM mhs WHERE no=".$GET['delete_id'];
		mysql_query($sql_query);
		header("Location:$_SERVER[PHP_SELF]");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operasi CRUD</title>
<style>
div.container {
	width:100px;
	border: 1px solid gray;
}
header, footer {
	padding: 1em;
	color:#00000;
	background-color:Silver;
	clear:left;
	text-align :center;
}
nav {
	float:left; 
	max-width: 160px;
	margin:0;
	padding:1em;
}
nav ul {
	list-style-type:none;
	padding:0;
}
nav ul a{
	text-decoration:none;
}
artitle {
	margin-left:170px;
	border-left:1px solid gray;
	padding:1em;
	overflow:hidden;
}
</style>

</head>
<body>
<div class="Container">
<header>
	<h1>Operasi CRUD</h1>
</header>

<nav>
	<ul>
		<li><b>MENU</b></li>
		<li><a href="#">Menu 1</a></li>
		<li><a href="#">Menu 2</a></li>
		<li><a href="#">Menu 3</a></li>
	</ul>
</nav>>
<article>
<table border="1" width="75%" align="center">
<tr>
<th><a href="tambah.php"><button type="submit">+ tambah</button></a>
</th>
</tr>
<tr>
	<td>No</td>
	<td>Nama</td>
	<td>Nim</td>
	<td>Alamat</td>
	<td>Aksi</td>
</tr>
<?php
						$sql_query = "SELECT * FROM mhs";
						$result_set = mysql_query($sql_query);
						
						if (mysql_num_rows($result_set) > 0){
							while ($row = mysql_fetch_row($result_set)){
					?>
					<tr>
						<td><?php echo $row[0]; ?></td>
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[2]; ?></td>
						<td><?php echo $row[3]; ?></td>
						<td><a href="javascript:edit_id('<?php echo $row['0']; ?>')">Edit</a>
							<a href="javascript:delete_id('<?php echo $row['0']; ?>')">Delete</a></td>
					</tr>
					<?php
							}
						}
						else {
					?>
					<tr>
						<td colspan="5">Data Tidak Ada</td>
					</tr>
					<?php
						}
					?>
</table>
</article>
<footer>Ade Wahyudin - 14 111 111</footer>
</div>
</body>
</html>
