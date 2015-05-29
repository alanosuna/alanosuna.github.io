<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <title>JENI uniformes</title>
    <link rel="stylesheet" href="css/jn.css">
    <link rel="stylesheet" href="css/misestilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  </head>
<body>
	<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="jn.php?liga=0">JN Uniformes</a>
  </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav">
        <li><a href="jn.php?liga=1">NOVEDADES<span class="sr-only">(current)</span></a></li>
        <li><a href="jn.php?liga=2">INFORMACION</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">NOSOTROS<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="jn.php?liga=33">VISION</a></li>
            <li><a href="jn.php?liga=3">MISION</a></li>                   
          </ul>
        </li>
        <li><a href="jn.php?liga=4">PEDIDOS</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DISEÑOS<span class="caret"></span></a>
          <ul  class="dropdown-menu" role="menu">
            <li><a href="jn.php?liga=5">Casacas</a></li>
            <li><a href="jn.php?liga=6">Pantalones</a></li>
            <li><a href="jn.php?liga=7">Sudadores</a></li>
            <li><a href="jn.php?liga=8">Gorras</a></li>
            <li><a href="jn.php?liga=10">Polos</a></li>
            <li class="divider"></li>
            <li><a href="jn.php?liga=9">Otros</a></li>            
          </ul>
        </li>
      </ul>
      
      
    </div>
  </div>
</nav>

