<!-- ======= Opening and Reading a file ========= -->
<?php

$filename = "tmp.txt";
$file = fopen( $filename, "r" );

if( $file == false )
{
	echo ( "Error in opening file" );
	exit();
}

$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );
fclose( $file );

echo ( "File size : $filesize bytes" );
echo ( "<pre>$filetext</pre>" );
//echo ( "<pre><h1> $filetext </h1></pre>" );

?>