<!DOCTYPE html>
<html>
<head>
	<title>Pagination</title>
	<style type="text/css">
		.link{
			font-size: 22px;
			font-weight: bold;
		}
		li{
			display: inline;
			padding: 2%;
			color: black;
		}
		a,a:visited{
			color: black;
			text-decoration: none;
		}
		li a:active{
			font-size: 30px;
			color: blue;
		}
	</style>
</head>
<body style="text-align:center; padding: 40px">
	<?php  
		try{
			$conn=new PDO('mysql:host=localhost;dbname=pagination;charset=utf8;',"root","");
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			if(isset($_GET['page'])){
				$page=$_GET['page'];
			}
			else{
				$page=1;
			}
			if($page==""||$page==1){
				$page1=0;
			}
			else{
				$page1=($page*10)-10;
			}
			$qry="SELECT * FROM pages ORDER BY id ASC LIMIT ".$page1.",10";
			$stmnt=$conn->prepare($qry);
			$stmnt->execute();
			while($row=$stmnt->fetch()){
				echo $row['name']."<br>";
			}
			$pagQuery="SELECT * FROM pages;";
			$prepPageLink=$conn->prepare($pagQuery);
			$prepPageLink->execute();
			$num=$prepPageLink->fetchAll();
			$enteries=count($num);
			$links=ceil($enteries/10);
			@$currentPage=$_GET['page'];
			if($currentPage>=1&&$currentPage<=4||!isset($currentPage)){
				echo "<ul>";
				if(isset($currentPage)){
						if($currentPage>1){	
						$active="class=active";
						echo '<li><a href="?page='.--$_GET['page'].'" '.$active.'>Previous</a></li>';
					}
				}
				else{
					$currentPage=1;
				}
				if($links>1){
					for($r=1;$r<=$links;$r++){
						$active=$r==$page?'class="link"':'';
						echo '<li><a href="?page='.$r.'" '.$active.'>'.$r.'</a></li>';
					}
				}
				if($currentPage<4){
					$next=$currentPage++;
					$active="class=active";
					echo '<li><a href="?page='.++$next.'" '.$active.'>Next</a></li>';
				}	
				echo "</ul>";
			}
			else{
				echo '<h3>Page Does Not Exists</h3>';
			}
		}
		catch(PDOexception $e){
			echo $e->getMessage().' in '.$e->getFile().': '.$e->getLine();
		}
	?>
</body>
</html>