<div class="panel panel-info">
  <h3 class="panel-heading">1.  Add a function to our groupOfUnits program that computes the inverse of an element in the group of units mod n.

</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./week3pics/Inverses.PNG"/>
    </div>
    <pre><code>
      public static ArrayList<Integer> getInverses(ArrayList<Integer> set, int mod){
        ArrayList<Integer> inverses = new ArrayList<Integer>();
        for(int i: set){
          int iOrder = order(i,mod);
          inverses.add((int)Math.pow(i,iOrder-1)%mod);
        }
        return inverses;
      }
    </pre></code>
  </div>
</div>
