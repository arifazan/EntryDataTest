
<?php
MSSQL_CONNECT("localhost,1443","sa","") or DIE("No Connection");
mssql_select_db("") or DIE("No Such DB");
?>
