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
            <td><?=$data->getPais()?>(Api)</td>
            <td><?=$data->getUltimaModificacion()?></td>
            <td><?=$data->getTotalRegistrados()?></td>
            <td><?=$data->getTotalMuertost()?></td>
          </tr>
          <tr>
            <td><?=$dataAnt->getPais()?>(LeerAnterior)</td>
            <td><?=$dataAnt->getUltimaModificacion()?></td>
            <td><?=$dataAnt->getTotalRegistrados()?></td>
            <td><?=$dataAnt->getTotalMuertost()?></td>
          </tr>
</TABLE>