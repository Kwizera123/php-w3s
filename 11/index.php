<?php 

namespace myArea;
function myValue1(){
  return __NAMESPACE__;
}
?>

<?php
echo "<h2>The __NAMESPACE__ Constant</h2>
<p>This constant returns the name of the namespace:</p>";

echo myValue1(); // outputs myarea
echo "<hr>";
?>

<?php 
namespace myArea2;
 class Fruits {
  public function myValue2(){
    return Fruits::class;
  }
 }
 echo "<h2>The ClassName::class Constant</h2>
<p>This constant returns the class name and name of the namespace (if any):</p>";

$kiwi = new Fruits();
echo $kiwi->myValue2(); // outputs myArea2\Fruits 
echo "<hr>";