<?php

/**
 * top100arena.com incentive voting
 * described at: http://www.top100arena.com/incentive.asp
 *
 * @package FusionCMS
 * @author Maxi Arnicke
 * @link https://github.com/Yekta-Core/FusionCMS/
 */

require_once(APPPATH.'modules/vote/plugins/classes/VoteCallbackPlugin.php');

class Top100arena extends VoteCallbackPlugin
{
	public $url = "top100arena.com";
	public $voteLinkFormat = "{vote_link}&incentive={user_id}";
	
	protected function checkAccess()
	{
		return $this->CI->input->ip_address() == '209.59.143.11';
	}
	
	protected function readUserId()
	{
		return $this->CI->input->post('postback');
	}
}