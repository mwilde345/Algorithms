<div class="panel panel-info">
  <h3 class="panel-heading">8. Simulate the Rabin-Miller process as follows:
Generate a random BigInteger n with approx. 1024 bits for the modulus.  This is the number we are testing for primality.  If n is even add 1 to it (why?).
Test n using a fast psuedoprime test.  If it fails, n is composite.  Add 2 and repeat.  Repeat step B until n passes the psuedoprime test.
At this point, n is a good candidate for being prime.  It's time to apply stronger test.  Generate a random BigInteger a with approx. 1024 bits for the base.
Make sure it is less than n.
Verify a is coprime to n.  If not, n is composite.
Repeat this process (selecting new a’s every time) until n passes the test 100 times in succession.  The n you now have is very probably prime.

</h3>
  <div class="panel-body">
    <pre><code>
      public void RabinMillerTest(){
        //Generate a random BigInteger n with approx. 1024 bits for the modulus.
    	  this.n = randomInteger(1024);

    	  BigInteger two = new BigInteger("2");

        //If n is even add 1 to it (why?).
    	  //we know if it is even that it's not prime. we want prime
    	  if(this.n.getLowestSetBit()!=0) n = n.add(BigInteger.ONE);

        //Test n using a fast psuedoprime test.  If it fails, n is composite.  Add 2 and repeat.
    	  while(!two.modPow(n.subtract(BigInteger.ONE), n).equals(BigInteger.ONE)){
    		  n = n.add(two);
    	  }
    	  int counter = 0;

    	  while(counter&lt100){
          //Generate a random BigInteger a with approx. 1024 bits for the base.
    		  this.a = randomInteger(1024);

          //Make sure it is less than n.
    		  while(a.compareTo(n)>=0){
    			  a= randomInteger(1024);
    		  }

          //Verify a is coprime to n.
    		  if(gcd(a,n).equals(BigInteger.ONE)){
    			  counter++;
    		  }else{
            //If not, n is composite.
    			  System.out.println(counter);
    			  break;
    		  }
    	  }

        //Repeat this process (selecting new a’s every time) until n passes the test 100 times in succession.
    	  if(counter!=100){
    		  RabinMillerTest();
    	  }else{
    		  System.out.println("Found a likely prime n: \n"+n.toString());
    	  }

      }
    </pre></code>
    <pre><code>
      Found a likely prime n:
      246201415804565330443937544660343282751582973399267584644956897811051562519983462683098894095381490834548633414141346020228959095643030913764112645884988594329627697756728369295915467229117701791990177670195842461509492757048449223627443632783285783222641079739807624436050122418501700577975595869411662872828326092128627274438036804707651651057519225955736351920259774355981054235357137320543946768665637907278260265453943298626325056163486916754129162758610442333405768361094360153825839513724008179497862521825947974833692161211189722527918593593596355927109808994777042320046541844373559503255507595159664350089861315608380304641756050617805651390674717624820657250725691455442541311705808106223898774321721440654066203921340716790214130937581479465467759107074926352927713996950062647748642236691728277914643588165655324421480617649995411487091320976775702248864603032502509583565353941175879142676374635508176009449135657627399123986184839124999954012050207487772744762537937573783597216209073291292980050179148358493
    </pre></code>
  </div>
</div>
