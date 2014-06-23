<?
class Thought {
	private $_weight;
	private $_text;
	private $_type;
	public $_question;
	public $_answer;
	public $_activeAssumption;
	public $_assumptionCount = 0;
	public $_possibleAnswer = 0 ;
	public function __construct($text){
		$this->_text = $text;
		$this->_type = $this->_parseText();
	}

	public function _parseText(){
		//let's say that this is either a question or an answer
		// we can create a random assumption that it would or would not be (defined by a random number generator)
		$randomFactor = rand(0,1000);
		$this->_assume($randomFactor);
		return $this->_activeAssumption->result;
	}

	private function _assume($factor = 0){
		$this->_assumptionCount++;
		$this->_activeAssumption = new Assumption($this->_text);
		//the assumption would parse the text with one of the random (unused) clauses 
		//then validate the claim, that the text is either a question or a statement
		//the number of iterations is determined by the weight algorithm per clause versus the weight of the thought
		//the result would then fall into either array (of assumptions that it is or is not a question)
		//when the clauses are finished, or the iterations are determined, the algorithm will parse the results for both arrays
		//then create a new thought pattern for answering
		//The new thought will generate recursive q/a thoughts, determined on the weight
	}
	public function ask(){
		$this->_question = new Question($this->_text);
	}
	public function answer(){
		$answer = new Answer($this->question);
	}
	//minimize assumptions
}
?>