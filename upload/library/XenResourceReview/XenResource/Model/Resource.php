<?php


class XenResourceReview_XenResource_Model_Resource extends XFCP_XenResourceReview_XenResource_Model_Resource
{

	/**
	 * Determines if a user can rate a resource based on their post count
	 *
	 * @param array $resource
	 * @param array $category
	 * @param string $errorPhraseKey
	 * @param array $viewingUser
	 * @param array|null $categoryPermissions
	 *
	 * @return boolean
	 */
	public function canRateResource(array $resource, array $category, &$errorPhraseKey = '', array $viewingUser = null, array $categoryPermissions = null) {
		$visitor = XenForo_Visitor::getInstance();
		$options = XenForo_Application::get('options');

		return parent::canRateResource($resource, $category, $errorPhraseKey, $viewingUser, $categoryPermissions) && $visitor['message_count'] >= $options->xenResourceReviewMessageCount;
	}

}