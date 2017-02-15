<div class="panel panel-info">
  <h3 class="panel-heading">4. Verify that Fermat’s theorem works for all the elements of Z7*, Z11* and Z13*.
</h3>
  <div class="panel-body">
    <pre><code>
      public void checkFermats(){
        groupOfUnits gou = new groupOfUnits();
        int[] input = {7,11,13};
        for(int i : input){
          ArrayList<String> output = new ArrayList<String>();
          output.add("Group Of Units Mod "+i+": \n");
          output.add("Element\tElement^"+(i-1)+"%"+i+"\n");
          ArrayList<Integer> groupUnits = gou.getGroupOfUnits(i);
          for(int g: groupUnits){
            output.add(g+"\t\t"+Math.pow(g, i-1)%i+"\n");
          }
          System.out.println(output.toString());
        }
      }
    </pre></code>
    <pre><code>
      [Group Of Units Mod 7:
      , Element	Element^6%7
      , 1		     1.0
      , 2		     1.0
      , 3		     1.0
      , 4		     1.0
      , 5		     1.0
      , 6		     1.0
      ]
      [Group Of Units Mod 11:
      , Element	Element^10%11
      , 1		     1.0
      , 2		     1.0
      , 3		     1.0
      , 4		     1.0
      , 5		     1.0
      , 6		     1.0
      , 7		     1.0
      , 8		     1.0
      , 9		     1.0
      , 10		   1.0
      ]
      [Group Of Units Mod 13:
      , Element	Element^12%13
      , 1	    	1.0
      , 2		    1.0
      , 3		    1.0
      , 4		    1.0
      , 5		    1.0
      , 6		    1.0
      , 7		    1.0
      , 8		    1.0
      , 9		    1.0
      , 10		  1.0
      , 11		  1.0
      , 12		  1.0
      ]
    </pre></code>
  </div>
</div>
