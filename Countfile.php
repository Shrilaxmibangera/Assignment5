<?php 
$file=fopen("shri.text","w");
fwrite($file,"My@ name# Is!123 iBangera");
fclose($file);
$file_1=fopen("shri.text","r");
$data=fread($file_1,filesize("shri.text"));
$size=filesize("shri.text");
$data1=strtolower($data);
echo $data1;
$vowels=array('a','i','o','u','e');
$len=strlen($data);
$vow=0;
$cons=0;
$dig=0;
$sp=0;
echo "<br>Length of the string is"." ".$len,"<br>";
$spc=preg_match('/\d/',$data);
for($i=0;$i<$len;$i++)
{
    $val=substr($data1,$i,1);
    if($val>='a'&&$val<='z')
    {
        if(strcmp($val,'a')==0||strcmp($val,'e')==0||strcmp($val,'i')==0||strcmp($val,'o')==0||strcmp($val,'u')==0)
        {
            $vow++;
        }
        else
        {
            $cons++;
        }
    }
    else if($val>=0&&$val<=9)
    {
        $dig++;
    }
    else if($spc)
    {
        $sp++;
    }
}
$line=count(file("shri.text"));
echo "Number of lines are:".$line."<br>";
echo "Number of words are:".str_word_count($data1)."<br>";
echo "Number of characters are:".$len."<br>";
echo "Number of Vowels are:".$vow."<br>";
echo "Number of Digits are:".$dig."<br>";
echo "Number of consaonant are:".$cons."<br>";
echo "Number of Special Characters are:",$sp-$dig,"<br>";
echo "Size of the file is:".$size."<br>";
fclose ($file_1);
?>