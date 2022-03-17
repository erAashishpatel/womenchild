<script src="responsivevoice.js"></script>

<?php
$myfile = fopen("hg10.txt", "r") or die("Unable to open file!");
$a= fread($myfile,filesize("hg10.txt"));


fclose($myfile);
?>
   <input onclick='responsiveVoice.speak("<?php echo $a; ?>");' type='button' value="Play" />
