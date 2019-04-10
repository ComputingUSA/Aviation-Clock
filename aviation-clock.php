<HTML>
<!-- This is an aviation clock I wrote in HTML and PHP -Peter-->

<meta http-equiv="refresh" content="1">
<!-- update every second -->

<H1> <U>LOCAL TIME</U> <BR>
</H1>
<body style="background-color:#FAEBD7">
<H2>
<?php
#Comment out one of the following lines depending on whether daylight savings time is in effect.
echo 'It\'s '.date("l,\<\BR> F jS, Y <\BR> g:i:s A", time()-4*60*60).' EDT (+4)<BR>';
#echo 'It\'s '.date("l,\<\BR> F jS, Y <\BR> g:i:s A", time()-5*60*60).' EST (+5)<BR>';

?>
</H2>

<H1> <U>AVIATION TIME</U> <BR>
<H2>
<?php
echo date("H:i T", time()).' = '.date("dHi\Z", time()).' time';
?>
</H2>

</HTML>