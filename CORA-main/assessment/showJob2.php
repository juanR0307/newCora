<?php

$id = $_SESSION['user_id'];

$sql = "SELECT code FROM stud_code WHERE student_id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$studCode = $row['code'];

if(strlen($studCode) > 3) {
    //string to array
    $code = explode(" ", $studCode);
    //slice into 3
    $arrayCode = array_slice($code, 0, 3);

    list($letter1, $letter2, $letter3) = $arrayCode;

    //combination 1
    $combi1 = array($letter1, $letter3, $letter2);
    $combination1 = implode("", $combi1);

    //combination 2
    $combi2 = array($letter2, $letter1, $letter3);
    $combination2 = implode("", $combi2);

    //combination 3
    $combi3 = array($letter2, $letter3, $letter1);
    $combination3 = implode("", $combi3);

    //combination 4
    $combi4 = array($letter3, $letter1, $letter2);
    $combination4 = implode("", $combi4);

    //combination 2
    $combi5 = array($letter3, $letter2, $letter1);
    $combination5 = implode("", $combi5);

}

$sql = "SELECT * FROM jobs WHERE jobCode = '$combination1' or jobCode = '$combination2' 
or jobCode = '$combination3' or jobCode = '$combination4' 
or jobCode = '$combination5' ORDER BY jobCode";

