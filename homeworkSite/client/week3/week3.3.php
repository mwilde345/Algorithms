<div class="panel panel-info">
  <h3 class="panel-heading">3. For all primes p,q = 2,3,5,7,11,13,17,19,23 and 29 verify that phi(p) = p-1, (there are 10 cases).
and phi(pq) = (p-1)*(q-1) (there are 45 cases), p and q different.

</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./week3pics/Week3.3.PNG"/>
    </div>
    <pre><code>
      public void findPhi(){
        int[] input = {2,3,5,7,11,13,17,19,23,29};
        groupOfUnits gou = new groupOfUnits();
        ArrayList<Integer> inputList = new ArrayList<Integer>();
        ArrayList<Integer> output = new ArrayList<Integer>();
        for(int i: input){
          inputList.add(i);
          ArrayList<Integer> groupUnits = gou.getGroupOfUnits(i);
          output.add(groupUnits.size());
        }
        System.out.println("Input numbers: "+inputList.toString());
        System.out.println("PHI of each number: "+output.toString());
      }

      public void PandQ(int[] inputArray){
        ArrayList<int[]> coms = combinations(inputArray);
        ArrayList<String> output = new ArrayList<String>();
        groupOfUnits gou = new groupOfUnits();
        for(int[] a : coms){
          int n = a[0]*a[1];
          int phi = gou.getGroupOfUnits(n).size();
          int m = (a[0]-1)*(a[1]-1);
          output.add("Phi("+a[0]+"*"+a[1]+") = Phi("+n+") = "+phi+" = ("+(a[0]-1)+
              "*"+(a[1]-1)+") = "+m+"\n");
        }
        System.out.println(output.toString());
        System.out.println("Iterations: "+output.size());
      }

      public ArrayList<int[]> combinations(int[] inputArray){
        ArrayList<int[]> combos = new ArrayList<int[]>();
        int indexElement = 0;
        for(int i = indexElement; i&ltinputArray.length; i++){
          for(int j = (i+1); j&ltinputArray.length; j++){
            int[] combo = new int[2];
            combo[0] = inputArray[i];
            combo[1] = inputArray[j];
            combos.add(combo);
          }
        }
        return combos;
      }
    </pre></code>
    <pre><code>
      [Phi(2*3) = Phi(6) = 2 = (1*2) = 2
      , Phi(2*5) = Phi(10) = 4 = (1*4) = 4
      , Phi(2*7) = Phi(14) = 6 = (1*6) = 6
      , Phi(2*11) = Phi(22) = 10 = (1*10) = 10
      , Phi(2*13) = Phi(26) = 12 = (1*12) = 12
      , Phi(2*17) = Phi(34) = 16 = (1*16) = 16
      , Phi(2*19) = Phi(38) = 18 = (1*18) = 18
      , Phi(2*23) = Phi(46) = 22 = (1*22) = 22
      , Phi(2*29) = Phi(58) = 28 = (1*28) = 28
      , Phi(3*5) = Phi(15) = 8 = (2*4) = 8
      , Phi(3*7) = Phi(21) = 12 = (2*6) = 12
      , Phi(3*11) = Phi(33) = 20 = (2*10) = 20
      , Phi(3*13) = Phi(39) = 24 = (2*12) = 24
      , Phi(3*17) = Phi(51) = 32 = (2*16) = 32
      , Phi(3*19) = Phi(57) = 36 = (2*18) = 36
      , Phi(3*23) = Phi(69) = 44 = (2*22) = 44
      , Phi(3*29) = Phi(87) = 56 = (2*28) = 56
      , Phi(5*7) = Phi(35) = 24 = (4*6) = 24
      , Phi(5*11) = Phi(55) = 40 = (4*10) = 40
      , Phi(5*13) = Phi(65) = 48 = (4*12) = 48
      , Phi(5*17) = Phi(85) = 64 = (4*16) = 64
      , Phi(5*19) = Phi(95) = 72 = (4*18) = 72
      , Phi(5*23) = Phi(115) = 88 = (4*22) = 88
      , Phi(5*29) = Phi(145) = 112 = (4*28) = 112
      , Phi(7*11) = Phi(77) = 60 = (6*10) = 60
      , Phi(7*13) = Phi(91) = 72 = (6*12) = 72
      , Phi(7*17) = Phi(119) = 96 = (6*16) = 96
      , Phi(7*19) = Phi(133) = 108 = (6*18) = 108
      , Phi(7*23) = Phi(161) = 132 = (6*22) = 132
      , Phi(7*29) = Phi(203) = 168 = (6*28) = 168
      , Phi(11*13) = Phi(143) = 120 = (10*12) = 120
      , Phi(11*17) = Phi(187) = 160 = (10*16) = 160
      , Phi(11*19) = Phi(209) = 180 = (10*18) = 180
      , Phi(11*23) = Phi(253) = 220 = (10*22) = 220
      , Phi(11*29) = Phi(319) = 280 = (10*28) = 280
      , Phi(13*17) = Phi(221) = 192 = (12*16) = 192
      , Phi(13*19) = Phi(247) = 216 = (12*18) = 216
      , Phi(13*23) = Phi(299) = 264 = (12*22) = 264
      , Phi(13*29) = Phi(377) = 336 = (12*28) = 336
      , Phi(17*19) = Phi(323) = 288 = (16*18) = 288
      , Phi(17*23) = Phi(391) = 352 = (16*22) = 352
      , Phi(17*29) = Phi(493) = 448 = (16*28) = 448
      , Phi(19*23) = Phi(437) = 396 = (18*22) = 396
      , Phi(19*29) = Phi(551) = 504 = (18*28) = 504
      , Phi(23*29) = Phi(667) = 616 = (22*28) = 616
      ]
      Iterations: 45      
    </pre></code>


  </div>
</div>
