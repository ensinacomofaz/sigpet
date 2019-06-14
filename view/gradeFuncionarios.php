<div class="container">
  <div class="section">
    <h4>Procurar Funcionário</h4>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
      <script>
      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                  }
                }
              }
            }
          </script>
    <table class="highlight" style="top:40px;" id="myTable">
        <thead>
            <tr>
                <th>Funcionario</th>
                <th>Função</th>
                <th>Admissao</th>
                <th>Nivel de acesso</th>
                <th>Departamento</th>
                <th>Email</th>

                <th><a href="?controller=FuncionariosController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <h4>Funcionários</h4>
        <tbody>
            <?php
            if ($funcionarios) {
                foreach ($funcionarios as $funcionario) {
                    ?>
                    <tr>
                        <td><?php echo $funcionario->NOME_FUNCIONARIO; ?></td>
                        <td><?php echo $funcionario->FUNCAO; ?></td>
                        <td><?php echo $funcionario->ADMISSAO; ?></td>
                        <td><?php echo $funcionario->ACESSO_TOTAL; ?></td>
                        <td><?php echo $funcionario->DEPARTAMENTO_ID; ?></td>
                        <td><?php echo $funcionario->EMAIL; ?></td>
                        <td>
                            <a href="?controller=FuncionariosController&method=editar&id=<?php echo $funcionario->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=FuncionariosController&method=excluir&id=<?php echo $funcionario->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
  </div>
</div>
