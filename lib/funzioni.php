<?php

// SETTAGGI APPLICAZIONE 
$copyright = "Studio Giglio";
$azienda = "Studio Giglio";
$area_riservata = "S";
$upload_path = "../upload/";

function uploadPath() {
    $file_upload = "../upload/";
    if (!isset($_SERVER['DOCUMENT_ROOT'])) {
        if (isset($_SERVER['SCRIPT_FILENAME'])) {
            $_SERVER['DOCUMENT_ROOT'] = str_replace('\\', '/', substr($_SERVER['SCRIPT_FILENAME'], 0, 0 - strlen($_SERVER['PHP_SELF'])));
        };
    };

    if (!isset($_SERVER['DOCUMENT_ROOT'])) {
        if (isset($_SERVER['PATH_TRANSLATED'])) {
            $_SERVER['DOCUMENT_ROOT'] = str_replace('\\', '/', substr(str_replace('\\\\', '\\', $_SERVER['PATH_TRANSLATED']), 0, 0 - strlen($_SERVER['PHP_SELF'])));
        };
    };
    $PercorsoDominio = $_SERVER['DOCUMENT_ROOT'];
    $public = $PercorsoDominio . $file_upload . "/";
    return $public;
}

function utf8_to_rtf($utf8_text) {
    $utf8_patterns = array(
        "[\xC2-\xDF][\x80-\xBF]",
        "[\xE0-\xEF][\x80-\xBF]{2}",
        "[\xF0-\xF4][\x80-\xBF]{3}",
    );
    $new_str = $utf8_text;
    foreach ($utf8_patterns as $pattern) {
        $new_str = preg_replace("/($pattern)/e", "'\u'.hexdec(bin2hex(mb_convert_encoding('$1', 'UTF-16', 'UTF-8'))).'?'", $new_str);
    }
    return $new_str;
}

function formatta_euro($num) {
    $eu = number_format($num, 2, ',', '.');
    return " € " . $eu;
}

function format_data($d) {
    $veto = explode(" ", $d);
    $data = $veto[0];
    $vet = explode("-", $data);
    $df = $vet[2] . "-" . $vet[1] . "-" . $vet[0];
    if ($df == "00-00-0000" || $df == "--") {
        $df = "";
    }
    return $df;
}

class MysqlClass {

    // variabili per la connessione al database

    private $nomehost = "localhost";
    private $nomeuser = "nova";
    private $password = "migm73";
    private $nomedb = "studiogiglio";
    // controllo sulle connessioni attive
    private $attiva = false;

    // funzione per la connessione a MySQL
    public function connetti() {
        if (!$this->attiva) {
            if ($connessione = mysql_connect($this->nomehost, $this->nomeuser, $this->password) or die(mysql_error())) {
                $selezione = mysql_select_db($this->nomedb, $connessione) or die(mysql_error());
                mysql_set_charset('utf8');
            }
        } else {
            return true;
        }
    }

//funzione per l'esecuzione delle query 
    public function query($sql) {
        if (isset($this->attiva)) {
            $sql = mysql_query($sql) or die(mysql_error());
            return $sql;
        } else {
            return false;
        }
    }

//funzione per l'inserimento dei dati in tabella
    public function inserisci($t, $v, $r = null) {
        if (isset($this->attiva)) {
            $istruzione = 'INSERT INTO ' . $t;
            if ($r != null) {
                $istruzione .= ' (' . $r . ')';
            }

            for ($i = 0; $i < count($v); $i++) {
                if (is_string($v[$i]))
                    $v[$i] = '"' . $v[$i] . '"';
            }
            $v = implode(',', $v);
            $istruzione .= ' VALUES (' . $v . ')';

            $query = mysql_query($istruzione) or die(mysql_error());
        }else {
            return false;
        }
    }

//funzione per l'estrazione dei record 
    public function estrai($risultato) {
        if (isset($this->attiva)) {
            $r = mysql_fetch_object($risultato);
            return $r;
        } else {
            return false;
        }
    }

    // funzione per la formattazione della data
    public function format_data($d) {
        $veto = explode(" ", $d);
        $data = $veto[0];
        $vet = explode("-", $data);
        $df = $vet[2] . "/" . $vet[1] . "/" . $vet[0];
        if ($df == "00/00/0000" || $df == "//") {
            $df = "";
        }
        return $df;
    }

    public function format_data_ora($d) {
        $veto = explode(" ", $d);
        $data = $veto[0];
        $ora = $veto[1];
        $vet = explode("-", $data);
        $df = $vet[2] . "/" . $vet[1] . "/" . $vet[0];
        if ($df == "00/00/0000" || $df == "//") {
            $df = "";
        } else {
            $df = $df . ' alle ' . $ora;
        }
        return $df;
    }

// funzione per la chiusura della connessione
    public function disconnetti() {
        if ($this->attiva) {
            if (mysql_close()) {
                $this->attiva = false;
                return true;
            } else {
                return false;
            }
        }
    }

}

?>