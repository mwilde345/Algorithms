<div class="panel panel-info">
  <h3 class="panel-heading">4. Suppose you counted the number of operations required for your algorithm and got 76n^3, where n is the size of the input.  If the time it takes on your laptop is T, how long will it take if you double the size of the input?  Based on this, what can you say about the complexity class of your algorithm? (The result will be the same no matter what machine you use). Repeat the above if the number of operations required for your algorithm is 2^n.</h3>
  <div class="panel-body">
	<div>
      <img id="hwImage" src="./week8pics/Week8.4.PNG"/>
    </div>
    <pre><code>
     public static void main(String[] args){
		RandomPermutation rp = new RandomPermutation();
		Rank r = new Rank();
		ArrayList<Integer> ranPerm = rp.getPermutation(100);
		System.out.println(ranPerm.toString());
		r.getRank(ranPerm.toArray(new Integer[ranPerm.size()]));
	}
    </pre></code>
  </div>
</div>
