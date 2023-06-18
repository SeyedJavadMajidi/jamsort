Hello every one 😊
In this project, I've implemented the design pattern of strategy so you can sort the arrays in different ways 😎
You can use it as follows:

```php
use App\JSort\JSort;require_once "JSort.php";
require_once "QuickSort.php";
$x = [12,34,12,2,43,65,21,3,2,5,1,4,3];

$j = new jsort(new quick_sort());
print_r($j->jsort($x));
```

**At this momet following algorithms are supported:**

1.  Quick Sort
2.  Merge Sort
3. Heap Sort

Please have a look at this code and help me to develope this class.
Thanks😍<br>
Seyed Javad Majidi<br>
Website full stack developer

[Please visit my website](https://softjam.ir)