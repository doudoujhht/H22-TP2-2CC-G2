<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nos Produits</title>

<body>
<style type="text/css">
body {
    background-color: #d8da3d 
}
h1 { color: green; 
	font-family: 'Helvetica Neue', sans-serif; 
	font-size: 80px; 
	font-weight: bold; 
	letter-spacing: -1px; 
	line-height: 1; 
	text-align: center; 
}
h2 { color: red; 
	font-family: 'Helvetica Neue', sans-serif; 
	font-size: 40px; 
	font-weight: bold; 
	letter-spacing: -1px; 
	line-height: 1; 
	text-align: center; 
}
--##############
.zui-table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 20px Arial, sans-serif;
}
.zui-table thead th {
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-align: center;
    text-shadow: 1px 1px 1px #fff;
    font: bold 25px Arial, sans-serif;

}
.zui-table tbody td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    font-size: 25px;
    text-shadow: 1px 1px 1px #fff;
}
.zui-table-rounded {
    border: none;
}
.zui-table-rounded thead th {
    background-color: #CFAD70;
    border: none;
    text-shadow: 1px 1px 1px #ccc;
    color: #333;
}
.zui-table-rounded thead th:first-child {
    border-radius: 10px 0 0 0;
}
.zui-table-rounded thead th:last-child {
    border-radius: 0 10px 0 0;
}
.zui-table-rounded tbody td {
    border: none;
    border-top: solid 1px #957030;
    background-color: #EED592;
}
.zui-table-rounded tbody td:last-child {
    width:100px;
    text-align:right ;
}
.zui-table-rounded tbody td:first-child {
    width:100px;
    text-align:center ;
    font: bold 25px Arial, sans-serif;
}

.zui-table-rounded tbody tr:last-child td:first-child {
    border-radius: 0 0 0 10px;
}
.zui-table-rounded tbody tr:last-child td:last-child {
    border-radius: 0 0 10px 0;
}		}
--#################

</style>
</head>
<?php
header( 'content-type: text/html; charset=UTF-8' );
if (!$link = mysqli_connect('127.0.0.1', 'scott', 'tiger','entreprise')) {
    echo 'Connexion impossible à mysql';
    exit;
}


$select = 'SELECT  * from emp';
$result = mysqli_query($link,$select) or die ('Erreur : '.mysqli_error() );
echo '<h1>Entreprise SCOTT</h1>';
echo '<h2>Liste des employé(e)s</h2>';
echo '<p ><a href="./index.html">Retour</p>';
echo'<table align="center" class="zui-table zui-table-rounded">';
echo '<thead> <tr><th>Numéro</th><th>Nom</th><th>Fonction</th><th>Manager</th><th>DATE EMB</th><th>Salaire</th><th>Comission</th><th>Departement</th></tr></thead>';
echo ' <tbody>';
while($res=mysqli_fetch_array($result))
{
echo'<tr><td>'.$res['EMPNO'].'</td> <td>'.$res['ENAME'].'</td> <td>'.$res['JOB'].'</td> <td>'.$res['MGR'].'</td> <td>'.$res['HIREDATE'].'</td> <td>'.$res['SAL'].'</td><td>'.$res['COMM'].'</td><td>'.$res['DEPTNO'].'</td></tr>';
}
echo '</tbody>';
echo'</table>';
?>
</body>
</html>


