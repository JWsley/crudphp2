<?php  

    include 'config.php';

    $selct = "SELECT * FROM pratic";

    $reciv = mysqli_query($conn,$selct);






?>





<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    link
  </head>
  <body>
    <div class="container">
        <table class="table" style="border:5px solid black;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>_______</th>
                    <th>____________________________</th>
                    <th>_______</th>
                    <th>_______</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($recive = mysqli_fetch_array($reciv)){


                        $id = $recive['id'];
                        $nome = $recive['nome'];
                        $email = $recive['email'];
                        $tel = $recive['tel'];




                    
                
                
                
                
                
                
                
                ?>


                <tr>
                    <td scope="row"><?php echo $id;?></td>
                    <td><?php echo $nome;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $tel;?></td>
                </tr>
                
               <?php }; ?>
               <tr>
                    <form action="alter.php" method="post">
                        <td></td>
                        <td><input type="text" name="nome" placeholder="nome"></td>
                        <td><input type="text" name="email" placeholder="email"></td>
                        <td><input type="text" name="tel" placeholder="telefone"></td>
                        <td><button type="submit" value="cadastrar" name="msg">Send</button></td>
                        <td><input type="text" name="id" placeholder="Id para Editar/Excluir"></td>
                        <td><button type="submit" value="Editar"    name="msg"><span class="material-symbols-outlined">
edit
</span></td>
                        <td><button type="submit" value="Excluir"   name="msg"><span class="material-symbols-outlined">
delete
</span></button></td>
                        
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>