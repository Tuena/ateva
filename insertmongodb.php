<?php
include_once("atevaht.html")
    
$connect=new MongoClient();
$db=$connect->local;
$collection=$db->heil;
$cursor=$collection->find();

if($_post)
{
    $insert=array('ProductKey'=>$_post['ProductKey']
        'Username'=>$_post['Username']
        'Password'=>$_post['Password']
        'Confirmpassword'=>$_post['Confirmpassword']);
}
if($collection->insert($insert))
{
    echo "data is inserted";
}
else if{
    echo"some issue";
}
else
{
    echo "no data to store";
}
    php>