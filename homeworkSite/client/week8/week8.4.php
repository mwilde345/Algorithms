<div class="panel panel-info">
  <h3 class="panel-heading">4. Generate a random permutation of 100 things and find its rank. (We can never print the whole list yet you can figure out where this permutation would be if we could).</h3>
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
