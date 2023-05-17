<?php
    require_once "interscepter.php";

    // Full Thai Date
    function thai_date($strDate, $time) {
        $strYear = date("Y", strtotime($strDate)) + 543;
        $strMonth = date("n", strtotime($strDate));
        $strDay = date("j", strtotime($strDate));
        $strHour = date("H", strtotime($strDate));
        $strMinute = date("i", strtotime($strDate));
        $strSeconds = date("s", strtotime($strDate));
        $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
        $strMonthThai = $strMonthCut[$strMonth];

        if ($time) {
            return "$strDay $strMonthThai $strYear เวลา $strHour:$strMinute:$strSeconds";
        } else {
            return "$strDay $strMonthThai $strYear";
        }
    }

    function redirect($path) {
        header("Location: $path");
    }

    function time_ago($lang, $datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        if ($lang == "EN") {
            $string = array(
                'y' => 'Years',
                'm' => 'Months',
                'w' => 'Weeks',
                'd' => 'Days',
                'h' => 'Hours',
                'i' => 'Minutes',
                's' => 'Seconds',
            );
            $ago = "ago";
            $justnow = "Just now";
        } elseif ($lang == "TH") {
            $string = array(
                'y' => 'ปี',
                'm' => 'เดือน',
                'w' => 'สัปดาห์',
                'd' => 'วัน',
                'h' => 'ชั่วโมง',
                'i' => 'นาที',
                's' => 'วินาที',
            );
            $ago = "ที่แล้ว";
            $justnow = "เมื่อสักครู่นี้";

        } else {
            $string = array(
                'y' => 'ปี',
                'm' => 'เดือน',
                'w' => 'สัปดาห์',
                'd' => 'วัน',
                'h' => 'ชั่วโมง',
                'i' => 'นาที',
                's' => 'วินาที',
            );
            $ago = "ที่แล้ว";
            $justnow = "เมื่อสักครู่นี้";
        }
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) {
            $string = array_slice($string, 0, 1);
        }

        return $string ? implode(', ', $string) . ' ' . $ago : $justnow;
    }

    function thai_month($month) {
        $strMonthCut = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม.", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤษจิกายน", "ธันวาคม");
        return $strMonthCut[$month];
    }

    function rootURL($dir = __DIR__) {

        $root = "";
        $dir = str_replace('\\', '/', realpath($dir));

        //HTTPS or HTTP
        $root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';

        //HOST
        $root .= '://' . $_SERVER['HTTP_HOST'];

        //ALIAS
        if (!empty($_SERVER['CONTEXT_PREFIX'])) {
            $root .= $_SERVER['CONTEXT_PREFIX'];
            $root .= substr($dir, strlen($_SERVER['CONTEXT_DOCUMENT_ROOT']));
        } else {
            $root .= substr($dir, strlen($_SERVER['DOCUMENT_ROOT']));
        }

        $root .= '/';

        $path = explode("/", $root);

        return $path[0] . "//" . $path[2] . "/" . $path[3] . "/";
    }

    function actualURL() {
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        return $url;
    }

    function OptionTitle($id) {
        include "interscepter.php";

        $SQL = "SELECT * FROM `product_options_master` WHERE `id` = $id";
        $Query = mysqli_query($con, $SQL) or die(mysqli_error($con));
        $Result = mysqli_fetch_array($Query);

        mysqli_close($con);
        return $Result['title'];
    }

    function count_query($table, $where) {
        include "interscepter.php";

        $where = ($where) ? "WHERE $where" : "";

        $SQL = "SELECT `id` FROM $table $where";
        $Query = mysqli_query($con, $SQL) or die(mysqli_error($con));
        $Result = mysqli_num_rows($Query);

        mysqli_close($con);
        return $Result;
    }

    function get_spec_details($product, $master) {
        include "interscepter.php";

        $SQL = "SELECT * FROM `product_specs_details` WHERE `product_id` = '$product' AND `master_id` = '$master'";
        $Query = mysqli_query($con, $SQL) or die(mysqli_error($con));
        $Result = mysqli_fetch_array($Query);

        mysqli_close($con);
        return $Result;
    }

    function get_master_data($id, $master) {
        include "interscepter.php";

        if ($id) {
            $SQL = "SELECT * FROM `product_".$master."_master` WHERE `id` = $id";
            $Query = mysqli_query($con, $SQL) or die(mysqli_error($con));
            $Result = mysqli_fetch_array($Query);

            mysqli_close($con);
            return $Result['title'];
        } else {
            return null;
        }
    }

    function get_spec_data($product, $master) {
        include "interscepter.php";

        $SQL = "SELECT * FROM `product_specs_details` WHERE `product_id` = $product AND `master_id` = $master";
        $Query = mysqli_query($con, $SQL) or die(mysqli_error($con));
        $Result = mysqli_fetch_array($Query);

        mysqli_close($con);
        return (isset($Result['title'])) ? $Result['title'] : '';
    }

    function CategoryGenerator($id) {
        include "interscepter.php";

        $SQL = "SELECT * FROM `product_category` WHERE `id` = $id";
        $Query = mysqli_query($con, $SQL) or die(mysqli_error($con));
        $Result = mysqli_fetch_array($Query);

        mysqli_close($con);
        return $Result;
    }

    function calculatePercentage($CurrentPrice, $NewPrice) {
        if (($CurrentPrice != 0) && ($NewPrice != 0)) {
            $percentChange = (1 - $CurrentPrice / $NewPrice) * 100;
        } else {
            $percentChange = null;
        }

        return number_format($percentChange, 1);
    }
?>