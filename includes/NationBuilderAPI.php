<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * PHP library for the NationBuilder API.
 *
 * This library provides a simplified interface for the NationBuilder API.
 *
 * @author      Richir Outreach <nicole@richiroutreach.com>
 * @version     0.1-dev
 */

class NationbuilderAPI extends OAuth2\client {
    /**
	 * The NationBuilder slug to interface with
	 *
	 * @var string
	 */	
	protected $siteSlug;

	/**
	 * OAuth2 Client ID
	 *
	 * @var string
	 */
	protected $clientID;

	/**
	 * OAuth2 Client Secret
	 *
	 * @var string
	 */
	protected $clientSecret;

	/**
	 * Token to use for OAuth2 requests
	 *
	 * @var string
	 */
	protected $token;

	/**
	 * Redirect location after succesful authentication
	 *
	 * @var string
	 */
	protected $redirectURI;

	/**
	 * The endpoint to interact with
	 *
	 * @var string
	 */
	protected $type;

	/**
	 * The slug of the subnation
	 *
	 * @var string
	 */
	protected $subNation;

	/**
	 * Construct
	 *
	 * @param 	string 	$siteSlug		Slug of the nation to interact with 
	 * @param 	string 	$id				OAuth2 Client ID
	 * @param 	string 	$secret			OAuth2 Client Secret
	 * @param 	string 	$redirectURI	URL to redirect to after successful OAuth2 authentication
	 * @param	string	$token			OAuth2 Token to use for requests
	 * @param	string	$code			OAuth2 code used to obtain a token 
	 * @param	string	$endpoint		The NB Endpoint to use
	 * @return 	void
	 */
	public function __construct($siteSlug, $id, $secret, $subNation = null, $redirectURI = null, $token = null, $code = null, $endpoint = null) {
		$this->siteSlug = $siteSlug;
		$this->clientID = $id;
		$this->clientSecret = $secret;
		$this->token = $token;
		$this->code = $code;
		$this->redirectURI = $redirectURI;
		$this->type = $endpoint;
		$this->subNation = $subNation;

		parent::__construct($id, $secret);
	}

	/**
	 * Attempt to generate a token
	 *
	 * @return	string	JSON encoded result of attempt
	 */
	public function generateToken() {
		if ($this->code == null) {
		 	return $this->generateCode();
		} else {
			return $this->getAuthorizationToken();
		}
	}

	/**
	 * Set the endpoint
	 *
	 * @param	string	$value	The new endpoint to use
	 * @return	void
	 */
	public function setEndpoint($value) {
		$this->type = $value;
	}

	/**
	 * Get the current endpoint
	 *
	 * @return	string	Current endpoint
	 */
	public function getEndpoint() {
		return $this->Type;
	}

	/**
	 * Do an index request on the current end point
	 *
	 * @return	string	JSON encoded response from NationBuilder
	 */
	public function index() {
		return $this->doRequest( 'GET' );
	}

	/**
	 * Submit a push request to the current end point
	 *
	 * @param	array	$params		An array of the request to send to NationBuilder	
	 * @return	string	JSON encoded response from NationBuilder
	 */
	public function push( $params ) {
		return $this->doRequest( 'PUT', 'push', json_encode( $params) );
	}

	/**
	 * Submit a match request to the current end point
	 *
	 * @param	array	$params		An array of the request to send to NationBuilder	
	 * @return	string	JSON encoded response from NationBuilder
	 */
	public function match( $params ) {
		return $this->doRequest( 'GET', 'match?' . http_build_query($params) );
	}

	/**
	 * Submit a search request to the current end point
	 *
	 * @param	array	$params		An array of the request to send to NationBuilder	
	 * @return	string	JSON encoded response from NationBuilder
	 */
	public function search( $params ) {
		return $this->doRequest( 'GET', 'search?' . http_build_query($params) );
	}

	/**
	 * Submit a push request to the current end point
	 *
	 * @return	array	A HTTP header array
	 */
	public function setHeader() {
		return array(
		    'Authorization' => $this->token,
		    'Content-Type' => 'application/json', 
		    'Accept' => 'application/json'
	    );
	}

	/**
	 * Handle the actual request to the NationBuilder API
	 *
	 * @param	string	$httpMethod		The HTTP method to use for the request (PULL, GET, etc)
	 * @param	string	$endpointMethod	The method to use at the end point (push, match, create)
	 * @param	array	$params			The parameters to use in the request		
	 * @return	string	JSON encoded response from NationBuilder
	 */
	public function doRequest( $httpMethod = 'GET', $endpointMethod = null, $params = null ) {
		$this->setToken();

		$slug = 'https://'. $this->siteSlug . '.nationbuilder.com/api/v1/';

		if( strlen( $this->subNation ) > 0 && $this->type != "people" ) {
			$slug .= 'sites/' . $this->subNation . '/';
		}
		
		//echo $slug . $this->type . '/' .  $endpointMethod;
		//return array('slug' => $slug . $this->type . '/' .  $endpointMethod, 'params' => $params);

		return $this->fetch( $slug . $this->type . '/' .  $endpointMethod, $params, $httpMethod, $this->setHeader() );
	}

