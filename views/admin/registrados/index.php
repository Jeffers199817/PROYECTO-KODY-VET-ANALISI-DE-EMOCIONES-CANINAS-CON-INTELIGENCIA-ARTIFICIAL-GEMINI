<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>


<div class="dashboard__contenedor">
    <?php if (!empty($registros)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scoope="col" class="table__th">Número</th>
                    <th scope="col" class="table__th">Nombre Usuario</th>
                    <th scope="col" class="table__th">Email</th>
                    <th scope="col" class="table__th">Nombre Mascota</th>
                    <th scope="col" class="table__th"> Edad</th>
                    <th scope="col" class="table__th"> Raza</th>
                    <th scope="col" class="table__th">Plan</th>
                    <th scope="col" class="table__th">Token</th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php $i = 1; foreach ($registros as $registro) { ?>
                    <tr class="table__tr">
                     
                    <td class = "table__td">
                        <?php  echo $i ?>
                    </td>
                        <td class="table__td">
                            <?php echo $registro->usuario->nombre . ' ' . $registro->usuario->apellido; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $registro->usuario->email; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $registro->usuario->nombrem; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $registro->usuario->edadm; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $registro->usuario->razam; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $registro->paquete->nombre; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $registro->token; ?>
                        </td>
                    </tr>

                <?php $i++; } ?>
            </tbody>
        </table>
    <?php  } else { ?>
        <p class="text-center">No Hay Registros Aún</p>
    <?php } ?>
</div>

<?php
echo $paginacion;
?>