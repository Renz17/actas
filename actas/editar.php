<?php 
include 'template/header.php'
?>
<?php 

if(!isset($_GET['id'])){
            
}    
include ('db_conn.php');
$id = $_GET['id'];
$query = "SELECT * FROM acta WHERE id = '$id' ";
$act = mysqli_query($conn, $query);
$row=mysqli_fetch_array($act);
 //print_r($act);   
?>


<div class="col-md-8">
                  <div class="card">
                      <div class="card-header">
                          Editar datos:
                      </div>
                      <form class="p-4" method="POST" action="editarproc.php">
                            <div class="mb-3">
                                <label class="form">Area Encargada: </label>
                                <input type="text" class="form-control" name="txtArea" placeholder="Area" value="<?php echo $row['AreasEncargada']  ?>">
                            </div>
                            <div>
                                <label class="form">Tema: </label>
                                <input type="text" class="form-control" name="txtTema"  placeholder="Tema" value="<?php echo $row['Tema']  ?>">

                            </div>
                            <div>
                                <label class="form">Descripcion: </label>
                                <input type="text" class="form-control" name="txtDes" placeholder="Descripcion" value="<?php echo $row['Descripcion'] ?>" >

                            </div>
                            <div>
                                 <label class="form">Funcionarios: </label>
                                <input type="text" class="form-control" name="txtFun" placeholder="Funcionario" value="<?php echo $row['Funcionario']  ?>">

                            </div>
                            <div>
                                <label class="form">Personal: </label>
                                <input type="text" class="form-control" name="txtPer" placeholder="Personal" value="<?php echo $row['Personal']  ?>">

                            </div>
                            <div>
                                <label class="form">Compromisos: </label>
                                <input type="text" class="form-control" name="txtCom" placeholder="Compromisos" value="<?php echo $row['Compromisos']  ?>">
                            </div>
                            <div>
                                <label class="form">Marca Cronologica: </label>
                                <input type="text" class="form-control" name="txtMarca" placeholder="MarcaCronologica" value="<?php echo $row['MarcaCronologica']  ?>">
                            </div>
                            <div>
                                     
                                <label class="form">Responsabilidades: </label>
                                <input type="text" class="form-control" name="txtRes" placeholder="Responsabilidades" value="<?php echo $row['Responsabilidades']  ?>">

                            </div>  
                            <div class="d-grid">
                                <input type="hidden" name="oculto" value="1">
                                <input type="submit" class="btn btn-primary" value="Actualizar  ">
                            </div>      
                            </div>
                      </form>
                  </div>