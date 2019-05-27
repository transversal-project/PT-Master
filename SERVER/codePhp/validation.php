<?php 
require_once("connexion.php");
require_once("role.php");
$req = "SELECT nom,prenom,role,login,password,inscription FROM users "; 
$ps=$pdo->prepare($req); 
$ps->execute(); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Liste</title>
</head>
<!-- <script type="text/javascript">
    function validation() {
        var a;
        if(document.getElementById('inscription').value == "Desinscrire"){
            a=document.getElementById('inscription').value="Valider";
           

        }
        else
        {
        a=document.getElementById('inscription').value="Desinscrire";
        }
       alert(a);
    }
    
</script> -->
<body>
    <table border="1">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Role</th>
                            <th>Login</th>
                            <th>Password</th>
                            <th>Validation</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($et=$ps->fetch()) { ?>
                        <tr>
                            <td>
                                <?php echo($et['nom'])?>
                            </td>
                            <td>
                                <?php echo($et['prenom'])?>
                            </td>
                            <td>
                                <?php echo($et['role'])?>
                            </td>
                            <td>
                                <?php echo($et['login'])?>
                            </td>
                            <td>
                                <?php echo($et['password'])?>
                            </td>
                            <td>
                                <input type="button" id="inscription" onclick="document.location.href='validation.php'" value="<?php if($et['inscription']) echo "Desinscrire"; else echo "Valider"; ?>">
                            </td>
                            
                        </tr>
                        <?php } ?>
                        <tr><td></td><td></td><td></td><td></td>
                            <td align="right">
                                <input type="button" value="acceuil" onclick="document.location.href='logout.php'" >
                            </td>
                        </tr>
                    </tbody>
                </table>

</body>
</html>