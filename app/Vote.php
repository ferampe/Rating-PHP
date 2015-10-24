<?php
namespace Ferampe;

class Vote{


	private $average = 0;

	public function calcVote($json, $star)
	{
		$json = json_decode($json, true);

		$json['stars'][0][$star] = (int)$json['stars'][0][$star] + 1;

		$sumNumberOfVotesForStar = 0;
		$sumMultiplicateOfVotesForStar = 0;

		foreach ($json['stars'][0] as $key => $value) {
			$sumNumberOfVotesForStar = $sumNumberOfVotesForStar + $value;
			$sumMultiplicateOfVotesForStar = $sumMultiplicateOfVotesForStar + ($key * $value);
		}

		$this->average = round($sumMultiplicateOfVotesForStar / $sumNumberOfVotesForStar);
		$json['average'] = $this->average;

		return json_encode($json);
	}

	public function getAverage()
	{
		return $this->average;
	}

	public function getStarHtml($average = 0)
	{
		$average = ($average > 0 ? $average : $this->average);

		$htmlStar = null;

		for($i = 1; $i <= 5; $i++)
		{
			if($i <= $average)
			{
				$htmlStar .= '<a href=""><i class="fa fa-star"></i></a>'; 
			}else{
				$htmlStar .= '<a href=""><i class="fa fa-star-o"></i></a>'; 
			}
		}

		return '<div class="card-row-rating">'.$htmlStar.'</div>';

	}
	
}