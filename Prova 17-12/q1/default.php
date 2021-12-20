<!DOCTYPE html>
<html lang="en">
<head>
 <script language ="javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
 <script language ="javascript">
     $(document).ready(function()){
         $("#gerar").click(function()){
             $("#content").load("<?php echo site_url('message/view/recalcular')?>");

         });
     });
     </script>
     </head>
<body>
    <div id="form"><input type="submit" id="gerar" name="gerar" value="Gerar"/></div>
    <div id="content"> Mensagem: </div>

    
</body>
</html>