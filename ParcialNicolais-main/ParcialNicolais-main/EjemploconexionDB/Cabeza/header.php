<?php
session_start();

//! negación, !isset = Que no exista
if (!isset($_SESSION['Nombre'])) {
    header('Location: inicio.php');
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyProject</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="barra.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Don Banano</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="salir.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="factura.php">Factura</a>
                    </li>
                    <?php
                    
                    include 'conexion.php';
                            
                           $varsession = $_SESSION['Rol'];

                            if ($varsession == 1 || $varsession == 2 ){
                                echo "
                                <li>
                                
                                 <a class='nav-link' href='Inventario.php'>Inventario</a>
                                    
                                 </li>
                                  ";
                              }
                                
                                
                     ?>
                            
                    <li class="nav-item">
                        <a class="nav-link disabled">+18</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="search">
                    <button class="btn btn-outline-success" type="submit">buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <br />
    <div class="container-fluid">