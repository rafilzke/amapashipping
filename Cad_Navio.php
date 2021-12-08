<?php

date_default_timezone_set('America/Belem');
$date = date('Y-m-d H:i');
include 'conectar.php';

if (isset($_POST['cadastra'])) {

$vesselname = mb_strtoupper($_POST['vesselname']);
$type = mb_strtoupper($_POST['type']);
$portofregistry = mb_strtoupper($_POST['portofregistry']);
$officialno = mb_strtoupper($_POST['officialno']);
$imo = mb_strtoupper($_POST['imono']);
$mmsino = mb_strtoupper($_POST['mmsino']);
$class = mb_strtoupper($_POST['class']);
$callsign = mb_strtoupper($_POST['callsign']);
$builders = mb_strtoupper($_POST['builders']);
$yearbuilt = mb_strtoupper($_POST['yearbuilt']);
$keellaid = mb_strtoupper($_POST['keellaid']);
$dateofdelivery = mb_strtoupper($_POST['dateofdelivery']);
$buildersno = mb_strtoupper($_POST['buildersno']);
$registeredowners = mb_strtoupper($_POST['registeredowners']);
$management = mb_strtoupper($_POST['portofregistry']);
$summerdwt = mb_strtoupper($_POST['summerdwt']);
$summerdraft = mb_strtoupper($_POST['summerdraft']);
$summerfreeboard = mb_strtoupper($_POST['summerfreeboard']);
$summerdisplacement = mb_strtoupper($_POST['summerdisplacement']);
$tpc = mb_strtoupper($_POST['tpc']);
$lightweight = mb_strtoupper($_POST['lightweight']);
$grosstonnage = mb_strtoupper($_POST['grosstonnage']);
$netttonnage = mb_strtoupper($_POST['netttonnage']);
$loa = mb_strtoupper($_POST['loa']);
$lbp = mb_strtoupper($_POST['lbp']);
$distbowtobridge = mb_strtoupper($_POST['distbowtobridge']);
$diststerntobridge = mb_strtoupper($_POST['diststerntobridge']);
$breadthmoulded = mb_strtoupper($_POST['breadthmoulded']);
$depthmoulded = mb_strtoupper($_POST['depthmoulded']);
$htabovekeel = mb_strtoupper($_POST['htabovekeel']);
$capbulk = mb_strtoupper($_POST['capbulk']);
$capbale = mb_strtoupper($_POST['capbale']);
$capwaterballast = mb_strtoupper($_POST['capwaterballast']);
$capfreshwater = mb_strtoupper($_POST['capfreshwater']);
$capfo = mb_strtoupper($_POST['capfo']);
$capdo = mb_strtoupper($_POST['capdo']);
$caplubeoil = mb_strtoupper($_POST['caplubeoil']);
$hatchcovertype = mb_strtoupper($_POST['hatchcovertype']);
$cranes = mb_strtoupper($_POST['cranes']);
$grabsnoxcapacity = mb_strtoupper($_POST['grabsnoxcapacity']);
$windlass = mb_strtoupper($_POST['windlass']);
$mooringwinch = mb_strtoupper($_POST['mooringwinch']);
$mainengine = mb_strtoupper($_POST['mainengine']);
$auxiliarengine = mb_strtoupper($_POST['auxiliarengine']);
$steeringgear = mb_strtoupper($_POST['steeringgear']);
$vsattelno = mb_strtoupper($_POST['vsattelno']);
$email = mb_strtoupper($_POST['email']);
$anchors = mb_strtoupper($_POST['anchors']);




$rsCadastro = 'INSERT INTO navio (vesselname,
type,
portofregistry,
officialno,
imo,
mmsino,
class,
callsign,
builders,
yearbuilt,
keellaid,
dateofdelivery,
buildersno,
registeredowners,
management,
summerdwt,
summerdraft,
summerfreeboard,
summerdisplacement,
tpc,
lightweight,
grosstonnage,
netttonnage,
loa,
lbp,
distbowtobridge,
diststerntobridge,
breadthmoulded,
depthmoulded,
htabovekeel,
capbulk,
capbale,
capwaterballast,
capfreshwater,
capfo,
capdo,
caplubeoil,
hatchcovertype,
cranes,
grabsnoxcapacity,
windlass,
mooringwinch,
mainengine,
auxiliarengine,
steeringgear,
vsattelno,
email,
anchors
)VALUES(:vesselname,
:type,
:portofregistry,
:officialno,
:imo,
:mmsino,
:class,
:callsign,
:builders,
:yearbuilt,
:keellaid,
:dateofdelivery,
:buildersno,
:registeredowners,
:management,
:summerdwt,
:summerdraft,
:summerfreeboard,
:summerdisplacement,
:tpc,
:lightweight,
:grosstonnage,
:netttonnage,
:loa,
:lbp,
:distbowtobridge,
:diststerntobridge,
:breadthmoulded,
:depthmoulded,
:htabovekeel,
:capbulk,
:capbale,
:capwaterballast,
:capfreshwater,
:capfo,
:capdo,
:caplubeoil,
:hatchcovertype,
:cranes,
:grabsnoxcapacity,
:windlass,
:mooringwinch,
:mainengine,
:auxiliarengine,
:steeringgear,
:vsattelno,
:email,
:anchors
)';

    try {
        $qrCadastro = $conecta->prepare($rsCadastro);
        $qrCadastro->bindValue('vesselname',$vesselname, PDO::PARAM_STR);
$qrCadastro->bindValue('type',$type, PDO::PARAM_STR);
$qrCadastro->bindValue('portofregistry',$portofregistry, PDO::PARAM_STR);
$qrCadastro->bindValue('officialno',$officialno, PDO::PARAM_STR);
$qrCadastro->bindValue('imo',$imo, PDO::PARAM_STR);
$qrCadastro->bindValue('mmsino',$mmsino, PDO::PARAM_STR);
$qrCadastro->bindValue('class',$class, PDO::PARAM_STR);
$qrCadastro->bindValue('callsign',$callsign, PDO::PARAM_STR);
$qrCadastro->bindValue('builders',$builders, PDO::PARAM_STR);
$qrCadastro->bindValue('yearbuilt',$yearbuilt, PDO::PARAM_STR);
$qrCadastro->bindValue('keellaid',$keellaid, PDO::PARAM_STR);
$qrCadastro->bindValue('dateofdelivery',$dateofdelivery, PDO::PARAM_STR);
$qrCadastro->bindValue('buildersno',$buildersno, PDO::PARAM_STR);
$qrCadastro->bindValue('registeredowners',$registeredowners, PDO::PARAM_STR);
$qrCadastro->bindValue('management',$management, PDO::PARAM_STR);
$qrCadastro->bindValue('summerdwt',$summerdwt, PDO::PARAM_STR);
$qrCadastro->bindValue('summerdraft',$summerdraft, PDO::PARAM_STR);
$qrCadastro->bindValue('summerfreeboard',$summerfreeboard, PDO::PARAM_STR);
$qrCadastro->bindValue('summerdisplacement',$summerdisplacement, PDO::PARAM_STR);
$qrCadastro->bindValue('tpc',$tpc, PDO::PARAM_STR);
$qrCadastro->bindValue('lightweight',$lightweight, PDO::PARAM_STR);
$qrCadastro->bindValue('grosstonnage',$grosstonnage, PDO::PARAM_STR);
$qrCadastro->bindValue('netttonnage',$netttonnage, PDO::PARAM_STR);
$qrCadastro->bindValue('loa',$loa, PDO::PARAM_STR);
$qrCadastro->bindValue('lbp',$lbp, PDO::PARAM_STR);
$qrCadastro->bindValue('distbowtobridge',$distbowtobridge, PDO::PARAM_STR);
$qrCadastro->bindValue('diststerntobridge',$diststerntobridge, PDO::PARAM_STR);
$qrCadastro->bindValue('breadthmoulded',$breadthmoulded, PDO::PARAM_STR);
$qrCadastro->bindValue('depthmoulded',$depthmoulded, PDO::PARAM_STR);
$qrCadastro->bindValue('htabovekeel',$htabovekeel, PDO::PARAM_STR);
$qrCadastro->bindValue('capbulk',$capbulk, PDO::PARAM_STR);
$qrCadastro->bindValue('capbale',$capbale, PDO::PARAM_STR);
$qrCadastro->bindValue('capwaterballast',$capwaterballast, PDO::PARAM_STR);
$qrCadastro->bindValue('capfreshwater',$capfreshwater, PDO::PARAM_STR);
$qrCadastro->bindValue('capfo',$capfo, PDO::PARAM_STR);
$qrCadastro->bindValue('capdo',$capdo, PDO::PARAM_STR);
$qrCadastro->bindValue('caplubeoil',$caplubeoil, PDO::PARAM_STR);
$qrCadastro->bindValue('hatchcovertype',$hatchcovertype, PDO::PARAM_STR);
$qrCadastro->bindValue('cranes',$cranes, PDO::PARAM_STR);
$qrCadastro->bindValue('grabsnoxcapacity',$grabsnoxcapacity, PDO::PARAM_STR);
$qrCadastro->bindValue('windlass',$windlass, PDO::PARAM_STR);
$qrCadastro->bindValue('mooringwinch',$mooringwinch, PDO::PARAM_STR);
$qrCadastro->bindValue('mainengine',$mainengine, PDO::PARAM_STR);
$qrCadastro->bindValue('auxiliarengine',$auxiliarengine, PDO::PARAM_STR);
$qrCadastro->bindValue('steeringgear',$steeringgear, PDO::PARAM_STR);
$qrCadastro->bindValue('vsattelno',$vsattelno, PDO::PARAM_STR);
$qrCadastro->bindValue('email',$email, PDO::PARAM_STR);
$qrCadastro->bindValue('anchors',$anchors, PDO::PARAM_STR);

        
        $qrCadastro->execute();

        echo "<script type='text/javascript'>
				alert('Cadastro realizado com sucesso!');location.href='home_painel.php?pagina=Navios';
				</script>";
    } catch (PDOException $erro) {
        echo 'Erro ' . $erro->getMessage();
    }
}	

