<?php
declare(strict_types=1);

namespace Yalanskiy\SimpleStat;

use Yalanskiy\SimpleStat\Exceptions\InvalidDataException;

/**
 * Stat class
 */
class Stat {
	private array $data;
	
	/**
	 * Create Stat object with data array
	 *
	 * @param array $data
	 */
	public function __construct(array $data)
	{
		if (count($data) === 0) {
			throw new InvalidDataException("Input array is empty.");
		}
		
		foreach ($data as $item) {
			if (!is_numeric($item)) {
				throw new InvalidDataException("Not all array elements is numbers.");
			}
		}
		
		$this->data = $data;
	}
	
	/**
	 * Return count of input data
	 *
	 * @return int Count of data
	 */
	public function count(): int
	{
		return count($this->data);
	}
	
	/**
	 * Return sum of data
	 *
	 * @return float Sum of data
	 */
	public function summ(): float
	{
		return array_sum($this->data);
	}
	
	/**
	 * Calculate Arithmetic Mean
	 *
	 * @return float Arithmetic Mean
	 */
	public function arithmeticMean(): float
	{
		return $this->summ() / $this->count();
	}
	
	/**
	 * Calculate Geometric Mean
	 *
	 * @return float Geometric Mean
	 */
	public function geometricMean(): float
	{
		return pow(array_product($this->data), 1 / $this->count());
	}
	
	/**
	 * Calculate Median
	 *
	 * @return float Median
	 */
	public function median(): float
	{
		$sorted = $this->data;
		sort($sorted);
		$count = count($sorted);
		
		$index = floor($count / 2);
		
		if ($count & 1) {
			return $sorted[$index];
		}
		else {
			return ($sorted[$index - 1] + $sorted[$index]) / 2;
		}
	}
	
	/**
	 * Calculate Mode
	 *
	 * @return float Mode
	 */
	public function mode(): float
	{
		$data = array_map(function ($item) {
			return (string)$item;
		}, $this->data);
		$values = array_count_values($data);
		
		$max = max($values);
		$out = array_search($max, $values);
		
		return (float)$out;
	}
}