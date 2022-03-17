<script src="responsivevoice.js"></script>

<?php
$myfile = fopen("A.txt", "r") or die("Unable to open file!");
$a= fread($myfile,filesize("A.txt"));


fclose($myfile);
?>
   <input onclick='responsiveVoice.speak("<?php echo $a; ?>");' type='button' value="Play" />
