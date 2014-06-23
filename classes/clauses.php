<?
class Clause{
	public $clauseList = array(1=>array(
									'operators'=>'random',
									'conditions'=>'length > 10',
									'result'=>'Question',
									'weight'=>1),
								2=> array(
									'operators'=>'random',
									'conditions'=>'contain = ?',
									'result'=>'Question',
									'weight'=>100),

								);
	public function __construct($factor){

	}
}
?>