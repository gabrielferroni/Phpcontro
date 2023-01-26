<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <h1>Projeto Controle Remoto</h1> 
    <pre>
     <?php
       require_once 'ControleRemoto.php';
       $c = new ControleRemoto();
       $c->Ligar();
        $c->maisVolume();
       $c->maisVolume();
       $c->menosVolume();
       $c->abrirMenu();
       $c->fecharMenu();
    
      
      
     
      
       

      
      
      
    
      
        ?>
    </pre>
    </body>
</html>
