<?php
namespace App\Newsletter;

class Bundle extends \Coxis\Core\BundleLoader {
	public function load($queue) {
		parent::load();
	}

	public function run() {
		AdminMenu::$menu[0]['childs'][] = array('label' => 'Newsletter', 'link' => 'newsletter');
		\Coxis\Admin\Libs\AdminMenu::$home[] = array('img'=>\URL::to('newsletter/icon.svg'), 'link'=>'newsletter', 'title' => __('Newsletter'), 'description' => __('Mange your newsletters.'));
		AdminMenu::$menu[0]['childs'][] = array('label' => __('Subscribers'), 'link' => 'subscribers');
		\Coxis\Admin\Libs\AdminMenu::$home[] = array('img'=>\URL::to('newsletter/subscribers-icon.svg'), 'link'=>'subscribers', 'title' => __('Subscribers'), 'description' => __('Subscribers of your newsletter.'));
		parent::run();
	}
}
return new Bundle;