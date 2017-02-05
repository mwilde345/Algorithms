<div class="panel panel-info">
  <h3 class="panel-heading">1. Using the (slow) algorithm you wrote in class to compute these numbers and time how long it takes:
123456789^123456789
123456789^1234567890
123456789^12345678901
   Mod 987654321.
</h3>
  <div class="panel-body">
    <pre><code>
      //the slow algorithm choked on the last number, so i did this with BigInts.
      //the slow algorithm uses erotosthene's sieve

      BigInteger a = new BigInteger("123456789");
      //add 0 and 1 on at the end for iterations
      BigInteger b = new BigInteger("123456789");
      BigInteger m = new BigInteger("987654321");
      long start = System.nanoTime();
      BigInteger result = a.modPow(b, m);
      System.out.println(result.toString());
      System.out.println("Program 1 took "+(System.nanoTime()-start)+" nanoseconds.");
    </pre></code>
    <pre><code>
      598987215
      Program 1 took 938667 nanoseconds.

      286378533
      Program 1 took 779778 nanoseconds.

      454438017
      Program 1 took 793467 nanoseconds.
    </pre></code>
  </div>
</div>
