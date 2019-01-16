<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * TemplateHelper
 */
class TemplateHelper extends Helper
{

	/**
	 * Default configuration.
	 *
	 * @var array
	 */
	protected $_defaultConfig = [];

	/*
	 * 横並びのチェックボックスを作成するテンプレートを返す。
	 * $columnCount: 1行あたり何このチェックボックスを配置するか。
	 * 使い方
	 * <?= $this->Form->control('offer_features._ids', [
	 *     'type'      => 'select',
	 *     'multiple'  => 'checkbox',
	 *     'templates' => $this->Template->checkboxRow(3),
	 * ]) ?>
	 */
	public function checkboxRow($columnCount = 3)
	{
		$bootstrapColumnMax = 12;
		$col = floor($bootstrapColumnMax / $columnCount);

		return [
			'nestingLabel' => "<div class='col-md-{$col}'>{{hidden}}<label{{attrs}} >{{input}}{{text}}</label></div>",
		];
	}
}
