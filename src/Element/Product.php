<?php
namespace CodeBot\Element;
class Product implements ElementInterface
{
	private $title;
	private $img_url;
	private $subtitle;
	private $default_action;
	private $buttons;

	public function __construct(string $title, ? string $img_url = null, ? string $subtitle = null, Button $default_action, $buttons)
	{
		$this->title = $title;
		$this->img_url = $img_url;
		$this->subtitle = $subtitle;
		$this->default_action = $default_action;
		
	}

	public function add(Button $element)
	{
		$this->buttons[] = $element->get();
	}

	public function get() :array
	{
		$result['title'] = $this->title;
		if ($this->image_url !== null) {
			$result['image_url'] = $this->image_url;
		}
		if ($this->default_action !== null) {
			$default_action = $this->default_action->get();
			unset($default_action['title']);
			$result['default_action'] = $default_action;
		}
		if ($this->image_url !== null) {
			$result['image_url'] = $this->image_url;
		}
		return $result;
	}
}