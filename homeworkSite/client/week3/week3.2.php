<div class="panel panel-info">
  <h3 class="panel-heading">2. Find the order of all elements in the group of units mod 7, 11, 15 and 24.  Use your answers to find the inverses of each element.
</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./week3pics/Week3.2.PNG"/>
    </div>
    <pre><code>
      public void findOrders(String[] args){
        groupOfUnits gou = new groupOfUnits();
        for(String s: args){
         int i = Integer.parseInt(s);
         ArrayList<Integer> groupUnits = gou.getGroupOfUnits(i);
         System.out.println("Group of units mod "+i+": "+groupUnits.toString());
         ArrayList<Integer> orders = new ArrayList<Integer>();
         for(int j : groupUnits){
           orders.add(gou.order(j,i));
         }
         System.out.println("Orders of elements mod "+i+": "+orders.toString());
         System.out.println("Inverses of elements mod "+i+": "+gou.getInverses(groupUnits,i).toString());
         System.out.println();
        }
      }
    </pre></code>
    <pre><code>
      Group of units mod 7: [1, 2, 3, 4, 5, 6]
      Orders of elements mod 7: [1, 3, 6, 3, 6, 2]
      Inverses of elements mod 7: [1, 4, 5, 2, 3, 6]

      Group of units mod 11: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
      Orders of elements mod 11: [1, 10, 5, 5, 5, 10, 10, 10, 5, 2]
      Inverses of elements mod 11: [1, 6, 4, 3, 9, 2, 8, 7, 5, 10]

      Group of units mod 15: [1, 2, 4, 7, 8, 11, 13, 14]
      Orders of elements mod 15: [1, 4, 2, 4, 4, 2, 4, 2]
      Inverses of elements mod 15: [1, 8, 4, 13, 2, 11, 7, 14]

      Group of units mod 24: [1, 5, 7, 11, 13, 17, 19, 23]
      Orders of elements mod 24: [1, 2, 2, 2, 2, 2, 2, 2]
      Inverses of elements mod 24: [1, 5, 7, 11, 13, 17, 19, 23]
    </pre></code>

  </div>
</div>
