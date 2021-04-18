<div class="input-group mb-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Cursos</label>
    </div>
    <select class="custom-select" id="combocursos">
        <?php
        if (!empty($combocursos)) {
          foreach ($combocursos->result() as $data) {
            ?>
        <option><?php echo $data->nombre_c ?></option>

        <?php
            }
            }
        ?>
    </select>
</div>