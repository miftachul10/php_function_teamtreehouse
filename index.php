<?php

// creat function hello 

function hello()
{
    echo "hello world";
}
echo hello(); //hello world

// cara mengunakan grobal 

$current_user=("hunk");

function is_hunk()
{
    global $current_user;
    if ($current_user=="hunk")
    {
        echo "\nkamu adalah hunk\n";
    }else 
    {
        echo "kamu bukan hunk";
    }
    
}is_hunk();

function hellonama($nama)
{
    if(is_array($nama) || !empty($nama))
    {
        foreach($nama as $key)
        {
            echo "hello $key\n";
        }
    }else
    {
        echo "friend !";
    }
}
hellonama(["mifta","udin","anang"]);

function info($nama,$title=Null)
{
    if($title)
    {
        echo "$nama was arrived, and came as $title";
    }else
    {
        echo "$nama was arrived, wellcome";
    }
}info("miftah","frog");

// return

function helloworld()
{
    return "\nHello world";
}
$hello=helloworld();
echo $hello; 


echo PHP_EOL;

function Angka($a,$b)
{
    return [$a,$b,$a*$b];
}
print_r(Angka(4,5));

echo PHP_EOL;

function sumArray($data)
{
    $angka=0;

    foreach($data as $key)
    {
        $angka+=$key;
    }
    return $angka;
}
var_dump(sumArray([1,4,5,5]));



function answer()
{
    return "kamu kenapa";
}
$answer=answer();

echo PHP_EOL;

$answer_cal="answer";
echo $answer_cal(),"!!";

echo PHP_EOL;

$askNama="what is yuor name";
$nama="budi";

// use menampilkan var global 

$ask=function() use($askNama,$nama)
{
    return "\nask the question $askNama $nama?\n";

};
echo $ask();

function br()
{
    echo PHP_EOL;
}


$data=function(){return "terserah aja";};
echo $data();

//buit-in string in  function

$magang="magang TOP jos";
echo strlen($magang); // 

br();

echo substr($magang,7); //

br();

echo substr($magang,7,6); //

br();

echo strpos($magang ,"j"); //

br();

echo strpos($magang ,"jos"); //

br();

echo $magang [12]; //

br();
$team=[
    "budi"=> "ketua","udin"=>"wakil","nanda"=>"seketaris"
];
print_r(array_keys($team));

var_dump(array_key_exists("budi",$team));
 
br();

if(array_key_exists("udin",$team)){
    echo "ada di tim";
}else{
    echo "tidak ada di tim";
}

br();

array_walk($team,function($value,$key)
{
    echo "$key is a $value \n";
});

?>