<tr>
  <th></th>
  <th>Tenant ID</th>
  <th>Surname</th>
  <th>Other Name</th>
  <th>Email</th>
</tr>
<tr data-ng-repeat="x in tenants">
  <td>
    <?php
    if ($_SESSION['avatar'] == null) {
      echo '<img src="img/avatars/default.png" alt="Avatar" class="img-responsive img-circle" height="50" width="50" />';
    } else {
      echo '<img src="img/avatars/{{ x.avatar }}" alt="Avatar" class="img-responsive img-circle" height="50" width="50" />';
    }
    ?>
  </td>
  <td>{{ x.tenant_ID }}</td>
  <td>{{ x.surname }}</td>
  <td>{{ x.other_name }}</td>
  <td>{{ x.email }}</td>
</tr>
