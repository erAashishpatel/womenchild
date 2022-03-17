<script src="responsivevoice.js"></script>

<?php
$myfile = fopen("1.txt", "r") or die("Unable to open file!");
$a= fread($myfile,filesize("1.txt"));


fclose($myfile);
?>
   <input onclick='responsiveVoice.speak("<?php echo $a; ?>");' type='button' value="Play" />
