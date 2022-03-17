<script src="responsivevoice.js"></script>

<?php
$myfile = fopen("g2.txt", "r") or die("Unable to open file!");
$a= fread($myfile,filesize("g2.txt"));


fclose($myfile);
?>
   <input onclick='responsiveVoice.speak("<?php echo $a; ?>");' type='button' value="Play" />
