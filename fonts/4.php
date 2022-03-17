<script src="responsivevoice.js"></script>

<?php
$myfile = fopen("4.txt", "r") or die("Unable to open file!");
$a= fread($myfile,filesize("4.txt"));


fclose($myfile);
?>
   <input onclick='responsiveVoice.speak("<?php echo $a; ?>");' type='button' value="Play" />
