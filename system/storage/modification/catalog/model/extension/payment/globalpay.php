<?php
class ModelExtensionPaymentGlobalpay extends Model {
	public function getMethod($address, $total) {
		$this->load->language('extension/payment/globalpay');

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('payment_globalpay_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

		if ($this->config->get('payment_globalpay_total') > 0 && $this->config->get('payment_globalpay_total') > $total) {
			$status = false;
		} elseif (!$this->config->get('payment_globalpay_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = array();

		if ($status) {
			$method_data = array(
				'code'       => 'globalpay',
				'title'      => $this->language->get('text_title'),
				'terms'      => '',
				'sort_order' => $this->config->get('payment_globalpay_sort_order')
			);
		}

		return $method_data;
	}

	public function addOrder($order_info, $pas_ref, $auth_code, $account, $order_ref) {
		if ($this->config->get('payment_globalpay_auto_settle') == 1) {
			$settle_status = 1;
		} else {
			$settle_status = 0;
		}

		$this->db->query("INSERT INTO `" . DB_PREFIX . "globalpay_order` SET `order_id` = '" . (int)$order_info['order_id'] . "', `settle_type` = '" . (int)$this->config->get('payment_globalpay_auto_settle') . "', `order_ref` = '" . $this->db->escape($order_ref) . "', `order_ref_previous` = '" . $this->db->escape($order_ref) . "', `date_added` = now(), `date_modified` = now(), `capture_status` = '" . (int)$settle_status . "', `currency_code` = '" . $this->db->escape($order_info['currency_code']) . "', `pasref` = '" . $this->db->escape($pas_ref) . "', `pasref_previous` = '" . $this->db->escape($pas_ref) . "', `authcode` = '" . $this->db->escape($auth_code) . "', `account` = '" . $this->db->escape($account) . "', `total` = '" . $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false) . "'");

		return $this->db->getLastId();
	}

	public function addTransaction($globalpay_order_id, $type, $order_info) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "globalpay_order_transaction` SET `globalpay_order_id` = '" . (int)$globalpay_order_id . "', `date_added` = now(), `type` = '" . $this->db->escape($type) . "', `amount` = '" . $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false) . "'");
	}

	public function addHistory($order_id, $order_status_id, $comment) {
/*QweQr Module order creation*/
          if (isset($order_status_id) && $order_status_id == (int)$order_status_id && isset($order_id)){
           $complete_statses_array = $this->config->get('config_complete_status');
           if (in_array($order_status_id,$complete_statses_array)){
               $this->load->model('checkout/order');
               $order_info_tmp =  $this->model_checkout_order->getOrder($order_id);
            if (strpos($order_info_tmp["shipping_code"],'qweqr.')!==false){
                $address = array();
                foreach ($order_info_tmp as $key=>$value){
                    if (strpos($key,'shipping_',) !== false){
                        $v = str_replace('shipping_','',$key);
                        $address[$v] = $value;
                    }
                }
                $this->load->model('extension/shipping/qweqr');
                $data_order =  $this->model_extension_shipping_qweqr->generateOrderObject($address);
                $this->model_extension_shipping_qweqr->createOrder($data_order);
            }
           }
         }
         /*!QweQr Module order creation*/
         
/*qwqer Module order creation*/
          if (isset($order_status_id) && $order_status_id == (int)$order_status_id && isset($order_id)){
           $complete_statses_array = $this->config->get('config_complete_status');
           if (in_array($order_status_id,$complete_statses_array)){
               $this->load->model('checkout/order');
               $order_info_tmp =  $this->model_checkout_order->getOrder($order_id);
            if (strpos($order_info_tmp["shipping_code"],'qwqer.')!==false){
                $address = array();
                foreach ($order_info_tmp as $key=>$value){
                    if (strpos($key,'shipping_',) !== false){
                        $v = str_replace('shipping_','',$key);
                        $address[$v] = $value;
                    }
                }
                $this->load->model('extension/shipping/qwqer');
                $data_order =  $this->model_extension_shipping_qwqer->generateOrderObject($address);
                $this->model_extension_shipping_qwqer->createOrder($data_order);
            }
           }
         }
         /*!qwqer Module order creation*/
         
                  		$this->db->query("INSERT INTO " . DB_PREFIX . "order_history SET order_id = '" . (int)$order_id . "', order_status_id = '" . (int)$order_status_id . "', notify = '0', comment = '" . $this->db->escape($comment) . "', date_added = NOW()");
	}

	public function logger($message) {
		if ($this->config->get('payment_globalpay_debug') == 1) {
			$log = new Log('globalpay.log');
			$log->write($message);
		}
	}
}