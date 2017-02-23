<div class="panel panel-info">
  <h3 class="panel-heading">4. Write a method called “plainTextToStringBlocks” which takes an ArrayList of BigIntegers and converts it to an ArrayList of String blocks of length 200.
</h3>
  <div class="panel-body">
    <pre><code>
      public ArrayList<String> plainTextToStringBlocks(ArrayList<BigInteger> input) {
        ArrayList<String> result = new ArrayList<String>();
        int increment = 3;
        for (BigInteger b : input) {
          BigInteger temp = b;
          String output = "";
          while (increment <= temp.toString().length()) {
            BigInteger segment = b.mod(BigInteger.valueOf(10)
                .pow(increment));
            int digits = Integer.parseInt(segment.toString()
                .substring(0, 3));
            b = b.subtract(segment);
            char c = unPaddedAscii(digits);
            output = c + output;
            increment += 3;
          }
          result.add(output);
          increment = 3;
        }
        return result;
      }

    </pre></code>
  </div>
</div>
