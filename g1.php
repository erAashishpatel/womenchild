<script src="responsivevoice.js"></script>

<?php
$myfile = fopen("g1.txt", "r") or die("Unable to open file!");
$a= fread($myfile,filesize("g1.txt"));


fclose($myfile);
?>
   <input onclick='responsiveVoice.speak("<?php echo $a; ?>");' type='button' value="Play" />
