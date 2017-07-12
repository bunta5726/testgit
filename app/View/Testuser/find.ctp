<h1>Index Page</h1>
<p>MySampleData Find View.</p>
<?php
  echo $this->Form->create('SearchData');
  echo $this->Form->input('age');
  echo $this->Form->end('Submit');
?>
 
<?php if (isset($data)): ?>
  <pre><?php print_r($data); ?></pre>
<?php endif; ?>