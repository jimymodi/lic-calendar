<?php
class CalendarController
{
	public function year($args) {
		if(empty($args['year'])) {
			$year = date('Y');
		} else {
			$year = $args['year'];
		}

		$commonModel = CommonModel::getInstance();
		$premiums = $commonModel->getPremiumsByYear($year);

		echo "<pre>"; print_r($premiums); exit;

	}

	public function month($args) {

	}
}