<div class="container">
 <article>
        <p>

          <?php
          if (isset($_GET["liga"])) 
          {
            switch ($_GET["liga"]) 
            {
              case 0:
                
                echo " 
                <div align='left' class='jumbotron divv'>
                  <h1 align='center'><b>UNIFORMES JENI</b></h1>
                  <p align='center'>Si a la victoria a su equipo quiere llevar, uniformes JENI debe comprar.</p>
                </div>
                
                <div class='row centrar '>
                 
                 <div align='center' class='col-xs-5 grisbajo divv'>
                    <h3 class='tam20'><b> Diseños de uniformes y bordados JENI </b></h3>
                   <p><img src='jeni.jpg' width='400px' class='img-responsive img-circle'></p>
                 </div>
                 <div class='col-xs-2'></div> 
                 <div align='center'  class='col-xs-5 grisbajo divv margenabajo'>
                    <h3 class='tam20' align='center'><b>Noti-softbolero<b></h3>                    
                    <p class='parra'><b>Seleccion de sinaloa categoria sub-22 cae ante sonora en el sistema page, rescatando un tercer lugar.<b></p>
                    <a href='n1.jpg'>
                      <img src='n1.jpg' class='img-responsive' alt='camuflash rojo' style='width:500px;height:300px'>
                    </a>
                 </div> 

                </div>
                ";
                break;

              case 1:
                
                echo "

                <div class='row'>
                  <font class='c1'><h1 align='center'><b>NOVEDADES</b></h1></font>
                   <div class='col-xs-4'>
                      <a href='2.jpg' class='thumbnail'>
                        <p>TELA CAMUFLAJEADA CAFE</p> 
                        <img src='2.jpg' alt='camuflash rojo' style='width:150px;height:150px'>
                      </a>
                   </div>
                   <div class='col-xs-4'>
                      <a href='3.jpg' class='thumbnail'>
                        <p>TELA CAMUFLAJEADA ROJA</p>
                        <img src='3.jpg' alt='camuflash cafe' style='width:150px;height:150px'>
                      </a>
                   </div>
                   <div class='col-xs-4'>
                     <a href='4.jpg' class='thumbnail'>
                       <p>BORDADOS ESTILOS MLB</p> 
                       <img src='4.jpg' alt='MLB' style='width:150px;height:150px'>
                     </a>
                   </div>
                </div> 

                <div class='row'>
                   <div class='col-xs-4'>
                      <a href='20.jpg' class='thumbnail'>
                        <p>BORDADOS ESTILOS MLB</p> 
                        <img src='20.jpg' alt='DODGERS' style='width:150px;height:150px'>
                      </a>
                   </div>
                
                   <div class='col-xs-4'>
                      <a href='11.jpg' class='thumbnail'>
                        <p>BORDADOS ESTILOS MLB</p> 
                        <img src='11.jpg' alt='casaca' style='width:150px;height:150px'>
                      </a>
                   </div>
          
                   <div class='col-xs-4'>
                     <a href='22.jpg' class='thumbnail'>
                        <p>BORDADOS ESTILOS MLB</p> 
                        <img src='22.jpg' alt='casaca' style='width:150px;height:150px'>
                     </a>
                   </div>
                </div>
                ";
                break;

              case 2:
                
                echo " 
                  
                  <div class='row'>
                    <font class='c1'><h1 align='center'><b>INFORMACION DE LA EMPRESA</b></h1></font>
                    <div class='col-xs-1'></div>
                    <div class='col-xs-10'>
                      <h2>JN UNIFORMES</h2>
                      <p><b>A continuacion se presenta una serie de informacion la cual pueden usar para localizarnos...</b></p> 
                      
                      <div class='google-maps' style='text-align:center'>
                        <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.071534919871!2d-107.377081499999
                         99!3d24.793003900000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd736392da297%3A0x323f338
                         b255e6c1d!2s29+de+Diciembre+1365%2C+5+de+Mayo%2C+80230+Culiac%C3%A1n+Rosales%2C+Sin.!5e0!3m2!1ses!2smx!4v1429166065804'
                         width='450' height='150' frameborder='3' style='border:2'></iframe>   
                      </div>  
                      
                      <table class='table table-striped'>                      
                        <tbody>
                           <tr class='success'>
                              <td>Gerente :</td>
                              <td>Jesus Alfredo Lerma Martinez </td>                        
                           </tr>
                           
                           <tr class='success'>
                              <td>Domicilio :</td>
                              <td>Colonia 5 de mayo, Calle 29 de Diciembre</td>                        
                           </tr>
                           
                           <tr class='success'>
                             <td>Telefono Celular:</td>
                             <td>6671-39-71-25</td>                        
                           </tr>

                           <tr class='success'>
                             <td>Telefono Taller:</td>
                             <td>6672-75-64-62</td>                        
                           </tr>

                           <tr class='success'>
                             <td>Correo Elecronico :</td>
                             <td>uniformesdeportivosjeni@hotmail.com</td>                        
                           </tr>
                        </tbody>
                      </table>

                    </div>
                    <div class='col-xs-1'></div>
                  </div>


                ";
                break;

              case 33:
                
                echo "                 
                 <div class='col-xs-1'></div>
                 <div class='col-xs-10' >
                  <div class='jumbotron ' align='center'>
                     <h2 style='color:white' class='jtit'> VISIÓN</h2>
                     <h4>Ser la empresa lider en la fabricacion y distribucion de uniformes deportivos. Lograremos la 
                        excelencia en calidad y tecnologia hacia nuestros clientes. Aunado a ello, nos comprometemos
                        a ofrecerles el mejor servicio posible para seguir gozando de su preferencia.
                     </h4>
                     <p align='center'><img src='jeni.jpg' width='400px' class='img-responsive'></p>
                  </div>
                 </div>  
                 <div class='col-xs-1'></div>              
               
                ";
                break;

              case 3:
                
                echo "                 
                 <div class='col-xs-1'></div>
                 <div class='col-xs-10' >
                  <div class='jumbotron ' align='center'>
                     <h2 style='color:white' class='jtit'> MISIÓN</h2>
                     <h4>Vender uniformes deportivos de calidad y sobre todo cumpliendo con la exigencia y gusto del
                        cliente.
                     </h4>
                     <p align='center'><img src='jeni.jpg' width='400px' class='img-responsive'></p>
                  </div>
                 </div>  
                 <div class='col-xs-1'></div>              
                
                ";
                break;

              case 4:
                echo "
                <form name='form1' action='pdfjn.php' method='POST'>
                <div class='container-fluid'>
                
                <div class='row'>
                <font class='c1'><h1 align='center'><b>REALIZA TU PEDIDO</b></h1></font>
                <div class='col-xs-1'></div>
                 <div class='col-xs-10'>
                  
                            
                    <table class='table table-condensed'>                      
                     <tbody>
                      

                      <tr class='ctab' align='center'>                                  
                        <td colspan='2'><h3>Cliente</h3></td>
                      </tr>  
                      <tr class='ctab2'>
                        <td class='azulf'>Nombre :</td>
                        <td><input type='text' name='nombre'></td>                        
                      </tr>
                      <tr class='ctab2'>
                        <td class='azulf'>Domicilio :</td>
                        <td><input type='text' name='direccion'></td>                        
                      </tr>
                      <tr class='ctab2'>
                        <td class='azulf'>Telefono :</td>
                        <td><input type='text' name='telefono'></td>                        
                      </tr>
                      <tr class='ctab2'>
                        <td class='azulf'>Correo Elecronico :</td>
                        <td><input type='text' name='correo'></td>                        
                      </tr>
                      

                      <tr class='ctab' align='center'>                                  
                        <td colspan='2'><h3>Datos del uniforme</h3></td>
                      </tr>
                      <tr class='ctab2'>
                        <td class='azulf'>Deporte :</td>
                        <td class='azulf'>
                              <select name='depo'>
                                <option value='BEISBOL' selected='selected'>BEISBOL</option>
                                <option value='FUTBOL'>FUTBOL</option>
                                <option value='voleybol'>VOLEYBOL</option>
                                <option value='softbol'>SOFTBOL</option>
                                <option value='otros'>OTROS</option>                                
                              </select>
                        </td>                        
                      </tr>
                      <tr class='ctab2'>
                        <td class='azulf'>Nombre de Equipo:</td>
                        <td><input type='text' name='equipo'></td>                        
                      </tr>
                      <tr class='ctab ' align='center'>                                  
                        <td><h3>Prenda</h3></td>
                        <td><h3>Cantidad</h3></td>
                      </tr>
                      <tr class='ctab2'>
                        <td class='azulf' align='center'>
                              <select name='cabeza'>
                                <option value='GORRAS' selected='selected'>Gorras</option>
                                <option value='vicera'>Vicera</option> 
                                <option value='ninguno'>Nada</option> 
                              </select>
                          </td>
                          <td align='center'><input type='text' name='cantidadcabeza'></td>                       
                      </tr>
                       <tr class='ctab2'>
                          <td class='azulf' align='center'>
                              <select name='camisa'>
                                <option value='CASACAS' selected='selected'>Casaca</option>
                                <option value='PLAYERAS'>Playera</option> 
                                <option value='POLOS'>Polo</option> 
                                <option value='null'>Nada</option>
                              </select>
                          </td>
                          <td align='center'><input type='text' name='cantidadcamisa'></td>
                      </tr>
                       <tr class='ctab2'>
                          <td class='azulf' align='center'>
                              <select name='pantalon'>
                                <option value='PANTALONES' selected='selected'>Pantalon</option>
                                <option value='SHORTS'>Short</option>    
                                <option value='null'>Nada</option>                               
                              </select>
                          </td>
                          <td align='center'><input type='text' name='cantidadpantalon'></td>
                      </tr>
                      <tr class='ctab2'>
                        <td class='azulf' align='center'>ESTILO :</td>
                        <td class='azulf' align='center'>
                             Bordado    <input type='checkbox' name='estil' value='bordado'>
                             Serigrafia <input type='checkbox' name='estil' value='serigrafia'>
                        </td>                        
                      </tr>


                      <tr class='ctab' align='center'>                                  
                        <td colspan='2'><h3>Detalles del pedido</h3></td>
                      </tr> 
                      <tr class='ctab2' align='center'>                                  
                        <td colspan='2'><textarea name='comentarios' cols='38' rows='5' style='color:blue'>Ninguno</textarea></td>
                      </tr> 
                      <tr class='ctab' align='center'>                                  
                        <td colspan='2'><input type='submit' value='Generar pedido'></td>
                      </tr>

                     </tbody>
                    </table>

                 </div>

                <div class='col-xs-1'></div>
                </div>
                </div>
                </form>


               ";
                break;

              case 5:
                
                echo "
                <div class='row'>
                <font class='c1'><h1 align='center'><b>CASACAS DEPORTIVAS</b></h1></font>
                   <div class='col-xs-4'>
                      <a href='c1.jpg' class='thumbnail'>
                        <p>Chapule</p> 
                        <img src='c1.jpg' alt='camuflash rojo' style='width:250px;height:350px'>
                      </a>
                   </div>
                   <div class='col-xs-4'>
                      <a href='c10.jpg' class='thumbnail'>
                        <p>Cardenales</p>
                        <img src='c10.jpg' alt='camuflash cafe' style='width:250px;height:350px'>
                      </a>
                   </div>
                   <div class='col-xs-4'>
                    <a href='c3.jpg' class='thumbnail'>
                     <p>Coepriss</p> 
                     <img src='c3.jpg' alt='MLB' style='width:250px;height:350px'>
                    </a>
                   </div>
                </div>
                <div class='row'>
                   <div class='col-xs-4'>
                      <a href='c4.jpg' class='thumbnail'>
                        <p>Educacion Fisica</p> 
                        <img src='c4.jpg' alt='camuflash rojo' style='width:250px;height:350px'>
                      </a>
                   </div>
                   <div class='col-xs-4'>
                      <a href='c5.jpg' class='thumbnail'>
                        <p>Nietos</p>
                        <img src='c5.jpg' alt='camuflash cafe' style='width:250px;height:350px'>
                      </a>
                   </div>
                   <div class='col-xs-4'>
                    <a href='c6.jpg' class='thumbnail'>
                     <p>Soft-Mexico</p> 
                     <img src='c6.jpg' alt='MLB' style='width:250px;height:350px'>
                    </a>
                   </div>
                </div>
                <div class='row'>
                   <div class='col-xs-6'>
                      <a href='c7.jpg' class='thumbnail'>
                        <p>Colhuacan</p> 
                        <img src='c7.jpg' alt='camuflash rojo' style='width:250px;height:350px'>
                      </a>
                   </div>
                   <div class='col-xs-6'>
                      <a href='c8.jpg' class='thumbnail'>
                        <p>Coepriss</p>
                        <img src='c8.jpg' alt='camuflash cafe' style='width:250px;height:350px'>
                      </a>
                   </div>
                   
                </div>
                ";
                break;

              case 6:
                
                echo "
                <div class='row'>
                <font class='c1'><h1 align='center'><b>PANTALONES DEPORTIVOS</b></h1></font>
                   <div class='col-xs-4'>
                      <a href='p1.jpg' class='thumbnail'>
                        <img src='p1.jpg' alt='camuflash rojo' style='width:250px;height:350px'>
                      </a>
                   </div>
                   <div class='col-xs-4'>
                      <a href='p2.jpg' class='thumbnail'>
                        <img src='p2.jpg' alt='camuflash rojo' style='width:250px;height:350px'>
                      </a>
                   </div>                
                   <div class='col-xs-4'>
                      <a href='p3.jpg' class='thumbnail'>
                        <img src='p3.jpg' alt='camuflash rojo' style='width:250px;height:350px'>
                      </a>
                   </div>  
                </div>
                ";
                break;          

              case 7:
                
                echo "
                <div class='row'>
                <font class='c1'><h1 align='center'><b>SUDADORES</b></h1></font>
                   <div class='col-xs-6'>
                      <a href='s1.jpg' class='thumbnail'>
                        <img src='s1.jpg' alt='camuflash rojo' style='width:450px;height:550px'>
                      </a>
                   </div>
                   <div class='col-xs-6'>
                      <a href='s2.jpg' class='thumbnail'>
                        <img src='s2.jpg' alt='camuflash cafe' style='width:450px;height:550px'>
                      </a>
                   </div>
                </div>

                 <div class='row'>
                   <div class='col-xs-6'>
                    <a href='s3.jpg' class='thumbnail'> 
                     <img src='s3.jpg' alt='MLB' style='width:450px;height:550px'>
                    </a>
                   </div>
                   <div class='col-xs-6'>
                    <a href='s4.jpg' class='thumbnail'> 
                     <img src='s4.jpg' alt='MLB' style='width:450px;height:550px'>
                    </a>
                   </div>

                </div>
                ";
                break;

              case 8:
                
                echo "
                <div class='row'>
                <font class='c1'><h1 align='center'><b>GORRAS</b></h1></font>
                   <div class='col-xs-4'>
                      <a href='g1.jpg' class='thumbnail'>
                        <p>GORRAS</p> 
                        <img src='g1.jpg' alt='camuflash rojo' style='width:250px;height:350px'>
                      </a>
                   </div>
                   <div class='col-xs-4'>
                      <a href='g2.jpg' class='thumbnail'>
                        <p>GORRAS</p>
                        <img src='g2.jpg' alt='camuflash cafe' style='width:250px;height:350px'>
                      </a>
                   </div>
                   <div class='col-xs-4'>
                    <a href='g3.jpg' class='thumbnail'>
                     <p>GORRAS</p> 
                     <img src='g3.jpg' alt='MLB' style='width:250px;height:350px'>
                    </a>
                   </div>
                </div>
                <div class='row'>
                   <div class='col-xs-4'>
                      <a href='g4.jpg' class='thumbnail'>
                        <p>GORRAS</p> 
                        <img src='g4.jpg' alt='camuflash rojo' style='width:250px;height:350px'>
                      </a>
                   </div>
                   <div class='col-xs-4'>
                      <a href='g5.jpg' class='thumbnail'>
                        <p>GORRAS</p>
                        <img src='g5.jpg' alt='camuflash cafe' style='width:250px;height:350px'>
                      </a>
                   </div>
                   <div class='col-xs-4'>
                    <a href='g6.jpg' class='thumbnail'>
                     <p>GORRAS</p> 
                     <img src='g6.jpg' alt='MLB' style='width:250px;height:350px'>
                    </a>
                   </div>
                </div>
                <div class='row'>
                   <div class='col-xs-6'>
                      <a href='g7.jpg' class='thumbnail'>
                        <p>GORRAS</p> 
                        <img src='g7.jpg' alt='camuflash rojo' style='width:250px;height:350px'>
                      </a>
                   </div>
                   <div class='col-xs-6'>
                      <a href='g8.jpg' class='thumbnail'>
                        <p>GORRAS</p>
                        <img src='g8.jpg' alt='camuflash cafe' style='width:250px;height:350px'>
                      </a>
                   </div>
                   
                </div>
                ";
                break;

              case 9:
                
                echo "
                    <div class='jumbotron'>
                      <h1 align='center'><b>Algo mas de JN Uniformes</b></h1>
                      <hr>
                      <div id='CASACAS' class='carousel slide' data-ride='carousel'>               
                       <ol class='carousel-indicators'>
                         <li data-target='#CASACAS' data-slide-to='0' class='active'></li>
                         <li data-target='#CASACAS' data-slide-to='1'></li>
                         <li data-target='#CASACAS' data-slide-to='2'></li>
                         <li data-target='#CASACAS' data-slide-to='3'></li>
                         <li data-target='#CASACAS' data-slide-to='4'></li>
                         <li data-target='#CASACAS' data-slide-to='5'></li>
                         <li data-target='#CASACAS' data-slide-to='6'></li>
                         <li data-target='#CASACAS' data-slide-to='7'></li>
                       </ol>

                 <div class='carousel-inner' role='listbox'>
                   <div class='item active centrar'>
                     <img src='o0.jpg'>
                   </div>
                   <div class='item'>
                     <img src='o1.jpg'>
                   </div>    
                   <div class='item'>
                     <img src='o2.jpg'>
                   </div>
                   <div class='item'>
                     <img src='o4.jpg'>
                   </div>
                   <div class='item'>
                     <img src='o5.jpg'>
                   </div>
                   <div class='item'>
                     <img src='o6.jpg'>
                   </div>
                   <div class='item'>
                     <img src='o7.jpg'>
                   </div>

                 </div>

                 <a class='left carousel-control' href='#CASACAS' role='button' data-slide='prev'>
                    <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                 </a>
                 <a class='right carousel-control' href='#CASACAS' role='button' data-slide='next'>
                    <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                 </a>
                </div>
                </div>
                </div>
              
           

                ";
                break;

              case 10:
                
                echo "
                <div class='row'>
                <font class='c1'><h1 align='center'><b>BORDADOS EN POLO</b></h1></font>
                   <div class='col-xs-4'></div>
                   <div class='col-xs-4'>
                      <a href='polo1.jpg' class='thumbnail'>
                        <p>Camisa Polo</p> 
                        <img src='polo1.jpg' alt='Polo' style='width:250px;height:350px'>
                      </a>
                   </div>                
                   <div class='col-xs-4'></div>  
                </div>
                ";
                break;          

            default:
                  echo "DEFAULT";
                break;
            }
            }  
            else 
              {
                echo " 
                 <div class='jumbotron'>
                  <h1 align='center'><b>UNIFORMES JENI</b></h1>
                  <p align='center'>Si a la victoria a su equipo quiere llevar, uniformes JENI debe comprar.</p>
                </div>
                
                <div class='row centrar'>
                 
                 <div align='center' class='col-xs-6'>
                    <h3><b> Diseños de uniformes y bordados JENI </b></h3>
                   <p><img src='jeni.jpg' width='400px' class='img-responsive img-circle'></p>
                 </div>
                 
                  <div align='center'  class='col-xs-6 '>

                    <h3 align='center'><b>Noti-softbolero<b></h3>                    
                    <p class='parra'><b>Seleccion de sinaloa categoria sub-22 cae ante sonora en el sistema page, rescatando un tercer lugar.<b></p>
                   
                    <a href='n1.jpg'>
                      <img src='n1.jpg' class='img-responsive' alt='camuflash rojo' style='width:500px;height:300px'>
                    </a>

                 </div>             
                </div>
                
                ";                
              }
          ?>

        </p>
       </article>
       </div>
       <hr>
       <footer class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
           <p >JENI: Jesus Lerma & Nicole Lerma</p><p>uniformesdeportivosjeni@hotmail.com</p> 
          </div>
        </div>
       </footer>

</body>
</html>