<div class="panel panel-info">
  <h3 class="panel-heading">1. Write a method called “encrypt” that takes an ArrayList of BigIntegers and encrypts each block using the public key you generated in week 5 ex. 8.  The result is the ciphertext for the file.

</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./week6pics/week6.1.PNG"/>
    </div>
    <pre><code>
      public ArrayList<BigInteger> encrypt(ArrayList<BigInteger> input,
          BigInteger e, BigInteger n) {
        ArrayList<BigInteger> result = new ArrayList<BigInteger>();
        for (BigInteger i : input) {
          result.add(i.modPow(e, n));
        }
        return result;
      }
    </pre></code>
  </div>
</div>
