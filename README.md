Hello every one 😊
In this project, I've implemented the design pattern of strategy so you can sort the arrays in different ways 😎
You can use it as follows:

```php
require_once "vendor\autoload.php";

use App\HeapSort\HeapSort;
use App\JSort\JSort;

$x = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 1032, 9, 8, 7, 6, 5, 4, 3, 2, 1, 45, 153];
$j = new JSort(new HeapSort());
echo implode("<br>", $j->jSortAZ($x));
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