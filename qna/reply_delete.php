<?

   session_start();

   include "../lib/dbconn.php";

   $sql = "delete from qnareply where num = $num";
   mysql_query($sql, $connect);

   mysql_close();

   echo "

	   <script>
	    alert('삭제가 완료되었습니다.');
	    location.href = 'list.php';
	   </script>
	";
?>
