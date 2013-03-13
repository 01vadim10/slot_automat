<?
class ModuleUser{
	/**
	 * @var gameServerClient
	 */
	private   $_client;
	/**
	 * @var ItemUser
	 */
	private   $_user = null;
	
	public function __construct(gameServerClient $client)
	{
		$this->_client = $client;
	}
	
	public function authorize($params)
	{
		if($this->_user === null)
			$this->_user = new ItemUser($params['sid']);

		return $this->_user->check_auth();
	}
	
	/**
	 * @return ItemUser
	 */
	public function getAPI()
	{
		return $this->_user;
	}
	
}