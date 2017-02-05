<div class="panel panel-info">
  <h3 class="panel-heading">5.  Verify that Euler’s theorem works for Z12*, Z15* and Z20*.
</h3>
  <div class="panel-body">
    <pre><code>
      public void checkEulers(){
    	  groupOfUnits gou = new groupOfUnits();
    	  int[] input = {12,15,20};
    	  for(int i : input){
    		  ArrayList<String> output = new ArrayList<String>();
    		  output.add("Group Of Units Mod "+i+": \n");
    		  output.add("Element\tElement^Phi("+i+")%"+i+"\n");
    		  ArrayList<Integer> groupUnits = gou.getGroupOfUnits(i);
    		  for(int g: groupUnits){
    			  output.add(g+"\t\t"+Math.pow(g, groupUnits.size())%i+"\n");
    		  }
    		  System.out.println(output.toString());
    	  }
      }
    </pre></code>
    <pre><code>
      [Group Of Units Mod 12:
      , Element	Element^Phi(12)%12
      , 1			1.0
      , 5			1.0
      , 7			1.0
      , 11		1.0
      ]
      [Group Of Units Mod 15:
      , Element	Element^Phi(15)%15
      , 1			1.0
      , 2			1.0
      , 4			1.0
      , 7			1.0
      , 8			1.0
      , 11		1.0
      , 13		1.0
      , 14		1.0
      ]
      [Group Of Units Mod 20:
      , Element	Element^Phi(20)%20
      , 1			1.0
      , 3			1.0
      , 7			1.0
      , 9			1.0
      , 11		1.0
      , 13		1.0
      , 17		1.0
      , 19		1.0
      ]
    </pre></code>
  </div>
</div>
