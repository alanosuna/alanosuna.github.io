<?php require_once('html2pdf/html2pdf.class.php');

 //-------------------------------------------------------------------------------------------------------------
 
   $contenido="
               <H2 align='center'>JN Uniformes</H2>
               <p align='center'><img src='jeni.jpg' width='250'></p>
               <H3>Favor de enviar este PDF al correo que se encuentra en la pagina para hacernos llegar su pedido.</H3>
               <H4>Informacion sobre el cliente :</H4> <ul>";

               if (isset($_POST["nombre"])) 
               {
               	$contenido.="<li>nombre: $_POST[nombre] </li>";
               }
                if (isset($_POST["direccion"])) 
               {
               	$contenido.="<li>domicilio: $_POST[direccion] </li>";
               }               
                if (isset($_POST["correo"])) 
               {
               	$contenido.="<li>Correo Electronico: $_POST[correo] </li>";
               }
                if (isset($_POST["telefono"])) 
               {
                    $contenido.="<li>Telefono: $_POST[telefono] </li>";
               }               
               $contenido.="</ul><hr>";

//-------------------------------------------------------------------------------------------------------------
               $contenido.="<H4 align='center'>Especificaciones del Pedido:</H4>";
               if (isset($_POST["depo"])) 
               {
                    $contenido.="<p>El equipo correspondiente al nombre de $_POST[equipo], de la disciplina de $_POST[depo]
                                    tiene el interes de realizar un pedido de uniformes con las siguientes caracteristicas.</p>";
               }
               if (isset($_POST["cantidadcabeza"])) 
               {
                    $contenido.="<ul><li>$_POST[cantidadcabeza] Piezas de $_POST[cabeza]</li>";        
               } 
               if (isset($_POST["cantidadcamisa"])) 
               {
                    $contenido.="<li>$_POST[cantidadcamisa] Piezas de $_POST[camisa]</li>";        
               } 
               if (isset($_POST["cantidadpantalon"])) 
               {
                    $contenido.="<li>$_POST[cantidadpantalon] Piezas de $_POST[pantalon]</li>";        
               }    
               if (isset($_POST["estil"])) 
               {
                    $contenido.="<li>Estilo : $_POST[estil]</li>";        
               }         
               $contenido.="</ul><hr>";
//-------------------------------------------------------------------------------------------------------------
                $contenido.="<H4 >DETALLES...</H4>";

                if (isset($_POST["comentarios"])) 
                {
                    $contenido.="<h4>$_POST[comentarios].</h4>";
                }

                
              




               



               

   $html2pdf= new HTML2PDF('P','A4','es');
   $html2pdf->WriteHTML($contenido);
   $html2pdf->Output('pdfjeni.pdf');


?>