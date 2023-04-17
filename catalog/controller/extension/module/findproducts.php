<?php
class ControllerExtensionModuleFindproducts extends Controller
{
	public function index($setting)
	{
		$this->load->language('extension/module/findproducts');

		if (isset($setting['name'][$this->config->get('config_language_id')])) {
			$data['html'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			return $this->load->view('extension/module/findproducts', $data);
		}
	}
}