	/**
	 * Get the current token
	 *
	 * @return	string	Current set token
	 */
	private function getToken() {
		return $this->token;
	}

	/**
	 * Set the current token
	 *
	 * @return	void
	 */
	private function setToken() {
		// Set the token in the OAuth2 Client
		$this->setAccessToken( $this->token );

		// Set the token type in the OAuth2 Client
		$this->setAccessTokenType(1);
	}

	/**
	 * Attempt to get an authorization token
	 *
	 * @return	array	An array containing a code and a message	
	 */
	private function getAuthorizationToken() {
		// We have a code, so generate the parameters we need to get an access token
		$params = array('code' => $this->code, 'redirect_uri' => $this->redirectURI);					

		// Obtain our access token
		$response = $this->getAccessToken('https://' . $this->siteSlug . '.nationbuilder.com/oauth/token', 'authorization_code', $params);

		// See if we got a valid token back or an error
		if (isset($response['result']['error'])) {
			switch($response['result']['error']) {
				case 'invalid_grant':
					$result = array(
						'result' => array(
							'code' => 4,
							'message' => 'ERROR: Invalid Grant. This code is invalid, expired, or revoked.',
						)
					);

					break;
 			default:
					$result = array(
						'result' => array(
							'code' => 4,
							'message' => 'ERROR: ' . $response['result']['error'] . " - " . $response['result']['error_description'],
						)
					);
				break;
			}

			// Output the error result
			return $result;
		}

		// Parse out the token from the response 
		$this->token = $response['result']['access_token'];

		// Generate an array to return to the main script
		return array(
			'result' => array(
				'code' => 5,
				'token' => $this->token,
			)
		);
	}

	/**
	 * Generate authorization URL
	 *
	 * @return	array	An array containing a code and the authorization URL	
	 */
	private function generateCode() {
		// Generate the URL we need to go to get the token
		$auth_url = $this->getAuthenticationUrl('https://' . $this->siteSlug . '.nationbuilder.com/oauth/authorize', $this->redirectURI);

		// Generate an array to return to the main script
		return array(
			'result' => array(
				'code' => 2,
				'redirect_url' => $auth_url,
			)
		);
	}
}

class Nation extends NationbuilderAPI {
	public function __construct($siteSlug, $id, $secret, $subNation = null, $redirectURI = null, $token = null, $code = null) {
		parent::__construct($siteSlug, $id, $secret, $subNation, $redirectURI, $token, $code);
	}

	public function getSites() {
		$this->setEndpoint('sites');

		return $this->doRequest( 'GET' );
	}

	public function getContactTypes() {
		$this->setEndpoint('settings');

		return $this->doRequest( 'GET', "contact_types ");
	}

	public function getContactMethods() {
		$this->setEndpoint('settings');

		return $this->doRequest( 'GET', "contact_methods ");
	}

	public function getContactStatuses() {
		$this->setEndpoint('settings');

		return $this->doRequest( 'GET', "contact_statuses ");
	}
}


class People extends NationbuilderAPI {
	public function __construct($siteSlug, $id, $secret, $subNation = null, $redirectURI = null, $token = null, $code = null) {
		parent::__construct($siteSlug, $id, $secret, null, $redirectURI, $token, $code, 'people');
	}

	public function create($params) {
		return $this->push($params);
	}

	public function me() {
		return $this->doRequest( 'GET', 'me' );
	}
}

class BasicPages extends NationbuilderAPI {
	public function __construct($siteSlug, $id, $secret, $redirectURI = null, $token = null, $code = null) {
		parent::__construct($siteSlug, $id, $secret, $redirectURI, $token, $code, 'pages');
	}

	public function create($params) {
		return $this->doRequest( 'POST', 'basic_pages', json_encode( $params) );	
	}

	public function delete($params) {
		return $this->doRequest( 'DELETE', 'basic_pages/' . $params);
	}
}

class Blogs extends NationBuilderAPI {
	public function __construct($siteSlug, $id, $secret, $subNation = null, $redirectURI = null, $token = null, $code = null) {

		parent::__construct($siteSlug, $id, $secret, $subNation, $redirectURI, $token, $code, 'pages');
	}

	public function index() {
		return $this->doRequest( 'GET', 'blogs' );
	}
}

?>