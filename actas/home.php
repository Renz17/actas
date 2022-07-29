<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['Username'])) {
?>
    
        <?php include 'template/header.php' ?>
          <?php 
                include_once "db_conn.php";
                $sql = "select * from acta";
                $sentencia = mysqli_query($conn, $sql);
                $acta =  mysqli_num_rows($sentencia);
                //print_r($act);    
          
          ?>
      <div class="container mt-5">
          <div class="row justify-content-center">
              <div class="col-md-8>
                  <div class="card">
                      <div class="card-header">
                          Actas
                      </div>
                      <div class="p-4">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Area Encargada</th>
                                      <th scope="col">Tema</th>
                                      <th scope="col">Descripcion</th>
                                      <th scope="col">Funcionario</th>
                                      <th scope="col">Personal</th>
                                      <th scope="col">Compromisos</th>
                                      <th scope="col">Marca Cronologica</th>
                                      <th scope="col">Responsabilidades</th>
                                      <th scope="col" colspan="2">Opciones</th>


                                  </tr>
                              </thead>
                              <tbody>

                              <?php 
                                while($date = mysqli_fetch_array($sentencia)) {
                                
                              ?>
                                  <tr>
                                      <td scope="row"><?php echo $date['id']; ?></td>
                                      <td><?php echo $date['AreasEncargada']; ?></td>
                                      <td><?php echo $date['Tema']; ?></td>
                                      <td><?php echo $date['Descripcion']; ?></td>
                                      <td><?php echo $date['Funcionario']; ?></td>
                                      <td><?php echo $date['Personal']; ?>an</td>
                                      <td><?php echo $date['Compromisos']; ?></td>
                                      <td><?php echo $date['MarcaCronologica']; ?></td>
                                      <td><?php echo $date['Responsabilidades']; ?></td>
                                      <td class="text-success"><a href="editar.php?id=<?php echo $date['id']; ?>"><i class="bi bi-pencil-square"></a></i></td>
                                      <td class="text-danger"><a href="eliminar.php?id=<?php echo $date['id']; ?>"><i class="bi bi-trash"></a></i></td>
                                  </tr>
                                  <?php 
                                    }
                                    ?>
                              </tbody>
                          </table>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">
                          Ingresar datos:
                      </div>
                      <form class="p-4" method="POST" action="registrar.php">
                            <div class="mb-3">
                                <label class="form">Area Encargada: </label>
                                <input type="text" class="form-control" name="txtArea" autofocus>
                            </div>
                            <div>
                                <label class="form">Tema: </label>
                                <input type="text" class="form-control" name="txtTema" autofocus>

                            </div>
                            <div>
                                <label class="form">Descripcion: </label>
                                <input type="text" class="form-control" name="txtDes" autofocus>

                            </div>
                            <div>
                                 <label class="form">Funcionarios: </label>
                                <input type="text" class="form-control" name="txtFun" autofocus>

                            </div>
                            <div>
                                <label class="form">Personal: </label>
                                <input type="text" class="form-control" name="txtPer" autofocus>

                            </div>
                            <div>
                                <label class="form">Compromisos: </label>
                                <input type="text" class="form-control" name="txtCom" autofocus>
                            </div>
                            <div>
                                <label class="form">Marca Cronologica: </label>
                                <input type="text" class="form-control" name="txtMarca" autofocus>
                            </div>
                            <div>
                                     
                                <label class="form">Responsabilidades: </label>
                                <input type="text" class="form-control" name="txtRes" autofocus>

                            </div>  
                            <div class="d-grid">
                                <input type="hidden" name="oculto" value="1">
                                <input type="submit" class="btn btn-primary" value="Registrar">
                            </div>      
                            </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

<?php
 }else{
 header("Location: index.php");
 exit();
 }
 ?>