$result = mysqli_query($conn, $sql);

    // //RIA
    // if($combination1 == "RIA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'RIA'
    //     or jobCode = 'IRA' or jobCode = 'ARI' or jobCode = 'AIR'  
    //     ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //RAI
    // elseif($combination1 == "RAI") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'R%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //RAS
    // elseif($combination1 == "RAS") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'ARS' or jobCode = 'ASR' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //RAE
    // elseif($combination1 == "RAE") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'RAE'
    //     or jobCode = 'REA' or jobCode = 'AER' or jobCode = 'ARE' or jobCode = 'EAR' 
    //     or jobCode = 'ERA' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //RAC
    // elseif($combination1 == "RAC") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'R%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //RSA
    // elseif($combination1 == "RSA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'RSA'
    //     or jobCode = 'RAS' or jobCode = 'ARS' or jobCode = 'ASR' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //IRA
    // elseif($combination1 == "IRA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'IRA'
    //     or jobCode = 'IAR' or jobCode = 'RIA' or jobCode = 'AIR' 
    //     or jobCode = 'ARI' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //IAR
    // elseif($combination1 == "IAR") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'IAR'
    //     or jobCode = 'IRA' or jobCode = 'AIR' or jobCode = 'ARI' 
    //     or jobCode = 'RIA' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //IAS
    // elseif($combination1 == "IAS") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'IAS'
    //     or jobCode = 'ISA' or jobCode = 'AIS' or jobCode = 'ASI' 
    //     or jobCode = 'SIA' or jobCode = 'SAI' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //IAE
    // elseif($combination1 == "IAE") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'I%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //IAC
    // elseif($combination1 == "IAC") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'I%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //IEA
    // elseif($combination1 == "IEA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'I%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //IEC
    // elseif($combination1 == "IEC") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'IEC'
    //     or jobCode = 'ICE' or jobCode = 'EIC' or jobCode = 'ECI' 
    //     or jobCode = 'CIE' or jobCode = 'CEI' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //ICA
    // elseif($combination1 == "ICA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'I%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //ICS
    // elseif($combination1 == "ICS") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'I%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //ICE
    // elseif($combination1 == "ICE") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'ICE'
    //     or jobCode = 'IEC' or jobCode = 'CIE' or jobCode = 'CEI' 
    //     or jobCode = 'EIC' or jobCode = 'ECI' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //ARI
    // elseif($combination1 == "ARI") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'ARI'
    //     or jobCode = 'AIR' or jobCode = 'RIA' or jobCode = 'IRA' 
    //     or jobCode = 'IAR' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //ARS
    // elseif($combination1 == "ARS") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'ARS'
    //     or jobCode = 'ASR' or jobCode = 'RAS' 
    //     or jobCode = 'RSA' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //ARC
    // elseif($combination1 == "ARC") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //AIS
    // elseif($combination1 == "AIS") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'AIS'
    //     or jobCode = 'ARI' or jobCode = 'IRA' 
    //     or jobCode = 'IAR' or jobCode = 'RIA' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //AIC
    // elseif($combination1 == "AIC") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //ASC
    // elseif($combination1 == "ASC") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'ASC'
    //     or jobCode = 'SAC' or jobCode = 'SCA' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //AEC
    // elseif($combination1 == "AEC") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //ACR
    // elseif($combination1 == "ACR") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //ACI
    // elseif($combination1 == "ACI") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //ACS
    // elseif($combination1 == "ACS") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //ACE
    // elseif($combination1 == "ACE") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //SRI
    // elseif($combination1 == "SRI") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'SRI'
    //     or jobCode = 'SIR' or jobCode = 'RSI' 
    //     or jobCode = 'RIS' or jobCode = 'ISR'  
    //     or jobCode = 'IRS' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //SRA
    // elseif($combination1 == "SRA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'S%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //SIA
    // elseif($combination1 == "SIA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'SIA'
    //     or jobCode = 'SAI' or jobCode = 'ISA' 
    //     or jobCode = 'IAS' or jobCode = 'ASI'  
    //     or jobCode = 'AIS' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //SIC
    // elseif($combination1 == "SIC") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'SIC'
    //     or jobCode = 'SCI' or jobCode = 'ISC' or jobCode = 'CSI' 
    //     or jobCode = 'CIS'  ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //SAR
    // elseif($combination1 == "SAR") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'S%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //SAC
    // elseif($combination1 == "SAC") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'SAC'
    //     or jobCode = 'SCA' or jobCode = 'ASC' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //SCI
    // elseif($combination1 == "SCI") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'SCI'
    //     or jobCode = 'SIC' or jobCode = 'CSI' or jobCode = 'CIS' 
    //     or jobCode = 'ISC'  ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //SCA
    // elseif($combination1 == "SCA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'S%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //ERA
    // elseif($combination1 == "ERA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'ERA'
    //     or jobCode = 'EAR' or jobCode = 'REA' or jobCode = 'RAE' 
    //     or jobCode = 'AER' or jobCode = 'ARE' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //EAR
    // elseif($combination1 == "EAR") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'EAR'
    //     or jobCode = 'ERA' or jobCode = 'AER' or jobCode = 'ARE' 
    //     or jobCode = 'REA' or jobCode = 'RAE' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //EAI
    // elseif($combination1 == "EAI") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'EAI'
    //     or jobCode = 'EIA' or jobCode = 'AEI' or jobCode = 'AIE' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //EAC
    // elseif($combination1 == "EAC") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'E%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //ECA
    // elseif($combination1 == "ECA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'E%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //CRA
    // elseif($combination1 == "CRA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'CRA'
    //     or jobCode = 'RCA' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //CIA
    // elseif($combination1 == "CIA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'CIA'
    //     or jobCode = 'ACI' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //CIE
    // elseif($combination1 == "CIE") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'CIE'
    //     or jobCode = 'CEI' or jobCode = 'IEC' or jobCode = 'ECI' 
    //     or jobCode = 'EIC' or jobCode = 'ICE' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //CAR
    // elseif($combination1 == "CAR") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //CAI
    // elseif($combination1 == "CAI") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //CAS
    // elseif($combination1 == "CAS") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //CAE
    // elseif($combination1 == "CAE") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //CSI
    // elseif($combination1 == "CSI") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'CSI'
    //     or jobCode = 'CIS' or jobCode = 'SCI' or jobCode = 'SIC' 
    //     or jobCode = 'ISC' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //CSA
    // elseif($combination1 == "CSA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }
    // //CEI
    // elseif($combination1 == "CEI") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode = 'CEI'
    //     or jobCode = 'CIE' or jobCode = 'ACI' or jobCode = 'EIC' 
    //     or jobCode = 'IEC' or jobCode = 'ICE' ORDER BY jobCode";

    //     $result = mysqli_query($conn, $sql);
    // }
    // //CEA
    // elseif($combination1 == "CEA") {

    //     $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
    //     $result = mysqli_query($conn, $sql);
    // }

    // //else
    // else {
    //     $sql = "SELECT * FROM jobs WHERE jobCode = '".$combination1."'";
    //     $result = mysqli_query($conn, $sql);
    // }

?>