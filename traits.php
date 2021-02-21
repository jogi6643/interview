<?php
/*what is trait
1.follow the horizontal Inheritence
2.We want to use any classes on the basis of requirement
*/
	class abc{
		public function test1()
		{
			echo "Call Test 1 Function";
		}
	}

	trait xyz{
		public function test2()
		{
			echo "xyz in call test2 Function";
		}
	}
	class one extends abc{
      use xyz;
	}
	class two extends abc{

	}
	class three extends abc{

	}
	class four extends abc{

	}
	class five extends abc{
     use xyz;
	}

	$one = new one();
	$one->test1();
	$five = new five();
	$five->test2();
?>

