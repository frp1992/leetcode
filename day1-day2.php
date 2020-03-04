<?php

class LeetCode {

    /**
     * @26删除有序数组中的重复项
     * ---------------------
     * [0,0,1,1,1,2,2,3,3,4]
     * 双指针，慢指针j=0 ，快指针 i=1 ，遍历快指针
     * j-val = i-val  , i++
     * j-val != i-val , j+1 -val = i-val ,i++ ,j++
     */
    function deleteRepeat( &$nums ) {
        $len = count( $nums );
        if ( $len == 0 ) {
            return 0;
        }
        $j = 0;
        for ( $i = 1 ; $i < $len ; $i ++ ) { 
            
            if( $nums[$i] != $nums[$j] ) {
                $nums[$j+1] = $nums[$i];
                $j++;
            }
            //echo 'j:'.$j.'-';echo 'i:'.$i.'<br>';
            //echo implode('--', $nums).'<br>';
        }
        
        return $j+1;
    }

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     * 189旋转数组：给定一个数组，将数组中的元素向右移动 k 个位置，其中 k 是非负数
     * 输入: [1,2,3,4,5,6,7] 和 k = 3
        输出: [5,6,7,1,2,3,4]
     */
    function rotate( &$nums , $k ) {

        $len = count( $nums );
        if( $k > $len ) {
            $k = $k - $len ;
        }
        $t = $len - $k ;

        for( $i = 0 ; $i < $t ; $i ++ ) {
            $tmp = $nums[$i];
            unset( $nums[$i] );
            $nums[] = $tmp;
            //echo implode('--', $nums).'<br>';
        }
    }


}
$code = new LeetCode;
$day1 = [0,0,1,1,1,2,2,3,3,4];
$code->deleteRepeat( $day1 );
var_dump(implode('--', $day1));

$day2 = [1,2,3,4,5,6,7];
$code->rotate( $day2 , 3 );
var_dump(implode('--', $day2));
?>


