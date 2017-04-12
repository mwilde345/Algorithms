<div class="panel panel-info">
  <h3 class="panel-heading">2. Code the Ranking algorithm.  Verify your answer to #1.
</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./week7pics/Week7.2.PNG"/>
    </div>
    <pre><code>
      public class Rank {
	public static void main(String[] args){
		Rank r = new Rank();
		r.getRank(new Integer[] {3,1,4,2,7,6,5});
		//week 7.3 86*99! + 44*98! + 10*97! = 8.07 * 10 ^ 157
	}

	public void getRank(Integer[] input) {
		ArrayList<BigInteger> sorted = new ArrayList<BigInteger>(input.length);
		for(int i : input) sorted.add(BigInteger.valueOf(i));
		Collections.sort(sorted);
		BigInteger count = BigInteger.valueOf(input.length);
		BigInteger rank = BigInteger.ZERO;
		for(int i : input){
			count = count.subtract(BigInteger.ONE);
			BigInteger currentFactorial = factorial(count);
			rank = rank.add(BigInteger.valueOf(sorted.indexOf(BigInteger.valueOf(i))).multiply(currentFactorial));
			sorted.remove(sorted.indexOf(BigInteger.valueOf(i)));			
		}
		System.out.println(rank);
	}
	
	private BigInteger factorial(BigInteger input){
		BigInteger result = BigInteger.ONE;
		for(BigInteger i = BigInteger.ONE; i.compareTo(input)&lt=0; i = i.add(BigInteger.ONE)){
			result = result.multiply(i);
		}
		return result;
	}
}
    </pre></code>
  </div>
</div>
