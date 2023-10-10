<?php
class ControllerExtensionModuleManufacturersSlider extends Controller {
	private $error = array();

    public function index() {
        $this->load->language('extension/module/manufacturers_slider');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/module');
        $this->load->model('catalog/manufacturer');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
          if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('manufacturers_slider', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }
            //die(serialize($this->request->post['manufacturer']['access']));
            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $data['manufacturers_list'] = $this->model_catalog_manufacturer->getManufacturers();


        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = '';
        }

        if (isset($this->error['width'])) {
            $data['error_width'] = $this->error['width'];
        } else {
            $data['error_width'] = '';
        }

        if (isset($this->error['height'])) {
            $data['error_height'] = $this->error['height'];
        } else {
            $data['error_height'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        if (!isset($this->request->get['module_id'])) {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/manufacturers_slider', 'user_token=' . $this->session->data['user_token'], true)
            );
        } else {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/manufacturers_slider', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
            );
        }

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('extension/module/manufacturers_slider', 'user_token=' . $this->session->data['user_token'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/manufacturers_slider', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
        }

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($module_info)) {
            $data['name'] = $module_info['name'];
        } else {
            $data['name'] = '';
        }


        if (isset($this->request->post['width'])) {
            $data['width'] = $this->request->post['width'];
        } elseif (!empty($module_info)) {
            $data['width'] = $module_info['width'];
        } else {
            $data['width'] = '';
        }

        if (isset($this->request->post['height'])) {
            $data['height'] = $this->request->post['height'];
        } elseif (!empty($module_info)) {
            $data['height'] = $module_info['height'];
        } else {
            $data['height'] = '';
        }

        if (isset($this->request->post['autoplay'])) {
            $data['autoplay'] = $this->request->post['autoplay'];
        } elseif (!empty($module_info)) {
            $data['autoplay'] = $module_info['autoplay'];
        } else {
            $data['autoplay'] = '';
        }

        if (isset($this->request->post['spaceBetween'])) {
            $data['spaceBetween'] = $this->request->post['spaceBetween'];
        } elseif (!empty($module_info)) {
            $data['spaceBetween'] = $module_info['spaceBetween'];
        } else {
            $data['autoplay'] = '';
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info)) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = '';
        }

        if (isset($this->request->post['status'])) {
            $data['access'] = $this->request->post['manufacturer']['access'];
        } elseif (!empty($module_info)) {
            $data['access'] = $module_info['manufacturer']['access'];
        } else {
            $data['access'] = [];
        }

        if (isset($this->request->post['manufacturer_description'])) {
            $data['manufacturer_description'] = $this->request->post['manufacturer_description'];
        } elseif (!empty($module_info)) {
            $data['manufacturer_description'] = $module_info['manufacturer_description'];
        } else {
            $data['manufacturer_description'] = array();
        }

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();


        $data['entry_name'] = $this->language->get('entry_name');
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/manufacturers_slider', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/manufacturers_slider')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if (!$this->request->post['width']) {
            $this->error['width'] = $this->language->get('error_width');
        }

        if (!$this->request->post['height']) {
            $this->error['height'] = $this->language->get('error_height');
        }

        return !$this->error;
    }
}
