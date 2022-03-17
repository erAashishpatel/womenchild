<script src="responsivevoice.js"></script>

<?php
$myfile = fopen("hg3.txt", "r") or die("Unable to open file!");
$a= fread($myfile,filesize("hg3.txt"));


fclose($myfile);
?>
   <input onclick='responsiveVoice.speak("<?php echo $a; ?>");' type='button' value="Play" />
