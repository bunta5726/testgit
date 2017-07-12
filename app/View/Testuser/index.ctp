<h1>Index Page</h1>
<p>MySampleData Index View.</p>
<table>
<?php foreach ($datas as $data): ?>
  <tr>
    <td><?php echo $data['Testuser']['name']; ?></td>
    <td><?php echo $data['Testuser']['age']; ?></td>
  </tr>
<?php endforeach; ?>
<a href="https://testupload-uemura-php56.kyoto-dev.e-agency.co.jp/test/find"><?php echo __d('cake_dev', 'testFindPage'); ?> </a>
</table>