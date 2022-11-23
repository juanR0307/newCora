<?php
$id = $_SESSION['user_id'];

    //RIA
    if($finalCode == "RIA") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'IRA' or jobCode = 'ARI' or jobCode = 'AIR'  
        ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //RAI
    elseif($finalCode == "RAI") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'R%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //RAS
    elseif($finalCode == "RAS") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'ARS' or jobCode = 'ASR' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //RAE
    elseif($finalCode == "RAE") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'REA' or jobCode = 'AER' or jobCode = 'ARE' or jobCode = 'EAR' 
        or jobCode = 'ERA' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //RAC
    elseif($finalCode == "RAC") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'R%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //RSA
    elseif($finalCode == "RSA") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'RAS' or jobCode = 'ARS' or jobCode = 'ASR' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //IRA
    elseif($finalCode == "IRA") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'IAR' or jobCode = 'RIA' or jobCode = 'AIR' 
        or jobCode = 'ARI' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //IAR
    elseif($finalCode == "IAR") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'IRA' or jobCode = 'AIR' or jobCode = 'ARI' 
        or jobCode = 'RIA' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //IAS
    elseif($finalCode == "IAS") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'ISA' or jobCode = 'AIS' or jobCode = 'ASI' 
        or jobCode = 'SIA' or jobCode = 'SAI' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //IAE
    elseif($finalCode == "IAE") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'I%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //IAC
    elseif($finalCode == "IAC") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'I%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //IEA
    elseif($finalCode == "IEA") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'I%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //IEC
    elseif($finalCode == "IEC") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'ICE' or jobCode = 'EIC' or jobCode = 'ECI' 
        or jobCode = 'CIE' or jobCode = 'CEI' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //ICA
    elseif($finalCode == "ICA") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'I%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //ICS
    elseif($finalCode == "ICS") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'I%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //ICE
    elseif($finalCode == "ICE") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'IEC' or jobCode = 'CIE' or jobCode = 'CEI' 
        or jobCode = 'EIC' or jobCode = 'ECI' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //ARI
    elseif($finalCode == "ARI") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'AIR' or jobCode = 'RIA' or jobCode = 'IRA' 
        or jobCode = 'IAR' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //ARS
    elseif($finalCode == "ARS") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'ASR' or jobCode = 'RAS' 
        or jobCode = 'RSA' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //ARC
    elseif($finalCode == "ARC") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //AIS
    elseif($finalCode == "AIS") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'ARI' or jobCode = 'IRA' 
        or jobCode = 'IAR' or jobCode = 'RIA' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //AIC
    elseif($finalCode == "AIC") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //ASC
    elseif($finalCode == "ASC") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'SAC' or jobCode = 'SCA' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //AEC
    elseif($finalCode == "AEC") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //ACR
    elseif($finalCode == "ACR") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //ACI
    elseif($finalCode == "ACI") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //ACS
    elseif($finalCode == "ACS") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //ACE
    elseif($finalCode == "ACE") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'A%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //SRI
    elseif($finalCode == "SRI") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'SIR' or jobCode = 'RSI' 
        or jobCode = 'RIS' or jobCode = 'ISR'  
        or jobCode = 'IRS' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //SRA
    elseif($finalCode == "SRA") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'S%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //SIA
    elseif($finalCode == "SIA") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'SAI' or jobCode = 'ISA' 
        or jobCode = 'IAS' or jobCode = 'ASI'  
        or jobCode = 'AIS' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //SIC
    elseif($finalCode == "SIC") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'SCI' or jobCode = 'ISC' or jobCode = 'CSI' 
        or jobCode = 'CIS'  ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //SAR
    elseif($finalCode == "SAR") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'S%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //SAC
    elseif($finalCode == "SAC") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'SCA' or jobCode = 'ASC' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //SCI
    elseif($finalCode == "SCI") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'SIC' or jobCode = 'CSI' or jobCode = 'CIS' 
        or jobCode = 'ISC'  ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //SCA
    elseif($finalCode == "SCA") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'S%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //ERA
    elseif($finalCode == "ERA") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'EAR' or jobCode = 'REA' or jobCode = 'RAE' 
        or jobCode = 'AER' or jobCode = 'ARE' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //EAR
    elseif($finalCode == "EAR") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'ERA' or jobCode = 'AER' or jobCode = 'ARE' 
        or jobCode = 'REA' or jobCode = 'RAE' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //EAI
    elseif($finalCode == "EAI") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'EIA' or jobCode = 'AEI' or jobCode = 'AIE' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //EAC
    elseif($finalCode == "EAC") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'E%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //ECA
    elseif($finalCode == "ECA") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'E%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //CRA
    elseif($finalCode == "CRA") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'RCA' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //CIA
    elseif($finalCode == "CIA") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'ACI' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //CIE
    elseif($finalCode == "CIE") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'CEI' or jobCode = 'IEC' or jobCode = 'ECI' 
        or jobCode = 'EIC' or jobCode = 'ICE' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //CAR
    elseif($finalCode == "CAR") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //CAI
    elseif($finalCode == "CAI") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //CAS
    elseif($finalCode == "CAS") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //CAE
    elseif($finalCode == "CAE") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //CSI
    elseif($finalCode == "CSI") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'CIS' or jobCode = 'SCI' or jobCode = 'SIC' 
        or jobCode = 'ISC' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //CSA
    elseif($finalCode == "CSA") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }
    //CEI
    elseif($finalCode == "CEI") {

        $sql = "SELECT * FROM jobs WHERE jobCode = 'CIE' or jobCode = 'ACI' or jobCode = 'EIC' 
        or jobCode = 'IEC' or jobCode = 'ICE' ORDER BY jobCode";

        $result = mysqli_query($conn, $sql);
    }
    //CEA
    elseif($finalCode == "CEA") {

        $sql = "SELECT * FROM jobs WHERE jobCode LIKE 'C%' ORDER BY jobCode";
        $result = mysqli_query($conn, $sql);
    }

    //else
    else {
        $sql = "SELECT * FROM jobs WHERE jobCode = '".$finalCode."'";
        $result = mysqli_query($conn, $sql);
    }

?>