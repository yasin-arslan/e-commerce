<?php 
include 'function.php';
ob_start();
session_start();
include 'baglan.php';
if(isset($_POST['settings-update'])){

    $save = $db ->prepare("UPDATE ayar SET
    title=:title,
    description=:description,
    keywords=:keywords,
    author=:author
    WHERE id=0");
    $update = $save->execute(array(
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'keywords' => $_POST['keywords'],
        'author' => $_POST['author']
    ));
    if($update){
        header("Location:site-settings.php?status=success");
    }else{
        header("Location:site-settings.php?status=failed");
    }
}
if(isset($_POST['contact-update'])){
    $contactsave = $db -> prepare("UPDATE ayar set
    facebook =:facebook,
    youtube =:youtube,
    twitter =:twitter,
    instagram =:instagram,
    tel =:tel,
    gsm =:gsm,
    faks =:faks,
    mail =:mail,
    il =:il,
    ilce =:ilce WHERE id=0
    ");
    $contactupdate = $contactsave->execute(array(
        'facebook' => $_POST['facebook'],
        'youtube' => $_POST['youtube'],
        'twitter' => $_POST['twitter'],
        'instagram' => $_POST['instagram'],
        'tel' => $_POST['tel'],
        'gsm' => $_POST['gsm'],
        'faks' => $_POST['faks'],
        'mail' => $_POST['mail'],
        'il' => $_POST['il'],
        'ilce' => $_POST['ilce'],
    ));
    if($contactupdate){
        header("Location:contact-settings.php?status=success");
    }else{
        header("Location:contact-settings.php?status=failed");
    }
}
if(isset($_POST['api-update'])){
    $apisave = $db -> prepare("UPDATE ayar set
    analitik =:analitik,
    zopim =:zopim,
    maps =:maps,
    smtphost =:smtphost,
    smtpuser =:smtpuser,
    smtppassword =:smtppassword,
    smtpport =:smtpport
     WHERE id=0
    ");
    $apiupdate = $apisave->execute(array(
        'analitik' => $_POST['analitik'],
        'zopim' => $_POST['zopim'],
        'maps' => $_POST['maps'],
        'smtphost' => $_POST['smtphost'],
        'smtpuser' => $_POST['smtpuser'],
        'smtppassword' => $_POST['smtppassword'],
        'smtpport' => $_POST['smtpport'],
    ));
    if($apiupdate){
        header("Location:api-mail-settings.php?status=success");
    }else{
        header("Location:api-mail-settings.php?status=failed");
    }
}
if(isset($_POST['about-update'])){
    $aboutsave = $db -> prepare("UPDATE aboutus set
        aboutbaslik =:aboutbaslik,
        abouticerik =:abouticerik,
        aboutresim =:aboutresim,
        resim_1 =:resim_1,
        isim_1 =:isim_1,
        text_1 =:text_1,
        pozisyon_1 =:pozisyon_1,
        resim_2 =:resim_2,
        isim_2 =:isim_2,
        pozisyon_2 =:pozisyon_2,
        text_2 =:text_2,
        resim_3 =:resim_3,
        isim_3 =:isim_3,
        pozisyon_3 =:pozisyon_3,
        text_3 =:text_3
     WHERE id=0");
    $aboutupdate = $aboutsave -> execute(array(
        'aboutbaslik' => $_POST['aboutbaslik'],
        'aboutresim' => $_POST['aboutresim'],
        'abouticerik' => $_POST['abouticerik'],
        'resim_1' => $_POST['resim_1'],
        'isim_1' => $_POST['isim_1'],
        'text_1' => $_POST['text_1'],
        'pozisyon_1' => $_POST['pozisyon_1'],
        'resim_2' => $_POST['resim_2'],
        'isim_2' => $_POST['isim_2'],
        'text_2' => $_POST['text_2'],
        'pozisyon_2' => $_POST['pozisyon_2'],
        'resim_3' => $_POST['resim_3'],
        'isim_3' => $_POST['isim_3'],
        'text_3' => $_POST['text_3'],
        'pozisyon_3' => $_POST['pozisyon_3']
    ));
    if($aboutupdate){
        header("Location:about-us-settings.php?status=success");
    }else{
        header("Location:about-us-settings.php?status=failed");
    }
}
if(isset($_POST['adminlogin'])){
    $usermail = $_POST['usermail'];
    $userpassword = md5($_POST['userpassword']);
    $adminsorgu = $db -> prepare("SELECT * FROM users WHERE usermail=:usermail AND userpassword =:userpassword AND useryetki =:useryetki");
    $adminsorgu->execute(array(
        'usermail' => $usermail,
        'userpassword' => $userpassword,
        'useryetki' => 0
    ));
    $sorgusonuc = $adminsorgu->rowCount();
    if($sorgusonuc >= 1){
        $_SESSION['usermail'] = $usermail;
        header("Location:index.php");
    }else{  
        header("Location:login.php?status=failed");
    }
}
if(isset($_POST['user-edit-update'])){
    $userid = $_POST['userid'];
    $usersave = $db -> prepare("UPDATE users SET
    userad = :userad,
    usersoyad = :usersoyad,
    userresim = :userresim,
    usertc = :usertc,
    usergsm = :usergsm,
    useradres = :useradres,
    userunvan = :userunvan,
    userdurum = :userdurum,
    il = :il,
    ilce = :ilce WHERE userid={$_POST['userid']}");
    $usereditupdate = $usersave -> execute(array(
        'userad' => $_POST['userad'],
        'usersoyad' => $_POST['usersoyad'],
        'userresim' => $_POST['userresim'],
        'usertc' => $_POST['usertc'],
        'usergsm' => $_POST['usergsm'],
        'useradres' => $_POST['useradres'],
        'userunvan' => $_POST['userunvan'],
        'userdurum' => $_POST['userdurum'],
        'il' => $_POST['il'],
        'ilce' => $_POST['ilce']
    ));
    if($usereditupdate){
        header("Location:database-user-edit.php?userid=$userid&status=success");
    }else{
        header("Location:database-user-edit.php?userid=$userid&status=failed");
    }
}
if($_GET['userdelete'] == "confirm"){
    $userdelete = $db->prepare("DELETE FROM users WHERE userid =:userid");
    $useridcontrol = $userdelete->execute(array(
        'userid' => $_GET['userid']
    ));
    if($useridcontrol){
        header("Location:users.php?user-deleted=yes");
    }else{
        header("Location:users.php?user-deleted=no");
    }
}
if(isset($_POST['menu-edit'])){
    $idmenu = $_POST['idmenu'];
    $seomenu = converttoseo($_POST['namemenu']);
    $menuedit = $db -> prepare("UPDATE menu SET
    topmenu = :topmenu,
    namemenu =:namemenu,
    urlmenu =:urlmenu,
    linemenu =:linemenu,
    seourlmenu =:seourlmenu,
    statusmenu =:statusmenu,
    contentmenu =:contentmenu WHERE idmenu={$_POST['idmenu']}");
    $menueditupdate = $menuedit -> execute(array(
        'namemenu' => $_POST['namemenu'],
        'topmenu' => $_POST['topmenu'],
        'linemenu' => $_POST['linemenu'],
        'urlmenu' => $_POST['urlmenu'],
        'seourlmenu' => $seomenu,
        'statusmenu' => $_POST['statusmenu'],
        'contentmenu' => $_POST['contentmenu']
    ));
    if($menueditupdate){
        header("Location:menu-edit.php?menuid=$idmenu&status=success");
    }else{
        header("Location:menu-edit.php?menuid=$idmenu&status=failed");
    }
}
if($_GET['menudelete'] == "confirm"){
    $menudelete = $db->prepare("DELETE FROM menu WHERE idmenu =:idmenu");
    $menuidcontrol = $menudelete->execute(array(
        'idmenu' => $_GET['menuid']
    ));
    if($menuidcontrol){
        header("Location:menu.php?menu-deleted=yes");
    }else{
        header("Location:menu.php?menu-deleted=no");
    }
}
if(isset($_POST['menu-add'])){
    $seomenu = converttoseo($_POST['namemenu']);
    $menuadd = $db -> prepare("INSERT INTO menu SET
    namemenu =:namemenu,
    urlmenu =:urlmenu,
    linemenu =:linemenu,
    seourlmenu =:seourlmenu,
    statusmenu =:statusmenu,
    contentmenu =:contentmenu");
    $menuaddcontrol = $menuadd -> execute(array(
        'namemenu' => $_POST['namemenu'],
        'linemenu' => $_POST['linemenu'],
        'urlmenu' => $_POST['urlmenu'],
        'seourlmenu' => $seomenu,
        'statusmenu' => $_POST['statusmenu'],
        'contentmenu' => $_POST['contentmenu']
    ));
    if($menuaddcontrol){
        header("Location:menu.php?status=success");
    }else{
        header("Location:menu.php?status=failed");
    }
}
?>