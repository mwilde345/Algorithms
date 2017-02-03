package GroupOfUnits;
import java.util.*;
import Subsets.subsets;
import ModularExp.modularexp;
import java.lang.*;

public class helperClass{
  public static void main(String [] args){
    helperClass hc = new helperClass();
    subsets s = new subsets();
    //hc.findOrders(args);
    //hc.findPhi();
    //s.findSubsets(5);
    //hc.PandQ(new int[] {2,3,5,7,11,13,17,19,23,29});
    //hc.checkFermats();
    //hc.checkEulers();
    //System.out.println(Math.pow(767, 942)%943);
    //hc.checkPrimes();
    hc.fermatRatio();
  }
  
  public void checkPrimes(){
	  int nonPrimes = 0;
	  for(int i = 2; i<=1000; i++){
		  int primeCheck = (int)Math.pow(2,(i-1))%i;
		  nonPrimes+=primeCheck==1?0:1;
	  }
	  System.out.println("Non-primes from 2 -> 1000: "+nonPrimes);
  }
  
  public void fermatRatio(){
	  modularexp me = new modularexp();
	  for(int i = 5; i<1000; i++){
		  double passFermat = 0;
		  for(int g = 1; g<i; g++){
			  if(me.modexp(g, i-1, i)==1){
				  ++passFermat; 
			  }
		  }
		  if(passFermat/(i-1)==1){
			  System.out.println(i);
		  }
		  if(passFermat/(i-1)<=(1.0/2.0)){
			  System.out.println("Composite: "+i);
		  }
		  if((passFermat/(i-1)>(1.0/2.0))&&passFermat/(i-1)<1.0){
			  System.out.println("SPECIAL CASE: "+i);
		  }
		  
	  }
	  
  }
  
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
	  for(int i = indexElement; i<inputArray.length; i++){
		  for(int j = (i+1); j<inputArray.length; j++){
			  int[] combo = new int[2];
			  combo[0] = inputArray[i];
			  combo[1] = inputArray[j];
			  combos.add(combo);			  
		  }
	  }
	  return combos;
  }
  
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
}
