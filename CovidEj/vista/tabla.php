<TABLE border="1">
    <thead>
    <tr>
      <th>Pais</th>
      <th>Fecha Modificacion</th>
      <th>Total Afectados </th>
      <th>Total Muertos </th>
    </tr>
  </thead>
          <tr>
            <td><?=$data->getPais()?></td>
            <td><?=$data->getUltimaModificacion()?></td>
            <td><?=$data->getTotalRegistrados()?></td>
            <td><?=$data->getTotalMuertost()?></td>
          </tr>
</TABLE>