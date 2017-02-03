package GroupOfUnits;
import java.util.*;
import Subsets.subsets;

public class helperClass{
  public static void main(String [] args){
    helperClass hc = new helperClass();
    subsets s = new subsets();
    //hc.findOrders(args);
    //hc.findPhi();
    s.findSubsets(5);


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
