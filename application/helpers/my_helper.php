<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
  function to display bootstrap notification with bootstrap.notify.js
 */
function b_notify($title = "", $message, $type = "primary") {
    echo "
			<script>
			$.notify('<strong> " . $message . "</strong> ', {
				animate: {
					enter: 'animated bounceInDown',
					exit: 'animated bounceOutUp'
				},
					type: '" . $type . "'
				
			});
			</script>
		";
}

//function to show global error msg
function errorMsg($InfoTxt = 'Error', $msg) {
    try {
        return '<div class="alert alert-danger" role="alert"><div class="row vertical-align"><div class="col-xs-1 text-center"><i class="icon icon-exclamation-triangle icon-2x"></i></div><div class="col-xs-11"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$msg.'</div></div></div>';
    } catch (Exception $exc) {
        return false;
    }
}

//function to show global successfully Done msg
function sucMsg($InfoTxt = 'Information', $msg) {
    try {
        return '<div class="alert alert-success" role="alert"><div class="row vertical-align"><div class="col-xs-1 text-center"><i class="icon icon-check fa-2x"></i></div><div class="col-xs-11"><strong>'. $InfoTxt .'</strong> '. $msg . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div></div></div>';
    } catch (Exception $exc) {
        return false;
    }
}

//GET CURRENCY
if ( ! function_exists('currency'))
{

    function currency($val='',$def=''){
        //echo $val;
        $CI=& get_instance();
        //$CI->security->cron_line_security();
        $CI->load->database();

        $currency_format = $CI->db->get_where('business_settings', array('type' => 'currency_format'))->row()->value;
        $symbol_format = $CI->db->get_where('business_settings', array('type' => 'symbol_format'))->row()->value;
        $no_of_decimal =  $CI->db->get_where('business_settings', array('type' => 'no_of_decimals'))->row()->value;
        if($currency_format == 'us'){
            $dec_point = '.';
            $thousand_sep = ',';
        }elseif($currency_format == 'german'){
            $dec_point = ',';
            $thousand_sep = '.';
        }elseif($currency_format == 'french'){
            $dec_point = ',';
            $thousand_sep = ' ';
        }
        //echo $CI->session->userdata('currency');
        if($currency_id = $CI->session->userdata('currency')){} else {
            $currency_id = $CI->db->get_where('business_settings', array('type' => 'currency'))->row()->value;
        }
        if($def == 'def'){
            $currency_id = $CI->db->get_where('business_settings', array('type' => 'currency'))->row()->value;
        }
        $exchange_rate = $CI->db->get_where('currency_settings', array('currency_settings_id' => $currency_id))->row()->exchange_rate_def;
        $symbol = $CI->db->get_where('currency_settings', array('currency_settings_id' => $currency_id))->row()->symbol;

        if($val == ''){
            return $symbol;
        } else {

            //echo $a = 10*0.012;
            //echo $val."<br>";
            //echo $exchange_rate."<br>";
            $val = $val*$exchange_rate;
            if($def == 'only_val'){
                return number_format($val,$no_of_decimal);
            } else {
                if($symbol_format == 's_amount'){
                    return $symbol.'&nbsp;'.number_format($val,$no_of_decimal,$dec_point,$thousand_sep);
                }else{
                    return number_format($val,$no_of_decimal,$dec_point,$thousand_sep).$symbol;
                }
            }
        }


    }


}


?>