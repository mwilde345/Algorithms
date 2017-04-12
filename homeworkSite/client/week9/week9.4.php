<div class="panel panel-info">
  <h3 class="panel-heading">4. Find a Huffman encoding for compressing the data file with the symbol frequencies given in class.  Compute the compression ratio over using ascii encoding.</h3>
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
