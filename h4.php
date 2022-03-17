<script src="responsivevoice.js"></script>

<?php
$myfile = fopen("h4.txt", "r") or die("Unable to open file!");
$a= fread($myfile,filesize("h4.txt"));


fclose($myfile);
?>
   <input onclick='responsiveVoice.speak("<?php echo $a; ?>");' type='button' value="Play" />
