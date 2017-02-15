<div class="panel panel-info">
  <h3 class="panel-heading">6. Fermat's Theorem is a primality test: let n = 943 and a = 767.  If 943 were prime then 767^942 should be congruent to 1 mod 943.  Show that it is not.
</h3>
  <div class="panel-body">
    <div>
      <img id="hwImage" src="./week3pics/Week3.6.PNG"/>
    </div>
    <pre><code>
      System.out.println(Math.pow(767, 942)%943);
    </pre></code>
  </div>
</div>
